#!r6rs
#!chezscheme
(library
  (Data.Interval.Duration.Iso lib)
  (export
    ContainsNegativeValue
    ContainsNegativeValue-value0
    ContainsNegativeValue?
    InvalidFractionalUse
    InvalidFractionalUse-value0
    InvalidFractionalUse?
    InvalidWeekComponentUsage
    InvalidWeekComponentUsage?
    IsEmpty
    IsEmpty?
    checkEmptiness
    checkFractionalUse
    checkNegativeValues
    checkValidIsoDuration
    checkWeekUsage
    eqError
    eqIsoDuration
    fold
    foldMap1
    foldMap2
    lookup
    mkIsoDuration
    ordError
    ordIsoDuration
    prettyError
    showError
    showIsoDuration
    toUnfoldable
    unIsoDuration)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Either lib) Data.Either.)
    (prefix (Data.Foldable lib) Data.Foldable.)
    (prefix (Data.Interval.Duration lib) Data.Interval.Duration.)
    (prefix (Data.List lib) Data.List.)
    (prefix (Data.List.Types lib) Data.List.Types.)
    (prefix (Data.Map.Internal lib) Data.Map.Internal.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.NonEmpty lib) Data.NonEmpty.)
    (prefix (Data.Number lib) Data.Number.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define lookup
    (scm:lambda (k0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:cond
          [(Data.Map.Internal.Leaf? v2) Data.Maybe.Nothing]
          [(Data.Map.Internal.Node? v2) (scm:cond
            [(Data.Interval.Duration.Second? k0) (scm:cond
              [(Data.Interval.Duration.Second? (Data.Map.Internal.Node-value2 v2)) (Data.Maybe.Just (Data.Map.Internal.Node-value3 v2))]
              [scm:else (go1 (Data.Map.Internal.Node-value4 v2))])]
            [(Data.Interval.Duration.Second? (Data.Map.Internal.Node-value2 v2)) (go1 (Data.Map.Internal.Node-value5 v2))]
            [(Data.Interval.Duration.Minute? k0) (scm:cond
              [(Data.Interval.Duration.Minute? (Data.Map.Internal.Node-value2 v2)) (Data.Maybe.Just (Data.Map.Internal.Node-value3 v2))]
              [scm:else (go1 (Data.Map.Internal.Node-value4 v2))])]
            [(Data.Interval.Duration.Minute? (Data.Map.Internal.Node-value2 v2)) (go1 (Data.Map.Internal.Node-value5 v2))]
            [(Data.Interval.Duration.Hour? k0) (scm:cond
              [(Data.Interval.Duration.Hour? (Data.Map.Internal.Node-value2 v2)) (Data.Maybe.Just (Data.Map.Internal.Node-value3 v2))]
              [scm:else (go1 (Data.Map.Internal.Node-value4 v2))])]
            [(Data.Interval.Duration.Hour? (Data.Map.Internal.Node-value2 v2)) (go1 (Data.Map.Internal.Node-value5 v2))]
            [(Data.Interval.Duration.Day? k0) (scm:cond
              [(Data.Interval.Duration.Day? (Data.Map.Internal.Node-value2 v2)) (Data.Maybe.Just (Data.Map.Internal.Node-value3 v2))]
              [scm:else (go1 (Data.Map.Internal.Node-value4 v2))])]
            [(Data.Interval.Duration.Day? (Data.Map.Internal.Node-value2 v2)) (go1 (Data.Map.Internal.Node-value5 v2))]
            [(Data.Interval.Duration.Week? k0) (scm:cond
              [(Data.Interval.Duration.Week? (Data.Map.Internal.Node-value2 v2)) (Data.Maybe.Just (Data.Map.Internal.Node-value3 v2))]
              [scm:else (go1 (Data.Map.Internal.Node-value4 v2))])]
            [(Data.Interval.Duration.Week? (Data.Map.Internal.Node-value2 v2)) (go1 (Data.Map.Internal.Node-value5 v2))]
            [(Data.Interval.Duration.Month? k0) (scm:cond
              [(Data.Interval.Duration.Month? (Data.Map.Internal.Node-value2 v2)) (Data.Maybe.Just (Data.Map.Internal.Node-value3 v2))]
              [scm:else (go1 (Data.Map.Internal.Node-value4 v2))])]
            [(Data.Interval.Duration.Month? (Data.Map.Internal.Node-value2 v2)) (go1 (Data.Map.Internal.Node-value5 v2))]
            [(scm:and (Data.Interval.Duration.Year? k0) (Data.Interval.Duration.Year? (Data.Map.Internal.Node-value2 v2))) (Data.Maybe.Just (Data.Map.Internal.Node-value3 v2))]
            [scm:else (rt:fail)])]
          [scm:else (rt:fail)]))])
        go1)))

  (scm:define foldMap1
    ((rt:record-ref Data.List.Types.foldableList (scm:string->symbol "foldMap")) Data.List.Types.monoidList))

  (scm:define foldMap2
    ((rt:record-ref Data.List.Types.foldableList (scm:string->symbol "foldMap")) (scm:let ([semigroupAdditive10 (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:fl+ v0 v11)))))])
      (scm:list (scm:cons (scm:string->symbol "mempty") 0.0) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
        semigroupAdditive10))))))

  (scm:define fold
    (scm:let ([semigroupFn0 (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (f0)
      (scm:lambda (g1)
        (scm:lambda (x2)
          ((((rt:record-ref Data.List.Types.foldableList (scm:string->symbol "foldr")) rt:list-cons) (g1 x2)) (f0 x2)))))))])
      (((rt:record-ref Data.Foldable.foldableArray (scm:string->symbol "foldMap")) (scm:list (scm:cons (scm:string->symbol "mempty") (scm:lambda (v1)
        (scm:quote ()))) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
        semigroupFn0)))) Data.Foldable.identity)))

  (scm:define toUnfoldable
    (scm:lambda (x0)
      (scm:letrec ([go1 (scm:lambda (source2)
        (scm:lambda (memo3)
          (scm:let ([v4 (Data.Map.Internal.stepUnfoldr source2)])
            (scm:cond
              [(Data.Maybe.Nothing? v4) (scm:letrec ([go5 (scm:lambda (b6)
                (scm:lambda (v7)
                  (scm:cond
                    [(scm:null? v7) b6]
                    [(scm:pair? v7) ((go5 (scm:cons (scm:car v7) b6)) (scm:cdr v7))]
                    [scm:else (rt:fail)])))])
                ((go5 (scm:quote ())) memo3))]
              [(Data.Maybe.Just? v4) ((go1 (Data.Tuple.Tuple-value1 (Data.Maybe.Just-value0 v4))) (scm:cons (Data.Tuple.Tuple-value0 (Data.Maybe.Just-value0 v4)) memo3))]
              [scm:else (rt:fail)]))))])
        ((go1 (Data.Map.Internal.IterNode* x0 Data.Map.Internal.IterLeaf)) (scm:quote ())))))

  (scm:define IsEmpty
    (scm:quote IsEmpty))

  (scm:define IsEmpty?
    (scm:lambda (v)
      (scm:eq? (scm:quote IsEmpty) v)))

  (scm:define InvalidWeekComponentUsage
    (scm:quote InvalidWeekComponentUsage))

  (scm:define InvalidWeekComponentUsage?
    (scm:lambda (v)
      (scm:eq? (scm:quote InvalidWeekComponentUsage) v)))

  (scm:define-record-type (ContainsNegativeValue$ ContainsNegativeValue ContainsNegativeValue?)
    (scm:fields (scm:immutable value0 ContainsNegativeValue-value0)))

  (scm:define-record-type (InvalidFractionalUse$ InvalidFractionalUse InvalidFractionalUse?)
    (scm:fields (scm:immutable value0 InvalidFractionalUse-value0)))

  (scm:define unIsoDuration
    (scm:lambda (v0)
      v0))

  (scm:define showIsoDuration
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(IsoDuration (Duration ") (Data.Interval.Duration.show v0)) (rt:string->pstring "))"))))))

  (scm:define showError
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (scm:cond
        [(IsEmpty? v0) (rt:string->pstring "(IsEmpty)")]
        [(InvalidWeekComponentUsage? v0) (rt:string->pstring "(InvalidWeekComponentUsage)")]
        [(ContainsNegativeValue? v0) (scm:cond
          [(Data.Interval.Duration.Minute? (ContainsNegativeValue-value0 v0)) (rt:string->pstring "(ContainsNegativeValue Minute)")]
          [(Data.Interval.Duration.Second? (ContainsNegativeValue-value0 v0)) (rt:string->pstring "(ContainsNegativeValue Second)")]
          [(Data.Interval.Duration.Hour? (ContainsNegativeValue-value0 v0)) (rt:string->pstring "(ContainsNegativeValue Hour)")]
          [(Data.Interval.Duration.Day? (ContainsNegativeValue-value0 v0)) (rt:string->pstring "(ContainsNegativeValue Day)")]
          [(Data.Interval.Duration.Week? (ContainsNegativeValue-value0 v0)) (rt:string->pstring "(ContainsNegativeValue Week)")]
          [(Data.Interval.Duration.Month? (ContainsNegativeValue-value0 v0)) (rt:string->pstring "(ContainsNegativeValue Month)")]
          [(Data.Interval.Duration.Year? (ContainsNegativeValue-value0 v0)) (rt:string->pstring "(ContainsNegativeValue Year)")]
          [scm:else (rt:fail)])]
        [(InvalidFractionalUse? v0) (scm:cond
          [(Data.Interval.Duration.Minute? (InvalidFractionalUse-value0 v0)) (rt:string->pstring "(InvalidFractionalUse Minute)")]
          [(Data.Interval.Duration.Second? (InvalidFractionalUse-value0 v0)) (rt:string->pstring "(InvalidFractionalUse Second)")]
          [(Data.Interval.Duration.Hour? (InvalidFractionalUse-value0 v0)) (rt:string->pstring "(InvalidFractionalUse Hour)")]
          [(Data.Interval.Duration.Day? (InvalidFractionalUse-value0 v0)) (rt:string->pstring "(InvalidFractionalUse Day)")]
          [(Data.Interval.Duration.Week? (InvalidFractionalUse-value0 v0)) (rt:string->pstring "(InvalidFractionalUse Week)")]
          [(Data.Interval.Duration.Month? (InvalidFractionalUse-value0 v0)) (rt:string->pstring "(InvalidFractionalUse Month)")]
          [(Data.Interval.Duration.Year? (InvalidFractionalUse-value0 v0)) (rt:string->pstring "(InvalidFractionalUse Year)")]
          [scm:else (rt:fail)])]
        [scm:else (rt:fail)])))))

  (scm:define prettyError
    (scm:lambda (v0)
      (scm:cond
        [(IsEmpty? v0) (rt:string->pstring "Duration is empty (has no components)")]
        [(InvalidWeekComponentUsage? v0) (rt:string->pstring "Week component of Duration is used with other components")]
        [(ContainsNegativeValue? v0) (scm:cond
          [(Data.Interval.Duration.Minute? (ContainsNegativeValue-value0 v0)) (rt:string->pstring "Component `Minute` contains negative value")]
          [(Data.Interval.Duration.Second? (ContainsNegativeValue-value0 v0)) (rt:string->pstring "Component `Second` contains negative value")]
          [(Data.Interval.Duration.Hour? (ContainsNegativeValue-value0 v0)) (rt:string->pstring "Component `Hour` contains negative value")]
          [(Data.Interval.Duration.Day? (ContainsNegativeValue-value0 v0)) (rt:string->pstring "Component `Day` contains negative value")]
          [(Data.Interval.Duration.Week? (ContainsNegativeValue-value0 v0)) (rt:string->pstring "Component `Week` contains negative value")]
          [(Data.Interval.Duration.Month? (ContainsNegativeValue-value0 v0)) (rt:string->pstring "Component `Month` contains negative value")]
          [(Data.Interval.Duration.Year? (ContainsNegativeValue-value0 v0)) (rt:string->pstring "Component `Year` contains negative value")]
          [scm:else (rt:fail)])]
        [(InvalidFractionalUse? v0) (scm:cond
          [(Data.Interval.Duration.Minute? (InvalidFractionalUse-value0 v0)) (rt:string->pstring "Invalid usage of Fractional value at component `Minute`")]
          [(Data.Interval.Duration.Second? (InvalidFractionalUse-value0 v0)) (rt:string->pstring "Invalid usage of Fractional value at component `Second`")]
          [(Data.Interval.Duration.Hour? (InvalidFractionalUse-value0 v0)) (rt:string->pstring "Invalid usage of Fractional value at component `Hour`")]
          [(Data.Interval.Duration.Day? (InvalidFractionalUse-value0 v0)) (rt:string->pstring "Invalid usage of Fractional value at component `Day`")]
          [(Data.Interval.Duration.Week? (InvalidFractionalUse-value0 v0)) (rt:string->pstring "Invalid usage of Fractional value at component `Week`")]
          [(Data.Interval.Duration.Month? (InvalidFractionalUse-value0 v0)) (rt:string->pstring "Invalid usage of Fractional value at component `Month`")]
          [(Data.Interval.Duration.Year? (InvalidFractionalUse-value0 v0)) (rt:string->pstring "Invalid usage of Fractional value at component `Year`")]
          [scm:else (rt:fail)])]
        [scm:else (rt:fail)])))

  (scm:define eqIsoDuration
    (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x0)
      (scm:lambda (y1)
        ((Data.Interval.Duration.eq x0) y1))))))

  (scm:define ordIsoDuration
    (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x0)
      (scm:lambda (y1)
        ((Data.Interval.Duration.compare x0) y1)))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
      eqIsoDuration))))

  (scm:define eqError
    (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:cond
          [(IsEmpty? x0) (IsEmpty? y1)]
          [(InvalidWeekComponentUsage? x0) (InvalidWeekComponentUsage? y1)]
          [(ContainsNegativeValue? x0) (scm:and (ContainsNegativeValue? y1) (scm:cond
            [(Data.Interval.Duration.Second? (ContainsNegativeValue-value0 x0)) (Data.Interval.Duration.Second? (ContainsNegativeValue-value0 y1))]
            [(Data.Interval.Duration.Minute? (ContainsNegativeValue-value0 x0)) (Data.Interval.Duration.Minute? (ContainsNegativeValue-value0 y1))]
            [(Data.Interval.Duration.Hour? (ContainsNegativeValue-value0 x0)) (Data.Interval.Duration.Hour? (ContainsNegativeValue-value0 y1))]
            [(Data.Interval.Duration.Day? (ContainsNegativeValue-value0 x0)) (Data.Interval.Duration.Day? (ContainsNegativeValue-value0 y1))]
            [(Data.Interval.Duration.Week? (ContainsNegativeValue-value0 x0)) (Data.Interval.Duration.Week? (ContainsNegativeValue-value0 y1))]
            [(Data.Interval.Duration.Month? (ContainsNegativeValue-value0 x0)) (Data.Interval.Duration.Month? (ContainsNegativeValue-value0 y1))]
            [scm:else (scm:and (Data.Interval.Duration.Year? (ContainsNegativeValue-value0 x0)) (Data.Interval.Duration.Year? (ContainsNegativeValue-value0 y1)))]))]
          [scm:else (scm:and (InvalidFractionalUse? x0) (scm:and (InvalidFractionalUse? y1) (scm:cond
            [(Data.Interval.Duration.Second? (InvalidFractionalUse-value0 x0)) (Data.Interval.Duration.Second? (InvalidFractionalUse-value0 y1))]
            [(Data.Interval.Duration.Minute? (InvalidFractionalUse-value0 x0)) (Data.Interval.Duration.Minute? (InvalidFractionalUse-value0 y1))]
            [(Data.Interval.Duration.Hour? (InvalidFractionalUse-value0 x0)) (Data.Interval.Duration.Hour? (InvalidFractionalUse-value0 y1))]
            [(Data.Interval.Duration.Day? (InvalidFractionalUse-value0 x0)) (Data.Interval.Duration.Day? (InvalidFractionalUse-value0 y1))]
            [(Data.Interval.Duration.Week? (InvalidFractionalUse-value0 x0)) (Data.Interval.Duration.Week? (InvalidFractionalUse-value0 y1))]
            [(Data.Interval.Duration.Month? (InvalidFractionalUse-value0 x0)) (Data.Interval.Duration.Month? (InvalidFractionalUse-value0 y1))]
            [scm:else (scm:and (Data.Interval.Duration.Year? (InvalidFractionalUse-value0 x0)) (Data.Interval.Duration.Year? (InvalidFractionalUse-value0 y1)))])))]))))))

  (scm:define ordError
    (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:cond
          [(IsEmpty? x0) (scm:cond
            [(IsEmpty? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(IsEmpty? y1) Data.Ordering.GT]
          [(InvalidWeekComponentUsage? x0) (scm:cond
            [(InvalidWeekComponentUsage? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(InvalidWeekComponentUsage? y1) Data.Ordering.GT]
          [(ContainsNegativeValue? x0) (scm:cond
            [(ContainsNegativeValue? y1) (scm:cond
              [(Data.Interval.Duration.Second? (ContainsNegativeValue-value0 x0)) (scm:cond
                [(Data.Interval.Duration.Second? (ContainsNegativeValue-value0 y1)) Data.Ordering.EQ]
                [scm:else Data.Ordering.LT])]
              [(Data.Interval.Duration.Second? (ContainsNegativeValue-value0 y1)) Data.Ordering.GT]
              [(Data.Interval.Duration.Minute? (ContainsNegativeValue-value0 x0)) (scm:cond
                [(Data.Interval.Duration.Minute? (ContainsNegativeValue-value0 y1)) Data.Ordering.EQ]
                [scm:else Data.Ordering.LT])]
              [(Data.Interval.Duration.Minute? (ContainsNegativeValue-value0 y1)) Data.Ordering.GT]
              [(Data.Interval.Duration.Hour? (ContainsNegativeValue-value0 x0)) (scm:cond
                [(Data.Interval.Duration.Hour? (ContainsNegativeValue-value0 y1)) Data.Ordering.EQ]
                [scm:else Data.Ordering.LT])]
              [(Data.Interval.Duration.Hour? (ContainsNegativeValue-value0 y1)) Data.Ordering.GT]
              [(Data.Interval.Duration.Day? (ContainsNegativeValue-value0 x0)) (scm:cond
                [(Data.Interval.Duration.Day? (ContainsNegativeValue-value0 y1)) Data.Ordering.EQ]
                [scm:else Data.Ordering.LT])]
              [(Data.Interval.Duration.Day? (ContainsNegativeValue-value0 y1)) Data.Ordering.GT]
              [(Data.Interval.Duration.Week? (ContainsNegativeValue-value0 x0)) (scm:cond
                [(Data.Interval.Duration.Week? (ContainsNegativeValue-value0 y1)) Data.Ordering.EQ]
                [scm:else Data.Ordering.LT])]
              [(Data.Interval.Duration.Week? (ContainsNegativeValue-value0 y1)) Data.Ordering.GT]
              [(Data.Interval.Duration.Month? (ContainsNegativeValue-value0 x0)) (scm:cond
                [(Data.Interval.Duration.Month? (ContainsNegativeValue-value0 y1)) Data.Ordering.EQ]
                [scm:else Data.Ordering.LT])]
              [(Data.Interval.Duration.Month? (ContainsNegativeValue-value0 y1)) Data.Ordering.GT]
              [(scm:and (Data.Interval.Duration.Year? (ContainsNegativeValue-value0 x0)) (Data.Interval.Duration.Year? (ContainsNegativeValue-value0 y1))) Data.Ordering.EQ]
              [scm:else (rt:fail)])]
            [scm:else Data.Ordering.LT])]
          [(ContainsNegativeValue? y1) Data.Ordering.GT]
          [(scm:and (InvalidFractionalUse? x0) (InvalidFractionalUse? y1)) (scm:cond
            [(Data.Interval.Duration.Second? (InvalidFractionalUse-value0 x0)) (scm:cond
              [(Data.Interval.Duration.Second? (InvalidFractionalUse-value0 y1)) Data.Ordering.EQ]
              [scm:else Data.Ordering.LT])]
            [(Data.Interval.Duration.Second? (InvalidFractionalUse-value0 y1)) Data.Ordering.GT]
            [(Data.Interval.Duration.Minute? (InvalidFractionalUse-value0 x0)) (scm:cond
              [(Data.Interval.Duration.Minute? (InvalidFractionalUse-value0 y1)) Data.Ordering.EQ]
              [scm:else Data.Ordering.LT])]
            [(Data.Interval.Duration.Minute? (InvalidFractionalUse-value0 y1)) Data.Ordering.GT]
            [(Data.Interval.Duration.Hour? (InvalidFractionalUse-value0 x0)) (scm:cond
              [(Data.Interval.Duration.Hour? (InvalidFractionalUse-value0 y1)) Data.Ordering.EQ]
              [scm:else Data.Ordering.LT])]
            [(Data.Interval.Duration.Hour? (InvalidFractionalUse-value0 y1)) Data.Ordering.GT]
            [(Data.Interval.Duration.Day? (InvalidFractionalUse-value0 x0)) (scm:cond
              [(Data.Interval.Duration.Day? (InvalidFractionalUse-value0 y1)) Data.Ordering.EQ]
              [scm:else Data.Ordering.LT])]
            [(Data.Interval.Duration.Day? (InvalidFractionalUse-value0 y1)) Data.Ordering.GT]
            [(Data.Interval.Duration.Week? (InvalidFractionalUse-value0 x0)) (scm:cond
              [(Data.Interval.Duration.Week? (InvalidFractionalUse-value0 y1)) Data.Ordering.EQ]
              [scm:else Data.Ordering.LT])]
            [(Data.Interval.Duration.Week? (InvalidFractionalUse-value0 y1)) Data.Ordering.GT]
            [(Data.Interval.Duration.Month? (InvalidFractionalUse-value0 x0)) (scm:cond
              [(Data.Interval.Duration.Month? (InvalidFractionalUse-value0 y1)) Data.Ordering.EQ]
              [scm:else Data.Ordering.LT])]
            [(Data.Interval.Duration.Month? (InvalidFractionalUse-value0 y1)) Data.Ordering.GT]
            [(scm:and (Data.Interval.Duration.Year? (InvalidFractionalUse-value0 x0)) (Data.Interval.Duration.Year? (InvalidFractionalUse-value0 y1))) Data.Ordering.EQ]
            [scm:else (rt:fail)])]
          [scm:else (rt:fail)])))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
      eqError))))

  (scm:define checkWeekUsage
    (scm:lambda (v0)
      (scm:cond
        [(scm:let ([_1 ((lookup Data.Interval.Duration.Week) (rt:record-ref v0 (scm:string->symbol "asMap")))])
          (scm:and (scm:cond
            [(Data.Maybe.Nothing? _1) #f]
            [(Data.Maybe.Just? _1) #t]
            [scm:else (rt:fail)]) (scm:cond
            [(Data.Map.Internal.Leaf? (rt:record-ref v0 (scm:string->symbol "asMap"))) #f]
            [(Data.Map.Internal.Node? (rt:record-ref v0 (scm:string->symbol "asMap"))) (scm:fx>? (Data.Map.Internal.Node-value1 (rt:record-ref v0 (scm:string->symbol "asMap"))) 1)]
            [scm:else (rt:fail)]))) (scm:cons InvalidWeekComponentUsage (scm:quote ()))]
        [scm:else (scm:quote ())])))

  (scm:define checkNegativeValues
    (scm:lambda (v0)
      ((foldMap1 (scm:lambda (v11)
        (scm:cond
          [(scm:fl>=? (Data.Tuple.Tuple-value1 v11) 0.0) (scm:quote ())]
          [scm:else (scm:cons (ContainsNegativeValue (Data.Tuple.Tuple-value0 v11)) (scm:quote ()))]))) (rt:record-ref v0 (scm:string->symbol "asList")))))

  (scm:define checkFractionalUse
    (scm:lambda (v0)
      (scm:let ([_1 ((Data.List.span (scm:lambda (x1)
        (scm:fl=? (Data.Number.floor (Data.Tuple.Tuple-value1 x1)) (Data.Tuple.Tuple-value1 x1)))) (rt:record-ref v0 (scm:string->symbol "asList")))])
        (scm:cond
          [(scm:and (scm:pair? (rt:record-ref _1 (scm:string->symbol "rest"))) (scm:fl>? ((foldMap2 (scm:lambda (x2)
            (Data.Number.abs (Data.Tuple.Tuple-value1 x2)))) (scm:cdr (rt:record-ref _1 (scm:string->symbol "rest")))) 0.0)) (scm:cons (InvalidFractionalUse (Data.Tuple.Tuple-value0 (scm:car (rt:record-ref _1 (scm:string->symbol "rest"))))) (scm:quote ()))]
          [scm:else (scm:quote ())]))))

  (scm:define checkEmptiness
    (scm:lambda (v0)
      (scm:cond
        [(scm:null? (rt:record-ref v0 (scm:string->symbol "asList"))) (scm:cons IsEmpty (scm:quote ()))]
        [scm:else (scm:quote ())])))

  (scm:define checkValidIsoDuration
    (scm:lambda (v0)
      ((fold (rt:make-array checkWeekUsage checkEmptiness checkFractionalUse checkNegativeValues)) (scm:list (scm:cons (scm:string->symbol "asList") (scm:letrec ([go1 (scm:lambda (v2)
        (scm:lambda (v13)
          (scm:cond
            [(scm:null? v13) v2]
            [(scm:pair? v13) ((go1 (scm:cons (scm:car v13) v2)) (scm:cdr v13))]
            [scm:else (rt:fail)])))])
        ((go1 (scm:quote ())) (toUnfoldable v0)))) (scm:cons (scm:string->symbol "asMap") v0)))))

  (scm:define mkIsoDuration
    (scm:lambda (d0)
      (scm:let ([_1 (checkValidIsoDuration d0)])
        (scm:cond
          [(scm:null? _1) (Data.Either.Right d0)]
          [(scm:pair? _1) (Data.Either.Left (Data.NonEmpty.NonEmpty* (scm:car _1) (scm:cdr _1)))]
          [scm:else (rt:fail)])))))
