<?php

namespace Data\Interval\Duration;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Interval.Duration/index.php';
require_once __DIR__ . '/../Data.Map/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Interval_Duration_append
$Data_Interval_Duration_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Interval_Duration_add
$Data_Interval_Duration_add = ($Data_Semiring_add)($Data_Semiring_semiringNumber);

// Data_Interval_Duration_div
$Data_Interval_Duration_div = ($Data_EuclideanRing_div)($Data_EuclideanRing_euclideanRingNumber);

// Data_Interval_Duration_Second
$Data_Interval_Duration_Second = (object)["tag" => "Second", "values" => []];

// Data_Interval_Duration_Minute
$Data_Interval_Duration_Minute = (object)["tag" => "Minute", "values" => []];

// Data_Interval_Duration_Hour
$Data_Interval_Duration_Hour = (object)["tag" => "Hour", "values" => []];

// Data_Interval_Duration_Day
$Data_Interval_Duration_Day = (object)["tag" => "Day", "values" => []];

// Data_Interval_Duration_Week
$Data_Interval_Duration_Week = (object)["tag" => "Week", "values" => []];

// Data_Interval_Duration_Month
$Data_Interval_Duration_Month = (object)["tag" => "Month", "values" => []];

// Data_Interval_Duration_Year
$Data_Interval_Duration_Year = (object)["tag" => "Year", "values" => []];

// Data_Interval_Duration_Duration
$Data_Interval_Duration_Duration = (function() {
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

// Data_Interval_Duration_showDurationComponent
$Data_Interval_Duration_showDurationComponent = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Minute")) {
return "Minute";
} else {
;
};
    if ((($__case_0)->tag === "Second")) {
return "Second";
} else {
;
};
    if ((($__case_0)->tag === "Hour")) {
return "Hour";
} else {
;
};
    if ((($__case_0)->tag === "Day")) {
return "Day";
} else {
;
};
    if ((($__case_0)->tag === "Week")) {
return "Week";
} else {
;
};
    if ((($__case_0)->tag === "Month")) {
return "Month";
} else {
;
};
    if ((($__case_0)->tag === "Year")) {
return "Year";
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
})()]);

// Data_Interval_Duration_show
$Data_Interval_Duration_show = ($Data_Show_show)(($Data_Map_Internal_showMap)($Data_Interval_Duration_showDurationComponent, $Data_Show_showNumber));

