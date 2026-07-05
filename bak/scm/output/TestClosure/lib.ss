#!r6rs
#!chezscheme
(library
  (TestClosure lib)
  (export
    test)
  (import
    (prefix (chezscheme) scm:)
    (prefix (purescm runtime) rt:))

  (scm:define test
    3))
