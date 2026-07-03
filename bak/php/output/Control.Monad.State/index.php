<?php

namespace Control\Monad\State;

require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_State_compose
$Control_Monad_State_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_State_unwrap
$Control_Monad_State_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Control_Monad_State_withState
$Control_Monad_State_withState = $Control_Monad_State_Trans_withStateT;

// Control_Monad_State_runState
$Control_Monad_State_runState = (function() use (&$Control_Monad_State_compose, &$Control_Monad_State_unwrap) {
  $__body = function($v) use (&$Control_Monad_State_compose, &$Control_Monad_State_unwrap) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return ($Control_Monad_State_compose)($Control_Monad_State_unwrap, $s);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Monad_State_compose, &$Control_Monad_State_unwrap, $__body, &$__fn) {
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

// Control_Monad_State_mapState
$Control_Monad_State_mapState = (function() use (&$Control_Monad_State_Trans_mapStateT, &$Control_Monad_State_compose, &$Data_Identity_Identity, &$Control_Monad_State_unwrap) {
  $__fn = function($f) use (&$Control_Monad_State_Trans_mapStateT, &$Control_Monad_State_compose, &$Data_Identity_Identity, &$Control_Monad_State_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_State_Trans_mapStateT)(($Control_Monad_State_compose)($Data_Identity_Identity, ($Control_Monad_State_compose)($f, $Control_Monad_State_unwrap)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
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
$s__prime__ = ($__case_0)->values[1];
return $s__prime__;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $s = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $s);
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
$a = ($__case_0)->values[0];
return $a;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $s = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $s);
  };
  return $__fn;
})();

