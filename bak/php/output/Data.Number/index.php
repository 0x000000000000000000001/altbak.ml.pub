<?php

namespace Data\Number;

require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Number/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Number_tau
$Data_Number_tau = 6.283185307179586;

// Data_Number_sqrt2
$Data_Number_sqrt2 = 1.4142135623730951;

// Data_Number_sqrt1_2
$Data_Number_sqrt1_2 = 0.7071067811865476;

// Data_Number_pi
$Data_Number_pi = 3.141592653589793;

// Data_Number_log2e
$Data_Number_log2e = 1.4426950408889634;

// Data_Number_log10e
$Data_Number_log10e = 0.4342944819032518;

// Data_Number_ln2
$Data_Number_ln2 = 0.6931471805599453;

// Data_Number_ln10
$Data_Number_ln10 = 2.302585092994046;

// Data_Number_fromString
$Data_Number_fromString = (function() use (&$Data_Function_Uncurried_runFn4, &$Data_Number_fromStringImpl, &$Data_Number_isFinite, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__fn = function($str) use (&$Data_Function_Uncurried_runFn4, &$Data_Number_fromStringImpl, &$Data_Number_isFinite, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_Uncurried_runFn4)($Data_Number_fromStringImpl, $str, $Data_Number_isFinite, $Data_Maybe_Just, $Data_Maybe_Nothing);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Number_e
$Data_Number_e = 2.718281828459045;

