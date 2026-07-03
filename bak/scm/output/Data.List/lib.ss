#!r6rs
#!chezscheme
(library
  (Data.List lib)
  (export
    Pattern
    alterAt
    any
    catMaybes
    concat
    concatMap
    delete
    deleteAt
    deleteBy
    difference
    drop
    dropEnd
    dropWhile
    elemIndex
    elemLastIndex
    eqPattern
    filter
    filterM
    findIndex
    findLastIndex
    foldM
    fromFoldable
    group
    groupAll
    groupAllBy
    groupBy
    head
    identity
    index
    init
    insert
    insertAt
    insertBy
    intersect
    intersectBy
    last
    length
    many
    manyRec
    mapMaybe
    modifyAt
    newtypePattern
    nub
    nubBy
    nubByEq
    nubEq
    null
    ordPattern
    partition
    range
    reverse
    showPattern
    singleton
    slice
    snoc
    some
    someRec
    sort
    sortBy
    span
    stripPrefix
    tail
    take
    takeEnd
    takeWhile
    toUnfoldable
    transpose
    uncons
    union
    unionBy
    unsnoc
    unzip
    updateAt
    zip
    zipWith
    zipWithA)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.Rec.Class lib) Control.Monad.Rec.Class.)
    (prefix (Data.List.Internal lib) Data.List.Internal.)
    (prefix (Data.List.Types lib) Data.List.Types.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.NonEmpty lib) Data.NonEmpty.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (prefix (Data.Tuple lib) Data.Tuple.)
    (prefix (Data.Unit lib) Data.Unit.))

  (scm:define any
    ((rt:record-ref Data.List.Types.foldableList (scm:string->symbol "foldMap")) (scm:let ([semigroupDisj10 (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:or v0 v11)))))])
      (scm:list (scm:cons (scm:string->symbol "mempty") #f) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
        semigroupDisj10))))))

  (scm:define identity
    (scm:lambda (x0)
      x0))

  (scm:define Pattern
    (scm:lambda (x0)
      x0))

  (scm:define updateAt
    (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:lambda (v22)
          (scm:cond
            [(scm:pair? v22) (scm:cond
              [(scm:fx=? v0 0) (Data.Maybe.Just (scm:cons v11 (scm:cdr v22)))]
              [scm:else (scm:let ([_3 (((updateAt (scm:fx- v0 1)) v11) (scm:cdr v22))])
                (scm:cond
                  [(Data.Maybe.Just? _3) (Data.Maybe.Just (scm:cons (scm:car v22) (Data.Maybe.Just-value0 _3)))]
                  [scm:else Data.Maybe.Nothing]))])]
            [scm:else Data.Maybe.Nothing])))))

  (scm:define unzip
    (((rt:record-ref Data.List.Types.foldableList (scm:string->symbol "foldr")) (scm:lambda (v0)
      (scm:let*
        ([_1 (Data.Tuple.Tuple-value0 v0)]
         [_2 (Data.Tuple.Tuple-value1 v0)])
          (scm:lambda (v13)
            (Data.Tuple.Tuple* (scm:cons _1 (Data.Tuple.Tuple-value0 v13)) (scm:cons _2 (Data.Tuple.Tuple-value1 v13))))))) (Data.Tuple.Tuple* (scm:quote ()) (scm:quote ()))))

  (scm:define uncons
    (scm:lambda (v0)
      (scm:cond
        [(scm:null? v0) Data.Maybe.Nothing]
        [(scm:pair? v0) (Data.Maybe.Just (scm:list (scm:cons (scm:string->symbol "head") (scm:car v0)) (scm:cons (scm:string->symbol "tail") (scm:cdr v0))))]
        [scm:else (rt:fail)])))

  (scm:define toUnfoldable
    (scm:lambda (dictUnfoldable0)
      ((rt:record-ref dictUnfoldable0 (scm:string->symbol "unfoldr")) (scm:lambda (xs1)
        (scm:cond
          [(scm:null? xs1) Data.Maybe.Nothing]
          [(scm:pair? xs1) (Data.Maybe.Just (Data.Tuple.Tuple* (scm:car xs1) (scm:cdr xs1)))]
          [scm:else (rt:fail)])))))

  (scm:define tail
    (scm:lambda (v0)
      (scm:cond
        [(scm:null? v0) Data.Maybe.Nothing]
        [(scm:pair? v0) (Data.Maybe.Just (scm:cdr v0))]
        [scm:else (rt:fail)])))

  (scm:define stripPrefix
    (scm:lambda (dictEq0)
      (scm:lambda (v1)
        (scm:lambda (s2)
          (scm:let*
            ([_3 (scm:lambda (prefix3 input4)
              (scm:cond
                [(scm:pair? input4) (scm:cond
                  [(scm:pair? prefix3) (scm:cond
                    [(((rt:record-ref dictEq0 (scm:string->symbol "eq")) (scm:car prefix3)) (scm:car input4)) (Data.Maybe.Just (Control.Monad.Rec.Class.Loop (scm:list (scm:cons (scm:string->symbol "a") (scm:cdr prefix3)) (scm:cons (scm:string->symbol "b") (scm:cdr input4)))))]
                    [scm:else Data.Maybe.Nothing])]
                  [(scm:null? prefix3) (Data.Maybe.Just (Control.Monad.Rec.Class.Done input4))]
                  [scm:else Data.Maybe.Nothing])]
                [(scm:null? prefix3) (Data.Maybe.Just (Control.Monad.Rec.Class.Done input4))]
                [scm:else Data.Maybe.Nothing]))]
             [_4 (scm:lambda (v4)
              (scm:cond
                [(Data.Maybe.Nothing? v4) (Control.Monad.Rec.Class.Done Data.Maybe.Nothing)]
                [(Data.Maybe.Just? v4) (scm:cond
                  [(Control.Monad.Rec.Class.Loop? (Data.Maybe.Just-value0 v4)) (Control.Monad.Rec.Class.Loop (_3 (rt:record-ref (Control.Monad.Rec.Class.Loop-value0 (Data.Maybe.Just-value0 v4)) (scm:string->symbol "a")) (rt:record-ref (Control.Monad.Rec.Class.Loop-value0 (Data.Maybe.Just-value0 v4)) (scm:string->symbol "b"))))]
                  [(Control.Monad.Rec.Class.Done? (Data.Maybe.Just-value0 v4)) (Control.Monad.Rec.Class.Done (Data.Maybe.Just (Control.Monad.Rec.Class.Done-value0 (Data.Maybe.Just-value0 v4))))]
                  [scm:else (rt:fail)])]
                [scm:else (rt:fail)]))])
              (scm:letrec ([go5 (scm:lambda (v6)
                (scm:cond
                  [(Control.Monad.Rec.Class.Loop? v6) (go5 (_4 (Control.Monad.Rec.Class.Loop-value0 v6)))]
                  [(Control.Monad.Rec.Class.Done? v6) (Control.Monad.Rec.Class.Done-value0 v6)]
                  [scm:else (rt:fail)]))])
                (go5 (_4 (_3 v1 s2)))))))))

  (scm:define span
    (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:cond
          [(scm:and (scm:pair? v11) (v0 (scm:car v11))) (scm:let ([v22 ((span v0) (scm:cdr v11))])
            (scm:list (scm:cons (scm:string->symbol "init") (scm:cons (scm:car v11) (rt:record-ref v22 (scm:string->symbol "init")))) (scm:cons (scm:string->symbol "rest") (rt:record-ref v22 (scm:string->symbol "rest")))))]
          [scm:else (scm:list (scm:cons (scm:string->symbol "init") (scm:quote ())) (scm:cons (scm:string->symbol "rest") v11))]))))

  (scm:define snoc
    (scm:lambda (xs0)
      (scm:lambda (x1)
        ((((rt:record-ref Data.List.Types.foldableList (scm:string->symbol "foldr")) rt:list-cons) (scm:cons x1 (scm:quote ()))) xs0))))

  (scm:define singleton
    (scm:lambda (a0)
      (scm:cons a0 (scm:quote ()))))

  (scm:define sortBy
    (scm:lambda (cmp0)
      (scm:letrec ([merge1 (scm:lambda (v2)
        (scm:lambda (v13)
          (scm:cond
            [(scm:pair? v2) (scm:cond
              [(scm:pair? v13) (scm:cond
                [(Data.Ordering.GT? ((cmp0 (scm:car v2)) (scm:car v13))) (scm:cons (scm:car v13) ((merge1 v2) (scm:cdr v13)))]
                [scm:else (scm:cons (scm:car v2) ((merge1 (scm:cdr v2)) v13))])]
              [(scm:null? v13) v2]
              [scm:else (rt:fail)])]
            [(scm:null? v2) v13]
            [(scm:null? v13) v2]
            [scm:else (rt:fail)])))])
        (scm:letrec ([mergePairs2 (scm:lambda (v3)
          (scm:cond
            [(scm:and (scm:pair? v3) (scm:pair? (scm:cdr v3))) (scm:cons ((merge1 (scm:car v3)) (scm:car (scm:cdr v3))) (mergePairs2 (scm:cdr (scm:cdr v3))))]
            [scm:else v3]))])
          (scm:letrec ([mergeAll3 (scm:lambda (v4)
            (scm:cond
              [(scm:and (scm:pair? v4) (scm:null? (scm:cdr v4))) (scm:car v4)]
              [scm:else (mergeAll3 (mergePairs2 v4))]))])
            (scm:letrec*
              ([sequences4 (scm:lambda (v5)
                (scm:cond
                  [(scm:and (scm:pair? v5) (scm:pair? (scm:cdr v5))) (scm:cond
                    [(Data.Ordering.GT? ((cmp0 (scm:car v5)) (scm:car (scm:cdr v5)))) (((descending4 (scm:car (scm:cdr v5))) (scm:cons (scm:car v5) (scm:quote ()))) (scm:cdr (scm:cdr v5)))]
                    [scm:else (scm:let ([_6 (scm:car v5)])
                      (((ascending4 (scm:car (scm:cdr v5))) (scm:lambda (v17)
                        (scm:cons _6 v17))) (scm:cdr (scm:cdr v5))))])]
                  [scm:else (scm:cons v5 (scm:quote ()))]))]
               [descending4 (scm:lambda (v5)
                (scm:lambda (v16)
                  (scm:lambda (v27)
                    (scm:cond
                      [(scm:and (scm:pair? v27) (Data.Ordering.GT? ((cmp0 v5) (scm:car v27)))) (((descending4 (scm:car v27)) (scm:cons v5 v16)) (scm:cdr v27))]
                      [scm:else (scm:cons (scm:cons v5 v16) (sequences4 v27))]))))]
               [ascending4 (scm:lambda (v5)
                (scm:lambda (v16)
                  (scm:lambda (v27)
                    (scm:cond
                      [(scm:and (scm:pair? v27) (scm:let ([_8 ((cmp0 v5) (scm:car v27))])
                        (scm:or (Data.Ordering.LT? _8) (scm:not (Data.Ordering.GT? _8))))) (((ascending4 (scm:car v27)) (scm:lambda (ys8)
                        (v16 (scm:cons v5 ys8)))) (scm:cdr v27))]
                      [scm:else (scm:cons (v16 (scm:cons v5 (scm:quote ()))) (sequences4 v27))]))))])
                (scm:lambda (x5)
                  (mergeAll3 (sequences4 x5)))))))))

  (scm:define sort
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (xs2)
          ((sortBy compare1) xs2)))))

  (scm:define showPattern
    (scm:lambda (dictShow0)
      (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v1)
        (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Pattern ") ((rt:record-ref (Data.List.Types.showList dictShow0) (scm:string->symbol "show")) v1)) (rt:string->pstring ")")))))))

  (scm:define reverse
    (scm:letrec ([go0 (scm:lambda (v1)
      (scm:lambda (v12)
        (scm:cond
          [(scm:null? v12) v1]
          [(scm:pair? v12) ((go0 (scm:cons (scm:car v12) v1)) (scm:cdr v12))]
          [scm:else (rt:fail)])))])
      (go0 (scm:quote ()))))

  (scm:define take
    (scm:letrec ([go0 (scm:lambda (v1)
      (scm:lambda (v12)
        (scm:lambda (v23)
          (scm:cond
            [(scm:fx<? v12 1) (scm:letrec ([go4 (scm:lambda (v5)
              (scm:lambda (v16)
                (scm:cond
                  [(scm:null? v16) v5]
                  [(scm:pair? v16) ((go4 (scm:cons (scm:car v16) v5)) (scm:cdr v16))]
                  [scm:else (rt:fail)])))])
              ((go4 (scm:quote ())) v1))]
            [(scm:null? v23) (scm:letrec ([go4 (scm:lambda (v5)
              (scm:lambda (v16)
                (scm:cond
                  [(scm:null? v16) v5]
                  [(scm:pair? v16) ((go4 (scm:cons (scm:car v16) v5)) (scm:cdr v16))]
                  [scm:else (rt:fail)])))])
              ((go4 (scm:quote ())) v1))]
            [(scm:pair? v23) (((go0 (scm:cons (scm:car v23) v1)) (scm:fx- v12 1)) (scm:cdr v23))]
            [scm:else (rt:fail)]))))])
      (go0 (scm:quote ()))))

  (scm:define takeWhile
    (scm:lambda (p0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:lambda (v13)
          (scm:cond
            [(scm:and (scm:pair? v13) (p0 (scm:car v13))) ((go1 (scm:cons (scm:car v13) v2)) (scm:cdr v13))]
            [scm:else (scm:letrec ([go4 (scm:lambda (v5)
              (scm:lambda (v16)
                (scm:cond
                  [(scm:null? v16) v5]
                  [(scm:pair? v16) ((go4 (scm:cons (scm:car v16) v5)) (scm:cdr v16))]
                  [scm:else (rt:fail)])))])
              ((go4 (scm:quote ())) v2))])))])
        (go1 (scm:quote ())))))

  (scm:define unsnoc
    (scm:lambda (lst0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:lambda (v13)
          (scm:cond
            [(scm:null? v2) Data.Maybe.Nothing]
            [(scm:pair? v2) (scm:cond
              [(scm:null? (scm:cdr v2)) (Data.Maybe.Just (scm:list (scm:cons (scm:string->symbol "revInit") v13) (scm:cons (scm:string->symbol "last") (scm:car v2))))]
              [scm:else ((go1 (scm:cdr v2)) (scm:cons (scm:car v2) v13))])]
            [scm:else (rt:fail)])))])
        (scm:let ([_2 ((go1 lst0) (scm:quote ()))])
          (scm:cond
            [(Data.Maybe.Just? _2) (Data.Maybe.Just (scm:list (scm:cons (scm:string->symbol "init") (scm:letrec ([go3 (scm:lambda (v4)
              (scm:lambda (v15)
                (scm:cond
                  [(scm:null? v15) v4]
                  [(scm:pair? v15) ((go3 (scm:cons (scm:car v15) v4)) (scm:cdr v15))]
                  [scm:else (rt:fail)])))])
              ((go3 (scm:quote ())) (rt:record-ref (Data.Maybe.Just-value0 _2) (scm:string->symbol "revInit"))))) (scm:cons (scm:string->symbol "last") (rt:record-ref (Data.Maybe.Just-value0 _2) (scm:string->symbol "last")))))]
            [scm:else Data.Maybe.Nothing])))))

  (scm:define zipWith
    (scm:lambda (f0)
      (scm:lambda (xs1)
        (scm:lambda (ys2)
          (scm:letrec ([go3 (scm:lambda (v4)
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
              ((go4 (scm:quote ())) (((go3 xs1) ys2) (scm:quote ())))))))))

  (scm:define zip
    (scm:lambda (xs0)
      (scm:lambda (ys1)
        (scm:letrec ([go2 (scm:lambda (v3)
          (scm:lambda (v14)
            (scm:lambda (v25)
              (scm:cond
                [(scm:null? v3) v25]
                [(scm:null? v14) v25]
                [(scm:and (scm:pair? v3) (scm:pair? v14)) (((go2 (scm:cdr v3)) (scm:cdr v14)) (scm:cons (Data.Tuple.Tuple* (scm:car v3) (scm:car v14)) v25))]
                [scm:else (rt:fail)]))))])
          (scm:letrec ([go3 (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:cond
                [(scm:null? v15) v4]
                [(scm:pair? v15) ((go3 (scm:cons (scm:car v15) v4)) (scm:cdr v15))]
                [scm:else (rt:fail)])))])
            ((go3 (scm:quote ())) (((go2 xs0) ys1) (scm:quote ()))))))))

  (scm:define zipWithA
    (scm:lambda (dictApplicative0)
      (scm:let ([sequence11 (((rt:record-ref Data.List.Types.traversableList (scm:string->symbol "traverse")) dictApplicative0) Data.List.Types.identity)])
        (scm:lambda (f2)
          (scm:lambda (xs3)
            (scm:lambda (ys4)
              (sequence11 (scm:letrec ([go5 (scm:lambda (v6)
                (scm:lambda (v17)
                  (scm:lambda (v28)
                    (scm:cond
                      [(scm:null? v6) v28]
                      [(scm:null? v17) v28]
                      [(scm:and (scm:pair? v6) (scm:pair? v17)) (((go5 (scm:cdr v6)) (scm:cdr v17)) (scm:cons ((f2 (scm:car v6)) (scm:car v17)) v28))]
                      [scm:else (rt:fail)]))))])
                (scm:letrec ([go6 (scm:lambda (v7)
                  (scm:lambda (v18)
                    (scm:cond
                      [(scm:null? v18) v7]
                      [(scm:pair? v18) ((go6 (scm:cons (scm:car v18) v7)) (scm:cdr v18))]
                      [scm:else (rt:fail)])))])
                  ((go6 (scm:quote ())) (((go5 xs3) ys4) (scm:quote ()))))))))))))

  (scm:define range
    (scm:lambda (start0)
      (scm:lambda (end1)
        (scm:cond
          [(scm:fx=? start0 end1) (scm:cons start0 (scm:quote ()))]
          [scm:else (scm:letrec ([go2 (scm:lambda (s3)
            (scm:lambda (e4)
              (scm:lambda (step5)
                (scm:lambda (rest6)
                  (scm:cond
                    [(scm:fx=? s3 e4) (scm:cons s3 rest6)]
                    [scm:else ((((go2 (scm:fx+ s3 step5)) e4) step5) (scm:cons s3 rest6))])))))])
            ((((go2 end1) start0) (scm:cond
              [(scm:fx>? start0 end1) 1]
              [scm:else -1])) (scm:quote ())))]))))

  (scm:define partition
    (scm:lambda (p0)
      (scm:lambda (xs1)
        ((((rt:record-ref Data.List.Types.foldableList (scm:string->symbol "foldr")) (scm:lambda (x2)
          (scm:lambda (v3)
            (scm:cond
              [(p0 x2) (scm:list (scm:cons (scm:string->symbol "no") (rt:record-ref v3 (scm:string->symbol "no"))) (scm:cons (scm:string->symbol "yes") (scm:cons x2 (rt:record-ref v3 (scm:string->symbol "yes")))))]
              [scm:else (scm:list (scm:cons (scm:string->symbol "no") (scm:cons x2 (rt:record-ref v3 (scm:string->symbol "no")))) (scm:cons (scm:string->symbol "yes") (rt:record-ref v3 (scm:string->symbol "yes"))))])))) (scm:list (scm:cons (scm:string->symbol "no") (scm:quote ())) (scm:cons (scm:string->symbol "yes") (scm:quote ())))) xs1))))

  (scm:define null
    (scm:lambda (v0)
      (scm:null? v0)))

  (scm:define nubBy
    (scm:lambda (p0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:lambda (v13)
          (scm:lambda (v24)
            (scm:cond
              [(scm:null? v24) v13]
              [(scm:pair? v24) (scm:let ([v35 (((Data.List.Internal.insertAndLookupBy p0) (scm:car v24)) v2)])
                (scm:cond
                  [(rt:record-ref v35 (scm:string->symbol "found")) (((go1 (rt:record-ref v35 (scm:string->symbol "result"))) v13) (scm:cdr v24))]
                  [scm:else (((go1 (rt:record-ref v35 (scm:string->symbol "result"))) (scm:cons (scm:car v24) v13)) (scm:cdr v24))]))]
              [scm:else (rt:fail)]))))])
        (scm:let ([_2 ((go1 Data.List.Internal.Leaf) (scm:quote ()))])
          (scm:lambda (x3)
            (scm:letrec ([go4 (scm:lambda (v5)
              (scm:lambda (v16)
                (scm:cond
                  [(scm:null? v16) v5]
                  [(scm:pair? v16) ((go4 (scm:cons (scm:car v16) v5)) (scm:cdr v16))]
                  [scm:else (rt:fail)])))])
              ((go4 (scm:quote ())) (_2 x3))))))))

  (scm:define nub
    (scm:lambda (dictOrd0)
      (nubBy (rt:record-ref dictOrd0 (scm:string->symbol "compare")))))

  (scm:define newtypePattern
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define mapMaybe
    (scm:lambda (f0)
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
            [(scm:pair? v13) (scm:let ([v24 (f0 (scm:car v13))])
              (scm:cond
                [(Data.Maybe.Nothing? v24) ((go1 v2) (scm:cdr v13))]
                [(Data.Maybe.Just? v24) ((go1 (scm:cons (Data.Maybe.Just-value0 v24) v2)) (scm:cdr v13))]
                [scm:else (rt:fail)]))]
            [scm:else (rt:fail)])))])
        (go1 (scm:quote ())))))

  (scm:define manyRec
    (scm:lambda (dictMonadRec0)
      (scm:lambda (dictAlternative1)
        (scm:let*
          ([Alt02 ((rt:record-ref ((rt:record-ref dictAlternative1 (scm:string->symbol "Plus1")) (scm:quote undefined)) (scm:string->symbol "Alt0")) (scm:quote undefined))]
           [_3 ((rt:record-ref dictAlternative1 (scm:string->symbol "Applicative0")) (scm:quote undefined))])
            (scm:lambda (p4)
              (((rt:record-ref dictMonadRec0 (scm:string->symbol "tailRecM")) (scm:lambda (acc5)
                (((rt:record-ref ((rt:record-ref ((rt:record-ref dictMonadRec0 (scm:string->symbol "Monad0")) (scm:quote undefined)) (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) (((rt:record-ref Alt02 (scm:string->symbol "alt")) (((rt:record-ref ((rt:record-ref Alt02 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) Control.Monad.Rec.Class.Loop) p4)) ((rt:record-ref _3 (scm:string->symbol "pure")) (Control.Monad.Rec.Class.Done Data.Unit.unit)))) (scm:lambda (aa6)
                  ((rt:record-ref _3 (scm:string->symbol "pure")) (scm:cond
                    [(Control.Monad.Rec.Class.Loop? aa6) (Control.Monad.Rec.Class.Loop (scm:cons (Control.Monad.Rec.Class.Loop-value0 aa6) acc5))]
                    [(Control.Monad.Rec.Class.Done? aa6) (Control.Monad.Rec.Class.Done (scm:letrec ([go7 (scm:lambda (v8)
                      (scm:lambda (v19)
                        (scm:cond
                          [(scm:null? v19) v8]
                          [(scm:pair? v19) ((go7 (scm:cons (scm:car v19) v8)) (scm:cdr v19))]
                          [scm:else (rt:fail)])))])
                      ((go7 (scm:quote ())) acc5)))]
                    [scm:else (rt:fail)])))))) (scm:quote ())))))))

  (scm:define someRec
    (scm:lambda (dictMonadRec0)
      (scm:lambda (dictAlternative1)
        (scm:let ([manyRec22 ((manyRec dictMonadRec0) dictAlternative1)])
          (scm:lambda (v3)
            (((rt:record-ref ((rt:record-ref ((rt:record-ref dictAlternative1 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref dictAlternative1 (scm:string->symbol "Plus1")) (scm:quote undefined)) (scm:string->symbol "Alt0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) rt:list-cons) v3)) (manyRec22 v3)))))))

  (scm:define some
    (scm:lambda (dictAlternative0)
      (scm:lambda (dictLazy1)
        (scm:lambda (v2)
          (((rt:record-ref ((rt:record-ref ((rt:record-ref dictAlternative0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref dictAlternative0 (scm:string->symbol "Plus1")) (scm:quote undefined)) (scm:string->symbol "Alt0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) rt:list-cons) v2)) ((rt:record-ref dictLazy1 (scm:string->symbol "defer")) (scm:lambda (v13)
            (((many dictAlternative0) dictLazy1) v2))))))))

  (scm:define many
    (scm:lambda (dictAlternative0)
      (scm:lambda (dictLazy1)
        (scm:lambda (v2)
          (((rt:record-ref ((rt:record-ref ((rt:record-ref dictAlternative0 (scm:string->symbol "Plus1")) (scm:quote undefined)) (scm:string->symbol "Alt0")) (scm:quote undefined)) (scm:string->symbol "alt")) (((some dictAlternative0) dictLazy1) v2)) ((rt:record-ref ((rt:record-ref dictAlternative0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) (scm:quote ())))))))

  (scm:define length
    (scm:letrec ([go0 (scm:lambda (b1)
      (scm:lambda (v2)
        (scm:cond
          [(scm:null? v2) b1]
          [(scm:pair? v2) ((go0 (scm:fx+ b1 1)) (scm:cdr v2))]
          [scm:else (rt:fail)])))])
      (go0 0)))

  (scm:define last
    (scm:lambda (v0)
      (scm:cond
        [(scm:pair? v0) (scm:cond
          [(scm:null? (scm:cdr v0)) (Data.Maybe.Just (scm:car v0))]
          [scm:else (last (scm:cdr v0))])]
        [scm:else Data.Maybe.Nothing])))

  (scm:define insertBy
    (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:lambda (v22)
          (scm:cond
            [(scm:null? v22) (scm:cons v11 (scm:quote ()))]
            [(scm:pair? v22) (scm:cond
              [(Data.Ordering.GT? ((v0 v11) (scm:car v22))) (scm:cons (scm:car v22) (((insertBy v0) v11) (scm:cdr v22)))]
              [scm:else (scm:cons v11 v22)])]
            [scm:else (rt:fail)])))))

  (scm:define insertAt
    (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:lambda (v22)
          (scm:cond
            [(scm:fx=? v0 0) (Data.Maybe.Just (scm:cons v11 v22))]
            [(scm:pair? v22) (scm:let ([_3 (((insertAt (scm:fx- v0 1)) v11) (scm:cdr v22))])
              (scm:cond
                [(Data.Maybe.Just? _3) (Data.Maybe.Just (scm:cons (scm:car v22) (Data.Maybe.Just-value0 _3)))]
                [scm:else Data.Maybe.Nothing]))]
            [scm:else Data.Maybe.Nothing])))))

  (scm:define insert
    (scm:lambda (dictOrd0)
      (insertBy (rt:record-ref dictOrd0 (scm:string->symbol "compare")))))

  (scm:define init
    (scm:lambda (lst0)
      (scm:let ([_1 (unsnoc lst0)])
        (scm:cond
          [(Data.Maybe.Just? _1) (Data.Maybe.Just (rt:record-ref (Data.Maybe.Just-value0 _1) (scm:string->symbol "init")))]
          [scm:else Data.Maybe.Nothing]))))

  (scm:define index
    (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:cond
          [(scm:null? v0) Data.Maybe.Nothing]
          [(scm:pair? v0) (scm:cond
            [(scm:fx=? v11 0) (Data.Maybe.Just (scm:car v0))]
            [scm:else ((index (scm:cdr v0)) (scm:fx- v11 1))])]
          [scm:else (rt:fail)]))))

  (scm:define head
    (scm:lambda (v0)
      (scm:cond
        [(scm:null? v0) Data.Maybe.Nothing]
        [(scm:pair? v0) (Data.Maybe.Just (scm:car v0))]
        [scm:else (rt:fail)])))

  (scm:define transpose
    (scm:lambda (v0)
      (scm:cond
        [(scm:null? v0) (scm:quote ())]
        [(scm:pair? v0) (scm:cond
          [(scm:null? (scm:car v0)) (transpose (scm:cdr v0))]
          [(scm:pair? (scm:car v0)) (scm:cons (scm:cons (scm:car (scm:car v0)) (scm:letrec ([go1 (scm:lambda (v2)
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
                  [(scm:null? (scm:car v13)) ((go1 v2) (scm:cdr v13))]
                  [(scm:pair? (scm:car v13)) ((go1 (scm:cons (scm:car (scm:car v13)) v2)) (scm:cdr v13))]
                  [scm:else (rt:fail)])]
                [scm:else (rt:fail)])))])
            ((go1 (scm:quote ())) (scm:cdr v0)))) (transpose (scm:cons (scm:cdr (scm:car v0)) (scm:letrec ([go1 (scm:lambda (v2)
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
                  [(scm:null? (scm:car v13)) ((go1 v2) (scm:cdr v13))]
                  [(scm:pair? (scm:car v13)) ((go1 (scm:cons (scm:cdr (scm:car v13)) v2)) (scm:cdr v13))]
                  [scm:else (rt:fail)])]
                [scm:else (rt:fail)])))])
            ((go1 (scm:quote ())) (scm:cdr v0))))))]
          [scm:else (rt:fail)])]
        [scm:else (rt:fail)])))

  (scm:define groupBy
    (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:cond
          [(scm:null? v11) (scm:quote ())]
          [(scm:pair? v11) (scm:let ([v22 ((span (v0 (scm:car v11))) (scm:cdr v11))])
            (scm:cons (Data.NonEmpty.NonEmpty* (scm:car v11) (rt:record-ref v22 (scm:string->symbol "init"))) ((groupBy v0) (rt:record-ref v22 (scm:string->symbol "rest")))))]
          [scm:else (rt:fail)]))))

  (scm:define groupAllBy
    (scm:lambda (p0)
      (scm:let*
        ([_1 (groupBy (scm:lambda (x1)
          (scm:lambda (y2)
            (Data.Ordering.EQ? ((p0 x1) y2)))))]
         [_2 (sortBy p0)])
          (scm:lambda (x3)
            (_1 (_2 x3))))))

  (scm:define group
    (scm:lambda (dictEq0)
      (groupBy (rt:record-ref dictEq0 (scm:string->symbol "eq")))))

  (scm:define groupAll
    (scm:lambda (dictOrd0)
      (scm:let*
        ([_1 (group ((rt:record-ref dictOrd0 (scm:string->symbol "Eq0")) (scm:quote undefined)))]
         [compare2 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
          (scm:lambda (x3)
            (_1 ((sortBy compare2) x3))))))

  (scm:define fromFoldable
    (scm:lambda (dictFoldable0)
      (((rt:record-ref dictFoldable0 (scm:string->symbol "foldr")) rt:list-cons) (scm:quote ()))))

  (scm:define foldM
    (scm:lambda (dictMonad0)
      (scm:lambda (v1)
        (scm:lambda (v12)
          (scm:lambda (v23)
            (scm:cond
              [(scm:null? v23) ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) v12)]
              [(scm:pair? v23) (scm:let ([_4 (scm:cdr v23)])
                (((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((v1 v12) (scm:car v23))) (scm:lambda (b$p5)
                  ((((foldM dictMonad0) v1) b$p5) _4))))]
              [scm:else (rt:fail)]))))))

  (scm:define findIndex
    (scm:lambda (fn0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:lambda (v13)
          (scm:cond
            [(scm:pair? v13) (scm:cond
              [(fn0 (scm:car v13)) (Data.Maybe.Just v2)]
              [scm:else ((go1 (scm:fx+ v2 1)) (scm:cdr v13))])]
            [(scm:null? v13) Data.Maybe.Nothing]
            [scm:else (rt:fail)])))])
        (go1 0))))

  (scm:define findLastIndex
    (scm:lambda (fn0)
      (scm:lambda (xs1)
        (scm:letrec ([go2 (scm:lambda (v3)
          (scm:lambda (v14)
            (scm:cond
              [(scm:pair? v14) (scm:cond
                [(fn0 (scm:car v14)) (Data.Maybe.Just v3)]
                [scm:else ((go2 (scm:fx+ v3 1)) (scm:cdr v14))])]
              [(scm:null? v14) Data.Maybe.Nothing]
              [scm:else (rt:fail)])))])
          (scm:let ([_3 ((go2 0) (scm:letrec ([go3 (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:cond
                [(scm:null? v15) v4]
                [(scm:pair? v15) ((go3 (scm:cons (scm:car v15) v4)) (scm:cdr v15))]
                [scm:else (rt:fail)])))])
            ((go3 (scm:quote ())) xs1)))])
            (scm:cond
              [(Data.Maybe.Just? _3) (Data.Maybe.Just (scm:letrec ([go4 (scm:lambda (b5)
                (scm:lambda (v6)
                  (scm:cond
                    [(scm:null? v6) b5]
                    [(scm:pair? v6) ((go4 (scm:fx+ b5 1)) (scm:cdr v6))]
                    [scm:else (rt:fail)])))])
                (scm:fx- (scm:fx- ((go4 0) xs1) 1) (Data.Maybe.Just-value0 _3))))]
              [scm:else Data.Maybe.Nothing]))))))

  (scm:define filterM
    (scm:lambda (dictMonad0)
      (scm:let*
        ([_1 ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
         [_2 ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined))])
          (scm:lambda (v3)
            (scm:lambda (v14)
              (scm:cond
                [(scm:null? v14) ((rt:record-ref _1 (scm:string->symbol "pure")) (scm:quote ()))]
                [(scm:pair? v14) (scm:let*
                  ([_5 (scm:car v14)]
                   [_6 (scm:cdr v14)])
                    (((rt:record-ref _2 (scm:string->symbol "bind")) (v3 _5)) (scm:lambda (b7)
                      (((rt:record-ref _2 (scm:string->symbol "bind")) (((filterM dictMonad0) v3) _6)) (scm:lambda (xs$p8)
                        ((rt:record-ref _1 (scm:string->symbol "pure")) (scm:cond
                          [b7 (scm:cons _5 xs$p8)]
                          [scm:else xs$p8])))))))]
                [scm:else (rt:fail)]))))))

  (scm:define filter
    (scm:lambda (p0)
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
              [(p0 (scm:car v13)) ((go1 (scm:cons (scm:car v13) v2)) (scm:cdr v13))]
              [scm:else ((go1 v2) (scm:cdr v13))])]
            [scm:else (rt:fail)])))])
        (go1 (scm:quote ())))))

  (scm:define intersectBy
    (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:lambda (v22)
          (scm:cond
            [(scm:null? v11) (scm:quote ())]
            [(scm:null? v22) (scm:quote ())]
            [scm:else (scm:letrec ([go3 (scm:lambda (v4)
              (scm:lambda (v15)
                (scm:cond
                  [(scm:null? v15) (scm:letrec ([go6 (scm:lambda (v7)
                    (scm:lambda (v18)
                      (scm:cond
                        [(scm:null? v18) v7]
                        [(scm:pair? v18) ((go6 (scm:cons (scm:car v18) v7)) (scm:cdr v18))]
                        [scm:else (rt:fail)])))])
                    ((go6 (scm:quote ())) v4))]
                  [(scm:pair? v15) (scm:cond
                    [((any (v0 (scm:car v15))) v22) ((go3 (scm:cons (scm:car v15) v4)) (scm:cdr v15))]
                    [scm:else ((go3 v4) (scm:cdr v15))])]
                  [scm:else (rt:fail)])))])
              ((go3 (scm:quote ())) v11))])))))

  (scm:define intersect
    (scm:lambda (dictEq0)
      (intersectBy (rt:record-ref dictEq0 (scm:string->symbol "eq")))))

  (scm:define nubByEq
    (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:cond
          [(scm:null? v11) (scm:quote ())]
          [(scm:pair? v11) (scm:let ([_2 (scm:car v11)])
            (scm:cons _2 ((nubByEq v0) (scm:letrec ([go3 (scm:lambda (v4)
              (scm:lambda (v15)
                (scm:cond
                  [(scm:null? v15) (scm:letrec ([go6 (scm:lambda (v7)
                    (scm:lambda (v18)
                      (scm:cond
                        [(scm:null? v18) v7]
                        [(scm:pair? v18) ((go6 (scm:cons (scm:car v18) v7)) (scm:cdr v18))]
                        [scm:else (rt:fail)])))])
                    ((go6 (scm:quote ())) v4))]
                  [(scm:pair? v15) (scm:cond
                    [(scm:not ((v0 _2) (scm:car v15))) ((go3 (scm:cons (scm:car v15) v4)) (scm:cdr v15))]
                    [scm:else ((go3 v4) (scm:cdr v15))])]
                  [scm:else (rt:fail)])))])
              ((go3 (scm:quote ())) (scm:cdr v11))))))]
          [scm:else (rt:fail)]))))

  (scm:define nubEq
    (scm:lambda (dictEq0)
      (nubByEq (rt:record-ref dictEq0 (scm:string->symbol "eq")))))

  (scm:define eqPattern
    (scm:lambda (dictEq0)
      (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x1)
        (scm:lambda (y2)
          (scm:letrec ([go3 (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:lambda (v26)
                (scm:cond
                  [(scm:not v26) #f]
                  [(scm:null? v4) (scm:and (scm:null? v15) v26)]
                  [scm:else (scm:and (scm:pair? v4) (scm:and (scm:pair? v15) (((go3 (scm:cdr v4)) (scm:cdr v15)) (scm:and v26 (((rt:record-ref dictEq0 (scm:string->symbol "eq")) (scm:car v15)) (scm:car v4))))))]))))])
            (((go3 x1) y2) #t))))))))

  (scm:define ordPattern
    (scm:lambda (dictOrd0)
      (scm:let*
        ([_1 ((rt:record-ref dictOrd0 (scm:string->symbol "Eq0")) (scm:quote undefined))]
         [eqPattern12 (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x2)
          (scm:lambda (y3)
            (scm:letrec ([go4 (scm:lambda (v5)
              (scm:lambda (v16)
                (scm:lambda (v27)
                  (scm:cond
                    [(scm:not v27) #f]
                    [(scm:null? v5) (scm:and (scm:null? v16) v27)]
                    [scm:else (scm:and (scm:pair? v5) (scm:and (scm:pair? v16) (((go4 (scm:cdr v5)) (scm:cdr v16)) (scm:and v27 (((rt:record-ref _1 (scm:string->symbol "eq")) (scm:car v16)) (scm:car v5))))))]))))])
              (((go4 x2) y3) #t))))))])
          (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x3)
            (scm:lambda (y4)
              (((rt:record-ref (Data.List.Types.ordList dictOrd0) (scm:string->symbol "compare")) x3) y4)))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
            eqPattern12))))))

  (scm:define elemLastIndex
    (scm:lambda (dictEq0)
      (scm:lambda (x1)
        (findLastIndex (scm:lambda (v2)
          (((rt:record-ref dictEq0 (scm:string->symbol "eq")) v2) x1))))))

  (scm:define elemIndex
    (scm:lambda (dictEq0)
      (scm:lambda (x1)
        (scm:letrec ([go2 (scm:lambda (v3)
          (scm:lambda (v14)
            (scm:cond
              [(scm:pair? v14) (scm:cond
                [(((rt:record-ref dictEq0 (scm:string->symbol "eq")) (scm:car v14)) x1) (Data.Maybe.Just v3)]
                [scm:else ((go2 (scm:fx+ v3 1)) (scm:cdr v14))])]
              [(scm:null? v14) Data.Maybe.Nothing]
              [scm:else (rt:fail)])))])
          (go2 0)))))

  (scm:define dropWhile
    (scm:lambda (p0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:cond
          [(scm:and (scm:pair? v2) (p0 (scm:car v2))) (go1 (scm:cdr v2))]
          [scm:else v2]))])
        go1)))

  (scm:define dropEnd
    (scm:lambda (n0)
      (scm:lambda (xs1)
        ((take (scm:letrec ([go2 (scm:lambda (b3)
          (scm:lambda (v4)
            (scm:cond
              [(scm:null? v4) b3]
              [(scm:pair? v4) ((go2 (scm:fx+ b3 1)) (scm:cdr v4))]
              [scm:else (rt:fail)])))])
          (scm:fx- ((go2 0) xs1) n0))) xs1))))

  (scm:define drop
    (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:cond
          [(scm:fx<? v0 1) v11]
          [(scm:null? v11) (scm:quote ())]
          [(scm:pair? v11) ((drop (scm:fx- v0 1)) (scm:cdr v11))]
          [scm:else (rt:fail)]))))

  (scm:define slice
    (scm:lambda (start0)
      (scm:lambda (end1)
        (scm:lambda (xs2)
          ((take (scm:fx- end1 start0)) ((drop start0) xs2))))))

  (scm:define takeEnd
    (scm:lambda (n0)
      (scm:lambda (xs1)
        ((drop (scm:letrec ([go2 (scm:lambda (b3)
          (scm:lambda (v4)
            (scm:cond
              [(scm:null? v4) b3]
              [(scm:pair? v4) ((go2 (scm:fx+ b3 1)) (scm:cdr v4))]
              [scm:else (rt:fail)])))])
          (scm:fx- ((go2 0) xs1) n0))) xs1))))

  (scm:define deleteBy
    (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:lambda (v22)
          (scm:cond
            [(scm:null? v22) (scm:quote ())]
            [(scm:pair? v22) (scm:cond
              [((v0 v11) (scm:car v22)) (scm:cdr v22)]
              [scm:else (scm:cons (scm:car v22) (((deleteBy v0) v11) (scm:cdr v22)))])]
            [scm:else (rt:fail)])))))

  (scm:define unionBy
    (scm:lambda (eq20)
      (scm:lambda (xs1)
        (scm:lambda (ys2)
          (scm:letrec ([go3 (scm:lambda (b4)
            (scm:lambda (v5)
              (scm:cond
                [(scm:null? v5) b4]
                [(scm:pair? v5) ((go3 (((deleteBy eq20) (scm:car v5)) b4)) (scm:cdr v5))]
                [scm:else (rt:fail)])))])
            ((((rt:record-ref Data.List.Types.foldableList (scm:string->symbol "foldr")) rt:list-cons) ((go3 ((nubByEq eq20) ys2)) xs1)) xs1))))))

  (scm:define union
    (scm:lambda (dictEq0)
      (unionBy (rt:record-ref dictEq0 (scm:string->symbol "eq")))))

  (scm:define deleteAt
    (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:cond
          [(scm:pair? v11) (scm:cond
            [(scm:fx=? v0 0) (Data.Maybe.Just (scm:cdr v11))]
            [scm:else (scm:let ([_2 ((deleteAt (scm:fx- v0 1)) (scm:cdr v11))])
              (scm:cond
                [(Data.Maybe.Just? _2) (Data.Maybe.Just (scm:cons (scm:car v11) (Data.Maybe.Just-value0 _2)))]
                [scm:else Data.Maybe.Nothing]))])]
          [scm:else Data.Maybe.Nothing]))))

  (scm:define delete
    (scm:lambda (dictEq0)
      (deleteBy (rt:record-ref dictEq0 (scm:string->symbol "eq")))))

  (scm:define difference
    (scm:lambda (dictEq0)
      (scm:letrec ([go1 (scm:lambda (b2)
        (scm:lambda (v3)
          (scm:cond
            [(scm:null? v3) b2]
            [(scm:pair? v3) ((go1 (((deleteBy (rt:record-ref dictEq0 (scm:string->symbol "eq"))) (scm:car v3)) b2)) (scm:cdr v3))]
            [scm:else (rt:fail)])))])
        go1)))

  (scm:define concatMap
    (scm:lambda (b0)
      (scm:lambda (a1)
        (((rt:record-ref Data.List.Types.bindList (scm:string->symbol "bind")) a1) b0))))

  (scm:define concat
    (scm:lambda (v0)
      (((rt:record-ref Data.List.Types.bindList (scm:string->symbol "bind")) v0) identity)))

  (scm:define catMaybes
    (scm:letrec ([go0 (scm:lambda (v1)
      (scm:lambda (v12)
        (scm:cond
          [(scm:null? v12) (scm:letrec ([go3 (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:cond
                [(scm:null? v15) v4]
                [(scm:pair? v15) ((go3 (scm:cons (scm:car v15) v4)) (scm:cdr v15))]
                [scm:else (rt:fail)])))])
            ((go3 (scm:quote ())) v1))]
          [(scm:pair? v12) (scm:cond
            [(Data.Maybe.Nothing? (scm:car v12)) ((go0 v1) (scm:cdr v12))]
            [(Data.Maybe.Just? (scm:car v12)) ((go0 (scm:cons (Data.Maybe.Just-value0 (scm:car v12)) v1)) (scm:cdr v12))]
            [scm:else (rt:fail)])]
          [scm:else (rt:fail)])))])
      (go0 (scm:quote ()))))

  (scm:define alterAt
    (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:lambda (v22)
          (scm:cond
            [(scm:pair? v22) (scm:cond
              [(scm:fx=? v0 0) (Data.Maybe.Just (scm:let ([v33 (v11 (scm:car v22))])
                (scm:cond
                  [(Data.Maybe.Nothing? v33) (scm:cdr v22)]
                  [(Data.Maybe.Just? v33) (scm:cons (Data.Maybe.Just-value0 v33) (scm:cdr v22))]
                  [scm:else (rt:fail)])))]
              [scm:else (scm:let ([_3 (((alterAt (scm:fx- v0 1)) v11) (scm:cdr v22))])
                (scm:cond
                  [(Data.Maybe.Just? _3) (Data.Maybe.Just (scm:cons (scm:car v22) (Data.Maybe.Just-value0 _3)))]
                  [scm:else Data.Maybe.Nothing]))])]
            [scm:else Data.Maybe.Nothing])))))

  (scm:define modifyAt
    (scm:lambda (n0)
      (scm:lambda (f1)
        ((alterAt n0) (scm:lambda (x2)
          (Data.Maybe.Just (f1 x2))))))))
