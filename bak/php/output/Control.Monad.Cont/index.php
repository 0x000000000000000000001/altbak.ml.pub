<?php

namespace Control\Monad\Cont;

require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_Cont_compose
$Control_Monad_Cont_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_Cont_unwrap
$Control_Monad_Cont_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Control_Monad_Cont_withCont
$Control_Monad_Cont_withCont = (function() use (&$Control_Monad_Cont_Trans_withContT, &$Control_Monad_Cont_compose, &$Data_Identity_Identity, &$Control_Monad_Cont_unwrap) {
  $__fn = function($f) use (&$Control_Monad_Cont_Trans_withContT, &$Control_Monad_Cont_compose, &$Data_Identity_Identity, &$Control_Monad_Cont_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Cont_Trans_withContT)(($Control_Monad_Cont_compose)(($Control_Monad_Cont_compose)($Data_Identity_Identity), ($Control_Monad_Cont_compose)($f, ($Control_Monad_Cont_compose)($Control_Monad_Cont_unwrap))));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Cont_runCont
$Control_Monad_Cont_runCont = (function() use (&$Control_Monad_Cont_unwrap, &$Control_Monad_Cont_Trans_runContT, &$Control_Monad_Cont_compose, &$Data_Identity_Identity) {
  $__fn = function($cc, $k = null) use (&$Control_Monad_Cont_unwrap, &$Control_Monad_Cont_Trans_runContT, &$Control_Monad_Cont_compose, &$Data_Identity_Identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Cont_unwrap)(($Control_Monad_Cont_Trans_runContT)($cc, ($Control_Monad_Cont_compose)($Data_Identity_Identity, $k)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Cont_mapCont
$Control_Monad_Cont_mapCont = (function() use (&$Control_Monad_Cont_Trans_mapContT, &$Control_Monad_Cont_compose, &$Data_Identity_Identity, &$Control_Monad_Cont_unwrap) {
  $__fn = function($f) use (&$Control_Monad_Cont_Trans_mapContT, &$Control_Monad_Cont_compose, &$Data_Identity_Identity, &$Control_Monad_Cont_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Cont_Trans_mapContT)(($Control_Monad_Cont_compose)($Data_Identity_Identity, ($Control_Monad_Cont_compose)($f, $Control_Monad_Cont_unwrap)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Cont_cont
$Control_Monad_Cont_cont = (function() use (&$Control_Monad_Cont_Trans_ContT, &$Data_Identity_Identity, &$Control_Monad_Cont_compose, &$Control_Monad_Cont_unwrap) {
  $__fn = function($f) use (&$Control_Monad_Cont_Trans_ContT, &$Data_Identity_Identity, &$Control_Monad_Cont_compose, &$Control_Monad_Cont_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Cont_Trans_ContT)((function() use (&$Data_Identity_Identity, $f, &$Control_Monad_Cont_compose, &$Control_Monad_Cont_unwrap) {
  $__fn = function($c) use (&$Data_Identity_Identity, $f, &$Control_Monad_Cont_compose, &$Control_Monad_Cont_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Identity_Identity)(($f)(($Control_Monad_Cont_compose)($Control_Monad_Cont_unwrap, $c)));
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
})();

