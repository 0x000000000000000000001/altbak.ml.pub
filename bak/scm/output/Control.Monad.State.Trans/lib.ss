#!r6rs
#!chezscheme
(library
  (Control.Monad.State.Trans lib)
  (export
    StateT
    altStateT
    alternativeStateT
    applicativeStateT
    applyStateT
    bindStateT
    evalStateT
    execStateT
    functorStateT
    lazyStateT
    mapStateT
    monadAskStateT
    monadContStateT
    monadEffectState
    monadErrorStateT
    monadPlusStateT
    monadReaderStateT
    monadRecStateT
    monadSTStateT
    monadStateStateT
    monadStateT
    monadTellStateT
    monadThrowStateT
    monadTransStateT
    monadWriterStateT
    monoidStateT
    newtypeStateT
    plusStateT
    runStateT
    semigroupStateT
    withStateT)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.Rec.Class lib) Control.Monad.Rec.Class.)
    (prefix (Data.Tuple lib) Data.Tuple.)
    (prefix (Data.Unit lib) Data.Unit.))

  (scm:define StateT
    (scm:lambda (x0)
      x0))

  (scm:define withStateT
    (scm:lambda (f0)
      (scm:lambda (v1)
        (scm:lambda (x2)
          (v1 (f0 x2))))))

  (scm:define runStateT
    (scm:lambda (v0)
      v0))

  (scm:define newtypeStateT
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define monadTransStateT
    (scm:list (scm:cons (scm:string->symbol "lift") (scm:lambda (dictMonad0)
      (scm:lambda (m1)
        (scm:lambda (s2)
          (((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) m1) (scm:lambda (x3)
            ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* x3 s2))))))))))

  (scm:define mapStateT
    (scm:lambda (f0)
      (scm:lambda (v1)
        (scm:lambda (x2)
          (f0 (v1 x2))))))

  (scm:define lazyStateT
    (scm:list (scm:cons (scm:string->symbol "defer") (scm:lambda (f0)
      (scm:lambda (s1)
        ((f0 Data.Unit.unit) s1))))))

  (scm:define functorStateT
    (scm:lambda (dictFunctor0)
      (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f1)
        (scm:lambda (v2)
          (scm:lambda (s3)
            (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (scm:lambda (v14)
              (Data.Tuple.Tuple* (f1 (Data.Tuple.Tuple-value0 v14)) (Data.Tuple.Tuple-value1 v14)))) (v2 s3)))))))))

  (scm:define execStateT
    (scm:lambda (dictFunctor0)
      (scm:lambda (v1)
        (scm:lambda (s2)
          (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) Data.Tuple.snd) (v1 s2))))))

  (scm:define evalStateT
    (scm:lambda (dictFunctor0)
      (scm:lambda (v1)
        (scm:lambda (s2)
          (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) Data.Tuple.fst) (v1 s2))))))

  (scm:define monadStateT
    (scm:lambda (dictMonad0)
      (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
        (applicativeStateT dictMonad0))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
        (bindStateT dictMonad0))))))

  (scm:define bindStateT
    (scm:lambda (dictMonad0)
      (scm:list (scm:cons (scm:string->symbol "bind") (scm:lambda (v1)
        (scm:lambda (f2)
          (scm:lambda (s3)
            (((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) (v1 s3)) (scm:lambda (v14)
              ((f2 (Data.Tuple.Tuple-value0 v14)) (Data.Tuple.Tuple-value1 v14)))))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
        (applyStateT dictMonad0))))))

  (scm:define applyStateT
    (scm:lambda (dictMonad0)
      (scm:let*
        ([_1 ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorStateT12 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f2)
          (scm:lambda (v3)
            (scm:lambda (s4)
              (((rt:record-ref _1 (scm:string->symbol "map")) (scm:lambda (v15)
                (Data.Tuple.Tuple* (f2 (Data.Tuple.Tuple-value0 v15)) (Data.Tuple.Tuple-value1 v15)))) (v3 s4)))))))])
          (scm:list (scm:cons (scm:string->symbol "apply") (scm:let ([_3 (bindStateT dictMonad0)])
            (scm:lambda (f4)
              (scm:lambda (a5)
                (((rt:record-ref _3 (scm:string->symbol "bind")) f4) (scm:lambda (f$p6)
                  (((rt:record-ref _3 (scm:string->symbol "bind")) a5) (scm:lambda (a$p7)
                    ((rt:record-ref (applicativeStateT dictMonad0) (scm:string->symbol "pure")) (f$p6 a$p7)))))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorStateT12))))))

  (scm:define applicativeStateT
    (scm:lambda (dictMonad0)
      (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (a1)
        (scm:lambda (s2)
          ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* a1 s2))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
        (applyStateT dictMonad0))))))

  (scm:define semigroupStateT
    (scm:lambda (dictMonad0)
      (scm:let ([_1 (applyStateT dictMonad0)])
        (scm:lambda (dictSemigroup2)
          (scm:list (scm:cons (scm:string->symbol "append") (scm:let ([_3 (rt:record-ref dictSemigroup2 (scm:string->symbol "append"))])
            (scm:lambda (a4)
              (scm:lambda (b5)
                (((rt:record-ref _1 (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref _1 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) _3) a4)) b5))))))))))

  (scm:define monadAskStateT
    (scm:lambda (dictMonadAsk0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadAsk0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadStateT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeStateT Monad01))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindStateT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "ask") (scm:let ([_3 (rt:record-ref dictMonadAsk0 (scm:string->symbol "ask"))])
            (scm:lambda (s4)
              (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) _3) (scm:lambda (x5)
                ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* x5 s4))))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadStateT12))))))

  (scm:define monadReaderStateT
    (scm:lambda (dictMonadReader0)
      (scm:let ([monadAskStateT11 (monadAskStateT ((rt:record-ref dictMonadReader0 (scm:string->symbol "MonadAsk0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "local") (scm:lambda (x2)
          (scm:let ([_3 ((rt:record-ref dictMonadReader0 (scm:string->symbol "local")) x2)])
            (scm:lambda (v4)
              (scm:lambda (x5)
                (_3 (v4 x5))))))) (scm:cons (scm:string->symbol "MonadAsk0") (scm:lambda (_)
          monadAskStateT11))))))

  (scm:define monadContStateT
    (scm:lambda (dictMonadCont0)
      (scm:let*
        ([_1 ((rt:record-ref dictMonadCont0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadStateT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeStateT _1))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindStateT _1))))])
          (scm:list (scm:cons (scm:string->symbol "callCC") (scm:lambda (f3)
            (scm:lambda (s4)
              ((rt:record-ref dictMonadCont0 (scm:string->symbol "callCC")) (scm:lambda (c5)
                ((f3 (scm:lambda (a6)
                  (scm:lambda (s$p7)
                    (c5 (Data.Tuple.Tuple* a6 s$p7))))) s4)))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadStateT12))))))

  (scm:define monadEffectState
    (scm:lambda (dictMonadEffect0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadEffect0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadStateT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeStateT Monad01))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindStateT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "liftEffect") (scm:lambda (x3)
            (scm:let ([_4 ((rt:record-ref dictMonadEffect0 (scm:string->symbol "liftEffect")) x3)])
              (scm:lambda (s5)
                (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) _4) (scm:lambda (x6)
                  ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* x6 s5)))))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadStateT12))))))

  (scm:define monadRecStateT
    (scm:lambda (dictMonadRec0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadRec0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadStateT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeStateT Monad01))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindStateT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "tailRecM") (scm:lambda (f3)
            (scm:lambda (a4)
              (scm:lambda (s5)
                (((rt:record-ref dictMonadRec0 (scm:string->symbol "tailRecM")) (scm:lambda (v6)
                  (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((f3 (Data.Tuple.Tuple-value0 v6)) (Data.Tuple.Tuple-value1 v6))) (scm:lambda (v27)
                    ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (scm:cond
                      [(Control.Monad.Rec.Class.Loop? (Data.Tuple.Tuple-value0 v27)) (Control.Monad.Rec.Class.Loop (Data.Tuple.Tuple* (Control.Monad.Rec.Class.Loop-value0 (Data.Tuple.Tuple-value0 v27)) (Data.Tuple.Tuple-value1 v27)))]
                      [(Control.Monad.Rec.Class.Done? (Data.Tuple.Tuple-value0 v27)) (Control.Monad.Rec.Class.Done (Data.Tuple.Tuple* (Control.Monad.Rec.Class.Done-value0 (Data.Tuple.Tuple-value0 v27)) (Data.Tuple.Tuple-value1 v27)))]
                      [scm:else (rt:fail)])))))) (Data.Tuple.Tuple* a4 s5)))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadStateT12))))))

  (scm:define monadStateStateT
    (scm:lambda (dictMonad0)
      (scm:let ([monadStateT11 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
        (applicativeStateT dictMonad0))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
        (bindStateT dictMonad0))))])
        (scm:list (scm:cons (scm:string->symbol "state") (scm:lambda (f2)
          (scm:lambda (x3)
            ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (f2 x3))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
          monadStateT11))))))

  (scm:define monadTellStateT
    (scm:lambda (dictMonadTell0)
      (scm:let*
        ([Monad11 ((rt:record-ref dictMonadTell0 (scm:string->symbol "Monad1")) (scm:quote undefined))]
         [Semigroup02 ((rt:record-ref dictMonadTell0 (scm:string->symbol "Semigroup0")) (scm:quote undefined))]
         [monadStateT13 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeStateT Monad11))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindStateT Monad11))))])
          (scm:list (scm:cons (scm:string->symbol "tell") (scm:lambda (x4)
            (scm:let ([_5 ((rt:record-ref dictMonadTell0 (scm:string->symbol "tell")) x4)])
              (scm:lambda (s6)
                (((rt:record-ref ((rt:record-ref Monad11 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) _5) (scm:lambda (x7)
                  ((rt:record-ref ((rt:record-ref Monad11 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* x7 s6)))))))) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
            Semigroup02)) (scm:cons (scm:string->symbol "Monad1") (scm:lambda (_)
            monadStateT13))))))

  (scm:define monadWriterStateT
    (scm:lambda (dictMonadWriter0)
      (scm:let*
        ([MonadTell11 ((rt:record-ref dictMonadWriter0 (scm:string->symbol "MonadTell1")) (scm:quote undefined))]
         [Monad12 ((rt:record-ref MonadTell11 (scm:string->symbol "Monad1")) (scm:quote undefined))]
         [_3 ((rt:record-ref Monad12 (scm:string->symbol "Bind1")) (scm:quote undefined))]
         [_4 ((rt:record-ref Monad12 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
         [Monoid05 ((rt:record-ref dictMonadWriter0 (scm:string->symbol "Monoid0")) (scm:quote undefined))]
         [monadTellStateT16 (monadTellStateT MonadTell11)])
          (scm:list (scm:cons (scm:string->symbol "listen") (scm:lambda (m7)
            (scm:lambda (s8)
              (((rt:record-ref _3 (scm:string->symbol "bind")) ((rt:record-ref dictMonadWriter0 (scm:string->symbol "listen")) (m7 s8))) (scm:lambda (v9)
                ((rt:record-ref _4 (scm:string->symbol "pure")) (Data.Tuple.Tuple* (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 (Data.Tuple.Tuple-value0 v9)) (Data.Tuple.Tuple-value1 v9)) (Data.Tuple.Tuple-value1 (Data.Tuple.Tuple-value0 v9))))))))) (scm:cons (scm:string->symbol "pass") (scm:lambda (m7)
            (scm:lambda (s8)
              ((rt:record-ref dictMonadWriter0 (scm:string->symbol "pass")) (((rt:record-ref _3 (scm:string->symbol "bind")) (m7 s8)) (scm:lambda (v9)
                ((rt:record-ref _4 (scm:string->symbol "pure")) (Data.Tuple.Tuple* (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 (Data.Tuple.Tuple-value0 v9)) (Data.Tuple.Tuple-value1 v9)) (Data.Tuple.Tuple-value1 (Data.Tuple.Tuple-value0 v9)))))))))) (scm:cons (scm:string->symbol "Monoid0") (scm:lambda (_)
            Monoid05)) (scm:cons (scm:string->symbol "MonadTell1") (scm:lambda (_)
            monadTellStateT16))))))

  (scm:define monadThrowStateT
    (scm:lambda (dictMonadThrow0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadThrow0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadStateT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeStateT Monad01))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindStateT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "throwError") (scm:lambda (e3)
            (scm:let ([_4 ((rt:record-ref dictMonadThrow0 (scm:string->symbol "throwError")) e3)])
              (scm:lambda (s5)
                (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) _4) (scm:lambda (x6)
                  ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* x6 s5)))))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadStateT12))))))

  (scm:define monadErrorStateT
    (scm:lambda (dictMonadError0)
      (scm:let ([monadThrowStateT11 (monadThrowStateT ((rt:record-ref dictMonadError0 (scm:string->symbol "MonadThrow0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "catchError") (scm:lambda (v2)
          (scm:lambda (h3)
            (scm:lambda (s4)
              (((rt:record-ref dictMonadError0 (scm:string->symbol "catchError")) (v2 s4)) (scm:lambda (e5)
                ((h3 e5) s4))))))) (scm:cons (scm:string->symbol "MonadThrow0") (scm:lambda (_)
          monadThrowStateT11))))))

  (scm:define monadSTStateT
    (scm:lambda (dictMonadST0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadST0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadStateT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeStateT Monad01))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindStateT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "liftST") (scm:lambda (x3)
            (scm:let ([_4 ((rt:record-ref dictMonadST0 (scm:string->symbol "liftST")) x3)])
              (scm:lambda (s5)
                (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) _4) (scm:lambda (x6)
                  ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* x6 s5)))))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadStateT12))))))

  (scm:define monoidStateT
    (scm:lambda (dictMonad0)
      (scm:let ([semigroupStateT11 (semigroupStateT dictMonad0)])
        (scm:lambda (dictMonoid2)
          (scm:let ([semigroupStateT23 (semigroupStateT11 ((rt:record-ref dictMonoid2 (scm:string->symbol "Semigroup0")) (scm:quote undefined)))])
            (scm:list (scm:cons (scm:string->symbol "mempty") ((rt:record-ref (applicativeStateT dictMonad0) (scm:string->symbol "pure")) (rt:record-ref dictMonoid2 (scm:string->symbol "mempty")))) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
              semigroupStateT23))))))))

  (scm:define altStateT
    (scm:lambda (dictMonad0)
      (scm:lambda (dictAlt1)
        (scm:let*
          ([_2 ((rt:record-ref dictAlt1 (scm:string->symbol "Functor0")) (scm:quote undefined))]
           [functorStateT13 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f3)
            (scm:lambda (v4)
              (scm:lambda (s5)
                (((rt:record-ref _2 (scm:string->symbol "map")) (scm:lambda (v16)
                  (Data.Tuple.Tuple* (f3 (Data.Tuple.Tuple-value0 v16)) (Data.Tuple.Tuple-value1 v16)))) (v4 s5)))))))])
            (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (v4)
              (scm:lambda (v15)
                (scm:lambda (s6)
                  (((rt:record-ref dictAlt1 (scm:string->symbol "alt")) (v4 s6)) (v15 s6)))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
              functorStateT13)))))))

  (scm:define plusStateT
    (scm:lambda (dictMonad0)
      (scm:lambda (dictPlus1)
        (scm:let*
          ([empty2 (rt:record-ref dictPlus1 (scm:string->symbol "empty"))]
           [_3 ((rt:record-ref dictPlus1 (scm:string->symbol "Alt0")) (scm:quote undefined))]
           [_4 ((rt:record-ref _3 (scm:string->symbol "Functor0")) (scm:quote undefined))]
           [altStateT25 (scm:let ([functorStateT15 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f5)
            (scm:lambda (v6)
              (scm:lambda (s7)
                (((rt:record-ref _4 (scm:string->symbol "map")) (scm:lambda (v18)
                  (Data.Tuple.Tuple* (f5 (Data.Tuple.Tuple-value0 v18)) (Data.Tuple.Tuple-value1 v18)))) (v6 s7)))))))])
            (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (v6)
              (scm:lambda (v17)
                (scm:lambda (s8)
                  (((rt:record-ref _3 (scm:string->symbol "alt")) (v6 s8)) (v17 s8)))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
              functorStateT15))))])
            (scm:list (scm:cons (scm:string->symbol "empty") (scm:lambda (v6)
              empty2)) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
              altStateT25)))))))

  (scm:define alternativeStateT
    (scm:lambda (dictMonad0)
      (scm:let ([applicativeStateT11 (applicativeStateT dictMonad0)])
        (scm:lambda (dictAlternative2)
          (scm:let*
            ([_3 ((rt:record-ref dictAlternative2 (scm:string->symbol "Plus1")) (scm:quote undefined))]
             [empty4 (rt:record-ref _3 (scm:string->symbol "empty"))]
             [plusStateT25 (scm:let*
              ([_5 ((rt:record-ref _3 (scm:string->symbol "Alt0")) (scm:quote undefined))]
               [_6 ((rt:record-ref _5 (scm:string->symbol "Functor0")) (scm:quote undefined))]
               [functorStateT17 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f7)
                (scm:lambda (v8)
                  (scm:lambda (s9)
                    (((rt:record-ref _6 (scm:string->symbol "map")) (scm:lambda (v110)
                      (Data.Tuple.Tuple* (f7 (Data.Tuple.Tuple-value0 v110)) (Data.Tuple.Tuple-value1 v110)))) (v8 s9)))))))]
               [altStateT28 (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (v8)
                (scm:lambda (v19)
                  (scm:lambda (s10)
                    (((rt:record-ref _5 (scm:string->symbol "alt")) (v8 s10)) (v19 s10)))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
                functorStateT17)))])
                (scm:list (scm:cons (scm:string->symbol "empty") (scm:lambda (v9)
                  empty4)) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
                  altStateT28))))])
              (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
                applicativeStateT11)) (scm:cons (scm:string->symbol "Plus1") (scm:lambda (_)
                plusStateT25))))))))

  (scm:define monadPlusStateT
    (scm:lambda (dictMonadPlus0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadPlus0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadStateT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeStateT Monad01))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindStateT Monad01))))]
         [alternativeStateT13 ((alternativeStateT Monad01) ((rt:record-ref dictMonadPlus0 (scm:string->symbol "Alternative1")) (scm:quote undefined)))])
          (scm:list (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadStateT12)) (scm:cons (scm:string->symbol "Alternative1") (scm:lambda (_)
            alternativeStateT13)))))))
