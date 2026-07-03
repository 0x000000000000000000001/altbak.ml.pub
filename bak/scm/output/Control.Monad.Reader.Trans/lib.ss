#!r6rs
#!chezscheme
(library
  (Control.Monad.Reader.Trans lib)
  (export
    ReaderT
    altReaderT
    alternativeReaderT
    applicativeReaderT
    applyReaderT
    bindReaderT
    distributiveReaderT
    functorReaderT
    mapReaderT
    monadAskReaderT
    monadContReaderT
    monadEffectReader
    monadErrorReaderT
    monadPlusReaderT
    monadReaderReaderT
    monadReaderT
    monadRecReaderT
    monadSTReaderT
    monadStateReaderT
    monadTellReaderT
    monadThrowReaderT
    monadTransReaderT
    monadWriterReaderT
    monoidReaderT
    newtypeReaderT
    plusReaderT
    runReaderT
    semigroupReaderT
    withReaderT)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:))

  (scm:define ReaderT
    (scm:lambda (x0)
      x0))

  (scm:define withReaderT
    (scm:lambda (f0)
      (scm:lambda (v1)
        (scm:lambda (x2)
          (v1 (f0 x2))))))

  (scm:define runReaderT
    (scm:lambda (v0)
      v0))

  (scm:define newtypeReaderT
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define monadTransReaderT
    (scm:list (scm:cons (scm:string->symbol "lift") (scm:lambda (dictMonad0)
      (scm:lambda (x1)
        (scm:lambda (v2)
          x1))))))

  (scm:define mapReaderT
    (scm:lambda (f0)
      (scm:lambda (v1)
        (scm:lambda (x2)
          (f0 (v1 x2))))))

  (scm:define functorReaderT
    (scm:lambda (dictFunctor0)
      (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (x1)
        (scm:let ([_2 ((rt:record-ref dictFunctor0 (scm:string->symbol "map")) x1)])
          (scm:lambda (v3)
            (scm:lambda (x4)
              (_2 (v3 x4))))))))))

  (scm:define distributiveReaderT
    (scm:lambda (dictDistributive0)
      (scm:let*
        ([_1 ((rt:record-ref dictDistributive0 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorReaderT12 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (x2)
          (scm:let ([_3 ((rt:record-ref _1 (scm:string->symbol "map")) x2)])
            (scm:lambda (v4)
              (scm:lambda (x5)
                (_3 (v4 x5))))))))])
          (scm:list (scm:cons (scm:string->symbol "distribute") (scm:lambda (dictFunctor3)
            (scm:let ([collect14 ((rt:record-ref dictDistributive0 (scm:string->symbol "collect")) dictFunctor3)])
              (scm:lambda (a5)
                (scm:lambda (e6)
                  ((collect14 (scm:lambda (r7)
                    (r7 e6))) a5)))))) (scm:cons (scm:string->symbol "collect") (scm:lambda (dictFunctor3)
            (scm:lambda (f4)
              (scm:let*
                ([_5 ((rt:record-ref (distributiveReaderT dictDistributive0) (scm:string->symbol "distribute")) dictFunctor3)]
                 [_6 ((rt:record-ref dictFunctor3 (scm:string->symbol "map")) f4)])
                  (scm:lambda (x7)
                    (_5 (_6 x7))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorReaderT12))))))

  (scm:define applyReaderT
    (scm:lambda (dictApply0)
      (scm:let*
        ([_1 ((rt:record-ref dictApply0 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorReaderT12 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (x2)
          (scm:let ([_3 ((rt:record-ref _1 (scm:string->symbol "map")) x2)])
            (scm:lambda (v4)
              (scm:lambda (x5)
                (_3 (v4 x5))))))))])
          (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v3)
            (scm:lambda (v14)
              (scm:lambda (r5)
                (((rt:record-ref dictApply0 (scm:string->symbol "apply")) (v3 r5)) (v14 r5)))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorReaderT12))))))

  (scm:define bindReaderT
    (scm:lambda (dictBind0)
      (scm:let*
        ([_1 ((rt:record-ref dictBind0 (scm:string->symbol "Apply0")) (scm:quote undefined))]
         [_2 ((rt:record-ref _1 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [applyReaderT13 (scm:let ([functorReaderT13 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (x3)
          (scm:let ([_4 ((rt:record-ref _2 (scm:string->symbol "map")) x3)])
            (scm:lambda (v5)
              (scm:lambda (x6)
                (_4 (v5 x6))))))))])
          (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:lambda (r6)
                (((rt:record-ref _1 (scm:string->symbol "apply")) (v4 r6)) (v15 r6)))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorReaderT13))))])
          (scm:list (scm:cons (scm:string->symbol "bind") (scm:lambda (v4)
            (scm:lambda (k5)
              (scm:lambda (r6)
                (((rt:record-ref dictBind0 (scm:string->symbol "bind")) (v4 r6)) (scm:lambda (a7)
                  ((k5 a7) r6))))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
            applyReaderT13))))))

  (scm:define semigroupReaderT
    (scm:lambda (dictApply0)
      (scm:let ([_1 ((rt:record-ref dictApply0 (scm:string->symbol "Functor0")) (scm:quote undefined))])
        (scm:lambda (dictSemigroup2)
          (scm:list (scm:cons (scm:string->symbol "append") (scm:let ([_3 (rt:record-ref dictSemigroup2 (scm:string->symbol "append"))])
            (scm:lambda (a4)
              (scm:lambda (b5)
                (scm:let ([_6 ((rt:record-ref _1 (scm:string->symbol "map")) _3)])
                  (scm:lambda (r7)
                    (((rt:record-ref dictApply0 (scm:string->symbol "apply")) (_6 (a4 r7))) (b5 r7)))))))))))))

  (scm:define applicativeReaderT
    (scm:lambda (dictApplicative0)
      (scm:let*
        ([_1 ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined))]
         [_2 ((rt:record-ref _1 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorReaderT13 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (x3)
          (scm:let ([_4 ((rt:record-ref _2 (scm:string->symbol "map")) x3)])
            (scm:lambda (v5)
              (scm:lambda (x6)
                (_4 (v5 x6))))))))]
         [applyReaderT14 (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v4)
          (scm:lambda (v15)
            (scm:lambda (r6)
              (((rt:record-ref _1 (scm:string->symbol "apply")) (v4 r6)) (v15 r6)))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
          functorReaderT13)))])
          (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (x5)
            (scm:let ([_6 ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) x5)])
              (scm:lambda (v7)
                _6)))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
            applyReaderT14))))))

  (scm:define monadReaderT
    (scm:lambda (dictMonad0)
      (scm:let*
        ([_1 ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
         [_2 ((rt:record-ref _1 (scm:string->symbol "Apply0")) (scm:quote undefined))]
         [applicativeReaderT13 (scm:let*
          ([_3 ((rt:record-ref _2 (scm:string->symbol "Functor0")) (scm:quote undefined))]
           [functorReaderT14 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (x4)
            (scm:let ([_5 ((rt:record-ref _3 (scm:string->symbol "map")) x4)])
              (scm:lambda (v6)
                (scm:lambda (x7)
                  (_5 (v6 x7))))))))]
           [applyReaderT15 (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v5)
            (scm:lambda (v16)
              (scm:lambda (r7)
                (((rt:record-ref _2 (scm:string->symbol "apply")) (v5 r7)) (v16 r7)))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorReaderT14)))])
            (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (x6)
              (scm:let ([_7 ((rt:record-ref _1 (scm:string->symbol "pure")) x6)])
                (scm:lambda (v8)
                  _7)))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
              applyReaderT15))))]
         [bindReaderT14 (bindReaderT ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)))])
          (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
            applicativeReaderT13)) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
            bindReaderT14))))))

  (scm:define monadAskReaderT
    (scm:lambda (dictMonad0)
      (scm:let ([monadReaderT11 (monadReaderT dictMonad0)])
        (scm:list (scm:cons (scm:string->symbol "ask") (rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure"))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
          monadReaderT11))))))

  (scm:define monadReaderReaderT
    (scm:lambda (dictMonad0)
      (scm:let*
        ([monadReaderT11 (monadReaderT dictMonad0)]
         [monadAskReaderT12 (scm:list (scm:cons (scm:string->symbol "ask") (rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure"))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
          monadReaderT11)))])
          (scm:list (scm:cons (scm:string->symbol "local") withReaderT) (scm:cons (scm:string->symbol "MonadAsk0") (scm:lambda (_)
            monadAskReaderT12))))))

  (scm:define monadContReaderT
    (scm:lambda (dictMonadCont0)
      (scm:let ([monadReaderT11 (monadReaderT ((rt:record-ref dictMonadCont0 (scm:string->symbol "Monad0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "callCC") (scm:lambda (f2)
          (scm:lambda (r3)
            ((rt:record-ref dictMonadCont0 (scm:string->symbol "callCC")) (scm:lambda (c4)
              ((f2 (scm:lambda (x5)
                (scm:let ([_6 (c4 x5)])
                  (scm:lambda (v7)
                    _6)))) r3)))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
          monadReaderT11))))))

  (scm:define monadEffectReader
    (scm:lambda (dictMonadEffect0)
      (scm:let ([monadReaderT11 (monadReaderT ((rt:record-ref dictMonadEffect0 (scm:string->symbol "Monad0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "liftEffect") (scm:lambda (x2)
          (scm:let ([_3 ((rt:record-ref dictMonadEffect0 (scm:string->symbol "liftEffect")) x2)])
            (scm:lambda (v4)
              _3)))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
          monadReaderT11))))))

  (scm:define monadRecReaderT
    (scm:lambda (dictMonadRec0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadRec0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [_2 ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined))]
         [pure3 (rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure"))]
         [monadReaderT14 (monadReaderT Monad01)])
          (scm:list (scm:cons (scm:string->symbol "tailRecM") (scm:lambda (k5)
            (scm:lambda (a6)
              (scm:lambda (r7)
                (((rt:record-ref dictMonadRec0 (scm:string->symbol "tailRecM")) (scm:lambda (a$p8)
                  (((rt:record-ref _2 (scm:string->symbol "bind")) ((k5 a$p8) r7)) pure3))) a6))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadReaderT14))))))

  (scm:define monadStateReaderT
    (scm:lambda (dictMonadState0)
      (scm:let ([monadReaderT11 (monadReaderT ((rt:record-ref dictMonadState0 (scm:string->symbol "Monad0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "state") (scm:lambda (x2)
          (scm:let ([_3 ((rt:record-ref dictMonadState0 (scm:string->symbol "state")) x2)])
            (scm:lambda (v4)
              _3)))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
          monadReaderT11))))))

  (scm:define monadTellReaderT
    (scm:lambda (dictMonadTell0)
      (scm:let*
        ([Semigroup01 ((rt:record-ref dictMonadTell0 (scm:string->symbol "Semigroup0")) (scm:quote undefined))]
         [monadReaderT12 (monadReaderT ((rt:record-ref dictMonadTell0 (scm:string->symbol "Monad1")) (scm:quote undefined)))])
          (scm:list (scm:cons (scm:string->symbol "tell") (scm:lambda (x3)
            (scm:let ([_4 ((rt:record-ref dictMonadTell0 (scm:string->symbol "tell")) x3)])
              (scm:lambda (v5)
                _4)))) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
            Semigroup01)) (scm:cons (scm:string->symbol "Monad1") (scm:lambda (_)
            monadReaderT12))))))

  (scm:define monadWriterReaderT
    (scm:lambda (dictMonadWriter0)
      (scm:let*
        ([Monoid01 ((rt:record-ref dictMonadWriter0 (scm:string->symbol "Monoid0")) (scm:quote undefined))]
         [monadTellReaderT12 (monadTellReaderT ((rt:record-ref dictMonadWriter0 (scm:string->symbol "MonadTell1")) (scm:quote undefined)))])
          (scm:list (scm:cons (scm:string->symbol "listen") (scm:lambda (v3)
            (scm:lambda (x4)
              ((rt:record-ref dictMonadWriter0 (scm:string->symbol "listen")) (v3 x4))))) (scm:cons (scm:string->symbol "pass") (scm:lambda (v3)
            (scm:lambda (x4)
              ((rt:record-ref dictMonadWriter0 (scm:string->symbol "pass")) (v3 x4))))) (scm:cons (scm:string->symbol "Monoid0") (scm:lambda (_)
            Monoid01)) (scm:cons (scm:string->symbol "MonadTell1") (scm:lambda (_)
            monadTellReaderT12))))))

  (scm:define monadThrowReaderT
    (scm:lambda (dictMonadThrow0)
      (scm:let ([monadReaderT11 (monadReaderT ((rt:record-ref dictMonadThrow0 (scm:string->symbol "Monad0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "throwError") (scm:lambda (x2)
          (scm:let ([_3 ((rt:record-ref dictMonadThrow0 (scm:string->symbol "throwError")) x2)])
            (scm:lambda (v4)
              _3)))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
          monadReaderT11))))))

  (scm:define monadErrorReaderT
    (scm:lambda (dictMonadError0)
      (scm:let ([monadThrowReaderT11 (monadThrowReaderT ((rt:record-ref dictMonadError0 (scm:string->symbol "MonadThrow0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "catchError") (scm:lambda (v2)
          (scm:lambda (h3)
            (scm:lambda (r4)
              (((rt:record-ref dictMonadError0 (scm:string->symbol "catchError")) (v2 r4)) (scm:lambda (e5)
                ((h3 e5) r4))))))) (scm:cons (scm:string->symbol "MonadThrow0") (scm:lambda (_)
          monadThrowReaderT11))))))

  (scm:define monadSTReaderT
    (scm:lambda (dictMonadST0)
      (scm:let ([monadReaderT11 (monadReaderT ((rt:record-ref dictMonadST0 (scm:string->symbol "Monad0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "liftST") (scm:lambda (x2)
          (scm:let ([_3 ((rt:record-ref dictMonadST0 (scm:string->symbol "liftST")) x2)])
            (scm:lambda (v4)
              _3)))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
          monadReaderT11))))))

  (scm:define monoidReaderT
    (scm:lambda (dictApplicative0)
      (scm:let*
        ([_1 ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined))]
         [_2 ((rt:record-ref _1 (scm:string->symbol "Functor0")) (scm:quote undefined))])
          (scm:lambda (dictMonoid3)
            (scm:let ([semigroupReaderT24 (scm:list (scm:cons (scm:string->symbol "append") (scm:let ([_4 (rt:record-ref ((rt:record-ref dictMonoid3 (scm:string->symbol "Semigroup0")) (scm:quote undefined)) (scm:string->symbol "append"))])
              (scm:lambda (a5)
                (scm:lambda (b6)
                  (scm:let ([_7 ((rt:record-ref _2 (scm:string->symbol "map")) _4)])
                    (scm:lambda (r8)
                      (((rt:record-ref _1 (scm:string->symbol "apply")) (_7 (a5 r8))) (b6 r8)))))))))])
              (scm:list (scm:cons (scm:string->symbol "mempty") (scm:let ([_5 ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) (rt:record-ref dictMonoid3 (scm:string->symbol "mempty")))])
                (scm:lambda (v6)
                  _5))) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
                semigroupReaderT24))))))))

  (scm:define altReaderT
    (scm:lambda (dictAlt0)
      (scm:let*
        ([_1 ((rt:record-ref dictAlt0 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorReaderT12 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (x2)
          (scm:let ([_3 ((rt:record-ref _1 (scm:string->symbol "map")) x2)])
            (scm:lambda (v4)
              (scm:lambda (x5)
                (_3 (v4 x5))))))))])
          (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (v3)
            (scm:lambda (v14)
              (scm:lambda (r5)
                (((rt:record-ref dictAlt0 (scm:string->symbol "alt")) (v3 r5)) (v14 r5)))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorReaderT12))))))

  (scm:define plusReaderT
    (scm:lambda (dictPlus0)
      (scm:let*
        ([_1 ((rt:record-ref dictPlus0 (scm:string->symbol "Alt0")) (scm:quote undefined))]
         [_2 ((rt:record-ref _1 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [altReaderT13 (scm:let ([functorReaderT13 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (x3)
          (scm:let ([_4 ((rt:record-ref _2 (scm:string->symbol "map")) x3)])
            (scm:lambda (v5)
              (scm:lambda (x6)
                (_4 (v5 x6))))))))])
          (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:lambda (r6)
                (((rt:record-ref _1 (scm:string->symbol "alt")) (v4 r6)) (v15 r6)))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorReaderT13))))])
          (scm:list (scm:cons (scm:string->symbol "empty") (scm:let ([_4 (rt:record-ref dictPlus0 (scm:string->symbol "empty"))])
            (scm:lambda (v5)
              _4))) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
            altReaderT13))))))

  (scm:define alternativeReaderT
    (scm:lambda (dictAlternative0)
      (scm:let*
        ([_1 ((rt:record-ref dictAlternative0 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
         [_2 ((rt:record-ref _1 (scm:string->symbol "Apply0")) (scm:quote undefined))]
         [applicativeReaderT13 (scm:let*
          ([_3 ((rt:record-ref _2 (scm:string->symbol "Functor0")) (scm:quote undefined))]
           [functorReaderT14 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (x4)
            (scm:let ([_5 ((rt:record-ref _3 (scm:string->symbol "map")) x4)])
              (scm:lambda (v6)
                (scm:lambda (x7)
                  (_5 (v6 x7))))))))]
           [applyReaderT15 (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v5)
            (scm:lambda (v16)
              (scm:lambda (r7)
                (((rt:record-ref _2 (scm:string->symbol "apply")) (v5 r7)) (v16 r7)))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorReaderT14)))])
            (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (x6)
              (scm:let ([_7 ((rt:record-ref _1 (scm:string->symbol "pure")) x6)])
                (scm:lambda (v8)
                  _7)))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
              applyReaderT15))))]
         [_4 ((rt:record-ref dictAlternative0 (scm:string->symbol "Plus1")) (scm:quote undefined))]
         [_5 ((rt:record-ref _4 (scm:string->symbol "Alt0")) (scm:quote undefined))]
         [plusReaderT16 (scm:let*
          ([_6 ((rt:record-ref _5 (scm:string->symbol "Functor0")) (scm:quote undefined))]
           [functorReaderT17 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (x7)
            (scm:let ([_8 ((rt:record-ref _6 (scm:string->symbol "map")) x7)])
              (scm:lambda (v9)
                (scm:lambda (x10)
                  (_8 (v9 x10))))))))]
           [altReaderT18 (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (v8)
            (scm:lambda (v19)
              (scm:lambda (r10)
                (((rt:record-ref _5 (scm:string->symbol "alt")) (v8 r10)) (v19 r10)))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorReaderT17)))])
            (scm:list (scm:cons (scm:string->symbol "empty") (scm:let ([_9 (rt:record-ref _4 (scm:string->symbol "empty"))])
              (scm:lambda (v10)
                _9))) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
              altReaderT18))))])
          (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
            applicativeReaderT13)) (scm:cons (scm:string->symbol "Plus1") (scm:lambda (_)
            plusReaderT16))))))

  (scm:define monadPlusReaderT
    (scm:lambda (dictMonadPlus0)
      (scm:let*
        ([monadReaderT11 (monadReaderT ((rt:record-ref dictMonadPlus0 (scm:string->symbol "Monad0")) (scm:quote undefined)))]
         [alternativeReaderT12 (alternativeReaderT ((rt:record-ref dictMonadPlus0 (scm:string->symbol "Alternative1")) (scm:quote undefined)))])
          (scm:list (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadReaderT11)) (scm:cons (scm:string->symbol "Alternative1") (scm:lambda (_)
            alternativeReaderT12)))))))
