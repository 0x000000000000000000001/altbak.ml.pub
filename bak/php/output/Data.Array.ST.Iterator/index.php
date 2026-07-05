<?php

namespace Data\Array\ST\Iterator;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.ST/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Ref/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array.ST/index.php';
require_once __DIR__ . '/../Data.Array.ST.Iterator/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
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
      case 'Data_Array_ST_Iterator_bind': $v = ($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bind_')); break;
      case 'Data_Array_ST_Iterator_pure': $v = ($GLOBALS['Control_Monad_ST_Internal_pure_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_pure_')); break;
      case 'Data_Array_ST_Iterator_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Array_ST_Iterator_map': $v = ($GLOBALS['Control_Monad_ST_Internal_map_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_map_')); break;
      case 'Data_Array_ST_Iterator_not': $v = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot')); break;
      case 'Data_Array_ST_Iterator_void': $v = (($GLOBALS['Data_Functor_void'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_void')))(($GLOBALS['Control_Monad_ST_Internal_functorST'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_functorST'))); break;
      case 'Data_Array_ST_Iterator_pushAll': $v = (($GLOBALS['Data_Array_ST_Iterator_pushWhile'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_pushWhile')))((($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const')))(true)); break;
      case 'Data_Array_ST_Iterator_exhausted': $v = ((($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose)((($GLOBALS['Control_Monad_ST_Internal_map_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_map_')))(($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing'))), ($GLOBALS['Data_Array_ST_Iterator_peek'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_peek'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };








// Data_Array_ST_Iterator_Iterator
function Data_Array_ST_Iterator_Iterator($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_Iterator_Iterator';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Iterator", $value0, $value1);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_ST_Iterator_Iterator'] = __NAMESPACE__ . '\\Data_Array_ST_Iterator_Iterator';

// Data_Array_ST_Iterator_peek
function Data_Array_ST_Iterator_peek($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_Iterator_peek';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Control_Monad_ST_Internal_bind_ = ($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bind_'));
    $__global_Control_Monad_ST_Internal_read = ($GLOBALS['Control_Monad_ST_Internal_read'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_read'));
    $__global_Control_Monad_ST_Internal_pure_ = ($GLOBALS['Control_Monad_ST_Internal_pure_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_pure_'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Iterator":
$f = ($__case_0)->v0;
$currentIndex = ($__case_0)->v1;
return ($__global_Control_Monad_ST_Internal_bind_)(($__global_Control_Monad_ST_Internal_read)($currentIndex), (function() use ($__global_Control_Monad_ST_Internal_pure_, $f) {
  $__fn = function($i) use ($__global_Control_Monad_ST_Internal_pure_, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_ST_Internal_pure_)(($f)($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_ST_Iterator_peek'] = __NAMESPACE__ . '\\Data_Array_ST_Iterator_peek';

// Data_Array_ST_Iterator_next
function Data_Array_ST_Iterator_next($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_Iterator_next';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__body = function($v) {
    $__global_Control_Monad_ST_Internal_bind_ = ($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bind_'));
    $__global_Control_Monad_ST_Internal_read = ($GLOBALS['Control_Monad_ST_Internal_read'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_read'));
    $__global_Control_Monad_ST_Internal_modify = ($GLOBALS['Control_Monad_ST_Internal_modify'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_modify'));
    $__global_Control_Monad_ST_Internal_pure_ = ($GLOBALS['Control_Monad_ST_Internal_pure_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_pure_'));
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Iterator":
$f = ($__case_0)->v0;
$currentIndex = ($__case_0)->v1;
return ($__global_Control_Monad_ST_Internal_bind_)(($__global_Control_Monad_ST_Internal_read)($currentIndex), (function() use ($__global_Control_Monad_ST_Internal_bind_, $__global_Control_Monad_ST_Internal_modify, $currentIndex, $__global_Control_Monad_ST_Internal_pure_, $f) {
  $__fn = function($i) use ($__global_Control_Monad_ST_Internal_bind_, $__global_Control_Monad_ST_Internal_modify, $currentIndex, $__global_Control_Monad_ST_Internal_pure_, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_ST_Internal_bind_)(($__global_Control_Monad_ST_Internal_modify)((function() {
  $__fn = function($v1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($v1 + 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $currentIndex), (function() use ($__global_Control_Monad_ST_Internal_pure_, $f, $i) {
  $__fn = function($__dollar____unused) use ($__global_Control_Monad_ST_Internal_pure_, $f, $i, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_ST_Internal_pure_)(($f)($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
    $__res = $__body($v);
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_ST_Iterator_next'] = __NAMESPACE__ . '\\Data_Array_ST_Iterator_next';

// Data_Array_ST_Iterator_pushWhile
function Data_Array_ST_Iterator_pushWhile($p, $iter = null, $array = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_Iterator_pushWhile';
  if ($__num < 3) {
    if ($__num === 2) return function($array) use ($p, $iter, $__fn) { return $__fn($p, $iter, $array); };
    if ($__num === 1) return function($iter, $array = null) use ($p, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($p, $iter, $array);
      if ($__num2 === 1) return function($array) use ($p, $iter, $__fn) { return $__fn($p, $iter, $array); };
      return phpurs_curry_fallback($__fn, [$p], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
$__global_Control_Monad_ST_Internal_bind_ = ($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bind_'));
$__global_Control_Monad_ST_Internal_new = ($GLOBALS['Control_Monad_ST_Internal_new'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_new'));
$__global_Control_Monad_ST_Internal_while = ($GLOBALS['Control_Monad_ST_Internal_while'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_while'));
$__global_Control_Monad_ST_Internal_map_ = ($GLOBALS['Control_Monad_ST_Internal_map_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_map_'));
$__global_Data_HeytingAlgebra_boolNot = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot'));
$__global_Control_Monad_ST_Internal_read = ($GLOBALS['Control_Monad_ST_Internal_read'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_read'));
$__global_Data_Array_ST_Iterator_peek = ($GLOBALS['Data_Array_ST_Iterator_peek'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_peek'));
$__global_Data_Array_ST_Iterator_void = ($GLOBALS['Data_Array_ST_Iterator_void'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_void'));
$__global_Control_Monad_ST_Internal_write = ($GLOBALS['Control_Monad_ST_Internal_write'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_write'));
    $__res = ($__global_Control_Monad_ST_Internal_bind_)(($__global_Control_Monad_ST_Internal_new)(false), (function() use ($__global_Control_Monad_ST_Internal_while, $__global_Control_Monad_ST_Internal_map_, $__global_Data_HeytingAlgebra_boolNot, $__global_Control_Monad_ST_Internal_read, $__global_Control_Monad_ST_Internal_bind_, $__global_Data_Array_ST_Iterator_peek, $iter, $__global_Data_Array_ST_Iterator_void, $__global_Control_Monad_ST_Internal_write) {
  $__fn = function($break) use ($__global_Control_Monad_ST_Internal_while, $__global_Control_Monad_ST_Internal_map_, $__global_Data_HeytingAlgebra_boolNot, $__global_Control_Monad_ST_Internal_read, $__global_Control_Monad_ST_Internal_bind_, $__global_Data_Array_ST_Iterator_peek, $iter, $__global_Data_Array_ST_Iterator_void, $__global_Control_Monad_ST_Internal_write, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_ST_Internal_while)(($__global_Control_Monad_ST_Internal_map_)($__global_Data_HeytingAlgebra_boolNot, ($__global_Control_Monad_ST_Internal_read)($break)), ($__global_Control_Monad_ST_Internal_bind_)(($__global_Data_Array_ST_Iterator_peek)($iter), (function() use ($__global_Data_Array_ST_Iterator_void, $__global_Control_Monad_ST_Internal_write, $break) {
  $__body = function($mx) use ($__global_Data_Array_ST_Iterator_void, $__global_Control_Monad_ST_Internal_write, $break) {
    $__case_0 = $mx;
    switch (($__case_0)->tag) {
case "Just":
$x = ($__case_0)->v0;
return "/* Unsupported: Guards not supported */";
break;
default:
return ($__global_Data_Array_ST_Iterator_void)(($__global_Control_Monad_ST_Internal_write)(true, $break));
break;
};
  };
  $__fn = function($mx) use ($__global_Data_Array_ST_Iterator_void, $__global_Control_Monad_ST_Internal_write, $break, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($mx);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Array_ST_Iterator_pushWhile'] = __NAMESPACE__ . '\\Data_Array_ST_Iterator_pushWhile';


// Data_Array_ST_Iterator_iterator
function Data_Array_ST_Iterator_iterator($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_Iterator_iterator';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Control_Monad_ST_Internal_map_ = ($GLOBALS['Control_Monad_ST_Internal_map_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_map_'));
$__global_Control_Monad_ST_Internal_new = ($GLOBALS['Control_Monad_ST_Internal_new'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_new'));
    $__res = ($__global_Control_Monad_ST_Internal_map_)(((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Iterator", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($f), ($__global_Control_Monad_ST_Internal_new)(0));
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_ST_Iterator_iterator'] = __NAMESPACE__ . '\\Data_Array_ST_Iterator_iterator';

// Data_Array_ST_Iterator_iterate
function Data_Array_ST_Iterator_iterate($iter, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Array_ST_Iterator_iterate';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($iter, $__fn) { return $__fn($iter, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
$__global_Control_Monad_ST_Internal_bind_ = ($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_bind_'));
$__global_Control_Monad_ST_Internal_new = ($GLOBALS['Control_Monad_ST_Internal_new'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_new'));
$__global_Control_Monad_ST_Internal_while = ($GLOBALS['Control_Monad_ST_Internal_while'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_while'));
$__global_Control_Monad_ST_Internal_map_ = ($GLOBALS['Control_Monad_ST_Internal_map_'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_map_'));
$__global_Data_HeytingAlgebra_boolNot = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot'));
$__global_Control_Monad_ST_Internal_read = ($GLOBALS['Control_Monad_ST_Internal_read'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_read'));
$__global_Data_Array_ST_Iterator_next = ($GLOBALS['Data_Array_ST_Iterator_next'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_next'));
$__global_Data_Array_ST_Iterator_void = ($GLOBALS['Data_Array_ST_Iterator_void'] ?? \Data\Array\ST\Iterator\phpurs_eval_thunk('Data_Array_ST_Iterator_void'));
$__global_Control_Monad_ST_Internal_write = ($GLOBALS['Control_Monad_ST_Internal_write'] ?? \Control\Monad\ST\Internal\phpurs_eval_thunk('Control_Monad_ST_Internal_write'));
    $__res = ($__global_Control_Monad_ST_Internal_bind_)(($__global_Control_Monad_ST_Internal_new)(false), (function() use ($__global_Control_Monad_ST_Internal_while, $__global_Control_Monad_ST_Internal_map_, $__global_Data_HeytingAlgebra_boolNot, $__global_Control_Monad_ST_Internal_read, $__global_Control_Monad_ST_Internal_bind_, $__global_Data_Array_ST_Iterator_next, $iter, $f, $__global_Data_Array_ST_Iterator_void, $__global_Control_Monad_ST_Internal_write) {
  $__fn = function($break) use ($__global_Control_Monad_ST_Internal_while, $__global_Control_Monad_ST_Internal_map_, $__global_Data_HeytingAlgebra_boolNot, $__global_Control_Monad_ST_Internal_read, $__global_Control_Monad_ST_Internal_bind_, $__global_Data_Array_ST_Iterator_next, $iter, $f, $__global_Data_Array_ST_Iterator_void, $__global_Control_Monad_ST_Internal_write, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Control_Monad_ST_Internal_while)(($__global_Control_Monad_ST_Internal_map_)($__global_Data_HeytingAlgebra_boolNot, ($__global_Control_Monad_ST_Internal_read)($break)), ($__global_Control_Monad_ST_Internal_bind_)(($__global_Data_Array_ST_Iterator_next)($iter), (function() use ($f, $__global_Data_Array_ST_Iterator_void, $__global_Control_Monad_ST_Internal_write, $break) {
  $__body = function($mx) use ($f, $__global_Data_Array_ST_Iterator_void, $__global_Control_Monad_ST_Internal_write, $break) {
    $__case_0 = $mx;
    switch (($__case_0)->tag) {
case "Just":
$x = ($__case_0)->v0;
return ($f)($x);
break;
case "Nothing":
return ($__global_Data_Array_ST_Iterator_void)(($__global_Control_Monad_ST_Internal_write)(true, $break));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($mx) use ($f, $__global_Data_Array_ST_Iterator_void, $__global_Control_Monad_ST_Internal_write, $break, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($mx);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_ST_Iterator_iterate'] = __NAMESPACE__ . '\\Data_Array_ST_Iterator_iterate';


