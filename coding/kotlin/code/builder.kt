class Builder(var a: Int, var b: Int, var c: String)

fun build(builder: Builder.() -> Unit): Builder
    = with(Builder()) { builder() }

fun exampleBuild() = build {
    val i = 0
    a = i
    i += 5
    b = i
    c = "Done"
}