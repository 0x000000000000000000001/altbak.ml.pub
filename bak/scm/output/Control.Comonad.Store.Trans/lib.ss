#!r6rs
#!chezscheme
(library
  (Control.Comonad.Store.Trans lib)
  (export
    StoreT
    comonadStoreT
    comonadTransStoreT
    extendStoreT
    functorStoreT
    newtypeStoreT
    runStoreT)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define StoreT
    (scm:lambda (x0)
      x0))

  (scm:define runStoreT
    (scm:lambda (v0)
      v0))

  (scm:define newtypeStoreT
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define functorStoreT
    (scm:lambda (dictFunctor0)
      (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f1)
        (scm:lambda (v2)
          (Data.Tuple.Tuple* (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (scm:lambda (h3)
            (scm:lambda (x4)
              (f1 (h3 x4))))) (Data.Tuple.Tuple-value0 v2)) (Data.Tuple.Tuple-value1 v2))))))))

  (scm:define extendStoreT
    (scm:lambda (dictExtend0)
      (scm:let*
        ([_1 ((rt:record-ref dictExtend0 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorStoreT12 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f2)
          (scm:lambda (v3)
            (Data.Tuple.Tuple* (((rt:record-ref _1 (scm:string->symbol "map")) (scm:lambda (h4)
              (scm:lambda (x5)
                (f2 (h4 x5))))) (Data.Tuple.Tuple-value0 v3)) (Data.Tuple.Tuple-value1 v3))))))])
          (scm:list (scm:cons (scm:string->symbol "extend") (scm:lambda (f3)
            (scm:lambda (v4)
              (Data.Tuple.Tuple* (((rt:record-ref dictExtend0 (scm:string->symbol "extend")) (scm:lambda (w$p5)
                (scm:lambda (s$p6)
                  (f3 (Data.Tuple.Tuple* w$p5 s$p6))))) (Data.Tuple.Tuple-value0 v4)) (Data.Tuple.Tuple-value1 v4))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorStoreT12))))))

  (scm:define comonadTransStoreT
    (scm:list (scm:cons (scm:string->symbol "lower") (scm:lambda (dictComonad0)
      (scm:lambda (v1)
        (scm:let ([_2 (Data.Tuple.Tuple-value1 v1)])
          (((rt:record-ref ((rt:record-ref ((rt:record-ref dictComonad0 (scm:string->symbol "Extend0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (v13)
            (v13 _2))) (Data.Tuple.Tuple-value0 v1))))))))

  (scm:define comonadStoreT
    (scm:lambda (dictComonad0)
      (scm:let*
        ([_1 ((rt:record-ref dictComonad0 (scm:string->symbol "Extend0")) (scm:quote undefined))]
         [_2 ((rt:record-ref _1 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [extendStoreT13 (scm:let ([functorStoreT13 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f3)
          (scm:lambda (v4)
            (Data.Tuple.Tuple* (((rt:record-ref _2 (scm:string->symbol "map")) (scm:lambda (h5)
              (scm:lambda (x6)
                (f3 (h5 x6))))) (Data.Tuple.Tuple-value0 v4)) (Data.Tuple.Tuple-value1 v4))))))])
          (scm:list (scm:cons (scm:string->symbol "extend") (scm:lambda (f4)
            (scm:lambda (v5)
              (Data.Tuple.Tuple* (((rt:record-ref _1 (scm:string->symbol "extend")) (scm:lambda (w$p6)
                (scm:lambda (s$p7)
                  (f4 (Data.Tuple.Tuple* w$p6 s$p7))))) (Data.Tuple.Tuple-value0 v5)) (Data.Tuple.Tuple-value1 v5))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            functorStoreT13))))])
          (scm:list (scm:cons (scm:string->symbol "extract") (scm:lambda (v4)
            (((rt:record-ref dictComonad0 (scm:string->symbol "extract")) (Data.Tuple.Tuple-value0 v4)) (Data.Tuple.Tuple-value1 v4)))) (scm:cons (scm:string->symbol "Extend0") (scm:lambda (_)
            extendStoreT13)))))))
