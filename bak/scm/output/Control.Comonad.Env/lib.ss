#!r6rs
#!chezscheme
(library
  (Control.Comonad.Env lib)
  (export
    env
    mapEnv
    runEnv
    withEnv)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Comonad.Env.Trans lib) Control.Comonad.Env.Trans.)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define withEnv
    Control.Comonad.Env.Trans.withEnvT)

  (scm:define runEnv
    (scm:lambda (v0)
      (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v0) (Data.Tuple.Tuple-value1 v0))))

  (scm:define mapEnv
    (scm:lambda (f0)
      (scm:lambda (v1)
        (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v1) (f0 (Data.Tuple.Tuple-value1 v1))))))

  (scm:define env
    (scm:lambda (e0)
      (scm:lambda (a1)
        (Data.Tuple.Tuple* e0 a1)))))
