lab4.cpp                                                                                            0000660 0026523 0055634 00000001517 13650126040 012171  0                                                                                                    ustar   rollijac                        upg11603                                                                                                                                                                                                               #include <iostream>
#include "lab4.h"

using namespace std;

//Default Constructor
Hand::Hand(){
	cout << "Inside Hand Default Constructor." << endl;
	this->hand_size = 10;
	this->hand_array[] = hand_array[hand_size];
	
	int counter = 0;
	for(int i = 0; i < hand_size; i++){
		hand_array[i] = counter;
		counter++:
	}
}

//Copy Constructor
Hand::Hand(const Hand& h){
	cout << "Inside Hand Copy Constructor." << endl;
	this->hand_size = h.hand_size;
	this->hand_array[] = h.hand_array[hand_size];
}

//Assignment Operator Overload
Hand& Hand::operator=(const Hand& h){
	cout << "Inside Assignment Operator Overload." << endl;
	if(this != &h){
		delete [] hand_array;
		
		this->hand_size = h.hand_size;
		this->hand_array[] = h.hand_array[hand_size];
	}
}

//Destructor
Hand::~Hand(){
	cout << "Inside Destructor." << endl;
	delete[] hand_array;
}
                                                                                                                                                                                 lab4driver.cpp                                                                                      0000660 0026523 0055634 00000000600 13657055671 013417  0                                                                                                    ustar   rollijac                        upg11603                                                                                                                                                                                                               #include <iostream>
#include "lab4.h"

using namespace std;

int main(){
	Hand hand1;
	cout << "hand1: " << endl;
	hand1.print();
	
	Hand hand2 = hand1;
	cout << "hand2: " << endl;
	hand2.print();

	Hand hand3 = Hand(5);
	cout << "hand3: " << endl;
	hand3.print();

	hand1 = hand3;
	cout << "hand1: " << endl;
	hand1.print();

	cout << "hand2: " < endl;
	hand2.print();

	return 0;
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
