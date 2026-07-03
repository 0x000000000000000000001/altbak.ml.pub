#!r6rs
#!chezscheme
(library
  (Data.List.Partial lib)
  (export
    head
    init
    last
    tail)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.List.Types lib) Data.List.Types.))

  (scm:define tail
    (scm:lambda (_)
      (scm:lambda (v1)
        (scm:cond
          [(scm:pair? v1) (scm:cdr v1)]
          [scm:else (rt:fail)]))))

  (scm:define last
    (scm:lambda (_)
      (scm:lambda (v1)
        (scm:cond
          [(scm:pair? v1) (scm:cond
            [(scm:null? (scm:cdr v1)) (scm:car v1)]
            [scm:else ((last (scm:quote undefined)) (scm:cdr v1))])]
          [scm:else (rt:fail)]))))

  (scm:define init
    (scm:lambda (_)
      (scm:lambda (v1)
        (scm:cond
          [(scm:pair? v1) (scm:cond
            [(scm:null? (scm:cdr v1)) (scm:quote ())]
            [scm:else (scm:cons (scm:car v1) ((init (scm:quote undefined)) (scm:cdr v1)))])]
          [scm:else (rt:fail)]))))

  (scm:define head
    (scm:lambda (_)
      (scm:lambda (v1)
        (scm:cond
          [(scm:pair? v1) (scm:car v1)]
          [scm:else (rt:fail)])))))
