#!r6rs
#!chezscheme
(library
  (Data.Date.Component.Gen lib)
  (export
    genDay
    genMonth
    genWeekday
    genYear)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Date.Component lib) Data.Date.Component.)
    (prefix (Data.Enum.Gen lib) Data.Enum.Gen.))

  (scm:define genYear
    (scm:lambda (dictMonadGen0)
      (((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadGen0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (x1)
        (scm:cond
          [(scm:and (scm:fx>=? x1 -271820) (scm:fx<=? x1 275759)) x1]
          [scm:else (rt:fail)]))) (((rt:record-ref dictMonadGen0 (scm:string->symbol "chooseInt")) 1900) 2100))))

  (scm:define genWeekday
    (scm:lambda (dictMonadGen0)
      ((Data.Enum.Gen.genBoundedEnum dictMonadGen0) Data.Date.Component.boundedEnumWeekday)))

  (scm:define genMonth
    (scm:lambda (dictMonadGen0)
      ((Data.Enum.Gen.genBoundedEnum dictMonadGen0) Data.Date.Component.boundedEnumMonth)))

  (scm:define genDay
    (scm:lambda (dictMonadGen0)
      ((Data.Enum.Gen.genBoundedEnum dictMonadGen0) Data.Date.Component.boundedEnumDay))))
