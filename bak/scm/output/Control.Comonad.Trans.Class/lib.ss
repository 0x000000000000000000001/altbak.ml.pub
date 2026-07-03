#!r6rs
#!chezscheme
(library
  (Control.Comonad.Trans.Class lib)
  (export
    comonadTransIdentityT
    lower)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.Identity.Trans lib) Control.Monad.Identity.Trans.))

  (scm:define lower
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "lower"))))

  (scm:define comonadTransIdentityT
    (scm:list (scm:cons (scm:string->symbol "lower") (scm:lambda (dictComonad0)
      Control.Monad.Identity.Trans.runIdentityT)))))
