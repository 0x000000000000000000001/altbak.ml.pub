#!r6rs
#!chezscheme
(library
  (Control.Monad.State lib)
  (export
    evalState
    execState
    mapState
    runState
    withState)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.State.Trans lib) Control.Monad.State.Trans.)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define withState
    Control.Monad.State.Trans.withStateT)

  (scm:define runState
    (scm:lambda (v0)
      (scm:lambda (x1)
        (v0 x1))))

  (scm:define mapState
    (scm:lambda (f0)
      (scm:lambda (v1)
        (scm:lambda (x2)
          (f0 (v1 x2))))))

  (scm:define execState
    (scm:lambda (v0)
      (scm:lambda (s1)
        (Data.Tuple.Tuple-value1 (v0 s1)))))

  (scm:define evalState
    (scm:lambda (v0)
      (scm:lambda (s1)
        (Data.Tuple.Tuple-value0 (v0 s1))))))
