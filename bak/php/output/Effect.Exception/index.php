<?php

namespace Effect\Exception;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
require_once __DIR__ . '/../Prelude/index.php';

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



$Effect_Exception_error = function($msg) { return new \Exception($msg); };
$Effect_Exception_message = function($e) { return $e->getMessage(); };
$Effect_Exception_name = function($e) { return get_class($e); };
$Effect_Exception_stackImpl = function($just) { return function($nothing) { return function($e) use(&$just, &$nothing) { return $just($e->getTraceAsString()); }; }; };
$Effect_Exception_throwException = function($e) { return function() use(&$e) { throw $e; }; };
$Effect_Exception_catchException = phpurs_uncurry2(function($c) { return function($t) use(&$c) { return function() use(&$c, &$t) { try { return $t(); } catch (\Throwable $e) { return $c($e)(); } }; }; });
$Effect_Exception_showErrorImpl = function($e) { return (string)$e; };

// Effect_Exception_compose
$Effect_Exception_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Effect_Exception_pure
$Effect_Exception_pure = ($Control_Applicative_pure)($Effect_applicativeEffect);

// Effect_Exception_map
$Effect_Exception_map = ($Data_Functor_map)($Effect_functorEffect);

// Effect_Exception_try
$Effect_Exception_try = (function() use (&$Effect_Exception_catchException, &$Effect_Exception_compose, &$Effect_Exception_pure, &$Data_Either_Left, &$Effect_Exception_map, &$Data_Either_Right) {
  $__fn = function($action) use (&$Effect_Exception_catchException, &$Effect_Exception_compose, &$Effect_Exception_pure, &$Data_Either_Left, &$Effect_Exception_map, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Exception_catchException)(($Effect_Exception_compose)($Effect_Exception_pure, $Data_Either_Left), ($Effect_Exception_map)($Data_Either_Right, $action));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Exception_throw
$Effect_Exception_throw = ($Effect_Exception_compose)($Effect_Exception_throwException, $Effect_Exception_error);

// Effect_Exception_stack
$Effect_Exception_stack = ($Effect_Exception_stackImpl)($Data_Maybe_Just, $Data_Maybe_Nothing);

// Effect_Exception_showError
$Effect_Exception_showError = ($Data_Show_Show__dollar__Dict)((object)["show" => $Effect_Exception_showErrorImpl]);

