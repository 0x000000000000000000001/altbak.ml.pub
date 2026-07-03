#!r6rs
#!chezscheme
(library
  (Effect.Exception.Unsafe lib)
  (export
    unsafeThrow
    unsafeThrowException)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Effect.Exception lib) Effect.Exception.)
    (prefix (Effect.Unsafe lib) Effect.Unsafe.))

  (scm:define unsafeThrowException
    (scm:lambda (x0)
      (Effect.Unsafe.unsafePerformEffect (Effect.Exception.throwException x0))))

  (scm:define unsafeThrow
    (scm:lambda (x0)
      (Effect.Unsafe.unsafePerformEffect (Effect.Exception.throwException (Effect.Exception.error x0))))))
