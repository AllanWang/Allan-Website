/*
 * log in the context of this file shall refer to log of base 2
 *
 * A Binary Search Tree (BST)
 *      is a binary tree
 *      has unique and comparable keys
 *      has nodes where
 *          every descendent on the left is smaller
 *          every descendent on the right is larger
 * Best case for searching is O(1) (root.key == key)
 * Worst case for a well sorted tree is O(logn)
 *      height of BST is logn, and one of the leaves has the right key
 * In an unbalanced tree, height is n, so true worst case is O(n)
 */

public class BinarySearchTree {
    Node find(Node root, E key) {
        if (root == null) return null //no node
        if (root.key = key) return root //key matches
        if (root.key < key) return find(root.right, key) //key bigger -> right side
        return find(root.left, key) //key smaller -> left side
    }

    //notice that every left child is smaller than its parent
    Node findMin(Node root) {
        if (root == null) return null //no node
        if (root.left == null) return root //no left child
        return findMin(root.left) //go into left child and continue
    }

    //notice that every right child is greater than its parent
    Node findMin(Node root) {
        if (root == null) return null //no node
        if (root.right == null) return root //no right child
        return findMin(root.right) //go into right child and continue
    }

    //note that every new key will be added as a leaf
    Node add(Node root, E key) {
        if (root == null) {
            root = new BSTNode(key) //create new node with key
        } else if (key < root.key) {
            root.left = add(root.left, key) //key smaller; continue on left
        } else if (key > root.key) {
            root.right = add(root.right, key) //key bigger; continue on right
        } //if root.key = key, do nothing
        return root
    }

    Node remove(Node root, E key) {
        if (root == null) return null
        if (key < root.key) { //key smaller; treat left child as root
            root.left = remove(root.left, key)
        } else if (key > root.key) { //key bigger; treat right child as root
            root.right = remove(root.right, key)
        } else if (root.left == null) {
            //keys match; only right child exists; bring right child to root
            root = root.right
        } else if (root.right == null) {
            //keys match; only left child exists; bring left child to root
            root = root.left
        } else {
            // min key of root.right is guaranteed to be
            // > current root.left and <= current root.right
            // it therefore will not ruin the ordering of the BST
            // if it is moved up to root
            Node min = findMin(root.right)
            root.key = min.key
            min = null
        }
        return root
    }
}