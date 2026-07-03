#!r6rs
#!chezscheme
(library
  (Control.Monad.RWS lib)
  (export
    evalRWS
    execRWS
    mapRWS
    runRWS
    rws
    withRWS)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.RWS.Trans lib) Control.Monad.RWS.Trans.)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define withRWS
    Control.Monad.RWS.Trans.withRWST)

  (scm:define rws
    (scm:lambda (f0)
      (scm:lambda (r1)
        (scm:lambda (s2)
          ((f0 r1) s2)))))

  (scm:define runRWS
    (scm:lambda (m0)
      (scm:lambda (r1)
        (scm:lambda (s2)
          ((m0 r1) s2)))))

  (scm:define mapRWS
    (scm:lambda (f0)
      (scm:lambda (v1)
        (scm:lambda (r2)
          (scm:lambda (s3)
            (f0 ((v1 r2) s3)))))))

  (scm:define execRWS
    (scm:lambda (m0)
      (scm:lambda (r1)
        (scm:lambda (s2)
          (scm:let ([_3 ((m0 r1) s2)])
            (Data.Tuple.Tuple* (Control.Monad.RWS.Trans.RWSResult-value0 _3) (Control.Monad.RWS.Trans.RWSResult-value2 _3)))))))

  (scm:define evalRWS
    (scm:lambda (m0)
      (scm:lambda (r1)
        (scm:lambda (s2)
          (scm:let ([_3 ((m0 r1) s2)])
            (Data.Tuple.Tuple* (Control.Monad.RWS.Trans.RWSResult-value1 _3) (Control.Monad.RWS.Trans.RWSResult-value2 _3))))))))
