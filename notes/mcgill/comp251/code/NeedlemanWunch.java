/*
 * Algorithm for finding the optimal sequence alignment for two strings
 */
public class NeedlemanWunch {

    String a, b //two strings to compare; for our sake, both string start with '-'
    //and the first real letter is at index 1
    int[][] d //matrix holding minimum distance up to two characters

    //get cost for two characters
    int delta(m, n) {
        return m == n ? 0 : 1
    }

    int getLowestDistance() {
        //map the borders (base case; assumption that one of the strings is empty)
        //therefore, distances will increase by one each time
        for (int i = 0; i < a.length(); i++)
            d[i][0] = i
        for (int j = 0; j < b.length(); j++)
            d[0][j] = j
        for (int i = 1; i < a.length(); i++)
            for (int j = 1; j < b.length(); j++)
                d[i][j] = min(d[i - 1][j] + delta(a[i], '-'), //deletion
                        d[i - 1][j - 1] + delta(a[i], b[j]), //match/substitution
                        d[i][j - 1] + delta('-', b[j])) //insertion
        return d[a.length() - 1][b.length() - 1]
    }
}
