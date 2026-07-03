#!r6rs
#!chezscheme
(library
  (Effect.Aff lib)
  (export
    Canceler
    _bind
    _catchError
    _delay
    _fork
    _killAll
    _liftEffect
    _makeFiber
    _makeSupervisedFiber
    _map
    _parAffAlt
    _parAffApply
    _parAffMap
    _pure
    _sequential
    _throwError
    altAff
    altParAff
    alternativeParAff
    apathize
    applicativeAff
    applicativeFiber
    applicativeParAff
    applyAff
    applyFiber
    applyParAff
    attempt
    bindAff
    bracket
    cancelWith
    delay
    effectCanceler
    ffiUtil
    fiberCanceler
    finally
    forkAff
    functorAff
    functorFiber
    functorParAff
    generalBracket
    invincible
    joinFiber
    killFiber
    launchAff
    launchAff_
    launchSuspendedAff
    lazyAff
    makeAff
    makeFiber
    monadAff
    monadEffectAff
    monadErrorAff
    monadRecAff
    monadSTAff
    monadThrowAff
    monoidAff
    monoidCanceler
    monoidParAff
    never
    newtypeCanceler
    nonCanceler
    parSequence_
    parallelAff
    plusAff
    plusParAff
    runAff
    runAff_
    runSuspendedAff
    semigroupAff
    semigroupCanceler
    semigroupParAff
    supervise
    suspendAff
    try)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.Error.Class lib) Control.Monad.Error.Class.)
    (prefix (Control.Monad.Rec.Class lib) Control.Monad.Rec.Class.)
    (prefix (Control.Parallel lib) Control.Parallel.)
    (prefix (Data.Either lib) Data.Either.)
    (prefix (Data.Foldable lib) Data.Foldable.)
    (prefix (Data.Unit lib) Data.Unit.)
    (prefix (Effect.Exception lib) Effect.Exception.)
    (prefix (Effect.Unsafe lib) Effect.Unsafe.)
    (prefix (Partial lib) Partial.)
    (prefix (Unsafe.Coerce lib) Unsafe.Coerce.)
    (Effect.Aff foreign))

  (scm:define Canceler
    (scm:lambda (x0)
      x0))

  (scm:define suspendAff
    (_fork #f))

  (scm:define newtypeCanceler
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define functorParAff
    (scm:list (scm:cons (scm:string->symbol "map") _parAffMap)))

  (scm:define functorAff
    (scm:list (scm:cons (scm:string->symbol "map") _map)))

  (scm:define forkAff
    (_fork #t))

  (scm:define ffiUtil
    (scm:list (scm:cons (scm:string->symbol "isLeft") (scm:lambda (v0)
      (scm:cond
        [(Data.Either.Left? v0) #t]
        [(Data.Either.Right? v0) #f]
        [scm:else (rt:fail)]))) (scm:cons (scm:string->symbol "fromLeft") (scm:lambda (v0)
      (scm:cond
        [(Data.Either.Left? v0) (Data.Either.Left-value0 v0)]
        [(Data.Either.Right? v0) (Partial._crashWith (rt:string->pstring "unsafeFromLeft: Right"))]
        [scm:else (rt:fail)]))) (scm:cons (scm:string->symbol "fromRight") (scm:lambda (v0)
      (scm:cond
        [(Data.Either.Right? v0) (Data.Either.Right-value0 v0)]
        [(Data.Either.Left? v0) (Partial._crashWith (rt:string->pstring "unsafeFromRight: Left"))]
        [scm:else (rt:fail)]))) (scm:cons (scm:string->symbol "left") Data.Either.Left) (scm:cons (scm:string->symbol "right") Data.Either.Right)))

  (scm:define makeFiber
    (scm:lambda (aff0)
      (_makeFiber ffiUtil aff0)))

  (scm:define launchAff
    (scm:lambda (aff0)
      (scm:let ([_1 (_makeFiber ffiUtil aff0)])
        (scm:lambda ()
          (scm:let*
            ([fiber2 (_1)]
             [_ ((rt:record-ref fiber2 (scm:string->symbol "run")))])
              fiber2)))))

  (scm:define launchAff_
    (scm:lambda (x0)
      (scm:let ([_1 (_makeFiber ffiUtil x0)])
        (scm:lambda ()
          (scm:let*
            ([fiber2 (_1)]
             [_ ((rt:record-ref fiber2 (scm:string->symbol "run")))])
              Data.Unit.unit)))))

  (scm:define launchSuspendedAff
    makeFiber)

  (scm:define delay
    (scm:lambda (v0)
      (_delay Data.Either.Right v0)))

  (scm:define bracket
    (scm:lambda (acquire0)
      (scm:lambda (completed1)
        ((generalBracket acquire0) (scm:list (scm:cons (scm:string->symbol "killed") (scm:lambda (v2)
          completed1)) (scm:cons (scm:string->symbol "failed") (scm:lambda (v2)
          completed1)) (scm:cons (scm:string->symbol "completed") (scm:lambda (v2)
          completed1)))))))

  (scm:define applyParAff
    (scm:list (scm:cons (scm:string->symbol "apply") _parAffApply) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorParAff))))

  (scm:define semigroupParAff
    (scm:lambda (dictSemigroup0)
      (scm:list (scm:cons (scm:string->symbol "append") (scm:let ([_1 (rt:record-ref dictSemigroup0 (scm:string->symbol "append"))])
        (scm:lambda (a2)
          (scm:lambda (b3)
            ((_parAffApply ((_parAffMap _1) a2)) b3))))))))

  (rt:define-lazy $lazy-monadAff "monadAff" "Effect.Aff"
    (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
      ($lazy-applicativeAff))) (scm:cons (scm:string->symbol "Bind1") (scm:lambda (_)
      ($lazy-bindAff)))))

  (rt:define-lazy $lazy-bindAff "bindAff" "Effect.Aff"
    (scm:list (scm:cons (scm:string->symbol "bind") _bind) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
      ($lazy-applyAff)))))

  (rt:define-lazy $lazy-applyAff "applyAff" "Effect.Aff"
    (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (f0)
      (scm:lambda (a1)
        ((_bind f0) (scm:lambda (f$p2)
          ((_bind a1) (scm:lambda (a$p3)
            ((rt:record-ref ($lazy-applicativeAff) (scm:string->symbol "pure")) (f$p2 a$p3))))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorAff))))

  (rt:define-lazy $lazy-applicativeAff "applicativeAff" "Effect.Aff"
    (scm:list (scm:cons (scm:string->symbol "pure") _pure) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
      ($lazy-applyAff)))))

  (scm:define monadAff
    ($lazy-monadAff))

  (scm:define bindAff
    ($lazy-bindAff))

  (scm:define applyAff
    ($lazy-applyAff))

  (scm:define applicativeAff
    ($lazy-applicativeAff))

  (scm:define cancelWith
    (scm:lambda (aff0)
      (scm:lambda (v1)
        (((generalBracket (_pure Data.Unit.unit)) (scm:list (scm:cons (scm:string->symbol "killed") (scm:lambda (e2)
          (scm:lambda (v13)
            (v1 e2)))) (scm:cons (scm:string->symbol "failed") (scm:lambda (v2)
          _pure)) (scm:cons (scm:string->symbol "completed") (scm:lambda (v2)
          _pure)))) (scm:lambda (v2)
          aff0)))))

  (scm:define finally
    (scm:lambda (fin0)
      (scm:lambda (a1)
        (((generalBracket (_pure Data.Unit.unit)) (scm:list (scm:cons (scm:string->symbol "killed") (scm:lambda (v2)
          (scm:lambda (v3)
            fin0))) (scm:cons (scm:string->symbol "failed") (scm:lambda (v2)
          (scm:lambda (v3)
            fin0))) (scm:cons (scm:string->symbol "completed") (scm:lambda (v2)
          (scm:lambda (v3)
            fin0))))) (scm:lambda (v2)
          a1)))))

  (scm:define invincible
    (scm:lambda (a0)
      (scm:let ([_1 (_pure Data.Unit.unit)])
        (((generalBracket a0) (scm:list (scm:cons (scm:string->symbol "killed") (scm:lambda (v2)
          (scm:lambda (v3)
            _1))) (scm:cons (scm:string->symbol "failed") (scm:lambda (v2)
          (scm:lambda (v3)
            _1))) (scm:cons (scm:string->symbol "completed") (scm:lambda (v2)
          (scm:lambda (v3)
            _1))))) _pure))))

  (scm:define lazyAff
    (scm:list (scm:cons (scm:string->symbol "defer") (scm:lambda (f0)
      ((_bind (_pure Data.Unit.unit)) f0)))))

  (scm:define parallelAff
    (scm:list (scm:cons (scm:string->symbol "parallel") Unsafe.Coerce.unsafeCoerce) (scm:cons (scm:string->symbol "sequential") _sequential) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
      applyAff)) (scm:cons (scm:string->symbol "Apply1") (scm:lambda (_)
      applyParAff))))

  (scm:define applicativeParAff
    (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (x0)
      (_pure x0))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
      applyParAff))))

  (scm:define parSequence_
    ((((Control.Parallel.parTraverse_ parallelAff) applicativeParAff) Data.Foldable.foldableArray) Control.Parallel.identity))

  (scm:define monoidParAff
    (scm:lambda (dictMonoid0)
      (scm:let ([semigroupParAff11 (scm:list (scm:cons (scm:string->symbol "append") (scm:let ([_1 (rt:record-ref ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined)) (scm:string->symbol "append"))])
        (scm:lambda (a2)
          (scm:lambda (b3)
            ((_parAffApply ((_parAffMap _1) a2)) b3))))))])
        (scm:list (scm:cons (scm:string->symbol "mempty") (_pure (rt:record-ref dictMonoid0 (scm:string->symbol "mempty")))) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
          semigroupParAff11))))))

  (scm:define semigroupCanceler
    (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:lambda (err2)
          (parSequence_ (rt:make-array (v0 err2) (v11 err2)))))))))

  (scm:define semigroupAff
    (scm:lambda (dictSemigroup0)
      (scm:list (scm:cons (scm:string->symbol "append") (scm:let ([_1 (rt:record-ref dictSemigroup0 (scm:string->symbol "append"))])
        (scm:lambda (a2)
          (scm:lambda (b3)
            (((rt:record-ref applyAff (scm:string->symbol "apply")) ((_map _1) a2)) b3))))))))

  (scm:define monadEffectAff
    (scm:list (scm:cons (scm:string->symbol "liftEffect") _liftEffect) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
      monadAff))))

  (scm:define effectCanceler
    (scm:lambda (x0)
      (scm:let ([_1 (_liftEffect x0)])
        (scm:lambda (v2)
          _1))))

  (scm:define joinFiber
    (scm:lambda (v0)
      (makeAff (scm:lambda (k1)
        (scm:let ([_2 ((rt:record-ref v0 (scm:string->symbol "join")) k1)])
          (scm:lambda ()
            (scm:let ([a$p3 (_2)])
              (scm:let ([_4 (_liftEffect a$p3)])
                (scm:lambda (v5)
                  _4)))))))))

  (scm:define functorFiber
    (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f0)
      (scm:lambda (t1)
        (Effect.Unsafe.unsafePerformEffect (_makeFiber ffiUtil ((_map f0) (joinFiber t1)))))))))

  (scm:define applyFiber
    (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (t10)
      (scm:lambda (t21)
        (Effect.Unsafe.unsafePerformEffect (_makeFiber ffiUtil (((rt:record-ref applyAff (scm:string->symbol "apply")) (joinFiber t10)) (joinFiber t21))))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorFiber))))

  (scm:define applicativeFiber
    (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (a0)
      (Effect.Unsafe.unsafePerformEffect (_makeFiber ffiUtil (_pure a0))))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
      applyFiber))))

  (scm:define killFiber
    (scm:lambda (e0)
      (scm:lambda (v1)
        ((_bind (_liftEffect (rt:record-ref v1 (scm:string->symbol "isSuspended")))) (scm:lambda (suspended2)
          (scm:cond
            [suspended2 (_liftEffect (scm:let ([_3 ((rt:record-ref v1 (scm:string->symbol "kill")) e0 (scm:lambda (v3)
              (scm:lambda ()
                Data.Unit.unit)))])
              (scm:lambda ()
                (scm:let ([a$p4 (_3)])
                  Data.Unit.unit))))]
            [scm:else (makeAff (scm:lambda (k3)
              (scm:let ([_4 ((rt:record-ref v1 (scm:string->symbol "kill")) e0 k3)])
                (scm:lambda ()
                  (scm:let ([a$p5 (_4)])
                    (scm:let ([_6 (_liftEffect a$p5)])
                      (scm:lambda (v7)
                        _6)))))))]))))))

  (scm:define fiberCanceler
    (scm:lambda (x0)
      (scm:lambda (a1)
        ((killFiber a1) x0))))

  (scm:define supervise
    (scm:lambda (aff0)
      (scm:let ([killError1 (Effect.Exception.error (rt:string->pstring "[Aff] Child fiber outlived parent"))])
        (((generalBracket (_liftEffect (scm:let ([_2 (_makeSupervisedFiber ffiUtil aff0)])
          (scm:lambda ()
            (scm:let*
              ([sup3 (_2)]
               [_ ((rt:record-ref (rt:record-ref sup3 (scm:string->symbol "fiber")) (scm:string->symbol "run")))])
                sup3))))) (scm:list (scm:cons (scm:string->symbol "killed") (scm:lambda (err2)
          (scm:lambda (sup3)
            (parSequence_ (rt:make-array ((killFiber err2) (rt:record-ref sup3 (scm:string->symbol "fiber"))) (makeAff (scm:lambda (k4)
              (_killAll err2 (rt:record-ref sup3 (scm:string->symbol "supervisor")) (k4 (Data.Either.Right Data.Unit.unit)))))))))) (scm:cons (scm:string->symbol "failed") (scm:lambda (v2)
          (scm:lambda (sup3)
            (makeAff (scm:lambda (k4)
              (_killAll killError1 (rt:record-ref sup3 (scm:string->symbol "supervisor")) (k4 (Data.Either.Right Data.Unit.unit)))))))) (scm:cons (scm:string->symbol "completed") (scm:lambda (v2)
          (scm:lambda (sup3)
            (makeAff (scm:lambda (k4)
              (_killAll killError1 (rt:record-ref sup3 (scm:string->symbol "supervisor")) (k4 (Data.Either.Right Data.Unit.unit)))))))))) (scm:lambda (x2)
          (joinFiber (rt:record-ref x2 (scm:string->symbol "fiber"))))))))

  (scm:define monadSTAff
    (scm:list (scm:cons (scm:string->symbol "liftST") (scm:lambda (x0)
      (_liftEffect x0))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
      monadAff))))

  (scm:define monadThrowAff
    (scm:list (scm:cons (scm:string->symbol "throwError") _throwError) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
      monadAff))))

  (scm:define monadErrorAff
    (scm:list (scm:cons (scm:string->symbol "catchError") _catchError) (scm:cons (scm:string->symbol "MonadThrow0") (scm:lambda (_)
      monadThrowAff))))

  (scm:define try
    (Control.Monad.Error.Class.try monadErrorAff))

  (scm:define attempt
    try)

  (scm:define runAff
    (scm:lambda (k0)
      (scm:lambda (aff1)
        (scm:let ([_2 (_makeFiber ffiUtil ((_bind (try aff1)) (scm:lambda (x2)
          (_liftEffect (k0 x2)))))])
          (scm:lambda ()
            (scm:let*
              ([fiber3 (_2)]
               [_ ((rt:record-ref fiber3 (scm:string->symbol "run")))])
                fiber3))))))

  (scm:define runAff_
    (scm:lambda (k0)
      (scm:lambda (aff1)
        (scm:let ([_2 ((runAff k0) aff1)])
          (scm:lambda ()
            (scm:let ([a$p3 (_2)])
              Data.Unit.unit))))))

  (scm:define runSuspendedAff
    (scm:lambda (k0)
      (scm:lambda (aff1)
        (_makeFiber ffiUtil ((_bind (try aff1)) (scm:lambda (x2)
          (_liftEffect (k0 x2))))))))

  (scm:define monadRecAff
    (scm:list (scm:cons (scm:string->symbol "tailRecM") (scm:lambda (k0)
      (scm:letrec ([go1 (scm:lambda (a2)
        ((_bind (k0 a2)) (scm:lambda (res3)
          (scm:cond
            [(Control.Monad.Rec.Class.Done? res3) (_pure (Control.Monad.Rec.Class.Done-value0 res3))]
            [(Control.Monad.Rec.Class.Loop? res3) (go1 (Control.Monad.Rec.Class.Loop-value0 res3))]
            [scm:else (rt:fail)]))))])
        go1))) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
      monadAff))))

  (scm:define monoidAff
    (scm:lambda (dictMonoid0)
      (scm:let ([semigroupAff11 (semigroupAff ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined)))])
        (scm:list (scm:cons (scm:string->symbol "mempty") (_pure (rt:record-ref dictMonoid0 (scm:string->symbol "mempty")))) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
          semigroupAff11))))))

  (scm:define nonCanceler
    (scm:let ([_0 (_pure Data.Unit.unit)])
      (scm:lambda (v1)
        _0)))

  (scm:define monoidCanceler
    (scm:list (scm:cons (scm:string->symbol "mempty") nonCanceler) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
      semigroupCanceler))))

  (scm:define never
    (makeAff (scm:lambda (v0)
      (scm:lambda ()
        nonCanceler))))

  (scm:define apathize
    (scm:let ([_0 (_map (scm:lambda (v0)
      Data.Unit.unit))])
      (scm:lambda (x1)
        (_0 (try x1)))))

  (scm:define altParAff
    (scm:list (scm:cons (scm:string->symbol "alt") _parAffAlt) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorParAff))))

  (scm:define altAff
    (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (a10)
      (scm:lambda (a21)
        ((_catchError a10) (scm:lambda (v2)
          a21))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorAff))))

  (scm:define plusAff
    (scm:list (scm:cons (scm:string->symbol "empty") (_throwError (Effect.Exception.error (rt:string->pstring "Always fails")))) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
      altAff))))

  (scm:define plusParAff
    (scm:list (scm:cons (scm:string->symbol "empty") (rt:record-ref plusAff (scm:string->symbol "empty"))) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
      altParAff))))

  (scm:define alternativeParAff
    (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
      applicativeParAff)) (scm:cons (scm:string->symbol "Plus1") (scm:lambda (_)
      plusParAff)))))
