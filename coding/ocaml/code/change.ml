(* Given an amount, and a list of coins (int),
find the smallest number of coins necessary to supply the exact change.
Assume that the coins are ordered in descending order *)

exception Change

let rec change coins amt =
    if amt = 0 then []
    else match coins with
        | [] -> raise Change (* amt remains, but no more coin values *)
        | coin :: cs -> if coin > amt then change cs amt (* coin too big, skip *)
        (* Try to include current coint. If not possible, skip and try again *)
        else try coin :: (change coins (amt - coin)) with Change -> change cs amt
