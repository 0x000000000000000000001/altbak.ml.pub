<?php

namespace Performance\Minibench;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Effect.Ref/index.php';
require_once __DIR__ . '/../Effect.Uncurried/index.php';
require_once __DIR__ . '/../Performance.Minibench/index.php';
require_once __DIR__ . '/../Prelude/index.php';

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {
      case 'Performance_Minibench_lessThan': $v = (($GLOBALS['Data_Ord_lessThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThan')))(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Performance_Minibench_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Performance_Minibench_div': $v = ($GLOBALS['Data_EuclideanRing_numDiv'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_numDiv')); break;
      case 'Performance_Minibench_bind': $v = ($GLOBALS['Effect_bindE'] ?? \Effect\phpurs_eval_thunk('Effect_bindE')); break;
      case 'Performance_Minibench_discard': $v = ((($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit')))->discard)(($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect'))); break;
      case 'Performance_Minibench_mul': $v = ($GLOBALS['Data_Semiring_numMul'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_numMul')); break;
      case 'Performance_Minibench_add': $v = ($GLOBALS['Data_Semiring_numAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_numAdd')); break;
      case 'Performance_Minibench_pure': $v = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE')); break;
      case 'Performance_Minibench_sub': $v = ($GLOBALS['Data_Ring_numSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_numSub')); break;
      case 'Performance_Minibench_bench': $v = (($GLOBALS['Performance_Minibench_benchWith'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_benchWith')))(1000); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };











// Performance_Minibench_withUnits
function Performance_Minibench_withUnits($t) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Performance_Minibench_withUnits';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($t) {
    $__case_0 = $t;
    if (true) {
$t1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($t);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Performance_Minibench_withUnits'] = __NAMESPACE__ . '\\Performance_Minibench_withUnits';

// Performance_Minibench_benchWith'
function Performance_Minibench_benchWith__prime__($n, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Performance_Minibench_benchWith__prime__';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($n, $__fn) { return $__fn($n, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Effect_bindE = ($GLOBALS['Effect_bindE'] ?? \Effect\phpurs_eval_thunk('Effect_bindE'));
$__global_Effect_Ref__new = ($GLOBALS['Effect_Ref__new'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref__new'));
$__global_Data_Number_infinity = ($GLOBALS['Data_Number_infinity'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_infinity'));
$__global_Performance_Minibench_discard = ($GLOBALS['Performance_Minibench_discard'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_discard'));
$__global_Performance_Minibench_gc = ($GLOBALS['Performance_Minibench_gc'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_gc'));
$__global_Effect_forE = ($GLOBALS['Effect_forE'] ?? \Effect\phpurs_eval_thunk('Effect_forE'));
$__global_Effect_Uncurried_runEffectFn1 = ($GLOBALS['Effect_Uncurried_runEffectFn1'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn1'));
$__global_Performance_Minibench_timeNs = ($GLOBALS['Performance_Minibench_timeNs'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_timeNs'));
$__global_Effect_Ref_modify = ($GLOBALS['Effect_Ref_modify'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_modify'));
$__global_Data_Number_min = ($GLOBALS['Data_Number_min'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_min'));
$__global_Data_Number_max = ($GLOBALS['Data_Number_max'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_max'));
$__global_Effect_pureE = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$__global_Effect_Ref_read = ($GLOBALS['Effect_Ref_read'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_read'));
$__global_Data_Int_toNumber = ($GLOBALS['Data_Int_toNumber'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_toNumber'));
$__global_Data_Number_sqrt = ($GLOBALS['Data_Number_sqrt'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_sqrt'));
    $__res = ($__global_Effect_bindE)(($__global_Effect_Ref__new)(0.0), (function() use ($__global_Effect_bindE, $__global_Effect_Ref__new, $__global_Data_Number_infinity, $__global_Performance_Minibench_discard, $__global_Performance_Minibench_gc, $__global_Effect_forE, $n, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Effect_Ref_modify, $__global_Data_Number_min, $__global_Data_Number_max, $__global_Effect_pureE, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Data_Number_sqrt) {
  $__fn = function($sumRef) use ($__global_Effect_bindE, $__global_Effect_Ref__new, $__global_Data_Number_infinity, $__global_Performance_Minibench_discard, $__global_Performance_Minibench_gc, $__global_Effect_forE, $n, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Effect_Ref_modify, $__global_Data_Number_min, $__global_Data_Number_max, $__global_Effect_pureE, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Data_Number_sqrt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_bindE)(($__global_Effect_Ref__new)(0.0), (function() use ($__global_Effect_bindE, $__global_Effect_Ref__new, $__global_Data_Number_infinity, $__global_Performance_Minibench_discard, $__global_Performance_Minibench_gc, $__global_Effect_forE, $n, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Effect_Ref_modify, $sumRef, $__global_Data_Number_min, $__global_Data_Number_max, $__global_Effect_pureE, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Data_Number_sqrt) {
  $__fn = function($sum2Ref) use ($__global_Effect_bindE, $__global_Effect_Ref__new, $__global_Data_Number_infinity, $__global_Performance_Minibench_discard, $__global_Performance_Minibench_gc, $__global_Effect_forE, $n, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Effect_Ref_modify, $sumRef, $__global_Data_Number_min, $__global_Data_Number_max, $__global_Effect_pureE, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Data_Number_sqrt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_bindE)(($__global_Effect_Ref__new)($__global_Data_Number_infinity), (function() use ($__global_Effect_bindE, $__global_Effect_Ref__new, $__global_Performance_Minibench_discard, $__global_Performance_Minibench_gc, $__global_Effect_forE, $n, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Effect_Ref_modify, $sumRef, $sum2Ref, $__global_Data_Number_min, $__global_Data_Number_max, $__global_Effect_pureE, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Data_Number_sqrt) {
  $__fn = function($minRef) use ($__global_Effect_bindE, $__global_Effect_Ref__new, $__global_Performance_Minibench_discard, $__global_Performance_Minibench_gc, $__global_Effect_forE, $n, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Effect_Ref_modify, $sumRef, $sum2Ref, $__global_Data_Number_min, $__global_Data_Number_max, $__global_Effect_pureE, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Data_Number_sqrt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_bindE)(($__global_Effect_Ref__new)(0.0), (function() use ($__global_Performance_Minibench_discard, $__global_Performance_Minibench_gc, $__global_Effect_forE, $n, $__global_Effect_bindE, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Effect_Ref_modify, $sumRef, $sum2Ref, $__global_Data_Number_min, $minRef, $__global_Data_Number_max, $__global_Effect_pureE, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Data_Number_sqrt) {
  $__fn = function($maxRef) use ($__global_Performance_Minibench_discard, $__global_Performance_Minibench_gc, $__global_Effect_forE, $n, $__global_Effect_bindE, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Effect_Ref_modify, $sumRef, $sum2Ref, $__global_Data_Number_min, $minRef, $__global_Data_Number_max, $__global_Effect_pureE, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Data_Number_sqrt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_discard)($__global_Performance_Minibench_gc, (function() use ($__global_Performance_Minibench_discard, $__global_Effect_forE, $n, $__global_Effect_bindE, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Effect_Ref_modify, $sumRef, $sum2Ref, $__global_Data_Number_min, $minRef, $__global_Data_Number_max, $maxRef, $__global_Effect_pureE, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Data_Number_sqrt) {
  $__fn = function($__dollar____unused) use ($__global_Performance_Minibench_discard, $__global_Effect_forE, $n, $__global_Effect_bindE, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Effect_Ref_modify, $sumRef, $sum2Ref, $__global_Data_Number_min, $minRef, $__global_Data_Number_max, $maxRef, $__global_Effect_pureE, $__global_Data_Unit_unit, $__global_Effect_Ref_read, $__global_Data_Int_toNumber, $__global_Data_Number_sqrt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_discard)(($__global_Effect_forE)(0, $n, (function() use ($__global_Effect_bindE, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Effect_Ref_modify, $sumRef, $sum2Ref, $__global_Data_Number_min, $minRef, $__global_Data_Number_max, $maxRef, $__global_Effect_pureE, $__global_Data_Unit_unit) {
  $__fn = function($v) use ($__global_Effect_bindE, $__global_Effect_Uncurried_runEffectFn1, $__global_Performance_Minibench_timeNs, $f, $__global_Effect_Ref_modify, $sumRef, $sum2Ref, $__global_Data_Number_min, $minRef, $__global_Data_Number_max, $maxRef, $__global_Effect_pureE, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_bindE)(($__global_Effect_Uncurried_runEffectFn1)($__global_Performance_Minibench_timeNs, $f), (function() use ($__global_Effect_bindE, $__global_Effect_Ref_modify, $sumRef, $sum2Ref, $__global_Data_Number_min, $minRef, $__global_Data_Number_max, $maxRef, $__global_Effect_pureE, $__global_Data_Unit_unit) {
  $__fn = function($ns) use ($__global_Effect_bindE, $__global_Effect_Ref_modify, $sumRef, $sum2Ref, $__global_Data_Number_min, $minRef, $__global_Data_Number_max, $maxRef, $__global_Effect_pureE, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$square = ($ns * $ns);
    $__res = ($__global_Effect_bindE)(($__global_Effect_Ref_modify)((function() use ($ns) {
  $__fn = function($v1) use ($ns, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v1 + $ns);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $sumRef), (function() use ($__global_Effect_bindE, $__global_Effect_Ref_modify, $square, $sum2Ref, $__global_Data_Number_min, $ns, $minRef, $__global_Data_Number_max, $maxRef, $__global_Effect_pureE, $__global_Data_Unit_unit) {
  $__fn = function($__dollar____unused) use ($__global_Effect_bindE, $__global_Effect_Ref_modify, $square, $sum2Ref, $__global_Data_Number_min, $ns, $minRef, $__global_Data_Number_max, $maxRef, $__global_Effect_pureE, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_bindE)(($__global_Effect_Ref_modify)((function() use ($square) {
  $__fn = function($v1) use ($square, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v1 + $square);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $sum2Ref), (function() use ($__global_Effect_bindE, $__global_Effect_Ref_modify, $__global_Data_Number_min, $ns, $minRef, $__global_Data_Number_max, $maxRef, $__global_Effect_pureE, $__global_Data_Unit_unit) {
  $__fn = function($__dollar____unused) use ($__global_Effect_bindE, $__global_Effect_Ref_modify, $__global_Data_Number_min, $ns, $minRef, $__global_Data_Number_max, $maxRef, $__global_Effect_pureE, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_bindE)(($__global_Effect_Ref_modify)((function() use ($__global_Data_Number_min, $ns) {
  $__fn = function($v1) use ($__global_Data_Number_min, $ns, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Number_min)($v1, $ns);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $minRef), (function() use ($__global_Effect_bindE, $__global_Effect_Ref_modify, $__global_Data_Number_max, $ns, $maxRef, $__global_Effect_pureE, $__global_Data_Unit_unit) {
  $__fn = function($__dollar____unused) use ($__global_Effect_bindE, $__global_Effect_Ref_modify, $__global_Data_Number_max, $ns, $maxRef, $__global_Effect_pureE, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_bindE)(($__global_Effect_Ref_modify)((function() use ($__global_Data_Number_max, $ns) {
  $__fn = function($v1) use ($__global_Data_Number_max, $ns, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Number_max)($v1, $ns);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $maxRef), (function() use ($__global_Effect_pureE, $__global_Data_Unit_unit) {
  $__fn = function($__dollar____unused) use ($__global_Effect_pureE, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_pureE)($__global_Data_Unit_unit);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($__global_Effect_bindE, $__global_Effect_Ref_read, $sumRef, $sum2Ref, $minRef, $maxRef, $__global_Data_Int_toNumber, $n, $__global_Data_Number_sqrt, $__global_Effect_pureE) {
  $__fn = function($__dollar____unused) use ($__global_Effect_bindE, $__global_Effect_Ref_read, $sumRef, $sum2Ref, $minRef, $maxRef, $__global_Data_Int_toNumber, $n, $__global_Data_Number_sqrt, $__global_Effect_pureE, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_bindE)(($__global_Effect_Ref_read)($sumRef), (function() use ($__global_Effect_bindE, $__global_Effect_Ref_read, $sum2Ref, $minRef, $maxRef, $__global_Data_Int_toNumber, $n, $__global_Data_Number_sqrt, $__global_Effect_pureE) {
  $__fn = function($sum) use ($__global_Effect_bindE, $__global_Effect_Ref_read, $sum2Ref, $minRef, $maxRef, $__global_Data_Int_toNumber, $n, $__global_Data_Number_sqrt, $__global_Effect_pureE, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_bindE)(($__global_Effect_Ref_read)($sum2Ref), (function() use ($__global_Effect_bindE, $__global_Effect_Ref_read, $minRef, $maxRef, $__global_Data_Int_toNumber, $n, $sum, $__global_Data_Number_sqrt, $__global_Effect_pureE) {
  $__fn = function($sum2) use ($__global_Effect_bindE, $__global_Effect_Ref_read, $minRef, $maxRef, $__global_Data_Int_toNumber, $n, $sum, $__global_Data_Number_sqrt, $__global_Effect_pureE, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_bindE)(($__global_Effect_Ref_read)($minRef), (function() use ($__global_Effect_bindE, $__global_Effect_Ref_read, $maxRef, $__global_Data_Int_toNumber, $n, $sum, $__global_Data_Number_sqrt, $sum2, $__global_Effect_pureE) {
  $__fn = function($min__prime__) use ($__global_Effect_bindE, $__global_Effect_Ref_read, $maxRef, $__global_Data_Int_toNumber, $n, $sum, $__global_Data_Number_sqrt, $sum2, $__global_Effect_pureE, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_bindE)(($__global_Effect_Ref_read)($maxRef), (function() use ($__global_Data_Int_toNumber, $n, $sum, $__global_Data_Number_sqrt, $sum2, $__global_Effect_pureE, $min__prime__) {
  $__fn = function($max__prime__) use ($__global_Data_Int_toNumber, $n, $sum, $__global_Data_Number_sqrt, $sum2, $__global_Effect_pureE, $min__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$n__prime__ = ($__global_Data_Int_toNumber)($n);
$mean = ($sum / $n__prime__);
$stdDev = ($__global_Data_Number_sqrt)((($sum2 - (($n__prime__ * $mean) * $mean)) / ($n__prime__ - 1.0)));
    $__res = ($__global_Effect_pureE)((object)["mean" => $mean, "stdDev" => $stdDev, "min" => $min__prime__, "max" => $max__prime__]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Performance_Minibench_benchWith__prime__'] = __NAMESPACE__ . '\\Performance_Minibench_benchWith__prime__';

// Performance_Minibench_benchWith
function Performance_Minibench_benchWith($n, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Performance_Minibench_benchWith';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($n, $__fn) { return $__fn($n, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Effect_bindE = ($GLOBALS['Effect_bindE'] ?? \Effect\phpurs_eval_thunk('Effect_bindE'));
$__global_Performance_Minibench_benchWith__prime__ = ($GLOBALS['Performance_Minibench_benchWith__prime__'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_benchWith__prime__'));
$__global_Performance_Minibench_discard = ($GLOBALS['Performance_Minibench_discard'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_discard'));
$__global_Effect_Console_log = ($GLOBALS['Effect_Console_log'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_log'));
$__global_Performance_Minibench_withUnits = ($GLOBALS['Performance_Minibench_withUnits'] ?? \Performance\Minibench\phpurs_eval_thunk('Performance_Minibench_withUnits'));
    $__res = ($__global_Effect_bindE)(($__global_Performance_Minibench_benchWith__prime__)($n, $f), (function() use ($__global_Performance_Minibench_discard, $__global_Effect_Console_log, $__global_Performance_Minibench_withUnits) {
  $__fn = function($res) use ($__global_Performance_Minibench_discard, $__global_Effect_Console_log, $__global_Performance_Minibench_withUnits, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_discard)(($__global_Effect_Console_log)(("mean   = " . ($__global_Performance_Minibench_withUnits)(($res)->mean))), (function() use ($__global_Performance_Minibench_discard, $__global_Effect_Console_log, $__global_Performance_Minibench_withUnits, $res) {
  $__fn = function($__dollar____unused) use ($__global_Performance_Minibench_discard, $__global_Effect_Console_log, $__global_Performance_Minibench_withUnits, $res, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_discard)(($__global_Effect_Console_log)(("stddev = " . ($__global_Performance_Minibench_withUnits)(($res)->stdDev))), (function() use ($__global_Performance_Minibench_discard, $__global_Effect_Console_log, $__global_Performance_Minibench_withUnits, $res) {
  $__fn = function($__dollar____unused) use ($__global_Performance_Minibench_discard, $__global_Effect_Console_log, $__global_Performance_Minibench_withUnits, $res, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Performance_Minibench_discard)(($__global_Effect_Console_log)(("min    = " . ($__global_Performance_Minibench_withUnits)(($res)->min))), (function() use ($__global_Effect_Console_log, $__global_Performance_Minibench_withUnits, $res) {
  $__fn = function($__dollar____unused) use ($__global_Effect_Console_log, $__global_Performance_Minibench_withUnits, $res, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Effect_Console_log)(("max    = " . ($__global_Performance_Minibench_withUnits)(($res)->max)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Performance_Minibench_benchWith'] = __NAMESPACE__ . '\\Performance_Minibench_benchWith';


