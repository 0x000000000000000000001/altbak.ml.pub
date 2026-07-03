#!r6rs
#!chezscheme
(library
  (Control.Monad.Gen.Common lib)
  (export
    genEither
    genEither$p
    genIdentity
    genMaybe
    genMaybe$p
    genNonEmpty
    genTuple
    max)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.Gen lib) Control.Monad.Gen.)
    (prefix (Data.Either lib) Data.Either.)
    (prefix (Data.Identity lib) Data.Identity.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.NonEmpty lib) Data.NonEmpty.)
    (prefix (Data.Ord lib) Data.Ord.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define max
    (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:let ([v2 (((rt:record-ref Data.Ord.ordInt (scm:string->symbol "compare")) x0) y1)])
          (scm:cond
            [(Data.Ordering.LT? v2) y1]
            [(Data.Ordering.EQ? v2) x0]
            [(Data.Ordering.GT? v2) x0]
            [scm:else (rt:fail)])))))

  (scm:define genTuple
    (scm:lambda (dictApply0)
      (scm:lambda (a1)
        (scm:lambda (b2)
          (((rt:record-ref dictApply0 (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref dictApply0 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) Data.Tuple.Tuple) a1)) b2)))))

  (scm:define genNonEmpty
    (scm:lambda (dictMonadRec0)
      (scm:lambda (dictMonadGen1)
        (scm:let*
          ([Apply02 ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadGen1 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined))]
           [unfoldable13 ((Control.Monad.Gen.unfoldable dictMonadRec0) dictMonadGen1)])
            (scm:lambda (dictUnfoldable4)
              (scm:let ([unfoldable25 (unfoldable13 dictUnfoldable4)])
                (scm:lambda (gen6)
                  (((rt:record-ref Apply02 (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref Apply02 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) Data.NonEmpty.NonEmpty) gen6)) (((rt:record-ref dictMonadGen1 (scm:string->symbol "resize")) (scm:lambda (x7)
                    ((max 0) (scm:fx- x7 1)))) (unfoldable25 gen6))))))))))

  (scm:define genMaybe$p
    (scm:lambda (dictMonadGen0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadGen0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [Bind12 ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined))])
          (scm:lambda (bias3)
            (scm:lambda (gen4)
              (((rt:record-ref Bind12 (scm:string->symbol "bind")) (((rt:record-ref dictMonadGen0 (scm:string->symbol "chooseFloat")) 0.0) 1.0)) (scm:lambda (n5)
                (scm:cond
                  [(scm:fl<? n5 bias3) (((rt:record-ref ((rt:record-ref ((rt:record-ref Bind12 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) Data.Maybe.Just) gen4)]
                  [scm:else ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) Data.Maybe.Nothing)]))))))))

  (scm:define genMaybe
    (scm:lambda (dictMonadGen0)
      ((genMaybe$p dictMonadGen0) 0.75)))

  (scm:define genIdentity
    (scm:lambda (dictFunctor0)
      ((rt:record-ref dictFunctor0 (scm:string->symbol "map")) Data.Identity.Identity)))

  (scm:define genEither$p
    (scm:lambda (dictMonadGen0)
      (scm:let*
        ([Bind11 ((rt:record-ref ((rt:record-ref dictMonadGen0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined))]
         [_2 ((rt:record-ref ((rt:record-ref Bind11 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined))])
          (scm:lambda (bias3)
            (scm:lambda (genA4)
              (scm:lambda (genB5)
                (((rt:record-ref Bind11 (scm:string->symbol "bind")) (((rt:record-ref dictMonadGen0 (scm:string->symbol "chooseFloat")) 0.0) 1.0)) (scm:lambda (n6)
                  (scm:cond
                    [(scm:fl<? n6 bias3) (((rt:record-ref _2 (scm:string->symbol "map")) Data.Either.Left) genA4)]
                    [scm:else (((rt:record-ref _2 (scm:string->symbol "map")) Data.Either.Right) genB5)])))))))))

  (scm:define genEither
    (scm:lambda (dictMonadGen0)
      ((genEither$p dictMonadGen0) 0.5))))
