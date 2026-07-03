#!r6rs
#!chezscheme
(library
  (Data.Set.NonEmpty lib)
  (export
    cons
    delete
    difference
    eq1NonEmptySet
    eqNonEmptySet
    filter
    foldable1NonEmptySet
    foldableNonEmptySet
    fromFoldable
    fromFoldable1
    fromSet
    insert
    intersection
    map
    mapMaybe
    max
    member
    min
    ord1NonEmptySet
    ordNonEmptySet
    properSubset
    semigroupNonEmptySet
    showNonEmptySet
    singleton
    size
    subset
    toSet
    toUnfoldable
    toUnfoldable1
    toUnfoldable11
    toUnfoldable12
    unionSet)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Eq lib) Data.Eq.)
    (prefix (Data.Function lib) Data.Function.)
    (prefix (Data.List.Types lib) Data.List.Types.)
    (prefix (Data.Map.Internal lib) Data.Map.Internal.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (prefix (Data.Set lib) Data.Set.)
    (prefix (Data.Show lib) Data.Show.)
    (prefix (Data.Tuple lib) Data.Tuple.)
    (prefix (Data.Unfoldable1 lib) Data.Unfoldable1.)
    (prefix (Data.Unit lib) Data.Unit.)
    (prefix (Partial lib) Partial.))

  (scm:define unionSet
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (m12)
          (scm:lambda (m23)
            (Data.Map.Internal.unsafeUnionWith compare1 Data.Function.const m12 m23))))))

  (scm:define toUnfoldable1
    (scm:lambda (dictUnfoldable10)
      (scm:let*
        ([stepNext1 (((Data.Map.Internal.stepWith Data.Map.Internal.iterMapL) (scm:lambda (k1 v2 next3)
          (Data.Maybe.Just (Data.Tuple.Tuple* k1 next3)))) (scm:lambda (v1)
          Data.Maybe.Nothing))]
         [_2 ((rt:record-ref dictUnfoldable10 (scm:string->symbol "unfoldr1")) (scm:lambda (v2)
          (Data.Tuple.Tuple* (Data.Tuple.Tuple-value0 v2) (stepNext1 (Data.Tuple.Tuple-value1 v2)))))]
         [_3 (((Data.Map.Internal.stepWith Data.Map.Internal.iterMapL) (scm:lambda (k3 v4 next5)
          (Data.Tuple.Tuple* k3 next5))) (scm:lambda (v3)
          (Partial._crashWith (rt:string->pstring "toUnfoldable1: impossible"))))])
          (scm:lambda (x4)
            (_2 (_3 (Data.Map.Internal.IterNode* x4 Data.Map.Internal.IterLeaf)))))))

  (scm:define toUnfoldable11
    (toUnfoldable1 Data.Unfoldable1.unfoldable1Array))

  (scm:define toUnfoldable12
    (toUnfoldable1 Data.List.Types.unfoldable1NonEmptyList))

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

  (scm:define toSet
    (scm:lambda (v0)
      v0))

  (scm:define subset
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (s12)
          (scm:lambda (s23)
            (Data.Map.Internal.Leaf? (Data.Map.Internal.unsafeDifference compare1 s12 s23)))))))

  (scm:define size
    Data.Map.Internal.size)

  (scm:define singleton
    Data.Set.singleton)

  (scm:define showNonEmptySet
    (scm:lambda (dictShow0)
      (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (s1)
        (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(fromFoldable1 (NonEmptyArray ") ((Data.Show.showArrayImpl (rt:record-ref dictShow0 (scm:string->symbol "show"))) (toUnfoldable11 s1))) (rt:string->pstring "))")))))))

  (scm:define semigroupNonEmptySet
    (scm:lambda (dictOrd0)
      (scm:list (scm:cons (scm:string->symbol "append") (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (m12)
          (scm:lambda (m23)
            (Data.Map.Internal.unsafeUnionWith compare1 Data.Function.const m12 m23))))))))

  (scm:define properSubset
    (scm:lambda (dictOrd0)
      (Data.Set.properSubset dictOrd0)))

  (scm:define ordNonEmptySet
    (scm:lambda (dictOrd0)
      (Data.Set.ordSet dictOrd0)))

  (scm:define ord1NonEmptySet
    Data.Set.ord1Set)

  (scm:define min
    (scm:lambda (v0)
      (scm:let ([_1 (Data.Map.Internal.findMin v0)])
        (scm:cond
          [(Data.Maybe.Just? _1) (rt:record-ref (Data.Maybe.Just-value0 _1) (scm:string->symbol "key"))]
          [scm:else (rt:fail)]))))

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

  (scm:define max
    (scm:lambda (v0)
      (scm:let ([_1 (Data.Map.Internal.findMax v0)])
        (scm:cond
          [(Data.Maybe.Just? _1) (rt:record-ref (Data.Maybe.Just-value0 _1) (scm:string->symbol "key"))]
          [scm:else (rt:fail)]))))

  (scm:define mapMaybe
    (scm:lambda (dictOrd0)
      (Data.Set.mapMaybe dictOrd0)))

  (scm:define map
    (scm:lambda (dictOrd0)
      (Data.Set.map dictOrd0)))

  (scm:define insert
    (scm:lambda (dictOrd0)
      (Data.Set.insert dictOrd0)))

  (scm:define fromSet
    (scm:lambda (s0)
      (scm:cond
        [(Data.Map.Internal.Leaf? s0) Data.Maybe.Nothing]
        [scm:else (Data.Maybe.Just s0)])))

  (scm:define intersection
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (v2)
          (scm:lambda (v13)
            (scm:let ([_4 (Data.Map.Internal.unsafeIntersectionWith compare1 Data.Function.const v2 v13)])
              (scm:cond
                [(Data.Map.Internal.Leaf? _4) Data.Maybe.Nothing]
                [scm:else (Data.Maybe.Just _4)])))))))

  (scm:define fromFoldable1
    (scm:lambda (dictFoldable10)
      (scm:lambda (dictOrd1)
        (((rt:record-ref dictFoldable10 (scm:string->symbol "foldMap1")) (scm:list (scm:cons (scm:string->symbol "append") (scm:let ([compare2 (rt:record-ref dictOrd1 (scm:string->symbol "compare"))])
          (scm:lambda (m13)
            (scm:lambda (m24)
              (Data.Map.Internal.unsafeUnionWith compare2 Data.Function.const m13 m24))))))) Data.Set.singleton))))

  (scm:define fromFoldable
    (scm:lambda (dictFoldable0)
      (scm:lambda (dictOrd1)
        (scm:let ([_2 (((rt:record-ref dictFoldable0 (scm:string->symbol "foldl")) (scm:lambda (m2)
          (scm:lambda (a3)
            ((((Data.Map.Internal.insert dictOrd1) a3) Data.Unit.unit) m2)))) Data.Map.Internal.Leaf)])
          (scm:lambda (x3)
            (scm:let ([_4 (_2 x3)])
              (scm:cond
                [(Data.Map.Internal.Leaf? _4) Data.Maybe.Nothing]
                [scm:else (Data.Maybe.Just _4)])))))))

  (scm:define foldableNonEmptySet
    Data.Set.foldableSet)

  (scm:define foldable1NonEmptySet
    (scm:list (scm:cons (scm:string->symbol "foldMap1") (scm:lambda (dictSemigroup0)
      (scm:let ([foldMap111 ((rt:record-ref Data.List.Types.foldable1NonEmptyList (scm:string->symbol "foldMap1")) dictSemigroup0)])
        (scm:lambda (f2)
          (scm:let ([_3 (foldMap111 f2)])
            (scm:lambda (x4)
              (_3 (toUnfoldable12 x4)))))))) (scm:cons (scm:string->symbol "foldr1") (scm:lambda (f0)
      (scm:let ([_1 ((rt:record-ref Data.List.Types.foldable1NonEmptyList (scm:string->symbol "foldr1")) f0)])
        (scm:lambda (x2)
          (_1 (toUnfoldable12 x2)))))) (scm:cons (scm:string->symbol "foldl1") (scm:lambda (f0)
      (scm:let ([_1 ((rt:record-ref Data.List.Types.foldable1NonEmptyList (scm:string->symbol "foldl1")) f0)])
        (scm:lambda (x2)
          (_1 (toUnfoldable12 x2)))))) (scm:cons (scm:string->symbol "Foldable0") (scm:lambda (_)
      Data.Set.foldableSet))))

  (scm:define filter
    (scm:lambda (dictOrd0)
      (Data.Set.filter dictOrd0)))

  (scm:define eqNonEmptySet
    (scm:lambda (dictEq0)
      (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (v1)
        (scm:lambda (v12)
          (((rt:record-ref ((Data.Map.Internal.eqMap dictEq0) Data.Eq.eqUnit) (scm:string->symbol "eq")) v1) v12)))))))

  (scm:define eq1NonEmptySet
    Data.Set.eq1Set)

  (scm:define difference
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (v2)
          (scm:lambda (v13)
            (scm:let ([_4 (Data.Map.Internal.unsafeDifference compare1 v2 v13)])
              (scm:cond
                [(Data.Map.Internal.Leaf? _4) Data.Maybe.Nothing]
                [scm:else (Data.Maybe.Just _4)])))))))

  (scm:define delete
    (scm:lambda (dictOrd0)
      (scm:lambda (a1)
        (scm:lambda (v2)
          (scm:let ([_3 (((Data.Map.Internal.delete dictOrd0) a1) v2)])
            (scm:cond
              [(Data.Map.Internal.Leaf? _3) Data.Maybe.Nothing]
              [scm:else (Data.Maybe.Just _3)]))))))

  (scm:define cons
    (scm:lambda (dictOrd0)
      (Data.Set.insert dictOrd0))))
