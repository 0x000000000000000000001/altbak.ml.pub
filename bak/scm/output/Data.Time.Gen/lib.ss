#!r6rs
#!chezscheme
(library
  (Data.Time.Gen lib)
  (export
    genTime)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Enum.Gen lib) Data.Enum.Gen.)
    (prefix (Data.Time lib) Data.Time.)
    (prefix (Data.Time.Component lib) Data.Time.Component.))

  (scm:define genTime
    (scm:lambda (dictMonadGen0)
      (scm:let ([Apply01 ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadGen0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined))])
        (((rt:record-ref Apply01 (scm:string->symbol "apply")) (((rt:record-ref Apply01 (scm:string->symbol "apply")) (((rt:record-ref Apply01 (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref Apply01 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) Data.Time.Time) ((Data.Enum.Gen.genBoundedEnum dictMonadGen0) Data.Time.Component.boundedEnumHour))) ((Data.Enum.Gen.genBoundedEnum dictMonadGen0) Data.Time.Component.boundedEnumMinute))) ((Data.Enum.Gen.genBoundedEnum dictMonadGen0) Data.Time.Component.boundedEnumSecond))) ((Data.Enum.Gen.genBoundedEnum dictMonadGen0) Data.Time.Component.boundedEnumMillisecond))))))
