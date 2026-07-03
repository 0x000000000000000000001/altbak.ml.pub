#!r6rs
#!chezscheme
(library
  (Data.List.Lazy.NonEmpty lib)
  (export
    appendFoldable
    concatMap
    cons
    fromFoldable
    fromList
    head
    init
    iterate
    last
    length
    repeat
    singleton
    tail
    toList
    toUnfoldable
    uncons)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Lazy lib) Data.Lazy.)
    (prefix (Data.List.Lazy lib) Data.List.Lazy.)
    (prefix (Data.List.Lazy.Types lib) Data.List.Lazy.Types.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.NonEmpty lib) Data.NonEmpty.)
    (prefix (Data.Tuple lib) Data.Tuple.))

  (scm:define uncons
    (scm:lambda (v0)
      (scm:let ([v11 (Data.Lazy.force v0)])
        (scm:list (scm:cons (scm:string->symbol "head") (Data.NonEmpty.NonEmpty-value0 v11)) (scm:cons (scm:string->symbol "tail") (Data.NonEmpty.NonEmpty-value1 v11))))))

  (scm:define toList
    (scm:lambda (v0)
      (scm:let*
        ([v11 (Data.Lazy.force v0)]
         [_2 (Data.NonEmpty.NonEmpty-value0 v11)]
         [_3 (Data.NonEmpty.NonEmpty-value1 v11)])
          (Data.Lazy.defer (scm:lambda (v4)
            (Data.List.Lazy.Types.Cons* _2 _3))))))

  (scm:define toUnfoldable
    (scm:lambda (dictUnfoldable0)
      (scm:let ([_1 ((rt:record-ref dictUnfoldable0 (scm:string->symbol "unfoldr")) (scm:lambda (xs1)
        (scm:let ([_2 (Data.List.Lazy.uncons xs1)])
          (scm:cond
            [(Data.Maybe.Just? _2) (Data.Maybe.Just (Data.Tuple.Tuple* (rt:record-ref (Data.Maybe.Just-value0 _2) (scm:string->symbol "head")) (rt:record-ref (Data.Maybe.Just-value0 _2) (scm:string->symbol "tail"))))]
            [scm:else Data.Maybe.Nothing]))))])
        (scm:lambda (x2)
          (_1 (toList x2))))))

  (scm:define tail
    (scm:lambda (v0)
      (Data.NonEmpty.NonEmpty-value1 (Data.Lazy.force v0))))

  (scm:define singleton
    (rt:record-ref Data.List.Lazy.Types.applicativeNonEmptyList (scm:string->symbol "pure")))

  (scm:define repeat
    (scm:lambda (x0)
      (Data.Lazy.defer (scm:lambda (v1)
        (Data.NonEmpty.NonEmpty* x0 (Data.List.Lazy.repeat x0))))))

  (scm:define length
    (scm:lambda (v0)
      (scm:fx+ 1 (Data.List.Lazy.length (Data.NonEmpty.NonEmpty-value1 (Data.Lazy.force v0))))))

  (scm:define last
    (scm:lambda (v0)
      (scm:let*
        ([v11 (Data.Lazy.force v0)]
         [_2 (Data.List.Lazy.last (Data.NonEmpty.NonEmpty-value1 v11))])
          (scm:cond
            [(Data.Maybe.Nothing? _2) (Data.NonEmpty.NonEmpty-value0 v11)]
            [(Data.Maybe.Just? _2) (Data.Maybe.Just-value0 _2)]
            [scm:else (rt:fail)]))))

  (scm:define iterate
    (scm:lambda (f0)
      (scm:lambda (x1)
        (Data.Lazy.defer (scm:lambda (v2)
          (Data.NonEmpty.NonEmpty* x1 ((Data.List.Lazy.iterate f0) (f0 x1))))))))

  (scm:define init
    (scm:lambda (v0)
      (scm:let*
        ([v11 (Data.Lazy.force v0)]
         [_2 (Data.List.Lazy.init (Data.NonEmpty.NonEmpty-value1 v11))])
          (scm:cond
            [(Data.Maybe.Nothing? _2) Data.List.Lazy.Types.nil]
            [(Data.Maybe.Just? _2) (scm:let ([_3 (Data.Maybe.Just-value0 _2)])
              (Data.Lazy.defer (scm:lambda (v4)
                (Data.List.Lazy.Types.Cons* (Data.NonEmpty.NonEmpty-value0 v11) _3))))]
            [scm:else (rt:fail)]))))

  (scm:define head
    (scm:lambda (v0)
      (Data.NonEmpty.NonEmpty-value0 (Data.Lazy.force v0))))

  (scm:define fromList
    (scm:lambda (l0)
      (scm:let ([v1 (Data.Lazy.force l0)])
        (scm:cond
          [(Data.List.Lazy.Types.Nil? v1) Data.Maybe.Nothing]
          [(Data.List.Lazy.Types.Cons? v1) (scm:let*
            ([_2 (Data.List.Lazy.Types.Cons-value0 v1)]
             [_3 (Data.List.Lazy.Types.Cons-value1 v1)])
              (Data.Maybe.Just (Data.Lazy.defer (scm:lambda (v14)
                (Data.NonEmpty.NonEmpty* _2 _3)))))]
          [scm:else (rt:fail)]))))

  (scm:define fromFoldable
    (scm:lambda (dictFoldable0)
      (scm:let ([_1 (((rt:record-ref dictFoldable0 (scm:string->symbol "foldr")) Data.List.Lazy.Types.cons) Data.List.Lazy.Types.nil)])
        (scm:lambda (x2)
          (fromList (_1 x2))))))

  (scm:define cons
    (scm:lambda (y0)
      (scm:lambda (v1)
        (Data.Lazy.defer (scm:lambda (v12)
          (scm:let*
            ([v23 (Data.Lazy.force v1)]
             [_4 (Data.NonEmpty.NonEmpty-value0 v23)]
             [_5 (Data.NonEmpty.NonEmpty-value1 v23)])
              (Data.NonEmpty.NonEmpty* y0 (Data.Lazy.defer (scm:lambda (v6)
                (Data.List.Lazy.Types.Cons* _4 _5))))))))))

  (scm:define concatMap
    (scm:lambda (b0)
      (scm:lambda (a1)
        (((rt:record-ref Data.List.Lazy.Types.bindNonEmptyList (scm:string->symbol "bind")) a1) b0))))

  (scm:define appendFoldable
    (scm:lambda (dictFoldable0)
      (scm:let ([fromFoldable11 (((rt:record-ref dictFoldable0 (scm:string->symbol "foldr")) Data.List.Lazy.Types.cons) Data.List.Lazy.Types.nil)])
        (scm:lambda (nel2)
          (scm:lambda (ys3)
            (Data.Lazy.defer (scm:lambda (v4)
              (Data.NonEmpty.NonEmpty* (Data.NonEmpty.NonEmpty-value0 (Data.Lazy.force nel2)) (((rt:record-ref Data.List.Lazy.Types.semigroupList (scm:string->symbol "append")) (Data.NonEmpty.NonEmpty-value1 (Data.Lazy.force nel2))) (fromFoldable11 ys3)))))))))))
