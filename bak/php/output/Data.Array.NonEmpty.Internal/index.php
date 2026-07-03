<?php

namespace Data\Array\NonEmpty\Internal;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Array_NonEmpty_Internal_append
$Data_Array_NonEmpty_Internal_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Array_NonEmpty_Internal_NonEmptyArray
$Data_Array_NonEmpty_Internal_NonEmptyArray = (function() {
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

// Data_Array_NonEmpty_Internal_unfoldable1NonEmptyArray
$Data_Array_NonEmpty_Internal_unfoldable1NonEmptyArray = $Data_Unfoldable1_unfoldable1Array;

// Data_Array_NonEmpty_Internal_traversableWithIndexNonEmptyArray
$Data_Array_NonEmpty_Internal_traversableWithIndexNonEmptyArray = $Data_TraversableWithIndex_traversableWithIndexArray;

// Data_Array_NonEmpty_Internal_traversableNonEmptyArray
$Data_Array_NonEmpty_Internal_traversableNonEmptyArray = $Data_Traversable_traversableArray;

// Data_Array_NonEmpty_Internal_showNonEmptyArray
$Data_Array_NonEmpty_Internal_showNonEmptyArray = (function() use (&$Data_Show_show, &$Data_Show_showArray, &$Data_Show_Show__dollar__Dict, &$Data_Array_NonEmpty_Internal_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_showArray, &$Data_Show_Show__dollar__Dict, &$Data_Array_NonEmpty_Internal_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)(($Data_Show_showArray)($dictShow));
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Array_NonEmpty_Internal_append, $show) {
  $__body = function($v) use (&$Data_Array_NonEmpty_Internal_append, $show) {
    $__case_0 = $v;
    if (true) {
$xs = $__case_0;
return ($Data_Array_NonEmpty_Internal_append)("(NonEmptyArray ", ($Data_Array_NonEmpty_Internal_append)(($show)($xs), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Array_NonEmpty_Internal_append, $show, $__body, &$__fn) {
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_Internal_semigroupNonEmptyArray
$Data_Array_NonEmpty_Internal_semigroupNonEmptyArray = $Data_Semigroup_semigroupArray;

// Data_Array_NonEmpty_Internal_ordNonEmptyArray
$Data_Array_NonEmpty_Internal_ordNonEmptyArray = (function() use (&$Data_Ord_ordArray) {
  $__fn = function($dictOrd) use (&$Data_Ord_ordArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Ord_ordArray)($dictOrd);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_Internal_ord1NonEmptyArray
$Data_Array_NonEmpty_Internal_ord1NonEmptyArray = $Data_Ord_ord1Array;

// Data_Array_NonEmpty_Internal_monadNonEmptyArray
$Data_Array_NonEmpty_Internal_monadNonEmptyArray = $Control_Monad_monadArray;

// Data_Array_NonEmpty_Internal_functorWithIndexNonEmptyArray
$Data_Array_NonEmpty_Internal_functorWithIndexNonEmptyArray = $Data_FunctorWithIndex_functorWithIndexArray;

// Data_Array_NonEmpty_Internal_functorNonEmptyArray
$Data_Array_NonEmpty_Internal_functorNonEmptyArray = $Data_Functor_functorArray;

// Data_Array_NonEmpty_Internal_foldableWithIndexNonEmptyArray
$Data_Array_NonEmpty_Internal_foldableWithIndexNonEmptyArray = $Data_FoldableWithIndex_foldableWithIndexArray;

// Data_Array_NonEmpty_Internal_foldableNonEmptyArray
$Data_Array_NonEmpty_Internal_foldableNonEmptyArray = $Data_Foldable_foldableArray;

// Data_Array_NonEmpty_Internal_foldable1NonEmptyArray
$Data_Array_NonEmpty_Internal_foldable1NonEmptyArray = ($Data_Semigroup_Foldable_Foldable1__dollar__Dict)((object)["foldMap1" => (function() use (&$Data_Semigroup_Foldable_foldMap1DefaultL, &$Data_Array_NonEmpty_Internal_foldable1NonEmptyArray, &$Data_Array_NonEmpty_Internal_functorNonEmptyArray) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_Foldable_foldMap1DefaultL, &$Data_Array_NonEmpty_Internal_foldable1NonEmptyArray, &$Data_Array_NonEmpty_Internal_functorNonEmptyArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Foldable_foldMap1DefaultL)($Data_Array_NonEmpty_Internal_foldable1NonEmptyArray, $Data_Array_NonEmpty_Internal_functorNonEmptyArray, $dictSemigroup);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldr1" => ($Data_Function_Uncurried_runFn2)($Data_Array_NonEmpty_Internal_foldr1Impl), "foldl1" => ($Data_Function_Uncurried_runFn2)($Data_Array_NonEmpty_Internal_foldl1Impl), "Foldable0" => (function() use (&$Data_Array_NonEmpty_Internal_foldableNonEmptyArray) {
  $__fn = function($__dollar____unused) use (&$Data_Array_NonEmpty_Internal_foldableNonEmptyArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Array_NonEmpty_Internal_foldableNonEmptyArray;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Array_NonEmpty_Internal_traversable1NonEmptyArray
$Data_Array_NonEmpty_Internal_traversable1NonEmptyArray = ($Data_Semigroup_Traversable_Traversable1__dollar__Dict)((object)["traverse1" => (function() use (&$Control_Apply_apply, &$Data_Functor_map, &$Prim_undefined, &$Data_Function_Uncurried_runFn3, &$Data_Array_NonEmpty_Internal_traverse1Impl) {
  $__fn = function($dictApply) use (&$Control_Apply_apply, &$Data_Functor_map, &$Prim_undefined, &$Data_Function_Uncurried_runFn3, &$Data_Array_NonEmpty_Internal_traverse1Impl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$apply = ($Control_Apply_apply)($dictApply);
$map = ($Data_Functor_map)((($dictApply)->Functor0)($Prim_undefined));
    $__res = (function() use (&$Data_Function_Uncurried_runFn3, &$Data_Array_NonEmpty_Internal_traverse1Impl, $apply, $map) {
  $__fn = function($f) use (&$Data_Function_Uncurried_runFn3, &$Data_Array_NonEmpty_Internal_traverse1Impl, $apply, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_Uncurried_runFn3)($Data_Array_NonEmpty_Internal_traverse1Impl, $apply, $map, $f);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "sequence1" => (function() use (&$Data_Semigroup_Traversable_sequence1Default, &$Data_Array_NonEmpty_Internal_traversable1NonEmptyArray) {
  $__fn = function($dictApply) use (&$Data_Semigroup_Traversable_sequence1Default, &$Data_Array_NonEmpty_Internal_traversable1NonEmptyArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Traversable_sequence1Default)($Data_Array_NonEmpty_Internal_traversable1NonEmptyArray, $dictApply);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable10" => (function() use (&$Data_Array_NonEmpty_Internal_foldable1NonEmptyArray) {
  $__fn = function($__dollar____unused) use (&$Data_Array_NonEmpty_Internal_foldable1NonEmptyArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Array_NonEmpty_Internal_foldable1NonEmptyArray;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable1" => (function() use (&$Data_Array_NonEmpty_Internal_traversableNonEmptyArray) {
  $__fn = function($__dollar____unused) use (&$Data_Array_NonEmpty_Internal_traversableNonEmptyArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Array_NonEmpty_Internal_traversableNonEmptyArray;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Array_NonEmpty_Internal_eqNonEmptyArray
$Data_Array_NonEmpty_Internal_eqNonEmptyArray = (function() use (&$Data_Eq_eqArray) {
  $__fn = function($dictEq) use (&$Data_Eq_eqArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_eqArray)($dictEq);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_Internal_eq1NonEmptyArray
$Data_Array_NonEmpty_Internal_eq1NonEmptyArray = $Data_Eq_eq1Array;

// Data_Array_NonEmpty_Internal_bindNonEmptyArray
$Data_Array_NonEmpty_Internal_bindNonEmptyArray = $Control_Bind_bindArray;

// Data_Array_NonEmpty_Internal_applyNonEmptyArray
$Data_Array_NonEmpty_Internal_applyNonEmptyArray = $Control_Apply_applyArray;

// Data_Array_NonEmpty_Internal_applicativeNonEmptyArray
$Data_Array_NonEmpty_Internal_applicativeNonEmptyArray = $Control_Applicative_applicativeArray;

// Data_Array_NonEmpty_Internal_altNonEmptyArray
$Data_Array_NonEmpty_Internal_altNonEmptyArray = $Control_Alt_altArray;

