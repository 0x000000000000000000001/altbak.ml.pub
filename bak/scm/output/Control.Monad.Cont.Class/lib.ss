#!r6rs
#!chezscheme
(library
  (Control.Monad.Cont.Class lib)
  (export
    callCC)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:))

  (scm:define callCC
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "callCC")))))
