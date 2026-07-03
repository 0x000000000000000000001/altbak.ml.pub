<?php

namespace Control\Monad\State\Class;

require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_State_Class_MonadState$Dict
$Control_Monad_State_Class_MonadState__dollar__Dict = (function() {
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

// Control_Monad_State_Class_state
$Control_Monad_State_Class_state = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->state;
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

// Control_Monad_State_Class_put
$Control_Monad_State_Class_put = (function() use (&$Control_Monad_State_Class_state, &$Data_Tuple_Tuple, &$Data_Unit_unit) {
  $__fn = function($dictMonadState) use (&$Control_Monad_State_Class_state, &$Data_Tuple_Tuple, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$state1 = ($Control_Monad_State_Class_state)($dictMonadState);
    $__res = (function() use ($state1, &$Data_Tuple_Tuple, &$Data_Unit_unit) {
  $__fn = function($s) use ($state1, &$Data_Tuple_Tuple, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($state1)((function() use (&$Data_Tuple_Tuple, &$Data_Unit_unit, $s) {
  $__fn = function($v) use (&$Data_Tuple_Tuple, &$Data_Unit_unit, $s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($Data_Unit_unit, $s);
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_State_Class_modify_
$Control_Monad_State_Class_modify_ = (function() use (&$Control_Monad_State_Class_state, &$Data_Tuple_Tuple, &$Data_Unit_unit) {
  $__fn = function($dictMonadState) use (&$Control_Monad_State_Class_state, &$Data_Tuple_Tuple, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$state1 = ($Control_Monad_State_Class_state)($dictMonadState);
    $__res = (function() use ($state1, &$Data_Tuple_Tuple, &$Data_Unit_unit) {
  $__fn = function($f) use ($state1, &$Data_Tuple_Tuple, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($state1)((function() use (&$Data_Tuple_Tuple, &$Data_Unit_unit, $f) {
  $__fn = function($s) use (&$Data_Tuple_Tuple, &$Data_Unit_unit, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($Data_Unit_unit, ($f)($s));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_State_Class_modify
$Control_Monad_State_Class_modify = (function() use (&$Control_Monad_State_Class_state, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonadState) use (&$Control_Monad_State_Class_state, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$state1 = ($Control_Monad_State_Class_state)($dictMonadState);
    $__res = (function() use ($state1, &$Data_Tuple_Tuple) {
  $__fn = function($f) use ($state1, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($state1)((function() use ($f, &$Data_Tuple_Tuple) {
  $__fn = function($s) use ($f, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$s__prime__ = ($f)($s);
    $__res = ($Data_Tuple_Tuple)($s__prime__, $s__prime__);
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_State_Class_gets
$Control_Monad_State_Class_gets = (function() use (&$Control_Monad_State_Class_state, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonadState) use (&$Control_Monad_State_Class_state, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$state1 = ($Control_Monad_State_Class_state)($dictMonadState);
    $__res = (function() use ($state1, &$Data_Tuple_Tuple) {
  $__fn = function($f) use ($state1, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($state1)((function() use (&$Data_Tuple_Tuple, $f) {
  $__fn = function($s) use (&$Data_Tuple_Tuple, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)(($f)($s), $s);
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_State_Class_get
$Control_Monad_State_Class_get = (function() use (&$Control_Monad_State_Class_state, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonadState) use (&$Control_Monad_State_Class_state, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_State_Class_state)($dictMonadState, (function() use (&$Data_Tuple_Tuple) {
  $__fn = function($s) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($s, $s);
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

