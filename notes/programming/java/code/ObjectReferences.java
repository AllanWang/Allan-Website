public class ObjectReferences {

    /*
     * Try to see if you can figure out what gets printed at each step
     * Remember that objects, like arrays, are references.
     * Be careful as to what the objects are referencing
     * You can run the code to see the results
     * Note that printing a Number will print the integer it currently holds
     * \t just means tab (more spaces)
     */
    public static void main(String[] args) {
        Number x = new Number(5);
        Number y = new Number(3);
        //This should be easy; what prints?
        System.out.println("Starting:\tx=" + x + "\t\ty=" + y);
        step1(x, y);
        System.out.println("Step 1:\t\tx=" + x + "\t\ty=" + y);
        step2(x, y);
        System.out.println("Step 2:\t\tx=" + x + "\t\ty=" + y);
        x = step3(x, y);
        System.out.println("Step 3:\t\tx=" + x + "\t\ty=" + y);
        y = new Number(step4(x, new Number(5)));
        System.out.println("Step 4:\t\tx=" + x + "\t\ty=" + y);
        System.out.println("y=" + goodLuck(x, x) + " ");
    }

    static void step1(Number y, Number x) {
        Number temp = x;
        x = y;
        y = temp;
    }

    static void step2(Number z, Number zz) {
        z.set(8);
        zz = z;
    }

    static Number step3(Number x, Number y) {
        y.set(-1);
        x = y;
        x.set(-2);
        return x;
    }

    static int step4(Number x, Number y) {
        Number z = x;
        x.set(9);
        y.set(z.get() + y.get());
        return y.get();
    }

    static Number goodLuck(Number i, Number j) {
        Number l = new Number(1);
        j.set(0);
        System.out.print("x=" + i + " ");
        i.set(9);
        j.set(8);
        return j;
    }
}

/*
 * You don't have to know what a static inner class is
 * Just know that this behaves the same way as a separate class in another file
 * This is a basic class that holds one integer, along with a set and get method
 */
class Number {
    int value = 0;

    Number(int i) { //this is a constructor
        value = i;
    }

    void set(int i) {
        value = i;
    }

    int get() {
        return value;
    }

    //This allows us to print the number directly
    @Override
    public String toString() {
        return Integer.toString(value);
    }
}