#!r6rs
#!chezscheme
(library
  (Control.Monad.State.Class lib)
  (export
    get
    gets
    modify
    modify_
    put
    state)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Tuple lib) Data.Tuple.)
    (prefix (Data.Unit lib) Data.Unit.))

  (scm:define state
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "state"))))

  (scm:define put
    (scm:lambda (dictMonadState0)
      (scm:lambda (s1)
        ((rt:record-ref dictMonadState0 (scm:string->symbol "state")) (scm:lambda (v2)
          (Data.Tuple.Tuple* Data.Unit.unit s1))))))

  (scm:define modify_
    (scm:lambda (dictMonadState0)
      (scm:lambda (f1)
        ((rt:record-ref dictMonadState0 (scm:string->symbol "state")) (scm:lambda (s2)
          (Data.Tuple.Tuple* Data.Unit.unit (f1 s2)))))))

  (scm:define modify
    (scm:lambda (dictMonadState0)
      (scm:lambda (f1)
        ((rt:record-ref dictMonadState0 (scm:string->symbol "state")) (scm:lambda (s2)
          (scm:let ([s$p3 (f1 s2)])
            (Data.Tuple.Tuple* s$p3 s$p3)))))))

  (scm:define gets
    (scm:lambda (dictMonadState0)
      (scm:lambda (f1)
        ((rt:record-ref dictMonadState0 (scm:string->symbol "state")) (scm:lambda (s2)
          (Data.Tuple.Tuple* (f1 s2) s2))))))

  (scm:define get
    (scm:lambda (dictMonadState0)
      ((rt:record-ref dictMonadState0 (scm:string->symbol "state")) (scm:lambda (s1)
        (Data.Tuple.Tuple* s1 s1))))))
