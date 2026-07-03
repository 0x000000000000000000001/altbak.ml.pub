#!r6rs
#!chezscheme
(library
  (Control.Monad.Cont lib)
  (export
    cont
    mapCont
    runCont
    withCont)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:))

  (scm:define withCont
    (scm:lambda (f0)
      (scm:lambda (v1)
        (scm:lambda (k2)
          (v1 (f0 (scm:lambda (x3)
            (k2 x3))))))))

  (scm:define runCont
    (scm:lambda (cc0)
      (scm:lambda (k1)
        (cc0 (scm:lambda (x2)
          (k1 x2))))))

  (scm:define mapCont
    (scm:lambda (f0)
      (scm:lambda (v1)
        (scm:lambda (k2)
          (f0 (v1 k2))))))

  (scm:define cont
    (scm:lambda (f0)
      (scm:lambda (c1)
        (f0 (scm:lambda (x2)
          (c1 x2)))))))
