/*
 * Terms
 * Vertex           'node', contains information for a given point
 * Edge             set of ordered pairs of vertices
 * Degree           # of edges attached to vertex (going in or out)
 * Path             sequence of vertices where every neighbouring vertex has an edge connecting them
 * Cycle            path such that last vertex is the same as the first vertex
 *
 * Directed graph   set of vertices
 * Undirected graph graph where edges are unordered pairs
 * Acyclic graph    graph with no cycles (the case for dependencies; you can't have A depend on B and B depend on A)
 */

public class Graph {

    //depth first recursive graph traversal
    void depthFirst(Vertex v) {
        v.visited = true //indicate that we've visted the vertex so we don't do it twice
        //make sure that visited is false for all vertices before starting this traversal
        //do stuff with current vertex here
        for (Edge e : v.edges) { //loop through all edges
            Vertex v2 = e.endVertex //get connected vertex from respective edge
            if (!v2.visited) depthFirst(v2); //recursive call
            //if already visited, ignore
        }
    }

    //depth first iterative traversal using a stack
    void graphTraversalStack(Vertex v) {
        Stack s = new Stack();
        v.visited = true
        s.push(v)
        while (!s.isEmpty()) {
            Vertex v2 = s.pop()
            //do stuff with vertex here
            for (Edge e : v2.edges) { //loop through all edges
                Vertex w = e.endVertex //get connected vertex from respective edge
                if (!w.visited) {
                    w.visited = true
                    s.push(w)
                }
                //if already visited, ignore
            }
        }
    }

    //breadth first iterative traversal using a queue
    void graphTraversalQueue(Vertex v) {
        Queue q = new Queue()
        v.visited = true
        q.enqueue(v)
        while (!q.isEmpty()) {
            Vertex v2 = q.dequeue()
            //do stuff with vertex here
            for (Edge e : v2.edges) { //loop through all edges
                Vertex w = e.endVertex //get connected vertex from respective edge
                if (!w.visited) {
                    w.visited = true
                    q.enqueue(w)
                }
                //if already visited, ignore
            }
        }
    }
}