#!r6rs
#!chezscheme
(library
  (Data.Date.Gen lib)
  (export
    genDate)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Date lib) Data.Date.)
    (prefix (Data.Date.Component lib) Data.Date.Component.)
    (prefix (Data.Int lib) Data.Int.)
    (prefix (Data.Maybe lib) Data.Maybe.))

  (scm:define genDate
    (scm:lambda (dictMonadGen0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadGen0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [Bind12 ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined))])
          (((rt:record-ref Bind12 (scm:string->symbol "bind")) (((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadGen0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (x3)
            (scm:cond
              [(scm:and (scm:fx>=? x3 -271820) (scm:fx<=? x3 275759)) x3]
              [scm:else (rt:fail)]))) (((rt:record-ref dictMonadGen0 (scm:string->symbol "chooseInt")) 1900) 2100))) (scm:lambda (year3)
            (((rt:record-ref Bind12 (scm:string->symbol "bind")) (((rt:record-ref ((rt:record-ref ((rt:record-ref Bind12 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (x4)
              (Data.Int.toNumber x4))) (((rt:record-ref dictMonadGen0 (scm:string->symbol "chooseInt")) 0) (scm:cond
              [(Data.Date.isLeapYear year3) 365]
              [scm:else 364])))) (scm:lambda (days4)
              ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (scm:let*
                ([_5 (((Data.Date.exactDate year3) Data.Date.Component.January) 1)]
                 [_6 (scm:cond
                  [(Data.Maybe.Just? _5) ((Data.Date.adjust days4) (Data.Maybe.Just-value0 _5))]
                  [(Data.Maybe.Nothing? _5) Data.Maybe.Nothing]
                  [scm:else (rt:fail)])])
                  (scm:cond
                    [(Data.Maybe.Just? _6) (Data.Maybe.Just-value0 _6)]
                    [scm:else (rt:fail)])))))))))))
