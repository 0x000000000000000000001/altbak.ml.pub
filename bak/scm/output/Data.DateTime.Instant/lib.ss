#!r6rs
#!chezscheme
(library
  (Data.DateTime.Instant lib)
  (export
    boundedInstant
    diff
    eqDateTime
    fromDate
    fromDateTime
    fromDateTimeImpl
    instant
    ordDateTime
    showInstant
    toDateTime
    toDateTimeImpl
    unInstant)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Date lib) Data.Date.)
    (prefix (Data.Date.Component lib) Data.Date.Component.)
    (prefix (Data.DateTime lib) Data.DateTime.)
    (prefix (Data.Eq lib) Data.Eq.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Ord lib) Data.Ord.)
    (prefix (Data.Show lib) Data.Show.)
    (prefix (Data.Time lib) Data.Time.)
    (Data.DateTime.Instant foreign))

  (scm:define unInstant
    (scm:lambda (v0)
      v0))

  (scm:define toDateTime
    (toDateTimeImpl (scm:lambda (y0)
      (scm:lambda (mo1)
        (scm:lambda (d2)
          (scm:lambda (h3)
            (scm:lambda (mi4)
              (scm:lambda (s5)
                (scm:lambda (ms6)
                  (Data.DateTime.DateTime* (((Data.Date.canonicalDate y0) (scm:cond
                    [(scm:fx=? mo1 1) Data.Date.Component.January]
                    [(scm:fx=? mo1 2) Data.Date.Component.February]
                    [(scm:fx=? mo1 3) Data.Date.Component.March]
                    [(scm:fx=? mo1 4) Data.Date.Component.April]
                    [(scm:fx=? mo1 5) Data.Date.Component.May]
                    [(scm:fx=? mo1 6) Data.Date.Component.June]
                    [(scm:fx=? mo1 7) Data.Date.Component.July]
                    [(scm:fx=? mo1 8) Data.Date.Component.August]
                    [(scm:fx=? mo1 9) Data.Date.Component.September]
                    [(scm:fx=? mo1 10) Data.Date.Component.October]
                    [(scm:fx=? mo1 11) Data.Date.Component.November]
                    [(scm:fx=? mo1 12) Data.Date.Component.December]
                    [scm:else (rt:fail)])) d2) (Data.Time.Time* h3 mi4 s5 ms6)))))))))))

  (scm:define showInstant
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Instant (Milliseconds ") (Data.Show.showNumberImpl v0)) (rt:string->pstring "))"))))))

  (scm:define ordDateTime
    Data.Ord.ordNumber)

  (scm:define instant
    (scm:lambda (v0)
      (scm:cond
        [(scm:and (scm:fl>=? v0 -8639977881600000.0) (scm:fl<=? v0 8639977881599999.0)) (Data.Maybe.Just v0)]
        [scm:else Data.Maybe.Nothing])))

  (scm:define fromDateTime
    (scm:lambda (v0)
      (fromDateTimeImpl (Data.Date.Date-value0 (Data.DateTime.DateTime-value0 v0)) (scm:cond
        [(Data.Date.Component.January? (Data.Date.Date-value1 (Data.DateTime.DateTime-value0 v0))) 1]
        [(Data.Date.Component.February? (Data.Date.Date-value1 (Data.DateTime.DateTime-value0 v0))) 2]
        [(Data.Date.Component.March? (Data.Date.Date-value1 (Data.DateTime.DateTime-value0 v0))) 3]
        [(Data.Date.Component.April? (Data.Date.Date-value1 (Data.DateTime.DateTime-value0 v0))) 4]
        [(Data.Date.Component.May? (Data.Date.Date-value1 (Data.DateTime.DateTime-value0 v0))) 5]
        [(Data.Date.Component.June? (Data.Date.Date-value1 (Data.DateTime.DateTime-value0 v0))) 6]
        [(Data.Date.Component.July? (Data.Date.Date-value1 (Data.DateTime.DateTime-value0 v0))) 7]
        [(Data.Date.Component.August? (Data.Date.Date-value1 (Data.DateTime.DateTime-value0 v0))) 8]
        [(Data.Date.Component.September? (Data.Date.Date-value1 (Data.DateTime.DateTime-value0 v0))) 9]
        [(Data.Date.Component.October? (Data.Date.Date-value1 (Data.DateTime.DateTime-value0 v0))) 10]
        [(Data.Date.Component.November? (Data.Date.Date-value1 (Data.DateTime.DateTime-value0 v0))) 11]
        [(Data.Date.Component.December? (Data.Date.Date-value1 (Data.DateTime.DateTime-value0 v0))) 12]
        [scm:else (rt:fail)]) (Data.Date.Date-value2 (Data.DateTime.DateTime-value0 v0)) (Data.Time.Time-value0 (Data.DateTime.DateTime-value1 v0)) (Data.Time.Time-value1 (Data.DateTime.DateTime-value1 v0)) (Data.Time.Time-value2 (Data.DateTime.DateTime-value1 v0)) (Data.Time.Time-value3 (Data.DateTime.DateTime-value1 v0)))))

  (scm:define fromDate
    (scm:lambda (d0)
      (fromDateTimeImpl (Data.Date.Date-value0 d0) (scm:cond
        [(Data.Date.Component.January? (Data.Date.Date-value1 d0)) 1]
        [(Data.Date.Component.February? (Data.Date.Date-value1 d0)) 2]
        [(Data.Date.Component.March? (Data.Date.Date-value1 d0)) 3]
        [(Data.Date.Component.April? (Data.Date.Date-value1 d0)) 4]
        [(Data.Date.Component.May? (Data.Date.Date-value1 d0)) 5]
        [(Data.Date.Component.June? (Data.Date.Date-value1 d0)) 6]
        [(Data.Date.Component.July? (Data.Date.Date-value1 d0)) 7]
        [(Data.Date.Component.August? (Data.Date.Date-value1 d0)) 8]
        [(Data.Date.Component.September? (Data.Date.Date-value1 d0)) 9]
        [(Data.Date.Component.October? (Data.Date.Date-value1 d0)) 10]
        [(Data.Date.Component.November? (Data.Date.Date-value1 d0)) 11]
        [(Data.Date.Component.December? (Data.Date.Date-value1 d0)) 12]
        [scm:else (rt:fail)]) (Data.Date.Date-value2 d0) 0 0 0 0)))

  (scm:define eqDateTime
    Data.Eq.eqNumber)

  (scm:define diff
    (scm:lambda (dictDuration0)
      (scm:lambda (dt11)
        (scm:lambda (dt22)
          ((rt:record-ref dictDuration0 (scm:string->symbol "toDuration")) (scm:fl+ dt11 (scm:fl- dt22)))))))

  (scm:define boundedInstant
    (scm:list (scm:cons (scm:string->symbol "bottom") -8639977881600000.0) (scm:cons (scm:string->symbol "top") 8639977881599999.0) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordNumber)))))
