#!r6rs
#!chezscheme
(library
  (Data.Number.Format lib)
  (export
    Exponential
    Exponential-value0
    Exponential?
    Fixed
    Fixed-value0
    Fixed?
    Precision
    Precision-value0
    Precision?
    clamp
    exponential
    fixed
    precision
    toExponentialNative
    toFixedNative
    toPrecisionNative
    toString
    toStringWith)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Ord lib) Data.Ord.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (Data.Number.Format foreign))

  (scm:define clamp
    (scm:lambda (low0)
      (scm:lambda (hi1)
        (scm:lambda (x2)
          (scm:let*
            ([v3 (((rt:record-ref Data.Ord.ordInt (scm:string->symbol "compare")) low0) x2)]
             [_4 (scm:cond
              [(Data.Ordering.LT? v3) x2]
              [(Data.Ordering.EQ? v3) low0]
              [(Data.Ordering.GT? v3) low0]
              [scm:else (rt:fail)])]
             [v5 (((rt:record-ref Data.Ord.ordInt (scm:string->symbol "compare")) hi1) _4)])
              (scm:cond
                [(Data.Ordering.LT? v5) hi1]
                [(Data.Ordering.EQ? v5) hi1]
                [(Data.Ordering.GT? v5) _4]
                [scm:else (rt:fail)]))))))

  (scm:define-record-type (Precision$ Precision Precision?)
    (scm:fields (scm:immutable value0 Precision-value0)))

  (scm:define-record-type (Fixed$ Fixed Fixed?)
    (scm:fields (scm:immutable value0 Fixed-value0)))

  (scm:define-record-type (Exponential$ Exponential Exponential?)
    (scm:fields (scm:immutable value0 Exponential-value0)))

  (scm:define toStringWith
    (scm:lambda (v0)
      (scm:cond
        [(Precision? v0) (toPrecisionNative (Precision-value0 v0))]
        [(Fixed? v0) (toFixedNative (Fixed-value0 v0))]
        [(Exponential? v0) (toExponentialNative (Exponential-value0 v0))]
        [scm:else (rt:fail)])))

  (scm:define precision
    (scm:lambda (x0)
      (Precision (((clamp 1) 21) x0))))

  (scm:define fixed
    (scm:lambda (x0)
      (Fixed (((clamp 0) 20) x0))))

  (scm:define exponential
    (scm:lambda (x0)
      (Exponential (((clamp 0) 20) x0)))))
