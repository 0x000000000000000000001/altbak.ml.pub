#!r6rs
#!chezscheme
(library
  (Test.Async lib)
  (export
    act
    describe)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Either lib) Data.Either.)
    (prefix (Data.Unit lib) Data.Unit.)
    (prefix (Effect.Aff lib) Effect.Aff.)
    (prefix (Effect.Console lib) Effect.Console.))

  (scm:define describe
    (Effect.Console.log (rt:string->pstring "Asynchronous Concurrency (Aff):")))

  (scm:define act
    (scm:let ([_0 (Effect.Aff._makeFiber Effect.Aff.ffiUtil ((Effect.Aff._bind (Effect.Aff.forkAff ((Effect.Aff._bind (Effect.Aff._delay Data.Either.Right 10.0)) (scm:lambda (_)
      ((Effect.Aff._bind (Effect.Aff._liftEffect (Effect.Console.log (rt:string->pstring "Fiber 1 finished")))) (scm:lambda (_)
        (Effect.Aff._pure Data.Unit.unit))))))) (scm:lambda (_)
      ((Effect.Aff._bind (Effect.Aff.forkAff ((Effect.Aff._bind (Effect.Aff._delay Data.Either.Right 20.0)) (scm:lambda (_)
        ((Effect.Aff._bind (Effect.Aff._liftEffect (Effect.Console.log (rt:string->pstring "Fiber 2 finished")))) (scm:lambda (_)
          (Effect.Aff._pure Data.Unit.unit))))))) (scm:lambda (_)
        ((Effect.Aff._bind (Effect.Aff._delay Data.Either.Right 30.0)) (scm:lambda (_)
          ((Effect.Aff._bind (Effect.Aff._liftEffect (Effect.Console.log (rt:string->pstring "Main fiber finished")))) (scm:lambda (_)
            (Effect.Aff._pure Data.Unit.unit))))))))))])
      (scm:lambda ()
        (scm:let*
          ([fiber1 (_0)]
           [_ ((rt:record-ref fiber1 (scm:string->symbol "run")))])
            Data.Unit.unit)))))
