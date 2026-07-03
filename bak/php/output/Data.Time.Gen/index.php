<?php

namespace Data\Time\Gen;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Time/index.php';
require_once __DIR__ . '/../Data.Time.Component.Gen/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Time_Gen_genTime
$Data_Time_Gen_genTime = (function() use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Data_Time_Time, &$Data_Time_Component_Gen_genHour, &$Data_Time_Component_Gen_genMinute, &$Data_Time_Component_Gen_genSecond, &$Data_Time_Component_Gen_genMillisecond) {
  $__fn = function($dictMonadGen) use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Data_Time_Time, &$Data_Time_Component_Gen_genHour, &$Data_Time_Component_Gen_genMinute, &$Data_Time_Component_Gen_genSecond, &$Data_Time_Component_Gen_genMillisecond, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Apply0 = (((((($dictMonadGen)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined))->Apply0)($Prim_undefined);
$apply = ($Control_Apply_apply)($Apply0);
    $__res = ($apply)(($apply)(($apply)(($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined), $Data_Time_Time, ($Data_Time_Component_Gen_genHour)($dictMonadGen)), ($Data_Time_Component_Gen_genMinute)($dictMonadGen)), ($Data_Time_Component_Gen_genSecond)($dictMonadGen)), ($Data_Time_Component_Gen_genMillisecond)($dictMonadGen));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

