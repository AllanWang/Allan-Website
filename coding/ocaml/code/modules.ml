(* Module types are defined using signatures *)
module type STACK =
    sig
        type stack
        type el
        val empty : unit -> stack
        val is_empty : stack -> bool
        val pop : stack -> stack option
        val push : el -> stack -> stack
        (* val push : int -> stack -> stack *)
        (* cannot be el -> stack -> stack as 1 isn't a Stack.el *)
        (* May use further abstractions through creation functions, but that wasn't covered in class *)
    end


(* Modules are implemented with structs; types can be specified using with *)
module Stack : (STACK with type el = int) =
    struct
        type el = int
        type stack = int list
        let empty () : stack = []
        let push i ( s : stack) = i :: s
        let is_empty s = match s with
            | [] -> true
            | _::_ -> false
        let pop s = match s with
            | [] -> None
            | _::t -> Some t
        let top s = match s with
            | [] -> None
            | h :: _ -> Some h
        let rec length s acc = match s with
            | [] -> acc
            | x::t -> length t 1 + acc
    end