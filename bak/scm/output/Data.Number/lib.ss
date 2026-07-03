#!r6rs
#!chezscheme
(library
  (Data.Number lib)
  (export
    abs
    acos
    asin
    atan
    atan2
    ceil
    cos
    e
    exp
    floor
    fromString
    fromStringImpl
    infinity
    isFinite
    isNaN
    ln10
    ln2
    log
    log10e
    log2e
    max
    min
    nan
    pi
    pow
    remainder
    round
    sign
    sin
    sqrt
    sqrt1_2
    sqrt2
    tan
    tau
    trunc)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (Data.Number foreign))

  (scm:define tau
    6.283185307179586)

  (scm:define sqrt2
    1.4142135623730951)

  (scm:define sqrt1_2
    0.7071067811865476)

  (scm:define pi
    3.141592653589793)

  (scm:define log2e
    1.4426950408889634)

  (scm:define log10e
    0.4342944819032518)

  (scm:define ln2
    0.6931471805599453)

  (scm:define ln10
    2.302585092994046)

  (scm:define fromString
    (scm:lambda (str0)
      (fromStringImpl str0 isFinite Data.Maybe.Just Data.Maybe.Nothing)))

  (scm:define e
    2.718281828459045))
