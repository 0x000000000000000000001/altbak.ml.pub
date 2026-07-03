<?php

namespace Data\Date\Gen;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.Date.Component.Gen/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Date_Gen_compose
$Data_Date_Gen_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Date_Gen_fromJust
$Data_Date_Gen_fromJust = ($Data_Maybe_fromJust)($Prim_undefined);

// Data_Date_Gen_bind
$Data_Date_Gen_bind = ($Control_Bind_bind)($Data_Maybe_bindMaybe);

// Data_Date_Gen_bottom
$Data_Date_Gen_bottom = ($Data_Bounded_bottom)($Data_Date_Component_boundedMonth);

// Data_Date_Gen_bottom1
$Data_Date_Gen_bottom1 = ($Data_Bounded_bottom)($Data_Date_Component_boundedDay);

// Data_Date_Gen_genDate
$Data_Date_Gen_genDate = (function() use (&$Prim_undefined, &$Control_Bind_bind, &$Data_Functor_map, &$Control_Monad_Gen_Class_chooseInt, &$Control_Applicative_pure, &$Data_Date_Component_Gen_genYear, &$Data_Date_isLeapYear, &$Data_Date_Gen_compose, &$Data_Time_Duration_Days, &$Data_Int_toNumber, &$Partial_Unsafe_unsafePartial, &$Data_Date_Gen_fromJust, &$Data_Date_Gen_bind, &$Data_Date_exactDate, &$Data_Date_Gen_bottom, &$Data_Date_Gen_bottom1, &$Data_Date_adjust) {
  $__fn = function($dictMonadGen) use (&$Prim_undefined, &$Control_Bind_bind, &$Data_Functor_map, &$Control_Monad_Gen_Class_chooseInt, &$Control_Applicative_pure, &$Data_Date_Component_Gen_genYear, &$Data_Date_isLeapYear, &$Data_Date_Gen_compose, &$Data_Time_Duration_Days, &$Data_Int_toNumber, &$Partial_Unsafe_unsafePartial, &$Data_Date_Gen_fromJust, &$Data_Date_Gen_bind, &$Data_Date_exactDate, &$Data_Date_Gen_bottom, &$Data_Date_Gen_bottom1, &$Data_Date_adjust, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadGen)->Monad0)($Prim_undefined);
$Bind1 = (($Monad0)->Bind1)($Prim_undefined);
$bind1 = ($Control_Bind_bind)($Bind1);
$map = ($Data_Functor_map)((((($Bind1)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$chooseInt = ($Control_Monad_Gen_Class_chooseInt)($dictMonadGen);
$pure = ($Control_Applicative_pure)((($Monad0)->Applicative0)($Prim_undefined));
    $__res = ($bind1)(($Data_Date_Component_Gen_genYear)($dictMonadGen), (function() use (&$Data_Date_isLeapYear, $bind1, $map, &$Data_Date_Gen_compose, &$Data_Time_Duration_Days, &$Data_Int_toNumber, $chooseInt, $pure, &$Partial_Unsafe_unsafePartial, &$Data_Date_Gen_fromJust, &$Data_Date_Gen_bind, &$Data_Date_exactDate, &$Data_Date_Gen_bottom, &$Data_Date_Gen_bottom1, &$Data_Date_adjust) {
  $__fn = function($year) use (&$Data_Date_isLeapYear, $bind1, $map, &$Data_Date_Gen_compose, &$Data_Time_Duration_Days, &$Data_Int_toNumber, $chooseInt, $pure, &$Partial_Unsafe_unsafePartial, &$Data_Date_Gen_fromJust, &$Data_Date_Gen_bind, &$Data_Date_exactDate, &$Data_Date_Gen_bottom, &$Data_Date_Gen_bottom1, &$Data_Date_adjust, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$maxDays = (function() use (&$Data_Date_isLeapYear, $year) {
$__case_0 = ($Data_Date_isLeapYear)($year);
if (($__case_0 === true)) {
return 365;
} else {
;
};
if (true) {
return 364;
} else {
;
};
throw new \Exception("Pattern match failure");
})();
    $__res = ($bind1)(($map)(($Data_Date_Gen_compose)($Data_Time_Duration_Days, $Data_Int_toNumber), ($chooseInt)(0, $maxDays)), (function() use ($pure, &$Partial_Unsafe_unsafePartial, &$Data_Date_Gen_fromJust, &$Data_Date_Gen_bind, &$Data_Date_exactDate, $year, &$Data_Date_Gen_bottom, &$Data_Date_Gen_bottom1, &$Data_Date_adjust) {
  $__fn = function($days) use ($pure, &$Partial_Unsafe_unsafePartial, &$Data_Date_Gen_fromJust, &$Data_Date_Gen_bind, &$Data_Date_exactDate, $year, &$Data_Date_Gen_bottom, &$Data_Date_Gen_bottom1, &$Data_Date_adjust, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)(($Partial_Unsafe_unsafePartial)((function() use (&$Data_Date_Gen_fromJust, &$Data_Date_Gen_bind, &$Data_Date_exactDate, $year, &$Data_Date_Gen_bottom, &$Data_Date_Gen_bottom1, &$Data_Date_adjust, $days) {
  $__fn = function($__dollar____unused) use (&$Data_Date_Gen_fromJust, &$Data_Date_Gen_bind, &$Data_Date_exactDate, $year, &$Data_Date_Gen_bottom, &$Data_Date_Gen_bottom1, &$Data_Date_adjust, $days, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Date_Gen_fromJust)(($Data_Date_Gen_bind)(($Data_Date_exactDate)($year, $Data_Date_Gen_bottom, $Data_Date_Gen_bottom1), (function() use (&$Data_Date_adjust, $days) {
  $__fn = function($janFirst) use (&$Data_Date_adjust, $days, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Date_adjust)($days, $janFirst);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
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
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

