/*
 * Gale-Shapley Algorithm for finding stable marriage solution
 */
public class GaleShapley {

    /**
     * find stable matches
     * sets contain items that have an ordered preference
     * for the items in the other set
     *
     * O(n^2)
     *
     * @param A set A
     * @param B set B
     * @return matching pairs
     */
    Matching findMatches(A, B) {
        M = new Matching()
        while (A.hasUnmatched()) {
            a = A.getFirstUnmatched() //get an unmatched item
            b = a.orderedPrefs.removeFirst() //get first preference of that item
            if (!b.isMatched()) {
                M.add(a, b) //unmatched, add the matches
            } else {
                c = b.match //get b's current match
                if (b.prefers(a, c)) {
                    //a is preferred, remove old matching
                    M.remove(c, b).add(a, b)
                }
            }
        }
        return M
    }

}
