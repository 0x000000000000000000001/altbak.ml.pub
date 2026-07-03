<?php

namespace Control\Monad\Reader;

require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_Reader_compose
$Control_Monad_Reader_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_Reader_unwrap
$Control_Monad_Reader_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Control_Monad_Reader_withReader
$Control_Monad_Reader_withReader = $Control_Monad_Reader_Trans_withReaderT;

// Control_Monad_Reader_runReader
$Control_Monad_Reader_runReader = (function() use (&$Control_Monad_Reader_compose, &$Control_Monad_Reader_unwrap) {
  $__body = function($v) use (&$Control_Monad_Reader_compose, &$Control_Monad_Reader_unwrap) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($Control_Monad_Reader_compose)($Control_Monad_Reader_unwrap, $m);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Monad_Reader_compose, &$Control_Monad_Reader_unwrap, $__body, &$__fn) {
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

// Control_Monad_Reader_mapReader
$Control_Monad_Reader_mapReader = (function() use (&$Control_Monad_Reader_Trans_mapReaderT, &$Control_Monad_Reader_compose, &$Data_Identity_Identity, &$Control_Monad_Reader_unwrap) {
  $__fn = function($f) use (&$Control_Monad_Reader_Trans_mapReaderT, &$Control_Monad_Reader_compose, &$Data_Identity_Identity, &$Control_Monad_Reader_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Reader_Trans_mapReaderT)(($Control_Monad_Reader_compose)($Data_Identity_Identity, ($Control_Monad_Reader_compose)($f, $Control_Monad_Reader_unwrap)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

