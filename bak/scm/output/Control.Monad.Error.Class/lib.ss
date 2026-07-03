#!r6rs
#!chezscheme
(library
  (Control.Monad.Error.Class lib)
  (export
    catchError
    catchJust
    liftEither
    liftMaybe
    monadErrorEffect
    monadErrorEither
    monadErrorMaybe
    monadThrowEffect
    monadThrowEither
    monadThrowMaybe
    throwError
    try
    withResource)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Either lib) Data.Either.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Unit lib) Data.Unit.)
    (prefix (Effect lib) Effect.)
    (prefix (Effect.Exception lib) Effect.Exception.))

  (scm:define throwError
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "throwError"))))

  (scm:define monadThrowMaybe
    (scm:list (scm:cons (scm:string->symbol "throwError") (scm:lambda (v0)
      Data.Maybe.Nothing)) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
      Data.Maybe.monadMaybe))))

  (scm:define monadThrowEither
    (scm:list (scm:cons (scm:string->symbol "throwError") Data.Either.Left) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
      Data.Either.monadEither))))

  (scm:define monadThrowEffect
    (scm:list (scm:cons (scm:string->symbol "throwError") Effect.Exception.throwException) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
      Effect.monadEffect))))

  (scm:define monadErrorMaybe
    (scm:list (scm:cons (scm:string->symbol "catchError") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:cond
          [(Data.Maybe.Nothing? v0) (v11 Data.Unit.unit)]
          [(Data.Maybe.Just? v0) (Data.Maybe.Just (Data.Maybe.Just-value0 v0))]
          [scm:else (rt:fail)])))) (scm:cons (scm:string->symbol "MonadThrow0") (scm:lambda (_)
      monadThrowMaybe))))

  (scm:define monadErrorEither
    (scm:list (scm:cons (scm:string->symbol "catchError") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:cond
          [(Data.Either.Left? v0) (v11 (Data.Either.Left-value0 v0))]
          [(Data.Either.Right? v0) (Data.Either.Right (Data.Either.Right-value0 v0))]
          [scm:else (rt:fail)])))) (scm:cons (scm:string->symbol "MonadThrow0") (scm:lambda (_)
      monadThrowEither))))

  (scm:define monadErrorEffect
    (scm:list (scm:cons (scm:string->symbol "catchError") (scm:lambda (b0)
      (scm:lambda (a1)
        ((Effect.Exception.catchException a1) b0)))) (scm:cons (scm:string->symbol "MonadThrow0") (scm:lambda (_)
      monadThrowEffect))))

  (scm:define liftMaybe
    (scm:lambda (dictMonadThrow0)
      (scm:let ([pure1 (rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadThrow0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure"))])
        (scm:lambda (error2)
          (scm:let ([_3 ((rt:record-ref dictMonadThrow0 (scm:string->symbol "throwError")) error2)])
            (scm:lambda (v24)
              (scm:cond
                [(Data.Maybe.Nothing? v24) _3]
                [(Data.Maybe.Just? v24) (pure1 (Data.Maybe.Just-value0 v24))]
                [scm:else (rt:fail)])))))))

  (scm:define liftEither
    (scm:lambda (dictMonadThrow0)
      (scm:let ([_1 (rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadThrow0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure"))])
        (scm:lambda (v22)
          (scm:cond
            [(Data.Either.Left? v22) ((rt:record-ref dictMonadThrow0 (scm:string->symbol "throwError")) (Data.Either.Left-value0 v22))]
            [(Data.Either.Right? v22) (_1 (Data.Either.Right-value0 v22))]
            [scm:else (rt:fail)])))))

  (scm:define catchError
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "catchError"))))

  (scm:define catchJust
    (scm:lambda (dictMonadError0)
      (scm:lambda (p1)
        (scm:lambda (act2)
          (scm:lambda (handler3)
            (((rt:record-ref dictMonadError0 (scm:string->symbol "catchError")) act2) (scm:lambda (e4)
              (scm:let ([v5 (p1 e4)])
                (scm:cond
                  [(Data.Maybe.Nothing? v5) ((rt:record-ref ((rt:record-ref dictMonadError0 (scm:string->symbol "MonadThrow0")) (scm:quote undefined)) (scm:string->symbol "throwError")) e4)]
                  [(Data.Maybe.Just? v5) (handler3 (Data.Maybe.Just-value0 v5))]
                  [scm:else (rt:fail)])))))))))

  (scm:define try
    (scm:lambda (dictMonadError0)
      (scm:let ([Monad01 ((rt:record-ref ((rt:record-ref dictMonadError0 (scm:string->symbol "MonadThrow0")) (scm:quote undefined)) (scm:string->symbol "Monad0")) (scm:quote undefined))])
        (scm:lambda (a2)
          (((rt:record-ref dictMonadError0 (scm:string->symbol "catchError")) (((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) Data.Either.Right) a2)) (scm:lambda (x3)
            ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Either.Left x3))))))))

  (scm:define withResource
    (scm:lambda (dictMonadError0)
      (scm:let*
        ([MonadThrow01 ((rt:record-ref dictMonadError0 (scm:string->symbol "MonadThrow0")) (scm:quote undefined))]
         [Monad02 ((rt:record-ref MonadThrow01 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [Bind13 ((rt:record-ref Monad02 (scm:string->symbol "Bind1")) (scm:quote undefined))]
         [try14 (try dictMonadError0)])
          (scm:lambda (acquire5)
            (scm:lambda (release6)
              (scm:lambda (kleisli7)
                (((rt:record-ref Bind13 (scm:string->symbol "bind")) acquire5) (scm:lambda (resource8)
                  (((rt:record-ref Bind13 (scm:string->symbol "bind")) (try14 (kleisli7 resource8))) (scm:lambda (result9)
                    (((rt:record-ref Bind13 (scm:string->symbol "bind")) (release6 resource8)) (scm:lambda (_)
                      (scm:cond
                        [(Data.Either.Left? result9) ((rt:record-ref MonadThrow01 (scm:string->symbol "throwError")) (Data.Either.Left-value0 result9))]
                        [(Data.Either.Right? result9) ((rt:record-ref ((rt:record-ref Monad02 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Either.Right-value0 result9))]
                        [scm:else (rt:fail)]))))))))))))))
