<?php

namespace Data\Time\Component;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time.Component/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Time_Component_append
$Data_Time_Component_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Time_Component_show
$Data_Time_Component_show = ($Data_Show_show)($Data_Show_showInt);

// Data_Time_Component_conj
$Data_Time_Component_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Time_Component_greaterThanOrEq
$Data_Time_Component_greaterThanOrEq = ($Data_Ord_greaterThanOrEq)($Data_Ord_ordInt);

// Data_Time_Component_lessThanOrEq
$Data_Time_Component_lessThanOrEq = ($Data_Ord_lessThanOrEq)($Data_Ord_ordInt);

// Data_Time_Component_compose
$Data_Time_Component_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Time_Component_add
$Data_Time_Component_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Data_Time_Component_sub
$Data_Time_Component_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Data_Time_Component_Second
$Data_Time_Component_Second = (function() {
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

// Data_Time_Component_Minute
$Data_Time_Component_Minute = (function() {
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

// Data_Time_Component_Millisecond
$Data_Time_Component_Millisecond = (function() {
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

// Data_Time_Component_Hour
$Data_Time_Component_Hour = (function() {
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

// Data_Time_Component_showSecond
$Data_Time_Component_showSecond = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Time_Component_append, &$Data_Time_Component_show) {
  $__body = function($v) use (&$Data_Time_Component_append, &$Data_Time_Component_show) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($Data_Time_Component_append)("(Second ", ($Data_Time_Component_append)(($Data_Time_Component_show)($m), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Time_Component_append, &$Data_Time_Component_show, $__body, &$__fn) {
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

// Data_Time_Component_showMinute
$Data_Time_Component_showMinute = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Time_Component_append, &$Data_Time_Component_show) {
  $__body = function($v) use (&$Data_Time_Component_append, &$Data_Time_Component_show) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($Data_Time_Component_append)("(Minute ", ($Data_Time_Component_append)(($Data_Time_Component_show)($m), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Time_Component_append, &$Data_Time_Component_show, $__body, &$__fn) {
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

// Data_Time_Component_showMillisecond
$Data_Time_Component_showMillisecond = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Time_Component_append, &$Data_Time_Component_show) {
  $__body = function($v) use (&$Data_Time_Component_append, &$Data_Time_Component_show) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($Data_Time_Component_append)("(Millisecond ", ($Data_Time_Component_append)(($Data_Time_Component_show)($m), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Time_Component_append, &$Data_Time_Component_show, $__body, &$__fn) {
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

// Data_Time_Component_showHour
$Data_Time_Component_showHour = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Time_Component_append, &$Data_Time_Component_show) {
  $__body = function($v) use (&$Data_Time_Component_append, &$Data_Time_Component_show) {
    $__case_0 = $v;
    if (true) {
$h = $__case_0;
return ($Data_Time_Component_append)("(Hour ", ($Data_Time_Component_append)(($Data_Time_Component_show)($h), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Time_Component_append, &$Data_Time_Component_show, $__body, &$__fn) {
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

// Data_Time_Component_ordSecond
$Data_Time_Component_ordSecond = $Data_Ord_ordInt;

// Data_Time_Component_ordMinute
$Data_Time_Component_ordMinute = $Data_Ord_ordInt;

// Data_Time_Component_ordMillisecond
$Data_Time_Component_ordMillisecond = $Data_Ord_ordInt;

// Data_Time_Component_ordHour
$Data_Time_Component_ordHour = $Data_Ord_ordInt;

// Data_Time_Component_eqSecond
$Data_Time_Component_eqSecond = $Data_Eq_eqInt;

// Data_Time_Component_eqMinute
$Data_Time_Component_eqMinute = $Data_Eq_eqInt;

// Data_Time_Component_eqMillisecond
$Data_Time_Component_eqMillisecond = $Data_Eq_eqInt;

// Data_Time_Component_eqHour
$Data_Time_Component_eqHour = $Data_Eq_eqInt;

// Data_Time_Component_boundedSecond
$Data_Time_Component_boundedSecond = ($Data_Bounded_Bounded__dollar__Dict)((object)["bottom" => ($Data_Time_Component_Second)(0), "top" => ($Data_Time_Component_Second)(59), "Ord0" => (function() use (&$Data_Time_Component_ordSecond) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Component_ordSecond, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Component_ordSecond;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_Component_boundedMinute
$Data_Time_Component_boundedMinute = ($Data_Bounded_Bounded__dollar__Dict)((object)["bottom" => ($Data_Time_Component_Minute)(0), "top" => ($Data_Time_Component_Minute)(59), "Ord0" => (function() use (&$Data_Time_Component_ordMinute) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Component_ordMinute, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Component_ordMinute;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_Component_boundedMillisecond
$Data_Time_Component_boundedMillisecond = ($Data_Bounded_Bounded__dollar__Dict)((object)["bottom" => ($Data_Time_Component_Millisecond)(0), "top" => ($Data_Time_Component_Millisecond)(999), "Ord0" => (function() use (&$Data_Time_Component_ordMillisecond) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Component_ordMillisecond, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Component_ordMillisecond;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_Component_boundedHour
$Data_Time_Component_boundedHour = ($Data_Bounded_Bounded__dollar__Dict)((object)["bottom" => ($Data_Time_Component_Hour)(0), "top" => ($Data_Time_Component_Hour)(23), "Ord0" => (function() use (&$Data_Time_Component_ordHour) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Component_ordHour, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Component_ordHour;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_Component_boundedEnumSecond
$Data_Time_Component_boundedEnumSecond = ($Data_Enum_BoundedEnum__dollar__Dict)((object)["cardinality" => ($Data_Enum_Cardinality)(60), "toEnum" => (function() {
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
})(), "Bounded0" => (function() use (&$Data_Time_Component_boundedSecond) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Component_boundedSecond, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Component_boundedSecond;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Enum1" => (function() use (&$Data_Time_Component_enumSecond) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Component_enumSecond, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Component_enumSecond;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_Component_enumSecond
$Data_Time_Component_enumSecond = ($Data_Enum_Enum__dollar__Dict)((object)["succ" => ($Data_Time_Component_compose)(($Data_Enum_toEnum)($Data_Time_Component_boundedEnumSecond), ($Data_Time_Component_compose)((function() use (&$Data_Time_Component_add) {
  $__fn = function($v) use (&$Data_Time_Component_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Component_add)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Enum_fromEnum)($Data_Time_Component_boundedEnumSecond))), "pred" => ($Data_Time_Component_compose)(($Data_Enum_toEnum)($Data_Time_Component_boundedEnumSecond), ($Data_Time_Component_compose)((function() use (&$Data_Time_Component_sub) {
  $__fn = function($v) use (&$Data_Time_Component_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Component_sub)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Enum_fromEnum)($Data_Time_Component_boundedEnumSecond))), "Ord0" => (function() use (&$Data_Time_Component_ordSecond) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Component_ordSecond, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Component_ordSecond;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_Component_boundedEnumMinute
$Data_Time_Component_boundedEnumMinute = ($Data_Enum_BoundedEnum__dollar__Dict)((object)["cardinality" => ($Data_Enum_Cardinality)(60), "toEnum" => (function() {
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
})(), "Bounded0" => (function() use (&$Data_Time_Component_boundedMinute) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Component_boundedMinute, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Component_boundedMinute;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Enum1" => (function() use (&$Data_Time_Component_enumMinute) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Component_enumMinute, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Component_enumMinute;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_Component_enumMinute
$Data_Time_Component_enumMinute = ($Data_Enum_Enum__dollar__Dict)((object)["succ" => ($Data_Time_Component_compose)(($Data_Enum_toEnum)($Data_Time_Component_boundedEnumMinute), ($Data_Time_Component_compose)((function() use (&$Data_Time_Component_add) {
  $__fn = function($v) use (&$Data_Time_Component_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Component_add)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Enum_fromEnum)($Data_Time_Component_boundedEnumMinute))), "pred" => ($Data_Time_Component_compose)(($Data_Enum_toEnum)($Data_Time_Component_boundedEnumMinute), ($Data_Time_Component_compose)((function() use (&$Data_Time_Component_sub) {
  $__fn = function($v) use (&$Data_Time_Component_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Component_sub)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Enum_fromEnum)($Data_Time_Component_boundedEnumMinute))), "Ord0" => (function() use (&$Data_Time_Component_ordMinute) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Component_ordMinute, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Component_ordMinute;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_Component_boundedEnumMillisecond
$Data_Time_Component_boundedEnumMillisecond = ($Data_Enum_BoundedEnum__dollar__Dict)((object)["cardinality" => ($Data_Enum_Cardinality)(1000), "toEnum" => (function() {
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
})(), "Bounded0" => (function() use (&$Data_Time_Component_boundedMillisecond) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Component_boundedMillisecond, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Component_boundedMillisecond;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Enum1" => (function() use (&$Data_Time_Component_enumMillisecond) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Component_enumMillisecond, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Component_enumMillisecond;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_Component_enumMillisecond
$Data_Time_Component_enumMillisecond = ($Data_Enum_Enum__dollar__Dict)((object)["succ" => ($Data_Time_Component_compose)(($Data_Enum_toEnum)($Data_Time_Component_boundedEnumMillisecond), ($Data_Time_Component_compose)((function() use (&$Data_Time_Component_add) {
  $__fn = function($v) use (&$Data_Time_Component_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Component_add)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Enum_fromEnum)($Data_Time_Component_boundedEnumMillisecond))), "pred" => ($Data_Time_Component_compose)(($Data_Enum_toEnum)($Data_Time_Component_boundedEnumMillisecond), ($Data_Time_Component_compose)((function() use (&$Data_Time_Component_sub) {
  $__fn = function($v) use (&$Data_Time_Component_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Component_sub)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Enum_fromEnum)($Data_Time_Component_boundedEnumMillisecond))), "Ord0" => (function() use (&$Data_Time_Component_ordMillisecond) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Component_ordMillisecond, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Component_ordMillisecond;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_Component_boundedEnumHour
$Data_Time_Component_boundedEnumHour = ($Data_Enum_BoundedEnum__dollar__Dict)((object)["cardinality" => ($Data_Enum_Cardinality)(24), "toEnum" => (function() {
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
})(), "Bounded0" => (function() use (&$Data_Time_Component_boundedHour) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Component_boundedHour, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Component_boundedHour;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Enum1" => (function() use (&$Data_Time_Component_enumHour) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Component_enumHour, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Component_enumHour;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_Component_enumHour
$Data_Time_Component_enumHour = ($Data_Enum_Enum__dollar__Dict)((object)["succ" => ($Data_Time_Component_compose)(($Data_Enum_toEnum)($Data_Time_Component_boundedEnumHour), ($Data_Time_Component_compose)((function() use (&$Data_Time_Component_add) {
  $__fn = function($v) use (&$Data_Time_Component_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Component_add)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Enum_fromEnum)($Data_Time_Component_boundedEnumHour))), "pred" => ($Data_Time_Component_compose)(($Data_Enum_toEnum)($Data_Time_Component_boundedEnumHour), ($Data_Time_Component_compose)((function() use (&$Data_Time_Component_sub) {
  $__fn = function($v) use (&$Data_Time_Component_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Component_sub)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Enum_fromEnum)($Data_Time_Component_boundedEnumHour))), "Ord0" => (function() use (&$Data_Time_Component_ordHour) {
  $__fn = function($__dollar____unused) use (&$Data_Time_Component_ordHour, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_Component_ordHour;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

