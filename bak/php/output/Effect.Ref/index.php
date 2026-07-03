<?php

namespace Effect\Ref;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Ref/index.php';
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



$Effect_Ref__new = function($val) { return function() use(&$val) { return (object)['value' => $val]; }; };
$Effect_Ref_read = function($ref) { return function() use(&$ref) { return $ref->value; }; };
$Effect_Ref_modifyImpl = phpurs_uncurry2(function($f) { return function($ref) use(&$f) { return function() use(&$f, &$ref) { $t = $f($ref->value); $ref->value = $t->state; return $t->value; }; }; });
$Effect_Ref_write = phpurs_uncurry2(function($val) { return function($ref) use(&$val) { return function() use(&$val, &$ref) { $ref->value = $val; return null; }; }; });

// Effect_Ref_void
$Effect_Ref_void = ($Data_Functor_void)($Effect_functorEffect);

// Effect_Ref_new
$Effect_Ref_new = $Effect_Ref__new;

// Effect_Ref_modify'
$Effect_Ref_modify__prime__ = $Effect_Ref_modifyImpl;

// Effect_Ref_modify
$Effect_Ref_modify = (function() use (&$Effect_Ref_modify__prime__) {
  $__fn = function($f) use (&$Effect_Ref_modify__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Ref_modify__prime__)((function() use ($f) {
  $__fn = function($s) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$s__prime__ = ($f)($s);
    $__res = (object)["state" => $s__prime__, "value" => $s__prime__];
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

// Effect_Ref_modify_
$Effect_Ref_modify_ = (function() use (&$Effect_Ref_void, &$Effect_Ref_modify) {
  $__fn = function($f, $s = null) use (&$Effect_Ref_void, &$Effect_Ref_modify, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Ref_void)(($Effect_Ref_modify)($f, $s));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

