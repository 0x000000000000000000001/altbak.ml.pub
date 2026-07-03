#!r6rs
#!chezscheme
(library
  (Control.Monad.Maybe.Trans lib)
  (export
    MaybeT
    altMaybeT
    alternativeMaybeT
    applicativeMaybeT
    applyMaybeT
    bindMaybeT
    functorMaybeT
    identity
    mapMaybeT
    monadAskMaybeT
    monadContMaybeT
    monadEffectMaybe
    monadErrorMaybeT
    monadMaybeT
    monadPlusMaybeT
    monadReaderMaybeT
    monadRecMaybeT
    monadSTMaybeT
    monadStateMaybeT
    monadTellMaybeT
    monadThrowMaybeT
    monadTransMaybeT
    monadWriterMaybeT
    monoidMaybeT
    newtypeMaybeT
    plusMaybeT
    runMaybeT
    semigroupMaybeT)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.Rec.Class lib) Control.Monad.Rec.Class.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define identity
    (scm:lambda (x0)
      x0))

  (scm:define MaybeT
    (scm:lambda (x0)
      x0))

  (scm:define runMaybeT
    (scm:lambda (v0)
      v0))

  (scm:define newtypeMaybeT
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define monadTransMaybeT
    (scm:list (scm:cons (scm:string->symbol "lift") (scm:lambda (dictMonad0)
      (scm:lambda (x1)
        (((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) x1) (scm:lambda (a$p2)
          ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Maybe.Just a$p2)))))))))

  (scm:define mapMaybeT
    (scm:lambda (f0)
      (scm:lambda (v1)
        (f0 v1))))

  (scm:define functorMaybeT
    (scm:lambda (dictFunctor0)
      (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f1)
        (scm:lambda (v2)
          (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (scm:lambda (v13)
            (scm:cond
              [(Data.Maybe.Just? v13) (Data.Maybe.Just (f1 (Data.Maybe.Just-value0 v13)))]
              [scm:else Data.Maybe.Nothing]))) v2)))))))

  (scm:define monadMaybeT
    (scm:lambda (dictMonad0)
      (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
        (applicativeMaybeT dictMonad0))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
        (bindMaybeT dictMonad0))))))

  (scm:define bindMaybeT
    (scm:lambda (dictMonad0)
      (scm:list (scm:cons (scm:string->symbol "bind") (scm:lambda (v1)
        (scm:lambda (f2)
          (((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) v1) (scm:lambda (v13)
            (scm:cond
              [(Data.Maybe.Nothing? v13) ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) Data.Maybe.Nothing)]
              [(Data.Maybe.Just? v13) (f2 (Data.Maybe.Just-value0 v13))]
              [scm:else (rt:fail)])))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
        (applyMaybeT dictMonad0))))))

  (scm:define applyMaybeT
    (scm:lambda (dictMonad0)
      (scm:let*
        ([_1 ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorMaybeT12 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f2)
          (scm:lambda (v3)
            (((rt:record-ref _1 (scm:string->symbol "map")) (scm:lambda (v14)
              (scm:cond
                [(Data.Maybe.Just? v14) (Data.Maybe.Just (f2 (Data.Maybe.Just-value0 v14)))]
                [scm:else Data.Maybe.Nothing]))) v3)))))])
          (scm:list (scm:cons (scm:string->symbol "apply") (scm:let ([_3 (bindMaybeT dictMonad0)])
            (scm:lambda (f4)
              (scm:lambda (a5)
                (((rt:record-ref _3 (scm:string->symbol "bind")) f4) (scm:lambda (f$p6)
                  (((rt:record-ref _3 (scm:string->symbol "bind")) a5) (scm:lambda (a$p7)
                    ((rt:record-ref (applicativeMaybeT dictMonad0) (scm:string->symbol "pure")) (f$p6 a$p7)))))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorMaybeT12))))))

  (scm:define applicativeMaybeT
    (scm:lambda (dictMonad0)
      (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (x1)
        ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Maybe.Just x1)))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
        (applyMaybeT dictMonad0))))))

  (scm:define semigroupMaybeT
    (scm:lambda (dictMonad0)
      (scm:let ([_1 (applyMaybeT dictMonad0)])
        (scm:lambda (dictSemigroup2)
          (scm:list (scm:cons (scm:string->symbol "append") (scm:let ([_3 (rt:record-ref dictSemigroup2 (scm:string->symbol "append"))])
            (scm:lambda (a4)
              (scm:lambda (b5)
                (((rt:record-ref _1 (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref _1 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) _3) a4)) b5))))))))))

  (scm:define monadAskMaybeT
    (scm:lambda (dictMonadAsk0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadAsk0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadMaybeT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeMaybeT Monad01))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindMaybeT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "ask") (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) (rt:record-ref dictMonadAsk0 (scm:string->symbol "ask"))) (scm:lambda (a$p3)
            ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Maybe.Just a$p3))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadMaybeT12))))))

  (scm:define monadReaderMaybeT
    (scm:lambda (dictMonadReader0)
      (scm:let ([monadAskMaybeT11 (monadAskMaybeT ((rt:record-ref dictMonadReader0 (scm:string->symbol "MonadAsk0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "local") (scm:lambda (f2)
          ((rt:record-ref dictMonadReader0 (scm:string->symbol "local")) f2))) (scm:cons (scm:string->symbol "MonadAsk0") (scm:lambda (_)
          monadAskMaybeT11))))))

  (scm:define monadContMaybeT
    (scm:lambda (dictMonadCont0)
      (scm:let*
        ([_1 ((rt:record-ref dictMonadCont0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadMaybeT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeMaybeT _1))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindMaybeT _1))))])
          (scm:list (scm:cons (scm:string->symbol "callCC") (scm:lambda (f3)
            ((rt:record-ref dictMonadCont0 (scm:string->symbol "callCC")) (scm:lambda (c4)
              (f3 (scm:lambda (a5)
                (c4 (Data.Maybe.Just a5)))))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadMaybeT12))))))

  (scm:define monadEffectMaybe
    (scm:lambda (dictMonadEffect0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadEffect0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadMaybeT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeMaybeT Monad01))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindMaybeT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "liftEffect") (scm:lambda (x3)
            (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((rt:record-ref dictMonadEffect0 (scm:string->symbol "liftEffect")) x3)) (scm:lambda (a$p4)
              ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Maybe.Just a$p4)))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadMaybeT12))))))

  (scm:define monadRecMaybeT
    (scm:lambda (dictMonadRec0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadRec0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadMaybeT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeMaybeT Monad01))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindMaybeT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "tailRecM") (scm:lambda (f3)
            ((rt:record-ref dictMonadRec0 (scm:string->symbol "tailRecM")) (scm:lambda (a4)
              (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) (f3 a4)) (scm:lambda (m$p5)
                ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (scm:cond
                  [(Data.Maybe.Nothing? m$p5) (Control.Monad.Rec.Class.Done Data.Maybe.Nothing)]
                  [(Data.Maybe.Just? m$p5) (scm:cond
                    [(Control.Monad.Rec.Class.Loop? (Data.Maybe.Just-value0 m$p5)) (Control.Monad.Rec.Class.Loop (Control.Monad.Rec.Class.Loop-value0 (Data.Maybe.Just-value0 m$p5)))]
                    [(Control.Monad.Rec.Class.Done? (Data.Maybe.Just-value0 m$p5)) (Control.Monad.Rec.Class.Done (Data.Maybe.Just (Control.Monad.Rec.Class.Done-value0 (Data.Maybe.Just-value0 m$p5))))]
                    [scm:else (rt:fail)])]
                  [scm:else (rt:fail)])))))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadMaybeT12))))))

  (scm:define monadStateMaybeT
    (scm:lambda (dictMonadState0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadState0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadMaybeT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeMaybeT Monad01))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindMaybeT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "state") (scm:lambda (f3)
            (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((rt:record-ref dictMonadState0 (scm:string->symbol "state")) f3)) (scm:lambda (a$p4)
              ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Maybe.Just a$p4)))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadMaybeT12))))))

  (scm:define monadTellMaybeT
    (scm:lambda (dictMonadTell0)
      (scm:let*
        ([Monad11 ((rt:record-ref dictMonadTell0 (scm:string->symbol "Monad1")) (scm:quote undefined))]
         [Semigroup02 ((rt:record-ref dictMonadTell0 (scm:string->symbol "Semigroup0")) (scm:quote undefined))]
         [monadMaybeT13 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeMaybeT Monad11))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindMaybeT Monad11))))])
          (scm:list (scm:cons (scm:string->symbol "tell") (scm:lambda (x4)
            (((rt:record-ref ((rt:record-ref Monad11 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((rt:record-ref dictMonadTell0 (scm:string->symbol "tell")) x4)) (scm:lambda (a$p5)
              ((rt:record-ref ((rt:record-ref Monad11 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Maybe.Just a$p5)))))) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
            Semigroup02)) (scm:cons (scm:string->symbol "Monad1") (scm:lambda (_)
            monadMaybeT13))))))

  (scm:define monadWriterMaybeT
    (scm:lambda (dictMonadWriter0)
      (scm:let*
        ([MonadTell11 ((rt:record-ref dictMonadWriter0 (scm:string->symbol "MonadTell1")) (scm:quote undefined))]
         [Monad12 ((rt:record-ref MonadTell11 (scm:string->symbol "Monad1")) (scm:quote undefined))]
         [_3 ((rt:record-ref Monad12 (scm:string->symbol "Bind1")) (scm:quote undefined))]
         [_4 ((rt:record-ref Monad12 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
         [Monoid05 ((rt:record-ref dictMonadWriter0 (scm:string->symbol "Monoid0")) (scm:quote undefined))]
         [monadTellMaybeT16 (monadTellMaybeT MonadTell11)])
          (scm:list (scm:cons (scm:string->symbol "listen") (scm:lambda (v7)
            (((rt:record-ref _3 (scm:string->symbol "bind")) ((rt:record-ref dictMonadWriter0 (scm:string->symbol "listen")) v7)) (scm:lambda (v8)
              ((rt:record-ref _4 (scm:string->symbol "pure")) (scm:cond
                [(Data.Maybe.Just? (Data.Tuple.Tuple-value0 v8)) (Data.Maybe.Just (Data.Tuple.Tuple* (Data.Maybe.Just-value0 (Data.Tuple.Tuple-value0 v8)) (Data.Tuple.Tuple-value1 v8)))]
                [scm:else Data.Maybe.Nothing])))))) (scm:cons (scm:string->symbol "pass") (scm:lambda (v7)
            ((rt:record-ref dictMonadWriter0 (scm:string->symbol "pass")) (((rt:record-ref _3 (scm:string->symbol "bind")) v7) (scm:lambda (a8)
              ((rt:record-ref _4 (scm:string->symbol "pure")) (scm:cond
                [(Data.Maybe.Nothing? a8) (Data.Tuple.Tuple* Data.Maybe.Nothing identity)]
                [(Data.Maybe.Just? a8) (Data.Tuple.Tuple* (Data.Maybe.Just (Data.Tuple.Tuple-value0 (Data.Maybe.Just-value0 a8))) (Data.Tuple.Tuple-value1 (Data.Maybe.Just-value0 a8)))]
                [scm:else (rt:fail)]))))))) (scm:cons (scm:string->symbol "Monoid0") (scm:lambda (_)
            Monoid05)) (scm:cons (scm:string->symbol "MonadTell1") (scm:lambda (_)
            monadTellMaybeT16))))))

  (scm:define monadThrowMaybeT
    (scm:lambda (dictMonadThrow0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadThrow0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadMaybeT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeMaybeT Monad01))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindMaybeT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "throwError") (scm:lambda (e3)
            (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((rt:record-ref dictMonadThrow0 (scm:string->symbol "throwError")) e3)) (scm:lambda (a$p4)
              ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Maybe.Just a$p4)))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadMaybeT12))))))

  (scm:define monadErrorMaybeT
    (scm:lambda (dictMonadError0)
      (scm:let ([monadThrowMaybeT11 (monadThrowMaybeT ((rt:record-ref dictMonadError0 (scm:string->symbol "MonadThrow0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "catchError") (scm:lambda (v2)
          (scm:lambda (h3)
            (((rt:record-ref dictMonadError0 (scm:string->symbol "catchError")) v2) (scm:lambda (a4)
              (h3 a4)))))) (scm:cons (scm:string->symbol "MonadThrow0") (scm:lambda (_)
          monadThrowMaybeT11))))))

  (scm:define monadSTMaybeT
    (scm:lambda (dictMonadST0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadST0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadMaybeT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeMaybeT Monad01))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindMaybeT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "liftST") (scm:lambda (x3)
            (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((rt:record-ref dictMonadST0 (scm:string->symbol "liftST")) x3)) (scm:lambda (a$p4)
              ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Maybe.Just a$p4)))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadMaybeT12))))))

  (scm:define monoidMaybeT
    (scm:lambda (dictMonad0)
      (scm:let ([semigroupMaybeT11 (semigroupMaybeT dictMonad0)])
        (scm:lambda (dictMonoid2)
          (scm:let ([semigroupMaybeT23 (semigroupMaybeT11 ((rt:record-ref dictMonoid2 (scm:string->symbol "Semigroup0")) (scm:quote undefined)))])
            (scm:list (scm:cons (scm:string->symbol "mempty") ((rt:record-ref (applicativeMaybeT dictMonad0) (scm:string->symbol "pure")) (rt:record-ref dictMonoid2 (scm:string->symbol "mempty")))) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
              semigroupMaybeT23))))))))

  (scm:define altMaybeT
    (scm:lambda (dictMonad0)
      (scm:let*
        ([Bind11 ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined))]
         [_2 ((rt:record-ref ((rt:record-ref Bind11 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorMaybeT13 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f3)
          (scm:lambda (v4)
            (((rt:record-ref _2 (scm:string->symbol "map")) (scm:lambda (v15)
              (scm:cond
                [(Data.Maybe.Just? v15) (Data.Maybe.Just (f3 (Data.Maybe.Just-value0 v15)))]
                [scm:else Data.Maybe.Nothing]))) v4)))))])
          (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (v4)
            (scm:lambda (v15)
              (((rt:record-ref Bind11 (scm:string->symbol "bind")) v4) (scm:lambda (m6)
                (scm:cond
                  [(Data.Maybe.Nothing? m6) v15]
                  [scm:else ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) m6)])))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorMaybeT13))))))

  (scm:define plusMaybeT
    (scm:lambda (dictMonad0)
      (scm:let*
        ([Bind11 ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined))]
         [_2 ((rt:record-ref ((rt:record-ref Bind11 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [altMaybeT13 (scm:let ([functorMaybeT13 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f3)
          (scm:lambda (v4)
            (((rt:record-ref _2 (scm:string->symbol "map")) (scm:lambda (v15)
              (scm:cond
                [(Data.Maybe.Just? v15) (Data.Maybe.Just (f3 (Data.Maybe.Just-value0 v15)))]
                [scm:else Data.Maybe.Nothing]))) v4)))))])
          (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (v4)
            (scm:lambda (v15)
              (((rt:record-ref Bind11 (scm:string->symbol "bind")) v4) (scm:lambda (m6)
                (scm:cond
                  [(Data.Maybe.Nothing? m6) v15]
                  [scm:else ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) m6)])))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorMaybeT13))))])
          (scm:list (scm:cons (scm:string->symbol "empty") ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) Data.Maybe.Nothing)) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
            altMaybeT13))))))

  (scm:define alternativeMaybeT
    (scm:lambda (dictMonad0)
      (scm:let*
        ([applicativeMaybeT11 (applicativeMaybeT dictMonad0)]
         [plusMaybeT12 (plusMaybeT dictMonad0)])
          (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
            applicativeMaybeT11)) (scm:cons (scm:string->symbol "Plus1") (scm:lambda (_)
            plusMaybeT12))))))

  (scm:define monadPlusMaybeT
    (scm:lambda (dictMonad0)
      (scm:let*
        ([monadMaybeT11 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeMaybeT dictMonad0))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindMaybeT dictMonad0))))]
         [alternativeMaybeT12 (alternativeMaybeT dictMonad0)])
          (scm:list (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadMaybeT11)) (scm:cons (scm:string->symbol "Alternative1") (scm:lambda (_)
            alternativeMaybeT12)))))))
