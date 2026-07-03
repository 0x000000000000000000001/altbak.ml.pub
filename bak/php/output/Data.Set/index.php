<?php

namespace Data\Set;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Set/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Safe.Coerce/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Set_coerce
$Data_Set_coerce = ($Safe_Coerce_coerce)($Prim_undefined);

// Data_Set_compose
$Data_Set_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Set_append
$Data_Set_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Set_foldMap
$Data_Set_foldMap = ($Data_Foldable_foldMap)($Data_List_Types_foldableList);

// Data_Set_foldl
$Data_Set_foldl = ($Data_Foldable_foldl)($Data_List_Types_foldableList);

// Data_Set_foldr
$Data_Set_foldr = ($Data_Foldable_foldr)($Data_List_Types_foldableList);

// Data_Set_map1
$Data_Set_map1 = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Data_Set_conj
$Data_Set_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Set_notEq
$Data_Set_notEq = ($Data_Eq_notEq)($Data_Eq_eqInt);

// Data_Set_identity
$Data_Set_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Set_Set
$Data_Set_Set = (function() {
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

// Data_Set_union
$Data_Set_union = (function() use (&$Data_Set_coerce, &$Data_Map_Internal_union) {
  $__fn = function($dictOrd) use (&$Data_Set_coerce, &$Data_Map_Internal_union, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_coerce)(($Data_Map_Internal_union)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_toggle
$Data_Set_toggle = (function() use (&$Data_Map_Internal_alter, &$Data_Set_Set, &$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Unit_unit, &$Data_Maybe_Nothing) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_alter, &$Data_Set_Set, &$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Unit_unit, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$alter = ($Data_Map_Internal_alter)($dictOrd);
    $__res = (function() use (&$Data_Set_Set, $alter, &$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Unit_unit, &$Data_Maybe_Nothing) {
  $__body = function($a, $v) use (&$Data_Set_Set, $alter, &$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Unit_unit, &$Data_Maybe_Nothing) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$m = $__case_1;
return ($Data_Set_Set)(($alter)(($Data_Maybe_maybe)(($Data_Maybe_Just)($Data_Unit_unit), (function() use (&$Data_Maybe_Nothing) {
  $__fn = function($v1) use (&$Data_Maybe_Nothing, &$__fn) {
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
})()), $a1, $m));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $v = null) use (&$Data_Set_Set, $alter, &$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Unit_unit, &$Data_Maybe_Nothing, $__body, &$__fn) {
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

// Data_Set_toMap
$Data_Set_toMap = (function() {
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

// Data_Set_toList
$Data_Set_toList = (function() use (&$Data_Map_Internal_keys) {
  $__body = function($v) use (&$Data_Map_Internal_keys) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($Data_Map_Internal_keys)($m);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Map_Internal_keys, $__body, &$__fn) {
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

// Data_Set_toUnfoldable
$Data_Set_toUnfoldable = (function() use (&$Data_Set_compose, &$Data_List_toUnfoldable, &$Data_Set_toList) {
  $__fn = function($dictUnfoldable) use (&$Data_Set_compose, &$Data_List_toUnfoldable, &$Data_Set_toList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_compose)(($Data_List_toUnfoldable)($dictUnfoldable), $Data_Set_toList);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_toUnfoldable1
$Data_Set_toUnfoldable1 = ($Data_Set_toUnfoldable)($Data_Unfoldable_unfoldableArray);

// Data_Set_size
$Data_Set_size = ($Data_Set_coerce)($Data_Map_Internal_size);

// Data_Set_singleton
$Data_Set_singleton = (function() use (&$Data_Set_Set, &$Data_Map_Internal_singleton, &$Data_Unit_unit) {
  $__fn = function($a) use (&$Data_Set_Set, &$Data_Map_Internal_singleton, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_Set)(($Data_Map_Internal_singleton)($a, $Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_showSet
$Data_Set_showSet = (function() use (&$Data_Show_show, &$Data_Show_showArray, &$Data_Show_Show__dollar__Dict, &$Data_Set_append, &$Data_Set_toUnfoldable1) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_showArray, &$Data_Show_Show__dollar__Dict, &$Data_Set_append, &$Data_Set_toUnfoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)(($Data_Show_showArray)($dictShow));
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Set_append, $show, &$Data_Set_toUnfoldable1) {
  $__fn = function($s) use (&$Data_Set_append, $show, &$Data_Set_toUnfoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_append)("(fromFoldable ", ($Data_Set_append)(($show)(($Data_Set_toUnfoldable1)($s)), ")"));
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

// Data_Set_semigroupSet
$Data_Set_semigroupSet = (function() use (&$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Set_union) {
  $__fn = function($dictOrd) use (&$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Set_union, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => ($Data_Set_union)($dictOrd)]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_member
$Data_Set_member = (function() use (&$Data_Set_coerce, &$Data_Map_Internal_member) {
  $__fn = function($dictOrd) use (&$Data_Set_coerce, &$Data_Map_Internal_member, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_coerce)(($Data_Map_Internal_member)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_isEmpty
$Data_Set_isEmpty = ($Data_Set_coerce)($Data_Map_Internal_isEmpty);

// Data_Set_intersection
$Data_Set_intersection = (function() use (&$Data_Set_coerce, &$Data_Map_Internal_intersection) {
  $__fn = function($dictOrd) use (&$Data_Set_coerce, &$Data_Map_Internal_intersection, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_coerce)(($Data_Map_Internal_intersection)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_insert
$Data_Set_insert = (function() use (&$Data_Map_Internal_insert, &$Data_Set_Set, &$Data_Unit_unit) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_insert, &$Data_Set_Set, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$insert1 = ($Data_Map_Internal_insert)($dictOrd);
    $__res = (function() use (&$Data_Set_Set, $insert1, &$Data_Unit_unit) {
  $__body = function($a, $v) use (&$Data_Set_Set, $insert1, &$Data_Unit_unit) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$m = $__case_1;
return ($Data_Set_Set)(($insert1)($a1, $Data_Unit_unit, $m));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $v = null) use (&$Data_Set_Set, $insert1, &$Data_Unit_unit, $__body, &$__fn) {
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

// Data_Set_fromMap
$Data_Set_fromMap = $Data_Set_Set;

// Data_Set_foldableSet
$Data_Set_foldableSet = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldMap" => (function() use (&$Data_Set_foldMap, &$Data_Set_compose, &$Data_Set_toList) {
  $__fn = function($dictMonoid) use (&$Data_Set_foldMap, &$Data_Set_compose, &$Data_Set_toList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap1 = ($Data_Set_foldMap)($dictMonoid);
    $__res = (function() use (&$Data_Set_compose, $foldMap1, &$Data_Set_toList) {
  $__fn = function($f) use (&$Data_Set_compose, $foldMap1, &$Data_Set_toList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_compose)(($foldMap1)($f), $Data_Set_toList);
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
})(), "foldl" => (function() use (&$Data_Set_compose, &$Data_Set_foldl, &$Data_Set_toList) {
  $__fn = function($f, $x = null) use (&$Data_Set_compose, &$Data_Set_foldl, &$Data_Set_toList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_compose)(($Data_Set_foldl)($f, $x), $Data_Set_toList);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "foldr" => (function() use (&$Data_Set_compose, &$Data_Set_foldr, &$Data_Set_toList) {
  $__fn = function($f, $x = null) use (&$Data_Set_compose, &$Data_Set_foldr, &$Data_Set_toList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_compose)(($Data_Set_foldr)($f, $x), $Data_Set_toList);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Set_foldl1
$Data_Set_foldl1 = ($Data_Foldable_foldl)($Data_Set_foldableSet);

// Data_Set_foldr1
$Data_Set_foldr1 = ($Data_Foldable_foldr)($Data_Set_foldableSet);

// Data_Set_findMin
$Data_Set_findMin = (function() use (&$Data_Set_map1, &$Data_Map_Internal_findMin) {
  $__body = function($v) use (&$Data_Set_map1, &$Data_Map_Internal_findMin) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($Data_Set_map1)((function() {
  $__fn = function($v1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($v1)->key;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Map_Internal_findMin)($m));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Set_map1, &$Data_Map_Internal_findMin, $__body, &$__fn) {
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

// Data_Set_findMax
$Data_Set_findMax = (function() use (&$Data_Set_map1, &$Data_Map_Internal_findMax) {
  $__body = function($v) use (&$Data_Set_map1, &$Data_Map_Internal_findMax) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($Data_Set_map1)((function() {
  $__fn = function($v1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($v1)->key;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Map_Internal_findMax)($m));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Set_map1, &$Data_Map_Internal_findMax, $__body, &$__fn) {
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

// Data_Set_filter
$Data_Set_filter = (function() use (&$Data_Set_coerce, &$Data_Map_Internal_filterKeys) {
  $__fn = function($dictOrd) use (&$Data_Set_coerce, &$Data_Map_Internal_filterKeys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_coerce)(($Data_Map_Internal_filterKeys)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_eqSet
$Data_Set_eqSet = (function() use (&$Data_Eq_eq, &$Data_Map_Internal_eqMap, &$Data_Eq_eqUnit, &$Data_Eq_Eq__dollar__Dict) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Map_Internal_eqMap, &$Data_Eq_eqUnit, &$Data_Eq_Eq__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq = ($Data_Eq_eq)(($Data_Map_Internal_eqMap)($dictEq, $Data_Eq_eqUnit));
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use ($eq) {
  $__body = function($v, $v1) use ($eq) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m1 = $__case_0;
$m2 = $__case_1;
return ($eq)($m1, $m2);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($eq, $__body, &$__fn) {
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

// Data_Set_ordSet
$Data_Set_ordSet = (function() use (&$Data_Ord_compare, &$Data_List_Types_ordList, &$Data_Set_eqSet, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Set_toList) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_List_Types_ordList, &$Data_Set_eqSet, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Set_toList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)(($Data_List_Types_ordList)($dictOrd));
$eqSet1 = ($Data_Set_eqSet)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use ($compare, &$Data_Set_toList) {
  $__fn = function($s1, $s2 = null) use ($compare, &$Data_Set_toList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($compare)(($Data_Set_toList)($s1), ($Data_Set_toList)($s2));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqSet1) {
  $__fn = function($__dollar____unused) use ($eqSet1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqSet1;
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

// Data_Set_eq1Set
$Data_Set_eq1Set = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use (&$Data_Eq_eq, &$Data_Set_eqSet) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Set_eqSet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_eq)(($Data_Set_eqSet)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Set_ord1Set
$Data_Set_ord1Set = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use (&$Data_Ord_compare, &$Data_Set_ordSet) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Set_ordSet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Ord_compare)(($Data_Set_ordSet)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use (&$Data_Set_eq1Set) {
  $__fn = function($__dollar____unused) use (&$Data_Set_eq1Set, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Set_eq1Set;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Set_empty
$Data_Set_empty = ($Data_Set_Set)($Data_Map_Internal_empty);

// Data_Set_fromFoldable
$Data_Set_fromFoldable = (function() use (&$Data_Foldable_foldl, &$Data_Set_insert, &$Data_Set_empty) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, &$Data_Set_insert, &$Data_Set_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl2 = ($Data_Foldable_foldl)($dictFoldable);
    $__res = (function() use (&$Data_Set_insert, $foldl2, &$Data_Set_empty) {
  $__fn = function($dictOrd) use (&$Data_Set_insert, $foldl2, &$Data_Set_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$insert1 = ($Data_Set_insert)($dictOrd);
    $__res = ($foldl2)((function() use ($insert1) {
  $__fn = function($m, $a = null) use ($insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($insert1)($a, $m);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $Data_Set_empty);
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

// Data_Set_map
$Data_Set_map = (function() use (&$Data_Set_insert, &$Data_Set_foldl1, &$Data_Set_empty) {
  $__fn = function($dictOrd) use (&$Data_Set_insert, &$Data_Set_foldl1, &$Data_Set_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$insert1 = ($Data_Set_insert)($dictOrd);
    $__res = (function() use (&$Data_Set_foldl1, $insert1, &$Data_Set_empty) {
  $__fn = function($f) use (&$Data_Set_foldl1, $insert1, &$Data_Set_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_foldl1)((function() use ($insert1, $f) {
  $__fn = function($m, $a = null) use ($insert1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($insert1)(($f)($a), $m);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $Data_Set_empty);
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

// Data_Set_mapMaybe
$Data_Set_mapMaybe = (function() use (&$Data_Set_insert, &$Data_Set_foldr1, &$Data_Maybe_maybe, &$Data_Set_empty) {
  $__fn = function($dictOrd) use (&$Data_Set_insert, &$Data_Set_foldr1, &$Data_Maybe_maybe, &$Data_Set_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$insert1 = ($Data_Set_insert)($dictOrd);
    $__res = (function() use (&$Data_Set_foldr1, &$Data_Maybe_maybe, $insert1, &$Data_Set_empty) {
  $__fn = function($f) use (&$Data_Set_foldr1, &$Data_Maybe_maybe, $insert1, &$Data_Set_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_foldr1)((function() use (&$Data_Maybe_maybe, $insert1, $f) {
  $__fn = function($a, $acc = null) use (&$Data_Maybe_maybe, $insert1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_maybe)($acc, (function() use ($insert1, $acc) {
  $__fn = function($b) use ($insert1, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($insert1)($b, $acc);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($f)($a));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $Data_Set_empty);
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

// Data_Set_monoidSet
$Data_Set_monoidSet = (function() use (&$Data_Set_semigroupSet, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Set_empty) {
  $__fn = function($dictOrd) use (&$Data_Set_semigroupSet, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Set_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupSet1 = ($Data_Set_semigroupSet)($dictOrd);
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => $Data_Set_empty, "Semigroup0" => (function() use ($semigroupSet1) {
  $__fn = function($__dollar____unused) use ($semigroupSet1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupSet1;
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

// Data_Set_unions
$Data_Set_unions = (function() use (&$Data_Foldable_foldl, &$Data_Set_union, &$Data_Set_empty) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, &$Data_Set_union, &$Data_Set_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl2 = ($Data_Foldable_foldl)($dictFoldable);
    $__res = (function() use ($foldl2, &$Data_Set_union, &$Data_Set_empty) {
  $__fn = function($dictOrd) use ($foldl2, &$Data_Set_union, &$Data_Set_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldl2)(($Data_Set_union)($dictOrd), $Data_Set_empty);
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

// Data_Set_difference
$Data_Set_difference = (function() use (&$Data_Set_coerce, &$Data_Map_Internal_difference) {
  $__fn = function($dictOrd) use (&$Data_Set_coerce, &$Data_Map_Internal_difference, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_coerce)(($Data_Map_Internal_difference)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_subset
$Data_Set_subset = (function() use (&$Data_Set_difference, &$Data_Set_isEmpty) {
  $__fn = function($dictOrd) use (&$Data_Set_difference, &$Data_Set_isEmpty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$difference1 = ($Data_Set_difference)($dictOrd);
    $__res = (function() use (&$Data_Set_isEmpty, $difference1) {
  $__fn = function($s1, $s2 = null) use (&$Data_Set_isEmpty, $difference1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_isEmpty)(($difference1)($s1, $s2));
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

// Data_Set_properSubset
$Data_Set_properSubset = (function() use (&$Data_Set_subset, &$Data_Set_conj, &$Data_Set_notEq, &$Data_Set_size) {
  $__fn = function($dictOrd) use (&$Data_Set_subset, &$Data_Set_conj, &$Data_Set_notEq, &$Data_Set_size, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$subset1 = ($Data_Set_subset)($dictOrd);
    $__res = (function() use (&$Data_Set_conj, &$Data_Set_notEq, &$Data_Set_size, $subset1) {
  $__fn = function($s1, $s2 = null) use (&$Data_Set_conj, &$Data_Set_notEq, &$Data_Set_size, $subset1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_conj)(($Data_Set_notEq)(($Data_Set_size)($s1), ($Data_Set_size)($s2)), ($subset1)($s1, $s2));
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

// Data_Set_delete
$Data_Set_delete = (function() use (&$Data_Set_coerce, &$Data_Map_Internal_delete) {
  $__fn = function($dictOrd) use (&$Data_Set_coerce, &$Data_Map_Internal_delete, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_coerce)(($Data_Map_Internal_delete)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_checkValid
$Data_Set_checkValid = (function() use (&$Data_Set_coerce, &$Data_Map_Internal_checkValid) {
  $__fn = function($dictOrd) use (&$Data_Set_coerce, &$Data_Map_Internal_checkValid, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_coerce)(($Data_Map_Internal_checkValid)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Set_catMaybes
$Data_Set_catMaybes = (function() use (&$Data_Set_mapMaybe, &$Data_Set_identity) {
  $__fn = function($dictOrd) use (&$Data_Set_mapMaybe, &$Data_Set_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Set_mapMaybe)($dictOrd, $Data_Set_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

