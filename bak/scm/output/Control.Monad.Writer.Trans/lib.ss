#!r6rs
#!chezscheme
(library
  (Control.Monad.Writer.Trans lib)
  (export
    WriterT
    altWriterT
    alternativeWriterT
    applicativeWriterT
    applyWriterT
    bindWriterT
    execWriterT
    functorWriterT
    mapWriterT
    monadAskWriterT
    monadContWriterT
    monadEffectWriter
    monadErrorWriterT
    monadPlusWriterT
    monadReaderWriterT
    monadRecWriterT
    monadSTWriterT
    monadStateWriterT
    monadTellWriterT
    monadThrowWriterT
    monadTransWriterT
    monadWriterT
    monadWriterWriterT
    monoidWriterT
    newtypeWriterT
    plusWriterT
    runWriterT
    semigroupWriterT)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.Rec.Class lib) Control.Monad.Rec.Class.)
    (prefix (Data.Tuple lib) Data.Tuple.)
    (prefix (Data.Unit lib) Data.Unit.))

  (scm:define WriterT
    (scm:lambda (x0)
      x0))

  (scm:define runWriterT
    (scm:lambda (v0)
      v0))

  (scm:define newtypeWriterT
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define monadTransWriterT
    (scm:lambda (dictMonoid0)
      (scm:let ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))])
        (scm:list (scm:cons (scm:string->symbol "lift") (scm:lambda (dictMonad2)
          (scm:lambda (m3)
            (((rt:record-ref ((rt:record-ref dictMonad2 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) m3) (scm:lambda (a4)
              ((rt:record-ref ((rt:record-ref dictMonad2 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* a4 mempty1)))))))))))

  (scm:define mapWriterT
    (scm:lambda (f0)
      (scm:lambda (v1)
        (f0 v1))))

  (scm:define functorWriterT
    (scm:lambda (dictFunctor0)
      (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f1)
        ((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (scm:lambda (v2)
          (Data.Tuple.Tuple* (f1 (Data.Tuple.Tuple-value0 v2)) (Data.Tuple.Tuple-value1 v2)))))))))

  (scm:define execWriterT
    (scm:lambda (dictFunctor0)
      (scm:lambda (v1)
        (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) Data.Tuple.snd) v1))))

  (scm:define applyWriterT
    (scm:lambda (dictSemigroup0)
      (scm:lambda (dictApply1)
        (scm:let*
          ([Functor02 ((rt:record-ref dictApply1 (scm:string->symbol "Functor0")) (scm:quote undefined))]
           [functorWriterT13 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f3)
            ((rt:record-ref Functor02 (scm:string->symbol "map")) (scm:lambda (v4)
              (Data.Tuple.Tuple* (f3 (Data.Tuple.Tuple-value0 v4)) (Data.Tuple.Tuple-value1 v4)))))))])
            (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v4)
              (scm:lambda (v15)
                (((rt:record-ref dictApply1 (scm:string->symbol "apply")) (((rt:record-ref Functor02 (scm:string->symbol "map")) (scm:lambda (v36)
                  (scm:lambda (v47)
                    (Data.Tuple.Tuple* ((Data.Tuple.Tuple-value0 v36) (Data.Tuple.Tuple-value0 v47)) (((rt:record-ref dictSemigroup0 (scm:string->symbol "append")) (Data.Tuple.Tuple-value1 v36)) (Data.Tuple.Tuple-value1 v47)))))) v4)) v15)))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
              functorWriterT13)))))))

  (scm:define bindWriterT
    (scm:lambda (dictSemigroup0)
      (scm:lambda (dictBind1)
        (scm:let*
          ([Apply02 ((rt:record-ref dictBind1 (scm:string->symbol "Apply0")) (scm:quote undefined))]
           [Functor03 ((rt:record-ref Apply02 (scm:string->symbol "Functor0")) (scm:quote undefined))]
           [functorWriterT14 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f4)
            ((rt:record-ref Functor03 (scm:string->symbol "map")) (scm:lambda (v5)
              (Data.Tuple.Tuple* (f4 (Data.Tuple.Tuple-value0 v5)) (Data.Tuple.Tuple-value1 v5)))))))]
           [applyWriterT25 (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v5)
            (scm:lambda (v16)
              (((rt:record-ref Apply02 (scm:string->symbol "apply")) (((rt:record-ref Functor03 (scm:string->symbol "map")) (scm:lambda (v37)
                (scm:lambda (v48)
                  (Data.Tuple.Tuple* ((Data.Tuple.Tuple-value0 v37) (Data.Tuple.Tuple-value0 v48)) (((rt:record-ref dictSemigroup0 (scm:string->symbol "append")) (Data.Tuple.Tuple-value1 v37)) (Data.Tuple.Tuple-value1 v48)))))) v5)) v16)))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorWriterT14)))])
            (scm:list (scm:cons (scm:string->symbol "bind") (scm:lambda (v6)
              (scm:lambda (k7)
                (((rt:record-ref dictBind1 (scm:string->symbol "bind")) v6) (scm:lambda (v18)
                  (scm:let ([_9 (Data.Tuple.Tuple-value1 v18)])
                    (((rt:record-ref ((rt:record-ref Apply02 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (v310)
                      (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v310) (((rt:record-ref dictSemigroup0 (scm:string->symbol "append")) _9) (Data.Tuple.Tuple-value1 v310))))) (k7 (Data.Tuple.Tuple-value0 v18))))))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
              applyWriterT25)))))))

  (scm:define semigroupWriterT
    (scm:lambda (dictApply0)
      (scm:lambda (dictSemigroup1)
        (scm:let ([Functor02 ((rt:record-ref dictApply0 (scm:string->symbol "Functor0")) (scm:quote undefined))])
          (scm:lambda (dictSemigroup13)
            (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (a4)
              (scm:lambda (b5)
                (((rt:record-ref dictApply0 (scm:string->symbol "apply")) (((rt:record-ref Functor02 (scm:string->symbol "map")) (scm:lambda (v36)
                  (scm:lambda (v47)
                    (Data.Tuple.Tuple* ((Data.Tuple.Tuple-value0 v36) (Data.Tuple.Tuple-value0 v47)) (((rt:record-ref dictSemigroup1 (scm:string->symbol "append")) (Data.Tuple.Tuple-value1 v36)) (Data.Tuple.Tuple-value1 v47)))))) (((rt:record-ref Functor02 (scm:string->symbol "map")) (scm:lambda (v6)
                  (Data.Tuple.Tuple* ((rt:record-ref dictSemigroup13 (scm:string->symbol "append")) (Data.Tuple.Tuple-value0 v6)) (Data.Tuple.Tuple-value1 v6)))) a4))) b5))))))))))

  (scm:define applicativeWriterT
    (scm:lambda (dictMonoid0)
      (scm:let*
        ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))]
         [_2 ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined))])
          (scm:lambda (dictApplicative3)
            (scm:let*
              ([_4 ((rt:record-ref dictApplicative3 (scm:string->symbol "Apply0")) (scm:quote undefined))]
               [Functor05 ((rt:record-ref _4 (scm:string->symbol "Functor0")) (scm:quote undefined))]
               [applyWriterT26 (scm:let ([functorWriterT16 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f6)
                ((rt:record-ref Functor05 (scm:string->symbol "map")) (scm:lambda (v7)
                  (Data.Tuple.Tuple* (f6 (Data.Tuple.Tuple-value0 v7)) (Data.Tuple.Tuple-value1 v7)))))))])
                (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v7)
                  (scm:lambda (v18)
                    (((rt:record-ref _4 (scm:string->symbol "apply")) (((rt:record-ref Functor05 (scm:string->symbol "map")) (scm:lambda (v39)
                      (scm:lambda (v410)
                        (Data.Tuple.Tuple* ((Data.Tuple.Tuple-value0 v39) (Data.Tuple.Tuple-value0 v410)) (((rt:record-ref _2 (scm:string->symbol "append")) (Data.Tuple.Tuple-value1 v39)) (Data.Tuple.Tuple-value1 v410)))))) v7)) v18)))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
                  functorWriterT16))))])
                (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (a7)
                  ((rt:record-ref dictApplicative3 (scm:string->symbol "pure")) (Data.Tuple.Tuple* a7 mempty1)))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
                  applyWriterT26))))))))

  (scm:define monadWriterT
    (scm:lambda (dictMonoid0)
      (scm:let*
        ([applicativeWriterT11 (applicativeWriterT dictMonoid0)]
         [bindWriterT12 (bindWriterT ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined)))])
          (scm:lambda (dictMonad3)
            (scm:let*
              ([applicativeWriterT24 (applicativeWriterT11 ((rt:record-ref dictMonad3 (scm:string->symbol "Applicative0")) (scm:quote undefined)))]
               [bindWriterT25 (bindWriterT12 ((rt:record-ref dictMonad3 (scm:string->symbol "Bind1")) (scm:quote undefined)))])
                (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
                  applicativeWriterT24)) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
                  bindWriterT25))))))))

  (scm:define monadAskWriterT
    (scm:lambda (dictMonoid0)
      (scm:let*
        ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))]
         [monadWriterT12 (monadWriterT dictMonoid0)])
          (scm:lambda (dictMonadAsk3)
            (scm:let*
              ([Monad04 ((rt:record-ref dictMonadAsk3 (scm:string->symbol "Monad0")) (scm:quote undefined))]
               [monadWriterT25 (monadWriterT12 Monad04)])
                (scm:list (scm:cons (scm:string->symbol "ask") (((rt:record-ref ((rt:record-ref Monad04 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) (rt:record-ref dictMonadAsk3 (scm:string->symbol "ask"))) (scm:lambda (a6)
                  ((rt:record-ref ((rt:record-ref Monad04 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* a6 mempty1))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
                  monadWriterT25))))))))

  (scm:define monadReaderWriterT
    (scm:lambda (dictMonoid0)
      (scm:let ([monadAskWriterT11 (monadAskWriterT dictMonoid0)])
        (scm:lambda (dictMonadReader2)
          (scm:let ([monadAskWriterT23 (monadAskWriterT11 ((rt:record-ref dictMonadReader2 (scm:string->symbol "MonadAsk0")) (scm:quote undefined)))])
            (scm:list (scm:cons (scm:string->symbol "local") (scm:lambda (f4)
              ((rt:record-ref dictMonadReader2 (scm:string->symbol "local")) f4))) (scm:cons (scm:string->symbol "MonadAsk0") (scm:lambda (_)
              monadAskWriterT23))))))))

  (scm:define monadContWriterT
    (scm:lambda (dictMonoid0)
      (scm:let*
        ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))]
         [monadWriterT12 (monadWriterT dictMonoid0)])
          (scm:lambda (dictMonadCont3)
            (scm:let ([monadWriterT24 (monadWriterT12 ((rt:record-ref dictMonadCont3 (scm:string->symbol "Monad0")) (scm:quote undefined)))])
              (scm:list (scm:cons (scm:string->symbol "callCC") (scm:lambda (f5)
                ((rt:record-ref dictMonadCont3 (scm:string->symbol "callCC")) (scm:lambda (c6)
                  (f5 (scm:lambda (a7)
                    (c6 (Data.Tuple.Tuple* a7 mempty1)))))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
                monadWriterT24))))))))

  (scm:define monadEffectWriter
    (scm:lambda (dictMonoid0)
      (scm:let*
        ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))]
         [monadWriterT12 (monadWriterT dictMonoid0)])
          (scm:lambda (dictMonadEffect3)
            (scm:let*
              ([Monad04 ((rt:record-ref dictMonadEffect3 (scm:string->symbol "Monad0")) (scm:quote undefined))]
               [monadWriterT25 (monadWriterT12 Monad04)])
                (scm:list (scm:cons (scm:string->symbol "liftEffect") (scm:lambda (x6)
                  (((rt:record-ref ((rt:record-ref Monad04 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((rt:record-ref dictMonadEffect3 (scm:string->symbol "liftEffect")) x6)) (scm:lambda (a7)
                    ((rt:record-ref ((rt:record-ref Monad04 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* a7 mempty1)))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
                  monadWriterT25))))))))

  (scm:define monadRecWriterT
    (scm:lambda (dictMonoid0)
      (scm:let*
        ([_1 ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined))]
         [mempty2 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))]
         [monadWriterT13 (monadWriterT dictMonoid0)])
          (scm:lambda (dictMonadRec4)
            (scm:let*
              ([Monad05 ((rt:record-ref dictMonadRec4 (scm:string->symbol "Monad0")) (scm:quote undefined))]
               [monadWriterT26 (monadWriterT13 Monad05)])
                (scm:list (scm:cons (scm:string->symbol "tailRecM") (scm:lambda (f7)
                  (scm:lambda (a8)
                    (((rt:record-ref dictMonadRec4 (scm:string->symbol "tailRecM")) (scm:lambda (v9)
                      (scm:let ([_10 (Data.Tuple.Tuple-value1 v9)])
                        (((rt:record-ref ((rt:record-ref Monad05 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) (f7 (Data.Tuple.Tuple-value0 v9))) (scm:lambda (v211)
                          ((rt:record-ref ((rt:record-ref Monad05 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (scm:cond
                            [(Control.Monad.Rec.Class.Loop? (Data.Tuple.Tuple-value0 v211)) (Control.Monad.Rec.Class.Loop (Data.Tuple.Tuple* (Control.Monad.Rec.Class.Loop-value0 (Data.Tuple.Tuple-value0 v211)) (((rt:record-ref _1 (scm:string->symbol "append")) _10) (Data.Tuple.Tuple-value1 v211))))]
                            [(Control.Monad.Rec.Class.Done? (Data.Tuple.Tuple-value0 v211)) (Control.Monad.Rec.Class.Done (Data.Tuple.Tuple* (Control.Monad.Rec.Class.Done-value0 (Data.Tuple.Tuple-value0 v211)) (((rt:record-ref _1 (scm:string->symbol "append")) _10) (Data.Tuple.Tuple-value1 v211))))]
                            [scm:else (rt:fail)]))))))) (Data.Tuple.Tuple* a8 mempty2))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
                  monadWriterT26))))))))

  (scm:define monadStateWriterT
    (scm:lambda (dictMonoid0)
      (scm:let*
        ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))]
         [monadWriterT12 (monadWriterT dictMonoid0)])
          (scm:lambda (dictMonadState3)
            (scm:let*
              ([Monad04 ((rt:record-ref dictMonadState3 (scm:string->symbol "Monad0")) (scm:quote undefined))]
               [monadWriterT25 (monadWriterT12 Monad04)])
                (scm:list (scm:cons (scm:string->symbol "state") (scm:lambda (f6)
                  (((rt:record-ref ((rt:record-ref Monad04 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((rt:record-ref dictMonadState3 (scm:string->symbol "state")) f6)) (scm:lambda (a7)
                    ((rt:record-ref ((rt:record-ref Monad04 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* a7 mempty1)))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
                  monadWriterT25))))))))

  (scm:define monadTellWriterT
    (scm:lambda (dictMonoid0)
      (scm:let*
        ([Semigroup01 ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined))]
         [monadWriterT12 (monadWriterT dictMonoid0)])
          (scm:lambda (dictMonad3)
            (scm:let ([monadWriterT24 (monadWriterT12 dictMonad3)])
              (scm:list (scm:cons (scm:string->symbol "tell") (scm:let ([_5 (Data.Tuple.Tuple Data.Unit.unit)])
                (scm:lambda (x6)
                  ((rt:record-ref ((rt:record-ref dictMonad3 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (_5 x6))))) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
                Semigroup01)) (scm:cons (scm:string->symbol "Monad1") (scm:lambda (_)
                monadWriterT24))))))))

  (scm:define monadWriterWriterT
    (scm:lambda (dictMonoid0)
      (scm:let ([monadTellWriterT11 (monadTellWriterT dictMonoid0)])
        (scm:lambda (dictMonad2)
          (scm:let*
            ([_3 ((rt:record-ref dictMonad2 (scm:string->symbol "Bind1")) (scm:quote undefined))]
             [_4 ((rt:record-ref dictMonad2 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
             [monadTellWriterT25 (monadTellWriterT11 dictMonad2)])
              (scm:list (scm:cons (scm:string->symbol "listen") (scm:lambda (v6)
                (((rt:record-ref _3 (scm:string->symbol "bind")) v6) (scm:lambda (v17)
                  ((rt:record-ref _4 (scm:string->symbol "pure")) (Data.Tuple.Tuple* (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v17) (Data.Tuple.Tuple-value1 v17)) (Data.Tuple.Tuple-value1 v17))))))) (scm:cons (scm:string->symbol "pass") (scm:lambda (v6)
                (((rt:record-ref _3 (scm:string->symbol "bind")) v6) (scm:lambda (v17)
                  ((rt:record-ref _4 (scm:string->symbol "pure")) (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 (Data.Tuple.Tuple-value0 v17)) ((Data.Tuple.Tuple-value1 (Data.Tuple.Tuple-value0 v17)) (Data.Tuple.Tuple-value1 v17)))))))) (scm:cons (scm:string->symbol "Monoid0") (scm:lambda (_)
                dictMonoid0)) (scm:cons (scm:string->symbol "MonadTell1") (scm:lambda (_)
                monadTellWriterT25))))))))

  (scm:define monadThrowWriterT
    (scm:lambda (dictMonoid0)
      (scm:let*
        ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))]
         [monadWriterT12 (monadWriterT dictMonoid0)])
          (scm:lambda (dictMonadThrow3)
            (scm:let*
              ([Monad04 ((rt:record-ref dictMonadThrow3 (scm:string->symbol "Monad0")) (scm:quote undefined))]
               [monadWriterT25 (monadWriterT12 Monad04)])
                (scm:list (scm:cons (scm:string->symbol "throwError") (scm:lambda (e6)
                  (((rt:record-ref ((rt:record-ref Monad04 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((rt:record-ref dictMonadThrow3 (scm:string->symbol "throwError")) e6)) (scm:lambda (a7)
                    ((rt:record-ref ((rt:record-ref Monad04 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* a7 mempty1)))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
                  monadWriterT25))))))))

  (scm:define monadErrorWriterT
    (scm:lambda (dictMonoid0)
      (scm:let ([monadThrowWriterT11 (monadThrowWriterT dictMonoid0)])
        (scm:lambda (dictMonadError2)
          (scm:let ([monadThrowWriterT23 (monadThrowWriterT11 ((rt:record-ref dictMonadError2 (scm:string->symbol "MonadThrow0")) (scm:quote undefined)))])
            (scm:list (scm:cons (scm:string->symbol "catchError") (scm:lambda (v4)
              (scm:lambda (h5)
                (((rt:record-ref dictMonadError2 (scm:string->symbol "catchError")) v4) (scm:lambda (e6)
                  (h5 e6)))))) (scm:cons (scm:string->symbol "MonadThrow0") (scm:lambda (_)
              monadThrowWriterT23))))))))

  (scm:define monadSTWriterT
    (scm:lambda (dictMonoid0)
      (scm:let*
        ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))]
         [monadWriterT12 (monadWriterT dictMonoid0)])
          (scm:lambda (dictMonadST3)
            (scm:let*
              ([Monad04 ((rt:record-ref dictMonadST3 (scm:string->symbol "Monad0")) (scm:quote undefined))]
               [monadWriterT25 (monadWriterT12 Monad04)])
                (scm:list (scm:cons (scm:string->symbol "liftST") (scm:lambda (x6)
                  (((rt:record-ref ((rt:record-ref Monad04 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((rt:record-ref dictMonadST3 (scm:string->symbol "liftST")) x6)) (scm:lambda (a7)
                    ((rt:record-ref ((rt:record-ref Monad04 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* a7 mempty1)))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
                  monadWriterT25))))))))

  (scm:define monoidWriterT
    (scm:lambda (dictApplicative0)
      (scm:let ([_1 ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined))])
        (scm:lambda (dictMonoid2)
          (scm:let*
            ([_3 ((rt:record-ref dictMonoid2 (scm:string->symbol "Semigroup0")) (scm:quote undefined))]
             [Functor04 ((rt:record-ref _1 (scm:string->symbol "Functor0")) (scm:quote undefined))])
              (scm:lambda (dictMonoid15)
                (scm:let*
                  ([_6 ((rt:record-ref dictMonoid15 (scm:string->symbol "Semigroup0")) (scm:quote undefined))]
                   [semigroupWriterT37 (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (a7)
                    (scm:lambda (b8)
                      (((rt:record-ref _1 (scm:string->symbol "apply")) (((rt:record-ref Functor04 (scm:string->symbol "map")) (scm:lambda (v39)
                        (scm:lambda (v410)
                          (Data.Tuple.Tuple* ((Data.Tuple.Tuple-value0 v39) (Data.Tuple.Tuple-value0 v410)) (((rt:record-ref _3 (scm:string->symbol "append")) (Data.Tuple.Tuple-value1 v39)) (Data.Tuple.Tuple-value1 v410)))))) (((rt:record-ref Functor04 (scm:string->symbol "map")) (scm:lambda (v9)
                        (Data.Tuple.Tuple* ((rt:record-ref _6 (scm:string->symbol "append")) (Data.Tuple.Tuple-value0 v9)) (Data.Tuple.Tuple-value1 v9)))) a7))) b8)))))])
                    (scm:list (scm:cons (scm:string->symbol "mempty") ((rt:record-ref ((applicativeWriterT dictMonoid2) dictApplicative0) (scm:string->symbol "pure")) (rt:record-ref dictMonoid15 (scm:string->symbol "mempty")))) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
                      semigroupWriterT37))))))))))

  (scm:define altWriterT
    (scm:lambda (dictAlt0)
      (scm:let*
        ([_1 ((rt:record-ref dictAlt0 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorWriterT12 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f2)
          ((rt:record-ref _1 (scm:string->symbol "map")) (scm:lambda (v3)
            (Data.Tuple.Tuple* (f2 (Data.Tuple.Tuple-value0 v3)) (Data.Tuple.Tuple-value1 v3)))))))])
          (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (v3)
            (scm:lambda (v14)
              (((rt:record-ref dictAlt0 (scm:string->symbol "alt")) v3) v14)))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorWriterT12))))))

  (scm:define plusWriterT
    (scm:lambda (dictPlus0)
      (scm:let*
        ([_1 ((rt:record-ref dictPlus0 (scm:string->symbol "Alt0")) (scm:quote undefined))]
         [_2 ((rt:record-ref _1 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [altWriterT13 (scm:let ([functorWriterT13 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f3)
          ((rt:record-ref _2 (scm:string->symbol "map")) (scm:lambda (v4)
            (Data.Tuple.Tuple* (f3 (Data.Tuple.Tuple-value0 v4)) (Data.Tuple.Tuple-value1 v4)))))))])
          (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (v4)
            (scm:lambda (v15)
              (((rt:record-ref _1 (scm:string->symbol "alt")) v4) v15)))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorWriterT13))))])
          (scm:list (scm:cons (scm:string->symbol "empty") (rt:record-ref dictPlus0 (scm:string->symbol "empty"))) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
            altWriterT13))))))

  (scm:define alternativeWriterT
    (scm:lambda (dictMonoid0)
      (scm:let ([applicativeWriterT11 (applicativeWriterT dictMonoid0)])
        (scm:lambda (dictAlternative2)
          (scm:let*
            ([applicativeWriterT23 (applicativeWriterT11 ((rt:record-ref dictAlternative2 (scm:string->symbol "Applicative0")) (scm:quote undefined)))]
             [_4 ((rt:record-ref dictAlternative2 (scm:string->symbol "Plus1")) (scm:quote undefined))]
             [_5 ((rt:record-ref _4 (scm:string->symbol "Alt0")) (scm:quote undefined))]
             [plusWriterT16 (scm:let*
              ([_6 ((rt:record-ref _5 (scm:string->symbol "Functor0")) (scm:quote undefined))]
               [functorWriterT17 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f7)
                ((rt:record-ref _6 (scm:string->symbol "map")) (scm:lambda (v8)
                  (Data.Tuple.Tuple* (f7 (Data.Tuple.Tuple-value0 v8)) (Data.Tuple.Tuple-value1 v8)))))))]
               [altWriterT18 (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (v8)
                (scm:lambda (v19)
                  (((rt:record-ref _5 (scm:string->symbol "alt")) v8) v19)))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
                functorWriterT17)))])
                (scm:list (scm:cons (scm:string->symbol "empty") (rt:record-ref _4 (scm:string->symbol "empty"))) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
                  altWriterT18))))])
              (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
                applicativeWriterT23)) (scm:cons (scm:string->symbol "Plus1") (scm:lambda (_)
                plusWriterT16))))))))

  (scm:define monadPlusWriterT
    (scm:lambda (dictMonoid0)
      (scm:let*
        ([monadWriterT11 (monadWriterT dictMonoid0)]
         [alternativeWriterT12 (alternativeWriterT dictMonoid0)])
          (scm:lambda (dictMonadPlus3)
            (scm:let*
              ([monadWriterT24 (monadWriterT11 ((rt:record-ref dictMonadPlus3 (scm:string->symbol "Monad0")) (scm:quote undefined)))]
               [alternativeWriterT25 (alternativeWriterT12 ((rt:record-ref dictMonadPlus3 (scm:string->symbol "Alternative1")) (scm:quote undefined)))])
                (scm:list (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
                  monadWriterT24)) (scm:cons (scm:string->symbol "Alternative1") (scm:lambda (_)
                  alternativeWriterT25)))))))))
