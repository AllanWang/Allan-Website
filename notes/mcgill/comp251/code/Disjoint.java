/*
 * Pseudocode for Disjoint Set Optimization
 */
public class Disjoint {

    /**
     * Finds root node of a subset containing i
     * Also undergoes path compression, where the nodes will become
     * direct children of the root
     *
     * Worst case is O(logn) (we can prove that the height is at most logn)
     *
     * @param i node contained in subset
     *
     * @return root node
     */
    Node find(i) {
        if (i.parent == i) return i //i is the root
        return i.parent = find(i.parent) //set parent of i to root & return the root
    }
}
