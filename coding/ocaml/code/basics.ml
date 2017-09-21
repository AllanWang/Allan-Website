(* Basic OCaml program *)
(*
    Comments are denoted with this notation.
    There does not exist a shortened notatino for single line comments
*)

(*
    Create function 'add' that takes in a and b
    Both a and b are inferred to be floats.
    Note that basic operations with floats have a '.' after the operation,
    and that numbers are not automatically casted as it is in Java.
*)
let add a b = a +. b

(* Call the function like so. The outcome will be 5.0 *)
add 2.0 3.0

(* This call will fail. Numbers are not automatically converted *)
add 2 3