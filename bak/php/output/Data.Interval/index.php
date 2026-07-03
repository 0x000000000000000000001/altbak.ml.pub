<?php

namespace Data\Interval;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifoldable/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Bitraversable/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Interval/index.php';
require_once __DIR__ . '/../Data.Interval.Duration/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Interval_append
$Data_Interval_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Interval_show
$Data_Interval_show = ($Data_Show_show)(($Data_Maybe_showMaybe)($Data_Show_showInt));

// Data_Interval_compose
$Data_Interval_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Interval_conj
$Data_Interval_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Interval_eq
$Data_Interval_eq = ($Data_Eq_eq)(($Data_Maybe_eqMaybe)($Data_Eq_eqInt));

// Data_Interval_compare
$Data_Interval_compare = ($Data_Ord_compare)(($Data_Maybe_ordMaybe)($Data_Ord_ordInt));

// Data_Interval_StartEnd
$Data_Interval_StartEnd = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "StartEnd", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Interval_DurationEnd
$Data_Interval_DurationEnd = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "DurationEnd", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Interval_StartDuration
$Data_Interval_StartDuration = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "StartDuration", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Interval_DurationOnly
$Data_Interval_DurationOnly = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "DurationOnly", "values" => [$value0]];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Interval_RecurringInterval
$Data_Interval_RecurringInterval = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "RecurringInterval", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Interval_showInterval
$Data_Interval_showInterval = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Interval_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Interval_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show1 = ($Data_Show_show)($dictShow);
    $__res = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Interval_append, $show1) {
  $__fn = function($dictShow1) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Interval_append, $show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show2 = ($Data_Show_show)($dictShow1);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Interval_append, $show2, $show1) {
  $__body = function($v) use (&$Data_Interval_append, $show2, $show1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "StartEnd")) {
$x = ($__case_0)->values[0];
$y = ($__case_0)->values[1];
return ($Data_Interval_append)("(StartEnd ", ($Data_Interval_append)(($show2)($x), ($Data_Interval_append)(" ", ($Data_Interval_append)(($show2)($y), ")"))));
} else {
;
};
    if ((($__case_0)->tag === "DurationEnd")) {
$d = ($__case_0)->values[0];
$x = ($__case_0)->values[1];
return ($Data_Interval_append)("(DurationEnd ", ($Data_Interval_append)(($show1)($d), ($Data_Interval_append)(" ", ($Data_Interval_append)(($show2)($x), ")"))));
} else {
;
};
    if ((($__case_0)->tag === "StartDuration")) {
$x = ($__case_0)->values[0];
$d = ($__case_0)->values[1];
return ($Data_Interval_append)("(StartDuration ", ($Data_Interval_append)(($show2)($x), ($Data_Interval_append)(" ", ($Data_Interval_append)(($show1)($d), ")"))));
} else {
;
};
    if ((($__case_0)->tag === "DurationOnly")) {
$d = ($__case_0)->values[0];
return ($Data_Interval_append)("(DurationOnly ", ($Data_Interval_append)(($show1)($d), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Interval_append, $show2, $show1, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Interval_showRecurringInterval
$Data_Interval_showRecurringInterval = (function() use (&$Data_Interval_showInterval, &$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Interval_append, &$Data_Interval_show) {
  $__fn = function($dictShow) use (&$Data_Interval_showInterval, &$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Interval_append, &$Data_Interval_show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$showInterval1 = ($Data_Interval_showInterval)($dictShow);
    $__res = (function() use (&$Data_Show_show, $showInterval1, &$Data_Show_Show__dollar__Dict, &$Data_Interval_append, &$Data_Interval_show) {
  $__fn = function($dictShow1) use (&$Data_Show_show, $showInterval1, &$Data_Show_Show__dollar__Dict, &$Data_Interval_append, &$Data_Interval_show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show1 = ($Data_Show_show)(($showInterval1)($dictShow1));
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Interval_append, &$Data_Interval_show, $show1) {
  $__body = function($v) use (&$Data_Interval_append, &$Data_Interval_show, $show1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "RecurringInterval")) {
$x = ($__case_0)->values[0];
$y = ($__case_0)->values[1];
return ($Data_Interval_append)("(RecurringInterval ", ($Data_Interval_append)(($Data_Interval_show)($x), ($Data_Interval_append)(" ", ($Data_Interval_append)(($show1)($y), ")"))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Interval_append, &$Data_Interval_show, $show1, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Interval_over
$Data_Interval_over = (function() use (&$Data_Functor_map, &$Data_Interval_RecurringInterval) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Interval_RecurringInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use ($map1, &$Data_Interval_RecurringInterval) {
  $__body = function($f, $v) use ($map1, &$Data_Interval_RecurringInterval) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "RecurringInterval")) {
$f1 = $__case_0;
$n = ($__case_1)->values[0];
$i = ($__case_1)->values[1];
return ($map1)(($Data_Interval_RecurringInterval)($n), ($f1)($i));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map1, &$Data_Interval_RecurringInterval, $__body, &$__fn) {
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Interval_interval
$Data_Interval_interval = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "RecurringInterval")) {
$i = ($__case_0)->values[1];
return $i;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($__body, &$__fn) {
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

// Data_Interval_foldableInterval
$Data_Interval_foldableInterval = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldl" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "StartEnd")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->values[0];
$y = ($__case_2)->values[1];
return ($f)(($f)($z, $x), $y);
} else {
;
};
    if ((($__case_2)->tag === "DurationEnd")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->values[1];
return ($f)($z, $x);
} else {
;
};
    if ((($__case_2)->tag === "StartDuration")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->values[0];
return ($f)($z, $x);
} else {
;
};
    if (true) {
$z = $__case_1;
return $z;
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
})(), "foldr" => (function() use (&$Data_Foldable_foldrDefault, &$Data_Interval_foldableInterval) {
  $__fn = function($x) use (&$Data_Foldable_foldrDefault, &$Data_Interval_foldableInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_foldrDefault)($Data_Interval_foldableInterval, $x);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use (&$Data_Foldable_foldMapDefaultL, &$Data_Interval_foldableInterval) {
  $__fn = function($dictMonoid) use (&$Data_Foldable_foldMapDefaultL, &$Data_Interval_foldableInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_foldMapDefaultL)($Data_Interval_foldableInterval, $dictMonoid);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Interval_foldl
$Data_Interval_foldl = ($Data_Foldable_foldl)($Data_Interval_foldableInterval);

// Data_Interval_foldr
$Data_Interval_foldr = ($Data_Foldable_foldr)($Data_Interval_foldableInterval);

// Data_Interval_foldableRecurringInterval
$Data_Interval_foldableRecurringInterval = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldl" => (function() use (&$Data_Interval_compose, &$Data_Interval_foldl, &$Data_Interval_interval) {
  $__fn = function($f, $i = null) use (&$Data_Interval_compose, &$Data_Interval_foldl, &$Data_Interval_interval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Interval_compose)(($Data_Interval_foldl)($f, $i), $Data_Interval_interval);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "foldr" => (function() use (&$Data_Interval_compose, &$Data_Interval_foldr, &$Data_Interval_interval) {
  $__fn = function($f, $i = null) use (&$Data_Interval_compose, &$Data_Interval_foldr, &$Data_Interval_interval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Interval_compose)(($Data_Interval_foldr)($f, $i), $Data_Interval_interval);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use (&$Data_Foldable_foldMapDefaultL, &$Data_Interval_foldableRecurringInterval) {
  $__fn = function($dictMonoid) use (&$Data_Foldable_foldMapDefaultL, &$Data_Interval_foldableRecurringInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_foldMapDefaultL)($Data_Interval_foldableRecurringInterval, $dictMonoid);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Interval_eqInterval
$Data_Interval_eqInterval = (function() use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Interval_conj) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Interval_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1 = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Interval_conj, $eq1) {
  $__fn = function($dictEq1) use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Interval_conj, $eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq2 = ($Data_Eq_eq)($dictEq1);
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use (&$Data_Interval_conj, $eq2, $eq1) {
  $__body = function($x, $y) use (&$Data_Interval_conj, $eq2, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "StartEnd") && (($__case_1)->tag === "StartEnd"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
return ($Data_Interval_conj)(($eq2)($l, $r), ($eq2)($l1, $r1));
} else {
;
};
    if (((($__case_0)->tag === "DurationEnd") && (($__case_1)->tag === "DurationEnd"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
return ($Data_Interval_conj)(($eq1)($l, $r), ($eq2)($l1, $r1));
} else {
;
};
    if (((($__case_0)->tag === "StartDuration") && (($__case_1)->tag === "StartDuration"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
return ($Data_Interval_conj)(($eq2)($l, $r), ($eq1)($l1, $r1));
} else {
;
};
    if (((($__case_0)->tag === "DurationOnly") && (($__case_1)->tag === "DurationOnly"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($eq1)($l, $r);
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
  $__fn = function($x, $y = null) use (&$Data_Interval_conj, $eq2, $eq1, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Interval_eqRecurringInterval
$Data_Interval_eqRecurringInterval = (function() use (&$Data_Interval_eqInterval, &$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Interval_conj, &$Data_Interval_eq) {
  $__fn = function($dictEq) use (&$Data_Interval_eqInterval, &$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Interval_conj, &$Data_Interval_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eqInterval1 = ($Data_Interval_eqInterval)($dictEq);
    $__res = (function() use (&$Data_Eq_eq, $eqInterval1, &$Data_Eq_Eq__dollar__Dict, &$Data_Interval_conj, &$Data_Interval_eq) {
  $__fn = function($dictEq1) use (&$Data_Eq_eq, $eqInterval1, &$Data_Eq_Eq__dollar__Dict, &$Data_Interval_conj, &$Data_Interval_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1 = ($Data_Eq_eq)(($eqInterval1)($dictEq1));
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use (&$Data_Interval_conj, &$Data_Interval_eq, $eq1) {
  $__body = function($x, $y) use (&$Data_Interval_conj, &$Data_Interval_eq, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "RecurringInterval") && (($__case_1)->tag === "RecurringInterval"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
return ($Data_Interval_conj)(($Data_Interval_eq)($l, $r), ($eq1)($l1, $r1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_Interval_conj, &$Data_Interval_eq, $eq1, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Interval_ordInterval
$Data_Interval_ordInterval = (function() use (&$Data_Ord_compare, &$Data_Interval_eqInterval, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Interval_eqInterval, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare1 = ($Data_Ord_compare)($dictOrd);
$eqInterval1 = ($Data_Interval_eqInterval)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = (function() use (&$Data_Ord_compare, $eqInterval1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare1) {
  $__fn = function($dictOrd1) use (&$Data_Ord_compare, $eqInterval1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare2 = ($Data_Ord_compare)($dictOrd1);
$eqInterval2 = ($eqInterval1)((($dictOrd1)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use ($compare2, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare1) {
  $__body = function($x, $y) use ($compare2, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "StartEnd") && (($__case_1)->tag === "StartEnd"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$v = ($compare2)($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return $Data_Ordering_LT;
} else {
;
};
if ((($__case_0)->tag === "GT")) {
return $Data_Ordering_GT;
} else {
;
};
if (true) {
return ($compare2)($l1, $r1);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    if ((($__case_0)->tag === "StartEnd")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "StartEnd")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "DurationEnd") && (($__case_1)->tag === "DurationEnd"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$v = ($compare1)($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return $Data_Ordering_LT;
} else {
;
};
if ((($__case_0)->tag === "GT")) {
return $Data_Ordering_GT;
} else {
;
};
if (true) {
return ($compare2)($l1, $r1);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    if ((($__case_0)->tag === "DurationEnd")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "DurationEnd")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "StartDuration") && (($__case_1)->tag === "StartDuration"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$v = ($compare2)($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return $Data_Ordering_LT;
} else {
;
};
if ((($__case_0)->tag === "GT")) {
return $Data_Ordering_GT;
} else {
;
};
if (true) {
return ($compare1)($l1, $r1);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    if ((($__case_0)->tag === "StartDuration")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "StartDuration")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "DurationOnly") && (($__case_1)->tag === "DurationOnly"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($compare1)($l, $r);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use ($compare2, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare1, $__body, &$__fn) {
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
})(), "Eq0" => (function() use ($eqInterval2) {
  $__fn = function($__dollar____unused) use ($eqInterval2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqInterval2;
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Interval_ordRecurringInterval
$Data_Interval_ordRecurringInterval = (function() use (&$Data_Interval_ordInterval, &$Data_Interval_eqRecurringInterval, &$Prim_undefined, &$Data_Ord_compare, &$Data_Ord_Ord__dollar__Dict, &$Data_Interval_compare, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd) use (&$Data_Interval_ordInterval, &$Data_Interval_eqRecurringInterval, &$Prim_undefined, &$Data_Ord_compare, &$Data_Ord_Ord__dollar__Dict, &$Data_Interval_compare, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ordInterval1 = ($Data_Interval_ordInterval)($dictOrd);
$eqRecurringInterval1 = ($Data_Interval_eqRecurringInterval)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = (function() use (&$Data_Ord_compare, $ordInterval1, $eqRecurringInterval1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Interval_compare, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd1) use (&$Data_Ord_compare, $ordInterval1, $eqRecurringInterval1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Interval_compare, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare1 = ($Data_Ord_compare)(($ordInterval1)($dictOrd1));
$eqRecurringInterval2 = ($eqRecurringInterval1)((($dictOrd1)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Interval_compare, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare1) {
  $__body = function($x, $y) use (&$Data_Interval_compare, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "RecurringInterval") && (($__case_1)->tag === "RecurringInterval"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$v = ($Data_Interval_compare)($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return $Data_Ordering_LT;
} else {
;
};
if ((($__case_0)->tag === "GT")) {
return $Data_Ordering_GT;
} else {
;
};
if (true) {
return ($compare1)($l1, $r1);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_Interval_compare, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare1, $__body, &$__fn) {
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
})(), "Eq0" => (function() use ($eqRecurringInterval2) {
  $__fn = function($__dollar____unused) use ($eqRecurringInterval2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqRecurringInterval2;
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Interval_bifunctorInterval
$Data_Interval_bifunctorInterval = ($Data_Bifunctor_Bifunctor__dollar__Dict)((object)["bimap" => (function() use (&$Data_Interval_StartEnd, &$Data_Interval_DurationEnd, &$Data_Interval_StartDuration, &$Data_Interval_DurationOnly) {
  $__body = function($v, $v1, $v2) use (&$Data_Interval_StartEnd, &$Data_Interval_DurationEnd, &$Data_Interval_StartDuration, &$Data_Interval_DurationOnly) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "StartEnd")) {
$f = $__case_1;
$x = ($__case_2)->values[0];
$y = ($__case_2)->values[1];
return ($Data_Interval_StartEnd)(($f)($x), ($f)($y));
} else {
;
};
    if ((($__case_2)->tag === "DurationEnd")) {
$g = $__case_0;
$f = $__case_1;
$d = ($__case_2)->values[0];
$x = ($__case_2)->values[1];
return ($Data_Interval_DurationEnd)(($g)($d), ($f)($x));
} else {
;
};
    if ((($__case_2)->tag === "StartDuration")) {
$g = $__case_0;
$f = $__case_1;
$x = ($__case_2)->values[0];
$d = ($__case_2)->values[1];
return ($Data_Interval_StartDuration)(($f)($x), ($g)($d));
} else {
;
};
    if ((($__case_2)->tag === "DurationOnly")) {
$g = $__case_0;
$d = ($__case_2)->values[0];
return ($Data_Interval_DurationOnly)(($g)($d));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_Interval_StartEnd, &$Data_Interval_DurationEnd, &$Data_Interval_StartDuration, &$Data_Interval_DurationOnly, $__body, &$__fn) {
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
})()]);

// Data_Interval_bimap
$Data_Interval_bimap = ($Data_Bifunctor_bimap)($Data_Interval_bifunctorInterval);

// Data_Interval_bifunctorRecurringInterval
$Data_Interval_bifunctorRecurringInterval = ($Data_Bifunctor_Bifunctor__dollar__Dict)((object)["bimap" => (function() use (&$Data_Interval_RecurringInterval, &$Data_Interval_bimap) {
  $__body = function($f, $g, $v) use (&$Data_Interval_RecurringInterval, &$Data_Interval_bimap) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if ((($__case_2)->tag === "RecurringInterval")) {
$f1 = $__case_0;
$g1 = $__case_1;
$n = ($__case_2)->values[0];
$i = ($__case_2)->values[1];
return ($Data_Interval_RecurringInterval)($n, ($Data_Interval_bimap)($f1, $g1, $i));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $g = null, $v = null) use (&$Data_Interval_RecurringInterval, &$Data_Interval_bimap, $__body, &$__fn) {
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
})()]);

// Data_Interval_functorInterval
$Data_Interval_functorInterval = ($Data_Functor_Functor__dollar__Dict)((object)["map" => ($Data_Interval_bimap)(($Control_Category_identity)($Control_Category_categoryFn))]);

// Data_Interval_map
$Data_Interval_map = ($Data_Functor_map)($Data_Interval_functorInterval);

// Data_Interval_extendInterval
$Data_Interval_extendInterval = ($Control_Extend_Extend__dollar__Dict)((object)["extend" => (function() use (&$Data_Interval_StartEnd, &$Data_Interval_DurationEnd, &$Data_Interval_StartDuration, &$Data_Interval_DurationOnly) {
  $__body = function($v, $v1) use (&$Data_Interval_StartEnd, &$Data_Interval_DurationEnd, &$Data_Interval_StartDuration, &$Data_Interval_DurationOnly) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "StartEnd")) {
$f = $__case_0;
$a = $__case_1;
return ($Data_Interval_StartEnd)(($f)($a), ($f)($a));
} else {
;
};
    if ((($__case_1)->tag === "DurationEnd")) {
$f = $__case_0;
$a = $__case_1;
$d = ($__case_1)->values[0];
return ($Data_Interval_DurationEnd)($d, ($f)($a));
} else {
;
};
    if ((($__case_1)->tag === "StartDuration")) {
$f = $__case_0;
$a = $__case_1;
$d = ($__case_1)->values[1];
return ($Data_Interval_StartDuration)(($f)($a), $d);
} else {
;
};
    if ((($__case_1)->tag === "DurationOnly")) {
$d = ($__case_1)->values[0];
return ($Data_Interval_DurationOnly)($d);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Interval_StartEnd, &$Data_Interval_DurationEnd, &$Data_Interval_StartDuration, &$Data_Interval_DurationOnly, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Interval_functorInterval) {
  $__fn = function($__dollar____unused) use (&$Data_Interval_functorInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Interval_functorInterval;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Interval_extend
$Data_Interval_extend = ($Control_Extend_extend)($Data_Interval_extendInterval);

// Data_Interval_functorRecurringInterval
$Data_Interval_functorRecurringInterval = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Interval_RecurringInterval, &$Data_Interval_map) {
  $__body = function($f, $v) use (&$Data_Interval_RecurringInterval, &$Data_Interval_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "RecurringInterval")) {
$f1 = $__case_0;
$n = ($__case_1)->values[0];
$i = ($__case_1)->values[1];
return ($Data_Interval_RecurringInterval)($n, ($Data_Interval_map)($f1, $i));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Interval_RecurringInterval, &$Data_Interval_map, $__body, &$__fn) {
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

// Data_Interval_extendRecurringInterval
$Data_Interval_extendRecurringInterval = ($Control_Extend_Extend__dollar__Dict)((object)["extend" => (function() use (&$Data_Interval_RecurringInterval, &$Data_Interval_extend, &$Data_Function_const) {
  $__body = function($f, $v) use (&$Data_Interval_RecurringInterval, &$Data_Interval_extend, &$Data_Function_const) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "RecurringInterval")) {
$f1 = $__case_0;
$a = $__case_1;
$n = ($__case_1)->values[0];
$i = ($__case_1)->values[1];
return ($Data_Interval_RecurringInterval)($n, ($Data_Interval_extend)(($Data_Function_const)(($f1)($a)), $i));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Interval_RecurringInterval, &$Data_Interval_extend, &$Data_Function_const, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Interval_functorRecurringInterval) {
  $__fn = function($__dollar____unused) use (&$Data_Interval_functorRecurringInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Interval_functorRecurringInterval;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Interval_traversableInterval
$Data_Interval_traversableInterval = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Data_Functor_mapFlipped, &$Control_Applicative_pure, &$Data_Interval_StartEnd, &$Data_Interval_DurationEnd, &$Data_Interval_StartDuration, &$Data_Interval_DurationOnly) {
  $__fn = function($dictApplicative) use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Data_Functor_mapFlipped, &$Control_Applicative_pure, &$Data_Interval_StartEnd, &$Data_Interval_DurationEnd, &$Data_Interval_StartDuration, &$Data_Interval_DurationOnly, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Apply0 = (($dictApplicative)->Apply0)($Prim_undefined);
$apply = ($Control_Apply_apply)($Apply0);
$Functor0 = (($Apply0)->Functor0)($Prim_undefined);
$map1 = ($Data_Functor_map)($Functor0);
$mapFlipped = ($Data_Functor_mapFlipped)($Functor0);
$pure = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use ($apply, $map1, &$Data_Interval_StartEnd, $mapFlipped, &$Data_Interval_DurationEnd, &$Data_Interval_StartDuration, $pure, &$Data_Interval_DurationOnly) {
  $__body = function($v, $v1) use ($apply, $map1, &$Data_Interval_StartEnd, $mapFlipped, &$Data_Interval_DurationEnd, &$Data_Interval_StartDuration, $pure, &$Data_Interval_DurationOnly) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "StartEnd")) {
$f = $__case_0;
$x = ($__case_1)->values[0];
$y = ($__case_1)->values[1];
return ($apply)(($map1)($Data_Interval_StartEnd, ($f)($x)), ($f)($y));
} else {
;
};
    if ((($__case_1)->tag === "DurationEnd")) {
$f = $__case_0;
$d = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($mapFlipped)(($f)($x), ($Data_Interval_DurationEnd)($d));
} else {
;
};
    if ((($__case_1)->tag === "StartDuration")) {
$f = $__case_0;
$x = ($__case_1)->values[0];
$d = ($__case_1)->values[1];
return ($mapFlipped)(($f)($x), (function() use (&$Data_Interval_StartDuration, $d) {
  $__fn = function($v2) use (&$Data_Interval_StartDuration, $d, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Interval_StartDuration)($v2, $d);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
} else {
;
};
    if ((($__case_1)->tag === "DurationOnly")) {
$d = ($__case_1)->values[0];
return ($pure)(($Data_Interval_DurationOnly)($d));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($apply, $map1, &$Data_Interval_StartEnd, $mapFlipped, &$Data_Interval_DurationEnd, &$Data_Interval_StartDuration, $pure, &$Data_Interval_DurationOnly, $__body, &$__fn) {
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "sequence" => (function() use (&$Data_Traversable_sequenceDefault, &$Data_Interval_traversableInterval) {
  $__fn = function($dictApplicative) use (&$Data_Traversable_sequenceDefault, &$Data_Interval_traversableInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_sequenceDefault)($Data_Interval_traversableInterval, $dictApplicative);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_Interval_functorInterval) {
  $__fn = function($__dollar____unused) use (&$Data_Interval_functorInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Interval_functorInterval;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_Interval_foldableInterval) {
  $__fn = function($__dollar____unused) use (&$Data_Interval_foldableInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Interval_foldableInterval;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Interval_traverse
$Data_Interval_traverse = ($Data_Traversable_traverse)($Data_Interval_traversableInterval);

// Data_Interval_traversableRecurringInterval
$Data_Interval_traversableRecurringInterval = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Data_Interval_over, &$Prim_undefined, &$Data_Interval_traverse) {
  $__fn = function($dictApplicative) use (&$Data_Interval_over, &$Prim_undefined, &$Data_Interval_traverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$over1 = ($Data_Interval_over)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$traverse1 = ($Data_Interval_traverse)($dictApplicative);
    $__res = (function() use ($over1, $traverse1) {
  $__fn = function($f, $i = null) use ($over1, $traverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($over1)(($traverse1)($f), $i);
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
})(), "sequence" => (function() use (&$Data_Traversable_sequenceDefault, &$Data_Interval_traversableRecurringInterval) {
  $__fn = function($dictApplicative) use (&$Data_Traversable_sequenceDefault, &$Data_Interval_traversableRecurringInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_sequenceDefault)($Data_Interval_traversableRecurringInterval, $dictApplicative);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_Interval_functorRecurringInterval) {
  $__fn = function($__dollar____unused) use (&$Data_Interval_functorRecurringInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Interval_functorRecurringInterval;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_Interval_foldableRecurringInterval) {
  $__fn = function($__dollar____unused) use (&$Data_Interval_foldableRecurringInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Interval_foldableRecurringInterval;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Interval_bifoldableInterval
$Data_Interval_bifoldableInterval = ($Data_Bifoldable_Bifoldable__dollar__Dict)((object)["bifoldl" => (function() {
  $__body = function($v, $v1, $v2, $v3) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    $__case_3 = $v3;
    if ((($__case_3)->tag === "StartEnd")) {
$f = $__case_1;
$z = $__case_2;
$x = ($__case_3)->values[0];
$y = ($__case_3)->values[1];
return ($f)(($f)($z, $x), $y);
} else {
;
};
    if ((($__case_3)->tag === "DurationEnd")) {
$g = $__case_0;
$f = $__case_1;
$z = $__case_2;
$d = ($__case_3)->values[0];
$x = ($__case_3)->values[1];
return ($f)(($g)($z, $d), $x);
} else {
;
};
    if ((($__case_3)->tag === "StartDuration")) {
$g = $__case_0;
$f = $__case_1;
$z = $__case_2;
$x = ($__case_3)->values[0];
$d = ($__case_3)->values[1];
return ($f)(($g)($z, $d), $x);
} else {
;
};
    if ((($__case_3)->tag === "DurationOnly")) {
$g = $__case_0;
$z = $__case_2;
$d = ($__case_3)->values[0];
return ($g)($z, $d);
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
})(), "bifoldr" => (function() use (&$Data_Bifoldable_bifoldrDefault, &$Data_Interval_bifoldableInterval) {
  $__fn = function($x) use (&$Data_Bifoldable_bifoldrDefault, &$Data_Interval_bifoldableInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bifoldable_bifoldrDefault)($Data_Interval_bifoldableInterval, $x);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use (&$Data_Bifoldable_bifoldMapDefaultL, &$Data_Interval_bifoldableInterval) {
  $__fn = function($dictMonoid) use (&$Data_Bifoldable_bifoldMapDefaultL, &$Data_Interval_bifoldableInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bifoldable_bifoldMapDefaultL)($Data_Interval_bifoldableInterval, $dictMonoid);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Interval_bifoldl
$Data_Interval_bifoldl = ($Data_Bifoldable_bifoldl)($Data_Interval_bifoldableInterval);

// Data_Interval_bifoldr
$Data_Interval_bifoldr = ($Data_Bifoldable_bifoldr)($Data_Interval_bifoldableInterval);

// Data_Interval_bifoldableRecurringInterval
$Data_Interval_bifoldableRecurringInterval = ($Data_Bifoldable_Bifoldable__dollar__Dict)((object)["bifoldl" => (function() use (&$Data_Interval_compose, &$Data_Interval_bifoldl, &$Data_Interval_interval) {
  $__fn = function($f, $g = null, $i = null) use (&$Data_Interval_compose, &$Data_Interval_bifoldl, &$Data_Interval_interval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Interval_compose)(($Data_Interval_bifoldl)($f, $g, $i), $Data_Interval_interval);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "bifoldr" => (function() use (&$Data_Interval_compose, &$Data_Interval_bifoldr, &$Data_Interval_interval) {
  $__fn = function($f, $g = null, $i = null) use (&$Data_Interval_compose, &$Data_Interval_bifoldr, &$Data_Interval_interval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Interval_compose)(($Data_Interval_bifoldr)($f, $g, $i), $Data_Interval_interval);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use (&$Data_Bifoldable_bifoldMapDefaultL, &$Data_Interval_bifoldableRecurringInterval) {
  $__fn = function($dictMonoid) use (&$Data_Bifoldable_bifoldMapDefaultL, &$Data_Interval_bifoldableRecurringInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bifoldable_bifoldMapDefaultL)($Data_Interval_bifoldableRecurringInterval, $dictMonoid);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Interval_bitraversableInterval
$Data_Interval_bitraversableInterval = ($Data_Bitraversable_Bitraversable__dollar__Dict)((object)["bitraverse" => (function() use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Data_Interval_StartEnd, &$Data_Interval_DurationEnd, &$Data_Interval_StartDuration, &$Data_Interval_DurationOnly) {
  $__fn = function($dictApplicative) use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Data_Interval_StartEnd, &$Data_Interval_DurationEnd, &$Data_Interval_StartDuration, &$Data_Interval_DurationOnly, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Apply0 = (($dictApplicative)->Apply0)($Prim_undefined);
$apply = ($Control_Apply_apply)($Apply0);
$map1 = ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined));
    $__res = (function() use ($apply, $map1, &$Data_Interval_StartEnd, &$Data_Interval_DurationEnd, &$Data_Interval_StartDuration, &$Data_Interval_DurationOnly) {
  $__body = function($v, $v1, $v2) use ($apply, $map1, &$Data_Interval_StartEnd, &$Data_Interval_DurationEnd, &$Data_Interval_StartDuration, &$Data_Interval_DurationOnly) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "StartEnd")) {
$r = $__case_1;
$x = ($__case_2)->values[0];
$y = ($__case_2)->values[1];
return ($apply)(($map1)($Data_Interval_StartEnd, ($r)($x)), ($r)($y));
} else {
;
};
    if ((($__case_2)->tag === "DurationEnd")) {
$l = $__case_0;
$r = $__case_1;
$d = ($__case_2)->values[0];
$x = ($__case_2)->values[1];
return ($apply)(($map1)($Data_Interval_DurationEnd, ($l)($d)), ($r)($x));
} else {
;
};
    if ((($__case_2)->tag === "StartDuration")) {
$l = $__case_0;
$r = $__case_1;
$x = ($__case_2)->values[0];
$d = ($__case_2)->values[1];
return ($apply)(($map1)($Data_Interval_StartDuration, ($r)($x)), ($l)($d));
} else {
;
};
    if ((($__case_2)->tag === "DurationOnly")) {
$l = $__case_0;
$d = ($__case_2)->values[0];
return ($map1)($Data_Interval_DurationOnly, ($l)($d));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($apply, $map1, &$Data_Interval_StartEnd, &$Data_Interval_DurationEnd, &$Data_Interval_StartDuration, &$Data_Interval_DurationOnly, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "bisequence" => (function() use (&$Data_Bitraversable_bisequenceDefault, &$Data_Interval_bitraversableInterval) {
  $__fn = function($dictApplicative) use (&$Data_Bitraversable_bisequenceDefault, &$Data_Interval_bitraversableInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bitraversable_bisequenceDefault)($Data_Interval_bitraversableInterval, $dictApplicative);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() use (&$Data_Interval_bifunctorInterval) {
  $__fn = function($__dollar____unused) use (&$Data_Interval_bifunctorInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Interval_bifunctorInterval;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() use (&$Data_Interval_bifoldableInterval) {
  $__fn = function($__dollar____unused) use (&$Data_Interval_bifoldableInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Interval_bifoldableInterval;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Interval_bitraverse
$Data_Interval_bitraverse = ($Data_Bitraversable_bitraverse)($Data_Interval_bitraversableInterval);

// Data_Interval_bitraversableRecurringInterval
$Data_Interval_bitraversableRecurringInterval = ($Data_Bitraversable_Bitraversable__dollar__Dict)((object)["bitraverse" => (function() use (&$Data_Interval_over, &$Prim_undefined, &$Data_Interval_bitraverse) {
  $__fn = function($dictApplicative) use (&$Data_Interval_over, &$Prim_undefined, &$Data_Interval_bitraverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$over1 = ($Data_Interval_over)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$bitraverse1 = ($Data_Interval_bitraverse)($dictApplicative);
    $__res = (function() use ($over1, $bitraverse1) {
  $__fn = function($l, $r = null, $i = null) use ($over1, $bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($over1)(($bitraverse1)($l, $r), $i);
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
})(), "bisequence" => (function() use (&$Data_Bitraversable_bisequenceDefault, &$Data_Interval_bitraversableRecurringInterval) {
  $__fn = function($dictApplicative) use (&$Data_Bitraversable_bisequenceDefault, &$Data_Interval_bitraversableRecurringInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bitraversable_bisequenceDefault)($Data_Interval_bitraversableRecurringInterval, $dictApplicative);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() use (&$Data_Interval_bifunctorRecurringInterval) {
  $__fn = function($__dollar____unused) use (&$Data_Interval_bifunctorRecurringInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Interval_bifunctorRecurringInterval;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() use (&$Data_Interval_bifoldableRecurringInterval) {
  $__fn = function($__dollar____unused) use (&$Data_Interval_bifoldableRecurringInterval, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Interval_bifoldableRecurringInterval;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

