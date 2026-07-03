<?php

namespace Data\Functor\Coproduct\Inject;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct.Inject/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Functor_Coproduct_Inject_compose
$Data_Functor_Coproduct_Inject_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Functor_Coproduct_Inject_Inject$Dict
$Data_Functor_Coproduct_Inject_Inject__dollar__Dict = (function() {
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

// Data_Functor_Coproduct_Inject_prj
$Data_Functor_Coproduct_Inject_prj = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->prj;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($dict);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($dict);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Inject_injectReflexive
$Data_Functor_Coproduct_Inject_injectReflexive = ($Data_Functor_Coproduct_Inject_Inject__dollar__Dict)((object)["inj" => ($Control_Category_identity)($Control_Category_categoryFn), "prj" => $Data_Maybe_Just]);

// Data_Functor_Coproduct_Inject_injectLeft
$Data_Functor_Coproduct_Inject_injectLeft = ($Data_Functor_Coproduct_Inject_Inject__dollar__Dict)((object)["inj" => ($Data_Functor_Coproduct_Inject_compose)($Data_Functor_Coproduct_Coproduct, $Data_Either_Left), "prj" => ($Data_Functor_Coproduct_coproduct)($Data_Maybe_Just, ($Data_Function_const)($Data_Maybe_Nothing))]);

// Data_Functor_Coproduct_Inject_inj
$Data_Functor_Coproduct_Inject_inj = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->inj;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($dict);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($dict);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Inject_injectRight
$Data_Functor_Coproduct_Inject_injectRight = (function() use (&$Data_Functor_Coproduct_Inject_Inject__dollar__Dict, &$Data_Functor_Coproduct_Inject_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Right, &$Data_Functor_Coproduct_Inject_inj, &$Data_Functor_Coproduct_coproduct, &$Data_Function_const, &$Data_Maybe_Nothing, &$Data_Functor_Coproduct_Inject_prj) {
  $__fn = function($dictInject) use (&$Data_Functor_Coproduct_Inject_Inject__dollar__Dict, &$Data_Functor_Coproduct_Inject_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Right, &$Data_Functor_Coproduct_Inject_inj, &$Data_Functor_Coproduct_coproduct, &$Data_Function_const, &$Data_Maybe_Nothing, &$Data_Functor_Coproduct_Inject_prj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_Inject_Inject__dollar__Dict)((object)["inj" => ($Data_Functor_Coproduct_Inject_compose)($Data_Functor_Coproduct_Coproduct, ($Data_Functor_Coproduct_Inject_compose)($Data_Either_Right, ($Data_Functor_Coproduct_Inject_inj)($dictInject))), "prj" => ($Data_Functor_Coproduct_coproduct)(($Data_Function_const)($Data_Maybe_Nothing), ($Data_Functor_Coproduct_Inject_prj)($dictInject))]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

