#!r6rs
#!chezscheme
(library
  (Data.Interval lib)
  (export
    DurationEnd
    DurationEnd*
    DurationEnd-value0
    DurationEnd-value1
    DurationEnd?
    DurationOnly
    DurationOnly-value0
    DurationOnly?
    RecurringInterval
    RecurringInterval*
    RecurringInterval-value0
    RecurringInterval-value1
    RecurringInterval?
    StartDuration
    StartDuration*
    StartDuration-value0
    StartDuration-value1
    StartDuration?
    StartEnd
    StartEnd*
    StartEnd-value0
    StartEnd-value1
    StartEnd?
    bifoldableInterval
    bifoldableRecurringInterval
    bifunctorInterval
    bifunctorRecurringInterval
    bitraversableInterval
    bitraversableRecurringInterval
    compare
    eqInterval
    eqRecurringInterval
    extendInterval
    extendRecurringInterval
    foldableInterval
    foldableRecurringInterval
    functorInterval
    functorRecurringInterval
    ordInterval
    ordRecurringInterval
    over
    show
    showInterval
    showRecurringInterval
    traversableInterval
    traversableRecurringInterval)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Bifoldable lib) Data.Bifoldable.)
    (prefix (Data.Bitraversable lib) Data.Bitraversable.)
    (prefix (Data.Foldable lib) Data.Foldable.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Ord lib) Data.Ord.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (prefix (Data.Show lib) Data.Show.)
    (prefix (Data.Traversable lib) Data.Traversable.))

  (scm:define show
    (scm:lambda (v0)
      (scm:cond
        [(Data.Maybe.Just? v0) (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Just ") (Data.Show.showIntImpl (Data.Maybe.Just-value0 v0))) (rt:string->pstring ")"))]
        [(Data.Maybe.Nothing? v0) (rt:string->pstring "Nothing")]
        [scm:else (rt:fail)])))

  (scm:define compare
    (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:cond
          [(Data.Maybe.Nothing? x0) (scm:cond
            [(Data.Maybe.Nothing? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(Data.Maybe.Nothing? y1) Data.Ordering.GT]
          [(scm:and (Data.Maybe.Just? x0) (Data.Maybe.Just? y1)) (((rt:record-ref Data.Ord.ordInt (scm:string->symbol "compare")) (Data.Maybe.Just-value0 x0)) (Data.Maybe.Just-value0 y1))]
          [scm:else (rt:fail)]))))

  (scm:define-record-type (StartEnd$ StartEnd* StartEnd?)
    (scm:fields (scm:immutable value0 StartEnd-value0) (scm:immutable value1 StartEnd-value1)))

  (scm:define StartEnd
    (scm:lambda (value0)
      (scm:lambda (value1)
        (StartEnd* value0 value1))))

  (scm:define-record-type (DurationEnd$ DurationEnd* DurationEnd?)
    (scm:fields (scm:immutable value0 DurationEnd-value0) (scm:immutable value1 DurationEnd-value1)))

  (scm:define DurationEnd
    (scm:lambda (value0)
      (scm:lambda (value1)
        (DurationEnd* value0 value1))))

  (scm:define-record-type (StartDuration$ StartDuration* StartDuration?)
    (scm:fields (scm:immutable value0 StartDuration-value0) (scm:immutable value1 StartDuration-value1)))

  (scm:define StartDuration
    (scm:lambda (value0)
      (scm:lambda (value1)
        (StartDuration* value0 value1))))

  (scm:define-record-type (DurationOnly$ DurationOnly DurationOnly?)
    (scm:fields (scm:immutable value0 DurationOnly-value0)))

  (scm:define-record-type (RecurringInterval$ RecurringInterval* RecurringInterval?)
    (scm:fields (scm:immutable value0 RecurringInterval-value0) (scm:immutable value1 RecurringInterval-value1)))

  (scm:define RecurringInterval
    (scm:lambda (value0)
      (scm:lambda (value1)
        (RecurringInterval* value0 value1))))

  (scm:define showInterval
    (scm:lambda (dictShow0)
      (scm:lambda (dictShow11)
        (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v2)
          (scm:cond
            [(StartEnd? v2) (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(StartEnd ") ((rt:record-ref dictShow11 (scm:string->symbol "show")) (StartEnd-value0 v2))) (rt:string->pstring " ")) ((rt:record-ref dictShow11 (scm:string->symbol "show")) (StartEnd-value1 v2))) (rt:string->pstring ")"))]
            [(DurationEnd? v2) (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(DurationEnd ") ((rt:record-ref dictShow0 (scm:string->symbol "show")) (DurationEnd-value0 v2))) (rt:string->pstring " ")) ((rt:record-ref dictShow11 (scm:string->symbol "show")) (DurationEnd-value1 v2))) (rt:string->pstring ")"))]
            [(StartDuration? v2) (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(StartDuration ") ((rt:record-ref dictShow11 (scm:string->symbol "show")) (StartDuration-value0 v2))) (rt:string->pstring " ")) ((rt:record-ref dictShow0 (scm:string->symbol "show")) (StartDuration-value1 v2))) (rt:string->pstring ")"))]
            [(DurationOnly? v2) (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(DurationOnly ") ((rt:record-ref dictShow0 (scm:string->symbol "show")) (DurationOnly-value0 v2))) (rt:string->pstring ")"))]
            [scm:else (rt:fail)])))))))

  (scm:define showRecurringInterval
    (scm:lambda (dictShow0)
      (scm:lambda (dictShow11)
        (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v2)
          (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(RecurringInterval ") (show (RecurringInterval-value0 v2))) (rt:string->pstring " ")) ((rt:record-ref ((showInterval dictShow0) dictShow11) (scm:string->symbol "show")) (RecurringInterval-value1 v2))) (rt:string->pstring ")"))))))))

  (scm:define over
    (scm:lambda (dictFunctor0)
      (scm:lambda (f1)
        (scm:lambda (v2)
          (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (RecurringInterval (RecurringInterval-value0 v2))) (f1 (RecurringInterval-value1 v2)))))))

  (rt:define-lazy $lazy-foldableInterval "foldableInterval" "Data.Interval"
    (scm:list (scm:cons (scm:string->symbol "foldl") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:lambda (v22)
          (scm:cond
            [(StartEnd? v22) ((v0 ((v0 v11) (StartEnd-value0 v22))) (StartEnd-value1 v22))]
            [(DurationEnd? v22) ((v0 v11) (DurationEnd-value1 v22))]
            [(StartDuration? v22) ((v0 v11) (StartDuration-value0 v22))]
            [scm:else v11]))))) (scm:cons (scm:string->symbol "foldr") (scm:lambda (x0)
      ((Data.Foldable.foldrDefault ($lazy-foldableInterval)) x0))) (scm:cons (scm:string->symbol "foldMap") (scm:lambda (dictMonoid0)
      (scm:let ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))])
        (scm:lambda (f2)
          (((rt:record-ref ($lazy-foldableInterval) (scm:string->symbol "foldl")) (scm:lambda (acc3)
            (scm:lambda (x4)
              (((rt:record-ref ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined)) (scm:string->symbol "append")) acc3) (f2 x4))))) mempty1)))))))

  (scm:define foldableInterval
    ($lazy-foldableInterval))

  (rt:define-lazy $lazy-foldableRecurringInterval "foldableRecurringInterval" "Data.Interval"
    (scm:list (scm:cons (scm:string->symbol "foldl") (scm:lambda (f0)
      (scm:lambda (i1)
        (scm:lambda (x2)
          (scm:cond
            [(StartEnd? (RecurringInterval-value1 x2)) ((f0 ((f0 i1) (StartEnd-value0 (RecurringInterval-value1 x2)))) (StartEnd-value1 (RecurringInterval-value1 x2)))]
            [(DurationEnd? (RecurringInterval-value1 x2)) ((f0 i1) (DurationEnd-value1 (RecurringInterval-value1 x2)))]
            [(StartDuration? (RecurringInterval-value1 x2)) ((f0 i1) (StartDuration-value0 (RecurringInterval-value1 x2)))]
            [scm:else i1]))))) (scm:cons (scm:string->symbol "foldr") (scm:lambda (f0)
      (scm:lambda (i1)
        (scm:let ([_2 (((Data.Foldable.foldrDefault foldableInterval) f0) i1)])
          (scm:lambda (x3)
            (_2 (RecurringInterval-value1 x3))))))) (scm:cons (scm:string->symbol "foldMap") (scm:lambda (dictMonoid0)
      (scm:let ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))])
        (scm:lambda (f2)
          (((rt:record-ref ($lazy-foldableRecurringInterval) (scm:string->symbol "foldl")) (scm:lambda (acc3)
            (scm:lambda (x4)
              (((rt:record-ref ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined)) (scm:string->symbol "append")) acc3) (f2 x4))))) mempty1)))))))

  (scm:define foldableRecurringInterval
    ($lazy-foldableRecurringInterval))

  (scm:define eqInterval
    (scm:lambda (dictEq0)
      (scm:lambda (dictEq11)
        (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x2)
          (scm:lambda (y3)
            (scm:cond
              [(StartEnd? x2) (scm:and (StartEnd? y3) (scm:and (((rt:record-ref dictEq11 (scm:string->symbol "eq")) (StartEnd-value0 x2)) (StartEnd-value0 y3)) (((rt:record-ref dictEq11 (scm:string->symbol "eq")) (StartEnd-value1 x2)) (StartEnd-value1 y3))))]
              [(DurationEnd? x2) (scm:and (DurationEnd? y3) (scm:and (((rt:record-ref dictEq0 (scm:string->symbol "eq")) (DurationEnd-value0 x2)) (DurationEnd-value0 y3)) (((rt:record-ref dictEq11 (scm:string->symbol "eq")) (DurationEnd-value1 x2)) (DurationEnd-value1 y3))))]
              [(StartDuration? x2) (scm:and (StartDuration? y3) (scm:and (((rt:record-ref dictEq11 (scm:string->symbol "eq")) (StartDuration-value0 x2)) (StartDuration-value0 y3)) (((rt:record-ref dictEq0 (scm:string->symbol "eq")) (StartDuration-value1 x2)) (StartDuration-value1 y3))))]
              [scm:else (scm:and (DurationOnly? x2) (scm:and (DurationOnly? y3) (((rt:record-ref dictEq0 (scm:string->symbol "eq")) (DurationOnly-value0 x2)) (DurationOnly-value0 y3))))]))))))))

  (scm:define eqRecurringInterval
    (scm:lambda (dictEq0)
      (scm:lambda (dictEq11)
        (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x2)
          (scm:lambda (y3)
            (scm:and (scm:cond
              [(Data.Maybe.Nothing? (RecurringInterval-value0 x2)) (Data.Maybe.Nothing? (RecurringInterval-value0 y3))]
              [scm:else (scm:and (Data.Maybe.Just? (RecurringInterval-value0 x2)) (scm:and (Data.Maybe.Just? (RecurringInterval-value0 y3)) (scm:fx=? (Data.Maybe.Just-value0 (RecurringInterval-value0 x2)) (Data.Maybe.Just-value0 (RecurringInterval-value0 y3)))))]) (((rt:record-ref ((eqInterval dictEq0) dictEq11) (scm:string->symbol "eq")) (RecurringInterval-value1 x2)) (RecurringInterval-value1 y3))))))))))

  (scm:define ordInterval
    (scm:lambda (dictOrd0)
      (scm:let ([eqInterval11 (eqInterval ((rt:record-ref dictOrd0 (scm:string->symbol "Eq0")) (scm:quote undefined)))])
        (scm:lambda (dictOrd12)
          (scm:let ([eqInterval23 (eqInterval11 ((rt:record-ref dictOrd12 (scm:string->symbol "Eq0")) (scm:quote undefined)))])
            (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x4)
              (scm:lambda (y5)
                (scm:cond
                  [(StartEnd? x4) (scm:cond
                    [(StartEnd? y5) (scm:let ([v6 (((rt:record-ref dictOrd12 (scm:string->symbol "compare")) (StartEnd-value0 x4)) (StartEnd-value0 y5))])
                      (scm:cond
                        [(Data.Ordering.LT? v6) Data.Ordering.LT]
                        [(Data.Ordering.GT? v6) Data.Ordering.GT]
                        [scm:else (((rt:record-ref dictOrd12 (scm:string->symbol "compare")) (StartEnd-value1 x4)) (StartEnd-value1 y5))]))]
                    [scm:else Data.Ordering.LT])]
                  [(StartEnd? y5) Data.Ordering.GT]
                  [(DurationEnd? x4) (scm:cond
                    [(DurationEnd? y5) (scm:let ([v6 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) (DurationEnd-value0 x4)) (DurationEnd-value0 y5))])
                      (scm:cond
                        [(Data.Ordering.LT? v6) Data.Ordering.LT]
                        [(Data.Ordering.GT? v6) Data.Ordering.GT]
                        [scm:else (((rt:record-ref dictOrd12 (scm:string->symbol "compare")) (DurationEnd-value1 x4)) (DurationEnd-value1 y5))]))]
                    [scm:else Data.Ordering.LT])]
                  [(DurationEnd? y5) Data.Ordering.GT]
                  [(StartDuration? x4) (scm:cond
                    [(StartDuration? y5) (scm:let ([v6 (((rt:record-ref dictOrd12 (scm:string->symbol "compare")) (StartDuration-value0 x4)) (StartDuration-value0 y5))])
                      (scm:cond
                        [(Data.Ordering.LT? v6) Data.Ordering.LT]
                        [(Data.Ordering.GT? v6) Data.Ordering.GT]
                        [scm:else (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) (StartDuration-value1 x4)) (StartDuration-value1 y5))]))]
                    [scm:else Data.Ordering.LT])]
                  [(StartDuration? y5) Data.Ordering.GT]
                  [(scm:and (DurationOnly? x4) (DurationOnly? y5)) (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) (DurationOnly-value0 x4)) (DurationOnly-value0 y5))]
                  [scm:else (rt:fail)])))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
              eqInterval23))))))))

  (scm:define ordRecurringInterval
    (scm:lambda (dictOrd0)
      (scm:let*
        ([ordInterval11 (ordInterval dictOrd0)]
         [eqRecurringInterval12 (eqRecurringInterval ((rt:record-ref dictOrd0 (scm:string->symbol "Eq0")) (scm:quote undefined)))])
          (scm:lambda (dictOrd13)
            (scm:let ([eqRecurringInterval24 (eqRecurringInterval12 ((rt:record-ref dictOrd13 (scm:string->symbol "Eq0")) (scm:quote undefined)))])
              (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x5)
                (scm:lambda (y6)
                  (scm:let ([v7 ((compare (RecurringInterval-value0 x5)) (RecurringInterval-value0 y6))])
                    (scm:cond
                      [(Data.Ordering.LT? v7) Data.Ordering.LT]
                      [(Data.Ordering.GT? v7) Data.Ordering.GT]
                      [scm:else (((rt:record-ref (ordInterval11 dictOrd13) (scm:string->symbol "compare")) (RecurringInterval-value1 x5)) (RecurringInterval-value1 y6))]))))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
                eqRecurringInterval24))))))))

  (scm:define bifunctorInterval
    (scm:list (scm:cons (scm:string->symbol "bimap") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:lambda (v22)
          (scm:cond
            [(StartEnd? v22) (StartEnd* (v11 (StartEnd-value0 v22)) (v11 (StartEnd-value1 v22)))]
            [(DurationEnd? v22) (DurationEnd* (v0 (DurationEnd-value0 v22)) (v11 (DurationEnd-value1 v22)))]
            [(StartDuration? v22) (StartDuration* (v11 (StartDuration-value0 v22)) (v0 (StartDuration-value1 v22)))]
            [(DurationOnly? v22) (DurationOnly (v0 (DurationOnly-value0 v22)))]
            [scm:else (rt:fail)])))))))

  (scm:define bifunctorRecurringInterval
    (scm:list (scm:cons (scm:string->symbol "bimap") (scm:lambda (f0)
      (scm:lambda (g1)
        (scm:lambda (v2)
          (RecurringInterval* (RecurringInterval-value0 v2) (scm:cond
            [(StartEnd? (RecurringInterval-value1 v2)) (StartEnd* (g1 (StartEnd-value0 (RecurringInterval-value1 v2))) (g1 (StartEnd-value1 (RecurringInterval-value1 v2))))]
            [(DurationEnd? (RecurringInterval-value1 v2)) (DurationEnd* (f0 (DurationEnd-value0 (RecurringInterval-value1 v2))) (g1 (DurationEnd-value1 (RecurringInterval-value1 v2))))]
            [(StartDuration? (RecurringInterval-value1 v2)) (StartDuration* (g1 (StartDuration-value0 (RecurringInterval-value1 v2))) (f0 (StartDuration-value1 (RecurringInterval-value1 v2))))]
            [(DurationOnly? (RecurringInterval-value1 v2)) (DurationOnly (f0 (DurationOnly-value0 (RecurringInterval-value1 v2))))]
            [scm:else (rt:fail)]))))))))

  (scm:define functorInterval
    (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (v10)
      (scm:lambda (v21)
        (scm:cond
          [(StartEnd? v21) (StartEnd* (v10 (StartEnd-value0 v21)) (v10 (StartEnd-value1 v21)))]
          [(DurationEnd? v21) (DurationEnd* (DurationEnd-value0 v21) (v10 (DurationEnd-value1 v21)))]
          [(StartDuration? v21) (StartDuration* (v10 (StartDuration-value0 v21)) (StartDuration-value1 v21))]
          [(DurationOnly? v21) (DurationOnly (DurationOnly-value0 v21))]
          [scm:else (rt:fail)]))))))

  (scm:define extendInterval
    (scm:list (scm:cons (scm:string->symbol "extend") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:cond
          [(StartEnd? v11) (StartEnd* (v0 v11) (v0 v11))]
          [(DurationEnd? v11) (DurationEnd* (DurationEnd-value0 v11) (v0 v11))]
          [(StartDuration? v11) (StartDuration* (v0 v11) (StartDuration-value1 v11))]
          [(DurationOnly? v11) (DurationOnly (DurationOnly-value0 v11))]
          [scm:else (rt:fail)])))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorInterval))))

  (scm:define functorRecurringInterval
    (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f0)
      (scm:lambda (v1)
        (RecurringInterval* (RecurringInterval-value0 v1) (scm:cond
          [(StartEnd? (RecurringInterval-value1 v1)) (StartEnd* (f0 (StartEnd-value0 (RecurringInterval-value1 v1))) (f0 (StartEnd-value1 (RecurringInterval-value1 v1))))]
          [(DurationEnd? (RecurringInterval-value1 v1)) (DurationEnd* (DurationEnd-value0 (RecurringInterval-value1 v1)) (f0 (DurationEnd-value1 (RecurringInterval-value1 v1))))]
          [(StartDuration? (RecurringInterval-value1 v1)) (StartDuration* (f0 (StartDuration-value0 (RecurringInterval-value1 v1))) (StartDuration-value1 (RecurringInterval-value1 v1)))]
          [(DurationOnly? (RecurringInterval-value1 v1)) (DurationOnly (DurationOnly-value0 (RecurringInterval-value1 v1)))]
          [scm:else (rt:fail)])))))))

  (scm:define extendRecurringInterval
    (scm:list (scm:cons (scm:string->symbol "extend") (scm:lambda (f0)
      (scm:lambda (v1)
        (RecurringInterval* (RecurringInterval-value0 v1) (scm:let ([_2 (f0 v1)])
          (scm:cond
            [(StartEnd? (RecurringInterval-value1 v1)) (StartEnd* _2 _2)]
            [(DurationEnd? (RecurringInterval-value1 v1)) (DurationEnd* (DurationEnd-value0 (RecurringInterval-value1 v1)) _2)]
            [(StartDuration? (RecurringInterval-value1 v1)) (StartDuration* _2 (StartDuration-value1 (RecurringInterval-value1 v1)))]
            [(DurationOnly? (RecurringInterval-value1 v1)) (DurationOnly (DurationOnly-value0 (RecurringInterval-value1 v1)))]
            [scm:else (rt:fail)])))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorRecurringInterval))))

  (rt:define-lazy $lazy-traversableInterval "traversableInterval" "Data.Interval"
    (scm:list (scm:cons (scm:string->symbol "traverse") (scm:lambda (dictApplicative0)
      (scm:let*
        ([Apply01 ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined))]
         [Functor02 ((rt:record-ref Apply01 (scm:string->symbol "Functor0")) (scm:quote undefined))])
          (scm:lambda (v3)
            (scm:lambda (v14)
              (scm:cond
                [(StartEnd? v14) (((rt:record-ref Apply01 (scm:string->symbol "apply")) (((rt:record-ref Functor02 (scm:string->symbol "map")) StartEnd) (v3 (StartEnd-value0 v14)))) (v3 (StartEnd-value1 v14)))]
                [(DurationEnd? v14) (((rt:record-ref Functor02 (scm:string->symbol "map")) (DurationEnd (DurationEnd-value0 v14))) (v3 (DurationEnd-value1 v14)))]
                [(StartDuration? v14) (scm:let ([_5 (StartDuration-value1 v14)])
                  (((rt:record-ref Functor02 (scm:string->symbol "map")) (scm:lambda (v26)
                    (StartDuration* v26 _5))) (v3 (StartDuration-value0 v14))))]
                [(DurationOnly? v14) ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) (DurationOnly (DurationOnly-value0 v14)))]
                [scm:else (rt:fail)])))))) (scm:cons (scm:string->symbol "sequence") (scm:lambda (dictApplicative0)
      (((rt:record-ref ($lazy-traversableInterval) (scm:string->symbol "traverse")) dictApplicative0) Data.Traversable.identity))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorInterval)) (scm:cons (scm:string->symbol "Foldable1") (scm:lambda (_)
      foldableInterval))))

  (scm:define traversableInterval
    ($lazy-traversableInterval))

  (rt:define-lazy $lazy-traversableRecurringInterval "traversableRecurringInterval" "Data.Interval"
    (scm:list (scm:cons (scm:string->symbol "traverse") (scm:lambda (dictApplicative0)
      (scm:let*
        ([over11 (over ((rt:record-ref ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)))]
         [traverse12 ((rt:record-ref traversableInterval (scm:string->symbol "traverse")) dictApplicative0)])
          (scm:lambda (f3)
            (scm:lambda (i4)
              ((over11 (traverse12 f3)) i4)))))) (scm:cons (scm:string->symbol "sequence") (scm:lambda (dictApplicative0)
      (((rt:record-ref ($lazy-traversableRecurringInterval) (scm:string->symbol "traverse")) dictApplicative0) Data.Traversable.identity))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorRecurringInterval)) (scm:cons (scm:string->symbol "Foldable1") (scm:lambda (_)
      foldableRecurringInterval))))

  (scm:define traversableRecurringInterval
    ($lazy-traversableRecurringInterval))

  (rt:define-lazy $lazy-bifoldableInterval "bifoldableInterval" "Data.Interval"
    (scm:list (scm:cons (scm:string->symbol "bifoldl") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:lambda (v22)
          (scm:lambda (v33)
            (scm:cond
              [(StartEnd? v33) ((v11 ((v11 v22) (StartEnd-value0 v33))) (StartEnd-value1 v33))]
              [(DurationEnd? v33) ((v11 ((v0 v22) (DurationEnd-value0 v33))) (DurationEnd-value1 v33))]
              [(StartDuration? v33) ((v11 ((v0 v22) (StartDuration-value1 v33))) (StartDuration-value0 v33))]
              [(DurationOnly? v33) ((v0 v22) (DurationOnly-value0 v33))]
              [scm:else (rt:fail)])))))) (scm:cons (scm:string->symbol "bifoldr") (scm:lambda (x0)
      ((Data.Bifoldable.bifoldrDefault ($lazy-bifoldableInterval)) x0))) (scm:cons (scm:string->symbol "bifoldMap") (scm:lambda (dictMonoid0)
      (scm:let*
        ([_1 ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined))]
         [mempty2 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))])
          (scm:lambda (f3)
            (scm:lambda (g4)
              ((((rt:record-ref ($lazy-bifoldableInterval) (scm:string->symbol "bifoldl")) (scm:lambda (m5)
                (scm:lambda (a6)
                  (((rt:record-ref _1 (scm:string->symbol "append")) m5) (f3 a6))))) (scm:lambda (m5)
                (scm:lambda (b6)
                  (((rt:record-ref _1 (scm:string->symbol "append")) m5) (g4 b6))))) mempty2))))))))

  (scm:define bifoldableInterval
    ($lazy-bifoldableInterval))

  (rt:define-lazy $lazy-bifoldableRecurringInterval "bifoldableRecurringInterval" "Data.Interval"
    (scm:list (scm:cons (scm:string->symbol "bifoldl") (scm:lambda (f0)
      (scm:lambda (g1)
        (scm:lambda (i2)
          (scm:lambda (x3)
            (scm:cond
              [(StartEnd? (RecurringInterval-value1 x3)) ((g1 ((g1 i2) (StartEnd-value0 (RecurringInterval-value1 x3)))) (StartEnd-value1 (RecurringInterval-value1 x3)))]
              [(DurationEnd? (RecurringInterval-value1 x3)) ((g1 ((f0 i2) (DurationEnd-value0 (RecurringInterval-value1 x3)))) (DurationEnd-value1 (RecurringInterval-value1 x3)))]
              [(StartDuration? (RecurringInterval-value1 x3)) ((g1 ((f0 i2) (StartDuration-value1 (RecurringInterval-value1 x3)))) (StartDuration-value0 (RecurringInterval-value1 x3)))]
              [(DurationOnly? (RecurringInterval-value1 x3)) ((f0 i2) (DurationOnly-value0 (RecurringInterval-value1 x3)))]
              [scm:else (rt:fail)])))))) (scm:cons (scm:string->symbol "bifoldr") (scm:lambda (f0)
      (scm:lambda (g1)
        (scm:lambda (i2)
          (scm:let ([_3 ((((Data.Bifoldable.bifoldrDefault bifoldableInterval) f0) g1) i2)])
            (scm:lambda (x4)
              (_3 (RecurringInterval-value1 x4)))))))) (scm:cons (scm:string->symbol "bifoldMap") (scm:lambda (dictMonoid0)
      (scm:let*
        ([_1 ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined))]
         [mempty2 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))])
          (scm:lambda (f3)
            (scm:lambda (g4)
              ((((rt:record-ref ($lazy-bifoldableRecurringInterval) (scm:string->symbol "bifoldl")) (scm:lambda (m5)
                (scm:lambda (a6)
                  (((rt:record-ref _1 (scm:string->symbol "append")) m5) (f3 a6))))) (scm:lambda (m5)
                (scm:lambda (b6)
                  (((rt:record-ref _1 (scm:string->symbol "append")) m5) (g4 b6))))) mempty2))))))))

  (scm:define bifoldableRecurringInterval
    ($lazy-bifoldableRecurringInterval))

  (rt:define-lazy $lazy-bitraversableInterval "bitraversableInterval" "Data.Interval"
    (scm:list (scm:cons (scm:string->symbol "bitraverse") (scm:lambda (dictApplicative0)
      (scm:let*
        ([Apply01 ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined))]
         [_2 ((rt:record-ref Apply01 (scm:string->symbol "Functor0")) (scm:quote undefined))])
          (scm:lambda (v3)
            (scm:lambda (v14)
              (scm:lambda (v25)
                (scm:cond
                  [(StartEnd? v25) (((rt:record-ref Apply01 (scm:string->symbol "apply")) (((rt:record-ref _2 (scm:string->symbol "map")) StartEnd) (v14 (StartEnd-value0 v25)))) (v14 (StartEnd-value1 v25)))]
                  [(DurationEnd? v25) (((rt:record-ref Apply01 (scm:string->symbol "apply")) (((rt:record-ref _2 (scm:string->symbol "map")) DurationEnd) (v3 (DurationEnd-value0 v25)))) (v14 (DurationEnd-value1 v25)))]
                  [(StartDuration? v25) (((rt:record-ref Apply01 (scm:string->symbol "apply")) (((rt:record-ref _2 (scm:string->symbol "map")) StartDuration) (v14 (StartDuration-value0 v25)))) (v3 (StartDuration-value1 v25)))]
                  [(DurationOnly? v25) (((rt:record-ref _2 (scm:string->symbol "map")) DurationOnly) (v3 (DurationOnly-value0 v25)))]
                  [scm:else (rt:fail)]))))))) (scm:cons (scm:string->symbol "bisequence") (scm:lambda (dictApplicative0)
      ((((rt:record-ref ($lazy-bitraversableInterval) (scm:string->symbol "bitraverse")) dictApplicative0) Data.Bitraversable.identity) Data.Bitraversable.identity))) (scm:cons (scm:string->symbol "Bifunctor0") (scm:lambda (_)
      bifunctorInterval)) (scm:cons (scm:string->symbol "Bifoldable1") (scm:lambda (_)
      bifoldableInterval))))

  (scm:define bitraversableInterval
    ($lazy-bitraversableInterval))

  (rt:define-lazy $lazy-bitraversableRecurringInterval "bitraversableRecurringInterval" "Data.Interval"
    (scm:list (scm:cons (scm:string->symbol "bitraverse") (scm:lambda (dictApplicative0)
      (scm:let*
        ([over11 (over ((rt:record-ref ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)))]
         [bitraverse12 ((rt:record-ref bitraversableInterval (scm:string->symbol "bitraverse")) dictApplicative0)])
          (scm:lambda (l3)
            (scm:lambda (r4)
              (scm:lambda (i5)
                ((over11 ((bitraverse12 l3) r4)) i5))))))) (scm:cons (scm:string->symbol "bisequence") (scm:lambda (dictApplicative0)
      ((((rt:record-ref ($lazy-bitraversableRecurringInterval) (scm:string->symbol "bitraverse")) dictApplicative0) Data.Bitraversable.identity) Data.Bitraversable.identity))) (scm:cons (scm:string->symbol "Bifunctor0") (scm:lambda (_)
      bifunctorRecurringInterval)) (scm:cons (scm:string->symbol "Bifoldable1") (scm:lambda (_)
      bifoldableRecurringInterval))))

  (scm:define bitraversableRecurringInterval
    ($lazy-bitraversableRecurringInterval)))
