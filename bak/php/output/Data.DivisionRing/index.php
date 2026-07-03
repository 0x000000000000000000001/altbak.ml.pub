<?php

namespace Data\DivisionRing;

require_once __DIR__ . '/../Data.DivisionRing/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_DivisionRing_div
$Data_DivisionRing_div = ($Data_EuclideanRing_div)($Data_EuclideanRing_euclideanRingNumber);

// Data_DivisionRing_DivisionRing$Dict
$Data_DivisionRing_DivisionRing__dollar__Dict = (function() {
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

// Data_DivisionRing_recip
$Data_DivisionRing_recip = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->recip;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($dict);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($dict);
  };
  return $__fn;
})();

// Data_DivisionRing_rightDiv
$Data_DivisionRing_rightDiv = (function() use (&$Data_Semiring_mul, &$Prim_undefined, &$Data_DivisionRing_recip) {
  $__fn = function($dictDivisionRing) use (&$Data_Semiring_mul, &$Prim_undefined, &$Data_DivisionRing_recip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mul = ($Data_Semiring_mul)((((($dictDivisionRing)->Ring0)($Prim_undefined))->Semiring0)($Prim_undefined));
$recip1 = ($Data_DivisionRing_recip)($dictDivisionRing);
    $__res = (function() use ($mul, $recip1) {
  $__fn = function($a, $b = null) use ($mul, $recip1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($mul)($a, ($recip1)($b));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_DivisionRing_leftDiv
$Data_DivisionRing_leftDiv = (function() use (&$Data_Semiring_mul, &$Prim_undefined, &$Data_DivisionRing_recip) {
  $__fn = function($dictDivisionRing) use (&$Data_Semiring_mul, &$Prim_undefined, &$Data_DivisionRing_recip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mul = ($Data_Semiring_mul)((((($dictDivisionRing)->Ring0)($Prim_undefined))->Semiring0)($Prim_undefined));
$recip1 = ($Data_DivisionRing_recip)($dictDivisionRing);
    $__res = (function() use ($mul, $recip1) {
  $__fn = function($a, $b = null) use ($mul, $recip1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($mul)(($recip1)($b), $a);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_DivisionRing_divisionringNumber
$Data_DivisionRing_divisionringNumber = ($Data_DivisionRing_DivisionRing__dollar__Dict)((object)["recip" => (function() use (&$Data_DivisionRing_div) {
  $__fn = function($x) use (&$Data_DivisionRing_div, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_DivisionRing_div)(1.0, $x);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Ring0" => (function() use (&$Data_Ring_ringNumber) {
  $__fn = function($__dollar____unused) use (&$Data_Ring_ringNumber, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ring_ringNumber;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

