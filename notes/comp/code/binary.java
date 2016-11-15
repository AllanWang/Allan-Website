/*
 * log in the context of this file shall refer to log of base 2
 *
 * For a Binary Tree of n nodes, the height is log(n) at best and n at worst
 * It will have 1 root, n - 1 children, and n - 1 edges
 */

public class BinarySearch {
    /*
     * O(log(n)) -> halving size of list each time
     */

    //iterative
    int binarySearch(list, value) {
        low = 0
        high = list.size - 1
        while (low <= high) {
            mid = (low + high) / 2
            if (value == list[mid]) //value found
                return mid
            if (value < list[mid])
                high = mid - 1 //value is in lower half
            else
                low = mid + 1 //value is in upper half
        } //if range is negative, value does not exist
        return -1
    }

    //recursive
    int binarySearch(list, value, low, high) {
        if (low > high) return -1 //invalid range
        mid = (low + high) / 2
        if (value == list[mid]) //value found
            return mid
        if (value < list[mid]) //value is in lower half
            return binarySearch(list, value, low, mid - 1)
        else //value is in upper half
            return binarySearch(list, value, mid + 1, high)
    }

    //initial call
    binarySearch(list, value, 0, list.size -1)
}