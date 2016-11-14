/*
 * Terms
 *
 * Root             node from which all descendents stem
 * Child            node with a parent
 * Edge             line connecting parent with child
 * Leaf             node without any children
 *
 * Height           maximum path length from that node to a leaf; leaves have height 0
 * Depth/Level      number of edges from that node to root; root has depth 0
 *
 * Depth first      all descendents of node visited before next sibling
 * Breadth first    all nodes of current depth visited before next depth
 *
 * Preorder         node visited before all children of that node
 * Inorder          node visited after all left children and before all right children
 * Postorder        node visited after all children of that node
 *
 * Prefix           *ab     operation first         aka Polish Notation
 * Infix            a*b     operation in middle
 * Postfix          ab*     operation last          aka Reverse Polish Notation
 */

public class TreeTraversal {

    //postorder recursive
    void depthFirst(Node root) {
        if (root != null) {
            for (Node child : root) {
                depthFirst(child)
            }
        }
        root.visit() //do what you need to do with current node
    }

    //depth first iterative right to left
    void treeTraversalStack(Node root) {
        Stack s = new Stack();
        s.push(root)
        while (!s.isEmpty()) {
            Node cur = s.pop()
            cur.visit() //visit latest node
            for (Node child : cur) {
                s.push(child) //add child to stack
            }
        }
    }

    //breadth first iterative left to right
    void treeTraversalQueue(Node root) {
        Queue q = new Queue()
        q.enqueue(root)
        while (!q.isEmpty()) {
            Node cur = q.dequeue()
            cur.visit() //visit latest node
            for (Node child : cur) {
                q.enqueue(child) //add child to queue
            }
        }
    }

    /*
     * We typically loop through children with for each child
     * With first child, next sibling, it is like so:
     */
    void firstChildNextSibling(Node cur) {
        Node child = cur.firstChild
        while (child != null) {
            child.visit()
            child = child.nextSibling
        }
    }
}