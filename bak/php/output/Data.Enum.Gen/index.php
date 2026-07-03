<?php

namespace Data\Enum\Gen;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Enum_Gen_foldable1NonEmpty
$Data_Enum_Gen_foldable1NonEmpty = ($Data_NonEmpty_foldable1NonEmpty)($Data_Foldable_foldableArray);

// Data_Enum_Gen_genBoundedEnum
$Data_Enum_Gen_genBoundedEnum = (function() use (&$Control_Monad_Gen_elements, &$Data_Enum_Gen_foldable1NonEmpty, &$Control_Applicative_pure, &$Prim_undefined, &$Data_Bounded_bottom, &$Data_Enum_succ, &$Data_Enum_enumFromTo, &$Data_Unfoldable1_unfoldable1Array, &$Data_Bounded_top, &$Data_NonEmpty_NonEmpty) {
  $__fn = function($dictMonadGen) use (&$Control_Monad_Gen_elements, &$Data_Enum_Gen_foldable1NonEmpty, &$Control_Applicative_pure, &$Prim_undefined, &$Data_Bounded_bottom, &$Data_Enum_succ, &$Data_Enum_enumFromTo, &$Data_Unfoldable1_unfoldable1Array, &$Data_Bounded_top, &$Data_NonEmpty_NonEmpty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$elements = ($Control_Monad_Gen_elements)($dictMonadGen, $Data_Enum_Gen_foldable1NonEmpty);
$pure = ($Control_Applicative_pure)((((($dictMonadGen)->Monad0)($Prim_undefined))->Applicative0)($Prim_undefined));
    $__res = (function() use (&$Prim_undefined, &$Data_Bounded_bottom, &$Data_Enum_succ, &$Data_Enum_enumFromTo, &$Data_Unfoldable1_unfoldable1Array, &$Data_Bounded_top, $elements, &$Data_NonEmpty_NonEmpty, $pure) {
  $__body = function($dictBoundedEnum) use (&$Prim_undefined, &$Data_Bounded_bottom, &$Data_Enum_succ, &$Data_Enum_enumFromTo, &$Data_Unfoldable1_unfoldable1Array, &$Data_Bounded_top, $elements, &$Data_NonEmpty_NonEmpty, $pure) {
    $Enum1 = (($dictBoundedEnum)->Enum1)($Prim_undefined);
    $Bounded0 = (($dictBoundedEnum)->Bounded0)($Prim_undefined);
    $bottom = ($Data_Bounded_bottom)($Bounded0);
    $v = ($Data_Enum_succ)($Enum1, $bottom);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Just")) {
$a = ($__case_0)->values[0];
$possibilities = ($Data_Enum_enumFromTo)($Enum1, $Data_Unfoldable1_unfoldable1Array, $a, ($Data_Bounded_top)($Bounded0));
return ($elements)(($Data_NonEmpty_NonEmpty)($bottom, $possibilities));
} else {
;
};
    if ((($__case_0)->tag === "Nothing")) {
return ($pure)($bottom);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dictBoundedEnum) use (&$Prim_undefined, &$Data_Bounded_bottom, &$Data_Enum_succ, &$Data_Enum_enumFromTo, &$Data_Unfoldable1_unfoldable1Array, &$Data_Bounded_top, $elements, &$Data_NonEmpty_NonEmpty, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($dictBoundedEnum);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($dictBoundedEnum);
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
})();

