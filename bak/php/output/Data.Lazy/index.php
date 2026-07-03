<?php

namespace Data\Lazy;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Lazy_append
$Data_Lazy_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Lazy_compose
$Data_Lazy_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Lazy_showLazy
$Data_Lazy_showLazy = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Lazy_append, &$Data_Lazy_force) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Lazy_append, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Lazy_append, $show, &$Data_Lazy_force) {
  $__fn = function($x) use (&$Data_Lazy_append, $show, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_append)("(defer \_ -> ", ($Data_Lazy_append)(($show)(($Data_Lazy_force)($x)), ")"));
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

// Data_Lazy_semiringLazy
$Data_Lazy_semiringLazy = (function() use (&$Data_Semiring_add, &$Data_Semiring_zero, &$Data_Semiring_mul, &$Data_Semiring_one, &$Data_Semiring_Semiring__dollar__Dict, &$Data_Lazy_defer, &$Data_Lazy_force) {
  $__fn = function($dictSemiring) use (&$Data_Semiring_add, &$Data_Semiring_zero, &$Data_Semiring_mul, &$Data_Semiring_one, &$Data_Semiring_Semiring__dollar__Dict, &$Data_Lazy_defer, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$add = ($Data_Semiring_add)($dictSemiring);
$zero = ($Data_Semiring_zero)($dictSemiring);
$mul = ($Data_Semiring_mul)($dictSemiring);
$one = ($Data_Semiring_one)($dictSemiring);
    $__res = ($Data_Semiring_Semiring__dollar__Dict)((object)["add" => (function() use (&$Data_Lazy_defer, $add, &$Data_Lazy_force) {
  $__fn = function($a, $b = null) use (&$Data_Lazy_defer, $add, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_defer)((function() use ($add, &$Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($add, &$Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($add)(($Data_Lazy_force)($a), ($Data_Lazy_force)($b));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "zero" => ($Data_Lazy_defer)((function() use ($zero) {
  $__fn = function($v) use ($zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $zero;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), "mul" => (function() use (&$Data_Lazy_defer, $mul, &$Data_Lazy_force) {
  $__fn = function($a, $b = null) use (&$Data_Lazy_defer, $mul, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_defer)((function() use ($mul, &$Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($mul, &$Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($mul)(($Data_Lazy_force)($a), ($Data_Lazy_force)($b));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "one" => ($Data_Lazy_defer)((function() use ($one) {
  $__fn = function($v) use ($one, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $one;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})())]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Lazy_semigroupLazy
$Data_Lazy_semigroupLazy = (function() use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Lazy_defer, &$Data_Lazy_force) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Lazy_defer, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append1 = ($Data_Semigroup_append)($dictSemigroup);
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Lazy_defer, $append1, &$Data_Lazy_force) {
  $__fn = function($a, $b = null) use (&$Data_Lazy_defer, $append1, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_defer)((function() use ($append1, &$Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($append1, &$Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append1)(($Data_Lazy_force)($a), ($Data_Lazy_force)($b));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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

// Data_Lazy_ringLazy
$Data_Lazy_ringLazy = (function() use (&$Data_Ring_sub, &$Data_Lazy_semiringLazy, &$Prim_undefined, &$Data_Ring_Ring__dollar__Dict, &$Data_Lazy_defer, &$Data_Lazy_force) {
  $__fn = function($dictRing) use (&$Data_Ring_sub, &$Data_Lazy_semiringLazy, &$Prim_undefined, &$Data_Ring_Ring__dollar__Dict, &$Data_Lazy_defer, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sub = ($Data_Ring_sub)($dictRing);
$semiringLazy1 = ($Data_Lazy_semiringLazy)((($dictRing)->Semiring0)($Prim_undefined));
    $__res = ($Data_Ring_Ring__dollar__Dict)((object)["sub" => (function() use (&$Data_Lazy_defer, $sub, &$Data_Lazy_force) {
  $__fn = function($a, $b = null) use (&$Data_Lazy_defer, $sub, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_defer)((function() use ($sub, &$Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($sub, &$Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($sub)(($Data_Lazy_force)($a), ($Data_Lazy_force)($b));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Semiring0" => (function() use ($semiringLazy1) {
  $__fn = function($__dollar____unused) use ($semiringLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semiringLazy1;
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

// Data_Lazy_monoidLazy
$Data_Lazy_monoidLazy = (function() use (&$Data_Monoid_mempty, &$Data_Lazy_semigroupLazy, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Lazy_defer) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Data_Lazy_semigroupLazy, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
$semigroupLazy1 = ($Data_Lazy_semigroupLazy)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Lazy_defer)((function() use ($mempty) {
  $__fn = function($v) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $mempty;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupLazy1) {
  $__fn = function($__dollar____unused) use ($semigroupLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupLazy1;
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

// Data_Lazy_lazyLazy
$Data_Lazy_lazyLazy = ($Control_Lazy_Lazy__dollar__Dict)((object)["defer" => (function() use (&$Data_Lazy_defer, &$Data_Lazy_force, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_Lazy_defer, &$Data_Lazy_force, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_defer)((function() use (&$Data_Lazy_force, $f, &$Data_Unit_unit) {
  $__fn = function($v) use (&$Data_Lazy_force, $f, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_force)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Lazy_functorLazy
$Data_Lazy_functorLazy = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Lazy_defer, &$Data_Lazy_force) {
  $__fn = function($f, $l = null) use (&$Data_Lazy_defer, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_defer)((function() use ($f, &$Data_Lazy_force, $l) {
  $__fn = function($v) use ($f, &$Data_Lazy_force, $l, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)(($Data_Lazy_force)($l));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Lazy_map
$Data_Lazy_map = ($Data_Functor_map)($Data_Lazy_functorLazy);

// Data_Lazy_functorWithIndexLazy
$Data_Lazy_functorWithIndexLazy = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_Lazy_map, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_Lazy_map, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_map)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_Lazy_functorLazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_functorLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_functorLazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Lazy_invariantLazy
$Data_Lazy_invariantLazy = ($Data_Functor_Invariant_Invariant__dollar__Dict)((object)["imap" => ($Data_Functor_Invariant_imapF)($Data_Lazy_functorLazy)]);

// Data_Lazy_foldableLazy
$Data_Lazy_foldableLazy = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() use (&$Data_Lazy_force) {
  $__fn = function($f, $z = null, $l = null) use (&$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)(($Data_Lazy_force)($l), $z);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "foldl" => (function() use (&$Data_Lazy_force) {
  $__fn = function($f, $z = null, $l = null) use (&$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)($z, ($Data_Lazy_force)($l));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use (&$Data_Lazy_force) {
  $__fn = function($dictMonoid, $f = null, $l = null) use (&$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)(($Data_Lazy_force)($l));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Lazy_foldr
$Data_Lazy_foldr = ($Data_Foldable_foldr)($Data_Lazy_foldableLazy);

// Data_Lazy_foldl
$Data_Lazy_foldl = ($Data_Foldable_foldl)($Data_Lazy_foldableLazy);

// Data_Lazy_foldMap
$Data_Lazy_foldMap = ($Data_Foldable_foldMap)($Data_Lazy_foldableLazy);

// Data_Lazy_foldableWithIndexLazy
$Data_Lazy_foldableWithIndexLazy = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use (&$Data_Lazy_foldr, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_Lazy_foldr, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_foldr)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$Data_Lazy_foldl, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_Lazy_foldl, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_foldl)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use (&$Data_Lazy_foldMap, &$Data_Unit_unit) {
  $__fn = function($dictMonoid) use (&$Data_Lazy_foldMap, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap1 = ($Data_Lazy_foldMap)($dictMonoid);
    $__res = (function() use ($foldMap1, &$Data_Unit_unit) {
  $__fn = function($f) use ($foldMap1, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldMap1)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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
})(), "Foldable0" => (function() use (&$Data_Lazy_foldableLazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_foldableLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_foldableLazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Lazy_traversableLazy
$Data_Lazy_traversableLazy = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Lazy_compose, &$Data_Lazy_defer, &$Data_Function_const, &$Data_Lazy_force) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Lazy_compose, &$Data_Lazy_defer, &$Data_Function_const, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map1, &$Data_Lazy_compose, &$Data_Lazy_defer, &$Data_Function_const, &$Data_Lazy_force) {
  $__fn = function($f, $l = null) use ($map1, &$Data_Lazy_compose, &$Data_Lazy_defer, &$Data_Function_const, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($map1)(($Data_Lazy_compose)($Data_Lazy_defer, $Data_Function_const), ($f)(($Data_Lazy_force)($l)));
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
})(), "sequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Lazy_compose, &$Data_Lazy_defer, &$Data_Function_const, &$Data_Lazy_force) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Lazy_compose, &$Data_Lazy_defer, &$Data_Function_const, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map1, &$Data_Lazy_compose, &$Data_Lazy_defer, &$Data_Function_const, &$Data_Lazy_force) {
  $__fn = function($l) use ($map1, &$Data_Lazy_compose, &$Data_Lazy_defer, &$Data_Function_const, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($map1)(($Data_Lazy_compose)($Data_Lazy_defer, $Data_Function_const), ($Data_Lazy_force)($l));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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
})(), "Functor0" => (function() use (&$Data_Lazy_functorLazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_functorLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_functorLazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_Lazy_foldableLazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_foldableLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_foldableLazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Lazy_traverse
$Data_Lazy_traverse = ($Data_Traversable_traverse)($Data_Lazy_traversableLazy);

// Data_Lazy_traversableWithIndexLazy
$Data_Lazy_traversableWithIndexLazy = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_Lazy_traverse, &$Data_Unit_unit) {
  $__fn = function($dictApplicative) use (&$Data_Lazy_traverse, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse1 = ($Data_Lazy_traverse)($dictApplicative);
    $__res = (function() use ($traverse1, &$Data_Unit_unit) {
  $__fn = function($f) use ($traverse1, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($traverse1)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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
})(), "FunctorWithIndex0" => (function() use (&$Data_Lazy_functorWithIndexLazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_functorWithIndexLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_functorWithIndexLazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_Lazy_foldableWithIndexLazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_foldableWithIndexLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_foldableWithIndexLazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_Lazy_traversableLazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_traversableLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_traversableLazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Lazy_foldable1Lazy
$Data_Lazy_foldable1Lazy = ($Data_Semigroup_Foldable_Foldable1__dollar__Dict)((object)["foldMap1" => (function() use (&$Data_Lazy_force) {
  $__fn = function($dictSemigroup, $f = null, $l = null) use (&$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)(($Data_Lazy_force)($l));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "foldr1" => (function() use (&$Data_Lazy_force) {
  $__fn = function($v, $l = null) use (&$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_force)($l);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "foldl1" => (function() use (&$Data_Lazy_force) {
  $__fn = function($v, $l = null) use (&$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_force)($l);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use (&$Data_Lazy_foldableLazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_foldableLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_foldableLazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Lazy_traversable1Lazy
$Data_Lazy_traversable1Lazy = ($Data_Semigroup_Traversable_Traversable1__dollar__Dict)((object)["traverse1" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Lazy_compose, &$Data_Lazy_defer, &$Data_Function_const, &$Data_Lazy_force) {
  $__fn = function($dictApply) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Lazy_compose, &$Data_Lazy_defer, &$Data_Function_const, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)((($dictApply)->Functor0)($Prim_undefined));
    $__res = (function() use ($map1, &$Data_Lazy_compose, &$Data_Lazy_defer, &$Data_Function_const, &$Data_Lazy_force) {
  $__fn = function($f, $l = null) use ($map1, &$Data_Lazy_compose, &$Data_Lazy_defer, &$Data_Function_const, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($map1)(($Data_Lazy_compose)($Data_Lazy_defer, $Data_Function_const), ($f)(($Data_Lazy_force)($l)));
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
})(), "sequence1" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Lazy_compose, &$Data_Lazy_defer, &$Data_Function_const, &$Data_Lazy_force) {
  $__fn = function($dictApply) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Lazy_compose, &$Data_Lazy_defer, &$Data_Function_const, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)((($dictApply)->Functor0)($Prim_undefined));
    $__res = (function() use ($map1, &$Data_Lazy_compose, &$Data_Lazy_defer, &$Data_Function_const, &$Data_Lazy_force) {
  $__fn = function($l) use ($map1, &$Data_Lazy_compose, &$Data_Lazy_defer, &$Data_Function_const, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($map1)(($Data_Lazy_compose)($Data_Lazy_defer, $Data_Function_const), ($Data_Lazy_force)($l));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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
})(), "Foldable10" => (function() use (&$Data_Lazy_foldable1Lazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_foldable1Lazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_foldable1Lazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable1" => (function() use (&$Data_Lazy_traversableLazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_traversableLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_traversableLazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Lazy_extendLazy
$Data_Lazy_extendLazy = ($Control_Extend_Extend__dollar__Dict)((object)["extend" => (function() use (&$Data_Lazy_defer) {
  $__fn = function($f, $x = null) use (&$Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_defer)((function() use ($f, $x) {
  $__fn = function($v) use ($f, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)($x);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_Lazy_functorLazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_functorLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_functorLazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Lazy_eqLazy
$Data_Lazy_eqLazy = (function() use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Lazy_force) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq = ($Data_Eq_eq)($dictEq);
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use ($eq, &$Data_Lazy_force) {
  $__fn = function($x, $y = null) use ($eq, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($eq)(($Data_Lazy_force)($x), ($Data_Lazy_force)($y));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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

// Data_Lazy_ordLazy
$Data_Lazy_ordLazy = (function() use (&$Data_Ord_compare, &$Data_Lazy_eqLazy, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Lazy_force) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Lazy_eqLazy, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
$eqLazy1 = ($Data_Lazy_eqLazy)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use ($compare, &$Data_Lazy_force) {
  $__fn = function($x, $y = null) use ($compare, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($compare)(($Data_Lazy_force)($x), ($Data_Lazy_force)($y));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqLazy1) {
  $__fn = function($__dollar____unused) use ($eqLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqLazy1;
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

// Data_Lazy_eq1Lazy
$Data_Lazy_eq1Lazy = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use (&$Data_Eq_eq, &$Data_Lazy_eqLazy) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Lazy_eqLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_eq)(($Data_Lazy_eqLazy)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Lazy_ord1Lazy
$Data_Lazy_ord1Lazy = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use (&$Data_Ord_compare, &$Data_Lazy_ordLazy) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Lazy_ordLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Ord_compare)(($Data_Lazy_ordLazy)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use (&$Data_Lazy_eq1Lazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_eq1Lazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_eq1Lazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Lazy_comonadLazy
$Data_Lazy_comonadLazy = ($Control_Comonad_Comonad__dollar__Dict)((object)["extract" => $Data_Lazy_force, "Extend0" => (function() use (&$Data_Lazy_extendLazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_extendLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_extendLazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Lazy_commutativeRingLazy
$Data_Lazy_commutativeRingLazy = (function() use (&$Data_Lazy_ringLazy, &$Prim_undefined, &$Data_CommutativeRing_CommutativeRing__dollar__Dict) {
  $__fn = function($dictCommutativeRing) use (&$Data_Lazy_ringLazy, &$Prim_undefined, &$Data_CommutativeRing_CommutativeRing__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ringLazy1 = ($Data_Lazy_ringLazy)((($dictCommutativeRing)->Ring0)($Prim_undefined));
    $__res = ($Data_CommutativeRing_CommutativeRing__dollar__Dict)((object)["Ring0" => (function() use ($ringLazy1) {
  $__fn = function($__dollar____unused) use ($ringLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $ringLazy1;
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

// Data_Lazy_euclideanRingLazy
$Data_Lazy_euclideanRingLazy = (function() use (&$Data_EuclideanRing_div, &$Data_EuclideanRing_mod, &$Data_Lazy_commutativeRingLazy, &$Prim_undefined, &$Data_EuclideanRing_EuclideanRing__dollar__Dict, &$Data_Lazy_compose, &$Data_EuclideanRing_degree, &$Data_Lazy_force, &$Data_Lazy_defer) {
  $__fn = function($dictEuclideanRing) use (&$Data_EuclideanRing_div, &$Data_EuclideanRing_mod, &$Data_Lazy_commutativeRingLazy, &$Prim_undefined, &$Data_EuclideanRing_EuclideanRing__dollar__Dict, &$Data_Lazy_compose, &$Data_EuclideanRing_degree, &$Data_Lazy_force, &$Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$div = ($Data_EuclideanRing_div)($dictEuclideanRing);
$mod = ($Data_EuclideanRing_mod)($dictEuclideanRing);
$commutativeRingLazy1 = ($Data_Lazy_commutativeRingLazy)((($dictEuclideanRing)->CommutativeRing0)($Prim_undefined));
    $__res = ($Data_EuclideanRing_EuclideanRing__dollar__Dict)((object)["degree" => ($Data_Lazy_compose)(($Data_EuclideanRing_degree)($dictEuclideanRing), $Data_Lazy_force), "div" => (function() use (&$Data_Lazy_defer, $div, &$Data_Lazy_force) {
  $__fn = function($a, $b = null) use (&$Data_Lazy_defer, $div, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_defer)((function() use ($div, &$Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($div, &$Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($div)(($Data_Lazy_force)($a), ($Data_Lazy_force)($b));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "mod" => (function() use (&$Data_Lazy_defer, $mod, &$Data_Lazy_force) {
  $__fn = function($a, $b = null) use (&$Data_Lazy_defer, $mod, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_defer)((function() use ($mod, &$Data_Lazy_force, $a, $b) {
  $__fn = function($v) use ($mod, &$Data_Lazy_force, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($mod)(($Data_Lazy_force)($a), ($Data_Lazy_force)($b));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "CommutativeRing0" => (function() use ($commutativeRingLazy1) {
  $__fn = function($__dollar____unused) use ($commutativeRingLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $commutativeRingLazy1;
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

// Data_Lazy_boundedLazy
$Data_Lazy_boundedLazy = (function() use (&$Data_Bounded_top, &$Data_Bounded_bottom, &$Data_Lazy_ordLazy, &$Prim_undefined, &$Data_Bounded_Bounded__dollar__Dict, &$Data_Lazy_defer) {
  $__fn = function($dictBounded) use (&$Data_Bounded_top, &$Data_Bounded_bottom, &$Data_Lazy_ordLazy, &$Prim_undefined, &$Data_Bounded_Bounded__dollar__Dict, &$Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$top = ($Data_Bounded_top)($dictBounded);
$bottom = ($Data_Bounded_bottom)($dictBounded);
$ordLazy1 = ($Data_Lazy_ordLazy)((($dictBounded)->Ord0)($Prim_undefined));
    $__res = ($Data_Bounded_Bounded__dollar__Dict)((object)["top" => ($Data_Lazy_defer)((function() use ($top) {
  $__fn = function($v) use ($top, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $top;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), "bottom" => ($Data_Lazy_defer)((function() use ($bottom) {
  $__fn = function($v) use ($bottom, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bottom;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), "Ord0" => (function() use ($ordLazy1) {
  $__fn = function($__dollar____unused) use ($ordLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $ordLazy1;
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

// Data_Lazy_applyLazy
$Data_Lazy_applyLazy = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Lazy_defer, &$Data_Lazy_force) {
  $__fn = function($f, $x = null) use (&$Data_Lazy_defer, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_defer)((function() use (&$Data_Lazy_force, $f, $x) {
  $__fn = function($v) use (&$Data_Lazy_force, $f, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_force)($f, ($Data_Lazy_force)($x));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_Lazy_functorLazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_functorLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_functorLazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Lazy_apply
$Data_Lazy_apply = ($Control_Apply_apply)($Data_Lazy_applyLazy);

// Data_Lazy_bindLazy
$Data_Lazy_bindLazy = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Data_Lazy_defer, &$Data_Lazy_force) {
  $__fn = function($l, $f = null) use (&$Data_Lazy_defer, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_defer)((function() use (&$Data_Lazy_force, $f, $l) {
  $__fn = function($v) use (&$Data_Lazy_force, $f, $l, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_force)(($f)(($Data_Lazy_force)($l)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use (&$Data_Lazy_applyLazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_applyLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_applyLazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Lazy_heytingAlgebraLazy
$Data_Lazy_heytingAlgebraLazy = (function() use (&$Data_HeytingAlgebra_ff, &$Data_HeytingAlgebra_tt, &$Data_HeytingAlgebra_implies, &$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_not, &$Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict, &$Data_Lazy_defer, &$Data_Lazy_apply, &$Data_Lazy_map) {
  $__fn = function($dictHeytingAlgebra) use (&$Data_HeytingAlgebra_ff, &$Data_HeytingAlgebra_tt, &$Data_HeytingAlgebra_implies, &$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_not, &$Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict, &$Data_Lazy_defer, &$Data_Lazy_apply, &$Data_Lazy_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ff = ($Data_HeytingAlgebra_ff)($dictHeytingAlgebra);
$tt = ($Data_HeytingAlgebra_tt)($dictHeytingAlgebra);
$implies = ($Data_HeytingAlgebra_implies)($dictHeytingAlgebra);
$conj = ($Data_HeytingAlgebra_conj)($dictHeytingAlgebra);
$disj = ($Data_HeytingAlgebra_disj)($dictHeytingAlgebra);
$not = ($Data_HeytingAlgebra_not)($dictHeytingAlgebra);
    $__res = ($Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict)((object)["ff" => ($Data_Lazy_defer)((function() use ($ff) {
  $__fn = function($v) use ($ff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $ff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), "tt" => ($Data_Lazy_defer)((function() use ($tt) {
  $__fn = function($v) use ($tt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $tt;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), "implies" => (function() use (&$Data_Lazy_apply, &$Data_Lazy_map, $implies) {
  $__fn = function($a, $b = null) use (&$Data_Lazy_apply, &$Data_Lazy_map, $implies, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_apply)(($Data_Lazy_map)($implies, $a), $b);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "conj" => (function() use (&$Data_Lazy_apply, &$Data_Lazy_map, $conj) {
  $__fn = function($a, $b = null) use (&$Data_Lazy_apply, &$Data_Lazy_map, $conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_apply)(($Data_Lazy_map)($conj, $a), $b);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "disj" => (function() use (&$Data_Lazy_apply, &$Data_Lazy_map, $disj) {
  $__fn = function($a, $b = null) use (&$Data_Lazy_apply, &$Data_Lazy_map, $disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_apply)(($Data_Lazy_map)($disj, $a), $b);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "not" => (function() use (&$Data_Lazy_map, $not) {
  $__fn = function($a) use (&$Data_Lazy_map, $not, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_map)($not, $a);
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

// Data_Lazy_booleanAlgebraLazy
$Data_Lazy_booleanAlgebraLazy = (function() use (&$Data_Lazy_heytingAlgebraLazy, &$Prim_undefined, &$Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict) {
  $__fn = function($dictBooleanAlgebra) use (&$Data_Lazy_heytingAlgebraLazy, &$Prim_undefined, &$Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$heytingAlgebraLazy1 = ($Data_Lazy_heytingAlgebraLazy)((($dictBooleanAlgebra)->HeytingAlgebra0)($Prim_undefined));
    $__res = ($Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict)((object)["HeytingAlgebra0" => (function() use ($heytingAlgebraLazy1) {
  $__fn = function($__dollar____unused) use ($heytingAlgebraLazy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $heytingAlgebraLazy1;
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

// Data_Lazy_applicativeLazy
$Data_Lazy_applicativeLazy = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => (function() use (&$Data_Lazy_defer) {
  $__fn = function($a) use (&$Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_defer)((function() use ($a) {
  $__fn = function($v) use ($a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $a;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use (&$Data_Lazy_applyLazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_applyLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_applyLazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Lazy_monadLazy
$Data_Lazy_monadLazy = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_Lazy_applicativeLazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_applicativeLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_applicativeLazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Data_Lazy_bindLazy) {
  $__fn = function($__dollar____unused) use (&$Data_Lazy_bindLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Lazy_bindLazy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

