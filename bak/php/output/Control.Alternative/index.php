<?php

namespace Control\Alternative;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Alternative_Alternative$Dict
$Control_Alternative_Alternative__dollar__Dict = (function() {
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

// Control_Alternative_guard
$Control_Alternative_guard = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Plus_empty, &$Data_Unit_unit) {
  $__fn = function($dictAlternative) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Plus_empty, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)((($dictAlternative)->Applicative0)($Prim_undefined));
$empty = ($Control_Plus_empty)((($dictAlternative)->Plus1)($Prim_undefined));
    $__res = (function() use ($pure, &$Data_Unit_unit, $empty) {
  $__body = function($v) use ($pure, &$Data_Unit_unit, $empty) {
    $__case_0 = $v;
    if (($__case_0 === true)) {
return ($pure)($Data_Unit_unit);
} else {
;
};
    if (($__case_0 === false)) {
return $empty;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($pure, &$Data_Unit_unit, $empty, $__body, &$__fn) {
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Alternative_alternativeArray
$Control_Alternative_alternativeArray = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use (&$Control_Applicative_applicativeArray) {
  $__fn = function($__dollar____unused) use (&$Control_Applicative_applicativeArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Control_Applicative_applicativeArray;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use (&$Control_Plus_plusArray) {
  $__fn = function($__dollar____unused) use (&$Control_Plus_plusArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Control_Plus_plusArray;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

