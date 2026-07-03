#!r6rs
#!chezscheme
(library
  (Control.Monad.Writer lib)
  (export
    execWriter
    mapWriter
    runWriter
    writer)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define writer
    (scm:lambda (x0)
      x0))

  (scm:define runWriter
    (scm:lambda (x0)
      x0))

  (scm:define mapWriter
    (scm:lambda (f0)
      (scm:lambda (v1)
        (f0 v1))))

  (scm:define execWriter
    (scm:lambda (m0)
      (Data.Tuple.Tuple-value1 m0))))
