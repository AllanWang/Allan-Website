public static void main(String[] args) {
    int[] a = {1, 2, 3, 4, 5, 6};
    test(a);
    //prints the values rather than the reference
    System.out.println(Arrays.toString(a));
}

static void test(int[] a) {
    for (int i = 0; i < a.length; i++)
        a[i] = a[(i + 1) % a.length];
}