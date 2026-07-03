#!r6rs
#!chezscheme
(library
  (Data.List.Lazy.Types lib)
  (export
    Cons
    Cons*
    Cons-value0
    Cons-value1
    Cons?
    List
    Nil
    Nil?
    NonEmptyList
    altList
    altNonEmptyList
    alternativeList
    applicativeList
    applicativeNonEmptyList
    applyList
    applyNonEmptyList
    bindList
    bindNonEmptyList
    comonadNonEmptyList
    cons
    eq1List
    eq1NonEmptyList
    eqList
    eqNonEmpty
    eqNonEmptyList
    extendList
    extendNonEmptyList
    foldableList
    foldableNonEmpty
    foldableNonEmptyList
    foldableWithIndexList
    foldableWithIndexNonEmpty
    foldableWithIndexNonEmptyList
    functorList
    functorNonEmptyList
    functorWithIndexList
    functorWithIndexNonEmptyList
    identity
    lazyList
    mapWithIndex
    monadList
    monadNonEmptyList
    monadPlusList
    monoidList
    newtypeList
    newtypeNonEmptyList
    nil
    ord1List
    ord1NonEmptyList
    ordList
    ordNonEmpty
    ordNonEmptyList
    plusList
    semigroupList
    semigroupNonEmptyList
    showList
    showNonEmptyList
    showStep
    step
    toList
    traversableList
    traversableNonEmpty
    traversableNonEmptyList
    traversableWithIndexList
    traversableWithIndexNonEmptyList
    traverseWithIndex
    unfoldable1List
    unfoldable1NonEmptyList
    unfoldableList
    unfoldr1)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Lazy lib) Data.Lazy.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.NonEmpty lib) Data.NonEmpty.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define identity
    (scm:lambda (x0)
      x0))

  (scm:define List
    (scm:lambda (x0)
      x0))

  (scm:define Nil
    (scm:quote Nil))

  (scm:define Nil?
    (scm:lambda (v)
      (scm:eq? (scm:quote Nil) v)))

  (scm:define-record-type (Cons$ Cons* Cons?)
    (scm:fields (scm:immutable value0 Cons-value0) (scm:immutable value1 Cons-value1)))

  (scm:define Cons
    (scm:lambda (value0)
      (scm:lambda (value1)
        (Cons* value0 value1))))

  (scm:define NonEmptyList
    (scm:lambda (x0)
      x0))

  (scm:define nil
    (Data.Lazy.defer (scm:lambda (v0)
      Nil)))

  (scm:define newtypeNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define newtypeList
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define step
    (scm:lambda (x0)
      (Data.Lazy.force x0)))

  (rt:define-lazy $lazy-semigroupList "semigroupList" "Data.List.Lazy.Types"
    (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (xs0)
      (scm:lambda (ys1)
        (Data.Lazy.defer (scm:lambda (v2)
          (scm:let ([_3 (Data.Lazy.force xs0)])
            (scm:cond
              [(Nil? _3) (Data.Lazy.force ys1)]
              [(Cons? _3) (Cons* (Cons-value0 _3) (((rt:record-ref ($lazy-semigroupList) (scm:string->symbol "append")) (Cons-value1 _3)) ys1))]
              [scm:else (rt:fail)])))))))))

  (scm:define semigroupList
    ($lazy-semigroupList))

  (scm:define monoidList
    (scm:list (scm:cons (scm:string->symbol "mempty") nil) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
      semigroupList))))

  (scm:define lazyList
    (scm:list (scm:cons (scm:string->symbol "defer") (scm:lambda (f0)
      (Data.Lazy.defer (scm:lambda (x1)
        (Data.Lazy.force (f0 x1))))))))

  (rt:define-lazy $lazy-functorList "functorList" "Data.List.Lazy.Types"
    (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f0)
      (scm:lambda (xs1)
        (Data.Lazy.defer (scm:lambda (v2)
          (scm:let ([_3 (Data.Lazy.force xs1)])
            (scm:cond
              [(Nil? _3) Nil]
              [(Cons? _3) (Cons* (f0 (Cons-value0 _3)) (((rt:record-ref ($lazy-functorList) (scm:string->symbol "map")) f0) (Cons-value1 _3)))]
              [scm:else (rt:fail)])))))))))

  (scm:define functorList
    ($lazy-functorList))

  (scm:define functorNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f0)
      (scm:lambda (v1)
        (Data.Lazy.defer (scm:lambda (v2)
          (scm:let ([_3 (Data.Lazy.force v1)])
            (Data.NonEmpty.NonEmpty* (f0 (Data.NonEmpty.NonEmpty-value0 _3)) (((rt:record-ref functorList (scm:string->symbol "map")) f0) (Data.NonEmpty.NonEmpty-value1 _3)))))))))))

  (scm:define eq1List
    (scm:list (scm:cons (scm:string->symbol "eq1") (scm:lambda (dictEq0)
      (scm:lambda (xs1)
        (scm:lambda (ys2)
          (scm:letrec ([go3 (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:cond
                [(Nil? v4) (Nil? v15)]
                [scm:else (scm:and (Cons? v4) (scm:and (Cons? v15) (scm:and (((rt:record-ref dictEq0 (scm:string->symbol "eq")) (Cons-value0 v4)) (Cons-value0 v15)) ((go3 (Data.Lazy.force (Cons-value1 v4))) (Data.Lazy.force (Cons-value1 v15))))))])))])
            ((go3 (Data.Lazy.force xs1)) (Data.Lazy.force ys2)))))))))

  (scm:define eqNonEmpty
    (scm:lambda (dictEq0)
      (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x1)
        (scm:lambda (y2)
          (scm:and (((rt:record-ref dictEq0 (scm:string->symbol "eq")) (Data.NonEmpty.NonEmpty-value0 x1)) (Data.NonEmpty.NonEmpty-value0 y2)) ((((rt:record-ref eq1List (scm:string->symbol "eq1")) dictEq0) (Data.NonEmpty.NonEmpty-value1 x1)) (Data.NonEmpty.NonEmpty-value1 y2)))))))))

  (scm:define eq1NonEmptyList
    (scm:list (scm:cons (scm:string->symbol "eq1") (scm:lambda (dictEq0)
      ((rt:record-ref Data.Lazy.eq1Lazy (scm:string->symbol "eq1")) (eqNonEmpty dictEq0))))))

  (scm:define eqList
    (scm:lambda (dictEq0)
      (scm:list (scm:cons (scm:string->symbol "eq") ((rt:record-ref eq1List (scm:string->symbol "eq1")) dictEq0)))))

  (scm:define eqNonEmptyList
    (scm:lambda (dictEq0)
      (scm:let ([_1 (eqNonEmpty dictEq0)])
        (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x2)
          (scm:lambda (y3)
            (((rt:record-ref _1 (scm:string->symbol "eq")) (Data.Lazy.force x2)) (Data.Lazy.force y3)))))))))

  (scm:define ord1List
    (scm:list (scm:cons (scm:string->symbol "compare1") (scm:lambda (dictOrd0)
      (scm:lambda (xs1)
        (scm:lambda (ys2)
          (scm:letrec ([go3 (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:cond
                [(Nil? v4) (scm:cond
                  [(Nil? v15) Data.Ordering.EQ]
                  [scm:else Data.Ordering.LT])]
                [(Nil? v15) Data.Ordering.GT]
                [(scm:and (Cons? v4) (Cons? v15)) (scm:let ([v26 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) (Cons-value0 v4)) (Cons-value0 v15))])
                  (scm:cond
                    [(Data.Ordering.EQ? v26) ((go3 (Data.Lazy.force (Cons-value1 v4))) (Data.Lazy.force (Cons-value1 v15)))]
                    [scm:else v26]))]
                [scm:else (rt:fail)])))])
            ((go3 (Data.Lazy.force xs1)) (Data.Lazy.force ys2))))))) (scm:cons (scm:string->symbol "Eq10") (scm:lambda (_)
      eq1List))))

  (scm:define ordNonEmpty
    (Data.NonEmpty.ordNonEmpty ord1List))

  (scm:define ord1NonEmptyList
    (scm:list (scm:cons (scm:string->symbol "compare1") (scm:lambda (dictOrd0)
      (rt:record-ref (Data.Lazy.ordLazy (ordNonEmpty dictOrd0)) (scm:string->symbol "compare")))) (scm:cons (scm:string->symbol "Eq10") (scm:lambda (_)
      eq1NonEmptyList))))

  (scm:define ordList
    (scm:lambda (dictOrd0)
      (scm:list (scm:cons (scm:string->symbol "compare") ((rt:record-ref ord1List (scm:string->symbol "compare1")) dictOrd0)) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
        (scm:list (scm:cons (scm:string->symbol "eq") ((rt:record-ref eq1List (scm:string->symbol "eq1")) ((rt:record-ref dictOrd0 (scm:string->symbol "Eq0")) (scm:quote undefined))))))))))

  (scm:define ordNonEmptyList
    (scm:lambda (dictOrd0)
      (Data.Lazy.ordLazy (ordNonEmpty dictOrd0))))

  (scm:define cons
    (scm:lambda (x0)
      (scm:lambda (xs1)
        (Data.Lazy.defer (scm:lambda (v2)
          (Cons* x0 xs1))))))

  (rt:define-lazy $lazy-foldableList "foldableList" "Data.List.Lazy.Types"
    (scm:list (scm:cons (scm:string->symbol "foldr") (scm:lambda (op0)
      (scm:lambda (z1)
        (scm:lambda (xs2)
          ((((rt:record-ref ($lazy-foldableList) (scm:string->symbol "foldl")) (scm:lambda (b3)
            (scm:lambda (a4)
              ((op0 a4) b3)))) z1) ((((rt:record-ref ($lazy-foldableList) (scm:string->symbol "foldl")) (scm:lambda (b3)
            (scm:lambda (a4)
              (Data.Lazy.defer (scm:lambda (v5)
                (Cons* a4 b3)))))) nil) xs2)))))) (scm:cons (scm:string->symbol "foldl") (scm:lambda (op0)
      (scm:letrec ([go1 (scm:lambda (b2)
        (scm:lambda (xs3)
          (scm:let ([v4 (Data.Lazy.force xs3)])
            (scm:cond
              [(Nil? v4) b2]
              [(Cons? v4) ((go1 ((op0 b2) (Cons-value0 v4))) (Cons-value1 v4))]
              [scm:else (rt:fail)]))))])
        go1))) (scm:cons (scm:string->symbol "foldMap") (scm:lambda (dictMonoid0)
      (scm:let ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))])
        (scm:lambda (f2)
          (((rt:record-ref ($lazy-foldableList) (scm:string->symbol "foldl")) (scm:lambda (b3)
            (scm:lambda (a4)
              (((rt:record-ref ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined)) (scm:string->symbol "append")) b3) (f2 a4))))) mempty1)))))))

  (scm:define foldableList
    ($lazy-foldableList))

  (scm:define foldableNonEmpty
    (scm:list (scm:cons (scm:string->symbol "foldMap") (scm:lambda (dictMonoid0)
      (scm:let ([foldMap11 ((rt:record-ref foldableList (scm:string->symbol "foldMap")) dictMonoid0)])
        (scm:lambda (f2)
          (scm:lambda (v3)
            (((rt:record-ref ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined)) (scm:string->symbol "append")) (f2 (Data.NonEmpty.NonEmpty-value0 v3))) ((foldMap11 f2) (Data.NonEmpty.NonEmpty-value1 v3)))))))) (scm:cons (scm:string->symbol "foldl") (scm:lambda (f0)
      (scm:lambda (b1)
        (scm:lambda (v2)
          ((((rt:record-ref foldableList (scm:string->symbol "foldl")) f0) ((f0 b1) (Data.NonEmpty.NonEmpty-value0 v2))) (Data.NonEmpty.NonEmpty-value1 v2)))))) (scm:cons (scm:string->symbol "foldr") (scm:lambda (f0)
      (scm:lambda (b1)
        (scm:lambda (v2)
          ((f0 (Data.NonEmpty.NonEmpty-value0 v2)) ((((rt:record-ref foldableList (scm:string->symbol "foldr")) f0) b1) (Data.NonEmpty.NonEmpty-value1 v2)))))))))

  (scm:define extendList
    (scm:list (scm:cons (scm:string->symbol "extend") (scm:lambda (f0)
      (scm:lambda (l1)
        (scm:let ([v2 (Data.Lazy.force l1)])
          (scm:cond
            [(Nil? v2) nil]
            [(Cons? v2) (scm:let*
              ([_3 (f0 l1)]
               [_4 (rt:record-ref ((((rt:record-ref foldableList (scm:string->symbol "foldr")) (scm:lambda (a4)
                (scm:lambda (v5)
                  (scm:let*
                    ([_6 (rt:record-ref v5 (scm:string->symbol "acc"))]
                     [_7 (rt:record-ref v5 (scm:string->symbol "val"))]
                     [acc$p8 (Data.Lazy.defer (scm:lambda (v8)
                      (Cons* a4 _6)))])
                      (scm:list (scm:cons (scm:string->symbol "val") (scm:let ([_9 (f0 acc$p8)])
                        (Data.Lazy.defer (scm:lambda (v10)
                          (Cons* _9 _7))))) (scm:cons (scm:string->symbol "acc") acc$p8)))))) (scm:list (scm:cons (scm:string->symbol "val") nil) (scm:cons (scm:string->symbol "acc") nil))) (Cons-value1 v2)) (scm:string->symbol "val"))])
                (Data.Lazy.defer (scm:lambda (v5)
                  (Cons* _3 _4))))]
            [scm:else (rt:fail)]))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorList))))

  (scm:define extendNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "extend") (scm:lambda (f0)
      (scm:lambda (v1)
        (scm:let ([_2 (Data.NonEmpty.NonEmpty-value1 (Data.Lazy.force v1))])
          (Data.Lazy.defer (scm:lambda (v23)
            (Data.NonEmpty.NonEmpty* (f0 v1) (rt:record-ref ((((rt:record-ref foldableList (scm:string->symbol "foldr")) (scm:lambda (a4)
              (scm:lambda (v15)
                (scm:let*
                  ([_6 (rt:record-ref v15 (scm:string->symbol "acc"))]
                   [_7 (rt:record-ref v15 (scm:string->symbol "val"))])
                    (scm:list (scm:cons (scm:string->symbol "val") (scm:let ([_8 (f0 (Data.Lazy.defer (scm:lambda (v28)
                      (Data.NonEmpty.NonEmpty* a4 _6))))])
                      (Data.Lazy.defer (scm:lambda (v9)
                        (Cons* _8 _7))))) (scm:cons (scm:string->symbol "acc") (Data.Lazy.defer (scm:lambda (v8)
                      (Cons* a4 _6))))))))) (scm:list (scm:cons (scm:string->symbol "val") nil) (scm:cons (scm:string->symbol "acc") nil))) _2) (scm:string->symbol "val"))))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorNonEmptyList))))

  (scm:define foldableNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "foldr") (scm:lambda (f0)
      (scm:lambda (b1)
        (scm:lambda (v2)
          (scm:let ([_3 (Data.Lazy.force v2)])
            ((f0 (Data.NonEmpty.NonEmpty-value0 _3)) ((((rt:record-ref foldableList (scm:string->symbol "foldr")) f0) b1) (Data.NonEmpty.NonEmpty-value1 _3)))))))) (scm:cons (scm:string->symbol "foldl") (scm:lambda (f0)
      (scm:lambda (b1)
        (scm:lambda (v2)
          (scm:let ([_3 (Data.Lazy.force v2)])
            ((((rt:record-ref foldableList (scm:string->symbol "foldl")) f0) ((f0 b1) (Data.NonEmpty.NonEmpty-value0 _3))) (Data.NonEmpty.NonEmpty-value1 _3))))))) (scm:cons (scm:string->symbol "foldMap") (scm:lambda (dictMonoid0)
      (scm:let ([foldMap11 ((rt:record-ref foldableNonEmpty (scm:string->symbol "foldMap")) dictMonoid0)])
        (scm:lambda (f2)
          (scm:lambda (v3)
            ((foldMap11 f2) (Data.Lazy.force v3)))))))))

  (scm:define showList
    (scm:lambda (dictShow0)
      (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (xs1)
        (scm:let ([v2 (Data.Lazy.force xs1)])
          (scm:cond
            [(Nil? v2) (rt:string->pstring "(fromFoldable [])")]
            [(Cons? v2) (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(fromFoldable [") ((rt:record-ref dictShow0 (scm:string->symbol "show")) (Cons-value0 v2))) ((((rt:record-ref foldableList (scm:string->symbol "foldl")) (scm:lambda (shown3)
              (scm:lambda (x$p4)
                (rt:pstring-concat (rt:pstring-concat shown3 (rt:string->pstring ",")) ((rt:record-ref dictShow0 (scm:string->symbol "show")) x$p4))))) (rt:string->pstring "")) (Cons-value1 v2))) (rt:string->pstring "])"))]
            [scm:else (rt:fail)])))))))

  (scm:define showNonEmptyList
    (scm:lambda (dictShow0)
      (scm:let ([_1 (showList dictShow0)])
        (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v2)
          (scm:let ([_3 (Data.Lazy.force v2)])
            (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(NonEmptyList (defer \\_ -> (NonEmpty ") ((rt:record-ref dictShow0 (scm:string->symbol "show")) (Data.NonEmpty.NonEmpty-value0 _3))) (rt:string->pstring " ")) ((rt:record-ref _1 (scm:string->symbol "show")) (Data.NonEmpty.NonEmpty-value1 _3))) (rt:string->pstring ")))")))))))))

  (scm:define showStep
    (scm:lambda (dictShow0)
      (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v1)
        (scm:cond
          [(Nil? v1) (rt:string->pstring "Nil")]
          [(Cons? v1) (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(") ((rt:record-ref dictShow0 (scm:string->symbol "show")) (Cons-value0 v1))) (rt:string->pstring " : ")) ((rt:record-ref (showList dictShow0) (scm:string->symbol "show")) (Cons-value1 v1))) (rt:string->pstring ")"))]
          [scm:else (rt:fail)]))))))

  (rt:define-lazy $lazy-foldableWithIndexList "foldableWithIndexList" "Data.List.Lazy.Types"
    (scm:list (scm:cons (scm:string->symbol "foldrWithIndex") (scm:lambda (f0)
      (scm:lambda (b1)
        (scm:lambda (xs2)
          (scm:let ([v3 ((((rt:record-ref foldableList (scm:string->symbol "foldl")) (scm:lambda (v13)
            (scm:let*
              ([_4 (Data.Tuple.Tuple-value1 v13)]
               [_5 (Data.Tuple.Tuple-value0 v13)])
                (scm:lambda (a6)
                  (Data.Tuple.Tuple* (scm:fx+ _5 1) (Data.Lazy.defer (scm:lambda (v7)
                    (Cons* a6 _4)))))))) (Data.Tuple.Tuple* 0 nil)) xs2)])
            (Data.Tuple.Tuple-value1 ((((rt:record-ref foldableList (scm:string->symbol "foldl")) (scm:lambda (v14)
              (scm:let*
                ([_5 (Data.Tuple.Tuple-value1 v14)]
                 [_6 (Data.Tuple.Tuple-value0 v14)])
                  (scm:lambda (a7)
                    (Data.Tuple.Tuple* (scm:fx- _6 1) (((f0 (scm:fx- _6 1)) a7) _5)))))) (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v3) b1)) (Data.Tuple.Tuple-value1 v3)))))))) (scm:cons (scm:string->symbol "foldlWithIndex") (scm:lambda (f0)
      (scm:lambda (acc1)
        (scm:let ([_2 (((rt:record-ref foldableList (scm:string->symbol "foldl")) (scm:lambda (v2)
          (scm:let*
            ([_3 (Data.Tuple.Tuple-value1 v2)]
             [_4 (Data.Tuple.Tuple-value0 v2)])
              (scm:lambda (a5)
                (Data.Tuple.Tuple* (scm:fx+ _4 1) (((f0 _4) _3) a5)))))) (Data.Tuple.Tuple* 0 acc1))])
          (scm:lambda (x3)
            (Data.Tuple.Tuple-value1 (_2 x3))))))) (scm:cons (scm:string->symbol "foldMapWithIndex") (scm:lambda (dictMonoid0)
      (scm:let ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))])
        (scm:lambda (f2)
          (((rt:record-ref ($lazy-foldableWithIndexList) (scm:string->symbol "foldlWithIndex")) (scm:lambda (i3)
            (scm:lambda (acc4)
              (scm:let*
                ([_5 ((rt:record-ref ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined)) (scm:string->symbol "append")) acc4)]
                 [_6 (f2 i3)])
                  (scm:lambda (x7)
                    (_5 (_6 x7))))))) mempty1))))) (scm:cons (scm:string->symbol "Foldable0") (scm:lambda (_)
      foldableList))))

  (scm:define foldableWithIndexList
    ($lazy-foldableWithIndexList))

  (scm:define foldableWithIndexNonEmpty
    (Data.NonEmpty.foldableWithIndexNonEmpty foldableWithIndexList))

  (scm:define foldableWithIndexNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "foldMapWithIndex") (scm:lambda (dictMonoid0)
      (scm:let ([foldMapWithIndex11 ((rt:record-ref foldableWithIndexNonEmpty (scm:string->symbol "foldMapWithIndex")) dictMonoid0)])
        (scm:lambda (f2)
          (scm:lambda (v3)
            ((foldMapWithIndex11 (scm:lambda (x4)
              (f2 (scm:cond
                [(Data.Maybe.Nothing? x4) 0]
                [(Data.Maybe.Just? x4) (scm:fx+ 1 (Data.Maybe.Just-value0 x4))]
                [scm:else (rt:fail)])))) (Data.Lazy.force v3))))))) (scm:cons (scm:string->symbol "foldlWithIndex") (scm:lambda (f0)
      (scm:lambda (b1)
        (scm:lambda (v2)
          ((((rt:record-ref foldableWithIndexNonEmpty (scm:string->symbol "foldlWithIndex")) (scm:lambda (x3)
            (f0 (scm:cond
              [(Data.Maybe.Nothing? x3) 0]
              [(Data.Maybe.Just? x3) (scm:fx+ 1 (Data.Maybe.Just-value0 x3))]
              [scm:else (rt:fail)])))) b1) (Data.Lazy.force v2)))))) (scm:cons (scm:string->symbol "foldrWithIndex") (scm:lambda (f0)
      (scm:lambda (b1)
        (scm:lambda (v2)
          ((((rt:record-ref foldableWithIndexNonEmpty (scm:string->symbol "foldrWithIndex")) (scm:lambda (x3)
            (f0 (scm:cond
              [(Data.Maybe.Nothing? x3) 0]
              [(Data.Maybe.Just? x3) (scm:fx+ 1 (Data.Maybe.Just-value0 x3))]
              [scm:else (rt:fail)])))) b1) (Data.Lazy.force v2)))))) (scm:cons (scm:string->symbol "Foldable0") (scm:lambda (_)
      foldableNonEmptyList))))

  (scm:define functorWithIndexList
    (scm:list (scm:cons (scm:string->symbol "mapWithIndex") (scm:lambda (f0)
      (((rt:record-ref foldableWithIndexList (scm:string->symbol "foldrWithIndex")) (scm:lambda (i1)
        (scm:lambda (x2)
          (scm:lambda (acc3)
            (scm:let ([_4 ((f0 i1) x2)])
              (Data.Lazy.defer (scm:lambda (v5)
                (Cons* _4 acc3)))))))) nil))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorList))))

  (scm:define mapWithIndex
    (scm:lambda (f0)
      (scm:lambda (v1)
        (Data.NonEmpty.NonEmpty* ((f0 Data.Maybe.Nothing) (Data.NonEmpty.NonEmpty-value0 v1)) (((rt:record-ref functorWithIndexList (scm:string->symbol "mapWithIndex")) (scm:lambda (x2)
          (f0 (Data.Maybe.Just x2)))) (Data.NonEmpty.NonEmpty-value1 v1))))))

  (scm:define functorWithIndexNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "mapWithIndex") (scm:lambda (f0)
      (scm:lambda (v1)
        (Data.Lazy.defer (scm:lambda (v12)
          ((mapWithIndex (scm:lambda (x3)
            (f0 (scm:cond
              [(Data.Maybe.Nothing? x3) 0]
              [(Data.Maybe.Just? x3) (scm:fx+ 1 (Data.Maybe.Just-value0 x3))]
              [scm:else (rt:fail)])))) (Data.Lazy.force v1))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorNonEmptyList))))

  (scm:define toList
    (scm:lambda (v0)
      (Data.Lazy.defer (scm:lambda (x1)
        (Data.Lazy.force (scm:let*
          ([v22 (Data.Lazy.force v0)]
           [_3 (Data.NonEmpty.NonEmpty-value0 v22)]
           [_4 (Data.NonEmpty.NonEmpty-value1 v22)])
            (Data.Lazy.defer (scm:lambda (v5)
              (Cons* _3 _4)))))))))

  (scm:define semigroupNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (v0)
      (scm:lambda (as$p1)
        (scm:let*
          ([v12 (Data.Lazy.force v0)]
           [_3 (Data.NonEmpty.NonEmpty-value0 v12)]
           [_4 (Data.NonEmpty.NonEmpty-value1 v12)])
            (Data.Lazy.defer (scm:lambda (v25)
              (Data.NonEmpty.NonEmpty* _3 (((rt:record-ref semigroupList (scm:string->symbol "append")) _4) (toList as$p1)))))))))))

  (rt:define-lazy $lazy-traversableList "traversableList" "Data.List.Lazy.Types"
    (scm:list (scm:cons (scm:string->symbol "traverse") (scm:lambda (dictApplicative0)
      (scm:let ([Apply01 ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined))])
        (scm:lambda (f2)
          (((rt:record-ref foldableList (scm:string->symbol "foldr")) (scm:lambda (a3)
            (scm:lambda (b4)
              (((rt:record-ref Apply01 (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref Apply01 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) cons) (f2 a3))) b4)))) ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) nil)))))) (scm:cons (scm:string->symbol "sequence") (scm:lambda (dictApplicative0)
      (((rt:record-ref ($lazy-traversableList) (scm:string->symbol "traverse")) dictApplicative0) identity))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorList)) (scm:cons (scm:string->symbol "Foldable1") (scm:lambda (_)
      foldableList))))

  (scm:define traversableList
    ($lazy-traversableList))

  (scm:define traversableNonEmpty
    (Data.NonEmpty.traversableNonEmpty traversableList))

  (scm:define traversableNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "traverse") (scm:lambda (dictApplicative0)
      (scm:let ([traverse11 ((rt:record-ref traversableNonEmpty (scm:string->symbol "traverse")) dictApplicative0)])
        (scm:lambda (f2)
          (scm:lambda (v3)
            (((rt:record-ref ((rt:record-ref ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (xxs4)
              (Data.Lazy.defer (scm:lambda (v15)
                xxs4)))) ((traverse11 f2) (Data.Lazy.force v3)))))))) (scm:cons (scm:string->symbol "sequence") (scm:lambda (dictApplicative0)
      (scm:let ([sequence11 ((rt:record-ref traversableNonEmpty (scm:string->symbol "sequence")) dictApplicative0)])
        (scm:lambda (v2)
          (((rt:record-ref ((rt:record-ref ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (xxs3)
            (Data.Lazy.defer (scm:lambda (v14)
              xxs3)))) (sequence11 (Data.Lazy.force v2))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorNonEmptyList)) (scm:cons (scm:string->symbol "Foldable1") (scm:lambda (_)
      foldableNonEmptyList))))

  (scm:define traversableWithIndexList
    (scm:list (scm:cons (scm:string->symbol "traverseWithIndex") (scm:lambda (dictApplicative0)
      (scm:let ([Apply01 ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined))])
        (scm:lambda (f2)
          (((rt:record-ref foldableWithIndexList (scm:string->symbol "foldrWithIndex")) (scm:lambda (i3)
            (scm:lambda (a4)
              (scm:lambda (b5)
                (((rt:record-ref Apply01 (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref Apply01 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) cons) ((f2 i3) a4))) b5))))) ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) nil)))))) (scm:cons (scm:string->symbol "FunctorWithIndex0") (scm:lambda (_)
      functorWithIndexList)) (scm:cons (scm:string->symbol "FoldableWithIndex1") (scm:lambda (_)
      foldableWithIndexList)) (scm:cons (scm:string->symbol "Traversable2") (scm:lambda (_)
      traversableList))))

  (scm:define traverseWithIndex
    (rt:record-ref (Data.NonEmpty.traversableWithIndexNonEmpty traversableWithIndexList) (scm:string->symbol "traverseWithIndex")))

  (scm:define traversableWithIndexNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "traverseWithIndex") (scm:lambda (dictApplicative0)
      (scm:let ([traverseWithIndex11 (traverseWithIndex dictApplicative0)])
        (scm:lambda (f2)
          (scm:lambda (v3)
            (((rt:record-ref ((rt:record-ref ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (xxs4)
              (Data.Lazy.defer (scm:lambda (v15)
                xxs4)))) ((traverseWithIndex11 (scm:lambda (x4)
              (f2 (scm:cond
                [(Data.Maybe.Nothing? x4) 0]
                [(Data.Maybe.Just? x4) (scm:fx+ 1 (Data.Maybe.Just-value0 x4))]
                [scm:else (rt:fail)])))) (Data.Lazy.force v3)))))))) (scm:cons (scm:string->symbol "FunctorWithIndex0") (scm:lambda (_)
      functorWithIndexNonEmptyList)) (scm:cons (scm:string->symbol "FoldableWithIndex1") (scm:lambda (_)
      foldableWithIndexNonEmptyList)) (scm:cons (scm:string->symbol "Traversable2") (scm:lambda (_)
      traversableNonEmptyList))))

  (scm:define unfoldable1List
    (scm:list (scm:cons (scm:string->symbol "unfoldr1") (scm:letrec ([go0 (scm:lambda (f1)
      (scm:lambda (b2)
        (Data.Lazy.defer (scm:lambda (x3)
          (Data.Lazy.force (scm:let ([v14 (f1 b2)])
            (scm:cond
              [(Data.Maybe.Just? (Data.Tuple.Tuple-value1 v14)) (scm:let*
                ([_5 (Data.Tuple.Tuple-value0 v14)]
                 [_6 ((go0 f1) (Data.Maybe.Just-value0 (Data.Tuple.Tuple-value1 v14)))])
                  (Data.Lazy.defer (scm:lambda (v7)
                    (Cons* _5 _6))))]
              [(Data.Maybe.Nothing? (Data.Tuple.Tuple-value1 v14)) (scm:let ([_5 (Data.Tuple.Tuple-value0 v14)])
                (Data.Lazy.defer (scm:lambda (v6)
                  (Cons* _5 nil))))]
              [scm:else (rt:fail)])))))))])
      go0))))

  (scm:define unfoldableList
    (scm:list (scm:cons (scm:string->symbol "unfoldr") (scm:letrec ([go0 (scm:lambda (f1)
      (scm:lambda (b2)
        (Data.Lazy.defer (scm:lambda (x3)
          (Data.Lazy.force (scm:let ([v14 (f1 b2)])
            (scm:cond
              [(Data.Maybe.Nothing? v14) nil]
              [(Data.Maybe.Just? v14) (scm:let*
                ([_5 (Data.Tuple.Tuple-value0 (Data.Maybe.Just-value0 v14))]
                 [_6 ((go0 f1) (Data.Tuple.Tuple-value1 (Data.Maybe.Just-value0 v14)))])
                  (Data.Lazy.defer (scm:lambda (v7)
                    (Cons* _5 _6))))]
              [scm:else (rt:fail)])))))))])
      go0)) (scm:cons (scm:string->symbol "Unfoldable10") (scm:lambda (_)
      unfoldable1List))))

  (scm:define unfoldr1
    (scm:lambda (f0)
      (scm:lambda (b1)
        (scm:let ([_2 (f0 b1)])
          (Data.NonEmpty.NonEmpty* (Data.Tuple.Tuple-value0 _2) (((rt:record-ref unfoldableList (scm:string->symbol "unfoldr")) (scm:lambda (v13)
            (scm:cond
              [(Data.Maybe.Just? v13) (Data.Maybe.Just (f0 (Data.Maybe.Just-value0 v13)))]
              [scm:else Data.Maybe.Nothing]))) (Data.Tuple.Tuple-value1 _2)))))))

  (scm:define unfoldable1NonEmptyList
    (scm:list (scm:cons (scm:string->symbol "unfoldr1") (scm:lambda (f0)
      (scm:lambda (b1)
        (Data.Lazy.defer (scm:lambda (v2)
          ((unfoldr1 f0) b1))))))))

  (scm:define comonadNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "extract") (scm:lambda (v0)
      (Data.NonEmpty.NonEmpty-value0 (Data.Lazy.force v0)))) (scm:cons (scm:string->symbol "Extend0") (scm:lambda (_)
      extendNonEmptyList))))

  (rt:define-lazy $lazy-monadList "monadList" "Data.List.Lazy.Types"
    (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
      ($lazy-applicativeList))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
      ($lazy-bindList)))))

  (rt:define-lazy $lazy-bindList "bindList" "Data.List.Lazy.Types"
    (scm:list (scm:cons (scm:string->symbol "bind") (scm:lambda (xs0)
      (scm:lambda (f1)
        (Data.Lazy.defer (scm:lambda (v2)
          (scm:let ([_3 (Data.Lazy.force xs0)])
            (scm:cond
              [(Nil? _3) Nil]
              [(Cons? _3) (Data.Lazy.force (((rt:record-ref semigroupList (scm:string->symbol "append")) (f1 (Cons-value0 _3))) (((rt:record-ref ($lazy-bindList) (scm:string->symbol "bind")) (Cons-value1 _3)) f1)))]
              [scm:else (rt:fail)]))))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
      ($lazy-applyList)))))

  (rt:define-lazy $lazy-applyList "applyList" "Data.List.Lazy.Types"
    (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (f0)
      (scm:lambda (a1)
        (((rt:record-ref ($lazy-bindList) (scm:string->symbol "bind")) f0) (scm:lambda (f$p2)
          (((rt:record-ref ($lazy-bindList) (scm:string->symbol "bind")) a1) (scm:lambda (a$p3)
            ((rt:record-ref ($lazy-applicativeList) (scm:string->symbol "pure")) (f$p2 a$p3))))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorList))))

  (rt:define-lazy $lazy-applicativeList "applicativeList" "Data.List.Lazy.Types"
    (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (a0)
      (Data.Lazy.defer (scm:lambda (v1)
        (Cons* a0 nil))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
      ($lazy-applyList)))))

  (scm:define monadList
    ($lazy-monadList))

  (scm:define bindList
    ($lazy-bindList))

  (scm:define applyList
    ($lazy-applyList))

  (scm:define applicativeList
    ($lazy-applicativeList))

  (scm:define applyNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:let*
          ([v22 (Data.Lazy.force v11)]
           [v33 (Data.Lazy.force v0)]
           [_4 (Data.NonEmpty.NonEmpty-value0 v22)]
           [_5 (Data.NonEmpty.NonEmpty-value1 v22)]
           [_6 (Data.NonEmpty.NonEmpty-value0 v33)]
           [_7 (Data.NonEmpty.NonEmpty-value1 v33)])
            (Data.Lazy.defer (scm:lambda (v48)
              (Data.NonEmpty.NonEmpty* (_6 _4) (((rt:record-ref semigroupList (scm:string->symbol "append")) (((rt:record-ref applyList (scm:string->symbol "apply")) _7) (Data.Lazy.defer (scm:lambda (v9)
                (Cons* _4 nil))))) (((rt:record-ref applyList (scm:string->symbol "apply")) (Data.Lazy.defer (scm:lambda (v9)
                (Cons* _6 _7)))) _5))))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorNonEmptyList))))

  (scm:define bindNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "bind") (scm:lambda (v0)
      (scm:lambda (f1)
        (scm:let*
          ([v12 (Data.Lazy.force v0)]
           [_3 (Data.NonEmpty.NonEmpty-value1 v12)]
           [v24 (Data.Lazy.force (f1 (Data.NonEmpty.NonEmpty-value0 v12)))]
           [_5 (Data.NonEmpty.NonEmpty-value0 v24)]
           [_6 (Data.NonEmpty.NonEmpty-value1 v24)])
            (Data.Lazy.defer (scm:lambda (v37)
              (Data.NonEmpty.NonEmpty* _5 (((rt:record-ref semigroupList (scm:string->symbol "append")) _6) (((rt:record-ref bindList (scm:string->symbol "bind")) _3) (scm:lambda (x8)
                (toList (f1 x8)))))))))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
      applyNonEmptyList))))

  (scm:define altNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "alt") (rt:record-ref semigroupNonEmptyList (scm:string->symbol "append"))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorNonEmptyList))))

  (scm:define altList
    (scm:list (scm:cons (scm:string->symbol "alt") (rt:record-ref semigroupList (scm:string->symbol "append"))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorList))))

  (scm:define plusList
    (scm:list (scm:cons (scm:string->symbol "empty") nil) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
      altList))))

  (scm:define alternativeList
    (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
      applicativeList)) (scm:cons (scm:string->symbol "Plus1") (scm:lambda (_)
      plusList))))

  (scm:define monadPlusList
    (scm:list (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
      monadList)) (scm:cons (scm:string->symbol "Alternative1") (scm:lambda (_)
      alternativeList))))

  (scm:define applicativeNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (a0)
      (Data.Lazy.defer (scm:lambda (v1)
        (Data.NonEmpty.NonEmpty* a0 nil))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
      applyNonEmptyList))))

  (scm:define monadNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
      applicativeNonEmptyList)) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
      bindNonEmptyList)))))
