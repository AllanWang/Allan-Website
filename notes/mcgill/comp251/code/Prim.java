/*
 * Prim's Algorithm for finding MST (minimum spanning tree)
 * Complexity
 * Using binary heaps       O(E logV)
 * Initialization           O(V)
 * Building initial queue   O(V)
 * V extractMin             O(V logV)
 * E decreaseKey            O(E logV)
 * Fibonacci heaps          O(E + V logV)
 */
public class Prim {

    MST findMST(graph, root) {
        MST mst = new MST()
        Q = new Queue(graph) //create queue with every vertex in graph
        //set keys to infinity for all nodes
        for (Node u : Q) {
            u.key = INFINITY //key of vertex
            u.pi = NIL //no predecessor yet
            insert(Q, u) //add to queue
        }
        decreaseKey(Q, root, 0) //start with arbitrary root; weight is 0
        while (!Q.isEmpty()) { //loop until Q is empty
            u = extractMin(Q)
            for (Vertex v : u.adjacentVertices) {
                if (v.isin(Q) && weight(u, v) < v.key) { //update adjacent nodes
                    v.pi = u //set predecessor of v
                    decreaseKey(Q, v, weight(u, v)) //set new weight for v
                }
            }
            mst.add(u) //add lowest weight to mst
        }
        return mst
    }

}
