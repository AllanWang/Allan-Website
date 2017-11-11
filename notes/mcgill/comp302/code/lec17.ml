exception Domain

let fact n =
    let rec f n =
        if n = 0 then 1
        else n * f (n - 1)
    in
    if n < 0 then raise Domain
    else f(n)

let runFact n =
    try
        let r = fact n in
        print_string ("Factorial of " ^ string_of_int n ^
        " is " ^ string_of_int r ^ "\n")
    with Domain ->
        print_string("Error: Trying to call factorial on a negative input \n")

fact 0;;