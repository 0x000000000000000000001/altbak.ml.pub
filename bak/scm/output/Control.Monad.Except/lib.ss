#!r6rs
#!chezscheme
(library
  (Control.Monad.Except lib)
  (export
    mapExcept
    runExcept
    withExcept)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Either lib) Data.Either.))

  (scm:define withExcept
    (scm:lambda (f0)
      (scm:lambda (v1)
        (scm:cond
          [(Data.Either.Right? v1) (Data.Either.Right (Data.Either.Right-value0 v1))]
          [(Data.Either.Left? v1) (Data.Either.Left (f0 (Data.Either.Left-value0 v1)))]
          [scm:else (rt:fail)]))))

  (scm:define runExcept
    (scm:lambda (x0)
      x0))

  (scm:define mapExcept
    (scm:lambda (f0)
      (scm:lambda (v1)
        (f0 v1)))))
