<?php

namespace Data\List\Lazy\NonEmpty;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Lazy.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_List_Lazy_NonEmpty_compose
$Data_List_Lazy_NonEmpty_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_List_Lazy_NonEmpty_map
$Data_List_Lazy_NonEmpty_map = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Data_List_Lazy_NonEmpty_add
$Data_List_Lazy_NonEmpty_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Data_List_Lazy_NonEmpty_append
$Data_List_Lazy_NonEmpty_append = ($Data_Semigroup_append)($Data_List_Lazy_Types_semigroupList);

// Data_List_Lazy_NonEmpty_uncons
$Data_List_Lazy_NonEmpty_uncons = (function() use (&$Data_Lazy_force) {
  $__body = function($v) use (&$Data_Lazy_force) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = ($Data_Lazy_force)($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return (object)["head" => $x, "tail" => $xs];
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Lazy_force, $__body, &$__fn) {
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

// Data_List_Lazy_NonEmpty_toList
$Data_List_Lazy_NonEmpty_toList = (function() use (&$Data_Lazy_force, &$Data_List_Lazy_Types_cons) {
  $__body = function($v) use (&$Data_Lazy_force, &$Data_List_Lazy_Types_cons) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = ($Data_Lazy_force)($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Data_List_Lazy_Types_cons)($x, $xs);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Lazy_force, &$Data_List_Lazy_Types_cons, $__body, &$__fn) {
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

// Data_List_Lazy_NonEmpty_toUnfoldable
$Data_List_Lazy_NonEmpty_toUnfoldable = (function() use (&$Data_List_Lazy_NonEmpty_compose, &$Data_Unfoldable_unfoldr, &$Data_List_Lazy_NonEmpty_map, &$Data_Tuple_Tuple, &$Data_List_Lazy_uncons, &$Data_List_Lazy_NonEmpty_toList) {
  $__fn = function($dictUnfoldable) use (&$Data_List_Lazy_NonEmpty_compose, &$Data_Unfoldable_unfoldr, &$Data_List_Lazy_NonEmpty_map, &$Data_Tuple_Tuple, &$Data_List_Lazy_uncons, &$Data_List_Lazy_NonEmpty_toList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_NonEmpty_compose)(($Data_Unfoldable_unfoldr)($dictUnfoldable, (function() use (&$Data_List_Lazy_NonEmpty_map, &$Data_Tuple_Tuple, &$Data_List_Lazy_uncons) {
  $__fn = function($xs) use (&$Data_List_Lazy_NonEmpty_map, &$Data_Tuple_Tuple, &$Data_List_Lazy_uncons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_NonEmpty_map)((function() use (&$Data_Tuple_Tuple) {
  $__fn = function($rec) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)(($rec)->head, ($rec)->tail);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_List_Lazy_uncons)($xs));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), $Data_List_Lazy_NonEmpty_toList);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_NonEmpty_tail
$Data_List_Lazy_NonEmpty_tail = (function() use (&$Data_Lazy_force) {
  $__body = function($v) use (&$Data_Lazy_force) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = ($Data_Lazy_force)($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$xs = ($__case_0)->values[1];
return $xs;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Lazy_force, $__body, &$__fn) {
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

// Data_List_Lazy_NonEmpty_singleton
$Data_List_Lazy_NonEmpty_singleton = ($Control_Applicative_pure)($Data_List_Lazy_Types_applicativeNonEmptyList);

// Data_List_Lazy_NonEmpty_repeat
$Data_List_Lazy_NonEmpty_repeat = (function() use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_repeat) {
  $__fn = function($x) use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_repeat, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_NonEmptyList)(($Data_Lazy_defer)((function() use (&$Data_NonEmpty_NonEmpty, $x, &$Data_List_Lazy_repeat) {
  $__fn = function($v) use (&$Data_NonEmpty_NonEmpty, $x, &$Data_List_Lazy_repeat, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_NonEmpty_NonEmpty)($x, ($Data_List_Lazy_repeat)($x));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_NonEmpty_length
$Data_List_Lazy_NonEmpty_length = (function() use (&$Data_Lazy_force, &$Data_List_Lazy_NonEmpty_add, &$Data_List_Lazy_length) {
  $__body = function($v) use (&$Data_Lazy_force, &$Data_List_Lazy_NonEmpty_add, &$Data_List_Lazy_length) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = ($Data_Lazy_force)($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$xs = ($__case_0)->values[1];
return ($Data_List_Lazy_NonEmpty_add)(1, ($Data_List_Lazy_length)($xs));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Lazy_force, &$Data_List_Lazy_NonEmpty_add, &$Data_List_Lazy_length, $__body, &$__fn) {
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

// Data_List_Lazy_NonEmpty_last
$Data_List_Lazy_NonEmpty_last = (function() use (&$Data_Lazy_force, &$Data_Maybe_fromMaybe, &$Data_List_Lazy_last) {
  $__body = function($v) use (&$Data_Lazy_force, &$Data_Maybe_fromMaybe, &$Data_List_Lazy_last) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = ($Data_Lazy_force)($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Data_Maybe_fromMaybe)($x, ($Data_List_Lazy_last)($xs));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Lazy_force, &$Data_Maybe_fromMaybe, &$Data_List_Lazy_last, $__body, &$__fn) {
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

// Data_List_Lazy_NonEmpty_iterate
$Data_List_Lazy_NonEmpty_iterate = (function() use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_iterate) {
  $__fn = function($f, $x = null) use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_iterate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_NonEmptyList)(($Data_Lazy_defer)((function() use (&$Data_NonEmpty_NonEmpty, $x, &$Data_List_Lazy_iterate, $f) {
  $__fn = function($v) use (&$Data_NonEmpty_NonEmpty, $x, &$Data_List_Lazy_iterate, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_NonEmpty_NonEmpty)($x, ($Data_List_Lazy_iterate)($f, ($f)($x)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_NonEmpty_init
$Data_List_Lazy_NonEmpty_init = (function() use (&$Data_Lazy_force, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_init) {
  $__body = function($v) use (&$Data_Lazy_force, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_init) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = ($Data_Lazy_force)($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Data_Maybe_maybe)($Data_List_Lazy_Types_nil, (function() use (&$Data_List_Lazy_Types_cons, $x) {
  $__fn = function($v2) use (&$Data_List_Lazy_Types_cons, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_cons)($x, $v2);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_List_Lazy_init)($xs));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Lazy_force, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_init, $__body, &$__fn) {
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

// Data_List_Lazy_NonEmpty_head
$Data_List_Lazy_NonEmpty_head = (function() use (&$Data_Lazy_force) {
  $__body = function($v) use (&$Data_Lazy_force) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = ($Data_Lazy_force)($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
return $x;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Lazy_force, $__body, &$__fn) {
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

// Data_List_Lazy_NonEmpty_fromList
$Data_List_Lazy_NonEmpty_fromList = (function() use (&$Data_List_Lazy_Types_step, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty) {
  $__body = function($l) use (&$Data_List_Lazy_Types_step, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty) {
    $v = ($Data_List_Lazy_Types_step)($l);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $Data_Maybe_Nothing;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Data_Maybe_Just)(($Data_List_Lazy_Types_NonEmptyList)(($Data_Lazy_defer)((function() use (&$Data_NonEmpty_NonEmpty, $x, $xs) {
  $__fn = function($v1) use (&$Data_NonEmpty_NonEmpty, $x, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_NonEmpty_NonEmpty)($x, $xs);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})())));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($l) use (&$Data_List_Lazy_Types_step, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($l);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($l);
  };
  return $__fn;
})();

// Data_List_Lazy_NonEmpty_fromFoldable
$Data_List_Lazy_NonEmpty_fromFoldable = (function() use (&$Data_List_Lazy_NonEmpty_compose, &$Data_List_Lazy_NonEmpty_fromList, &$Data_List_Lazy_fromFoldable) {
  $__fn = function($dictFoldable) use (&$Data_List_Lazy_NonEmpty_compose, &$Data_List_Lazy_NonEmpty_fromList, &$Data_List_Lazy_fromFoldable, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_NonEmpty_compose)($Data_List_Lazy_NonEmpty_fromList, ($Data_List_Lazy_fromFoldable)($dictFoldable));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_NonEmpty_cons
$Data_List_Lazy_NonEmpty_cons = (function() use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_Lazy_force, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_Types_cons) {
  $__body = function($y, $v) use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_Lazy_force, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_Types_cons) {
    $__case_0 = $y;
    $__case_1 = $v;
    if (true) {
$y1 = $__case_0;
$nel = $__case_1;
return ($Data_List_Lazy_Types_NonEmptyList)(($Data_Lazy_defer)((function() use (&$Data_Lazy_force, $nel, &$Data_NonEmpty_NonEmpty, $y1, &$Data_List_Lazy_Types_cons) {
  $__body = function($v1) use (&$Data_Lazy_force, $nel, &$Data_NonEmpty_NonEmpty, $y1, &$Data_List_Lazy_Types_cons) {
    $v2 = ($Data_Lazy_force)($nel);
    $__case_0 = $v2;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Data_NonEmpty_NonEmpty)($y1, ($Data_List_Lazy_Types_cons)($x, $xs));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use (&$Data_Lazy_force, $nel, &$Data_NonEmpty_NonEmpty, $y1, &$Data_List_Lazy_Types_cons, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($v1);
  };
  return $__fn;
})()));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($y, $v = null) use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_Lazy_force, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_Types_cons, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($y, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($y, $v);
  };
  return $__fn;
})();

// Data_List_Lazy_NonEmpty_concatMap
$Data_List_Lazy_NonEmpty_concatMap = ($Data_Function_flip)(($Control_Bind_bind)($Data_List_Lazy_Types_bindNonEmptyList));

// Data_List_Lazy_NonEmpty_appendFoldable
$Data_List_Lazy_NonEmpty_appendFoldable = (function() use (&$Data_List_Lazy_fromFoldable, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_NonEmpty_head, &$Data_List_Lazy_NonEmpty_append, &$Data_List_Lazy_NonEmpty_tail) {
  $__fn = function($dictFoldable) use (&$Data_List_Lazy_fromFoldable, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_NonEmpty_head, &$Data_List_Lazy_NonEmpty_append, &$Data_List_Lazy_NonEmpty_tail, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$fromFoldable1 = ($Data_List_Lazy_fromFoldable)($dictFoldable);
    $__res = (function() use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_NonEmpty_head, &$Data_List_Lazy_NonEmpty_append, &$Data_List_Lazy_NonEmpty_tail, $fromFoldable1) {
  $__fn = function($nel, $ys = null) use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_NonEmpty_head, &$Data_List_Lazy_NonEmpty_append, &$Data_List_Lazy_NonEmpty_tail, $fromFoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_NonEmptyList)(($Data_Lazy_defer)((function() use (&$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_NonEmpty_head, $nel, &$Data_List_Lazy_NonEmpty_append, &$Data_List_Lazy_NonEmpty_tail, $fromFoldable1, $ys) {
  $__fn = function($v) use (&$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_NonEmpty_head, $nel, &$Data_List_Lazy_NonEmpty_append, &$Data_List_Lazy_NonEmpty_tail, $fromFoldable1, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_NonEmpty_NonEmpty)(($Data_List_Lazy_NonEmpty_head)($nel), ($Data_List_Lazy_NonEmpty_append)(($Data_List_Lazy_NonEmpty_tail)($nel), ($fromFoldable1)($ys)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
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

