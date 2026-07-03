<?php

namespace Data\Profunctor\Choice;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Choice/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Profunctor_Choice_identity
$Data_Profunctor_Choice_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Profunctor_Choice_Choice$Dict
$Data_Profunctor_Choice_Choice__dollar__Dict = (function() {
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

// Data_Profunctor_Choice_right
$Data_Profunctor_Choice_right = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->right;
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

// Data_Profunctor_Choice_left
$Data_Profunctor_Choice_left = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->left;
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

// Data_Profunctor_Choice_splitChoice
$Data_Profunctor_Choice_splitChoice = (function() use (&$Control_Semigroupoid_composeFlipped, &$Data_Profunctor_Choice_left, &$Data_Profunctor_Choice_right) {
  $__fn = function($dictSemigroupoid) use (&$Control_Semigroupoid_composeFlipped, &$Data_Profunctor_Choice_left, &$Data_Profunctor_Choice_right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$composeFlipped = ($Control_Semigroupoid_composeFlipped)($dictSemigroupoid);
    $__res = (function() use (&$Data_Profunctor_Choice_left, &$Data_Profunctor_Choice_right, $composeFlipped) {
  $__fn = function($dictChoice) use (&$Data_Profunctor_Choice_left, &$Data_Profunctor_Choice_right, $composeFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$left1 = ($Data_Profunctor_Choice_left)($dictChoice);
$right1 = ($Data_Profunctor_Choice_right)($dictChoice);
    $__res = (function() use ($composeFlipped, $left1, $right1) {
  $__fn = function($l, $r = null) use ($composeFlipped, $left1, $right1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($composeFlipped)(($left1)($l), ($right1)($r));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Choice_fanin
$Data_Profunctor_Choice_fanin = (function() use (&$Data_Profunctor_Choice_splitChoice, &$Data_Profunctor_rmap, &$Prim_undefined, &$Data_Either_either, &$Data_Profunctor_Choice_identity) {
  $__fn = function($dictSemigroupoid) use (&$Data_Profunctor_Choice_splitChoice, &$Data_Profunctor_rmap, &$Prim_undefined, &$Data_Either_either, &$Data_Profunctor_Choice_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$splitChoice1 = ($Data_Profunctor_Choice_splitChoice)($dictSemigroupoid);
    $__res = (function() use (&$Data_Profunctor_rmap, &$Prim_undefined, $splitChoice1, &$Data_Either_either, &$Data_Profunctor_Choice_identity) {
  $__fn = function($dictChoice) use (&$Data_Profunctor_rmap, &$Prim_undefined, $splitChoice1, &$Data_Either_either, &$Data_Profunctor_Choice_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$rmap = ($Data_Profunctor_rmap)((($dictChoice)->Profunctor0)($Prim_undefined));
$splitChoice2 = ($splitChoice1)($dictChoice);
    $__res = (function() use ($rmap, &$Data_Either_either, &$Data_Profunctor_Choice_identity, $splitChoice2) {
  $__fn = function($l, $r = null) use ($rmap, &$Data_Either_either, &$Data_Profunctor_Choice_identity, $splitChoice2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($rmap)(($Data_Either_either)($Data_Profunctor_Choice_identity, $Data_Profunctor_Choice_identity), ($splitChoice2)($l, $r));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Choice_choiceFn
$Data_Profunctor_Choice_choiceFn = ($Data_Profunctor_Choice_Choice__dollar__Dict)((object)["left" => (function() use (&$Data_Either_Left, &$Data_Either_Right) {
  $__body = function($v, $v1) use (&$Data_Either_Left, &$Data_Either_Right) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Left")) {
$a2b = $__case_0;
$a = ($__case_1)->values[0];
return ($Data_Either_Left)(($a2b)($a));
} else {
;
};
    if ((($__case_1)->tag === "Right")) {
$c = ($__case_1)->values[0];
return ($Data_Either_Right)($c);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Either_Left, &$Data_Either_Right, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $v1);
  };
  return $__fn;
})(), "right" => ($Data_Functor_map)($Data_Either_functorEither), "Profunctor0" => (function() use (&$Data_Profunctor_profunctorFn) {
  $__fn = function($__dollar____unused) use (&$Data_Profunctor_profunctorFn, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Profunctor_profunctorFn;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

