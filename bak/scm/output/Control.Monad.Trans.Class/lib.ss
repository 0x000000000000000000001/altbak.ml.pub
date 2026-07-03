#!r6rs
#!chezscheme
(library
  (Control.Monad.Trans.Class lib)
  (export
    lift)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:))

  (scm:define lift
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "lift")))))
