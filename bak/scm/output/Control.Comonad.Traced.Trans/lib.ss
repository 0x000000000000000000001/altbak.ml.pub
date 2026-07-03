#!r6rs
#!chezscheme
(library
  (Control.Comonad.Traced.Trans lib)
  (export
    TracedT
    comonadTracedT
    comonadTransTracedT
    extendTracedT
    functorTracedT
    newtypeTracedT
    runTracedT)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:))

  (scm:define TracedT
    (scm:lambda (x0)
      x0))

  (scm:define runTracedT
    (scm:lambda (v0)
      v0))

  (scm:define newtypeTracedT
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define functorTracedT
    (scm:lambda (dictFunctor0)
      (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f1)
        (scm:lambda (v2)
          (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (scm:lambda (g3)
            (scm:lambda (t4)
              (f1 (g3 t4))))) v2)))))))

  (scm:define extendTracedT
    (scm:lambda (dictExtend0)
      (scm:let*
        ([Functor01 ((rt:record-ref dictExtend0 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [functorTracedT12 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f2)
          (scm:lambda (v3)
            (((rt:record-ref Functor01 (scm:string->symbol "map")) (scm:lambda (g4)
              (scm:lambda (t5)
                (f2 (g4 t5))))) v3)))))])
          (scm:lambda (dictSemigroup3)
            (scm:list (scm:cons (scm:string->symbol "extend") (scm:lambda (f4)
              (scm:lambda (v5)
                (((rt:record-ref dictExtend0 (scm:string->symbol "extend")) (scm:lambda (w$p6)
                  (scm:lambda (t7)
                    (f4 (((rt:record-ref Functor01 (scm:string->symbol "map")) (scm:lambda (h8)
                      (scm:lambda (t$p9)
                        (h8 (((rt:record-ref dictSemigroup3 (scm:string->symbol "append")) t7) t$p9))))) w$p6))))) v5)))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
              functorTracedT12)))))))

  (scm:define comonadTransTracedT
    (scm:lambda (dictMonoid0)
      (scm:let ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))])
        (scm:list (scm:cons (scm:string->symbol "lower") (scm:lambda (dictComonad2)
          (scm:lambda (v3)
            (((rt:record-ref ((rt:record-ref ((rt:record-ref dictComonad2 (scm:string->symbol "Extend0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (f4)
              (f4 mempty1))) v3))))))))

  (scm:define comonadTracedT
    (scm:lambda (dictComonad0)
      (scm:let*
        ([_1 ((rt:record-ref dictComonad0 (scm:string->symbol "Extend0")) (scm:quote undefined))]
         [Functor02 ((rt:record-ref _1 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [extendTracedT13 (scm:let ([functorTracedT13 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f3)
          (scm:lambda (v4)
            (((rt:record-ref Functor02 (scm:string->symbol "map")) (scm:lambda (g5)
              (scm:lambda (t6)
                (f3 (g5 t6))))) v4)))))])
          (scm:lambda (dictSemigroup4)
            (scm:list (scm:cons (scm:string->symbol "extend") (scm:lambda (f5)
              (scm:lambda (v6)
                (((rt:record-ref _1 (scm:string->symbol "extend")) (scm:lambda (w$p7)
                  (scm:lambda (t8)
                    (f5 (((rt:record-ref Functor02 (scm:string->symbol "map")) (scm:lambda (h9)
                      (scm:lambda (t$p10)
                        (h9 (((rt:record-ref dictSemigroup4 (scm:string->symbol "append")) t8) t$p10))))) w$p7))))) v6)))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
              functorTracedT13)))))])
          (scm:lambda (dictMonoid4)
            (scm:let*
              ([mempty5 (rt:record-ref dictMonoid4 (scm:string->symbol "mempty"))]
               [extendTracedT26 (extendTracedT13 ((rt:record-ref dictMonoid4 (scm:string->symbol "Semigroup0")) (scm:quote undefined)))])
                (scm:list (scm:cons (scm:string->symbol "extract") (scm:lambda (v7)
                  (((rt:record-ref dictComonad0 (scm:string->symbol "extract")) v7) mempty5))) (scm:cons (scm:string->symbol "Extend0") (scm:lambda (_)
                  extendTracedT26)))))))))
