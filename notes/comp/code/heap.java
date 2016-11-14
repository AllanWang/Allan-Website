/*
 * Priority Queues - each node is smaller than all of its descendents
 *      root is therefore the smallest element
 * Complete Binary Tree - binary tree with all levels above the lowest one full
 *      and with all elements in the lowest level as left as possible
 * Heaps can be visualized as trees, but can also be represented with arrays
 *      if we number the nodes 1 through n, starting from the root and travelling breadth first,
 *      the numbers will represent their indices in the array (0 is not used for convenience)
 *      the left child of node k is therefore at 2k, and the right child is at 2k + 1
 */

public class Heap {

    //add element at end then reorganize with upHeap
    void add(E element) {
        Node cur = newLastNode() //Node on lowest level right of the last existing node
        cur.element = element
        while (cur != root && cur.element < cur.parent.element) {//Node is smaller than parent
            swapElement(cur, parent) //switch values
            cur = cur.parent //go up a level
        }
    }

    //remove root, replace with last node, then reorganize with downHeap
    E removeMin() {
        E min = root.element //this is the smallest element
        Node cur = root //just a name change; currently refers to root
        cur.element = getLastNode().element //Get element of rightmost node on last level
        getLastNode() = null //last node has moved and no longer exists
        while (cur.leftChild != null) { //if null, there are no children
            if (cur.leftChild.element < cur.element) {
                swapElement(cur, cur.leftChild) //left child smaller; swap
                cur = cur.leftChild
            } else if (cur.rightChild != null && cur.rightChild.element < cur.element) {
                swapElement(cur, cur.rightChild) //right child smaller; swap
                cur = cur.rightChild
            }
        }
        return min
    }

    /*
     * Equivalent methods but in an array implementation
     */
    void add(E element) {
        size++ //it is assumed the array can fit this size
        heap[size] = element //size matches last index as 0 is not used
        i = size //iterate through 'parent nodes'
        while (i > 1 && heap[i] < heap[i / 2]) {
            swapElements(heap[i], heap[i / 2])
            i /= 2
        }
    }

    /*
     * Create heap from unsorted list
     * Best case is O(n) -> already a heap
     * Worst case is O(nlogn) -> move every item at k floor(logk) steps up
     */
    Heap buildHeap(list) {
        heap = new Heap(list.size)
        for (E element : list)
            heap.add(element) //see method above; adds and reorganizes
        return heap
    }

    E removeMin() {
        E min = heap[1] //root; index 0 not used
        heap[1] = heap[size]
        heap[size] = null //element moved
        size--
        downHeap(1, size)
        return min
    }

    /*
     * Moves element at index i to appropriate position within the heap
     */
    void downHeap(i, size) {
        while (2 * i <= size) { //left child exists
            child = 2 * i
            if (child < size) { //right child exists
                if (heap[child + 1] < heap[child]) //right child smaller
                    child++ //child is now indexed at smallest of the two children
            }
            if (heap[child] < heap[i]) { //child smaller than current
                swapElements(heap[child], heap[i])
                i = child
            }
        }
    }

    //you can actually use heaps to sort your values
    E[] heapSort(list) {
        heap = buildHeap(list)
        E[] sorted = new E[list.size + 1]
        for (i = 1 to list.size){
            sorted[size - i] = heap.removeMin() //add min from left to right
        }
        return sorted
    }

    //sort within same array
    E[] heapSort(E[] arr) {
        heap = buildHeap(arr)
        for (i = 1 to list.size){
            swapElements(heap[1], heap[size + 1 - i]) //smallest element of subarray is moved to the back
            downHeap(1, size - i) //shift root element down, bringing next smallest to root
        }
        return reverse(heap) //reverse for small to large
    }

    /*
     * Previous methods rely on add(E), which uses upHeap
     * As half the elements are on the bottom row, it is much more efficient to downHeap
     * We start at k = size/2 because all k's greater are already at smallest height
     * Algorithm is O(n)
     * t(n) = Sigma(i = 0 -> n)(height of node i) = n - log(n + 1)
     */
    buildHeapFast(list) {
        for(k = size/2; k >= 1; k--)
            downHeap(k, size)
    }
}