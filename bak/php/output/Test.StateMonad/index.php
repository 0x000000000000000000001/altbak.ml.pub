<?php

namespace Test\StateMonad;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.StateMonad/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Test_StateMonad_add
$Test_StateMonad_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Test_StateMonad_sub
$Test_StateMonad_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Test_StateMonad_State
$Test_StateMonad_State = (function() {
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

// Test_StateMonad_runState
$Test_StateMonad_runState = (function() {
  $__body = function($v, $s) {
    $__case_0 = $v;
    $__case_1 = $s;
    if (true) {
$f = $__case_0;
$s1 = $__case_1;
return ($f)($s1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $s = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $s);
  };
  return $__fn;
})();

// Test_StateMonad_put
$Test_StateMonad_put = (function() use (&$Test_StateMonad_State, &$Data_Unit_unit) {
  $__fn = function($s) use (&$Test_StateMonad_State, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_StateMonad_State)((function() use (&$Data_Unit_unit, $s) {
  $__fn = function($v) use (&$Data_Unit_unit, $s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["val" => $Data_Unit_unit, "state" => $s];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_StateMonad_pureState
$Test_StateMonad_pureState = (function() use (&$Test_StateMonad_State) {
  $__fn = function($a) use (&$Test_StateMonad_State, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_StateMonad_State)((function() use ($a) {
  $__fn = function($s) use ($a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["val" => $a, "state" => $s];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_StateMonad_get
$Test_StateMonad_get = ($Test_StateMonad_State)((function() {
  $__fn = function($s) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["val" => $s, "state" => $s];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());

// Test_StateMonad_describe
$Test_StateMonad_describe = ($Effect_Console_log)("State Monad (12M Binds, 6k Stack Depth):");

// Test_StateMonad_bindState
$Test_StateMonad_bindState = (function() use (&$Test_StateMonad_State) {
  $__body = function($v, $g) use (&$Test_StateMonad_State) {
    $__case_0 = $v;
    $__case_1 = $g;
    if (true) {
$f = $__case_0;
$g1 = $__case_1;
return ($Test_StateMonad_State)((function() use ($f, $g1) {
  $__body = function($s) use ($f, $g1) {
    $r1 = ($f)($s);
    $v1 = ($g1)(($r1)->val);
    $__case_0 = $v1;
    if (true) {
$g__prime__ = $__case_0;
return ($g__prime__)(($r1)->state);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($s) use ($f, $g1, $__body, &$__fn) {
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
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $g = null) use (&$Test_StateMonad_State, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $g);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $g);
  };
  return $__fn;
})();

// Test_StateMonad_modify
$Test_StateMonad_modify = (function() use (&$Test_StateMonad_bindState, &$Test_StateMonad_get, &$Test_StateMonad_put) {
  $__fn = function($f) use (&$Test_StateMonad_bindState, &$Test_StateMonad_get, &$Test_StateMonad_put, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_StateMonad_bindState)($Test_StateMonad_get, (function() use (&$Test_StateMonad_put, $f) {
  $__fn = function($s) use (&$Test_StateMonad_put, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_StateMonad_put)(($f)($s));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_StateMonad_chainModifications
$Test_StateMonad_chainModifications = (function() use (&$Test_StateMonad_pureState, &$Data_Unit_unit, &$Test_StateMonad_bindState, &$Test_StateMonad_modify, &$Test_StateMonad_add, &$Test_StateMonad_chainModifications, &$Test_StateMonad_sub) {
  $__fn = function($v) use (&$Test_StateMonad_pureState, &$Data_Unit_unit, &$Test_StateMonad_bindState, &$Test_StateMonad_modify, &$Test_StateMonad_add, &$Test_StateMonad_chainModifications, &$Test_StateMonad_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Test_StateMonad_pureState, &$Data_Unit_unit, &$Test_StateMonad_bindState, &$Test_StateMonad_modify, &$Test_StateMonad_add, &$Test_StateMonad_chainModifications, &$Test_StateMonad_sub) {
while (true) {
$__case_0 = $v;
if (($__case_0 === 0)) {
return ($Test_StateMonad_pureState)($Data_Unit_unit);
} else {
;
};
if (true) {
$n = $__case_0;
return ($Test_StateMonad_bindState)(($Test_StateMonad_modify)((function() use (&$Test_StateMonad_add) {
  $__fn = function($x) use (&$Test_StateMonad_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_StateMonad_add)($x, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), (function() use (&$Test_StateMonad_chainModifications, &$Test_StateMonad_sub, $n) {
  $__fn = function($v1) use (&$Test_StateMonad_chainModifications, &$Test_StateMonad_sub, $n, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_StateMonad_chainModifications)(($Test_StateMonad_sub)($n, 1));
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
}
})($v);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_StateMonad_runManyTimes
$Test_StateMonad_runManyTimes = (function() use (&$Test_StateMonad_runManyTimes, &$Test_StateMonad_sub, &$Test_StateMonad_add, &$Test_StateMonad_runState, &$Test_StateMonad_chainModifications) {
  $__fn = function($v, $v1 = null) use (&$Test_StateMonad_runManyTimes, &$Test_StateMonad_sub, &$Test_StateMonad_add, &$Test_StateMonad_runState, &$Test_StateMonad_chainModifications, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Test_StateMonad_runManyTimes, &$Test_StateMonad_sub, &$Test_StateMonad_add, &$Test_StateMonad_runState, &$Test_StateMonad_chainModifications) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (($__case_0 === 0)) {
$acc = $__case_1;
return $acc;
} else {
;
};
if (true) {
$n = $__case_0;
$acc = $__case_1;
$__tco_tmp_0 = ($Test_StateMonad_sub)($n, 1);
$__tco_tmp_1 = ($Test_StateMonad_add)($acc, (($Test_StateMonad_runState)(($Test_StateMonad_chainModifications)(60), 0))->state);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($v, $v1);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_StateMonad_act
$Test_StateMonad_act = ($Effect_Console_logShow)($Data_Show_showInt, ($Test_StateMonad_runManyTimes)(20, 0));

