#!r6rs
#!chezscheme
(library
  (Data.List.Lazy lib)
  (export
    Pattern
    alterAt
    any
    catMaybes
    concat
    concatMap
    cycle
    delete
    deleteAt
    deleteBy
    difference
    drop
    dropWhile
    elemIndex
    elemLastIndex
    eqPattern
    filter
    filterM
    findIndex
    findLastIndex
    foldM
    foldrLazy
    fromFoldable
    group
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
    iterate
    last
    length
    many
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
    repeat
    replicate
    replicateM
    reverse
    scanlLazy
    showPattern
    singleton
    slice
    snoc
    some
    span
    stripPrefix
    tail
    take
    takeWhile
    toUnfoldable
    transpose
    uncons
    union
    unionBy
    unzip
    updateAt
    zip
    zipWith
    zipWithA)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Monad.Rec.Class lib) Control.Monad.Rec.Class.)
    (prefix (Data.Lazy lib) Data.Lazy.)
    (prefix (Data.List.Internal lib) Data.List.Internal.)
    (prefix (Data.List.Lazy.Types lib) Data.List.Lazy.Types.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.NonEmpty lib) Data.NonEmpty.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define any
    ((rt:record-ref Data.List.Lazy.Types.foldableList (scm:string->symbol "foldMap")) (scm:let ([semigroupDisj10 (scm:list (scm:cons (scm:string->symbol "append") (scm:lambda (v0)
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

  (scm:define zipWith
    (scm:lambda (f0)
      (scm:lambda (xs1)
        (scm:lambda (ys2)
          (scm:let ([_3 (Data.Lazy.defer (scm:lambda (v3)
            (scm:let ([_4 (Data.Lazy.force xs1)])
              (scm:lambda (v15)
                (scm:cond
                  [(Data.List.Lazy.Types.Nil? _4) Data.List.Lazy.Types.Nil]
                  [(Data.List.Lazy.Types.Nil? v15) Data.List.Lazy.Types.Nil]
                  [(scm:and (Data.List.Lazy.Types.Cons? _4) (Data.List.Lazy.Types.Cons? v15)) (Data.List.Lazy.Types.Cons* ((f0 (Data.List.Lazy.Types.Cons-value0 _4)) (Data.List.Lazy.Types.Cons-value0 v15)) (((zipWith f0) (Data.List.Lazy.Types.Cons-value1 _4)) (Data.List.Lazy.Types.Cons-value1 v15)))]
                  [scm:else (rt:fail)])))))])
            (Data.Lazy.defer (scm:lambda (v4)
              ((Data.Lazy.force _3) (Data.Lazy.force ys2)))))))))

  (scm:define zipWithA
    (scm:lambda (dictApplicative0)
      (scm:let ([sequence11 (((rt:record-ref Data.List.Lazy.Types.traversableList (scm:string->symbol "traverse")) dictApplicative0) Data.List.Lazy.Types.identity)])
        (scm:lambda (f2)
          (scm:lambda (xs3)
            (scm:lambda (ys4)
              (sequence11 (((zipWith f2) xs3) ys4))))))))

  (scm:define zip
    (zipWith Data.Tuple.Tuple))

  (scm:define updateAt
    (scm:lambda (n0)
      (scm:lambda (x1)
        (scm:lambda (xs2)
          (Data.Lazy.defer (scm:lambda (v3)
            (scm:let ([_4 (Data.Lazy.force xs2)])
              (scm:cond
                [(Data.List.Lazy.Types.Nil? _4) Data.List.Lazy.Types.Nil]
                [(Data.List.Lazy.Types.Cons? _4) (scm:cond
                  [(scm:fx=? n0 0) (Data.List.Lazy.Types.Cons* x1 (Data.List.Lazy.Types.Cons-value1 _4))]
                  [scm:else (Data.List.Lazy.Types.Cons* (Data.List.Lazy.Types.Cons-value0 _4) (((updateAt (scm:fx- n0 1)) x1) (Data.List.Lazy.Types.Cons-value1 _4)))])]
                [scm:else (rt:fail)]))))))))

  (scm:define unzip
    (((rt:record-ref Data.List.Lazy.Types.foldableList (scm:string->symbol "foldr")) (scm:lambda (v0)
      (scm:let*
        ([_1 (Data.Tuple.Tuple-value0 v0)]
         [_2 (Data.Tuple.Tuple-value1 v0)])
          (scm:lambda (v13)
            (scm:let*
              ([_4 (Data.Tuple.Tuple-value0 v13)]
               [_5 (Data.Tuple.Tuple-value1 v13)])
                (Data.Tuple.Tuple* (Data.Lazy.defer (scm:lambda (v6)
                  (Data.List.Lazy.Types.Cons* _1 _4))) (Data.Lazy.defer (scm:lambda (v6)
                  (Data.List.Lazy.Types.Cons* _2 _5))))))))) (Data.Tuple.Tuple* Data.List.Lazy.Types.nil Data.List.Lazy.Types.nil)))

  (scm:define uncons
    (scm:lambda (xs0)
      (scm:let ([v1 (Data.Lazy.force xs0)])
        (scm:cond
          [(Data.List.Lazy.Types.Nil? v1) Data.Maybe.Nothing]
          [(Data.List.Lazy.Types.Cons? v1) (Data.Maybe.Just (scm:list (scm:cons (scm:string->symbol "head") (Data.List.Lazy.Types.Cons-value0 v1)) (scm:cons (scm:string->symbol "tail") (Data.List.Lazy.Types.Cons-value1 v1))))]
          [scm:else (rt:fail)]))))

  (scm:define toUnfoldable
    (scm:lambda (dictUnfoldable0)
      ((rt:record-ref dictUnfoldable0 (scm:string->symbol "unfoldr")) (scm:lambda (xs1)
        (scm:let ([_2 (uncons xs1)])
          (scm:cond
            [(Data.Maybe.Just? _2) (Data.Maybe.Just (Data.Tuple.Tuple* (rt:record-ref (Data.Maybe.Just-value0 _2) (scm:string->symbol "head")) (rt:record-ref (Data.Maybe.Just-value0 _2) (scm:string->symbol "tail"))))]
            [scm:else Data.Maybe.Nothing]))))))

  (scm:define takeWhile
    (scm:lambda (p0)
      ((rt:record-ref Data.Lazy.functorLazy (scm:string->symbol "map")) (scm:lambda (v1)
        (scm:cond
          [(scm:and (Data.List.Lazy.Types.Cons? v1) (p0 (Data.List.Lazy.Types.Cons-value0 v1))) (Data.List.Lazy.Types.Cons* (Data.List.Lazy.Types.Cons-value0 v1) ((takeWhile p0) (Data.List.Lazy.Types.Cons-value1 v1)))]
          [scm:else Data.List.Lazy.Types.Nil])))))

  (scm:define take
    (scm:lambda (n0)
      (scm:cond
        [(scm:fx<=? n0 0) (scm:lambda (v1)
          Data.List.Lazy.Types.nil)]
        [scm:else ((rt:record-ref Data.Lazy.functorLazy (scm:string->symbol "map")) (scm:lambda (v11)
          (scm:cond
            [(Data.List.Lazy.Types.Nil? v11) Data.List.Lazy.Types.Nil]
            [(Data.List.Lazy.Types.Cons? v11) (Data.List.Lazy.Types.Cons* (Data.List.Lazy.Types.Cons-value0 v11) ((take (scm:fx- n0 1)) (Data.List.Lazy.Types.Cons-value1 v11)))]
            [scm:else (rt:fail)])))])))

  (scm:define tail
    (scm:lambda (xs0)
      (scm:let ([_1 (uncons xs0)])
        (scm:cond
          [(Data.Maybe.Just? _1) (Data.Maybe.Just (rt:record-ref (Data.Maybe.Just-value0 _1) (scm:string->symbol "tail")))]
          [scm:else Data.Maybe.Nothing]))))

  (scm:define stripPrefix
    (scm:lambda (dictEq0)
      (scm:lambda (v1)
        (scm:lambda (s2)
          (scm:let*
            ([_3 (scm:lambda (prefix3 input4)
              (scm:let ([v15 (Data.Lazy.force prefix3)])
                (scm:cond
                  [(Data.List.Lazy.Types.Nil? v15) (Data.Maybe.Just (Control.Monad.Rec.Class.Done input4))]
                  [(Data.List.Lazy.Types.Cons? v15) (scm:let ([v26 (Data.Lazy.force input4)])
                    (scm:cond
                      [(scm:and (Data.List.Lazy.Types.Cons? v26) (((rt:record-ref dictEq0 (scm:string->symbol "eq")) (Data.List.Lazy.Types.Cons-value0 v15)) (Data.List.Lazy.Types.Cons-value0 v26))) (Data.Maybe.Just (Control.Monad.Rec.Class.Loop (scm:list (scm:cons (scm:string->symbol "a") (Data.List.Lazy.Types.Cons-value1 v15)) (scm:cons (scm:string->symbol "b") (Data.List.Lazy.Types.Cons-value1 v26)))))]
                      [scm:else Data.Maybe.Nothing]))]
                  [scm:else (rt:fail)])))]
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
    (scm:lambda (p0)
      (scm:lambda (xs1)
        (scm:let ([v2 (uncons xs1)])
          (scm:cond
            [(scm:and (Data.Maybe.Just? v2) (p0 (rt:record-ref (Data.Maybe.Just-value0 v2) (scm:string->symbol "head")))) (scm:let*
              ([_3 (rt:record-ref (Data.Maybe.Just-value0 v2) (scm:string->symbol "head"))]
               [v14 ((span p0) (rt:record-ref (Data.Maybe.Just-value0 v2) (scm:string->symbol "tail")))]
               [_5 (rt:record-ref v14 (scm:string->symbol "init"))])
                (scm:list (scm:cons (scm:string->symbol "init") (Data.Lazy.defer (scm:lambda (v6)
                  (Data.List.Lazy.Types.Cons* _3 _5)))) (scm:cons (scm:string->symbol "rest") (rt:record-ref v14 (scm:string->symbol "rest")))))]
            [scm:else (scm:list (scm:cons (scm:string->symbol "init") Data.List.Lazy.Types.nil) (scm:cons (scm:string->symbol "rest") xs1))])))))

  (scm:define snoc
    (scm:lambda (xs0)
      (scm:lambda (x1)
        ((((rt:record-ref Data.List.Lazy.Types.foldableList (scm:string->symbol "foldr")) Data.List.Lazy.Types.cons) (Data.Lazy.defer (scm:lambda (v2)
          (Data.List.Lazy.Types.Cons* x1 Data.List.Lazy.Types.nil)))) xs0))))

  (scm:define singleton
    (scm:lambda (a0)
      (Data.Lazy.defer (scm:lambda (v1)
        (Data.List.Lazy.Types.Cons* a0 Data.List.Lazy.Types.nil)))))

  (scm:define showPattern
    (scm:lambda (dictShow0)
      (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v1)
        (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Pattern ") ((rt:record-ref (Data.List.Lazy.Types.showList dictShow0) (scm:string->symbol "show")) v1)) (rt:string->pstring ")")))))))

  (scm:define scanlLazy
    (scm:lambda (f0)
      (scm:lambda (acc1)
        (scm:lambda (xs2)
          (Data.Lazy.defer (scm:lambda (v3)
            (scm:let ([_4 (Data.Lazy.force xs2)])
              (scm:cond
                [(Data.List.Lazy.Types.Nil? _4) Data.List.Lazy.Types.Nil]
                [(Data.List.Lazy.Types.Cons? _4) (scm:let ([acc$p5 ((f0 acc1) (Data.List.Lazy.Types.Cons-value0 _4))])
                  (Data.List.Lazy.Types.Cons* acc$p5 (((scanlLazy f0) acc$p5) (Data.List.Lazy.Types.Cons-value1 _4))))]
                [scm:else (rt:fail)]))))))))

  (scm:define reverse
    (scm:lambda (xs0)
      (Data.Lazy.defer (scm:lambda (x1)
        (Data.Lazy.force ((((rt:record-ref Data.List.Lazy.Types.foldableList (scm:string->symbol "foldl")) (scm:lambda (b2)
          (scm:lambda (a3)
            (Data.Lazy.defer (scm:lambda (v4)
              (Data.List.Lazy.Types.Cons* a3 b2)))))) Data.List.Lazy.Types.nil) xs0))))))

  (scm:define replicateM
    (scm:lambda (dictMonad0)
      (scm:let*
        ([_1 ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
         [_2 ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined))])
          (scm:lambda (n3)
            (scm:lambda (m4)
              (scm:cond
                [(scm:fx<? n3 1) ((rt:record-ref _1 (scm:string->symbol "pure")) Data.List.Lazy.Types.nil)]
                [scm:else (((rt:record-ref _2 (scm:string->symbol "bind")) m4) (scm:lambda (a5)
                  (((rt:record-ref _2 (scm:string->symbol "bind")) (((replicateM dictMonad0) (scm:fx- n3 1)) m4)) (scm:lambda (as6)
                    ((rt:record-ref _1 (scm:string->symbol "pure")) (Data.Lazy.defer (scm:lambda (v7)
                      (Data.List.Lazy.Types.Cons* a5 as6))))))))]))))))

  (scm:define repeat
    (scm:lambda (x0)
      (scm:letrec ([go1 (Data.Lazy.defer (scm:lambda (x2)
        (Data.Lazy.force (Data.Lazy.defer (scm:lambda (v3)
          (Data.List.Lazy.Types.Cons* x0 go1))))))])
        go1)))

  (scm:define replicate
    (scm:lambda (i0)
      (scm:lambda (xs1)
        ((take i0) (repeat xs1)))))

  (scm:define range
    (scm:lambda (start0)
      (scm:lambda (end1)
        (scm:cond
          [(scm:fx>? start0 end1) (((rt:record-ref Data.List.Lazy.Types.unfoldableList (scm:string->symbol "unfoldr")) (scm:lambda (x2)
            (scm:cond
              [(scm:fx>=? x2 end1) (Data.Maybe.Just (Data.Tuple.Tuple* x2 (scm:fx- x2 1)))]
              [scm:else Data.Maybe.Nothing]))) start0)]
          [scm:else (((rt:record-ref Data.List.Lazy.Types.unfoldableList (scm:string->symbol "unfoldr")) (scm:lambda (x2)
            (scm:cond
              [(scm:fx<=? x2 end1) (Data.Maybe.Just (Data.Tuple.Tuple* x2 (scm:fx+ x2 1)))]
              [scm:else Data.Maybe.Nothing]))) start0)]))))

  (scm:define partition
    (scm:lambda (f0)
      (((rt:record-ref Data.List.Lazy.Types.foldableList (scm:string->symbol "foldr")) (scm:lambda (x1)
        (scm:lambda (v2)
          (scm:cond
            [(f0 x1) (scm:list (scm:cons (scm:string->symbol "yes") (Data.Lazy.defer (scm:lambda (v3)
              (Data.List.Lazy.Types.Cons* x1 (rt:record-ref v2 (scm:string->symbol "yes")))))) (scm:cons (scm:string->symbol "no") (rt:record-ref v2 (scm:string->symbol "no"))))]
            [scm:else (scm:list (scm:cons (scm:string->symbol "yes") (rt:record-ref v2 (scm:string->symbol "yes"))) (scm:cons (scm:string->symbol "no") (Data.Lazy.defer (scm:lambda (v3)
              (Data.List.Lazy.Types.Cons* x1 (rt:record-ref v2 (scm:string->symbol "no")))))))])))) (scm:list (scm:cons (scm:string->symbol "yes") Data.List.Lazy.Types.nil) (scm:cons (scm:string->symbol "no") Data.List.Lazy.Types.nil)))))

  (scm:define null
    (scm:lambda (x0)
      (scm:let ([_1 (uncons x0)])
        (scm:cond
          [(Data.Maybe.Nothing? _1) #t]
          [(Data.Maybe.Just? _1) #f]
          [scm:else (rt:fail)]))))

  (scm:define nubBy
    (scm:lambda (p0)
      (scm:letrec*
        ([goStep1 (scm:lambda (v2)
          (scm:lambda (v13)
            (scm:cond
              [(Data.List.Lazy.Types.Nil? v13) Data.List.Lazy.Types.Nil]
              [(Data.List.Lazy.Types.Cons? v13) (scm:let ([v24 (((Data.List.Internal.insertAndLookupBy p0) (Data.List.Lazy.Types.Cons-value0 v13)) v2)])
                (scm:cond
                  [(rt:record-ref v24 (scm:string->symbol "found")) (Data.Lazy.force ((go1 (rt:record-ref v24 (scm:string->symbol "result"))) (Data.List.Lazy.Types.Cons-value1 v13)))]
                  [scm:else (Data.List.Lazy.Types.Cons* (Data.List.Lazy.Types.Cons-value0 v13) ((go1 (rt:record-ref v24 (scm:string->symbol "result"))) (Data.List.Lazy.Types.Cons-value1 v13)))]))]
              [scm:else (rt:fail)])))]
         [go1 (scm:lambda (s2)
          (scm:lambda (v3)
            (scm:let ([_4 (goStep1 s2)])
              (Data.Lazy.defer (scm:lambda (v5)
                (_4 (Data.Lazy.force v3)))))))])
          (go1 Data.List.Internal.Leaf))))

  (scm:define nub
    (scm:lambda (dictOrd0)
      (nubBy (rt:record-ref dictOrd0 (scm:string->symbol "compare")))))

  (scm:define newtypePattern
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define mapMaybe
    (scm:lambda (f0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:cond
          [(Data.List.Lazy.Types.Nil? v2) Data.List.Lazy.Types.Nil]
          [(Data.List.Lazy.Types.Cons? v2) (scm:let ([v13 (f0 (Data.List.Lazy.Types.Cons-value0 v2))])
            (scm:cond
              [(Data.Maybe.Nothing? v13) (go1 (Data.Lazy.force (Data.List.Lazy.Types.Cons-value1 v2)))]
              [(Data.Maybe.Just? v13) (Data.List.Lazy.Types.Cons* (Data.Maybe.Just-value0 v13) ((mapMaybe f0) (Data.List.Lazy.Types.Cons-value1 v2)))]
              [scm:else (rt:fail)]))]
          [scm:else (rt:fail)]))])
        (scm:lambda (x2)
          (Data.Lazy.defer (scm:lambda (v3)
            (go1 (Data.Lazy.force x2))))))))

  (scm:define some
    (scm:lambda (dictAlternative0)
      (scm:lambda (dictLazy1)
        (scm:lambda (v2)
          (((rt:record-ref ((rt:record-ref ((rt:record-ref dictAlternative0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "Apply0")) (scm:quote undefined)) (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref ((rt:record-ref ((rt:record-ref dictAlternative0 (scm:string->symbol "Plus1")) (scm:quote undefined)) (scm:string->symbol "Alt0")) (scm:quote undefined)) (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) Data.List.Lazy.Types.cons) v2)) ((rt:record-ref dictLazy1 (scm:string->symbol "defer")) (scm:lambda (v13)
            (((many dictAlternative0) dictLazy1) v2))))))))

  (scm:define many
    (scm:lambda (dictAlternative0)
      (scm:lambda (dictLazy1)
        (scm:lambda (v2)
          (((rt:record-ref ((rt:record-ref ((rt:record-ref dictAlternative0 (scm:string->symbol "Plus1")) (scm:quote undefined)) (scm:string->symbol "Alt0")) (scm:quote undefined)) (scm:string->symbol "alt")) (((some dictAlternative0) dictLazy1) v2)) ((rt:record-ref ((rt:record-ref dictAlternative0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) Data.List.Lazy.Types.nil))))))

  (scm:define length
    (((rt:record-ref Data.List.Lazy.Types.foldableList (scm:string->symbol "foldl")) (scm:lambda (l0)
      (scm:lambda (v1)
        (scm:fx+ l0 1)))) 0))

  (scm:define last
    (scm:letrec ([go0 (scm:lambda (v1)
      (scm:cond
        [(Data.List.Lazy.Types.Cons? v1) (scm:cond
          [(scm:let ([_2 (uncons (Data.List.Lazy.Types.Cons-value1 v1))])
            (scm:cond
              [(Data.Maybe.Nothing? _2) #t]
              [(Data.Maybe.Just? _2) #f]
              [scm:else (rt:fail)])) (Data.Maybe.Just (Data.List.Lazy.Types.Cons-value0 v1))]
          [scm:else (go0 (Data.Lazy.force (Data.List.Lazy.Types.Cons-value1 v1)))])]
        [scm:else Data.Maybe.Nothing]))])
      (scm:lambda (x1)
        (go0 (Data.Lazy.force x1)))))

  (scm:define iterate
    (scm:lambda (f0)
      (scm:lambda (x1)
        (scm:letrec ([go2 (Data.Lazy.defer (scm:lambda (x3)
          (Data.Lazy.force (scm:let ([_4 (((rt:record-ref Data.List.Lazy.Types.functorList (scm:string->symbol "map")) f0) go2)])
            (Data.Lazy.defer (scm:lambda (v5)
              (Data.List.Lazy.Types.Cons* x1 _4)))))))])
          go2))))

  (scm:define insertAt
    (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:lambda (v22)
          (scm:cond
            [(scm:fx=? v0 0) (Data.Lazy.defer (scm:lambda (v3)
              (Data.List.Lazy.Types.Cons* v11 v22)))]
            [scm:else (Data.Lazy.defer (scm:lambda (v3)
              (scm:let ([_4 (Data.Lazy.force v22)])
                (scm:cond
                  [(Data.List.Lazy.Types.Nil? _4) (Data.List.Lazy.Types.Cons* v11 Data.List.Lazy.Types.nil)]
                  [(Data.List.Lazy.Types.Cons? _4) (Data.List.Lazy.Types.Cons* (Data.List.Lazy.Types.Cons-value0 _4) (((insertAt (scm:fx- v0 1)) v11) (Data.List.Lazy.Types.Cons-value1 _4)))]
                  [scm:else (rt:fail)]))))])))))

  (scm:define init
    (scm:letrec ([go0 (scm:lambda (v1)
      (scm:cond
        [(Data.List.Lazy.Types.Cons? v1) (scm:cond
          [(scm:let ([_2 (uncons (Data.List.Lazy.Types.Cons-value1 v1))])
            (scm:cond
              [(Data.Maybe.Nothing? _2) #t]
              [(Data.Maybe.Just? _2) #f]
              [scm:else (rt:fail)])) (Data.Maybe.Just Data.List.Lazy.Types.nil)]
          [scm:else (scm:let ([_2 (go0 (Data.Lazy.force (Data.List.Lazy.Types.Cons-value1 v1)))])
            (scm:cond
              [(Data.Maybe.Just? _2) (Data.Maybe.Just (scm:let*
                ([_3 (Data.List.Lazy.Types.Cons-value0 v1)]
                 [_4 (Data.Maybe.Just-value0 _2)])
                  (Data.Lazy.defer (scm:lambda (v5)
                    (Data.List.Lazy.Types.Cons* _3 _4)))))]
              [scm:else Data.Maybe.Nothing]))])]
        [scm:else Data.Maybe.Nothing]))])
      (scm:lambda (x1)
        (go0 (Data.Lazy.force x1)))))

  (scm:define index
    (scm:lambda (xs0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:lambda (v13)
          (scm:cond
            [(Data.List.Lazy.Types.Nil? v2) Data.Maybe.Nothing]
            [(Data.List.Lazy.Types.Cons? v2) (scm:cond
              [(scm:fx=? v13 0) (Data.Maybe.Just (Data.List.Lazy.Types.Cons-value0 v2))]
              [scm:else ((go1 (Data.Lazy.force (Data.List.Lazy.Types.Cons-value1 v2))) (scm:fx- v13 1))])]
            [scm:else (rt:fail)])))])
        (go1 (Data.Lazy.force xs0)))))

  (scm:define head
    (scm:lambda (xs0)
      (scm:let ([_1 (uncons xs0)])
        (scm:cond
          [(Data.Maybe.Just? _1) (Data.Maybe.Just (rt:record-ref (Data.Maybe.Just-value0 _1) (scm:string->symbol "head")))]
          [scm:else Data.Maybe.Nothing]))))

  (scm:define transpose
    (scm:lambda (xs0)
      (scm:let ([v1 (uncons xs0)])
        (scm:cond
          [(Data.Maybe.Nothing? v1) xs0]
          [(Data.Maybe.Just? v1) (scm:let ([v12 (uncons (rt:record-ref (Data.Maybe.Just-value0 v1) (scm:string->symbol "head")))])
            (scm:cond
              [(Data.Maybe.Nothing? v12) (transpose (rt:record-ref (Data.Maybe.Just-value0 v1) (scm:string->symbol "tail")))]
              [(Data.Maybe.Just? v12) (scm:let*
                ([_3 (rt:record-ref (Data.Maybe.Just-value0 v12) (scm:string->symbol "head"))]
                 [_4 (rt:record-ref (Data.Maybe.Just-value0 v12) (scm:string->symbol "tail"))]
                 [_5 ((mapMaybe head) (rt:record-ref (Data.Maybe.Just-value0 v1) (scm:string->symbol "tail")))]
                 [_6 (Data.Lazy.defer (scm:lambda (v6)
                  (Data.List.Lazy.Types.Cons* _3 _5)))]
                 [_7 (transpose (scm:let ([_7 ((mapMaybe tail) (rt:record-ref (Data.Maybe.Just-value0 v1) (scm:string->symbol "tail")))])
                  (Data.Lazy.defer (scm:lambda (v8)
                    (Data.List.Lazy.Types.Cons* _4 _7)))))])
                  (Data.Lazy.defer (scm:lambda (v8)
                    (Data.List.Lazy.Types.Cons* _6 _7))))]
              [scm:else (rt:fail)]))]
          [scm:else (rt:fail)]))))

  (scm:define groupBy
    (scm:lambda (eq0)
      ((rt:record-ref Data.Lazy.functorLazy (scm:string->symbol "map")) (scm:lambda (v1)
        (scm:cond
          [(Data.List.Lazy.Types.Nil? v1) Data.List.Lazy.Types.Nil]
          [(Data.List.Lazy.Types.Cons? v1) (scm:let*
            ([_2 (Data.List.Lazy.Types.Cons-value0 v1)]
             [v13 ((span (eq0 _2)) (Data.List.Lazy.Types.Cons-value1 v1))]
             [_4 (rt:record-ref v13 (scm:string->symbol "init"))])
              (Data.List.Lazy.Types.Cons* (Data.Lazy.defer (scm:lambda (v25)
                (Data.NonEmpty.NonEmpty* _2 _4))) ((groupBy eq0) (rt:record-ref v13 (scm:string->symbol "rest")))))]
          [scm:else (rt:fail)])))))

  (scm:define group
    (scm:lambda (dictEq0)
      (groupBy (rt:record-ref dictEq0 (scm:string->symbol "eq")))))

  (scm:define insertBy
    (scm:lambda (cmp0)
      (scm:lambda (x1)
        (scm:lambda (xs2)
          (Data.Lazy.defer (scm:lambda (v3)
            (scm:let ([_4 (Data.Lazy.force xs2)])
              (scm:cond
                [(Data.List.Lazy.Types.Nil? _4) (Data.List.Lazy.Types.Cons* x1 Data.List.Lazy.Types.nil)]
                [(Data.List.Lazy.Types.Cons? _4) (scm:cond
                  [(Data.Ordering.GT? ((cmp0 x1) (Data.List.Lazy.Types.Cons-value0 _4))) (Data.List.Lazy.Types.Cons* (Data.List.Lazy.Types.Cons-value0 _4) (((insertBy cmp0) x1) (Data.List.Lazy.Types.Cons-value1 _4)))]
                  [scm:else (Data.List.Lazy.Types.Cons* x1 (Data.Lazy.defer (scm:lambda (v5)
                    _4)))])]
                [scm:else (rt:fail)]))))))))

  (scm:define insert
    (scm:lambda (dictOrd0)
      (insertBy (rt:record-ref dictOrd0 (scm:string->symbol "compare")))))

  (scm:define fromFoldable
    (scm:lambda (dictFoldable0)
      (((rt:record-ref dictFoldable0 (scm:string->symbol "foldr")) Data.List.Lazy.Types.cons) Data.List.Lazy.Types.nil)))

  (scm:define foldrLazy
    (scm:lambda (dictLazy0)
      (scm:lambda (op1)
        (scm:lambda (z2)
          (scm:letrec ([go3 (scm:lambda (xs4)
            (scm:let ([v5 (Data.Lazy.force xs4)])
              (scm:cond
                [(Data.List.Lazy.Types.Cons? v5) (scm:let*
                  ([_6 (Data.List.Lazy.Types.Cons-value0 v5)]
                   [_7 (Data.List.Lazy.Types.Cons-value1 v5)])
                    ((rt:record-ref dictLazy0 (scm:string->symbol "defer")) (scm:lambda (v18)
                      ((op1 _6) (go3 _7)))))]
                [(Data.List.Lazy.Types.Nil? v5) z2]
                [scm:else (rt:fail)])))])
            go3)))))

  (scm:define foldM
    (scm:lambda (dictMonad0)
      (scm:lambda (f1)
        (scm:lambda (b2)
          (scm:lambda (xs3)
            (scm:let ([v4 (uncons xs3)])
              (scm:cond
                [(Data.Maybe.Nothing? v4) ((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined)) (scm:string->symbol "pure")) b2)]
                [(Data.Maybe.Just? v4) (scm:let ([_5 (rt:record-ref (Data.Maybe.Just-value0 v4) (scm:string->symbol "tail"))])
                  (((rt:record-ref ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined)) (scm:string->symbol "bind")) ((f1 b2) (rt:record-ref (Data.Maybe.Just-value0 v4) (scm:string->symbol "head")))) (scm:lambda (b$p6)
                    ((((foldM dictMonad0) f1) b$p6) _5))))]
                [scm:else (rt:fail)])))))))

  (scm:define findIndex
    (scm:lambda (fn0)
      (scm:letrec ([go1 (scm:lambda (n2)
        (scm:lambda (list3)
          (scm:let ([_4 (uncons list3)])
            (scm:cond
              [(Data.Maybe.Just? _4) (scm:cond
                [(fn0 (rt:record-ref (Data.Maybe.Just-value0 _4) (scm:string->symbol "head"))) (Data.Maybe.Just n2)]
                [scm:else ((go1 (scm:fx+ n2 1)) (rt:record-ref (Data.Maybe.Just-value0 _4) (scm:string->symbol "tail")))])]
              [(Data.Maybe.Nothing? _4) Data.Maybe.Nothing]
              [scm:else (rt:fail)]))))])
        (go1 0))))

  (scm:define findLastIndex
    (scm:lambda (fn0)
      (scm:lambda (xs1)
        (scm:let ([_2 ((findIndex fn0) (reverse xs1))])
          (scm:cond
            [(Data.Maybe.Just? _2) (Data.Maybe.Just (scm:fx- (scm:fx- (length xs1) 1) (Data.Maybe.Just-value0 _2)))]
            [scm:else Data.Maybe.Nothing])))))

  (scm:define filterM
    (scm:lambda (dictMonad0)
      (scm:let*
        ([_1 ((rt:record-ref dictMonad0 (scm:string->symbol "Applicative0")) (scm:quote undefined))]
         [_2 ((rt:record-ref dictMonad0 (scm:string->symbol "Bind1")) (scm:quote undefined))])
          (scm:lambda (p3)
            (scm:lambda (list4)
              (scm:let ([v5 (uncons list4)])
                (scm:cond
                  [(Data.Maybe.Nothing? v5) ((rt:record-ref _1 (scm:string->symbol "pure")) Data.List.Lazy.Types.nil)]
                  [(Data.Maybe.Just? v5) (scm:let*
                    ([_6 (rt:record-ref (Data.Maybe.Just-value0 v5) (scm:string->symbol "head"))]
                     [_7 (rt:record-ref (Data.Maybe.Just-value0 v5) (scm:string->symbol "tail"))])
                      (((rt:record-ref _2 (scm:string->symbol "bind")) (p3 _6)) (scm:lambda (b8)
                        (((rt:record-ref _2 (scm:string->symbol "bind")) (((filterM dictMonad0) p3) _7)) (scm:lambda (xs$p9)
                          ((rt:record-ref _1 (scm:string->symbol "pure")) (scm:cond
                            [b8 (Data.Lazy.defer (scm:lambda (v10)
                              (Data.List.Lazy.Types.Cons* _6 xs$p9)))]
                            [scm:else xs$p9])))))))]
                  [scm:else (rt:fail)])))))))

  (scm:define filter
    (scm:lambda (p0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:cond
          [(Data.List.Lazy.Types.Nil? v2) Data.List.Lazy.Types.Nil]
          [(Data.List.Lazy.Types.Cons? v2) (scm:cond
            [(p0 (Data.List.Lazy.Types.Cons-value0 v2)) (Data.List.Lazy.Types.Cons* (Data.List.Lazy.Types.Cons-value0 v2) ((filter p0) (Data.List.Lazy.Types.Cons-value1 v2)))]
            [scm:else (go1 (Data.Lazy.force (Data.List.Lazy.Types.Cons-value1 v2)))])]
          [scm:else (rt:fail)]))])
        (scm:lambda (x2)
          (Data.Lazy.defer (scm:lambda (v3)
            (go1 (Data.Lazy.force x2))))))))

  (scm:define intersectBy
    (scm:lambda (eq0)
      (scm:lambda (xs1)
        (scm:lambda (ys2)
          ((filter (scm:lambda (x3)
            ((any (eq0 x3)) ys2))) xs1)))))

  (scm:define intersect
    (scm:lambda (dictEq0)
      (intersectBy (rt:record-ref dictEq0 (scm:string->symbol "eq")))))

  (scm:define nubByEq
    (scm:lambda (eq0)
      ((rt:record-ref Data.Lazy.functorLazy (scm:string->symbol "map")) (scm:lambda (v1)
        (scm:cond
          [(Data.List.Lazy.Types.Nil? v1) Data.List.Lazy.Types.Nil]
          [(Data.List.Lazy.Types.Cons? v1) (scm:let ([_2 (Data.List.Lazy.Types.Cons-value0 v1)])
            (Data.List.Lazy.Types.Cons* _2 ((nubByEq eq0) ((filter (scm:lambda (y3)
              (scm:not ((eq0 _2) y3)))) (Data.List.Lazy.Types.Cons-value1 v1)))))]
          [scm:else (rt:fail)])))))

  (scm:define nubEq
    (scm:lambda (dictEq0)
      (nubByEq (rt:record-ref dictEq0 (scm:string->symbol "eq")))))

  (scm:define eqPattern
    (scm:lambda (dictEq0)
      (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x1)
        (scm:lambda (y2)
          ((((rt:record-ref Data.List.Lazy.Types.eq1List (scm:string->symbol "eq1")) dictEq0) x1) y2)))))))

  (scm:define ordPattern
    (scm:lambda (dictOrd0)
      (scm:let*
        ([_1 ((rt:record-ref dictOrd0 (scm:string->symbol "Eq0")) (scm:quote undefined))]
         [eqPattern12 (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x2)
          (scm:lambda (y3)
            ((((rt:record-ref Data.List.Lazy.Types.eq1List (scm:string->symbol "eq1")) _1) x2) y3)))))])
          (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x3)
            (scm:lambda (y4)
              (((rt:record-ref (Data.List.Lazy.Types.ordList dictOrd0) (scm:string->symbol "compare")) x3) y4)))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
            eqPattern12))))))

  (scm:define elemLastIndex
    (scm:lambda (dictEq0)
      (scm:lambda (x1)
        (findLastIndex (scm:lambda (v2)
          (((rt:record-ref dictEq0 (scm:string->symbol "eq")) v2) x1))))))

  (scm:define elemIndex
    (scm:lambda (dictEq0)
      (scm:lambda (x1)
        (findIndex (scm:lambda (v2)
          (((rt:record-ref dictEq0 (scm:string->symbol "eq")) v2) x1))))))

  (scm:define dropWhile
    (scm:lambda (p0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:cond
          [(scm:and (Data.List.Lazy.Types.Cons? v2) (p0 (Data.List.Lazy.Types.Cons-value0 v2))) (go1 (Data.Lazy.force (Data.List.Lazy.Types.Cons-value1 v2)))]
          [scm:else (Data.Lazy.defer (scm:lambda (v3)
            v2))]))])
        (scm:lambda (x2)
          (go1 (Data.Lazy.force x2))))))

  (scm:define drop
    (scm:lambda (n0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:lambda (v13)
          (scm:cond
            [(scm:fx=? v2 0) v13]
            [(Data.List.Lazy.Types.Nil? v13) Data.List.Lazy.Types.Nil]
            [(Data.List.Lazy.Types.Cons? v13) ((go1 (scm:fx- v2 1)) (Data.Lazy.force (Data.List.Lazy.Types.Cons-value1 v13)))]
            [scm:else (rt:fail)])))])
        ((rt:record-ref Data.Lazy.functorLazy (scm:string->symbol "map")) (go1 n0)))))

  (scm:define slice
    (scm:lambda (start0)
      (scm:lambda (end1)
        (scm:lambda (xs2)
          ((take (scm:fx- end1 start0)) ((drop start0) xs2))))))

  (scm:define deleteBy
    (scm:lambda (eq0)
      (scm:lambda (x1)
        (scm:lambda (xs2)
          (Data.Lazy.defer (scm:lambda (v3)
            (scm:let ([_4 (Data.Lazy.force xs2)])
              (scm:cond
                [(Data.List.Lazy.Types.Nil? _4) Data.List.Lazy.Types.Nil]
                [(Data.List.Lazy.Types.Cons? _4) (scm:cond
                  [((eq0 x1) (Data.List.Lazy.Types.Cons-value0 _4)) (Data.Lazy.force (Data.List.Lazy.Types.Cons-value1 _4))]
                  [scm:else (Data.List.Lazy.Types.Cons* (Data.List.Lazy.Types.Cons-value0 _4) (((deleteBy eq0) x1) (Data.List.Lazy.Types.Cons-value1 _4)))])]
                [scm:else (rt:fail)]))))))))

  (scm:define unionBy
    (scm:lambda (eq0)
      (scm:lambda (xs1)
        (scm:lambda (ys2)
          (((rt:record-ref Data.List.Lazy.Types.semigroupList (scm:string->symbol "append")) xs1) ((((rt:record-ref Data.List.Lazy.Types.foldableList (scm:string->symbol "foldl")) (scm:lambda (b3)
            (scm:lambda (a4)
              (((deleteBy eq0) a4) b3)))) ((nubByEq eq0) ys2)) xs1))))))

  (scm:define union
    (scm:lambda (dictEq0)
      (unionBy (rt:record-ref dictEq0 (scm:string->symbol "eq")))))

  (scm:define deleteAt
    (scm:lambda (n0)
      (scm:lambda (xs1)
        (Data.Lazy.defer (scm:lambda (v2)
          (scm:let ([_3 (Data.Lazy.force xs1)])
            (scm:cond
              [(Data.List.Lazy.Types.Nil? _3) Data.List.Lazy.Types.Nil]
              [(Data.List.Lazy.Types.Cons? _3) (scm:cond
                [(scm:fx=? n0 0) (Data.Lazy.force (Data.List.Lazy.Types.Cons-value1 _3))]
                [scm:else (Data.List.Lazy.Types.Cons* (Data.List.Lazy.Types.Cons-value0 _3) ((deleteAt (scm:fx- n0 1)) (Data.List.Lazy.Types.Cons-value1 _3)))])]
              [scm:else (rt:fail)])))))))

  (scm:define delete
    (scm:lambda (dictEq0)
      (deleteBy (rt:record-ref dictEq0 (scm:string->symbol "eq")))))

  (scm:define difference
    (scm:lambda (dictEq0)
      ((rt:record-ref Data.List.Lazy.Types.foldableList (scm:string->symbol "foldl")) (scm:lambda (b1)
        (scm:lambda (a2)
          (((deleteBy (rt:record-ref dictEq0 (scm:string->symbol "eq"))) a2) b1))))))

  (scm:define cycle
    (scm:lambda (xs0)
      (scm:letrec ([go1 (Data.Lazy.defer (scm:lambda (x2)
        (Data.Lazy.force (((rt:record-ref Data.List.Lazy.Types.semigroupList (scm:string->symbol "append")) xs0) go1))))])
        go1)))

  (scm:define concatMap
    (scm:lambda (b0)
      (scm:lambda (a1)
        (((rt:record-ref Data.List.Lazy.Types.bindList (scm:string->symbol "bind")) a1) b0))))

  (scm:define concat
    (scm:lambda (v0)
      (((rt:record-ref Data.List.Lazy.Types.bindList (scm:string->symbol "bind")) v0) identity)))

  (scm:define catMaybes
    (mapMaybe identity))

  (scm:define alterAt
    (scm:lambda (n0)
      (scm:lambda (f1)
        (scm:lambda (xs2)
          (Data.Lazy.defer (scm:lambda (v3)
            (scm:let ([_4 (Data.Lazy.force xs2)])
              (scm:cond
                [(Data.List.Lazy.Types.Nil? _4) Data.List.Lazy.Types.Nil]
                [(Data.List.Lazy.Types.Cons? _4) (scm:cond
                  [(scm:fx=? n0 0) (scm:let ([v25 (f1 (Data.List.Lazy.Types.Cons-value0 _4))])
                    (scm:cond
                      [(Data.Maybe.Nothing? v25) (Data.Lazy.force (Data.List.Lazy.Types.Cons-value1 _4))]
                      [(Data.Maybe.Just? v25) (Data.List.Lazy.Types.Cons* (Data.Maybe.Just-value0 v25) (Data.List.Lazy.Types.Cons-value1 _4))]
                      [scm:else (rt:fail)]))]
                  [scm:else (Data.List.Lazy.Types.Cons* (Data.List.Lazy.Types.Cons-value0 _4) (((alterAt (scm:fx- n0 1)) f1) (Data.List.Lazy.Types.Cons-value1 _4)))])]
                [scm:else (rt:fail)]))))))))

  (scm:define modifyAt
    (scm:lambda (n0)
      (scm:lambda (f1)
        ((alterAt n0) (scm:lambda (x2)
          (Data.Maybe.Just (f1 x2))))))))
