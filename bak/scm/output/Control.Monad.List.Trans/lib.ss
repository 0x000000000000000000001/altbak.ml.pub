#!r6rs
#!chezscheme
(library
  (Control.Monad.List.Trans lib)
  (export
    Done
    Done?
    ListT
    Skip
    Skip-value0
    Skip?
    Yield
    Yield*
    Yield-value0
    Yield-value1
    Yield?
    altListT
    alternativeListT
    applicativeListT
    applyListT
    bindListT
    catMaybes
    concat
    cons
    drop
    dropWhile
    filter
    foldl
    foldl$p
    foldlRec
    foldlRec$p
    fromEffect
    functorListT
    head
    identity
    iterate
    mapMaybe
    monadEffectListT
    monadListT
    monadPlusListT
    monadSTListT
    monadTransListT
    monoidListT
    newtypeListT
    nil
    plusListT
    prepend
    prepend$p
    repeat
    runListT
    runListTRec
    scanl
    semigroupListT
    singleton
    tail
    take
    takeWhile
    uncons
    unfold
    unfoldable1ListT
    unfoldableListT
    wrapEffect
    wrapLazy
    zipWith
    zipWith$p)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.Rec.Class lib) Control.Monad.Rec.Class.)
    (prefix (Data.Lazy lib) Data.Lazy.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Tuple lib) Data.Tuple.)
    (prefix (Data.Unit lib) Data.Unit.))

  (scm:define identity
    (scm:lambda (x0)
      x0))

  (scm:define-record-type (Yield$ Yield* Yield?)
    (scm:fields (scm:immutable value0 Yield-value0) (scm:immutable value1 Yield-value1)))

  (scm:define Yield
    (scm:lambda (value0)
      (scm:lambda (value1)
        (Yield* value0 value1))))

  (scm:define-record-type (Skip$ Skip Skip?)
    (scm:fields (scm:immutable value0 Skip-value0)))

  (scm:define Done
    (scm:quote Done))

  (scm:define Done?
    (scm:lambda (v)
      (scm:eq? (scm:quote Done) v)))

  (scm:define ListT
    (scm:lambda (x0)
      x0))

  (scm:define wrapLazy
    (scm:lambda (dictApplicative0)
      (scm:lambda (v1)
        ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) (Skip v1)))))

  (scm:define wrapEffect
    (scm:lambda (dictFunctor0)
      (scm:lambda (v1)
        (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (scm:lambda (x2)
          (Skip (Data.Lazy.defer (scm:lambda (v3)
            x2))))) v1))))

  (scm:define unfold
    (scm:lambda (dictMonad0)
      (scm:lambda (f1)
        (scm:lambda (z2)
          (((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (v3)
            (scm:cond
              [(Data.Maybe.Just? v3) (scm:let ([_4 (Data.Tuple.Tuple-value0 (Data.Maybe.Just-value0 v3))])
                (Yield* (Data.Tuple.Tuple-value1 (Data.Maybe.Just-value0 v3)) (Data.Lazy.defer (scm:lambda (v15)
                  (((unfold dictMonad0) f1) _4)))))]
              [(Data.Maybe.Nothing? v3) Done]
              [scm:else (rt:fail)]))) (f1 z2))))))

  (scm:define uncons
    (scm:lambda (dictMonad0)
      (scm:let ([_1 ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined))])
        (scm:lambda (v2)
          (((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) v2) (scm:lambda (v13)
            (scm:cond
              [(Yield? v13) ((rt:record-ref _1 (scm:string->symbol "pure")) (Data.Maybe.Just (Data.Tuple.Tuple* (Yield-value0 v13) (Data.Lazy.force (Yield-value1 v13)))))]
              [(Skip? v13) ((uncons dictMonad0) (Data.Lazy.force (Skip-value0 v13)))]
              [(Done? v13) ((rt:record-ref _1 (scm:string->symbol "pure")) Data.Maybe.Nothing)]
              [scm:else (rt:fail)])))))))

  (scm:define tail
    (scm:lambda (dictMonad0)
      (scm:let ([uncons11 (uncons dictMonad0)])
        (scm:lambda (l2)
          (((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (v13)
            (scm:cond
              [(Data.Maybe.Just? v13) (Data.Maybe.Just (Data.Tuple.Tuple-value1 (Data.Maybe.Just-value0 v13)))]
              [scm:else Data.Maybe.Nothing]))) (uncons11 l2))))))

  (scm:define takeWhile
    (scm:lambda (dictApplicative0)
      (scm:let ([_1 ((rt:record-ref ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))])
        (scm:lambda (f2)
          (scm:lambda (v3)
            (((rt:record-ref _1 (scm:string->symbol "map")) (scm:lambda (v4)
              (scm:cond
                [(Yield? v4) (scm:cond
                  [(f2 (Yield-value0 v4)) (Yield* (Yield-value0 v4) (scm:let ([_5 ((takeWhile dictApplicative0) f2)])
                    (Data.Lazy.defer (scm:lambda (v6)
                      (_5 (Data.Lazy.force (Yield-value1 v4)))))))]
                  [scm:else Done])]
                [(Skip? v4) (scm:let ([_5 (Skip-value0 v4)])
                  (Skip (scm:let ([_6 ((takeWhile dictApplicative0) f2)])
                    (Data.Lazy.defer (scm:lambda (v7)
                      (_6 (Data.Lazy.force _5)))))))]
                [(Done? v4) Done]
                [scm:else (rt:fail)]))) v3))))))

  (scm:define scanl
    (scm:lambda (dictMonad0)
      (scm:lambda (f1)
        (scm:lambda (b2)
          (scm:lambda (l3)
            (((unfold dictMonad0) (scm:lambda (v4)
              (scm:let ([_5 (Data.Tuple.Tuple-value0 v4)])
                (((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (v16)
                  (scm:cond
                    [(Yield? v16) (Data.Maybe.Just (Data.Tuple.Tuple* (Data.Tuple.Tuple* ((f1 _5) (Yield-value0 v16)) (Data.Lazy.force (Yield-value1 v16))) _5))]
                    [(Skip? v16) (Data.Maybe.Just (Data.Tuple.Tuple* (Data.Tuple.Tuple* _5 (Data.Lazy.force (Skip-value0 v16))) _5))]
                    [(Done? v16) Data.Maybe.Nothing]
                    [scm:else (rt:fail)]))) (Data.Tuple.Tuple-value1 v4))))) (Data.Tuple.Tuple* b2 l3)))))))

  (scm:define prepend$p
    (scm:lambda (dictApplicative0)
      (scm:lambda (h1)
        (scm:lambda (t2)
          ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) (Yield* h1 t2))))))

  (scm:define prepend
    (scm:lambda (dictApplicative0)
      (scm:lambda (h1)
        (scm:lambda (t2)
          ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) (Yield* h1 (Data.Lazy.defer (scm:lambda (v3)
            t2))))))))

  (scm:define nil
    (scm:lambda (dictApplicative0)
      ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) Done)))

  (scm:define singleton
    (scm:lambda (dictApplicative0)
      (scm:let ([nil11 ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) Done)])
        (scm:lambda (a2)
          ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) (Yield* a2 (Data.Lazy.defer (scm:lambda (v3)
            nil11))))))))

  (scm:define take
    (scm:lambda (dictApplicative0)
      (scm:let*
        ([nil11 ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) Done)]
         [_2 ((rt:record-ref ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))])
          (scm:lambda (v3)
            (scm:lambda (v14)
              (scm:cond
                [(scm:fx=? v3 0) nil11]
                [scm:else (((rt:record-ref _2 (scm:string->symbol "map")) (scm:lambda (v25)
                  (scm:cond
                    [(Yield? v25) (scm:let ([_6 (Yield-value1 v25)])
                      (Yield* (Yield-value0 v25) (scm:let ([_7 ((take dictApplicative0) (scm:fx- v3 1))])
                        (Data.Lazy.defer (scm:lambda (v8)
                          (_7 (Data.Lazy.force _6)))))))]
                    [(Skip? v25) (scm:let ([_6 (Skip-value0 v25)])
                      (Skip (scm:let ([_7 ((take dictApplicative0) v3)])
                        (Data.Lazy.defer (scm:lambda (v8)
                          (_7 (Data.Lazy.force _6)))))))]
                    [(Done? v25) Done]
                    [scm:else (rt:fail)]))) v14)]))))))

  (scm:define zipWith$p
    (scm:lambda (dictMonad0)
      (scm:let*
        ([Applicative01 ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
         [nil12 ((rt:record-ref Applicative01 (scm:string->symbol "pure")) Done)]
         [Bind13 ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined))]
         [Functor04 ((rt:record-ref ((rt:record-ref Bind13 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [uncons15 (uncons dictMonad0)])
          (scm:lambda (f6)
            (scm:lambda (fa7)
              (scm:lambda (fb8)
                (((rt:record-ref Functor04 (scm:string->symbol "map")) (scm:lambda (x9)
                  (Skip (Data.Lazy.defer (scm:lambda (v10)
                    x9))))) (((rt:record-ref Bind13 (scm:string->symbol "bind")) (uncons15 fa7)) (scm:lambda (ua9)
                  (((rt:record-ref Bind13 (scm:string->symbol "bind")) (uncons15 fb8)) (scm:lambda (ub10)
                    (scm:cond
                      [(Data.Maybe.Nothing? ub10) ((rt:record-ref Applicative01 (scm:string->symbol "pure")) nil12)]
                      [(Data.Maybe.Nothing? ua9) ((rt:record-ref Applicative01 (scm:string->symbol "pure")) nil12)]
                      [(scm:and (Data.Maybe.Just? ua9) (Data.Maybe.Just? ub10)) (scm:let*
                        ([_11 (Data.Tuple.Tuple-value1 (Data.Maybe.Just-value0 ua9))]
                         [_12 (Data.Tuple.Tuple-value1 (Data.Maybe.Just-value0 ub10))])
                          (((rt:record-ref Functor04 (scm:string->symbol "map")) (scm:let ([_13 (Data.Lazy.defer (scm:lambda (v213)
                            ((((zipWith$p dictMonad0) f6) _11) _12)))])
                            (scm:lambda (a14)
                              ((rt:record-ref Applicative01 (scm:string->symbol "pure")) (Yield* a14 _13))))) ((f6 (Data.Tuple.Tuple-value0 (Data.Maybe.Just-value0 ua9))) (Data.Tuple.Tuple-value0 (Data.Maybe.Just-value0 ub10)))))]
                      [scm:else (rt:fail)]))))))))))))

  (scm:define zipWith
    (scm:lambda (dictMonad0)
      (scm:let ([zipWith$p11 (zipWith$p dictMonad0)])
        (scm:lambda (f2)
          (zipWith$p11 (scm:lambda (a3)
            (scm:lambda (b4)
              ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) ((f2 a3) b4)))))))))

  (scm:define newtypeListT
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define mapMaybe
    (scm:lambda (dictFunctor0)
      (scm:lambda (f1)
        (scm:lambda (v2)
          (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (scm:lambda (v3)
            (scm:cond
              [(Yield? v3) (scm:let ([_4 (f1 (Yield-value0 v3))])
                (scm:cond
                  [(Data.Maybe.Just? _4) (Yield* (Data.Maybe.Just-value0 _4) (scm:let ([_5 ((mapMaybe dictFunctor0) f1)])
                    (Data.Lazy.defer (scm:lambda (v6)
                      (_5 (Data.Lazy.force (Yield-value1 v3)))))))]
                  [scm:else (Skip (scm:let ([_5 ((mapMaybe dictFunctor0) f1)])
                    (Data.Lazy.defer (scm:lambda (v6)
                      (_5 (Data.Lazy.force (Yield-value1 v3)))))))]))]
              [(Skip? v3) (scm:let ([_4 (Skip-value0 v3)])
                (Skip (scm:let ([_5 ((mapMaybe dictFunctor0) f1)])
                  (Data.Lazy.defer (scm:lambda (v6)
                    (_5 (Data.Lazy.force _4)))))))]
              [(Done? v3) Done]
              [scm:else (rt:fail)]))) v2)))))

  (scm:define iterate
    (scm:lambda (dictMonad0)
      (scm:lambda (f1)
        (scm:lambda (a2)
          (((unfold dictMonad0) (scm:lambda (x3)
            ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Maybe.Just (Data.Tuple.Tuple* (f1 x3) x3))))) a2)))))

  (scm:define repeat
    (scm:lambda (dictMonad0)
      ((iterate dictMonad0) identity)))

  (scm:define head
    (scm:lambda (dictMonad0)
      (scm:let ([uncons11 (uncons dictMonad0)])
        (scm:lambda (l2)
          (((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (v13)
            (scm:cond
              [(Data.Maybe.Just? v13) (Data.Maybe.Just (Data.Tuple.Tuple-value0 (Data.Maybe.Just-value0 v13)))]
              [scm:else Data.Maybe.Nothing]))) (uncons11 l2))))))

  (scm:define functorListT
    (scm:lambda (dictFunctor0)
      (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f1)
        (scm:lambda (v2)
          (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (scm:lambda (v3)
            (scm:cond
              [(Yield? v3) (scm:let ([_4 (Yield-value1 v3)])
                (Yield* (f1 (Yield-value0 v3)) (scm:let ([_5 ((rt:record-ref (functorListT dictFunctor0) (scm:string->symbol "map")) f1)])
                  (Data.Lazy.defer (scm:lambda (v6)
                    (_5 (Data.Lazy.force _4)))))))]
              [(Skip? v3) (scm:let ([_4 (Skip-value0 v3)])
                (Skip (scm:let ([_5 ((rt:record-ref (functorListT dictFunctor0) (scm:string->symbol "map")) f1)])
                  (Data.Lazy.defer (scm:lambda (v6)
                    (_5 (Data.Lazy.force _4)))))))]
              [(Done? v3) Done]
              [scm:else (rt:fail)]))) v2)))))))

  (scm:define fromEffect
    (scm:lambda (dictApplicative0)
      (scm:let ([nil11 ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) Done)])
        (scm:lambda (fa2)
          (((rt:record-ref ((rt:record-ref ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:let ([_3 (Data.Lazy.defer (scm:lambda (v3)
            nil11))])
            (scm:lambda (a4)
              (Yield* a4 _3)))) fa2)))))

  (scm:define monadTransListT
    (scm:list (scm:cons (scm:string->symbol "lift") (scm:lambda (dictMonad0)
      (fromEffect ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)))))))

  (scm:define foldlRec$p
    (scm:lambda (dictMonadRec0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadRec0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [_2 ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
         [_3 ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined))]
         [uncons14 (uncons Monad01)])
          (scm:lambda (f5)
            (scm:lambda (a6)
              (scm:lambda (b7)
                (((rt:record-ref dictMonadRec0 (scm:string->symbol "tailRecM")) (scm:lambda (o8)
                  (scm:let ([_9 (rt:record-ref o8 (scm:string->symbol "a"))])
                    (((rt:record-ref _3 (scm:string->symbol "bind")) (uncons14 (rt:record-ref o8 (scm:string->symbol "b")))) (scm:lambda (v10)
                      (scm:cond
                        [(Data.Maybe.Nothing? v10) ((rt:record-ref _2 (scm:string->symbol "pure")) (Control.Monad.Rec.Class.Done _9))]
                        [(Data.Maybe.Just? v10) (scm:let ([_11 (Data.Tuple.Tuple-value1 (Data.Maybe.Just-value0 v10))])
                          (((rt:record-ref _3 (scm:string->symbol "bind")) ((f5 _9) (Data.Tuple.Tuple-value0 (Data.Maybe.Just-value0 v10)))) (scm:lambda (b$p12)
                            ((rt:record-ref _2 (scm:string->symbol "pure")) (Control.Monad.Rec.Class.Loop (scm:list (scm:cons (scm:string->symbol "a") b$p12) (scm:cons (scm:string->symbol "b") _11)))))))]
                        [scm:else (rt:fail)])))))) (scm:list (scm:cons (scm:string->symbol "a") a6) (scm:cons (scm:string->symbol "b") b7)))))))))

  (scm:define runListTRec
    (scm:lambda (dictMonadRec0)
      (((foldlRec$p dictMonadRec0) (scm:lambda (v1)
        (scm:lambda (v12)
          ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadRec0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) Data.Unit.unit)))) Data.Unit.unit)))

  (scm:define foldlRec
    (scm:lambda (dictMonadRec0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadRec0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [_2 ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
         [uncons13 (uncons Monad01)])
          (scm:lambda (f4)
            (scm:lambda (a5)
              (scm:lambda (b6)
                (((rt:record-ref dictMonadRec0 (scm:string->symbol "tailRecM")) (scm:lambda (o7)
                  (scm:let ([_8 (rt:record-ref o7 (scm:string->symbol "a"))])
                    (((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) (uncons13 (rt:record-ref o7 (scm:string->symbol "b")))) (scm:lambda (v9)
                      (scm:cond
                        [(Data.Maybe.Nothing? v9) ((rt:record-ref _2 (scm:string->symbol "pure")) (Control.Monad.Rec.Class.Done _8))]
                        [(Data.Maybe.Just? v9) ((rt:record-ref _2 (scm:string->symbol "pure")) (Control.Monad.Rec.Class.Loop (scm:list (scm:cons (scm:string->symbol "a") ((f4 _8) (Data.Tuple.Tuple-value0 (Data.Maybe.Just-value0 v9)))) (scm:cons (scm:string->symbol "b") (Data.Tuple.Tuple-value1 (Data.Maybe.Just-value0 v9))))))]
                        [scm:else (rt:fail)])))))) (scm:list (scm:cons (scm:string->symbol "a") a5) (scm:cons (scm:string->symbol "b") b6)))))))))

  (scm:define foldl$p
    (scm:lambda (dictMonad0)
      (scm:let*
        ([_1 ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined))]
         [uncons12 (uncons dictMonad0)])
          (scm:lambda (f3)
            (scm:letrec ([loop4 (scm:lambda (b5)
              (scm:lambda (l6)
                (((rt:record-ref _1 (scm:string->symbol "bind")) (uncons12 l6)) (scm:lambda (v7)
                  (scm:cond
                    [(Data.Maybe.Nothing? v7) ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) b5)]
                    [(Data.Maybe.Just? v7) (scm:let ([_8 (Data.Tuple.Tuple-value1 (Data.Maybe.Just-value0 v7))])
                      (((rt:record-ref _1 (scm:string->symbol "bind")) ((f3 b5) (Data.Tuple.Tuple-value0 (Data.Maybe.Just-value0 v7)))) (scm:lambda (a9)
                        ((loop4 a9) _8))))]
                    [scm:else (rt:fail)])))))])
              loop4)))))

  (scm:define runListT
    (scm:lambda (dictMonad0)
      (((foldl$p dictMonad0) (scm:lambda (v1)
        (scm:lambda (v12)
          ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) Data.Unit.unit)))) Data.Unit.unit)))

  (scm:define foldl
    (scm:lambda (dictMonad0)
      (scm:let ([uncons11 (uncons dictMonad0)])
        (scm:lambda (f2)
          (scm:letrec ([loop3 (scm:lambda (b4)
            (scm:lambda (l5)
              (((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) (uncons11 l5)) (scm:lambda (v6)
                (scm:cond
                  [(Data.Maybe.Nothing? v6) ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) b4)]
                  [(Data.Maybe.Just? v6) ((loop3 ((f2 b4) (Data.Tuple.Tuple-value0 (Data.Maybe.Just-value0 v6)))) (Data.Tuple.Tuple-value1 (Data.Maybe.Just-value0 v6)))]
                  [scm:else (rt:fail)])))))])
            loop3)))))

  (scm:define filter
    (scm:lambda (dictFunctor0)
      (scm:lambda (f1)
        (scm:lambda (v2)
          (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (scm:lambda (v3)
            (scm:cond
              [(Yield? v3) (scm:let*
                ([_4 (Yield-value1 v3)]
                 [_5 ((filter dictFunctor0) f1)]
                 [s$p6 (Data.Lazy.defer (scm:lambda (v6)
                  (_5 (Data.Lazy.force _4))))])
                  (scm:cond
                    [(f1 (Yield-value0 v3)) (Yield* (Yield-value0 v3) s$p6)]
                    [scm:else (Skip s$p6)]))]
              [(Skip? v3) (scm:let ([_4 (Skip-value0 v3)])
                (Skip (scm:let ([_5 ((filter dictFunctor0) f1)])
                  (Data.Lazy.defer (scm:lambda (v6)
                    (_5 (Data.Lazy.force _4)))))))]
              [(Done? v3) Done]
              [scm:else (rt:fail)]))) v2)))))

  (scm:define dropWhile
    (scm:lambda (dictApplicative0)
      (scm:let ([_1 ((rt:record-ref ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))])
        (scm:lambda (f2)
          (scm:lambda (v3)
            (((rt:record-ref _1 (scm:string->symbol "map")) (scm:lambda (v4)
              (scm:cond
                [(Yield? v4) (scm:cond
                  [(f2 (Yield-value0 v4)) (Skip (scm:let ([_5 ((dropWhile dictApplicative0) f2)])
                    (Data.Lazy.defer (scm:lambda (v6)
                      (_5 (Data.Lazy.force (Yield-value1 v4)))))))]
                  [scm:else (Yield* (Yield-value0 v4) (Yield-value1 v4))])]
                [(Skip? v4) (scm:let ([_5 (Skip-value0 v4)])
                  (Skip (scm:let ([_6 ((dropWhile dictApplicative0) f2)])
                    (Data.Lazy.defer (scm:lambda (v7)
                      (_6 (Data.Lazy.force _5)))))))]
                [(Done? v4) Done]
                [scm:else (rt:fail)]))) v3))))))

  (scm:define drop
    (scm:lambda (dictApplicative0)
      (scm:let ([_1 ((rt:record-ref ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))])
        (scm:lambda (v2)
          (scm:lambda (v13)
            (scm:cond
              [(scm:fx=? v2 0) v13]
              [scm:else (((rt:record-ref _1 (scm:string->symbol "map")) (scm:lambda (v24)
                (scm:cond
                  [(Yield? v24) (scm:let ([_5 (Yield-value1 v24)])
                    (Skip (scm:let ([_6 ((drop dictApplicative0) (scm:fx- v2 1))])
                      (Data.Lazy.defer (scm:lambda (v7)
                        (_6 (Data.Lazy.force _5)))))))]
                  [(Skip? v24) (scm:let ([_5 (Skip-value0 v24)])
                    (Skip (scm:let ([_6 ((drop dictApplicative0) v2)])
                      (Data.Lazy.defer (scm:lambda (v7)
                        (_6 (Data.Lazy.force _5)))))))]
                  [(Done? v24) Done]
                  [scm:else (rt:fail)]))) v13)]))))))

  (scm:define cons
    (scm:lambda (dictApplicative0)
      (scm:lambda (lh1)
        (scm:lambda (t2)
          ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) (Yield* (Data.Lazy.force lh1) t2))))))

  (scm:define unfoldable1ListT
    (scm:lambda (dictMonad0)
      (scm:let*
        ([Applicative01 ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
         [singleton12 (singleton Applicative01)])
          (scm:list (scm:cons (scm:string->symbol "unfoldr1") (scm:lambda (f3)
            (scm:lambda (b4)
              (scm:letrec ([go5 (scm:lambda (v6)
                (scm:cond
                  [(Data.Maybe.Nothing? (Data.Tuple.Tuple-value1 v6)) (singleton12 (Data.Tuple.Tuple-value0 v6))]
                  [(Data.Maybe.Just? (Data.Tuple.Tuple-value1 v6)) (scm:let*
                    ([_7 (Data.Tuple.Tuple-value0 v6)]
                     [_8 (Data.Maybe.Just-value0 (Data.Tuple.Tuple-value1 v6))])
                      ((rt:record-ref Applicative01 (scm:string->symbol "pure")) (Yield* (Data.Lazy.force (Data.Lazy.defer (scm:lambda (v9)
                        _7))) (Data.Lazy.defer (scm:lambda (v19)
                        (go5 (f3 _8)))))))]
                  [scm:else (rt:fail)]))])
                (go5 (f3 b4))))))))))

  (scm:define unfoldableListT
    (scm:lambda (dictMonad0)
      (scm:let*
        ([Applicative01 ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
         [nil12 ((rt:record-ref Applicative01 (scm:string->symbol "pure")) Done)]
         [unfoldable1ListT13 (unfoldable1ListT dictMonad0)])
          (scm:list (scm:cons (scm:string->symbol "unfoldr") (scm:lambda (f4)
            (scm:lambda (b5)
              (scm:letrec ([go6 (scm:lambda (v7)
                (scm:cond
                  [(Data.Maybe.Nothing? v7) nil12]
                  [(Data.Maybe.Just? v7) (scm:let*
                    ([_8 (Data.Tuple.Tuple-value0 (Data.Maybe.Just-value0 v7))]
                     [_9 (Data.Tuple.Tuple-value1 (Data.Maybe.Just-value0 v7))])
                      ((rt:record-ref Applicative01 (scm:string->symbol "pure")) (Yield* (Data.Lazy.force (Data.Lazy.defer (scm:lambda (v10)
                        _8))) (Data.Lazy.defer (scm:lambda (v110)
                        (go6 (f4 _9)))))))]
                  [scm:else (rt:fail)]))])
                (go6 (f4 b5)))))) (scm:cons (scm:string->symbol "Unfoldable10") (scm:lambda (_)
            unfoldable1ListT13))))))

  (scm:define semigroupListT
    (scm:lambda (dictApplicative0)
      (scm:list (scm:cons (scm:string->symbol "append") (concat dictApplicative0)))))

  (scm:define concat
    (scm:lambda (dictApplicative0)
      (scm:let ([_1 ((rt:record-ref ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))])
        (scm:lambda (x2)
          (scm:lambda (y3)
            (((rt:record-ref _1 (scm:string->symbol "map")) (scm:lambda (v4)
              (scm:cond
                [(Yield? v4) (scm:let ([_5 (Yield-value1 v4)])
                  (Yield* (Yield-value0 v4) (Data.Lazy.defer (scm:lambda (v6)
                    (((concat dictApplicative0) (Data.Lazy.force _5)) y3)))))]
                [(Skip? v4) (scm:let ([_5 (Skip-value0 v4)])
                  (Skip (Data.Lazy.defer (scm:lambda (v6)
                    (((concat dictApplicative0) (Data.Lazy.force _5)) y3)))))]
                [(Done? v4) (Skip (Data.Lazy.defer (scm:lambda (v5)
                  y3)))]
                [scm:else (rt:fail)]))) x2))))))

  (scm:define monoidListT
    (scm:lambda (dictApplicative0)
      (scm:let ([semigroupListT11 (scm:list (scm:cons (scm:string->symbol "append") (concat dictApplicative0)))])
        (scm:list (scm:cons (scm:string->symbol "mempty") ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) Done)) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
          semigroupListT11))))))

  (scm:define catMaybes
    (scm:lambda (dictFunctor0)
      ((mapMaybe dictFunctor0) identity)))

  (scm:define monadListT
    (scm:lambda (dictMonad0)
      (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
        (applicativeListT dictMonad0))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
        (bindListT dictMonad0))))))

  (scm:define bindListT
    (scm:lambda (dictMonad0)
      (scm:let*
        ([append1 (concat ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)))]
         [_2 ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))])
          (scm:list (scm:cons (scm:string->symbol "bind") (scm:lambda (fa3)
            (scm:lambda (f4)
              (((rt:record-ref _2 (scm:string->symbol "map")) (scm:lambda (v5)
                (scm:cond
                  [(Yield? v5) (scm:let*
                    ([_6 (Yield-value0 v5)]
                     [_7 (Yield-value1 v5)])
                      (Skip (Data.Lazy.defer (scm:lambda (v8)
                        ((append1 (f4 _6)) (((rt:record-ref (bindListT dictMonad0) (scm:string->symbol "bind")) (Data.Lazy.force _7)) f4))))))]
                  [(Skip? v5) (scm:let ([_6 (Skip-value0 v5)])
                    (Skip (Data.Lazy.defer (scm:lambda (v7)
                      (((rt:record-ref (bindListT dictMonad0) (scm:string->symbol "bind")) (Data.Lazy.force _6)) f4)))))]
                  [(Done? v5) Done]
                  [scm:else (rt:fail)]))) fa3)))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
            (applyListT dictMonad0)))))))

  (scm:define applyListT
    (scm:lambda (dictMonad0)
      (scm:let ([functorListT11 (functorListT ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "apply") (scm:let ([_2 (bindListT dictMonad0)])
          (scm:lambda (f3)
            (scm:lambda (a4)
              (((rt:record-ref _2 (scm:string->symbol "bind")) f3) (scm:lambda (f$p5)
                (((rt:record-ref _2 (scm:string->symbol "bind")) a4) (scm:lambda (a$p6)
                  ((rt:record-ref (applicativeListT dictMonad0) (scm:string->symbol "pure")) (f$p5 a$p6)))))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
          functorListT11))))))

  (scm:define applicativeListT
    (scm:lambda (dictMonad0)
      (scm:list (scm:cons (scm:string->symbol "pure") (singleton ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
        (applyListT dictMonad0))))))

  (scm:define monadEffectListT
    (scm:lambda (dictMonadEffect0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadEffect0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadListT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (scm:list (scm:cons (scm:string->symbol "pure") (singleton ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
            (applyListT Monad01)))))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindListT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "liftEffect") (scm:let ([_3 (fromEffect ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)))])
            (scm:lambda (x4)
              (_3 ((rt:record-ref dictMonadEffect0 (scm:string->symbol "liftEffect")) x4))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadListT12))))))

  (scm:define monadSTListT
    (scm:lambda (dictMonadST0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadST0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadListT12 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (scm:list (scm:cons (scm:string->symbol "pure") (singleton ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
            (applyListT Monad01)))))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindListT Monad01))))])
          (scm:list (scm:cons (scm:string->symbol "liftST") (scm:let ([_3 (fromEffect ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)))])
            (scm:lambda (x4)
              (_3 ((rt:record-ref dictMonadST0 (scm:string->symbol "liftST")) x4))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadListT12))))))

  (scm:define altListT
    (scm:lambda (dictApplicative0)
      (scm:let ([functorListT11 (functorListT ((rt:record-ref ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "alt") (concat dictApplicative0)) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
          functorListT11))))))

  (scm:define plusListT
    (scm:lambda (dictMonad0)
      (scm:let*
        ([Applicative01 ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
         [altListT12 (altListT Applicative01)])
          (scm:list (scm:cons (scm:string->symbol "empty") ((rt:record-ref Applicative01 (scm:string->symbol "pure")) Done)) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
            altListT12))))))

  (scm:define alternativeListT
    (scm:lambda (dictMonad0)
      (scm:let*
        ([applicativeListT11 (scm:list (scm:cons (scm:string->symbol "pure") (singleton ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
          (applyListT dictMonad0))))]
         [plusListT12 (plusListT dictMonad0)])
          (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
            applicativeListT11)) (scm:cons (scm:string->symbol "Plus1") (scm:lambda (_)
            plusListT12))))))

  (scm:define monadPlusListT
    (scm:lambda (dictMonad0)
      (scm:let*
        ([monadListT11 (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
          (scm:list (scm:cons (scm:string->symbol "pure") (singleton ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
            (applyListT dictMonad0)))))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
          (bindListT dictMonad0))))]
         [alternativeListT12 (alternativeListT dictMonad0)])
          (scm:list (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadListT11)) (scm:cons (scm:string->symbol "Alternative1") (scm:lambda (_)
            alternativeListT12)))))))
