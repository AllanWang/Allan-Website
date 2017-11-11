(* append: 'a list -> 'a list -> 'a list *)
let rec append l k = match l with
    | [] -> k
    | h :: t -> h :: (append t k)

(* Tail Recursive *)
let rec app_tl l k c = match l with
    | [] -> c k (* Call continuation with stack k *)
    | h :: t -> app_tl t k (fun r -> c (h :: r))