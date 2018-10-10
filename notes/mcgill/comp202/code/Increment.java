public static void main(String[] args) {
    int[] data = new int[]{1, 2, 3};
    if (test1(data) && test2(data) && test3(data)) {
        System.out.print(data[0]);
    } else {
        System.out.print(data[1]);
    }
    System.out.println(data[2]);
}

static boolean test1(int[] input1) {
    return ++input1[0] == input1[1];
}

static boolean test2(int[] input2) {
    return input2[1]++ == input2[2];
}

static boolean test3(int[] input3) {
    return input3[2]-- == 3;
}