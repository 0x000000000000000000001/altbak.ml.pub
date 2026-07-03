#!r6rs
#!chezscheme
(library
  (Effect.Aff.Class lib)
  (export
    liftAff
    monadAffAff
    monadAffContT
    monadAffExceptT
    monadAffListT
    monadAffMaybe
    monadAffRWS
    monadAffReader
    monadAffState
    monadAffWriter)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.Cont.Trans lib) Control.Monad.Cont.Trans.)
    (prefix (Control.Monad.Except.Trans lib) Control.Monad.Except.Trans.)
    (prefix (Control.Monad.List.Trans lib) Control.Monad.List.Trans.)
    (prefix (Control.Monad.Maybe.Trans lib) Control.Monad.Maybe.Trans.)
    (prefix (Control.Monad.RWS.Trans lib) Control.Monad.RWS.Trans.)
    (prefix (Control.Monad.Reader.Trans lib) Control.Monad.Reader.Trans.)
    (prefix (Control.Monad.State.Trans lib) Control.Monad.State.Trans.)
    (prefix (Control.Monad.Writer.Trans lib) Control.Monad.Writer.Trans.)
    (prefix (Data.Either lib) Data.Either.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Tuple lib) Data.Tuple.)
    (prefix (Effect.Aff lib) Effect.Aff.))

  (scm:define monadAffAff
    (scm:list (scm:cons (scm:string->symbol "liftAff") (scm:lambda (x0)
      x0)) (scm:cons (scm:string->symbol "MonadEffect0") (scm:lambda (_)
      Effect.Aff.monadEffectAff))))

  (scm:define liftAff
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "liftAff"))))

  (scm:define monadAffContT
    (scm:lambda (dictMonadAff0)
      (scm:let*
        ([MonadEffect01 ((rt:record-ref dictMonadAff0 (scm:string->symbol "MonadEffect0")) (scm:quote undefined))]
         [monadEffectContT2 (Control.Monad.Cont.Trans.monadEffectContT MonadEffect01)])
          (scm:list (scm:cons (scm:string->symbol "liftAff") (scm:let ([_3 (rt:record-ref ((rt:record-ref ((rt:record-ref MonadEffect01 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind"))])
            (scm:lambda (x4)
              (_3 ((rt:record-ref dictMonadAff0 (scm:string->symbol "liftAff")) x4))))) (scm:cons (scm:string->symbol "MonadEffect0") (scm:lambda (_)
            monadEffectContT2))))))

  (scm:define monadAffExceptT
    (scm:lambda (dictMonadAff0)
      (scm:let*
        ([MonadEffect01 ((rt:record-ref dictMonadAff0 (scm:string->symbol "MonadEffect0")) (scm:quote undefined))]
         [monadEffectExceptT2 (Control.Monad.Except.Trans.monadEffectExceptT MonadEffect01)])
          (scm:list (scm:cons (scm:string->symbol "liftAff") (scm:let ([_3 ((rt:record-ref MonadEffect01 (scm:string->symbol "Monad0")) (scm:quote undefined))])
            (scm:lambda (x4)
              (((rt:record-ref ((rt:record-ref _3 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((rt:record-ref dictMonadAff0 (scm:string->symbol "liftAff")) x4)) (scm:lambda (a5)
                ((rt:record-ref ((rt:record-ref _3 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Either.Right a5))))))) (scm:cons (scm:string->symbol "MonadEffect0") (scm:lambda (_)
            monadEffectExceptT2))))))

  (scm:define monadAffListT
    (scm:lambda (dictMonadAff0)
      (scm:let*
        ([MonadEffect01 ((rt:record-ref dictMonadAff0 (scm:string->symbol "MonadEffect0")) (scm:quote undefined))]
         [monadEffectListT2 (Control.Monad.List.Trans.monadEffectListT MonadEffect01)])
          (scm:list (scm:cons (scm:string->symbol "liftAff") (scm:let ([_3 (Control.Monad.List.Trans.fromEffect ((rt:record-ref ((rt:record-ref MonadEffect01 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Applicative0")) (scm:quote undefined)))])
            (scm:lambda (x4)
              (_3 ((rt:record-ref dictMonadAff0 (scm:string->symbol "liftAff")) x4))))) (scm:cons (scm:string->symbol "MonadEffect0") (scm:lambda (_)
            monadEffectListT2))))))

  (scm:define monadAffMaybe
    (scm:lambda (dictMonadAff0)
      (scm:let*
        ([MonadEffect01 ((rt:record-ref dictMonadAff0 (scm:string->symbol "MonadEffect0")) (scm:quote undefined))]
         [monadEffectMaybe2 (Control.Monad.Maybe.Trans.monadEffectMaybe MonadEffect01)])
          (scm:list (scm:cons (scm:string->symbol "liftAff") (scm:let ([_3 ((rt:record-ref MonadEffect01 (scm:string->symbol "Monad0")) (scm:quote undefined))])
            (scm:lambda (x4)
              (((rt:record-ref ((rt:record-ref _3 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((rt:record-ref dictMonadAff0 (scm:string->symbol "liftAff")) x4)) (scm:lambda (a$p5)
                ((rt:record-ref ((rt:record-ref _3 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Maybe.Just a$p5))))))) (scm:cons (scm:string->symbol "MonadEffect0") (scm:lambda (_)
            monadEffectMaybe2))))))

  (scm:define monadAffRWS
    (scm:lambda (dictMonadAff0)
      (scm:let*
        ([MonadEffect01 ((rt:record-ref dictMonadAff0 (scm:string->symbol "MonadEffect0")) (scm:quote undefined))]
         [Monad02 ((rt:record-ref MonadEffect01 (scm:string->symbol "Monad0")) (scm:quote undefined))])
          (scm:lambda (dictMonoid3)
            (scm:let ([monadEffectRWS4 ((Control.Monad.RWS.Trans.monadEffectRWS dictMonoid3) MonadEffect01)])
              (scm:list (scm:cons (scm:string->symbol "liftAff") (scm:let ([mempty5 (rt:record-ref dictMonoid3 (scm:string->symbol "mempty"))])
                (scm:lambda (x6)
                  (scm:let ([_7 ((rt:record-ref dictMonadAff0 (scm:string->symbol "liftAff")) x6)])
                    (scm:lambda (v8)
                      (scm:lambda (s9)
                        (((rt:record-ref ((rt:record-ref Monad02 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) _7) (scm:lambda (a10)
                          ((rt:record-ref ((rt:record-ref Monad02 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Control.Monad.RWS.Trans.RWSResult* s9 a10 mempty5)))))))))) (scm:cons (scm:string->symbol "MonadEffect0") (scm:lambda (_)
                monadEffectRWS4))))))))

  (scm:define monadAffReader
    (scm:lambda (dictMonadAff0)
      (scm:let ([monadEffectReader1 (Control.Monad.Reader.Trans.monadEffectReader ((rt:record-ref dictMonadAff0 (scm:string->symbol "MonadEffect0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "liftAff") (scm:lambda (x2)
          (scm:let ([_3 ((rt:record-ref dictMonadAff0 (scm:string->symbol "liftAff")) x2)])
            (scm:lambda (v4)
              _3)))) (scm:cons (scm:string->symbol "MonadEffect0") (scm:lambda (_)
          monadEffectReader1))))))

  (scm:define monadAffState
    (scm:lambda (dictMonadAff0)
      (scm:let*
        ([MonadEffect01 ((rt:record-ref dictMonadAff0 (scm:string->symbol "MonadEffect0")) (scm:quote undefined))]
         [monadEffectState2 (Control.Monad.State.Trans.monadEffectState MonadEffect01)])
          (scm:list (scm:cons (scm:string->symbol "liftAff") (scm:let ([_3 ((rt:record-ref MonadEffect01 (scm:string->symbol "Monad0")) (scm:quote undefined))])
            (scm:lambda (x4)
              (scm:let ([_5 ((rt:record-ref dictMonadAff0 (scm:string->symbol "liftAff")) x4)])
                (scm:lambda (s6)
                  (((rt:record-ref ((rt:record-ref _3 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) _5) (scm:lambda (x7)
                    ((rt:record-ref ((rt:record-ref _3 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* x7 s6))))))))) (scm:cons (scm:string->symbol "MonadEffect0") (scm:lambda (_)
            monadEffectState2))))))

  (scm:define monadAffWriter
    (scm:lambda (dictMonadAff0)
      (scm:let*
        ([MonadEffect01 ((rt:record-ref dictMonadAff0 (scm:string->symbol "MonadEffect0")) (scm:quote undefined))]
         [Monad02 ((rt:record-ref MonadEffect01 (scm:string->symbol "Monad0")) (scm:quote undefined))])
          (scm:lambda (dictMonoid3)
            (scm:let ([monadEffectWriter4 ((Control.Monad.Writer.Trans.monadEffectWriter dictMonoid3) MonadEffect01)])
              (scm:list (scm:cons (scm:string->symbol "liftAff") (scm:let ([mempty5 (rt:record-ref dictMonoid3 (scm:string->symbol "mempty"))])
                (scm:lambda (x6)
                  (((rt:record-ref ((rt:record-ref Monad02 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((rt:record-ref dictMonadAff0 (scm:string->symbol "liftAff")) x6)) (scm:lambda (a7)
                    ((rt:record-ref ((rt:record-ref Monad02 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (Data.Tuple.Tuple* a7 mempty5))))))) (scm:cons (scm:string->symbol "MonadEffect0") (scm:lambda (_)
                monadEffectWriter4)))))))))
