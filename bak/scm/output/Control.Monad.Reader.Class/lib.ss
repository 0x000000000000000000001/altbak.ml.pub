#!r6rs
#!chezscheme
(library
  (Control.Monad.Reader.Class lib)
  (export
    ask
    asks
    local
    monadAskFun
    monadReaderFun)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad lib) Control.Monad.))

  (scm:define monadAskFun
    (scm:list (scm:cons (scm:string->symbol "ask") (scm:lambda (x0)
      x0)) (scm:cons (scm:string->symbol "Monad0") (scm:lambda (_)
      Control.Monad.monadFn))))

  (scm:define monadReaderFun
    (scm:list (scm:cons (scm:string->symbol "local") (scm:lambda (f0)
      (scm:lambda (g1)
        (scm:lambda (x2)
          (g1 (f0 x2)))))) (scm:cons (scm:string->symbol "MonadAsk0") (scm:lambda (_)
      monadAskFun))))

  (scm:define local
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "local"))))

  (scm:define ask
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "ask"))))

  (scm:define asks
    (scm:lambda (dictMonadAsk0)
      (scm:let ([ask11 (rt:record-ref dictMonadAsk0 (scm:string->symbol "ask"))])
        (scm:lambda (f2)
          (((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadAsk0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) f2) ask11))))))
