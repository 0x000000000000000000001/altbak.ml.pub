<?php

namespace Data\Date\Component;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Date_Component_append
$Data_Date_Component_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Date_Component_show
$Data_Date_Component_show = ($Data_Show_show)($Data_Show_showInt);

// Data_Date_Component_negate
$Data_Date_Component_negate = ($Data_Ring_negate)($Data_Ring_ringInt);

// Data_Date_Component_conj
$Data_Date_Component_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Date_Component_greaterThanOrEq
$Data_Date_Component_greaterThanOrEq = ($Data_Ord_greaterThanOrEq)($Data_Ord_ordInt);

// Data_Date_Component_lessThanOrEq
$Data_Date_Component_lessThanOrEq = ($Data_Ord_lessThanOrEq)($Data_Ord_ordInt);

// Data_Date_Component_compose
$Data_Date_Component_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Date_Component_add
$Data_Date_Component_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Data_Date_Component_sub
$Data_Date_Component_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Data_Date_Component_Year
$Data_Date_Component_Year = (function() {
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

// Data_Date_Component_Monday
$Data_Date_Component_Monday = (object)["tag" => "Monday", "values" => []];

// Data_Date_Component_Tuesday
$Data_Date_Component_Tuesday = (object)["tag" => "Tuesday", "values" => []];

// Data_Date_Component_Wednesday
$Data_Date_Component_Wednesday = (object)["tag" => "Wednesday", "values" => []];

// Data_Date_Component_Thursday
$Data_Date_Component_Thursday = (object)["tag" => "Thursday", "values" => []];

// Data_Date_Component_Friday
$Data_Date_Component_Friday = (object)["tag" => "Friday", "values" => []];

// Data_Date_Component_Saturday
$Data_Date_Component_Saturday = (object)["tag" => "Saturday", "values" => []];

// Data_Date_Component_Sunday
$Data_Date_Component_Sunday = (object)["tag" => "Sunday", "values" => []];

// Data_Date_Component_January
$Data_Date_Component_January = (object)["tag" => "January", "values" => []];

// Data_Date_Component_February
$Data_Date_Component_February = (object)["tag" => "February", "values" => []];

// Data_Date_Component_March
$Data_Date_Component_March = (object)["tag" => "March", "values" => []];

// Data_Date_Component_April
$Data_Date_Component_April = (object)["tag" => "April", "values" => []];

// Data_Date_Component_May
$Data_Date_Component_May = (object)["tag" => "May", "values" => []];

// Data_Date_Component_June
$Data_Date_Component_June = (object)["tag" => "June", "values" => []];

// Data_Date_Component_July
$Data_Date_Component_July = (object)["tag" => "July", "values" => []];

// Data_Date_Component_August
$Data_Date_Component_August = (object)["tag" => "August", "values" => []];

// Data_Date_Component_September
$Data_Date_Component_September = (object)["tag" => "September", "values" => []];

// Data_Date_Component_October
$Data_Date_Component_October = (object)["tag" => "October", "values" => []];

// Data_Date_Component_November
$Data_Date_Component_November = (object)["tag" => "November", "values" => []];

// Data_Date_Component_December
$Data_Date_Component_December = (object)["tag" => "December", "values" => []];

// Data_Date_Component_Day
$Data_Date_Component_Day = (function() {
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

// Data_Date_Component_showYear
$Data_Date_Component_showYear = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Date_Component_append, &$Data_Date_Component_show) {
  $__body = function($v) use (&$Data_Date_Component_append, &$Data_Date_Component_show) {
    $__case_0 = $v;
    if (true) {
$y = $__case_0;
return ($Data_Date_Component_append)("(Year ", ($Data_Date_Component_append)(($Data_Date_Component_show)($y), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Date_Component_append, &$Data_Date_Component_show, $__body, &$__fn) {
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

// Data_Date_Component_showWeekday
$Data_Date_Component_showWeekday = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Monday")) {
return "Monday";
} else {
;
};
    if ((($__case_0)->tag === "Tuesday")) {
return "Tuesday";
} else {
;
};
    if ((($__case_0)->tag === "Wednesday")) {
return "Wednesday";
} else {
;
};
    if ((($__case_0)->tag === "Thursday")) {
return "Thursday";
} else {
;
};
    if ((($__case_0)->tag === "Friday")) {
return "Friday";
} else {
;
};
    if ((($__case_0)->tag === "Saturday")) {
return "Saturday";
} else {
;
};
    if ((($__case_0)->tag === "Sunday")) {
return "Sunday";
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

// Data_Date_Component_showMonth
$Data_Date_Component_showMonth = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "January")) {
return "January";
} else {
;
};
    if ((($__case_0)->tag === "February")) {
return "February";
} else {
;
};
    if ((($__case_0)->tag === "March")) {
return "March";
} else {
;
};
    if ((($__case_0)->tag === "April")) {
return "April";
} else {
;
};
    if ((($__case_0)->tag === "May")) {
return "May";
} else {
;
};
    if ((($__case_0)->tag === "June")) {
return "June";
} else {
;
};
    if ((($__case_0)->tag === "July")) {
return "July";
} else {
;
};
    if ((($__case_0)->tag === "August")) {
return "August";
} else {
;
};
    if ((($__case_0)->tag === "September")) {
return "September";
} else {
;
};
    if ((($__case_0)->tag === "October")) {
return "October";
} else {
;
};
    if ((($__case_0)->tag === "November")) {
return "November";
} else {
;
};
    if ((($__case_0)->tag === "December")) {
return "December";
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

// Data_Date_Component_showDay
$Data_Date_Component_showDay = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Date_Component_append, &$Data_Date_Component_show) {
  $__body = function($v) use (&$Data_Date_Component_append, &$Data_Date_Component_show) {
    $__case_0 = $v;
    if (true) {
$d = $__case_0;
return ($Data_Date_Component_append)("(Day ", ($Data_Date_Component_append)(($Data_Date_Component_show)($d), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Date_Component_append, &$Data_Date_Component_show, $__body, &$__fn) {
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

// Data_Date_Component_ordYear
$Data_Date_Component_ordYear = $Data_Ord_ordInt;

// Data_Date_Component_ordDay
$Data_Date_Component_ordDay = $Data_Ord_ordInt;

// Data_Date_Component_eqYear
$Data_Date_Component_eqYear = $Data_Eq_eqInt;

// Data_Date_Component_eqWeekday
$Data_Date_Component_eqWeekday = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Monday") && (($__case_1)->tag === "Monday"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "Tuesday") && (($__case_1)->tag === "Tuesday"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "Wednesday") && (($__case_1)->tag === "Wednesday"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "Thursday") && (($__case_1)->tag === "Thursday"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "Friday") && (($__case_1)->tag === "Friday"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "Saturday") && (($__case_1)->tag === "Saturday"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "Sunday") && (($__case_1)->tag === "Sunday"))) {
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

// Data_Date_Component_ordWeekday
$Data_Date_Component_ordWeekday = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__body = function($x, $y) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Monday") && (($__case_1)->tag === "Monday"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "Monday")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "Monday")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "Tuesday") && (($__case_1)->tag === "Tuesday"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "Tuesday")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "Tuesday")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "Wednesday") && (($__case_1)->tag === "Wednesday"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "Wednesday")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "Wednesday")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "Thursday") && (($__case_1)->tag === "Thursday"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "Thursday")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "Thursday")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "Friday") && (($__case_1)->tag === "Friday"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "Friday")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "Friday")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "Saturday") && (($__case_1)->tag === "Saturday"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "Saturday")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "Saturday")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "Sunday") && (($__case_1)->tag === "Sunday"))) {
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
})(), "Eq0" => (function() use (&$Data_Date_Component_eqWeekday) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_eqWeekday, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_eqWeekday;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Date_Component_eqMonth
$Data_Date_Component_eqMonth = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "January") && (($__case_1)->tag === "January"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "February") && (($__case_1)->tag === "February"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "March") && (($__case_1)->tag === "March"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "April") && (($__case_1)->tag === "April"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "May") && (($__case_1)->tag === "May"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "June") && (($__case_1)->tag === "June"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "July") && (($__case_1)->tag === "July"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "August") && (($__case_1)->tag === "August"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "September") && (($__case_1)->tag === "September"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "October") && (($__case_1)->tag === "October"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "November") && (($__case_1)->tag === "November"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "December") && (($__case_1)->tag === "December"))) {
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

// Data_Date_Component_ordMonth
$Data_Date_Component_ordMonth = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__body = function($x, $y) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "January") && (($__case_1)->tag === "January"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "January")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "January")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "February") && (($__case_1)->tag === "February"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "February")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "February")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "March") && (($__case_1)->tag === "March"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "March")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "March")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "April") && (($__case_1)->tag === "April"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "April")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "April")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "May") && (($__case_1)->tag === "May"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "May")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "May")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "June") && (($__case_1)->tag === "June"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "June")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "June")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "July") && (($__case_1)->tag === "July"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "July")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "July")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "August") && (($__case_1)->tag === "August"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "August")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "August")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "September") && (($__case_1)->tag === "September"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "September")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "September")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "October") && (($__case_1)->tag === "October"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "October")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "October")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "November") && (($__case_1)->tag === "November"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "November")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "November")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "December") && (($__case_1)->tag === "December"))) {
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
})(), "Eq0" => (function() use (&$Data_Date_Component_eqMonth) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_eqMonth, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_eqMonth;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Date_Component_eqDay
$Data_Date_Component_eqDay = $Data_Eq_eqInt;

// Data_Date_Component_boundedYear
$Data_Date_Component_boundedYear = ($Data_Bounded_Bounded__dollar__Dict)((object)["bottom" => ($Data_Date_Component_Year)(($Data_Date_Component_negate)(271820)), "top" => ($Data_Date_Component_Year)(275759), "Ord0" => (function() use (&$Data_Date_Component_ordYear) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_ordYear, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_ordYear;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Date_Component_boundedWeekday
$Data_Date_Component_boundedWeekday = ($Data_Bounded_Bounded__dollar__Dict)((object)["bottom" => $Data_Date_Component_Monday, "top" => $Data_Date_Component_Sunday, "Ord0" => (function() use (&$Data_Date_Component_ordWeekday) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_ordWeekday, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_ordWeekday;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Date_Component_boundedMonth
$Data_Date_Component_boundedMonth = ($Data_Bounded_Bounded__dollar__Dict)((object)["bottom" => $Data_Date_Component_January, "top" => $Data_Date_Component_December, "Ord0" => (function() use (&$Data_Date_Component_ordMonth) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_ordMonth, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_ordMonth;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Date_Component_boundedEnumYear
$Data_Date_Component_boundedEnumYear = ($Data_Enum_BoundedEnum__dollar__Dict)((object)["cardinality" => ($Data_Enum_Cardinality)(547580), "toEnum" => (function() {
  $__body = function($n) {
    $__case_0 = $n;
    if (true) {
$n1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($n) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($n);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($n);
  };
  return $__fn;
})(), "fromEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return $n;
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
})(), "Bounded0" => (function() use (&$Data_Date_Component_boundedYear) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_boundedYear, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_boundedYear;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Enum1" => (function() use (&$Data_Date_Component_enumYear) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_enumYear, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_enumYear;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Date_Component_enumYear
$Data_Date_Component_enumYear = ($Data_Enum_Enum__dollar__Dict)((object)["succ" => ($Data_Date_Component_compose)(($Data_Enum_toEnum)($Data_Date_Component_boundedEnumYear), ($Data_Date_Component_compose)((function() use (&$Data_Date_Component_add) {
  $__fn = function($v) use (&$Data_Date_Component_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Date_Component_add)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Enum_fromEnum)($Data_Date_Component_boundedEnumYear))), "pred" => ($Data_Date_Component_compose)(($Data_Enum_toEnum)($Data_Date_Component_boundedEnumYear), ($Data_Date_Component_compose)((function() use (&$Data_Date_Component_sub) {
  $__fn = function($v) use (&$Data_Date_Component_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Date_Component_sub)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Enum_fromEnum)($Data_Date_Component_boundedEnumYear))), "Ord0" => (function() use (&$Data_Date_Component_ordYear) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_ordYear, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_ordYear;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Date_Component_boundedEnumWeekday
$Data_Date_Component_boundedEnumWeekday = ($Data_Enum_BoundedEnum__dollar__Dict)((object)["cardinality" => ($Data_Enum_Cardinality)(7), "toEnum" => (function() use (&$Data_Maybe_Just, &$Data_Date_Component_Monday, &$Data_Date_Component_Tuesday, &$Data_Date_Component_Wednesday, &$Data_Date_Component_Thursday, &$Data_Date_Component_Friday, &$Data_Date_Component_Saturday, &$Data_Date_Component_Sunday, &$Data_Maybe_Nothing) {
  $__body = function($v) use (&$Data_Maybe_Just, &$Data_Date_Component_Monday, &$Data_Date_Component_Tuesday, &$Data_Date_Component_Wednesday, &$Data_Date_Component_Thursday, &$Data_Date_Component_Friday, &$Data_Date_Component_Saturday, &$Data_Date_Component_Sunday, &$Data_Maybe_Nothing) {
    $__case_0 = $v;
    if (($__case_0 === 1)) {
return ($Data_Maybe_Just)($Data_Date_Component_Monday);
} else {
;
};
    if (($__case_0 === 2)) {
return ($Data_Maybe_Just)($Data_Date_Component_Tuesday);
} else {
;
};
    if (($__case_0 === 3)) {
return ($Data_Maybe_Just)($Data_Date_Component_Wednesday);
} else {
;
};
    if (($__case_0 === 4)) {
return ($Data_Maybe_Just)($Data_Date_Component_Thursday);
} else {
;
};
    if (($__case_0 === 5)) {
return ($Data_Maybe_Just)($Data_Date_Component_Friday);
} else {
;
};
    if (($__case_0 === 6)) {
return ($Data_Maybe_Just)($Data_Date_Component_Saturday);
} else {
;
};
    if (($__case_0 === 7)) {
return ($Data_Maybe_Just)($Data_Date_Component_Sunday);
} else {
;
};
    if (true) {
return $Data_Maybe_Nothing;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_Just, &$Data_Date_Component_Monday, &$Data_Date_Component_Tuesday, &$Data_Date_Component_Wednesday, &$Data_Date_Component_Thursday, &$Data_Date_Component_Friday, &$Data_Date_Component_Saturday, &$Data_Date_Component_Sunday, &$Data_Maybe_Nothing, $__body, &$__fn) {
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
})(), "fromEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Monday")) {
return 1;
} else {
;
};
    if ((($__case_0)->tag === "Tuesday")) {
return 2;
} else {
;
};
    if ((($__case_0)->tag === "Wednesday")) {
return 3;
} else {
;
};
    if ((($__case_0)->tag === "Thursday")) {
return 4;
} else {
;
};
    if ((($__case_0)->tag === "Friday")) {
return 5;
} else {
;
};
    if ((($__case_0)->tag === "Saturday")) {
return 6;
} else {
;
};
    if ((($__case_0)->tag === "Sunday")) {
return 7;
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
})(), "Bounded0" => (function() use (&$Data_Date_Component_boundedWeekday) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_boundedWeekday, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_boundedWeekday;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Enum1" => (function() use (&$Data_Date_Component_enumWeekday) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_enumWeekday, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_enumWeekday;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Date_Component_enumWeekday
$Data_Date_Component_enumWeekday = ($Data_Enum_Enum__dollar__Dict)((object)["succ" => ($Data_Date_Component_compose)(($Data_Enum_toEnum)($Data_Date_Component_boundedEnumWeekday), ($Data_Date_Component_compose)((function() use (&$Data_Date_Component_add) {
  $__fn = function($v) use (&$Data_Date_Component_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Date_Component_add)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Enum_fromEnum)($Data_Date_Component_boundedEnumWeekday))), "pred" => ($Data_Date_Component_compose)(($Data_Enum_toEnum)($Data_Date_Component_boundedEnumWeekday), ($Data_Date_Component_compose)((function() use (&$Data_Date_Component_sub) {
  $__fn = function($v) use (&$Data_Date_Component_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Date_Component_sub)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Enum_fromEnum)($Data_Date_Component_boundedEnumWeekday))), "Ord0" => (function() use (&$Data_Date_Component_ordWeekday) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_ordWeekday, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_ordWeekday;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Date_Component_boundedEnumMonth
$Data_Date_Component_boundedEnumMonth = ($Data_Enum_BoundedEnum__dollar__Dict)((object)["cardinality" => ($Data_Enum_Cardinality)(12), "toEnum" => (function() use (&$Data_Maybe_Just, &$Data_Date_Component_January, &$Data_Date_Component_February, &$Data_Date_Component_March, &$Data_Date_Component_April, &$Data_Date_Component_May, &$Data_Date_Component_June, &$Data_Date_Component_July, &$Data_Date_Component_August, &$Data_Date_Component_September, &$Data_Date_Component_October, &$Data_Date_Component_November, &$Data_Date_Component_December, &$Data_Maybe_Nothing) {
  $__body = function($v) use (&$Data_Maybe_Just, &$Data_Date_Component_January, &$Data_Date_Component_February, &$Data_Date_Component_March, &$Data_Date_Component_April, &$Data_Date_Component_May, &$Data_Date_Component_June, &$Data_Date_Component_July, &$Data_Date_Component_August, &$Data_Date_Component_September, &$Data_Date_Component_October, &$Data_Date_Component_November, &$Data_Date_Component_December, &$Data_Maybe_Nothing) {
    $__case_0 = $v;
    if (($__case_0 === 1)) {
return ($Data_Maybe_Just)($Data_Date_Component_January);
} else {
;
};
    if (($__case_0 === 2)) {
return ($Data_Maybe_Just)($Data_Date_Component_February);
} else {
;
};
    if (($__case_0 === 3)) {
return ($Data_Maybe_Just)($Data_Date_Component_March);
} else {
;
};
    if (($__case_0 === 4)) {
return ($Data_Maybe_Just)($Data_Date_Component_April);
} else {
;
};
    if (($__case_0 === 5)) {
return ($Data_Maybe_Just)($Data_Date_Component_May);
} else {
;
};
    if (($__case_0 === 6)) {
return ($Data_Maybe_Just)($Data_Date_Component_June);
} else {
;
};
    if (($__case_0 === 7)) {
return ($Data_Maybe_Just)($Data_Date_Component_July);
} else {
;
};
    if (($__case_0 === 8)) {
return ($Data_Maybe_Just)($Data_Date_Component_August);
} else {
;
};
    if (($__case_0 === 9)) {
return ($Data_Maybe_Just)($Data_Date_Component_September);
} else {
;
};
    if (($__case_0 === 10)) {
return ($Data_Maybe_Just)($Data_Date_Component_October);
} else {
;
};
    if (($__case_0 === 11)) {
return ($Data_Maybe_Just)($Data_Date_Component_November);
} else {
;
};
    if (($__case_0 === 12)) {
return ($Data_Maybe_Just)($Data_Date_Component_December);
} else {
;
};
    if (true) {
return $Data_Maybe_Nothing;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_Just, &$Data_Date_Component_January, &$Data_Date_Component_February, &$Data_Date_Component_March, &$Data_Date_Component_April, &$Data_Date_Component_May, &$Data_Date_Component_June, &$Data_Date_Component_July, &$Data_Date_Component_August, &$Data_Date_Component_September, &$Data_Date_Component_October, &$Data_Date_Component_November, &$Data_Date_Component_December, &$Data_Maybe_Nothing, $__body, &$__fn) {
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
})(), "fromEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "January")) {
return 1;
} else {
;
};
    if ((($__case_0)->tag === "February")) {
return 2;
} else {
;
};
    if ((($__case_0)->tag === "March")) {
return 3;
} else {
;
};
    if ((($__case_0)->tag === "April")) {
return 4;
} else {
;
};
    if ((($__case_0)->tag === "May")) {
return 5;
} else {
;
};
    if ((($__case_0)->tag === "June")) {
return 6;
} else {
;
};
    if ((($__case_0)->tag === "July")) {
return 7;
} else {
;
};
    if ((($__case_0)->tag === "August")) {
return 8;
} else {
;
};
    if ((($__case_0)->tag === "September")) {
return 9;
} else {
;
};
    if ((($__case_0)->tag === "October")) {
return 10;
} else {
;
};
    if ((($__case_0)->tag === "November")) {
return 11;
} else {
;
};
    if ((($__case_0)->tag === "December")) {
return 12;
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
})(), "Bounded0" => (function() use (&$Data_Date_Component_boundedMonth) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_boundedMonth, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_boundedMonth;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Enum1" => (function() use (&$Data_Date_Component_enumMonth) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_enumMonth, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_enumMonth;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Date_Component_enumMonth
$Data_Date_Component_enumMonth = ($Data_Enum_Enum__dollar__Dict)((object)["succ" => ($Data_Date_Component_compose)(($Data_Enum_toEnum)($Data_Date_Component_boundedEnumMonth), ($Data_Date_Component_compose)((function() use (&$Data_Date_Component_add) {
  $__fn = function($v) use (&$Data_Date_Component_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Date_Component_add)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Enum_fromEnum)($Data_Date_Component_boundedEnumMonth))), "pred" => ($Data_Date_Component_compose)(($Data_Enum_toEnum)($Data_Date_Component_boundedEnumMonth), ($Data_Date_Component_compose)((function() use (&$Data_Date_Component_sub) {
  $__fn = function($v) use (&$Data_Date_Component_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Date_Component_sub)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Enum_fromEnum)($Data_Date_Component_boundedEnumMonth))), "Ord0" => (function() use (&$Data_Date_Component_ordMonth) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_ordMonth, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_ordMonth;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Date_Component_boundedDay
$Data_Date_Component_boundedDay = ($Data_Bounded_Bounded__dollar__Dict)((object)["bottom" => ($Data_Date_Component_Day)(1), "top" => ($Data_Date_Component_Day)(31), "Ord0" => (function() use (&$Data_Date_Component_ordDay) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_ordDay, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_ordDay;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Date_Component_boundedEnumDay
$Data_Date_Component_boundedEnumDay = ($Data_Enum_BoundedEnum__dollar__Dict)((object)["cardinality" => ($Data_Enum_Cardinality)(31), "toEnum" => (function() {
  $__body = function($n) {
    $__case_0 = $n;
    if (true) {
$n1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($n) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($n);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($n);
  };
  return $__fn;
})(), "fromEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return $n;
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
})(), "Bounded0" => (function() use (&$Data_Date_Component_boundedDay) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_boundedDay, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_boundedDay;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Enum1" => (function() use (&$Data_Date_Component_enumDay) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_enumDay, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_enumDay;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Date_Component_enumDay
$Data_Date_Component_enumDay = ($Data_Enum_Enum__dollar__Dict)((object)["succ" => ($Data_Date_Component_compose)(($Data_Enum_toEnum)($Data_Date_Component_boundedEnumDay), ($Data_Date_Component_compose)((function() use (&$Data_Date_Component_add) {
  $__fn = function($v) use (&$Data_Date_Component_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Date_Component_add)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Enum_fromEnum)($Data_Date_Component_boundedEnumDay))), "pred" => ($Data_Date_Component_compose)(($Data_Enum_toEnum)($Data_Date_Component_boundedEnumDay), ($Data_Date_Component_compose)((function() use (&$Data_Date_Component_sub) {
  $__fn = function($v) use (&$Data_Date_Component_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Date_Component_sub)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Enum_fromEnum)($Data_Date_Component_boundedEnumDay))), "Ord0" => (function() use (&$Data_Date_Component_ordDay) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_ordDay, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_ordDay;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

