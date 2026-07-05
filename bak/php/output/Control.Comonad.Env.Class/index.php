<?php

namespace Control\Comonad\Env\Class;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Class/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Store/index.php';
require_once __DIR__ . '/../Control.Comonad.Store.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {
      case 'Control_Comonad_Env_Class_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Control_Comonad_Env_Class_lower': $v = (($GLOBALS['Control_Comonad_Store_Trans_comonadTransStoreT'] ?? \Control\Comonad\Store\Trans\phpurs_eval_thunk('Control_Comonad_Store_Trans_comonadTransStoreT')))->lower; break;
      case 'Control_Comonad_Env_Class_comonadAskTuple': $v = (object)["ask" => ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst')), "Comonad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Tuple_comonadTuple = ($GLOBALS['Data_Tuple_comonadTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_comonadTuple'));
    $__res = $__global_Data_Tuple_comonadTuple;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Control_Comonad_Env_Class_comonadEnvTuple': $v = (object)["local" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$x = ($__case_1)->v0;
$y = ($__case_1)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f1)($x), $y);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ComonadAsk0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Comonad_Env_Class_comonadAskTuple = ($GLOBALS['Control_Comonad_Env_Class_comonadAskTuple'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_comonadAskTuple'));
    $__res = $__global_Control_Comonad_Env_Class_comonadAskTuple;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };




// Control_Comonad_Env_Class_ComonadAsk$Dict
function Control_Comonad_Env_Class_ComonadAsk__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_ComonadAsk__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_ComonadAsk__dollar__Dict'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_ComonadAsk__dollar__Dict';

// Control_Comonad_Env_Class_ComonadEnv$Dict
function Control_Comonad_Env_Class_ComonadEnv__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_ComonadEnv__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_ComonadEnv__dollar__Dict'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_ComonadEnv__dollar__Dict';

// Control_Comonad_Env_Class_local
function Control_Comonad_Env_Class_local($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_local';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->local;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_local'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_local';



// Control_Comonad_Env_Class_comonadAskEnvT
function Control_Comonad_Env_Class_comonadAskEnvT($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_comonadAskEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Comonad_Env_Trans_comonadEnvT = ($GLOBALS['Control_Comonad_Env_Trans_comonadEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_comonadEnvT'));
$__global_Data_Tuple_fst = ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst'));
$comonadEnvT = ($__global_Control_Comonad_Env_Trans_comonadEnvT)($dictComonad);
    $__res = (object)["ask" => (function() use ($__global_Data_Tuple_fst) {
  $__body = function($v) use ($__global_Data_Tuple_fst) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($__global_Data_Tuple_fst)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__global_Data_Tuple_fst, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Comonad0" => (function() use ($comonadEnvT) {
  $__fn = function($__dollar____unused) use ($comonadEnvT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $comonadEnvT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_comonadAskEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_comonadAskEnvT';

// Control_Comonad_Env_Class_comonadEnvEnvT
function Control_Comonad_Env_Class_comonadEnvEnvT($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_comonadEnvEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Comonad_Env_Class_comonadAskEnvT = ($GLOBALS['Control_Comonad_Env_Class_comonadAskEnvT'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_comonadAskEnvT'));
$comonadAskEnvT1 = ($__global_Control_Comonad_Env_Class_comonadAskEnvT)($dictComonad);
    $__res = (object)["local" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
$__case_0 = $x;
switch (($__case_0)->tag) {
case "Tuple":
$y = ($__case_0)->v0;
$z = ($__case_0)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($f1)($y), $z);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ComonadAsk0" => (function() use ($comonadAskEnvT1) {
  $__fn = function($__dollar____unused) use ($comonadAskEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $comonadAskEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_comonadEnvEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_comonadEnvEnvT';

// Control_Comonad_Env_Class_ask
function Control_Comonad_Env_Class_ask($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_ask';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->ask;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_ask'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_ask';

// Control_Comonad_Env_Class_asks
function Control_Comonad_Env_Class_asks($dictComonadAsk) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_asks';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$ask1 = ($dictComonadAsk)->ask;
    $__res = (function() use ($ask1) {
  $__fn = function($f, $x = null) use ($ask1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($f)(($ask1)($x));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_asks'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_asks';

// Control_Comonad_Env_Class_comonadAskStoreT
function Control_Comonad_Env_Class_comonadAskStoreT($dictComonadAsk) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_comonadAskStoreT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Comonad_Store_Trans_comonadStoreT = ($GLOBALS['Control_Comonad_Store_Trans_comonadStoreT'] ?? \Control\Comonad\Store\Trans\phpurs_eval_thunk('Control_Comonad_Store_Trans_comonadStoreT'));
$__global_Control_Comonad_Env_Class_compose = ($GLOBALS['Control_Comonad_Env_Class_compose'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_compose'));
$__global_Control_Comonad_Env_Class_lower = ($GLOBALS['Control_Comonad_Env_Class_lower'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_lower'));
$Comonad0 = (($dictComonadAsk)->Comonad0)($__global_Prim_undefined);
$comonadStoreT = ($__global_Control_Comonad_Store_Trans_comonadStoreT)($Comonad0);
    $__res = (object)["ask" => ($__global_Control_Comonad_Env_Class_compose)(($dictComonadAsk)->ask, ($__global_Control_Comonad_Env_Class_lower)($Comonad0)), "Comonad0" => (function() use ($comonadStoreT) {
  $__fn = function($__dollar____unused) use ($comonadStoreT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $comonadStoreT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_comonadAskStoreT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_comonadAskStoreT';

// Control_Comonad_Env_Class_comonadEnvStoreT
function Control_Comonad_Env_Class_comonadEnvStoreT($dictComonadEnv) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_comonadEnvStoreT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Comonad_Env_Class_comonadAskStoreT = ($GLOBALS['Control_Comonad_Env_Class_comonadAskStoreT'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_comonadAskStoreT'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$local1 = ($dictComonadEnv)->local;
$comonadAskStoreT1 = ($__global_Control_Comonad_Env_Class_comonadAskStoreT)((($dictComonadEnv)->ComonadAsk0)($__global_Prim_undefined));
    $__res = (object)["local" => (function() use ($local1) {
  $__body = function($f, $v) use ($local1) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$w = ($__case_1)->v0;
$s = ($__case_1)->v1;
return ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($local1)($f1, $w), $s);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($local1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ComonadAsk0" => (function() use ($comonadAskStoreT1) {
  $__fn = function($__dollar____unused) use ($comonadAskStoreT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $comonadAskStoreT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_comonadEnvStoreT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_comonadEnvStoreT';

// Control_Comonad_Env_Class_comonadAskTracedT
function Control_Comonad_Env_Class_comonadAskTracedT($dictComonadAsk) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_comonadAskTracedT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Comonad_Traced_Trans_comonadTracedT = ($GLOBALS['Control_Comonad_Traced_Trans_comonadTracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_comonadTracedT'));
$__global_Control_Comonad_Env_Class_compose = ($GLOBALS['Control_Comonad_Env_Class_compose'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_compose'));
$__global_Control_Comonad_Traced_Trans_comonadTransTracedT = ($GLOBALS['Control_Comonad_Traced_Trans_comonadTransTracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_comonadTransTracedT'));
$ask1 = ($dictComonadAsk)->ask;
$Comonad0 = (($dictComonadAsk)->Comonad0)($__global_Prim_undefined);
$comonadTracedT = ($__global_Control_Comonad_Traced_Trans_comonadTracedT)($Comonad0);
    $__res = (function() use ($comonadTracedT, $__global_Control_Comonad_Env_Class_compose, $ask1, $__global_Control_Comonad_Traced_Trans_comonadTransTracedT, &$Comonad0) {
  $__fn = function($dictMonoid) use ($comonadTracedT, $__global_Control_Comonad_Env_Class_compose, $ask1, $__global_Control_Comonad_Traced_Trans_comonadTransTracedT, &$Comonad0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$comonadTracedT1 = ($comonadTracedT)($dictMonoid);
    $__res = (object)["ask" => ($__global_Control_Comonad_Env_Class_compose)($ask1, ((($__global_Control_Comonad_Traced_Trans_comonadTransTracedT)($dictMonoid))->lower)($Comonad0)), "Comonad0" => (function() use ($comonadTracedT1) {
  $__fn = function($__dollar____unused) use ($comonadTracedT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $comonadTracedT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_comonadAskTracedT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_comonadAskTracedT';

// Control_Comonad_Env_Class_comonadEnvTracedT
function Control_Comonad_Env_Class_comonadEnvTracedT($dictComonadEnv) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Class_comonadEnvTracedT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Comonad_Env_Class_comonadAskTracedT = ($GLOBALS['Control_Comonad_Env_Class_comonadAskTracedT'] ?? \Control\Comonad\Env\Class\phpurs_eval_thunk('Control_Comonad_Env_Class_comonadAskTracedT'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$local1 = ($dictComonadEnv)->local;
$comonadAskTracedT1 = ($__global_Control_Comonad_Env_Class_comonadAskTracedT)((($dictComonadEnv)->ComonadAsk0)($__global_Prim_undefined));
    $__res = (function() use ($comonadAskTracedT1, $local1) {
  $__fn = function($dictMonoid) use ($comonadAskTracedT1, $local1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$comonadAskTracedT2 = ($comonadAskTracedT1)($dictMonoid);
    $__res = (object)["local" => (function() use ($local1) {
  $__body = function($f, $v) use ($local1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$w = $__case_1;
return ($local1)($f1, $w);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($local1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ComonadAsk0" => (function() use ($comonadAskTracedT2) {
  $__fn = function($__dollar____unused) use ($comonadAskTracedT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $comonadAskTracedT2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Class_comonadEnvTracedT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Class_comonadEnvTracedT';

