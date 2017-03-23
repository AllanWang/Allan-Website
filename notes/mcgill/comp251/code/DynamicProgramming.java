/*
 * Pseudocode for finding max weight activity set
 */
public class DynamicProgramming {

    int[] M //holds OPT
    int[] w //holds weight of activity
    int[] p //holds latest valid predecessor

    /**
     * Finds the max possible weight;
     * fills arrays above in the process
     *
     * @return max weight
     */
    int findMaxWeight() {
        M.setAllValueTo(EMPTY)
        M[0] = 0
        return findMaxWeight(M.length - 1)
    }

    int findMaxWeight(j) {
        if (M[j] == EMPTY)
            M[j] = max(v[j] + findMaxWeight(p[j]), findMaxWeight(j - 1))
        return M[j]
    }

    /**
     * Find the activity set given the completion of the arrays above
     *
     * @param j index of activity in question (start at last index)
     * @return optimal set
     */
    int[] findSolution(j) {
        if (j == 0) return []
        if (w[j] + M[p[j]] > M[j - 1]) return findSolution(p[j]) + [j]
        return findSolution(p[j - 1]) //j is not in solution set
    }
}
