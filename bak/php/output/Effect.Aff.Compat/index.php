<?php

namespace Effect\Aff\Compat;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Aff/index.php';
require_once __DIR__ . '/../Effect.Aff.Compat/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
require_once __DIR__ . '/../Effect.Uncurried/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Effect_Aff_Compat_bind
$Effect_Aff_Compat_bind = ($Control_Bind_bind)($Effect_bindEffect);

// Effect_Aff_Compat_compose
$Effect_Aff_Compat_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Effect_Aff_Compat_pure
$Effect_Aff_Compat_pure = ($Control_Applicative_pure)($Effect_applicativeEffect);

// Effect_Aff_Compat_discard
$Effect_Aff_Compat_discard = ($Control_Bind_discard)($Control_Bind_discardUnit, $Effect_bindEffect);

// Effect_Aff_Compat_EffectFnCanceler
$Effect_Aff_Compat_EffectFnCanceler = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $x;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Aff_Compat_EffectFnAff
$Effect_Aff_Compat_EffectFnAff = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $x;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Aff_Compat_fromEffectFnAff
$Effect_Aff_Compat_fromEffectFnAff = (function() use (&$Effect_Aff_makeAff, &$Effect_Aff_Compat_bind, &$Effect_Uncurried_runEffectFn2, &$Effect_Uncurried_mkEffectFn1, &$Effect_Aff_Compat_compose, &$Data_Either_Left, &$Data_Either_Right, &$Effect_Aff_Compat_pure, &$Effect_Aff_Canceler, &$Effect_Aff_Compat_discard, &$Effect_Uncurried_runEffectFn3, &$Effect_Aff_nonCanceler) {
  $__body = function($v) use (&$Effect_Aff_makeAff, &$Effect_Aff_Compat_bind, &$Effect_Uncurried_runEffectFn2, &$Effect_Uncurried_mkEffectFn1, &$Effect_Aff_Compat_compose, &$Data_Either_Left, &$Data_Either_Right, &$Effect_Aff_Compat_pure, &$Effect_Aff_Canceler, &$Effect_Aff_Compat_discard, &$Effect_Uncurried_runEffectFn3, &$Effect_Aff_nonCanceler) {
    $__case_0 = $v;
    if (true) {
$eff = $__case_0;
return ($Effect_Aff_makeAff)((function() use (&$Effect_Aff_Compat_bind, &$Effect_Uncurried_runEffectFn2, $eff, &$Effect_Uncurried_mkEffectFn1, &$Effect_Aff_Compat_compose, &$Data_Either_Left, &$Data_Either_Right, &$Effect_Aff_Compat_pure, &$Effect_Aff_Canceler, &$Effect_Aff_makeAff, &$Effect_Aff_Compat_discard, &$Effect_Uncurried_runEffectFn3, &$Effect_Aff_nonCanceler) {
  $__fn = function($k) use (&$Effect_Aff_Compat_bind, &$Effect_Uncurried_runEffectFn2, $eff, &$Effect_Uncurried_mkEffectFn1, &$Effect_Aff_Compat_compose, &$Data_Either_Left, &$Data_Either_Right, &$Effect_Aff_Compat_pure, &$Effect_Aff_Canceler, &$Effect_Aff_makeAff, &$Effect_Aff_Compat_discard, &$Effect_Uncurried_runEffectFn3, &$Effect_Aff_nonCanceler, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_Compat_bind)(($Effect_Uncurried_runEffectFn2)($eff, ($Effect_Uncurried_mkEffectFn1)(($Effect_Aff_Compat_compose)($k, $Data_Either_Left)), ($Effect_Uncurried_mkEffectFn1)(($Effect_Aff_Compat_compose)($k, $Data_Either_Right))), (function() use (&$Effect_Aff_Compat_pure, &$Effect_Aff_Canceler, &$Effect_Aff_makeAff, &$Effect_Aff_Compat_discard, &$Effect_Uncurried_runEffectFn3, &$Effect_Uncurried_mkEffectFn1, &$Effect_Aff_Compat_compose, &$Data_Either_Left, &$Data_Either_Right, &$Effect_Aff_nonCanceler) {
  $__body = function($v1) use (&$Effect_Aff_Compat_pure, &$Effect_Aff_Canceler, &$Effect_Aff_makeAff, &$Effect_Aff_Compat_discard, &$Effect_Uncurried_runEffectFn3, &$Effect_Uncurried_mkEffectFn1, &$Effect_Aff_Compat_compose, &$Data_Either_Left, &$Data_Either_Right, &$Effect_Aff_nonCanceler) {
    $__case_0 = $v1;
    if (true) {
$canceler = $__case_0;
return ($Effect_Aff_Compat_pure)(($Effect_Aff_Canceler)((function() use (&$Effect_Aff_makeAff, &$Effect_Aff_Compat_discard, &$Effect_Uncurried_runEffectFn3, $canceler, &$Effect_Uncurried_mkEffectFn1, &$Effect_Aff_Compat_compose, &$Data_Either_Left, &$Data_Either_Right, &$Effect_Aff_Compat_pure, &$Effect_Aff_nonCanceler) {
  $__fn = function($e) use (&$Effect_Aff_makeAff, &$Effect_Aff_Compat_discard, &$Effect_Uncurried_runEffectFn3, $canceler, &$Effect_Uncurried_mkEffectFn1, &$Effect_Aff_Compat_compose, &$Data_Either_Left, &$Data_Either_Right, &$Effect_Aff_Compat_pure, &$Effect_Aff_nonCanceler, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_makeAff)((function() use (&$Effect_Aff_Compat_discard, &$Effect_Uncurried_runEffectFn3, $canceler, $e, &$Effect_Uncurried_mkEffectFn1, &$Effect_Aff_Compat_compose, &$Data_Either_Left, &$Data_Either_Right, &$Effect_Aff_Compat_pure, &$Effect_Aff_nonCanceler) {
  $__fn = function($k2) use (&$Effect_Aff_Compat_discard, &$Effect_Uncurried_runEffectFn3, $canceler, $e, &$Effect_Uncurried_mkEffectFn1, &$Effect_Aff_Compat_compose, &$Data_Either_Left, &$Data_Either_Right, &$Effect_Aff_Compat_pure, &$Effect_Aff_nonCanceler, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_Compat_discard)(($Effect_Uncurried_runEffectFn3)($canceler, $e, ($Effect_Uncurried_mkEffectFn1)(($Effect_Aff_Compat_compose)($k2, $Data_Either_Left)), ($Effect_Uncurried_mkEffectFn1)(($Effect_Aff_Compat_compose)($k2, $Data_Either_Right))), (function() use (&$Effect_Aff_Compat_pure, &$Effect_Aff_nonCanceler) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_Compat_pure, &$Effect_Aff_nonCanceler, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_Compat_pure)($Effect_Aff_nonCanceler);
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
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use (&$Effect_Aff_Compat_pure, &$Effect_Aff_Canceler, &$Effect_Aff_makeAff, &$Effect_Aff_Compat_discard, &$Effect_Uncurried_runEffectFn3, &$Effect_Uncurried_mkEffectFn1, &$Effect_Aff_Compat_compose, &$Data_Either_Left, &$Data_Either_Right, &$Effect_Aff_nonCanceler, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($v1);
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
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Effect_Aff_makeAff, &$Effect_Aff_Compat_bind, &$Effect_Uncurried_runEffectFn2, &$Effect_Uncurried_mkEffectFn1, &$Effect_Aff_Compat_compose, &$Data_Either_Left, &$Data_Either_Right, &$Effect_Aff_Compat_pure, &$Effect_Aff_Canceler, &$Effect_Aff_Compat_discard, &$Effect_Uncurried_runEffectFn3, &$Effect_Aff_nonCanceler, $__body, &$__fn) {
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

