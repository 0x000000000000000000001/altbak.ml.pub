#!r6rs
#!chezscheme
(library
  (Data.List.Internal lib)
  (export
    KickUp
    KickUp*
    KickUp-value0
    KickUp-value1
    KickUp-value2
    KickUp?
    Leaf
    Leaf?
    Three
    Three*
    Three-value0
    Three-value1
    Three-value2
    Three-value3
    Three-value4
    Three?
    ThreeLeft
    ThreeLeft*
    ThreeLeft-value0
    ThreeLeft-value1
    ThreeLeft-value2
    ThreeLeft-value3
    ThreeLeft?
    ThreeMiddle
    ThreeMiddle*
    ThreeMiddle-value0
    ThreeMiddle-value1
    ThreeMiddle-value2
    ThreeMiddle-value3
    ThreeMiddle?
    ThreeRight
    ThreeRight*
    ThreeRight-value0
    ThreeRight-value1
    ThreeRight-value2
    ThreeRight-value3
    ThreeRight?
    Two
    Two*
    Two-value0
    Two-value1
    Two-value2
    Two?
    TwoLeft
    TwoLeft*
    TwoLeft-value0
    TwoLeft-value1
    TwoLeft?
    TwoRight
    TwoRight*
    TwoRight-value0
    TwoRight-value1
    TwoRight?
    emptySet
    fromZipper
    insertAndLookupBy)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.List.Types lib) Data.List.Types.)
    (prefix (Data.Ordering lib) Data.Ordering.))

  (scm:define Leaf
    (scm:quote Leaf))

  (scm:define Leaf?
    (scm:lambda (v)
      (scm:eq? (scm:quote Leaf) v)))

  (scm:define-record-type (Two$ Two* Two?)
    (scm:fields (scm:immutable value0 Two-value0) (scm:immutable value1 Two-value1) (scm:immutable value2 Two-value2)))

  (scm:define Two
    (scm:lambda (value0)
      (scm:lambda (value1)
        (scm:lambda (value2)
          (Two* value0 value1 value2)))))

  (scm:define-record-type (Three$ Three* Three?)
    (scm:fields (scm:immutable value0 Three-value0) (scm:immutable value1 Three-value1) (scm:immutable value2 Three-value2) (scm:immutable value3 Three-value3) (scm:immutable value4 Three-value4)))

  (scm:define Three
    (scm:lambda (value0)
      (scm:lambda (value1)
        (scm:lambda (value2)
          (scm:lambda (value3)
            (scm:lambda (value4)
              (Three* value0 value1 value2 value3 value4)))))))

  (scm:define-record-type (TwoLeft$ TwoLeft* TwoLeft?)
    (scm:fields (scm:immutable value0 TwoLeft-value0) (scm:immutable value1 TwoLeft-value1)))

  (scm:define TwoLeft
    (scm:lambda (value0)
      (scm:lambda (value1)
        (TwoLeft* value0 value1))))

  (scm:define-record-type (TwoRight$ TwoRight* TwoRight?)
    (scm:fields (scm:immutable value0 TwoRight-value0) (scm:immutable value1 TwoRight-value1)))

  (scm:define TwoRight
    (scm:lambda (value0)
      (scm:lambda (value1)
        (TwoRight* value0 value1))))

  (scm:define-record-type (ThreeLeft$ ThreeLeft* ThreeLeft?)
    (scm:fields (scm:immutable value0 ThreeLeft-value0) (scm:immutable value1 ThreeLeft-value1) (scm:immutable value2 ThreeLeft-value2) (scm:immutable value3 ThreeLeft-value3)))

  (scm:define ThreeLeft
    (scm:lambda (value0)
      (scm:lambda (value1)
        (scm:lambda (value2)
          (scm:lambda (value3)
            (ThreeLeft* value0 value1 value2 value3))))))

  (scm:define-record-type (ThreeMiddle$ ThreeMiddle* ThreeMiddle?)
    (scm:fields (scm:immutable value0 ThreeMiddle-value0) (scm:immutable value1 ThreeMiddle-value1) (scm:immutable value2 ThreeMiddle-value2) (scm:immutable value3 ThreeMiddle-value3)))

  (scm:define ThreeMiddle
    (scm:lambda (value0)
      (scm:lambda (value1)
        (scm:lambda (value2)
          (scm:lambda (value3)
            (ThreeMiddle* value0 value1 value2 value3))))))

  (scm:define-record-type (ThreeRight$ ThreeRight* ThreeRight?)
    (scm:fields (scm:immutable value0 ThreeRight-value0) (scm:immutable value1 ThreeRight-value1) (scm:immutable value2 ThreeRight-value2) (scm:immutable value3 ThreeRight-value3)))

  (scm:define ThreeRight
    (scm:lambda (value0)
      (scm:lambda (value1)
        (scm:lambda (value2)
          (scm:lambda (value3)
            (ThreeRight* value0 value1 value2 value3))))))

  (scm:define-record-type (KickUp$ KickUp* KickUp?)
    (scm:fields (scm:immutable value0 KickUp-value0) (scm:immutable value1 KickUp-value1) (scm:immutable value2 KickUp-value2)))

  (scm:define KickUp
    (scm:lambda (value0)
      (scm:lambda (value1)
        (scm:lambda (value2)
          (KickUp* value0 value1 value2)))))

  (scm:define fromZipper
    (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:cond
          [(scm:null? v0) v11]
          [(scm:pair? v0) (scm:cond
            [(TwoLeft? (scm:car v0)) ((fromZipper (scm:cdr v0)) (Two* v11 (TwoLeft-value0 (scm:car v0)) (TwoLeft-value1 (scm:car v0))))]
            [(TwoRight? (scm:car v0)) ((fromZipper (scm:cdr v0)) (Two* (TwoRight-value0 (scm:car v0)) (TwoRight-value1 (scm:car v0)) v11))]
            [(ThreeLeft? (scm:car v0)) ((fromZipper (scm:cdr v0)) (Three* v11 (ThreeLeft-value0 (scm:car v0)) (ThreeLeft-value1 (scm:car v0)) (ThreeLeft-value2 (scm:car v0)) (ThreeLeft-value3 (scm:car v0))))]
            [(ThreeMiddle? (scm:car v0)) ((fromZipper (scm:cdr v0)) (Three* (ThreeMiddle-value0 (scm:car v0)) (ThreeMiddle-value1 (scm:car v0)) v11 (ThreeMiddle-value2 (scm:car v0)) (ThreeMiddle-value3 (scm:car v0))))]
            [(ThreeRight? (scm:car v0)) ((fromZipper (scm:cdr v0)) (Three* (ThreeRight-value0 (scm:car v0)) (ThreeRight-value1 (scm:car v0)) (ThreeRight-value2 (scm:car v0)) (ThreeRight-value3 (scm:car v0)) v11))]
            [scm:else (rt:fail)])]
          [scm:else (rt:fail)]))))

  (scm:define insertAndLookupBy
    (scm:lambda (comp0)
      (scm:lambda (k1)
        (scm:lambda (orig2)
          (scm:letrec ([up3 (scm:lambda (v4)
            (scm:lambda (v15)
              (scm:cond
                [(scm:null? v4) (Two* (KickUp-value0 v15) (KickUp-value1 v15) (KickUp-value2 v15))]
                [(scm:pair? v4) (scm:cond
                  [(TwoLeft? (scm:car v4)) ((fromZipper (scm:cdr v4)) (Three* (KickUp-value0 v15) (KickUp-value1 v15) (KickUp-value2 v15) (TwoLeft-value0 (scm:car v4)) (TwoLeft-value1 (scm:car v4))))]
                  [(TwoRight? (scm:car v4)) ((fromZipper (scm:cdr v4)) (Three* (TwoRight-value0 (scm:car v4)) (TwoRight-value1 (scm:car v4)) (KickUp-value0 v15) (KickUp-value1 v15) (KickUp-value2 v15)))]
                  [(ThreeLeft? (scm:car v4)) ((up3 (scm:cdr v4)) (KickUp* (Two* (KickUp-value0 v15) (KickUp-value1 v15) (KickUp-value2 v15)) (ThreeLeft-value0 (scm:car v4)) (Two* (ThreeLeft-value1 (scm:car v4)) (ThreeLeft-value2 (scm:car v4)) (ThreeLeft-value3 (scm:car v4)))))]
                  [(ThreeMiddle? (scm:car v4)) ((up3 (scm:cdr v4)) (KickUp* (Two* (ThreeMiddle-value0 (scm:car v4)) (ThreeMiddle-value1 (scm:car v4)) (KickUp-value0 v15)) (KickUp-value1 v15) (Two* (KickUp-value2 v15) (ThreeMiddle-value2 (scm:car v4)) (ThreeMiddle-value3 (scm:car v4)))))]
                  [(ThreeRight? (scm:car v4)) ((up3 (scm:cdr v4)) (KickUp* (Two* (ThreeRight-value0 (scm:car v4)) (ThreeRight-value1 (scm:car v4)) (ThreeRight-value2 (scm:car v4))) (ThreeRight-value3 (scm:car v4)) (Two* (KickUp-value0 v15) (KickUp-value1 v15) (KickUp-value2 v15))))]
                  [scm:else (rt:fail)])]
                [scm:else (rt:fail)])))])
            (scm:letrec ([down4 (scm:lambda (v5)
              (scm:lambda (v16)
                (scm:cond
                  [(Leaf? v16) (scm:list (scm:cons (scm:string->symbol "found") #f) (scm:cons (scm:string->symbol "result") ((up3 v5) (KickUp* Leaf k1 Leaf))))]
                  [(Two? v16) (scm:let ([v27 ((comp0 k1) (Two-value1 v16))])
                    (scm:cond
                      [(Data.Ordering.EQ? v27) (scm:list (scm:cons (scm:string->symbol "found") #t) (scm:cons (scm:string->symbol "result") orig2))]
                      [(Data.Ordering.LT? v27) ((down4 (scm:cons (TwoLeft* (Two-value1 v16) (Two-value2 v16)) v5)) (Two-value0 v16))]
                      [scm:else ((down4 (scm:cons (TwoRight* (Two-value0 v16) (Two-value1 v16)) v5)) (Two-value2 v16))]))]
                  [(Three? v16) (scm:let ([v27 ((comp0 k1) (Three-value1 v16))])
                    (scm:cond
                      [(Data.Ordering.EQ? v27) (scm:list (scm:cons (scm:string->symbol "found") #t) (scm:cons (scm:string->symbol "result") orig2))]
                      [scm:else (scm:let ([v38 ((comp0 k1) (Three-value3 v16))])
                        (scm:cond
                          [(Data.Ordering.EQ? v38) (scm:list (scm:cons (scm:string->symbol "found") #t) (scm:cons (scm:string->symbol "result") orig2))]
                          [(Data.Ordering.LT? v27) ((down4 (scm:cons (ThreeLeft* (Three-value1 v16) (Three-value2 v16) (Three-value3 v16) (Three-value4 v16)) v5)) (Three-value0 v16))]
                          [(scm:and (Data.Ordering.GT? v27) (Data.Ordering.LT? v38)) ((down4 (scm:cons (ThreeMiddle* (Three-value0 v16) (Three-value1 v16) (Three-value3 v16) (Three-value4 v16)) v5)) (Three-value2 v16))]
                          [scm:else ((down4 (scm:cons (ThreeRight* (Three-value0 v16) (Three-value1 v16) (Three-value2 v16) (Three-value3 v16)) v5)) (Three-value4 v16))]))]))]
                  [scm:else (rt:fail)])))])
              ((down4 (scm:quote ())) orig2)))))))

  (scm:define emptySet
    Leaf))
