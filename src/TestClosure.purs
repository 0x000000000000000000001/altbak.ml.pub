module TestClosure where
import Prelude
test :: Int
test = 
  let f = \x y -> x + y
  in f 1 2
