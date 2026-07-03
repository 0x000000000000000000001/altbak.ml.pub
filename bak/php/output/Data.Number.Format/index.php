<?php

namespace Data\Number\Format;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Number.Format/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Number_Format_compose
$Data_Number_Format_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Number_Format_clamp
$Data_Number_Format_clamp = ($Data_Ord_clamp)($Data_Ord_ordInt);

// Data_Number_Format_Precision
$Data_Number_Format_Precision = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Precision", "values" => [$value0]];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Number_Format_Fixed
$Data_Number_Format_Fixed = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Fixed", "values" => [$value0]];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Number_Format_Exponential
$Data_Number_Format_Exponential = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Exponential", "values" => [$value0]];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Number_Format_toStringWith
$Data_Number_Format_toStringWith = (function() use (&$Data_Number_Format_toPrecisionNative, &$Data_Number_Format_toFixedNative, &$Data_Number_Format_toExponentialNative) {
  $__body = function($v) use (&$Data_Number_Format_toPrecisionNative, &$Data_Number_Format_toFixedNative, &$Data_Number_Format_toExponentialNative) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Precision")) {
$p = ($__case_0)->values[0];
return ($Data_Number_Format_toPrecisionNative)($p);
} else {
;
};
    if ((($__case_0)->tag === "Fixed")) {
$p = ($__case_0)->values[0];
return ($Data_Number_Format_toFixedNative)($p);
} else {
;
};
    if ((($__case_0)->tag === "Exponential")) {
$p = ($__case_0)->values[0];
return ($Data_Number_Format_toExponentialNative)($p);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Number_Format_toPrecisionNative, &$Data_Number_Format_toFixedNative, &$Data_Number_Format_toExponentialNative, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($v);
  };
  return $__fn;
})();

// Data_Number_Format_precision
$Data_Number_Format_precision = ($Data_Number_Format_compose)($Data_Number_Format_Precision, ($Data_Number_Format_clamp)(1, 21));

// Data_Number_Format_fixed
$Data_Number_Format_fixed = ($Data_Number_Format_compose)($Data_Number_Format_Fixed, ($Data_Number_Format_clamp)(0, 20));

// Data_Number_Format_exponential
$Data_Number_Format_exponential = ($Data_Number_Format_compose)($Data_Number_Format_Exponential, ($Data_Number_Format_clamp)(0, 20));

