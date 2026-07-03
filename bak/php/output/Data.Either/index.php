<?php

namespace Data\Either;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Either_append
$Data_Either_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Either_compose
$Data_Either_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Either_Left
$Data_Either_Left = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Left", "values" => [$value0]];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Either_Right
$Data_Either_Right = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Right", "values" => [$value0]];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Either_showEither
$Data_Either_showEither = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Either_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Either_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Either_append, $show) {
  $__fn = function($dictShow1) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Either_append, $show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show1 = ($Data_Show_show)($dictShow1);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Either_append, $show, $show1) {
  $__body = function($v) use (&$Data_Either_append, $show, $show1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Left")) {
$x = ($__case_0)->values[0];
return ($Data_Either_append)("(Left ", ($Data_Either_append)(($show)($x), ")"));
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$y = ($__case_0)->values[0];
return ($Data_Either_append)("(Right ", ($Data_Either_append)(($show1)($y), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Either_append, $show, $show1, $__body, &$__fn) {
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

// Data_Either_note'
$Data_Either_note__prime__ = (function() use (&$Data_Maybe_maybe__prime__, &$Data_Either_compose, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($f) use (&$Data_Maybe_maybe__prime__, &$Data_Either_compose, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_maybe__prime__)(($Data_Either_compose)($Data_Either_Left, $f), $Data_Either_Right);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Either_note
$Data_Either_note = (function() use (&$Data_Maybe_maybe, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($a) use (&$Data_Maybe_maybe, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_maybe)(($Data_Either_Left)($a), $Data_Either_Right);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Either_genericEither
$Data_Either_genericEither = ($Data_Generic_Rep_Generic__dollar__Dict)((object)["to" => (function() use (&$Data_Either_Left, &$Data_Either_Right) {
  $__body = function($x) use (&$Data_Either_Left, &$Data_Either_Right) {
    $__case_0 = $x;
    if ((($__case_0)->tag === "Inl")) {
$arg = ($__case_0)->values[0];
return ($Data_Either_Left)($arg);
} else {
;
};
    if ((($__case_0)->tag === "Inr")) {
$arg = ($__case_0)->values[0];
return ($Data_Either_Right)($arg);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x) use (&$Data_Either_Left, &$Data_Either_Right, $__body, &$__fn) {
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
})(), "from" => (function() use (&$Data_Generic_Rep_Inl, &$Data_Generic_Rep_Constructor, &$Data_Generic_Rep_Argument, &$Data_Generic_Rep_Inr) {
  $__body = function($x) use (&$Data_Generic_Rep_Inl, &$Data_Generic_Rep_Constructor, &$Data_Generic_Rep_Argument, &$Data_Generic_Rep_Inr) {
    $__case_0 = $x;
    if ((($__case_0)->tag === "Left")) {
$arg = ($__case_0)->values[0];
return ($Data_Generic_Rep_Inl)(($Data_Generic_Rep_Constructor)(($Data_Generic_Rep_Argument)($arg)));
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$arg = ($__case_0)->values[0];
return ($Data_Generic_Rep_Inr)(($Data_Generic_Rep_Constructor)(($Data_Generic_Rep_Argument)($arg)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x) use (&$Data_Generic_Rep_Inl, &$Data_Generic_Rep_Constructor, &$Data_Generic_Rep_Argument, &$Data_Generic_Rep_Inr, $__body, &$__fn) {
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

// Data_Either_functorEither
$Data_Either_functorEither = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Either_Left, &$Data_Either_Right) {
  $__body = function($f, $m) use (&$Data_Either_Left, &$Data_Either_Right) {
    $__case_0 = $m;
    if ((($__case_0)->tag === "Left")) {
$v = ($__case_0)->values[0];
return ($Data_Either_Left)($v);
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$v = ($__case_0)->values[0];
return ($Data_Either_Right)(($f)($v));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $m = null) use (&$Data_Either_Left, &$Data_Either_Right, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f, $m);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f, $m);
  };
  return $__fn;
})()]);

// Data_Either_map
$Data_Either_map = ($Data_Functor_map)($Data_Either_functorEither);

// Data_Either_invariantEither
$Data_Either_invariantEither = ($Data_Functor_Invariant_Invariant__dollar__Dict)((object)["imap" => ($Data_Functor_Invariant_imapF)($Data_Either_functorEither)]);

// Data_Either_fromRight'
$Data_Either_fromRight__prime__ = (function() use (&$Data_Unit_unit) {
  $__body = function($v, $v1) use (&$Data_Unit_unit) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Right")) {
$b = ($__case_1)->values[0];
return $b;
} else {
;
};
    if (true) {
$default = $__case_0;
return ($default)($Data_Unit_unit);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Unit_unit, $__body, &$__fn) {
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

// Data_Either_fromRight
$Data_Either_fromRight = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Right")) {
$b = ($__case_1)->values[0];
return $b;
} else {
;
};
    if (true) {
$default = $__case_0;
return $default;
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
})();

// Data_Either_fromLeft'
$Data_Either_fromLeft__prime__ = (function() use (&$Data_Unit_unit) {
  $__body = function($v, $v1) use (&$Data_Unit_unit) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Left")) {
$a = ($__case_1)->values[0];
return $a;
} else {
;
};
    if (true) {
$default = $__case_0;
return ($default)($Data_Unit_unit);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Unit_unit, $__body, &$__fn) {
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

// Data_Either_fromLeft
$Data_Either_fromLeft = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Left")) {
$a = ($__case_1)->values[0];
return $a;
} else {
;
};
    if (true) {
$default = $__case_0;
return $default;
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
})();

// Data_Either_extendEither
$Data_Either_extendEither = ($Control_Extend_Extend__dollar__Dict)((object)["extend" => (function() use (&$Data_Either_Left, &$Data_Either_Right) {
  $__body = function($v, $v1) use (&$Data_Either_Left, &$Data_Either_Right) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Left")) {
$y = ($__case_1)->values[0];
return ($Data_Either_Left)($y);
} else {
;
};
    if (true) {
$f = $__case_0;
$x = $__case_1;
return ($Data_Either_Right)(($f)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Either_Left, &$Data_Either_Right, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Either_functorEither) {
  $__fn = function($__dollar____unused) use (&$Data_Either_functorEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Either_functorEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Either_eqEither
$Data_Either_eqEither = (function() use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, $eq) {
  $__fn = function($dictEq1) use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, $eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1 = ($Data_Eq_eq)($dictEq1);
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use ($eq, $eq1) {
  $__body = function($x, $y) use ($eq, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Left") && (($__case_1)->tag === "Left"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($eq)($l, $r);
} else {
;
};
    if (((($__case_0)->tag === "Right") && (($__case_1)->tag === "Right"))) {
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
  $__fn = function($x, $y = null) use ($eq, $eq1, $__body, &$__fn) {
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

// Data_Either_ordEither
$Data_Either_ordEither = (function() use (&$Data_Ord_compare, &$Data_Either_eqEither, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Either_eqEither, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
$eqEither1 = ($Data_Either_eqEither)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = (function() use (&$Data_Ord_compare, $eqEither1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, $compare, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd1) use (&$Data_Ord_compare, $eqEither1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, $compare, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare1 = ($Data_Ord_compare)($dictOrd1);
$eqEither2 = ($eqEither1)((($dictOrd1)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use ($compare, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare1) {
  $__body = function($x, $y) use ($compare, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Left") && (($__case_1)->tag === "Left"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($compare)($l, $r);
} else {
;
};
    if ((($__case_0)->tag === "Left")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "Left")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "Right") && (($__case_1)->tag === "Right"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($compare1)($l, $r);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use ($compare, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare1, $__body, &$__fn) {
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
})(), "Eq0" => (function() use ($eqEither2) {
  $__fn = function($__dollar____unused) use ($eqEither2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqEither2;
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

// Data_Either_eq1Either
$Data_Either_eq1Either = (function() use (&$Data_Either_eqEither, &$Data_Eq_Eq1__dollar__Dict, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_Either_eqEither, &$Data_Eq_Eq1__dollar__Dict, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eqEither1 = ($Data_Either_eqEither)($dictEq);
    $__res = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use (&$Data_Eq_eq, $eqEither1) {
  $__fn = function($dictEq1) use (&$Data_Eq_eq, $eqEither1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_eq)(($eqEither1)($dictEq1));
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

// Data_Either_ord1Either
$Data_Either_ord1Either = (function() use (&$Data_Either_ordEither, &$Data_Either_eq1Either, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, &$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_Either_ordEither, &$Data_Either_eq1Either, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, &$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ordEither1 = ($Data_Either_ordEither)($dictOrd);
$eq1Either1 = ($Data_Either_eq1Either)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use (&$Data_Ord_compare, $ordEither1) {
  $__fn = function($dictOrd1) use (&$Data_Ord_compare, $ordEither1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Ord_compare)(($ordEither1)($dictOrd1));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1Either1) {
  $__fn = function($__dollar____unused) use ($eq1Either1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eq1Either1;
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

// Data_Either_either
$Data_Either_either = (function() {
  $__body = function($v, $v1, $v2) {
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

// Data_Either_hush
$Data_Either_hush = ($Data_Either_either)(($Data_Function_const)($Data_Maybe_Nothing), $Data_Maybe_Just);

// Data_Either_isLeft
$Data_Either_isLeft = ($Data_Either_either)(($Data_Function_const)(true), ($Data_Function_const)(false));

// Data_Either_isRight
$Data_Either_isRight = ($Data_Either_either)(($Data_Function_const)(false), ($Data_Function_const)(true));

// Data_Either_choose
$Data_Either_choose = (function() use (&$Control_Alt_alt, &$Data_Functor_map, &$Prim_undefined, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictAlt) use (&$Control_Alt_alt, &$Data_Functor_map, &$Prim_undefined, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$alt = ($Control_Alt_alt)($dictAlt);
$map1 = ($Data_Functor_map)((($dictAlt)->Functor0)($Prim_undefined));
    $__res = (function() use ($alt, $map1, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($a, $b = null) use ($alt, $map1, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($alt)(($map1)($Data_Either_Left, $a), ($map1)($Data_Either_Right, $b));
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

// Data_Either_boundedEither
$Data_Either_boundedEither = (function() use (&$Data_Bounded_bottom, &$Data_Either_ordEither, &$Prim_undefined, &$Data_Bounded_Bounded__dollar__Dict, &$Data_Either_Right, &$Data_Bounded_top, &$Data_Either_Left) {
  $__fn = function($dictBounded) use (&$Data_Bounded_bottom, &$Data_Either_ordEither, &$Prim_undefined, &$Data_Bounded_Bounded__dollar__Dict, &$Data_Either_Right, &$Data_Bounded_top, &$Data_Either_Left, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bottom = ($Data_Bounded_bottom)($dictBounded);
$ordEither1 = ($Data_Either_ordEither)((($dictBounded)->Ord0)($Prim_undefined));
    $__res = (function() use ($ordEither1, &$Prim_undefined, &$Data_Bounded_Bounded__dollar__Dict, &$Data_Either_Right, &$Data_Bounded_top, &$Data_Either_Left, $bottom) {
  $__fn = function($dictBounded1) use ($ordEither1, &$Prim_undefined, &$Data_Bounded_Bounded__dollar__Dict, &$Data_Either_Right, &$Data_Bounded_top, &$Data_Either_Left, $bottom, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ordEither2 = ($ordEither1)((($dictBounded1)->Ord0)($Prim_undefined));
    $__res = ($Data_Bounded_Bounded__dollar__Dict)((object)["top" => ($Data_Either_Right)(($Data_Bounded_top)($dictBounded1)), "bottom" => ($Data_Either_Left)($bottom), "Ord0" => (function() use ($ordEither2) {
  $__fn = function($__dollar____unused) use ($ordEither2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $ordEither2;
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

// Data_Either_blush
$Data_Either_blush = ($Data_Either_either)($Data_Maybe_Just, ($Data_Function_const)($Data_Maybe_Nothing));

// Data_Either_applyEither
$Data_Either_applyEither = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Either_Left, &$Data_Either_map) {
  $__body = function($v, $v1) use (&$Data_Either_Left, &$Data_Either_map) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Left")) {
$e = ($__case_0)->values[0];
return ($Data_Either_Left)($e);
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$f = ($__case_0)->values[0];
$r = $__case_1;
return ($Data_Either_map)($f, $r);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Either_Left, &$Data_Either_map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Either_functorEither) {
  $__fn = function($__dollar____unused) use (&$Data_Either_functorEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Either_functorEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Either_apply
$Data_Either_apply = ($Control_Apply_apply)($Data_Either_applyEither);

// Data_Either_bindEither
$Data_Either_bindEither = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => ($Data_Either_either)((function() use (&$Data_Either_Left) {
  $__fn = function($e, $v = null) use (&$Data_Either_Left, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Either_Left)($e);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), (function() {
  $__fn = function($a, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)($a);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()), "Apply0" => (function() use (&$Data_Either_applyEither) {
  $__fn = function($__dollar____unused) use (&$Data_Either_applyEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Either_applyEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Either_semigroupEither
$Data_Either_semigroupEither = (function() use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Either_apply, &$Data_Either_map) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Either_apply, &$Data_Either_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append1 = ($Data_Semigroup_append)($dictSemigroup);
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Either_apply, &$Data_Either_map, $append1) {
  $__fn = function($x, $y = null) use (&$Data_Either_apply, &$Data_Either_map, $append1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Either_apply)(($Data_Either_map)($append1, $x), $y);
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

// Data_Either_applicativeEither
$Data_Either_applicativeEither = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => $Data_Either_Right, "Apply0" => (function() use (&$Data_Either_applyEither) {
  $__fn = function($__dollar____unused) use (&$Data_Either_applyEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Either_applyEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Either_monadEither
$Data_Either_monadEither = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_Either_applicativeEither) {
  $__fn = function($__dollar____unused) use (&$Data_Either_applicativeEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Either_applicativeEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Data_Either_bindEither) {
  $__fn = function($__dollar____unused) use (&$Data_Either_bindEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Either_bindEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Either_altEither
$Data_Either_altEither = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Left")) {
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
})(), "Functor0" => (function() use (&$Data_Either_functorEither) {
  $__fn = function($__dollar____unused) use (&$Data_Either_functorEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Either_functorEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

