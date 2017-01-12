/*
 * == tests to see if two variables are equal
 * they behave as you would expect for primitive types, but produce mixed results for objects
 * when objects are compared with ==, they are actually comparing their references,
 * not the values they contain; in the case of objects, we use the .equals() method for comparison
 */

int i = 42;
int j = 42;
i == j; //true, values equal
i = j; //this is not checking for equality; this is assigning the value of j to i

String a = "test";
String b = "test";
a == b; //true, in this case, both String actually have the same references
String c = new String("test");
a == c; //false, c is a different object with a different reference, though they hold the same value
a.equals(b); //true, the two have the same characters
//the point is that you should compare Strings with equals(); don't worry about references for now

/*
 * Be careful with the range of a given type
 * Inappropriate types lead to unexpected results
 */

8/10; // == 0, as integers always round down (floor)
(double) 8/10; // == 0.0, as casting to double occurs after division
((double) 8)/10; // == 0.8, which is what you probably want; 8 is casted into a double, then divided by 10