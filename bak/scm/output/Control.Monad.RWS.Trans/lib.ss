#!r6rs
#!chezscheme
(library
  (Control.Monad.RWS.Trans lib)
  (export
    RWSResult
    RWSResult*
    RWSResult-value0
    RWSResult-value1
    RWSResult-value2
    RWSResult?
    RWST
    altRWST
    alternativeRWST
    applicativeRWST
    applyRWST
    bindRWST
    evalRWST
    execRWST
    functorRWST
    lazyRWST
    mapRWST
    monadAskRWST
    monadEffectRWS
    monadErrorRWST
    monadRWST
    monadReaderRWST
    monadRecRWST
    monadSTRWST
    monadStateRWST
    monadTellRWST
    monadThrowRWST
    monadTransRWST
    monadWriterRWST
    monoidRWST
    newtypeRWST
    plusRWST
    runRWST
    semigroupRWST
    withRWST)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.Rec.Class lib) Control.Monad.Rec.Class.)
    (prefix (Data.Tuple lib) Data.Tuple.)
    (prefix (Data.Unit lib) Data.Unit.))

  (scm:define-record-type (RWSResult$ RWSResult* RWSResult?)
    (scm:fields (scm:immutable value0 RWSResult-value0) (scm:immutable value1 RWSResult-value1) (scm:immutable value2 RWSResult-value2)))

  (scm:define RWSResult
    (scm:lambda (value0)
      (scm:lambda (value1)
        (scm:lambda (value2)
          (RWSResult* value0 value1 value2)))))

  (scm:define RWST
    (scm:lambda (x0)
      x0))

  (scm:define withRWST
    (scm:lambda (f0)
      (scm:lambda (m1)
        (scm:lambda (r2)
          (scm:lambda (s3)
            (scm:let ([_4 ((f0 r2) s3)])
              ((m1 (Data.Tuple.Tuple-value0 _4)) (Data.Tuple.Tuple-value1 _4))))))))

  (scm:define runRWST
    (scm:lambda (v0)
      v0))

  (scm:define newtypeRWST
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define monadTransRWST
    (scm:lambda (dictMonoid0)
      (scm:let ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))])
        (scm:list (scm:cons (scm:string->symbol "lift") (scm:lambda (dictMonad2)
          (scm:lambda (m3)
            (scm:lambda (v4)
              (scm:lambda (s5)
                (((rt:record-ref ((rt:record-ref dictMonad2 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) m3) (scm:lambda (a6)
                  ((rt:record-ref ((rt:record-ref dictMonad2 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (RWSResult* s5 a6 mempty1)))))))))))))

  (scm:define mapRWST
    (scm:lambda (f0)
      (scm:lambda (v1)
        (scm:lambda (r2)
          (scm:lambda (s3)
            (f0 ((v1 r2) s3)))))))

  (scm:define lazyRWST
    (scm:list (scm:cons (scm:string->symbol "defer") (scm:lambda (f0)
      (scm:lambda (r1)
        (scm:lambda (s2)
          (((f0 Data.Unit.unit) r1) s2)))))))

  (scm:define functorRWST
    (scm:lambda (dictFunctor0)
      (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f1)
        (scm:lambda (v2)
          (scm:lambda (r3)
            (scm:lambda (s4)
              (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (scm:lambda (v15)
                (RWSResult* (RWSResult-value0 v15) (f1 (RWSResult-value1 v15)) (RWSResult-value2 v15)))) ((v2 r3) s4))))))))))

  (scm:define execRWST
    (scm:lambda (dictMonad0)
      (scm:lambda (v1)
        (scm:lambda (r2)
          (scm:lambda (s3)
            (((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((v1 r2) s3)) (scm:lambda (v14)
              ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* (RWSResult-value0 v14) (RWSResult-value2 v14))))))))))

  (scm:define evalRWST
    (scm:lambda (dictMonad0)
      (scm:lambda (v1)
        (scm:lambda (r2)
          (scm:lambda (s3)
            (((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((v1 r2) s3)) (scm:lambda (v14)
              ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* (RWSResult-value1 v14) (RWSResult-value2 v14))))))))))

  (scm:define applyRWST
    (scm:lambda (dictBind0)
      (scm:let*
        ([Functor01 ((rt:record-ref ((rt:record-ref dictBind0 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorRWST12 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f2)
          (scm:lambda (v3)
            (scm:lambda (r4)
              (scm:lambda (s5)
                (((rt:record-ref Functor01 (scm:string->symbol "map")) (scm:lambda (v16)
                  (RWSResult* (RWSResult-value0 v16) (f2 (RWSResult-value1 v16)) (RWSResult-value2 v16)))) ((v3 r4) s5))))))))])
          (scm:lambda (dictMonoid3)
            (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v4)
              (scm:lambda (v15)
                (scm:lambda (r6)
                  (scm:lambda (s7)
                    (((rt:record-ref dictBind0 (scm:string->symbol "bind")) ((v4 r6) s7)) (scm:lambda (v28)
                      (scm:let ([_9 (RWSResult-value2 v28)])
                        (((rt:record-ref Functor01 (scm:string->symbol "map")) (scm:lambda (v310)
                          (RWSResult* (RWSResult-value0 v310) ((RWSResult-value1 v28) (RWSResult-value1 v310)) (((rt:record-ref ((rt:record-ref dictMonoid3 (scm:string->symbol "Semigroup0")) (scm:quote undefined)) (scm:string->symbol "append")) _9) (RWSResult-value2 v310))))) ((v15 r6) (RWSResult-value0 v28))))))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
              functorRWST12)))))))

  (scm:define bindRWST
    (scm:lambda (dictBind0)
      (scm:let*
        ([_1 ((rt:record-ref ((rt:record-ref dictBind0 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [applyRWST12 (applyRWST dictBind0)])
          (scm:lambda (dictMonoid3)
            (scm:let ([applyRWST24 (applyRWST12 dictMonoid3)])
              (scm:list (scm:cons (scm:string->symbol "bind") (scm:lambda (v5)
                (scm:lambda (f6)
                  (scm:lambda (r7)
                    (scm:lambda (s8)
                      (((rt:record-ref dictBind0 (scm:string->symbol "bind")) ((v5 r7) s8)) (scm:lambda (v19)
                        (scm:let ([_10 (RWSResult-value2 v19)])
                          (((rt:record-ref _1 (scm:string->symbol "map")) (scm:lambda (v311)
                            (RWSResult* (RWSResult-value0 v311) (RWSResult-value1 v311) (((rt:record-ref ((rt:record-ref dictMonoid3 (scm:string->symbol "Semigroup0")) (scm:quote undefined)) (scm:string->symbol "append")) _10) (RWSResult-value2 v311))))) (((f6 (RWSResult-value1 v19)) r7) (RWSResult-value0 v19))))))))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
                applyRWST24))))))))

  (scm:define semigroupRWST
    (scm:lambda (dictBind0)
      (scm:let ([applyRWST11 (applyRWST dictBind0)])
        (scm:lambda (dictMonoid2)
          (scm:let ([_3 (applyRWST11 dictMonoid2)])
            (scm:lambda (dictSemigroup4)
              (scm:list (scm:cons (scm:string->symbol "append") (scm:let ([_5 (rt:record-ref dictSemigroup4 (scm:string->symbol "append"))])
                (scm:lambda (a6)
                  (scm:lambda (b7)
                    (((rt:record-ref _3 (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref _3 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) _5) a6)) b7))))))))))))

  (scm:define applicativeRWST
    (scm:lambda (dictMonad0)
      (scm:let ([applyRWST11 (applyRWST ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)))])
        (scm:lambda (dictMonoid2)
          (scm:let*
            ([mempty3 (rt:record-ref dictMonoid2 (scm:string->symbol "mempty"))]
             [applyRWST24 (applyRWST11 dictMonoid2)])
              (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (a5)
                (scm:lambda (v6)
                  (scm:lambda (s7)
                    ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (RWSResult* s7 a5 mempty3)))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
                applyRWST24))))))))

  (scm:define monadRWST
    (scm:lambda (dictMonad0)
      (scm:let*
        ([applicativeRWST11 (applicativeRWST dictMonad0)]
         [bindRWST12 (bindRWST ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)))])
          (scm:lambda (dictMonoid3)
            (scm:let*
              ([applicativeRWST24 (applicativeRWST11 dictMonoid3)]
               [bindRWST25 (bindRWST12 dictMonoid3)])
                (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
                  applicativeRWST24)) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
                  bindRWST25))))))))

  (scm:define monadAskRWST
    (scm:lambda (dictMonad0)
      (scm:let ([monadRWST11 (monadRWST dictMonad0)])
        (scm:lambda (dictMonoid2)
          (scm:let*
            ([mempty3 (rt:record-ref dictMonoid2 (scm:string->symbol "mempty"))]
             [monadRWST24 (monadRWST11 dictMonoid2)])
              (scm:list (scm:cons (scm:string->symbol "ask") (scm:lambda (r5)
                (scm:lambda (s6)
                  ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (RWSResult* s6 r5 mempty3))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
                monadRWST24))))))))

  (scm:define monadReaderRWST
    (scm:lambda (dictMonad0)
      (scm:let ([monadAskRWST11 (monadAskRWST dictMonad0)])
        (scm:lambda (dictMonoid2)
          (scm:let ([monadAskRWST23 (monadAskRWST11 dictMonoid2)])
            (scm:list (scm:cons (scm:string->symbol "local") (scm:lambda (f4)
              (scm:lambda (m5)
                (scm:lambda (r6)
                  (scm:lambda (s7)
                    ((m5 (f4 r6)) s7)))))) (scm:cons (scm:string->symbol "MonadAsk0") (scm:lambda (_)
              monadAskRWST23))))))))

  (scm:define monadEffectRWS
    (scm:lambda (dictMonoid0)
      (scm:let ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))])
        (scm:lambda (dictMonadEffect2)
          (scm:let*
            ([Monad03 ((rt:record-ref dictMonadEffect2 (scm:string->symbol "Monad0")) (scm:quote undefined))]
             [monadRWST14 ((monadRWST Monad03) dictMonoid0)])
              (scm:list (scm:cons (scm:string->symbol "liftEffect") (scm:lambda (x5)
                (scm:let ([_6 ((rt:record-ref dictMonadEffect2 (scm:string->symbol "liftEffect")) x5)])
                  (scm:lambda (v7)
                    (scm:lambda (s8)
                      (((rt:record-ref ((rt:record-ref Monad03 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) _6) (scm:lambda (a9)
                        ((rt:record-ref ((rt:record-ref Monad03 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (RWSResult* s8 a9 mempty1))))))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
                monadRWST14))))))))

  (scm:define monadRecRWST
    (scm:lambda (dictMonadRec0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadRec0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadRWST12 (monadRWST Monad01)])
          (scm:lambda (dictMonoid3)
            (scm:let*
              ([_4 ((rt:record-ref dictMonoid3 (scm:string->symbol "Semigroup0")) (scm:quote undefined))]
               [mempty5 (rt:record-ref dictMonoid3 (scm:string->symbol "mempty"))]
               [monadRWST26 (monadRWST12 dictMonoid3)])
                (scm:list (scm:cons (scm:string->symbol "tailRecM") (scm:lambda (k7)
                  (scm:lambda (a8)
                    (scm:lambda (r9)
                      (scm:lambda (s10)
                        (((rt:record-ref dictMonadRec0 (scm:string->symbol "tailRecM")) (scm:lambda (v11)
                          (scm:let ([_12 (RWSResult-value2 v11)])
                            (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) (((k7 (RWSResult-value1 v11)) r9) (RWSResult-value0 v11))) (scm:lambda (v213)
                              ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (scm:cond
                                [(Control.Monad.Rec.Class.Loop? (RWSResult-value1 v213)) (Control.Monad.Rec.Class.Loop (RWSResult* (RWSResult-value0 v213) (Control.Monad.Rec.Class.Loop-value0 (RWSResult-value1 v213)) (((rt:record-ref _4 (scm:string->symbol "append")) _12) (RWSResult-value2 v213))))]
                                [(Control.Monad.Rec.Class.Done? (RWSResult-value1 v213)) (Control.Monad.Rec.Class.Done (RWSResult* (RWSResult-value0 v213) (Control.Monad.Rec.Class.Done-value0 (RWSResult-value1 v213)) (((rt:record-ref _4 (scm:string->symbol "append")) _12) (RWSResult-value2 v213))))]
                                [scm:else (rt:fail)]))))))) (RWSResult* s10 a8 mempty5))))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
                  monadRWST26))))))))

  (scm:define monadStateRWST
    (scm:lambda (dictMonad0)
      (scm:let ([monadRWST11 (monadRWST dictMonad0)])
        (scm:lambda (dictMonoid2)
          (scm:let*
            ([mempty3 (rt:record-ref dictMonoid2 (scm:string->symbol "mempty"))]
             [monadRWST24 (monadRWST11 dictMonoid2)])
              (scm:list (scm:cons (scm:string->symbol "state") (scm:lambda (f5)
                (scm:lambda (v6)
                  (scm:lambda (s7)
                    (scm:let ([v18 (f5 s7)])
                      ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (RWSResult* (Data.Tuple.Tuple-value1 v18) (Data.Tuple.Tuple-value0 v18) mempty3))))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
                monadRWST24))))))))

  (scm:define monadTellRWST
    (scm:lambda (dictMonad0)
      (scm:let ([monadRWST11 (monadRWST dictMonad0)])
        (scm:lambda (dictMonoid2)
          (scm:let*
            ([Semigroup03 ((rt:record-ref dictMonoid2 (scm:string->symbol "Semigroup0")) (scm:quote undefined))]
             [monadRWST24 (monadRWST11 dictMonoid2)])
              (scm:list (scm:cons (scm:string->symbol "tell") (scm:lambda (w5)
                (scm:lambda (v6)
                  (scm:lambda (s7)
                    ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (RWSResult* s7 Data.Unit.unit w5)))))) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
                Semigroup03)) (scm:cons (scm:string->symbol "Monad1") (scm:lambda (_)
                monadRWST24))))))))

  (scm:define monadWriterRWST
    (scm:lambda (dictMonad0)
      (scm:let*
        ([_1 ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined))]
         [_2 ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
         [monadTellRWST13 (monadTellRWST dictMonad0)])
          (scm:lambda (dictMonoid4)
            (scm:let ([monadTellRWST25 (monadTellRWST13 dictMonoid4)])
              (scm:list (scm:cons (scm:string->symbol "listen") (scm:lambda (m6)
                (scm:lambda (r7)
                  (scm:lambda (s8)
                    (((rt:record-ref _1 (scm:string->symbol "bind")) ((m6 r7) s8)) (scm:lambda (v9)
                      ((rt:record-ref _2 (scm:string->symbol "pure")) (RWSResult* (RWSResult-value0 v9) (Data.Tuple.Tuple* (RWSResult-value1 v9) (RWSResult-value2 v9)) (RWSResult-value2 v9))))))))) (scm:cons (scm:string->symbol "pass") (scm:lambda (m6)
                (scm:lambda (r7)
                  (scm:lambda (s8)
                    (((rt:record-ref _1 (scm:string->symbol "bind")) ((m6 r7) s8)) (scm:lambda (v9)
                      ((rt:record-ref _2 (scm:string->symbol "pure")) (RWSResult* (RWSResult-value0 v9) (Data.Tuple.Tuple-value0 (RWSResult-value1 v9)) ((Data.Tuple.Tuple-value1 (RWSResult-value1 v9)) (RWSResult-value2 v9)))))))))) (scm:cons (scm:string->symbol "Monoid0") (scm:lambda (_)
                dictMonoid4)) (scm:cons (scm:string->symbol "MonadTell1") (scm:lambda (_)
                monadTellRWST25))))))))

  (scm:define monadThrowRWST
    (scm:lambda (dictMonadThrow0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadThrow0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadRWST12 (monadRWST Monad01)])
          (scm:lambda (dictMonoid3)
            (scm:let*
              ([mempty4 (rt:record-ref dictMonoid3 (scm:string->symbol "mempty"))]
               [monadRWST25 (monadRWST12 dictMonoid3)])
                (scm:list (scm:cons (scm:string->symbol "throwError") (scm:lambda (e6)
                  (scm:let ([_7 ((rt:record-ref dictMonadThrow0 (scm:string->symbol "throwError")) e6)])
                    (scm:lambda (v8)
                      (scm:lambda (s9)
                        (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) _7) (scm:lambda (a10)
                          ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (RWSResult* s9 a10 mempty4))))))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
                  monadRWST25))))))))

  (scm:define monadErrorRWST
    (scm:lambda (dictMonadError0)
      (scm:let ([monadThrowRWST11 (monadThrowRWST ((rt:record-ref dictMonadError0 (scm:string->symbol "MonadThrow0")) (scm:quote undefined)))])
        (scm:lambda (dictMonoid2)
          (scm:let ([monadThrowRWST23 (monadThrowRWST11 dictMonoid2)])
            (scm:list (scm:cons (scm:string->symbol "catchError") (scm:lambda (m4)
              (scm:lambda (h5)
                (scm:lambda (r6)
                  (scm:lambda (s7)
                    (((rt:record-ref dictMonadError0 (scm:string->symbol "catchError")) ((m4 r6) s7)) (scm:lambda (e8)
                      (((h5 e8) r6) s7)))))))) (scm:cons (scm:string->symbol "MonadThrow0") (scm:lambda (_)
              monadThrowRWST23))))))))

  (scm:define monadSTRWST
    (scm:lambda (dictMonoid0)
      (scm:let ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))])
        (scm:lambda (dictMonadST2)
          (scm:let*
            ([Monad03 ((rt:record-ref dictMonadST2 (scm:string->symbol "Monad0")) (scm:quote undefined))]
             [monadRWST14 ((monadRWST Monad03) dictMonoid0)])
              (scm:list (scm:cons (scm:string->symbol "liftST") (scm:lambda (x5)
                (scm:let ([_6 ((rt:record-ref dictMonadST2 (scm:string->symbol "liftST")) x5)])
                  (scm:lambda (v7)
                    (scm:lambda (s8)
                      (((rt:record-ref ((rt:record-ref Monad03 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) _6) (scm:lambda (a9)
                        ((rt:record-ref ((rt:record-ref Monad03 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (RWSResult* s8 a9 mempty1))))))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
                monadRWST14))))))))

  (scm:define monoidRWST
    (scm:lambda (dictMonad0)
      (scm:let*
        ([applicativeRWST11 (applicativeRWST dictMonad0)]
         [semigroupRWST12 (semigroupRWST ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)))])
          (scm:lambda (dictMonoid3)
            (scm:let ([semigroupRWST24 (semigroupRWST12 dictMonoid3)])
              (scm:lambda (dictMonoid15)
                (scm:let ([semigroupRWST36 (semigroupRWST24 ((rt:record-ref dictMonoid15 (scm:string->symbol "Semigroup0")) (scm:quote undefined)))])
                  (scm:list (scm:cons (scm:string->symbol "mempty") ((rt:record-ref (applicativeRWST11 dictMonoid3) (scm:string->symbol "pure")) (rt:record-ref dictMonoid15 (scm:string->symbol "mempty")))) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
                    semigroupRWST36))))))))))

  (scm:define altRWST
    (scm:lambda (dictAlt0)
      (scm:let*
        ([_1 ((rt:record-ref dictAlt0 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorRWST12 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f2)
          (scm:lambda (v3)
            (scm:lambda (r4)
              (scm:lambda (s5)
                (((rt:record-ref _1 (scm:string->symbol "map")) (scm:lambda (v16)
                  (RWSResult* (RWSResult-value0 v16) (f2 (RWSResult-value1 v16)) (RWSResult-value2 v16)))) ((v3 r4) s5))))))))])
          (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (v3)
            (scm:lambda (v14)
              (scm:lambda (r5)
                (scm:lambda (s6)
                  (((rt:record-ref dictAlt0 (scm:string->symbol "alt")) ((v3 r5) s6)) ((v14 r5) s6))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorRWST12))))))

  (scm:define plusRWST
    (scm:lambda (dictPlus0)
      (scm:let*
        ([empty1 (rt:record-ref dictPlus0 (scm:string->symbol "empty"))]
         [_2 ((rt:record-ref dictPlus0 (scm:string->symbol "Alt0")) (scm:quote undefined))]
         [_3 ((rt:record-ref _2 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [altRWST14 (scm:let ([functorRWST14 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f4)
          (scm:lambda (v5)
            (scm:lambda (r6)
              (scm:lambda (s7)
                (((rt:record-ref _3 (scm:string->symbol "map")) (scm:lambda (v18)
                  (RWSResult* (RWSResult-value0 v18) (f4 (RWSResult-value1 v18)) (RWSResult-value2 v18)))) ((v5 r6) s7))))))))])
          (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (v5)
            (scm:lambda (v16)
              (scm:lambda (r7)
                (scm:lambda (s8)
                  (((rt:record-ref _2 (scm:string->symbol "alt")) ((v5 r7) s8)) ((v16 r7) s8))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorRWST14))))])
          (scm:list (scm:cons (scm:string->symbol "empty") (scm:lambda (v5)
            (scm:lambda (v16)
              empty1))) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
            altRWST14))))))

  (scm:define alternativeRWST
    (scm:lambda (dictMonoid0)
      (scm:lambda (dictAlternative1)
        (scm:let*
          ([_2 ((rt:record-ref dictAlternative1 (scm:string->symbol "Plus1")) (scm:quote undefined))]
           [empty3 (rt:record-ref _2 (scm:string->symbol "empty"))]
           [plusRWST14 (scm:let*
            ([_4 ((rt:record-ref _2 (scm:string->symbol "Alt0")) (scm:quote undefined))]
             [_5 ((rt:record-ref _4 (scm:string->symbol "Functor0")) (scm:quote undefined))]
             [functorRWST16 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f6)
              (scm:lambda (v7)
                (scm:lambda (r8)
                  (scm:lambda (s9)
                    (((rt:record-ref _5 (scm:string->symbol "map")) (scm:lambda (v110)
                      (RWSResult* (RWSResult-value0 v110) (f6 (RWSResult-value1 v110)) (RWSResult-value2 v110)))) ((v7 r8) s9))))))))]
             [altRWST17 (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (v7)
              (scm:lambda (v18)
                (scm:lambda (r9)
                  (scm:lambda (s10)
                    (((rt:record-ref _4 (scm:string->symbol "alt")) ((v7 r9) s10)) ((v18 r9) s10))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
              functorRWST16)))])
              (scm:list (scm:cons (scm:string->symbol "empty") (scm:lambda (v8)
                (scm:lambda (v19)
                  empty3))) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
                altRWST17))))])
            (scm:lambda (dictMonad5)
              (scm:let ([applicativeRWST16 ((applicativeRWST dictMonad5) dictMonoid0)])
                (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
                  applicativeRWST16)) (scm:cons (scm:string->symbol "Plus1") (scm:lambda (_)
                  plusRWST14))))))))))
