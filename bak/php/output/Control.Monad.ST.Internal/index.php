<?php

namespace Control\Monad\ST\Internal;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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
      case 'Control_Monad_ST_Internal_modify__prime__': $v = ($GLOBALS['Control_Monad_ST_Internal_modifyImpl'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_modifyImpl')); break;
      case 'Control_Monad_ST_Internal_functorST': $v = (object)["map" => ($GLOBALS['Control_Monad_ST_Internal_map_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_map_'))]; break;
      case 'Control_Monad_ST_Internal_map': $v = ($GLOBALS['Control_Monad_ST_Internal_map_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_map_')); break;
      case 'Control_Monad_ST_Internal_void': $v = (($GLOBALS['Data_Functor_void'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_void')))(($GLOBALS['Control_Monad_ST_Internal_functorST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_functorST'))); break;
      case 'Control_Monad_ST_Internal_monadST': $v = (object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_ST_Internal_applicativeST = ($GLOBALS['Control_Monad_ST_Internal_applicativeST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_applicativeST'));
    $__res = $__global_Control_Monad_ST_Internal_applicativeST;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_ST_Internal_bindST = ($GLOBALS['Control_Monad_ST_Internal_bindST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bindST'));
    $__res = $__global_Control_Monad_ST_Internal_bindST;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Control_Monad_ST_Internal_bindST': $v = (object)["bind" => ($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bind_')), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_ST_Internal_applyST = ($GLOBALS['Control_Monad_ST_Internal_applyST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_applyST'));
    $__res = $__global_Control_Monad_ST_Internal_applyST;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Control_Monad_ST_Internal_applicativeST': $v = (object)["pure" => ($GLOBALS['Control_Monad_ST_Internal_pure_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_pure_')), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_ST_Internal_applyST = ($GLOBALS['Control_Monad_ST_Internal_applyST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_applyST'));
    $__res = $__global_Control_Monad_ST_Internal_applyST;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Control_Monad_ST_Internal_applyST': $v = (object)["apply" => (($GLOBALS['Control_Monad_ap'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_ap')))(($GLOBALS['Control_Monad_ST_Internal_monadST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_monadST'))), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_ST_Internal_functorST = ($GLOBALS['Control_Monad_ST_Internal_functorST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_functorST'));
    $__res = $__global_Control_Monad_ST_Internal_functorST;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Control_Monad_ST_Internal_lift2': $v = (($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2')))(($GLOBALS['Control_Monad_ST_Internal_applyST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_applyST'))); break;
      case 'Control_Monad_ST_Internal_bind': $v = ($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bind_')); break;
      case 'Control_Monad_ST_Internal_bindFlipped': $v = (($GLOBALS['Control_Bind_bindFlipped'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bindFlipped')))(($GLOBALS['Control_Monad_ST_Internal_bindST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bindST'))); break;
      case 'Control_Monad_ST_Internal_discard': $v = ((($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit')))->discard)(($GLOBALS['Control_Monad_ST_Internal_bindST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bindST'))); break;
      case 'Control_Monad_ST_Internal_pure': $v = ($GLOBALS['Control_Monad_ST_Internal_pure_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_pure_')); break;
      case 'Control_Monad_ST_Internal_monadRecST': $v = (object)["tailRecM" => (function() {
  $__fn = function($f, $a = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_ST_Internal_bind_ = ($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bind_'));
$__global_Control_Monad_ST_Internal_bindFlipped = ($GLOBALS['Control_Monad_ST_Internal_bindFlipped'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bindFlipped'));
$__global_Control_Monad_ST_Internal_new = ($GLOBALS['Control_Monad_ST_Internal_new'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_new'));
$__global_Control_Monad_ST_Internal_discard = ($GLOBALS['Control_Monad_ST_Internal_discard'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_discard'));
$__global_Control_Monad_ST_Internal_while = ($GLOBALS['Control_Monad_ST_Internal_while'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_while'));
$__global_Control_Monad_ST_Internal_map_ = ($GLOBALS['Control_Monad_ST_Internal_map_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_map_'));
$__global_Control_Monad_ST_Internal_read = ($GLOBALS['Control_Monad_ST_Internal_read'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_read'));
$__global_Control_Monad_ST_Internal_void = ($GLOBALS['Control_Monad_ST_Internal_void'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_void'));
$__global_Control_Monad_ST_Internal_write = ($GLOBALS['Control_Monad_ST_Internal_write'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_write'));
$__global_Control_Monad_ST_Internal_pure_ = ($GLOBALS['Control_Monad_ST_Internal_pure_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_pure_'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$isLooping = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Loop":
return true;
break;
default:
return false;
break;
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$fromDone = ($__global_Partial_Unsafe__unsafePartial)((function() use ($__global_Prim_undefined) {
  $__fn = function($__dollar____unused, $v = null) use ($__global_Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ((function() use ($v) {
  $__body = function($__dollar____unused) use ($v) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Done":
$b = ($__case_0)->v0;
return $b;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($__dollar____unused) use ($v, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($__dollar____unused);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Prim_undefined);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    $__res = ($__global_Control_Monad_ST_Internal_bind_)(($__global_Control_Monad_ST_Internal_bindFlipped)($__global_Control_Monad_ST_Internal_new, ($f)($a)), (function() use ($__global_Control_Monad_ST_Internal_discard, $__global_Control_Monad_ST_Internal_while, $__global_Control_Monad_ST_Internal_map_, $isLooping, $__global_Control_Monad_ST_Internal_read, $__global_Control_Monad_ST_Internal_bind_, $f, $__global_Control_Monad_ST_Internal_void, $__global_Control_Monad_ST_Internal_write, $__global_Control_Monad_ST_Internal_pure_, $__global_Data_Unit_unit, $fromDone) {
  $__fn = function($r) use ($__global_Control_Monad_ST_Internal_discard, $__global_Control_Monad_ST_Internal_while, $__global_Control_Monad_ST_Internal_map_, $isLooping, $__global_Control_Monad_ST_Internal_read, $__global_Control_Monad_ST_Internal_bind_, $f, $__global_Control_Monad_ST_Internal_void, $__global_Control_Monad_ST_Internal_write, $__global_Control_Monad_ST_Internal_pure_, $__global_Data_Unit_unit, $fromDone, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_ST_Internal_discard)(($__global_Control_Monad_ST_Internal_while)(($__global_Control_Monad_ST_Internal_map_)($isLooping, ($__global_Control_Monad_ST_Internal_read)($r)), ($__global_Control_Monad_ST_Internal_bind_)(($__global_Control_Monad_ST_Internal_read)($r), (function() use ($__global_Control_Monad_ST_Internal_bind_, $f, $__global_Control_Monad_ST_Internal_void, $__global_Control_Monad_ST_Internal_write, $r, $__global_Control_Monad_ST_Internal_pure_, $__global_Data_Unit_unit) {
  $__body = function($v) use ($__global_Control_Monad_ST_Internal_bind_, $f, $__global_Control_Monad_ST_Internal_void, $__global_Control_Monad_ST_Internal_write, $r, $__global_Control_Monad_ST_Internal_pure_, $__global_Data_Unit_unit) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Loop":
$a__prime__ = ($__case_0)->v0;
return ($__global_Control_Monad_ST_Internal_bind_)(($f)($a__prime__), (function() use ($__global_Control_Monad_ST_Internal_void, $__global_Control_Monad_ST_Internal_write, $r) {
  $__fn = function($e) use ($__global_Control_Monad_ST_Internal_void, $__global_Control_Monad_ST_Internal_write, $r, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_ST_Internal_void)(($__global_Control_Monad_ST_Internal_write)($e, $r));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
case "Done":
return ($__global_Control_Monad_ST_Internal_pure_)($__global_Data_Unit_unit);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Control_Monad_ST_Internal_bind_, $f, $__global_Control_Monad_ST_Internal_void, $__global_Control_Monad_ST_Internal_write, $r, $__global_Control_Monad_ST_Internal_pure_, $__global_Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), (function() use ($__global_Control_Monad_ST_Internal_map_, $fromDone, $__global_Control_Monad_ST_Internal_read, $r) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_ST_Internal_map_, $fromDone, $__global_Control_Monad_ST_Internal_read, $r, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_ST_Internal_map_)($fromDone, ($__global_Control_Monad_ST_Internal_read)($r));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_ST_Internal_monadST = ($GLOBALS['Control_Monad_ST_Internal_monadST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_monadST'));
    $__res = $__global_Control_Monad_ST_Internal_monadST;
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
$Control_Monad_ST_Internal_map_ = function($f, $a = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Internal_map_;
            return $Control_Monad_ST_Internal_map_(...array_merge($__args, $more));
        };
    }
    return function() use(&$f, &$a) { return $f($a()); };
};
$Control_Monad_ST_Internal_bind_ = function($a, $f = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Internal_bind_;
            return $Control_Monad_ST_Internal_bind_(...array_merge($__args, $more));
        };
    }
    return function() use(&$a, &$f) { return $f($a())(); };
};
$Control_Monad_ST_Internal_pure_ = function($a) { return function() use(&$a) { return $a; }; };
$Control_Monad_ST_Internal_new = function($val) { return function() use(&$val) { return (object)['value' => $val]; }; };
$Control_Monad_ST_Internal_read = function($ref) { return function() use(&$ref) { return $ref->value; }; };
$Control_Monad_ST_Internal_modifyImpl = function($f, $ref = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Internal_modifyImpl;
            return $Control_Monad_ST_Internal_modifyImpl(...array_merge($__args, $more));
        };
    }
    return function() use(&$f, &$ref) { $t = $f($ref->value); $ref->value = $t->state; return $t->value; };
};
$Control_Monad_ST_Internal_write = function($val, $ref = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Internal_write;
            return $Control_Monad_ST_Internal_write(...array_merge($__args, $more));
        };
    }
    return function() use(&$val, &$ref) { $ref->value = $val; return $val; };
};
$Control_Monad_ST_Internal_run = function($f) { return $f(); };
$Control_Monad_ST_Internal_while = function($f, $a = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Internal_while;
            return $Control_Monad_ST_Internal_while(...array_merge($__args, $more));
        };
    }
    return function() use(&$f, &$a) { while ($f()) { $a(); } return null; };
};
$Control_Monad_ST_Internal_for = function($lo, $hi = null, $f = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Internal_for;
            return $Control_Monad_ST_Internal_for(...array_merge($__args, $more));
        };
    }
    return function() use(&$lo, &$hi, &$f) { for ($i = $lo; $i < $hi; $i++) { $f($i)(); } return null; };
};
$Control_Monad_ST_Internal_foreach = function($as, $f = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Internal_foreach;
            return $Control_Monad_ST_Internal_foreach(...array_merge($__args, $more));
        };
    }
    return function() use(&$as, &$f) { foreach ($as as $a) { $f($a)(); } return null; };
};


// Control_Monad_ST_Internal_modify
function Control_Monad_ST_Internal_modify($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_ST_Internal_modify';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_ST_Internal_modifyImpl = ($GLOBALS['Control_Monad_ST_Internal_modifyImpl'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_modifyImpl'));
    $__res = ($__global_Control_Monad_ST_Internal_modifyImpl)((function() use ($f) {
  $__fn = function($s) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$s__prime__ = ($f)($s);
    $__res = (object)["state" => $s__prime__, "value" => $s__prime__];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_ST_Internal_modify'] = __NAMESPACE__ . '\\Control_Monad_ST_Internal_modify';













// Control_Monad_ST_Internal_semigroupST
function Control_Monad_ST_Internal_semigroupST($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_ST_Internal_semigroupST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_ST_Internal_lift2 = ($GLOBALS['Control_Monad_ST_Internal_lift2'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_lift2'));
    $__res = (object)["append" => ($__global_Control_Monad_ST_Internal_lift2)(($dictSemigroup)->append)];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_ST_Internal_semigroupST'] = __NAMESPACE__ . '\\Control_Monad_ST_Internal_semigroupST';


// Control_Monad_ST_Internal_monoidST
function Control_Monad_ST_Internal_monoidST($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_ST_Internal_monoidST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_ST_Internal_semigroupST = ($GLOBALS['Control_Monad_ST_Internal_semigroupST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_semigroupST'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Control_Monad_ST_Internal_pure_ = ($GLOBALS['Control_Monad_ST_Internal_pure_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_pure_'));
$semigroupST1 = ($__global_Control_Monad_ST_Internal_semigroupST)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
    $__res = (object)["mempty" => ($__global_Control_Monad_ST_Internal_pure_)(($dictMonoid)->mempty), "Semigroup0" => (function() use ($semigroupST1) {
  $__fn = function($__dollar____unused) use ($semigroupST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $semigroupST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_ST_Internal_monoidST'] = __NAMESPACE__ . '\\Control_Monad_ST_Internal_monoidST';

