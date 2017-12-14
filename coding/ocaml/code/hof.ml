(* List creator that takes in an initial value and an action, and creates the list until the stop condition is met *)
let rec unfold (f: 'seed -> ('a * 'seed)) (stop : 'seed -> bool) (b : 'seed) : 'a list =
  if stop b then []
  else let x, b' = f b in
    x :: (unfold f stop b')

(* Creates list of evens from 0 to 100 *)
(* Returns a function that takes in a stop condition and a start value *)
let even_generator = unfold (fun x -> (x, x + 2))

(* Expands on even_generator to give it a limit of 0 - 100 *)
(* Returns an int list *)
let even_0_to_100 = even_generator ((<) 100) 0

(* Short form functions *)

(* Returns int -> bool *)
let is_2 = ((=) 2)

(* Returns int -> int *)
(* Space required to avoid treating op as a comment *)
let times_3 = (( * ) 3)