<?php

namespace Data\Bifoldable;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifoldable/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor.Clown/index.php';
require_once __DIR__ . '/../Data.Functor.Flip/index.php';
require_once __DIR__ . '/../Data.Functor.Joker/index.php';
require_once __DIR__ . '/../Data.Functor.Product2/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Endo/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Bifoldable_compose
$Data_Bifoldable_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Bifoldable_identity
$Data_Bifoldable_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Bifoldable_unwrap
$Data_Bifoldable_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Data_Bifoldable_monoidEndo
$Data_Bifoldable_monoidEndo = ($Data_Monoid_Endo_monoidEndo)($Control_Category_categoryFn);

// Data_Bifoldable_monoidDual
$Data_Bifoldable_monoidDual = ($Data_Monoid_Dual_monoidDual)($Data_Bifoldable_monoidEndo);

// Data_Bifoldable_Bifoldable$Dict
$Data_Bifoldable_Bifoldable__dollar__Dict = (function() {
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

// Data_Bifoldable_bifoldr
$Data_Bifoldable_bifoldr = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bifoldr;
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

// Data_Bifoldable_bitraverse_
$Data_Bifoldable_bitraverse_ = (function() use (&$Data_Bifoldable_bifoldr, &$Control_Apply_applySecond, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Bifoldable_compose, &$Data_Unit_unit) {
  $__fn = function($dictBifoldable) use (&$Data_Bifoldable_bifoldr, &$Control_Apply_applySecond, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Bifoldable_compose, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bifoldr1 = ($Data_Bifoldable_bifoldr)($dictBifoldable);
    $__res = (function() use (&$Control_Apply_applySecond, &$Prim_undefined, &$Control_Applicative_pure, $bifoldr1, &$Data_Bifoldable_compose, &$Data_Unit_unit) {
  $__fn = function($dictApplicative) use (&$Control_Apply_applySecond, &$Prim_undefined, &$Control_Applicative_pure, $bifoldr1, &$Data_Bifoldable_compose, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applySecond = ($Control_Apply_applySecond)((($dictApplicative)->Apply0)($Prim_undefined));
$pure = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use ($bifoldr1, &$Data_Bifoldable_compose, $applySecond, $pure, &$Data_Unit_unit) {
  $__fn = function($f, $g = null) use ($bifoldr1, &$Data_Bifoldable_compose, $applySecond, $pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bifoldr1)(($Data_Bifoldable_compose)($applySecond, $f), ($Data_Bifoldable_compose)($applySecond, $g), ($pure)($Data_Unit_unit));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Bifoldable_bifor_
$Data_Bifoldable_bifor_ = (function() use (&$Data_Bifoldable_bitraverse_) {
  $__fn = function($dictBifoldable) use (&$Data_Bifoldable_bitraverse_, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bitraverse_1 = ($Data_Bifoldable_bitraverse_)($dictBifoldable);
    $__res = (function() use ($bitraverse_1) {
  $__fn = function($dictApplicative) use ($bitraverse_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bitraverse_2 = ($bitraverse_1)($dictApplicative);
    $__res = (function() use ($bitraverse_2) {
  $__fn = function($t, $f = null, $g = null) use ($bitraverse_2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bitraverse_2)($f, $g, $t);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Bifoldable_bisequence_
$Data_Bifoldable_bisequence_ = (function() use (&$Data_Bifoldable_bitraverse_, &$Data_Bifoldable_identity) {
  $__fn = function($dictBifoldable) use (&$Data_Bifoldable_bitraverse_, &$Data_Bifoldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bitraverse_1 = ($Data_Bifoldable_bitraverse_)($dictBifoldable);
    $__res = (function() use ($bitraverse_1, &$Data_Bifoldable_identity) {
  $__fn = function($dictApplicative) use ($bitraverse_1, &$Data_Bifoldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bitraverse_1)($dictApplicative, $Data_Bifoldable_identity, $Data_Bifoldable_identity);
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
})();

// Data_Bifoldable_bifoldl
$Data_Bifoldable_bifoldl = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bifoldl;
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

// Data_Bifoldable_bifoldableTuple
$Data_Bifoldable_bifoldableTuple = ($Data_Bifoldable_Bifoldable__dollar__Dict)((object)["bifoldMap" => (function() use (&$Data_Semigroup_append, &$Prim_undefined) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = (function() use ($append) {
  $__body = function($f, $g, $v) use ($append) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$g1 = $__case_1;
$a = ($__case_2)->values[0];
$b = ($__case_2)->values[1];
return ($append)(($f1)($a), ($g1)($b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $g = null, $v = null) use ($append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $g, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $g, $v);
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
})(), "bifoldr" => (function() {
  $__body = function($f, $g, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $z;
    $__case_3 = $v;
    if ((($__case_3)->tag === "Tuple")) {
$f1 = $__case_0;
$g1 = $__case_1;
$z1 = $__case_2;
$a = ($__case_3)->values[0];
$b = ($__case_3)->values[1];
return ($f1)($a, ($g1)($b, $z1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $g = null, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($f, $g, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($f, $g, $z, $v);
  };
  return $__fn;
})(), "bifoldl" => (function() {
  $__body = function($f, $g, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $z;
    $__case_3 = $v;
    if ((($__case_3)->tag === "Tuple")) {
$f1 = $__case_0;
$g1 = $__case_1;
$z1 = $__case_2;
$a = ($__case_3)->values[0];
$b = ($__case_3)->values[1];
return ($g1)(($f1)($z1, $a), $b);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $g = null, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($f, $g, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($f, $g, $z, $v);
  };
  return $__fn;
})()]);

// Data_Bifoldable_bifoldableJoker
$Data_Bifoldable_bifoldableJoker = (function() use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Bifoldable_Bifoldable__dollar__Dict) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Bifoldable_Bifoldable__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldr = ($Data_Foldable_foldr)($dictFoldable);
$foldl = ($Data_Foldable_foldl)($dictFoldable);
$foldMap = ($Data_Foldable_foldMap)($dictFoldable);
    $__res = ($Data_Bifoldable_Bifoldable__dollar__Dict)((object)["bifoldr" => (function() use ($foldr) {
  $__body = function($v, $r, $u, $v1) use ($foldr) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $u;
    $__case_3 = $v1;
    if (true) {
$r1 = $__case_1;
$u1 = $__case_2;
$f = $__case_3;
return ($foldr)($r1, $u1, $f);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $r = null, $u = null, $v1 = null) use ($foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($v, $r, $u, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($v, $r, $u, $v1);
  };
  return $__fn;
})(), "bifoldl" => (function() use ($foldl) {
  $__body = function($v, $r, $u, $v1) use ($foldl) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $u;
    $__case_3 = $v1;
    if (true) {
$r1 = $__case_1;
$u1 = $__case_2;
$f = $__case_3;
return ($foldl)($r1, $u1, $f);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $r = null, $u = null, $v1 = null) use ($foldl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($v, $r, $u, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($v, $r, $u, $v1);
  };
  return $__fn;
})(), "bifoldMap" => (function() use ($foldMap) {
  $__fn = function($dictMonoid) use ($foldMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($foldMap1) {
  $__body = function($v, $r, $v1) use ($foldMap1) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $v1;
    if (true) {
$r1 = $__case_1;
$f = $__case_2;
return ($foldMap1)($r1, $f);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $r = null, $v1 = null) use ($foldMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $r, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $r, $v1);
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Bifoldable_bifoldableEither
$Data_Bifoldable_bifoldableEither = ($Data_Bifoldable_Bifoldable__dollar__Dict)((object)["bifoldr" => (function() {
  $__body = function($v, $v1, $v2, $v3) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    $__case_3 = $v3;
    if ((($__case_3)->tag === "Left")) {
$f = $__case_0;
$z = $__case_2;
$a = ($__case_3)->values[0];
return ($f)($a, $z);
} else {
;
};
    if ((($__case_3)->tag === "Right")) {
$g = $__case_1;
$z = $__case_2;
$b = ($__case_3)->values[0];
return ($g)($b, $z);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($v, $v1, $v2, $v3);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($v, $v1, $v2, $v3);
  };
  return $__fn;
})(), "bifoldl" => (function() {
  $__body = function($v, $v1, $v2, $v3) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    $__case_3 = $v3;
    if ((($__case_3)->tag === "Left")) {
$f = $__case_0;
$z = $__case_2;
$a = ($__case_3)->values[0];
return ($f)($z, $a);
} else {
;
};
    if ((($__case_3)->tag === "Right")) {
$g = $__case_1;
$z = $__case_2;
$b = ($__case_3)->values[0];
return ($g)($z, $b);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($v, $v1, $v2, $v3);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($v, $v1, $v2, $v3);
  };
  return $__fn;
})(), "bifoldMap" => (function() {
  $__body = function($dictMonoid, $v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Left")) {
$f = $__case_0;
$a = ($__case_2)->values[0];
return ($f)($a);
} else {
;
};
    if ((($__case_2)->tag === "Right")) {
$g = $__case_1;
$b = ($__case_2)->values[0];
return ($g)($b);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dictMonoid, $v = null, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($dictMonoid, $v, $v1, $v2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($dictMonoid, $v, $v1, $v2);
  };
  return $__fn;
})()]);

// Data_Bifoldable_bifoldableConst
$Data_Bifoldable_bifoldableConst = ($Data_Bifoldable_Bifoldable__dollar__Dict)((object)["bifoldr" => (function() {
  $__body = function($f, $v, $z, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $z;
    $__case_3 = $v1;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_2;
$a = $__case_3;
return ($f1)($a, $z1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $z = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($f, $v, $z, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($f, $v, $z, $v1);
  };
  return $__fn;
})(), "bifoldl" => (function() {
  $__body = function($f, $v, $z, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $z;
    $__case_3 = $v1;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_2;
$a = $__case_3;
return ($f1)($z1, $a);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $z = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($f, $v, $z, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($f, $v, $z, $v1);
  };
  return $__fn;
})(), "bifoldMap" => (function() {
  $__body = function($dictMonoid, $f, $v, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$a = $__case_2;
return ($f1)($a);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dictMonoid, $f = null, $v = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($dictMonoid, $f, $v, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($dictMonoid, $f, $v, $v1);
  };
  return $__fn;
})()]);

// Data_Bifoldable_bifoldableClown
$Data_Bifoldable_bifoldableClown = (function() use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Bifoldable_Bifoldable__dollar__Dict) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Bifoldable_Bifoldable__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldr = ($Data_Foldable_foldr)($dictFoldable);
$foldl = ($Data_Foldable_foldl)($dictFoldable);
$foldMap = ($Data_Foldable_foldMap)($dictFoldable);
    $__res = ($Data_Bifoldable_Bifoldable__dollar__Dict)((object)["bifoldr" => (function() use ($foldr) {
  $__body = function($l, $v, $u, $v1) use ($foldr) {
    $__case_0 = $l;
    $__case_1 = $v;
    $__case_2 = $u;
    $__case_3 = $v1;
    if (true) {
$l1 = $__case_0;
$u1 = $__case_2;
$f = $__case_3;
return ($foldr)($l1, $u1, $f);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($l, $v = null, $u = null, $v1 = null) use ($foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($l, $v, $u, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($l, $v, $u, $v1);
  };
  return $__fn;
})(), "bifoldl" => (function() use ($foldl) {
  $__body = function($l, $v, $u, $v1) use ($foldl) {
    $__case_0 = $l;
    $__case_1 = $v;
    $__case_2 = $u;
    $__case_3 = $v1;
    if (true) {
$l1 = $__case_0;
$u1 = $__case_2;
$f = $__case_3;
return ($foldl)($l1, $u1, $f);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($l, $v = null, $u = null, $v1 = null) use ($foldl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($l, $v, $u, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($l, $v, $u, $v1);
  };
  return $__fn;
})(), "bifoldMap" => (function() use ($foldMap) {
  $__fn = function($dictMonoid) use ($foldMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($foldMap1) {
  $__body = function($l, $v, $v1) use ($foldMap1) {
    $__case_0 = $l;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$l1 = $__case_0;
$f = $__case_2;
return ($foldMap1)($l1, $f);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($l, $v = null, $v1 = null) use ($foldMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($l, $v, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($l, $v, $v1);
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Bifoldable_bifoldMapDefaultR
$Data_Bifoldable_bifoldMapDefaultR = (function() use (&$Data_Bifoldable_bifoldr, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$Data_Bifoldable_compose) {
  $__fn = function($dictBifoldable) use (&$Data_Bifoldable_bifoldr, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$Data_Bifoldable_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bifoldr1 = ($Data_Bifoldable_bifoldr)($dictBifoldable);
    $__res = (function() use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, $bifoldr1, &$Data_Bifoldable_compose) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, $bifoldr1, &$Data_Bifoldable_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use ($bifoldr1, &$Data_Bifoldable_compose, $append, $mempty) {
  $__fn = function($f, $g = null) use ($bifoldr1, &$Data_Bifoldable_compose, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bifoldr1)(($Data_Bifoldable_compose)($append, $f), ($Data_Bifoldable_compose)($append, $g), $mempty);
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Bifoldable_bifoldMapDefaultL
$Data_Bifoldable_bifoldMapDefaultL = (function() use (&$Data_Bifoldable_bifoldl, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty) {
  $__fn = function($dictBifoldable) use (&$Data_Bifoldable_bifoldl, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bifoldl1 = ($Data_Bifoldable_bifoldl)($dictBifoldable);
    $__res = (function() use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, $bifoldl1) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, $bifoldl1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use ($bifoldl1, $append, $mempty) {
  $__fn = function($f, $g = null) use ($bifoldl1, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bifoldl1)((function() use ($append, $f) {
  $__fn = function($m, $a = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)($m, ($f)($a));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), (function() use ($append, $g) {
  $__fn = function($m, $b = null) use ($append, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)($m, ($g)($b));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $mempty);
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Bifoldable_bifoldMap
$Data_Bifoldable_bifoldMap = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bifoldMap;
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

// Data_Bifoldable_bifoldableFlip
$Data_Bifoldable_bifoldableFlip = (function() use (&$Data_Bifoldable_bifoldr, &$Data_Bifoldable_bifoldl, &$Data_Bifoldable_bifoldMap, &$Data_Bifoldable_Bifoldable__dollar__Dict) {
  $__fn = function($dictBifoldable) use (&$Data_Bifoldable_bifoldr, &$Data_Bifoldable_bifoldl, &$Data_Bifoldable_bifoldMap, &$Data_Bifoldable_Bifoldable__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bifoldr1 = ($Data_Bifoldable_bifoldr)($dictBifoldable);
$bifoldl1 = ($Data_Bifoldable_bifoldl)($dictBifoldable);
$bifoldMap1 = ($Data_Bifoldable_bifoldMap)($dictBifoldable);
    $__res = ($Data_Bifoldable_Bifoldable__dollar__Dict)((object)["bifoldr" => (function() use ($bifoldr1) {
  $__body = function($r, $l, $u, $v) use ($bifoldr1) {
    $__case_0 = $r;
    $__case_1 = $l;
    $__case_2 = $u;
    $__case_3 = $v;
    if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$u1 = $__case_2;
$p = $__case_3;
return ($bifoldr1)($l1, $r1, $u1, $p);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($r, $l = null, $u = null, $v = null) use ($bifoldr1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($r, $l, $u, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($r, $l, $u, $v);
  };
  return $__fn;
})(), "bifoldl" => (function() use ($bifoldl1) {
  $__body = function($r, $l, $u, $v) use ($bifoldl1) {
    $__case_0 = $r;
    $__case_1 = $l;
    $__case_2 = $u;
    $__case_3 = $v;
    if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$u1 = $__case_2;
$p = $__case_3;
return ($bifoldl1)($l1, $r1, $u1, $p);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($r, $l = null, $u = null, $v = null) use ($bifoldl1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($r, $l, $u, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($r, $l, $u, $v);
  };
  return $__fn;
})(), "bifoldMap" => (function() use ($bifoldMap1) {
  $__fn = function($dictMonoid) use ($bifoldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bifoldMap2 = ($bifoldMap1)($dictMonoid);
    $__res = (function() use ($bifoldMap2) {
  $__body = function($r, $l, $v) use ($bifoldMap2) {
    $__case_0 = $r;
    $__case_1 = $l;
    $__case_2 = $v;
    if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$p = $__case_2;
return ($bifoldMap2)($l1, $r1, $p);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($r, $l = null, $v = null) use ($bifoldMap2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($r, $l, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($r, $l, $v);
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Bifoldable_bifoldlDefault
$Data_Bifoldable_bifoldlDefault = (function() use (&$Data_Bifoldable_bifoldMap, &$Data_Bifoldable_monoidDual, &$Data_Bifoldable_unwrap, &$Data_Bifoldable_compose, &$Data_Monoid_Dual_Dual, &$Data_Monoid_Endo_Endo, &$Data_Function_flip) {
  $__fn = function($dictBifoldable) use (&$Data_Bifoldable_bifoldMap, &$Data_Bifoldable_monoidDual, &$Data_Bifoldable_unwrap, &$Data_Bifoldable_compose, &$Data_Monoid_Dual_Dual, &$Data_Monoid_Endo_Endo, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bifoldMap1 = ($Data_Bifoldable_bifoldMap)($dictBifoldable, $Data_Bifoldable_monoidDual);
    $__res = (function() use (&$Data_Bifoldable_unwrap, $bifoldMap1, &$Data_Bifoldable_compose, &$Data_Monoid_Dual_Dual, &$Data_Monoid_Endo_Endo, &$Data_Function_flip) {
  $__fn = function($f, $g = null, $z = null, $p = null) use (&$Data_Bifoldable_unwrap, $bifoldMap1, &$Data_Bifoldable_compose, &$Data_Monoid_Dual_Dual, &$Data_Monoid_Endo_Endo, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bifoldable_unwrap)(($Data_Bifoldable_unwrap)(($bifoldMap1)(($Data_Bifoldable_compose)($Data_Monoid_Dual_Dual, ($Data_Bifoldable_compose)($Data_Monoid_Endo_Endo, ($Data_Function_flip)($f))), ($Data_Bifoldable_compose)($Data_Monoid_Dual_Dual, ($Data_Bifoldable_compose)($Data_Monoid_Endo_Endo, ($Data_Function_flip)($g))), $p)), $z);
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
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

// Data_Bifoldable_bifoldrDefault
$Data_Bifoldable_bifoldrDefault = (function() use (&$Data_Bifoldable_bifoldMap, &$Data_Bifoldable_monoidEndo, &$Data_Bifoldable_unwrap, &$Data_Bifoldable_compose, &$Data_Monoid_Endo_Endo) {
  $__fn = function($dictBifoldable) use (&$Data_Bifoldable_bifoldMap, &$Data_Bifoldable_monoidEndo, &$Data_Bifoldable_unwrap, &$Data_Bifoldable_compose, &$Data_Monoid_Endo_Endo, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bifoldMap1 = ($Data_Bifoldable_bifoldMap)($dictBifoldable, $Data_Bifoldable_monoidEndo);
    $__res = (function() use (&$Data_Bifoldable_unwrap, $bifoldMap1, &$Data_Bifoldable_compose, &$Data_Monoid_Endo_Endo) {
  $__fn = function($f, $g = null, $z = null, $p = null) use (&$Data_Bifoldable_unwrap, $bifoldMap1, &$Data_Bifoldable_compose, &$Data_Monoid_Endo_Endo, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bifoldable_unwrap)(($bifoldMap1)(($Data_Bifoldable_compose)($Data_Monoid_Endo_Endo, $f), ($Data_Bifoldable_compose)($Data_Monoid_Endo_Endo, $g), $p), $z);
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
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

// Data_Bifoldable_bifoldableProduct2
$Data_Bifoldable_bifoldableProduct2 = (function() use (&$Data_Bifoldable_bifoldMap, &$Data_Bifoldable_Bifoldable__dollar__Dict, &$Data_Bifoldable_bifoldrDefault, &$Data_Bifoldable_bifoldableProduct2, &$Data_Bifoldable_bifoldlDefault, &$Data_Semigroup_append, &$Prim_undefined) {
  $__fn = function($dictBifoldable) use (&$Data_Bifoldable_bifoldMap, &$Data_Bifoldable_Bifoldable__dollar__Dict, &$Data_Bifoldable_bifoldrDefault, &$Data_Bifoldable_bifoldableProduct2, &$Data_Bifoldable_bifoldlDefault, &$Data_Semigroup_append, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictBifoldable) use (&$Data_Bifoldable_bifoldMap, &$Data_Bifoldable_Bifoldable__dollar__Dict, &$Data_Bifoldable_bifoldrDefault, &$Data_Bifoldable_bifoldableProduct2, &$Data_Bifoldable_bifoldlDefault, &$Data_Semigroup_append, &$Prim_undefined) {
while (true) {
$bifoldMap1 = ($Data_Bifoldable_bifoldMap)($dictBifoldable);
return (function() use (&$Data_Bifoldable_bifoldMap, &$Data_Bifoldable_Bifoldable__dollar__Dict, &$Data_Bifoldable_bifoldrDefault, &$Data_Bifoldable_bifoldableProduct2, $dictBifoldable, &$Data_Bifoldable_bifoldlDefault, &$Data_Semigroup_append, &$Prim_undefined, $bifoldMap1) {
  $__fn = function($dictBifoldable1) use (&$Data_Bifoldable_bifoldMap, &$Data_Bifoldable_Bifoldable__dollar__Dict, &$Data_Bifoldable_bifoldrDefault, &$Data_Bifoldable_bifoldableProduct2, $dictBifoldable, &$Data_Bifoldable_bifoldlDefault, &$Data_Semigroup_append, &$Prim_undefined, $bifoldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bifoldMap2 = ($Data_Bifoldable_bifoldMap)($dictBifoldable1);
    $__res = ($Data_Bifoldable_Bifoldable__dollar__Dict)((object)["bifoldr" => (function() use (&$Data_Bifoldable_bifoldrDefault, &$Data_Bifoldable_bifoldableProduct2, $dictBifoldable, $dictBifoldable1) {
  $__fn = function($l, $r = null, $u = null, $m = null) use (&$Data_Bifoldable_bifoldrDefault, &$Data_Bifoldable_bifoldableProduct2, $dictBifoldable, $dictBifoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bifoldable_bifoldrDefault)(($Data_Bifoldable_bifoldableProduct2)($dictBifoldable, $dictBifoldable1), $l, $r, $u, $m);
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use (&$Data_Bifoldable_bifoldlDefault, &$Data_Bifoldable_bifoldableProduct2, $dictBifoldable, $dictBifoldable1) {
  $__fn = function($l, $r = null, $u = null, $m = null) use (&$Data_Bifoldable_bifoldlDefault, &$Data_Bifoldable_bifoldableProduct2, $dictBifoldable, $dictBifoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bifoldable_bifoldlDefault)(($Data_Bifoldable_bifoldableProduct2)($dictBifoldable, $dictBifoldable1), $l, $r, $u, $m);
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use (&$Data_Semigroup_append, &$Prim_undefined, $bifoldMap1, $bifoldMap2) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, $bifoldMap1, $bifoldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$bifoldMap3 = ($bifoldMap1)($dictMonoid);
$bifoldMap4 = ($bifoldMap2)($dictMonoid);
    $__res = (function() use ($append, $bifoldMap3, $bifoldMap4) {
  $__body = function($l, $r, $v) use ($append, $bifoldMap3, $bifoldMap4) {
    $__case_0 = $l;
    $__case_1 = $r;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Product2")) {
$l1 = $__case_0;
$r1 = $__case_1;
$f = ($__case_2)->values[0];
$g = ($__case_2)->values[1];
return ($append)(($bifoldMap3)($l1, $r1, $f), ($bifoldMap4)($l1, $r1, $g));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($l, $r = null, $v = null) use ($append, $bifoldMap3, $bifoldMap4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($l, $r, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($l, $r, $v);
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
}
})($dictBifoldable);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Bifoldable_bifold
$Data_Bifoldable_bifold = (function() use (&$Data_Bifoldable_bifoldMap, &$Data_Bifoldable_identity) {
  $__fn = function($dictBifoldable) use (&$Data_Bifoldable_bifoldMap, &$Data_Bifoldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bifoldMap1 = ($Data_Bifoldable_bifoldMap)($dictBifoldable);
    $__res = (function() use ($bifoldMap1, &$Data_Bifoldable_identity) {
  $__fn = function($dictMonoid) use ($bifoldMap1, &$Data_Bifoldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bifoldMap1)($dictMonoid, $Data_Bifoldable_identity, $Data_Bifoldable_identity);
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
})();

// Data_Bifoldable_biany
$Data_Bifoldable_biany = (function() use (&$Data_Bifoldable_bifoldMap, &$Data_Monoid_Disj_monoidDisj, &$Prim_undefined, &$Data_Bifoldable_compose, &$Data_Bifoldable_unwrap, &$Data_Monoid_Disj_Disj) {
  $__fn = function($dictBifoldable) use (&$Data_Bifoldable_bifoldMap, &$Data_Monoid_Disj_monoidDisj, &$Prim_undefined, &$Data_Bifoldable_compose, &$Data_Bifoldable_unwrap, &$Data_Monoid_Disj_Disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bifoldMap1 = ($Data_Bifoldable_bifoldMap)($dictBifoldable);
    $__res = (function() use ($bifoldMap1, &$Data_Monoid_Disj_monoidDisj, &$Prim_undefined, &$Data_Bifoldable_compose, &$Data_Bifoldable_unwrap, &$Data_Monoid_Disj_Disj) {
  $__fn = function($dictBooleanAlgebra) use ($bifoldMap1, &$Data_Monoid_Disj_monoidDisj, &$Prim_undefined, &$Data_Bifoldable_compose, &$Data_Bifoldable_unwrap, &$Data_Monoid_Disj_Disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bifoldMap2 = ($bifoldMap1)(($Data_Monoid_Disj_monoidDisj)((($dictBooleanAlgebra)->HeytingAlgebra0)($Prim_undefined)));
    $__res = (function() use (&$Data_Bifoldable_compose, &$Data_Bifoldable_unwrap, $bifoldMap2, &$Data_Monoid_Disj_Disj) {
  $__fn = function($p, $q = null) use (&$Data_Bifoldable_compose, &$Data_Bifoldable_unwrap, $bifoldMap2, &$Data_Monoid_Disj_Disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bifoldable_compose)($Data_Bifoldable_unwrap, ($bifoldMap2)(($Data_Bifoldable_compose)($Data_Monoid_Disj_Disj, $p), ($Data_Bifoldable_compose)($Data_Monoid_Disj_Disj, $q)));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Bifoldable_biall
$Data_Bifoldable_biall = (function() use (&$Data_Bifoldable_bifoldMap, &$Data_Monoid_Conj_monoidConj, &$Prim_undefined, &$Data_Bifoldable_compose, &$Data_Bifoldable_unwrap, &$Data_Monoid_Conj_Conj) {
  $__fn = function($dictBifoldable) use (&$Data_Bifoldable_bifoldMap, &$Data_Monoid_Conj_monoidConj, &$Prim_undefined, &$Data_Bifoldable_compose, &$Data_Bifoldable_unwrap, &$Data_Monoid_Conj_Conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bifoldMap1 = ($Data_Bifoldable_bifoldMap)($dictBifoldable);
    $__res = (function() use ($bifoldMap1, &$Data_Monoid_Conj_monoidConj, &$Prim_undefined, &$Data_Bifoldable_compose, &$Data_Bifoldable_unwrap, &$Data_Monoid_Conj_Conj) {
  $__fn = function($dictBooleanAlgebra) use ($bifoldMap1, &$Data_Monoid_Conj_monoidConj, &$Prim_undefined, &$Data_Bifoldable_compose, &$Data_Bifoldable_unwrap, &$Data_Monoid_Conj_Conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bifoldMap2 = ($bifoldMap1)(($Data_Monoid_Conj_monoidConj)((($dictBooleanAlgebra)->HeytingAlgebra0)($Prim_undefined)));
    $__res = (function() use (&$Data_Bifoldable_compose, &$Data_Bifoldable_unwrap, $bifoldMap2, &$Data_Monoid_Conj_Conj) {
  $__fn = function($p, $q = null) use (&$Data_Bifoldable_compose, &$Data_Bifoldable_unwrap, $bifoldMap2, &$Data_Monoid_Conj_Conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bifoldable_compose)($Data_Bifoldable_unwrap, ($bifoldMap2)(($Data_Bifoldable_compose)($Data_Monoid_Conj_Conj, $p), ($Data_Bifoldable_compose)($Data_Monoid_Conj_Conj, $q)));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

