#!r6rs
#!chezscheme
(library
  (Control.Monad.Reader lib)
  (export
    mapReader
    runReader
    withReader)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.Reader.Trans lib) Control.Monad.Reader.Trans.))

  (scm:define withReader
    Control.Monad.Reader.Trans.withReaderT)

  (scm:define runReader
    (scm:lambda (v0)
      (scm:lambda (x1)
        (v0 x1))))

  (scm:define mapReader
    (scm:lambda (f0)
      (scm:lambda (v1)
        (scm:lambda (x2)
          (f0 (v1 x2)))))))