// Data_Interval_Duration_showDuration
$Data_Interval_Duration_showDuration = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Interval_Duration_append, &$Data_Interval_Duration_show) {
  $__body = function($v) use (&$Data_Interval_Duration_append, &$Data_Interval_Duration_show) {
    $__case_0 = $v;
    if (true) {
$d = $__case_0;
return ($Data_Interval_Duration_append)("(Duration ", ($Data_Interval_Duration_append)(($Data_Interval_Duration_show)($d), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Interval_Duration_append, &$Data_Interval_Duration_show, $__body, &$__fn) {
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

// Data_Interval_Duration_newtypeDuration
$Data_Interval_Duration_newtypeDuration = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Interval_Duration_eqDurationComponent
$Data_Interval_Duration_eqDurationComponent = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Second") && (($__case_1)->tag === "Second"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "Minute") && (($__case_1)->tag === "Minute"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "Hour") && (($__case_1)->tag === "Hour"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "Day") && (($__case_1)->tag === "Day"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "Week") && (($__case_1)->tag === "Week"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "Month") && (($__case_1)->tag === "Month"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "Year") && (($__case_1)->tag === "Year"))) {
return true;
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
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
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

// Data_Interval_Duration_eq
$Data_Interval_Duration_eq = ($Data_Eq_eq)(($Data_Map_Internal_eqMap)($Data_Interval_Duration_eqDurationComponent, $Data_Eq_eqNumber));

// Data_Interval_Duration_ordDurationComponent
$Data_Interval_Duration_ordDurationComponent = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__body = function($x, $y) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Second") && (($__case_1)->tag === "Second"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "Second")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "Second")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "Minute") && (($__case_1)->tag === "Minute"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "Minute")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "Minute")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "Hour") && (($__case_1)->tag === "Hour"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "Hour")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "Hour")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "Day") && (($__case_1)->tag === "Day"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "Day")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "Day")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "Week") && (($__case_1)->tag === "Week"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "Week")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "Week")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "Month") && (($__case_1)->tag === "Month"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "Month")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "Month")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "Year") && (($__case_1)->tag === "Year"))) {
return $Data_Ordering_EQ;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $__body, &$__fn) {
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
})(), "Eq0" => (function() use (&$Data_Interval_Duration_eqDurationComponent) {
  $__fn = function($__dollar____unused) use (&$Data_Interval_Duration_eqDurationComponent, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Interval_Duration_eqDurationComponent;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Interval_Duration_unionWith
$Data_Interval_Duration_unionWith = ($Data_Map_Internal_unionWith)($Data_Interval_Duration_ordDurationComponent);

// Data_Interval_Duration_compare
$Data_Interval_Duration_compare = ($Data_Ord_compare)(($Data_Map_Internal_ordMap)($Data_Interval_Duration_ordDurationComponent, $Data_Ord_ordNumber));

// Data_Interval_Duration_semigroupDuration
$Data_Interval_Duration_semigroupDuration = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Interval_Duration_Duration, &$Data_Interval_Duration_unionWith, &$Data_Interval_Duration_add) {
  $__body = function($v, $v1) use (&$Data_Interval_Duration_Duration, &$Data_Interval_Duration_unionWith, &$Data_Interval_Duration_add) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($Data_Interval_Duration_Duration)(($Data_Interval_Duration_unionWith)($Data_Interval_Duration_add, $a, $b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Interval_Duration_Duration, &$Data_Interval_Duration_unionWith, &$Data_Interval_Duration_add, $__body, &$__fn) {
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

// Data_Interval_Duration_monoidDuration
$Data_Interval_Duration_monoidDuration = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Interval_Duration_Duration)($Data_Map_Internal_empty), "Semigroup0" => (function() use (&$Data_Interval_Duration_semigroupDuration) {
  $__fn = function($__dollar____unused) use (&$Data_Interval_Duration_semigroupDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Interval_Duration_semigroupDuration;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Interval_Duration_eqDuration
$Data_Interval_Duration_eqDuration = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use (&$Data_Interval_Duration_eq) {
  $__body = function($x, $y) use (&$Data_Interval_Duration_eq) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($Data_Interval_Duration_eq)($l, $r);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_Interval_Duration_eq, $__body, &$__fn) {
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

// Data_Interval_Duration_ordDuration
$Data_Interval_Duration_ordDuration = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Interval_Duration_compare) {
  $__body = function($x, $y) use (&$Data_Interval_Duration_compare) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($Data_Interval_Duration_compare)($l, $r);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_Interval_Duration_compare, $__body, &$__fn) {
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
})(), "Eq0" => (function() use (&$Data_Interval_Duration_eqDuration) {
  $__fn = function($__dollar____unused) use (&$Data_Interval_Duration_eqDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Interval_Duration_eqDuration;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Interval_Duration_durationFromComponent
$Data_Interval_Duration_durationFromComponent = (function() use (&$Data_Interval_Duration_Duration, &$Data_Map_Internal_singleton) {
  $__fn = function($k, $v = null) use (&$Data_Interval_Duration_Duration, &$Data_Map_Internal_singleton, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Interval_Duration_Duration)(($Data_Map_Internal_singleton)($k, $v));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Interval_Duration_hour
$Data_Interval_Duration_hour = ($Data_Interval_Duration_durationFromComponent)($Data_Interval_Duration_Hour);

// Data_Interval_Duration_millisecond
$Data_Interval_Duration_millisecond = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn, ($Data_Interval_Duration_durationFromComponent)($Data_Interval_Duration_Second), (function() use (&$Data_Interval_Duration_div) {
  $__fn = function($v) use (&$Data_Interval_Duration_div, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Interval_Duration_div)($v, 1000.0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());

// Data_Interval_Duration_minute
$Data_Interval_Duration_minute = ($Data_Interval_Duration_durationFromComponent)($Data_Interval_Duration_Minute);

// Data_Interval_Duration_month
$Data_Interval_Duration_month = ($Data_Interval_Duration_durationFromComponent)($Data_Interval_Duration_Month);

// Data_Interval_Duration_second
$Data_Interval_Duration_second = ($Data_Interval_Duration_durationFromComponent)($Data_Interval_Duration_Second);

// Data_Interval_Duration_week
$Data_Interval_Duration_week = ($Data_Interval_Duration_durationFromComponent)($Data_Interval_Duration_Week);

// Data_Interval_Duration_year
$Data_Interval_Duration_year = ($Data_Interval_Duration_durationFromComponent)($Data_Interval_Duration_Year);

// Data_Interval_Duration_day
$Data_Interval_Duration_day = ($Data_Interval_Duration_durationFromComponent)($Data_Interval_Duration_Day);

