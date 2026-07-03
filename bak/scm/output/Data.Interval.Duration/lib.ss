#!r6rs
#!chezscheme
(library
  (Data.Interval.Duration lib)
  (export
    Day
    Day?
    Duration
    Hour
    Hour?
    Minute
    Minute?
    Month
    Month?
    Second
    Second?
    Week
    Week?
    Year
    Year?
    compare
    day
    eq
    eqDuration
    eqDurationComponent
    hour
    millisecond
    minute
    monoidDuration
    month
    newtypeDuration
    ordDuration
    ordDurationComponent
    second
    semigroupDuration
    show
    showDuration
    showDurationComponent
    week
    year)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Eq lib) Data.Eq.)
    (prefix (Data.Map.Internal lib) Data.Map.Internal.)
    (prefix (Data.Ord lib) Data.Ord.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (prefix (Data.Semiring lib) Data.Semiring.)
    (prefix (Data.Show lib) Data.Show.))

  (scm:define Second
    (scm:quote Second))

  (scm:define Second?
    (scm:lambda (v)
      (scm:eq? (scm:quote Second) v)))

  (scm:define Minute
    (scm:quote Minute))

  (scm:define Minute?
    (scm:lambda (v)
      (scm:eq? (scm:quote Minute) v)))

  (scm:define Hour
    (scm:quote Hour))

  (scm:define Hour?
    (scm:lambda (v)
      (scm:eq? (scm:quote Hour) v)))

  (scm:define Day
    (scm:quote Day))

  (scm:define Day?
    (scm:lambda (v)
      (scm:eq? (scm:quote Day) v)))

  (scm:define Week
    (scm:quote Week))

  (scm:define Week?
    (scm:lambda (v)
      (scm:eq? (scm:quote Week) v)))

  (scm:define Month
    (scm:quote Month))

  (scm:define Month?
    (scm:lambda (v)
      (scm:eq? (scm:quote Month) v)))

  (scm:define Year
    (scm:quote Year))

  (scm:define Year?
    (scm:lambda (v)
      (scm:eq? (scm:quote Year) v)))

  (scm:define Duration
    (scm:lambda (x0)
      x0))

  (scm:define showDurationComponent
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (scm:cond
        [(Minute? v0) (rt:string->pstring "Minute")]
        [(Second? v0) (rt:string->pstring "Second")]
        [(Hour? v0) (rt:string->pstring "Hour")]
        [(Day? v0) (rt:string->pstring "Day")]
        [(Week? v0) (rt:string->pstring "Week")]
        [(Month? v0) (rt:string->pstring "Month")]
        [(Year? v0) (rt:string->pstring "Year")]
        [scm:else (rt:fail)])))))

  (scm:define show
    (rt:record-ref ((Data.Map.Internal.showMap showDurationComponent) Data.Show.showNumber) (scm:string->symbol "show")))

  (scm:define showDuration
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Duration ") (show v0)) (rt:string->pstring ")"))))))

  (scm:define newtypeDuration
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define eqDurationComponent
    (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:cond
          [(Second? x0) (Second? y1)]
          [(Minute? x0) (Minute? y1)]
          [(Hour? x0) (Hour? y1)]
          [(Day? x0) (Day? y1)]
          [(Week? x0) (Week? y1)]
          [(Month? x0) (Month? y1)]
          [scm:else (scm:and (Year? x0) (Year? y1))]))))))

  (scm:define eq
    (rt:record-ref ((Data.Map.Internal.eqMap eqDurationComponent) Data.Eq.eqNumber) (scm:string->symbol "eq")))

  (scm:define ordDurationComponent
    (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:cond
          [(Second? x0) (scm:cond
            [(Second? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(Second? y1) Data.Ordering.GT]
          [(Minute? x0) (scm:cond
            [(Minute? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(Minute? y1) Data.Ordering.GT]
          [(Hour? x0) (scm:cond
            [(Hour? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(Hour? y1) Data.Ordering.GT]
          [(Day? x0) (scm:cond
            [(Day? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(Day? y1) Data.Ordering.GT]
          [(Week? x0) (scm:cond
            [(Week? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(Week? y1) Data.Ordering.GT]
          [(Month? x0) (scm:cond
            [(Month? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(Month? y1) Data.Ordering.GT]
          [(scm:and (Year? x0) (Year? y1)) Data.Ordering.EQ]
          [scm:else (rt:fail)])))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
      eqDurationComponent))))

  (scm:define compare
    (rt:record-ref ((Data.Map.Internal.ordMap ordDurationComponent) Data.Ord.ordNumber) (scm:string->symbol "compare")))

  (scm:define semigroupDuration
    (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (v0)
      (scm:lambda (v11)
        (Data.Map.Internal.unsafeUnionWith (rt:record-ref ordDurationComponent (scm:string->symbol "compare")) Data.Semiring.numAdd v0 v11))))))

  (scm:define monoidDuration
    (scm:list (scm:cons (scm:string->symbol "mempty") Data.Map.Internal.Leaf) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
      semigroupDuration))))

  (scm:define eqDuration
    (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x0)
      (scm:lambda (y1)
        ((eq x0) y1))))))

  (scm:define ordDuration
    (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x0)
      (scm:lambda (y1)
        ((compare x0) y1)))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
      eqDuration))))

  (scm:define hour
    (scm:lambda (v0)
      (Data.Map.Internal.Node* 1 1 Hour v0 Data.Map.Internal.Leaf Data.Map.Internal.Leaf)))

  (scm:define millisecond
    (scm:lambda (x0)
      (Data.Map.Internal.Node* 1 1 Second (scm:fl/ x0 1000.0) Data.Map.Internal.Leaf Data.Map.Internal.Leaf)))

  (scm:define minute
    (scm:lambda (v0)
      (Data.Map.Internal.Node* 1 1 Minute v0 Data.Map.Internal.Leaf Data.Map.Internal.Leaf)))

  (scm:define month
    (scm:lambda (v0)
      (Data.Map.Internal.Node* 1 1 Month v0 Data.Map.Internal.Leaf Data.Map.Internal.Leaf)))

  (scm:define second
    (scm:lambda (v0)
      (Data.Map.Internal.Node* 1 1 Second v0 Data.Map.Internal.Leaf Data.Map.Internal.Leaf)))

  (scm:define week
    (scm:lambda (v0)
      (Data.Map.Internal.Node* 1 1 Week v0 Data.Map.Internal.Leaf Data.Map.Internal.Leaf)))

  (scm:define year
    (scm:lambda (v0)
      (Data.Map.Internal.Node* 1 1 Year v0 Data.Map.Internal.Leaf Data.Map.Internal.Leaf)))

  (scm:define day
    (scm:lambda (v0)
      (Data.Map.Internal.Node* 1 1 Day v0 Data.Map.Internal.Leaf Data.Map.Internal.Leaf))))
