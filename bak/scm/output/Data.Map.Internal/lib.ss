#!r6rs
#!chezscheme
(library
  (Data.Map.Internal lib)
  (export
    IterDone
    IterDone?
    IterEmit
    IterEmit*
    IterEmit-value0
    IterEmit-value1
    IterEmit-value2
    IterEmit?
    IterLeaf
    IterLeaf?
    IterNext
    IterNext*
    IterNext-value0
    IterNext-value1
    IterNext-value2
    IterNext?
    IterNode
    IterNode*
    IterNode-value0
    IterNode-value1
    IterNode?
    Leaf
    Leaf?
    Node
    Node*
    Node-value0
    Node-value1
    Node-value2
    Node-value3
    Node-value4
    Node-value5
    Node?
    Split
    Split*
    Split-value0
    Split-value1
    Split-value2
    Split?
    SplitLast
    SplitLast*
    SplitLast-value0
    SplitLast-value1
    SplitLast-value2
    SplitLast?
    altMap
    alter
    any
    anyWithKey
    applyMap
    bindMap
    catMaybes
    checkValid
    delete
    difference
    empty
    eq1Map
    eqMap
    eqMapIter
    filter
    filterKeys
    filterWithKey
    findMax
    findMin
    foldSubmap
    foldSubmapBy
    foldableMap
    foldableWithIndexMap
    fromFoldable
    fromFoldableWith
    fromFoldableWithIndex
    functorMap
    functorWithIndexMap
    identity
    insert
    insertWith
    intersection
    intersectionWith
    isEmpty
    isSubmap
    iterMapL
    iterMapR
    iterMapU
    keys
    lookup
    lookupGE
    lookupGT
    lookupLE
    lookupLT
    mapMaybe
    mapMaybeWithKey
    member
    monoidSemigroupMap
    ord1Map
    ordMap
    ordMapIter
    plusMap
    pop
    semigroupMap
    showMap
    showTree
    singleton
    size
    stepAsc
    stepAscCps
    stepDesc
    stepDescCps
    stepUnfoldr
    stepUnfoldrUnordered
    stepUnordered
    stepUnorderedCps
    stepWith
    submap
    toMapIter
    toUnfoldable
    toUnfoldable1
    toUnfoldableUnordered
    traversableMap
    traversableWithIndexMap
    union
    unionWith
    unions
    unsafeBalancedNode
    unsafeDifference
    unsafeIntersectionWith
    unsafeJoinNodes
    unsafeNode
    unsafeSplit
    unsafeSplitLast
    unsafeUnionWith
    update
    values)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:)
    (prefix (Data.Function lib) Data.Function.)
    (prefix (Data.List.Types lib) Data.List.Types.)
    (prefix (Data.Maybe lib) Data.Maybe.)
    (prefix (Data.Ordering lib) Data.Ordering.)
    (prefix (Data.Show lib) Data.Show.)
    (prefix (Data.Tuple lib) Data.Tuple.)
    (prefix (Data.Unfoldable lib) Data.Unfoldable.)
    (prefix (Data.Unit lib) Data.Unit.))

  (scm:define identity
    (scm:lambda (x0)
      x0))

  (scm:define Leaf
    (scm:quote Leaf))

  (scm:define Leaf?
    (scm:lambda (v)
      (scm:eq? (scm:quote Leaf) v)))

  (scm:define-record-type (Node$ Node* Node?)
    (scm:fields (scm:immutable value0 Node-value0) (scm:immutable value1 Node-value1) (scm:immutable value2 Node-value2) (scm:immutable value3 Node-value3) (scm:immutable value4 Node-value4) (scm:immutable value5 Node-value5)))

  (scm:define Node
    (scm:lambda (value0)
      (scm:lambda (value1)
        (scm:lambda (value2)
          (scm:lambda (value3)
            (scm:lambda (value4)
              (scm:lambda (value5)
                (Node* value0 value1 value2 value3 value4 value5))))))))

  (scm:define IterLeaf
    (scm:quote IterLeaf))

  (scm:define IterLeaf?
    (scm:lambda (v)
      (scm:eq? (scm:quote IterLeaf) v)))

  (scm:define-record-type (IterEmit$ IterEmit* IterEmit?)
    (scm:fields (scm:immutable value0 IterEmit-value0) (scm:immutable value1 IterEmit-value1) (scm:immutable value2 IterEmit-value2)))

  (scm:define IterEmit
    (scm:lambda (value0)
      (scm:lambda (value1)
        (scm:lambda (value2)
          (IterEmit* value0 value1 value2)))))

  (scm:define-record-type (IterNode$ IterNode* IterNode?)
    (scm:fields (scm:immutable value0 IterNode-value0) (scm:immutable value1 IterNode-value1)))

  (scm:define IterNode
    (scm:lambda (value0)
      (scm:lambda (value1)
        (IterNode* value0 value1))))

  (scm:define IterDone
    (scm:quote IterDone))

  (scm:define IterDone?
    (scm:lambda (v)
      (scm:eq? (scm:quote IterDone) v)))

  (scm:define-record-type (IterNext$ IterNext* IterNext?)
    (scm:fields (scm:immutable value0 IterNext-value0) (scm:immutable value1 IterNext-value1) (scm:immutable value2 IterNext-value2)))

  (scm:define IterNext
    (scm:lambda (value0)
      (scm:lambda (value1)
        (scm:lambda (value2)
          (IterNext* value0 value1 value2)))))

  (scm:define-record-type (Split$ Split* Split?)
    (scm:fields (scm:immutable value0 Split-value0) (scm:immutable value1 Split-value1) (scm:immutable value2 Split-value2)))

  (scm:define Split
    (scm:lambda (value0)
      (scm:lambda (value1)
        (scm:lambda (value2)
          (Split* value0 value1 value2)))))

  (scm:define-record-type (SplitLast$ SplitLast* SplitLast?)
    (scm:fields (scm:immutable value0 SplitLast-value0) (scm:immutable value1 SplitLast-value1) (scm:immutable value2 SplitLast-value2)))

  (scm:define SplitLast
    (scm:lambda (value0)
      (scm:lambda (value1)
        (scm:lambda (value2)
          (SplitLast* value0 value1 value2)))))

  (scm:define unsafeNode
    (scm:lambda (k0 v1 l2 r3)
      (scm:cond
        [(Leaf? l2) (scm:cond
          [(Leaf? r3) (Node* 1 1 k0 v1 l2 r3)]
          [(Node? r3) (Node* (scm:fx+ 1 (Node-value0 r3)) (scm:fx+ 1 (Node-value1 r3)) k0 v1 l2 r3)]
          [scm:else (rt:fail)])]
        [(Node? l2) (scm:cond
          [(Leaf? r3) (Node* (scm:fx+ 1 (Node-value0 l2)) (scm:fx+ 1 (Node-value1 l2)) k0 v1 l2 r3)]
          [(Node? r3) (Node* (scm:cond
            [(scm:fx>? (Node-value0 l2) (Node-value0 r3)) (scm:fx+ 1 (Node-value0 l2))]
            [scm:else (scm:fx+ 1 (Node-value0 r3))]) (scm:fx+ (scm:fx+ 1 (Node-value1 l2)) (Node-value1 r3)) k0 v1 l2 r3)]
          [scm:else (rt:fail)])]
        [scm:else (rt:fail)])))

  (scm:define toMapIter
    (scm:lambda (a0)
      (IterNode* a0 IterLeaf)))

  (scm:define stepWith
    (scm:lambda (f0)
      (scm:lambda (next1)
        (scm:lambda (done2)
          (scm:letrec ([go3 (scm:lambda (v4)
            (scm:cond
              [(IterLeaf? v4) (done2 Data.Unit.unit)]
              [(IterEmit? v4) (next1 (IterEmit-value0 v4) (IterEmit-value1 v4) (IterEmit-value2 v4))]
              [(IterNode? v4) (go3 ((f0 (IterNode-value1 v4)) (IterNode-value0 v4)))]
              [scm:else (rt:fail)]))])
            go3)))))

  (scm:define size
    (scm:lambda (v0)
      (scm:cond
        [(Leaf? v0) 0]
        [(Node? v0) (Node-value1 v0)]
        [scm:else (rt:fail)])))

  (scm:define singleton
    (scm:lambda (k0)
      (scm:lambda (v1)
        (Node* 1 1 k0 v1 Leaf Leaf))))

  (scm:define unsafeBalancedNode
    (scm:lambda (k0 v1 l2 r3)
      (scm:cond
        [(Leaf? l2) (scm:cond
          [(Leaf? r3) (Node* 1 1 k0 v1 Leaf Leaf)]
          [(scm:and (Node? r3) (scm:fx>? (Node-value0 r3) 1)) (scm:cond
            [(scm:and (Node? (Node-value4 r3)) (scm:cond
              [(Leaf? (Node-value5 r3)) (scm:fx>? (Node-value0 (Node-value4 r3)) 0)]
              [(Node? (Node-value5 r3)) (scm:fx>? (Node-value0 (Node-value4 r3)) (Node-value0 (Node-value5 r3)))]
              [scm:else (rt:fail)])) (unsafeNode (Node-value2 (Node-value4 r3)) (Node-value3 (Node-value4 r3)) (unsafeNode k0 v1 l2 (Node-value4 (Node-value4 r3))) (unsafeNode (Node-value2 r3) (Node-value3 r3) (Node-value5 (Node-value4 r3)) (Node-value5 r3)))]
            [scm:else (unsafeNode (Node-value2 r3) (Node-value3 r3) (unsafeNode k0 v1 l2 (Node-value4 r3)) (Node-value5 r3))])]
          [scm:else (unsafeNode k0 v1 l2 r3)])]
        [(Node? l2) (scm:cond
          [(Node? r3) (scm:cond
            [(scm:fx>? (Node-value0 r3) (scm:fx+ (Node-value0 l2) 1)) (scm:cond
              [(scm:and (Node? (Node-value4 r3)) (scm:cond
                [(Leaf? (Node-value5 r3)) (scm:fx>? (Node-value0 (Node-value4 r3)) 0)]
                [(Node? (Node-value5 r3)) (scm:fx>? (Node-value0 (Node-value4 r3)) (Node-value0 (Node-value5 r3)))]
                [scm:else (rt:fail)])) (unsafeNode (Node-value2 (Node-value4 r3)) (Node-value3 (Node-value4 r3)) (unsafeNode k0 v1 l2 (Node-value4 (Node-value4 r3))) (unsafeNode (Node-value2 r3) (Node-value3 r3) (Node-value5 (Node-value4 r3)) (Node-value5 r3)))]
              [scm:else (unsafeNode (Node-value2 r3) (Node-value3 r3) (unsafeNode k0 v1 l2 (Node-value4 r3)) (Node-value5 r3))])]
            [(scm:fx>? (Node-value0 l2) (scm:fx+ (Node-value0 r3) 1)) (scm:cond
              [(scm:and (Node? (Node-value5 l2)) (scm:cond
                [(Leaf? (Node-value4 l2)) (scm:fx<=? 0 (Node-value0 (Node-value5 l2)))]
                [(Node? (Node-value4 l2)) (scm:fx<=? (Node-value0 (Node-value4 l2)) (Node-value0 (Node-value5 l2)))]
                [scm:else (rt:fail)])) (unsafeNode (Node-value2 (Node-value5 l2)) (Node-value3 (Node-value5 l2)) (unsafeNode (Node-value2 l2) (Node-value3 l2) (Node-value4 l2) (Node-value4 (Node-value5 l2))) (unsafeNode k0 v1 (Node-value5 (Node-value5 l2)) r3))]
              [scm:else (unsafeNode (Node-value2 l2) (Node-value3 l2) (Node-value4 l2) (unsafeNode k0 v1 (Node-value5 l2) r3))])]
            [scm:else (unsafeNode k0 v1 l2 r3)])]
          [(scm:and (Leaf? r3) (scm:fx>? (Node-value0 l2) 1)) (scm:cond
            [(scm:and (Node? (Node-value5 l2)) (scm:cond
              [(Leaf? (Node-value4 l2)) (scm:fx<=? 0 (Node-value0 (Node-value5 l2)))]
              [(Node? (Node-value4 l2)) (scm:fx<=? (Node-value0 (Node-value4 l2)) (Node-value0 (Node-value5 l2)))]
              [scm:else (rt:fail)])) (unsafeNode (Node-value2 (Node-value5 l2)) (Node-value3 (Node-value5 l2)) (unsafeNode (Node-value2 l2) (Node-value3 l2) (Node-value4 l2) (Node-value4 (Node-value5 l2))) (unsafeNode k0 v1 (Node-value5 (Node-value5 l2)) r3))]
            [scm:else (unsafeNode (Node-value2 l2) (Node-value3 l2) (Node-value4 l2) (unsafeNode k0 v1 (Node-value5 l2) r3))])]
          [scm:else (unsafeNode k0 v1 l2 r3)])]
        [scm:else (rt:fail)])))

  (scm:define unsafeSplit
    (scm:lambda (comp0 k1 m2)
      (scm:cond
        [(Leaf? m2) (Split* Data.Maybe.Nothing Leaf Leaf)]
        [(Node? m2) (scm:let ([v3 ((comp0 k1) (Node-value2 m2))])
          (scm:cond
            [(Data.Ordering.LT? v3) (scm:let ([v14 (unsafeSplit comp0 k1 (Node-value4 m2))])
              (Split* (Split-value0 v14) (Split-value1 v14) (unsafeBalancedNode (Node-value2 m2) (Node-value3 m2) (Split-value2 v14) (Node-value5 m2))))]
            [(Data.Ordering.GT? v3) (scm:let ([v14 (unsafeSplit comp0 k1 (Node-value5 m2))])
              (Split* (Split-value0 v14) (unsafeBalancedNode (Node-value2 m2) (Node-value3 m2) (Node-value4 m2) (Split-value1 v14)) (Split-value2 v14)))]
            [(Data.Ordering.EQ? v3) (Split* (Data.Maybe.Just (Node-value3 m2)) (Node-value4 m2) (Node-value5 m2))]
            [scm:else (rt:fail)]))]
        [scm:else (rt:fail)])))

  (scm:define unsafeSplitLast
    (scm:lambda (k0 v1 l2 r3)
      (scm:cond
        [(Leaf? r3) (SplitLast* k0 v1 l2)]
        [(Node? r3) (scm:let ([v14 (unsafeSplitLast (Node-value2 r3) (Node-value3 r3) (Node-value4 r3) (Node-value5 r3))])
          (SplitLast* (SplitLast-value0 v14) (SplitLast-value1 v14) (unsafeBalancedNode k0 v1 l2 (SplitLast-value2 v14))))]
        [scm:else (rt:fail)])))

  (scm:define unsafeJoinNodes
    (scm:lambda (v0 v11)
      (scm:cond
        [(Leaf? v0) v11]
        [(Node? v0) (scm:let ([v22 (unsafeSplitLast (Node-value2 v0) (Node-value3 v0) (Node-value4 v0) (Node-value5 v0))])
          (unsafeBalancedNode (SplitLast-value0 v22) (SplitLast-value1 v22) (SplitLast-value2 v22) v11))]
        [scm:else (rt:fail)])))

  (scm:define unsafeDifference
    (scm:lambda (comp0 l1 r2)
      (scm:cond
        [(Leaf? l1) Leaf]
        [(Leaf? r2) l1]
        [(Node? r2) (scm:let ([v3 (unsafeSplit comp0 (Node-value2 r2) l1)])
          (unsafeJoinNodes (unsafeDifference comp0 (Split-value1 v3) (Node-value4 r2)) (unsafeDifference comp0 (Split-value2 v3) (Node-value5 r2))))]
        [scm:else (rt:fail)])))

  (scm:define unsafeIntersectionWith
    (scm:lambda (comp0 app1 l2 r3)
      (scm:cond
        [(Leaf? l2) Leaf]
        [(Leaf? r3) Leaf]
        [(Node? r3) (scm:let*
          ([v4 (unsafeSplit comp0 (Node-value2 r3) l2)]
           [l$p5 (unsafeIntersectionWith comp0 app1 (Split-value1 v4) (Node-value4 r3))]
           [r$p6 (unsafeIntersectionWith comp0 app1 (Split-value2 v4) (Node-value5 r3))])
            (scm:cond
              [(Data.Maybe.Just? (Split-value0 v4)) (unsafeBalancedNode (Node-value2 r3) ((app1 (Data.Maybe.Just-value0 (Split-value0 v4))) (Node-value3 r3)) l$p5 r$p6)]
              [(Data.Maybe.Nothing? (Split-value0 v4)) (unsafeJoinNodes l$p5 r$p6)]
              [scm:else (rt:fail)]))]
        [scm:else (rt:fail)])))

  (scm:define unsafeUnionWith
    (scm:lambda (comp0 app1 l2 r3)
      (scm:cond
        [(Leaf? l2) r3]
        [(Leaf? r3) l2]
        [(Node? r3) (scm:let*
          ([v4 (unsafeSplit comp0 (Node-value2 r3) l2)]
           [l$p5 (unsafeUnionWith comp0 app1 (Split-value1 v4) (Node-value4 r3))]
           [r$p6 (unsafeUnionWith comp0 app1 (Split-value2 v4) (Node-value5 r3))])
            (scm:cond
              [(Data.Maybe.Just? (Split-value0 v4)) (unsafeBalancedNode (Node-value2 r3) ((app1 (Data.Maybe.Just-value0 (Split-value0 v4))) (Node-value3 r3)) l$p5 r$p6)]
              [(Data.Maybe.Nothing? (Split-value0 v4)) (unsafeBalancedNode (Node-value2 r3) (Node-value3 r3) l$p5 r$p6)]
              [scm:else (rt:fail)]))]
        [scm:else (rt:fail)])))

  (scm:define unionWith
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (app2)
          (scm:lambda (m13)
            (scm:lambda (m24)
              (unsafeUnionWith compare1 app2 m13 m24)))))))

  (scm:define union
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (m12)
          (scm:lambda (m23)
            (unsafeUnionWith compare1 Data.Function.const m12 m23))))))

  (scm:define update
    (scm:lambda (dictOrd0)
      (scm:lambda (f1)
        (scm:lambda (k2)
          (scm:letrec ([go3 (scm:lambda (v4)
            (scm:cond
              [(Leaf? v4) Leaf]
              [(Node? v4) (scm:let ([v15 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) k2) (Node-value2 v4))])
                (scm:cond
                  [(Data.Ordering.LT? v15) (unsafeBalancedNode (Node-value2 v4) (Node-value3 v4) (go3 (Node-value4 v4)) (Node-value5 v4))]
                  [(Data.Ordering.GT? v15) (unsafeBalancedNode (Node-value2 v4) (Node-value3 v4) (Node-value4 v4) (go3 (Node-value5 v4)))]
                  [(Data.Ordering.EQ? v15) (scm:let ([v26 (f1 (Node-value3 v4))])
                    (scm:cond
                      [(Data.Maybe.Nothing? v26) (unsafeJoinNodes (Node-value4 v4) (Node-value5 v4))]
                      [(Data.Maybe.Just? v26) (Node* (Node-value0 v4) (Node-value1 v4) (Node-value2 v4) (Data.Maybe.Just-value0 v26) (Node-value4 v4) (Node-value5 v4))]
                      [scm:else (rt:fail)]))]
                  [scm:else (rt:fail)]))]
              [scm:else (rt:fail)]))])
            go3)))))

  (scm:define showTree
    (scm:lambda (dictShow0)
      (scm:lambda (dictShow11)
        (scm:letrec ([go2 (scm:lambda (ind3)
          (scm:lambda (v4)
            (scm:cond
              [(Leaf? v4) (rt:pstring-concat ind3 (rt:string->pstring "Leaf"))]
              [(Node? v4) (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat ind3 (rt:string->pstring "[")) (Data.Show.showIntImpl (Node-value0 v4))) (rt:string->pstring "] ")) ((rt:record-ref dictShow0 (scm:string->symbol "show")) (Node-value2 v4))) (rt:string->pstring " => ")) ((rt:record-ref dictShow11 (scm:string->symbol "show")) (Node-value3 v4))) (rt:string->pstring "\n")) ((go2 (rt:pstring-concat ind3 (rt:string->pstring "    "))) (Node-value4 v4))) (rt:string->pstring "\n")) ((go2 (rt:pstring-concat ind3 (rt:string->pstring "    "))) (Node-value5 v4)))]
              [scm:else (rt:fail)])))])
          (go2 (rt:string->pstring ""))))))

  (scm:define semigroupMap
    (scm:lambda (_)
      (scm:lambda (dictOrd1)
        (scm:let ([compare2 (rt:record-ref dictOrd1 (scm:string->symbol "compare"))])
          (scm:lambda (dictSemigroup3)
            (scm:list (scm:cons (scm:string->symbol "append") (scm:let ([_4 (rt:record-ref dictSemigroup3 (scm:string->symbol "append"))])
              (scm:lambda (m15)
                (scm:lambda (m26)
                  (unsafeUnionWith compare2 _4 m15 m26)))))))))))

  (scm:define pop
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (k2)
          (scm:lambda (m3)
            (scm:let ([v4 (unsafeSplit compare1 k2 m3)])
              (scm:cond
                [(Data.Maybe.Just? (Split-value0 v4)) (Data.Maybe.Just (Data.Tuple.Tuple* (Data.Maybe.Just-value0 (Split-value0 v4)) (unsafeJoinNodes (Split-value1 v4) (Split-value2 v4))))]
                [scm:else Data.Maybe.Nothing])))))))

  (scm:define member
    (scm:lambda (dictOrd0)
      (scm:lambda (k1)
        (scm:letrec ([go2 (scm:lambda (v3)
          (scm:cond
            [(Leaf? v3) #f]
            [(Node? v3) (scm:let ([v14 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) k1) (Node-value2 v3))])
              (scm:cond
                [(Data.Ordering.LT? v14) (go2 (Node-value4 v3))]
                [(Data.Ordering.GT? v14) (go2 (Node-value5 v3))]
                [(Data.Ordering.EQ? v14) #t]
                [scm:else (rt:fail)]))]
            [scm:else (rt:fail)]))])
          go2))))

  (scm:define mapMaybeWithKey
    (scm:lambda (dictOrd0)
      (scm:lambda (f1)
        (scm:letrec ([go2 (scm:lambda (v3)
          (scm:cond
            [(Leaf? v3) Leaf]
            [(Node? v3) (scm:let ([v24 ((f1 (Node-value2 v3)) (Node-value3 v3))])
              (scm:cond
                [(Data.Maybe.Just? v24) (unsafeBalancedNode (Node-value2 v3) (Data.Maybe.Just-value0 v24) (go2 (Node-value4 v3)) (go2 (Node-value5 v3)))]
                [(Data.Maybe.Nothing? v24) (unsafeJoinNodes (go2 (Node-value4 v3)) (go2 (Node-value5 v3)))]
                [scm:else (rt:fail)]))]
            [scm:else (rt:fail)]))])
          go2))))

  (scm:define mapMaybe
    (scm:lambda (dictOrd0)
      (scm:lambda (x1)
        ((mapMaybeWithKey dictOrd0) (scm:lambda (v2)
          x1)))))

  (scm:define lookupLE
    (scm:lambda (dictOrd0)
      (scm:lambda (k1)
        (scm:letrec ([go2 (scm:lambda (v3)
          (scm:cond
            [(Leaf? v3) Data.Maybe.Nothing]
            [(Node? v3) (scm:let ([v14 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) k1) (Node-value2 v3))])
              (scm:cond
                [(Data.Ordering.LT? v14) (go2 (Node-value4 v3))]
                [(Data.Ordering.GT? v14) (scm:let ([v25 (go2 (Node-value5 v3))])
                  (scm:cond
                    [(Data.Maybe.Nothing? v25) (Data.Maybe.Just (scm:list (scm:cons (scm:string->symbol "key") (Node-value2 v3)) (scm:cons (scm:string->symbol "value") (Node-value3 v3))))]
                    [scm:else v25]))]
                [(Data.Ordering.EQ? v14) (Data.Maybe.Just (scm:list (scm:cons (scm:string->symbol "key") (Node-value2 v3)) (scm:cons (scm:string->symbol "value") (Node-value3 v3))))]
                [scm:else (rt:fail)]))]
            [scm:else (rt:fail)]))])
          go2))))

  (scm:define lookupGE
    (scm:lambda (dictOrd0)
      (scm:lambda (k1)
        (scm:letrec ([go2 (scm:lambda (v3)
          (scm:cond
            [(Leaf? v3) Data.Maybe.Nothing]
            [(Node? v3) (scm:let ([v14 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) k1) (Node-value2 v3))])
              (scm:cond
                [(Data.Ordering.LT? v14) (scm:let ([v25 (go2 (Node-value4 v3))])
                  (scm:cond
                    [(Data.Maybe.Nothing? v25) (Data.Maybe.Just (scm:list (scm:cons (scm:string->symbol "key") (Node-value2 v3)) (scm:cons (scm:string->symbol "value") (Node-value3 v3))))]
                    [scm:else v25]))]
                [(Data.Ordering.GT? v14) (go2 (Node-value5 v3))]
                [(Data.Ordering.EQ? v14) (Data.Maybe.Just (scm:list (scm:cons (scm:string->symbol "key") (Node-value2 v3)) (scm:cons (scm:string->symbol "value") (Node-value3 v3))))]
                [scm:else (rt:fail)]))]
            [scm:else (rt:fail)]))])
          go2))))

  (scm:define lookup
    (scm:lambda (dictOrd0)
      (scm:lambda (k1)
        (scm:letrec ([go2 (scm:lambda (v3)
          (scm:cond
            [(Leaf? v3) Data.Maybe.Nothing]
            [(Node? v3) (scm:let ([v14 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) k1) (Node-value2 v3))])
              (scm:cond
                [(Data.Ordering.LT? v14) (go2 (Node-value4 v3))]
                [(Data.Ordering.GT? v14) (go2 (Node-value5 v3))]
                [(Data.Ordering.EQ? v14) (Data.Maybe.Just (Node-value3 v3))]
                [scm:else (rt:fail)]))]
            [scm:else (rt:fail)]))])
          go2))))

  (scm:define iterMapU
    (scm:lambda (iter0)
      (scm:lambda (v1)
        (scm:cond
          [(Leaf? v1) iter0]
          [(Node? v1) (scm:cond
            [(Leaf? (Node-value4 v1)) (scm:cond
              [(Leaf? (Node-value5 v1)) (IterEmit* (Node-value2 v1) (Node-value3 v1) iter0)]
              [scm:else (IterEmit* (Node-value2 v1) (Node-value3 v1) (IterNode* (Node-value5 v1) iter0))])]
            [(Leaf? (Node-value5 v1)) (IterEmit* (Node-value2 v1) (Node-value3 v1) (IterNode* (Node-value4 v1) iter0))]
            [scm:else (IterEmit* (Node-value2 v1) (Node-value3 v1) (IterNode* (Node-value4 v1) (IterNode* (Node-value5 v1) iter0)))])]
          [scm:else (rt:fail)]))))

  (scm:define stepUnorderedCps
    (stepWith iterMapU))

  (scm:define stepUnfoldrUnordered
    (((stepWith iterMapU) (scm:lambda (k0 v1 next2)
      (Data.Maybe.Just (Data.Tuple.Tuple* (Data.Tuple.Tuple* k0 v1) next2)))) (scm:lambda (v0)
      Data.Maybe.Nothing)))

  (scm:define toUnfoldableUnordered
    (scm:lambda (dictUnfoldable0)
      (scm:let ([_1 ((rt:record-ref dictUnfoldable0 (scm:string->symbol "unfoldr")) stepUnfoldrUnordered)])
        (scm:lambda (x2)
          (_1 (IterNode* x2 IterLeaf))))))

  (scm:define stepUnordered
    (((stepWith iterMapU) (scm:lambda (k0 v1 next2)
      (IterNext* k0 v1 next2))) (scm:lambda (v0)
      IterDone)))

  (scm:define iterMapR
    (scm:letrec ([go0 (scm:lambda (iter1)
      (scm:lambda (v2)
        (scm:cond
          [(Leaf? v2) iter1]
          [(Node? v2) (scm:cond
            [(Leaf? (Node-value5 v2)) ((go0 (IterEmit* (Node-value2 v2) (Node-value3 v2) iter1)) (Node-value4 v2))]
            [scm:else ((go0 (IterEmit* (Node-value2 v2) (Node-value3 v2) (IterNode* (Node-value4 v2) iter1))) (Node-value5 v2))])]
          [scm:else (rt:fail)])))])
      go0))

  (scm:define stepDescCps
    (stepWith iterMapR))

  (scm:define stepDesc
    (((stepWith iterMapR) (scm:lambda (k0 v1 next2)
      (IterNext* k0 v1 next2))) (scm:lambda (v0)
      IterDone)))

  (scm:define iterMapL
    (scm:letrec ([go0 (scm:lambda (iter1)
      (scm:lambda (v2)
        (scm:cond
          [(Leaf? v2) iter1]
          [(Node? v2) (scm:cond
            [(Leaf? (Node-value5 v2)) ((go0 (IterEmit* (Node-value2 v2) (Node-value3 v2) iter1)) (Node-value4 v2))]
            [scm:else ((go0 (IterEmit* (Node-value2 v2) (Node-value3 v2) (IterNode* (Node-value5 v2) iter1))) (Node-value4 v2))])]
          [scm:else (rt:fail)])))])
      go0))

  (scm:define stepAscCps
    (stepWith iterMapL))

  (scm:define stepAsc
    (((stepWith iterMapL) (scm:lambda (k0 v1 next2)
      (IterNext* k0 v1 next2))) (scm:lambda (v0)
      IterDone)))

  (scm:define eqMapIter
    (scm:lambda (dictEq0)
      (scm:lambda (dictEq11)
        (scm:list (scm:cons (scm:string->symbol "eq") (scm:letrec ([go2 (scm:lambda (a3)
          (scm:lambda (b4)
            (scm:let ([v5 (stepAsc a3)])
              (scm:cond
                [(IterNext? v5) (scm:let ([v26 (stepAsc b4)])
                  (scm:and (IterNext? v26) (scm:and (scm:and (((rt:record-ref dictEq0 (scm:string->symbol "eq")) (IterNext-value0 v5)) (IterNext-value0 v26)) (((rt:record-ref dictEq11 (scm:string->symbol "eq")) (IterNext-value1 v5)) (IterNext-value1 v26))) ((go2 (IterNext-value2 v5)) (IterNext-value2 v26)))))]
                [(IterDone? v5) #t]
                [scm:else (rt:fail)]))))])
          go2))))))

  (scm:define ordMapIter
    (scm:lambda (dictOrd0)
      (scm:let ([eqMapIter11 (eqMapIter ((rt:record-ref dictOrd0 (scm:string->symbol "Eq0")) (scm:quote undefined)))])
        (scm:lambda (dictOrd12)
          (scm:let ([eqMapIter23 (eqMapIter11 ((rt:record-ref dictOrd12 (scm:string->symbol "Eq0")) (scm:quote undefined)))])
            (scm:list (scm:cons (scm:string->symbol "compare") (scm:letrec ([go4 (scm:lambda (a5)
              (scm:lambda (b6)
                (scm:let*
                  ([v7 (stepAsc b6)]
                   [v18 (stepAsc a5)])
                    (scm:cond
                      [(IterNext? v18) (scm:cond
                        [(IterNext? v7) (scm:let ([v39 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) (IterNext-value0 v18)) (IterNext-value0 v7))])
                          (scm:cond
                            [(Data.Ordering.EQ? v39) (scm:let ([v410 (((rt:record-ref dictOrd12 (scm:string->symbol "compare")) (IterNext-value1 v18)) (IterNext-value1 v7))])
                              (scm:cond
                                [(Data.Ordering.EQ? v410) ((go4 (IterNext-value2 v18)) (IterNext-value2 v7))]
                                [scm:else v410]))]
                            [scm:else v39]))]
                        [(IterDone? v7) Data.Ordering.GT]
                        [scm:else (rt:fail)])]
                      [(IterDone? v18) (scm:cond
                        [(IterDone? v7) Data.Ordering.EQ]
                        [scm:else Data.Ordering.LT])]
                      [(IterDone? v7) Data.Ordering.GT]
                      [scm:else (rt:fail)]))))])
              go4)) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
              eqMapIter23))))))))

  (scm:define stepUnfoldr
    (((stepWith iterMapL) (scm:lambda (k0 v1 next2)
      (Data.Maybe.Just (Data.Tuple.Tuple* (Data.Tuple.Tuple* k0 v1) next2)))) (scm:lambda (v0)
      Data.Maybe.Nothing)))

  (scm:define toUnfoldable
    (scm:lambda (dictUnfoldable0)
      (scm:let ([_1 ((rt:record-ref dictUnfoldable0 (scm:string->symbol "unfoldr")) stepUnfoldr)])
        (scm:lambda (x2)
          (_1 (IterNode* x2 IterLeaf))))))

  (scm:define toUnfoldable1
    (scm:let ([_0 ((rt:record-ref Data.Unfoldable.unfoldableArray (scm:string->symbol "unfoldr")) stepUnfoldr)])
      (scm:lambda (x1)
        (_0 (IterNode* x1 IterLeaf)))))

  (scm:define showMap
    (scm:lambda (dictShow0)
      (scm:lambda (dictShow11)
        (scm:let ([show12 (Data.Show.showArrayImpl (scm:lambda (v2)
          (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(Tuple ") ((rt:record-ref dictShow0 (scm:string->symbol "show")) (Data.Tuple.Tuple-value0 v2))) (rt:string->pstring " ")) ((rt:record-ref dictShow11 (scm:string->symbol "show")) (Data.Tuple.Tuple-value1 v2))) (rt:string->pstring ")"))))])
          (scm:list (scm:cons (scm:string->symbol "show") (scm:lambda (as3)
            (rt:pstring-concat (rt:pstring-concat (rt:string->pstring "(fromFoldable ") (show12 (toUnfoldable1 as3))) (rt:string->pstring ")")))))))))

  (scm:define isSubmap
    (scm:lambda (dictOrd0)
      (scm:lambda (dictEq1)
        (scm:letrec ([go2 (scm:lambda (m13)
          (scm:lambda (m24)
            (scm:cond
              [(Leaf? m13) #t]
              [(Node? m13) (scm:let ([_5 (Node-value2 m13)])
                (scm:letrec ([go6 (scm:lambda (v7)
                  (scm:cond
                    [(Leaf? v7) Data.Maybe.Nothing]
                    [(Node? v7) (scm:let ([v18 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) _5) (Node-value2 v7))])
                      (scm:cond
                        [(Data.Ordering.LT? v18) (go6 (Node-value4 v7))]
                        [(Data.Ordering.GT? v18) (go6 (Node-value5 v7))]
                        [(Data.Ordering.EQ? v18) (Data.Maybe.Just (Node-value3 v7))]
                        [scm:else (rt:fail)]))]
                    [scm:else (rt:fail)]))])
                  (scm:let ([v17 (go6 m24)])
                    (scm:cond
                      [(Data.Maybe.Nothing? v17) #f]
                      [(Data.Maybe.Just? v17) (scm:and (((rt:record-ref dictEq1 (scm:string->symbol "eq")) (Node-value3 m13)) (Data.Maybe.Just-value0 v17)) (scm:and ((go2 (Node-value4 m13)) m24) ((go2 (Node-value5 m13)) m24)))]
                      [scm:else (rt:fail)]))))]
              [scm:else (rt:fail)])))])
          go2))))

  (scm:define isEmpty
    (scm:lambda (v0)
      (Leaf? v0)))

  (scm:define intersectionWith
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (app2)
          (scm:lambda (m13)
            (scm:lambda (m24)
              (unsafeIntersectionWith compare1 app2 m13 m24)))))))

  (scm:define intersection
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (m12)
          (scm:lambda (m23)
            (unsafeIntersectionWith compare1 Data.Function.const m12 m23))))))

  (scm:define insertWith
    (scm:lambda (dictOrd0)
      (scm:lambda (app1)
        (scm:lambda (k2)
          (scm:lambda (v3)
            (scm:letrec ([go4 (scm:lambda (v15)
              (scm:cond
                [(Leaf? v15) (Node* 1 1 k2 v3 Leaf Leaf)]
                [(Node? v15) (scm:let ([v26 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) k2) (Node-value2 v15))])
                  (scm:cond
                    [(Data.Ordering.LT? v26) (unsafeBalancedNode (Node-value2 v15) (Node-value3 v15) (go4 (Node-value4 v15)) (Node-value5 v15))]
                    [(Data.Ordering.GT? v26) (unsafeBalancedNode (Node-value2 v15) (Node-value3 v15) (Node-value4 v15) (go4 (Node-value5 v15)))]
                    [(Data.Ordering.EQ? v26) (Node* (Node-value0 v15) (Node-value1 v15) k2 ((app1 (Node-value3 v15)) v3) (Node-value4 v15) (Node-value5 v15))]
                    [scm:else (rt:fail)]))]
                [scm:else (rt:fail)]))])
              go4))))))

  (scm:define insert
    (scm:lambda (dictOrd0)
      (scm:lambda (k1)
        (scm:lambda (v2)
          (scm:letrec ([go3 (scm:lambda (v14)
            (scm:cond
              [(Leaf? v14) (Node* 1 1 k1 v2 Leaf Leaf)]
              [(Node? v14) (scm:let ([v25 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) k1) (Node-value2 v14))])
                (scm:cond
                  [(Data.Ordering.LT? v25) (unsafeBalancedNode (Node-value2 v14) (Node-value3 v14) (go3 (Node-value4 v14)) (Node-value5 v14))]
                  [(Data.Ordering.GT? v25) (unsafeBalancedNode (Node-value2 v14) (Node-value3 v14) (Node-value4 v14) (go3 (Node-value5 v14)))]
                  [(Data.Ordering.EQ? v25) (Node* (Node-value0 v14) (Node-value1 v14) k1 v2 (Node-value4 v14) (Node-value5 v14))]
                  [scm:else (rt:fail)]))]
              [scm:else (rt:fail)]))])
            go3)))))

  (scm:define functorMap
    (scm:list (scm:cons (scm:string->symbol "map") (scm:lambda (f0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:cond
          [(Leaf? v2) Leaf]
          [(Node? v2) (Node* (Node-value0 v2) (Node-value1 v2) (Node-value2 v2) (f0 (Node-value3 v2)) (go1 (Node-value4 v2)) (go1 (Node-value5 v2)))]
          [scm:else (rt:fail)]))])
        go1)))))

  (scm:define functorWithIndexMap
    (scm:list (scm:cons (scm:string->symbol "mapWithIndex") (scm:lambda (f0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:cond
          [(Leaf? v2) Leaf]
          [(Node? v2) (Node* (Node-value0 v2) (Node-value1 v2) (Node-value2 v2) ((f0 (Node-value2 v2)) (Node-value3 v2)) (go1 (Node-value4 v2)) (go1 (Node-value5 v2)))]
          [scm:else (rt:fail)]))])
        go1))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorMap))))

  (scm:define foldableMap
    (scm:list (scm:cons (scm:string->symbol "foldr") (scm:lambda (f0)
      (scm:lambda (z1)
        (scm:letrec ([go2 (scm:lambda (m$p3 z$p4)
          (scm:cond
            [(Leaf? m$p3) z$p4]
            [(Node? m$p3) (go2 (Node-value4 m$p3) ((f0 (Node-value3 m$p3)) (go2 (Node-value5 m$p3) z$p4)))]
            [scm:else (rt:fail)]))])
          (scm:lambda (m3)
            (go2 m3 z1)))))) (scm:cons (scm:string->symbol "foldl") (scm:lambda (f0)
      (scm:lambda (z1)
        (scm:letrec ([go2 (scm:lambda (z$p3 m$p4)
          (scm:cond
            [(Leaf? m$p4) z$p3]
            [(Node? m$p4) (go2 ((f0 (go2 z$p3 (Node-value4 m$p4))) (Node-value3 m$p4)) (Node-value5 m$p4))]
            [scm:else (rt:fail)]))])
          (scm:lambda (m3)
            (go2 z1 m3)))))) (scm:cons (scm:string->symbol "foldMap") (scm:lambda (dictMonoid0)
      (scm:let*
        ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))]
         [_2 ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined))])
          (scm:lambda (f3)
            (scm:letrec ([go4 (scm:lambda (v5)
              (scm:cond
                [(Leaf? v5) mempty1]
                [(Node? v5) (((rt:record-ref _2 (scm:string->symbol "append")) (go4 (Node-value4 v5))) (((rt:record-ref _2 (scm:string->symbol "append")) (f3 (Node-value3 v5))) (go4 (Node-value5 v5))))]
                [scm:else (rt:fail)]))])
              go4)))))))

  (scm:define foldableWithIndexMap
    (scm:list (scm:cons (scm:string->symbol "foldrWithIndex") (scm:lambda (f0)
      (scm:lambda (z1)
        (scm:letrec ([go2 (scm:lambda (m$p3 z$p4)
          (scm:cond
            [(Leaf? m$p3) z$p4]
            [(Node? m$p3) (go2 (Node-value4 m$p3) (((f0 (Node-value2 m$p3)) (Node-value3 m$p3)) (go2 (Node-value5 m$p3) z$p4)))]
            [scm:else (rt:fail)]))])
          (scm:lambda (m3)
            (go2 m3 z1)))))) (scm:cons (scm:string->symbol "foldlWithIndex") (scm:lambda (f0)
      (scm:lambda (z1)
        (scm:letrec ([go2 (scm:lambda (z$p3 m$p4)
          (scm:cond
            [(Leaf? m$p4) z$p3]
            [(Node? m$p4) (go2 (((f0 (Node-value2 m$p4)) (go2 z$p3 (Node-value4 m$p4))) (Node-value3 m$p4)) (Node-value5 m$p4))]
            [scm:else (rt:fail)]))])
          (scm:lambda (m3)
            (go2 z1 m3)))))) (scm:cons (scm:string->symbol "foldMapWithIndex") (scm:lambda (dictMonoid0)
      (scm:let*
        ([mempty1 (rt:record-ref dictMonoid0 (scm:string->symbol "mempty"))]
         [_2 ((rt:record-ref dictMonoid0 (scm:string->symbol "Semigroup0")) (scm:quote undefined))])
          (scm:lambda (f3)
            (scm:letrec ([go4 (scm:lambda (v5)
              (scm:cond
                [(Leaf? v5) mempty1]
                [(Node? v5) (((rt:record-ref _2 (scm:string->symbol "append")) (go4 (Node-value4 v5))) (((rt:record-ref _2 (scm:string->symbol "append")) ((f3 (Node-value2 v5)) (Node-value3 v5))) (go4 (Node-value5 v5))))]
                [scm:else (rt:fail)]))])
              go4))))) (scm:cons (scm:string->symbol "Foldable0") (scm:lambda (_)
      foldableMap))))

  (scm:define keys
    (scm:letrec ([go0 (scm:lambda (m$p1 z$p2)
      (scm:cond
        [(Leaf? m$p1) z$p2]
        [(Node? m$p1) (go0 (Node-value4 m$p1) (scm:cons (Node-value2 m$p1) (go0 (Node-value5 m$p1) z$p2)))]
        [scm:else (rt:fail)]))])
      (scm:lambda (m1)
        (go0 m1 (scm:quote ())))))

  (rt:define-lazy $lazy-traversableMap "traversableMap" "Data.Map.Internal"
    (scm:list (scm:cons (scm:string->symbol "traverse") (scm:lambda (dictApplicative0)
      (scm:let ([Apply01 ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined))])
        (scm:lambda (f2)
          (scm:letrec ([go3 (scm:lambda (v4)
            (scm:cond
              [(Leaf? v4) ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) Leaf)]
              [(Node? v4) (scm:let*
                ([_5 (Node-value0 v4)]
                 [_6 (Node-value2 v4)]
                 [_7 (Node-value1 v4)])
                  (((rt:record-ref Apply01 (scm:string->symbol "apply")) (((rt:record-ref Apply01 (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref Apply01 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (l$p8)
                    (scm:lambda (v$p9)
                      (scm:lambda (r$p10)
                        (Node* _5 _7 _6 v$p9 l$p8 r$p10))))) (go3 (Node-value4 v4)))) (f2 (Node-value3 v4)))) (go3 (Node-value5 v4))))]
              [scm:else (rt:fail)]))])
            go3))))) (scm:cons (scm:string->symbol "sequence") (scm:lambda (dictApplicative0)
      (((rt:record-ref ($lazy-traversableMap) (scm:string->symbol "traverse")) dictApplicative0) identity))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
      functorMap)) (scm:cons (scm:string->symbol "Foldable1") (scm:lambda (_)
      foldableMap))))

  (scm:define traversableMap
    ($lazy-traversableMap))

  (scm:define traversableWithIndexMap
    (scm:list (scm:cons (scm:string->symbol "traverseWithIndex") (scm:lambda (dictApplicative0)
      (scm:let ([Apply01 ((rt:record-ref dictApplicative0 (scm:string->symbol "Apply0")) (scm:quote undefined))])
        (scm:lambda (f2)
          (scm:letrec ([go3 (scm:lambda (v4)
            (scm:cond
              [(Leaf? v4) ((rt:record-ref dictApplicative0 (scm:string->symbol "pure")) Leaf)]
              [(Node? v4) (scm:let*
                ([_5 (Node-value0 v4)]
                 [_6 (Node-value2 v4)]
                 [_7 (Node-value1 v4)])
                  (((rt:record-ref Apply01 (scm:string->symbol "apply")) (((rt:record-ref Apply01 (scm:string->symbol "apply")) (((rt:record-ref ((rt:record-ref Apply01 (scm:string->symbol "Functor0")) (scm:quote undefined)) (scm:string->symbol "map")) (scm:lambda (l$p8)
                    (scm:lambda (v$p9)
                      (scm:lambda (r$p10)
                        (Node* _5 _7 _6 v$p9 l$p8 r$p10))))) (go3 (Node-value4 v4)))) ((f2 _6) (Node-value3 v4)))) (go3 (Node-value5 v4))))]
              [scm:else (rt:fail)]))])
            go3))))) (scm:cons (scm:string->symbol "FunctorWithIndex0") (scm:lambda (_)
      functorWithIndexMap)) (scm:cons (scm:string->symbol "FoldableWithIndex1") (scm:lambda (_)
      foldableWithIndexMap)) (scm:cons (scm:string->symbol "Traversable2") (scm:lambda (_)
      traversableMap))))

  (scm:define values
    (scm:letrec ([go0 (scm:lambda (m$p1 z$p2)
      (scm:cond
        [(Leaf? m$p1) z$p2]
        [(Node? m$p1) (go0 (Node-value4 m$p1) (scm:cons (Node-value3 m$p1) (go0 (Node-value5 m$p1) z$p2)))]
        [scm:else (rt:fail)]))])
      (scm:lambda (m1)
        (go0 m1 (scm:quote ())))))

  (scm:define foldSubmapBy
    (scm:lambda (dictOrd0)
      (scm:lambda (appendFn1)
        (scm:lambda (memptyValue2)
          (scm:lambda (kmin3)
            (scm:lambda (kmax4)
              (scm:lambda (f5)
                (scm:let*
                  ([tooSmall6 (scm:cond
                    [(Data.Maybe.Just? kmin3) (scm:let ([_6 (Data.Maybe.Just-value0 kmin3)])
                      (scm:lambda (k7)
                        (Data.Ordering.LT? (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) k7) _6))))]
                    [(Data.Maybe.Nothing? kmin3) (scm:lambda (v6)
                      #f)]
                    [scm:else (rt:fail)])]
                   [tooLarge7 (scm:cond
                    [(Data.Maybe.Just? kmax4) (scm:let ([_7 (Data.Maybe.Just-value0 kmax4)])
                      (scm:lambda (k8)
                        (Data.Ordering.GT? (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) k8) _7))))]
                    [(Data.Maybe.Nothing? kmax4) (scm:lambda (v7)
                      #f)]
                    [scm:else (rt:fail)])]
                   [inBounds8 (scm:cond
                    [(Data.Maybe.Just? kmin3) (scm:cond
                      [(Data.Maybe.Just? kmax4) (scm:let*
                        ([_8 (Data.Maybe.Just-value0 kmax4)]
                         [_9 (Data.Maybe.Just-value0 kmin3)])
                          (scm:lambda (k10)
                            (scm:and (scm:not (Data.Ordering.GT? (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) _9) k10))) (scm:not (Data.Ordering.GT? (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) k10) _8))))))]
                      [(Data.Maybe.Nothing? kmax4) (scm:let ([_8 (Data.Maybe.Just-value0 kmin3)])
                        (scm:lambda (k9)
                          (scm:not (Data.Ordering.GT? (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) _8) k9)))))]
                      [scm:else (rt:fail)])]
                    [(Data.Maybe.Nothing? kmin3) (scm:cond
                      [(Data.Maybe.Just? kmax4) (scm:let ([_8 (Data.Maybe.Just-value0 kmax4)])
                        (scm:lambda (k9)
                          (scm:not (Data.Ordering.GT? (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) k9) _8)))))]
                      [(Data.Maybe.Nothing? kmax4) (scm:lambda (v8)
                        #t)]
                      [scm:else (rt:fail)])]
                    [scm:else (rt:fail)])])
                    (scm:letrec ([go9 (scm:lambda (v10)
                      (scm:cond
                        [(Leaf? v10) memptyValue2]
                        [(Node? v10) ((appendFn1 ((appendFn1 (scm:cond
                          [(tooSmall6 (Node-value2 v10)) memptyValue2]
                          [scm:else (go9 (Node-value4 v10))])) (scm:cond
                          [(inBounds8 (Node-value2 v10)) ((f5 (Node-value2 v10)) (Node-value3 v10))]
                          [scm:else memptyValue2]))) (scm:cond
                          [(tooLarge7 (Node-value2 v10)) memptyValue2]
                          [scm:else (go9 (Node-value5 v10))]))]
                        [scm:else (rt:fail)]))])
                      go9)))))))))

  (scm:define foldSubmap
    (scm:lambda (dictOrd0)
      (scm:lambda (dictMonoid1)
        (((foldSubmapBy dictOrd0) (rt:record-ref ((rt:record-ref dictMonoid1 (scm:string->symbol "Semigroup0")) (scm:quote undefined)) (scm:string->symbol "append"))) (rt:record-ref dictMonoid1 (scm:string->symbol "mempty"))))))

  (scm:define findMin
    (scm:lambda (v0)
      (scm:cond
        [(Leaf? v0) Data.Maybe.Nothing]
        [(Node? v0) (scm:cond
          [(Leaf? (Node-value4 v0)) (Data.Maybe.Just (scm:list (scm:cons (scm:string->symbol "key") (Node-value2 v0)) (scm:cons (scm:string->symbol "value") (Node-value3 v0))))]
          [scm:else (findMin (Node-value4 v0))])]
        [scm:else (rt:fail)])))

  (scm:define lookupGT
    (scm:lambda (dictOrd0)
      (scm:lambda (k1)
        (scm:letrec ([go2 (scm:lambda (v3)
          (scm:cond
            [(Leaf? v3) Data.Maybe.Nothing]
            [(Node? v3) (scm:let ([v14 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) k1) (Node-value2 v3))])
              (scm:cond
                [(Data.Ordering.LT? v14) (scm:let ([v25 (go2 (Node-value4 v3))])
                  (scm:cond
                    [(Data.Maybe.Nothing? v25) (Data.Maybe.Just (scm:list (scm:cons (scm:string->symbol "key") (Node-value2 v3)) (scm:cons (scm:string->symbol "value") (Node-value3 v3))))]
                    [scm:else v25]))]
                [(Data.Ordering.GT? v14) (go2 (Node-value5 v3))]
                [(Data.Ordering.EQ? v14) (findMin (Node-value5 v3))]
                [scm:else (rt:fail)]))]
            [scm:else (rt:fail)]))])
          go2))))

  (scm:define findMax
    (scm:lambda (v0)
      (scm:cond
        [(Leaf? v0) Data.Maybe.Nothing]
        [(Node? v0) (scm:cond
          [(Leaf? (Node-value5 v0)) (Data.Maybe.Just (scm:list (scm:cons (scm:string->symbol "key") (Node-value2 v0)) (scm:cons (scm:string->symbol "value") (Node-value3 v0))))]
          [scm:else (findMax (Node-value5 v0))])]
        [scm:else (rt:fail)])))

  (scm:define lookupLT
    (scm:lambda (dictOrd0)
      (scm:lambda (k1)
        (scm:letrec ([go2 (scm:lambda (v3)
          (scm:cond
            [(Leaf? v3) Data.Maybe.Nothing]
            [(Node? v3) (scm:let ([v14 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) k1) (Node-value2 v3))])
              (scm:cond
                [(Data.Ordering.LT? v14) (go2 (Node-value4 v3))]
                [(Data.Ordering.GT? v14) (scm:let ([v25 (go2 (Node-value5 v3))])
                  (scm:cond
                    [(Data.Maybe.Nothing? v25) (Data.Maybe.Just (scm:list (scm:cons (scm:string->symbol "key") (Node-value2 v3)) (scm:cons (scm:string->symbol "value") (Node-value3 v3))))]
                    [scm:else v25]))]
                [(Data.Ordering.EQ? v14) (findMax (Node-value4 v3))]
                [scm:else (rt:fail)]))]
            [scm:else (rt:fail)]))])
          go2))))

  (scm:define filterWithKey
    (scm:lambda (dictOrd0)
      (scm:lambda (f1)
        (scm:letrec ([go2 (scm:lambda (v3)
          (scm:cond
            [(Leaf? v3) Leaf]
            [(Node? v3) (scm:cond
              [((f1 (Node-value2 v3)) (Node-value3 v3)) (unsafeBalancedNode (Node-value2 v3) (Node-value3 v3) (go2 (Node-value4 v3)) (go2 (Node-value5 v3)))]
              [scm:else (unsafeJoinNodes (go2 (Node-value4 v3)) (go2 (Node-value5 v3)))])]
            [scm:else (rt:fail)]))])
          go2))))

  (scm:define filterKeys
    (scm:lambda (dictOrd0)
      (scm:lambda (f1)
        (scm:letrec ([go2 (scm:lambda (v3)
          (scm:cond
            [(Leaf? v3) Leaf]
            [(Node? v3) (scm:cond
              [(f1 (Node-value2 v3)) (unsafeBalancedNode (Node-value2 v3) (Node-value3 v3) (go2 (Node-value4 v3)) (go2 (Node-value5 v3)))]
              [scm:else (unsafeJoinNodes (go2 (Node-value4 v3)) (go2 (Node-value5 v3)))])]
            [scm:else (rt:fail)]))])
          go2))))

  (scm:define filter
    (scm:lambda (dictOrd0)
      (scm:lambda (x1)
        ((filterWithKey dictOrd0) (scm:lambda (v2)
          x1)))))

  (scm:define eqMap
    (scm:lambda (dictEq0)
      (scm:lambda (dictEq11)
        (scm:list (scm:cons (scm:string->symbol "eq") (scm:lambda (xs2)
          (scm:lambda (ys3)
            (scm:cond
              [(Leaf? xs2) (Leaf? ys3)]
              [(Node? xs2) (scm:and (Node? ys3) (scm:and (scm:fx=? (Node-value1 xs2) (Node-value1 ys3)) (((rt:record-ref ((eqMapIter dictEq0) dictEq11) (scm:string->symbol "eq")) (IterNode* xs2 IterLeaf)) (IterNode* ys3 IterLeaf))))]
              [scm:else (rt:fail)]))))))))

  (scm:define ordMap
    (scm:lambda (dictOrd0)
      (scm:let*
        ([ordMapIter11 (ordMapIter dictOrd0)]
         [eqMap12 (eqMap ((rt:record-ref dictOrd0 (scm:string->symbol "Eq0")) (scm:quote undefined)))])
          (scm:lambda (dictOrd13)
            (scm:let ([eqMap24 (eqMap12 ((rt:record-ref dictOrd13 (scm:string->symbol "Eq0")) (scm:quote undefined)))])
              (scm:list (scm:cons (scm:string->symbol "compare") (scm:lambda (xs5)
                (scm:lambda (ys6)
                  (scm:cond
                    [(Leaf? xs5) (scm:cond
                      [(Leaf? ys6) Data.Ordering.EQ]
                      [scm:else Data.Ordering.LT])]
                    [(Leaf? ys6) Data.Ordering.GT]
                    [scm:else (((rt:record-ref (ordMapIter11 dictOrd13) (scm:string->symbol "compare")) (IterNode* xs5 IterLeaf)) (IterNode* ys6 IterLeaf))])))) (scm:cons (scm:string->symbol "Eq0") (scm:lambda (_)
                eqMap24))))))))

  (scm:define eq1Map
    (scm:lambda (dictEq0)
      (scm:list (scm:cons (scm:string->symbol "eq1") (scm:lambda (dictEq11)
        (rt:record-ref ((eqMap dictEq0) dictEq11) (scm:string->symbol "eq")))))))

  (scm:define ord1Map
    (scm:lambda (dictOrd0)
      (scm:let*
        ([ordMap11 (ordMap dictOrd0)]
         [_2 ((rt:record-ref dictOrd0 (scm:string->symbol "Eq0")) (scm:quote undefined))]
         [eq1Map13 (scm:list (scm:cons (scm:string->symbol "eq1") (scm:lambda (dictEq13)
          (rt:record-ref ((eqMap _2) dictEq13) (scm:string->symbol "eq")))))])
          (scm:list (scm:cons (scm:string->symbol "compare1") (scm:lambda (dictOrd14)
            (rt:record-ref (ordMap11 dictOrd14) (scm:string->symbol "compare")))) (scm:cons (scm:string->symbol "Eq10") (scm:lambda (_)
            eq1Map13))))))

  (scm:define empty
    Leaf)

  (scm:define fromFoldable
    (scm:lambda (dictOrd0)
      (scm:lambda (dictFoldable1)
        (((rt:record-ref dictFoldable1 (scm:string->symbol "foldl")) (scm:lambda (m2)
          (scm:lambda (v3)
            ((((insert dictOrd0) (Data.Tuple.Tuple-value0 v3)) (Data.Tuple.Tuple-value1 v3)) m2)))) Leaf))))

  (scm:define fromFoldableWith
    (scm:lambda (dictOrd0)
      (scm:lambda (dictFoldable1)
        (scm:lambda (f2)
          (scm:let ([f$p3 ((insertWith dictOrd0) (scm:lambda (b3)
            (scm:lambda (a4)
              ((f2 a4) b3))))])
            (((rt:record-ref dictFoldable1 (scm:string->symbol "foldl")) (scm:lambda (m4)
              (scm:lambda (v5)
                (((f$p3 (Data.Tuple.Tuple-value0 v5)) (Data.Tuple.Tuple-value1 v5)) m4)))) Leaf))))))

  (scm:define fromFoldableWithIndex
    (scm:lambda (dictOrd0)
      (scm:lambda (dictFoldableWithIndex1)
        (((rt:record-ref dictFoldableWithIndex1 (scm:string->symbol "foldlWithIndex")) (scm:lambda (k2)
          (scm:lambda (m3)
            (scm:lambda (v4)
              ((((insert dictOrd0) k2) v4) m3))))) Leaf))))

  (scm:define monoidSemigroupMap
    (scm:lambda (_)
      (scm:lambda (dictOrd1)
        (scm:let ([semigroupMap22 ((semigroupMap (scm:quote undefined)) dictOrd1)])
          (scm:lambda (dictSemigroup3)
            (scm:let ([semigroupMap34 (semigroupMap22 dictSemigroup3)])
              (scm:list (scm:cons (scm:string->symbol "mempty") Leaf) (scm:cons (scm:string->symbol "Semigroup0") (scm:lambda (_)
                semigroupMap34)))))))))

  (scm:define submap
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (kmin2)
          (scm:lambda (kmax3)
            ((((((foldSubmapBy dictOrd0) (scm:lambda (m14)
              (scm:lambda (m25)
                (unsafeUnionWith compare1 Data.Function.const m14 m25)))) Leaf) kmin2) kmax3) singleton))))))

  (scm:define unions
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (dictFoldable2)
          (((rt:record-ref dictFoldable2 (scm:string->symbol "foldl")) (scm:lambda (m13)
            (scm:lambda (m24)
              (unsafeUnionWith compare1 Data.Function.const m13 m24)))) Leaf)))))

  (scm:define difference
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (m12)
          (scm:lambda (m23)
            (unsafeDifference compare1 m12 m23))))))

  (scm:define delete
    (scm:lambda (dictOrd0)
      (scm:lambda (k1)
        (scm:letrec ([go2 (scm:lambda (v3)
          (scm:cond
            [(Leaf? v3) Leaf]
            [(Node? v3) (scm:let ([v14 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) k1) (Node-value2 v3))])
              (scm:cond
                [(Data.Ordering.LT? v14) (unsafeBalancedNode (Node-value2 v3) (Node-value3 v3) (go2 (Node-value4 v3)) (Node-value5 v3))]
                [(Data.Ordering.GT? v14) (unsafeBalancedNode (Node-value2 v3) (Node-value3 v3) (Node-value4 v3) (go2 (Node-value5 v3)))]
                [(Data.Ordering.EQ? v14) (unsafeJoinNodes (Node-value4 v3) (Node-value5 v3))]
                [scm:else (rt:fail)]))]
            [scm:else (rt:fail)]))])
          go2))))

  (scm:define checkValid
    (scm:lambda (dictOrd0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:cond
          [(Leaf? v2) #t]
          [(Node? v2) (scm:cond
            [(Leaf? (Node-value4 v2)) (scm:cond
              [(Leaf? (Node-value5 v2)) #t]
              [(Node? (Node-value5 v2)) (scm:and (scm:fx=? (Node-value0 v2) 2) (scm:and (scm:fx=? (Node-value0 (Node-value5 v2)) 1) (scm:and (scm:fx>? (Node-value1 v2) (Node-value1 (Node-value5 v2))) (scm:and (Data.Ordering.GT? (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) (Node-value2 (Node-value5 v2))) (Node-value2 v2))) (go1 (Node-value5 v2))))))]
              [scm:else (rt:fail)])]
            [(Node? (Node-value4 v2)) (scm:cond
              [(Leaf? (Node-value5 v2)) (scm:and (scm:fx=? (Node-value0 v2) 2) (scm:and (scm:fx=? (Node-value0 (Node-value4 v2)) 1) (scm:and (scm:fx>? (Node-value1 v2) (Node-value1 (Node-value4 v2))) (scm:and (Data.Ordering.LT? (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) (Node-value2 (Node-value4 v2))) (Node-value2 v2))) (go1 (Node-value4 v2))))))]
              [(Node? (Node-value5 v2)) (scm:and (scm:fx>? (Node-value0 v2) (Node-value0 (Node-value5 v2))) (scm:and (Data.Ordering.GT? (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) (Node-value2 (Node-value5 v2))) (Node-value2 v2))) (scm:and (scm:fx>? (Node-value0 v2) (Node-value0 (Node-value4 v2))) (scm:let ([_3 (scm:fx- (Node-value0 (Node-value5 v2)) (Node-value0 (Node-value4 v2)))])
                (scm:and (Data.Ordering.LT? (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) (Node-value2 (Node-value4 v2))) (Node-value2 v2))) (scm:and (scm:cond
                  [(scm:fx>=? _3 0) (scm:fx<? _3 2)]
                  [scm:else (scm:fx<? (scm:fx- _3) 2)]) (scm:and (scm:fx=? (scm:fx+ (scm:fx+ (Node-value1 (Node-value5 v2)) (Node-value1 (Node-value4 v2))) 1) (Node-value1 v2)) (scm:and (go1 (Node-value4 v2)) (go1 (Node-value5 v2))))))))))]
              [scm:else (rt:fail)])]
            [scm:else (rt:fail)])]
          [scm:else (rt:fail)]))])
        go1)))

  (scm:define catMaybes
    (scm:lambda (dictOrd0)
      ((mapMaybeWithKey dictOrd0) (scm:lambda (v1)
        identity))))

  (scm:define applyMap
    (scm:lambda (dictOrd0)
      (scm:list (scm:cons (scm:string->symbol "apply") (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (m12)
          (scm:lambda (m23)
            (unsafeIntersectionWith compare1 identity m12 m23))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
        functorMap)))))

  (scm:define bindMap
    (scm:lambda (dictOrd0)
      (scm:let ([applyMap11 (scm:list (scm:cons (scm:string->symbol "apply") (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (m12)
          (scm:lambda (m23)
            (unsafeIntersectionWith compare1 identity m12 m23))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
        functorMap)))])
        (scm:list (scm:cons (scm:string->symbol "bind") (scm:lambda (m2)
          (scm:lambda (f3)
            (((mapMaybeWithKey dictOrd0) (scm:lambda (k4)
              (scm:letrec ([go5 (scm:lambda (v6)
                (scm:cond
                  [(Leaf? v6) Data.Maybe.Nothing]
                  [(Node? v6) (scm:let ([v17 (((rt:record-ref dictOrd0 (scm:string->symbol "compare")) k4) (Node-value2 v6))])
                    (scm:cond
                      [(Data.Ordering.LT? v17) (go5 (Node-value4 v6))]
                      [(Data.Ordering.GT? v17) (go5 (Node-value5 v6))]
                      [(Data.Ordering.EQ? v17) (Data.Maybe.Just (Node-value3 v6))]
                      [scm:else (rt:fail)]))]
                  [scm:else (rt:fail)]))])
                (scm:lambda (x6)
                  (go5 (f3 x6)))))) m2)))) (scm:cons (scm:string->symbol "Apply0") (scm:lambda (_)
          applyMap11))))))

  (scm:define anyWithKey
    (scm:lambda (predicate0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:cond
          [(Leaf? v2) #f]
          [(Node? v2) (scm:or ((predicate0 (Node-value2 v2)) (Node-value3 v2)) (scm:or (go1 (Node-value4 v2)) (go1 (Node-value5 v2))))]
          [scm:else (rt:fail)]))])
        go1)))

  (scm:define any
    (scm:lambda (predicate0)
      (scm:letrec ([go1 (scm:lambda (v2)
        (scm:cond
          [(Leaf? v2) #f]
          [(Node? v2) (scm:or (predicate0 (Node-value3 v2)) (scm:or (go1 (Node-value4 v2)) (go1 (Node-value5 v2))))]
          [scm:else (rt:fail)]))])
        go1)))

  (scm:define alter
    (scm:lambda (dictOrd0)
      (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (f2)
          (scm:lambda (k3)
            (scm:lambda (m4)
              (scm:let*
                ([v5 (unsafeSplit compare1 k3 m4)]
                 [v26 (f2 (Split-value0 v5))])
                  (scm:cond
                    [(Data.Maybe.Nothing? v26) (unsafeJoinNodes (Split-value1 v5) (Split-value2 v5))]
                    [(Data.Maybe.Just? v26) (unsafeBalancedNode k3 (Data.Maybe.Just-value0 v26) (Split-value1 v5) (Split-value2 v5))]
                    [scm:else (rt:fail)]))))))))

  (scm:define altMap
    (scm:lambda (dictOrd0)
      (scm:list (scm:cons (scm:string->symbol "alt") (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (m12)
          (scm:lambda (m23)
            (unsafeUnionWith compare1 Data.Function.const m12 m23))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
        functorMap)))))

  (scm:define plusMap
    (scm:lambda (dictOrd0)
      (scm:let ([altMap11 (scm:list (scm:cons (scm:string->symbol "alt") (scm:let ([compare1 (rt:record-ref dictOrd0 (scm:string->symbol "compare"))])
        (scm:lambda (m12)
          (scm:lambda (m23)
            (unsafeUnionWith compare1 Data.Function.const m12 m23))))) (scm:cons (scm:string->symbol "Functor0") (scm:lambda (_)
        functorMap)))])
        (scm:list (scm:cons (scm:string->symbol "empty") Leaf) (scm:cons (scm:string->symbol "Alt0") (scm:lambda (_)
          altMap11)))))))
