let getLongestZigZag (inputs: int list) =
    let rec zigZag (inputs': int list) marker' count' isPeak' =
        match inputs' with
            | [] -> count' (* Done recursion, emit value *)
            | head::tail -> (let incr = marker' < head <> isPeak' in
              zigZag tail head (if incr && head <> marker' then count' + 1 else count') (if incr then not isPeak' else isPeak'))
    in
    match inputs with
    | a :: b :: tail -> zigZag ([b] @ tail) a 1 (a > b)
    | _ -> List.length inputs