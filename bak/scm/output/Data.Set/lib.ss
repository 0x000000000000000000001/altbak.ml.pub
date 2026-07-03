#!r6rs
#!chezscheme
(library
  (Data.Set lib)
  (export
    Set
    catMaybes
    checkValid
    delete
    difference
    empty
    eq1Set
    eqSet
    filter
    findMax
    findMin
    foldableSet
    fromFoldable
    fromMap
    identity
    insert
    intersection
    isEmpty
    map
    mapMaybe
    member
    monoidSet
    ord1Set
    ordSet
    properSubset
    semigroupSet
    showSet
    singleton
    size
    subset
    toMap
    toUnfoldable
    toUnfoldable1
    toggle
    union
    unions)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Eq lib) Data.Eq.)
    (prefix (Data.Function lib) Data.Function.)
    (prefix (Data.List.Types lib) Data.List.Types.)
    (prefix (Data.Map.Internal lib) Data.Map.Internal.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (prefix (Data.Show lib) Data.Show.)
    (prefix (Data.Tuple lib) Data.Tuple.)
    (prefix (Data.Unfoldable lib) Data.Unfoldable.)
    (prefix (Data.Unit lib) Data.Unit.))

  (scm:define identity
    (scm:lambda (x0)
      x0))

  (scm:define Set
    (scm:lambda (x0)
      x0))

  (scm:define union
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (m12)
          (scm:lambda (m23)
            (Data.Map.Internal.unsafeUnionWith compare1 Data.Function.const m12 m23))))))

  (scm:define toggle
    (scm:lambda (dictOrd0)
      (scm:let ([alter1 (Data.Map.Internal.alter dictOrd0)])
        (scm:lambda (a2)
          (scm:lambda (v3)
            (((alter1 (scm:lambda (v24)
              (scm:cond
                [(Data.Maybe.Nothing? v24) (Data.Maybe.Just Data.Unit.unit)]
                [(Data.Maybe.Just? v24) Data.Maybe.Nothing]
                [scm:else (rt:fail)]))) a2) v3))))))

  (scm:define toMap
    (scm:lambda (v0)
      v0))

  (scm:define toUnfoldable
    (scm:lambda (dictUnfoldable0)
      (scm:let ([_1 ((rt:record-ref dictUnfoldable0 (scm:string->symbol "unfoldr")) (scm:lambda (xs1)
        (scm:cond
          [(scm:null? xs1) Data.Maybe.Nothing]
          [(scm:pair? xs1) (Data.Maybe.Just (Data.Tuple.Tuple* (scm:car xs1) (scm:cdr xs1)))]
          [scm:else (rt:fail)])))])
        (scm:lambda (x2)
          (_1 (scm:letrec ([go3 (scm:lambda (m$p4 z$p5)
            (scm:cond
              [(Data.Map.Internal.Leaf? m$p4) z$p5]
              [(Data.Map.Internal.Node? m$p4) (go3 (Data.Map.Internal.Node-value4 m$p4) (scm:cons (Data.Map.Internal.Node-value2 m$p4) (go3 (Data.Map.Internal.Node-value5 m$p4) z$p5)))]
              [scm:else (rt:fail)]))])
            (go3 x2 (scm:quote ()))))))))

  (scm:define toUnfoldable1
    (scm:let ([_0 ((rt:record-ref Data.Unfoldable.unfoldableArray (scm:string->symbol "unfoldr")) (scm:lambda (xs0)
      (scm:cond
        [(scm:null? xs0) Data.Maybe.Nothing]
        [(scm:pair? xs0) (Data.Maybe.Just (Data.Tuple.Tuple* (scm:car xs0) (scm:cdr xs0)))]
        [scm:else (rt:fail)])))])
      (scm:lambda (x1)
        (_0 (scm:letrec ([go2 (scm:lambda (m$p3 z$p4)
          (scm:cond
            [(Data.Map.Internal.Leaf? m$p3) z$p4]
            [(Data.Map.Internal.Node? m$p3) (go2 (Data.Map.Internal.Node-value4 m$p3) (scm:cons (Data.Map.Internal.Node-value2 m$p3) (go2 (Data.Map.Internal.Node-value5 m$p3) z$p4)))]
            [scm:else (rt:fail)]))])
          (go2 x1 (scm:quote ())))))))

  (scm:define size
    Data.Map.Internal.size)

  (scm:define singleton
    (scm:lambda (a0)
      (Data.Map.Internal.Node* 1 1 a0 Data.Unit.unit Data.Map.Internal.Leaf Data.Map.Internal.Leaf)))

  (scm:define showSet
    (scm:lambda (dictShow0)
      (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (s1)
        (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(fromFoldable ") ((Data.Show.showArrayImpl (rt:record-ref dictShow0 (scm:string->symbol "show"))) (toUnfoldable1 s1))) (rt:string->pstring ")")))))))

  (scm:define semigroupSet
    (scm:lambda (dictOrd0)
      (scm:list (scm:cons (scm:string->symbol "append") (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (m12)
          (scm:lambda (m23)
            (Data.Map.Internal.unsafeUnionWith compare1 Data.Function.const m12 m23))))))))

  (scm:define member
    (scm:lambda (dictOrd0)
      (scm:lambda (k1)
        (scm:letrec ([go2 (scm:lambda (v3)
          (scm:cond
            [(Data.Map.Internal.Leaf? v3) #f]
            [(Data.Map.Internal.Node? v3) (scm:let ([v14 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) k1) (Data.Map.Internal.Node-value2 v3))])
              (scm:cond
                [(Data.Ordering.LT? v14) (go2 (Data.Map.Internal.Node-value4 v3))]
                [(Data.Ordering.GT? v14) (go2 (Data.Map.Internal.Node-value5 v3))]
                [(Data.Ordering.EQ? v14) #t]
                [scm:else (rt:fail)]))]
            [scm:else (rt:fail)]))])
          go2))))

  (scm:define isEmpty
    Data.Map.Internal.isEmpty)

  (scm:define intersection
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (m12)
          (scm:lambda (m23)
            (Data.Map.Internal.unsafeIntersectionWith compare1 Data.Function.const m12 m23))))))

  (scm:define insert
    (scm:lambda (dictOrd0)
      (scm:lambda (a1)
        (scm:lambda (v2)
          ((((Data.Map.Internal.insert dictOrd0) a1) Data.Unit.unit) v2)))))

  (scm:define fromMap
    Set)

  (scm:define foldableSet
    (scm:list (scm:cons (scm:string->symbol "foldMap") (scm:lambda (dictMonoid0)
      (scm:let ([foldMap11 ((rt:record-ref Data.List.Types.foldableList (scm:string->symbol "foldMap")) dictMonoid0)])
        (scm:lambda (f2)
          (scm:let ([_3 (foldMap11 f2)])
            (scm:lambda (x4)
              (_3 (scm:letrec ([go5 (scm:lambda (m$p6 z$p7)
                (scm:cond
                  [(Data.Map.Internal.Leaf? m$p6) z$p7]
                  [(Data.Map.Internal.Node? m$p6) (go5 (Data.Map.Internal.Node-value4 m$p6) (scm:cons (Data.Map.Internal.Node-value2 m$p6) (go5 (Data.Map.Internal.Node-value5 m$p6) z$p7)))]
                  [scm:else (rt:fail)]))])
                (go5 x4 (scm:quote ())))))))))) (scm:cons (scm:string->symbol "foldl") (scm:lambda (f0)
      (scm:lambda (x1)
        (scm:letrec ([go2 (scm:lambda (b3)
          (scm:lambda (v4)
            (scm:cond
              [(scm:null? v4) b3]
              [(scm:pair? v4) ((go2 ((f0 b3) (scm:car v4))) (scm:cdr v4))]
              [scm:else (rt:fail)])))])
          (scm:let ([_3 (go2 x1)])
            (scm:lambda (x4)
              (_3 (scm:letrec ([go5 (scm:lambda (m$p6 z$p7)
                (scm:cond
                  [(Data.Map.Internal.Leaf? m$p6) z$p7]
                  [(Data.Map.Internal.Node? m$p6) (go5 (Data.Map.Internal.Node-value4 m$p6) (scm:cons (Data.Map.Internal.Node-value2 m$p6) (go5 (Data.Map.Internal.Node-value5 m$p6) z$p7)))]
                  [scm:else (rt:fail)]))])
                (go5 x4 (scm:quote ())))))))))) (scm:cons (scm:string->symbol "foldr") (scm:lambda (f0)
      (scm:lambda (x1)
        (scm:let ([_2 (((rt:record-ref Data.List.Types.foldableList (scm:string->symbol "foldr")) f0) x1)])
          (scm:lambda (x3)
            (_2 (scm:letrec ([go4 (scm:lambda (m$p5 z$p6)
              (scm:cond
                [(Data.Map.Internal.Leaf? m$p5) z$p6]
                [(Data.Map.Internal.Node? m$p5) (go4 (Data.Map.Internal.Node-value4 m$p5) (scm:cons (Data.Map.Internal.Node-value2 m$p5) (go4 (Data.Map.Internal.Node-value5 m$p5) z$p6)))]
                [scm:else (rt:fail)]))])
              (go4 x3 (scm:quote ())))))))))))

  (scm:define findMin
    (scm:lambda (v0)
      (scm:let ([_1 (Data.Map.Internal.findMin v0)])
        (scm:cond
          [(Data.Maybe.Just? _1) (Data.Maybe.Just (rt:record-ref (Data.Maybe.Just-value0 _1) (scm:string->symbol "key")))]
          [scm:else Data.Maybe.Nothing]))))

  (scm:define findMax
    (scm:lambda (v0)
      (scm:let ([_1 (Data.Map.Internal.findMax v0)])
        (scm:cond
          [(Data.Maybe.Just? _1) (Data.Maybe.Just (rt:record-ref (Data.Maybe.Just-value0 _1) (scm:string->symbol "key")))]
          [scm:else Data.Maybe.Nothing]))))

  (scm:define filter
    (scm:lambda (dictOrd0)
      (Data.Map.Internal.filterKeys dictOrd0)))

  (scm:define eqSet
    (scm:lambda (dictEq0)
      (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (v1)
        (scm:lambda (v12)
          (((rt:record-ref ((Data.Map.Internal.eqMap dictEq0) Data.Eq.eqUnit) (scm:string->symbol "eq")) v1) v12)))))))

  (scm:define ordSet
    (scm:lambda (dictOrd0)
      (scm:let*
        ([_1 ((rt:record-ref dictOrd0 (scm:string->symbol "Eq0")) (scm:quote undefined))]
         [eqSet12 (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (v2)
          (scm:lambda (v13)
            (((rt:record-ref ((Data.Map.Internal.eqMap _1) Data.Eq.eqUnit) (scm:string->symbol "eq")) v2) v13)))))])
          (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (s13)
            (scm:lambda (s24)
              (((rt:record-ref (Data.List.Types.ordList dictOrd0) (scm:string->symbol "compare")) (scm:letrec ([go5 (scm:lambda (m$p6 z$p7)
                (scm:cond
                  [(Data.Map.Internal.Leaf? m$p6) z$p7]
                  [(Data.Map.Internal.Node? m$p6) (go5 (Data.Map.Internal.Node-value4 m$p6) (scm:cons (Data.Map.Internal.Node-value2 m$p6) (go5 (Data.Map.Internal.Node-value5 m$p6) z$p7)))]
                  [scm:else (rt:fail)]))])
                (go5 s13 (scm:quote ())))) (scm:letrec ([go5 (scm:lambda (m$p6 z$p7)
                (scm:cond
                  [(Data.Map.Internal.Leaf? m$p6) z$p7]
                  [(Data.Map.Internal.Node? m$p6) (go5 (Data.Map.Internal.Node-value4 m$p6) (scm:cons (Data.Map.Internal.Node-value2 m$p6) (go5 (Data.Map.Internal.Node-value5 m$p6) z$p7)))]
                  [scm:else (rt:fail)]))])
                (go5 s24 (scm:quote ()))))))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
            eqSet12))))))

  (scm:define eq1Set
    (scm:list (scm:cons (scm:string->symbol "eq1") (scm:lambda (dictEq0)
      (scm:lambda (v1)
        (scm:lambda (v12)
          (((rt:record-ref ((Data.Map.Internal.eqMap dictEq0) Data.Eq.eqUnit) (scm:string->symbol "eq")) v1) v12)))))))

  (scm:define ord1Set
    (scm:list (scm:cons (scm:string->symbol "compare1") (scm:lambda (dictOrd0)
      (rt:record-ref (ordSet dictOrd0) (scm:string->symbol "compare")))) (scm:cons (scm:string->symbol "Eq10") (scm:lambda (_)
      eq1Set))))

  (scm:define empty
    Data.Map.Internal.Leaf)

  (scm:define fromFoldable
    (scm:lambda (dictFoldable0)
      (scm:lambda (dictOrd1)
        (((rt:record-ref dictFoldable0 (scm:string->symbol "foldl")) (scm:lambda (m2)
          (scm:lambda (a3)
            ((((Data.Map.Internal.insert dictOrd1) a3) Data.Unit.unit) m2)))) Data.Map.Internal.Leaf))))

  (scm:define map
    (scm:lambda (dictOrd0)
      (scm:lambda (f1)
        (scm:letrec ([go2 (scm:lambda (b3)
          (scm:lambda (v4)
            (scm:cond
              [(scm:null? v4) b3]
              [(scm:pair? v4) ((go2 ((((Data.Map.Internal.insert dictOrd0) (f1 (scm:car v4))) Data.Unit.unit) b3)) (scm:cdr v4))]
              [scm:else (rt:fail)])))])
          (scm:let ([_3 (go2 Data.Map.Internal.Leaf)])
            (scm:lambda (x4)
              (_3 (scm:letrec ([go5 (scm:lambda (m$p6 z$p7)
                (scm:cond
                  [(Data.Map.Internal.Leaf? m$p6) z$p7]
                  [(Data.Map.Internal.Node? m$p6) (go5 (Data.Map.Internal.Node-value4 m$p6) (scm:cons (Data.Map.Internal.Node-value2 m$p6) (go5 (Data.Map.Internal.Node-value5 m$p6) z$p7)))]
                  [scm:else (rt:fail)]))])
                (go5 x4 (scm:quote ()))))))))))

  (scm:define mapMaybe
    (scm:lambda (dictOrd0)
      (scm:lambda (f1)
        (((rt:record-ref foldableSet (scm:string->symbol "foldr")) (scm:lambda (a2)
          (scm:lambda (acc3)
            (scm:let ([_4 (f1 a2)])
              (scm:cond
                [(Data.Maybe.Nothing? _4) acc3]
                [(Data.Maybe.Just? _4) ((((Data.Map.Internal.insert dictOrd0) (Data.Maybe.Just-value0 _4)) Data.Unit.unit) acc3)]
                [scm:else (rt:fail)]))))) Data.Map.Internal.Leaf))))

  (scm:define monoidSet
    (scm:lambda (dictOrd0)
      (scm:let ([semigroupSet11 (scm:list (scm:cons (scm:string->symbol "append") (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (m12)
          (scm:lambda (m23)
            (Data.Map.Internal.unsafeUnionWith compare1 Data.Function.const m12 m23))))))])
        (scm:list (scm:cons (scm:string->symbol "mempty") Data.Map.Internal.Leaf) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
          semigroupSet11))))))

  (scm:define unions
    (scm:lambda (dictFoldable0)
      (scm:lambda (dictOrd1)
        (((rt:record-ref dictFoldable0 (scm:string->symbol "foldl")) (scm:let ([compare2 (rt:record-ref dictOrd1 (scm:string->symbol "compare"))])
          (scm:lambda (m13)
            (scm:lambda (m24)
              (Data.Map.Internal.unsafeUnionWith compare2 Data.Function.const m13 m24))))) Data.Map.Internal.Leaf))))

  (scm:define difference
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (m12)
          (scm:lambda (m23)
            (Data.Map.Internal.unsafeDifference compare1 m12 m23))))))

  (scm:define subset
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (s12)
          (scm:lambda (s23)
            (Data.Map.Internal.Leaf? (Data.Map.Internal.unsafeDifference compare1 s12 s23)))))))

  (scm:define properSubset
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (s12)
          (scm:lambda (s23)
            (scm:and (scm:not (scm:fx=? (scm:cond
              [(Data.Map.Internal.Leaf? s12) 0]
              [(Data.Map.Internal.Node? s12) (Data.Map.Internal.Node-value1 s12)]
              [scm:else (rt:fail)]) (scm:cond
              [(Data.Map.Internal.Leaf? s23) 0]
              [(Data.Map.Internal.Node? s23) (Data.Map.Internal.Node-value1 s23)]
              [scm:else (rt:fail)]))) (Data.Map.Internal.Leaf? (Data.Map.Internal.unsafeDifference compare1 s12 s23))))))))

  (scm:define delete
    (scm:lambda (dictOrd0)
      (Data.Map.Internal.delete dictOrd0)))

  (scm:define checkValid
    (scm:lambda (dictOrd0)
      (Data.Map.Internal.checkValid dictOrd0)))

  (scm:define catMaybes
    (scm:lambda (dictOrd0)
      ((mapMaybe dictOrd0) identity))))
