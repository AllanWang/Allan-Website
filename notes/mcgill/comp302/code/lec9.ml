(*
    Given function and range,
    compute sum of given function applied to each number in given range
 *)

let rec sum f (a, b) =
  if a > b then 0
  else f(a) + sum f(a + 1, b)

let sumInts (a, b) =
  let id x = x in
  sum id (a, b)

(* We may use anonymous functions *)
let sunSquare (a, b) = sum (fun x -> x * x) (a b)

(* We may also declare functions outside and use pattern matching
   functions take only one argument *)
(function 0 -> 0 | n -> n + 1)
(* Which is equivalent to *)
(fun x -> match x with 0 -> 0 | n -> n + 1)
