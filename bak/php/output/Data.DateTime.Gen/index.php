<?php

namespace Data\DateTime\Gen;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Data.Date.Gen/index.php';
require_once __DIR__ . '/../Data.DateTime/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Time.Gen/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_DateTime_Gen_genDateTime
$Data_DateTime_Gen_genDateTime = (function() use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Data_DateTime_DateTime, &$Data_Date_Gen_genDate, &$Data_Time_Gen_genTime) {
  $__fn = function($dictMonadGen) use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Data_DateTime_DateTime, &$Data_Date_Gen_genDate, &$Data_Time_Gen_genTime, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Apply0 = (((((($dictMonadGen)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined))->Apply0)($Prim_undefined);
    $__res = ($Control_Apply_apply)($Apply0, ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined), $Data_DateTime_DateTime, ($Data_Date_Gen_genDate)($dictMonadGen)), ($Data_Time_Gen_genTime)($dictMonadGen));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

