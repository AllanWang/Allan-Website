(* Warm up; printing int list *)
let listToString l = match l with
    | [] -> ""
    | l -> let rec toString l' = match l' with
        | [h] -> string_of_int h
        | h::t -> string_of_int h ^ ", " ^ toString t
        in
        toString l

(* With backtracking, given list of coins (in descending order) and amount, see if we can return exact change*)
exception Change

let rec change coins amt =
    if amt = 0 then []
    else (match coins with
            | [] -> raise Change
            | coin :: cs ->
                (* skip coin as it is too big *)
                if coin > amt then change cs amt
                (* try to include current coin, and skip if fail *)
                else try coin :: (change coins (amt - coin)) with Change -> change cs amt
    )

let change' coins amt =
    try Some (change coins amt) | with Change -> None