public static void main(String[] args){
    int x = 4;
    int y = 5;
    y = swap(x,y);
    System.out.println("x is " + x + " y is " + y);
}
public static int swap(int x, int y){
    int temp = x;
    x = y;
    y = temp;
    return x;
}