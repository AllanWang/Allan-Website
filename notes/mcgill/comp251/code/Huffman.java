/*
 * Huffman's Algorithm for encoding Strings
 *
 * Runs in O(n + d logd)
 * Where
 *  n   size of X
 *  d   # of distinct characters X
 *
 * Uses heap-based priority queue
 */
public class Huffman {

    /**
     * Generate trie representing encoding
     *
     * Basic procedure:
     * Get the two chars with the smallest frequencies
     * Make a node with those two chars as children
     * & with its valud being the summation of the two frequencies
     * Repeat with the remaining chars and the new node(s)
     * Once there is one node with all the chars mapped out,
     * you have found your trie
     *
     * @param X string input to encode
     * @return generated trie
     */
    Trie generateEncodingHeap(X) {
        Q = new Heap //empty max heap
        freq = distinctCharactersWithFrequencies(X)
        //maps each distinct char in X with its frequency in X

        for (CharFreq c : freq) { //for every unique char
            T = new Node(c.char) //make node storing the char
            Q.insert(c.frequency) //insert node at position relative to frequency
        }
        while (Q.size > 1) {
            f1 = Q.minKey() //get smallest frequency
            t1 = Q.removeMin() //get char with that frequency & remove it
            f2 = Q.minKey() //get next smallest frequency
            t2 = Q.removeMin() //get char with that frequency & remove it
            T = join(t1, t2) //combine two into one node
            Q.insert(f1 + f2, T) //add back to heap at their combined frequency location
        }
        return Q.removeMin() //return the resulting data
    }

}
