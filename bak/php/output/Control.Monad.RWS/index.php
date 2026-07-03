<?php

namespace Control\Monad\RWS;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Monad.RWS.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_RWS_pure
$Control_Monad_RWS_pure = ($Control_Applicative_pure)($Data_Identity_applicativeIdentity);

// Control_Monad_RWS_composeFlipped
$Control_Monad_RWS_composeFlipped = ($Control_Semigroupoid_composeFlipped)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_RWS_unwrap
$Control_Monad_RWS_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Control_Monad_RWS_execRWST
$Control_Monad_RWS_execRWST = ($Control_Monad_RWS_Trans_execRWST)($Data_Identity_monadIdentity);

// Control_Monad_RWS_evalRWST
$Control_Monad_RWS_evalRWST = ($Control_Monad_RWS_Trans_evalRWST)($Data_Identity_monadIdentity);

// Control_Monad_RWS_withRWS
$Control_Monad_RWS_withRWS = $Control_Monad_RWS_Trans_withRWST;

// Control_Monad_RWS_rws
$Control_Monad_RWS_rws = (function() use (&$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_pure) {
  $__fn = function($f) use (&$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_RWS_Trans_RWST)((function() use (&$Control_Monad_RWS_pure, $f) {
  $__fn = function($r, $s = null) use (&$Control_Monad_RWS_pure, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_RWS_pure)(($f)($r, $s));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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

// Control_Monad_RWS_runRWS
$Control_Monad_RWS_runRWS = (function() {
  $__body = function($m, $r, $s) {
    $__case_0 = $m;
    if (true) {
$f = $__case_0;
$v = ($f)($r, $s);
$__case_0 = $v;
if (true) {
$x = $__case_0;
return $x;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($m, $r = null, $s = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($m, $r, $s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($m, $r, $s);
  };
  return $__fn;
})();

// Control_Monad_RWS_mapRWS
$Control_Monad_RWS_mapRWS = (function() use (&$Control_Monad_RWS_Trans_mapRWST, &$Control_Monad_RWS_composeFlipped, &$Control_Monad_RWS_unwrap, &$Data_Identity_Identity) {
  $__fn = function($f) use (&$Control_Monad_RWS_Trans_mapRWST, &$Control_Monad_RWS_composeFlipped, &$Control_Monad_RWS_unwrap, &$Data_Identity_Identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_RWS_Trans_mapRWST)(($Control_Monad_RWS_composeFlipped)($Control_Monad_RWS_unwrap, ($Control_Monad_RWS_composeFlipped)($f, $Data_Identity_Identity)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_execRWS
$Control_Monad_RWS_execRWS = (function() use (&$Control_Monad_RWS_unwrap, &$Control_Monad_RWS_execRWST) {
  $__fn = function($m, $r = null, $s = null) use (&$Control_Monad_RWS_unwrap, &$Control_Monad_RWS_execRWST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_RWS_unwrap)(($Control_Monad_RWS_execRWST)($m, $r, $s));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_evalRWS
$Control_Monad_RWS_evalRWS = (function() use (&$Control_Monad_RWS_unwrap, &$Control_Monad_RWS_evalRWST) {
  $__fn = function($m, $r = null, $s = null) use (&$Control_Monad_RWS_unwrap, &$Control_Monad_RWS_evalRWST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_RWS_unwrap)(($Control_Monad_RWS_evalRWST)($m, $r, $s));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

