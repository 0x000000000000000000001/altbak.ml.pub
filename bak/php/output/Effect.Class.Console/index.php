<?php

namespace Effect\Class\Console;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Effect.Class.Console/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Effect_Class_Console_compose
$Effect_Class_Console_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Effect_Class_Console_discard
$Effect_Class_Console_discard = ($Control_Bind_discard)($Control_Bind_discardUnit);

// Effect_Class_Console_warnShow
$Effect_Class_Console_warnShow = (function() use (&$Effect_Class_liftEffect, &$Effect_Class_Console_compose, &$Effect_Console_warnShow) {
  $__fn = function($dictMonadEffect) use (&$Effect_Class_liftEffect, &$Effect_Class_Console_compose, &$Effect_Console_warnShow, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$liftEffect = ($Effect_Class_liftEffect)($dictMonadEffect);
    $__res = (function() use (&$Effect_Class_Console_compose, $liftEffect, &$Effect_Console_warnShow) {
  $__fn = function($dictShow) use (&$Effect_Class_Console_compose, $liftEffect, &$Effect_Console_warnShow, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Class_Console_compose)($liftEffect, ($Effect_Console_warnShow)($dictShow));
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

// Effect_Class_Console_warn
$Effect_Class_Console_warn = (function() use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_warn) {
  $__fn = function($dictMonadEffect) use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_warn, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Class_Console_compose)(($Effect_Class_liftEffect)($dictMonadEffect), $Effect_Console_warn);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_timeLog
$Effect_Class_Console_timeLog = (function() use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_timeLog) {
  $__fn = function($dictMonadEffect) use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_timeLog, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Class_Console_compose)(($Effect_Class_liftEffect)($dictMonadEffect), $Effect_Console_timeLog);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_timeEnd
$Effect_Class_Console_timeEnd = (function() use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_timeEnd) {
  $__fn = function($dictMonadEffect) use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_timeEnd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Class_Console_compose)(($Effect_Class_liftEffect)($dictMonadEffect), $Effect_Console_timeEnd);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_time
$Effect_Class_Console_time = (function() use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_time) {
  $__fn = function($dictMonadEffect) use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_time, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Class_Console_compose)(($Effect_Class_liftEffect)($dictMonadEffect), $Effect_Console_time);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_logShow
$Effect_Class_Console_logShow = (function() use (&$Effect_Class_liftEffect, &$Effect_Class_Console_compose, &$Effect_Console_logShow) {
  $__fn = function($dictMonadEffect) use (&$Effect_Class_liftEffect, &$Effect_Class_Console_compose, &$Effect_Console_logShow, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$liftEffect = ($Effect_Class_liftEffect)($dictMonadEffect);
    $__res = (function() use (&$Effect_Class_Console_compose, $liftEffect, &$Effect_Console_logShow) {
  $__fn = function($dictShow) use (&$Effect_Class_Console_compose, $liftEffect, &$Effect_Console_logShow, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Class_Console_compose)($liftEffect, ($Effect_Console_logShow)($dictShow));
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

// Effect_Class_Console_log
$Effect_Class_Console_log = (function() use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_log) {
  $__fn = function($dictMonadEffect) use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_log, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Class_Console_compose)(($Effect_Class_liftEffect)($dictMonadEffect), $Effect_Console_log);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_infoShow
$Effect_Class_Console_infoShow = (function() use (&$Effect_Class_liftEffect, &$Effect_Class_Console_compose, &$Effect_Console_infoShow) {
  $__fn = function($dictMonadEffect) use (&$Effect_Class_liftEffect, &$Effect_Class_Console_compose, &$Effect_Console_infoShow, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$liftEffect = ($Effect_Class_liftEffect)($dictMonadEffect);
    $__res = (function() use (&$Effect_Class_Console_compose, $liftEffect, &$Effect_Console_infoShow) {
  $__fn = function($dictShow) use (&$Effect_Class_Console_compose, $liftEffect, &$Effect_Console_infoShow, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Class_Console_compose)($liftEffect, ($Effect_Console_infoShow)($dictShow));
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

// Effect_Class_Console_info
$Effect_Class_Console_info = (function() use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_info) {
  $__fn = function($dictMonadEffect) use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_info, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Class_Console_compose)(($Effect_Class_liftEffect)($dictMonadEffect), $Effect_Console_info);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_groupEnd
$Effect_Class_Console_groupEnd = (function() use (&$Effect_Class_liftEffect, &$Effect_Console_groupEnd) {
  $__fn = function($dictMonadEffect) use (&$Effect_Class_liftEffect, &$Effect_Console_groupEnd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Class_liftEffect)($dictMonadEffect, $Effect_Console_groupEnd);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_groupCollapsed
$Effect_Class_Console_groupCollapsed = (function() use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_groupCollapsed) {
  $__fn = function($dictMonadEffect) use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_groupCollapsed, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Class_Console_compose)(($Effect_Class_liftEffect)($dictMonadEffect), $Effect_Console_groupCollapsed);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_group
$Effect_Class_Console_group = (function() use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_group) {
  $__fn = function($dictMonadEffect) use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_group, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Class_Console_compose)(($Effect_Class_liftEffect)($dictMonadEffect), $Effect_Console_group);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_grouped
$Effect_Class_Console_grouped = (function() use (&$Prim_undefined, &$Effect_Class_Console_discard, &$Effect_Class_Console_group, &$Control_Bind_bind, &$Effect_Class_Console_groupEnd, &$Control_Applicative_pure) {
  $__fn = function($dictMonadEffect) use (&$Prim_undefined, &$Effect_Class_Console_discard, &$Effect_Class_Console_group, &$Control_Bind_bind, &$Effect_Class_Console_groupEnd, &$Control_Applicative_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadEffect)->Monad0)($Prim_undefined);
$Bind1 = (($Monad0)->Bind1)($Prim_undefined);
$discard1 = ($Effect_Class_Console_discard)($Bind1);
$group1 = ($Effect_Class_Console_group)($dictMonadEffect);
$bind = ($Control_Bind_bind)($Bind1);
$groupEnd1 = ($Effect_Class_Console_groupEnd)($dictMonadEffect);
$pure = ($Control_Applicative_pure)((($Monad0)->Applicative0)($Prim_undefined));
    $__res = (function() use ($discard1, $group1, $bind, $groupEnd1, $pure) {
  $__fn = function($name, $inner = null) use ($discard1, $group1, $bind, $groupEnd1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($discard1)(($group1)($name), (function() use ($bind, $inner, $discard1, $groupEnd1, $pure) {
  $__fn = function($__dollar____unused) use ($bind, $inner, $discard1, $groupEnd1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)($inner, (function() use ($discard1, $groupEnd1, $pure) {
  $__fn = function($result) use ($discard1, $groupEnd1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($discard1)($groupEnd1, (function() use ($pure, $result) {
  $__fn = function($__dollar____unused) use ($pure, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)($result);
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
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
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

// Effect_Class_Console_errorShow
$Effect_Class_Console_errorShow = (function() use (&$Effect_Class_liftEffect, &$Effect_Class_Console_compose, &$Effect_Console_errorShow) {
  $__fn = function($dictMonadEffect) use (&$Effect_Class_liftEffect, &$Effect_Class_Console_compose, &$Effect_Console_errorShow, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$liftEffect = ($Effect_Class_liftEffect)($dictMonadEffect);
    $__res = (function() use (&$Effect_Class_Console_compose, $liftEffect, &$Effect_Console_errorShow) {
  $__fn = function($dictShow) use (&$Effect_Class_Console_compose, $liftEffect, &$Effect_Console_errorShow, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Class_Console_compose)($liftEffect, ($Effect_Console_errorShow)($dictShow));
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

// Effect_Class_Console_error
$Effect_Class_Console_error = (function() use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_error) {
  $__fn = function($dictMonadEffect) use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_error, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Class_Console_compose)(($Effect_Class_liftEffect)($dictMonadEffect), $Effect_Console_error);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_debugShow
$Effect_Class_Console_debugShow = (function() use (&$Effect_Class_liftEffect, &$Effect_Class_Console_compose, &$Effect_Console_debugShow) {
  $__fn = function($dictMonadEffect) use (&$Effect_Class_liftEffect, &$Effect_Class_Console_compose, &$Effect_Console_debugShow, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$liftEffect = ($Effect_Class_liftEffect)($dictMonadEffect);
    $__res = (function() use (&$Effect_Class_Console_compose, $liftEffect, &$Effect_Console_debugShow) {
  $__fn = function($dictShow) use (&$Effect_Class_Console_compose, $liftEffect, &$Effect_Console_debugShow, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Class_Console_compose)($liftEffect, ($Effect_Console_debugShow)($dictShow));
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

// Effect_Class_Console_debug
$Effect_Class_Console_debug = (function() use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_debug) {
  $__fn = function($dictMonadEffect) use (&$Effect_Class_Console_compose, &$Effect_Class_liftEffect, &$Effect_Console_debug, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Class_Console_compose)(($Effect_Class_liftEffect)($dictMonadEffect), $Effect_Console_debug);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_clear
$Effect_Class_Console_clear = (function() use (&$Effect_Class_liftEffect, &$Effect_Console_clear) {
  $__fn = function($dictMonadEffect) use (&$Effect_Class_liftEffect, &$Effect_Console_clear, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Class_liftEffect)($dictMonadEffect, $Effect_Console_clear);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

