<?php

namespace Data\Date\Component\Gen;

require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Enum.Gen/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Date_Component_Gen_compose
$Data_Date_Component_Gen_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Date_Component_Gen_fromJust
$Data_Date_Component_Gen_fromJust = ($Data_Maybe_fromJust)($Prim_undefined);

// Data_Date_Component_Gen_toEnum
$Data_Date_Component_Gen_toEnum = ($Data_Enum_toEnum)($Data_Date_Component_boundedEnumYear);

// Data_Date_Component_Gen_genYear
$Data_Date_Component_Gen_genYear = (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Date_Component_Gen_compose, &$Partial_Unsafe_unsafePartial, &$Data_Date_Component_Gen_fromJust, &$Data_Date_Component_Gen_toEnum, &$Control_Monad_Gen_Class_chooseInt) {
  $__fn = function($dictMonadGen) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Date_Component_Gen_compose, &$Partial_Unsafe_unsafePartial, &$Data_Date_Component_Gen_fromJust, &$Data_Date_Component_Gen_toEnum, &$Control_Monad_Gen_Class_chooseInt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_map)((((((((($dictMonadGen)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined), ($Data_Date_Component_Gen_compose)(($Partial_Unsafe_unsafePartial)((function() use (&$Data_Date_Component_Gen_fromJust) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Component_Gen_fromJust, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_Component_Gen_fromJust;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), $Data_Date_Component_Gen_toEnum), ($Control_Monad_Gen_Class_chooseInt)($dictMonadGen, 1900, 2100));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Date_Component_Gen_genWeekday
$Data_Date_Component_Gen_genWeekday = (function() use (&$Data_Enum_Gen_genBoundedEnum, &$Data_Date_Component_boundedEnumWeekday) {
  $__fn = function($dictMonadGen) use (&$Data_Enum_Gen_genBoundedEnum, &$Data_Date_Component_boundedEnumWeekday, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Enum_Gen_genBoundedEnum)($dictMonadGen, $Data_Date_Component_boundedEnumWeekday);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Date_Component_Gen_genMonth
$Data_Date_Component_Gen_genMonth = (function() use (&$Data_Enum_Gen_genBoundedEnum, &$Data_Date_Component_boundedEnumMonth) {
  $__fn = function($dictMonadGen) use (&$Data_Enum_Gen_genBoundedEnum, &$Data_Date_Component_boundedEnumMonth, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Enum_Gen_genBoundedEnum)($dictMonadGen, $Data_Date_Component_boundedEnumMonth);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Date_Component_Gen_genDay
$Data_Date_Component_Gen_genDay = (function() use (&$Data_Enum_Gen_genBoundedEnum, &$Data_Date_Component_boundedEnumDay) {
  $__fn = function($dictMonadGen) use (&$Data_Enum_Gen_genBoundedEnum, &$Data_Date_Component_boundedEnumDay, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Enum_Gen_genBoundedEnum)($dictMonadGen, $Data_Date_Component_boundedEnumDay);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

