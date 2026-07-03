<?php

namespace Data\Set\NonEmpty;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.List.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Set/index.php';
require_once __DIR__ . '/../Data.Set.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Safe.Coerce/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Set_NonEmpty_coerce
$Data_Set_NonEmpty_coerce = ($Safe_Coerce_coerce)($Prim_undefined);

// Data_Set_NonEmpty_compose
$Data_Set_NonEmpty_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Set_NonEmpty_map1
$Data_Set_NonEmpty_map1 = ($Data_Functor_map)($Data_Tuple_functorTuple);

// Data_Set_NonEmpty_append
$Data_Set_NonEmpty_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Set_NonEmpty_fromJust
$Data_Set_NonEmpty_fromJust = ($Data_Maybe_fromJust)($Prim_undefined);

// Data_Set_NonEmpty_foldMap1
$Data_Set_NonEmpty_foldMap1 = ($Data_Semigroup_Foldable_foldMap1)($Data_List_Types_foldable1NonEmptyList);

// Data_Set_NonEmpty_foldr1
$Data_Set_NonEmpty_foldr1 = ($Data_Semigroup_Foldable_foldr1)($Data_List_Types_foldable1NonEmptyList);

// Data_Set_NonEmpty_foldl1
$Data_Set_NonEmpty_foldl1 = ($Data_Semigroup_Foldable_foldl1)($Data_List_Types_foldable1NonEmptyList);

