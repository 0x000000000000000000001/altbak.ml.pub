#!r6rs
#!chezscheme
(library
  (Data.Time.Duration lib)
  (export
    Days
    Hours
    Milliseconds
    Minutes
    Seconds
    convertDuration
    durationDays
    durationHours
    durationMilliseconds
    durationMinutes
    durationSeconds
    eqDays
    eqHours
    eqMilliseconds
    eqMinutes
    eqSeconds
    fromDuration
    identity
    monoidDays
    monoidHours
    monoidMilliseconds
    monoidMinutes
    monoidSeconds
    negateDuration
    newtypeDays
    newtypeHours
    newtypeMilliseconds
    newtypeMinutes
    newtypeSeconds
    ordDays
    ordHours
    ordMilliseconds
    ordMinutes
    ordSeconds
    semigroupDays
    semigroupHours
    semigroupMilliseconds
    semigroupMinutes
    semigroupSeconds
    showDays
    showHours
    showMilliseconds
    showMinutes
    showSeconds
    toDuration)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Eq lib) Data.Eq.)
    (prefix (Data.Ord lib) Data.Ord.)
    (prefix (Data.Show lib) Data.Show.))

  (scm:define identity
    (scm:lambda (x0)
      x0))

  (scm:define Seconds
    (scm:lambda (x0)
      x0))

  (scm:define Minutes
    (scm:lambda (x0)
      x0))

  (scm:define Milliseconds
    (scm:lambda (x0)
      x0))

  (scm:define Hours
    (scm:lambda (x0)
      x0))

  (scm:define Days
    (scm:lambda (x0)
      x0))

  (scm:define toDuration
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "toDuration"))))

  (scm:define showSeconds
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Seconds ") (Data.Show.showNumberImpl v0)) (rt:string->pstring ")"))))))

  (scm:define showMinutes
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Minutes ") (Data.Show.showNumberImpl v0)) (rt:string->pstring ")"))))))

  (scm:define showMilliseconds
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Milliseconds ") (Data.Show.showNumberImpl v0)) (rt:string->pstring ")"))))))

  (scm:define showHours
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Hours ") (Data.Show.showNumberImpl v0)) (rt:string->pstring ")"))))))

  (scm:define showDays
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Days ") (Data.Show.showNumberImpl v0)) (rt:string->pstring ")"))))))

  (scm:define semigroupSeconds
    (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:fl+ v0 v11))))))

  (scm:define semigroupMinutes
    (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:fl+ v0 v11))))))

  (scm:define semigroupMilliseconds
    (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:fl+ v0 v11))))))

  (scm:define semigroupHours
    (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:fl+ v0 v11))))))

  (scm:define semigroupDays
    (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:fl+ v0 v11))))))

  (scm:define ordSeconds
    Data.Ord.ordNumber)

  (scm:define ordMinutes
    Data.Ord.ordNumber)

  (scm:define ordMilliseconds
    Data.Ord.ordNumber)

  (scm:define ordHours
    Data.Ord.ordNumber)

  (scm:define ordDays
    Data.Ord.ordNumber)

  (scm:define newtypeSeconds
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define newtypeMinutes
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define newtypeMilliseconds
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define newtypeHours
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define newtypeDays
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define monoidSeconds
    (scm:list (scm:cons (scm:string->symbol "mempty") 0.0) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
      semigroupSeconds))))

  (scm:define monoidMinutes
    (scm:list (scm:cons (scm:string->symbol "mempty") 0.0) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
      semigroupMinutes))))

  (scm:define monoidMilliseconds
    (scm:list (scm:cons (scm:string->symbol "mempty") 0.0) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
      semigroupMilliseconds))))

  (scm:define monoidHours
    (scm:list (scm:cons (scm:string->symbol "mempty") 0.0) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
      semigroupHours))))

  (scm:define monoidDays
    (scm:list (scm:cons (scm:string->symbol "mempty") 0.0) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
      semigroupDays))))

  (scm:define fromDuration
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "fromDuration"))))

  (scm:define negateDuration
    (scm:lambda (dictDuration0)
      (scm:lambda (x1)
        ((rt:record-ref dictDuration0 (scm:string->symbol "toDuration")) (scm:fl- ((rt:record-ref dictDuration0 (scm:string->symbol "fromDuration")) x1))))))

  (scm:define eqSeconds
    Data.Eq.eqNumber)

  (scm:define eqMinutes
    Data.Eq.eqNumber)

  (scm:define eqMilliseconds
    Data.Eq.eqNumber)

  (scm:define eqHours
    Data.Eq.eqNumber)

  (scm:define eqDays
    Data.Eq.eqNumber)

  (scm:define durationSeconds
    (scm:list (scm:cons (scm:string->symbol "fromDuration") (scm:lambda (v0)
      (scm:fl* v0 1000.0))) (scm:cons (scm:string->symbol "toDuration") (scm:lambda (v0)
      (scm:fl/ v0 1000.0)))))

  (scm:define durationMinutes
    (scm:list (scm:cons (scm:string->symbol "fromDuration") (scm:lambda (v0)
      (scm:fl* v0 60000.0))) (scm:cons (scm:string->symbol "toDuration") (scm:lambda (v0)
      (scm:fl/ v0 60000.0)))))

  (scm:define durationMilliseconds
    (scm:list (scm:cons (scm:string->symbol "fromDuration") identity) (scm:cons (scm:string->symbol "toDuration") identity)))

  (scm:define durationHours
    (scm:list (scm:cons (scm:string->symbol "fromDuration") (scm:lambda (v0)
      (scm:fl* v0 3600000.0))) (scm:cons (scm:string->symbol "toDuration") (scm:lambda (v0)
      (scm:fl/ v0 3600000.0)))))

  (scm:define durationDays
    (scm:list (scm:cons (scm:string->symbol "fromDuration") (scm:lambda (v0)
      (scm:fl* v0 86400000.0))) (scm:cons (scm:string->symbol "toDuration") (scm:lambda (v0)
      (scm:fl/ v0 86400000.0)))))

  (scm:define convertDuration
    (scm:lambda (dictDuration0)
      (scm:lambda (dictDuration11)
        (scm:lambda (x2)
          ((rt:record-ref dictDuration11 (scm:string->symbol "toDuration")) ((rt:record-ref dictDuration0 (scm:string->symbol "fromDuration")) x2)))))))
