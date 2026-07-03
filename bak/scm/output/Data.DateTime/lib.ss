#!r6rs
#!chezscheme
(library
  (Data.DateTime lib)
  (export
    DateTime
    DateTime*
    DateTime-value0
    DateTime-value1
    DateTime?
    adjust
    adjustImpl
    boundedDateTime
    calcDiff
    date
    diff
    eqDateTime
    modifyDate
    modifyDateF
    modifyTime
    modifyTimeF
    ordDateTime
    showDateTime
    time
    toRecord)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Date lib) Data.Date.)
    (prefix (Data.Date.Component lib) Data.Date.Component.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (prefix (Data.Time lib) Data.Time.)
    (Data.DateTime foreign))

  (scm:define-record-type (DateTime$ DateTime* DateTime?)
    (scm:fields (scm:immutable value0 DateTime-value0) (scm:immutable value1 DateTime-value1)))

  (scm:define DateTime
    (scm:lambda (value0)
      (scm:lambda (value1)
        (DateTime* value0 value1))))

  (scm:define toRecord
    (scm:lambda (v0)
      (scm:list (scm:cons (scm:string->symbol "year") (Data.Date.Date-value0 (DateTime-value0 v0))) (scm:cons (scm:string->symbol "month") (scm:cond
        [(Data.Date.Component.January? (Data.Date.Date-value1 (DateTime-value0 v0))) 1]
        [(Data.Date.Component.February? (Data.Date.Date-value1 (DateTime-value0 v0))) 2]
        [(Data.Date.Component.March? (Data.Date.Date-value1 (DateTime-value0 v0))) 3]
        [(Data.Date.Component.April? (Data.Date.Date-value1 (DateTime-value0 v0))) 4]
        [(Data.Date.Component.May? (Data.Date.Date-value1 (DateTime-value0 v0))) 5]
        [(Data.Date.Component.June? (Data.Date.Date-value1 (DateTime-value0 v0))) 6]
        [(Data.Date.Component.July? (Data.Date.Date-value1 (DateTime-value0 v0))) 7]
        [(Data.Date.Component.August? (Data.Date.Date-value1 (DateTime-value0 v0))) 8]
        [(Data.Date.Component.September? (Data.Date.Date-value1 (DateTime-value0 v0))) 9]
        [(Data.Date.Component.October? (Data.Date.Date-value1 (DateTime-value0 v0))) 10]
        [(Data.Date.Component.November? (Data.Date.Date-value1 (DateTime-value0 v0))) 11]
        [(Data.Date.Component.December? (Data.Date.Date-value1 (DateTime-value0 v0))) 12]
        [scm:else (rt:fail)])) (scm:cons (scm:string->symbol "day") (Data.Date.Date-value2 (DateTime-value0 v0))) (scm:cons (scm:string->symbol "hour") (Data.Time.Time-value0 (DateTime-value1 v0))) (scm:cons (scm:string->symbol "minute") (Data.Time.Time-value1 (DateTime-value1 v0))) (scm:cons (scm:string->symbol "second") (Data.Time.Time-value2 (DateTime-value1 v0))) (scm:cons (scm:string->symbol "millisecond") (Data.Time.Time-value3 (DateTime-value1 v0))))))

  (scm:define time
    (scm:lambda (v0)
      (DateTime-value1 v0)))

  (scm:define showDateTime
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(DateTime ") ((rt:record-ref Data.Date.showDate (scm:string->symbol "show")) (DateTime-value0 v0))) (rt:string->pstring " ")) ((rt:record-ref Data.Time.showTime (scm:string->symbol "show")) (DateTime-value1 v0))) (rt:string->pstring ")"))))))

  (scm:define modifyTimeF
    (scm:lambda (dictFunctor0)
      (scm:lambda (f1)
        (scm:lambda (v2)
          (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (DateTime (DateTime-value0 v2))) (f1 (DateTime-value1 v2)))))))

  (scm:define modifyTime
    (scm:lambda (f0)
      (scm:lambda (v1)
        (DateTime* (DateTime-value0 v1) (f0 (DateTime-value1 v1))))))

  (scm:define modifyDateF
    (scm:lambda (dictFunctor0)
      (scm:lambda (f1)
        (scm:lambda (v2)
          (scm:let ([_3 (DateTime-value1 v2)])
            (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (scm:lambda (a4)
              (DateTime* a4 _3))) (f1 (DateTime-value0 v2))))))))

  (scm:define modifyDate
    (scm:lambda (f0)
      (scm:lambda (v1)
        (DateTime* (f0 (DateTime-value0 v1)) (DateTime-value1 v1)))))

  (scm:define eqDateTime
    (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:and (((rt:record-ref Data.Date.eqDate (scm:string->symbol "eq")) (DateTime-value0 x0)) (DateTime-value0 y1)) (scm:and (scm:and (scm:and (scm:fx=? (Data.Time.Time-value0 (DateTime-value1 x0)) (Data.Time.Time-value0 (DateTime-value1 y1))) (scm:fx=? (Data.Time.Time-value1 (DateTime-value1 x0)) (Data.Time.Time-value1 (DateTime-value1 y1)))) (scm:fx=? (Data.Time.Time-value2 (DateTime-value1 x0)) (Data.Time.Time-value2 (DateTime-value1 y1)))) (scm:fx=? (Data.Time.Time-value3 (DateTime-value1 x0)) (Data.Time.Time-value3 (DateTime-value1 y1))))))))))

  (scm:define ordDateTime
    (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:let ([v2 (((rt:record-ref Data.Date.ordDate (scm:string->symbol "compare")) (DateTime-value0 x0)) (DateTime-value0 y1))])
          (scm:cond
            [(Data.Ordering.LT? v2) Data.Ordering.LT]
            [(Data.Ordering.GT? v2) Data.Ordering.GT]
            [scm:else (((rt:record-ref Data.Time.ordTime (scm:string->symbol "compare")) (DateTime-value1 x0)) (DateTime-value1 y1))]))))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
      eqDateTime))))

  (scm:define diff
    (scm:lambda (dictDuration0)
      (scm:lambda (dt11)
        (scm:lambda (dt22)
          ((rt:record-ref dictDuration0 (scm:string->symbol "toDuration")) (calcDiff (toRecord dt11) (toRecord dt22)))))))

  (scm:define date
    (scm:lambda (v0)
      (DateTime-value0 v0)))

  (scm:define boundedDateTime
    (scm:list (scm:cons (scm:string->symbol "bottom") (DateTime* (Data.Date.Date* -271820 Data.Date.Component.January 1) (Data.Time.Time* 0 0 0 0))) (scm:cons (scm:string->symbol "top") (DateTime* (Data.Date.Date* 275759 Data.Date.Component.December 31) (Data.Time.Time* 23 59 59 999))) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      ordDateTime))))

  (scm:define adjust
    (scm:lambda (dictDuration0)
      (scm:lambda (d1)
        (scm:lambda (dt2)
          (scm:let ([_3 ((((adjustImpl Data.Maybe.Just) Data.Maybe.Nothing) ((rt:record-ref dictDuration0 (scm:string->symbol "fromDuration")) d1)) (toRecord dt2))])
            (scm:cond
              [(Data.Maybe.Just? _3) (scm:let*
                ([_4 (scm:cond
                  [(scm:and (scm:fx>=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "year")) -271820) (scm:fx<=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "year")) 275759)) (Data.Maybe.Just (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "year")))]
                  [scm:else Data.Maybe.Nothing])]
                 [_5 (scm:cond
                  [(Data.Maybe.Just? _4) (Data.Maybe.Just (Data.Date.exactDate (Data.Maybe.Just-value0 _4)))]
                  [scm:else Data.Maybe.Nothing])]
                 [_6 (scm:cond
                  [(scm:fx=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "month")) 1) (Data.Maybe.Just Data.Date.Component.January)]
                  [(scm:fx=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "month")) 2) (Data.Maybe.Just Data.Date.Component.February)]
                  [(scm:fx=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "month")) 3) (Data.Maybe.Just Data.Date.Component.March)]
                  [(scm:fx=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "month")) 4) (Data.Maybe.Just Data.Date.Component.April)]
                  [(scm:fx=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "month")) 5) (Data.Maybe.Just Data.Date.Component.May)]
                  [(scm:fx=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "month")) 6) (Data.Maybe.Just Data.Date.Component.June)]
                  [(scm:fx=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "month")) 7) (Data.Maybe.Just Data.Date.Component.July)]
                  [(scm:fx=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "month")) 8) (Data.Maybe.Just Data.Date.Component.August)]
                  [(scm:fx=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "month")) 9) (Data.Maybe.Just Data.Date.Component.September)]
                  [(scm:fx=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "month")) 10) (Data.Maybe.Just Data.Date.Component.October)]
                  [(scm:fx=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "month")) 11) (Data.Maybe.Just Data.Date.Component.November)]
                  [(scm:fx=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "month")) 12) (Data.Maybe.Just Data.Date.Component.December)]
                  [scm:else Data.Maybe.Nothing])]
                 [_7 (scm:cond
                  [(Data.Maybe.Just? _5) (scm:cond
                    [(Data.Maybe.Just? _6) (scm:cond
                      [(scm:and (scm:fx>=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "day")) 1) (scm:fx<=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "day")) 31)) (Data.Maybe.Just (((Data.Maybe.Just-value0 _5) (Data.Maybe.Just-value0 _6)) (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "day"))))]
                      [scm:else Data.Maybe.Nothing])]
                    [(scm:and (scm:fx>=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "day")) 1) (scm:fx<=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "day")) 31)) Data.Maybe.Nothing]
                    [scm:else Data.Maybe.Nothing])]
                  [(Data.Maybe.Nothing? _5) (scm:cond
                    [(scm:and (scm:fx>=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "day")) 1) (scm:fx<=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "day")) 31)) Data.Maybe.Nothing]
                    [scm:else Data.Maybe.Nothing])]
                  [(scm:and (scm:fx>=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "day")) 1) (scm:fx<=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "day")) 31)) (rt:fail)]
                  [scm:else (rt:fail)])]
                 [_8 (scm:cond
                  [(Data.Maybe.Just? _7) (Data.Maybe.Just-value0 _7)]
                  [(Data.Maybe.Nothing? _7) Data.Maybe.Nothing]
                  [scm:else (rt:fail)])]
                 [_9 (scm:cond
                  [(Data.Maybe.Just? _8) (Data.Maybe.Just (DateTime (Data.Maybe.Just-value0 _8)))]
                  [scm:else Data.Maybe.Nothing])])
                  (scm:cond
                    [(scm:and (scm:fx>=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "hour")) 0) (scm:fx<=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "hour")) 23)) (scm:cond
                      [(scm:and (scm:fx>=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "minute")) 0) (scm:fx<=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "minute")) 59)) (scm:cond
                        [(scm:and (scm:fx>=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "second")) 0) (scm:fx<=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "second")) 59)) (scm:cond
                          [(scm:and (scm:fx>=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "millisecond")) 0) (scm:fx<=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "millisecond")) 999)) (scm:cond
                            [(Data.Maybe.Just? _9) (Data.Maybe.Just ((Data.Maybe.Just-value0 _9) (Data.Time.Time* (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "hour")) (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "minute")) (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "second")) (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "millisecond")))))]
                            [(Data.Maybe.Nothing? _9) Data.Maybe.Nothing]
                            [scm:else (rt:fail)])]
                          [(Data.Maybe.Just? _9) Data.Maybe.Nothing]
                          [(Data.Maybe.Nothing? _9) Data.Maybe.Nothing]
                          [scm:else (rt:fail)])]
                        [(scm:and (scm:fx>=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "millisecond")) 0) (scm:fx<=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "millisecond")) 999)) (scm:cond
                          [(Data.Maybe.Just? _9) Data.Maybe.Nothing]
                          [(Data.Maybe.Nothing? _9) Data.Maybe.Nothing]
                          [scm:else (rt:fail)])]
                        [(Data.Maybe.Just? _9) Data.Maybe.Nothing]
                        [(Data.Maybe.Nothing? _9) Data.Maybe.Nothing]
                        [scm:else (rt:fail)])]
                      [(scm:and (scm:fx>=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "second")) 0) (scm:fx<=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "second")) 59)) (scm:cond
                        [(scm:and (scm:fx>=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "millisecond")) 0) (scm:fx<=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "millisecond")) 999)) (scm:cond
                          [(Data.Maybe.Just? _9) Data.Maybe.Nothing]
                          [(Data.Maybe.Nothing? _9) Data.Maybe.Nothing]
                          [scm:else (rt:fail)])]
                        [(Data.Maybe.Just? _9) Data.Maybe.Nothing]
                        [(Data.Maybe.Nothing? _9) Data.Maybe.Nothing]
                        [scm:else (rt:fail)])]
                      [(scm:and (scm:fx>=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "millisecond")) 0) (scm:fx<=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "millisecond")) 999)) (scm:cond
                        [(Data.Maybe.Just? _9) Data.Maybe.Nothing]
                        [(Data.Maybe.Nothing? _9) Data.Maybe.Nothing]
                        [scm:else (rt:fail)])]
                      [(Data.Maybe.Just? _9) Data.Maybe.Nothing]
                      [(Data.Maybe.Nothing? _9) Data.Maybe.Nothing]
                      [scm:else (rt:fail)])]
                    [(scm:and (scm:fx>=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "millisecond")) 0) (scm:fx<=? (rt:record-ref (Data.Maybe.Just-value0 _3) (scm:string->symbol "millisecond")) 999)) (scm:cond
                      [(Data.Maybe.Just? _9) Data.Maybe.Nothing]
                      [(Data.Maybe.Nothing? _9) Data.Maybe.Nothing]
                      [scm:else (rt:fail)])]
                    [(Data.Maybe.Just? _9) Data.Maybe.Nothing]
                    [(Data.Maybe.Nothing? _9) Data.Maybe.Nothing]
                    [scm:else (rt:fail)]))]
              [(Data.Maybe.Nothing? _3) Data.Maybe.Nothing]
              [scm:else (rt:fail)])))))))
