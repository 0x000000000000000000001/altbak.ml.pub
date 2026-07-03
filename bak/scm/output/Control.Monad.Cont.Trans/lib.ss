#!r6rs
#!chezscheme
(library
  (Control.Monad.Cont.Trans lib)
  (export
    ContT
    applicativeContT
    applyContT
    bindContT
    functorContT
    mapContT
    monadAskContT
    monadContContT
    monadContT
    monadEffectContT
    monadReaderContT
    monadSTContT
    monadStateContT
    monadTransContT
    monoidContT
    newtypeContT
    runContT
    semigroupContT
    withContT)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:))

  (scm:define ContT
    (scm:lambda (x0)
      x0))

  (scm:define withContT
    (scm:lambda (f0)
      (scm:lambda (v1)
        (scm:lambda (k2)
          (v1 (f0 k2))))))

  (scm:define runContT
    (scm:lambda (v0)
      (scm:lambda (k1)
        (v0 k1))))

  (scm:define newtypeContT
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define monadTransContT
    (scm:list (scm:cons (scm:string->symbol "lift") (scm:lambda (dictMonad0)
      (rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind"))))))

  (scm:define mapContT
    (scm:lambda (f0)
      (scm:lambda (v1)
        (scm:lambda (k2)
          (f0 (v1 k2))))))

  (scm:define functorContT
    (scm:lambda (dictFunctor0)
      (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f1)
        (scm:lambda (v2)
          (scm:lambda (k3)
            (v2 (scm:lambda (a4)
              (k3 (f1 a4)))))))))))

  (scm:define applyContT
    (scm:lambda (dictApply0)
      (scm:let ([functorContT11 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f1)
        (scm:lambda (v2)
          (scm:lambda (k3)
            (v2 (scm:lambda (a4)
              (k3 (f1 a4)))))))))])
        (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v2)
          (scm:lambda (v13)
            (scm:lambda (k4)
              (v2 (scm:lambda (g5)
                (v13 (scm:lambda (a6)
                  (k4 (g5 a6)))))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
          functorContT11))))))

  (scm:define bindContT
    (scm:lambda (dictBind0)
      (scm:let*
        ([functorContT11 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f1)
          (scm:lambda (v2)
            (scm:lambda (k3)
              (v2 (scm:lambda (a4)
                (k3 (f1 a4)))))))))]
         [applyContT12 (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v2)
          (scm:lambda (v13)
            (scm:lambda (k4)
              (v2 (scm:lambda (g5)
                (v13 (scm:lambda (a6)
                  (k4 (g5 a6)))))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
          functorContT11)))])
          (scm:list (scm:cons (scm:string->symbol "bind") (scm:lambda (v3)
            (scm:lambda (k4)
              (scm:lambda (k$p5)
                (v3 (scm:lambda (a6)
                  ((k4 a6) k$p5))))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
            applyContT12))))))

  (scm:define semigroupContT
    (scm:lambda (dictApply0)
      (scm:lambda (dictSemigroup1)
        (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (a2)
          (scm:lambda (b3)
            (scm:lambda (k4)
              (a2 (scm:lambda (a5)
                (scm:let ([_6 ((rt:record-ref dictSemigroup1 (scm:string->symbol "append")) a5)])
                  (b3 (scm:lambda (a7)
                    (k4 (_6 a7)))))))))))))))

  (scm:define applicativeContT
    (scm:lambda (dictApplicative0)
      (scm:let*
        ([functorContT11 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f1)
          (scm:lambda (v2)
            (scm:lambda (k3)
              (v2 (scm:lambda (a4)
                (k3 (f1 a4)))))))))]
         [applyContT12 (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v2)
          (scm:lambda (v13)
            (scm:lambda (k4)
              (v2 (scm:lambda (g5)
                (v13 (scm:lambda (a6)
                  (k4 (g5 a6)))))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
          functorContT11)))])
          (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (a3)
            (scm:lambda (k4)
              (k4 a3)))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
            applyContT12))))))

  (scm:define monadContT
    (scm:lambda (dictMonad0)
      (scm:let*
        ([functorContT11 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f1)
          (scm:lambda (v2)
            (scm:lambda (k3)
              (v2 (scm:lambda (a4)
                (k3 (f1 a4)))))))))]
         [applicativeContT12 (scm:let ([applyContT12 (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v2)
          (scm:lambda (v13)
            (scm:lambda (k4)
              (v2 (scm:lambda (g5)
                (v13 (scm:lambda (a6)
                  (k4 (g5 a6)))))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
          functorContT11)))])
          (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (a3)
            (scm:lambda (k4)
              (k4 a3)))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
            applyContT12))))]
         [functorContT13 (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f3)
          (scm:lambda (v4)
            (scm:lambda (k5)
              (v4 (scm:lambda (a6)
                (k5 (f3 a6)))))))))]
         [bindContT14 (scm:let ([applyContT14 (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v4)
          (scm:lambda (v15)
            (scm:lambda (k6)
              (v4 (scm:lambda (g7)
                (v15 (scm:lambda (a8)
                  (k6 (g7 a8)))))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
          functorContT13)))])
          (scm:list (scm:cons (scm:string->symbol "bind") (scm:lambda (v5)
            (scm:lambda (k6)
              (scm:lambda (k$p7)
                (v5 (scm:lambda (a8)
                  ((k6 a8) k$p7))))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
            applyContT14))))])
          (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
            applicativeContT12)) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
            bindContT14))))))

  (scm:define monadAskContT
    (scm:lambda (dictMonadAsk0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadAsk0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadContT12 (monadContT Monad01)])
          (scm:list (scm:cons (scm:string->symbol "ask") ((rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) (rt:record-ref dictMonadAsk0 (scm:string->symbol "ask")))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadContT12))))))

  (scm:define monadReaderContT
    (scm:lambda (dictMonadReader0)
      (scm:let*
        ([MonadAsk01 ((rt:record-ref dictMonadReader0 (scm:string->symbol "MonadAsk0")) (scm:quote undefined))]
         [ask2 (rt:record-ref MonadAsk01 (scm:string->symbol "ask"))]
         [monadAskContT13 (monadAskContT MonadAsk01)])
          (scm:list (scm:cons (scm:string->symbol "local") (scm:lambda (f4)
            (scm:lambda (v5)
              (scm:lambda (k6)
                (((rt:record-ref ((rt:record-ref ((rt:record-ref MonadAsk01 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ask2) (scm:lambda (r7)
                  (((rt:record-ref dictMonadReader0 (scm:string->symbol "local")) f4) (v5 (scm:let ([_8 ((rt:record-ref dictMonadReader0 (scm:string->symbol "local")) (scm:lambda (v8)
                    r7))])
                    (scm:lambda (x9)
                      (_8 (k6 x9)))))))))))) (scm:cons (scm:string->symbol "MonadAsk0") (scm:lambda (_)
            monadAskContT13))))))

  (scm:define monadContContT
    (scm:lambda (dictMonad0)
      (scm:let ([monadContT11 (monadContT dictMonad0)])
        (scm:list (scm:cons (scm:string->symbol "callCC") (scm:lambda (f2)
          (scm:lambda (k3)
            ((f2 (scm:lambda (a4)
              (scm:lambda (v15)
                (k3 a4)))) k3)))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
          monadContT11))))))

  (scm:define monadEffectContT
    (scm:lambda (dictMonadEffect0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadEffect0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadContT12 (monadContT Monad01)])
          (scm:list (scm:cons (scm:string->symbol "liftEffect") (scm:let ([_3 (rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind"))])
            (scm:lambda (x4)
              (_3 ((rt:record-ref dictMonadEffect0 (scm:string->symbol "liftEffect")) x4))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadContT12))))))

  (scm:define monadStateContT
    (scm:lambda (dictMonadState0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadState0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadContT12 (monadContT Monad01)])
          (scm:list (scm:cons (scm:string->symbol "state") (scm:let ([_3 (rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind"))])
            (scm:lambda (x4)
              (_3 ((rt:record-ref dictMonadState0 (scm:string->symbol "state")) x4))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadContT12))))))

  (scm:define monadSTContT
    (scm:lambda (dictMonadST0)
      (scm:let*
        ([Monad01 ((rt:record-ref dictMonadST0 (scm:string->symbol "Monad0")) (scm:quote undefined))]
         [monadContT12 (monadContT Monad01)])
          (scm:list (scm:cons (scm:string->symbol "liftST") (scm:let ([_3 (rt:record-ref ((rt:record-ref Monad01 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind"))])
            (scm:lambda (x4)
              (_3 ((rt:record-ref dictMonadST0 (scm:string->symbol "liftST")) x4))))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
            monadContT12))))))

  (scm:define monoidContT
    (scm:lambda (dictApplicative0)
      (scm:lambda (dictMonoid1)
        (scm:let*
          ([_2 ((rt:record-ref dictMonoid1 (scm:string->symbol "Semigroup0")) (scm:quote undefined))]
           [semigroupContT23 (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (a3)
            (scm:lambda (b4)
              (scm:lambda (k5)
                (a3 (scm:lambda (a6)
                  (scm:let ([_7 ((rt:record-ref _2 (scm:string->symbol "append")) a6)])
                    (b4 (scm:lambda (a8)
                      (k5 (_7 a8))))))))))))])
            (scm:list (scm:cons (scm:string->symbol "mempty") (scm:let ([_4 (rt:record-ref dictMonoid1 (scm:string->symbol "mempty"))])
              (scm:lambda (k5)
                (k5 _4)))) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
              semigroupContT23))))))))
