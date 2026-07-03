<?php

namespace Data\Comparison;

require_once __DIR__ . '/../Data.Comparison/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor.Contravariant/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Comparison_append
$Data_Comparison_append = ($Data_Semigroup_append)(($Data_Semigroup_semigroupFn)(($Data_Semigroup_semigroupFn)($Data_Ordering_semigroupOrdering)));

// Data_Comparison_Comparison
$Data_Comparison_Comparison = (function() {
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

// Data_Comparison_semigroupComparison
$Data_Comparison_semigroupComparison = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Comparison_Comparison, &$Data_Comparison_append) {
  $__body = function($v, $v1) use (&$Data_Comparison_Comparison, &$Data_Comparison_append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$p = $__case_0;
$q = $__case_1;
return ($Data_Comparison_Comparison)(($Data_Comparison_append)($p, $q));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Comparison_Comparison, &$Data_Comparison_append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $v1);
  };
  return $__fn;
})()]);

// Data_Comparison_newtypeComparison
$Data_Comparison_newtypeComparison = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
  $__fn = function($__dollar____unused) use (&$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Prim_undefined;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Comparison_monoidComparison
$Data_Comparison_monoidComparison = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Comparison_Comparison)((function() use (&$Data_Ordering_EQ) {
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
})()), "Semigroup0" => (function() use (&$Data_Comparison_semigroupComparison) {
  $__fn = function($__dollar____unused) use (&$Data_Comparison_semigroupComparison, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Comparison_semigroupComparison;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Comparison_defaultComparison
$Data_Comparison_defaultComparison = (function() use (&$Data_Comparison_Comparison, &$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_Comparison_Comparison, &$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Comparison_Comparison)(($Data_Ord_compare)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Comparison_contravariantComparison
$Data_Comparison_contravariantComparison = ($Data_Functor_Contravariant_Contravariant__dollar__Dict)((object)["cmap" => (function() use (&$Data_Comparison_Comparison, &$Data_Function_on) {
  $__body = function($f, $v) use (&$Data_Comparison_Comparison, &$Data_Function_on) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
return ($Data_Comparison_Comparison)(($Data_Function_on)($g, $f1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Comparison_Comparison, &$Data_Function_on, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f, $v);
  };
  return $__fn;
})()]);

