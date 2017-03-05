/*
 * Red Black Tree Implementation
 */
public class RedBlackTree {

    /**
     * Inserts a node at its proper position and makes it red
     *
     * @param tree the red black tree
     * @param z    the node to insert
     */
    void insert(tree, z) {
        y = nil[tree] //initialize reference
        x = tree.root
        while (x != nil[tree]) {
            y = x
            if (z.key < x.key) x = x.left
            else x = x.right
        }
        //we've found the proper location; add z as child
        z.parent = y
        if (y == nil[tree]) tree.root = z
        else if (z.key < y.key) y.leftChild = z
        else y.rightChild = z

        /*
         * Node is now added
         * Proceed to check the three cases below
         * and continue "fixing" until the root is reached
         * Grandparent of x is x.parent.parent
         * Uncle of x is sibling of x.parent (other child of grandparent)
         */
    }

    /**
     * Uncle is red;
     * we will swap the colors of the parent, uncle, and grandparent,
     * which brings the conflict one level higher
     * we will assume that the grandparent exists
     *
     * @param z the node to insert
     * @return new potential conflict node
     */
    Node case1(tree, z) {
        //by properties, the grandparent must be black -> swap
        z.parent.parent.color = red
        //swap colors for red father and uncle
        z.parent.color = black
        z.uncle.color = black
        //Only conflict now is from grandparent and its parent
        return z.parent.parent
    }

    /**
     * Uncle is black, so we cannot swap it to red
     * We will also assume that z, z.parent, and z.parent.parent are not inline (one is left child, one is right)
     * We will now align them through rotation and proceed to case 3)
     * In this case, we shall assume that the
     * z.parent.parent.leftChild z.parent
     * And z.parent.rightChild = z
     *
     * @param z the node to insert
     * @return new potential conflict node
     */
    Node case2(z) {
        //this is simply a generic rotation
        p = z.parent
        z.parent = p.parent
        p.parent = z
        p.rightChild = z.leftChild
        z.leftChild = p
        return case3(z) //now that we have the proper arrangement
        //we will proceed to case3
    }

    /**
     * Uncle is black, z is inline with parent and grandparent
     * We shall assume that z and its parent are both left children to their respective parents
     *
     * @param z the node to insert
     * @return new potential conflict node
     */
    Node case3(z) {
        //swap colors for parent and grandparent
        z.parent = black
        z.parent.parent = red
        rotateRight(z, z.parent) //z will now be the parent
        z.color = black //z the local root is now black
        z.parent.color = red //z.parent the child is now red
        return z
    }
}
