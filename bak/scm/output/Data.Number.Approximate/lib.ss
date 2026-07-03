#!r6rs
#!chezscheme
(library
  (Data.Number.Approximate lib)
  (export
    Fraction
    Tolerance
    eqAbsolute
    eqApproximate
    eqRelative
    neqApproximate)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Number lib) Data.Number.))

  (scm:define Tolerance
    (scm:lambda (x0)
      x0))

  (scm:define Fraction
    (scm:lambda (x0)
      x0))

  (scm:define eqRelative
    (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:lambda (v22)
          (scm:cond
            [(scm:fl=? v11 0.0) (scm:fl<=? (Data.Number.abs v22) v0)]
            [(scm:fl=? v22 0.0) (scm:fl<=? (Data.Number.abs v11) v0)]
            [scm:else (scm:fl<=? (Data.Number.abs (scm:fl- v11 v22)) (scm:fl/ (scm:fl* v0 (Data.Number.abs (scm:fl+ v11 v22))) 2.0))])))))

  (scm:define eqApproximate
    (eqRelative 0.000001))

  (scm:define neqApproximate
    (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:not (((eqRelative 0.000001) x0) y1)))))

  (scm:define eqAbsolute
    (scm:lambda (v0)
      (scm:lambda (x1)
        (scm:lambda (y2)
          (scm:fl<=? (Data.Number.abs (scm:fl- x1 y2)) v0))))))
