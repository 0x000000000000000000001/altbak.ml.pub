<?php

namespace App;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.Ackermann/index.php';
require_once __DIR__ . '/../Test.AstTree/index.php';
require_once __DIR__ . '/../Test.Church/index.php';
require_once __DIR__ . '/../Test.Fib/index.php';
require_once __DIR__ . '/../Test.FileOps/index.php';
require_once __DIR__ . '/../Test.LazyEvaluation/index.php';
require_once __DIR__ . '/../Test.ListOps/index.php';
require_once __DIR__ . '/../Test.Polymorphism/index.php';
require_once __DIR__ . '/../Test.Primes/index.php';
require_once __DIR__ . '/../Test.RBTree/index.php';
require_once __DIR__ . '/../Test.Records/index.php';
require_once __DIR__ . '/../Test.StateMonad/index.php';
require_once __DIR__ . '/../Test.TCO/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// App_discard
$App_discard = ($Control_Bind_discard)($Control_Bind_discardUnit, $Effect_bindEffect);

// App_pure
$App_pure = ($Control_Applicative_pure)($Effect_applicativeEffect);

// App_main
$App_main = ($App_discard)($Test_AstTree_describe, (function() use (&$App_discard, &$Test_AstTree_act, &$Test_Fib_describe, &$Test_Fib_act, &$Test_ListOps_describe, &$Test_ListOps_act, &$Test_TCO_describe, &$Test_TCO_act, &$Test_Records_describe, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_AstTree_act, &$Test_Fib_describe, &$Test_Fib_act, &$Test_ListOps_describe, &$Test_ListOps_act, &$Test_TCO_describe, &$Test_TCO_act, &$Test_Records_describe, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_AstTree_act, (function() use (&$App_discard, &$Test_Fib_describe, &$Test_Fib_act, &$Test_ListOps_describe, &$Test_ListOps_act, &$Test_TCO_describe, &$Test_TCO_act, &$Test_Records_describe, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_Fib_describe, &$Test_Fib_act, &$Test_ListOps_describe, &$Test_ListOps_act, &$Test_TCO_describe, &$Test_TCO_act, &$Test_Records_describe, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_Fib_describe, (function() use (&$App_discard, &$Test_Fib_act, &$Test_ListOps_describe, &$Test_ListOps_act, &$Test_TCO_describe, &$Test_TCO_act, &$Test_Records_describe, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_Fib_act, &$Test_ListOps_describe, &$Test_ListOps_act, &$Test_TCO_describe, &$Test_TCO_act, &$Test_Records_describe, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_Fib_act, (function() use (&$App_discard, &$Test_ListOps_describe, &$Test_ListOps_act, &$Test_TCO_describe, &$Test_TCO_act, &$Test_Records_describe, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_ListOps_describe, &$Test_ListOps_act, &$Test_TCO_describe, &$Test_TCO_act, &$Test_Records_describe, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_ListOps_describe, (function() use (&$App_discard, &$Test_ListOps_act, &$Test_TCO_describe, &$Test_TCO_act, &$Test_Records_describe, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_ListOps_act, &$Test_TCO_describe, &$Test_TCO_act, &$Test_Records_describe, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_ListOps_act, (function() use (&$App_discard, &$Test_TCO_describe, &$Test_TCO_act, &$Test_Records_describe, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_TCO_describe, &$Test_TCO_act, &$Test_Records_describe, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_TCO_describe, (function() use (&$App_discard, &$Test_TCO_act, &$Test_Records_describe, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_TCO_act, &$Test_Records_describe, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_TCO_act, (function() use (&$App_discard, &$Test_Records_describe, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_Records_describe, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_Records_describe, (function() use (&$App_discard, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_Records_act, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_Records_act, (function() use (&$App_discard, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_Ackermann_describe, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_Ackermann_describe, (function() use (&$App_discard, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_Ackermann_act, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_Ackermann_act, (function() use (&$App_discard, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_Church_describe, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_Church_describe, (function() use (&$App_discard, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_Church_act, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_Church_act, (function() use (&$App_discard, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_Primes_describe, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_Primes_describe, (function() use (&$App_discard, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_Primes_act, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_Primes_act, (function() use (&$App_discard, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_RBTree_describe, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_RBTree_describe, (function() use (&$App_discard, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_RBTree_act, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_RBTree_act, (function() use (&$App_discard, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_Polymorphism_describe, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_Polymorphism_describe, (function() use (&$App_discard, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_Polymorphism_act, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_Polymorphism_act, (function() use (&$App_discard, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_StateMonad_describe, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_StateMonad_describe, (function() use (&$App_discard, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_StateMonad_act, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_StateMonad_act, (function() use (&$App_discard, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_LazyEvaluation_describe, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_LazyEvaluation_describe, (function() use (&$App_discard, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_LazyEvaluation_act, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_LazyEvaluation_act, (function() use (&$App_discard, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_FileOps_describe, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_FileOps_describe, (function() use (&$App_discard, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$Test_FileOps_act, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)($Test_FileOps_act, (function() use (&$App_discard, &$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_discard, &$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_discard)(($App_pure)($Data_Unit_unit), (function() use (&$App_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$App_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($App_pure)($Data_Unit_unit);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());

