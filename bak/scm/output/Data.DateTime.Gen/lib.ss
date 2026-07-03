#!r6rs
#!chezscheme
(library
  (Data.DateTime.Gen lib)
  (export
    genDateTime)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Date.Gen lib) Data.Date.Gen.)
    (prefix (Data.DateTime lib) Data.DateTime.)
    (prefix (Data.Time.Gen lib) Data.Time.Gen.))

  (scm:define genDateTime
    (scm:lambda (dictMonadGen0)
      (scm:let ([Apply01 ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadGen0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined))])
        (((rt:record-ref Apply01 (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref Apply01 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) Data.DateTime.DateTime) (Data.Date.Gen.genDate dictMonadGen0))) (Data.Time.Gen.genTime dictMonadGen0))))))
