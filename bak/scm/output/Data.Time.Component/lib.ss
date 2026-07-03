#!r6rs
#!chezscheme
(library
  (Data.Time.Component lib)
  (export
    boundedEnumHour
    boundedEnumMillisecond
    boundedEnumMinute
    boundedEnumSecond
    boundedHour
    boundedMillisecond
    boundedMinute
    boundedSecond
    enumHour
    enumMillisecond
    enumMinute
    enumSecond
    eqHour
    eqMillisecond
    eqMinute
    eqSecond
    ordHour
    ordMillisecond
    ordMinute
    ordSecond
    showHour
    showMillisecond
    showMinute
    showSecond)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Eq lib) Data.Eq.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Ord lib) Data.Ord.)
    (prefix (Data.Show lib) Data.Show.))

  (scm:define showSecond
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Second ") (Data.Show.showIntImpl v0)) (rt:string->pstring ")"))))))

  (scm:define showMinute
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Minute ") (Data.Show.showIntImpl v0)) (rt:string->pstring ")"))))))

  (scm:define showMillisecond
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Millisecond ") (Data.Show.showIntImpl v0)) (rt:string->pstring ")"))))))

  (scm:define showHour
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Hour ") (Data.Show.showIntImpl v0)) (rt:string->pstring ")"))))))

  (scm:define ordSecond
    Data.Ord.ordInt)

  (scm:define ordMinute
    Data.Ord.ordInt)

  (scm:define ordMillisecond
    Data.Ord.ordInt)

  (scm:define ordHour
    Data.Ord.ordInt)

  (scm:define eqSecond
    Data.Eq.eqInt)

  (scm:define eqMinute
    Data.Eq.eqInt)

  (scm:define eqMillisecond
    Data.Eq.eqInt)

  (scm:define eqHour
    Data.Eq.eqInt)

  (scm:define boundedSecond
    (scm:list (scm:cons (scm:string->symbol "bottom") 0) (scm:cons (scm:string->symbol "top") 59) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordInt))))

  (scm:define boundedMinute
    (scm:list (scm:cons (scm:string->symbol "bottom") 0) (scm:cons (scm:string->symbol "top") 59) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordInt))))

  (scm:define boundedMillisecond
    (scm:list (scm:cons (scm:string->symbol "bottom") 0) (scm:cons (scm:string->symbol "top") 999) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordInt))))

  (scm:define boundedHour
    (scm:list (scm:cons (scm:string->symbol "bottom") 0) (scm:cons (scm:string->symbol "top") 23) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordInt))))

  (rt:define-lazy $lazy-boundedEnumSecond "boundedEnumSecond" "Data.Time.Component"
    (scm:list (scm:cons (scm:string->symbol "cardinality") 60) (scm:cons (scm:string->symbol "toEnum") (scm:lambda (n0)
      (scm:cond
        [(scm:and (scm:fx>=? n0 0) (scm:fx<=? n0 59)) (Data.Maybe.Just n0)]
        [scm:else Data.Maybe.Nothing]))) (scm:cons (scm:string->symbol "fromEnum") (scm:lambda (v0)
      v0)) (scm:cons (scm:string->symbol "Bounded0") (scm:lambda (_)
      boundedSecond)) (scm:cons (scm:string->symbol "Enum1") (scm:lambda (_)
      ($lazy-enumSecond)))))

  (rt:define-lazy $lazy-enumSecond "enumSecond" "Data.Time.Component"
    (scm:list (scm:cons (scm:string->symbol "succ") (scm:lambda (x0)
      (scm:let ([_1 (scm:fx+ x0 1)])
        (scm:cond
          [(scm:and (scm:fx>=? _1 0) (scm:fx<=? _1 59)) (Data.Maybe.Just _1)]
          [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "pred") (scm:lambda (x0)
      (scm:let ([_1 (scm:fx- x0 1)])
        (scm:cond
          [(scm:and (scm:fx>=? _1 0) (scm:fx<=? _1 59)) (Data.Maybe.Just _1)]
          [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordInt))))

  (scm:define boundedEnumSecond
    ($lazy-boundedEnumSecond))

  (scm:define enumSecond
    ($lazy-enumSecond))

  (rt:define-lazy $lazy-boundedEnumMinute "boundedEnumMinute" "Data.Time.Component"
    (scm:list (scm:cons (scm:string->symbol "cardinality") 60) (scm:cons (scm:string->symbol "toEnum") (scm:lambda (n0)
      (scm:cond
        [(scm:and (scm:fx>=? n0 0) (scm:fx<=? n0 59)) (Data.Maybe.Just n0)]
        [scm:else Data.Maybe.Nothing]))) (scm:cons (scm:string->symbol "fromEnum") (scm:lambda (v0)
      v0)) (scm:cons (scm:string->symbol "Bounded0") (scm:lambda (_)
      boundedMinute)) (scm:cons (scm:string->symbol "Enum1") (scm:lambda (_)
      ($lazy-enumMinute)))))

  (rt:define-lazy $lazy-enumMinute "enumMinute" "Data.Time.Component"
    (scm:list (scm:cons (scm:string->symbol "succ") (scm:lambda (x0)
      (scm:let ([_1 (scm:fx+ x0 1)])
        (scm:cond
          [(scm:and (scm:fx>=? _1 0) (scm:fx<=? _1 59)) (Data.Maybe.Just _1)]
          [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "pred") (scm:lambda (x0)
      (scm:let ([_1 (scm:fx- x0 1)])
        (scm:cond
          [(scm:and (scm:fx>=? _1 0) (scm:fx<=? _1 59)) (Data.Maybe.Just _1)]
          [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordInt))))

  (scm:define boundedEnumMinute
    ($lazy-boundedEnumMinute))

  (scm:define enumMinute
    ($lazy-enumMinute))

  (rt:define-lazy $lazy-boundedEnumMillisecond "boundedEnumMillisecond" "Data.Time.Component"
    (scm:list (scm:cons (scm:string->symbol "cardinality") 1000) (scm:cons (scm:string->symbol "toEnum") (scm:lambda (n0)
      (scm:cond
        [(scm:and (scm:fx>=? n0 0) (scm:fx<=? n0 999)) (Data.Maybe.Just n0)]
        [scm:else Data.Maybe.Nothing]))) (scm:cons (scm:string->symbol "fromEnum") (scm:lambda (v0)
      v0)) (scm:cons (scm:string->symbol "Bounded0") (scm:lambda (_)
      boundedMillisecond)) (scm:cons (scm:string->symbol "Enum1") (scm:lambda (_)
      ($lazy-enumMillisecond)))))

  (rt:define-lazy $lazy-enumMillisecond "enumMillisecond" "Data.Time.Component"
    (scm:list (scm:cons (scm:string->symbol "succ") (scm:lambda (x0)
      (scm:let ([_1 (scm:fx+ x0 1)])
        (scm:cond
          [(scm:and (scm:fx>=? _1 0) (scm:fx<=? _1 999)) (Data.Maybe.Just _1)]
          [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "pred") (scm:lambda (x0)
      (scm:let ([_1 (scm:fx- x0 1)])
        (scm:cond
          [(scm:and (scm:fx>=? _1 0) (scm:fx<=? _1 999)) (Data.Maybe.Just _1)]
          [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordInt))))

  (scm:define boundedEnumMillisecond
    ($lazy-boundedEnumMillisecond))

  (scm:define enumMillisecond
    ($lazy-enumMillisecond))

  (rt:define-lazy $lazy-boundedEnumHour "boundedEnumHour" "Data.Time.Component"
    (scm:list (scm:cons (scm:string->symbol "cardinality") 24) (scm:cons (scm:string->symbol "toEnum") (scm:lambda (n0)
      (scm:cond
        [(scm:and (scm:fx>=? n0 0) (scm:fx<=? n0 23)) (Data.Maybe.Just n0)]
        [scm:else Data.Maybe.Nothing]))) (scm:cons (scm:string->symbol "fromEnum") (scm:lambda (v0)
      v0)) (scm:cons (scm:string->symbol "Bounded0") (scm:lambda (_)
      boundedHour)) (scm:cons (scm:string->symbol "Enum1") (scm:lambda (_)
      ($lazy-enumHour)))))

  (rt:define-lazy $lazy-enumHour "enumHour" "Data.Time.Component"
    (scm:list (scm:cons (scm:string->symbol "succ") (scm:lambda (x0)
      (scm:let ([_1 (scm:fx+ x0 1)])
        (scm:cond
          [(scm:and (scm:fx>=? _1 0) (scm:fx<=? _1 23)) (Data.Maybe.Just _1)]
          [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "pred") (scm:lambda (x0)
      (scm:let ([_1 (scm:fx- x0 1)])
        (scm:cond
          [(scm:and (scm:fx>=? _1 0) (scm:fx<=? _1 23)) (Data.Maybe.Just _1)]
          [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordInt))))

  (scm:define boundedEnumHour
    ($lazy-boundedEnumHour))

  (scm:define enumHour
    ($lazy-enumHour)))
