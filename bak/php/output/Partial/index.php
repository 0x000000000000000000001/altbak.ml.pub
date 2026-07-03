<?php

namespace Partial;

require_once __DIR__ . '/../Partial/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Partial_crashWith
$Partial_crashWith = (function() use (&$Partial__crashWith) {
  $__fn = function($__dollar____unused) use (&$Partial__crashWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Partial__crashWith;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Partial_crashWith1
$Partial_crashWith1 = ($Partial_crashWith)($Prim_undefined);

// Partial_crash
$Partial_crash = (function() use (&$Partial_crashWith1) {
  $__fn = function($__dollar____unused) use (&$Partial_crashWith1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Partial_crashWith1)("Partial.crash: partial function");
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

