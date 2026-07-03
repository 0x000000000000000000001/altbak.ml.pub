<?php

namespace Data\Profunctor\Strong;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Strong/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Profunctor_Strong_Strong$Dict
$Data_Profunctor_Strong_Strong__dollar__Dict = (function() {
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

// Data_Profunctor_Strong_strongFn
$Data_Profunctor_Strong_strongFn = ($Data_Profunctor_Strong_Strong__dollar__Dict)((object)["first" => (function() use (&$Data_Tuple_Tuple) {
  $__body = function($a2b, $v) use (&$Data_Tuple_Tuple) {
    $__case_0 = $a2b;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$a2b1 = $__case_0;
$a = ($__case_1)->values[0];
$c = ($__case_1)->values[1];
return ($Data_Tuple_Tuple)(($a2b1)($a), $c);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a2b, $v = null) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($a2b, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($a2b, $v);
  };
  return $__fn;
})(), "second" => ($Data_Functor_map)($Data_Tuple_functorTuple), "Profunctor0" => (function() use (&$Data_Profunctor_profunctorFn) {
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

// Data_Profunctor_Strong_second
$Data_Profunctor_Strong_second = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->second;
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

// Data_Profunctor_Strong_first
$Data_Profunctor_Strong_first = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->first;
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

// Data_Profunctor_Strong_splitStrong
$Data_Profunctor_Strong_splitStrong = (function() use (&$Control_Semigroupoid_composeFlipped, &$Data_Profunctor_Strong_first, &$Data_Profunctor_Strong_second) {
  $__fn = function($dictSemigroupoid) use (&$Control_Semigroupoid_composeFlipped, &$Data_Profunctor_Strong_first, &$Data_Profunctor_Strong_second, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$composeFlipped = ($Control_Semigroupoid_composeFlipped)($dictSemigroupoid);
    $__res = (function() use (&$Data_Profunctor_Strong_first, &$Data_Profunctor_Strong_second, $composeFlipped) {
  $__fn = function($dictStrong) use (&$Data_Profunctor_Strong_first, &$Data_Profunctor_Strong_second, $composeFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$first1 = ($Data_Profunctor_Strong_first)($dictStrong);
$second1 = ($Data_Profunctor_Strong_second)($dictStrong);
    $__res = (function() use ($composeFlipped, $first1, $second1) {
  $__fn = function($l, $r = null) use ($composeFlipped, $first1, $second1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($composeFlipped)(($first1)($l), ($second1)($r));
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

// Data_Profunctor_Strong_fanout
$Data_Profunctor_Strong_fanout = (function() use (&$Data_Profunctor_Strong_splitStrong, &$Data_Profunctor_lcmap, &$Prim_undefined, &$Data_Tuple_Tuple) {
  $__fn = function($dictSemigroupoid) use (&$Data_Profunctor_Strong_splitStrong, &$Data_Profunctor_lcmap, &$Prim_undefined, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$splitStrong1 = ($Data_Profunctor_Strong_splitStrong)($dictSemigroupoid);
    $__res = (function() use (&$Data_Profunctor_lcmap, &$Prim_undefined, $splitStrong1, &$Data_Tuple_Tuple) {
  $__fn = function($dictStrong) use (&$Data_Profunctor_lcmap, &$Prim_undefined, $splitStrong1, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lcmap = ($Data_Profunctor_lcmap)((($dictStrong)->Profunctor0)($Prim_undefined));
$splitStrong2 = ($splitStrong1)($dictStrong);
    $__res = (function() use ($lcmap, &$Data_Tuple_Tuple, $splitStrong2) {
  $__fn = function($l, $r = null) use ($lcmap, &$Data_Tuple_Tuple, $splitStrong2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($lcmap)((function() use (&$Data_Tuple_Tuple) {
  $__fn = function($a) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($a, $a);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($splitStrong2)($l, $r));
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

