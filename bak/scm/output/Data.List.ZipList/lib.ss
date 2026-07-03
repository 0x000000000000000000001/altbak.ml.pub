#!r6rs
#!chezscheme
(library
  (Data.List.ZipList lib)
  (export
    ZipList
    altZipList
    alternativeZipList
    applicativeZipList
    applyZipList
    eqZipList
    foldableZipList
    functorZipList
    monoidZipList
    newtypeZipList
    ordZipList
    plusZipList
    semigroupZipList
    showZipList
    traversableZipList
    zipListIsNotBind)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Function lib) Data.Function.)
    (prefix (Data.List.Lazy lib) Data.List.Lazy.)
    (prefix (Data.List.Lazy.Types lib) Data.List.Lazy.Types.)
    (prefix (Partial lib) Partial.))

  (scm:define ZipList
    (scm:lambda (x0)
      x0))

  (scm:define traversableZipList
    Data.List.Lazy.Types.traversableList)

  (scm:define showZipList
    (scm:lambda (dictShow0)
      (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v1)
        (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(ZipList ") ((rt:record-ref (Data.List.Lazy.Types.showList dictShow0) (scm:string->symbol "show")) v1)) (rt:string->pstring ")")))))))

  (scm:define semigroupZipList
    Data.List.Lazy.Types.semigroupList)

  (scm:define ordZipList
    (scm:lambda (dictOrd0)
      (Data.List.Lazy.Types.ordList dictOrd0)))

  (scm:define newtypeZipList
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define monoidZipList
    Data.List.Lazy.Types.monoidList)

  (scm:define functorZipList
    Data.List.Lazy.Types.functorList)

  (scm:define foldableZipList
    Data.List.Lazy.Types.foldableList)

  (scm:define eqZipList
    (scm:lambda (dictEq0)
      (scm:list (scm:cons (scm:string->symbol "eq") ((rt:record-ref Data.List.Lazy.Types.eq1List (scm:string->symbol "eq1")) dictEq0)))))

  (scm:define applyZipList
    (scm:list (scm:cons (scm:string->symbol "apply") (scm:lambda (v0)
      (scm:lambda (v11)
        (((Data.List.Lazy.zipWith Data.Function.apply) v0) v11)))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      Data.List.Lazy.Types.functorList))))

  (scm:define zipListIsNotBind
    (scm:lambda (_)
      (scm:list (scm:cons (scm:string->symbol "bind") (Partial._crashWith (rt:string->pstring "bind: unreachable"))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
        applyZipList)))))

  (scm:define applicativeZipList
    (scm:list (scm:cons (scm:string->symbol "pure") (scm:lambda (x0)
      (Data.List.Lazy.repeat x0))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
      applyZipList))))

  (scm:define altZipList
    (scm:list (scm:cons (scm:string->symbol "alt") (scm:lambda (v0)
      (scm:lambda (v11)
        (((rt:record-ref Data.List.Lazy.Types.semigroupList (scm:string->symbol "append")) v0) ((Data.List.Lazy.drop (Data.List.Lazy.length v0)) v11))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      Data.List.Lazy.Types.functorList))))

  (scm:define plusZipList
    (scm:list (scm:cons (scm:string->symbol "empty") Data.List.Lazy.Types.nil) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
      altZipList))))

  (scm:define alternativeZipList
    (scm:list (scm:cons (scm:string->symbol "Applicative0") (scm:lambda (_)
      applicativeZipList)) (scm:cons (scm:string->symbol "Plus1") (scm:lambda (_)
      plusZipList)))))
