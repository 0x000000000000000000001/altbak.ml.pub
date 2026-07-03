#!r6rs
#!chezscheme
(library
  (Data.Profunctor.Strong lib)
  (export
    fanout
    first
    second
    splitStrong
    strongFn)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Profunctor lib) Data.Profunctor.)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define strongFn
    (scm:list (scm:cons (scm:string->symbol "first") (scm:lambda (a2b0)
      (scm:lambda (v1)
        (Data.Tuple.Tuple* (a2b0 (Data.Tuple.Tuple-value0 v1)) (Data.Tuple.Tuple-value1 v1))))) (scm:cons (scm:string->symbol "second") (rt:record-ref Data.Tuple.functorTuple (scm:string->symbol "map"))) (scm:cons (scm:string->symbol "Profunctor0") (scm:lambda (_)
      Data.Profunctor.profunctorFn))))

  (scm:define second
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "second"))))

  (scm:define first
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "first"))))

  (scm:define splitStrong
    (scm:lambda (dictSemigroupoid0)
      (scm:lambda (dictStrong1)
        (scm:lambda (l2)
          (scm:lambda (r3)
            (((rt:record-ref dictSemigroupoid0 (scm:string->symbol "compose")) ((rt:record-ref dictStrong1 (scm:string->symbol "second")) r3)) ((rt:record-ref dictStrong1 (scm:string->symbol "first")) l2)))))))

  (scm:define fanout
    (scm:lambda (dictSemigroupoid0)
      (scm:lambda (dictStrong1)
        (scm:let ([lcmap2 (Data.Profunctor.lcmap ((rt:record-ref dictStrong1 (scm:string->symbol "Profunctor0")) (scm:quote undefined)))])
          (scm:lambda (l3)
            (scm:lambda (r4)
              ((lcmap2 (scm:lambda (a5)
                (Data.Tuple.Tuple* a5 a5))) (((rt:record-ref dictSemigroupoid0 (scm:string->symbol "compose")) ((rt:record-ref dictStrong1 (scm:string->symbol "second")) r4)) ((rt:record-ref dictStrong1 (scm:string->symbol "first")) l3))))))))))
