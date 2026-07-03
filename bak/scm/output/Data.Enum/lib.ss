#!r6rs
#!chezscheme
(library
  (Data.Enum lib)
  (export
    Cardinality
    boundedEnumBoolean
    boundedEnumChar
    boundedEnumOrdering
    boundedEnumUnit
    cardinality
    charToEnum
    defaultCardinality
    defaultFromEnum
    defaultPred
    defaultSucc
    defaultToEnum
    downFrom
    downFromIncluding
    enumBoolean
    enumChar
    enumEither
    enumFromThenTo
    enumFromTo
    enumInt
    enumMaybe
    enumOrdering
    enumTuple
    enumUnit
    eqCardinality
    fromCharCode
    fromEnum
    guard
    newtypeCardinality
    ordCardinality
    pred
    showCardinality
    succ
    toCharCode
    toEnum
    toEnumWithDefaults
    upFrom
    upFromIncluding)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Control.Alternative lib) Control.Alternative.)
    (prefix (Data.Bounded lib) Data.Bounded.)
    (prefix (Data.Either lib) Data.Either.)
    (prefix (Data.Eq lib) Data.Eq.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Ord lib) Data.Ord.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (prefix (Data.Show lib) Data.Show.)
    (prefix (Data.Tuple lib) Data.Tuple.)
    (prefix (Data.Unit lib) Data.Unit.)
    (Data.Enum foreign))

  (scm:define guard
    (Control.Alternative.guard Data.Maybe.alternativeMaybe))

  (scm:define Cardinality
    (scm:lambda (x0)
      x0))

  (scm:define toEnum
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "toEnum"))))

  (scm:define succ
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "succ"))))

  (scm:define upFromIncluding
    (scm:lambda (dictEnum0)
      (scm:lambda (dictUnfoldable11)
        ((rt:record-ref dictUnfoldable11 (scm:string->symbol "unfoldr1")) (scm:lambda (x2)
          (Data.Tuple.Tuple* x2 ((rt:record-ref dictEnum0 (scm:string->symbol "succ")) x2)))))))

  (scm:define showCardinality
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Cardinality ") (Data.Show.showIntImpl v0)) (rt:string->pstring ")"))))))

  (scm:define pred
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "pred"))))

  (scm:define ordCardinality
    Data.Ord.ordInt)

  (scm:define newtypeCardinality
    (scm:list (scm:cons (scm:string->symbol "Coercible0") (scm:lambda (_)
      (scm:quote undefined)))))

  (scm:define fromEnum
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "fromEnum"))))

  (scm:define toEnumWithDefaults
    (scm:lambda (dictBoundedEnum0)
      (scm:let ([bottom21 (rt:record-ref ((rt:record-ref dictBoundedEnum0 (scm:string->symbol "Bounded0")) (scm:quote undefined)) (scm:string->symbol "bottom"))])
        (scm:lambda (low2)
          (scm:lambda (high3)
            (scm:lambda (x4)
              (scm:let ([v5 ((rt:record-ref dictBoundedEnum0 (scm:string->symbol "toEnum")) x4)])
                (scm:cond
                  [(Data.Maybe.Just? v5) (Data.Maybe.Just-value0 v5)]
                  [(Data.Maybe.Nothing? v5) (scm:cond
                    [(scm:fx<? x4 ((rt:record-ref dictBoundedEnum0 (scm:string->symbol "fromEnum")) bottom21)) low2]
                    [scm:else high3])]
                  [scm:else (rt:fail)]))))))))

  (scm:define eqCardinality
    Data.Eq.eqInt)

  (scm:define enumUnit
    (scm:list (scm:cons (scm:string->symbol "succ") (scm:lambda (v0)
      Data.Maybe.Nothing)) (scm:cons (scm:string->symbol "pred") (scm:lambda (v0)
      Data.Maybe.Nothing)) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordUnit))))

  (scm:define enumTuple
    (scm:lambda (dictEnum0)
      (scm:let*
        ([_1 ((rt:record-ref dictEnum0 (scm:string->symbol "Ord0")) (scm:quote undefined))]
         [_2 ((rt:record-ref _1 (scm:string->symbol "Eq0")) (scm:quote undefined))])
          (scm:lambda (dictBoundedEnum3)
            (scm:let*
              ([Bounded04 ((rt:record-ref dictBoundedEnum3 (scm:string->symbol "Bounded0")) (scm:quote undefined))]
               [bottom25 (rt:record-ref Bounded04 (scm:string->symbol "bottom"))]
               [Enum16 ((rt:record-ref dictBoundedEnum3 (scm:string->symbol "Enum1")) (scm:quote undefined))]
               [top27 (rt:record-ref Bounded04 (scm:string->symbol "top"))]
               [_8 ((rt:record-ref Enum16 (scm:string->symbol "Ord0")) (scm:quote undefined))]
               [_9 ((rt:record-ref _8 (scm:string->symbol "Eq0")) (scm:quote undefined))]
               [ordTuple110 (scm:let ([eqTuple210 (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x10)
                (scm:lambda (y11)
                  (scm:and (((rt:record-ref _2 (scm:string->symbol "eq")) (Data.Tuple.Tuple-value0 x10)) (Data.Tuple.Tuple-value0 y11)) (((rt:record-ref _9 (scm:string->symbol "eq")) (Data.Tuple.Tuple-value1 x10)) (Data.Tuple.Tuple-value1 y11)))))))])
                (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x11)
                  (scm:lambda (y12)
                    (scm:let ([v13 (((rt:record-ref _1 (scm:string->symbol "compare")) (Data.Tuple.Tuple-value0 x11)) (Data.Tuple.Tuple-value0 y12))])
                      (scm:cond
                        [(Data.Ordering.LT? v13) Data.Ordering.LT]
                        [(Data.Ordering.GT? v13) Data.Ordering.GT]
                        [scm:else (((rt:record-ref _8 (scm:string->symbol "compare")) (Data.Tuple.Tuple-value1 x11)) (Data.Tuple.Tuple-value1 y12))]))))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
                  eqTuple210))))])
                (scm:list (scm:cons (scm:string->symbol "succ") (scm:lambda (v11)
                  (scm:let*
                    ([_12 ((rt:record-ref dictEnum0 (scm:string->symbol "succ")) (Data.Tuple.Tuple-value0 v11))]
                     [_13 (scm:cond
                      [(Data.Maybe.Just? _12) (Data.Maybe.Just (Data.Tuple.Tuple* (Data.Maybe.Just-value0 _12) bottom25))]
                      [scm:else Data.Maybe.Nothing])]
                     [_14 (Data.Tuple.Tuple (Data.Tuple.Tuple-value0 v11))]
                     [_15 ((rt:record-ref Enum16 (scm:string->symbol "succ")) (Data.Tuple.Tuple-value1 v11))])
                      (scm:cond
                        [(Data.Maybe.Nothing? _15) _13]
                        [(Data.Maybe.Just? _15) (Data.Maybe.Just (_14 (Data.Maybe.Just-value0 _15)))]
                        [scm:else (rt:fail)])))) (scm:cons (scm:string->symbol "pred") (scm:lambda (v11)
                  (scm:let*
                    ([_12 ((rt:record-ref dictEnum0 (scm:string->symbol "pred")) (Data.Tuple.Tuple-value0 v11))]
                     [_13 (scm:cond
                      [(Data.Maybe.Just? _12) (Data.Maybe.Just (Data.Tuple.Tuple* (Data.Maybe.Just-value0 _12) top27))]
                      [scm:else Data.Maybe.Nothing])]
                     [_14 (Data.Tuple.Tuple (Data.Tuple.Tuple-value0 v11))]
                     [_15 ((rt:record-ref Enum16 (scm:string->symbol "pred")) (Data.Tuple.Tuple-value1 v11))])
                      (scm:cond
                        [(Data.Maybe.Nothing? _15) _13]
                        [(Data.Maybe.Just? _15) (Data.Maybe.Just (_14 (Data.Maybe.Just-value0 _15)))]
                        [scm:else (rt:fail)])))) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
                  ordTuple110))))))))

  (scm:define enumOrdering
    (scm:list (scm:cons (scm:string->symbol "succ") (scm:lambda (v0)
      (scm:cond
        [(Data.Ordering.LT? v0) (Data.Maybe.Just Data.Ordering.EQ)]
        [(Data.Ordering.EQ? v0) (Data.Maybe.Just Data.Ordering.GT)]
        [(Data.Ordering.GT? v0) Data.Maybe.Nothing]
        [scm:else (rt:fail)]))) (scm:cons (scm:string->symbol "pred") (scm:lambda (v0)
      (scm:cond
        [(Data.Ordering.LT? v0) Data.Maybe.Nothing]
        [(Data.Ordering.EQ? v0) (Data.Maybe.Just Data.Ordering.LT)]
        [(Data.Ordering.GT? v0) (Data.Maybe.Just Data.Ordering.EQ)]
        [scm:else (rt:fail)]))) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordOrdering))))

  (scm:define enumMaybe
    (scm:lambda (dictBoundedEnum0)
      (scm:let*
        ([bottom21 (rt:record-ref ((rt:record-ref dictBoundedEnum0 (scm:string->symbol "Bounded0")) (scm:quote undefined)) (scm:string->symbol "bottom"))]
         [Enum12 ((rt:record-ref dictBoundedEnum0 (scm:string->symbol "Enum1")) (scm:quote undefined))]
         [_3 ((rt:record-ref Enum12 (scm:string->symbol "Ord0")) (scm:quote undefined))]
         [_4 ((rt:record-ref _3 (scm:string->symbol "Eq0")) (scm:quote undefined))]
         [ordMaybe5 (scm:let ([eqMaybe15 (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x5)
          (scm:lambda (y6)
            (scm:cond
              [(Data.Maybe.Nothing? x5) (Data.Maybe.Nothing? y6)]
              [scm:else (scm:and (Data.Maybe.Just? x5) (scm:and (Data.Maybe.Just? y6) (((rt:record-ref _4 (scm:string->symbol "eq")) (Data.Maybe.Just-value0 x5)) (Data.Maybe.Just-value0 y6))))])))))])
          (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x6)
            (scm:lambda (y7)
              (scm:cond
                [(Data.Maybe.Nothing? x6) (scm:cond
                  [(Data.Maybe.Nothing? y7) Data.Ordering.EQ]
                  [scm:else Data.Ordering.LT])]
                [(Data.Maybe.Nothing? y7) Data.Ordering.GT]
                [(scm:and (Data.Maybe.Just? x6) (Data.Maybe.Just? y7)) (((rt:record-ref _3 (scm:string->symbol "compare")) (Data.Maybe.Just-value0 x6)) (Data.Maybe.Just-value0 y7))]
                [scm:else (rt:fail)])))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
            eqMaybe15))))])
          (scm:list (scm:cons (scm:string->symbol "succ") (scm:lambda (v6)
            (scm:cond
              [(Data.Maybe.Nothing? v6) (Data.Maybe.Just (Data.Maybe.Just bottom21))]
              [(Data.Maybe.Just? v6) (scm:let ([_7 ((rt:record-ref Enum12 (scm:string->symbol "succ")) (Data.Maybe.Just-value0 v6))])
                (scm:cond
                  [(Data.Maybe.Just? _7) (Data.Maybe.Just (Data.Maybe.Just (Data.Maybe.Just-value0 _7)))]
                  [scm:else Data.Maybe.Nothing]))]
              [scm:else (rt:fail)]))) (scm:cons (scm:string->symbol "pred") (scm:lambda (v6)
            (scm:cond
              [(Data.Maybe.Nothing? v6) Data.Maybe.Nothing]
              [(Data.Maybe.Just? v6) (Data.Maybe.Just ((rt:record-ref Enum12 (scm:string->symbol "pred")) (Data.Maybe.Just-value0 v6)))]
              [scm:else (rt:fail)]))) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
            ordMaybe5))))))

  (scm:define enumInt
    (scm:list (scm:cons (scm:string->symbol "succ") (scm:lambda (n0)
      (scm:cond
        [(scm:fx<? n0 Data.Bounded.topInt) (Data.Maybe.Just (scm:fx+ n0 1))]
        [scm:else Data.Maybe.Nothing]))) (scm:cons (scm:string->symbol "pred") (scm:lambda (n0)
      (scm:cond
        [(scm:fx>? n0 Data.Bounded.bottomInt) (Data.Maybe.Just (scm:fx- n0 1))]
        [scm:else Data.Maybe.Nothing]))) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordInt))))

  (scm:define enumFromTo
    (scm:lambda (dictEnum0)
      (scm:let ([Ord01 ((rt:record-ref dictEnum0 (scm:string->symbol "Ord0")) (scm:quote undefined))])
        (scm:lambda (dictUnfoldable12)
          (scm:lambda (v3)
            (scm:lambda (v14)
              (scm:cond
                [(((rt:record-ref ((rt:record-ref Ord01 (scm:string->symbol "Eq0")) (scm:quote undefined)) (scm:string->symbol "eq")) v3) v14) (((rt:record-ref dictUnfoldable12 (scm:string->symbol "unfoldr1")) (scm:lambda (i5)
                  (scm:cond
                    [(scm:fx<=? i5 0) (Data.Tuple.Tuple* v3 Data.Maybe.Nothing)]
                    [scm:else (Data.Tuple.Tuple* v3 (Data.Maybe.Just (scm:fx- i5 1)))]))) 0)]
                [(Data.Ordering.LT? (((rt:record-ref Ord01 (scm:string->symbol "compare")) v3) v14)) (((rt:record-ref dictUnfoldable12 (scm:string->symbol "unfoldr1")) (scm:lambda (a5)
                  (Data.Tuple.Tuple* a5 (scm:let ([_6 ((rt:record-ref dictEnum0 (scm:string->symbol "succ")) a5)])
                    (scm:cond
                      [(Data.Maybe.Just? _6) (scm:cond
                        [(Data.Maybe.Just? (guard (scm:not (Data.Ordering.GT? (((rt:record-ref Ord01 (scm:string->symbol "compare")) (Data.Maybe.Just-value0 _6)) v14))))) (Data.Maybe.Just (Data.Maybe.Just-value0 _6))]
                        [scm:else Data.Maybe.Nothing])]
                      [(Data.Maybe.Nothing? _6) Data.Maybe.Nothing]
                      [scm:else (rt:fail)]))))) v3)]
                [scm:else (((rt:record-ref dictUnfoldable12 (scm:string->symbol "unfoldr1")) (scm:lambda (a5)
                  (Data.Tuple.Tuple* a5 (scm:let ([_6 ((rt:record-ref dictEnum0 (scm:string->symbol "pred")) a5)])
                    (scm:cond
                      [(Data.Maybe.Just? _6) (scm:cond
                        [(Data.Maybe.Just? (guard (scm:not (Data.Ordering.LT? (((rt:record-ref Ord01 (scm:string->symbol "compare")) (Data.Maybe.Just-value0 _6)) v14))))) (Data.Maybe.Just (Data.Maybe.Just-value0 _6))]
                        [scm:else Data.Maybe.Nothing])]
                      [(Data.Maybe.Nothing? _6) Data.Maybe.Nothing]
                      [scm:else (rt:fail)]))))) v3)])))))))

  (scm:define enumFromThenTo
    (scm:lambda (dictUnfoldable0)
      (scm:lambda (dictFunctor1)
        (scm:lambda (dictBoundedEnum2)
          (scm:lambda (a3)
            (scm:lambda (b4)
              (scm:lambda (c5)
                (scm:let ([a$p6 ((rt:record-ref dictBoundedEnum2 (scm:string->symbol "fromEnum")) a3)])
                  (((rt:record-ref dictFunctor1 (scm:string->symbol "map")) (scm:lambda (x7)
                    (scm:let ([_8 ((rt:record-ref dictBoundedEnum2 (scm:string->symbol "toEnum")) x7)])
                      (scm:cond
                        [(Data.Maybe.Just? _8) (Data.Maybe.Just-value0 _8)]
                        [scm:else (rt:fail)])))) (((rt:record-ref dictUnfoldable0 (scm:string->symbol "unfoldr")) (scm:let*
                    ([_7 (scm:fx- ((rt:record-ref dictBoundedEnum2 (scm:string->symbol "fromEnum")) b4) a$p6)]
                     [_8 ((rt:record-ref dictBoundedEnum2 (scm:string->symbol "fromEnum")) c5)])
                      (scm:lambda (e9)
                        (scm:cond
                          [(scm:fx<=? e9 _8) (Data.Maybe.Just (Data.Tuple.Tuple* e9 (scm:fx+ e9 _7)))]
                          [scm:else Data.Maybe.Nothing])))) a$p6))))))))))

  (scm:define enumEither
    (scm:lambda (dictBoundedEnum0)
      (scm:let*
        ([Enum11 ((rt:record-ref dictBoundedEnum0 (scm:string->symbol "Enum1")) (scm:quote undefined))]
         [top22 (rt:record-ref ((rt:record-ref dictBoundedEnum0 (scm:string->symbol "Bounded0")) (scm:quote undefined)) (scm:string->symbol "top"))]
         [ordEither3 (Data.Either.ordEither ((rt:record-ref Enum11 (scm:string->symbol "Ord0")) (scm:quote undefined)))])
          (scm:lambda (dictBoundedEnum14)
            (scm:let*
              ([bottom25 (rt:record-ref ((rt:record-ref dictBoundedEnum14 (scm:string->symbol "Bounded0")) (scm:quote undefined)) (scm:string->symbol "bottom"))]
               [Enum116 ((rt:record-ref dictBoundedEnum14 (scm:string->symbol "Enum1")) (scm:quote undefined))]
               [ordEither17 (ordEither3 ((rt:record-ref Enum116 (scm:string->symbol "Ord0")) (scm:quote undefined)))])
                (scm:list (scm:cons (scm:string->symbol "succ") (scm:lambda (v8)
                  (scm:cond
                    [(Data.Either.Left? v8) (scm:let ([_9 ((rt:record-ref Enum11 (scm:string->symbol "succ")) (Data.Either.Left-value0 v8))])
                      (scm:cond
                        [(Data.Maybe.Nothing? _9) (Data.Maybe.Just (Data.Either.Right bottom25))]
                        [(Data.Maybe.Just? _9) (Data.Maybe.Just (Data.Either.Left (Data.Maybe.Just-value0 _9)))]
                        [scm:else (rt:fail)]))]
                    [(Data.Either.Right? v8) (scm:let ([_9 ((rt:record-ref Enum116 (scm:string->symbol "succ")) (Data.Either.Right-value0 v8))])
                      (scm:cond
                        [(Data.Maybe.Nothing? _9) Data.Maybe.Nothing]
                        [(Data.Maybe.Just? _9) (Data.Maybe.Just (Data.Either.Right (Data.Maybe.Just-value0 _9)))]
                        [scm:else (rt:fail)]))]
                    [scm:else (rt:fail)]))) (scm:cons (scm:string->symbol "pred") (scm:lambda (v8)
                  (scm:cond
                    [(Data.Either.Left? v8) (scm:let ([_9 ((rt:record-ref Enum11 (scm:string->symbol "pred")) (Data.Either.Left-value0 v8))])
                      (scm:cond
                        [(Data.Maybe.Nothing? _9) Data.Maybe.Nothing]
                        [(Data.Maybe.Just? _9) (Data.Maybe.Just (Data.Either.Left (Data.Maybe.Just-value0 _9)))]
                        [scm:else (rt:fail)]))]
                    [(Data.Either.Right? v8) (scm:let ([_9 ((rt:record-ref Enum116 (scm:string->symbol "pred")) (Data.Either.Right-value0 v8))])
                      (scm:cond
                        [(Data.Maybe.Nothing? _9) (Data.Maybe.Just (Data.Either.Left top22))]
                        [(Data.Maybe.Just? _9) (Data.Maybe.Just (Data.Either.Right (Data.Maybe.Just-value0 _9)))]
                        [scm:else (rt:fail)]))]
                    [scm:else (rt:fail)]))) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
                  ordEither17))))))))

  (scm:define enumBoolean
    (scm:list (scm:cons (scm:string->symbol "succ") (scm:lambda (v0)
      (scm:cond
        [(scm:not v0) (Data.Maybe.Just #t)]
        [scm:else Data.Maybe.Nothing]))) (scm:cons (scm:string->symbol "pred") (scm:lambda (v0)
      (scm:cond
        [v0 (Data.Maybe.Just #f)]
        [scm:else Data.Maybe.Nothing]))) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordBoolean))))

  (scm:define downFromIncluding
    (scm:lambda (dictEnum0)
      (scm:lambda (dictUnfoldable11)
        ((rt:record-ref dictUnfoldable11 (scm:string->symbol "unfoldr1")) (scm:lambda (x2)
          (Data.Tuple.Tuple* x2 ((rt:record-ref dictEnum0 (scm:string->symbol "pred")) x2)))))))

  (scm:define downFrom
    (scm:lambda (dictEnum0)
      (scm:lambda (dictUnfoldable1)
        ((rt:record-ref dictUnfoldable1 (scm:string->symbol "unfoldr")) (scm:lambda (x2)
          (scm:let ([_3 ((rt:record-ref dictEnum0 (scm:string->symbol "pred")) x2)])
            (scm:cond
              [(Data.Maybe.Just? _3) (Data.Maybe.Just (Data.Tuple.Tuple* (Data.Maybe.Just-value0 _3) (Data.Maybe.Just-value0 _3)))]
              [scm:else Data.Maybe.Nothing])))))))

  (scm:define upFrom
    (scm:lambda (dictEnum0)
      (scm:lambda (dictUnfoldable1)
        ((rt:record-ref dictUnfoldable1 (scm:string->symbol "unfoldr")) (scm:lambda (x2)
          (scm:let ([_3 ((rt:record-ref dictEnum0 (scm:string->symbol "succ")) x2)])
            (scm:cond
              [(Data.Maybe.Just? _3) (Data.Maybe.Just (Data.Tuple.Tuple* (Data.Maybe.Just-value0 _3) (Data.Maybe.Just-value0 _3)))]
              [scm:else Data.Maybe.Nothing])))))))

  (scm:define defaultToEnum
    (scm:lambda (dictBounded0)
      (scm:let ([bottom21 (rt:record-ref dictBounded0 (scm:string->symbol "bottom"))])
        (scm:lambda (dictEnum2)
          (scm:lambda (i$p3)
            (scm:letrec ([go4 (scm:lambda (i5)
              (scm:lambda (x6)
                (scm:cond
                  [(scm:fx=? i5 0) (Data.Maybe.Just x6)]
                  [scm:else (scm:let ([v7 ((rt:record-ref dictEnum2 (scm:string->symbol "succ")) x6)])
                    (scm:cond
                      [(Data.Maybe.Just? v7) ((go4 (scm:fx- i5 1)) (Data.Maybe.Just-value0 v7))]
                      [(Data.Maybe.Nothing? v7) Data.Maybe.Nothing]
                      [scm:else (rt:fail)]))])))])
              (scm:cond
                [(scm:fx<? i$p3 0) Data.Maybe.Nothing]
                [scm:else ((go4 i$p3) bottom21)])))))))

  (scm:define defaultSucc
    (scm:lambda (toEnum$p0)
      (scm:lambda (fromEnum$p1)
        (scm:lambda (a2)
          (toEnum$p0 (scm:fx+ (fromEnum$p1 a2) 1))))))

  (scm:define defaultPred
    (scm:lambda (toEnum$p0)
      (scm:lambda (fromEnum$p1)
        (scm:lambda (a2)
          (toEnum$p0 (scm:fx- (fromEnum$p1 a2) 1))))))

  (scm:define defaultFromEnum
    (scm:lambda (dictEnum0)
      (scm:letrec ([go1 (scm:lambda (i2)
        (scm:lambda (x3)
          (scm:let ([v4 ((rt:record-ref dictEnum0 (scm:string->symbol "pred")) x3)])
            (scm:cond
              [(Data.Maybe.Just? v4) ((go1 (scm:fx+ i2 1)) (Data.Maybe.Just-value0 v4))]
              [(Data.Maybe.Nothing? v4) i2]
              [scm:else (rt:fail)]))))])
        (go1 0))))

  (scm:define defaultCardinality
    (scm:lambda (dictBounded0)
      (scm:let ([bottom21 (rt:record-ref dictBounded0 (scm:string->symbol "bottom"))])
        (scm:lambda (dictEnum2)
          (scm:letrec ([go3 (scm:lambda (i4)
            (scm:lambda (x5)
              (scm:let ([v6 ((rt:record-ref dictEnum2 (scm:string->symbol "succ")) x5)])
                (scm:cond
                  [(Data.Maybe.Just? v6) ((go3 (scm:fx+ i4 1)) (Data.Maybe.Just-value0 v6))]
                  [(Data.Maybe.Nothing? v6) i4]
                  [scm:else (rt:fail)]))))])
            ((go3 1) bottom21))))))

  (scm:define charToEnum
    (scm:lambda (v0)
      (scm:cond
        [(scm:and (scm:fx>=? v0 (toCharCode Data.Bounded.bottomChar)) (scm:fx<=? v0 (toCharCode Data.Bounded.topChar))) (Data.Maybe.Just (fromCharCode v0))]
        [scm:else Data.Maybe.Nothing])))

  (scm:define enumChar
    (scm:list (scm:cons (scm:string->symbol "succ") (scm:lambda (a0)
      (charToEnum (scm:fx+ (toCharCode a0) 1)))) (scm:cons (scm:string->symbol "pred") (scm:lambda (a0)
      (charToEnum (scm:fx- (toCharCode a0) 1)))) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      Data.Ord.ordChar))))

  (scm:define cardinality
    (scm:lambda (dict0)
      (rt:record-ref dict0 (scm:string->symbol "cardinality"))))

  (scm:define boundedEnumUnit
    (scm:list (scm:cons (scm:string->symbol "cardinality") 1) (scm:cons (scm:string->symbol "toEnum") (scm:lambda (v0)
      (scm:cond
        [(scm:fx=? v0 0) (Data.Maybe.Just Data.Unit.unit)]
        [scm:else Data.Maybe.Nothing]))) (scm:cons (scm:string->symbol "fromEnum") (scm:lambda (v0)
      0)) (scm:cons (scm:string->symbol "Bounded0") (scm:lambda (_)
      Data.Bounded.boundedUnit)) (scm:cons (scm:string->symbol "Enum1") (scm:lambda (_)
      enumUnit))))

  (scm:define boundedEnumOrdering
    (scm:list (scm:cons (scm:string->symbol "cardinality") 3) (scm:cons (scm:string->symbol "toEnum") (scm:lambda (v0)
      (scm:cond
        [(scm:fx=? v0 0) (Data.Maybe.Just Data.Ordering.LT)]
        [(scm:fx=? v0 1) (Data.Maybe.Just Data.Ordering.EQ)]
        [(scm:fx=? v0 2) (Data.Maybe.Just Data.Ordering.GT)]
        [scm:else Data.Maybe.Nothing]))) (scm:cons (scm:string->symbol "fromEnum") (scm:lambda (v0)
      (scm:cond
        [(Data.Ordering.LT? v0) 0]
        [(Data.Ordering.EQ? v0) 1]
        [(Data.Ordering.GT? v0) 2]
        [scm:else (rt:fail)]))) (scm:cons (scm:string->symbol "Bounded0") (scm:lambda (_)
      Data.Bounded.boundedOrdering)) (scm:cons (scm:string->symbol "Enum1") (scm:lambda (_)
      enumOrdering))))

  (scm:define boundedEnumChar
    (scm:list (scm:cons (scm:string->symbol "cardinality") (scm:fx- (toCharCode Data.Bounded.topChar) (toCharCode Data.Bounded.bottomChar))) (scm:cons (scm:string->symbol "toEnum") charToEnum) (scm:cons (scm:string->symbol "fromEnum") toCharCode) (scm:cons (scm:string->symbol "Bounded0") (scm:lambda (_)
      Data.Bounded.boundedChar)) (scm:cons (scm:string->symbol "Enum1") (scm:lambda (_)
      enumChar))))

  (scm:define boundedEnumBoolean
    (scm:list (scm:cons (scm:string->symbol "cardinality") 2) (scm:cons (scm:string->symbol "toEnum") (scm:lambda (v0)
      (scm:cond
        [(scm:fx=? v0 0) (Data.Maybe.Just #f)]
        [(scm:fx=? v0 1) (Data.Maybe.Just #t)]
        [scm:else Data.Maybe.Nothing]))) (scm:cons (scm:string->symbol "fromEnum") (scm:lambda (v0)
      (scm:cond
        [(scm:not v0) 0]
        [v0 1]
        [scm:else (rt:fail)]))) (scm:cons (scm:string->symbol "Bounded0") (scm:lambda (_)
      Data.Bounded.boundedBoolean)) (scm:cons (scm:string->symbol "Enum1") (scm:lambda (_)
      enumBoolean)))))
