<?php

namespace Data\DateTime\Instant;

require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.DateTime/index.php';
require_once __DIR__ . '/../Data.DateTime.Instant/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time/index.php';
require_once __DIR__ . '/../Data.Time.Component/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_DateTime_Instant_fromJust
$Data_DateTime_Instant_fromJust = ($Data_Maybe_fromJust)($Prim_undefined);

// Data_DateTime_Instant_toEnum
$Data_DateTime_Instant_toEnum = ($Data_Enum_toEnum)($Data_Date_Component_boundedEnumMonth);

// Data_DateTime_Instant_append
$Data_DateTime_Instant_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_DateTime_Instant_show
$Data_DateTime_Instant_show = ($Data_Show_show)($Data_Time_Duration_showMilliseconds);

// Data_DateTime_Instant_conj
$Data_DateTime_Instant_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_DateTime_Instant_greaterThanOrEq
$Data_DateTime_Instant_greaterThanOrEq = ($Data_Ord_greaterThanOrEq)($Data_Ord_ordNumber);

// Data_DateTime_Instant_negate
$Data_DateTime_Instant_negate = ($Data_Ring_negate)($Data_Ring_ringNumber);

// Data_DateTime_Instant_lessThanOrEq
$Data_DateTime_Instant_lessThanOrEq = ($Data_Ord_lessThanOrEq)($Data_Ord_ordNumber);

// Data_DateTime_Instant_fromEnum
$Data_DateTime_Instant_fromEnum = ($Data_Enum_fromEnum)($Data_Date_Component_boundedEnumMonth);

// Data_DateTime_Instant_bottom
$Data_DateTime_Instant_bottom = ($Data_Bounded_bottom)($Data_Time_Component_boundedHour);

// Data_DateTime_Instant_bottom1
$Data_DateTime_Instant_bottom1 = ($Data_Bounded_bottom)($Data_Time_Component_boundedMinute);

// Data_DateTime_Instant_bottom2
$Data_DateTime_Instant_bottom2 = ($Data_Bounded_bottom)($Data_Time_Component_boundedSecond);

// Data_DateTime_Instant_bottom3
$Data_DateTime_Instant_bottom3 = ($Data_Bounded_bottom)($Data_Time_Component_boundedMillisecond);

// Data_DateTime_Instant_append1
$Data_DateTime_Instant_append1 = ($Data_Semigroup_append)($Data_Time_Duration_semigroupMilliseconds);

// Data_DateTime_Instant_negateDuration
$Data_DateTime_Instant_negateDuration = ($Data_Time_Duration_negateDuration)($Data_Time_Duration_durationMilliseconds);

// Data_DateTime_Instant_Instant
$Data_DateTime_Instant_Instant = (function() {
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

// Data_DateTime_Instant_unInstant
$Data_DateTime_Instant_unInstant = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$ms = $__case_0;
return $ms;
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

// Data_DateTime_Instant_toDateTime
$Data_DateTime_Instant_toDateTime = (function() use (&$Partial_Unsafe_unsafePartial, &$Data_DateTime_DateTime, &$Data_Date_canonicalDate, &$Data_DateTime_Instant_fromJust, &$Data_DateTime_Instant_toEnum, &$Data_Time_Time, &$Data_DateTime_Instant_toDateTimeImpl) {
$mkDateTime = ($Partial_Unsafe_unsafePartial)((function() use (&$Data_DateTime_DateTime, &$Data_Date_canonicalDate, &$Data_DateTime_Instant_fromJust, &$Data_DateTime_Instant_toEnum, &$Data_Time_Time) {
  $__fn = function($__dollar____unused, $y = null, $mo = null, $d = null, $h = null, $mi = null, $s = null, $ms = null) use (&$Data_DateTime_DateTime, &$Data_Date_canonicalDate, &$Data_DateTime_Instant_fromJust, &$Data_DateTime_Instant_toEnum, &$Data_Time_Time, &$__fn) {
  $__num = func_num_args();
  if ($__num < 8) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_DateTime_DateTime)(($Data_Date_canonicalDate)($y, ($Data_DateTime_Instant_fromJust)(($Data_DateTime_Instant_toEnum)($mo)), $d), ($Data_Time_Time)($h, $mi, $s, $ms));
    if ($__num > 8) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 8));
    }
    return $__res;
  };
  return $__fn;
})());
return ($Data_DateTime_Instant_toDateTimeImpl)($mkDateTime);
})();

