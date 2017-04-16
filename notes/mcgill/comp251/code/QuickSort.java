public class QuickSort {

    void quickSort(A, p, r) {
        if (p < r) {
            q = partition(A, p, r)
            quickSort(A, p, q - 1)
            quickSort(A, q + 1, r)
        }
    }

    int partition(A, p, r) {
        x = A[r]
        i = p - 1
        for (j = p, j < r; j +=)
            if (A[j] <= x) {
                i++
                A.swap(i, j)
            }
        A.swap(++i, r)
        return i
    }

    void randomizedQuickSort(A, p, r) {
        if (p < r) {
            q = randomizedPartition(A, p, r)
            randomizedQuickSort(A, p, q - 1)
            randomizedQuickSort(A, q + 1, r)
        }
    }

    int randomizedPartition(A, p, r) {
        i = random(p, r)
        A.swap(r, i)
        return partition(A, p, r)
    }
}