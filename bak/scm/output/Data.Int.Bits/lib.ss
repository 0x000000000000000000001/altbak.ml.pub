#!r6rs
#!chezscheme
(library
  (Data.Int.Bits lib)
  (export
    and
    complement
    or
    shl
    shr
    xor
    zshr)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (Data.Int.Bits foreign))
  )