// Data_DateTime_Instant_showInstant
$Data_DateTime_Instant_showInstant = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_DateTime_Instant_append, &$Data_DateTime_Instant_show) {
  $__body = function($v) use (&$Data_DateTime_Instant_append, &$Data_DateTime_Instant_show) {
    $__case_0 = $v;
    if (true) {
$ms = $__case_0;
return ($Data_DateTime_Instant_append)("(Instant ", ($Data_DateTime_Instant_append)(($Data_DateTime_Instant_show)($ms), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_DateTime_Instant_append, &$Data_DateTime_Instant_show, $__body, &$__fn) {
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

// Data_DateTime_Instant_ordDateTime
$Data_DateTime_Instant_ordDateTime = $Data_Time_Duration_ordMilliseconds;

// Data_DateTime_Instant_instant
$Data_DateTime_Instant_instant = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$ms = $__case_0;
$n = $__case_0;
return "/* Unsupported: Guards not supported */";
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

// Data_DateTime_Instant_fromDateTime
$Data_DateTime_Instant_fromDateTime = (function() use (&$Data_Function_Uncurried_runFn7, &$Data_DateTime_Instant_fromDateTimeImpl, &$Data_Date_year, &$Data_DateTime_Instant_fromEnum, &$Data_Date_month, &$Data_Date_day, &$Data_Time_hour, &$Data_Time_minute, &$Data_Time_second, &$Data_Time_millisecond) {
  $__body = function($v) use (&$Data_Function_Uncurried_runFn7, &$Data_DateTime_Instant_fromDateTimeImpl, &$Data_Date_year, &$Data_DateTime_Instant_fromEnum, &$Data_Date_month, &$Data_Date_day, &$Data_Time_hour, &$Data_Time_minute, &$Data_Time_second, &$Data_Time_millisecond) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "DateTime")) {
$d = ($__case_0)->values[0];
$t = ($__case_0)->values[1];
return ($Data_Function_Uncurried_runFn7)($Data_DateTime_Instant_fromDateTimeImpl, ($Data_Date_year)($d), ($Data_DateTime_Instant_fromEnum)(($Data_Date_month)($d)), ($Data_Date_day)($d), ($Data_Time_hour)($t), ($Data_Time_minute)($t), ($Data_Time_second)($t), ($Data_Time_millisecond)($t));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Function_Uncurried_runFn7, &$Data_DateTime_Instant_fromDateTimeImpl, &$Data_Date_year, &$Data_DateTime_Instant_fromEnum, &$Data_Date_month, &$Data_Date_day, &$Data_Time_hour, &$Data_Time_minute, &$Data_Time_second, &$Data_Time_millisecond, $__body, &$__fn) {
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

// Data_DateTime_Instant_fromDate
$Data_DateTime_Instant_fromDate = (function() use (&$Data_Function_Uncurried_runFn7, &$Data_DateTime_Instant_fromDateTimeImpl, &$Data_Date_year, &$Data_DateTime_Instant_fromEnum, &$Data_Date_month, &$Data_Date_day, &$Data_DateTime_Instant_bottom, &$Data_DateTime_Instant_bottom1, &$Data_DateTime_Instant_bottom2, &$Data_DateTime_Instant_bottom3) {
  $__fn = function($d) use (&$Data_Function_Uncurried_runFn7, &$Data_DateTime_Instant_fromDateTimeImpl, &$Data_Date_year, &$Data_DateTime_Instant_fromEnum, &$Data_Date_month, &$Data_Date_day, &$Data_DateTime_Instant_bottom, &$Data_DateTime_Instant_bottom1, &$Data_DateTime_Instant_bottom2, &$Data_DateTime_Instant_bottom3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_Uncurried_runFn7)($Data_DateTime_Instant_fromDateTimeImpl, ($Data_Date_year)($d), ($Data_DateTime_Instant_fromEnum)(($Data_Date_month)($d)), ($Data_Date_day)($d), $Data_DateTime_Instant_bottom, $Data_DateTime_Instant_bottom1, $Data_DateTime_Instant_bottom2, $Data_DateTime_Instant_bottom3);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_DateTime_Instant_eqDateTime
$Data_DateTime_Instant_eqDateTime = $Data_Time_Duration_eqMilliseconds;

// Data_DateTime_Instant_diff
$Data_DateTime_Instant_diff = (function() use (&$Data_Time_Duration_toDuration, &$Data_DateTime_Instant_append1, &$Data_DateTime_Instant_unInstant, &$Data_DateTime_Instant_negateDuration) {
  $__fn = function($dictDuration) use (&$Data_Time_Duration_toDuration, &$Data_DateTime_Instant_append1, &$Data_DateTime_Instant_unInstant, &$Data_DateTime_Instant_negateDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$toDuration = ($Data_Time_Duration_toDuration)($dictDuration);
    $__res = (function() use ($toDuration, &$Data_DateTime_Instant_append1, &$Data_DateTime_Instant_unInstant, &$Data_DateTime_Instant_negateDuration) {
  $__fn = function($dt1, $dt2 = null) use ($toDuration, &$Data_DateTime_Instant_append1, &$Data_DateTime_Instant_unInstant, &$Data_DateTime_Instant_negateDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($toDuration)(($Data_DateTime_Instant_append1)(($Data_DateTime_Instant_unInstant)($dt1), ($Data_DateTime_Instant_negateDuration)(($Data_DateTime_Instant_unInstant)($dt2))));
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

// Data_DateTime_Instant_boundedInstant
$Data_DateTime_Instant_boundedInstant = ($Data_Bounded_Bounded__dollar__Dict)((object)["bottom" => ($Data_DateTime_Instant_Instant)(($Data_Time_Duration_Milliseconds)(($Data_DateTime_Instant_negate)(8639977881600000.0))), "top" => ($Data_DateTime_Instant_Instant)(($Data_Time_Duration_Milliseconds)(8639977881599999.0)), "Ord0" => (function() use (&$Data_DateTime_Instant_ordDateTime) {
  $__fn = function($__dollar____unused) use (&$Data_DateTime_Instant_ordDateTime, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_DateTime_Instant_ordDateTime;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

