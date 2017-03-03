/*
 * Pseudocode for finding shortest path
 */
public class ShortestPath {

    /**
     * Setup default vars
     *
     * @param V graph
     * @param s source vertex
     */
    void initSingleSource(V, s) {
        for (Vertex v : V) {
            d[v] = INFINITY
            pi[v] = NIL
        }
        d[s] = 0 //source weight is always 0
    }

    /**
     * Relaxing an edge (setting minimum weight)
     *
     * @param u start vertex
     * @param v end vertex
     * @param w new weight from u to v
     */
    void relax(u, v, w) {
        if (d[v] > d[u] + w(u, v)) { //better weighting found
            d[v] = d[u] + w[u, v]
            pi[v] = u //set predecessor
        }
        //otherwise, keep original weighting
    }

    /**
     * Dijkstra's algorithm to find shortest path
     * Must have non negative weightings
     *
     * If binary heap, each operation takes O(log V) -> O(E logV)
     * With Fibonacci heaps, O(V logV + E)
     *
     * @param V all the vertices
     * @param E all the edges
     * @param w all the weightings
     * @param s source vertex
     * @return set of all vertices with their deltas and predecessors
     */
    Set dijkstra(V, E, w, s) {
        initSingleSource(V, s);
        S = new Set() //create empty set
        Q = V //move all vertices to Q
        while (!Q.isEmpty()) {
            u = extractMin(Q)
            S = S.add(u)
            for (Vertex v : u.adjacentVertices) {
                relax(u, v, w) //lower weighting if possible
            }
        }
        return S
    }
}
