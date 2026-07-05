<?php

namespace Data\FoldableWithIndex;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Endo/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
      case 'Data_FoldableWithIndex_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_FoldableWithIndex_foldr': $v = (($GLOBALS['Data_Foldable_foldableMultiplicative'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMultiplicative')))->foldr; break;
      case 'Data_FoldableWithIndex_foldl': $v = (($GLOBALS['Data_Foldable_foldableMultiplicative'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMultiplicative')))->foldl; break;
      case 'Data_FoldableWithIndex_foldMap': $v = (($GLOBALS['Data_Foldable_foldableMultiplicative'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMultiplicative')))->foldMap; break;
      case 'Data_FoldableWithIndex_foldr1': $v = (($GLOBALS['Data_Foldable_foldableMaybe'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMaybe')))->foldr; break;
      case 'Data_FoldableWithIndex_foldl1': $v = (($GLOBALS['Data_Foldable_foldableMaybe'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMaybe')))->foldl; break;
      case 'Data_FoldableWithIndex_foldMap1': $v = (($GLOBALS['Data_Foldable_foldableMaybe'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMaybe')))->foldMap; break;
      case 'Data_FoldableWithIndex_foldr2': $v = (($GLOBALS['Data_Foldable_foldableLast'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableLast')))->foldr; break;
      case 'Data_FoldableWithIndex_foldl2': $v = (($GLOBALS['Data_Foldable_foldableLast'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableLast')))->foldl; break;
      case 'Data_FoldableWithIndex_foldMap2': $v = (($GLOBALS['Data_Foldable_foldableLast'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableLast')))->foldMap; break;
      case 'Data_FoldableWithIndex_foldr3': $v = (($GLOBALS['Data_Foldable_foldableFirst'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableFirst')))->foldr; break;
      case 'Data_FoldableWithIndex_foldl3': $v = (($GLOBALS['Data_Foldable_foldableFirst'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableFirst')))->foldl; break;
      case 'Data_FoldableWithIndex_foldMap3': $v = (($GLOBALS['Data_Foldable_foldableFirst'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableFirst')))->foldMap; break;
      case 'Data_FoldableWithIndex_foldr4': $v = (($GLOBALS['Data_Foldable_foldableDual'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableDual')))->foldr; break;
      case 'Data_FoldableWithIndex_foldl4': $v = (($GLOBALS['Data_Foldable_foldableDual'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableDual')))->foldl; break;
      case 'Data_FoldableWithIndex_foldMap4': $v = (($GLOBALS['Data_Foldable_foldableDual'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableDual')))->foldMap; break;
      case 'Data_FoldableWithIndex_foldr5': $v = (($GLOBALS['Data_Foldable_foldableDisj'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableDisj')))->foldr; break;
      case 'Data_FoldableWithIndex_foldl5': $v = (($GLOBALS['Data_Foldable_foldableDisj'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableDisj')))->foldl; break;
      case 'Data_FoldableWithIndex_foldMap5': $v = (($GLOBALS['Data_Foldable_foldableDisj'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableDisj')))->foldMap; break;
      case 'Data_FoldableWithIndex_foldr6': $v = (($GLOBALS['Data_Foldable_foldableConj'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableConj')))->foldr; break;
      case 'Data_FoldableWithIndex_foldl6': $v = (($GLOBALS['Data_Foldable_foldableConj'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableConj')))->foldl; break;
      case 'Data_FoldableWithIndex_foldMap6': $v = (($GLOBALS['Data_Foldable_foldableConj'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableConj')))->foldMap; break;
      case 'Data_FoldableWithIndex_foldr7': $v = (($GLOBALS['Data_Foldable_foldableAdditive'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableAdditive')))->foldr; break;
      case 'Data_FoldableWithIndex_foldl7': $v = (($GLOBALS['Data_Foldable_foldableAdditive'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableAdditive')))->foldl; break;
      case 'Data_FoldableWithIndex_foldMap7': $v = (($GLOBALS['Data_Foldable_foldableAdditive'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableAdditive')))->foldMap; break;
      case 'Data_FoldableWithIndex_foldr8': $v = ($GLOBALS['Data_Foldable_foldrArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldrArray')); break;
      case 'Data_FoldableWithIndex_mapWithIndex': $v = ($GLOBALS['Data_FunctorWithIndex_mapWithIndexArray'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndexArray')); break;
      case 'Data_FoldableWithIndex_foldl8': $v = ($GLOBALS['Data_Foldable_foldlArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldlArray')); break;
      case 'Data_FoldableWithIndex_unwrap': $v = (($GLOBALS['Data_Newtype_unwrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_FoldableWithIndex_monoidEndo': $v = (($GLOBALS['Data_Monoid_Endo_monoidEndo'] ?? \Data\Monoid\Endo\phpurs_eval_thunk('Data_Monoid_Endo_monoidEndo')))(($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn'))); break;
      case 'Data_FoldableWithIndex_monoidDual': $v = (($GLOBALS['Data_Monoid_Dual_monoidDual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_monoidDual')))(($GLOBALS['Data_FoldableWithIndex_monoidEndo'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_monoidEndo'))); break;
      case 'Data_FoldableWithIndex_foldableWithIndexTuple': $v = (object)["foldrWithIndex" => (function() {
  $__body = function($f, $z, $v) {
    $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$x = ($__case_2)->v1;
return ($f1)($__global_Data_Unit_unit, $x, $z1);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__body = function($f, $z, $v) {
    $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$x = ($__case_2)->v1;
return ($f1)($__global_Data_Unit_unit, $z1, $x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$x = ($__case_1)->v1;
return ($f1)($__global_Data_Unit_unit, $x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($dictMonoid, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableTuple = ($GLOBALS['Data_Foldable_foldableTuple'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableTuple'));
    $__res = $__global_Data_Foldable_foldableTuple;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_FoldableWithIndex_foldableWithIndexMultiplicative': $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldr = ($GLOBALS['Data_FoldableWithIndex_foldr'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldr'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_FoldableWithIndex_foldr)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldl = ($GLOBALS['Data_FoldableWithIndex_foldl'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldl'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_FoldableWithIndex_foldl)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldMap = ($GLOBALS['Data_FoldableWithIndex_foldMap'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMap'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$foldMap8 = ($__global_Data_FoldableWithIndex_foldMap)($dictMonoid);
    $__res = (function() use ($foldMap8, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($foldMap8, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap8)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableMultiplicative = ($GLOBALS['Data_Foldable_foldableMultiplicative'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMultiplicative'));
    $__res = $__global_Data_Foldable_foldableMultiplicative;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_FoldableWithIndex_foldableWithIndexMaybe': $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldr1 = ($GLOBALS['Data_FoldableWithIndex_foldr1'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldr1'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_FoldableWithIndex_foldr1)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldl1 = ($GLOBALS['Data_FoldableWithIndex_foldl1'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldl1'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_FoldableWithIndex_foldl1)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldMap1 = ($GLOBALS['Data_FoldableWithIndex_foldMap1'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMap1'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$foldMap8 = ($__global_Data_FoldableWithIndex_foldMap1)($dictMonoid);
    $__res = (function() use ($foldMap8, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($foldMap8, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap8)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableMaybe = ($GLOBALS['Data_Foldable_foldableMaybe'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMaybe'));
    $__res = $__global_Data_Foldable_foldableMaybe;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_FoldableWithIndex_foldableWithIndexLast': $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldr2 = ($GLOBALS['Data_FoldableWithIndex_foldr2'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldr2'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_FoldableWithIndex_foldr2)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldl2 = ($GLOBALS['Data_FoldableWithIndex_foldl2'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldl2'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_FoldableWithIndex_foldl2)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldMap2 = ($GLOBALS['Data_FoldableWithIndex_foldMap2'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMap2'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$foldMap8 = ($__global_Data_FoldableWithIndex_foldMap2)($dictMonoid);
    $__res = (function() use ($foldMap8, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($foldMap8, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap8)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableLast = ($GLOBALS['Data_Foldable_foldableLast'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableLast'));
    $__res = $__global_Data_Foldable_foldableLast;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_FoldableWithIndex_foldableWithIndexIdentity': $v = (object)["foldrWithIndex" => (function() {
  $__body = function($f, $z, $v) {
    $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($__global_Data_Unit_unit, $x, $z1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__body = function($f, $z, $v) {
    $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($__global_Data_Unit_unit, $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($__global_Data_Unit_unit, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($dictMonoid, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableIdentity = ($GLOBALS['Data_Foldable_foldableIdentity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableIdentity'));
    $__res = $__global_Data_Foldable_foldableIdentity;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_FoldableWithIndex_foldableWithIndexFirst': $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldr3 = ($GLOBALS['Data_FoldableWithIndex_foldr3'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldr3'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_FoldableWithIndex_foldr3)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldl3 = ($GLOBALS['Data_FoldableWithIndex_foldl3'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldl3'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_FoldableWithIndex_foldl3)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldMap3 = ($GLOBALS['Data_FoldableWithIndex_foldMap3'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMap3'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$foldMap8 = ($__global_Data_FoldableWithIndex_foldMap3)($dictMonoid);
    $__res = (function() use ($foldMap8, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($foldMap8, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap8)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableFirst = ($GLOBALS['Data_Foldable_foldableFirst'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableFirst'));
    $__res = $__global_Data_Foldable_foldableFirst;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_FoldableWithIndex_foldableWithIndexEither': $v = (object)["foldrWithIndex" => (function() {
  $__body = function($v, $v1, $v2) {
    $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "Left":
$z = $__case_1;
return $z;
break;
case "Right":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
return ($f)($__global_Data_Unit_unit, $x, $z);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $v1, $v2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__body = function($v, $v1, $v2) {
    $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_2)->tag) {
case "Left":
$z = $__case_1;
return $z;
break;
case "Right":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
return ($f)($__global_Data_Unit_unit, $z, $x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $v1, $v2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$mempty = ($dictMonoid)->mempty;
    $__res = (function() use ($mempty, $__global_Data_Unit_unit) {
  $__body = function($v, $v1) use ($mempty, $__global_Data_Unit_unit) {
    $__case_0 = $v;
    $__case_1 = $v1;
    switch (($__case_1)->tag) {
case "Left":
return $mempty;
break;
case "Right":
$f = $__case_0;
$x = ($__case_1)->v0;
return ($f)($__global_Data_Unit_unit, $x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $v1 = null) use ($mempty, $__global_Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableEither = ($GLOBALS['Data_Foldable_foldableEither'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableEither'));
    $__res = $__global_Data_Foldable_foldableEither;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_FoldableWithIndex_foldableWithIndexDual': $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldr4 = ($GLOBALS['Data_FoldableWithIndex_foldr4'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldr4'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_FoldableWithIndex_foldr4)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldl4 = ($GLOBALS['Data_FoldableWithIndex_foldl4'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldl4'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_FoldableWithIndex_foldl4)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldMap4 = ($GLOBALS['Data_FoldableWithIndex_foldMap4'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMap4'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$foldMap8 = ($__global_Data_FoldableWithIndex_foldMap4)($dictMonoid);
    $__res = (function() use ($foldMap8, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($foldMap8, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap8)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableDual = ($GLOBALS['Data_Foldable_foldableDual'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableDual'));
    $__res = $__global_Data_Foldable_foldableDual;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_FoldableWithIndex_foldableWithIndexDisj': $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldr5 = ($GLOBALS['Data_FoldableWithIndex_foldr5'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldr5'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_FoldableWithIndex_foldr5)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldl5 = ($GLOBALS['Data_FoldableWithIndex_foldl5'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldl5'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_FoldableWithIndex_foldl5)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldMap5 = ($GLOBALS['Data_FoldableWithIndex_foldMap5'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMap5'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$foldMap8 = ($__global_Data_FoldableWithIndex_foldMap5)($dictMonoid);
    $__res = (function() use ($foldMap8, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($foldMap8, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap8)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableDisj = ($GLOBALS['Data_Foldable_foldableDisj'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableDisj'));
    $__res = $__global_Data_Foldable_foldableDisj;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_FoldableWithIndex_foldableWithIndexConst': $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($v, $z = null, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($v, $z, &$__fn) { return $__fn($v, $z, $v1); };
    if ($__num === 1) return function($z, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $z, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $z, &$__fn) { return $__fn($v, $z, $v1); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $z;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($v, $z = null, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($v, $z, &$__fn) { return $__fn($v, $z, $v1); };
    if ($__num === 1) return function($z, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $z, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $z, &$__fn) { return $__fn($v, $z, $v1); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $z;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$mempty = ($dictMonoid)->mempty;
    $__res = (function() use ($mempty) {
  $__fn = function($v, $v1 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $mempty;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableConst = ($GLOBALS['Data_Foldable_foldableConst'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableConst'));
    $__res = $__global_Data_Foldable_foldableConst;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_FoldableWithIndex_foldableWithIndexConj': $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldr6 = ($GLOBALS['Data_FoldableWithIndex_foldr6'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldr6'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_FoldableWithIndex_foldr6)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldl6 = ($GLOBALS['Data_FoldableWithIndex_foldl6'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldl6'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_FoldableWithIndex_foldl6)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldMap6 = ($GLOBALS['Data_FoldableWithIndex_foldMap6'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMap6'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$foldMap8 = ($__global_Data_FoldableWithIndex_foldMap6)($dictMonoid);
    $__res = (function() use ($foldMap8, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($foldMap8, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap8)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableConj = ($GLOBALS['Data_Foldable_foldableConj'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableConj'));
    $__res = $__global_Data_Foldable_foldableConj;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_FoldableWithIndex_foldableWithIndexAdditive': $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldr7 = ($GLOBALS['Data_FoldableWithIndex_foldr7'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldr7'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_FoldableWithIndex_foldr7)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldl7 = ($GLOBALS['Data_FoldableWithIndex_foldl7'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldl7'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
    $__res = ($__global_Data_FoldableWithIndex_foldl7)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldMap7 = ($GLOBALS['Data_FoldableWithIndex_foldMap7'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMap7'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$foldMap8 = ($__global_Data_FoldableWithIndex_foldMap7)($dictMonoid);
    $__res = (function() use ($foldMap8, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($foldMap8, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMap8)(($f)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableAdditive = ($GLOBALS['Data_Foldable_foldableAdditive'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableAdditive'));
    $__res = $__global_Data_Foldable_foldableAdditive;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_FoldableWithIndex_foldableWithIndexArray': $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_FoldableWithIndex_compose = ($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose'));
$__global_Data_Foldable_foldrArray = ($GLOBALS['Data_Foldable_foldrArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldrArray'));
$__global_Data_FunctorWithIndex_mapWithIndexArray = ($GLOBALS['Data_FunctorWithIndex_mapWithIndexArray'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndexArray'));
    $__res = ($__global_Data_FoldableWithIndex_compose)(($__global_Data_Foldable_foldrArray)((function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$x = ($__case_0)->v1;
return (function() use ($f, $i, $x) {
  $__fn = function($y) use ($f, $i, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($f)($i, $x, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $z), ($__global_Data_FunctorWithIndex_mapWithIndexArray)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Data_FoldableWithIndex_compose = ($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose'));
$__global_Data_Foldable_foldlArray = ($GLOBALS['Data_Foldable_foldlArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldlArray'));
$__global_Data_FunctorWithIndex_mapWithIndexArray = ($GLOBALS['Data_FunctorWithIndex_mapWithIndexArray'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndexArray'));
    $__res = ($__global_Data_FoldableWithIndex_compose)(($__global_Data_Foldable_foldlArray)((function() use ($f) {
  $__body = function($y, $v) use ($f) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$x = ($__case_0)->v1;
return ($f)($i, $y, $x);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($y, $v = null) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($y, &$__fn) { return $__fn($y, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($y, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $z), ($__global_Data_FunctorWithIndex_mapWithIndexArray)((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_foldMapWithIndexDefaultR = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndexDefaultR'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldMapWithIndexDefaultR'));
$__global_Data_FoldableWithIndex_foldableWithIndexArray = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexArray'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexArray'));
    $__res = ($__global_Data_FoldableWithIndex_foldMapWithIndexDefaultR)($__global_Data_FoldableWithIndex_foldableWithIndexArray, $dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableArray = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
    $__res = $__global_Data_Foldable_foldableArray;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };

































// Data_FoldableWithIndex_FoldableWithIndex$Dict
function Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict';

// Data_FoldableWithIndex_foldrWithIndex
function Data_FoldableWithIndex_foldrWithIndex($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldrWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldrWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldrWithIndex'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldrWithIndex';

// Data_FoldableWithIndex_traverseWithIndex_
function Data_FoldableWithIndex_traverseWithIndex_($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_traverseWithIndex_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Apply_applySecond = ($GLOBALS['Control_Apply_applySecond'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_applySecond'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_FoldableWithIndex_compose = ($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose'));
$__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
$applySecond = ($__global_Control_Apply_applySecond)((($dictApplicative)->Apply0)($__global_Prim_undefined));
$pure = ($dictApplicative)->pure;
    $__res = (function() use ($__global_Data_FoldableWithIndex_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__fn = function($dictFoldableWithIndex) use ($__global_Data_FoldableWithIndex_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldrWithIndex1 = ($dictFoldableWithIndex)->foldrWithIndex;
    $__res = (function() use ($foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__fn = function($f) use ($foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldrWithIndex1)((function() use ($__global_Data_FoldableWithIndex_compose, $applySecond, $f) {
  $__fn = function($i) use ($__global_Data_FoldableWithIndex_compose, $applySecond, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_FoldableWithIndex_compose)($applySecond, ($f)($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($pure)($__global_Data_Unit_unit));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_traverseWithIndex_'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_traverseWithIndex_';

// Data_FoldableWithIndex_forWithIndex_
function Data_FoldableWithIndex_forWithIndex_($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_forWithIndex_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_traverseWithIndex_ = ($GLOBALS['Data_FoldableWithIndex_traverseWithIndex_'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_traverseWithIndex_'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$traverseWithIndex_1 = ($__global_Data_FoldableWithIndex_traverseWithIndex_)($dictApplicative);
    $__res = (function() use ($__global_Data_Function_flip, $traverseWithIndex_1) {
  $__fn = function($dictFoldableWithIndex) use ($__global_Data_Function_flip, $traverseWithIndex_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Function_flip)(($traverseWithIndex_1)($dictFoldableWithIndex));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_forWithIndex_'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_forWithIndex_';

// Data_FoldableWithIndex_foldrDefault
function Data_FoldableWithIndex_foldrDefault($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldrDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$foldrWithIndex1 = ($dictFoldableWithIndex)->foldrWithIndex;
    $__res = (function() use ($foldrWithIndex1, $__global_Data_Function_const) {
  $__fn = function($f) use ($foldrWithIndex1, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldrWithIndex1)(($__global_Data_Function_const)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldrDefault'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldrDefault';

// Data_FoldableWithIndex_foldlWithIndex
function Data_FoldableWithIndex_foldlWithIndex($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldlWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldlWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldlWithIndex'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldlWithIndex';

// Data_FoldableWithIndex_foldlDefault
function Data_FoldableWithIndex_foldlDefault($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldlDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$foldlWithIndex1 = ($dictFoldableWithIndex)->foldlWithIndex;
    $__res = (function() use ($foldlWithIndex1, $__global_Data_Function_const) {
  $__fn = function($f) use ($foldlWithIndex1, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldlWithIndex1)(($__global_Data_Function_const)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldlDefault'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldlDefault';













// Data_FoldableWithIndex_foldWithIndexM
function Data_FoldableWithIndex_foldWithIndexM($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldWithIndexM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$foldlWithIndex1 = ($dictFoldableWithIndex)->foldlWithIndex;
    $__res = (function() use ($__global_Prim_undefined, $foldlWithIndex1, $__global_Data_Function_flip) {
  $__fn = function($dictMonad) use ($__global_Prim_undefined, $foldlWithIndex1, $__global_Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bind = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
$pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
    $__res = (function() use ($foldlWithIndex1, $bind, $__global_Data_Function_flip, $pure) {
  $__fn = function($f, $a0 = null) use ($foldlWithIndex1, $bind, $__global_Data_Function_flip, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a0) use ($f, &$__fn) { return $__fn($f, $a0); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($foldlWithIndex1)((function() use ($bind, $__global_Data_Function_flip, $f) {
  $__fn = function($i, $ma = null, $b = null) use ($bind, $__global_Data_Function_flip, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($b) use ($i, $ma, &$__fn) { return $__fn($i, $ma, $b); };
    if ($__num === 1) return function($ma, $b = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $ma, $b);
      if ($__num2 === 1) return function($b) use ($i, $ma, &$__fn) { return $__fn($i, $ma, $b); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($bind)($ma, ($__global_Data_Function_flip)(($f)($i), $b));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($pure)($a0));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldWithIndexM'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldWithIndexM';

// Data_FoldableWithIndex_foldMapWithIndexDefaultR
function Data_FoldableWithIndex_foldMapWithIndexDefaultR($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldMapWithIndexDefaultR';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$foldrWithIndex1 = ($dictFoldableWithIndex)->foldrWithIndex;
    $__res = (function() use ($__global_Prim_undefined, $foldrWithIndex1) {
  $__fn = function($dictMonoid) use ($__global_Prim_undefined, $foldrWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
$mempty = ($dictMonoid)->mempty;
    $__res = (function() use ($foldrWithIndex1, $append, $mempty) {
  $__fn = function($f) use ($foldrWithIndex1, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldrWithIndex1)((function() use ($append, $f) {
  $__fn = function($i, $x = null, $acc = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($acc) use ($i, $x, &$__fn) { return $__fn($i, $x, $acc); };
    if ($__num === 1) return function($x, $acc = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $x, $acc);
      if ($__num2 === 1) return function($acc) use ($i, $x, &$__fn) { return $__fn($i, $x, $acc); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($append)(($f)($i, $x), $acc);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $mempty);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldMapWithIndexDefaultR'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldMapWithIndexDefaultR';


// Data_FoldableWithIndex_foldMapWithIndexDefaultL
function Data_FoldableWithIndex_foldMapWithIndexDefaultL($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldMapWithIndexDefaultL';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$foldlWithIndex1 = ($dictFoldableWithIndex)->foldlWithIndex;
    $__res = (function() use ($__global_Prim_undefined, $foldlWithIndex1) {
  $__fn = function($dictMonoid) use ($__global_Prim_undefined, $foldlWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
$mempty = ($dictMonoid)->mempty;
    $__res = (function() use ($foldlWithIndex1, $append, $mempty) {
  $__fn = function($f) use ($foldlWithIndex1, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldlWithIndex1)((function() use ($append, $f) {
  $__fn = function($i, $acc = null, $x = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($i, $acc, &$__fn) { return $__fn($i, $acc, $x); };
    if ($__num === 1) return function($acc, $x = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $acc, $x);
      if ($__num2 === 1) return function($x) use ($i, $acc, &$__fn) { return $__fn($i, $acc, $x); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($append)($acc, ($f)($i, $x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $mempty);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldMapWithIndexDefaultL'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldMapWithIndexDefaultL';

// Data_FoldableWithIndex_foldMapWithIndex
function Data_FoldableWithIndex_foldMapWithIndex($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldMapWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldMapWithIndex;
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($dict);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldMapWithIndex';

// Data_FoldableWithIndex_foldableWithIndexApp
function Data_FoldableWithIndex_foldableWithIndexApp($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldableWithIndexApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableApp = ($GLOBALS['Data_Foldable_foldableApp'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableApp'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$foldrWithIndex1 = ($dictFoldableWithIndex)->foldrWithIndex;
$foldlWithIndex1 = ($dictFoldableWithIndex)->foldlWithIndex;
$foldMapWithIndex1 = ($dictFoldableWithIndex)->foldMapWithIndex;
$foldableApp = ($__global_Data_Foldable_foldableApp)((($dictFoldableWithIndex)->Foldable0)($__global_Prim_undefined));
    $__res = (object)["foldrWithIndex" => (function() use ($foldrWithIndex1) {
  $__body = function($f, $z, $v) use ($foldrWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($foldrWithIndex1)($f1, $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldrWithIndex1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use ($foldlWithIndex1) {
  $__body = function($f, $z, $v) use ($foldlWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($foldlWithIndex1)($f1, $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldlWithIndex1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex1) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex2 = ($foldMapWithIndex1)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex2) {
  $__body = function($f, $v) use ($foldMapWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($foldMapWithIndex2)($f1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use ($foldableApp) {
  $__fn = function($__dollar____unused) use ($foldableApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableApp;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldableWithIndexApp'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldableWithIndexApp';

// Data_FoldableWithIndex_foldableWithIndexCompose
function Data_FoldableWithIndex_foldableWithIndexCompose($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldableWithIndexCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableCompose = ($GLOBALS['Data_Foldable_foldableCompose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableCompose'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$__global_Data_Tuple_curry = ($GLOBALS['Data_Tuple_curry'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_curry'));
$__global_Data_FoldableWithIndex_compose = ($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose'));
$foldrWithIndex1 = ($dictFoldableWithIndex)->foldrWithIndex;
$foldlWithIndex1 = ($dictFoldableWithIndex)->foldlWithIndex;
$foldMapWithIndex1 = ($dictFoldableWithIndex)->foldMapWithIndex;
$foldableCompose = ($__global_Data_Foldable_foldableCompose)((($dictFoldableWithIndex)->Foldable0)($__global_Prim_undefined));
    $__res = (function() use ($foldableCompose, $__global_Prim_undefined, $foldrWithIndex1, $__global_Data_Function_flip, $__global_Data_Tuple_curry, $foldlWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex1) {
  $__fn = function($dictFoldableWithIndex1) use ($foldableCompose, $__global_Prim_undefined, $foldrWithIndex1, $__global_Data_Function_flip, $__global_Data_Tuple_curry, $foldlWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldrWithIndex2 = ($dictFoldableWithIndex1)->foldrWithIndex;
$foldlWithIndex2 = ($dictFoldableWithIndex1)->foldlWithIndex;
$foldMapWithIndex2 = ($dictFoldableWithIndex1)->foldMapWithIndex;
$foldableCompose1 = ($foldableCompose)((($dictFoldableWithIndex1)->Foldable0)($__global_Prim_undefined));
    $__res = (object)["foldrWithIndex" => (function() use ($foldrWithIndex1, $__global_Data_Function_flip, $foldrWithIndex2, $__global_Data_Tuple_curry) {
  $__body = function($f, $i, $v) use ($foldrWithIndex1, $__global_Data_Function_flip, $foldrWithIndex2, $__global_Data_Tuple_curry) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldrWithIndex1)((function() use ($__global_Data_Function_flip, $foldrWithIndex2, $__global_Data_Tuple_curry, $f1) {
  $__fn = function($a) use ($__global_Data_Function_flip, $foldrWithIndex2, $__global_Data_Tuple_curry, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Function_flip)(($foldrWithIndex2)(($__global_Data_Tuple_curry)($f1, $a)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $i1, $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldrWithIndex1, $__global_Data_Function_flip, $foldrWithIndex2, $__global_Data_Tuple_curry, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use ($foldlWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex2, $__global_Data_Tuple_curry) {
  $__body = function($f, $i, $v) use ($foldlWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex2, $__global_Data_Tuple_curry) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldlWithIndex1)(($__global_Data_FoldableWithIndex_compose)($foldlWithIndex2, ($__global_Data_Tuple_curry)($f1)), $i1, $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldlWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex2, $__global_Data_Tuple_curry, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex1, $foldMapWithIndex2, $__global_Data_FoldableWithIndex_compose, $__global_Data_Tuple_curry) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, $foldMapWithIndex2, $__global_Data_FoldableWithIndex_compose, $__global_Data_Tuple_curry, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex3 = ($foldMapWithIndex1)($dictMonoid);
$foldMapWithIndex4 = ($foldMapWithIndex2)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex3, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex4, $__global_Data_Tuple_curry) {
  $__body = function($f, $v) use ($foldMapWithIndex3, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex4, $__global_Data_Tuple_curry) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($foldMapWithIndex3)(($__global_Data_FoldableWithIndex_compose)($foldMapWithIndex4, ($__global_Data_Tuple_curry)($f1)), $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex3, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex4, $__global_Data_Tuple_curry, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use ($foldableCompose1) {
  $__fn = function($__dollar____unused) use ($foldableCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableCompose1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldableWithIndexCompose'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldableWithIndexCompose';

// Data_FoldableWithIndex_foldableWithIndexCoproduct
function Data_FoldableWithIndex_foldableWithIndexCoproduct($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldableWithIndexCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableCoproduct = ($GLOBALS['Data_Foldable_foldableCoproduct'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableCoproduct'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Functor_Coproduct_coproduct = ($GLOBALS['Data_Functor_Coproduct_coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_coproduct'));
$__global_Data_FoldableWithIndex_compose = ($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose'));
$foldrWithIndex1 = ($dictFoldableWithIndex)->foldrWithIndex;
$foldlWithIndex1 = ($dictFoldableWithIndex)->foldlWithIndex;
$foldMapWithIndex1 = ($dictFoldableWithIndex)->foldMapWithIndex;
$foldableCoproduct = ($__global_Data_Foldable_foldableCoproduct)((($dictFoldableWithIndex)->Foldable0)($__global_Prim_undefined));
    $__res = (function() use ($foldableCoproduct, $__global_Prim_undefined, $__global_Data_Functor_Coproduct_coproduct, $foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex1, $foldMapWithIndex1) {
  $__fn = function($dictFoldableWithIndex1) use ($foldableCoproduct, $__global_Prim_undefined, $__global_Data_Functor_Coproduct_coproduct, $foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex1, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldrWithIndex2 = ($dictFoldableWithIndex1)->foldrWithIndex;
$foldlWithIndex2 = ($dictFoldableWithIndex1)->foldlWithIndex;
$foldMapWithIndex2 = ($dictFoldableWithIndex1)->foldMapWithIndex;
$foldableCoproduct1 = ($foldableCoproduct)((($dictFoldableWithIndex1)->Foldable0)($__global_Prim_undefined));
    $__res = (object)["foldrWithIndex" => (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldrWithIndex2) {
  $__fn = function($f, $z = null) use ($__global_Data_Functor_Coproduct_coproduct, $foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldrWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldrWithIndex1)(($__global_Data_FoldableWithIndex_compose)($f, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $z), ($foldrWithIndex2)(($__global_Data_FoldableWithIndex_compose)($f, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldlWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex2) {
  $__fn = function($f, $z = null) use ($__global_Data_Functor_Coproduct_coproduct, $foldlWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldlWithIndex1)(($__global_Data_FoldableWithIndex_compose)($f, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $z), ($foldlWithIndex2)(($__global_Data_FoldableWithIndex_compose)($f, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex1, $foldMapWithIndex2, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_FoldableWithIndex_compose) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, $foldMapWithIndex2, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_FoldableWithIndex_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex3 = ($foldMapWithIndex1)($dictMonoid);
$foldMapWithIndex4 = ($foldMapWithIndex2)($dictMonoid);
    $__res = (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldMapWithIndex3, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex4) {
  $__fn = function($f) use ($__global_Data_Functor_Coproduct_coproduct, $foldMapWithIndex3, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldMapWithIndex3)(($__global_Data_FoldableWithIndex_compose)($f, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($foldMapWithIndex4)(($__global_Data_FoldableWithIndex_compose)($f, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use ($foldableCoproduct1) {
  $__fn = function($__dollar____unused) use ($foldableCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableCoproduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldableWithIndexCoproduct'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldableWithIndexCoproduct';

// Data_FoldableWithIndex_foldableWithIndexProduct
function Data_FoldableWithIndex_foldableWithIndexProduct($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldableWithIndexProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Foldable_foldableProduct = ($GLOBALS['Data_Foldable_foldableProduct'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableProduct'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_FoldableWithIndex_compose = ($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose'));
$foldrWithIndex1 = ($dictFoldableWithIndex)->foldrWithIndex;
$foldlWithIndex1 = ($dictFoldableWithIndex)->foldlWithIndex;
$foldMapWithIndex1 = ($dictFoldableWithIndex)->foldMapWithIndex;
$foldableProduct = ($__global_Data_Foldable_foldableProduct)((($dictFoldableWithIndex)->Foldable0)($__global_Prim_undefined));
    $__res = (function() use ($foldableProduct, $__global_Prim_undefined, $foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex1, $foldMapWithIndex1) {
  $__fn = function($dictFoldableWithIndex1) use ($foldableProduct, $__global_Prim_undefined, $foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex1, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldrWithIndex2 = ($dictFoldableWithIndex1)->foldrWithIndex;
$foldlWithIndex2 = ($dictFoldableWithIndex1)->foldlWithIndex;
$foldMapWithIndex2 = ($dictFoldableWithIndex1)->foldMapWithIndex;
$foldableProduct1 = ($foldableProduct)((($dictFoldableWithIndex1)->Foldable0)($__global_Prim_undefined));
    $__res = (object)["foldrWithIndex" => (function() use ($foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldrWithIndex2) {
  $__body = function($f, $z, $v) use ($foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldrWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
return ($foldrWithIndex1)(($__global_Data_FoldableWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($foldrWithIndex2)(($__global_Data_FoldableWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $z1, $ga), $fa);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldrWithIndex1, $__global_Data_FoldableWithIndex_compose, $foldrWithIndex2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use ($foldlWithIndex2, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex1) {
  $__body = function($f, $z, $v) use ($foldlWithIndex2, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
return ($foldlWithIndex2)(($__global_Data_FoldableWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($foldlWithIndex1)(($__global_Data_FoldableWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $z1, $fa), $ga);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldlWithIndex2, $__global_Data_FoldableWithIndex_compose, $foldlWithIndex1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($__global_Prim_undefined, $foldMapWithIndex1, $foldMapWithIndex2, $__global_Data_FoldableWithIndex_compose) {
  $__fn = function($dictMonoid) use ($__global_Prim_undefined, $foldMapWithIndex1, $foldMapWithIndex2, $__global_Data_FoldableWithIndex_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
$foldMapWithIndex3 = ($foldMapWithIndex1)($dictMonoid);
$foldMapWithIndex4 = ($foldMapWithIndex2)($dictMonoid);
    $__res = (function() use ($append, $foldMapWithIndex3, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex4) {
  $__body = function($f, $v) use ($append, $foldMapWithIndex3, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex4) {
    $__case_0 = $f;
    $__case_1 = $v;
    switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$fa = ($__case_1)->v0;
$ga = ($__case_1)->v1;
return ($append)(($foldMapWithIndex3)(($__global_Data_FoldableWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Left", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $fa), ($foldMapWithIndex4)(($__global_Data_FoldableWithIndex_compose)($f1, (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = new Phpurs_Data1("Right", $value0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $ga));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($f, $v = null) use ($append, $foldMapWithIndex3, $__global_Data_FoldableWithIndex_compose, $foldMapWithIndex4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use ($foldableProduct1) {
  $__fn = function($__dollar____unused) use ($foldableProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $foldableProduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldableWithIndexProduct'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldableWithIndexProduct';

// Data_FoldableWithIndex_foldlWithIndexDefault
function Data_FoldableWithIndex_foldlWithIndexDefault($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldlWithIndexDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_monoidDual = ($GLOBALS['Data_FoldableWithIndex_monoidDual'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_monoidDual'));
$__global_Data_FoldableWithIndex_unwrap = ($GLOBALS['Data_FoldableWithIndex_unwrap'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_unwrap'));
$__global_Data_FoldableWithIndex_compose = ($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose'));
$__global_Data_Monoid_Dual_Dual = ($GLOBALS['Data_Monoid_Dual_Dual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_Dual'));
$__global_Data_Monoid_Endo_Endo = ($GLOBALS['Data_Monoid_Endo_Endo'] ?? \Data\Monoid\Endo\phpurs_eval_thunk('Data_Monoid_Endo_Endo'));
$__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
$foldMapWithIndex1 = (($dictFoldableWithIndex)->foldMapWithIndex)($__global_Data_FoldableWithIndex_monoidDual);
    $__res = (function() use ($__global_Data_FoldableWithIndex_unwrap, $foldMapWithIndex1, $__global_Data_FoldableWithIndex_compose, $__global_Data_Monoid_Dual_Dual, $__global_Data_Monoid_Endo_Endo, $__global_Data_Function_flip) {
  $__fn = function($c, $u = null, $xs = null) use ($__global_Data_FoldableWithIndex_unwrap, $foldMapWithIndex1, $__global_Data_FoldableWithIndex_compose, $__global_Data_Monoid_Dual_Dual, $__global_Data_Monoid_Endo_Endo, $__global_Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($c, $u, &$__fn) { return $__fn($c, $u, $xs); };
    if ($__num === 1) return function($u, $xs = null) use ($c, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($c, $u, $xs);
      if ($__num2 === 1) return function($xs) use ($c, $u, &$__fn) { return $__fn($c, $u, $xs); };
      return phpurs_curry_fallback($__fn, [$c], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_FoldableWithIndex_unwrap)(($__global_Data_FoldableWithIndex_unwrap)(($foldMapWithIndex1)((function() use ($__global_Data_FoldableWithIndex_compose, $__global_Data_Monoid_Dual_Dual, $__global_Data_Monoid_Endo_Endo, $__global_Data_Function_flip, $c) {
  $__fn = function($i) use ($__global_Data_FoldableWithIndex_compose, $__global_Data_Monoid_Dual_Dual, $__global_Data_Monoid_Endo_Endo, $__global_Data_Function_flip, $c, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_FoldableWithIndex_compose)($__global_Data_Monoid_Dual_Dual, ($__global_Data_FoldableWithIndex_compose)($__global_Data_Monoid_Endo_Endo, ($__global_Data_Function_flip)(($c)($i))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs)), $u);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldlWithIndexDefault'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldlWithIndexDefault';

// Data_FoldableWithIndex_foldrWithIndexDefault
function Data_FoldableWithIndex_foldrWithIndexDefault($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldrWithIndexDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_monoidEndo = ($GLOBALS['Data_FoldableWithIndex_monoidEndo'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_monoidEndo'));
$__global_Data_FoldableWithIndex_unwrap = ($GLOBALS['Data_FoldableWithIndex_unwrap'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_unwrap'));
$__global_Data_FoldableWithIndex_compose = ($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose'));
$__global_Data_Monoid_Endo_Endo = ($GLOBALS['Data_Monoid_Endo_Endo'] ?? \Data\Monoid\Endo\phpurs_eval_thunk('Data_Monoid_Endo_Endo'));
$foldMapWithIndex1 = (($dictFoldableWithIndex)->foldMapWithIndex)($__global_Data_FoldableWithIndex_monoidEndo);
    $__res = (function() use ($__global_Data_FoldableWithIndex_unwrap, $foldMapWithIndex1, $__global_Data_FoldableWithIndex_compose, $__global_Data_Monoid_Endo_Endo) {
  $__fn = function($c, $u = null, $xs = null) use ($__global_Data_FoldableWithIndex_unwrap, $foldMapWithIndex1, $__global_Data_FoldableWithIndex_compose, $__global_Data_Monoid_Endo_Endo, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($c, $u, &$__fn) { return $__fn($c, $u, $xs); };
    if ($__num === 1) return function($u, $xs = null) use ($c, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($c, $u, $xs);
      if ($__num2 === 1) return function($xs) use ($c, $u, &$__fn) { return $__fn($c, $u, $xs); };
      return phpurs_curry_fallback($__fn, [$c], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($__global_Data_FoldableWithIndex_unwrap)(($foldMapWithIndex1)((function() use ($__global_Data_FoldableWithIndex_compose, $__global_Data_Monoid_Endo_Endo, $c) {
  $__fn = function($i) use ($__global_Data_FoldableWithIndex_compose, $__global_Data_Monoid_Endo_Endo, $c, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_FoldableWithIndex_compose)($__global_Data_Monoid_Endo_Endo, ($c)($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs), $u);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldrWithIndexDefault'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldrWithIndexDefault';

// Data_FoldableWithIndex_surroundMapWithIndex
function Data_FoldableWithIndex_surroundMapWithIndex($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_surroundMapWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_FoldableWithIndex_monoidEndo = ($GLOBALS['Data_FoldableWithIndex_monoidEndo'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_monoidEndo'));
$__global_Data_FoldableWithIndex_unwrap = ($GLOBALS['Data_FoldableWithIndex_unwrap'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_unwrap'));
$foldMapWithIndex1 = (($dictFoldableWithIndex)->foldMapWithIndex)($__global_Data_FoldableWithIndex_monoidEndo);
    $__res = (function() use ($__global_Data_FoldableWithIndex_unwrap, $foldMapWithIndex1) {
  $__fn = function($dictSemigroup) use ($__global_Data_FoldableWithIndex_unwrap, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$append = ($dictSemigroup)->append;
    $__res = (function() use ($append, $__global_Data_FoldableWithIndex_unwrap, $foldMapWithIndex1) {
  $__fn = function($d, $t = null, $f = null) use ($append, $__global_Data_FoldableWithIndex_unwrap, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($f) use ($d, $t, &$__fn) { return $__fn($d, $t, $f); };
    if ($__num === 1) return function($t, $f = null) use ($d, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($d, $t, $f);
      if ($__num2 === 1) return function($f) use ($d, $t, &$__fn) { return $__fn($d, $t, $f); };
      return phpurs_curry_fallback($__fn, [$d], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$joined = (function() use ($append, $d, $t) {
  $__fn = function($i, $a = null, $m = null) use ($append, $d, $t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m) use ($i, $a, &$__fn) { return $__fn($i, $a, $m); };
    if ($__num === 1) return function($a, $m = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $a, $m);
      if ($__num2 === 1) return function($m) use ($i, $a, &$__fn) { return $__fn($i, $a, $m); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = ($append)($d, ($append)(($t)($i, $a), $m));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = ($__global_Data_FoldableWithIndex_unwrap)(($foldMapWithIndex1)($joined, $f), $d);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_surroundMapWithIndex'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_surroundMapWithIndex';

// Data_FoldableWithIndex_foldMapDefault
function Data_FoldableWithIndex_foldMapDefault($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_foldMapDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
$foldMapWithIndex1 = ($dictFoldableWithIndex)->foldMapWithIndex;
    $__res = (function() use ($foldMapWithIndex1, $__global_Data_Function_const) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex2 = ($foldMapWithIndex1)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex2, $__global_Data_Function_const) {
  $__fn = function($f) use ($foldMapWithIndex2, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($foldMapWithIndex2)(($__global_Data_Function_const)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_foldMapDefault'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_foldMapDefault';

// Data_FoldableWithIndex_findWithIndex
function Data_FoldableWithIndex_findWithIndex($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_findWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldlWithIndex1 = ($dictFoldableWithIndex)->foldlWithIndex;
    $__res = (function() use ($foldlWithIndex1) {
  $__fn = function($p) use ($foldlWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_1)->tag) {
case "Nothing":
$i = $__case_0;
$x = $__case_2;
return "/* Unsupported: Guards not supported */";
break;
default:
$r = $__case_1;
return $r;
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $v1, $v2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = ($foldlWithIndex1)($go, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_findWithIndex'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_findWithIndex';

// Data_FoldableWithIndex_findMapWithIndex
function Data_FoldableWithIndex_findMapWithIndex($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_findMapWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldlWithIndex1 = ($dictFoldableWithIndex)->foldlWithIndex;
    $__res = (function() use ($foldlWithIndex1) {
  $__fn = function($f) use ($foldlWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$go = (function() use ($f) {
  $__body = function($v, $v1, $v2) use ($f) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    switch (($__case_1)->tag) {
case "Nothing":
$i = $__case_0;
$x = $__case_2;
return ($f)($i, $x);
break;
default:
$r = $__case_1;
return $r;
break;
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
    $__res = $__body($v, $v1, $v2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = ($foldlWithIndex1)($go, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_findMapWithIndex'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_findMapWithIndex';

// Data_FoldableWithIndex_anyWithIndex
function Data_FoldableWithIndex_anyWithIndex($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_anyWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Monoid_Disj_monoidDisj = ($GLOBALS['Data_Monoid_Disj_monoidDisj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_monoidDisj'));
$__global_Data_FoldableWithIndex_compose = ($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose'));
$__global_Data_FoldableWithIndex_unwrap = ($GLOBALS['Data_FoldableWithIndex_unwrap'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_unwrap'));
$__global_Data_Monoid_Disj_Disj = ($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj'));
$foldMapWithIndex1 = ($dictFoldableWithIndex)->foldMapWithIndex;
    $__res = (function() use ($foldMapWithIndex1, $__global_Data_Monoid_Disj_monoidDisj, $__global_Data_FoldableWithIndex_compose, $__global_Data_FoldableWithIndex_unwrap, $__global_Data_Monoid_Disj_Disj) {
  $__fn = function($dictHeytingAlgebra) use ($foldMapWithIndex1, $__global_Data_Monoid_Disj_monoidDisj, $__global_Data_FoldableWithIndex_compose, $__global_Data_FoldableWithIndex_unwrap, $__global_Data_Monoid_Disj_Disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex2 = ($foldMapWithIndex1)(($__global_Data_Monoid_Disj_monoidDisj)($dictHeytingAlgebra));
    $__res = (function() use ($__global_Data_FoldableWithIndex_compose, $__global_Data_FoldableWithIndex_unwrap, $foldMapWithIndex2, $__global_Data_Monoid_Disj_Disj) {
  $__fn = function($t) use ($__global_Data_FoldableWithIndex_compose, $__global_Data_FoldableWithIndex_unwrap, $foldMapWithIndex2, $__global_Data_Monoid_Disj_Disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_FoldableWithIndex_compose)($__global_Data_FoldableWithIndex_unwrap, ($foldMapWithIndex2)((function() use ($__global_Data_FoldableWithIndex_compose, $__global_Data_Monoid_Disj_Disj, $t) {
  $__fn = function($i) use ($__global_Data_FoldableWithIndex_compose, $__global_Data_Monoid_Disj_Disj, $t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_FoldableWithIndex_compose)($__global_Data_Monoid_Disj_Disj, ($t)($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_anyWithIndex'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_anyWithIndex';

// Data_FoldableWithIndex_allWithIndex
function Data_FoldableWithIndex_allWithIndex($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_FoldableWithIndex_allWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Monoid_Conj_monoidConj = ($GLOBALS['Data_Monoid_Conj_monoidConj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_monoidConj'));
$__global_Data_FoldableWithIndex_compose = ($GLOBALS['Data_FoldableWithIndex_compose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_compose'));
$__global_Data_FoldableWithIndex_unwrap = ($GLOBALS['Data_FoldableWithIndex_unwrap'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_unwrap'));
$__global_Data_Monoid_Conj_Conj = ($GLOBALS['Data_Monoid_Conj_Conj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_Conj'));
$foldMapWithIndex1 = ($dictFoldableWithIndex)->foldMapWithIndex;
    $__res = (function() use ($foldMapWithIndex1, $__global_Data_Monoid_Conj_monoidConj, $__global_Data_FoldableWithIndex_compose, $__global_Data_FoldableWithIndex_unwrap, $__global_Data_Monoid_Conj_Conj) {
  $__fn = function($dictHeytingAlgebra) use ($foldMapWithIndex1, $__global_Data_Monoid_Conj_monoidConj, $__global_Data_FoldableWithIndex_compose, $__global_Data_FoldableWithIndex_unwrap, $__global_Data_Monoid_Conj_Conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$foldMapWithIndex2 = ($foldMapWithIndex1)(($__global_Data_Monoid_Conj_monoidConj)($dictHeytingAlgebra));
    $__res = (function() use ($__global_Data_FoldableWithIndex_compose, $__global_Data_FoldableWithIndex_unwrap, $foldMapWithIndex2, $__global_Data_Monoid_Conj_Conj) {
  $__fn = function($t) use ($__global_Data_FoldableWithIndex_compose, $__global_Data_FoldableWithIndex_unwrap, $foldMapWithIndex2, $__global_Data_Monoid_Conj_Conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_FoldableWithIndex_compose)($__global_Data_FoldableWithIndex_unwrap, ($foldMapWithIndex2)((function() use ($__global_Data_FoldableWithIndex_compose, $__global_Data_Monoid_Conj_Conj, $t) {
  $__fn = function($i) use ($__global_Data_FoldableWithIndex_compose, $__global_Data_Monoid_Conj_Conj, $t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_FoldableWithIndex_compose)($__global_Data_Monoid_Conj_Conj, ($t)($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FoldableWithIndex_allWithIndex'] = __NAMESPACE__ . '\\Data_FoldableWithIndex_allWithIndex';

