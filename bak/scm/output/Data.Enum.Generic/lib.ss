#!r6rs
#!chezscheme
(library
  (Data.Enum.Generic lib)
  (export
    genericBoundedEnumArgument
    genericBoundedEnumConstructor
    genericBoundedEnumNoArguments
    genericBoundedEnumProduct
    genericBoundedEnumSum
    genericCardinality
    genericCardinality$p
    genericEnumArgument
    genericEnumConstructor
    genericEnumNoArguments
    genericEnumProduct
    genericEnumSum
    genericFromEnum
    genericFromEnum$p
    genericPred
    genericPred$p
    genericSucc
    genericSucc$p
    genericToEnum
    genericToEnum$p)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.EuclideanRing lib) Data.EuclideanRing.)
    (prefix (Data.Generic.Rep lib) Data.Generic.Rep.)
    (prefix (Data.Maybe lib) Data.Maybe.))

  (scm:define genericToEnum$p
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "genericToEnum'"))))

  (scm:define genericToEnum
    (scm:lambda (dictGeneric0)
      (scm:lambda (dictGenericBoundedEnum1)
        (scm:lambda (x2)
          (scm:let ([_3 ((rt:record-ref dictGenericBoundedEnum1 (scm:string->symbol "genericToEnum'")) x2)])
            (scm:cond
              [(Data.Maybe.Just? _3) (Data.Maybe.Just ((rt:record-ref dictGeneric0 (scm:string->symbol "to")) (Data.Maybe.Just-value0 _3)))]
              [scm:else Data.Maybe.Nothing]))))))

  (scm:define genericSucc$p
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "genericSucc'"))))

  (scm:define genericSucc
    (scm:lambda (dictGeneric0)
      (scm:lambda (dictGenericEnum1)
        (scm:lambda (x2)
          (scm:let ([_3 ((rt:record-ref dictGenericEnum1 (scm:string->symbol "genericSucc'")) ((rt:record-ref dictGeneric0 (scm:string->symbol "from")) x2))])
            (scm:cond
              [(Data.Maybe.Just? _3) (Data.Maybe.Just ((rt:record-ref dictGeneric0 (scm:string->symbol "to")) (Data.Maybe.Just-value0 _3)))]
              [scm:else Data.Maybe.Nothing]))))))

  (scm:define genericPred$p
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "genericPred'"))))

  (scm:define genericPred
    (scm:lambda (dictGeneric0)
      (scm:lambda (dictGenericEnum1)
        (scm:lambda (x2)
          (scm:let ([_3 ((rt:record-ref dictGenericEnum1 (scm:string->symbol "genericPred'")) ((rt:record-ref dictGeneric0 (scm:string->symbol "from")) x2))])
            (scm:cond
              [(Data.Maybe.Just? _3) (Data.Maybe.Just ((rt:record-ref dictGeneric0 (scm:string->symbol "to")) (Data.Maybe.Just-value0 _3)))]
              [scm:else Data.Maybe.Nothing]))))))

  (scm:define genericFromEnum$p
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "genericFromEnum'"))))

  (scm:define genericFromEnum
    (scm:lambda (dictGeneric0)
      (scm:lambda (dictGenericBoundedEnum1)
        (scm:lambda (x2)
          ((rt:record-ref dictGenericBoundedEnum1 (scm:string->symbol "genericFromEnum'")) ((rt:record-ref dictGeneric0 (scm:string->symbol "from")) x2))))))

  (scm:define genericEnumSum
    (scm:lambda (dictGenericEnum0)
      (scm:lambda (dictGenericTop1)
        (scm:let ([genericTop$p2 (rt:record-ref dictGenericTop1 (scm:string->symbol "genericTop'"))])
          (scm:lambda (dictGenericEnum13)
            (scm:lambda (dictGenericBottom4)
              (scm:let ([genericBottom$p5 (rt:record-ref dictGenericBottom4 (scm:string->symbol "genericBottom'"))])
                (scm:list (scm:cons (scm:string->symbol "genericPred'") (scm:lambda (v6)
                  (scm:cond
                    [(Data.Generic.Rep.Inl? v6) (scm:let ([_7 ((rt:record-ref dictGenericEnum0 (scm:string->symbol "genericPred'")) (Data.Generic.Rep.Inl-value0 v6))])
                      (scm:cond
                        [(Data.Maybe.Just? _7) (Data.Maybe.Just (Data.Generic.Rep.Inl (Data.Maybe.Just-value0 _7)))]
                        [scm:else Data.Maybe.Nothing]))]
                    [(Data.Generic.Rep.Inr? v6) (scm:let ([v17 ((rt:record-ref dictGenericEnum13 (scm:string->symbol "genericPred'")) (Data.Generic.Rep.Inr-value0 v6))])
                      (scm:cond
                        [(Data.Maybe.Nothing? v17) (Data.Maybe.Just (Data.Generic.Rep.Inl genericTop$p2))]
                        [(Data.Maybe.Just? v17) (Data.Maybe.Just (Data.Generic.Rep.Inr (Data.Maybe.Just-value0 v17)))]
                        [scm:else (rt:fail)]))]
                    [scm:else (rt:fail)]))) (scm:cons (scm:string->symbol "genericSucc'") (scm:lambda (v6)
                  (scm:cond
                    [(Data.Generic.Rep.Inl? v6) (scm:let ([v17 ((rt:record-ref dictGenericEnum0 (scm:string->symbol "genericSucc'")) (Data.Generic.Rep.Inl-value0 v6))])
                      (scm:cond
                        [(Data.Maybe.Nothing? v17) (Data.Maybe.Just (Data.Generic.Rep.Inr genericBottom$p5))]
                        [(Data.Maybe.Just? v17) (Data.Maybe.Just (Data.Generic.Rep.Inl (Data.Maybe.Just-value0 v17)))]
                        [scm:else (rt:fail)]))]
                    [(Data.Generic.Rep.Inr? v6) (scm:let ([_7 ((rt:record-ref dictGenericEnum13 (scm:string->symbol "genericSucc'")) (Data.Generic.Rep.Inr-value0 v6))])
                      (scm:cond
                        [(Data.Maybe.Just? _7) (Data.Maybe.Just (Data.Generic.Rep.Inr (Data.Maybe.Just-value0 _7)))]
                        [scm:else Data.Maybe.Nothing]))]
                    [scm:else (rt:fail)])))))))))))

  (scm:define genericEnumProduct
    (scm:lambda (dictGenericEnum0)
      (scm:lambda (dictGenericTop1)
        (scm:lambda (dictGenericBottom2)
          (scm:lambda (dictGenericEnum13)
            (scm:lambda (dictGenericTop14)
              (scm:let ([genericTop$p5 (rt:record-ref dictGenericTop14 (scm:string->symbol "genericTop'"))])
                (scm:lambda (dictGenericBottom16)
                  (scm:let ([genericBottom$p7 (rt:record-ref dictGenericBottom16 (scm:string->symbol "genericBottom'"))])
                    (scm:list (scm:cons (scm:string->symbol "genericPred'") (scm:lambda (v8)
                      (scm:let ([v19 ((rt:record-ref dictGenericEnum13 (scm:string->symbol "genericPred'")) (Data.Generic.Rep.Product-value1 v8))])
                        (scm:cond
                          [(Data.Maybe.Just? v19) (Data.Maybe.Just (Data.Generic.Rep.Product* (Data.Generic.Rep.Product-value0 v8) (Data.Maybe.Just-value0 v19)))]
                          [(Data.Maybe.Nothing? v19) (scm:let ([_10 ((rt:record-ref dictGenericEnum0 (scm:string->symbol "genericPred'")) (Data.Generic.Rep.Product-value0 v8))])
                            (scm:cond
                              [(Data.Maybe.Just? _10) (Data.Maybe.Just (Data.Generic.Rep.Product* (Data.Maybe.Just-value0 _10) genericTop$p5))]
                              [scm:else Data.Maybe.Nothing]))]
                          [scm:else (rt:fail)])))) (scm:cons (scm:string->symbol "genericSucc'") (scm:lambda (v8)
                      (scm:let ([v19 ((rt:record-ref dictGenericEnum13 (scm:string->symbol "genericSucc'")) (Data.Generic.Rep.Product-value1 v8))])
                        (scm:cond
                          [(Data.Maybe.Just? v19) (Data.Maybe.Just (Data.Generic.Rep.Product* (Data.Generic.Rep.Product-value0 v8) (Data.Maybe.Just-value0 v19)))]
                          [(Data.Maybe.Nothing? v19) (scm:let ([_10 ((rt:record-ref dictGenericEnum0 (scm:string->symbol "genericSucc'")) (Data.Generic.Rep.Product-value0 v8))])
                            (scm:cond
                              [(Data.Maybe.Just? _10) (Data.Maybe.Just (Data.Generic.Rep.Product* (Data.Maybe.Just-value0 _10) genericBottom$p7))]
                              [scm:else Data.Maybe.Nothing]))]
                          [scm:else (rt:fail)]))))))))))))))

  (scm:define genericEnumNoArguments
    (scm:list (scm:cons (scm:string->symbol "genericPred'") (scm:lambda (v0)
      Data.Maybe.Nothing)) (scm:cons (scm:string->symbol "genericSucc'") (scm:lambda (v0)
      Data.Maybe.Nothing))))

  (scm:define genericEnumConstructor
    (scm:lambda (dictGenericEnum0)
      (scm:list (scm:cons (scm:string->symbol "genericPred'") (scm:lambda (v1)
        (scm:let ([_2 ((rt:record-ref dictGenericEnum0 (scm:string->symbol "genericPred'")) v1)])
          (scm:cond
            [(Data.Maybe.Just? _2) (Data.Maybe.Just (Data.Maybe.Just-value0 _2))]
            [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "genericSucc'") (scm:lambda (v1)
        (scm:let ([_2 ((rt:record-ref dictGenericEnum0 (scm:string->symbol "genericSucc'")) v1)])
          (scm:cond
            [(Data.Maybe.Just? _2) (Data.Maybe.Just (Data.Maybe.Just-value0 _2))]
            [scm:else Data.Maybe.Nothing])))))))

  (scm:define genericEnumArgument
    (scm:lambda (dictEnum0)
      (scm:list (scm:cons (scm:string->symbol "genericPred'") (scm:lambda (v1)
        (scm:let ([_2 ((rt:record-ref dictEnum0 (scm:string->symbol "pred")) v1)])
          (scm:cond
            [(Data.Maybe.Just? _2) (Data.Maybe.Just (Data.Maybe.Just-value0 _2))]
            [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "genericSucc'") (scm:lambda (v1)
        (scm:let ([_2 ((rt:record-ref dictEnum0 (scm:string->symbol "succ")) v1)])
          (scm:cond
            [(Data.Maybe.Just? _2) (Data.Maybe.Just (Data.Maybe.Just-value0 _2))]
            [scm:else Data.Maybe.Nothing])))))))

  (scm:define genericCardinality$p
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "genericCardinality'"))))

  (scm:define genericCardinality
    (scm:lambda (dictGeneric0)
      (scm:lambda (dictGenericBoundedEnum1)
        (rt:record-ref dictGenericBoundedEnum1 (scm:string->symbol "genericCardinality'")))))

  (scm:define genericBoundedEnumSum
    (scm:lambda (dictGenericBoundedEnum0)
      (scm:let ([genericCardinality$p11 (rt:record-ref dictGenericBoundedEnum0 (scm:string->symbol "genericCardinality'"))])
        (scm:lambda (dictGenericBoundedEnum12)
          (scm:list (scm:cons (scm:string->symbol "genericCardinality'") (scm:fx+ genericCardinality$p11 (rt:record-ref dictGenericBoundedEnum12 (scm:string->symbol "genericCardinality'")))) (scm:cons (scm:string->symbol "genericToEnum'") (scm:lambda (n3)
            (scm:cond
              [(scm:and (scm:fx>=? n3 0) (scm:fx<? n3 genericCardinality$p11)) (scm:let ([_4 ((rt:record-ref dictGenericBoundedEnum0 (scm:string->symbol "genericToEnum'")) n3)])
                (scm:cond
                  [(Data.Maybe.Just? _4) (Data.Maybe.Just (Data.Generic.Rep.Inl (Data.Maybe.Just-value0 _4)))]
                  [scm:else Data.Maybe.Nothing]))]
              [scm:else (scm:let ([_4 ((rt:record-ref dictGenericBoundedEnum12 (scm:string->symbol "genericToEnum'")) (scm:fx- n3 genericCardinality$p11))])
                (scm:cond
                  [(Data.Maybe.Just? _4) (Data.Maybe.Just (Data.Generic.Rep.Inr (Data.Maybe.Just-value0 _4)))]
                  [scm:else Data.Maybe.Nothing]))]))) (scm:cons (scm:string->symbol "genericFromEnum'") (scm:lambda (v3)
            (scm:cond
              [(Data.Generic.Rep.Inl? v3) ((rt:record-ref dictGenericBoundedEnum0 (scm:string->symbol "genericFromEnum'")) (Data.Generic.Rep.Inl-value0 v3))]
              [(Data.Generic.Rep.Inr? v3) (scm:fx+ ((rt:record-ref dictGenericBoundedEnum12 (scm:string->symbol "genericFromEnum'")) (Data.Generic.Rep.Inr-value0 v3)) genericCardinality$p11)]
              [scm:else (rt:fail)]))))))))

  (scm:define genericBoundedEnumProduct
    (scm:lambda (dictGenericBoundedEnum0)
      (scm:let ([genericCardinality$p11 (rt:record-ref dictGenericBoundedEnum0 (scm:string->symbol "genericCardinality'"))])
        (scm:lambda (dictGenericBoundedEnum12)
          (scm:let ([genericCardinality$p23 (rt:record-ref dictGenericBoundedEnum12 (scm:string->symbol "genericCardinality'"))])
            (scm:list (scm:cons (scm:string->symbol "genericCardinality'") (scm:fx* genericCardinality$p11 genericCardinality$p23)) (scm:cons (scm:string->symbol "genericToEnum'") (scm:lambda (n4)
              (scm:let ([_5 ((rt:record-ref dictGenericBoundedEnum0 (scm:string->symbol "genericToEnum'")) (scm:fx/ n4 genericCardinality$p23))])
                (scm:cond
                  [(Data.Maybe.Just? _5) (scm:let ([_6 ((rt:record-ref dictGenericBoundedEnum12 (scm:string->symbol "genericToEnum'")) ((Data.EuclideanRing.intMod n4) genericCardinality$p23))])
                    (scm:cond
                      [(Data.Maybe.Just? _6) (Data.Maybe.Just (Data.Generic.Rep.Product* (Data.Maybe.Just-value0 _5) (Data.Maybe.Just-value0 _6)))]
                      [scm:else Data.Maybe.Nothing]))]
                  [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "genericFromEnum'") (scm:lambda (v14)
              (scm:fx+ (scm:fx* ((rt:record-ref dictGenericBoundedEnum0 (scm:string->symbol "genericFromEnum'")) (Data.Generic.Rep.Product-value0 v14)) genericCardinality$p23) ((rt:record-ref dictGenericBoundedEnum12 (scm:string->symbol "genericFromEnum'")) (Data.Generic.Rep.Product-value1 v14)))))))))))

  (scm:define genericBoundedEnumNoArguments
    (scm:list (scm:cons (scm:string->symbol "genericCardinality'") 1) (scm:cons (scm:string->symbol "genericToEnum'") (scm:lambda (i0)
      (scm:cond
        [(scm:fx=? i0 0) (Data.Maybe.Just Data.Generic.Rep.NoArguments)]
        [scm:else Data.Maybe.Nothing]))) (scm:cons (scm:string->symbol "genericFromEnum'") (scm:lambda (v0)
      0))))

  (scm:define genericBoundedEnumConstructor
    (scm:lambda (dictGenericBoundedEnum0)
      (scm:list (scm:cons (scm:string->symbol "genericCardinality'") (rt:record-ref dictGenericBoundedEnum0 (scm:string->symbol "genericCardinality'"))) (scm:cons (scm:string->symbol "genericToEnum'") (scm:lambda (i1)
        (scm:let ([_2 ((rt:record-ref dictGenericBoundedEnum0 (scm:string->symbol "genericToEnum'")) i1)])
          (scm:cond
            [(Data.Maybe.Just? _2) (Data.Maybe.Just (Data.Maybe.Just-value0 _2))]
            [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "genericFromEnum'") (scm:lambda (v1)
        ((rt:record-ref dictGenericBoundedEnum0 (scm:string->symbol "genericFromEnum'")) v1))))))

  (scm:define genericBoundedEnumArgument
    (scm:lambda (dictBoundedEnum0)
      (scm:list (scm:cons (scm:string->symbol "genericCardinality'") (rt:record-ref dictBoundedEnum0 (scm:string->symbol "cardinality"))) (scm:cons (scm:string->symbol "genericToEnum'") (scm:lambda (i1)
        (scm:let ([_2 ((rt:record-ref dictBoundedEnum0 (scm:string->symbol "toEnum")) i1)])
          (scm:cond
            [(Data.Maybe.Just? _2) (Data.Maybe.Just (Data.Maybe.Just-value0 _2))]
            [scm:else Data.Maybe.Nothing])))) (scm:cons (scm:string->symbol "genericFromEnum'") (scm:lambda (v1)
        ((rt:record-ref dictBoundedEnum0 (scm:string->symbol "fromEnum")) v1)))))))
