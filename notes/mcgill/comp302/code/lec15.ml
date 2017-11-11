(* Types *)

3 + 2
(* int; 5; no effect *)

55
(* int; 55; no effect *)

fun x -> x + 3 * 2
(* int -> int; <fun> or fun x -> x + 2 * 3 *)

((fun x -> match x with [] -> true | y::ys -> false), 2.3 *. 2.0)
(* ('a list -> bool) * float; (<fun>, 6.4); no effect *)

let x = ref 3 in x := !x * 2
(* unit = (); no effect; x is disposed (removed from stack after evaluation) *)


fun x -> x := 3
(* int ref -> unit; <fun>; effect: updated x to 3 *)

(fun x -> x := 3) y
(* unit = (); updates y : int ref to 3 *)

fun x -> (x := 3; x)
(* int ref -> int ref; updates x & returns reference *)

fun x -> (x := 3; !x)
(* int ref  int; updates x & returns value *)

let x = 3 in print_string (string_of_int x)
(* unit = (); prints 3 to screen *)

(* --------------------
Linked List Demo
-------------------- *)

type 'a rlist = Empty | RCons of 'a * ('a rlist) ref;;
let l1 = ref (RCons (4, ref Empty));;
let l2 = ref (RCons (5, l1));;
(* The 'a rlist ref of l2 is l1, same address *)

l1 := !l2;;
(* We've created a circular list *)
!l1;;
(* int rlist = RCons(5, {contents = <cycle>}) *)