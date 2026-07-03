<?php

namespace Data\Array\Partial;

require_once __DIR__ . '/../Data.Array/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Array_Partial_unsafeIndex
$Data_Array_Partial_unsafeIndex = ($Data_Array_unsafeIndex)($Prim_undefined);

// Data_Array_Partial_sub
$Data_Array_Partial_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Data_Array_Partial_tail
$Data_Array_Partial_tail = (function() use (&$Data_Array_slice, &$Data_Array_length) {
  $__fn = function($__dollar____unused, $xs = null) use (&$Data_Array_slice, &$Data_Array_length, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_slice)(1, ($Data_Array_length)($xs), $xs);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_Partial_last
$Data_Array_Partial_last = (function() use (&$Data_Array_Partial_unsafeIndex, &$Data_Array_Partial_sub, &$Data_Array_length) {
  $__fn = function($__dollar____unused, $xs = null) use (&$Data_Array_Partial_unsafeIndex, &$Data_Array_Partial_sub, &$Data_Array_length, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_Partial_unsafeIndex)($xs, ($Data_Array_Partial_sub)(($Data_Array_length)($xs), 1));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_Partial_init
$Data_Array_Partial_init = (function() use (&$Data_Array_slice, &$Data_Array_Partial_sub, &$Data_Array_length) {
  $__fn = function($__dollar____unused, $xs = null) use (&$Data_Array_slice, &$Data_Array_Partial_sub, &$Data_Array_length, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_slice)(0, ($Data_Array_Partial_sub)(($Data_Array_length)($xs), 1), $xs);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_Partial_head
$Data_Array_Partial_head = (function() use (&$Data_Array_Partial_unsafeIndex) {
  $__fn = function($__dollar____unused, $xs = null) use (&$Data_Array_Partial_unsafeIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_Partial_unsafeIndex)($xs, 0);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

