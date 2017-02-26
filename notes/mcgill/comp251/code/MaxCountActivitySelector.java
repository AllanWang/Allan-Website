/*
 * Algorithm to select a subset containing the greatest number
 * of compatible activities, where two activities are compatible
 * when there are no time conflicts
 */
public class MaxCountActivitySelector {

    /**
     * Recursively get a valid solution
     * called through recursiveSelector(S, 0, n+1)
     *
     * @param S set of all activities, in order of finish time
     * @param i index of latest added activity
     * @return set containing the activities in our solution
     */
    Set<Activity> recursiveSelector(S, i) {
        m = i + 1
        while (m < S.size && S[m].start < S[i].finish)
            m++ //find first activity in S with an index within (i, n+1]
        if (m < S.size) return S[m] + recursiveSelector(S, m) //got first element; find rest
        return null //no more valid activities, close off set
    }

    /**
     * Iteratively get a valid solution
     *
     * @param S set of all activities, in order of finish time
     * @return set containing the activities in our solution
     */
    Set<Activity> iterativeSelector(S) {
        result = emptySet
        currentFinish = -1 //at first we accept the very first activity with the first finish
        for (i = 0; i < S.size; i++) {
            if (S[i].start >= currentFinish) {//valid activity, add to set
                Result += S[i]
                currentFinish = S[i].finish //set new finish
            }
            //otherwise, activity starts before last one in set ends
            //cannot be added to the set, so continue searching
        }
        return result
    }
}
