#!r6rs
#!chezscheme
(library
  (Control.Comonad.Traced lib)
  (export
    runTraced
    traced)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:))

  (scm:define traced
    (scm:lambda (x0)
      x0))

  (scm:define runTraced
    (scm:lambda (v0)
      v0)))
