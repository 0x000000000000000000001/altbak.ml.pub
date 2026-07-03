<?php

namespace Data\Equivalence;

require_once __DIR__ . '/../Data.Comparison/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Equivalence/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor.Contravariant/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Equivalence_conj
$Data_Equivalence_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Equivalence_eq
$Data_Equivalence_eq = ($Data_Eq_eq)($Data_Ordering_eqOrdering);

// Data_Equivalence_Equivalence
$Data_Equivalence_Equivalence = (function() {
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

// Data_Equivalence_semigroupEquivalence
$Data_Equivalence_semigroupEquivalence = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Equivalence_Equivalence, &$Data_Equivalence_conj) {
  $__body = function($v, $v1) use (&$Data_Equivalence_Equivalence, &$Data_Equivalence_conj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$p = $__case_0;
$q = $__case_1;
return ($Data_Equivalence_Equivalence)((function() use (&$Data_Equivalence_conj, $p, $q) {
  $__fn = function($a, $b = null) use (&$Data_Equivalence_conj, $p, $q, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Equivalence_conj)(($p)($a, $b), ($q)($a, $b));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Equivalence_Equivalence, &$Data_Equivalence_conj, $__body, &$__fn) {
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

// Data_Equivalence_newtypeEquivalence
$Data_Equivalence_newtypeEquivalence = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Equivalence_monoidEquivalence
$Data_Equivalence_monoidEquivalence = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Equivalence_Equivalence)((function() {
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
})()), "Semigroup0" => (function() use (&$Data_Equivalence_semigroupEquivalence) {
  $__fn = function($__dollar____unused) use (&$Data_Equivalence_semigroupEquivalence, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Equivalence_semigroupEquivalence;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Equivalence_defaultEquivalence
$Data_Equivalence_defaultEquivalence = (function() use (&$Data_Equivalence_Equivalence, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_Equivalence_Equivalence, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Equivalence_Equivalence)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Equivalence_contravariantEquivalence
$Data_Equivalence_contravariantEquivalence = ($Data_Functor_Contravariant_Contravariant__dollar__Dict)((object)["cmap" => (function() use (&$Data_Equivalence_Equivalence, &$Data_Function_on) {
  $__body = function($f, $v) use (&$Data_Equivalence_Equivalence, &$Data_Function_on) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
return ($Data_Equivalence_Equivalence)(($Data_Function_on)($g, $f1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Equivalence_Equivalence, &$Data_Function_on, $__body, &$__fn) {
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

// Data_Equivalence_comparisonEquivalence
$Data_Equivalence_comparisonEquivalence = (function() use (&$Data_Equivalence_Equivalence, &$Data_Equivalence_eq, &$Data_Ordering_EQ) {
  $__body = function($v) use (&$Data_Equivalence_Equivalence, &$Data_Equivalence_eq, &$Data_Ordering_EQ) {
    $__case_0 = $v;
    if (true) {
$p = $__case_0;
return ($Data_Equivalence_Equivalence)((function() use (&$Data_Equivalence_eq, $p, &$Data_Ordering_EQ) {
  $__fn = function($a, $b = null) use (&$Data_Equivalence_eq, $p, &$Data_Ordering_EQ, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Equivalence_eq)(($p)($a, $b), $Data_Ordering_EQ);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Equivalence_Equivalence, &$Data_Equivalence_eq, &$Data_Ordering_EQ, $__body, &$__fn) {
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

