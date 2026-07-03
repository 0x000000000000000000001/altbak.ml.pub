<?php

namespace Data\Array\ST\Partial;

require_once __DIR__ . '/../Control.Monad.ST/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Uncurried/index.php';
require_once __DIR__ . '/../Data.Array.ST/index.php';
require_once __DIR__ . '/../Data.Array.ST.Partial/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Array_ST_Partial_poke
$Data_Array_ST_Partial_poke = (function() use (&$Control_Monad_ST_Uncurried_runSTFn3, &$Data_Array_ST_Partial_pokeImpl) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_ST_Uncurried_runSTFn3, &$Data_Array_ST_Partial_pokeImpl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_ST_Uncurried_runSTFn3)($Data_Array_ST_Partial_pokeImpl);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_ST_Partial_peek
$Data_Array_ST_Partial_peek = (function() use (&$Control_Monad_ST_Uncurried_runSTFn2, &$Data_Array_ST_Partial_peekImpl) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_ST_Uncurried_runSTFn2, &$Data_Array_ST_Partial_peekImpl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_ST_Uncurried_runSTFn2)($Data_Array_ST_Partial_peekImpl);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

