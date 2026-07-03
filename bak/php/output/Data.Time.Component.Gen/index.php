<?php

namespace Data\Time\Component\Gen;

require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Data.Enum.Gen/index.php';
require_once __DIR__ . '/../Data.Time.Component/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Time_Component_Gen_genSecond
$Data_Time_Component_Gen_genSecond = (function() use (&$Data_Enum_Gen_genBoundedEnum, &$Data_Time_Component_boundedEnumSecond) {
  $__fn = function($dictMonadGen) use (&$Data_Enum_Gen_genBoundedEnum, &$Data_Time_Component_boundedEnumSecond, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Enum_Gen_genBoundedEnum)($dictMonadGen, $Data_Time_Component_boundedEnumSecond);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Time_Component_Gen_genMinute
$Data_Time_Component_Gen_genMinute = (function() use (&$Data_Enum_Gen_genBoundedEnum, &$Data_Time_Component_boundedEnumMinute) {
  $__fn = function($dictMonadGen) use (&$Data_Enum_Gen_genBoundedEnum, &$Data_Time_Component_boundedEnumMinute, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Enum_Gen_genBoundedEnum)($dictMonadGen, $Data_Time_Component_boundedEnumMinute);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Time_Component_Gen_genMillisecond
$Data_Time_Component_Gen_genMillisecond = (function() use (&$Data_Enum_Gen_genBoundedEnum, &$Data_Time_Component_boundedEnumMillisecond) {
  $__fn = function($dictMonadGen) use (&$Data_Enum_Gen_genBoundedEnum, &$Data_Time_Component_boundedEnumMillisecond, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Enum_Gen_genBoundedEnum)($dictMonadGen, $Data_Time_Component_boundedEnumMillisecond);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Time_Component_Gen_genHour
$Data_Time_Component_Gen_genHour = (function() use (&$Data_Enum_Gen_genBoundedEnum, &$Data_Time_Component_boundedEnumHour) {
  $__fn = function($dictMonadGen) use (&$Data_Enum_Gen_genBoundedEnum, &$Data_Time_Component_boundedEnumHour, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Enum_Gen_genBoundedEnum)($dictMonadGen, $Data_Time_Component_boundedEnumHour);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

