#!r6rs
#!chezscheme
(library
  (Control.Parallel lib)
  (export
    identity
    parApply
    parOneOf
    parOneOfMap
    parSequence
    parSequence_
    parTraverse
    parTraverse_)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Foldable lib) Data.Foldable.))

  (scm:define identity
    (scm:lambda (x0)
      x0))

  (scm:define parTraverse_
    (scm:lambda (dictParallel0)
      (scm:lambda (dictApplicative1)
        (scm:let ([traverse_2 (Data.Foldable.traverse_ dictApplicative1)])
          (scm:lambda (dictFoldable3)
            (scm:let ([traverse_14 (traverse_2 dictFoldable3)])
              (scm:lambda (f5)
                (scm:let ([_6 (traverse_14 (scm:lambda (x6)
                  ((rt:record-ref dictParallel0 (scm:string->symbol "parallel")) (f5 x6))))])
                  (scm:lambda (x7)
                    ((rt:record-ref dictParallel0 (scm:string->symbol "sequential")) (_6 x7)))))))))))

  (scm:define parTraverse
    (scm:lambda (dictParallel0)
      (scm:lambda (dictApplicative1)
        (scm:lambda (dictTraversable2)
          (scm:let ([traverse3 ((rt:record-ref dictTraversable2 (scm:string->symbol "traverse")) dictApplicative1)])
            (scm:lambda (f4)
              (scm:let ([_5 (traverse3 (scm:lambda (x5)
                ((rt:record-ref dictParallel0 (scm:string->symbol "parallel")) (f4 x5))))])
                (scm:lambda (x6)
                  ((rt:record-ref dictParallel0 (scm:string->symbol "sequential")) (_5 x6))))))))))

  (scm:define parSequence_
    (scm:lambda (dictParallel0)
      (scm:lambda (dictApplicative1)
        (scm:let ([parTraverse_22 ((parTraverse_ dictParallel0) dictApplicative1)])
          (scm:lambda (dictFoldable3)
            ((parTraverse_22 dictFoldable3) identity))))))

  (scm:define parSequence
    (scm:lambda (dictParallel0)
      (scm:lambda (dictApplicative1)
        (scm:lambda (dictTraversable2)
          (scm:let ([_3 (((rt:record-ref dictTraversable2 (scm:string->symbol "traverse")) dictApplicative1) (scm:lambda (x3)
            ((rt:record-ref dictParallel0 (scm:string->symbol "parallel")) x3)))])
            (scm:lambda (x4)
              ((rt:record-ref dictParallel0 (scm:string->symbol "sequential")) (_3 x4))))))))

  (scm:define parOneOfMap
    (scm:lambda (dictParallel0)
      (scm:lambda (dictAlternative1)
        (scm:let ([Plus12 ((rt:record-ref dictAlternative1 (scm:string->symbol "Plus1")) (scm:quote undefined))])
          (scm:lambda (dictFoldable3)
            (scm:let ([empty4 (rt:record-ref Plus12 (scm:string->symbol "empty"))])
              (scm:lambda (dictFunctor5)
                (scm:lambda (f6)
                  (scm:let ([_7 (((rt:record-ref dictFoldable3 (scm:string->symbol "foldr")) (scm:lambda (x7)
                    ((rt:record-ref ((rt:record-ref Plus12 (scm:string->symbol "Alt0")) (scm:quote undefined)) (scm:string->symbol "alt")) ((rt:record-ref dictParallel0 (scm:string->symbol "parallel")) (f6 x7))))) empty4)])
                    (scm:lambda (x8)
                      ((rt:record-ref dictParallel0 (scm:string->symbol "sequential")) (_7 x8))))))))))))

  (scm:define parOneOf
    (scm:lambda (dictParallel0)
      (scm:lambda (dictAlternative1)
        (scm:let ([Plus12 ((rt:record-ref dictAlternative1 (scm:string->symbol "Plus1")) (scm:quote undefined))])
          (scm:lambda (dictFoldable3)
            (scm:let ([empty4 (rt:record-ref Plus12 (scm:string->symbol "empty"))])
              (scm:lambda (dictFunctor5)
                (scm:let ([_6 (((rt:record-ref dictFoldable3 (scm:string->symbol "foldr")) (scm:lambda (x6)
                  ((rt:record-ref ((rt:record-ref Plus12 (scm:string->symbol "Alt0")) (scm:quote undefined)) (scm:string->symbol "alt")) ((rt:record-ref dictParallel0 (scm:string->symbol "parallel")) x6)))) empty4)])
                  (scm:lambda (x7)
                    ((rt:record-ref dictParallel0 (scm:string->symbol "sequential")) (_6 x7)))))))))))

  (scm:define parApply
    (scm:lambda (dictParallel0)
      (scm:lambda (mf1)
        (scm:lambda (ma2)
          ((rt:record-ref dictParallel0 (scm:string->symbol "sequential")) (((rt:record-ref ((rt:record-ref dictParallel0 (scm:string->symbol "Apply1")) (scm:quote undefined)) (scm:string->symbol "apply")) ((rt:record-ref dictParallel0 (scm:string->symbol "parallel")) mf1)) ((rt:record-ref dictParallel0 (scm:string->symbol "parallel")) ma2))))))))
