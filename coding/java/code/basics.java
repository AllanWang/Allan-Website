public class Basics { //this is a class; the name should match the name of your file (Basics.java in this case)

    /*
     * As the name implies, this is your main method.
     * It will always start with 'public static void main(String[] args)'
     *     (Though you can change the args to any variable name).
     * Though it is not required in every file, it must exist for you to run that class.
     */
    public static void main(String[] args) {
        String text = "hi"; //creating a variable is done by [type] [variable name] = [value]; <-- don't forget the semicolon
        print(text); //pass the variable text into the print method, which will print "hi"
        print("I am Bob"); //pass the String "I am Bob" to the print method, which will print "I am Bob"
        print(join("How", "are you")); //this first calls join, which combines the two Strings, then prints it with the print method
        //note that you can call methods within other methods; the innermost method runs first
        casting(); //see casting method
    }

    /*
     * This is a separate method in this class; the method name is "print" and it returns void (nothing)
     * It will not be called unless it is executed in main or by another method called by main.
     * In this particular case, the parameter is a String named s; the naming is only important within this method
     * and is independent of whatever naming you have in other methods or in the variable you pass to this method.
     * The order in which you write methods also doesn't matter; you always start your program with main and go line by line,
     * jumping to whatever method you call in the process
     */
    public static void print(String s) {
        /*
         * Now that the method is called, you may go through the contents line by line
         * In this case, we are calling a predefined method to print the value of s, followed by a new line
         * System.out.print(s) is another method that would print s without a new line
         */
        System.out.println(s);
    }

    /*
     * This method is called "join" and will combine two Strings
     * Note that it returns String, and has two String parameters
     */
    public static String join(String s1, String s2) {
        String s3 = s1 + " " + s2; //combine both Strings with a space in between
        return s3; //as the method is defined to return a String, you must do so after the method is finished
    }

    //This method is called "casting" and takes no arguments
    public static void casting() {
        //You can call other methods within methods, as shown here:
        double percent = getPercentage("65");
        percent += 0.1; //a += b is shorthand for a = a + b; -=, *=, /= and %= also exist
        print(Double.toString(percent)); //print takes in a String, so we must convert the value into a String
        //prints 0.75
    }

    public static double getPercentage(String text) {
        //Casting is when you take something of one type and "turn it into" another type
        //There are some input methods that do so for you such as:
        try {
            int percent = Integer.parseInt(text); //attempts to parse the text into an integer
            //note that this is surrounded by a try catch block, because not every String can be converted into an int
            //more on this later
            return ((double) percent)/100; //another form of casting (which you'll see very often)
            //the desired type is put in front of the variable in parentheses
            //all integers can be casted into doubles, so this is not a problem
        } catch (NumberFormatException e) {
            //if text is not actually a valid number (ie "23a"), this error will occur
            print(text + " is not a number"); //let the user know
            return -1; //you still have to return a double; we'll make -1 the default one
        }
    }
}