<?php

namespace Data\Time\Duration\Gen;

require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Time_Duration_Gen_genSeconds
$Data_Time_Duration_Gen_genSeconds = (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Time_Duration_Seconds, &$Control_Monad_Gen_Class_chooseFloat) {
  $__fn = function($dictMonadGen) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Time_Duration_Seconds, &$Control_Monad_Gen_Class_chooseFloat, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_map)((((((((($dictMonadGen)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined), $Data_Time_Duration_Seconds, ($Control_Monad_Gen_Class_chooseFloat)($dictMonadGen, 0.0, 600.0));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_Gen_genMinutes
$Data_Time_Duration_Gen_genMinutes = (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Time_Duration_Minutes, &$Control_Monad_Gen_Class_chooseFloat) {
  $__fn = function($dictMonadGen) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Time_Duration_Minutes, &$Control_Monad_Gen_Class_chooseFloat, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_map)((((((((($dictMonadGen)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined), $Data_Time_Duration_Minutes, ($Control_Monad_Gen_Class_chooseFloat)($dictMonadGen, 0.0, 600.0));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_Gen_genMilliseconds
$Data_Time_Duration_Gen_genMilliseconds = (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Time_Duration_Milliseconds, &$Control_Monad_Gen_Class_chooseFloat) {
  $__fn = function($dictMonadGen) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Time_Duration_Milliseconds, &$Control_Monad_Gen_Class_chooseFloat, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_map)((((((((($dictMonadGen)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined), $Data_Time_Duration_Milliseconds, ($Control_Monad_Gen_Class_chooseFloat)($dictMonadGen, 0.0, 600000.0));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_Gen_genHours
$Data_Time_Duration_Gen_genHours = (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Time_Duration_Hours, &$Control_Monad_Gen_Class_chooseFloat) {
  $__fn = function($dictMonadGen) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Time_Duration_Hours, &$Control_Monad_Gen_Class_chooseFloat, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_map)((((((((($dictMonadGen)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined), $Data_Time_Duration_Hours, ($Control_Monad_Gen_Class_chooseFloat)($dictMonadGen, 0.0, 240.0));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_Gen_genDays
$Data_Time_Duration_Gen_genDays = (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Time_Duration_Days, &$Control_Monad_Gen_Class_chooseFloat) {
  $__fn = function($dictMonadGen) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Time_Duration_Days, &$Control_Monad_Gen_Class_chooseFloat, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_map)((((((((($dictMonadGen)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined), $Data_Time_Duration_Days, ($Control_Monad_Gen_Class_chooseFloat)($dictMonadGen, 0.0, 42.0));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

