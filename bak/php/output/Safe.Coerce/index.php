<?php

namespace Safe\Coerce;

require_once __DIR__ . '/../Unsafe.Coerce/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Safe_Coerce_coerce
$Safe_Coerce_coerce = (function() use (&$Unsafe_Coerce_unsafeCoerce) {
  $__fn = function($__dollar____unused) use (&$Unsafe_Coerce_unsafeCoerce, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Unsafe_Coerce_unsafeCoerce;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

