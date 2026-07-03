<?php

namespace Control\Comonad\Store;

require_once __DIR__ . '/../Control.Comonad.Store.Class/index.php';
require_once __DIR__ . '/../Control.Comonad.Store.Trans/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Comonad_Store_map
$Control_Comonad_Store_map = ($Data_Functor_map)($Data_Tuple_functorTuple);

// Control_Comonad_Store_unwrap
$Control_Comonad_Store_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Control_Comonad_Store_store
$Control_Comonad_Store_store = (function() use (&$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple, &$Data_Identity_Identity) {
  $__fn = function($f, $x = null) use (&$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple, &$Data_Identity_Identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Comonad_Store_Trans_StoreT)(($Data_Tuple_Tuple)(($Data_Identity_Identity)($f), $x));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Comonad_Store_runStore
$Control_Comonad_Store_runStore = (function() use (&$Data_Tuple_swap, &$Control_Comonad_Store_map, &$Control_Comonad_Store_unwrap) {
  $__body = function($v) use (&$Data_Tuple_swap, &$Control_Comonad_Store_map, &$Control_Comonad_Store_unwrap) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return ($Data_Tuple_swap)(($Control_Comonad_Store_map)($Control_Comonad_Store_unwrap, ($Data_Tuple_swap)($s)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Tuple_swap, &$Control_Comonad_Store_map, &$Control_Comonad_Store_unwrap, $__body, &$__fn) {
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

