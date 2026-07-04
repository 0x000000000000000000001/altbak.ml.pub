<?php

namespace Control\Monad\State;

require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
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
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...$merged);
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_State_compose
$Control_Monad_State_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Monad_State_unwrap
$Control_Monad_State_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Control_Monad_State_withState
$Control_Monad_State_withState = $GLOBALS['Control_Monad_State_Trans_withStateT'];

// Control_Monad_State_runState
$Control_Monad_State_runState = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return ($GLOBALS['Control_Monad_State_compose'])($GLOBALS['Control_Monad_State_unwrap'], $s);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_State_mapState
$Control_Monad_State_mapState = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_State_Trans_mapStateT'])(($GLOBALS['Control_Monad_State_compose'])($GLOBALS['Data_Identity_Identity'], ($GLOBALS['Control_Monad_State_compose'])($f, $GLOBALS['Control_Monad_State_unwrap'])));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_State_execState
$Control_Monad_State_execState = (function() {
  $__body = function($v, $s) {
    $__case_0 = $v;
    $__case_1 = $s;
    if (true) {
$m = $__case_0;
$s1 = $__case_1;
$v1 = ($m)($s1);
$__case_0 = $v1;
if ((($__case_0)->tag === "Tuple")) {
$s__prime__ = ($__case_0)->v1;
return $s__prime__;
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $s = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $s);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_State_evalState
$Control_Monad_State_evalState = (function() {
  $__body = function($v, $s) {
    $__case_0 = $v;
    $__case_1 = $s;
    if (true) {
$m = $__case_0;
$s1 = $__case_1;
$v1 = ($m)($s1);
$__case_0 = $v1;
if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->v0;
return $a;
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $s = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $s);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

