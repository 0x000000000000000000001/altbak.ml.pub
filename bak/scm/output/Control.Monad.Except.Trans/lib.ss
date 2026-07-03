#!r6rs
#!chezscheme
(library
  (Control.Monad.Except.Trans lib)
  (export
    ExceptT
    altExceptT
    alternativeExceptT
    applicativeExceptT
    applyExceptT
    bindExceptT
    except
    functorExceptT
    identity
    mapExceptT
    monadAskExceptT
    monadContExceptT
    monadEffectExceptT
    monadErrorExceptT
    monadExceptT
    monadPlusExceptT
    monadReaderExceptT
    monadRecExceptT
    monadSTExceptT
    monadStateExceptT
    monadTellExceptT
    monadThrowExceptT
    monadTransExceptT
    monadWriterExceptT
    monoidExceptT
    newtypeExceptT
    plusExceptT
    runExceptT
    semigroupExceptT
    withExceptT)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.Rec.Class lib) Control.Monad.Rec.Class.)
    (prefix (Data.Either lib) Data.Either.)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define identity
    (scm:lambda (x0)
      x0))

  (scm:define ExceptT
    (scm:lambda (x0)
      x0))

  (scm:define withExceptT
    (scm:lambda (dictFunctor0)
      (scm:lambda (f1)
        (scm:lambda (v2)
          (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (scm:lambda (v23)
            (scm:cond
              [(Data.Either.Right? v23) (Data.Either.Right (Data.Either.Right-value0 v23))]
              [(Data.Either.Left? v23) (Data.Either.Left (f1 (Data.Either.Left-value0 v23)))]
              [scm:else (rt:fail)]))) v2)))))

  (scm:define runExceptT
    (scm:lambda (v0)
      v0))

  (scm:define newtypeExceptT
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define monadTransExceptT
    (scm:list (scm:cons (scm:string->symbol "lift") (scm:lambda (dictMonad0)
      (scm:lambda (m1)
        (((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) m1) (scm:lambda (a2)
          ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Either.Right a2)))))))))

  (scm:define mapExceptT
    (scm:lambda (f0)
      (scm:lambda (v1)
        (f0 v1))))

  (scm:define functorExceptT
    (scm:lambda (dictFunctor0)
      (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f1)
        ((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (scm:lambda (m2)
          (scm:cond
            [(Data.Either.Left? m2) (Data.Either.Left (Data.Either.Left-value0 m2))]
            [(Data.Either.Right? m2) (Data.Either.Right (f1 (Data.Either.Right-value0 m2)))]
            [scm:else (rt:fail)]))))))))

  (scm:define except
    (scm:lambda (dictApplicative0)
      (scm:lambda (x1)
        ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) x1))))

  (scm:define monadExceptT
    (scm:lambda (dictMonad0)
      (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
        (applicativeExceptT dictMonad0))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
        (bindExceptT dictMonad0))))))

  (scm:define bindExceptT
    (scm:lambda (dictMonad0)
      (scm:list (scm:cons (scm:string->symbol "bind") (scm:lambda (v1)
        (scm:lambda (k2)
          (((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) v1) (scm:lambda (v23)
            (scm:cond
              [(Data.Either.Left? v23) ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Either.Left (Data.Either.Left-value0 v23)))]
              [(Data.Either.Right? v23) (k2 (Data.Either.Right-value0 v23))]
              [scm:else (rt:fail)])))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
        (applyExceptT dictMonad0))))))

  (scm:define applyExceptT
    (scm:lambda (dictMonad0)
      (scm:let*
        ([_1 ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorExceptT12 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f2)
          ((rt:record-ref _1 (scm:string->symbol "map")) (scm:lambda (m3)
            (scm:cond
              [(Data.Either.Left? m3) (Data.Either.Left (Data.Either.Left-value0 m3))]
              [(Data.Either.Right? m3) (Data.Either.Right (f2 (Data.Either.Right-value0 m3)))]
              [scm:else (rt:fail)]))))))])
          (scm:list (scm:cons (scm:string->symbol "apply") (scm:let ([_3 (bindExceptT dictMonad0)])
            (scm:lambda (f4)
              (scm:lambda (a5)
                (((rt:record-ref _3 (scm:string->symbol "bind")) f4) (scm:lambda (f$p6)
                  (((rt:record-ref _3 (scm:string->symbol "bind")) a5) (scm:lambda (a$p7)
                    ((rt:record-ref (applicativeExceptT dictMonad0) (scm:string->symbol "pure")) (f$p6 a$p7)))))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorExceptT12))))))

  (scm:define applicativeExceptT
    (scm:lambda (dictMonad0)
      (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (x1)
        ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Either.Right x1)))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
        (applyExceptT dictMonad0))))))

  (scm:define semigroupExceptT
    (scm:lambda (dictMonad0)
      (scm:let ([_1 (applyExceptT dictMonad0)])
        (scm:lambda (dictSemigroup2)
          (scm:list (scm:cons (scm:string->symbol "append") (scm:let ([_3 (rt:record-ref dictSemigroup2 (scm:string->symbol "append"))])
            (scm:lambda (a4)
              (scm:lambda (b5)
                (((rt:record-ref _1 (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref _1 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) _3) a4)) b5))))))))))

  (scm:define monadAskExceptT
    (scm:lambda (dictMonadAsk0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadAsk0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadExceptT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeExceptT Monad01))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindExceptT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "ask") (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) (rt:record-ref dictMonadAsk0 (scm:string->symbol "ask"))) (scm:lambda (a3)
            ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Either.Right a3))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadExceptT12))))))

  (scm:define monadReaderExceptT
    (scm:lambda (dictMonadReader0)
      (scm:let ([monadAskExceptT11 (monadAskExceptT ((rt:record-ref dictMonadReader0 (scm:string->symbol "MonadAsk0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "local") (scm:lambda (f2)
          ((rt:record-ref dictMonadReader0 (scm:string->symbol "local")) f2))) (scm:cons (scm:string->symbol "MonadAsk0") (scm:lambda (_)
          monadAskExceptT11))))))

  (scm:define monadContExceptT
    (scm:lambda (dictMonadCont0)
      (scm:let*
        ([_1 ((rt:record-ref dictMonadCont0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadExceptT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeExceptT _1))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindExceptT _1))))])
          (scm:list (scm:cons (scm:string->symbol "callCC") (scm:lambda (f3)
            ((rt:record-ref dictMonadCont0 (scm:string->symbol "callCC")) (scm:lambda (c4)
              (f3 (scm:lambda (a5)
                (c4 (Data.Either.Right a5)))))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadExceptT12))))))

  (scm:define monadEffectExceptT
    (scm:lambda (dictMonadEffect0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadEffect0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadExceptT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeExceptT Monad01))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindExceptT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "liftEffect") (scm:lambda (x3)
            (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((rt:record-ref dictMonadEffect0 (scm:string->symbol "liftEffect")) x3)) (scm:lambda (a4)
              ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Either.Right a4)))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadExceptT12))))))

  (scm:define monadRecExceptT
    (scm:lambda (dictMonadRec0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadRec0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadExceptT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeExceptT Monad01))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindExceptT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "tailRecM") (scm:lambda (f3)
            ((rt:record-ref dictMonadRec0 (scm:string->symbol "tailRecM")) (scm:lambda (a4)
              (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) (f3 a4)) (scm:lambda (m$p5)
                ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (scm:cond
                  [(Data.Either.Left? m$p5) (Control.Monad.Rec.Class.Done (Data.Either.Left (Data.Either.Left-value0 m$p5)))]
                  [(Data.Either.Right? m$p5) (scm:cond
                    [(Control.Monad.Rec.Class.Loop? (Data.Either.Right-value0 m$p5)) (Control.Monad.Rec.Class.Loop (Control.Monad.Rec.Class.Loop-value0 (Data.Either.Right-value0 m$p5)))]
                    [(Control.Monad.Rec.Class.Done? (Data.Either.Right-value0 m$p5)) (Control.Monad.Rec.Class.Done (Data.Either.Right (Control.Monad.Rec.Class.Done-value0 (Data.Either.Right-value0 m$p5))))]
                    [scm:else (rt:fail)])]
                  [scm:else (rt:fail)])))))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadExceptT12))))))

  (scm:define monadStateExceptT
    (scm:lambda (dictMonadState0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadState0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadExceptT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeExceptT Monad01))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindExceptT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "state") (scm:lambda (f3)
            (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((rt:record-ref dictMonadState0 (scm:string->symbol "state")) f3)) (scm:lambda (a4)
              ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Either.Right a4)))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadExceptT12))))))

  (scm:define monadTellExceptT
    (scm:lambda (dictMonadTell0)
      (scm:let*
        ([Monad11 ((rt:record-ref dictMonadTell0 (scm:string->symbol "Monad1")) (scm:quote undefined))]
         [Semigroup02 ((rt:record-ref dictMonadTell0 (scm:string->symbol "Semigroup0")) (scm:quote undefined))]
         [monadExceptT13 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeExceptT Monad11))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindExceptT Monad11))))])
          (scm:list (scm:cons (scm:string->symbol "tell") (scm:lambda (x4)
            (((rt:record-ref ((rt:record-ref Monad11 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((rt:record-ref dictMonadTell0 (scm:string->symbol "tell")) x4)) (scm:lambda (a5)
              ((rt:record-ref ((rt:record-ref Monad11 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Either.Right a5)))))) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
            Semigroup02)) (scm:cons (scm:string->symbol "Monad1") (scm:lambda (_)
            monadExceptT13))))))

  (scm:define monadWriterExceptT
    (scm:lambda (dictMonadWriter0)
      (scm:let*
        ([MonadTell11 ((rt:record-ref dictMonadWriter0 (scm:string->symbol "MonadTell1")) (scm:quote undefined))]
         [Monad12 ((rt:record-ref MonadTell11 (scm:string->symbol "Monad1")) (scm:quote undefined))]
         [_3 ((rt:record-ref Monad12 (scm:string->symbol "Bind1")) (scm:quote undefined))]
         [_4 ((rt:record-ref Monad12 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
         [Monoid05 ((rt:record-ref dictMonadWriter0 (scm:string->symbol "Monoid0")) (scm:quote undefined))]
         [monadTellExceptT16 (monadTellExceptT MonadTell11)])
          (scm:list (scm:cons (scm:string->symbol "listen") (scm:lambda (v7)
            (((rt:record-ref _3 (scm:string->symbol "bind")) ((rt:record-ref dictMonadWriter0 (scm:string->symbol "listen")) v7)) (scm:lambda (v8)
              ((rt:record-ref _4 (scm:string->symbol "pure")) (scm:cond
                [(Data.Either.Left? (Data.Tuple.Tuple-value0 v8)) (Data.Either.Left (Data.Either.Left-value0 (Data.Tuple.Tuple-value0 v8)))]
                [(Data.Either.Right? (Data.Tuple.Tuple-value0 v8)) (Data.Either.Right (Data.Tuple.Tuple* (Data.Either.Right-value0 (Data.Tuple.Tuple-value0 v8)) (Data.Tuple.Tuple-value1 v8)))]
                [scm:else (rt:fail)])))))) (scm:cons (scm:string->symbol "pass") (scm:lambda (v7)
            ((rt:record-ref dictMonadWriter0 (scm:string->symbol "pass")) (((rt:record-ref _3 (scm:string->symbol "bind")) v7) (scm:lambda (a8)
              ((rt:record-ref _4 (scm:string->symbol "pure")) (scm:cond
                [(Data.Either.Left? a8) (Data.Tuple.Tuple* (Data.Either.Left (Data.Either.Left-value0 a8)) identity)]
                [(Data.Either.Right? a8) (Data.Tuple.Tuple* (Data.Either.Right (Data.Tuple.Tuple-value0 (Data.Either.Right-value0 a8))) (Data.Tuple.Tuple-value1 (Data.Either.Right-value0 a8)))]
                [scm:else (rt:fail)]))))))) (scm:cons (scm:string->symbol "Monoid0") (scm:lambda (_)
            Monoid05)) (scm:cons (scm:string->symbol "MonadTell1") (scm:lambda (_)
            monadTellExceptT16))))))

  (scm:define monadThrowExceptT
    (scm:lambda (dictMonad0)
      (scm:let ([monadExceptT11 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
        (applicativeExceptT dictMonad0))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
        (bindExceptT dictMonad0))))])
        (scm:list (scm:cons (scm:string->symbol "throwError") (scm:lambda (x2)
          ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Either.Left x2)))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
          monadExceptT11))))))

  (scm:define monadErrorExceptT
    (scm:lambda (dictMonad0)
      (scm:let ([monadThrowExceptT11 (monadThrowExceptT dictMonad0)])
        (scm:list (scm:cons (scm:string->symbol "catchError") (scm:lambda (v2)
          (scm:lambda (k3)
            (((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) v2) (scm:lambda (v24)
              (scm:cond
                [(Data.Either.Left? v24) (k3 (Data.Either.Left-value0 v24))]
                [(Data.Either.Right? v24) ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Either.Right (Data.Either.Right-value0 v24)))]
                [scm:else (rt:fail)])))))) (scm:cons (scm:string->symbol "MonadThrow0") (scm:lambda (_)
          monadThrowExceptT11))))))

  (scm:define monadSTExceptT
    (scm:lambda (dictMonadST0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadST0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadExceptT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (applicativeExceptT Monad01))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindExceptT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "liftST") (scm:lambda (x3)
            (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((rt:record-ref dictMonadST0 (scm:string->symbol "liftST")) x3)) (scm:lambda (a4)
              ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Either.Right a4)))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadExceptT12))))))

  (scm:define monoidExceptT
    (scm:lambda (dictMonad0)
      (scm:let ([semigroupExceptT11 (semigroupExceptT dictMonad0)])
        (scm:lambda (dictMonoid2)
          (scm:let ([semigroupExceptT23 (semigroupExceptT11 ((rt:record-ref dictMonoid2 (scm:string->symbol "Semigroup0")) (scm:quote undefined)))])
            (scm:list (scm:cons (scm:string->symbol "mempty") ((rt:record-ref (applicativeExceptT dictMonad0) (scm:string->symbol "pure")) (rt:record-ref dictMonoid2 (scm:string->symbol "mempty")))) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
              semigroupExceptT23))))))))

  (scm:define altExceptT
    (scm:lambda (dictSemigroup0)
      (scm:lambda (dictMonad1)
        (scm:let*
          ([Bind12 ((rt:record-ref dictMonad1 (scm:string->symbol "Bind1")) (scm:quote undefined))]
           [_3 ((rt:record-ref dictMonad1 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
           [_4 ((rt:record-ref ((rt:record-ref Bind12 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))]
           [functorExceptT15 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f5)
            ((rt:record-ref _4 (scm:string->symbol "map")) (scm:lambda (m6)
              (scm:cond
                [(Data.Either.Left? m6) (Data.Either.Left (Data.Either.Left-value0 m6))]
                [(Data.Either.Right? m6) (Data.Either.Right (f5 (Data.Either.Right-value0 m6)))]
                [scm:else (rt:fail)]))))))])
            (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (v6)
              (scm:lambda (v17)
                (((rt:record-ref Bind12 (scm:string->symbol "bind")) v6) (scm:lambda (rm8)
                  (scm:cond
                    [(Data.Either.Right? rm8) ((rt:record-ref _3 (scm:string->symbol "pure")) (Data.Either.Right (Data.Either.Right-value0 rm8)))]
                    [(Data.Either.Left? rm8) (scm:let ([_9 (Data.Either.Left-value0 rm8)])
                      (((rt:record-ref Bind12 (scm:string->symbol "bind")) v17) (scm:lambda (rn10)
                        (scm:cond
                          [(Data.Either.Right? rn10) ((rt:record-ref _3 (scm:string->symbol "pure")) (Data.Either.Right (Data.Either.Right-value0 rn10)))]
                          [(Data.Either.Left? rn10) ((rt:record-ref _3 (scm:string->symbol "pure")) (Data.Either.Left (((rt:record-ref dictSemigroup0 (scm:string->symbol "append")) _9) (Data.Either.Left-value0 rn10))))]
                          [scm:else (rt:fail)]))))]
                    [scm:else (rt:fail)])))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
              functorExceptT15)))))))

  (scm:define plusExceptT
    (scm:lambda (dictMonoid0)
      (scm:let*
        ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))]
         [altExceptT12 (altExceptT ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined)))])
          (scm:lambda (dictMonad3)
            (scm:let ([altExceptT24 (altExceptT12 dictMonad3)])
              (scm:list (scm:cons (scm:string->symbol "empty") ((rt:record-ref (monadThrowExceptT dictMonad3) (scm:string->symbol "throwError")) mempty1)) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
                altExceptT24))))))))

  (scm:define alternativeExceptT
    (scm:lambda (dictMonoid0)
      (scm:let ([plusExceptT11 (plusExceptT dictMonoid0)])
        (scm:lambda (dictMonad2)
          (scm:let*
            ([applicativeExceptT13 (applicativeExceptT dictMonad2)]
             [plusExceptT24 (plusExceptT11 dictMonad2)])
              (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
                applicativeExceptT13)) (scm:cons (scm:string->symbol "Plus1") (scm:lambda (_)
                plusExceptT24))))))))

  (scm:define monadPlusExceptT
    (scm:lambda (dictMonoid0)
      (scm:let ([alternativeExceptT11 (alternativeExceptT dictMonoid0)])
        (scm:lambda (dictMonad2)
          (scm:let*
            ([monadExceptT13 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
              (applicativeExceptT dictMonad2))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
              (bindExceptT dictMonad2))))]
             [alternativeExceptT24 (alternativeExceptT11 dictMonad2)])
              (scm:list (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
                monadExceptT13)) (scm:cons (scm:string->symbol "Alternative1") (scm:lambda (_)
                alternativeExceptT24)))))))))
