#!r6rs
#!chezscheme
(library
  (Control.Monad.Writer.Class lib)
  (export
    censor
    listen
    listens
    pass
    tell)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define tell
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "tell"))))

  (scm:define pass
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "pass"))))

  (scm:define listen
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "listen"))))

  (scm:define listens
    (scm:lambda (dictMonadWriter0)
      (scm:let ([Monad11 ((rt:record-ref ((rt:record-ref dictMonadWriter0 (scm:string->symbol "MonadTell1")) (scm:quote undefined)) (scm:string->symbol "Monad1")) (scm:quote undefined))])
        (scm:lambda (f2)
          (scm:lambda (m3)
            (((rt:record-ref ((rt:record-ref Monad11 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((rt:record-ref dictMonadWriter0 (scm:string->symbol "listen")) m3)) (scm:lambda (v4)
              ((rt:record-ref ((rt:record-ref Monad11 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v4) (f2 (Data.Tuple.Tuple-value1 v4)))))))))))

  (scm:define censor
    (scm:lambda (dictMonadWriter0)
      (scm:let ([Monad11 ((rt:record-ref ((rt:record-ref dictMonadWriter0 (scm:string->symbol "MonadTell1")) (scm:quote undefined)) (scm:string->symbol "Monad1")) (scm:quote undefined))])
        (scm:lambda (f2)
          (scm:lambda (m3)
            ((rt:record-ref dictMonadWriter0 (scm:string->symbol "pass")) (((rt:record-ref ((rt:record-ref Monad11 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) m3) (scm:lambda (a4)
              ((rt:record-ref ((rt:record-ref Monad11 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* a4 f2)))))))))))
