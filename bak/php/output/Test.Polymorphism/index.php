<?php

namespace Test\Polymorphism;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.Polymorphism/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Test_Polymorphism_sub
$Test_Polymorphism_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Test_Polymorphism_add
$Test_Polymorphism_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Test_Polymorphism_Monoidish$Dict
$Test_Polymorphism_Monoidish__dollar__Dict = (function() {
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

// Test_Polymorphism_mempty_
$Test_Polymorphism_mempty_ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mempty_;
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

// Test_Polymorphism_mappend_
$Test_Polymorphism_mappend_ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mappend_;
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

// Test_Polymorphism_polyLoop
$Test_Polymorphism_polyLoop = (function() use (&$Test_Polymorphism_mappend_, &$Test_Polymorphism_mempty_, &$Test_Polymorphism_sub) {
  $__fn = function($dictMonoidish) use (&$Test_Polymorphism_mappend_, &$Test_Polymorphism_mempty_, &$Test_Polymorphism_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mappend_1 = ($Test_Polymorphism_mappend_)($dictMonoidish);
$mempty_1 = ($Test_Polymorphism_mempty_)($dictMonoidish);
    $__res = (function() use (&$Test_Polymorphism_sub, $mappend_1, $mempty_1) {
  $__fn = function($n_init, $acc_init = null) use (&$Test_Polymorphism_sub, $mappend_1, $mempty_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$go, &$Test_Polymorphism_sub, $mappend_1, $mempty_1) {
  $__fn = function($v, $v1 = null) use (&$go, &$Test_Polymorphism_sub, $mappend_1, $mempty_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$go, &$Test_Polymorphism_sub, $mappend_1, $mempty_1) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (($__case_0 === 0)) {
$acc = $__case_1;
return $acc;
} else {
;
};
if (true) {
$n = $__case_0;
$acc = $__case_1;
$__tco_tmp_0 = ($Test_Polymorphism_sub)($n, 1);
$__tco_tmp_1 = ($mappend_1)($acc, $mempty_1);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($v, $v1);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($go)($n_init, $acc_init);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
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

// Test_Polymorphism_intMonoidish
$Test_Polymorphism_intMonoidish = ($Test_Polymorphism_Monoidish__dollar__Dict)((object)["mempty_" => 1, "mappend_" => (function() use (&$Test_Polymorphism_add) {
  $__fn = function($x, $y = null) use (&$Test_Polymorphism_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_Polymorphism_add)($x, $y);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Test_Polymorphism_describe
$Test_Polymorphism_describe = ($Effect_Console_log)("Polymorphism (10M Type Class Dict Lookups):");

// Test_Polymorphism_act
$Test_Polymorphism_act = ($Effect_Console_logShow)($Data_Show_showInt, ($Test_Polymorphism_polyLoop)($Test_Polymorphism_intMonoidish, 10000000, 0));

