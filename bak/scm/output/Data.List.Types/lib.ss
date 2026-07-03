#!r6rs
#!chezscheme
(library
  (Data.List.Types lib)
  (export
    Cons
    Cons*
    Cons-value0
    Cons-value1
    Cons?
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
    eq1List
    eq1NonEmptyList
    eqList
    eqNonEmptyList
    extendList
    extendNonEmptyList
    foldable1NonEmptyList
    foldableList
    foldableNonEmptyList
    foldableWithIndexList
    foldableWithIndexNonEmpty
    foldableWithIndexNonEmptyList
    functorList
    functorNonEmptyList
    functorWithIndexList
    functorWithIndexNonEmptyList
    identity
    listMap
    mapWithIndex
    monadList
    monadNonEmptyList
    monadPlusList
    monoidList
    nelCons
    newtypeNonEmptyList
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
    toList
    traversable1NonEmptyList
    traversableList
    traversableNonEmptyList
    traversableWithIndexList
    traversableWithIndexNonEmptyList
    traverseWithIndex
    unfoldable1List
    unfoldable1NonEmptyList
    unfoldableList)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.NonEmpty lib) Data.NonEmpty.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define identity
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

  (scm:define toList
    (scm:lambda (v0)
      (scm:cons (Data.NonEmpty.NonEmpty-value0 v0) (Data.NonEmpty.NonEmpty-value1 v0))))

  (scm:define newtypeNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define nelCons
    (scm:lambda (a0)
      (scm:lambda (v1)
        (Data.NonEmpty.NonEmpty* a0 (scm:cons (Data.NonEmpty.NonEmpty-value0 v1) (Data.NonEmpty.NonEmpty-value1 v1))))))

  (scm:define listMap
    (scm:lambda (f0)
      (scm:letrec ([chunkedRevMap1 (scm:lambda (v2)
        (scm:lambda (v13)
          (scm:cond
            [(scm:and (scm:pair? v13) (scm:and (scm:pair? (scm:cdr v13)) (scm:pair? (scm:cdr (scm:cdr v13))))) ((chunkedRevMap1 (scm:cons v13 v2)) (scm:cdr (scm:cdr (scm:cdr v13))))]
            [scm:else (scm:letrec ([reverseUnrolledMap4 (scm:lambda (v25)
              (scm:lambda (v36)
                (scm:cond
                  [(scm:and (scm:pair? v25) (scm:and (scm:pair? (scm:car v25)) (scm:and (scm:pair? (scm:cdr (scm:car v25))) (scm:pair? (scm:cdr (scm:cdr (scm:car v25))))))) ((reverseUnrolledMap4 (scm:cdr v25)) (scm:cons (f0 (scm:car (scm:car v25))) (scm:cons (f0 (scm:car (scm:cdr (scm:car v25)))) (scm:cons (f0 (scm:car (scm:cdr (scm:cdr (scm:car v25))))) v36))))]
                  [scm:else v36])))])
              ((reverseUnrolledMap4 v2) (scm:cond
                [(scm:pair? v13) (scm:cond
                  [(scm:pair? (scm:cdr v13)) (scm:cond
                    [(scm:null? (scm:cdr (scm:cdr v13))) (scm:cons (f0 (scm:car v13)) (scm:cons (f0 (scm:car (scm:cdr v13))) (scm:quote ())))]
                    [scm:else (scm:quote ())])]
                  [(scm:null? (scm:cdr v13)) (scm:cons (f0 (scm:car v13)) (scm:quote ()))]
                  [scm:else (scm:quote ())])]
                [scm:else (scm:quote ())])))])))])
        (chunkedRevMap1 (scm:quote ())))))

  (scm:define functorList
    (scm:list (scm:cons (scm:string->symbol "map") listMap)))

  (scm:define functorNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f0)
      (scm:lambda (m1)
        (Data.NonEmpty.NonEmpty* (f0 (Data.NonEmpty.NonEmpty-value0 m1)) ((listMap f0) (Data.NonEmpty.NonEmpty-value1 m1))))))))

  (rt:define-lazy $lazy-foldableList "foldableList" "Data.List.Types"
    (scm:list (scm:cons (scm:string->symbol "foldr") (scm:lambda (f0)
      (scm:lambda (b1)
        (scm:let ([_2 (((rt:record-ref ($lazy-foldableList) (scm:string->symbol "foldl")) (scm:lambda (b2)
          (scm:lambda (a3)
            ((f0 a3) b2)))) b1)])
          (scm:letrec ([go3 (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:cond
                [(scm:null? v15) v4]
                [(scm:pair? v15) ((go3 (scm:cons (scm:car v15) v4)) (scm:cdr v15))]
                [scm:else (rt:fail)])))])
            (scm:let ([_4 (go3 (scm:quote ()))])
              (scm:lambda (x5)
                (_2 (_4 x5))))))))) (scm:cons (scm:string->symbol "foldl") (scm:lambda (f0)
      (scm:letrec ([go1 (scm:lambda (b2)
        (scm:lambda (v3)
          (scm:cond
            [(scm:null? v3) b2]
            [(scm:pair? v3) ((go1 ((f0 b2) (scm:car v3))) (scm:cdr v3))]
            [scm:else (rt:fail)])))])
        go1))) (scm:cons (scm:string->symbol "foldMap") (scm:lambda (dictMonoid0)
      (scm:let ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))])
        (scm:lambda (f2)
          (((rt:record-ref ($lazy-foldableList) (scm:string->symbol "foldl")) (scm:lambda (acc3)
            (scm:let ([_4 ((rt:record-ref ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined)) (scm:string->symbol "append")) acc3)])
              (scm:lambda (x5)
                (_4 (f2 x5)))))) mempty1)))))))

  (scm:define foldableList
    ($lazy-foldableList))

  (scm:define foldableNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "foldMap") (scm:lambda (dictMonoid0)
      (scm:let ([foldMap11 ((rt:record-ref foldableList (scm:string->symbol "foldMap")) dictMonoid0)])
        (scm:lambda (f2)
          (scm:lambda (v3)
            (((rt:record-ref ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined)) (scm:string->symbol "append")) (f2 (Data.NonEmpty.NonEmpty-value0 v3))) ((foldMap11 f2) (Data.NonEmpty.NonEmpty-value1 v3)))))))) (scm:cons (scm:string->symbol "foldl") (scm:lambda (f0)
      (scm:lambda (b1)
        (scm:lambda (v2)
          (scm:letrec ([go3 (scm:lambda (b4)
            (scm:lambda (v5)
              (scm:cond
                [(scm:null? v5) b4]
                [(scm:pair? v5) ((go3 ((f0 b4) (scm:car v5))) (scm:cdr v5))]
                [scm:else (rt:fail)])))])
            ((go3 ((f0 b1) (Data.NonEmpty.NonEmpty-value0 v2))) (Data.NonEmpty.NonEmpty-value1 v2))))))) (scm:cons (scm:string->symbol "foldr") (scm:lambda (f0)
      (scm:lambda (b1)
        (scm:lambda (v2)
          ((f0 (Data.NonEmpty.NonEmpty-value0 v2)) ((((rt:record-ref foldableList (scm:string->symbol "foldr")) f0) b1) (Data.NonEmpty.NonEmpty-value1 v2)))))))))

  (rt:define-lazy $lazy-foldableWithIndexList "foldableWithIndexList" "Data.List.Types"
    (scm:list (scm:cons (scm:string->symbol "foldrWithIndex") (scm:lambda (f0)
      (scm:lambda (b1)
        (scm:lambda (xs2)
          (scm:letrec ([go3 (scm:lambda (b4)
            (scm:lambda (v5)
              (scm:cond
                [(scm:null? v5) b4]
                [(scm:pair? v5) ((go3 (Data.Tuple.Tuple* (scm:fx+ (Data.Tuple.Tuple-value0 b4) 1) (scm:cons (scm:car v5) (Data.Tuple.Tuple-value1 b4)))) (scm:cdr v5))]
                [scm:else (rt:fail)])))])
            (scm:let ([v4 ((go3 (Data.Tuple.Tuple* 0 (scm:quote ()))) xs2)])
              (scm:letrec ([go5 (scm:lambda (b6)
                (scm:lambda (v7)
                  (scm:cond
                    [(scm:null? v7) b6]
                    [(scm:pair? v7) ((go5 (Data.Tuple.Tuple* (scm:fx- (Data.Tuple.Tuple-value0 b6) 1) (((f0 (scm:fx- (Data.Tuple.Tuple-value0 b6) 1)) (scm:car v7)) (Data.Tuple.Tuple-value1 b6)))) (scm:cdr v7))]
                    [scm:else (rt:fail)])))])
                (Data.Tuple.Tuple-value1 ((go5 (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v4) b1)) (Data.Tuple.Tuple-value1 v4)))))))))) (scm:cons (scm:string->symbol "foldlWithIndex") (scm:lambda (f0)
      (scm:lambda (acc1)
        (scm:letrec ([go2 (scm:lambda (b3)
          (scm:lambda (v4)
            (scm:cond
              [(scm:null? v4) b3]
              [(scm:pair? v4) ((go2 (Data.Tuple.Tuple* (scm:fx+ (Data.Tuple.Tuple-value0 b3) 1) (((f0 (Data.Tuple.Tuple-value0 b3)) (Data.Tuple.Tuple-value1 b3)) (scm:car v4)))) (scm:cdr v4))]
              [scm:else (rt:fail)])))])
          (scm:let ([_3 (go2 (Data.Tuple.Tuple* 0 acc1))])
            (scm:lambda (x4)
              (Data.Tuple.Tuple-value1 (_3 x4)))))))) (scm:cons (scm:string->symbol "foldMapWithIndex") (scm:lambda (dictMonoid0)
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
                [scm:else (rt:fail)])))) v3)))))) (scm:cons (scm:string->symbol "foldlWithIndex") (scm:lambda (f0)
      (scm:lambda (b1)
        (scm:lambda (v2)
          ((((rt:record-ref foldableWithIndexNonEmpty (scm:string->symbol "foldlWithIndex")) (scm:lambda (x3)
            (f0 (scm:cond
              [(Data.Maybe.Nothing? x3) 0]
              [(Data.Maybe.Just? x3) (scm:fx+ 1 (Data.Maybe.Just-value0 x3))]
              [scm:else (rt:fail)])))) b1) v2))))) (scm:cons (scm:string->symbol "foldrWithIndex") (scm:lambda (f0)
      (scm:lambda (b1)
        (scm:lambda (v2)
          ((((rt:record-ref foldableWithIndexNonEmpty (scm:string->symbol "foldrWithIndex")) (scm:lambda (x3)
            (f0 (scm:cond
              [(Data.Maybe.Nothing? x3) 0]
              [(Data.Maybe.Just? x3) (scm:fx+ 1 (Data.Maybe.Just-value0 x3))]
              [scm:else (rt:fail)])))) b1) v2))))) (scm:cons (scm:string->symbol "Foldable0") (scm:lambda (_)
      foldableNonEmptyList))))

  (scm:define functorWithIndexList
    (scm:list (scm:cons (scm:string->symbol "mapWithIndex") (scm:lambda (f0)
      (((rt:record-ref foldableWithIndexList (scm:string->symbol "foldrWithIndex")) (scm:lambda (i1)
        (scm:lambda (x2)
          (scm:lambda (acc3)
            (scm:cons ((f0 i1) x2) acc3))))) (scm:quote ())))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorList))))

  (scm:define mapWithIndex
    (scm:lambda (f0)
      (scm:lambda (v1)
        (Data.NonEmpty.NonEmpty* ((f0 Data.Maybe.Nothing) (Data.NonEmpty.NonEmpty-value0 v1)) ((((rt:record-ref foldableWithIndexList (scm:string->symbol "foldrWithIndex")) (scm:lambda (i2)
          (scm:lambda (x3)
            (scm:lambda (acc4)
              (scm:cons ((f0 (Data.Maybe.Just i2)) x3) acc4))))) (scm:quote ())) (Data.NonEmpty.NonEmpty-value1 v1))))))

  (scm:define functorWithIndexNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "mapWithIndex") (scm:lambda (fn0)
      (scm:lambda (v1)
        ((mapWithIndex (scm:lambda (x2)
          (fn0 (scm:cond
            [(Data.Maybe.Nothing? x2) 0]
            [(Data.Maybe.Just? x2) (scm:fx+ 1 (Data.Maybe.Just-value0 x2))]
            [scm:else (rt:fail)])))) v1)))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorNonEmptyList))))

  (scm:define semigroupList
    (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (xs0)
      (scm:lambda (ys1)
        ((((rt:record-ref foldableList (scm:string->symbol "foldr")) rt:list-cons) ys1) xs0))))))

  (scm:define monoidList
    (scm:list (scm:cons (scm:string->symbol "mempty") (scm:quote ())) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
      semigroupList))))

  (scm:define semigroupNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (v0)
      (scm:lambda (as$p1)
        (Data.NonEmpty.NonEmpty* (Data.NonEmpty.NonEmpty-value0 v0) ((((rt:record-ref foldableList (scm:string->symbol "foldr")) rt:list-cons) (scm:cons (Data.NonEmpty.NonEmpty-value0 as$p1) (Data.NonEmpty.NonEmpty-value1 as$p1))) (Data.NonEmpty.NonEmpty-value1 v0))))))))

  (scm:define showList
    (scm:lambda (dictShow0)
      (scm:let ([show1 (rt:record-ref dictShow0 (scm:string->symbol "show"))])
        (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v2)
          (scm:cond
            [(scm:null? v2) (rt:string->pstring "Nil")]
            [scm:else (scm:letrec ([go3 (scm:lambda (b4)
              (scm:lambda (v5)
                (scm:cond
                  [(scm:null? v5) b4]
                  [(scm:pair? v5) ((go3 (scm:cond
                    [(rt:record-ref b4 (scm:string->symbol "init")) (scm:list (scm:cons (scm:string->symbol "init") #f) (scm:cons (scm:string->symbol "acc") (scm:car v5)))]
                    [scm:else (scm:list (scm:cons (scm:string->symbol "init") #f) (scm:cons (scm:string->symbol "acc") (rt:pstring-concat (rt:pstring-concat (rt:record-ref b4 (scm:string->symbol "acc")) (rt:string->pstring " : ")) (scm:car v5))))])) (scm:cdr v5))]
                  [scm:else (rt:fail)])))])
              (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(") (rt:record-ref ((go3 (scm:list (scm:cons (scm:string->symbol "init") #t) (scm:cons (scm:string->symbol "acc") (rt:string->pstring "")))) ((listMap show1) v2)) (scm:string->symbol "acc"))) (rt:string->pstring " : Nil)")))])))))))

  (scm:define showNonEmptyList
    (scm:lambda (dictShow0)
      (scm:let ([_1 (showList dictShow0)])
        (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v2)
          (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(NonEmptyList (NonEmpty ") ((rt:record-ref dictShow0 (scm:string->symbol "show")) (Data.NonEmpty.NonEmpty-value0 v2))) (rt:string->pstring " ")) ((rt:record-ref _1 (scm:string->symbol "show")) (Data.NonEmpty.NonEmpty-value1 v2))) (rt:string->pstring "))"))))))))

  (rt:define-lazy $lazy-traversableList "traversableList" "Data.List.Types"
    (scm:list (scm:cons (scm:string->symbol "traverse") (scm:lambda (dictApplicative0)
      (scm:let ([Apply01 ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined))])
        (scm:lambda (f2)
          (scm:let ([_3 ((rt:record-ref ((rt:record-ref Apply01 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:letrec ([go3 (scm:lambda (b4)
            (scm:lambda (v5)
              (scm:cond
                [(scm:null? v5) b4]
                [(scm:pair? v5) ((go3 (scm:cons (scm:car v5) b4)) (scm:cdr v5))]
                [scm:else (rt:fail)])))])
            (go3 (scm:quote ()))))])
            (scm:letrec ([go4 (scm:lambda (b5)
              (scm:lambda (v6)
                (scm:cond
                  [(scm:null? v6) b5]
                  [(scm:pair? v6) ((go4 (((rt:record-ref Apply01 (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref Apply01 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (b7)
                    (scm:lambda (a8)
                      (scm:cons a8 b7)))) b5)) (f2 (scm:car v6)))) (scm:cdr v6))]
                  [scm:else (rt:fail)])))])
              (scm:let ([_5 (go4 ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) (scm:quote ())))])
                (scm:lambda (x6)
                  (_3 (_5 x6)))))))))) (scm:cons (scm:string->symbol "sequence") (scm:lambda (dictApplicative0)
      (((rt:record-ref ($lazy-traversableList) (scm:string->symbol "traverse")) dictApplicative0) identity))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorList)) (scm:cons (scm:string->symbol "Foldable1") (scm:lambda (_)
      foldableList))))

  (scm:define traversableList
    ($lazy-traversableList))

  (scm:define traversableNonEmptyList
    (Data.NonEmpty.traversableNonEmpty traversableList))

  (scm:define traversableWithIndexList
    (scm:list (scm:cons (scm:string->symbol "traverseWithIndex") (scm:lambda (dictApplicative0)
      (scm:let ([Apply01 ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined))])
        (scm:lambda (f2)
          (scm:let ([_3 ((rt:record-ref ((rt:record-ref Apply01 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:letrec ([go3 (scm:lambda (b4)
            (scm:lambda (v5)
              (scm:cond
                [(scm:null? v5) b4]
                [(scm:pair? v5) ((go3 (scm:cons (scm:car v5) b4)) (scm:cdr v5))]
                [scm:else (rt:fail)])))])
            (go3 (scm:quote ()))))])
            (scm:letrec ([go4 (scm:lambda (b5)
              (scm:lambda (v6)
                (scm:cond
                  [(scm:null? v6) b5]
                  [(scm:pair? v6) ((go4 (Data.Tuple.Tuple* (scm:fx+ (Data.Tuple.Tuple-value0 b5) 1) (((rt:record-ref Apply01 (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref Apply01 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (b7)
                    (scm:lambda (a8)
                      (scm:cons a8 b7)))) (Data.Tuple.Tuple-value1 b5))) ((f2 (Data.Tuple.Tuple-value0 b5)) (scm:car v6))))) (scm:cdr v6))]
                  [scm:else (rt:fail)])))])
              (scm:let ([_5 (go4 (Data.Tuple.Tuple* 0 ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) (scm:quote ()))))])
                (scm:lambda (x6)
                  (_3 (Data.Tuple.Tuple-value1 (_5 x6))))))))))) (scm:cons (scm:string->symbol "FunctorWithIndex0") (scm:lambda (_)
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
            (((rt:record-ref ((rt:record-ref ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) NonEmptyList) ((traverseWithIndex11 (scm:lambda (x4)
              (f2 (scm:cond
                [(Data.Maybe.Nothing? x4) 0]
                [(Data.Maybe.Just? x4) (scm:fx+ 1 (Data.Maybe.Just-value0 x4))]
                [scm:else (rt:fail)])))) v3))))))) (scm:cons (scm:string->symbol "FunctorWithIndex0") (scm:lambda (_)
      functorWithIndexNonEmptyList)) (scm:cons (scm:string->symbol "FoldableWithIndex1") (scm:lambda (_)
      foldableWithIndexNonEmptyList)) (scm:cons (scm:string->symbol "Traversable2") (scm:lambda (_)
      traversableNonEmptyList))))

  (scm:define unfoldable1List
    (scm:list (scm:cons (scm:string->symbol "unfoldr1") (scm:lambda (f0)
      (scm:lambda (b1)
        (scm:letrec ([go2 (scm:lambda (source3)
          (scm:lambda (memo4)
            (scm:let ([v5 (f0 source3)])
              (scm:cond
                [(Data.Maybe.Just? (Data.Tuple.Tuple-value1 v5)) ((go2 (Data.Maybe.Just-value0 (Data.Tuple.Tuple-value1 v5))) (scm:cons (Data.Tuple.Tuple-value0 v5) memo4))]
                [(Data.Maybe.Nothing? (Data.Tuple.Tuple-value1 v5)) (scm:letrec ([go6 (scm:lambda (b7)
                  (scm:lambda (v8)
                    (scm:cond
                      [(scm:null? v8) b7]
                      [(scm:pair? v8) ((go6 (scm:cons (scm:car v8) b7)) (scm:cdr v8))]
                      [scm:else (rt:fail)])))])
                  ((go6 (scm:quote ())) (scm:cons (Data.Tuple.Tuple-value0 v5) memo4)))]
                [scm:else (rt:fail)]))))])
          ((go2 b1) (scm:quote ()))))))))

  (scm:define unfoldableList
    (scm:list (scm:cons (scm:string->symbol "unfoldr") (scm:lambda (f0)
      (scm:lambda (b1)
        (scm:letrec ([go2 (scm:lambda (source3)
          (scm:lambda (memo4)
            (scm:let ([v5 (f0 source3)])
              (scm:cond
                [(Data.Maybe.Nothing? v5) (scm:letrec ([go6 (scm:lambda (b7)
                  (scm:lambda (v8)
                    (scm:cond
                      [(scm:null? v8) b7]
                      [(scm:pair? v8) ((go6 (scm:cons (scm:car v8) b7)) (scm:cdr v8))]
                      [scm:else (rt:fail)])))])
                  ((go6 (scm:quote ())) memo4))]
                [(Data.Maybe.Just? v5) ((go2 (Data.Tuple.Tuple-value1 (Data.Maybe.Just-value0 v5))) (scm:cons (Data.Tuple.Tuple-value0 (Data.Maybe.Just-value0 v5)) memo4))]
                [scm:else (rt:fail)]))))])
          ((go2 b1) (scm:quote ())))))) (scm:cons (scm:string->symbol "Unfoldable10") (scm:lambda (_)
      unfoldable1List))))

  (scm:define unfoldable1NonEmptyList
    (scm:list (scm:cons (scm:string->symbol "unfoldr1") (scm:lambda (f0)
      (scm:lambda (b1)
        (scm:let ([_2 (f0 b1)])
          (Data.NonEmpty.NonEmpty* (Data.Tuple.Tuple-value0 _2) (scm:letrec ([go3 (scm:lambda (source4)
            (scm:lambda (memo5)
              (scm:cond
                [(Data.Maybe.Just? source4) ((go3 (Data.Tuple.Tuple-value1 (f0 (Data.Maybe.Just-value0 source4)))) (scm:cons (Data.Tuple.Tuple-value0 (f0 (Data.Maybe.Just-value0 source4))) memo5))]
                [scm:else (scm:letrec ([go6 (scm:lambda (b7)
                  (scm:lambda (v8)
                    (scm:cond
                      [(scm:null? v8) b7]
                      [(scm:pair? v8) ((go6 (scm:cons (scm:car v8) b7)) (scm:cdr v8))]
                      [scm:else (rt:fail)])))])
                  ((go6 (scm:quote ())) memo5))])))])
            ((go3 (Data.Tuple.Tuple-value1 _2)) (scm:quote ()))))))))))

  (scm:define foldable1NonEmptyList
    (Data.NonEmpty.foldable1NonEmpty foldableList))

  (scm:define extendNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "extend") (scm:lambda (f0)
      (scm:lambda (v1)
        (Data.NonEmpty.NonEmpty* (f0 v1) (rt:record-ref ((((rt:record-ref foldableList (scm:string->symbol "foldr")) (scm:lambda (a2)
          (scm:lambda (v13)
            (scm:list (scm:cons (scm:string->symbol "val") (scm:cons (f0 (Data.NonEmpty.NonEmpty* a2 (rt:record-ref v13 (scm:string->symbol "acc")))) (rt:record-ref v13 (scm:string->symbol "val")))) (scm:cons (scm:string->symbol "acc") (scm:cons a2 (rt:record-ref v13 (scm:string->symbol "acc")))))))) (scm:list (scm:cons (scm:string->symbol "val") (scm:quote ())) (scm:cons (scm:string->symbol "acc") (scm:quote ())))) (Data.NonEmpty.NonEmpty-value1 v1)) (scm:string->symbol "val")))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorNonEmptyList))))

  (scm:define extendList
    (scm:list (scm:cons (scm:string->symbol "extend") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:cond
          [(scm:null? v11) (scm:quote ())]
          [(scm:pair? v11) (scm:cons (v0 v11) (rt:record-ref ((((rt:record-ref foldableList (scm:string->symbol "foldr")) (scm:lambda (a$p2)
            (scm:lambda (v23)
              (scm:list (scm:cons (scm:string->symbol "val") (scm:cons (v0 (scm:cons a$p2 (rt:record-ref v23 (scm:string->symbol "acc")))) (rt:record-ref v23 (scm:string->symbol "val")))) (scm:cons (scm:string->symbol "acc") (scm:cons a$p2 (rt:record-ref v23 (scm:string->symbol "acc")))))))) (scm:list (scm:cons (scm:string->symbol "val") (scm:quote ())) (scm:cons (scm:string->symbol "acc") (scm:quote ())))) (scm:cdr v11)) (scm:string->symbol "val")))]
          [scm:else (rt:fail)])))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorList))))

  (scm:define eq1List
    (scm:list (scm:cons (scm:string->symbol "eq1") (scm:lambda (dictEq0)
      (scm:lambda (xs1)
        (scm:lambda (ys2)
          (scm:letrec ([go3 (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:lambda (v26)
                (scm:cond
                  [(scm:not v26) #f]
                  [(scm:null? v4) (scm:and (scm:null? v15) v26)]
                  [scm:else (scm:and (scm:pair? v4) (scm:and (scm:pair? v15) (((go3 (scm:cdr v4)) (scm:cdr v15)) (scm:and v26 (((rt:record-ref dictEq0 (scm:string->symbol "eq")) (scm:car v15)) (scm:car v4))))))]))))])
            (((go3 xs1) ys2) #t))))))))

  (scm:define eq1NonEmptyList
    (scm:list (scm:cons (scm:string->symbol "eq1") (scm:lambda (dictEq0)
      (scm:lambda (x1)
        (scm:lambda (y2)
          (scm:and (((rt:record-ref dictEq0 (scm:string->symbol "eq")) (Data.NonEmpty.NonEmpty-value0 x1)) (Data.NonEmpty.NonEmpty-value0 y2)) (scm:letrec ([go3 (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:lambda (v26)
                (scm:cond
                  [(scm:not v26) #f]
                  [(scm:null? v4) (scm:and (scm:null? v15) v26)]
                  [scm:else (scm:and (scm:pair? v4) (scm:and (scm:pair? v15) (((go3 (scm:cdr v4)) (scm:cdr v15)) (scm:and v26 (((rt:record-ref dictEq0 (scm:string->symbol "eq")) (scm:car v15)) (scm:car v4))))))]))))])
            (((go3 (Data.NonEmpty.NonEmpty-value1 x1)) (Data.NonEmpty.NonEmpty-value1 y2)) #t)))))))))

  (scm:define eqList
    (scm:lambda (dictEq0)
      (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (xs1)
        (scm:lambda (ys2)
          (scm:letrec ([go3 (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:lambda (v26)
                (scm:cond
                  [(scm:not v26) #f]
                  [(scm:null? v4) (scm:and (scm:null? v15) v26)]
                  [scm:else (scm:and (scm:pair? v4) (scm:and (scm:pair? v15) (((go3 (scm:cdr v4)) (scm:cdr v15)) (scm:and v26 (((rt:record-ref dictEq0 (scm:string->symbol "eq")) (scm:car v15)) (scm:car v4))))))]))))])
            (((go3 xs1) ys2) #t))))))))

  (scm:define eqNonEmptyList
    (scm:lambda (dictEq0)
      (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x1)
        (scm:lambda (y2)
          (scm:and (((rt:record-ref dictEq0 (scm:string->symbol "eq")) (Data.NonEmpty.NonEmpty-value0 x1)) (Data.NonEmpty.NonEmpty-value0 y2)) (scm:letrec ([go3 (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:lambda (v26)
                (scm:cond
                  [(scm:not v26) #f]
                  [(scm:null? v4) (scm:and (scm:null? v15) v26)]
                  [scm:else (scm:and (scm:pair? v4) (scm:and (scm:pair? v15) (((go3 (scm:cdr v4)) (scm:cdr v15)) (scm:and v26 (((rt:record-ref dictEq0 (scm:string->symbol "eq")) (scm:car v15)) (scm:car v4))))))]))))])
            (((go3 (Data.NonEmpty.NonEmpty-value1 x1)) (Data.NonEmpty.NonEmpty-value1 y2)) #t)))))))))

  (scm:define ord1List
    (scm:list (scm:cons (scm:string->symbol "compare1") (scm:lambda (dictOrd0)
      (scm:lambda (xs1)
        (scm:lambda (ys2)
          (scm:letrec ([go3 (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:cond
                [(scm:null? v4) (scm:cond
                  [(scm:null? v15) Data.Ordering.EQ]
                  [scm:else Data.Ordering.LT])]
                [(scm:null? v15) Data.Ordering.GT]
                [(scm:and (scm:pair? v4) (scm:pair? v15)) (scm:let ([v26 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) (scm:car v4)) (scm:car v15))])
                  (scm:cond
                    [(Data.Ordering.EQ? v26) ((go3 (scm:cdr v4)) (scm:cdr v15))]
                    [scm:else v26]))]
                [scm:else (rt:fail)])))])
            ((go3 xs1) ys2)))))) (scm:cons (scm:string->symbol "Eq10") (scm:lambda (_)
      eq1List))))

  (scm:define ordNonEmpty
    (Data.NonEmpty.ordNonEmpty ord1List))

  (scm:define ord1NonEmptyList
    (Data.NonEmpty.ord1NonEmpty ord1List))

  (scm:define ordList
    (scm:lambda (dictOrd0)
      (scm:let*
        ([_1 ((rt:record-ref dictOrd0 (scm:string->symbol "Eq0")) (scm:quote undefined))]
         [eqList12 (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (xs2)
          (scm:lambda (ys3)
            (scm:letrec ([go4 (scm:lambda (v5)
              (scm:lambda (v16)
                (scm:lambda (v27)
                  (scm:cond
                    [(scm:not v27) #f]
                    [(scm:null? v5) (scm:and (scm:null? v16) v27)]
                    [scm:else (scm:and (scm:pair? v5) (scm:and (scm:pair? v16) (((go4 (scm:cdr v5)) (scm:cdr v16)) (scm:and v27 (((rt:record-ref _1 (scm:string->symbol "eq")) (scm:car v16)) (scm:car v5))))))]))))])
              (((go4 xs2) ys3) #t))))))])
          (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (xs3)
            (scm:lambda (ys4)
              (scm:letrec ([go5 (scm:lambda (v6)
                (scm:lambda (v17)
                  (scm:cond
                    [(scm:null? v6) (scm:cond
                      [(scm:null? v17) Data.Ordering.EQ]
                      [scm:else Data.Ordering.LT])]
                    [(scm:null? v17) Data.Ordering.GT]
                    [(scm:and (scm:pair? v6) (scm:pair? v17)) (scm:let ([v28 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) (scm:car v6)) (scm:car v17))])
                      (scm:cond
                        [(Data.Ordering.EQ? v28) ((go5 (scm:cdr v6)) (scm:cdr v17))]
                        [scm:else v28]))]
                    [scm:else (rt:fail)])))])
                ((go5 xs3) ys4))))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
            eqList12))))))

  (scm:define ordNonEmptyList
    (scm:lambda (dictOrd0)
      (ordNonEmpty dictOrd0)))

  (scm:define comonadNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "extract") (scm:lambda (v0)
      (Data.NonEmpty.NonEmpty-value0 v0))) (scm:cons (scm:string->symbol "Extend0") (scm:lambda (_)
      extendNonEmptyList))))

  (rt:define-lazy $lazy-applyList "applyList" "Data.List.Types"
    (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:cond
          [(scm:null? v0) (scm:quote ())]
          [(scm:pair? v0) ((((rt:record-ref foldableList (scm:string->symbol "foldr")) rt:list-cons) (((rt:record-ref ($lazy-applyList) (scm:string->symbol "apply")) (scm:cdr v0)) v11)) ((listMap (scm:car v0)) v11))]
          [scm:else (rt:fail)])))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorList))))

  (scm:define applyList
    ($lazy-applyList))

  (scm:define applyNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v0)
      (scm:lambda (v11)
        (Data.NonEmpty.NonEmpty* ((Data.NonEmpty.NonEmpty-value0 v0) (Data.NonEmpty.NonEmpty-value0 v11)) ((((rt:record-ref foldableList (scm:string->symbol "foldr")) rt:list-cons) (((rt:record-ref applyList (scm:string->symbol "apply")) (scm:cons (Data.NonEmpty.NonEmpty-value0 v0) (Data.NonEmpty.NonEmpty-value1 v0))) (Data.NonEmpty.NonEmpty-value1 v11))) (((rt:record-ref applyList (scm:string->symbol "apply")) (Data.NonEmpty.NonEmpty-value1 v0)) (scm:cons (Data.NonEmpty.NonEmpty-value0 v11) (scm:quote ())))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorNonEmptyList))))

  (rt:define-lazy $lazy-bindList "bindList" "Data.List.Types"
    (scm:list (scm:cons (scm:string->symbol "bind") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:cond
          [(scm:null? v0) (scm:quote ())]
          [(scm:pair? v0) ((((rt:record-ref foldableList (scm:string->symbol "foldr")) rt:list-cons) (((rt:record-ref ($lazy-bindList) (scm:string->symbol "bind")) (scm:cdr v0)) v11)) (v11 (scm:car v0)))]
          [scm:else (rt:fail)])))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
      applyList))))

  (scm:define bindList
    ($lazy-bindList))

  (scm:define bindNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "bind") (scm:lambda (v0)
      (scm:lambda (f1)
        (scm:let ([v12 (f1 (Data.NonEmpty.NonEmpty-value0 v0))])
          (Data.NonEmpty.NonEmpty* (Data.NonEmpty.NonEmpty-value0 v12) ((((rt:record-ref foldableList (scm:string->symbol "foldr")) rt:list-cons) (((rt:record-ref bindList (scm:string->symbol "bind")) (Data.NonEmpty.NonEmpty-value1 v0)) (scm:lambda (x3)
            (scm:let ([_4 (f1 x3)])
              (scm:cons (Data.NonEmpty.NonEmpty-value0 _4) (Data.NonEmpty.NonEmpty-value1 _4)))))) (Data.NonEmpty.NonEmpty-value1 v12))))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
      applyNonEmptyList))))

  (scm:define applicativeList
    (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (a0)
      (scm:cons a0 (scm:quote ())))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
      applyList))))

  (scm:define monadList
    (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
      applicativeList)) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
      bindList))))

  (scm:define altNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "alt") (rt:record-ref semigroupNonEmptyList (scm:string->symbol "append"))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorNonEmptyList))))

  (scm:define altList
    (scm:list (scm:cons (scm:string->symbol "alt") (rt:record-ref semigroupList (scm:string->symbol "append"))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorList))))

  (scm:define plusList
    (scm:list (scm:cons (scm:string->symbol "empty") (scm:quote ())) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
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
    (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (x0)
      (Data.NonEmpty.NonEmpty* x0 (scm:quote ())))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
      applyNonEmptyList))))

  (scm:define monadNonEmptyList
    (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
      applicativeNonEmptyList)) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
      bindNonEmptyList))))

  (rt:define-lazy $lazy-traversable1NonEmptyList "traversable1NonEmptyList" "Data.List.Types"
    (scm:list (scm:cons (scm:string->symbol "traverse1") (scm:lambda (dictApply0)
      (scm:let ([Functor01 ((rt:record-ref dictApply0 (scm:string->symbol "Functor0")) (scm:quote undefined))])
        (scm:lambda (f2)
          (scm:lambda (v3)
            (((rt:record-ref Functor01 (scm:string->symbol "map")) (scm:lambda (v14)
              (scm:letrec ([go5 (scm:lambda (b6)
                (scm:lambda (v7)
                  (scm:cond
                    [(scm:null? v7) b6]
                    [(scm:pair? v7) ((go5 (Data.NonEmpty.NonEmpty* (scm:car v7) (scm:cons (Data.NonEmpty.NonEmpty-value0 b6) (Data.NonEmpty.NonEmpty-value1 b6)))) (scm:cdr v7))]
                    [scm:else (rt:fail)])))])
                ((go5 (Data.NonEmpty.NonEmpty* (Data.NonEmpty.NonEmpty-value0 v14) (scm:quote ()))) (Data.NonEmpty.NonEmpty-value1 v14))))) (scm:letrec ([go4 (scm:lambda (b5)
              (scm:lambda (v6)
                (scm:cond
                  [(scm:null? v6) b5]
                  [(scm:pair? v6) ((go4 (((rt:record-ref dictApply0 (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref dictApply0 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (b7)
                    (scm:lambda (a8)
                      (Data.NonEmpty.NonEmpty* a8 (scm:cons (Data.NonEmpty.NonEmpty-value0 b7) (Data.NonEmpty.NonEmpty-value1 b7)))))) b5)) (f2 (scm:car v6)))) (scm:cdr v6))]
                  [scm:else (rt:fail)])))])
              ((go4 (((rt:record-ref Functor01 (scm:string->symbol "map")) (rt:record-ref applicativeNonEmptyList (scm:string->symbol "pure"))) (f2 (Data.NonEmpty.NonEmpty-value0 v3)))) (Data.NonEmpty.NonEmpty-value1 v3))))))))) (scm:cons (scm:string->symbol "sequence1") (scm:lambda (dictApply0)
      (((rt:record-ref ($lazy-traversable1NonEmptyList) (scm:string->symbol "traverse1")) dictApply0) identity))) (scm:cons (scm:string->symbol "Foldable10") (scm:lambda (_)
      foldable1NonEmptyList)) (scm:cons (scm:string->symbol "Traversable1") (scm:lambda (_)
      traversableNonEmptyList))))

  (scm:define traversable1NonEmptyList
    ($lazy-traversable1NonEmptyList)))
