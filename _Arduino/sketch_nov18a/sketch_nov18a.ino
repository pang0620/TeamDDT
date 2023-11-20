const int ledPin = 13;
const int dustPin = 7;

void setup() {
  // LED pin is the output
  pinMode(ledPin, OUTPUT);
  pinMode(dustPin, INPUT);
  Serial.begin(9600);

}

void loop() {
  digitalWrite(ledPin,HIGH);
  delayMicroseconds(280);
  int dustVal = analogRead(dustPin);
  digitalWrite(ledPin,LOW);
  delayMicroseconds(40);
  dustVal += analogRead(dustPin);
  dustVal /= 2;

  float voltage = dustVal*(5.0 / 1024.0);
  float density = voltage / 0.1;

  //Serial.print("Raw Signal Value(0-1023):");
  //Serial.println(dustVal);
  //Serial.print(",Dust Density:");
  Serial.println(density);
  //Serial.println("ug/m3");

   delay(5000);

}
