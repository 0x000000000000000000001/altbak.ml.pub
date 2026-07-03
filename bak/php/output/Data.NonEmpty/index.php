<?php

namespace Data\NonEmpty;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_NonEmpty_map
$Data_NonEmpty_map = ($Data_Functor_map)($Data_Tuple_functorTuple);

// Data_NonEmpty_map1
$Data_NonEmpty_map1 = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Data_NonEmpty_append
$Data_NonEmpty_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_NonEmpty_compose
$Data_NonEmpty_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_NonEmpty_conj
$Data_NonEmpty_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_NonEmpty_NonEmpty
$Data_NonEmpty_NonEmpty = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "NonEmpty", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_NonEmpty_unfoldable1NonEmpty
$Data_NonEmpty_unfoldable1NonEmpty = (function() use (&$Data_Unfoldable_unfoldr, &$Data_Unfoldable1_Unfoldable1__dollar__Dict, &$Data_Tuple_uncurry, &$Data_NonEmpty_NonEmpty, &$Data_NonEmpty_map, &$Data_NonEmpty_map1) {
  $__fn = function($dictUnfoldable) use (&$Data_Unfoldable_unfoldr, &$Data_Unfoldable1_Unfoldable1__dollar__Dict, &$Data_Tuple_uncurry, &$Data_NonEmpty_NonEmpty, &$Data_NonEmpty_map, &$Data_NonEmpty_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$unfoldr = ($Data_Unfoldable_unfoldr)($dictUnfoldable);
    $__res = ($Data_Unfoldable1_Unfoldable1__dollar__Dict)((object)["unfoldr1" => (function() use (&$Data_Tuple_uncurry, &$Data_NonEmpty_NonEmpty, &$Data_NonEmpty_map, $unfoldr, &$Data_NonEmpty_map1) {
  $__fn = function($f, $b = null) use (&$Data_Tuple_uncurry, &$Data_NonEmpty_NonEmpty, &$Data_NonEmpty_map, $unfoldr, &$Data_NonEmpty_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_uncurry)($Data_NonEmpty_NonEmpty, ($Data_NonEmpty_map)(($unfoldr)(($Data_NonEmpty_map1)($f)), ($f)($b)));
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

// Data_NonEmpty_tail
$Data_NonEmpty_tail = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$xs = ($__case_0)->values[1];
return $xs;
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

// Data_NonEmpty_singleton
$Data_NonEmpty_singleton = (function() use (&$Control_Plus_empty, &$Data_NonEmpty_NonEmpty) {
  $__fn = function($dictPlus) use (&$Control_Plus_empty, &$Data_NonEmpty_NonEmpty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$empty = ($Control_Plus_empty)($dictPlus);
    $__res = (function() use (&$Data_NonEmpty_NonEmpty, $empty) {
  $__fn = function($a) use (&$Data_NonEmpty_NonEmpty, $empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_NonEmpty_NonEmpty)($a, $empty);
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

// Data_NonEmpty_showNonEmpty
$Data_NonEmpty_showNonEmpty = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_NonEmpty_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_NonEmpty_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_NonEmpty_append, $show) {
  $__fn = function($dictShow1) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_NonEmpty_append, $show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show1 = ($Data_Show_show)($dictShow1);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_NonEmpty_append, $show, $show1) {
  $__body = function($v) use (&$Data_NonEmpty_append, $show, $show1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$a = ($__case_0)->values[0];
$fa = ($__case_0)->values[1];
return ($Data_NonEmpty_append)("(NonEmpty ", ($Data_NonEmpty_append)(($show)($a), ($Data_NonEmpty_append)(" ", ($Data_NonEmpty_append)(($show1)($fa), ")"))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_NonEmpty_append, $show, $show1, $__body, &$__fn) {
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

// Data_NonEmpty_semigroupNonEmpty
$Data_NonEmpty_semigroupNonEmpty = (function() use (&$Control_Applicative_pure, &$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_NonEmpty_NonEmpty) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_NonEmpty_NonEmpty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_NonEmpty_NonEmpty, $pure) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_NonEmpty_NonEmpty, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append1 = ($Data_Semigroup_append)($dictSemigroup);
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_NonEmpty_NonEmpty, $append1, $pure) {
  $__body = function($v, $v1) use (&$Data_NonEmpty_NonEmpty, $append1, $pure) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$a1 = ($__case_0)->values[0];
$f1 = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$f2 = ($__case_1)->values[1];
return ($Data_NonEmpty_NonEmpty)($a1, ($append1)($f1, ($append1)(($pure)($a2), $f2)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_NonEmpty_NonEmpty, $append1, $pure, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_NonEmpty_oneOf
$Data_NonEmpty_oneOf = (function() use (&$Control_Alt_alt, &$Prim_undefined, &$Control_Applicative_pure) {
  $__fn = function($dictAlternative) use (&$Control_Alt_alt, &$Prim_undefined, &$Control_Applicative_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$alt = ($Control_Alt_alt)((((($dictAlternative)->Plus1)($Prim_undefined))->Alt0)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($dictAlternative)->Applicative0)($Prim_undefined));
    $__res = (function() use ($alt, $pure) {
  $__body = function($v) use ($alt, $pure) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$a = ($__case_0)->values[0];
$fa = ($__case_0)->values[1];
return ($alt)(($pure)($a), $fa);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($alt, $pure, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_NonEmpty_head
$Data_NonEmpty_head = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
return $x;
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

// Data_NonEmpty_functorNonEmpty
$Data_NonEmpty_functorNonEmpty = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_NonEmpty_NonEmpty) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_NonEmpty_NonEmpty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map2 = ($Data_Functor_map)($dictFunctor);
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_NonEmpty_NonEmpty, $map2) {
  $__body = function($f, $m) use (&$Data_NonEmpty_NonEmpty, $map2) {
    $__case_0 = $m;
    if ((($__case_0)->tag === "NonEmpty")) {
$v = ($__case_0)->values[0];
$v1 = ($__case_0)->values[1];
return ($Data_NonEmpty_NonEmpty)(($f)($v), ($map2)($f, $v1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $m = null) use (&$Data_NonEmpty_NonEmpty, $map2, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_NonEmpty_functorWithIndex
$Data_NonEmpty_functorWithIndex = (function() use (&$Data_FunctorWithIndex_mapWithIndex, &$Data_NonEmpty_functorNonEmpty, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Data_NonEmpty_NonEmpty, &$Data_Maybe_Nothing, &$Data_NonEmpty_compose, &$Data_Maybe_Just) {
  $__fn = function($dictFunctorWithIndex) use (&$Data_FunctorWithIndex_mapWithIndex, &$Data_NonEmpty_functorNonEmpty, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Data_NonEmpty_NonEmpty, &$Data_Maybe_Nothing, &$Data_NonEmpty_compose, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mapWithIndex = ($Data_FunctorWithIndex_mapWithIndex)($dictFunctorWithIndex);
$functorNonEmpty1 = ($Data_NonEmpty_functorNonEmpty)((($dictFunctorWithIndex)->Functor0)($Prim_undefined));
    $__res = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_NonEmpty_NonEmpty, &$Data_Maybe_Nothing, $mapWithIndex, &$Data_NonEmpty_compose, &$Data_Maybe_Just) {
  $__body = function($f, $v) use (&$Data_NonEmpty_NonEmpty, &$Data_Maybe_Nothing, $mapWithIndex, &$Data_NonEmpty_compose, &$Data_Maybe_Just) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$fa = ($__case_1)->values[1];
return ($Data_NonEmpty_NonEmpty)(($f1)($Data_Maybe_Nothing, $a), ($mapWithIndex)(($Data_NonEmpty_compose)($f1, $Data_Maybe_Just), $fa));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_NonEmpty_NonEmpty, &$Data_Maybe_Nothing, $mapWithIndex, &$Data_NonEmpty_compose, &$Data_Maybe_Just, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorNonEmpty1) {
  $__fn = function($__dollar____unused) use ($functorNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorNonEmpty1;
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

// Data_NonEmpty_fromNonEmpty
$Data_NonEmpty_fromNonEmpty = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$fa = ($__case_1)->values[1];
return ($f1)($a, $fa);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
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

// Data_NonEmpty_foldableNonEmpty
$Data_NonEmpty_foldableNonEmpty = (function() use (&$Data_Foldable_foldMap, &$Data_Foldable_foldl, &$Data_Foldable_foldr, &$Data_Foldable_Foldable__dollar__Dict, &$Data_Semigroup_append, &$Prim_undefined) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldMap, &$Data_Foldable_foldl, &$Data_Foldable_foldr, &$Data_Foldable_Foldable__dollar__Dict, &$Data_Semigroup_append, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap = ($Data_Foldable_foldMap)($dictFoldable);
$foldl = ($Data_Foldable_foldl)($dictFoldable);
$foldr = ($Data_Foldable_foldr)($dictFoldable);
    $__res = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldMap" => (function() use (&$Data_Semigroup_append, &$Prim_undefined, $foldMap) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, $foldMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append1 = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($append1, $foldMap1) {
  $__body = function($f, $v) use ($append1, $foldMap1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$fa = ($__case_1)->values[1];
return ($append1)(($f1)($a), ($foldMap1)($f1, $fa));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($append1, $foldMap1, $__body, &$__fn) {
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
})(), "foldl" => (function() use ($foldl) {
  $__body = function($f, $b, $v) use ($foldl) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if ((($__case_2)->tag === "NonEmpty")) {
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->values[0];
$fa = ($__case_2)->values[1];
return ($foldl)($f1, ($f1)($b1, $a), $fa);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $b = null, $v = null) use ($foldl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $b, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $b, $v);
  };
  return $__fn;
})(), "foldr" => (function() use ($foldr) {
  $__body = function($f, $b, $v) use ($foldr) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if ((($__case_2)->tag === "NonEmpty")) {
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->values[0];
$fa = ($__case_2)->values[1];
return ($f1)($a, ($foldr)($f1, $b1, $fa));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $b = null, $v = null) use ($foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $b, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $b, $v);
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

// Data_NonEmpty_foldableWithIndexNonEmpty
$Data_NonEmpty_foldableWithIndexNonEmpty = (function() use (&$Data_FoldableWithIndex_foldMapWithIndex, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldrWithIndex, &$Data_NonEmpty_foldableNonEmpty, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict, &$Data_Semigroup_append, &$Data_Maybe_Nothing, &$Data_NonEmpty_compose, &$Data_Maybe_Just) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldMapWithIndex, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldrWithIndex, &$Data_NonEmpty_foldableNonEmpty, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict, &$Data_Semigroup_append, &$Data_Maybe_Nothing, &$Data_NonEmpty_compose, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMapWithIndex = ($Data_FoldableWithIndex_foldMapWithIndex)($dictFoldableWithIndex);
$foldlWithIndex = ($Data_FoldableWithIndex_foldlWithIndex)($dictFoldableWithIndex);
$foldrWithIndex = ($Data_FoldableWithIndex_foldrWithIndex)($dictFoldableWithIndex);
$foldableNonEmpty1 = ($Data_NonEmpty_foldableNonEmpty)((($dictFoldableWithIndex)->Foldable0)($Prim_undefined));
    $__res = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldMapWithIndex" => (function() use (&$Data_Semigroup_append, &$Prim_undefined, $foldMapWithIndex, &$Data_Maybe_Nothing, &$Data_NonEmpty_compose, &$Data_Maybe_Just) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, $foldMapWithIndex, &$Data_Maybe_Nothing, &$Data_NonEmpty_compose, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append1 = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$foldMapWithIndex1 = ($foldMapWithIndex)($dictMonoid);
    $__res = (function() use ($append1, &$Data_Maybe_Nothing, $foldMapWithIndex1, &$Data_NonEmpty_compose, &$Data_Maybe_Just) {
  $__body = function($f, $v) use ($append1, &$Data_Maybe_Nothing, $foldMapWithIndex1, &$Data_NonEmpty_compose, &$Data_Maybe_Just) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$fa = ($__case_1)->values[1];
return ($append1)(($f1)($Data_Maybe_Nothing, $a), ($foldMapWithIndex1)(($Data_NonEmpty_compose)($f1, $Data_Maybe_Just), $fa));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($append1, &$Data_Maybe_Nothing, $foldMapWithIndex1, &$Data_NonEmpty_compose, &$Data_Maybe_Just, $__body, &$__fn) {
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
})(), "foldlWithIndex" => (function() use ($foldlWithIndex, &$Data_NonEmpty_compose, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__body = function($f, $b, $v) use ($foldlWithIndex, &$Data_NonEmpty_compose, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if ((($__case_2)->tag === "NonEmpty")) {
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->values[0];
$fa = ($__case_2)->values[1];
return ($foldlWithIndex)(($Data_NonEmpty_compose)($f1, $Data_Maybe_Just), ($f1)($Data_Maybe_Nothing, $b1, $a), $fa);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $b = null, $v = null) use ($foldlWithIndex, &$Data_NonEmpty_compose, &$Data_Maybe_Just, &$Data_Maybe_Nothing, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $b, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $b, $v);
  };
  return $__fn;
})(), "foldrWithIndex" => (function() use (&$Data_Maybe_Nothing, $foldrWithIndex, &$Data_NonEmpty_compose, &$Data_Maybe_Just) {
  $__body = function($f, $b, $v) use (&$Data_Maybe_Nothing, $foldrWithIndex, &$Data_NonEmpty_compose, &$Data_Maybe_Just) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if ((($__case_2)->tag === "NonEmpty")) {
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->values[0];
$fa = ($__case_2)->values[1];
return ($f1)($Data_Maybe_Nothing, $a, ($foldrWithIndex)(($Data_NonEmpty_compose)($f1, $Data_Maybe_Just), $b1, $fa));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $b = null, $v = null) use (&$Data_Maybe_Nothing, $foldrWithIndex, &$Data_NonEmpty_compose, &$Data_Maybe_Just, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $b, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $b, $v);
  };
  return $__fn;
})(), "Foldable0" => (function() use ($foldableNonEmpty1) {
  $__fn = function($__dollar____unused) use ($foldableNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableNonEmpty1;
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

// Data_NonEmpty_traversableNonEmpty
$Data_NonEmpty_traversableNonEmpty = (function() use (&$Data_Traversable_sequence, &$Data_Traversable_traverse, &$Data_NonEmpty_functorNonEmpty, &$Prim_undefined, &$Data_NonEmpty_foldableNonEmpty, &$Data_Traversable_Traversable__dollar__Dict, &$Control_Apply_apply, &$Data_Functor_map, &$Data_NonEmpty_NonEmpty) {
  $__fn = function($dictTraversable) use (&$Data_Traversable_sequence, &$Data_Traversable_traverse, &$Data_NonEmpty_functorNonEmpty, &$Prim_undefined, &$Data_NonEmpty_foldableNonEmpty, &$Data_Traversable_Traversable__dollar__Dict, &$Control_Apply_apply, &$Data_Functor_map, &$Data_NonEmpty_NonEmpty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequence = ($Data_Traversable_sequence)($dictTraversable);
$traverse = ($Data_Traversable_traverse)($dictTraversable);
$functorNonEmpty1 = ($Data_NonEmpty_functorNonEmpty)((($dictTraversable)->Functor0)($Prim_undefined));
$foldableNonEmpty1 = ($Data_NonEmpty_foldableNonEmpty)((($dictTraversable)->Foldable1)($Prim_undefined));
    $__res = ($Data_Traversable_Traversable__dollar__Dict)((object)["sequence" => (function() use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, $sequence, &$Data_NonEmpty_NonEmpty) {
  $__fn = function($dictApplicative) use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, $sequence, &$Data_NonEmpty_NonEmpty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Apply0 = (($dictApplicative)->Apply0)($Prim_undefined);
$apply = ($Control_Apply_apply)($Apply0);
$map2 = ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined));
$sequence1 = ($sequence)($dictApplicative);
    $__res = (function() use ($apply, $map2, &$Data_NonEmpty_NonEmpty, $sequence1) {
  $__body = function($v) use ($apply, $map2, &$Data_NonEmpty_NonEmpty, $sequence1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$a = ($__case_0)->values[0];
$fa = ($__case_0)->values[1];
return ($apply)(($map2)($Data_NonEmpty_NonEmpty, $a), ($sequence1)($fa));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($apply, $map2, &$Data_NonEmpty_NonEmpty, $sequence1, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "traverse" => (function() use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, $traverse, &$Data_NonEmpty_NonEmpty) {
  $__fn = function($dictApplicative) use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, $traverse, &$Data_NonEmpty_NonEmpty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Apply0 = (($dictApplicative)->Apply0)($Prim_undefined);
$apply = ($Control_Apply_apply)($Apply0);
$map2 = ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined));
$traverse1 = ($traverse)($dictApplicative);
    $__res = (function() use ($apply, $map2, &$Data_NonEmpty_NonEmpty, $traverse1) {
  $__body = function($f, $v) use ($apply, $map2, &$Data_NonEmpty_NonEmpty, $traverse1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$fa = ($__case_1)->values[1];
return ($apply)(($map2)($Data_NonEmpty_NonEmpty, ($f1)($a)), ($traverse1)($f1, $fa));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($apply, $map2, &$Data_NonEmpty_NonEmpty, $traverse1, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorNonEmpty1) {
  $__fn = function($__dollar____unused) use ($functorNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorNonEmpty1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use ($foldableNonEmpty1) {
  $__fn = function($__dollar____unused) use ($foldableNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableNonEmpty1;
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

// Data_NonEmpty_traversableWithIndexNonEmpty
$Data_NonEmpty_traversableWithIndexNonEmpty = (function() use (&$Data_TraversableWithIndex_traverseWithIndex, &$Data_NonEmpty_functorWithIndex, &$Prim_undefined, &$Data_NonEmpty_foldableWithIndexNonEmpty, &$Data_NonEmpty_traversableNonEmpty, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Control_Apply_apply, &$Data_Functor_map, &$Data_NonEmpty_NonEmpty, &$Data_Maybe_Nothing, &$Data_NonEmpty_compose, &$Data_Maybe_Just) {
  $__fn = function($dictTraversableWithIndex) use (&$Data_TraversableWithIndex_traverseWithIndex, &$Data_NonEmpty_functorWithIndex, &$Prim_undefined, &$Data_NonEmpty_foldableWithIndexNonEmpty, &$Data_NonEmpty_traversableNonEmpty, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Control_Apply_apply, &$Data_Functor_map, &$Data_NonEmpty_NonEmpty, &$Data_Maybe_Nothing, &$Data_NonEmpty_compose, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverseWithIndex = ($Data_TraversableWithIndex_traverseWithIndex)($dictTraversableWithIndex);
$functorWithIndex1 = ($Data_NonEmpty_functorWithIndex)((($dictTraversableWithIndex)->FunctorWithIndex0)($Prim_undefined));
$foldableWithIndexNonEmpty1 = ($Data_NonEmpty_foldableWithIndexNonEmpty)((($dictTraversableWithIndex)->FoldableWithIndex1)($Prim_undefined));
$traversableNonEmpty1 = ($Data_NonEmpty_traversableNonEmpty)((($dictTraversableWithIndex)->Traversable2)($Prim_undefined));
    $__res = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, $traverseWithIndex, &$Data_NonEmpty_NonEmpty, &$Data_Maybe_Nothing, &$Data_NonEmpty_compose, &$Data_Maybe_Just) {
  $__fn = function($dictApplicative) use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, $traverseWithIndex, &$Data_NonEmpty_NonEmpty, &$Data_Maybe_Nothing, &$Data_NonEmpty_compose, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Apply0 = (($dictApplicative)->Apply0)($Prim_undefined);
$apply = ($Control_Apply_apply)($Apply0);
$map2 = ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined));
$traverseWithIndex1 = ($traverseWithIndex)($dictApplicative);
    $__res = (function() use ($apply, $map2, &$Data_NonEmpty_NonEmpty, &$Data_Maybe_Nothing, $traverseWithIndex1, &$Data_NonEmpty_compose, &$Data_Maybe_Just) {
  $__body = function($f, $v) use ($apply, $map2, &$Data_NonEmpty_NonEmpty, &$Data_Maybe_Nothing, $traverseWithIndex1, &$Data_NonEmpty_compose, &$Data_Maybe_Just) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$fa = ($__case_1)->values[1];
return ($apply)(($map2)($Data_NonEmpty_NonEmpty, ($f1)($Data_Maybe_Nothing, $a)), ($traverseWithIndex1)(($Data_NonEmpty_compose)($f1, $Data_Maybe_Just), $fa));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($apply, $map2, &$Data_NonEmpty_NonEmpty, &$Data_Maybe_Nothing, $traverseWithIndex1, &$Data_NonEmpty_compose, &$Data_Maybe_Just, $__body, &$__fn) {
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
})(), "FunctorWithIndex0" => (function() use ($functorWithIndex1) {
  $__fn = function($__dollar____unused) use ($functorWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorWithIndex1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use ($foldableWithIndexNonEmpty1) {
  $__fn = function($__dollar____unused) use ($foldableWithIndexNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableWithIndexNonEmpty1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use ($traversableNonEmpty1) {
  $__fn = function($__dollar____unused) use ($traversableNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $traversableNonEmpty1;
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

// Data_NonEmpty_foldable1NonEmpty
$Data_NonEmpty_foldable1NonEmpty = (function() use (&$Data_Foldable_foldl, &$Data_Foldable_foldr, &$Data_NonEmpty_foldableNonEmpty, &$Data_Semigroup_Foldable_Foldable1__dollar__Dict, &$Data_Semigroup_append, &$Data_Maybe_maybe, &$Data_NonEmpty_compose, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, &$Data_Foldable_foldr, &$Data_NonEmpty_foldableNonEmpty, &$Data_Semigroup_Foldable_Foldable1__dollar__Dict, &$Data_Semigroup_append, &$Data_Maybe_maybe, &$Data_NonEmpty_compose, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl = ($Data_Foldable_foldl)($dictFoldable);
$foldr = ($Data_Foldable_foldr)($dictFoldable);
$foldableNonEmpty1 = ($Data_NonEmpty_foldableNonEmpty)($dictFoldable);
    $__res = ($Data_Semigroup_Foldable_Foldable1__dollar__Dict)((object)["foldMap1" => (function() use (&$Data_Semigroup_append, $foldl) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, $foldl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append1 = ($Data_Semigroup_append)($dictSemigroup);
    $__res = (function() use ($foldl, $append1) {
  $__body = function($f, $v) use ($foldl, $append1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$fa = ($__case_1)->values[1];
return ($foldl)((function() use ($append1, $f1) {
  $__fn = function($s, $a1 = null) use ($append1, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append1)($s, ($f1)($a1));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), ($f1)($a), $fa);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($foldl, $append1, $__body, &$__fn) {
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
})(), "foldr1" => (function() use (&$Data_Maybe_maybe, $foldr, &$Data_NonEmpty_compose, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__body = function($f, $v) use (&$Data_Maybe_maybe, $foldr, &$Data_NonEmpty_compose, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$fa = ($__case_1)->values[1];
return ($Data_Maybe_maybe)($a, ($f1)($a), ($foldr)((function() use (&$Data_NonEmpty_compose, &$Data_Maybe_Just, &$Data_Maybe_maybe, $f1) {
  $__fn = function($a1) use (&$Data_NonEmpty_compose, &$Data_Maybe_Just, &$Data_Maybe_maybe, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_NonEmpty_compose)($Data_Maybe_Just, ($Data_Maybe_maybe)($a1, ($f1)($a1)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $Data_Maybe_Nothing, $fa));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Maybe_maybe, $foldr, &$Data_NonEmpty_compose, &$Data_Maybe_Just, &$Data_Maybe_Nothing, $__body, &$__fn) {
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
})(), "foldl1" => (function() use ($foldl) {
  $__body = function($f, $v) use ($foldl) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$fa = ($__case_1)->values[1];
return ($foldl)($f1, $a, $fa);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($foldl, $__body, &$__fn) {
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
})(), "Foldable0" => (function() use ($foldableNonEmpty1) {
  $__fn = function($__dollar____unused) use ($foldableNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableNonEmpty1;
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

// Data_NonEmpty_foldl1
$Data_NonEmpty_foldl1 = (function() use (&$Data_Semigroup_Foldable_foldl1, &$Data_NonEmpty_foldable1NonEmpty) {
  $__fn = function($dictFoldable) use (&$Data_Semigroup_Foldable_foldl1, &$Data_NonEmpty_foldable1NonEmpty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Foldable_foldl1)(($Data_NonEmpty_foldable1NonEmpty)($dictFoldable));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_NonEmpty_eqNonEmpty
$Data_NonEmpty_eqNonEmpty = (function() use (&$Data_Eq_eq1, &$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_NonEmpty_conj) {
  $__fn = function($dictEq1) use (&$Data_Eq_eq1, &$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_NonEmpty_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1 = ($Data_Eq_eq1)($dictEq1);
    $__res = (function() use (&$Data_Eq_eq, $eq1, &$Data_Eq_Eq__dollar__Dict, &$Data_NonEmpty_conj) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, $eq1, &$Data_Eq_Eq__dollar__Dict, &$Data_NonEmpty_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq = ($Data_Eq_eq)($dictEq);
$eq11 = ($eq1)($dictEq);
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use (&$Data_NonEmpty_conj, $eq, $eq11) {
  $__body = function($x, $y) use (&$Data_NonEmpty_conj, $eq, $eq11) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
return ($Data_NonEmpty_conj)(($eq)($l, $r), ($eq11)($l1, $r1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_NonEmpty_conj, $eq, $eq11, $__body, &$__fn) {
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

// Data_NonEmpty_ordNonEmpty
$Data_NonEmpty_ordNonEmpty = (function() use (&$Data_Ord_compare1, &$Data_NonEmpty_eqNonEmpty, &$Prim_undefined, &$Data_Ord_compare, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd1) use (&$Data_Ord_compare1, &$Data_NonEmpty_eqNonEmpty, &$Prim_undefined, &$Data_Ord_compare, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare1 = ($Data_Ord_compare1)($dictOrd1);
$eqNonEmpty1 = ($Data_NonEmpty_eqNonEmpty)((($dictOrd1)->Eq10)($Prim_undefined));
    $__res = (function() use (&$Data_Ord_compare, $compare1, $eqNonEmpty1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, $compare1, $eqNonEmpty1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
$compare11 = ($compare1)($dictOrd);
$eqNonEmpty2 = ($eqNonEmpty1)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use ($compare, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare11) {
  $__body = function($x, $y) use ($compare, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare11) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$v = ($compare)($l, $r);
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
return ($compare11)($l1, $r1);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use ($compare, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare11, $__body, &$__fn) {
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
})(), "Eq0" => (function() use ($eqNonEmpty2) {
  $__fn = function($__dollar____unused) use ($eqNonEmpty2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqNonEmpty2;
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

// Data_NonEmpty_eq1NonEmpty
$Data_NonEmpty_eq1NonEmpty = (function() use (&$Data_NonEmpty_eqNonEmpty, &$Data_Eq_Eq1__dollar__Dict, &$Data_Eq_eq) {
  $__fn = function($dictEq1) use (&$Data_NonEmpty_eqNonEmpty, &$Data_Eq_Eq1__dollar__Dict, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eqNonEmpty1 = ($Data_NonEmpty_eqNonEmpty)($dictEq1);
    $__res = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use (&$Data_Eq_eq, $eqNonEmpty1) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, $eqNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_eq)(($eqNonEmpty1)($dictEq));
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

// Data_NonEmpty_ord1NonEmpty
$Data_NonEmpty_ord1NonEmpty = (function() use (&$Data_NonEmpty_ordNonEmpty, &$Data_NonEmpty_eq1NonEmpty, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, &$Data_Ord_compare) {
  $__fn = function($dictOrd1) use (&$Data_NonEmpty_ordNonEmpty, &$Data_NonEmpty_eq1NonEmpty, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, &$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ordNonEmpty1 = ($Data_NonEmpty_ordNonEmpty)($dictOrd1);
$eq1NonEmpty1 = ($Data_NonEmpty_eq1NonEmpty)((($dictOrd1)->Eq10)($Prim_undefined));
    $__res = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use (&$Data_Ord_compare, $ordNonEmpty1) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, $ordNonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Ord_compare)(($ordNonEmpty1)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1NonEmpty1) {
  $__fn = function($__dollar____unused) use ($eq1NonEmpty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eq1NonEmpty1;
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

