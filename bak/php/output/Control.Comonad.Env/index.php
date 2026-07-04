<?php

namespace Control\Comonad\Env;

require_once __DIR__ . '/../Control.Comonad.Env.Class/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Trans/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
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


// Control_Comonad_Env_map
$Control_Comonad_Env_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Tuple_functorTuple']);

// Control_Comonad_Env_unwrap
$Control_Comonad_Env_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Control_Comonad_Env_withEnv
$Control_Comonad_Env_withEnv = $GLOBALS['Control_Comonad_Env_Trans_withEnvT'];

// Control_Comonad_Env_runEnv
$Control_Comonad_Env_runEnv = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($GLOBALS['Control_Comonad_Env_map'])($GLOBALS['Control_Comonad_Env_unwrap'], $x);
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

// Control_Comonad_Env_mapEnv
$Control_Comonad_Env_mapEnv = ($GLOBALS['Data_Functor_map'])(($GLOBALS['Control_Comonad_Env_Trans_functorEnvT'])($GLOBALS['Data_Identity_functorIdentity']));

// Control_Comonad_Env_env
$Control_Comonad_Env_env = (function() {
  $__fn = function($e, $a = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Control_Comonad_Env_Trans_EnvT'])(($GLOBALS['Data_Tuple_Tuple'])($e, ($GLOBALS['Data_Identity_Identity'])($a)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

