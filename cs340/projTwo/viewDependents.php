<?php
	session_start();
	//$currentpage="View Employees"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company - Dependents</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
	<style type="text/css">
        .wrapper{
            width: 70%;
            margin:0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
		 $('.selectpicker').selectpicker();
    </script>
</head>
<body>
    <?php
        // Include config file
        require_once "config.php";
//		include "header.php";
        if(isset($_GET["Ssn"]) && !empty(trim($_GET["Ssn"]))){
            $_SESSION["Ssn"] = $_GET["Ssn"];
            $Ssn = $_GET["Ssn"];
        }
	?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Dependent Details</h2>
                        <a href="createDependent.php" class="btn btn-success pull-right">Add New Dependent</a>
                    </div>
                    <?php
                        echo "<h4>Employee with SSN ".$Ssn."<h4>";
                        $sql = "SELECT Dependent_name AS DN, Bdate, Sex, Relationship 
                        FROM DEPENDENT
                        WHERE Essn = $Ssn";

                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th width=20%>Dependents Name</th>";
                                        echo "<th width=10%>Birthdate </th>";
                                        echo "<th width = 5%>Sex</th>";
                                        echo "<th width=10%> Relationship  </th>";
                                        echo "<th width=5%>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['DN'] . "</td>";								
                                        echo "<td>" . $row['Bdate'] . "</td>";
                                        echo "<td>" . $row['Sex'] . "</td>";										
                                        echo "<td>" . $row['Relationship'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='updateDependent.php?Dname=". $row['DN'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='deleteDependent.php?Dname=". $row['DN'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                            echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No dependents were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. <br>" . mysqli_error($link);
                    }
					
                    // Close connection
                    mysqli_close($link);
                    ?>
                    <p><a href="index.php" class="btn btn-primary"> Back </a></p>
                </div>

</body>
</html>