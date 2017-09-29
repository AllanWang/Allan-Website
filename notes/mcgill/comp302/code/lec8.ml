(* Tree definition *)
type tree = Empty | Node of 'a * 'a tree * 'a tree


(*
  Element insertion in a Binary Search Tree
  Note that elements are Nodes containing a key-value pair
  ('a * 'b) -> ('a * 'b) tree -> ('a * 'b) tree
 *)

let rec insert ((x, dx) as e) t = match t with
  | Empty -> Node (e, Empty, Empty)
  | Node (((y, dy) as f), l, r) ->
    if x = y then Node (e, l, r)
    else if x < y then Node (f, insert e l, r)
    else Node (f, l, insert e r)

(*
  Element lookup in a BST
  Takes in the key and a tree, and returns the value if it exists
  'a -> '('a * 'b) tree -> 'b option'
 *)

let rec lookup x t = match t with
  | Empty -> None
  | Node ((y, dy), l, r) ->
    if x = y then Some dy
    else lookup x (if x < y then l else r)


(*
  Collection function to convert a tree into a list with infix ordering
 *)
let rec collect t = match t with
  | Empty = []
  | Node (x, l, r) -> (collect l) @ [x] @ (collect r)
