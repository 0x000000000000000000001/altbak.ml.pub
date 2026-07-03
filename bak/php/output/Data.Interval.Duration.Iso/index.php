<?php

namespace Data\Interval\Duration\Iso;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Interval.Duration/index.php';
require_once __DIR__ . '/../Data.Interval.Duration.Iso/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Interval_Duration_Iso_append
$Data_Interval_Duration_Iso_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Interval_Duration_Iso_show
$Data_Interval_Duration_Iso_show = ($Data_Show_show)($Data_Interval_Duration_showDuration);

// Data_Interval_Duration_Iso_show1
$Data_Interval_Duration_Iso_show1 = ($Data_Show_show)($Data_Interval_Duration_showDurationComponent);

// Data_Interval_Duration_Iso_eq
$Data_Interval_Duration_Iso_eq = ($Data_Eq_eq)($Data_Interval_Duration_eqDuration);

// Data_Interval_Duration_Iso_compare
$Data_Interval_Duration_Iso_compare = ($Data_Ord_compare)($Data_Interval_Duration_ordDuration);

// Data_Interval_Duration_Iso_eq1
$Data_Interval_Duration_Iso_eq1 = ($Data_Eq_eq)($Data_Interval_Duration_eqDurationComponent);

// Data_Interval_Duration_Iso_compare1
$Data_Interval_Duration_Iso_compare1 = ($Data_Ord_compare)($Data_Interval_Duration_ordDurationComponent);

// Data_Interval_Duration_Iso_conj
$Data_Interval_Duration_Iso_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Interval_Duration_Iso_lookup
$Data_Interval_Duration_Iso_lookup = ($Data_Map_Internal_lookup)($Data_Interval_Duration_ordDurationComponent);

// Data_Interval_Duration_Iso_greaterThan
$Data_Interval_Duration_Iso_greaterThan = ($Data_Ord_greaterThan)($Data_Ord_ordInt);

// Data_Interval_Duration_Iso_pure
$Data_Interval_Duration_Iso_pure = ($Control_Applicative_pure)($Data_List_Types_applicativeList);

// Data_Interval_Duration_Iso_empty
$Data_Interval_Duration_Iso_empty = ($Control_Plus_empty)($Data_List_Types_plusList);

// Data_Interval_Duration_Iso_foldMap
$Data_Interval_Duration_Iso_foldMap = ($Data_Foldable_foldMap)($Data_List_Types_foldableList);

// Data_Interval_Duration_Iso_foldMap1
$Data_Interval_Duration_Iso_foldMap1 = ($Data_Interval_Duration_Iso_foldMap)($Data_List_Types_monoidList);

// Data_Interval_Duration_Iso_greaterThanOrEq
$Data_Interval_Duration_Iso_greaterThanOrEq = ($Data_Ord_greaterThanOrEq)($Data_Ord_ordNumber);

// Data_Interval_Duration_Iso_notEq
$Data_Interval_Duration_Iso_notEq = ($Data_Eq_notEq)($Data_Eq_eqNumber);

// Data_Interval_Duration_Iso_greaterThan1
$Data_Interval_Duration_Iso_greaterThan1 = ($Data_Ord_greaterThan)($Data_Ord_ordNumber);

// Data_Interval_Duration_Iso_unwrap
$Data_Interval_Duration_Iso_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Data_Interval_Duration_Iso_foldMap2
$Data_Interval_Duration_Iso_foldMap2 = ($Data_Interval_Duration_Iso_foldMap)(($Data_Monoid_Additive_monoidAdditive)($Data_Semiring_semiringNumber));

// Data_Interval_Duration_Iso_composeFlipped
$Data_Interval_Duration_Iso_composeFlipped = ($Control_Semigroupoid_composeFlipped)($Control_Semigroupoid_semigroupoidFn);

// Data_Interval_Duration_Iso_not
$Data_Interval_Duration_Iso_not = ($Data_HeytingAlgebra_not)(($Data_HeytingAlgebra_heytingAlgebraFunction)($Data_HeytingAlgebra_heytingAlgebraBoolean));

// Data_Interval_Duration_Iso_fold
$Data_Interval_Duration_Iso_fold = ($Data_Foldable_fold)($Data_Foldable_foldableArray, ($Data_Monoid_monoidFn)($Data_List_Types_monoidList));

