#!r6rs
#!chezscheme
(library
  (Data.Enum.Gen lib)
  (export
    foldable1NonEmpty
    genBoundedEnum)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.Gen lib) Control.Monad.Gen.)
    (prefix (Data.Enum lib) Data.Enum.)
    (prefix (Data.Foldable lib) Data.Foldable.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.NonEmpty lib) Data.NonEmpty.)
    (prefix (Data.Unfoldable1 lib) Data.Unfoldable1.))

  (scm:define foldable1NonEmpty
    (Data.NonEmpty.foldable1NonEmpty Data.Foldable.foldableArray))

  (scm:define genBoundedEnum
    (scm:lambda (dictMonadGen0)
      (scm:let ([elements1 ((Control.Monad.Gen.elements dictMonadGen0) foldable1NonEmpty)])
        (scm:lambda (dictBoundedEnum2)
          (scm:let*
            ([Enum13 ((rt:record-ref dictBoundedEnum2 (scm:string->symbol "Enum1")) (scm:quote undefined))]
             [Bounded04 ((rt:record-ref dictBoundedEnum2 (scm:string->symbol "Bounded0")) (scm:quote undefined))]
             [v5 ((rt:record-ref Enum13 (scm:string->symbol "succ")) (rt:record-ref Bounded04 (scm:string->symbol "bottom")))])
              (scm:cond
                [(Data.Maybe.Just? v5) (elements1 (Data.NonEmpty.NonEmpty* (rt:record-ref Bounded04 (scm:string->symbol "bottom")) ((((Data.Enum.enumFromTo Enum13) Data.Unfoldable1.unfoldable1Array) (Data.Maybe.Just-value0 v5)) (rt:record-ref Bounded04 (scm:string->symbol "top")))))]
                [(Data.Maybe.Nothing? v5) ((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadGen0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (rt:record-ref Bounded04 (scm:string->symbol "bottom")))]
                [scm:else (rt:fail)])))))))
