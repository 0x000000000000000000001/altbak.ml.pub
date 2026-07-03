<?php

namespace Test\AstTree;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.AstTree/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Test_AstTree_add
$Test_AstTree_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Test_AstTree_mul
$Test_AstTree_mul = ($Data_Semiring_mul)($Data_Semiring_semiringInt);

// Test_AstTree_sub
$Test_AstTree_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Test_AstTree_Val
$Test_AstTree_Val = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Val", "values" => [$value0]];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_AstTree_Add
$Test_AstTree_Add = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Add", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_AstTree_Mul
$Test_AstTree_Mul = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Mul", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_AstTree_Sub
$Test_AstTree_Sub = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Sub", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_AstTree_eval
$Test_AstTree_eval = (function() use (&$Test_AstTree_add, &$Test_AstTree_eval, &$Test_AstTree_mul, &$Test_AstTree_sub) {
  $__fn = function($v) use (&$Test_AstTree_add, &$Test_AstTree_eval, &$Test_AstTree_mul, &$Test_AstTree_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Test_AstTree_add, &$Test_AstTree_eval, &$Test_AstTree_mul, &$Test_AstTree_sub) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Val")) {
$n = ($__case_0)->values[0];
return $n;
} else {
;
};
if ((($__case_0)->tag === "Add")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($Test_AstTree_add)(($Test_AstTree_eval)($a), ($Test_AstTree_eval)($b));
} else {
;
};
if ((($__case_0)->tag === "Mul")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($Test_AstTree_mul)(($Test_AstTree_eval)($a), ($Test_AstTree_eval)($b));
} else {
;
};
if ((($__case_0)->tag === "Sub")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($Test_AstTree_sub)(($Test_AstTree_eval)($a), ($Test_AstTree_eval)($b));
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($v);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_AstTree_describe
$Test_AstTree_describe = ($Effect_Console_log)("AST Evaluation:");

// Test_AstTree_buildTree
$Test_AstTree_buildTree = (function() use (&$Test_AstTree_Val, &$Test_AstTree_Add, &$Test_AstTree_Mul, &$Test_AstTree_buildTree, &$Test_AstTree_sub, &$Test_AstTree_Sub) {
  $__fn = function($v) use (&$Test_AstTree_Val, &$Test_AstTree_Add, &$Test_AstTree_Mul, &$Test_AstTree_buildTree, &$Test_AstTree_sub, &$Test_AstTree_Sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Test_AstTree_Val, &$Test_AstTree_Add, &$Test_AstTree_Mul, &$Test_AstTree_buildTree, &$Test_AstTree_sub, &$Test_AstTree_Sub) {
while (true) {
$__case_0 = $v;
if (($__case_0 === 0)) {
return ($Test_AstTree_Val)(1);
} else {
;
};
if (true) {
$n = $__case_0;
return ($Test_AstTree_Add)(($Test_AstTree_Mul)(($Test_AstTree_Val)($n), ($Test_AstTree_buildTree)(($Test_AstTree_sub)($n, 1))), ($Test_AstTree_Sub)(($Test_AstTree_buildTree)(($Test_AstTree_sub)($n, 1)), ($Test_AstTree_Val)(1)));
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($v);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_AstTree_act
$Test_AstTree_act = ($Effect_Console_logShow)($Data_Show_showInt, ($Test_AstTree_eval)(($Test_AstTree_buildTree)(3)));

