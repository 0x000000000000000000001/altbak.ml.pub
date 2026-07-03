#!r6rs
#!chezscheme
(library
  (Control.Comonad.Env.Class lib)
  (export
    ask
    asks
    comonadAskEnvT
    comonadAskStoreT
    comonadAskTracedT
    comonadAskTuple
    comonadEnvEnvT
    comonadEnvStoreT
    comonadEnvTracedT
    comonadEnvTuple
    local)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Comonad.Env.Trans lib) Control.Comonad.Env.Trans.)
    (prefix (Control.Comonad.Store.Trans lib) Control.Comonad.Store.Trans.)
    (prefix (Control.Comonad.Traced.Trans lib) Control.Comonad.Traced.Trans.)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define local
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "local"))))

  (scm:define comonadAskTuple
    (scm:list (scm:cons (scm:string->symbol "ask") Data.Tuple.fst) (scm:cons (scm:string->symbol "Comonad0") (scm:lambda (_)
      Data.Tuple.comonadTuple))))

  (scm:define comonadEnvTuple
    (scm:list (scm:cons (scm:string->symbol "local") (scm:lambda (f0)
      (scm:lambda (v1)
        (Data.Tuple.Tuple* (f0 (Data.Tuple.Tuple-value0 v1)) (Data.Tuple.Tuple-value1 v1))))) (scm:cons (scm:string->symbol "ComonadAsk0") (scm:lambda (_)
      comonadAskTuple))))

  (scm:define comonadAskEnvT
    (scm:lambda (dictComonad0)
      (scm:let ([comonadEnvT1 (Control.Comonad.Env.Trans.comonadEnvT dictComonad0)])
        (scm:list (scm:cons (scm:string->symbol "ask") (scm:lambda (v2)
          (Data.Tuple.Tuple-value0 v2))) (scm:cons (scm:string->symbol "Comonad0") (scm:lambda (_)
          comonadEnvT1))))))

  (scm:define comonadEnvEnvT
    (scm:lambda (dictComonad0)
      (scm:let ([comonadEnvT1 (Control.Comonad.Env.Trans.comonadEnvT dictComonad0)])
        (scm:list (scm:cons (scm:string->symbol "local") (scm:lambda (f2)
          (scm:lambda (v3)
            (Data.Tuple.Tuple* (f2 (Data.Tuple.Tuple-value0 v3)) (Data.Tuple.Tuple-value1 v3))))) (scm:cons (scm:string->symbol "ComonadAsk0") (scm:lambda (_)
          (scm:list (scm:cons (scm:string->symbol "ask") (scm:lambda (v3)
            (Data.Tuple.Tuple-value0 v3))) (scm:cons (scm:string->symbol "Comonad0") (scm:lambda (_)
            comonadEnvT1)))))))))

  (scm:define ask
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "ask"))))

  (scm:define asks
    (scm:lambda (dictComonadAsk0)
      (scm:lambda (f1)
        (scm:lambda (x2)
          (f1 ((rt:record-ref dictComonadAsk0 (scm:string->symbol "ask")) x2))))))

  (scm:define comonadAskStoreT
    (scm:lambda (dictComonadAsk0)
      (scm:let*
        ([Comonad01 ((rt:record-ref dictComonadAsk0 (scm:string->symbol "Comonad0")) (scm:quote undefined))]
         [comonadStoreT2 (Control.Comonad.Store.Trans.comonadStoreT Comonad01)])
          (scm:list (scm:cons (scm:string->symbol "ask") (scm:lambda (x3)
            ((rt:record-ref dictComonadAsk0 (scm:string->symbol "ask")) (scm:let ([_4 (Data.Tuple.Tuple-value1 x3)])
              (((rt:record-ref ((rt:record-ref ((rt:record-ref Comonad01 (scm:string->symbol "Extend0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (v15)
                (v15 _4))) (Data.Tuple.Tuple-value0 x3)))))) (scm:cons (scm:string->symbol "Comonad0") (scm:lambda (_)
            comonadStoreT2))))))

  (scm:define comonadEnvStoreT
    (scm:lambda (dictComonadEnv0)
      (scm:let ([comonadAskStoreT11 (comonadAskStoreT ((rt:record-ref dictComonadEnv0 (scm:string->symbol "ComonadAsk0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "local") (scm:lambda (f2)
          (scm:lambda (v3)
            (Data.Tuple.Tuple* (((rt:record-ref dictComonadEnv0 (scm:string->symbol "local")) f2) (Data.Tuple.Tuple-value0 v3)) (Data.Tuple.Tuple-value1 v3))))) (scm:cons (scm:string->symbol "ComonadAsk0") (scm:lambda (_)
          comonadAskStoreT11))))))

  (scm:define comonadAskTracedT
    (scm:lambda (dictComonadAsk0)
      (scm:let*
        ([Comonad01 ((rt:record-ref dictComonadAsk0 (scm:string->symbol "Comonad0")) (scm:quote undefined))]
         [comonadTracedT2 (Control.Comonad.Traced.Trans.comonadTracedT Comonad01)])
          (scm:lambda (dictMonoid3)
            (scm:let ([comonadTracedT14 (comonadTracedT2 dictMonoid3)])
              (scm:list (scm:cons (scm:string->symbol "ask") (scm:let ([mempty5 (rt:record-ref dictMonoid3 (scm:string->symbol "mempty"))])
                (scm:lambda (x6)
                  ((rt:record-ref dictComonadAsk0 (scm:string->symbol "ask")) (((rt:record-ref ((rt:record-ref ((rt:record-ref Comonad01 (scm:string->symbol "Extend0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (f7)
                    (f7 mempty5))) x6))))) (scm:cons (scm:string->symbol "Comonad0") (scm:lambda (_)
                comonadTracedT14))))))))

  (scm:define comonadEnvTracedT
    (scm:lambda (dictComonadEnv0)
      (scm:let ([comonadAskTracedT11 (comonadAskTracedT ((rt:record-ref dictComonadEnv0 (scm:string->symbol "ComonadAsk0")) (scm:quote undefined)))])
        (scm:lambda (dictMonoid2)
          (scm:let ([comonadAskTracedT23 (comonadAskTracedT11 dictMonoid2)])
            (scm:list (scm:cons (scm:string->symbol "local") (scm:lambda (f4)
              (scm:lambda (v5)
                (((rt:record-ref dictComonadEnv0 (scm:string->symbol "local")) f4) v5)))) (scm:cons (scm:string->symbol "ComonadAsk0") (scm:lambda (_)
              comonadAskTracedT23)))))))))