// Data_Interval_Duration_Iso_toUnfoldable
$Data_Interval_Duration_Iso_toUnfoldable = ($Data_Map_Internal_toUnfoldable)($Data_List_Types_unfoldableList);

// Data_Interval_Duration_Iso_IsoDuration
$Data_Interval_Duration_Iso_IsoDuration = (function() {
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

// Data_Interval_Duration_Iso_IsEmpty
$Data_Interval_Duration_Iso_IsEmpty = (object)["tag" => "IsEmpty", "values" => []];

// Data_Interval_Duration_Iso_InvalidWeekComponentUsage
$Data_Interval_Duration_Iso_InvalidWeekComponentUsage = (object)["tag" => "InvalidWeekComponentUsage", "values" => []];

// Data_Interval_Duration_Iso_ContainsNegativeValue
$Data_Interval_Duration_Iso_ContainsNegativeValue = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "ContainsNegativeValue", "values" => [$value0]];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Interval_Duration_Iso_InvalidFractionalUse
$Data_Interval_Duration_Iso_InvalidFractionalUse = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "InvalidFractionalUse", "values" => [$value0]];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Interval_Duration_Iso_unIsoDuration
$Data_Interval_Duration_Iso_unIsoDuration = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return $a;
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

// Data_Interval_Duration_Iso_showIsoDuration
$Data_Interval_Duration_Iso_showIsoDuration = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Interval_Duration_Iso_append, &$Data_Interval_Duration_Iso_show) {
  $__body = function($v) use (&$Data_Interval_Duration_Iso_append, &$Data_Interval_Duration_Iso_show) {
    $__case_0 = $v;
    if (true) {
$d = $__case_0;
return ($Data_Interval_Duration_Iso_append)("(IsoDuration ", ($Data_Interval_Duration_Iso_append)(($Data_Interval_Duration_Iso_show)($d), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Interval_Duration_Iso_append, &$Data_Interval_Duration_Iso_show, $__body, &$__fn) {
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

// Data_Interval_Duration_Iso_showError
$Data_Interval_Duration_Iso_showError = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Interval_Duration_Iso_append, &$Data_Interval_Duration_Iso_show1) {
  $__body = function($v) use (&$Data_Interval_Duration_Iso_append, &$Data_Interval_Duration_Iso_show1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "IsEmpty")) {
return "(IsEmpty)";
} else {
;
};
    if ((($__case_0)->tag === "InvalidWeekComponentUsage")) {
return "(InvalidWeekComponentUsage)";
} else {
;
};
    if ((($__case_0)->tag === "ContainsNegativeValue")) {
$c = ($__case_0)->values[0];
return ($Data_Interval_Duration_Iso_append)("(ContainsNegativeValue ", ($Data_Interval_Duration_Iso_append)(($Data_Interval_Duration_Iso_show1)($c), ")"));
} else {
;
};
    if ((($__case_0)->tag === "InvalidFractionalUse")) {
$c = ($__case_0)->values[0];
return ($Data_Interval_Duration_Iso_append)("(InvalidFractionalUse ", ($Data_Interval_Duration_Iso_append)(($Data_Interval_Duration_Iso_show1)($c), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Interval_Duration_Iso_append, &$Data_Interval_Duration_Iso_show1, $__body, &$__fn) {
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

// Data_Interval_Duration_Iso_prettyError
$Data_Interval_Duration_Iso_prettyError = (function() use (&$Data_Interval_Duration_Iso_append, &$Data_Interval_Duration_Iso_show1) {
  $__body = function($v) use (&$Data_Interval_Duration_Iso_append, &$Data_Interval_Duration_Iso_show1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "IsEmpty")) {
return "Duration is empty (has no components)";
} else {
;
};
    if ((($__case_0)->tag === "InvalidWeekComponentUsage")) {
return "Week component of Duration is used with other components";
} else {
;
};
    if ((($__case_0)->tag === "ContainsNegativeValue")) {
$c = ($__case_0)->values[0];
return ($Data_Interval_Duration_Iso_append)("Component `", ($Data_Interval_Duration_Iso_append)(($Data_Interval_Duration_Iso_show1)($c), "` contains negative value"));
} else {
;
};
    if ((($__case_0)->tag === "InvalidFractionalUse")) {
$c = ($__case_0)->values[0];
return ($Data_Interval_Duration_Iso_append)("Invalid usage of Fractional value at component `", ($Data_Interval_Duration_Iso_append)(($Data_Interval_Duration_Iso_show1)($c), "`"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Interval_Duration_Iso_append, &$Data_Interval_Duration_Iso_show1, $__body, &$__fn) {
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

// Data_Interval_Duration_Iso_eqIsoDuration
$Data_Interval_Duration_Iso_eqIsoDuration = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use (&$Data_Interval_Duration_Iso_eq) {
  $__body = function($x, $y) use (&$Data_Interval_Duration_Iso_eq) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($Data_Interval_Duration_Iso_eq)($l, $r);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_Interval_Duration_Iso_eq, $__body, &$__fn) {
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

// Data_Interval_Duration_Iso_ordIsoDuration
$Data_Interval_Duration_Iso_ordIsoDuration = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Interval_Duration_Iso_compare) {
  $__body = function($x, $y) use (&$Data_Interval_Duration_Iso_compare) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($Data_Interval_Duration_Iso_compare)($l, $r);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_Interval_Duration_Iso_compare, $__body, &$__fn) {
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
})(), "Eq0" => (function() use (&$Data_Interval_Duration_Iso_eqIsoDuration) {
  $__fn = function($__dollar____unused) use (&$Data_Interval_Duration_Iso_eqIsoDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Interval_Duration_Iso_eqIsoDuration;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Interval_Duration_Iso_eqError
$Data_Interval_Duration_Iso_eqError = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use (&$Data_Interval_Duration_Iso_eq1) {
  $__body = function($x, $y) use (&$Data_Interval_Duration_Iso_eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "IsEmpty") && (($__case_1)->tag === "IsEmpty"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "InvalidWeekComponentUsage") && (($__case_1)->tag === "InvalidWeekComponentUsage"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "ContainsNegativeValue") && (($__case_1)->tag === "ContainsNegativeValue"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($Data_Interval_Duration_Iso_eq1)($l, $r);
} else {
;
};
    if (((($__case_0)->tag === "InvalidFractionalUse") && (($__case_1)->tag === "InvalidFractionalUse"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($Data_Interval_Duration_Iso_eq1)($l, $r);
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
  $__fn = function($x, $y = null) use (&$Data_Interval_Duration_Iso_eq1, $__body, &$__fn) {
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

// Data_Interval_Duration_Iso_ordError
$Data_Interval_Duration_Iso_ordError = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_Interval_Duration_Iso_compare1) {
  $__body = function($x, $y) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_Interval_Duration_Iso_compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "IsEmpty") && (($__case_1)->tag === "IsEmpty"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "IsEmpty")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "IsEmpty")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "InvalidWeekComponentUsage") && (($__case_1)->tag === "InvalidWeekComponentUsage"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "InvalidWeekComponentUsage")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "InvalidWeekComponentUsage")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "ContainsNegativeValue") && (($__case_1)->tag === "ContainsNegativeValue"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($Data_Interval_Duration_Iso_compare1)($l, $r);
} else {
;
};
    if ((($__case_0)->tag === "ContainsNegativeValue")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "ContainsNegativeValue")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "InvalidFractionalUse") && (($__case_1)->tag === "InvalidFractionalUse"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($Data_Interval_Duration_Iso_compare1)($l, $r);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_Interval_Duration_Iso_compare1, $__body, &$__fn) {
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
})(), "Eq0" => (function() use (&$Data_Interval_Duration_Iso_eqError) {
  $__fn = function($__dollar____unused) use (&$Data_Interval_Duration_Iso_eqError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Interval_Duration_Iso_eqError;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Interval_Duration_Iso_checkWeekUsage
$Data_Interval_Duration_Iso_checkWeekUsage = (function() use (&$Data_Interval_Duration_Iso_conj, &$Data_Maybe_isJust, &$Data_Interval_Duration_Iso_lookup, &$Data_Interval_Duration_Week, &$Data_Interval_Duration_Iso_greaterThan, &$Data_Map_Internal_size, &$Data_Interval_Duration_Iso_pure, &$Data_Interval_Duration_Iso_InvalidWeekComponentUsage, &$Data_Interval_Duration_Iso_empty) {
  $__body = function($v) use (&$Data_Interval_Duration_Iso_conj, &$Data_Maybe_isJust, &$Data_Interval_Duration_Iso_lookup, &$Data_Interval_Duration_Week, &$Data_Interval_Duration_Iso_greaterThan, &$Data_Map_Internal_size, &$Data_Interval_Duration_Iso_pure, &$Data_Interval_Duration_Iso_InvalidWeekComponentUsage, &$Data_Interval_Duration_Iso_empty) {
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$asMap = ($__case_0)->asMap;
$__case_0 = ($Data_Interval_Duration_Iso_conj)(($Data_Maybe_isJust)(($Data_Interval_Duration_Iso_lookup)($Data_Interval_Duration_Week, $asMap)), ($Data_Interval_Duration_Iso_greaterThan)(($Data_Map_Internal_size)($asMap), 1));
if (($__case_0 === true)) {
return ($Data_Interval_Duration_Iso_pure)($Data_Interval_Duration_Iso_InvalidWeekComponentUsage);
} else {
;
};
if (true) {
return $Data_Interval_Duration_Iso_empty;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Interval_Duration_Iso_conj, &$Data_Maybe_isJust, &$Data_Interval_Duration_Iso_lookup, &$Data_Interval_Duration_Week, &$Data_Interval_Duration_Iso_greaterThan, &$Data_Map_Internal_size, &$Data_Interval_Duration_Iso_pure, &$Data_Interval_Duration_Iso_InvalidWeekComponentUsage, &$Data_Interval_Duration_Iso_empty, $__body, &$__fn) {
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

// Data_Interval_Duration_Iso_checkNegativeValues
$Data_Interval_Duration_Iso_checkNegativeValues = (function() use (&$Data_Function_flip, &$Data_Interval_Duration_Iso_foldMap1, &$Data_Interval_Duration_Iso_greaterThanOrEq, &$Data_Interval_Duration_Iso_empty, &$Data_Interval_Duration_Iso_pure, &$Data_Interval_Duration_Iso_ContainsNegativeValue) {
  $__body = function($v) use (&$Data_Function_flip, &$Data_Interval_Duration_Iso_foldMap1, &$Data_Interval_Duration_Iso_greaterThanOrEq, &$Data_Interval_Duration_Iso_empty, &$Data_Interval_Duration_Iso_pure, &$Data_Interval_Duration_Iso_ContainsNegativeValue) {
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$asList = ($__case_0)->asList;
return ($Data_Function_flip)($Data_Interval_Duration_Iso_foldMap1, $asList, (function() use (&$Data_Interval_Duration_Iso_greaterThanOrEq, &$Data_Interval_Duration_Iso_empty, &$Data_Interval_Duration_Iso_pure, &$Data_Interval_Duration_Iso_ContainsNegativeValue) {
  $__body = function($v1) use (&$Data_Interval_Duration_Iso_greaterThanOrEq, &$Data_Interval_Duration_Iso_empty, &$Data_Interval_Duration_Iso_pure, &$Data_Interval_Duration_Iso_ContainsNegativeValue) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$c = ($__case_0)->values[0];
$num = ($__case_0)->values[1];
$__case_0 = ($Data_Interval_Duration_Iso_greaterThanOrEq)($num, 0.0);
if (($__case_0 === true)) {
return $Data_Interval_Duration_Iso_empty;
} else {
;
};
if (true) {
return ($Data_Interval_Duration_Iso_pure)(($Data_Interval_Duration_Iso_ContainsNegativeValue)($c));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use (&$Data_Interval_Duration_Iso_greaterThanOrEq, &$Data_Interval_Duration_Iso_empty, &$Data_Interval_Duration_Iso_pure, &$Data_Interval_Duration_Iso_ContainsNegativeValue, $__body, &$__fn) {
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
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Function_flip, &$Data_Interval_Duration_Iso_foldMap1, &$Data_Interval_Duration_Iso_greaterThanOrEq, &$Data_Interval_Duration_Iso_empty, &$Data_Interval_Duration_Iso_pure, &$Data_Interval_Duration_Iso_ContainsNegativeValue, $__body, &$__fn) {
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

// Data_Interval_Duration_Iso_checkFractionalUse
$Data_Interval_Duration_Iso_checkFractionalUse = (function() use (&$Data_Interval_Duration_Iso_notEq, &$Data_Number_floor, &$Data_Interval_Duration_Iso_greaterThan1, &$Data_Interval_Duration_Iso_unwrap, &$Data_Interval_Duration_Iso_foldMap2, &$Data_Interval_Duration_Iso_composeFlipped, &$Data_Tuple_snd, &$Data_Number_abs, &$Data_Monoid_Additive_Additive, &$Data_List_span, &$Data_Interval_Duration_Iso_not, &$Data_Interval_Duration_Iso_empty) {
  $__body = function($v) use (&$Data_Interval_Duration_Iso_notEq, &$Data_Number_floor, &$Data_Interval_Duration_Iso_greaterThan1, &$Data_Interval_Duration_Iso_unwrap, &$Data_Interval_Duration_Iso_foldMap2, &$Data_Interval_Duration_Iso_composeFlipped, &$Data_Tuple_snd, &$Data_Number_abs, &$Data_Monoid_Additive_Additive, &$Data_List_span, &$Data_Interval_Duration_Iso_not, &$Data_Interval_Duration_Iso_empty) {
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$asList = ($__case_0)->asList;
$isFractional = (function() use (&$Data_Interval_Duration_Iso_notEq, &$Data_Number_floor) {
  $__fn = function($a) use (&$Data_Interval_Duration_Iso_notEq, &$Data_Number_floor, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Interval_Duration_Iso_notEq)(($Data_Number_floor)($a), $a);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
$checkRest = (function() use (&$Data_Interval_Duration_Iso_greaterThan1, &$Data_Interval_Duration_Iso_unwrap, &$Data_Interval_Duration_Iso_foldMap2, &$Data_Interval_Duration_Iso_composeFlipped, &$Data_Tuple_snd, &$Data_Number_abs, &$Data_Monoid_Additive_Additive) {
  $__fn = function($rest) use (&$Data_Interval_Duration_Iso_greaterThan1, &$Data_Interval_Duration_Iso_unwrap, &$Data_Interval_Duration_Iso_foldMap2, &$Data_Interval_Duration_Iso_composeFlipped, &$Data_Tuple_snd, &$Data_Number_abs, &$Data_Monoid_Additive_Additive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Interval_Duration_Iso_greaterThan1)(($Data_Interval_Duration_Iso_unwrap)(($Data_Interval_Duration_Iso_foldMap2)(($Data_Interval_Duration_Iso_composeFlipped)($Data_Tuple_snd, ($Data_Interval_Duration_Iso_composeFlipped)($Data_Number_abs, $Data_Monoid_Additive_Additive)), $rest)), 0.0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
$v1 = ((function() {
  $__fn = function($v2) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($v2)->rest;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})())(($Data_List_span)(($Data_Interval_Duration_Iso_composeFlipped)($Data_Tuple_snd, ($Data_Interval_Duration_Iso_not)($isFractional)), $asList));
$__case_0 = $v1;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$c = (($__case_0)->values[0])->values[0];
$rest = ($__case_0)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if (true) {
return $Data_Interval_Duration_Iso_empty;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Interval_Duration_Iso_notEq, &$Data_Number_floor, &$Data_Interval_Duration_Iso_greaterThan1, &$Data_Interval_Duration_Iso_unwrap, &$Data_Interval_Duration_Iso_foldMap2, &$Data_Interval_Duration_Iso_composeFlipped, &$Data_Tuple_snd, &$Data_Number_abs, &$Data_Monoid_Additive_Additive, &$Data_List_span, &$Data_Interval_Duration_Iso_not, &$Data_Interval_Duration_Iso_empty, $__body, &$__fn) {
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

// Data_Interval_Duration_Iso_checkEmptiness
$Data_Interval_Duration_Iso_checkEmptiness = (function() use (&$Data_List_null, &$Data_Interval_Duration_Iso_pure, &$Data_Interval_Duration_Iso_IsEmpty, &$Data_Interval_Duration_Iso_empty) {
  $__body = function($v) use (&$Data_List_null, &$Data_Interval_Duration_Iso_pure, &$Data_Interval_Duration_Iso_IsEmpty, &$Data_Interval_Duration_Iso_empty) {
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$asList = ($__case_0)->asList;
$__case_0 = ($Data_List_null)($asList);
if (($__case_0 === true)) {
return ($Data_Interval_Duration_Iso_pure)($Data_Interval_Duration_Iso_IsEmpty);
} else {
;
};
if (true) {
return $Data_Interval_Duration_Iso_empty;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_null, &$Data_Interval_Duration_Iso_pure, &$Data_Interval_Duration_Iso_IsEmpty, &$Data_Interval_Duration_Iso_empty, $__body, &$__fn) {
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

// Data_Interval_Duration_Iso_checkValidIsoDuration
$Data_Interval_Duration_Iso_checkValidIsoDuration = (function() use (&$Data_Interval_Duration_Iso_fold, &$Data_Interval_Duration_Iso_checkWeekUsage, &$Data_Interval_Duration_Iso_checkEmptiness, &$Data_Interval_Duration_Iso_checkFractionalUse, &$Data_Interval_Duration_Iso_checkNegativeValues, &$Data_List_reverse, &$Data_Interval_Duration_Iso_toUnfoldable) {
  $__body = function($v) use (&$Data_Interval_Duration_Iso_fold, &$Data_Interval_Duration_Iso_checkWeekUsage, &$Data_Interval_Duration_Iso_checkEmptiness, &$Data_Interval_Duration_Iso_checkFractionalUse, &$Data_Interval_Duration_Iso_checkNegativeValues, &$Data_List_reverse, &$Data_Interval_Duration_Iso_toUnfoldable) {
    $__case_0 = $v;
    if (true) {
$asMap = $__case_0;
$check = ($Data_Interval_Duration_Iso_fold)([$Data_Interval_Duration_Iso_checkWeekUsage, $Data_Interval_Duration_Iso_checkEmptiness, $Data_Interval_Duration_Iso_checkFractionalUse, $Data_Interval_Duration_Iso_checkNegativeValues]);
$asList = ($Data_List_reverse)(($Data_Interval_Duration_Iso_toUnfoldable)($asMap));
return ($check)((object)["asList" => $asList, "asMap" => $asMap]);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Interval_Duration_Iso_fold, &$Data_Interval_Duration_Iso_checkWeekUsage, &$Data_Interval_Duration_Iso_checkEmptiness, &$Data_Interval_Duration_Iso_checkFractionalUse, &$Data_Interval_Duration_Iso_checkNegativeValues, &$Data_List_reverse, &$Data_Interval_Duration_Iso_toUnfoldable, $__body, &$__fn) {
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

// Data_Interval_Duration_Iso_mkIsoDuration
$Data_Interval_Duration_Iso_mkIsoDuration = (function() use (&$Data_List_NonEmpty_fromList, &$Data_Interval_Duration_Iso_checkValidIsoDuration, &$Data_Either_Left, &$Data_Either_Right, &$Data_Interval_Duration_Iso_IsoDuration) {
  $__body = function($d) use (&$Data_List_NonEmpty_fromList, &$Data_Interval_Duration_Iso_checkValidIsoDuration, &$Data_Either_Left, &$Data_Either_Right, &$Data_Interval_Duration_Iso_IsoDuration) {
    $v = ($Data_List_NonEmpty_fromList)(($Data_Interval_Duration_Iso_checkValidIsoDuration)($d));
    $__case_0 = $v;
    if ((($__case_0)->tag === "Just")) {
$errs = ($__case_0)->values[0];
return ($Data_Either_Left)($errs);
} else {
;
};
    if ((($__case_0)->tag === "Nothing")) {
return ($Data_Either_Right)(($Data_Interval_Duration_Iso_IsoDuration)($d));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($d) use (&$Data_List_NonEmpty_fromList, &$Data_Interval_Duration_Iso_checkValidIsoDuration, &$Data_Either_Left, &$Data_Either_Right, &$Data_Interval_Duration_Iso_IsoDuration, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($d);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($d);
  };
  return $__fn;
})();

