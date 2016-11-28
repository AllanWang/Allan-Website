/*
 * API          application program interface
 *              gives class methods & fields, and comments for what they do
 * Interface    like a class, but only with the method signatures and not the contents inside them
 * implements   keyword for using an interface; class implements interface
 *              that class must now define all methods in that interface
 *              one class may implement multiple interfaces
 *
 * Java defined interfaces
 * Comparable<T>                        used to define comparisons of an object
 *      typically for a.compareTo(b)    equals returns 0, a > b returns a positive number, a < b returns a negative number
 * Iterator<T>                          used to visit all objects in some collection; hasNext(), next()
 * Iterable<T>                          used to create iterator
 *
 */

public interface MyInterface<T> {
    T get();
    String toString();
    void print();
    double getArea();
    double getPerimeter();
}