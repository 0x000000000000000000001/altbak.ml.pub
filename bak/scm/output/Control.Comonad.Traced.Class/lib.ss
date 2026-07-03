#!r6rs
#!chezscheme
(library
  (Control.Comonad.Traced.Class lib)
  (export
    censor
    comonadTracedEnvT
    comonadTracedIdentityT
    comonadTracedStoreT
    comonadTracedTracedT
    listen
    listens
    lowerTrack2
    track
    tracks)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Comonad.Env.Trans lib) Control.Comonad.Env.Trans.)
    (prefix (Control.Comonad.Store.Trans lib) Control.Comonad.Store.Trans.)
    (prefix (Control.Comonad.Traced.Trans lib) Control.Comonad.Traced.Trans.)
    (prefix (Control.Comonad.Trans.Class lib) Control.Comonad.Trans.Class.)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define track
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "track"))))

  (scm:define tracks
    (scm:lambda (dictComonadTraced0)
      (scm:lambda (f1)
        (scm:lambda (w2)
          (((rt:record-ref dictComonadTraced0 (scm:string->symbol "track")) (f1 ((rt:record-ref ((rt:record-ref dictComonadTraced0 (scm:string->symbol "Comonad0")) (scm:quote undefined)) (scm:string->symbol "extract")) w2))) w2)))))

  (scm:define lowerTrack2
    (scm:lambda (dictComonadTraced0)
      (scm:let ([lower11 ((rt:record-ref Control.Comonad.Trans.Class.comonadTransIdentityT (scm:string->symbol "lower")) ((rt:record-ref dictComonadTraced0 (scm:string->symbol "Comonad0")) (scm:quote undefined)))])
        (scm:lambda (m2)
          (scm:let ([_3 ((rt:record-ref dictComonadTraced0 (scm:string->symbol "track")) m2)])
            (scm:lambda (x4)
              (_3 (lower11 x4))))))))

  (scm:define listens
    (scm:lambda (dictFunctor0)
      (scm:lambda (f1)
        (scm:lambda (v2)
          (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (scm:lambda (g3)
            (scm:lambda (t4)
              (Data.Tuple.Tuple* (g3 t4) (f1 t4))))) v2)))))

  (scm:define listen
    (scm:lambda (dictFunctor0)
      (scm:lambda (v1)
        (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (scm:lambda (f2)
          (scm:lambda (t3)
            (Data.Tuple.Tuple* (f2 t3) t3)))) v1))))

  (scm:define comonadTracedTracedT
    (scm:lambda (dictComonad0)
      (scm:let ([comonadTracedT1 (Control.Comonad.Traced.Trans.comonadTracedT dictComonad0)])
        (scm:lambda (dictMonoid2)
          (scm:let ([comonadTracedT13 (comonadTracedT1 dictMonoid2)])
            (scm:list (scm:cons (scm:string->symbol "track") (scm:lambda (t4)
              (scm:lambda (v5)
                (((rt:record-ref dictComonad0 (scm:string->symbol "extract")) v5) t4)))) (scm:cons (scm:string->symbol "Comonad0") (scm:lambda (_)
              comonadTracedT13))))))))

  (scm:define comonadTracedStoreT
    (scm:lambda (dictComonadTraced0)
      (scm:let ([comonadStoreT1 (Control.Comonad.Store.Trans.comonadStoreT ((rt:record-ref dictComonadTraced0 (scm:string->symbol "Comonad0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "track") (scm:let ([_2 ((rt:record-ref dictComonadTraced0 (scm:string->symbol "Comonad0")) (scm:quote undefined))])
          (scm:lambda (m3)
            (scm:let ([_4 ((rt:record-ref dictComonadTraced0 (scm:string->symbol "track")) m3)])
              (scm:lambda (x5)
                (_4 (scm:let ([_6 (Data.Tuple.Tuple-value1 x5)])
                  (((rt:record-ref ((rt:record-ref ((rt:record-ref _2 (scm:string->symbol "Extend0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (v17)
                    (v17 _6))) (Data.Tuple.Tuple-value0 x5))))))))) (scm:cons (scm:string->symbol "Comonad0") (scm:lambda (_)
          comonadStoreT1))))))

  (scm:define comonadTracedIdentityT
    (scm:lambda (dictComonadTraced0)
      (scm:let*
        ([_1 ((rt:record-ref dictComonadTraced0 (scm:string->symbol "Comonad0")) (scm:quote undefined))]
         [_2 ((rt:record-ref _1 (scm:string->symbol "Extend0")) (scm:quote undefined))]
         [comonadIdentityT3 (scm:let*
          ([_3 ((rt:record-ref _2 (scm:string->symbol "Functor0")) (scm:quote undefined))]
           [extendIdentityI14 (scm:list (scm:cons (scm:string->symbol "extend") (scm:lambda (f4)
            (scm:lambda (v5)
              (((rt:record-ref _2 (scm:string->symbol "extend")) (scm:lambda (x6)
                (f4 x6))) v5)))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
            _3)))])
            (scm:list (scm:cons (scm:string->symbol "extract") (scm:lambda (x5)
              ((rt:record-ref _1 (scm:string->symbol "extract")) x5))) (scm:cons (scm:string->symbol "Extend0") (scm:lambda (_)
              extendIdentityI14))))])
          (scm:list (scm:cons (scm:string->symbol "track") (lowerTrack2 dictComonadTraced0)) (scm:cons (scm:string->symbol "Comonad0") (scm:lambda (_)
            comonadIdentityT3))))))

  (scm:define comonadTracedEnvT
    (scm:lambda (dictComonadTraced0)
      (scm:let ([comonadEnvT1 (Control.Comonad.Env.Trans.comonadEnvT ((rt:record-ref dictComonadTraced0 (scm:string->symbol "Comonad0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "track") (scm:lambda (m2)
          (scm:let ([_3 ((rt:record-ref dictComonadTraced0 (scm:string->symbol "track")) m2)])
            (scm:lambda (x4)
              (_3 (Data.Tuple.Tuple-value1 x4)))))) (scm:cons (scm:string->symbol "Comonad0") (scm:lambda (_)
          comonadEnvT1))))))

  (scm:define censor
    (scm:lambda (dictFunctor0)
      (scm:lambda (f1)
        (scm:lambda (v2)
          (((rt:record-ref dictFunctor0 (scm:string->symbol "map")) (scm:lambda (v13)
            (scm:lambda (x4)
              (v13 (f1 x4))))) v2))))))
