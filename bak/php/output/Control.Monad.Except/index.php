<?php

namespace Control\Monad\Except;

require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Except.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_Except_compose
$Control_Monad_Except_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_Except_unwrap
$Control_Monad_Except_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Control_Monad_Except_withExcept
$Control_Monad_Except_withExcept = ($Control_Monad_Except_Trans_withExceptT)($Data_Identity_functorIdentity);

// Control_Monad_Except_runExcept
$Control_Monad_Except_runExcept = ($Control_Monad_Except_compose)($Control_Monad_Except_unwrap, $Control_Monad_Except_Trans_runExceptT);

// Control_Monad_Except_mapExcept
$Control_Monad_Except_mapExcept = (function() use (&$Control_Monad_Except_Trans_mapExceptT, &$Control_Monad_Except_compose, &$Data_Identity_Identity, &$Control_Monad_Except_unwrap) {
  $__fn = function($f) use (&$Control_Monad_Except_Trans_mapExceptT, &$Control_Monad_Except_compose, &$Data_Identity_Identity, &$Control_Monad_Except_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Except_Trans_mapExceptT)(($Control_Monad_Except_compose)($Data_Identity_Identity, ($Control_Monad_Except_compose)($f, $Control_Monad_Except_unwrap)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

