/*
 * Find shortest path between two nodes in a graph
 * Allows for negative-weight edges and will catch negative cycles if they occur
 *
 * Time Complexity O(VE)
 */
public class BellmanFord {

    /**
     * Check if shortest path exists
     *
     * @param G the graph
     * @param s source node
     * @return true if path exists, false otherwise (negative cycle)
     */
    boolean initialize(G, s) {
        for (int i = 0; i < G.size() - 1; i++)
            for (u, v in G.edges)
                relax(u, v, w(u, v)) //set d[v] as min(d[v], d[u] + w(u, v))
        for (u, v in G.edges)
            if (d[v] > d[u] + w(u, v)) return false //mismatch found
        return true
    }
}
