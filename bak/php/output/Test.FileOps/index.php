<?php

namespace Test\FileOps;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.FileOps/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };
if (!function_exists('phpurs_uncurry2')) {
function phpurs_uncurry2($fn) {
    return function($a, $b = null) use ($fn) {
        if (func_num_args() < 2) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry2($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b);
    };
}
function phpurs_uncurry3($fn) {
    return function($a, $b = null, $c = null) use ($fn) {
        if (func_num_args() < 3) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry3($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c);
    };
}
function phpurs_uncurry4($fn) {
    return function($a, $b = null, $c = null, $d = null) use ($fn) {
        if (func_num_args() < 4) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry4($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d);
    };
}
function phpurs_uncurry5($fn) {
    return function($a, $b = null, $c = null, $d = null, $e = null) use ($fn) {
        if (func_num_args() < 5) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry5($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d)($e);
    };
}
}



$Test_FileOps_writeFileSync = phpurs_uncurry2(function($path) { return function($content) use(&$path) { return function() use(&$path, &$content) { file_put_contents($path, $content); return null; }; }; });
$Test_FileOps_readFileSync = function($path) { return function() use(&$path) { return file_get_contents($path); }; };
$Test_FileOps_loopE = phpurs_uncurry2(function($n) { return function($action) use(&$n) { return function() use(&$n, &$action) { for($i=0; $i<$n; $i++) { $action(); } return null; }; }; });

// Test_FileOps_discard
$Test_FileOps_discard = ($Control_Bind_discard)($Control_Bind_discardUnit, $Effect_bindEffect);

// Test_FileOps_bind
$Test_FileOps_bind = ($Control_Bind_bind)($Effect_bindEffect);

// Test_FileOps_pure
$Test_FileOps_pure = ($Control_Applicative_pure)($Effect_applicativeEffect);

// Test_FileOps_loopIO
$Test_FileOps_loopIO = (function() use (&$Test_FileOps_loopE, &$Test_FileOps_discard, &$Test_FileOps_writeFileSync, &$Test_FileOps_bind, &$Test_FileOps_readFileSync, &$Test_FileOps_pure, &$Data_Unit_unit) {
  $__fn = function($n) use (&$Test_FileOps_loopE, &$Test_FileOps_discard, &$Test_FileOps_writeFileSync, &$Test_FileOps_bind, &$Test_FileOps_readFileSync, &$Test_FileOps_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_FileOps_loopE)($n, ($Test_FileOps_discard)(($Test_FileOps_writeFileSync)("var/iotest.txt", "Hello IO Benchmarks!"), (function() use (&$Test_FileOps_bind, &$Test_FileOps_readFileSync, &$Test_FileOps_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$Test_FileOps_bind, &$Test_FileOps_readFileSync, &$Test_FileOps_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_FileOps_bind)(($Test_FileOps_readFileSync)("var/iotest.txt"), (function() use (&$Test_FileOps_pure, &$Data_Unit_unit) {
  $__fn = function($__dollar____unused) use (&$Test_FileOps_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_FileOps_pure)($Data_Unit_unit);
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_FileOps_describe
$Test_FileOps_describe = ($Effect_Console_log)("File I/O (10k writes/reads):");

// Test_FileOps_act
$Test_FileOps_act = ($Test_FileOps_loopIO)(10000);