// Data_Set_NonEmpty_NonEmptySet
$Data_Set_NonEmpty_NonEmptySet = (function() {
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

// Data_Set_NonEmpty_unionSet
$Data_Set_NonEmpty_unionSet = (function() use (&$Data_Set_NonEmpty_coerce, &$Data_Semigroup_append, &$Data_Set_semigroupSet) {
  $__fn = function($dictOrd) use (&$Data_Set_NonEmpty_coerce, &$Data_Semigroup_append, &$Data_Set_semigroupSet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_coerce)(($Data_Semigroup_append)(($Data_Set_semigroupSet)($dictOrd)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_toUnfoldable1
$Data_Set_NonEmpty_toUnfoldable1 = (function() use (&$Data_Map_Internal_stepAscCps, &$Data_Function_Uncurried_mkFn3, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Maybe_Nothing, &$Partial_Unsafe_unsafeCrashWith, &$Data_Set_NonEmpty_compose, &$Data_Unfoldable1_unfoldr1, &$Data_Set_NonEmpty_map1, &$Data_Map_Internal_toMapIter, &$Data_Set_toMap, &$Data_Set_NonEmpty_coerce) {
  $__fn = function($dictUnfoldable1) use (&$Data_Map_Internal_stepAscCps, &$Data_Function_Uncurried_mkFn3, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Maybe_Nothing, &$Partial_Unsafe_unsafeCrashWith, &$Data_Set_NonEmpty_compose, &$Data_Unfoldable1_unfoldr1, &$Data_Set_NonEmpty_map1, &$Data_Map_Internal_toMapIter, &$Data_Set_toMap, &$Data_Set_NonEmpty_coerce, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$stepNext = ($Data_Map_Internal_stepAscCps)(($Data_Function_Uncurried_mkFn3)((function() use (&$Data_Maybe_Just, &$Data_Tuple_Tuple) {
  $__fn = function($k, $v = null, $next = null) use (&$Data_Maybe_Just, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_Just)(($Data_Tuple_Tuple)($k, $next));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})()), (function() use (&$Data_Maybe_Nothing) {
  $__fn = function($v) use (&$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_Nothing;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
$stepHead = ($Data_Map_Internal_stepAscCps)(($Data_Function_Uncurried_mkFn3)((function() use (&$Data_Tuple_Tuple) {
  $__fn = function($k, $v = null, $next = null) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($k, $next);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})()), (function() use (&$Partial_Unsafe_unsafeCrashWith) {
  $__fn = function($v) use (&$Partial_Unsafe_unsafeCrashWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Partial_Unsafe_unsafeCrashWith)("toUnfoldable1: impossible");
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    $__res = ($Data_Set_NonEmpty_compose)(($Data_Unfoldable1_unfoldr1)($dictUnfoldable1, (function() use (&$Data_Set_NonEmpty_map1, $stepNext) {
  $__fn = function($v) use (&$Data_Set_NonEmpty_map1, $stepNext, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_map1)($stepNext, $v);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), ($Data_Set_NonEmpty_compose)($stepHead, ($Data_Set_NonEmpty_compose)($Data_Map_Internal_toMapIter, ($Data_Set_NonEmpty_compose)($Data_Set_toMap, $Data_Set_NonEmpty_coerce))));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_toUnfoldable11
$Data_Set_NonEmpty_toUnfoldable11 = ($Data_Set_NonEmpty_toUnfoldable1)($Data_Array_NonEmpty_Internal_unfoldable1NonEmptyArray);

// Data_Set_NonEmpty_toUnfoldable12
$Data_Set_NonEmpty_toUnfoldable12 = ($Data_Set_NonEmpty_toUnfoldable1)($Data_List_Types_unfoldable1NonEmptyList);

// Data_Set_NonEmpty_toUnfoldable
$Data_Set_NonEmpty_toUnfoldable = (function() use (&$Data_Set_NonEmpty_coerce, &$Data_Set_toUnfoldable) {
  $__fn = function($dictUnfoldable) use (&$Data_Set_NonEmpty_coerce, &$Data_Set_toUnfoldable, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_coerce)(($Data_Set_toUnfoldable)($dictUnfoldable));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_toSet
$Data_Set_NonEmpty_toSet = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return $s;
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

// Data_Set_NonEmpty_subset
$Data_Set_NonEmpty_subset = (function() use (&$Data_Set_NonEmpty_coerce, &$Data_Set_subset) {
  $__fn = function($dictOrd) use (&$Data_Set_NonEmpty_coerce, &$Data_Set_subset, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_coerce)(($Data_Set_subset)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_size
$Data_Set_NonEmpty_size = ($Data_Set_NonEmpty_coerce)($Data_Set_size);

// Data_Set_NonEmpty_singleton
$Data_Set_NonEmpty_singleton = ($Data_Set_NonEmpty_coerce)($Data_Set_singleton);

// Data_Set_NonEmpty_showNonEmptySet
$Data_Set_NonEmpty_showNonEmptySet = (function() use (&$Data_Show_show, &$Data_Array_NonEmpty_Internal_showNonEmptyArray, &$Data_Show_Show__dollar__Dict, &$Data_Set_NonEmpty_append, &$Data_Set_NonEmpty_toUnfoldable11) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Array_NonEmpty_Internal_showNonEmptyArray, &$Data_Show_Show__dollar__Dict, &$Data_Set_NonEmpty_append, &$Data_Set_NonEmpty_toUnfoldable11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)(($Data_Array_NonEmpty_Internal_showNonEmptyArray)($dictShow));
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Set_NonEmpty_append, $show, &$Data_Set_NonEmpty_toUnfoldable11) {
  $__fn = function($s) use (&$Data_Set_NonEmpty_append, $show, &$Data_Set_NonEmpty_toUnfoldable11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_append)("(fromFoldable1 ", ($Data_Set_NonEmpty_append)(($show)(($Data_Set_NonEmpty_toUnfoldable11)($s)), ")"));
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

// Data_Set_NonEmpty_semigroupNonEmptySet
$Data_Set_NonEmpty_semigroupNonEmptySet = (function() use (&$Data_Set_semigroupSet) {
  $__fn = function($dictOrd) use (&$Data_Set_semigroupSet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_semigroupSet)($dictOrd);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_properSubset
$Data_Set_NonEmpty_properSubset = (function() use (&$Data_Set_NonEmpty_coerce, &$Data_Set_properSubset) {
  $__fn = function($dictOrd) use (&$Data_Set_NonEmpty_coerce, &$Data_Set_properSubset, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_coerce)(($Data_Set_properSubset)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_ordNonEmptySet
$Data_Set_NonEmpty_ordNonEmptySet = (function() use (&$Data_Set_ordSet) {
  $__fn = function($dictOrd) use (&$Data_Set_ordSet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_ordSet)($dictOrd);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_ord1NonEmptySet
$Data_Set_NonEmpty_ord1NonEmptySet = $Data_Set_ord1Set;

// Data_Set_NonEmpty_min
$Data_Set_NonEmpty_min = (function() use (&$Partial_Unsafe_unsafePartial, &$Data_Set_NonEmpty_fromJust, &$Data_Set_findMin) {
  $__body = function($v) use (&$Partial_Unsafe_unsafePartial, &$Data_Set_NonEmpty_fromJust, &$Data_Set_findMin) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return ($Partial_Unsafe_unsafePartial)((function() use (&$Data_Set_NonEmpty_fromJust, &$Data_Set_findMin, $s) {
  $__fn = function($__dollar____unused) use (&$Data_Set_NonEmpty_fromJust, &$Data_Set_findMin, $s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_fromJust)(($Data_Set_findMin)($s));
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
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Partial_Unsafe_unsafePartial, &$Data_Set_NonEmpty_fromJust, &$Data_Set_findMin, $__body, &$__fn) {
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

// Data_Set_NonEmpty_member
$Data_Set_NonEmpty_member = (function() use (&$Data_Set_NonEmpty_coerce, &$Data_Set_member) {
  $__fn = function($dictOrd) use (&$Data_Set_NonEmpty_coerce, &$Data_Set_member, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_coerce)(($Data_Set_member)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_max
$Data_Set_NonEmpty_max = (function() use (&$Partial_Unsafe_unsafePartial, &$Data_Set_NonEmpty_fromJust, &$Data_Set_findMax) {
  $__body = function($v) use (&$Partial_Unsafe_unsafePartial, &$Data_Set_NonEmpty_fromJust, &$Data_Set_findMax) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return ($Partial_Unsafe_unsafePartial)((function() use (&$Data_Set_NonEmpty_fromJust, &$Data_Set_findMax, $s) {
  $__fn = function($__dollar____unused) use (&$Data_Set_NonEmpty_fromJust, &$Data_Set_findMax, $s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_fromJust)(($Data_Set_findMax)($s));
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
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Partial_Unsafe_unsafePartial, &$Data_Set_NonEmpty_fromJust, &$Data_Set_findMax, $__body, &$__fn) {
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

// Data_Set_NonEmpty_mapMaybe
$Data_Set_NonEmpty_mapMaybe = (function() use (&$Data_Set_NonEmpty_coerce, &$Data_Set_mapMaybe) {
  $__fn = function($dictOrd) use (&$Data_Set_NonEmpty_coerce, &$Data_Set_mapMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_coerce)(($Data_Set_mapMaybe)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_map
$Data_Set_NonEmpty_map = (function() use (&$Data_Set_NonEmpty_coerce, &$Data_Set_map) {
  $__fn = function($dictOrd) use (&$Data_Set_NonEmpty_coerce, &$Data_Set_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_coerce)(($Data_Set_map)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_insert
$Data_Set_NonEmpty_insert = (function() use (&$Data_Set_NonEmpty_coerce, &$Data_Set_insert) {
  $__fn = function($dictOrd) use (&$Data_Set_NonEmpty_coerce, &$Data_Set_insert, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_coerce)(($Data_Set_insert)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_fromSet
$Data_Set_NonEmpty_fromSet = (function() use (&$Data_Set_isEmpty, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Set_NonEmpty_NonEmptySet) {
  $__body = function($s) use (&$Data_Set_isEmpty, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Set_NonEmpty_NonEmptySet) {
    $__case_0 = ($Data_Set_isEmpty)($s);
    if (($__case_0 === true)) {
return $Data_Maybe_Nothing;
} else {
;
};
    if (true) {
return ($Data_Maybe_Just)(($Data_Set_NonEmpty_NonEmptySet)($s));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($s) use (&$Data_Set_isEmpty, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Set_NonEmpty_NonEmptySet, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($s);
  };
  return $__fn;
})();

// Data_Set_NonEmpty_intersection
$Data_Set_NonEmpty_intersection = (function() use (&$Data_Set_intersection, &$Data_Set_NonEmpty_fromSet) {
  $__fn = function($dictOrd) use (&$Data_Set_intersection, &$Data_Set_NonEmpty_fromSet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$intersection1 = ($Data_Set_intersection)($dictOrd);
    $__res = (function() use (&$Data_Set_NonEmpty_fromSet, $intersection1) {
  $__body = function($v, $v1) use (&$Data_Set_NonEmpty_fromSet, $intersection1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$s1 = $__case_0;
$s2 = $__case_1;
return ($Data_Set_NonEmpty_fromSet)(($intersection1)($s1, $s2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Set_NonEmpty_fromSet, $intersection1, $__body, &$__fn) {
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
})();

// Data_Set_NonEmpty_fromFoldable1
$Data_Set_NonEmpty_fromFoldable1 = (function() use (&$Data_Semigroup_Foldable_foldMap1, &$Data_Set_NonEmpty_semigroupNonEmptySet, &$Data_Set_NonEmpty_singleton) {
  $__fn = function($dictFoldable1) use (&$Data_Semigroup_Foldable_foldMap1, &$Data_Set_NonEmpty_semigroupNonEmptySet, &$Data_Set_NonEmpty_singleton, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap11 = ($Data_Semigroup_Foldable_foldMap1)($dictFoldable1);
    $__res = (function() use ($foldMap11, &$Data_Set_NonEmpty_semigroupNonEmptySet, &$Data_Set_NonEmpty_singleton) {
  $__fn = function($dictOrd) use ($foldMap11, &$Data_Set_NonEmpty_semigroupNonEmptySet, &$Data_Set_NonEmpty_singleton, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldMap11)(($Data_Set_NonEmpty_semigroupNonEmptySet)($dictOrd), $Data_Set_NonEmpty_singleton);
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

// Data_Set_NonEmpty_fromFoldable
$Data_Set_NonEmpty_fromFoldable = (function() use (&$Data_Set_fromFoldable, &$Data_Set_NonEmpty_compose, &$Data_Set_NonEmpty_fromSet) {
  $__fn = function($dictFoldable) use (&$Data_Set_fromFoldable, &$Data_Set_NonEmpty_compose, &$Data_Set_NonEmpty_fromSet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$fromFoldable2 = ($Data_Set_fromFoldable)($dictFoldable);
    $__res = (function() use (&$Data_Set_NonEmpty_compose, &$Data_Set_NonEmpty_fromSet, $fromFoldable2) {
  $__fn = function($dictOrd) use (&$Data_Set_NonEmpty_compose, &$Data_Set_NonEmpty_fromSet, $fromFoldable2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_compose)($Data_Set_NonEmpty_fromSet, ($fromFoldable2)($dictOrd));
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

// Data_Set_NonEmpty_foldableNonEmptySet
$Data_Set_NonEmpty_foldableNonEmptySet = $Data_Set_foldableSet;

// Data_Set_NonEmpty_foldable1NonEmptySet
$Data_Set_NonEmpty_foldable1NonEmptySet = ($Data_Semigroup_Foldable_Foldable1__dollar__Dict)((object)["foldMap1" => (function() use (&$Data_Set_NonEmpty_foldMap1, &$Data_Set_NonEmpty_compose, &$Data_Set_NonEmpty_toUnfoldable12) {
  $__fn = function($dictSemigroup) use (&$Data_Set_NonEmpty_foldMap1, &$Data_Set_NonEmpty_compose, &$Data_Set_NonEmpty_toUnfoldable12, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap11 = ($Data_Set_NonEmpty_foldMap1)($dictSemigroup);
    $__res = (function() use (&$Data_Set_NonEmpty_compose, $foldMap11, &$Data_Set_NonEmpty_toUnfoldable12) {
  $__fn = function($f) use (&$Data_Set_NonEmpty_compose, $foldMap11, &$Data_Set_NonEmpty_toUnfoldable12, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_compose)(($foldMap11)($f), $Data_Set_NonEmpty_toUnfoldable12);
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
})(), "foldr1" => (function() use (&$Data_Set_NonEmpty_compose, &$Data_Set_NonEmpty_foldr1, &$Data_Set_NonEmpty_toUnfoldable12) {
  $__fn = function($f) use (&$Data_Set_NonEmpty_compose, &$Data_Set_NonEmpty_foldr1, &$Data_Set_NonEmpty_toUnfoldable12, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_compose)(($Data_Set_NonEmpty_foldr1)($f), $Data_Set_NonEmpty_toUnfoldable12);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldl1" => (function() use (&$Data_Set_NonEmpty_compose, &$Data_Set_NonEmpty_foldl1, &$Data_Set_NonEmpty_toUnfoldable12) {
  $__fn = function($f) use (&$Data_Set_NonEmpty_compose, &$Data_Set_NonEmpty_foldl1, &$Data_Set_NonEmpty_toUnfoldable12, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_compose)(($Data_Set_NonEmpty_foldl1)($f), $Data_Set_NonEmpty_toUnfoldable12);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use (&$Data_Set_NonEmpty_foldableNonEmptySet) {
  $__fn = function($__dollar____unused) use (&$Data_Set_NonEmpty_foldableNonEmptySet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Set_NonEmpty_foldableNonEmptySet;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Set_NonEmpty_filter
$Data_Set_NonEmpty_filter = (function() use (&$Data_Set_NonEmpty_coerce, &$Data_Set_filter) {
  $__fn = function($dictOrd) use (&$Data_Set_NonEmpty_coerce, &$Data_Set_filter, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_coerce)(($Data_Set_filter)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_eqNonEmptySet
$Data_Set_NonEmpty_eqNonEmptySet = (function() use (&$Data_Set_eqSet) {
  $__fn = function($dictEq) use (&$Data_Set_eqSet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_eqSet)($dictEq);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_eq1NonEmptySet
$Data_Set_NonEmpty_eq1NonEmptySet = $Data_Set_eq1Set;

// Data_Set_NonEmpty_difference
$Data_Set_NonEmpty_difference = (function() use (&$Data_Set_difference, &$Data_Set_NonEmpty_fromSet) {
  $__fn = function($dictOrd) use (&$Data_Set_difference, &$Data_Set_NonEmpty_fromSet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$difference1 = ($Data_Set_difference)($dictOrd);
    $__res = (function() use (&$Data_Set_NonEmpty_fromSet, $difference1) {
  $__body = function($v, $v1) use (&$Data_Set_NonEmpty_fromSet, $difference1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$s1 = $__case_0;
$s2 = $__case_1;
return ($Data_Set_NonEmpty_fromSet)(($difference1)($s1, $s2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Set_NonEmpty_fromSet, $difference1, $__body, &$__fn) {
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
})();

// Data_Set_NonEmpty_delete
$Data_Set_NonEmpty_delete = (function() use (&$Data_Set_delete, &$Data_Set_NonEmpty_fromSet) {
  $__fn = function($dictOrd) use (&$Data_Set_delete, &$Data_Set_NonEmpty_fromSet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$delete1 = ($Data_Set_delete)($dictOrd);
    $__res = (function() use (&$Data_Set_NonEmpty_fromSet, $delete1) {
  $__body = function($a, $v) use (&$Data_Set_NonEmpty_fromSet, $delete1) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$s = $__case_1;
return ($Data_Set_NonEmpty_fromSet)(($delete1)($a1, $s));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $v = null) use (&$Data_Set_NonEmpty_fromSet, $delete1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($a, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($a, $v);
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

// Data_Set_NonEmpty_cons
$Data_Set_NonEmpty_cons = (function() use (&$Data_Set_NonEmpty_coerce, &$Data_Set_insert) {
  $__fn = function($dictOrd) use (&$Data_Set_NonEmpty_coerce, &$Data_Set_insert, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_NonEmpty_coerce)(($Data_Set_insert)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

