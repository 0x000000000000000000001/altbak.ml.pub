#!r6rs
#!chezscheme
(library
  (Data.Profunctor.Choice lib)
  (export
    choiceFn
    fanin
    left
    right
    splitChoice)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Either lib) Data.Either.)
    (prefix (Data.Profunctor lib) Data.Profunctor.))

  (scm:define right
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "right"))))

  (scm:define left
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "left"))))

  (scm:define splitChoice
    (scm:lambda (dictSemigroupoid0)
      (scm:lambda (dictChoice1)
        (scm:lambda (l2)
          (scm:lambda (r3)
            (((rt:record-ref dictSemigroupoid0 (scm:string->symbol "compose")) ((rt:record-ref dictChoice1 (scm:string->symbol "right")) r3)) ((rt:record-ref dictChoice1 (scm:string->symbol "left")) l2)))))))

  (scm:define fanin
    (scm:lambda (dictSemigroupoid0)
      (scm:lambda (dictChoice1)
        (scm:let ([rmap2 (Data.Profunctor.rmap ((rt:record-ref dictChoice1 (scm:string->symbol "Profunctor0")) (scm:quote undefined)))])
          (scm:lambda (l3)
            (scm:lambda (r4)
              ((rmap2 (scm:lambda (v25)
                (scm:cond
                  [(Data.Either.Left? v25) (Data.Either.Left-value0 v25)]
                  [(Data.Either.Right? v25) (Data.Either.Right-value0 v25)]
                  [scm:else (rt:fail)]))) (((rt:record-ref dictSemigroupoid0 (scm:string->symbol "compose")) ((rt:record-ref dictChoice1 (scm:string->symbol "right")) r4)) ((rt:record-ref dictChoice1 (scm:string->symbol "left")) l3)))))))))

  (scm:define choiceFn
    (scm:list (scm:cons (scm:string->symbol "left") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:cond
          [(Data.Either.Left? v11) (Data.Either.Left (v0 (Data.Either.Left-value0 v11)))]
          [(Data.Either.Right? v11) (Data.Either.Right (Data.Either.Right-value0 v11))]
          [scm:else (rt:fail)])))) (scm:cons (scm:string->symbol "right") (rt:record-ref Data.Either.functorEither (scm:string->symbol "map"))) (scm:cons (scm:string->symbol "Profunctor0") (scm:lambda (_)
      Data.Profunctor.profunctorFn)))))
