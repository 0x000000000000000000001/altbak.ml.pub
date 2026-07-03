<?php

namespace Data\Monoid;

require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Record.Unsafe/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Monoid_semigroupRecord
$Data_Monoid_semigroupRecord = ($Data_Semigroup_semigroupRecord)($Prim_undefined);

// Data_Monoid_lessThanOrEq
$Data_Monoid_lessThanOrEq = ($Data_Ord_lessThanOrEq)($Data_Ord_ordInt);

// Data_Monoid_eq
$Data_Monoid_eq = ($Data_Eq_eq)($Data_Eq_eqInt);

// Data_Monoid_mod
$Data_Monoid_mod = ($Data_EuclideanRing_mod)($Data_EuclideanRing_euclideanRingInt);

// Data_Monoid_div
$Data_Monoid_div = ($Data_EuclideanRing_div)($Data_EuclideanRing_euclideanRingInt);

// Data_Monoid_MonoidRecord$Dict
$Data_Monoid_MonoidRecord__dollar__Dict = (function() {
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

// Data_Monoid_Monoid$Dict
$Data_Monoid_Monoid__dollar__Dict = (function() {
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

// Data_Monoid_monoidUnit
$Data_Monoid_monoidUnit = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => $Data_Unit_unit, "Semigroup0" => (function() use (&$Data_Semigroup_semigroupUnit) {
  $__fn = function($__dollar____unused) use (&$Data_Semigroup_semigroupUnit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Semigroup_semigroupUnit;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_monoidString
$Data_Monoid_monoidString = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => "", "Semigroup0" => (function() use (&$Data_Semigroup_semigroupString) {
  $__fn = function($__dollar____unused) use (&$Data_Semigroup_semigroupString, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Semigroup_semigroupString;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_monoidRecordNil
$Data_Monoid_monoidRecordNil = ($Data_Monoid_MonoidRecord__dollar__Dict)((object)["memptyRecord" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)[];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "SemigroupRecord0" => (function() use (&$Data_Semigroup_semigroupRecordNil) {
  $__fn = function($__dollar____unused) use (&$Data_Semigroup_semigroupRecordNil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Semigroup_semigroupRecordNil;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_monoidOrdering
$Data_Monoid_monoidOrdering = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => $Data_Ordering_EQ, "Semigroup0" => (function() use (&$Data_Ordering_semigroupOrdering) {
  $__fn = function($__dollar____unused) use (&$Data_Ordering_semigroupOrdering, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ordering_semigroupOrdering;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_monoidArray
$Data_Monoid_monoidArray = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => [], "Semigroup0" => (function() use (&$Data_Semigroup_semigroupArray) {
  $__fn = function($__dollar____unused) use (&$Data_Semigroup_semigroupArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Semigroup_semigroupArray;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_memptyRecord
$Data_Monoid_memptyRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->memptyRecord;
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

// Data_Monoid_monoidRecord
$Data_Monoid_monoidRecord = (function() use (&$Data_Monoid_semigroupRecord, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_memptyRecord, &$Type_Proxy_Proxy) {
  $__fn = function($__dollar____unused, $dictMonoidRecord = null) use (&$Data_Monoid_semigroupRecord, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_memptyRecord, &$Type_Proxy_Proxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupRecord1 = ($Data_Monoid_semigroupRecord)((($dictMonoidRecord)->SemigroupRecord0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Monoid_memptyRecord)($dictMonoidRecord, $Type_Proxy_Proxy), "Semigroup0" => (function() use ($semigroupRecord1) {
  $__fn = function($__dollar____unused) use ($semigroupRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupRecord1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Monoid_mempty
$Data_Monoid_mempty = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mempty;
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

// Data_Monoid_monoidFn
$Data_Monoid_monoidFn = (function() use (&$Data_Monoid_mempty, &$Data_Semigroup_semigroupFn, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Data_Semigroup_semigroupFn, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty1 = ($Data_Monoid_mempty)($dictMonoid);
$semigroupFn = ($Data_Semigroup_semigroupFn)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => (function() use ($mempty1) {
  $__fn = function($v) use ($mempty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $mempty1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Semigroup0" => (function() use ($semigroupFn) {
  $__fn = function($__dollar____unused) use ($semigroupFn, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupFn;
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

// Data_Monoid_monoidRecordCons
$Data_Monoid_monoidRecordCons = (function() use (&$Data_Symbol_reflectSymbol, &$Data_Semigroup_semigroupRecordCons, &$Prim_undefined, &$Data_Monoid_mempty, &$Data_Monoid_memptyRecord, &$Data_Monoid_MonoidRecord__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeSet) {
  $__fn = function($dictIsSymbol) use (&$Data_Symbol_reflectSymbol, &$Data_Semigroup_semigroupRecordCons, &$Prim_undefined, &$Data_Monoid_mempty, &$Data_Monoid_memptyRecord, &$Data_Monoid_MonoidRecord__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeSet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$reflectSymbol = ($Data_Symbol_reflectSymbol)($dictIsSymbol);
$semigroupRecordCons = ($Data_Semigroup_semigroupRecordCons)($dictIsSymbol, $Prim_undefined);
    $__res = (function() use (&$Data_Monoid_mempty, &$Prim_undefined, &$Data_Monoid_memptyRecord, $semigroupRecordCons, &$Data_Monoid_MonoidRecord__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Prim_undefined, &$Data_Monoid_memptyRecord, $semigroupRecordCons, &$Data_Monoid_MonoidRecord__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty1 = ($Data_Monoid_mempty)($dictMonoid);
$Semigroup0 = (($dictMonoid)->Semigroup0)($Prim_undefined);
    $__res = (function() use (&$Data_Monoid_memptyRecord, $semigroupRecordCons, &$Prim_undefined, &$Semigroup0, &$Data_Monoid_MonoidRecord__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $mempty1) {
  $__fn = function($__dollar____unused, $dictMonoidRecord = null) use (&$Data_Monoid_memptyRecord, $semigroupRecordCons, &$Prim_undefined, &$Semigroup0, &$Data_Monoid_MonoidRecord__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $mempty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$memptyRecord1 = ($Data_Monoid_memptyRecord)($dictMonoidRecord);
$semigroupRecordCons1 = ($semigroupRecordCons)((($dictMonoidRecord)->SemigroupRecord0)($Prim_undefined), $Semigroup0);
    $__res = ($Data_Monoid_MonoidRecord__dollar__Dict)((object)["memptyRecord" => (function() use ($memptyRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $mempty1) {
  $__fn = function($v) use ($memptyRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $mempty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tail = ($memptyRecord1)($Type_Proxy_Proxy);
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$insert = ($Record_Unsafe_unsafeSet)($key);
    $__res = ($insert)($mempty1, $tail);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "SemigroupRecord0" => (function() use ($semigroupRecordCons1) {
  $__fn = function($__dollar____unused) use ($semigroupRecordCons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupRecordCons1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Data_Monoid_power
$Data_Monoid_power = (function() use (&$Data_Monoid_mempty, &$Data_Semigroup_append, &$Prim_undefined) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Data_Semigroup_append, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty1 = ($Data_Monoid_mempty)($dictMonoid);
$append = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() {
  $__fn = function($p) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($p) {
while (true) {
$__case_0 = $p;
if (true) {
$p1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($p);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = $go;
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

// Data_Monoid_guard
$Data_Monoid_guard = (function() use (&$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty1 = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use ($mempty1) {
  $__body = function($v, $v1) use ($mempty1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (($__case_0 === true)) {
$a = $__case_1;
return $a;
} else {
;
};
    if (($__case_0 === false)) {
return $mempty1;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($mempty1, $__body, &$__fn) {
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

