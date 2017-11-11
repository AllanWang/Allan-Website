let x = ref 0 (* Allocate reference x with initial value 0 *)

a == b (* Compare by reference *)
a = b (* Compare by content *)

!x (* Read value *)
x := 3 (* Update value *)

let imperative_fact n =
    begin
        let result = ref 1 in
        let i  ref 0 in
        let rec loop () =
            if !i = n then ()
            else (i := !i + 1; result := !result * !i; loop ())
        in
        (loop (); !result)
    end