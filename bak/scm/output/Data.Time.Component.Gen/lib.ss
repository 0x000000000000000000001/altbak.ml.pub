#!r6rs
#!chezscheme
(library
  (Data.Time.Component.Gen lib)
  (export
    genHour
    genMillisecond
    genMinute
    genSecond)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Enum.Gen lib) Data.Enum.Gen.)
    (prefix (Data.Time.Component lib) Data.Time.Component.))

  (scm:define genSecond
    (scm:lambda (dictMonadGen0)
      ((Data.Enum.Gen.genBoundedEnum dictMonadGen0) Data.Time.Component.boundedEnumSecond)))

  (scm:define genMinute
    (scm:lambda (dictMonadGen0)
      ((Data.Enum.Gen.genBoundedEnum dictMonadGen0) Data.Time.Component.boundedEnumMinute)))

  (scm:define genMillisecond
    (scm:lambda (dictMonadGen0)
      ((Data.Enum.Gen.genBoundedEnum dictMonadGen0) Data.Time.Component.boundedEnumMillisecond)))

  (scm:define genHour
    (scm:lambda (dictMonadGen0)
      ((Data.Enum.Gen.genBoundedEnum dictMonadGen0) Data.Time.Component.boundedEnumHour))))
