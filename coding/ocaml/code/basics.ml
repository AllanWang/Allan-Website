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

(* Type creation *)
(* Defines a type key that is exactly an int *)
type key = int
(* Defines a type btree. 'a represents a generic. Every other instance of 'a is of the same type *)
type 'a btree =
    (* Blank constructor to create an empty binary tree *)
    | Empty
    (* Node constructor that holds a btree (left), value, and btree (right) as a tuple *)
    | Node of 'a btree * (key * 'a) * 'a btree

(* Note that types are typically lower case, and constructors are upper casees *)
(* When match functions are called, it will check that all constructors are taken into account for the given type *)

(* Exceptions are created like so *)
exception DivideByZero
(* They may optionally wrap another type *)
exception ErrorMessage of string

(* functions are anonymous and only contain one input.
They automatically support matching, and is equivalent to
fun x -> match x with ... *)
(* The following takes two ints and divides them if the divisor is not 0 *)
let div d = function | 0 -> raise DivideByZero | x -> d / x