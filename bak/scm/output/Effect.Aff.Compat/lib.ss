#!r6rs
#!chezscheme
(library
  (Effect.Aff.Compat lib)
  (export
    EffectFnAff
    EffectFnCanceler
    fromEffectFnAff)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Either lib) Data.Either.)
    (prefix (Effect.Aff lib) Effect.Aff.))

  (scm:define EffectFnCanceler
    (scm:lambda (x0)
      x0))

  (scm:define EffectFnAff
    (scm:lambda (x0)
      x0))

  (scm:define fromEffectFnAff
    (scm:lambda (v0)
      (Effect.Aff.makeAff (scm:lambda (k1)
        (scm:lambda ()
          (scm:let ([v12 (v0 (scm:lambda (x2)
            ((k1 (Data.Either.Left x2)))) (scm:lambda (x2)
            ((k1 (Data.Either.Right x2)))))])
            (scm:lambda (e3)
              (Effect.Aff.makeAff (scm:lambda (k24)
                (scm:lambda ()
                  (scm:let ([_ (v12 e3 (scm:lambda (x5)
                    ((k24 (Data.Either.Left x5)))) (scm:lambda (x5)
                    ((k24 (Data.Either.Right x5)))))])
                    Effect.Aff.nonCanceler))))))))))))
