<?php

namespace Control\Monad\Rec\Class;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Ref/index.php';
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
      case 'Control_Monad_Rec_Class_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Control_Monad_Rec_Class_bind': $v = ($GLOBALS['Effect_bindE'] ?? \Effect\phpurs_eval_thunk('Effect_bindE')); break;
      case 'Control_Monad_Rec_Class_bindFlipped': $v = (($GLOBALS['Control_Bind_bindFlipped'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bindFlipped')))(($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect'))); break;
      case 'Control_Monad_Rec_Class_discard': $v = ((($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit')))->discard)(($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect'))); break;
      case 'Control_Monad_Rec_Class_pure': $v = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE')); break;
      case 'Control_Monad_Rec_Class_map': $v = (($GLOBALS['Effect_functorEffect'] ?? \Effect\phpurs_eval_thunk('Effect_functorEffect')))->map; break;
      case 'Control_Monad_Rec_Class_monadRecMaybe': $v = (object)["tailRecM" => (function() {
  $__fn = function($f, $a0 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a0) use ($f, &$__fn) { return $__fn($f, $a0); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Control_Monad_Rec_Class_tailRec = ($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec'));
$g = (function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Loop"))) {
$a = (($__case_0)->v0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($f)($a));
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Done"))) {
$b = (($__case_0)->v0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Just", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($b));
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Control_Monad_Rec_Class_tailRec)($g, ($f)($a0));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Maybe_monadMaybe = ($GLOBALS['Data_Maybe_monadMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_monadMaybe'));
    $__res = $__global_Data_Maybe_monadMaybe;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Control_Monad_Rec_Class_monadRecIdentity': $v = (object)["tailRecM" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Rec_Class_compose = ($GLOBALS['Control_Monad_Rec_Class_compose'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_compose'));
$__global_Data_Identity_Identity = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity'));
$__global_Control_Monad_Rec_Class_tailRec = ($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec'));
$runIdentity = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return $x;
} else {
throw new \Exception("Pattern match failure");
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
    $__res = ($__global_Control_Monad_Rec_Class_compose)($__global_Data_Identity_Identity, ($__global_Control_Monad_Rec_Class_tailRec)(($__global_Control_Monad_Rec_Class_compose)($runIdentity, $f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Identity_monadIdentity = ($GLOBALS['Data_Identity_monadIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_monadIdentity'));
    $__res = $__global_Data_Identity_monadIdentity;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Control_Monad_Rec_Class_monadRecFunction': $v = (object)["tailRecM" => (function() {
  $__fn = function($f, $a0 = null, $e = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($e) use ($f, $a0, &$__fn) { return $__fn($f, $a0, $e); };
    if ($__num === 1) return function($a0, $e = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a0, $e);
      if ($__num2 === 1) return function($e) use ($f, $a0, &$__fn) { return $__fn($f, $a0, $e); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Control_Monad_Rec_Class_tailRec = ($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec'));
    $__res = ($__global_Control_Monad_Rec_Class_tailRec)((function() use ($f, $e) {
  $__fn = function($a) use ($f, $e, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)($a, $e);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $a0);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_monadFn = ($GLOBALS['Control_Monad_monadFn'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_monadFn'));
    $__res = $__global_Control_Monad_monadFn;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Control_Monad_Rec_Class_monadRecEither': $v = (object)["tailRecM" => (function() {
  $__fn = function($f, $a0 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a0) use ($f, &$__fn) { return $__fn($f, $a0); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Control_Monad_Rec_Class_tailRec = ($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec'));
$g = (function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Left")) {
$e = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($e));
} else {
if (((($__case_0)->tag === "Right") && ((($__case_0)->v0)->tag === "Loop"))) {
$a = (($__case_0)->v0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($f)($a));
} else {
if (((($__case_0)->tag === "Right") && ((($__case_0)->v0)->tag === "Done"))) {
$b = (($__case_0)->v0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($b));
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Control_Monad_Rec_Class_tailRec)($g, ($f)($a0));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Either_monadEither = ($GLOBALS['Data_Either_monadEither'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_monadEither'));
    $__res = $__global_Data_Either_monadEither;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Control_Monad_Rec_Class_monadRecEffect': $v = (object)["tailRecM" => (function() {
  $__fn = function($f, $a = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Effect_bindE = ($GLOBALS['Effect_bindE'] ?? \Effect\phpurs_eval_thunk('Effect_bindE'));
$__global_Control_Monad_Rec_Class_bindFlipped = ($GLOBALS['Control_Monad_Rec_Class_bindFlipped'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_bindFlipped'));
$__global_Effect_Ref__new = ($GLOBALS['Effect_Ref__new'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref__new'));
$__global_Control_Monad_Rec_Class_discard = ($GLOBALS['Control_Monad_Rec_Class_discard'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_discard'));
$__global_Effect_untilE = ($GLOBALS['Effect_untilE'] ?? \Effect\phpurs_eval_thunk('Effect_untilE'));
$__global_Effect_Ref_read = ($GLOBALS['Effect_Ref_read'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_read'));
$__global_Effect_Ref_write = ($GLOBALS['Effect_Ref_write'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_write'));
$__global_Effect_pureE = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE'));
$__global_Control_Monad_Rec_Class_map = ($GLOBALS['Control_Monad_Rec_Class_map'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_map'));
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
    $__res = ($__global_Effect_bindE)(($__global_Control_Monad_Rec_Class_bindFlipped)($__global_Effect_Ref__new, ($f)($a)), (function() use ($__global_Control_Monad_Rec_Class_discard, $__global_Effect_untilE, $__global_Effect_bindE, $__global_Effect_Ref_read, $f, $__global_Effect_Ref_write, $__global_Effect_pureE, $__global_Control_Monad_Rec_Class_map, $fromDone) {
  $__fn = function($r) use ($__global_Control_Monad_Rec_Class_discard, $__global_Effect_untilE, $__global_Effect_bindE, $__global_Effect_Ref_read, $f, $__global_Effect_Ref_write, $__global_Effect_pureE, $__global_Control_Monad_Rec_Class_map, $fromDone, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Rec_Class_discard)(($__global_Effect_untilE)(($__global_Effect_bindE)(($__global_Effect_Ref_read)($r), (function() use ($__global_Effect_bindE, $f, $__global_Effect_Ref_write, $r, $__global_Effect_pureE) {
  $__body = function($v) use ($__global_Effect_bindE, $f, $__global_Effect_Ref_write, $r, $__global_Effect_pureE) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Loop":
$a__prime__ = ($__case_0)->v0;
return ($__global_Effect_bindE)(($f)($a__prime__), (function() use ($__global_Effect_bindE, $__global_Effect_Ref_write, $r, $__global_Effect_pureE) {
  $__fn = function($e) use ($__global_Effect_bindE, $__global_Effect_Ref_write, $r, $__global_Effect_pureE, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_bindE)(($__global_Effect_Ref_write)($e, $r), (function() use ($__global_Effect_pureE) {
  $__fn = function($__dollar____unused) use ($__global_Effect_pureE, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_pureE)(false);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
case "Done":
return ($__global_Effect_pureE)(true);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($__global_Effect_bindE, $f, $__global_Effect_Ref_write, $r, $__global_Effect_pureE, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), (function() use ($__global_Control_Monad_Rec_Class_map, $fromDone, $__global_Effect_Ref_read, $r) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_Rec_Class_map, $fromDone, $__global_Effect_Ref_read, $r, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_Rec_Class_map)($fromDone, ($__global_Effect_Ref_read)($r));
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
$__global_Effect_monadEffect = ($GLOBALS['Effect_monadEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monadEffect'));
    $__res = $__global_Effect_monadEffect;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Control_Monad_Rec_Class_functorStep': $v = (object)["map" => (function() {
  $__body = function($f, $m) {
    $__case_0 = $m;
    switch (($__case_0)->tag) {
case "Loop":
$v = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($v);
break;
case "Done":
$v = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($f)($v));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $m = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($f, &$__fn) { return $__fn($f, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Control_Monad_Rec_Class_bifunctorStep': $v = (object)["bimap" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "Loop":
$f = $__case_0;
$a = ($__case_2)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($f)($a));
break;
case "Done":
$g = $__case_1;
$b = ($__case_2)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($g)($b));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $v1, $v2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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








// Control_Monad_Rec_Class_Loop
function Control_Monad_Rec_Class_Loop($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_Loop';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_Loop'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_Loop';

// Control_Monad_Rec_Class_Done
function Control_Monad_Rec_Class_Done($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_Done';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_Done'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_Done';

// Control_Monad_Rec_Class_MonadRec$Dict
function Control_Monad_Rec_Class_MonadRec__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_MonadRec__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_MonadRec__dollar__Dict';

// Control_Monad_Rec_Class_tailRecM
function Control_Monad_Rec_Class_tailRecM($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_tailRecM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->tailRecM;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRecM'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_tailRecM';

// Control_Monad_Rec_Class_tailRecM2
function Control_Monad_Rec_Class_tailRecM2($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_tailRecM2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$tailRecM1 = ($dictMonadRec)->tailRecM;
    $__res = (function() use ($tailRecM1) {
  $__fn = function($f, $a = null, $b = null) use ($tailRecM1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
    if ($__num === 1) return function($a, $b = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b);
      if ($__num2 === 1) return function($b) use ($f, $a, &$__fn) { return $__fn($f, $a, $b); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($tailRecM1)((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)(($o)->a, ($o)->b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b]);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRecM2'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_tailRecM2';

// Control_Monad_Rec_Class_tailRecM3
function Control_Monad_Rec_Class_tailRecM3($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_tailRecM3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$tailRecM1 = ($dictMonadRec)->tailRecM;
    $__res = (function() use ($tailRecM1) {
  $__fn = function($f, $a = null, $b = null, $c = null) use ($tailRecM1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($c) use ($f, $a, $b, &$__fn) { return $__fn($f, $a, $b, $c); };
    if ($__num === 2) return function($b, $c = null) use ($f, $a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b, $c);
      if ($__num2 === 1) return function($c) use ($f, $a, $b, &$__fn) { return $__fn($f, $a, $b, $c); };
      return phpurs_curry_fallback($__fn, [$f, $a], 4);
    };
    if ($__num === 1) return function($a, $b = null, $c = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $a, $b, $c);
      if ($__num2 === 2) return function($c) use ($f, $a, $b, &$__fn) { return $__fn($f, $a, $b, $c); };
      if ($__num2 === 1) return function($b, $c = null) use ($f, $a, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $a, $b, $c);
        if ($__num3 === 1) return function($c) use ($f, $a, $b, &$__fn) { return $__fn($f, $a, $b, $c); };
        return phpurs_curry_fallback($__fn, [$f, $a], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
    $__res = ($tailRecM1)((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)(($o)->a, ($o)->b, ($o)->c);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b, "c" => $c]);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRecM3'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_tailRecM3';

// Control_Monad_Rec_Class_untilJust
function Control_Monad_Rec_Class_untilJust($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_untilJust';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_mapFlipped'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$tailRecM1 = ($dictMonadRec)->tailRecM;
$mapFlipped = ($__global_Data_Functor_mapFlipped)((((((((($dictMonadRec)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
    $__res = (function() use ($tailRecM1, $mapFlipped, $__global_Data_Unit_unit) {
  $__fn = function($m) use ($tailRecM1, $mapFlipped, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($tailRecM1)((function() use ($mapFlipped, $m, $__global_Data_Unit_unit) {
  $__fn = function($v) use ($mapFlipped, $m, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($mapFlipped)($m, (function() use ($__global_Data_Unit_unit) {
  $__body = function($v1) use ($__global_Data_Unit_unit) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($__global_Data_Unit_unit);
break;
case "Just":
$x = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($__global_Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $__global_Data_Unit_unit);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_untilJust'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_untilJust';

// Control_Monad_Rec_Class_whileJust
function Control_Monad_Rec_Class_whileJust($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_whileJust';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Functor_mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_mapFlipped'));
$append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
$mempty = ($dictMonoid)->mempty;
    $__res = (function() use ($__global_Data_Functor_mapFlipped, $__global_Prim_undefined, $append, $mempty) {
  $__fn = function($dictMonadRec) use ($__global_Data_Functor_mapFlipped, $__global_Prim_undefined, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$tailRecM1 = ($dictMonadRec)->tailRecM;
$mapFlipped = ($__global_Data_Functor_mapFlipped)((((((((($dictMonadRec)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
    $__res = (function() use ($tailRecM1, $mapFlipped, $append, $mempty) {
  $__fn = function($m) use ($tailRecM1, $mapFlipped, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($tailRecM1)((function() use ($mapFlipped, $m, $append) {
  $__fn = function($v) use ($mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($mapFlipped)($m, (function() use ($v, $append) {
  $__body = function($v1) use ($v, $append) {
    $__case_0 = $v1;
    switch (($__case_0)->tag) {
case "Nothing":
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Done", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($v);
break;
case "Just":
$x = ($__case_0)->v0;
return ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($append)($v, $x));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v1) use ($v, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $mempty);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_whileJust'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_whileJust';

// Control_Monad_Rec_Class_tailRec
function Control_Monad_Rec_Class_tailRec($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_tailRec';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_Rec_Class_compose = ($GLOBALS['Control_Monad_Rec_Class_compose'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_compose'));
$go = (function() use (&$go, $f) {
  $__fn = function($v) use (&$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Loop":
$a = ($__case_0)->v0;
$__tco_tmp_0 = ($f)($a);
$v = $__tco_tmp_0;
continue 2;
break;
case "Done":
$b = ($__case_0)->v0;
return $b;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Control_Monad_Rec_Class_compose)($go, $f);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRec'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_tailRec';

// Control_Monad_Rec_Class_tailRec2
function Control_Monad_Rec_Class_tailRec2($f, $a = null, $b = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_tailRec2';
  if ($__num < 3) {
    if ($__num === 2) return function($b) use ($f, $a, $__fn) { return $__fn($f, $a, $b); };
    if ($__num === 1) return function($a, $b = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b);
      if ($__num2 === 1) return function($b) use ($f, $a, $__fn) { return $__fn($f, $a, $b); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Control_Monad_Rec_Class_tailRec = ($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec'));
    $__res = ($__global_Control_Monad_Rec_Class_tailRec)((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)(($o)->a, ($o)->b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b]);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRec2'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_tailRec2';

// Control_Monad_Rec_Class_tailRec3
function Control_Monad_Rec_Class_tailRec3($f, $a = null, $b = null, $c = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_tailRec3';
  if ($__num < 4) {
    if ($__num === 3) return function($c) use ($f, $a, $b, $__fn) { return $__fn($f, $a, $b, $c); };
    if ($__num === 2) return function($b, $c = null) use ($f, $a, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $b, $c);
      if ($__num2 === 1) return function($c) use ($f, $a, $b, $__fn) { return $__fn($f, $a, $b, $c); };
      return phpurs_curry_fallback($__fn, [$f, $a], 4);
    };
    if ($__num === 1) return function($a, $b = null, $c = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $a, $b, $c);
      if ($__num2 === 2) return function($c) use ($f, $a, $b, $__fn) { return $__fn($f, $a, $b, $c); };
      if ($__num2 === 1) return function($b, $c = null) use ($f, $a, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $a, $b, $c);
        if ($__num3 === 1) return function($c) use ($f, $a, $b, $__fn) { return $__fn($f, $a, $b, $c); };
        return phpurs_curry_fallback($__fn, [$f, $a], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
$__global_Control_Monad_Rec_Class_tailRec = ($GLOBALS['Control_Monad_Rec_Class_tailRec'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRec'));
    $__res = ($__global_Control_Monad_Rec_Class_tailRec)((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)(($o)->a, ($o)->b, ($o)->c);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b, "c" => $c]);
    return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_tailRec3'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_tailRec3';






// Control_Monad_Rec_Class_loop3
function Control_Monad_Rec_Class_loop3($a, $b = null, $c = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_loop3';
  if ($__num < 3) {
    if ($__num === 2) return function($c) use ($a, $b, $__fn) { return $__fn($a, $b, $c); };
    if ($__num === 1) return function($b, $c = null) use ($a, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $b, $c);
      if ($__num2 === 1) return function($c) use ($a, $b, $__fn) { return $__fn($a, $b, $c); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((object)["a" => $a, "b" => $b, "c" => $c]);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_loop3'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_loop3';

// Control_Monad_Rec_Class_loop2
function Control_Monad_Rec_Class_loop2($a, $b = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_loop2';
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, $__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())((object)["a" => $a, "b" => $b]);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_loop2'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_loop2';


// Control_Monad_Rec_Class_forever
function Control_Monad_Rec_Class_forever($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Rec_Class_forever';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_voidRight = ($GLOBALS['Data_Functor_voidRight'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_voidRight'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$tailRecM1 = ($dictMonadRec)->tailRecM;
$voidRight = ($__global_Data_Functor_voidRight)((((((((($dictMonadRec)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
    $__res = (function() use ($tailRecM1, $voidRight, $__global_Data_Unit_unit) {
  $__fn = function($ma) use ($tailRecM1, $voidRight, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($tailRecM1)((function() use ($voidRight, $ma) {
  $__fn = function($u) use ($voidRight, $ma, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($voidRight)(((function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Loop", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($u), $ma);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $__global_Data_Unit_unit);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Rec_Class_forever'] = __NAMESPACE__ . '\\Control_Monad_Rec_Class_forever';


