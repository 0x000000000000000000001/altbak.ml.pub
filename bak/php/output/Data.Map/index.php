<?php

namespace Data\Map;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Map/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Set/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Map_SemigroupMap
$Data_Map_SemigroupMap = (function() {
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

// Data_Map_traversableWithIndexSemigroupMap
$Data_Map_traversableWithIndexSemigroupMap = $Data_Map_Internal_traversableWithIndexMap;

// Data_Map_traversableSemigroupMap
$Data_Map_traversableSemigroupMap = $Data_Map_Internal_traversableMap;

// Data_Map_showSemigroupMap
$Data_Map_showSemigroupMap = (function() use (&$Data_Map_Internal_showMap) {
  $__fn = function($dictShow) use (&$Data_Map_Internal_showMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$showMap = ($Data_Map_Internal_showMap)($dictShow);
    $__res = (function() use ($showMap) {
  $__fn = function($dictShow1) use ($showMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($showMap)($dictShow1);
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

// Data_Map_semigroupSemigroupMap
$Data_Map_semigroupSemigroupMap = (function() use (&$Data_Map_Internal_unionWith, &$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Map_SemigroupMap) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_unionWith, &$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Map_SemigroupMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$unionWith = ($Data_Map_Internal_unionWith)($dictOrd);
    $__res = (function() use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Map_SemigroupMap, $unionWith) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Map_SemigroupMap, $unionWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)($dictSemigroup);
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Map_SemigroupMap, $unionWith, $append) {
  $__body = function($v, $v1) use (&$Data_Map_SemigroupMap, $unionWith, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($Data_Map_SemigroupMap)(($unionWith)($append, $l, $r));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Map_SemigroupMap, $unionWith, $append, $__body, &$__fn) {
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

// Data_Map_plusSemigroupMap
$Data_Map_plusSemigroupMap = (function() use (&$Data_Map_Internal_plusMap) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_plusMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_plusMap)($dictOrd);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_ordSemigroupMap
$Data_Map_ordSemigroupMap = (function() use (&$Data_Map_Internal_ordMap) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_ordMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ordMap = ($Data_Map_Internal_ordMap)($dictOrd);
    $__res = (function() use ($ordMap) {
  $__fn = function($dictOrd1) use ($ordMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($ordMap)($dictOrd1);
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

// Data_Map_ord1SemigroupMap
$Data_Map_ord1SemigroupMap = (function() use (&$Data_Map_Internal_ord1Map) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_ord1Map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_ord1Map)($dictOrd);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_newtypeSemigroupMap
$Data_Map_newtypeSemigroupMap = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Map_monoidSemigroupMap
$Data_Map_monoidSemigroupMap = (function() use (&$Data_Map_semigroupSemigroupMap, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Map_SemigroupMap, &$Data_Map_Internal_empty) {
  $__fn = function($dictOrd) use (&$Data_Map_semigroupSemigroupMap, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Map_SemigroupMap, &$Data_Map_Internal_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupSemigroupMap1 = ($Data_Map_semigroupSemigroupMap)($dictOrd);
    $__res = (function() use ($semigroupSemigroupMap1, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Map_SemigroupMap, &$Data_Map_Internal_empty) {
  $__fn = function($dictSemigroup) use ($semigroupSemigroupMap1, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Map_SemigroupMap, &$Data_Map_Internal_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupSemigroupMap2 = ($semigroupSemigroupMap1)($dictSemigroup);
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Map_SemigroupMap)($Data_Map_Internal_empty), "Semigroup0" => (function() use ($semigroupSemigroupMap2) {
  $__fn = function($__dollar____unused) use ($semigroupSemigroupMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupSemigroupMap2;
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

// Data_Map_keys
$Data_Map_keys = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn, $Data_Set_fromMap, ($Data_Functor_void)($Data_Map_Internal_functorMap));

// Data_Map_functorWithIndexSemigroupMap
$Data_Map_functorWithIndexSemigroupMap = $Data_Map_Internal_functorWithIndexMap;

// Data_Map_functorSemigroupMap
$Data_Map_functorSemigroupMap = $Data_Map_Internal_functorMap;

// Data_Map_foldableWithIndexSemigroupMap
$Data_Map_foldableWithIndexSemigroupMap = $Data_Map_Internal_foldableWithIndexMap;

// Data_Map_foldableSemigroupMap
$Data_Map_foldableSemigroupMap = $Data_Map_Internal_foldableMap;

// Data_Map_eqSemigroupMap
$Data_Map_eqSemigroupMap = (function() use (&$Data_Map_Internal_eqMap) {
  $__fn = function($dictEq) use (&$Data_Map_Internal_eqMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eqMap = ($Data_Map_Internal_eqMap)($dictEq);
    $__res = (function() use ($eqMap) {
  $__fn = function($dictEq1) use ($eqMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($eqMap)($dictEq1);
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

// Data_Map_eq1SemigroupMap
$Data_Map_eq1SemigroupMap = (function() use (&$Data_Map_Internal_eq1Map) {
  $__fn = function($dictEq) use (&$Data_Map_Internal_eq1Map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_eq1Map)($dictEq);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_bindSemigroupMap
$Data_Map_bindSemigroupMap = (function() use (&$Data_Map_Internal_bindMap) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_bindMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_bindMap)($dictOrd);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_applySemigroupMap
$Data_Map_applySemigroupMap = (function() use (&$Data_Map_Internal_applyMap) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_applyMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_applyMap)($dictOrd);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_altSemigroupMap
$Data_Map_altSemigroupMap = (function() use (&$Data_Map_Internal_altMap) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_altMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_altMap)($dictOrd);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

