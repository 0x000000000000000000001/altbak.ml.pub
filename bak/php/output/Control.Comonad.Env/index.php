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

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Comonad_Env_map
$Control_Comonad_Env_map = ($Data_Functor_map)($Data_Tuple_functorTuple);

// Control_Comonad_Env_unwrap
$Control_Comonad_Env_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Control_Comonad_Env_withEnv
$Control_Comonad_Env_withEnv = $Control_Comonad_Env_Trans_withEnvT;

// Control_Comonad_Env_runEnv
$Control_Comonad_Env_runEnv = (function() use (&$Control_Comonad_Env_map, &$Control_Comonad_Env_unwrap) {
  $__body = function($v) use (&$Control_Comonad_Env_map, &$Control_Comonad_Env_unwrap) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($Control_Comonad_Env_map)($Control_Comonad_Env_unwrap, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Comonad_Env_map, &$Control_Comonad_Env_unwrap, $__body, &$__fn) {
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
})();

// Control_Comonad_Env_mapEnv
$Control_Comonad_Env_mapEnv = ($Data_Functor_map)(($Control_Comonad_Env_Trans_functorEnvT)($Data_Identity_functorIdentity));

// Control_Comonad_Env_env
$Control_Comonad_Env_env = (function() use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, &$Data_Identity_Identity) {
  $__fn = function($e, $a = null) use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, &$Data_Identity_Identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Comonad_Env_Trans_EnvT)(($Data_Tuple_Tuple)($e, ($Data_Identity_Identity)($a)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

