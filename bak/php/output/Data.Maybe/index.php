<?php

namespace Data\Maybe;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Maybe_append
$Data_Maybe_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Maybe_identity
$Data_Maybe_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Maybe_Nothing
$Data_Maybe_Nothing = (object)["tag" => "Nothing", "values" => []];

// Data_Maybe_Just
$Data_Maybe_Just = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Just", "values" => [$value0]];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Maybe_showMaybe
$Data_Maybe_showMaybe = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Maybe_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Maybe_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Maybe_append, $show) {
  $__body = function($v) use (&$Data_Maybe_append, $show) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
return ($Data_Maybe_append)("(Just ", ($Data_Maybe_append)(($show)($x), ")"));
} else {
;
};
    if ((($__case_0)->tag === "Nothing")) {
return "Nothing";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_append, $show, $__body, &$__fn) {
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Maybe_semigroupMaybe
$Data_Maybe_semigroupMaybe = (function() use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Maybe_Just) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append1 = ($Data_Semigroup_append)($dictSemigroup);
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Maybe_Just, $append1) {
  $__body = function($v, $v1) use (&$Data_Maybe_Just, $append1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Nothing")) {
$y = $__case_1;
return $y;
} else {
;
};
    if ((($__case_1)->tag === "Nothing")) {
$x = $__case_0;
return $x;
} else {
;
};
    if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Just"))) {
$x = ($__case_0)->values[0];
$y = ($__case_1)->values[0];
return ($Data_Maybe_Just)(($append1)($x, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Maybe_Just, $append1, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Maybe_optional
$Data_Maybe_optional = (function() use (&$Control_Alt_alt, &$Data_Functor_map, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__fn = function($dictAlt) use (&$Control_Alt_alt, &$Data_Functor_map, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$alt = ($Control_Alt_alt)($dictAlt);
$map1 = ($Data_Functor_map)((($dictAlt)->Functor0)($Prim_undefined));
    $__res = (function() use (&$Control_Applicative_pure, $alt, $map1, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, $alt, $map1, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use ($alt, $map1, &$Data_Maybe_Just, $pure, &$Data_Maybe_Nothing) {
  $__fn = function($a) use ($alt, $map1, &$Data_Maybe_Just, $pure, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($alt)(($map1)($Data_Maybe_Just, $a), ($pure)($Data_Maybe_Nothing));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Maybe_monoidMaybe
$Data_Maybe_monoidMaybe = (function() use (&$Data_Maybe_semigroupMaybe, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Maybe_Nothing) {
  $__fn = function($dictSemigroup) use (&$Data_Maybe_semigroupMaybe, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupMaybe1 = ($Data_Maybe_semigroupMaybe)($dictSemigroup);
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => $Data_Maybe_Nothing, "Semigroup0" => (function() use ($semigroupMaybe1) {
  $__fn = function($__dollar____unused) use ($semigroupMaybe1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupMaybe1;
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

// Data_Maybe_maybe'
$Data_Maybe_maybe__prime__ = (function() use (&$Data_Unit_unit) {
  $__body = function($v, $v1, $v2) use (&$Data_Unit_unit) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Nothing")) {
$g = $__case_0;
return ($g)($Data_Unit_unit);
} else {
;
};
    if ((($__case_2)->tag === "Just")) {
$f = $__case_1;
$a = ($__case_2)->values[0];
return ($f)($a);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_Unit_unit, $__body, &$__fn) {
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

// Data_Maybe_maybe
$Data_Maybe_maybe = (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Nothing")) {
$b = $__case_0;
return $b;
} else {
;
};
    if ((($__case_2)->tag === "Just")) {
$f = $__case_1;
$a = ($__case_2)->values[0];
return ($f)($a);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
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

// Data_Maybe_isNothing
$Data_Maybe_isNothing = ($Data_Maybe_maybe)(true, ($Data_Function_const)(false));

// Data_Maybe_isJust
$Data_Maybe_isJust = ($Data_Maybe_maybe)(false, ($Data_Function_const)(true));

// Data_Maybe_genericMaybe
$Data_Maybe_genericMaybe = ($Data_Generic_Rep_Generic__dollar__Dict)((object)["to" => (function() use (&$Data_Maybe_Nothing, &$Data_Maybe_Just) {
  $__body = function($x) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just) {
    $__case_0 = $x;
    if ((($__case_0)->tag === "Inl")) {
return $Data_Maybe_Nothing;
} else {
;
};
    if ((($__case_0)->tag === "Inr")) {
$arg = ($__case_0)->values[0];
return ($Data_Maybe_Just)($arg);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($x);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($x);
  };
  return $__fn;
})(), "from" => (function() use (&$Data_Generic_Rep_Inl, &$Data_Generic_Rep_Constructor, &$Data_Generic_Rep_NoArguments, &$Data_Generic_Rep_Inr, &$Data_Generic_Rep_Argument) {
  $__body = function($x) use (&$Data_Generic_Rep_Inl, &$Data_Generic_Rep_Constructor, &$Data_Generic_Rep_NoArguments, &$Data_Generic_Rep_Inr, &$Data_Generic_Rep_Argument) {
    $__case_0 = $x;
    if ((($__case_0)->tag === "Nothing")) {
return ($Data_Generic_Rep_Inl)(($Data_Generic_Rep_Constructor)($Data_Generic_Rep_NoArguments));
} else {
;
};
    if ((($__case_0)->tag === "Just")) {
$arg = ($__case_0)->values[0];
return ($Data_Generic_Rep_Inr)(($Data_Generic_Rep_Constructor)(($Data_Generic_Rep_Argument)($arg)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x) use (&$Data_Generic_Rep_Inl, &$Data_Generic_Rep_Constructor, &$Data_Generic_Rep_NoArguments, &$Data_Generic_Rep_Inr, &$Data_Generic_Rep_Argument, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($x);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($x);
  };
  return $__fn;
})()]);

// Data_Maybe_functorMaybe
$Data_Maybe_functorMaybe = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__body = function($v, $v1) use (&$Data_Maybe_Just, &$Data_Maybe_Nothing) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Just")) {
$fn = $__case_0;
$x = ($__case_1)->values[0];
return ($Data_Maybe_Just)(($fn)($x));
} else {
;
};
    if (true) {
return $Data_Maybe_Nothing;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Maybe_Just, &$Data_Maybe_Nothing, $__body, &$__fn) {
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

// Data_Maybe_map
$Data_Maybe_map = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Data_Maybe_invariantMaybe
$Data_Maybe_invariantMaybe = ($Data_Functor_Invariant_Invariant__dollar__Dict)((object)["imap" => ($Data_Functor_Invariant_imapF)($Data_Maybe_functorMaybe)]);

// Data_Maybe_fromMaybe'
$Data_Maybe_fromMaybe__prime__ = (function() use (&$Data_Maybe_maybe__prime__, &$Data_Maybe_identity) {
  $__fn = function($a) use (&$Data_Maybe_maybe__prime__, &$Data_Maybe_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_maybe__prime__)($a, $Data_Maybe_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Maybe_fromMaybe
$Data_Maybe_fromMaybe = (function() use (&$Data_Maybe_maybe, &$Data_Maybe_identity) {
  $__fn = function($a) use (&$Data_Maybe_maybe, &$Data_Maybe_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_maybe)($a, $Data_Maybe_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Maybe_fromJust
$Data_Maybe_fromJust = (function() use (&$Prim_undefined) {
  $__fn = function($__dollar____unused, $v = null) use (&$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ((function() use ($v) {
  $__body = function($__dollar____unused) use ($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
return $x;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($__dollar____unused) use ($v, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($__dollar____unused);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($__dollar____unused);
  };
  return $__fn;
})())($Prim_undefined);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Maybe_extendMaybe
$Data_Maybe_extendMaybe = ($Control_Extend_Extend__dollar__Dict)((object)["extend" => (function() use (&$Data_Maybe_Nothing, &$Data_Maybe_Just) {
  $__body = function($v, $v1) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nothing")) {
return $Data_Maybe_Nothing;
} else {
;
};
    if (true) {
$f = $__case_0;
$x = $__case_1;
return ($Data_Maybe_Just)(($f)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Maybe_functorMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_functorMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_functorMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Maybe_eqMaybe
$Data_Maybe_eqMaybe = (function() use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq = ($Data_Eq_eq)($dictEq);
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use ($eq) {
  $__body = function($x, $y) use ($eq) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Nothing") && (($__case_1)->tag === "Nothing"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Just"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($eq)($l, $r);
} else {
;
};
    if (true) {
return false;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use ($eq, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($x, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($x, $y);
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

// Data_Maybe_ordMaybe
$Data_Maybe_ordMaybe = (function() use (&$Data_Ord_compare, &$Data_Maybe_eqMaybe, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Maybe_eqMaybe, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
$eqMaybe1 = ($Data_Maybe_eqMaybe)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare) {
  $__body = function($x, $y) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Nothing") && (($__case_1)->tag === "Nothing"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "Nothing")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "Nothing")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Just"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($compare)($l, $r);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($x, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($x, $y);
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqMaybe1) {
  $__fn = function($__dollar____unused) use ($eqMaybe1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqMaybe1;
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

// Data_Maybe_eq1Maybe
$Data_Maybe_eq1Maybe = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use (&$Data_Eq_eq, &$Data_Maybe_eqMaybe) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Maybe_eqMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_eq)(($Data_Maybe_eqMaybe)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Maybe_ord1Maybe
$Data_Maybe_ord1Maybe = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use (&$Data_Ord_compare, &$Data_Maybe_ordMaybe) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Maybe_ordMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Ord_compare)(($Data_Maybe_ordMaybe)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use (&$Data_Maybe_eq1Maybe) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_eq1Maybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_eq1Maybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Maybe_boundedMaybe
$Data_Maybe_boundedMaybe = (function() use (&$Data_Maybe_ordMaybe, &$Prim_undefined, &$Data_Bounded_Bounded__dollar__Dict, &$Data_Maybe_Just, &$Data_Bounded_top, &$Data_Maybe_Nothing) {
  $__fn = function($dictBounded) use (&$Data_Maybe_ordMaybe, &$Prim_undefined, &$Data_Bounded_Bounded__dollar__Dict, &$Data_Maybe_Just, &$Data_Bounded_top, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ordMaybe1 = ($Data_Maybe_ordMaybe)((($dictBounded)->Ord0)($Prim_undefined));
    $__res = ($Data_Bounded_Bounded__dollar__Dict)((object)["top" => ($Data_Maybe_Just)(($Data_Bounded_top)($dictBounded)), "bottom" => $Data_Maybe_Nothing, "Ord0" => (function() use ($ordMaybe1) {
  $__fn = function($__dollar____unused) use ($ordMaybe1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $ordMaybe1;
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

// Data_Maybe_applyMaybe
$Data_Maybe_applyMaybe = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Maybe_map, &$Data_Maybe_Nothing) {
  $__body = function($v, $v1) use (&$Data_Maybe_map, &$Data_Maybe_Nothing) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Just")) {
$fn = ($__case_0)->values[0];
$x = $__case_1;
return ($Data_Maybe_map)($fn, $x);
} else {
;
};
    if ((($__case_0)->tag === "Nothing")) {
return $Data_Maybe_Nothing;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Maybe_map, &$Data_Maybe_Nothing, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Maybe_functorMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_functorMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_functorMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Maybe_apply
$Data_Maybe_apply = ($Control_Apply_apply)($Data_Maybe_applyMaybe);

// Data_Maybe_bindMaybe
$Data_Maybe_bindMaybe = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Data_Maybe_Nothing) {
  $__body = function($v, $v1) use (&$Data_Maybe_Nothing) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
$k = $__case_1;
return ($k)($x);
} else {
;
};
    if ((($__case_0)->tag === "Nothing")) {
return $Data_Maybe_Nothing;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Maybe_Nothing, $__body, &$__fn) {
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
})(), "Apply0" => (function() use (&$Data_Maybe_applyMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_applyMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_applyMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Maybe_semiringMaybe
$Data_Maybe_semiringMaybe = (function() use (&$Data_Semiring_add, &$Data_Semiring_mul, &$Data_Semiring_Semiring__dollar__Dict, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Semiring_one, &$Data_Maybe_apply, &$Data_Maybe_map) {
  $__fn = function($dictSemiring) use (&$Data_Semiring_add, &$Data_Semiring_mul, &$Data_Semiring_Semiring__dollar__Dict, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Semiring_one, &$Data_Maybe_apply, &$Data_Maybe_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$add = ($Data_Semiring_add)($dictSemiring);
$mul = ($Data_Semiring_mul)($dictSemiring);
    $__res = ($Data_Semiring_Semiring__dollar__Dict)((object)["zero" => $Data_Maybe_Nothing, "one" => ($Data_Maybe_Just)(($Data_Semiring_one)($dictSemiring)), "add" => (function() use (&$Data_Maybe_Just, $add) {
  $__body = function($v, $v1) use (&$Data_Maybe_Just, $add) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Nothing")) {
$y = $__case_1;
return $y;
} else {
;
};
    if ((($__case_1)->tag === "Nothing")) {
$x = $__case_0;
return $x;
} else {
;
};
    if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Just"))) {
$x = ($__case_0)->values[0];
$y = ($__case_1)->values[0];
return ($Data_Maybe_Just)(($add)($x, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Maybe_Just, $add, $__body, &$__fn) {
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
})(), "mul" => (function() use (&$Data_Maybe_apply, &$Data_Maybe_map, $mul) {
  $__fn = function($x, $y = null) use (&$Data_Maybe_apply, &$Data_Maybe_map, $mul, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_apply)(($Data_Maybe_map)($mul, $x), $y);
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

// Data_Maybe_applicativeMaybe
$Data_Maybe_applicativeMaybe = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => $Data_Maybe_Just, "Apply0" => (function() use (&$Data_Maybe_applyMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_applyMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_applyMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Maybe_monadMaybe
$Data_Maybe_monadMaybe = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_Maybe_applicativeMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_applicativeMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_applicativeMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Data_Maybe_bindMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_bindMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_bindMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Maybe_altMaybe
$Data_Maybe_altMaybe = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Nothing")) {
$r = $__case_1;
return $r;
} else {
;
};
    if (true) {
$l = $__case_0;
return $l;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Maybe_functorMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_functorMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_functorMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Maybe_plusMaybe
$Data_Maybe_plusMaybe = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => $Data_Maybe_Nothing, "Alt0" => (function() use (&$Data_Maybe_altMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_altMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_altMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Maybe_alternativeMaybe
$Data_Maybe_alternativeMaybe = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_Maybe_applicativeMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_applicativeMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_applicativeMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use (&$Data_Maybe_plusMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_plusMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_plusMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

