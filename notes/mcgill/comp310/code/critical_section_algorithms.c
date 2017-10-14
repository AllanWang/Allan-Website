/*
 * Dekker's Algorithm
 */

int turn;
/* process 0 */
...
flag[0] = true;
while (flag[1]) {
   if (turn == 1) {
       flag[0] = false;
       while (turn == 1);
       flag[0] = true;
   }
   /* critical section */
   turn = 1;
   flag[0] = false;
}
/* process 1 */
...
flag[1] = true;
while (flag[0]) {
   if (turn == 0) {
       flag[1] = false;
       while (turn == 0);
       flag[1] = true;
   }
   /* critical section */
   turn = 0;
   flag[1] = false;
}

/*
 * Peterson's Algorithm
 */

/* process 0 */
...
flag[0] = true;
turn = 1;
while (flag[1] && turn == 1);
/* critical section */
flag[0] = false;
/* remainder */

/* process 1 */
...
flag[1] = true;
turn = 0;
while (flag[0] && turn == 0);
/* critical section */
flag[1] = false;
/* remainder */