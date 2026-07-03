<?php

namespace Data\Number\Approximate;

require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Number.Approximate/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Number_Approximate_lessThanOrEq
$Data_Number_Approximate_lessThanOrEq = ($Data_Ord_lessThanOrEq)($Data_Ord_ordNumber);

// Data_Number_Approximate_sub
$Data_Number_Approximate_sub = ($Data_Ring_sub)($Data_Ring_ringNumber);

// Data_Number_Approximate_div
$Data_Number_Approximate_div = ($Data_EuclideanRing_div)($Data_EuclideanRing_euclideanRingNumber);

// Data_Number_Approximate_mul
$Data_Number_Approximate_mul = ($Data_Semiring_mul)($Data_Semiring_semiringNumber);

// Data_Number_Approximate_add
$Data_Number_Approximate_add = ($Data_Semiring_add)($Data_Semiring_semiringNumber);

// Data_Number_Approximate_not
$Data_Number_Approximate_not = ($Data_HeytingAlgebra_not)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Number_Approximate_Tolerance
$Data_Number_Approximate_Tolerance = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $x;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Number_Approximate_Fraction
$Data_Number_Approximate_Fraction = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $x;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Number_Approximate_eqRelative
$Data_Number_Approximate_eqRelative = (function() use (&$Data_Number_Approximate_lessThanOrEq, &$Data_Number_abs, &$Data_Number_Approximate_sub, &$Data_Number_Approximate_div, &$Data_Number_Approximate_mul, &$Data_Number_Approximate_add) {
  $__body = function($v, $v1, $v2) use (&$Data_Number_Approximate_lessThanOrEq, &$Data_Number_abs, &$Data_Number_Approximate_sub, &$Data_Number_Approximate_div, &$Data_Number_Approximate_mul, &$Data_Number_Approximate_add) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if (($__case_1 === 0.0)) {
$frac = $__case_0;
$y = $__case_2;
return ($Data_Number_Approximate_lessThanOrEq)(($Data_Number_abs)($y), $frac);
} else {
;
};
    if (($__case_2 === 0.0)) {
$frac = $__case_0;
$x = $__case_1;
return ($Data_Number_Approximate_lessThanOrEq)(($Data_Number_abs)($x), $frac);
} else {
;
};
    if (true) {
$frac = $__case_0;
$x = $__case_1;
$y = $__case_2;
return ($Data_Number_Approximate_lessThanOrEq)(($Data_Number_abs)(($Data_Number_Approximate_sub)($x, $y)), ($Data_Number_Approximate_div)(($Data_Number_Approximate_mul)($frac, ($Data_Number_abs)(($Data_Number_Approximate_add)($x, $y))), 2.0));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_Number_Approximate_lessThanOrEq, &$Data_Number_abs, &$Data_Number_Approximate_sub, &$Data_Number_Approximate_div, &$Data_Number_Approximate_mul, &$Data_Number_Approximate_add, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $v1, $v2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $v1, $v2);
  };
  return $__fn;
})();

// Data_Number_Approximate_eqApproximate
$Data_Number_Approximate_eqApproximate = (function() use (&$Data_Number_Approximate_Fraction, &$Data_Number_Approximate_eqRelative) {
$onePPM = ($Data_Number_Approximate_Fraction)(0.000001);
return ($Data_Number_Approximate_eqRelative)($onePPM);
})();

// Data_Number_Approximate_neqApproximate
$Data_Number_Approximate_neqApproximate = (function() use (&$Data_Number_Approximate_not, &$Data_Number_Approximate_eqApproximate) {
  $__fn = function($x, $y = null) use (&$Data_Number_Approximate_not, &$Data_Number_Approximate_eqApproximate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Number_Approximate_not)(($Data_Number_Approximate_eqApproximate)($x, $y));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Number_Approximate_eqAbsolute
$Data_Number_Approximate_eqAbsolute = (function() use (&$Data_Number_Approximate_lessThanOrEq, &$Data_Number_abs, &$Data_Number_Approximate_sub) {
  $__body = function($v, $x, $y) use (&$Data_Number_Approximate_lessThanOrEq, &$Data_Number_abs, &$Data_Number_Approximate_sub) {
    $__case_0 = $v;
    $__case_1 = $x;
    $__case_2 = $y;
    if (true) {
$tolerance = $__case_0;
$x1 = $__case_1;
$y1 = $__case_2;
return ($Data_Number_Approximate_lessThanOrEq)(($Data_Number_abs)(($Data_Number_Approximate_sub)($x1, $y1)), $tolerance);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $x = null, $y = null) use (&$Data_Number_Approximate_lessThanOrEq, &$Data_Number_abs, &$Data_Number_Approximate_sub, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $x, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $x, $y);
  };
  return $__fn;
})();

