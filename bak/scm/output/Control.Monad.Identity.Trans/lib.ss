#!r6rs
#!chezscheme
(library
  (Control.Monad.Identity.Trans lib)
  (export
    IdentityT
    altIdentityT
    alternativeIdentityT
    applicativeIdentityT
    applyIdentityT
    bindIdentityT
    comonadIdentityT
    eq1IdentityT
    eqIdentityT
    extendIdentityI
    foldableIdentityT
    functorIdentityT
    mapIdentityT
    monadAskIdentityT
    monadContIdentityT
    monadEffectIdentityT
    monadErrorIdentityT
    monadIdentityT
    monadPlusIdentityT
    monadReaderIdentityT
    monadRecIdentityT
    monadSTIdentityT
    monadStateIdentityT
    monadTellIdentityT
    monadThrowIdentityT
    monadTransIdentityT
    monadWriterIdentityT
    newtypeIdentityT
    ord1IdentityT
    ordIdentityT
    plusIdentityT
    runIdentityT
    traversableIdentityT)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:))

  (scm:define IdentityT
    (scm:lambda (x0)
      x0))

  (scm:define monadSTIdentityT
    (scm:lambda (dictMonadST0)
      dictMonadST0))

  (scm:define traversableIdentityT
    (scm:lambda (dictTraversable0)
      dictTraversable0))

  (scm:define runIdentityT
    (scm:lambda (v0)
      v0))

  (scm:define plusIdentityT
    (scm:lambda (dictPlus0)
      dictPlus0))

  (scm:define newtypeIdentityT
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define monadWriterIdentityT
    (scm:lambda (dictMonadWriter0)
      dictMonadWriter0))

  (scm:define monadTransIdentityT
    (scm:list (scm:cons (scm:string->symbol "lift") (scm:lambda (dictMonad0)
      IdentityT))))

  (scm:define monadThrowIdentityT
    (scm:lambda (dictMonadThrow0)
      dictMonadThrow0))

  (scm:define monadTellIdentityT
    (scm:lambda (dictMonadTell0)
      dictMonadTell0))

  (scm:define monadStateIdentityT
    (scm:lambda (dictMonadState0)
      dictMonadState0))

  (scm:define monadRecIdentityT
    (scm:lambda (dictMonadRec0)
      dictMonadRec0))

  (scm:define monadReaderIdentityT
    (scm:lambda (dictMonadReader0)
      dictMonadReader0))

  (scm:define monadPlusIdentityT
    (scm:lambda (dictMonadPlus0)
      dictMonadPlus0))

  (scm:define monadIdentityT
    (scm:lambda (dictMonad0)
      dictMonad0))

  (scm:define monadErrorIdentityT
    (scm:lambda (dictMonadError0)
      dictMonadError0))

  (scm:define monadEffectIdentityT
    (scm:lambda (dictMonadEffect0)
      dictMonadEffect0))

  (scm:define monadContIdentityT
    (scm:lambda (dictMonadCont0)
      dictMonadCont0))

  (scm:define monadAskIdentityT
    (scm:lambda (dictMonadAsk0)
      dictMonadAsk0))

  (scm:define mapIdentityT
    (scm:lambda (f0)
      (scm:lambda (v1)
        (f0 v1))))

  (scm:define functorIdentityT
    (scm:lambda (dictFunctor0)
      dictFunctor0))

  (scm:define foldableIdentityT
    (scm:lambda (dictFoldable0)
      dictFoldable0))

  (scm:define extendIdentityI
    (scm:lambda (dictExtend0)
      (scm:let ([_1 ((rt:record-ref dictExtend0 (scm:string->symbol "Functor0")) (scm:quote undefined))])
        (scm:list (scm:cons (scm:string->symbol "extend") (scm:lambda (f2)
          (scm:lambda (v3)
            (((rt:record-ref dictExtend0 (scm:string->symbol "extend")) (scm:lambda (x4)
              (f2 x4))) v3)))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
          _1))))))

  (scm:define eqIdentityT
    (scm:lambda (dictEq10)
      (scm:lambda (dictEq1)
        (scm:let ([eq112 ((rt:record-ref dictEq10 (scm:string->symbol "eq1")) dictEq1)])
          (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x3)
            (scm:lambda (y4)
              ((eq112 x3) y4)))))))))

  (scm:define ordIdentityT
    (scm:lambda (dictOrd10)
      (scm:let ([_1 ((rt:record-ref dictOrd10 (scm:string->symbol "Eq10")) (scm:quote undefined))])
        (scm:lambda (dictOrd2)
          (scm:let*
            ([compare113 ((rt:record-ref dictOrd10 (scm:string->symbol "compare1")) dictOrd2)]
             [eq114 ((rt:record-ref _1 (scm:string->symbol "eq1")) ((rt:record-ref dictOrd2 (scm:string->symbol "Eq0")) (scm:quote undefined)))]
             [eqIdentityT25 (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x5)
              (scm:lambda (y6)
                ((eq114 x5) y6)))))])
              (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x6)
                (scm:lambda (y7)
                  ((compare113 x6) y7)))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
                eqIdentityT25))))))))

  (scm:define eq1IdentityT
    (scm:lambda (dictEq10)
      (scm:list (scm:cons (scm:string->symbol "eq1") (scm:lambda (dictEq1)
        ((rt:record-ref dictEq10 (scm:string->symbol "eq1")) dictEq1))))))

  (scm:define ord1IdentityT
    (scm:lambda (dictOrd10)
      (scm:let*
        ([_1 ((rt:record-ref dictOrd10 (scm:string->symbol "Eq10")) (scm:quote undefined))]
         [_2 ((rt:record-ref dictOrd10 (scm:string->symbol "Eq10")) (scm:quote undefined))]
         [eq1IdentityT13 (scm:list (scm:cons (scm:string->symbol "eq1") (scm:lambda (dictEq3)
          ((rt:record-ref _2 (scm:string->symbol "eq1")) dictEq3))))])
          (scm:list (scm:cons (scm:string->symbol "compare1") (scm:lambda (dictOrd4)
            (scm:let*
              ([compare115 ((rt:record-ref dictOrd10 (scm:string->symbol "compare1")) dictOrd4)]
               [eq116 ((rt:record-ref _1 (scm:string->symbol "eq1")) ((rt:record-ref dictOrd4 (scm:string->symbol "Eq0")) (scm:quote undefined)))])
                (rt:record-ref (scm:let ([eqIdentityT27 (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x7)
                  (scm:lambda (y8)
                    ((eq116 x7) y8)))))])
                  (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x8)
                    (scm:lambda (y9)
                      ((compare115 x8) y9)))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
                    eqIdentityT27)))) (scm:string->symbol "compare"))))) (scm:cons (scm:string->symbol "Eq10") (scm:lambda (_)
            eq1IdentityT13))))))

  (scm:define comonadIdentityT
    (scm:lambda (dictComonad0)
      (scm:let*
        ([_1 ((rt:record-ref dictComonad0 (scm:string->symbol "Extend0")) (scm:quote undefined))]
         [_2 ((rt:record-ref _1 (scm:string->symbol "Functor0")) (scm:quote undefined))]
         [extendIdentityI13 (scm:list (scm:cons (scm:string->symbol "extend") (scm:lambda (f3)
          (scm:lambda (v4)
            (((rt:record-ref _1 (scm:string->symbol "extend")) (scm:lambda (x5)
              (f3 x5))) v4)))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
          _2)))])
          (scm:list (scm:cons (scm:string->symbol "extract") (scm:lambda (x4)
            ((rt:record-ref dictComonad0 (scm:string->symbol "extract")) x4))) (scm:cons (scm:string->symbol "Extend0") (scm:lambda (_)
            extendIdentityI13))))))

  (scm:define bindIdentityT
    (scm:lambda (dictBind0)
      dictBind0))

  (scm:define applyIdentityT
    (scm:lambda (dictApply0)
      dictApply0))

  (scm:define applicativeIdentityT
    (scm:lambda (dictApplicative0)
      dictApplicative0))

  (scm:define alternativeIdentityT
    (scm:lambda (dictAlternative0)
      dictAlternative0))

  (scm:define altIdentityT
    (scm:lambda (dictAlt0)
      dictAlt0)))
