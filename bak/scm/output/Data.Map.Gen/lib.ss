#!r6rs
#!chezscheme
(library
  (Data.Map.Gen lib)
  (export
    genMap)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.Gen lib) Control.Monad.Gen.)
    (prefix (Data.List.Types lib) Data.List.Types.)
    (prefix (Data.Map.Internal lib) Data.Map.Internal.)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define genMap
    (scm:lambda (dictMonadRec0)
      (scm:lambda (dictMonadGen1)
        (scm:let*
          ([Bind12 ((rt:record-ref ((rt:record-ref dictMonadGen1 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined))]
           [Apply03 ((rt:record-ref Bind12 (scm:string->symbol "Apply0")) (scm:quote undefined))]
           [_4 ((rt:record-ref Apply03 (scm:string->symbol "Functor0")) (scm:quote undefined))]
           [unfoldable15 (((Control.Monad.Gen.unfoldable dictMonadRec0) dictMonadGen1) Data.List.Types.unfoldableList)])
            (scm:lambda (dictOrd6)
              (scm:let ([fromFoldable7 ((Data.Map.Internal.fromFoldable dictOrd6) Data.List.Types.foldableList)])
                (scm:lambda (genKey8)
                  (scm:lambda (genValue9)
                    ((rt:record-ref dictMonadGen1 (scm:string->symbol "sized")) (scm:lambda (size10)
                      (((rt:record-ref Bind12 (scm:string->symbol "bind")) (((rt:record-ref dictMonadGen1 (scm:string->symbol "chooseInt")) 0) size10)) (scm:lambda (newSize11)
                        (((rt:record-ref dictMonadGen1 (scm:string->symbol "resize")) (scm:lambda (v12)
                          newSize11)) (((rt:record-ref _4 (scm:string->symbol "map")) fromFoldable7) (unfoldable15 (((rt:record-ref Apply03 (scm:string->symbol "apply")) (((rt:record-ref _4 (scm:string->symbol "map")) Data.Tuple.Tuple) genKey8)) genValue9)))))))))))))))))
