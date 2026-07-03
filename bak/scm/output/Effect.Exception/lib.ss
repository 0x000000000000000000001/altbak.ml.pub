#!r6rs
#!chezscheme
(library
  (Effect.Exception lib)
  (export
    catchException
    error
    errorWithCause
    errorWithName
    message
    name
    showError
    showErrorImpl
    stack
    stackImpl
    throw
    throwException
    try)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Either lib) Data.Either.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (Effect.Exception foreign))

  (scm:define try
    (scm:lambda (action0)
      ((catchException (scm:lambda (x1)
        (scm:lambda ()
          (Data.Either.Left x1)))) (scm:lambda ()
        (scm:let ([a$p1 (action0)])
          (Data.Either.Right a$p1))))))

  (scm:define throw
    (scm:lambda (x0)
      (throwException (error x0))))

  (scm:define stack
    ((stackImpl Data.Maybe.Just) Data.Maybe.Nothing))

  (scm:define showError
    (scm:list (scm:cons (scm:string->symbol "show") showErrorImpl))))
