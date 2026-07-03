#!r6rs
#!chezscheme
(library
  (Control.Monad.Gen.Class lib)
  (export
    chooseBool
    chooseFloat
    chooseInt
    resize
    sized)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:))

  (scm:define sized
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "sized"))))

  (scm:define resize
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "resize"))))

  (scm:define chooseInt
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "chooseInt"))))

  (scm:define chooseFloat
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "chooseFloat"))))

  (scm:define chooseBool
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "chooseBool")))))
