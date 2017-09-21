public static int getLongestZigZag(int[] inputs) {
    //Implement base cases
    if (inputs.length <= 2) return inputs.length;
    int marker = inputs[0];
    boolean isPeak = inputs[0] > inputs[1]; //set peak to accept first inputs
    int count = 1; //accept first number
    for (int i : inputs) {
        if (marker == i) continue;
        if (marker < i != isPeak) {
            count++;
            isPeak = !isPeak;
        }
        marker = i;
    }
    System.out.println(String.format("Input: %s\nCount: %d\n", Arrays.toString(inputs), count));
    return count;
}