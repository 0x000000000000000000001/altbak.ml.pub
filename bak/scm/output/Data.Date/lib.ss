#!r6rs
#!chezscheme
(library
  (Data.Date lib)
  (export
    Date
    Date*
    Date-value0
    Date-value1
    Date-value2
    Date?
    adjust
    boundedDate
    calcDiff
    calcWeekday
    canonicalDate
    canonicalDateImpl
    day
    diff
    enumDate
    eqDate
    exactDate
    isLeapYear
    lastDayOfMonth
    month
    ordDate
    showDate
    weekday
    year)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Date.Component lib) Data.Date.Component.)
    (prefix (Data.EuclideanRing lib) Data.EuclideanRing.)
    (prefix (Data.Int lib) Data.Int.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Ord lib) Data.Ord.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (prefix (Data.Show lib) Data.Show.)
    (Data.Date foreign))

  (scm:define-record-type (Date$ Date* Date?)
    (scm:fields (scm:immutable value0 Date-value0) (scm:immutable value1 Date-value1) (scm:immutable value2 Date-value2)))

  (scm:define Date
    (scm:lambda (value0)
      (scm:lambda (value1)
        (scm:lambda (value2)
          (Date* value0 value1 value2)))))

  (scm:define year
    (scm:lambda (v0)
      (Date-value0 v0)))

  (scm:define weekday
    (scm:lambda (v0)
      (scm:let ([n1 (calcWeekday (Date-value0 v0) (scm:cond
        [(Data.Date.Component.January? (Date-value1 v0)) 1]
        [(Data.Date.Component.February? (Date-value1 v0)) 2]
        [(Data.Date.Component.March? (Date-value1 v0)) 3]
        [(Data.Date.Component.April? (Date-value1 v0)) 4]
        [(Data.Date.Component.May? (Date-value1 v0)) 5]
        [(Data.Date.Component.June? (Date-value1 v0)) 6]
        [(Data.Date.Component.July? (Date-value1 v0)) 7]
        [(Data.Date.Component.August? (Date-value1 v0)) 8]
        [(Data.Date.Component.September? (Date-value1 v0)) 9]
        [(Data.Date.Component.October? (Date-value1 v0)) 10]
        [(Data.Date.Component.November? (Date-value1 v0)) 11]
        [(Data.Date.Component.December? (Date-value1 v0)) 12]
        [scm:else (rt:fail)]) (Date-value2 v0))])
        (scm:cond
          [(scm:fx=? n1 0) Data.Date.Component.Sunday]
          [(scm:fx=? n1 1) Data.Date.Component.Monday]
          [(scm:fx=? n1 2) Data.Date.Component.Tuesday]
          [(scm:fx=? n1 3) Data.Date.Component.Wednesday]
          [(scm:fx=? n1 4) Data.Date.Component.Thursday]
          [(scm:fx=? n1 5) Data.Date.Component.Friday]
          [(scm:fx=? n1 6) Data.Date.Component.Saturday]
          [(scm:fx=? n1 7) Data.Date.Component.Sunday]
          [scm:else (rt:fail)]))))

  (scm:define showDate
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Date (Year ") (Data.Show.showIntImpl (Date-value0 v0))) (rt:string->pstring ") ")) (scm:cond
        [(Data.Date.Component.January? (Date-value1 v0)) (rt:string->pstring "January")]
        [(Data.Date.Component.February? (Date-value1 v0)) (rt:string->pstring "February")]
        [(Data.Date.Component.March? (Date-value1 v0)) (rt:string->pstring "March")]
        [(Data.Date.Component.April? (Date-value1 v0)) (rt:string->pstring "April")]
        [(Data.Date.Component.May? (Date-value1 v0)) (rt:string->pstring "May")]
        [(Data.Date.Component.June? (Date-value1 v0)) (rt:string->pstring "June")]
        [(Data.Date.Component.July? (Date-value1 v0)) (rt:string->pstring "July")]
        [(Data.Date.Component.August? (Date-value1 v0)) (rt:string->pstring "August")]
        [(Data.Date.Component.September? (Date-value1 v0)) (rt:string->pstring "September")]
        [(Data.Date.Component.October? (Date-value1 v0)) (rt:string->pstring "October")]
        [(Data.Date.Component.November? (Date-value1 v0)) (rt:string->pstring "November")]
        [(Data.Date.Component.December? (Date-value1 v0)) (rt:string->pstring "December")]
        [scm:else (rt:fail)])) (rt:string->pstring " (Day ")) (Data.Show.showIntImpl (Date-value2 v0))) (rt:string->pstring "))"))))))

  (scm:define month
    (scm:lambda (v0)
      (Date-value1 v0)))

  (scm:define isLeapYear
    (scm:lambda (y0)
      (scm:and (scm:fx=? ((Data.EuclideanRing.intMod y0) 4) 0) (scm:or (scm:fx=? ((Data.EuclideanRing.intMod y0) 400) 0) (scm:not (scm:fx=? ((Data.EuclideanRing.intMod y0) 100) 0))))))

  (scm:define lastDayOfMonth
    (scm:lambda (y0)
      (scm:lambda (m1)
        (scm:cond
          [(Data.Date.Component.January? m1) 31]
          [(Data.Date.Component.February? m1) (scm:cond
            [(isLeapYear y0) 29]
            [scm:else 28])]
          [(Data.Date.Component.March? m1) 31]
          [(Data.Date.Component.April? m1) 30]
          [(Data.Date.Component.May? m1) 31]
          [(Data.Date.Component.June? m1) 30]
          [(Data.Date.Component.July? m1) 31]
          [(Data.Date.Component.August? m1) 31]
          [(Data.Date.Component.September? m1) 30]
          [(Data.Date.Component.October? m1) 31]
          [(Data.Date.Component.November? m1) 30]
          [(Data.Date.Component.December? m1) 31]
          [scm:else (rt:fail)]))))

  (scm:define eqDate
    (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:and (scm:and (scm:fx=? (Date-value0 x0) (Date-value0 y1)) (scm:cond
          [(Data.Date.Component.January? (Date-value1 x0)) (Data.Date.Component.January? (Date-value1 y1))]
          [(Data.Date.Component.February? (Date-value1 x0)) (Data.Date.Component.February? (Date-value1 y1))]
          [(Data.Date.Component.March? (Date-value1 x0)) (Data.Date.Component.March? (Date-value1 y1))]
          [(Data.Date.Component.April? (Date-value1 x0)) (Data.Date.Component.April? (Date-value1 y1))]
          [(Data.Date.Component.May? (Date-value1 x0)) (Data.Date.Component.May? (Date-value1 y1))]
          [(Data.Date.Component.June? (Date-value1 x0)) (Data.Date.Component.June? (Date-value1 y1))]
          [(Data.Date.Component.July? (Date-value1 x0)) (Data.Date.Component.July? (Date-value1 y1))]
          [(Data.Date.Component.August? (Date-value1 x0)) (Data.Date.Component.August? (Date-value1 y1))]
          [(Data.Date.Component.September? (Date-value1 x0)) (Data.Date.Component.September? (Date-value1 y1))]
          [(Data.Date.Component.October? (Date-value1 x0)) (Data.Date.Component.October? (Date-value1 y1))]
          [(Data.Date.Component.November? (Date-value1 x0)) (Data.Date.Component.November? (Date-value1 y1))]
          [scm:else (scm:and (Data.Date.Component.December? (Date-value1 x0)) (Data.Date.Component.December? (Date-value1 y1)))])) (scm:fx=? (Date-value2 x0) (Date-value2 y1))))))))

  (scm:define ordDate
    (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:let ([v2 (((rt:record-ref Data.Ord.ordInt (scm:string->symbol "compare")) (Date-value0 x0)) (Date-value0 y1))])
          (scm:cond
            [(Data.Ordering.LT? v2) Data.Ordering.LT]
            [(Data.Ordering.GT? v2) Data.Ordering.GT]
            [scm:else (scm:let ([v13 (((rt:record-ref Data.Date.Component.ordMonth (scm:string->symbol "compare")) (Date-value1 x0)) (Date-value1 y1))])
              (scm:cond
                [(Data.Ordering.LT? v13) Data.Ordering.LT]
                [(Data.Ordering.GT? v13) Data.Ordering.GT]
                [scm:else (((rt:record-ref Data.Ord.ordInt (scm:string->symbol "compare")) (Date-value2 x0)) (Date-value2 y1))]))]))))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
      eqDate))))

  (scm:define enumDate
    (scm:list (scm:cons (scm:string->symbol "succ") (scm:lambda (v0)
      (scm:let*
        ([sm1 ((rt:record-ref Data.Date.Component.enumMonth (scm:string->symbol "succ")) (Date-value1 v0))]
         [_2 (scm:fx+ (Date-value2 v0) 1)]
         [v13 (scm:cond
          [(scm:and (scm:fx>=? _2 1) (scm:fx<=? _2 31)) (Data.Maybe.Just _2)]
          [scm:else Data.Maybe.Nothing])])
          (scm:cond
            [(scm:let ([_4 ((lastDayOfMonth (Date-value0 v0)) (Date-value1 v0))])
              (scm:cond
                [(Data.Maybe.Nothing? v13) #f]
                [(Data.Maybe.Just? v13) (scm:fx>? (Data.Maybe.Just-value0 v13) _4)]
                [scm:else (rt:fail)])) (scm:cond
              [(scm:cond
                [(Data.Maybe.Nothing? sm1) #t]
                [(Data.Maybe.Just? sm1) #f]
                [scm:else (rt:fail)]) (scm:let ([_4 (scm:fx+ (Date-value0 v0) 1)])
                (scm:cond
                  [(scm:and (scm:fx>=? _4 -271820) (scm:fx<=? _4 275759)) (Data.Maybe.Just (Date* _4 (scm:cond
                    [(Data.Maybe.Nothing? sm1) Data.Date.Component.January]
                    [(Data.Maybe.Just? sm1) (Data.Maybe.Just-value0 sm1)]
                    [scm:else (rt:fail)]) 1))]
                  [scm:else Data.Maybe.Nothing]))]
              [scm:else (Data.Maybe.Just (Date* (Date-value0 v0) (scm:cond
                [(Data.Maybe.Nothing? sm1) Data.Date.Component.January]
                [(Data.Maybe.Just? sm1) (Data.Maybe.Just-value0 sm1)]
                [scm:else (rt:fail)]) 1))])]
            [(scm:and (scm:cond
              [(Data.Maybe.Nothing? v13) #t]
              [(Data.Maybe.Just? v13) #f]
              [scm:else (rt:fail)]) (scm:cond
              [(Data.Maybe.Nothing? sm1) #t]
              [(Data.Maybe.Just? sm1) #f]
              [scm:else (rt:fail)])) (scm:let ([_4 (scm:fx+ (Date-value0 v0) 1)])
              (scm:cond
                [(scm:and (scm:fx>=? _4 -271820) (scm:fx<=? _4 275759)) (scm:let ([_5 ((Date _4) (scm:cond
                  [(scm:cond
                    [(Data.Maybe.Nothing? v13) #t]
                    [(Data.Maybe.Just? v13) #f]
                    [scm:else (rt:fail)]) (scm:cond
                    [(Data.Maybe.Nothing? sm1) Data.Date.Component.January]
                    [(Data.Maybe.Just? sm1) (Data.Maybe.Just-value0 sm1)]
                    [scm:else (rt:fail)])]
                  [scm:else (Date-value1 v0)]))])
                  (scm:cond
                    [(scm:cond
                      [(Data.Maybe.Nothing? v13) #t]
                      [(Data.Maybe.Just? v13) #f]
                      [scm:else (rt:fail)]) (Data.Maybe.Just (_5 1))]
                    [(Data.Maybe.Just? v13) (Data.Maybe.Just (_5 (Data.Maybe.Just-value0 v13)))]
                    [scm:else Data.Maybe.Nothing]))]
                [scm:else Data.Maybe.Nothing]))]
            [scm:else (scm:let ([_4 ((Date (Date-value0 v0)) (scm:cond
              [(scm:cond
                [(Data.Maybe.Nothing? v13) #t]
                [(Data.Maybe.Just? v13) #f]
                [scm:else (rt:fail)]) (scm:cond
                [(Data.Maybe.Nothing? sm1) Data.Date.Component.January]
                [(Data.Maybe.Just? sm1) (Data.Maybe.Just-value0 sm1)]
                [scm:else (rt:fail)])]
              [scm:else (Date-value1 v0)]))])
              (scm:cond
                [(scm:cond
                  [(Data.Maybe.Nothing? v13) #t]
                  [(Data.Maybe.Just? v13) #f]
                  [scm:else (rt:fail)]) (Data.Maybe.Just (_4 1))]
                [(Data.Maybe.Just? v13) (Data.Maybe.Just (_4 (Data.Maybe.Just-value0 v13)))]
                [scm:else Data.Maybe.Nothing]))])))) (scm:cons (scm:string->symbol "pred") (scm:lambda (v0)
      (scm:let*
        ([pm1 ((rt:record-ref Data.Date.Component.enumMonth (scm:string->symbol "pred")) (Date-value1 v0))]
         [_2 (scm:fx- (Date-value2 v0) 1)])
          (scm:cond
            [(scm:and (scm:fx>=? _2 1) (scm:fx<=? _2 31)) (Data.Maybe.Just (Date* (Date-value0 v0) (Date-value1 v0) _2))]
            [scm:else (scm:let*
              ([m$p3 (scm:cond
                [(Data.Maybe.Nothing? pm1) Data.Date.Component.December]
                [(Data.Maybe.Just? pm1) (Data.Maybe.Just-value0 pm1)]
                [scm:else (rt:fail)])]
               [l4 ((lastDayOfMonth (Date-value0 v0)) m$p3)])
                (scm:cond
                  [(scm:cond
                    [(Data.Maybe.Nothing? pm1) #t]
                    [(Data.Maybe.Just? pm1) #f]
                    [scm:else (rt:fail)]) (scm:let ([_5 (scm:fx- (Date-value0 v0) 1)])
                    (scm:cond
                      [(scm:and (scm:fx>=? _5 -271820) (scm:fx<=? _5 275759)) (Data.Maybe.Just (Date* _5 m$p3 l4))]
                      [scm:else Data.Maybe.Nothing]))]
                  [scm:else (Data.Maybe.Just (Date* (Date-value0 v0) m$p3 l4))]))])))) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      ordDate))))

  (scm:define diff
    (scm:lambda (dictDuration0)
      (scm:lambda (v1)
        (scm:lambda (v12)
          ((rt:record-ref dictDuration0 (scm:string->symbol "toDuration")) (calcDiff (Date-value0 v1) (scm:cond
            [(Data.Date.Component.January? (Date-value1 v1)) 1]
            [(Data.Date.Component.February? (Date-value1 v1)) 2]
            [(Data.Date.Component.March? (Date-value1 v1)) 3]
            [(Data.Date.Component.April? (Date-value1 v1)) 4]
            [(Data.Date.Component.May? (Date-value1 v1)) 5]
            [(Data.Date.Component.June? (Date-value1 v1)) 6]
            [(Data.Date.Component.July? (Date-value1 v1)) 7]
            [(Data.Date.Component.August? (Date-value1 v1)) 8]
            [(Data.Date.Component.September? (Date-value1 v1)) 9]
            [(Data.Date.Component.October? (Date-value1 v1)) 10]
            [(Data.Date.Component.November? (Date-value1 v1)) 11]
            [(Data.Date.Component.December? (Date-value1 v1)) 12]
            [scm:else (rt:fail)]) (Date-value2 v1) (Date-value0 v12) (scm:cond
            [(Data.Date.Component.January? (Date-value1 v12)) 1]
            [(Data.Date.Component.February? (Date-value1 v12)) 2]
            [(Data.Date.Component.March? (Date-value1 v12)) 3]
            [(Data.Date.Component.April? (Date-value1 v12)) 4]
            [(Data.Date.Component.May? (Date-value1 v12)) 5]
            [(Data.Date.Component.June? (Date-value1 v12)) 6]
            [(Data.Date.Component.July? (Date-value1 v12)) 7]
            [(Data.Date.Component.August? (Date-value1 v12)) 8]
            [(Data.Date.Component.September? (Date-value1 v12)) 9]
            [(Data.Date.Component.October? (Date-value1 v12)) 10]
            [(Data.Date.Component.November? (Date-value1 v12)) 11]
            [(Data.Date.Component.December? (Date-value1 v12)) 12]
            [scm:else (rt:fail)]) (Date-value2 v12)))))))

  (scm:define day
    (scm:lambda (v0)
      (Date-value2 v0)))

  (scm:define canonicalDate
    (scm:lambda (y0)
      (scm:lambda (m1)
        (scm:lambda (d2)
          (canonicalDateImpl (scm:lambda (y$p3)
            (scm:lambda (m$p4)
              (scm:lambda (d$p5)
                (Date* y$p3 (scm:cond
                  [(scm:fx=? m$p4 1) Data.Date.Component.January]
                  [(scm:fx=? m$p4 2) Data.Date.Component.February]
                  [(scm:fx=? m$p4 3) Data.Date.Component.March]
                  [(scm:fx=? m$p4 4) Data.Date.Component.April]
                  [(scm:fx=? m$p4 5) Data.Date.Component.May]
                  [(scm:fx=? m$p4 6) Data.Date.Component.June]
                  [(scm:fx=? m$p4 7) Data.Date.Component.July]
                  [(scm:fx=? m$p4 8) Data.Date.Component.August]
                  [(scm:fx=? m$p4 9) Data.Date.Component.September]
                  [(scm:fx=? m$p4 10) Data.Date.Component.October]
                  [(scm:fx=? m$p4 11) Data.Date.Component.November]
                  [(scm:fx=? m$p4 12) Data.Date.Component.December]
                  [scm:else (rt:fail)]) d$p5)))) y0 (scm:cond
            [(Data.Date.Component.January? m1) 1]
            [(Data.Date.Component.February? m1) 2]
            [(Data.Date.Component.March? m1) 3]
            [(Data.Date.Component.April? m1) 4]
            [(Data.Date.Component.May? m1) 5]
            [(Data.Date.Component.June? m1) 6]
            [(Data.Date.Component.July? m1) 7]
            [(Data.Date.Component.August? m1) 8]
            [(Data.Date.Component.September? m1) 9]
            [(Data.Date.Component.October? m1) 10]
            [(Data.Date.Component.November? m1) 11]
            [(Data.Date.Component.December? m1) 12]
            [scm:else (rt:fail)]) d2)))))

  (scm:define exactDate
    (scm:lambda (y0)
      (scm:lambda (m1)
        (scm:lambda (d2)
          (scm:cond
            [(((rt:record-ref eqDate (scm:string->symbol "eq")) (((canonicalDate y0) m1) d2)) (Date* y0 m1 d2)) (Data.Maybe.Just (Date* y0 m1 d2))]
            [scm:else Data.Maybe.Nothing])))))

  (scm:define boundedDate
    (scm:list (scm:cons (scm:string->symbol "bottom") (Date* -271820 Data.Date.Component.January 1)) (scm:cons (scm:string->symbol "top") (Date* 275759 Data.Date.Component.December 31)) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      ordDate))))

  (scm:define adjust
    (scm:lambda (v0)
      (scm:lambda (date1)
        (scm:letrec ([adj2 (scm:lambda (v13)
          (scm:lambda (v24)
            (scm:cond
              [(scm:fx=? v13 0) (Data.Maybe.Just v24)]
              [scm:else (scm:let*
                ([j5 (scm:fx+ v13 (Date-value2 v24))]
                 [low6 (scm:fx<? j5 1)]
                 [l7 ((lastDayOfMonth (Date-value0 v24)) (scm:cond
                  [low6 (scm:let ([_7 ((rt:record-ref Data.Date.Component.enumMonth (scm:string->symbol "pred")) (Date-value1 v24))])
                    (scm:cond
                      [(Data.Maybe.Nothing? _7) Data.Date.Component.December]
                      [(Data.Maybe.Just? _7) (Data.Maybe.Just-value0 _7)]
                      [scm:else (rt:fail)]))]
                  [scm:else (Date-value1 v24)]))]
                 [hi8 (scm:fx>? j5 l7)]
                 [_9 (adj2 (scm:cond
                  [low6 j5]
                  [hi8 (scm:fx- (scm:fx- j5 l7) 1)]
                  [scm:else 0]))]
                 [_10 (scm:cond
                  [low6 ((rt:record-ref enumDate (scm:string->symbol "pred")) (Date* (Date-value0 v24) (Date-value1 v24) 1))]
                  [hi8 ((rt:record-ref enumDate (scm:string->symbol "succ")) (Date* (Date-value0 v24) (Date-value1 v24) l7))]
                  [scm:else (scm:let ([_10 ((Date (Date-value0 v24)) (Date-value1 v24))])
                    (scm:cond
                      [(scm:and (scm:fx>=? j5 1) (scm:fx<=? j5 31)) (Data.Maybe.Just (_10 j5))]
                      [scm:else Data.Maybe.Nothing]))])])
                  (scm:cond
                    [(Data.Maybe.Just? _10) (_9 (Data.Maybe.Just-value0 _10))]
                    [(Data.Maybe.Nothing? _10) Data.Maybe.Nothing]
                    [scm:else (rt:fail)]))])))])
          (scm:let ([_3 (Data.Int.fromNumber v0)])
            (scm:cond
              [(Data.Maybe.Just? _3) ((adj2 (Data.Maybe.Just-value0 _3)) date1)]
              [(Data.Maybe.Nothing? _3) Data.Maybe.Nothing]
              [scm:else (rt:fail)])))))))
