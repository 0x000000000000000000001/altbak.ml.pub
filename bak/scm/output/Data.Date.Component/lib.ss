#!r6rs
#!chezscheme
(library
  (Data.Date.Component lib)
  (export
    April
    April?
    August
    August?
    December
    December?
    February
    February?
    Friday
    Friday?
    January
    January?
    July
    July?
    June
    June?
    March
    March?
    May
    May?
    Monday
    Monday?
    November
    November?
    October
    October?
    Saturday
    Saturday?
    September
    September?
    Sunday
    Sunday?
    Thursday
    Thursday?
    Tuesday
    Tuesday?
    Wednesday
    Wednesday?
    boundedDay
    boundedEnumDay
    boundedEnumMonth
    boundedEnumWeekday
    boundedEnumYear
    boundedMonth
    boundedWeekday
    boundedYear
    enumDay
    enumMonth
    enumWeekday
    enumYear
    eqDay
    eqMonth
    eqWeekday
    eqYear
    ordDay
    ordMonth
    ordWeekday
    ordYear
    showDay
    showMonth
    showWeekday
    showYear)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Eq lib) Data.Eq.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Ord lib) Data.Ord.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (prefix (Data.Show lib) Data.Show.))

  (scm:define Monday
    (scm:quote Monday))

  (scm:define Monday?
    (scm:lambda (v)
      (scm:eq? (scm:quote Monday) v)))

  (scm:define Tuesday
    (scm:quote Tuesday))

  (scm:define Tuesday?
    (scm:lambda (v)
      (scm:eq? (scm:quote Tuesday) v)))

  (scm:define Wednesday
    (scm:quote Wednesday))

  (scm:define Wednesday?
    (scm:lambda (v)
      (scm:eq? (scm:quote Wednesday) v)))

  (scm:define Thursday
    (scm:quote Thursday))

  (scm:define Thursday?
    (scm:lambda (v)
      (scm:eq? (scm:quote Thursday) v)))

  (scm:define Friday
    (scm:quote Friday))

  (scm:define Friday?
    (scm:lambda (v)
      (scm:eq? (scm:quote Friday) v)))

  (scm:define Saturday
    (scm:quote Saturday))

  (scm:define Saturday?
    (scm:lambda (v)
      (scm:eq? (scm:quote Saturday) v)))

  (scm:define Sunday
    (scm:quote Sunday))

  (scm:define Sunday?
    (scm:lambda (v)
      (scm:eq? (scm:quote Sunday) v)))

  (scm:define January
    (scm:quote January))

  (scm:define January?
    (scm:lambda (v)
      (scm:eq? (scm:quote January) v)))

  (scm:define February
    (scm:quote February))

  (scm:define February?
    (scm:lambda (v)
      (scm:eq? (scm:quote February) v)))

  (scm:define March
    (scm:quote March))

  (scm:define March?
    (scm:lambda (v)
      (scm:eq? (scm:quote March) v)))

  (scm:define April
    (scm:quote April))

  (scm:define April?
    (scm:lambda (v)
      (scm:eq? (scm:quote April) v)))

  (scm:define May
    (scm:quote May))

  (scm:define May?
    (scm:lambda (v)
      (scm:eq? (scm:quote May) v)))

  (scm:define June
    (scm:quote June))

  (scm:define June?
    (scm:lambda (v)
      (scm:eq? (scm:quote June) v)))

  (scm:define July
    (scm:quote July))

  (scm:define July?
    (scm:lambda (v)
      (scm:eq? (scm:quote July) v)))

  (scm:define August
    (scm:quote August))

  (scm:define August?
    (scm:lambda (v)
      (scm:eq? (scm:quote August) v)))

  (scm:define September
    (scm:quote September))

  (scm:define September?
    (scm:lambda (v)
      (scm:eq? (scm:quote September) v)))

  (scm:define October
    (scm:quote October))

  (scm:define October?
    (scm:lambda (v)
      (scm:eq? (scm:quote October) v)))

  (scm:define November
    (scm:quote November))

  (scm:define November?
    (scm:lambda (v)
      (scm:eq? (scm:quote November) v)))

  (scm:define December
    (scm:quote December))

  (scm:define December?
    (scm:lambda (v)
      (scm:eq? (scm:quote December) v)))

  (scm:define showYear
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Year ") (Data.Show.showIntImpl v0)) (rt:string->pstring ")"))))))

  (scm:define showWeekday
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (scm:cond
        [(Monday? v0) (rt:string->pstring "Monday")]
        [(Tuesday? v0) (rt:string->pstring "Tuesday")]
        [(Wednesday? v0) (rt:string->pstring "Wednesday")]
        [(Thursday? v0) (rt:string->pstring "Thursday")]
        [(Friday? v0) (rt:string->pstring "Friday")]
        [(Saturday? v0) (rt:string->pstring "Saturday")]
        [(Sunday? v0) (rt:string->pstring "Sunday")]
        [scm:else (rt:fail)])))))

  (scm:define showMonth
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (scm:cond
        [(January? v0) (rt:string->pstring "January")]
        [(February? v0) (rt:string->pstring "February")]
        [(March? v0) (rt:string->pstring "March")]
        [(April? v0) (rt:string->pstring "April")]
        [(May? v0) (rt:string->pstring "May")]
        [(June? v0) (rt:string->pstring "June")]
        [(July? v0) (rt:string->pstring "July")]
        [(August? v0) (rt:string->pstring "August")]
        [(September? v0) (rt:string->pstring "September")]
        [(October? v0) (rt:string->pstring "October")]
        [(November? v0) (rt:string->pstring "November")]
        [(December? v0) (rt:string->pstring "December")]
        [scm:else (rt:fail)])))))

  (scm:define showDay
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Day ") (Data.Show.showIntImpl v0)) (rt:string->pstring ")"))))))

  (scm:define ordYear
    Data.Ord.ordInt)

  (scm:define ordDay
    Data.Ord.ordInt)

  (scm:define eqYear
    Data.Eq.eqInt)

  (scm:define eqWeekday
    (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:cond
          [(Monday? x0) (Monday? y1)]
          [(Tuesday? x0) (Tuesday? y1)]
          [(Wednesday? x0) (Wednesday? y1)]
          [(Thursday? x0) (Thursday? y1)]
          [(Friday? x0) (Friday? y1)]
          [(Saturday? x0) (Saturday? y1)]
          [scm:else (scm:and (Sunday? x0) (Sunday? y1))]))))))

  (scm:define ordWeekday
    (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:cond
          [(Monday? x0) (scm:cond
            [(Monday? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(Monday? y1) Data.Ordering.GT]
          [(Tuesday? x0) (scm:cond
            [(Tuesday? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(Tuesday? y1) Data.Ordering.GT]
          [(Wednesday? x0) (scm:cond
            [(Wednesday? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(Wednesday? y1) Data.Ordering.GT]
          [(Thursday? x0) (scm:cond
            [(Thursday? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(Thursday? y1) Data.Ordering.GT]
          [(Friday? x0) (scm:cond
            [(Friday? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(Friday? y1) Data.Ordering.GT]
          [(Saturday? x0) (scm:cond
            [(Saturday? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(Saturday? y1) Data.Ordering.GT]
          [(scm:and (Sunday? x0) (Sunday? y1)) Data.Ordering.EQ]
          [scm:else (rt:fail)])))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
      eqWeekday))))

  (scm:define eqMonth
    (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:cond
          [(January? x0) (January? y1)]
          [(February? x0) (February? y1)]
          [(March? x0) (March? y1)]
          [(April? x0) (April? y1)]
          [(May? x0) (May? y1)]
          [(June? x0) (June? y1)]
          [(July? x0) (July? y1)]
          [(August? x0) (August? y1)]
          [(September? x0) (September? y1)]
          [(October? x0) (October? y1)]
          [(November? x0) (November? y1)]
          [scm:else (scm:and (December? x0) (December? y1))]))))))

  (scm:define ordMonth
    (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:cond
          [(January? x0) (scm:cond
            [(January? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(January? y1) Data.Ordering.GT]
          [(February? x0) (scm:cond
            [(February? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(February? y1) Data.Ordering.GT]
          [(March? x0) (scm:cond
            [(March? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(March? y1) Data.Ordering.GT]
          [(April? x0) (scm:cond
            [(April? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(April? y1) Data.Ordering.GT]
          [(May? x0) (scm:cond
            [(May? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(May? y1) Data.Ordering.GT]
          [(June? x0) (scm:cond
            [(June? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(June? y1) Data.Ordering.GT]
          [(July? x0) (scm:cond
            [(July? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(July? y1) Data.Ordering.GT]
          [(August? x0) (scm:cond
            [(August? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(August? y1) Data.Ordering.GT]
          [(September? x0) (scm:cond
            [(September? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(September? y1) Data.Ordering.GT]
          [(October? x0) (scm:cond
            [(October? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(October? y1) Data.Ordering.GT]
          [(November? x0) (scm:cond
            [(November? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(November? y1) Data.Ordering.GT]
          [(scm:and (December? x0) (December? y1)) Data.Ordering.EQ]
          [scm:else (rt:fail)])))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
      eqMonth))))

  (scm:define eqDay
    Data.Eq.eqInt)

  (scm:define boundedYear
    (scm:list (scm:cons (scm:string->symbol "bottom") -271820) (scm:cons (scm:string->symbol "top") 275759) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordInt))))

  (scm:define boundedWeekday
    (scm:list (scm:cons (scm:string->symbol "bottom") Monday) (scm:cons (scm:string->symbol "top") Sunday) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      ordWeekday))))

  (scm:define boundedMonth
    (scm:list (scm:cons (scm:string->symbol "bottom") January) (scm:cons (scm:string->symbol "top") December) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      ordMonth))))

  (rt:define-lazy $lazy-boundedEnumYear "boundedEnumYear" "Data.Date.Component"
    (scm:list (scm:cons (scm:string->symbol "cardinality") 547580) (scm:cons (scm:string->symbol "toEnum") (scm:lambda (n0)
      (scm:cond
        [(scm:and (scm:fx>=? n0 -271820) (scm:fx<=? n0 275759)) (Data.Maybe.Just n0)]
        [scm:else Data.Maybe.Nothing]))) (scm:cons (scm:string->symbol "fromEnum") (scm:lambda (v0)
      v0)) (scm:cons (scm:string->symbol "Bounded0") (scm:lambda (_)
      boundedYear)) (scm:cons (scm:string->symbol "Enum1") (scm:lambda (_)
      ($lazy-enumYear)))))

  (rt:define-lazy $lazy-enumYear "enumYear" "Data.Date.Component"
    (scm:list (scm:cons (scm:string->symbol "succ") (scm:lambda (x0)
      (scm:let ([_1 (scm:fx+ x0 1)])
        (scm:cond
          [(scm:and (scm:fx>=? _1 -271820) (scm:fx<=? _1 275759)) (Data.Maybe.Just _1)]
          [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "pred") (scm:lambda (x0)
      (scm:let ([_1 (scm:fx- x0 1)])
        (scm:cond
          [(scm:and (scm:fx>=? _1 -271820) (scm:fx<=? _1 275759)) (Data.Maybe.Just _1)]
          [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordInt))))

  (scm:define boundedEnumYear
    ($lazy-boundedEnumYear))

  (scm:define enumYear
    ($lazy-enumYear))

  (rt:define-lazy $lazy-boundedEnumWeekday "boundedEnumWeekday" "Data.Date.Component"
    (scm:list (scm:cons (scm:string->symbol "cardinality") 7) (scm:cons (scm:string->symbol "toEnum") (scm:lambda (v0)
      (scm:cond
        [(scm:fx=? v0 1) (Data.Maybe.Just Monday)]
        [(scm:fx=? v0 2) (Data.Maybe.Just Tuesday)]
        [(scm:fx=? v0 3) (Data.Maybe.Just Wednesday)]
        [(scm:fx=? v0 4) (Data.Maybe.Just Thursday)]
        [(scm:fx=? v0 5) (Data.Maybe.Just Friday)]
        [(scm:fx=? v0 6) (Data.Maybe.Just Saturday)]
        [(scm:fx=? v0 7) (Data.Maybe.Just Sunday)]
        [scm:else Data.Maybe.Nothing]))) (scm:cons (scm:string->symbol "fromEnum") (scm:lambda (v0)
      (scm:cond
        [(Monday? v0) 1]
        [(Tuesday? v0) 2]
        [(Wednesday? v0) 3]
        [(Thursday? v0) 4]
        [(Friday? v0) 5]
        [(Saturday? v0) 6]
        [(Sunday? v0) 7]
        [scm:else (rt:fail)]))) (scm:cons (scm:string->symbol "Bounded0") (scm:lambda (_)
      boundedWeekday)) (scm:cons (scm:string->symbol "Enum1") (scm:lambda (_)
      ($lazy-enumWeekday)))))

  (rt:define-lazy $lazy-enumWeekday "enumWeekday" "Data.Date.Component"
    (scm:list (scm:cons (scm:string->symbol "succ") (scm:lambda (x0)
      (scm:let ([_1 (scm:cond
        [(Monday? x0) 2]
        [(Tuesday? x0) 3]
        [(Wednesday? x0) 4]
        [(Thursday? x0) 5]
        [(Friday? x0) 6]
        [(Saturday? x0) 7]
        [(Sunday? x0) 8]
        [scm:else (rt:fail)])])
        (scm:cond
          [(scm:fx=? _1 1) (Data.Maybe.Just Monday)]
          [(scm:fx=? _1 2) (Data.Maybe.Just Tuesday)]
          [(scm:fx=? _1 3) (Data.Maybe.Just Wednesday)]
          [(scm:fx=? _1 4) (Data.Maybe.Just Thursday)]
          [(scm:fx=? _1 5) (Data.Maybe.Just Friday)]
          [(scm:fx=? _1 6) (Data.Maybe.Just Saturday)]
          [(scm:fx=? _1 7) (Data.Maybe.Just Sunday)]
          [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "pred") (scm:lambda (x0)
      (scm:let ([_1 (scm:cond
        [(Monday? x0) 0]
        [(Tuesday? x0) 1]
        [(Wednesday? x0) 2]
        [(Thursday? x0) 3]
        [(Friday? x0) 4]
        [(Saturday? x0) 5]
        [(Sunday? x0) 6]
        [scm:else (rt:fail)])])
        (scm:cond
          [(scm:fx=? _1 1) (Data.Maybe.Just Monday)]
          [(scm:fx=? _1 2) (Data.Maybe.Just Tuesday)]
          [(scm:fx=? _1 3) (Data.Maybe.Just Wednesday)]
          [(scm:fx=? _1 4) (Data.Maybe.Just Thursday)]
          [(scm:fx=? _1 5) (Data.Maybe.Just Friday)]
          [(scm:fx=? _1 6) (Data.Maybe.Just Saturday)]
          [(scm:fx=? _1 7) (Data.Maybe.Just Sunday)]
          [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      ordWeekday))))

  (scm:define boundedEnumWeekday
    ($lazy-boundedEnumWeekday))

  (scm:define enumWeekday
    ($lazy-enumWeekday))

  (rt:define-lazy $lazy-boundedEnumMonth "boundedEnumMonth" "Data.Date.Component"
    (scm:list (scm:cons (scm:string->symbol "cardinality") 12) (scm:cons (scm:string->symbol "toEnum") (scm:lambda (v0)
      (scm:cond
        [(scm:fx=? v0 1) (Data.Maybe.Just January)]
        [(scm:fx=? v0 2) (Data.Maybe.Just February)]
        [(scm:fx=? v0 3) (Data.Maybe.Just March)]
        [(scm:fx=? v0 4) (Data.Maybe.Just April)]
        [(scm:fx=? v0 5) (Data.Maybe.Just May)]
        [(scm:fx=? v0 6) (Data.Maybe.Just June)]
        [(scm:fx=? v0 7) (Data.Maybe.Just July)]
        [(scm:fx=? v0 8) (Data.Maybe.Just August)]
        [(scm:fx=? v0 9) (Data.Maybe.Just September)]
        [(scm:fx=? v0 10) (Data.Maybe.Just October)]
        [(scm:fx=? v0 11) (Data.Maybe.Just November)]
        [(scm:fx=? v0 12) (Data.Maybe.Just December)]
        [scm:else Data.Maybe.Nothing]))) (scm:cons (scm:string->symbol "fromEnum") (scm:lambda (v0)
      (scm:cond
        [(January? v0) 1]
        [(February? v0) 2]
        [(March? v0) 3]
        [(April? v0) 4]
        [(May? v0) 5]
        [(June? v0) 6]
        [(July? v0) 7]
        [(August? v0) 8]
        [(September? v0) 9]
        [(October? v0) 10]
        [(November? v0) 11]
        [(December? v0) 12]
        [scm:else (rt:fail)]))) (scm:cons (scm:string->symbol "Bounded0") (scm:lambda (_)
      boundedMonth)) (scm:cons (scm:string->symbol "Enum1") (scm:lambda (_)
      ($lazy-enumMonth)))))

  (rt:define-lazy $lazy-enumMonth "enumMonth" "Data.Date.Component"
    (scm:list (scm:cons (scm:string->symbol "succ") (scm:lambda (x0)
      (scm:let ([_1 (scm:cond
        [(January? x0) 2]
        [(February? x0) 3]
        [(March? x0) 4]
        [(April? x0) 5]
        [(May? x0) 6]
        [(June? x0) 7]
        [(July? x0) 8]
        [(August? x0) 9]
        [(September? x0) 10]
        [(October? x0) 11]
        [(November? x0) 12]
        [(December? x0) 13]
        [scm:else (rt:fail)])])
        (scm:cond
          [(scm:fx=? _1 1) (Data.Maybe.Just January)]
          [(scm:fx=? _1 2) (Data.Maybe.Just February)]
          [(scm:fx=? _1 3) (Data.Maybe.Just March)]
          [(scm:fx=? _1 4) (Data.Maybe.Just April)]
          [(scm:fx=? _1 5) (Data.Maybe.Just May)]
          [(scm:fx=? _1 6) (Data.Maybe.Just June)]
          [(scm:fx=? _1 7) (Data.Maybe.Just July)]
          [(scm:fx=? _1 8) (Data.Maybe.Just August)]
          [(scm:fx=? _1 9) (Data.Maybe.Just September)]
          [(scm:fx=? _1 10) (Data.Maybe.Just October)]
          [(scm:fx=? _1 11) (Data.Maybe.Just November)]
          [(scm:fx=? _1 12) (Data.Maybe.Just December)]
          [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "pred") (scm:lambda (x0)
      (scm:let ([_1 (scm:cond
        [(January? x0) 0]
        [(February? x0) 1]
        [(March? x0) 2]
        [(April? x0) 3]
        [(May? x0) 4]
        [(June? x0) 5]
        [(July? x0) 6]
        [(August? x0) 7]
        [(September? x0) 8]
        [(October? x0) 9]
        [(November? x0) 10]
        [(December? x0) 11]
        [scm:else (rt:fail)])])
        (scm:cond
          [(scm:fx=? _1 1) (Data.Maybe.Just January)]
          [(scm:fx=? _1 2) (Data.Maybe.Just February)]
          [(scm:fx=? _1 3) (Data.Maybe.Just March)]
          [(scm:fx=? _1 4) (Data.Maybe.Just April)]
          [(scm:fx=? _1 5) (Data.Maybe.Just May)]
          [(scm:fx=? _1 6) (Data.Maybe.Just June)]
          [(scm:fx=? _1 7) (Data.Maybe.Just July)]
          [(scm:fx=? _1 8) (Data.Maybe.Just August)]
          [(scm:fx=? _1 9) (Data.Maybe.Just September)]
          [(scm:fx=? _1 10) (Data.Maybe.Just October)]
          [(scm:fx=? _1 11) (Data.Maybe.Just November)]
          [(scm:fx=? _1 12) (Data.Maybe.Just December)]
          [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      ordMonth))))

  (scm:define boundedEnumMonth
    ($lazy-boundedEnumMonth))

  (scm:define enumMonth
    ($lazy-enumMonth))

  (scm:define boundedDay
    (scm:list (scm:cons (scm:string->symbol "bottom") 1) (scm:cons (scm:string->symbol "top") 31) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordInt))))

  (rt:define-lazy $lazy-boundedEnumDay "boundedEnumDay" "Data.Date.Component"
    (scm:list (scm:cons (scm:string->symbol "cardinality") 31) (scm:cons (scm:string->symbol "toEnum") (scm:lambda (n0)
      (scm:cond
        [(scm:and (scm:fx>=? n0 1) (scm:fx<=? n0 31)) (Data.Maybe.Just n0)]
        [scm:else Data.Maybe.Nothing]))) (scm:cons (scm:string->symbol "fromEnum") (scm:lambda (v0)
      v0)) (scm:cons (scm:string->symbol "Bounded0") (scm:lambda (_)
      boundedDay)) (scm:cons (scm:string->symbol "Enum1") (scm:lambda (_)
      ($lazy-enumDay)))))

  (rt:define-lazy $lazy-enumDay "enumDay" "Data.Date.Component"
    (scm:list (scm:cons (scm:string->symbol "succ") (scm:lambda (x0)
      (scm:let ([_1 (scm:fx+ x0 1)])
        (scm:cond
          [(scm:and (scm:fx>=? _1 1) (scm:fx<=? _1 31)) (Data.Maybe.Just _1)]
          [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "pred") (scm:lambda (x0)
      (scm:let ([_1 (scm:fx- x0 1)])
        (scm:cond
          [(scm:and (scm:fx>=? _1 1) (scm:fx<=? _1 31)) (Data.Maybe.Just _1)]
          [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordInt))))

  (scm:define boundedEnumDay
    ($lazy-boundedEnumDay))

  (scm:define enumDay
    ($lazy-enumDay)))
