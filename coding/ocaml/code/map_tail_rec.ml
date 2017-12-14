let map list mapper =
    (* takes in the list, mapper function, and continuation *)
    let rec map_tl = l f c = match l with
        | [] -> c []
        (* Prepend mapped header to rest of (to be) mapped list *)
        | h :: t -> map_tl t f (fun r -> c ((f h) :: r))
    in
    (* Return accumulated data *)
    map_tl list mapper (fun r -> r)