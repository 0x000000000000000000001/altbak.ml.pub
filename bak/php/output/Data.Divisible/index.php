<?php

namespace Data\Divisible;

require_once __DIR__ . '/../Data.Comparison/index.php';
require_once __DIR__ . '/../Data.Divide/index.php';
require_once __DIR__ . '/../Data.Divisible/index.php';
require_once __DIR__ . '/../Data.Equivalence/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Op/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Predicate/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Divisible_Divisible$Dict
$Data_Divisible_Divisible__dollar__Dict = (function() {
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

// Data_Divisible_divisiblePredicate
$Data_Divisible_divisiblePredicate = ($Data_Divisible_Divisible__dollar__Dict)((object)["conquer" => ($Data_Predicate_Predicate)(($Data_Function_const)(true)), "Divide0" => (function() use (&$Data_Divide_dividePredicate) {
  $__fn = function($__dollar____unused) use (&$Data_Divide_dividePredicate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Divide_dividePredicate;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Divisible_divisibleOp
$Data_Divisible_divisibleOp = (function() use (&$Data_Divide_divideOp, &$Prim_undefined, &$Data_Divisible_Divisible__dollar__Dict, &$Data_Op_Op, &$Data_Function_const, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use (&$Data_Divide_divideOp, &$Prim_undefined, &$Data_Divisible_Divisible__dollar__Dict, &$Data_Op_Op, &$Data_Function_const, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$divideOp = ($Data_Divide_divideOp)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Divisible_Divisible__dollar__Dict)((object)["conquer" => ($Data_Op_Op)(($Data_Function_const)(($Data_Monoid_mempty)($dictMonoid))), "Divide0" => (function() use ($divideOp) {
  $__fn = function($__dollar____unused) use ($divideOp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $divideOp;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Divisible_divisibleEquivalence
$Data_Divisible_divisibleEquivalence = ($Data_Divisible_Divisible__dollar__Dict)((object)["conquer" => ($Data_Equivalence_Equivalence)((function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = true;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()), "Divide0" => (function() use (&$Data_Divide_divideEquivalence) {
  $__fn = function($__dollar____unused) use (&$Data_Divide_divideEquivalence, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Divide_divideEquivalence;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Divisible_divisibleComparison
$Data_Divisible_divisibleComparison = ($Data_Divisible_Divisible__dollar__Dict)((object)["conquer" => ($Data_Comparison_Comparison)((function() use (&$Data_Ordering_EQ) {
  $__fn = function($v, $v1 = null) use (&$Data_Ordering_EQ, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ordering_EQ;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()), "Divide0" => (function() use (&$Data_Divide_divideComparison) {
  $__fn = function($__dollar____unused) use (&$Data_Divide_divideComparison, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Divide_divideComparison;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Divisible_conquer
$Data_Divisible_conquer = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->conquer;
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

