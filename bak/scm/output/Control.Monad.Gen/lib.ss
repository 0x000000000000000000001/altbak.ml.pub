#!r6rs
#!chezscheme
(library
  (Control.Monad.Gen lib)
  (export
    Cons
    Cons*
    Cons-value0
    Cons-value1
    Cons?
    Nil
    Nil?
    choose
    elements
    filtered
    freqSemigroup
    frequency
    fromIndex
    monoidAdditive
    oneOf
    semigroupFreqSemigroup
    suchThat
    unfoldable)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.Rec.Class lib) Control.Monad.Rec.Class.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Semigroup.Last lib) Data.Semigroup.Last.)
    (prefix (Data.Tuple lib) Data.Tuple.)
    (prefix (Data.Unit lib) Data.Unit.))

  (scm:define monoidAdditive
    (scm:let ([semigroupAdditive10 (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:fl+ v0 v11)))))])
      (scm:list (scm:cons (scm:string->symbol "mempty") 0.0) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
        semigroupAdditive10)))))

  (scm:define-record-type (Cons$ Cons* Cons?)
    (scm:fields (scm:immutable value0 Cons-value0) (scm:immutable value1 Cons-value1)))

  (scm:define Cons
    (scm:lambda (value0)
      (scm:lambda (value1)
        (Cons* value0 value1))))

  (scm:define Nil
    (scm:quote Nil))

  (scm:define Nil?
    (scm:lambda (v)
      (scm:eq? (scm:quote Nil) v)))

  (scm:define unfoldable
    (scm:lambda (dictMonadRec0)
      (scm:lambda (dictMonadGen1)
        (scm:let*
          ([Monad02 ((rt:record-ref dictMonadGen1 (scm:string->symbol "Monad0")) (scm:quote undefined))]
           [_3 ((rt:record-ref Monad02 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
           [Bind14 ((rt:record-ref Monad02 (scm:string->symbol "Bind1")) (scm:quote undefined))])
            (scm:lambda (dictUnfoldable5)
              (scm:lambda (gen6)
                (((rt:record-ref ((rt:record-ref ((rt:record-ref Bind14 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) ((rt:record-ref dictUnfoldable5 (scm:string->symbol "unfoldr")) (scm:lambda (v7)
                  (scm:cond
                    [(Nil? v7) Data.Maybe.Nothing]
                    [(Cons? v7) (Data.Maybe.Just (Data.Tuple.Tuple* (Cons-value0 v7) (Cons-value1 v7)))]
                    [scm:else (rt:fail)])))) ((rt:record-ref dictMonadGen1 (scm:string->symbol "sized")) (scm:let*
                  ([_7 ((rt:record-ref dictMonadRec0 (scm:string->symbol "tailRecM")) (scm:lambda (v7)
                    (scm:cond
                      [(scm:fx<=? (Data.Tuple.Tuple-value1 v7) 0) ((rt:record-ref _3 (scm:string->symbol "pure")) (Control.Monad.Rec.Class.Done (Data.Tuple.Tuple-value0 v7)))]
                      [scm:else (scm:let*
                        ([_8 (Data.Tuple.Tuple-value0 v7)]
                         [_9 (Data.Tuple.Tuple-value1 v7)])
                          (((rt:record-ref Bind14 (scm:string->symbol "bind")) gen6) (scm:lambda (x10)
                            ((rt:record-ref _3 (scm:string->symbol "pure")) (Control.Monad.Rec.Class.Loop (Data.Tuple.Tuple* (Cons* x10 _8) (scm:fx- _9 1)))))))])))]
                   [_8 (Data.Tuple.Tuple Nil)])
                    (scm:lambda (x9)
                      (_7 (_8 x9))))))))))))

  (scm:define semigroupFreqSemigroup
    (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:lambda (pos2)
          (scm:let ([v23 (v0 pos2)])
            (scm:cond
              [(Data.Maybe.Just? (Data.Tuple.Tuple-value0 v23)) (v11 (Data.Maybe.Just-value0 (Data.Tuple.Tuple-value0 v23)))]
              [scm:else v23]))))))))

  (scm:define fromIndex
    (scm:lambda (dictFoldable10)
      (scm:let ([foldMap11 ((rt:record-ref dictFoldable10 (scm:string->symbol "foldMap1")) Data.Semigroup.Last.semigroupLast)])
        (scm:lambda (i2)
          (scm:lambda (xs3)
            (scm:letrec ([go4 (scm:lambda (v5)
              (scm:lambda (v16)
                (scm:cond
                  [(Cons? v16) (scm:cond
                    [(Nil? (Cons-value1 v16)) (Cons-value0 v16)]
                    [(scm:fx<=? v5 0) (Cons-value0 v16)]
                    [scm:else ((go4 (scm:fx- v5 1)) (Cons-value1 v16))])]
                  [(Nil? v16) ((foldMap11 Data.Semigroup.Last.Last) xs3)]
                  [scm:else (rt:fail)])))])
              ((go4 i2) ((((rt:record-ref ((rt:record-ref dictFoldable10 (scm:string->symbol "Foldable0")) (scm:quote undefined)) (scm:string->symbol "foldr")) Cons) Nil) xs3))))))))

  (scm:define oneOf
    (scm:lambda (dictMonadGen0)
      (scm:lambda (dictFoldable11)
        (scm:let*
          ([length2 (((rt:record-ref ((rt:record-ref dictFoldable11 (scm:string->symbol "Foldable0")) (scm:quote undefined)) (scm:string->symbol "foldl")) (scm:lambda (c2)
            (scm:lambda (v3)
              (scm:fx+ 1 c2)))) 0)]
           [fromIndex13 (fromIndex dictFoldable11)])
            (scm:lambda (xs4)
              (((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadGen0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) (((rt:record-ref dictMonadGen0 (scm:string->symbol "chooseInt")) 0) (scm:fx- (length2 xs4) 1))) (scm:lambda (n5)
                ((fromIndex13 n5) xs4))))))))

  (scm:define freqSemigroup
    (scm:lambda (v0)
      (scm:let*
        ([_1 (Data.Tuple.Tuple-value0 v0)]
         [_2 (Data.Tuple.Tuple-value1 v0)])
          (scm:lambda (pos3)
            (scm:cond
              [(scm:fl>=? pos3 _1) (Data.Tuple.Tuple* (Data.Maybe.Just (scm:fl- pos3 _1)) _2)]
              [scm:else (Data.Tuple.Tuple* Data.Maybe.Nothing _2)])))))

  (scm:define frequency
    (scm:lambda (dictMonadGen0)
      (scm:lambda (dictFoldable11)
        (scm:let*
          ([foldMap2 ((rt:record-ref ((rt:record-ref dictFoldable11 (scm:string->symbol "Foldable0")) (scm:quote undefined)) (scm:string->symbol "foldMap")) monoidAdditive)]
           [foldMap13 ((rt:record-ref dictFoldable11 (scm:string->symbol "foldMap1")) semigroupFreqSemigroup)])
            (scm:lambda (xs4)
              (((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadGen0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) (((rt:record-ref dictMonadGen0 (scm:string->symbol "chooseFloat")) 0.0) ((foldMap2 Data.Tuple.fst) xs4))) (scm:let ([_5 ((foldMap13 freqSemigroup) xs4)])
                (scm:lambda (x6)
                  (Data.Tuple.Tuple-value1 (_5 x6))))))))))

  (scm:define filtered
    (scm:lambda (dictMonadRec0)
      (scm:lambda (dictMonadGen1)
        (scm:let ([_2 ((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadGen1 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))])
          (scm:lambda (gen3)
            (((rt:record-ref dictMonadRec0 (scm:string->symbol "tailRecM")) (scm:lambda (v4)
              (((rt:record-ref _2 (scm:string->symbol "map")) (scm:lambda (a5)
                (scm:cond
                  [(Data.Maybe.Nothing? a5) (Control.Monad.Rec.Class.Loop Data.Unit.unit)]
                  [(Data.Maybe.Just? a5) (Control.Monad.Rec.Class.Done (Data.Maybe.Just-value0 a5))]
                  [scm:else (rt:fail)]))) gen3))) Data.Unit.unit))))))

  (scm:define suchThat
    (scm:lambda (dictMonadRec0)
      (scm:lambda (dictMonadGen1)
        (scm:let*
          ([filtered22 ((filtered dictMonadRec0) dictMonadGen1)]
           [_3 ((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadGen1 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))])
            (scm:lambda (gen4)
              (scm:lambda (pred5)
                (filtered22 (((rt:record-ref _3 (scm:string->symbol "map")) (scm:lambda (a6)
                  (scm:cond
                    [(pred5 a6) (Data.Maybe.Just a6)]
                    [scm:else Data.Maybe.Nothing]))) gen4))))))))

  (scm:define elements
    (scm:lambda (dictMonadGen0)
      (scm:let ([Monad01 ((rt:record-ref dictMonadGen0 (scm:string->symbol "Monad0")) (scm:quote undefined))])
        (scm:lambda (dictFoldable12)
          (scm:let*
            ([length3 (((rt:record-ref ((rt:record-ref dictFoldable12 (scm:string->symbol "Foldable0")) (scm:quote undefined)) (scm:string->symbol "foldl")) (scm:lambda (c3)
              (scm:lambda (v4)
                (scm:fx+ 1 c3)))) 0)]
             [fromIndex14 (fromIndex dictFoldable12)])
              (scm:lambda (xs5)
                (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) (((rt:record-ref dictMonadGen0 (scm:string->symbol "chooseInt")) 0) (scm:fx- (length3 xs5) 1))) (scm:lambda (n6)
                  ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) ((fromIndex14 n6) xs5))))))))))

  (scm:define choose
    (scm:lambda (dictMonadGen0)
      (scm:let ([chooseBool1 (rt:record-ref dictMonadGen0 (scm:string->symbol "chooseBool"))])
        (scm:lambda (genA2)
          (scm:lambda (genB3)
            (((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadGen0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) chooseBool1) (scm:lambda (v4)
              (scm:cond
                [v4 genA2]
                [scm:else genB3])))))))))
