#include <Servo.h>
Servo myservo; 			                          // create servo object to control a servo
const int buttonPin = 2;

int pos = 0;	 		                            // variable to store the servo position
int buttonState = 0;	                        // variable for reading the pushbutton status

void setup() {
	Serial.begin(9600);                         // attaches the servo on pin 8 to the servo object
	myservo.attach(8);                          // initialize the LED pin as an output:
	pinMode(buttonPin, INPUT);
}

void loop(){
	buttonState = digitalRead(buttonPin);
	int sensorValue = analogRead(A0);
	Serial.println(sensorValue);

	if(sensorValue>=1000){
 		for (pos = 0; pos <= 90; pos += 1) {       // goes from 0 degrees to 90 degrees
 			myservo.write(pos);                      // tell servo to go to position in variable 'pos'
 			delay(15);                               // waits 15ms for the servo to reach the position
 		}
 		delay(5000); // waits 5s for pass the car

 		for (pos = 90; pos >= 0; pos -= 1) {
 			myservo.write(pos);
 			delay(15);
 		}
 	}
	else if (buttonState == LOW) {              //When the button is pressed
 		for (pos = 0; pos <= 90; pos += 1) {
 			myservo.write(pos);
 			delay(15);
 		}
 		delay(5000);
 		for (pos = 90; pos >= 0; pos -= 1) {
 			myservo.write(pos);
 			delay(15);
 		}
	}
	delay(1000);
}
