<?php

namespace Control\Comonad\Traced;

require_once __DIR__ . '/../Control.Comonad.Traced.Class/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Comonad_Traced_unwrap
$Control_Comonad_Traced_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Control_Comonad_Traced_traced
$Control_Comonad_Traced_traced = ($Control_Semigroupoid_composeFlipped)($Control_Semigroupoid_semigroupoidFn, $Data_Identity_Identity, $Control_Comonad_Traced_Trans_TracedT);

// Control_Comonad_Traced_runTraced
$Control_Comonad_Traced_runTraced = (function() use (&$Control_Comonad_Traced_unwrap) {
  $__body = function($v) use (&$Control_Comonad_Traced_unwrap) {
    $__case_0 = $v;
    if (true) {
$t = $__case_0;
return ($Control_Comonad_Traced_unwrap)($t);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Comonad_Traced_unwrap, $__body, &$__fn) {
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

