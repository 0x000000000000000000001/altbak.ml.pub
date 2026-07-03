#!r6rs
#!chezscheme
(library
  (Data.Time.Duration.Gen lib)
  (export
    genDays
    genHours
    genMilliseconds
    genMinutes
    genSeconds)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Time.Duration lib) Data.Time.Duration.))

  (scm:define genSeconds
    (scm:lambda (dictMonadGen0)
      (((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadGen0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) Data.Time.Duration.Seconds) (((rt:record-ref dictMonadGen0 (scm:string->symbol "chooseFloat")) 0.0) 600.0))))

  (scm:define genMinutes
    (scm:lambda (dictMonadGen0)
      (((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadGen0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) Data.Time.Duration.Minutes) (((rt:record-ref dictMonadGen0 (scm:string->symbol "chooseFloat")) 0.0) 600.0))))

  (scm:define genMilliseconds
    (scm:lambda (dictMonadGen0)
      (((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadGen0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) Data.Time.Duration.Milliseconds) (((rt:record-ref dictMonadGen0 (scm:string->symbol "chooseFloat")) 0.0) 600000.0))))

  (scm:define genHours
    (scm:lambda (dictMonadGen0)
      (((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadGen0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) Data.Time.Duration.Hours) (((rt:record-ref dictMonadGen0 (scm:string->symbol "chooseFloat")) 0.0) 240.0))))

  (scm:define genDays
    (scm:lambda (dictMonadGen0)
      (((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadGen0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) Data.Time.Duration.Days) (((rt:record-ref dictMonadGen0 (scm:string->symbol "chooseFloat")) 0.0) 42.0)))))
