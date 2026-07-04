<?php

namespace Data\Number\Format;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Number.Format/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Prelude/index.php';

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...$merged);
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Number_Format_compose
$Data_Number_Format_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Number_Format_clamp
$Data_Number_Format_clamp = ($GLOBALS['Data_Ord_clamp'])($GLOBALS['Data_Ord_ordInt']);

// Data_Number_Format_Precision
$Data_Number_Format_Precision = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = new Phpurs_Data1("Precision", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Number_Format_Fixed
$Data_Number_Format_Fixed = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = new Phpurs_Data1("Fixed", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Number_Format_Exponential
$Data_Number_Format_Exponential = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = new Phpurs_Data1("Exponential", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Number_Format_toStringWith
$Data_Number_Format_toStringWith = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Precision")) {
$p = ($__case_0)->v0;
return ($GLOBALS['Data_Number_Format_toPrecisionNative'])($p);
} else {
if ((($__case_0)->tag === "Fixed")) {
$p = ($__case_0)->v0;
return ($GLOBALS['Data_Number_Format_toFixedNative'])($p);
} else {
if ((($__case_0)->tag === "Exponential")) {
$p = ($__case_0)->v0;
return ($GLOBALS['Data_Number_Format_toExponentialNative'])($p);
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Number_Format_precision
$Data_Number_Format_precision = ($GLOBALS['Data_Number_Format_compose'])($GLOBALS['Data_Number_Format_Precision'], ($GLOBALS['Data_Number_Format_clamp'])(1, 21));

// Data_Number_Format_fixed
$Data_Number_Format_fixed = ($GLOBALS['Data_Number_Format_compose'])($GLOBALS['Data_Number_Format_Fixed'], ($GLOBALS['Data_Number_Format_clamp'])(0, 20));

// Data_Number_Format_exponential
$Data_Number_Format_exponential = ($GLOBALS['Data_Number_Format_compose'])($GLOBALS['Data_Number_Format_Exponential'], ($GLOBALS['Data_Number_Format_clamp'])(0, 20));

