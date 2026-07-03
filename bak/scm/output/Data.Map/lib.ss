#!r6rs
#!chezscheme
(library
  (Data.Map lib)
  (export
    SemigroupMap
    altSemigroupMap
    applySemigroupMap
    bindSemigroupMap
    eq1SemigroupMap
    eqSemigroupMap
    foldableSemigroupMap
    foldableWithIndexSemigroupMap
    functorSemigroupMap
    functorWithIndexSemigroupMap
    keys
    monoidSemigroupMap
    newtypeSemigroupMap
    ord1SemigroupMap
    ordSemigroupMap
    plusSemigroupMap
    semigroupSemigroupMap
    showSemigroupMap
    traversableSemigroupMap
    traversableWithIndexSemigroupMap)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Function lib) Data.Function.)
    (prefix (Data.Map.Internal lib) Data.Map.Internal.)
    (prefix (Data.Unit lib) Data.Unit.))

  (scm:define SemigroupMap
    (scm:lambda (x0)
      x0))

  (scm:define traversableWithIndexSemigroupMap
    Data.Map.Internal.traversableWithIndexMap)

  (scm:define traversableSemigroupMap
    Data.Map.Internal.traversableMap)

  (scm:define showSemigroupMap
    (scm:lambda (dictShow0)
      (scm:lambda (dictShow11)
        ((Data.Map.Internal.showMap dictShow0) dictShow11))))

  (scm:define semigroupSemigroupMap
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (dictSemigroup2)
          (scm:let ([append3 (rt:record-ref dictSemigroup2 (scm:string->symbol "append"))])
            (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (v4)
              (scm:lambda (v15)
                (Data.Map.Internal.unsafeUnionWith compare1 append3 v4 v15))))))))))

  (scm:define plusSemigroupMap
    (scm:lambda (dictOrd0)
      (Data.Map.Internal.plusMap dictOrd0)))

  (scm:define ordSemigroupMap
    (scm:lambda (dictOrd0)
      (Data.Map.Internal.ordMap dictOrd0)))

  (scm:define ord1SemigroupMap
    (scm:lambda (dictOrd0)
      (Data.Map.Internal.ord1Map dictOrd0)))

  (scm:define newtypeSemigroupMap
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define monoidSemigroupMap
    (scm:lambda (dictOrd0)
      (scm:let ([semigroupSemigroupMap11 (semigroupSemigroupMap dictOrd0)])
        (scm:lambda (dictSemigroup2)
          (scm:let ([semigroupSemigroupMap23 (semigroupSemigroupMap11 dictSemigroup2)])
            (scm:list (scm:cons (scm:string->symbol "mempty") Data.Map.Internal.Leaf) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
              semigroupSemigroupMap23))))))))

  (scm:define keys
    (scm:letrec ([go0 (scm:lambda (v1)
      (scm:cond
        [(Data.Map.Internal.Leaf? v1) Data.Map.Internal.Leaf]
        [(Data.Map.Internal.Node? v1) (Data.Map.Internal.Node* (Data.Map.Internal.Node-value0 v1) (Data.Map.Internal.Node-value1 v1) (Data.Map.Internal.Node-value2 v1) Data.Unit.unit (go0 (Data.Map.Internal.Node-value4 v1)) (go0 (Data.Map.Internal.Node-value5 v1)))]
        [scm:else (rt:fail)]))])
      (scm:lambda (x1)
        (go0 x1))))

  (scm:define functorWithIndexSemigroupMap
    Data.Map.Internal.functorWithIndexMap)

  (scm:define functorSemigroupMap
    Data.Map.Internal.functorMap)

  (scm:define foldableWithIndexSemigroupMap
    Data.Map.Internal.foldableWithIndexMap)

  (scm:define foldableSemigroupMap
    Data.Map.Internal.foldableMap)

  (scm:define eqSemigroupMap
    (scm:lambda (dictEq0)
      (scm:lambda (dictEq11)
        ((Data.Map.Internal.eqMap dictEq0) dictEq11))))

  (scm:define eq1SemigroupMap
    (scm:lambda (dictEq0)
      (scm:list (scm:cons (scm:string->symbol "eq1") (scm:lambda (dictEq11)
        (rt:record-ref ((Data.Map.Internal.eqMap dictEq0) dictEq11) (scm:string->symbol "eq")))))))

  (scm:define bindSemigroupMap
    (scm:lambda (dictOrd0)
      (Data.Map.Internal.bindMap dictOrd0)))

  (scm:define applySemigroupMap
    (scm:lambda (dictOrd0)
      (scm:list (scm:cons (scm:string->symbol "apply") (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (m12)
          (scm:lambda (m23)
            (Data.Map.Internal.unsafeIntersectionWith compare1 Data.Map.Internal.identity m12 m23))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
        Data.Map.Internal.functorMap)))))

  (scm:define altSemigroupMap
    (scm:lambda (dictOrd0)
      (scm:list (scm:cons (scm:string->symbol "alt") (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (m12)
          (scm:lambda (m23)
            (Data.Map.Internal.unsafeUnionWith compare1 Data.Function.const m12 m23))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
        Data.Map.Internal.functorMap))))))
