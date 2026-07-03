#!r6rs
#!chezscheme
(library
  (Control.Parallel.Class lib)
  (export
    ParCont
    altParCont
    alternativeParCont
    applicativeParCont
    applyParCont
    functorParCont
    monadParCostar
    monadParExceptT
    monadParMaybeT
    monadParParCont
    monadParReaderT
    monadParStar
    monadParWriterT
    newtypeParCont
    parallel
    plusParCont
    sequential)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.Except.Trans lib) Control.Monad.Except.Trans.)
    (prefix (Control.Monad.Maybe.Trans lib) Control.Monad.Maybe.Trans.)
    (prefix (Data.Either lib) Data.Either.)
    (prefix (Data.Functor.Costar lib) Data.Functor.Costar.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Tuple lib) Data.Tuple.)
    (prefix (Data.Unit lib) Data.Unit.)
    (prefix (Effect.Ref lib) Effect.Ref.))

  (scm:define ParCont
    (scm:lambda (x0)
      x0))

  (scm:define sequential
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "sequential"))))

  (scm:define parallel
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "parallel"))))

  (scm:define newtypeParCont
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define monadParWriterT
    (scm:lambda (dictMonoid0)
      (scm:let*
        ([_1 ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined))]
         [applyWriterT2 (scm:lambda (dictApply2)
          (scm:let*
            ([Functor03 ((rt:record-ref dictApply2 (scm:string->symbol "Functor0")) (scm:quote undefined))]
             [functorWriterT14 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f4)
              ((rt:record-ref Functor03 (scm:string->symbol "map")) (scm:lambda (v5)
                (Data.Tuple.Tuple* (f4 (Data.Tuple.Tuple-value0 v5)) (Data.Tuple.Tuple-value1 v5)))))))])
              (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v5)
                (scm:lambda (v16)
                  (((rt:record-ref dictApply2 (scm:string->symbol "apply")) (((rt:record-ref Functor03 (scm:string->symbol "map")) (scm:lambda (v37)
                    (scm:lambda (v48)
                      (Data.Tuple.Tuple* ((Data.Tuple.Tuple-value0 v37) (Data.Tuple.Tuple-value0 v48)) (((rt:record-ref _1 (scm:string->symbol "append")) (Data.Tuple.Tuple-value1 v37)) (Data.Tuple.Tuple-value1 v48)))))) v5)) v16)))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
                functorWriterT14)))))])
          (scm:lambda (dictParallel3)
            (scm:let*
              ([applyWriterT14 (applyWriterT2 ((rt:record-ref dictParallel3 (scm:string->symbol "Apply0")) (scm:quote undefined)))]
               [applyWriterT25 (applyWriterT2 ((rt:record-ref dictParallel3 (scm:string->symbol "Apply1")) (scm:quote undefined)))])
                (scm:list (scm:cons (scm:string->symbol "parallel") (scm:lambda (v6)
                  ((rt:record-ref dictParallel3 (scm:string->symbol "parallel")) v6))) (scm:cons (scm:string->symbol "sequential") (scm:lambda (v6)
                  ((rt:record-ref dictParallel3 (scm:string->symbol "sequential")) v6))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
                  applyWriterT14)) (scm:cons (scm:string->symbol "Apply1") (scm:lambda (_)
                  applyWriterT25))))))))

  (scm:define monadParStar
    (scm:lambda (dictParallel0)
      (scm:let*
        ([_1 ((rt:record-ref dictParallel0 (scm:string->symbol "Apply0")) (scm:quote undefined))]
         [_2 ((rt:record-ref _1 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [applyStar3 (scm:let ([functorStar13 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f3)
          (scm:lambda (v4)
            (scm:let ([_5 ((rt:record-ref _2 (scm:string->symbol "map")) f3)])
              (scm:lambda (x6)
                (_5 (v4 x6))))))))])
          (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:lambda (a6)
                (((rt:record-ref _1 (scm:string->symbol "apply")) (v4 a6)) (v15 a6)))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorStar13))))]
         [_4 ((rt:record-ref dictParallel0 (scm:string->symbol "Apply1")) (scm:quote undefined))]
         [_5 ((rt:record-ref _4 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [applyStar16 (scm:let ([functorStar16 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f6)
          (scm:lambda (v7)
            (scm:let ([_8 ((rt:record-ref _5 (scm:string->symbol "map")) f6)])
              (scm:lambda (x9)
                (_8 (v7 x9))))))))])
          (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v7)
            (scm:lambda (v18)
              (scm:lambda (a9)
                (((rt:record-ref _4 (scm:string->symbol "apply")) (v7 a9)) (v18 a9)))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorStar16))))])
          (scm:list (scm:cons (scm:string->symbol "parallel") (scm:lambda (v7)
            (scm:lambda (x8)
              ((rt:record-ref dictParallel0 (scm:string->symbol "parallel")) (v7 x8))))) (scm:cons (scm:string->symbol "sequential") (scm:lambda (v7)
            (scm:lambda (x8)
              ((rt:record-ref dictParallel0 (scm:string->symbol "sequential")) (v7 x8))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
            applyStar3)) (scm:cons (scm:string->symbol "Apply1") (scm:lambda (_)
            applyStar16))))))

  (scm:define monadParReaderT
    (scm:lambda (dictParallel0)
      (scm:let*
        ([_1 ((rt:record-ref dictParallel0 (scm:string->symbol "Apply0")) (scm:quote undefined))]
         [_2 ((rt:record-ref _1 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [applyReaderT3 (scm:let ([functorReaderT13 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (x3)
          (scm:let ([_4 ((rt:record-ref _2 (scm:string->symbol "map")) x3)])
            (scm:lambda (v5)
              (scm:lambda (x6)
                (_4 (v5 x6))))))))])
          (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:lambda (r6)
                (((rt:record-ref _1 (scm:string->symbol "apply")) (v4 r6)) (v15 r6)))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorReaderT13))))]
         [_4 ((rt:record-ref dictParallel0 (scm:string->symbol "Apply1")) (scm:quote undefined))]
         [_5 ((rt:record-ref _4 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [applyReaderT16 (scm:let ([functorReaderT16 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (x6)
          (scm:let ([_7 ((rt:record-ref _5 (scm:string->symbol "map")) x6)])
            (scm:lambda (v8)
              (scm:lambda (x9)
                (_7 (v8 x9))))))))])
          (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v7)
            (scm:lambda (v18)
              (scm:lambda (r9)
                (((rt:record-ref _4 (scm:string->symbol "apply")) (v7 r9)) (v18 r9)))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorReaderT16))))])
          (scm:list (scm:cons (scm:string->symbol "parallel") (scm:lambda (v7)
            (scm:lambda (x8)
              ((rt:record-ref dictParallel0 (scm:string->symbol "parallel")) (v7 x8))))) (scm:cons (scm:string->symbol "sequential") (scm:lambda (v7)
            (scm:lambda (x8)
              ((rt:record-ref dictParallel0 (scm:string->symbol "sequential")) (v7 x8))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
            applyReaderT3)) (scm:cons (scm:string->symbol "Apply1") (scm:lambda (_)
            applyReaderT16))))))

  (scm:define monadParMaybeT
    (scm:lambda (dictParallel0)
      (scm:let*
        ([_1 ((rt:record-ref dictParallel0 (scm:string->symbol "Apply1")) (scm:quote undefined))]
         [Functor02 ((rt:record-ref _1 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorCompose23 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f3)
          (scm:lambda (v4)
            (((rt:record-ref Functor02 (scm:string->symbol "map")) (scm:lambda (v15)
              (scm:cond
                [(Data.Maybe.Just? v15) (Data.Maybe.Just (f3 (Data.Maybe.Just-value0 v15)))]
                [scm:else Data.Maybe.Nothing]))) v4)))))]
         [applyCompose4 (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v4)
          (scm:lambda (v15)
            (((rt:record-ref _1 (scm:string->symbol "apply")) (((rt:record-ref Functor02 (scm:string->symbol "map")) (rt:record-ref Data.Maybe.applyMaybe (scm:string->symbol "apply"))) v4)) v15)))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
          functorCompose23)))])
          (scm:lambda (dictMonad5)
            (scm:let ([applyMaybeT6 (Control.Monad.Maybe.Trans.applyMaybeT dictMonad5)])
              (scm:list (scm:cons (scm:string->symbol "parallel") (scm:lambda (v7)
                ((rt:record-ref dictParallel0 (scm:string->symbol "parallel")) v7))) (scm:cons (scm:string->symbol "sequential") (scm:lambda (v7)
                ((rt:record-ref dictParallel0 (scm:string->symbol "sequential")) v7))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
                applyMaybeT6)) (scm:cons (scm:string->symbol "Apply1") (scm:lambda (_)
                applyCompose4))))))))

  (scm:define monadParExceptT
    (scm:lambda (dictParallel0)
      (scm:let*
        ([_1 ((rt:record-ref dictParallel0 (scm:string->symbol "Apply1")) (scm:quote undefined))]
         [Functor02 ((rt:record-ref _1 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorCompose23 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f3)
          (scm:lambda (v4)
            (((rt:record-ref Functor02 (scm:string->symbol "map")) (scm:lambda (m5)
              (scm:cond
                [(Data.Either.Left? m5) (Data.Either.Left (Data.Either.Left-value0 m5))]
                [(Data.Either.Right? m5) (Data.Either.Right (f3 (Data.Either.Right-value0 m5)))]
                [scm:else (rt:fail)]))) v4)))))]
         [applyCompose4 (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v4)
          (scm:lambda (v15)
            (((rt:record-ref _1 (scm:string->symbol "apply")) (((rt:record-ref Functor02 (scm:string->symbol "map")) (rt:record-ref Data.Either.applyEither (scm:string->symbol "apply"))) v4)) v15)))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
          functorCompose23)))])
          (scm:lambda (dictMonad5)
            (scm:let ([applyExceptT6 (Control.Monad.Except.Trans.applyExceptT dictMonad5)])
              (scm:list (scm:cons (scm:string->symbol "parallel") (scm:lambda (v7)
                ((rt:record-ref dictParallel0 (scm:string->symbol "parallel")) v7))) (scm:cons (scm:string->symbol "sequential") (scm:lambda (v7)
                ((rt:record-ref dictParallel0 (scm:string->symbol "sequential")) v7))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
                applyExceptT6)) (scm:cons (scm:string->symbol "Apply1") (scm:lambda (_)
                applyCompose4))))))))

  (scm:define monadParCostar
    (scm:lambda (dictParallel0)
      (scm:list (scm:cons (scm:string->symbol "parallel") (scm:lambda (v1)
        (scm:lambda (x2)
          (v1 ((rt:record-ref dictParallel0 (scm:string->symbol "sequential")) x2))))) (scm:cons (scm:string->symbol "sequential") (scm:lambda (v1)
        (scm:lambda (x2)
          (v1 ((rt:record-ref dictParallel0 (scm:string->symbol "parallel")) x2))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
        Data.Functor.Costar.applyCostar)) (scm:cons (scm:string->symbol "Apply1") (scm:lambda (_)
        Data.Functor.Costar.applyCostar)))))

  (scm:define monadParParCont
    (scm:lambda (dictMonadEffect0)
      (scm:let*
        ([functorContT11 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f1)
          (scm:lambda (v2)
            (scm:lambda (k3)
              (v2 (scm:lambda (a4)
                (k3 (f1 a4)))))))))]
         [applyContT2 (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v2)
          (scm:lambda (v13)
            (scm:lambda (k4)
              (v2 (scm:lambda (g5)
                (v13 (scm:lambda (a6)
                  (k4 (g5 a6)))))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
          functorContT11)))])
          (scm:list (scm:cons (scm:string->symbol "parallel") ParCont) (scm:cons (scm:string->symbol "sequential") (scm:lambda (v3)
            v3)) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
            applyContT2)) (scm:cons (scm:string->symbol "Apply1") (scm:lambda (_)
            (applyParCont dictMonadEffect0)))))))

  (scm:define functorParCont
    (scm:lambda (dictMonadEffect0)
      (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f1)
        (scm:lambda (x2)
          ((rt:record-ref (monadParParCont dictMonadEffect0) (scm:string->symbol "parallel")) (scm:let ([_3 ((rt:record-ref (monadParParCont dictMonadEffect0) (scm:string->symbol "sequential")) x2)])
            (scm:lambda (k4)
              (_3 (scm:lambda (a5)
                (k4 (f1 a5)))))))))))))

  (scm:define applyParCont
    (scm:lambda (dictMonadEffect0)
      (scm:let ([Bind11 ((rt:record-ref ((rt:record-ref dictMonadEffect0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined))])
        (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v2)
          (scm:lambda (v13)
            (scm:lambda (k4)
              (((rt:record-ref Bind11 (scm:string->symbol "bind")) ((rt:record-ref dictMonadEffect0 (scm:string->symbol "liftEffect")) (Effect.Ref._new Data.Maybe.Nothing))) (scm:lambda (ra5)
                (((rt:record-ref Bind11 (scm:string->symbol "bind")) ((rt:record-ref dictMonadEffect0 (scm:string->symbol "liftEffect")) (Effect.Ref._new Data.Maybe.Nothing))) (scm:lambda (rb6)
                  (((rt:record-ref Bind11 (scm:string->symbol "bind")) (v2 (scm:lambda (a7)
                    (((rt:record-ref Bind11 (scm:string->symbol "bind")) ((rt:record-ref dictMonadEffect0 (scm:string->symbol "liftEffect")) (Effect.Ref.read rb6))) (scm:lambda (mb8)
                      (scm:cond
                        [(Data.Maybe.Nothing? mb8) ((rt:record-ref dictMonadEffect0 (scm:string->symbol "liftEffect")) ((Effect.Ref.write (Data.Maybe.Just a7)) ra5))]
                        [(Data.Maybe.Just? mb8) (k4 (a7 (Data.Maybe.Just-value0 mb8)))]
                        [scm:else (rt:fail)])))))) (scm:lambda (_)
                    (v13 (scm:lambda (b8)
                      (((rt:record-ref Bind11 (scm:string->symbol "bind")) ((rt:record-ref dictMonadEffect0 (scm:string->symbol "liftEffect")) (Effect.Ref.read ra5))) (scm:lambda (ma9)
                        (scm:cond
                          [(Data.Maybe.Nothing? ma9) ((rt:record-ref dictMonadEffect0 (scm:string->symbol "liftEffect")) ((Effect.Ref.write (Data.Maybe.Just b8)) rb6))]
                          [(Data.Maybe.Just? ma9) (k4 ((Data.Maybe.Just-value0 ma9) b8))]
                          [scm:else (rt:fail)]))))))))))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
          (functorParCont dictMonadEffect0)))))))

  (scm:define applicativeParCont
    (scm:lambda (dictMonadEffect0)
      (scm:let ([applyParCont11 (applyParCont dictMonadEffect0)])
        (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (x2)
          ((rt:record-ref (monadParParCont dictMonadEffect0) (scm:string->symbol "parallel")) (scm:lambda (k3)
            (k3 x2))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
          applyParCont11))))))

  (scm:define altParCont
    (scm:lambda (dictMonadEffect0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadEffect0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [Bind12 ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined))]
         [_3 ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
         [functorParCont14 (functorParCont dictMonadEffect0)])
          (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (v5)
            (scm:lambda (v16)
              (scm:lambda (k7)
                (((rt:record-ref Bind12 (scm:string->symbol "bind")) ((rt:record-ref dictMonadEffect0 (scm:string->symbol "liftEffect")) (Effect.Ref._new #f))) (scm:lambda (done8)
                  (((rt:record-ref Bind12 (scm:string->symbol "bind")) (v5 (scm:lambda (a9)
                    (((rt:record-ref Bind12 (scm:string->symbol "bind")) ((rt:record-ref dictMonadEffect0 (scm:string->symbol "liftEffect")) (Effect.Ref.read done8))) (scm:lambda (b10)
                      (scm:cond
                        [b10 ((rt:record-ref _3 (scm:string->symbol "pure")) Data.Unit.unit)]
                        [scm:else (((rt:record-ref Bind12 (scm:string->symbol "bind")) ((rt:record-ref dictMonadEffect0 (scm:string->symbol "liftEffect")) ((Effect.Ref.write #t) done8))) (scm:lambda (_)
                          (k7 a9)))])))))) (scm:lambda (_)
                    (v16 (scm:lambda (a10)
                      (((rt:record-ref Bind12 (scm:string->symbol "bind")) ((rt:record-ref dictMonadEffect0 (scm:string->symbol "liftEffect")) (Effect.Ref.read done8))) (scm:lambda (b11)
                        (scm:cond
                          [b11 ((rt:record-ref _3 (scm:string->symbol "pure")) Data.Unit.unit)]
                          [scm:else (((rt:record-ref Bind12 (scm:string->symbol "bind")) ((rt:record-ref dictMonadEffect0 (scm:string->symbol "liftEffect")) ((Effect.Ref.write #t) done8))) (scm:lambda (_)
                            (k7 a10)))]))))))))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorParCont14))))))

  (scm:define plusParCont
    (scm:lambda (dictMonadEffect0)
      (scm:let ([altParCont11 (altParCont dictMonadEffect0)])
        (scm:list (scm:cons (scm:string->symbol "empty") (scm:lambda (v2)
          ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadEffect0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) Data.Unit.unit))) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
          altParCont11))))))

  (scm:define alternativeParCont
    (scm:lambda (dictMonadEffect0)
      (scm:let*
        ([applicativeParCont11 (applicativeParCont dictMonadEffect0)]
         [plusParCont12 (plusParCont dictMonadEffect0)])
          (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
            applicativeParCont11)) (scm:cons (scm:string->symbol "Plus1") (scm:lambda (_)
            plusParCont12)))))))
