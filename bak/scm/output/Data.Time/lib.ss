#!r6rs
#!chezscheme
(library
  (Data.Time lib)
  (export
    Time
    Time*
    Time-value0
    Time-value1
    Time-value2
    Time-value3
    Time?
    adjust
    boundedTime
    diff
    eqTime
    hour
    maxTime
    millisToTime
    millisecond
    minTime
    minute
    ordTime
    second
    setHour
    setMillisecond
    setMinute
    setSecond
    showTime
    timeToMillis)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Int lib) Data.Int.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Number lib) Data.Number.)
    (prefix (Data.Ord lib) Data.Ord.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (prefix (Data.Show lib) Data.Show.)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define-record-type (Time$ Time* Time?)
    (scm:fields (scm:immutable value0 Time-value0) (scm:immutable value1 Time-value1) (scm:immutable value2 Time-value2) (scm:immutable value3 Time-value3)))

  (scm:define Time
    (scm:lambda (value0)
      (scm:lambda (value1)
        (scm:lambda (value2)
          (scm:lambda (value3)
            (Time* value0 value1 value2 value3))))))

  (scm:define showTime
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Time (Hour ") (Data.Show.showIntImpl (Time-value0 v0))) (rt:string->pstring ") (Minute ")) (Data.Show.showIntImpl (Time-value1 v0))) (rt:string->pstring ") (Second ")) (Data.Show.showIntImpl (Time-value2 v0))) (rt:string->pstring ") (Millisecond ")) (Data.Show.showIntImpl (Time-value3 v0))) (rt:string->pstring "))"))))))

  (scm:define setSecond
    (scm:lambda (s0)
      (scm:lambda (v1)
        (Time* (Time-value0 v1) (Time-value1 v1) s0 (Time-value3 v1)))))

  (scm:define setMinute
    (scm:lambda (m0)
      (scm:lambda (v1)
        (Time* (Time-value0 v1) m0 (Time-value2 v1) (Time-value3 v1)))))

  (scm:define setMillisecond
    (scm:lambda (ms0)
      (scm:lambda (v1)
        (Time* (Time-value0 v1) (Time-value1 v1) (Time-value2 v1) ms0))))

  (scm:define setHour
    (scm:lambda (h0)
      (scm:lambda (v1)
        (Time* h0 (Time-value1 v1) (Time-value2 v1) (Time-value3 v1)))))

  (scm:define second
    (scm:lambda (v0)
      (Time-value2 v0)))

  (scm:define minute
    (scm:lambda (v0)
      (Time-value1 v0)))

  (scm:define millisecond
    (scm:lambda (v0)
      (Time-value3 v0)))

  (scm:define millisToTime
    (scm:lambda (v0)
      (scm:let*
        ([hours1 (Data.Number.floor (scm:fl/ v0 3600000.0))]
         [minutes2 (Data.Number.floor (scm:fl/ (scm:fl- v0 (scm:fl* hours1 3600000.0)) 60000.0))]
         [seconds3 (Data.Number.floor (scm:fl/ (scm:fl- v0 (scm:fl+ (scm:fl* hours1 3600000.0) (scm:fl* minutes2 60000.0))) 1000.0))]
         [_4 (Data.Int.unsafeClamp (Data.Number.floor hours1))]
         [_5 (scm:cond
          [(scm:and (scm:fx>=? _4 0) (scm:fx<=? _4 23)) (Data.Maybe.Just _4)]
          [scm:else Data.Maybe.Nothing])])
          (scm:cond
            [(Data.Maybe.Just? _5) (scm:let ([_6 (Data.Int.unsafeClamp (Data.Number.floor minutes2))])
              (scm:cond
                [(scm:and (scm:fx>=? _6 0) (scm:fx<=? _6 59)) (scm:let ([_7 (Data.Int.unsafeClamp (Data.Number.floor seconds3))])
                  (scm:cond
                    [(scm:and (scm:fx>=? _7 0) (scm:fx<=? _7 59)) (scm:let ([_8 (Data.Int.unsafeClamp (Data.Number.floor (scm:fl- v0 (scm:fl+ (scm:fl+ (scm:fl* hours1 3600000.0) (scm:fl* minutes2 60000.0)) (scm:fl* seconds3 1000.0)))))])
                      (scm:cond
                        [(scm:and (scm:fx>=? _8 0) (scm:fx<=? _8 999)) (Time* (Data.Maybe.Just-value0 _5) _6 _7 _8)]
                        [scm:else (rt:fail)]))]
                    [scm:else (scm:let ([_8 (Data.Int.unsafeClamp (Data.Number.floor (scm:fl- v0 (scm:fl+ (scm:fl+ (scm:fl* hours1 3600000.0) (scm:fl* minutes2 60000.0)) (scm:fl* seconds3 1000.0)))))])
                      (scm:cond
                        [(scm:and (scm:fx>=? _8 0) (scm:fx<=? _8 999)) (rt:fail)]
                        [scm:else (rt:fail)]))]))]
                [scm:else (scm:let ([_7 (Data.Int.unsafeClamp (Data.Number.floor seconds3))])
                  (scm:cond
                    [(scm:and (scm:fx>=? _7 0) (scm:fx<=? _7 59)) (scm:let ([_8 (Data.Int.unsafeClamp (Data.Number.floor (scm:fl- v0 (scm:fl+ (scm:fl+ (scm:fl* hours1 3600000.0) (scm:fl* minutes2 60000.0)) (scm:fl* seconds3 1000.0)))))])
                      (scm:cond
                        [(scm:and (scm:fx>=? _8 0) (scm:fx<=? _8 999)) (rt:fail)]
                        [scm:else (rt:fail)]))]
                    [scm:else (scm:let ([_8 (Data.Int.unsafeClamp (Data.Number.floor (scm:fl- v0 (scm:fl+ (scm:fl+ (scm:fl* hours1 3600000.0) (scm:fl* minutes2 60000.0)) (scm:fl* seconds3 1000.0)))))])
                      (scm:cond
                        [(scm:and (scm:fx>=? _8 0) (scm:fx<=? _8 999)) (rt:fail)]
                        [scm:else (rt:fail)]))]))]))]
            [scm:else (scm:let ([_6 (Data.Int.unsafeClamp (Data.Number.floor minutes2))])
              (scm:cond
                [(scm:and (scm:fx>=? _6 0) (scm:fx<=? _6 59)) (scm:let ([_7 (Data.Int.unsafeClamp (Data.Number.floor seconds3))])
                  (scm:cond
                    [(scm:and (scm:fx>=? _7 0) (scm:fx<=? _7 59)) (scm:let ([_8 (Data.Int.unsafeClamp (Data.Number.floor (scm:fl- v0 (scm:fl+ (scm:fl+ (scm:fl* hours1 3600000.0) (scm:fl* minutes2 60000.0)) (scm:fl* seconds3 1000.0)))))])
                      (scm:cond
                        [(scm:and (scm:fx>=? _8 0) (scm:fx<=? _8 999)) (rt:fail)]
                        [scm:else (rt:fail)]))]
                    [scm:else (scm:let ([_8 (Data.Int.unsafeClamp (Data.Number.floor (scm:fl- v0 (scm:fl+ (scm:fl+ (scm:fl* hours1 3600000.0) (scm:fl* minutes2 60000.0)) (scm:fl* seconds3 1000.0)))))])
                      (scm:cond
                        [(scm:and (scm:fx>=? _8 0) (scm:fx<=? _8 999)) (rt:fail)]
                        [scm:else (rt:fail)]))]))]
                [scm:else (scm:let ([_7 (Data.Int.unsafeClamp (Data.Number.floor seconds3))])
                  (scm:cond
                    [(scm:and (scm:fx>=? _7 0) (scm:fx<=? _7 59)) (scm:let ([_8 (Data.Int.unsafeClamp (Data.Number.floor (scm:fl- v0 (scm:fl+ (scm:fl+ (scm:fl* hours1 3600000.0) (scm:fl* minutes2 60000.0)) (scm:fl* seconds3 1000.0)))))])
                      (scm:cond
                        [(scm:and (scm:fx>=? _8 0) (scm:fx<=? _8 999)) (rt:fail)]
                        [scm:else (rt:fail)]))]
                    [scm:else (scm:let ([_8 (Data.Int.unsafeClamp (Data.Number.floor (scm:fl- v0 (scm:fl+ (scm:fl+ (scm:fl* hours1 3600000.0) (scm:fl* minutes2 60000.0)) (scm:fl* seconds3 1000.0)))))])
                      (scm:cond
                        [(scm:and (scm:fx>=? _8 0) (scm:fx<=? _8 999)) (rt:fail)]
                        [scm:else (rt:fail)]))]))]))]))))

  (scm:define hour
    (scm:lambda (v0)
      (Time-value0 v0)))

  (scm:define timeToMillis
    (scm:lambda (t0)
      (scm:fl+ (scm:fl+ (scm:fl+ (scm:fl* 3600000.0 (Data.Int.toNumber (Time-value0 t0))) (scm:fl* 60000.0 (Data.Int.toNumber (Time-value1 t0)))) (scm:fl* 1000.0 (Data.Int.toNumber (Time-value2 t0)))) (Data.Int.toNumber (Time-value3 t0)))))

  (scm:define eqTime
    (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:and (scm:and (scm:and (scm:fx=? (Time-value0 x0) (Time-value0 y1)) (scm:fx=? (Time-value1 x0) (Time-value1 y1))) (scm:fx=? (Time-value2 x0) (Time-value2 y1))) (scm:fx=? (Time-value3 x0) (Time-value3 y1))))))))

  (scm:define ordTime
    (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:let ([v2 (((rt:record-ref Data.Ord.ordInt (scm:string->symbol "compare")) (Time-value0 x0)) (Time-value0 y1))])
          (scm:cond
            [(Data.Ordering.LT? v2) Data.Ordering.LT]
            [(Data.Ordering.GT? v2) Data.Ordering.GT]
            [scm:else (scm:let ([v13 (((rt:record-ref Data.Ord.ordInt (scm:string->symbol "compare")) (Time-value1 x0)) (Time-value1 y1))])
              (scm:cond
                [(Data.Ordering.LT? v13) Data.Ordering.LT]
                [(Data.Ordering.GT? v13) Data.Ordering.GT]
                [scm:else (scm:let ([v24 (((rt:record-ref Data.Ord.ordInt (scm:string->symbol "compare")) (Time-value2 x0)) (Time-value2 y1))])
                  (scm:cond
                    [(Data.Ordering.LT? v24) Data.Ordering.LT]
                    [(Data.Ordering.GT? v24) Data.Ordering.GT]
                    [scm:else (((rt:record-ref Data.Ord.ordInt (scm:string->symbol "compare")) (Time-value3 x0)) (Time-value3 y1))]))]))]))))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
      eqTime))))

  (scm:define diff
    (scm:lambda (dictDuration0)
      (scm:lambda (t11)
        (scm:lambda (t22)
          ((rt:record-ref dictDuration0 (scm:string->symbol "toDuration")) (scm:fl+ (timeToMillis t11) (scm:fl- (timeToMillis t22))))))))

  (scm:define boundedTime
    (scm:list (scm:cons (scm:string->symbol "bottom") (Time* 0 0 0 0)) (scm:cons (scm:string->symbol "top") (Time* 23 59 59 999)) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      ordTime))))

  (scm:define maxTime
    (timeToMillis (Time* 23 59 59 999)))

  (scm:define minTime
    (timeToMillis (Time* 0 0 0 0)))

  (scm:define adjust
    (scm:lambda (dictDuration0)
      (scm:lambda (d1)
        (scm:lambda (t2)
          (scm:let*
            ([d$p3 ((rt:record-ref dictDuration0 (scm:string->symbol "fromDuration")) d1)]
             [wholeDays4 (Data.Number.floor (scm:fl/ d$p3 86400000.0))]
             [msAdjusted5 (scm:fl+ (scm:fl+ (timeToMillis t2) d$p3) (scm:fl- (scm:fl* wholeDays4 86400000.0)))]
             [wrap6 (scm:cond
              [(scm:fl>? msAdjusted5 maxTime) 1.0]
              [(scm:fl<? msAdjusted5 minTime) -1.0]
              [scm:else 0.0])])
              (Data.Tuple.Tuple* (scm:fl+ wholeDays4 wrap6) (millisToTime (scm:fl+ msAdjusted5 (scm:fl* 86400000.0 (scm:fl- wrap6)))))))))))
