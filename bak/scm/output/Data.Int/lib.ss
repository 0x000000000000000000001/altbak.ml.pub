#!r6rs
#!chezscheme
(library
  (Data.Int lib)
  (export
    Even
    Even?
    Odd
    Odd?
    base36
    binary
    boundedParity
    ceil
    commutativeRingParity
    decimal
    divisionRingParity
    eqParity
    euclideanRingParity
    even
    floor
    fromNumber
    fromNumberImpl
    fromString
    fromStringAs
    fromStringAsImpl
    hexadecimal
    octal
    odd
    ordParity
    parity
    pow
    quot
    radix
    rem
    ringParity
    round
    semiringParity
    showParity
    toNumber
    toStringAs
    trunc
    unsafeClamp)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Bounded lib) Data.Bounded.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Number lib) Data.Number.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (Data.Int foreign))

  (scm:define Even
    (scm:quote Even))

  (scm:define Even?
    (scm:lambda (v)
      (scm:eq? (scm:quote Even) v)))

  (scm:define Odd
    (scm:quote Odd))

  (scm:define Odd?
    (scm:lambda (v)
      (scm:eq? (scm:quote Odd) v)))

  (scm:define showParity
    (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (v0)
      (scm:cond
        [(Even? v0) (rt:string->pstring "Even")]
        [(Odd? v0) (rt:string->pstring "Odd")]
        [scm:else (rt:fail)])))))

  (scm:define radix
    (scm:lambda (n0)
      (scm:cond
        [(scm:and (scm:fx>=? n0 2) (scm:fx<=? n0 36)) (Data.Maybe.Just n0)]
        [scm:else Data.Maybe.Nothing])))

  (scm:define odd
    (scm:lambda (x0)
      (scm:not (scm:fx=? (scm:fxlogand x0 1) 0))))

  (scm:define octal
    8)

  (scm:define hexadecimal
    16)

  (scm:define fromStringAs
    ((fromStringAsImpl Data.Maybe.Just) Data.Maybe.Nothing))

  (scm:define fromString
    (fromStringAs 10))

  (scm:define fromNumber
    ((fromNumberImpl Data.Maybe.Just) Data.Maybe.Nothing))

  (scm:define unsafeClamp
    (scm:lambda (x0)
      (scm:cond
        [(scm:not (Data.Number.isFinite x0)) 0]
        [(scm:fl>=? x0 (toNumber Data.Bounded.topInt)) Data.Bounded.topInt]
        [(scm:fl<=? x0 (toNumber Data.Bounded.bottomInt)) Data.Bounded.bottomInt]
        [scm:else (scm:let ([_1 (fromNumber x0)])
          (scm:cond
            [(Data.Maybe.Nothing? _1) 0]
            [(Data.Maybe.Just? _1) (Data.Maybe.Just-value0 _1)]
            [scm:else (rt:fail)]))])))

  (scm:define round
    (scm:lambda (x0)
      (unsafeClamp (Data.Number.round x0))))

  (scm:define trunc
    (scm:lambda (x0)
      (unsafeClamp (Data.Number.trunc x0))))

  (scm:define floor
    (scm:lambda (x0)
      (unsafeClamp (Data.Number.floor x0))))

  (scm:define even
    (scm:lambda (x0)
      (scm:fx=? (scm:fxlogand x0 1) 0)))

  (scm:define parity
    (scm:lambda (n0)
      (scm:cond
        [(scm:fx=? (scm:fxlogand n0 1) 0) Even]
        [scm:else Odd])))

  (scm:define eqParity
    (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:cond
          [(Even? x0) (Even? y1)]
          [scm:else (scm:and (Odd? x0) (Odd? y1))]))))))

  (scm:define ordParity
    (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:cond
          [(Even? x0) (scm:cond
            [(Even? y1) Data.Ordering.EQ]
            [scm:else Data.Ordering.LT])]
          [(Even? y1) Data.Ordering.GT]
          [(scm:and (Odd? x0) (Odd? y1)) Data.Ordering.EQ]
          [scm:else (rt:fail)])))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
      eqParity))))

  (scm:define semiringParity
    (scm:list (scm:cons (scm:string->symbol "zero") Even) (scm:cons (scm:string->symbol "add") (scm:lambda (x0)
      (scm:lambda (y1)
        (scm:cond
          [(scm:cond
            [(Even? x0) (Even? y1)]
            [scm:else (scm:and (Odd? x0) (Odd? y1))]) Even]
          [scm:else Odd])))) (scm:cons (scm:string->symbol "one") Odd) (scm:cons (scm:string->symbol "mul") (scm:lambda (v0)
      (scm:lambda (v11)
        (scm:cond
          [(scm:and (Odd? v0) (Odd? v11)) Odd]
          [scm:else Even]))))))

  (scm:define ringParity
    (scm:list (scm:cons (scm:string->symbol "sub") (rt:record-ref semiringParity (scm:string->symbol "add"))) (scm:cons (scm:string->symbol "Semiring0") (scm:lambda (_)
      semiringParity))))

  (scm:define divisionRingParity
    (scm:list (scm:cons (scm:string->symbol "recip") (scm:lambda (x0)
      x0)) (scm:cons (scm:string->symbol "Ring0") (scm:lambda (_)
      ringParity))))

  (scm:define decimal
    10)

  (scm:define commutativeRingParity
    (scm:list (scm:cons (scm:string->symbol "Ring0") (scm:lambda (_)
      ringParity))))

  (scm:define euclideanRingParity
    (scm:list (scm:cons (scm:string->symbol "degree") (scm:lambda (v0)
      (scm:cond
        [(Even? v0) 0]
        [(Odd? v0) 1]
        [scm:else (rt:fail)]))) (scm:cons (scm:string->symbol "div") (scm:lambda (x0)
      (scm:lambda (v1)
        x0))) (scm:cons (scm:string->symbol "mod") (scm:lambda (v0)
      (scm:lambda (v11)
        Even))) (scm:cons (scm:string->symbol "CommutativeRing0") (scm:lambda (_)
      commutativeRingParity))))

  (scm:define ceil
    (scm:lambda (x0)
      (unsafeClamp (Data.Number.ceil x0))))

  (scm:define boundedParity
    (scm:list (scm:cons (scm:string->symbol "bottom") Even) (scm:cons (scm:string->symbol "top") Odd) (scm:cons (scm:string->symbol "Ord0") (scm:lambda (_)
      ordParity))))

  (scm:define binary
    2)

  (scm:define base36
    36))
