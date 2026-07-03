<?php

namespace Data\Time\Duration;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Time_Duration_append
$Data_Time_Duration_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Time_Duration_show
$Data_Time_Duration_show = ($Data_Show_show)($Data_Show_showNumber);

// Data_Time_Duration_add
$Data_Time_Duration_add = ($Data_Semiring_add)($Data_Semiring_semiringNumber);

// Data_Time_Duration_compose
$Data_Time_Duration_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Time_Duration_over
$Data_Time_Duration_over = ($Data_Newtype_over)($Prim_undefined, $Prim_undefined);

// Data_Time_Duration_negate
$Data_Time_Duration_negate = ($Data_Ring_negate)($Data_Ring_ringNumber);

// Data_Time_Duration_mul
$Data_Time_Duration_mul = ($Data_Semiring_mul)($Data_Semiring_semiringNumber);

// Data_Time_Duration_div
$Data_Time_Duration_div = ($Data_EuclideanRing_div)($Data_EuclideanRing_euclideanRingNumber);

// Data_Time_Duration_identity
$Data_Time_Duration_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Time_Duration_Seconds
$Data_Time_Duration_Seconds = (function() {
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

// Data_Time_Duration_Minutes
$Data_Time_Duration_Minutes = (function() {
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

// Data_Time_Duration_Milliseconds
$Data_Time_Duration_Milliseconds = (function() {
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

// Data_Time_Duration_Hours
$Data_Time_Duration_Hours = (function() {
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

// Data_Time_Duration_Duration$Dict
$Data_Time_Duration_Duration__dollar__Dict = (function() {
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

// Data_Time_Duration_Days
$Data_Time_Duration_Days = (function() {
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

// Data_Time_Duration_toDuration
$Data_Time_Duration_toDuration = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->toDuration;
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

// Data_Time_Duration_showSeconds
$Data_Time_Duration_showSeconds = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Time_Duration_append, &$Data_Time_Duration_show) {
  $__body = function($v) use (&$Data_Time_Duration_append, &$Data_Time_Duration_show) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($Data_Time_Duration_append)("(Seconds ", ($Data_Time_Duration_append)(($Data_Time_Duration_show)($n), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Time_Duration_append, &$Data_Time_Duration_show, $__body, &$__fn) {
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

// Data_Time_Duration_showMinutes
$Data_Time_Duration_showMinutes = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Time_Duration_append, &$Data_Time_Duration_show) {
  $__body = function($v) use (&$Data_Time_Duration_append, &$Data_Time_Duration_show) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($Data_Time_Duration_append)("(Minutes ", ($Data_Time_Duration_append)(($Data_Time_Duration_show)($n), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Time_Duration_append, &$Data_Time_Duration_show, $__body, &$__fn) {
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

// Data_Time_Duration_showMilliseconds
$Data_Time_Duration_showMilliseconds = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Time_Duration_append, &$Data_Time_Duration_show) {
  $__body = function($v) use (&$Data_Time_Duration_append, &$Data_Time_Duration_show) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($Data_Time_Duration_append)("(Milliseconds ", ($Data_Time_Duration_append)(($Data_Time_Duration_show)($n), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Time_Duration_append, &$Data_Time_Duration_show, $__body, &$__fn) {
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

// Data_Time_Duration_showHours
$Data_Time_Duration_showHours = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Time_Duration_append, &$Data_Time_Duration_show) {
  $__body = function($v) use (&$Data_Time_Duration_append, &$Data_Time_Duration_show) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($Data_Time_Duration_append)("(Hours ", ($Data_Time_Duration_append)(($Data_Time_Duration_show)($n), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Time_Duration_append, &$Data_Time_Duration_show, $__body, &$__fn) {
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

// Data_Time_Duration_showDays
$Data_Time_Duration_showDays = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Time_Duration_append, &$Data_Time_Duration_show) {
  $__body = function($v) use (&$Data_Time_Duration_append, &$Data_Time_Duration_show) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($Data_Time_Duration_append)("(Days ", ($Data_Time_Duration_append)(($Data_Time_Duration_show)($n), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Time_Duration_append, &$Data_Time_Duration_show, $__body, &$__fn) {
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

// Data_Time_Duration_semigroupSeconds
$Data_Time_Duration_semigroupSeconds = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Time_Duration_Seconds, &$Data_Time_Duration_add) {
  $__body = function($v, $v1) use (&$Data_Time_Duration_Seconds, &$Data_Time_Duration_add) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($Data_Time_Duration_Seconds)(($Data_Time_Duration_add)($x, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Time_Duration_Seconds, &$Data_Time_Duration_add, $__body, &$__fn) {
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

// Data_Time_Duration_semigroupMinutes
$Data_Time_Duration_semigroupMinutes = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Time_Duration_Minutes, &$Data_Time_Duration_add) {
  $__body = function($v, $v1) use (&$Data_Time_Duration_Minutes, &$Data_Time_Duration_add) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($Data_Time_Duration_Minutes)(($Data_Time_Duration_add)($x, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Time_Duration_Minutes, &$Data_Time_Duration_add, $__body, &$__fn) {
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

// Data_Time_Duration_semigroupMilliseconds
$Data_Time_Duration_semigroupMilliseconds = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Time_Duration_Milliseconds, &$Data_Time_Duration_add) {
  $__body = function($v, $v1) use (&$Data_Time_Duration_Milliseconds, &$Data_Time_Duration_add) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($Data_Time_Duration_Milliseconds)(($Data_Time_Duration_add)($x, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Time_Duration_Milliseconds, &$Data_Time_Duration_add, $__body, &$__fn) {
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

// Data_Time_Duration_semigroupHours
$Data_Time_Duration_semigroupHours = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Time_Duration_Hours, &$Data_Time_Duration_add) {
  $__body = function($v, $v1) use (&$Data_Time_Duration_Hours, &$Data_Time_Duration_add) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($Data_Time_Duration_Hours)(($Data_Time_Duration_add)($x, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Time_Duration_Hours, &$Data_Time_Duration_add, $__body, &$__fn) {
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

// Data_Time_Duration_semigroupDays
$Data_Time_Duration_semigroupDays = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Time_Duration_Days, &$Data_Time_Duration_add) {
  $__body = function($v, $v1) use (&$Data_Time_Duration_Days, &$Data_Time_Duration_add) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($Data_Time_Duration_Days)(($Data_Time_Duration_add)($x, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Time_Duration_Days, &$Data_Time_Duration_add, $__body, &$__fn) {
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

// Data_Time_Duration_ordSeconds
$Data_Time_Duration_ordSeconds = $Data_Ord_ordNumber;

// Data_Time_Duration_ordMinutes
$Data_Time_Duration_ordMinutes = $Data_Ord_ordNumber;

// Data_Time_Duration_ordMilliseconds
$Data_Time_Duration_ordMilliseconds = $Data_Ord_ordNumber;

// Data_Time_Duration_ordHours
$Data_Time_Duration_ordHours = $Data_Ord_ordNumber;

// Data_Time_Duration_ordDays
$Data_Time_Duration_ordDays = $Data_Ord_ordNumber;

// Data_Time_Duration_newtypeSeconds
$Data_Time_Duration_newtypeSeconds = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Time_Duration_newtypeMinutes
$Data_Time_Duration_newtypeMinutes = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Time_Duration_newtypeMilliseconds
$Data_Time_Duration_newtypeMilliseconds = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Time_Duration_newtypeHours
$Data_Time_Duration_newtypeHours = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Time_Duration_newtypeDays
$Data_Time_Duration_newtypeDays = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Time_Duration_monoidSeconds
$Data_Time_Duration_monoidSeconds = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Time_Duration_Seconds)(0.0), "Semigroup0" => (function() use (&$Data_Time_Duration_semigroupSeconds) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Duration_semigroupSeconds, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Duration_semigroupSeconds;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_Duration_monoidMinutes
$Data_Time_Duration_monoidMinutes = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Time_Duration_Minutes)(0.0), "Semigroup0" => (function() use (&$Data_Time_Duration_semigroupMinutes) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Duration_semigroupMinutes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Duration_semigroupMinutes;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_Duration_monoidMilliseconds
$Data_Time_Duration_monoidMilliseconds = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Time_Duration_Milliseconds)(0.0), "Semigroup0" => (function() use (&$Data_Time_Duration_semigroupMilliseconds) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Duration_semigroupMilliseconds, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Duration_semigroupMilliseconds;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_Duration_monoidHours
$Data_Time_Duration_monoidHours = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Time_Duration_Hours)(0.0), "Semigroup0" => (function() use (&$Data_Time_Duration_semigroupHours) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Duration_semigroupHours, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Duration_semigroupHours;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_Duration_monoidDays
$Data_Time_Duration_monoidDays = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Time_Duration_Days)(0.0), "Semigroup0" => (function() use (&$Data_Time_Duration_semigroupDays) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Duration_semigroupDays, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Duration_semigroupDays;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_Duration_fromDuration
$Data_Time_Duration_fromDuration = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->fromDuration;
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

// Data_Time_Duration_negateDuration
$Data_Time_Duration_negateDuration = (function() use (&$Data_Time_Duration_compose, &$Data_Time_Duration_toDuration, &$Data_Time_Duration_over, &$Data_Time_Duration_Milliseconds, &$Data_Time_Duration_negate, &$Data_Time_Duration_fromDuration) {
  $__fn = function($dictDuration) use (&$Data_Time_Duration_compose, &$Data_Time_Duration_toDuration, &$Data_Time_Duration_over, &$Data_Time_Duration_Milliseconds, &$Data_Time_Duration_negate, &$Data_Time_Duration_fromDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Duration_compose)(($Data_Time_Duration_toDuration)($dictDuration), ($Data_Time_Duration_compose)(($Data_Time_Duration_over)($Data_Time_Duration_Milliseconds, $Data_Time_Duration_negate), ($Data_Time_Duration_fromDuration)($dictDuration)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_eqSeconds
$Data_Time_Duration_eqSeconds = $Data_Eq_eqNumber;

// Data_Time_Duration_eqMinutes
$Data_Time_Duration_eqMinutes = $Data_Eq_eqNumber;

// Data_Time_Duration_eqMilliseconds
$Data_Time_Duration_eqMilliseconds = $Data_Eq_eqNumber;

// Data_Time_Duration_eqHours
$Data_Time_Duration_eqHours = $Data_Eq_eqNumber;

// Data_Time_Duration_eqDays
$Data_Time_Duration_eqDays = $Data_Eq_eqNumber;

// Data_Time_Duration_durationSeconds
$Data_Time_Duration_durationSeconds = ($Data_Time_Duration_Duration__dollar__Dict)((object)["fromDuration" => ($Data_Time_Duration_over)($Data_Time_Duration_Seconds, (function() use (&$Data_Time_Duration_mul) {
  $__fn = function($v) use (&$Data_Time_Duration_mul, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Duration_mul)($v, 1000.0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), "toDuration" => ($Data_Time_Duration_over)($Data_Time_Duration_Milliseconds, (function() use (&$Data_Time_Duration_div) {
  $__fn = function($v) use (&$Data_Time_Duration_div, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Duration_div)($v, 1000.0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})())]);

// Data_Time_Duration_durationMinutes
$Data_Time_Duration_durationMinutes = ($Data_Time_Duration_Duration__dollar__Dict)((object)["fromDuration" => ($Data_Time_Duration_over)($Data_Time_Duration_Minutes, (function() use (&$Data_Time_Duration_mul) {
  $__fn = function($v) use (&$Data_Time_Duration_mul, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Duration_mul)($v, 60000.0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), "toDuration" => ($Data_Time_Duration_over)($Data_Time_Duration_Milliseconds, (function() use (&$Data_Time_Duration_div) {
  $__fn = function($v) use (&$Data_Time_Duration_div, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Duration_div)($v, 60000.0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})())]);

// Data_Time_Duration_durationMilliseconds
$Data_Time_Duration_durationMilliseconds = ($Data_Time_Duration_Duration__dollar__Dict)((object)["fromDuration" => $Data_Time_Duration_identity, "toDuration" => $Data_Time_Duration_identity]);

// Data_Time_Duration_durationHours
$Data_Time_Duration_durationHours = ($Data_Time_Duration_Duration__dollar__Dict)((object)["fromDuration" => ($Data_Time_Duration_over)($Data_Time_Duration_Hours, (function() use (&$Data_Time_Duration_mul) {
  $__fn = function($v) use (&$Data_Time_Duration_mul, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Duration_mul)($v, 3600000.0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), "toDuration" => ($Data_Time_Duration_over)($Data_Time_Duration_Milliseconds, (function() use (&$Data_Time_Duration_div) {
  $__fn = function($v) use (&$Data_Time_Duration_div, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Duration_div)($v, 3600000.0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})())]);

// Data_Time_Duration_durationDays
$Data_Time_Duration_durationDays = ($Data_Time_Duration_Duration__dollar__Dict)((object)["fromDuration" => ($Data_Time_Duration_over)($Data_Time_Duration_Days, (function() use (&$Data_Time_Duration_mul) {
  $__fn = function($v) use (&$Data_Time_Duration_mul, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Duration_mul)($v, 86400000.0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), "toDuration" => ($Data_Time_Duration_over)($Data_Time_Duration_Milliseconds, (function() use (&$Data_Time_Duration_div) {
  $__fn = function($v) use (&$Data_Time_Duration_div, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Duration_div)($v, 86400000.0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})())]);

// Data_Time_Duration_convertDuration
$Data_Time_Duration_convertDuration = (function() use (&$Data_Time_Duration_fromDuration, &$Data_Time_Duration_compose, &$Data_Time_Duration_toDuration) {
  $__fn = function($dictDuration) use (&$Data_Time_Duration_fromDuration, &$Data_Time_Duration_compose, &$Data_Time_Duration_toDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$fromDuration1 = ($Data_Time_Duration_fromDuration)($dictDuration);
    $__res = (function() use (&$Data_Time_Duration_compose, &$Data_Time_Duration_toDuration, $fromDuration1) {
  $__fn = function($dictDuration1) use (&$Data_Time_Duration_compose, &$Data_Time_Duration_toDuration, $fromDuration1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Duration_compose)(($Data_Time_Duration_toDuration)($dictDuration1), $fromDuration1);
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

