<?php

namespace Test\Async;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Aff/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Test_Async_bind
$Test_Async_bind = ($Control_Bind_bind)($Effect_Aff_bindAff);

// Test_Async_discard
$Test_Async_discard = ($Control_Bind_discard)($Control_Bind_discardUnit, $Effect_Aff_bindAff);

// Test_Async_liftEffect
$Test_Async_liftEffect = ($Effect_Class_liftEffect)($Effect_Aff_monadEffectAff);

// Test_Async_pure
$Test_Async_pure = ($Control_Applicative_pure)($Effect_Aff_applicativeAff);

// Test_Async_describe
$Test_Async_describe = ($Effect_Console_log)("Asynchronous Concurrency (Aff):");

// Test_Async_act
$Test_Async_act = ($Effect_Aff_launchAff_)(($Test_Async_bind)(($Effect_Aff_forkAff)(($Test_Async_discard)(($Effect_Aff_delay)(($Data_Time_Duration_Milliseconds)(10.0)), (function() use (&$Test_Async_bind, &$Test_Async_liftEffect, &$Effect_Console_log, &$Test_Async_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$Test_Async_bind, &$Test_Async_liftEffect, &$Effect_Console_log, &$Test_Async_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_Async_bind)(($Test_Async_liftEffect)(($Effect_Console_log)("Fiber 1 finished")), (function() use (&$Test_Async_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$Test_Async_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_Async_pure)($Data_Unit_unit);
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
})())), (function() use (&$Test_Async_bind, &$Effect_Aff_forkAff, &$Test_Async_discard, &$Effect_Aff_delay, &$Data_Time_Duration_Milliseconds, &$Test_Async_liftEffect, &$Effect_Console_log, &$Test_Async_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$Test_Async_bind, &$Effect_Aff_forkAff, &$Test_Async_discard, &$Effect_Aff_delay, &$Data_Time_Duration_Milliseconds, &$Test_Async_liftEffect, &$Effect_Console_log, &$Test_Async_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_Async_bind)(($Effect_Aff_forkAff)(($Test_Async_discard)(($Effect_Aff_delay)(($Data_Time_Duration_Milliseconds)(20.0)), (function() use (&$Test_Async_bind, &$Test_Async_liftEffect, &$Effect_Console_log, &$Test_Async_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$Test_Async_bind, &$Test_Async_liftEffect, &$Effect_Console_log, &$Test_Async_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_Async_bind)(($Test_Async_liftEffect)(($Effect_Console_log)("Fiber 2 finished")), (function() use (&$Test_Async_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$Test_Async_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_Async_pure)($Data_Unit_unit);
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
})())), (function() use (&$Test_Async_discard, &$Effect_Aff_delay, &$Data_Time_Duration_Milliseconds, &$Test_Async_bind, &$Test_Async_liftEffect, &$Effect_Console_log, &$Test_Async_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$Test_Async_discard, &$Effect_Aff_delay, &$Data_Time_Duration_Milliseconds, &$Test_Async_bind, &$Test_Async_liftEffect, &$Effect_Console_log, &$Test_Async_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_Async_discard)(($Effect_Aff_delay)(($Data_Time_Duration_Milliseconds)(30.0)), (function() use (&$Test_Async_bind, &$Test_Async_liftEffect, &$Effect_Console_log, &$Test_Async_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$Test_Async_bind, &$Test_Async_liftEffect, &$Effect_Console_log, &$Test_Async_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_Async_bind)(($Test_Async_liftEffect)(($Effect_Console_log)("Main fiber finished")), (function() use (&$Test_Async_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$Test_Async_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_Async_pure)($Data_Unit_unit);
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
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));

