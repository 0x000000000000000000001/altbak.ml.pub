#!r6rs
#!chezscheme
(library
  (Control.Comonad.Store.Class lib)
  (export
    comonadStoreEnvT
    comonadStoreStoreT
    comonadStoreTracedT
    experiment
    peek
    peeks
    pos
    seek
    seeks)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Comonad.Env.Trans lib) Control.Comonad.Env.Trans.)
    (prefix (Control.Comonad.Store.Trans lib) Control.Comonad.Store.Trans.)
    (prefix (Control.Comonad.Traced.Trans lib) Control.Comonad.Traced.Trans.)
    (prefix (Control.Extend lib) Control.Extend.)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define pos
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "pos"))))

  (scm:define peek
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "peek"))))

  (scm:define peeks
    (scm:lambda (dictComonadStore0)
      (scm:lambda (f1)
        (scm:lambda (x2)
          (((rt:record-ref dictComonadStore0 (scm:string->symbol "peek")) (f1 ((rt:record-ref dictComonadStore0 (scm:string->symbol "pos")) x2))) x2)))))

  (scm:define seeks
    (scm:lambda (dictComonadStore0)
      (scm:let ([duplicate1 ((rt:record-ref ((rt:record-ref ((rt:record-ref dictComonadStore0 (scm:string->symbol "Comonad0")) (scm:quote undefined)) (scm:string->symbol "Extend0")) (scm:quote undefined)) (scm:string->symbol "extend")) Control.Extend.identity)])
        (scm:lambda (f2)
          (scm:lambda (x3)
            (scm:let ([_4 (duplicate1 x3)])
              (((rt:record-ref dictComonadStore0 (scm:string->symbol "peek")) (f2 ((rt:record-ref dictComonadStore0 (scm:string->symbol "pos")) _4))) _4)))))))

  (scm:define seek
    (scm:lambda (dictComonadStore0)
      (scm:let ([duplicate1 ((rt:record-ref ((rt:record-ref ((rt:record-ref dictComonadStore0 (scm:string->symbol "Comonad0")) (scm:quote undefined)) (scm:string->symbol "Extend0")) (scm:quote undefined)) (scm:string->symbol "extend")) Control.Extend.identity)])
        (scm:lambda (s2)
          (scm:let ([_3 ((rt:record-ref dictComonadStore0 (scm:string->symbol "peek")) s2)])
            (scm:lambda (x4)
              (_3 (duplicate1 x4))))))))

  (scm:define experiment
    (scm:lambda (dictComonadStore0)
      (scm:lambda (dictFunctor1)
        (scm:lambda (f2)
          (scm:lambda (x3)
            (((rt:record-ref dictFunctor1 (scm:string->symbol "map")) (scm:lambda (a4)
              (((rt:record-ref dictComonadStore0 (scm:string->symbol "peek")) a4) x3))) (f2 ((rt:record-ref dictComonadStore0 (scm:string->symbol "pos")) x3))))))))

  (scm:define comonadStoreTracedT
    (scm:lambda (dictComonadStore0)
      (scm:let*
        ([Comonad01 ((rt:record-ref dictComonadStore0 (scm:string->symbol "Comonad0")) (scm:quote undefined))]
         [comonadTracedT2 (Control.Comonad.Traced.Trans.comonadTracedT Comonad01)])
          (scm:lambda (dictMonoid3)
            (scm:let*
              ([mempty4 (rt:record-ref dictMonoid3 (scm:string->symbol "mempty"))]
               [lower15 (scm:lambda (v5)
                (((rt:record-ref ((rt:record-ref ((rt:record-ref Comonad01 (scm:string->symbol "Extend0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (f6)
                  (f6 mempty4))) v5))]
               [comonadTracedT16 (comonadTracedT2 dictMonoid3)])
                (scm:list (scm:cons (scm:string->symbol "pos") (scm:lambda (x7)
                  ((rt:record-ref dictComonadStore0 (scm:string->symbol "pos")) (lower15 x7)))) (scm:cons (scm:string->symbol "peek") (scm:lambda (s7)
                  (scm:let ([_8 ((rt:record-ref dictComonadStore0 (scm:string->symbol "peek")) s7)])
                    (scm:lambda (x9)
                      (_8 (lower15 x9)))))) (scm:cons (scm:string->symbol "Comonad0") (scm:lambda (_)
                  comonadTracedT16))))))))

  (scm:define comonadStoreStoreT
    (scm:lambda (dictComonad0)
      (scm:let ([comonadStoreT1 (Control.Comonad.Store.Trans.comonadStoreT dictComonad0)])
        (scm:list (scm:cons (scm:string->symbol "pos") (scm:lambda (v2)
          (Data.Tuple.Tuple-value1 v2))) (scm:cons (scm:string->symbol "peek") (scm:lambda (s2)
          (scm:lambda (v3)
            (((rt:record-ref dictComonad0 (scm:string->symbol "extract")) (Data.Tuple.Tuple-value0 v3)) s2)))) (scm:cons (scm:string->symbol "Comonad0") (scm:lambda (_)
          comonadStoreT1))))))

  (scm:define comonadStoreEnvT
    (scm:lambda (dictComonadStore0)
      (scm:let ([comonadEnvT1 (Control.Comonad.Env.Trans.comonadEnvT ((rt:record-ref dictComonadStore0 (scm:string->symbol "Comonad0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "pos") (scm:lambda (x2)
          ((rt:record-ref dictComonadStore0 (scm:string->symbol "pos")) (Data.Tuple.Tuple-value1 x2)))) (scm:cons (scm:string->symbol "peek") (scm:lambda (s2)
          (scm:let ([_3 ((rt:record-ref dictComonadStore0 (scm:string->symbol "peek")) s2)])
            (scm:lambda (x4)
              (_3 (Data.Tuple.Tuple-value1 x4)))))) (scm:cons (scm:string->symbol "Comonad0") (scm:lambda (_)
          comonadEnvT1)))))))
