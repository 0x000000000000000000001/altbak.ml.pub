#!r6rs
#!chezscheme
(library
  (Control.Comonad.Env.Trans lib)
  (export
    EnvT
    comonadEnvT
    comonadTransEnvT
    extendEnvT
    foldableEnvT
    foldableWithIndexEnvT
    functorEnvT
    functorWithIndexEnvT
    mapEnvT
    newtypeEnvT
    runEnvT
    traversableEnvT
    traversableWithIndexEnvT
    withEnvT)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define EnvT
    (scm:lambda (x0)
      x0))

  (scm:define withEnvT
    (scm:lambda (f0)
      (scm:lambda (v1)
        (Data.Tuple.Tuple* (f0 (Data.Tuple.Tuple-value0 v1)) (Data.Tuple.Tuple-value1 v1)))))

  (scm:define runEnvT
    (scm:lambda (v0)
      v0))

  (scm:define newtypeEnvT
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define mapEnvT
    (scm:lambda (f0)
      (scm:lambda (v1)
        (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v1) (f0 (Data.Tuple.Tuple-value1 v1))))))

  (scm:define functorEnvT
    (scm:lambda (dictFunctor0)
      (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f1)
        (scm:lambda (v2)
          (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v2) (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) f1) (Data.Tuple.Tuple-value1 v2)))))))))

  (scm:define functorWithIndexEnvT
    (scm:lambda (dictFunctorWithIndex0)
      (scm:let*
        ([_1 ((rt:record-ref dictFunctorWithIndex0 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorEnvT12 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f2)
          (scm:lambda (v3)
            (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v3) (((rt:record-ref _1 (scm:string->symbol "map")) f2) (Data.Tuple.Tuple-value1 v3)))))))])
          (scm:list (scm:cons (scm:string->symbol "mapWithIndex") (scm:lambda (f3)
            (scm:lambda (v4)
              (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v4) (((rt:record-ref dictFunctorWithIndex0 (scm:string->symbol "mapWithIndex")) f3) (Data.Tuple.Tuple-value1 v4)))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorEnvT12))))))

  (scm:define foldableEnvT
    (scm:lambda (dictFoldable0)
      (scm:list (scm:cons (scm:string->symbol "foldl") (scm:lambda (fn1)
        (scm:lambda (a2)
          (scm:lambda (v3)
            ((((rt:record-ref dictFoldable0 (scm:string->symbol "foldl")) fn1) a2) (Data.Tuple.Tuple-value1 v3)))))) (scm:cons (scm:string->symbol "foldr") (scm:lambda (fn1)
        (scm:lambda (a2)
          (scm:lambda (v3)
            ((((rt:record-ref dictFoldable0 (scm:string->symbol "foldr")) fn1) a2) (Data.Tuple.Tuple-value1 v3)))))) (scm:cons (scm:string->symbol "foldMap") (scm:lambda (dictMonoid1)
        (scm:let ([foldMap12 ((rt:record-ref dictFoldable0 (scm:string->symbol "foldMap")) dictMonoid1)])
          (scm:lambda (fn3)
            (scm:lambda (v4)
              ((foldMap12 fn3) (Data.Tuple.Tuple-value1 v4))))))))))

  (scm:define foldableWithIndexEnvT
    (scm:lambda (dictFoldableWithIndex0)
      (scm:let*
        ([_1 ((rt:record-ref dictFoldableWithIndex0 (scm:string->symbol "Foldable0")) (scm:quote undefined))]
         [foldableEnvT12 (scm:list (scm:cons (scm:string->symbol "foldl") (scm:lambda (fn2)
          (scm:lambda (a3)
            (scm:lambda (v4)
              ((((rt:record-ref _1 (scm:string->symbol "foldl")) fn2) a3) (Data.Tuple.Tuple-value1 v4)))))) (scm:cons (scm:string->symbol "foldr") (scm:lambda (fn2)
          (scm:lambda (a3)
            (scm:lambda (v4)
              ((((rt:record-ref _1 (scm:string->symbol "foldr")) fn2) a3) (Data.Tuple.Tuple-value1 v4)))))) (scm:cons (scm:string->symbol "foldMap") (scm:lambda (dictMonoid2)
          (scm:let ([foldMap13 ((rt:record-ref _1 (scm:string->symbol "foldMap")) dictMonoid2)])
            (scm:lambda (fn4)
              (scm:lambda (v5)
                ((foldMap13 fn4) (Data.Tuple.Tuple-value1 v5))))))))])
          (scm:list (scm:cons (scm:string->symbol "foldlWithIndex") (scm:lambda (f3)
            (scm:lambda (a4)
              (scm:lambda (v5)
                ((((rt:record-ref dictFoldableWithIndex0 (scm:string->symbol "foldlWithIndex")) f3) a4) (Data.Tuple.Tuple-value1 v5)))))) (scm:cons (scm:string->symbol "foldrWithIndex") (scm:lambda (f3)
            (scm:lambda (a4)
              (scm:lambda (v5)
                ((((rt:record-ref dictFoldableWithIndex0 (scm:string->symbol "foldrWithIndex")) f3) a4) (Data.Tuple.Tuple-value1 v5)))))) (scm:cons (scm:string->symbol "foldMapWithIndex") (scm:lambda (dictMonoid3)
            (scm:let ([foldMapWithIndex14 ((rt:record-ref dictFoldableWithIndex0 (scm:string->symbol "foldMapWithIndex")) dictMonoid3)])
              (scm:lambda (f5)
                (scm:lambda (v6)
                  ((foldMapWithIndex14 f5) (Data.Tuple.Tuple-value1 v6))))))) (scm:cons (scm:string->symbol "Foldable0") (scm:lambda (_)
            foldableEnvT12))))))

  (scm:define traversableEnvT
    (scm:lambda (dictTraversable0)
      (scm:let*
        ([_1 ((rt:record-ref dictTraversable0 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorEnvT12 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f2)
          (scm:lambda (v3)
            (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v3) (((rt:record-ref _1 (scm:string->symbol "map")) f2) (Data.Tuple.Tuple-value1 v3)))))))]
         [_3 ((rt:record-ref dictTraversable0 (scm:string->symbol "Foldable1")) (scm:quote undefined))]
         [foldableEnvT14 (scm:list (scm:cons (scm:string->symbol "foldl") (scm:lambda (fn4)
          (scm:lambda (a5)
            (scm:lambda (v6)
              ((((rt:record-ref _3 (scm:string->symbol "foldl")) fn4) a5) (Data.Tuple.Tuple-value1 v6)))))) (scm:cons (scm:string->symbol "foldr") (scm:lambda (fn4)
          (scm:lambda (a5)
            (scm:lambda (v6)
              ((((rt:record-ref _3 (scm:string->symbol "foldr")) fn4) a5) (Data.Tuple.Tuple-value1 v6)))))) (scm:cons (scm:string->symbol "foldMap") (scm:lambda (dictMonoid4)
          (scm:let ([foldMap15 ((rt:record-ref _3 (scm:string->symbol "foldMap")) dictMonoid4)])
            (scm:lambda (fn6)
              (scm:lambda (v7)
                ((foldMap15 fn6) (Data.Tuple.Tuple-value1 v7))))))))])
          (scm:list (scm:cons (scm:string->symbol "sequence") (scm:lambda (dictApplicative5)
            (scm:let ([sequence16 ((rt:record-ref dictTraversable0 (scm:string->symbol "sequence")) dictApplicative5)])
              (scm:lambda (v7)
                (((rt:record-ref ((rt:record-ref ((rt:record-ref dictApplicative5 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (Data.Tuple.Tuple (Data.Tuple.Tuple-value0 v7))) (sequence16 (Data.Tuple.Tuple-value1 v7))))))) (scm:cons (scm:string->symbol "traverse") (scm:lambda (dictApplicative5)
            (scm:let ([traverse16 ((rt:record-ref dictTraversable0 (scm:string->symbol "traverse")) dictApplicative5)])
              (scm:lambda (f7)
                (scm:lambda (v8)
                  (((rt:record-ref ((rt:record-ref ((rt:record-ref dictApplicative5 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (Data.Tuple.Tuple (Data.Tuple.Tuple-value0 v8))) ((traverse16 f7) (Data.Tuple.Tuple-value1 v8)))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorEnvT12)) (scm:cons (scm:string->symbol "Foldable1") (scm:lambda (_)
            foldableEnvT14))))))

  (scm:define traversableWithIndexEnvT
    (scm:lambda (dictTraversableWithIndex0)
      (scm:let*
        ([_1 ((rt:record-ref dictTraversableWithIndex0 (scm:string->symbol "FunctorWithIndex0")) (scm:quote undefined))]
         [_2 ((rt:record-ref _1 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorWithIndexEnvT13 (scm:let ([functorEnvT13 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f3)
          (scm:lambda (v4)
            (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v4) (((rt:record-ref _2 (scm:string->symbol "map")) f3) (Data.Tuple.Tuple-value1 v4)))))))])
          (scm:list (scm:cons (scm:string->symbol "mapWithIndex") (scm:lambda (f4)
            (scm:lambda (v5)
              (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v5) (((rt:record-ref _1 (scm:string->symbol "mapWithIndex")) f4) (Data.Tuple.Tuple-value1 v5)))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorEnvT13))))]
         [foldableWithIndexEnvT14 (foldableWithIndexEnvT ((rt:record-ref dictTraversableWithIndex0 (scm:string->symbol "FoldableWithIndex1")) (scm:quote undefined)))]
         [traversableEnvT15 (traversableEnvT ((rt:record-ref dictTraversableWithIndex0 (scm:string->symbol "Traversable2")) (scm:quote undefined)))])
          (scm:list (scm:cons (scm:string->symbol "traverseWithIndex") (scm:lambda (dictApplicative6)
            (scm:let ([traverseWithIndex17 ((rt:record-ref dictTraversableWithIndex0 (scm:string->symbol "traverseWithIndex")) dictApplicative6)])
              (scm:lambda (f8)
                (scm:lambda (v9)
                  (((rt:record-ref ((rt:record-ref ((rt:record-ref dictApplicative6 (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (Data.Tuple.Tuple (Data.Tuple.Tuple-value0 v9))) ((traverseWithIndex17 f8) (Data.Tuple.Tuple-value1 v9)))))))) (scm:cons (scm:string->symbol "FunctorWithIndex0") (scm:lambda (_)
            functorWithIndexEnvT13)) (scm:cons (scm:string->symbol "FoldableWithIndex1") (scm:lambda (_)
            foldableWithIndexEnvT14)) (scm:cons (scm:string->symbol "Traversable2") (scm:lambda (_)
            traversableEnvT15))))))

  (scm:define extendEnvT
    (scm:lambda (dictExtend0)
      (scm:let*
        ([Functor01 ((rt:record-ref dictExtend0 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorEnvT12 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f2)
          (scm:lambda (v3)
            (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v3) (((rt:record-ref Functor01 (scm:string->symbol "map")) f2) (Data.Tuple.Tuple-value1 v3)))))))])
          (scm:list (scm:cons (scm:string->symbol "extend") (scm:lambda (f3)
            (scm:lambda (v4)
              (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v4) (((rt:record-ref Functor01 (scm:string->symbol "map")) f3) (((rt:record-ref dictExtend0 (scm:string->symbol "extend")) (Data.Tuple.Tuple (Data.Tuple.Tuple-value0 v4))) (Data.Tuple.Tuple-value1 v4))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorEnvT12))))))

  (scm:define comonadTransEnvT
    (scm:list (scm:cons (scm:string->symbol "lower") (scm:lambda (dictComonad0)
      (scm:lambda (v1)
        (Data.Tuple.Tuple-value1 v1))))))

  (scm:define comonadEnvT
    (scm:lambda (dictComonad0)
      (scm:let ([extendEnvT11 (extendEnvT ((rt:record-ref dictComonad0 (scm:string->symbol "Extend0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "extract") (scm:lambda (v2)
          ((rt:record-ref dictComonad0 (scm:string->symbol "extract")) (Data.Tuple.Tuple-value1 v2)))) (scm:cons (scm:string->symbol "Extend0") (scm:lambda (_)
          extendEnvT11)))))))
