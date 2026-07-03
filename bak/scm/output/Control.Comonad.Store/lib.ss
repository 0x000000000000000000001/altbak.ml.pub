#!r6rs
#!chezscheme
(library
  (Control.Comonad.Store lib)
  (export
    runStore
    store)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define store
    (scm:lambda (f0)
      (scm:lambda (x1)
        (Data.Tuple.Tuple* f0 x1))))

  (scm:define runStore
    (scm:lambda (v0)
      (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v0) (Data.Tuple.Tuple-value1 v0)))))
