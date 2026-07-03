#!r6rs
#!chezscheme
(library
  (Data.List.NonEmpty lib)
  (export
    appendFoldable
    catMaybes
    concat
    concatMap
    cons
    cons$p
    drop
    dropWhile
    elemIndex
    elemLastIndex
    filter
    filterM
    findIndex
    findLastIndex
    foldM
    fromFoldable
    fromList
    group
    groupAll
    groupAllBy
    groupBy
    head
    identity
    index
    init
    insertAt
    intersect
    intersectBy
    last
    length
    mapMaybe
    modifyAt
    nub
    nubBy
    nubByEq
    nubEq
    partition
    reverse
    singleton
    snoc
    snoc$p
    sort
    sortBy
    span
    tail
    take
    takeWhile
    toList
    toUnfoldable
    uncons
    union
    unionBy
    unsnoc
    unzip
    updateAt
    wrappedOperation
    wrappedOperation2
    zip
    zipWith
    zipWithA)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.List lib) Data.List.)
    (prefix (Data.List.Types lib) Data.List.Types.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.NonEmpty lib) Data.NonEmpty.)
    (prefix (Data.Tuple lib) Data.Tuple.)
    (prefix (Partial lib) Partial.))

  (scm:define identity
    (scm:lambda (x0)
      x0))

  (scm:define zipWith
    (scm:lambda (f0)
      (scm:lambda (v1)
        (scm:lambda (v12)
          (Data.NonEmpty.NonEmpty* ((f0 (Data.NonEmpty.NonEmpty-value0 v1)) (Data.NonEmpty.NonEmpty-value0 v12)) (scm:letrec ([go3 (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:lambda (v26)
                (scm:cond
                  [(scm:null? v4) v26]
                  [(scm:null? v15) v26]
                  [(scm:and (scm:pair? v4) (scm:pair? v15)) (((go3 (scm:cdr v4)) (scm:cdr v15)) (scm:cons ((f0 (scm:car v4)) (scm:car v15)) v26))]
                  [scm:else (rt:fail)]))))])
            (scm:letrec ([go4 (scm:lambda (v5)
              (scm:lambda (v16)
                (scm:cond
                  [(scm:null? v16) v5]
                  [(scm:pair? v16) ((go4 (scm:cons (scm:car v16) v5)) (scm:cdr v16))]
                  [scm:else (rt:fail)])))])
              ((go4 (scm:quote ())) (((go3 (Data.NonEmpty.NonEmpty-value1 v1)) (Data.NonEmpty.NonEmpty-value1 v12)) (scm:quote ()))))))))))

  (scm:define zipWithA
    (scm:lambda (dictApplicative0)
      (scm:let ([sequence111 (((rt:record-ref Data.List.Types.traversable1NonEmptyList (scm:string->symbol "traverse1")) ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined))) Data.List.Types.identity)])
        (scm:lambda (f2)
          (scm:lambda (xs3)
            (scm:lambda (ys4)
              (sequence111 (((zipWith f2) xs3) ys4))))))))

  (scm:define zip
    (zipWith Data.Tuple.Tuple))

  (scm:define wrappedOperation2
    (scm:lambda (name0)
      (scm:lambda (f1)
        (scm:lambda (v2)
          (scm:lambda (v13)
            (scm:let ([v24 ((f1 (scm:cons (Data.NonEmpty.NonEmpty-value0 v2) (Data.NonEmpty.NonEmpty-value1 v2))) (scm:cons (Data.NonEmpty.NonEmpty-value0 v13) (Data.NonEmpty.NonEmpty-value1 v13)))])
              (scm:cond
                [(scm:pair? v24) (Data.NonEmpty.NonEmpty* (scm:car v24) (scm:cdr v24))]
                [(scm:null? v24) (Partial._crashWith (rt:pstring-concat (rt:string->pstring "Impossible: empty list in NonEmptyList ") name0))]
                [scm:else (rt:fail)])))))))

  (scm:define wrappedOperation
    (scm:lambda (name0)
      (scm:lambda (f1)
        (scm:lambda (v2)
          (scm:let ([v13 (f1 (scm:cons (Data.NonEmpty.NonEmpty-value0 v2) (Data.NonEmpty.NonEmpty-value1 v2)))])
            (scm:cond
              [(scm:pair? v13) (Data.NonEmpty.NonEmpty* (scm:car v13) (scm:cdr v13))]
              [(scm:null? v13) (Partial._crashWith (rt:pstring-concat (rt:string->pstring "Impossible: empty list in NonEmptyList ") name0))]
              [scm:else (rt:fail)]))))))

  (scm:define updateAt
    (scm:lambda (i0)
      (scm:lambda (a1)
        (scm:lambda (v2)
          (scm:cond
            [(scm:fx=? i0 0) (Data.Maybe.Just (Data.NonEmpty.NonEmpty* a1 (Data.NonEmpty.NonEmpty-value1 v2)))]
            [scm:else (scm:let ([_3 (((Data.List.updateAt (scm:fx- i0 1)) a1) (Data.NonEmpty.NonEmpty-value1 v2))])
              (scm:cond
                [(Data.Maybe.Just? _3) (Data.Maybe.Just (Data.NonEmpty.NonEmpty* (Data.NonEmpty.NonEmpty-value0 v2) (Data.Maybe.Just-value0 _3)))]
                [scm:else Data.Maybe.Nothing]))])))))

  (scm:define unzip
    (scm:lambda (ts0)
      (Data.Tuple.Tuple* (Data.NonEmpty.NonEmpty* (Data.Tuple.Tuple-value0 (Data.NonEmpty.NonEmpty-value0 ts0)) ((Data.List.Types.listMap Data.Tuple.fst) (Data.NonEmpty.NonEmpty-value1 ts0))) (Data.NonEmpty.NonEmpty* (Data.Tuple.Tuple-value1 (Data.NonEmpty.NonEmpty-value0 ts0)) ((Data.List.Types.listMap Data.Tuple.snd) (Data.NonEmpty.NonEmpty-value1 ts0))))))

  (scm:define unsnoc
    (scm:lambda (v0)
      (scm:let ([v11 (Data.List.unsnoc (Data.NonEmpty.NonEmpty-value1 v0))])
        (scm:cond
          [(Data.Maybe.Nothing? v11) (scm:list (scm:cons (scm:string->symbol "init") (scm:quote ())) (scm:cons (scm:string->symbol "last") (Data.NonEmpty.NonEmpty-value0 v0)))]
          [(Data.Maybe.Just? v11) (scm:list (scm:cons (scm:string->symbol "init") (scm:cons (Data.NonEmpty.NonEmpty-value0 v0) (rt:record-ref (Data.Maybe.Just-value0 v11) (scm:string->symbol "init")))) (scm:cons (scm:string->symbol "last") (rt:record-ref (Data.Maybe.Just-value0 v11) (scm:string->symbol "last"))))]
          [scm:else (rt:fail)]))))

  (scm:define unionBy
    (scm:lambda (x0)
      ((wrappedOperation2 (rt:string->pstring "unionBy")) (Data.List.unionBy x0))))

  (scm:define union
    (scm:lambda (dictEq0)
      ((wrappedOperation2 (rt:string->pstring "union")) (Data.List.union dictEq0))))

  (scm:define uncons
    (scm:lambda (v0)
      (scm:list (scm:cons (scm:string->symbol "head") (Data.NonEmpty.NonEmpty-value0 v0)) (scm:cons (scm:string->symbol "tail") (Data.NonEmpty.NonEmpty-value1 v0)))))

  (scm:define toList
    (scm:lambda (v0)
      (scm:cons (Data.NonEmpty.NonEmpty-value0 v0) (Data.NonEmpty.NonEmpty-value1 v0))))

  (scm:define toUnfoldable
    (scm:lambda (dictUnfoldable0)
      (scm:let ([_1 ((rt:record-ref dictUnfoldable0 (scm:string->symbol "unfoldr")) (scm:lambda (xs1)
        (scm:cond
          [(scm:null? xs1) Data.Maybe.Nothing]
          [(scm:pair? xs1) (Data.Maybe.Just (Data.Tuple.Tuple* (scm:car xs1) (scm:cdr xs1)))]
          [scm:else (rt:fail)])))])
        (scm:lambda (x2)
          (_1 (scm:cons (Data.NonEmpty.NonEmpty-value0 x2) (Data.NonEmpty.NonEmpty-value1 x2)))))))

  (scm:define tail
    (scm:lambda (v0)
      (Data.NonEmpty.NonEmpty-value1 v0)))

  (scm:define sortBy
    (scm:lambda (x0)
      ((wrappedOperation (rt:string->pstring "sortBy")) (Data.List.sortBy x0))))

  (scm:define sort
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (xs2)
          (((wrappedOperation (rt:string->pstring "sortBy")) (Data.List.sortBy compare1)) xs2)))))

  (scm:define snoc
    (scm:lambda (v0)
      (scm:lambda (y1)
        (Data.NonEmpty.NonEmpty* (Data.NonEmpty.NonEmpty-value0 v0) ((((rt:record-ref Data.List.Types.foldableList (scm:string->symbol "foldr")) rt:list-cons) (scm:cons y1 (scm:quote ()))) (Data.NonEmpty.NonEmpty-value1 v0))))))

  (scm:define singleton
    (scm:lambda (x0)
      (Data.NonEmpty.NonEmpty* x0 (scm:quote ()))))

  (scm:define snoc$p
    (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:cond
          [(scm:pair? v0) (Data.NonEmpty.NonEmpty* (scm:car v0) ((((rt:record-ref Data.List.Types.foldableList (scm:string->symbol "foldr")) rt:list-cons) (scm:cons v11 (scm:quote ()))) (scm:cdr v0)))]
          [(scm:null? v0) (Data.NonEmpty.NonEmpty* v11 (scm:quote ()))]
          [scm:else (rt:fail)]))))

  (scm:define reverse
    ((wrappedOperation (rt:string->pstring "reverse")) Data.List.reverse))

  (scm:define nubEq
    (scm:lambda (dictEq0)
      ((wrappedOperation (rt:string->pstring "nubEq")) (Data.List.nubEq dictEq0))))

  (scm:define nubByEq
    (scm:lambda (x0)
      ((wrappedOperation (rt:string->pstring "nubByEq")) (Data.List.nubByEq x0))))

  (scm:define nubBy
    (scm:lambda (x0)
      ((wrappedOperation (rt:string->pstring "nubBy")) (Data.List.nubBy x0))))

  (scm:define nub
    (scm:lambda (dictOrd0)
      ((wrappedOperation (rt:string->pstring "nub")) (Data.List.nubBy (rt:record-ref dictOrd0 (scm:string->symbol "compare"))))))

  (scm:define modifyAt
    (scm:lambda (i0)
      (scm:lambda (f1)
        (scm:lambda (v2)
          (scm:cond
            [(scm:fx=? i0 0) (Data.Maybe.Just (Data.NonEmpty.NonEmpty* (f1 (Data.NonEmpty.NonEmpty-value0 v2)) (Data.NonEmpty.NonEmpty-value1 v2)))]
            [scm:else (scm:let ([_3 (((Data.List.alterAt (scm:fx- i0 1)) (scm:lambda (x3)
              (Data.Maybe.Just (f1 x3)))) (Data.NonEmpty.NonEmpty-value1 v2))])
              (scm:cond
                [(Data.Maybe.Just? _3) (Data.Maybe.Just (Data.NonEmpty.NonEmpty* (Data.NonEmpty.NonEmpty-value0 v2) (Data.Maybe.Just-value0 _3)))]
                [scm:else Data.Maybe.Nothing]))])))))

  (scm:define mapMaybe
    (scm:lambda (x0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:lambda (v13)
          (scm:cond
            [(scm:null? v13) (scm:letrec ([go4 (scm:lambda (v5)
              (scm:lambda (v16)
                (scm:cond
                  [(scm:null? v16) v5]
                  [(scm:pair? v16) ((go4 (scm:cons (scm:car v16) v5)) (scm:cdr v16))]
                  [scm:else (rt:fail)])))])
              ((go4 (scm:quote ())) v2))]
            [(scm:pair? v13) (scm:let ([v24 (x0 (scm:car v13))])
              (scm:cond
                [(Data.Maybe.Nothing? v24) ((go1 v2) (scm:cdr v13))]
                [(Data.Maybe.Just? v24) ((go1 (scm:cons (Data.Maybe.Just-value0 v24) v2)) (scm:cdr v13))]
                [scm:else (rt:fail)]))]
            [scm:else (rt:fail)])))])
        (scm:let ([_2 (go1 (scm:quote ()))])
          (scm:lambda (v3)
            (_2 (scm:cons (Data.NonEmpty.NonEmpty-value0 v3) (Data.NonEmpty.NonEmpty-value1 v3))))))))

  (scm:define partition
    (scm:lambda (x0)
      (scm:lambda (v1)
        ((Data.List.partition x0) (scm:cons (Data.NonEmpty.NonEmpty-value0 v1) (Data.NonEmpty.NonEmpty-value1 v1))))))

  (scm:define span
    (scm:lambda (x0)
      (scm:lambda (v1)
        ((Data.List.span x0) (scm:cons (Data.NonEmpty.NonEmpty-value0 v1) (Data.NonEmpty.NonEmpty-value1 v1))))))

  (scm:define take
    (scm:lambda (x0)
      (scm:let ([_1 (Data.List.take x0)])
        (scm:lambda (v2)
          (_1 (scm:cons (Data.NonEmpty.NonEmpty-value0 v2) (Data.NonEmpty.NonEmpty-value1 v2)))))))

  (scm:define takeWhile
    (scm:lambda (x0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:lambda (v13)
          (scm:cond
            [(scm:and (scm:pair? v13) (x0 (scm:car v13))) ((go1 (scm:cons (scm:car v13) v2)) (scm:cdr v13))]
            [scm:else (scm:letrec ([go4 (scm:lambda (v5)
              (scm:lambda (v16)
                (scm:cond
                  [(scm:null? v16) v5]
                  [(scm:pair? v16) ((go4 (scm:cons (scm:car v16) v5)) (scm:cdr v16))]
                  [scm:else (rt:fail)])))])
              ((go4 (scm:quote ())) v2))])))])
        (scm:let ([_2 (go1 (scm:quote ()))])
          (scm:lambda (v3)
            (_2 (scm:cons (Data.NonEmpty.NonEmpty-value0 v3) (Data.NonEmpty.NonEmpty-value1 v3))))))))

  (scm:define length
    (scm:lambda (v0)
      (scm:letrec ([go1 (scm:lambda (b2)
        (scm:lambda (v3)
          (scm:cond
            [(scm:null? v3) b2]
            [(scm:pair? v3) ((go1 (scm:fx+ b2 1)) (scm:cdr v3))]
            [scm:else (rt:fail)])))])
        (scm:fx+ 1 ((go1 0) (Data.NonEmpty.NonEmpty-value1 v0))))))

  (scm:define last
    (scm:lambda (v0)
      (scm:cond
        [(scm:pair? (Data.NonEmpty.NonEmpty-value1 v0)) (scm:cond
          [(scm:null? (scm:cdr (Data.NonEmpty.NonEmpty-value1 v0))) (scm:car (Data.NonEmpty.NonEmpty-value1 v0))]
          [(Data.Maybe.Nothing? (Data.List.last (scm:cdr (Data.NonEmpty.NonEmpty-value1 v0)))) (Data.NonEmpty.NonEmpty-value0 v0)]
          [(Data.Maybe.Just? (Data.List.last (scm:cdr (Data.NonEmpty.NonEmpty-value1 v0)))) (Data.Maybe.Just-value0 (Data.List.last (scm:cdr (Data.NonEmpty.NonEmpty-value1 v0))))]
          [scm:else (rt:fail)])]
        [scm:else (Data.NonEmpty.NonEmpty-value0 v0)])))

  (scm:define intersectBy
    (scm:lambda (x0)
      ((wrappedOperation2 (rt:string->pstring "intersectBy")) (Data.List.intersectBy x0))))

  (scm:define intersect
    (scm:lambda (dictEq0)
      ((wrappedOperation2 (rt:string->pstring "intersect")) (Data.List.intersect dictEq0))))

  (scm:define insertAt
    (scm:lambda (i0)
      (scm:lambda (a1)
        (scm:lambda (v2)
          (scm:cond
            [(scm:fx=? i0 0) (Data.Maybe.Just (Data.NonEmpty.NonEmpty* a1 (scm:cons (Data.NonEmpty.NonEmpty-value0 v2) (Data.NonEmpty.NonEmpty-value1 v2))))]
            [scm:else (scm:let ([_3 (((Data.List.insertAt (scm:fx- i0 1)) a1) (Data.NonEmpty.NonEmpty-value1 v2))])
              (scm:cond
                [(Data.Maybe.Just? _3) (Data.Maybe.Just (Data.NonEmpty.NonEmpty* (Data.NonEmpty.NonEmpty-value0 v2) (Data.Maybe.Just-value0 _3)))]
                [scm:else Data.Maybe.Nothing]))])))))

  (scm:define init
    (scm:lambda (v0)
      (scm:let ([_1 (Data.List.unsnoc (Data.NonEmpty.NonEmpty-value1 v0))])
        (scm:cond
          [(Data.Maybe.Just? _1) (scm:cons (Data.NonEmpty.NonEmpty-value0 v0) (rt:record-ref (Data.Maybe.Just-value0 _1) (scm:string->symbol "init")))]
          [scm:else (scm:quote ())]))))

  (scm:define index
    (scm:lambda (v0)
      (scm:lambda (i1)
        (scm:cond
          [(scm:fx=? i1 0) (Data.Maybe.Just (Data.NonEmpty.NonEmpty-value0 v0))]
          [scm:else ((Data.List.index (Data.NonEmpty.NonEmpty-value1 v0)) (scm:fx- i1 1))]))))

  (scm:define head
    (scm:lambda (v0)
      (Data.NonEmpty.NonEmpty-value0 v0)))

  (scm:define groupBy
    (scm:lambda (x0)
      ((wrappedOperation (rt:string->pstring "groupBy")) (Data.List.groupBy x0))))

  (scm:define groupAllBy
    (scm:lambda (x0)
      ((wrappedOperation (rt:string->pstring "groupAllBy")) (Data.List.groupAllBy x0))))

  (scm:define groupAll
    (scm:lambda (dictOrd0)
      ((wrappedOperation (rt:string->pstring "groupAll")) (Data.List.groupAll dictOrd0))))

  (scm:define group
    (scm:lambda (dictEq0)
      ((wrappedOperation (rt:string->pstring "group")) (Data.List.group dictEq0))))

  (scm:define fromList
    (scm:lambda (v0)
      (scm:cond
        [(scm:null? v0) Data.Maybe.Nothing]
        [(scm:pair? v0) (Data.Maybe.Just (Data.NonEmpty.NonEmpty* (scm:car v0) (scm:cdr v0)))]
        [scm:else (rt:fail)])))

  (scm:define fromFoldable
    (scm:lambda (dictFoldable0)
      (scm:let ([_1 (((rt:record-ref dictFoldable0 (scm:string->symbol "foldr")) rt:list-cons) (scm:quote ()))])
        (scm:lambda (x2)
          (scm:let ([_3 (_1 x2)])
            (scm:cond
              [(scm:null? _3) Data.Maybe.Nothing]
              [(scm:pair? _3) (Data.Maybe.Just (Data.NonEmpty.NonEmpty* (scm:car _3) (scm:cdr _3)))]
              [scm:else (rt:fail)]))))))

  (scm:define foldM
    (scm:lambda (dictMonad0)
      (scm:lambda (f1)
        (scm:lambda (b2)
          (scm:lambda (v3)
            (scm:let ([_4 (Data.NonEmpty.NonEmpty-value1 v3)])
              (((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((f1 b2) (Data.NonEmpty.NonEmpty-value0 v3))) (scm:lambda (b$p5)
                ((((Data.List.foldM dictMonad0) f1) b$p5) _4)))))))))

  (scm:define findLastIndex
    (scm:lambda (f0)
      (scm:lambda (v1)
        (scm:let ([v12 ((Data.List.findLastIndex f0) (Data.NonEmpty.NonEmpty-value1 v1))])
          (scm:cond
            [(Data.Maybe.Just? v12) (Data.Maybe.Just (scm:fx+ (Data.Maybe.Just-value0 v12) 1))]
            [(Data.Maybe.Nothing? v12) (scm:cond
              [(f0 (Data.NonEmpty.NonEmpty-value0 v1)) (Data.Maybe.Just 0)]
              [scm:else Data.Maybe.Nothing])]
            [scm:else (rt:fail)])))))

  (scm:define findIndex
    (scm:lambda (f0)
      (scm:lambda (v1)
        (scm:cond
          [(f0 (Data.NonEmpty.NonEmpty-value0 v1)) (Data.Maybe.Just 0)]
          [scm:else (scm:letrec ([go2 (scm:lambda (v3)
            (scm:lambda (v14)
              (scm:cond
                [(scm:pair? v14) (scm:cond
                  [(f0 (scm:car v14)) (Data.Maybe.Just v3)]
                  [scm:else ((go2 (scm:fx+ v3 1)) (scm:cdr v14))])]
                [(scm:null? v14) Data.Maybe.Nothing]
                [scm:else (rt:fail)])))])
            (scm:let ([_3 ((go2 0) (Data.NonEmpty.NonEmpty-value1 v1))])
              (scm:cond
                [(Data.Maybe.Just? _3) (Data.Maybe.Just (scm:fx+ (Data.Maybe.Just-value0 _3) 1))]
                [scm:else Data.Maybe.Nothing])))]))))

  (scm:define filterM
    (scm:lambda (dictMonad0)
      (scm:let ([_1 (Data.List.filterM dictMonad0)])
        (scm:lambda (x2)
          (scm:let ([_3 (_1 x2)])
            (scm:lambda (v4)
              (_3 (scm:cons (Data.NonEmpty.NonEmpty-value0 v4) (Data.NonEmpty.NonEmpty-value1 v4)))))))))

  (scm:define filter
    (scm:lambda (x0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:lambda (v13)
          (scm:cond
            [(scm:null? v13) (scm:letrec ([go4 (scm:lambda (v5)
              (scm:lambda (v16)
                (scm:cond
                  [(scm:null? v16) v5]
                  [(scm:pair? v16) ((go4 (scm:cons (scm:car v16) v5)) (scm:cdr v16))]
                  [scm:else (rt:fail)])))])
              ((go4 (scm:quote ())) v2))]
            [(scm:pair? v13) (scm:cond
              [(x0 (scm:car v13)) ((go1 (scm:cons (scm:car v13) v2)) (scm:cdr v13))]
              [scm:else ((go1 v2) (scm:cdr v13))])]
            [scm:else (rt:fail)])))])
        (scm:let ([_2 (go1 (scm:quote ()))])
          (scm:lambda (v3)
            (_2 (scm:cons (Data.NonEmpty.NonEmpty-value0 v3) (Data.NonEmpty.NonEmpty-value1 v3))))))))

  (scm:define elemLastIndex
    (scm:lambda (dictEq0)
      (scm:lambda (x1)
        (findLastIndex (scm:lambda (v2)
          (((rt:record-ref dictEq0 (scm:string->symbol "eq")) v2) x1))))))

  (scm:define elemIndex
    (scm:lambda (dictEq0)
      (scm:lambda (x1)
        (scm:lambda (v2)
          (scm:cond
            [(((rt:record-ref dictEq0 (scm:string->symbol "eq")) (Data.NonEmpty.NonEmpty-value0 v2)) x1) (Data.Maybe.Just 0)]
            [scm:else (scm:letrec ([go3 (scm:lambda (v4)
              (scm:lambda (v15)
                (scm:cond
                  [(scm:pair? v15) (scm:cond
                    [(((rt:record-ref dictEq0 (scm:string->symbol "eq")) (scm:car v15)) x1) (Data.Maybe.Just v4)]
                    [scm:else ((go3 (scm:fx+ v4 1)) (scm:cdr v15))])]
                  [(scm:null? v15) Data.Maybe.Nothing]
                  [scm:else (rt:fail)])))])
              (scm:let ([_4 ((go3 0) (Data.NonEmpty.NonEmpty-value1 v2))])
                (scm:cond
                  [(Data.Maybe.Just? _4) (Data.Maybe.Just (scm:fx+ (Data.Maybe.Just-value0 _4) 1))]
                  [scm:else Data.Maybe.Nothing])))])))))

  (scm:define dropWhile
    (scm:lambda (x0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:cond
          [(scm:and (scm:pair? v2) (x0 (scm:car v2))) (go1 (scm:cdr v2))]
          [scm:else v2]))])
        (scm:lambda (v2)
          (go1 (scm:cons (Data.NonEmpty.NonEmpty-value0 v2) (Data.NonEmpty.NonEmpty-value1 v2)))))))

  (scm:define drop
    (scm:lambda (x0)
      (scm:lambda (v1)
        ((Data.List.drop x0) (scm:cons (Data.NonEmpty.NonEmpty-value0 v1) (Data.NonEmpty.NonEmpty-value1 v1))))))

  (scm:define cons$p
    (scm:lambda (x0)
      (scm:lambda (xs1)
        (Data.NonEmpty.NonEmpty* x0 xs1))))

  (scm:define cons
    (scm:lambda (y0)
      (scm:lambda (v1)
        (Data.NonEmpty.NonEmpty* y0 (scm:cons (Data.NonEmpty.NonEmpty-value0 v1) (Data.NonEmpty.NonEmpty-value1 v1))))))

  (scm:define concatMap
    (scm:lambda (b0)
      (scm:lambda (a1)
        (((rt:record-ref Data.List.Types.bindNonEmptyList (scm:string->symbol "bind")) a1) b0))))

  (scm:define concat
    (scm:lambda (v0)
      (((rt:record-ref Data.List.Types.bindNonEmptyList (scm:string->symbol "bind")) v0) identity)))

  (scm:define catMaybes
    (scm:lambda (v0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:lambda (v13)
          (scm:cond
            [(scm:null? v13) (scm:letrec ([go4 (scm:lambda (v5)
              (scm:lambda (v16)
                (scm:cond
                  [(scm:null? v16) v5]
                  [(scm:pair? v16) ((go4 (scm:cons (scm:car v16) v5)) (scm:cdr v16))]
                  [scm:else (rt:fail)])))])
              ((go4 (scm:quote ())) v2))]
            [(scm:pair? v13) (scm:cond
              [(Data.Maybe.Nothing? (scm:car v13)) ((go1 v2) (scm:cdr v13))]
              [(Data.Maybe.Just? (scm:car v13)) ((go1 (scm:cons (Data.Maybe.Just-value0 (scm:car v13)) v2)) (scm:cdr v13))]
              [scm:else (rt:fail)])]
            [scm:else (rt:fail)])))])
        ((go1 (scm:quote ())) (scm:cons (Data.NonEmpty.NonEmpty-value0 v0) (Data.NonEmpty.NonEmpty-value1 v0))))))

  (scm:define appendFoldable
    (scm:lambda (dictFoldable0)
      (scm:let ([fromFoldable11 (((rt:record-ref dictFoldable0 (scm:string->symbol "foldr")) rt:list-cons) (scm:quote ()))])
        (scm:lambda (v2)
          (scm:lambda (ys3)
            (Data.NonEmpty.NonEmpty* (Data.NonEmpty.NonEmpty-value0 v2) ((((rt:record-ref Data.List.Types.foldableList (scm:string->symbol "foldr")) rt:list-cons) (fromFoldable11 ys3)) (Data.NonEmpty.NonEmpty-value1 v2)))))))))
