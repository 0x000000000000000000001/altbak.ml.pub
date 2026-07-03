<?php

namespace Control\Biapply;

require_once __DIR__ . '/../Control.Biapply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Biapply_identity
$Control_Biapply_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Control_Biapply_Biapply$Dict
$Control_Biapply_Biapply__dollar__Dict = (function() {
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

// Control_Biapply_biapplyTuple
$Control_Biapply_biapplyTuple = ($Control_Biapply_Biapply__dollar__Dict)((object)["biapply" => (function() use (&$Data_Tuple_Tuple) {
  $__body = function($v, $v1) use (&$Data_Tuple_Tuple) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$f = ($__case_0)->values[0];
$g = ($__case_0)->values[1];
$a = ($__case_1)->values[0];
$b = ($__case_1)->values[1];
return ($Data_Tuple_Tuple)(($f)($a), ($g)($b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
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
})(), "Bifunctor0" => (function() use (&$Data_Bifunctor_bifunctorTuple) {
  $__fn = function($__dollar____unused) use (&$Data_Bifunctor_bifunctorTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Bifunctor_bifunctorTuple;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Biapply_biapply
$Control_Biapply_biapply = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->biapply;
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

// Control_Biapply_biapplyFirst
$Control_Biapply_biapplyFirst = (function() use (&$Control_Biapply_biapply, &$Data_Bifunctor_bimap, &$Prim_undefined, &$Control_Biapply_identity, &$Data_Function_const) {
  $__fn = function($dictBiapply) use (&$Control_Biapply_biapply, &$Data_Bifunctor_bimap, &$Prim_undefined, &$Control_Biapply_identity, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$biapply1 = ($Control_Biapply_biapply)($dictBiapply);
$bimap = ($Data_Bifunctor_bimap)((($dictBiapply)->Bifunctor0)($Prim_undefined));
    $__res = (function() use ($biapply1, &$Control_Biapply_identity, $bimap, &$Data_Function_const) {
  $__fn = function($a, $b = null) use ($biapply1, &$Control_Biapply_identity, $bimap, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($biapply1)(($Control_Biapply_identity)(($bimap)(($Data_Function_const)($Control_Biapply_identity), ($Data_Function_const)($Control_Biapply_identity)), $a), $b);
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

// Control_Biapply_biapplySecond
$Control_Biapply_biapplySecond = (function() use (&$Control_Biapply_biapply, &$Data_Bifunctor_bimap, &$Prim_undefined, &$Control_Biapply_identity, &$Data_Function_const) {
  $__fn = function($dictBiapply) use (&$Control_Biapply_biapply, &$Data_Bifunctor_bimap, &$Prim_undefined, &$Control_Biapply_identity, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$biapply1 = ($Control_Biapply_biapply)($dictBiapply);
$bimap = ($Data_Bifunctor_bimap)((($dictBiapply)->Bifunctor0)($Prim_undefined));
    $__res = (function() use ($biapply1, &$Control_Biapply_identity, $bimap, &$Data_Function_const) {
  $__fn = function($a, $b = null) use ($biapply1, &$Control_Biapply_identity, $bimap, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($biapply1)(($Control_Biapply_identity)(($bimap)($Data_Function_const, $Data_Function_const), $a), $b);
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

// Control_Biapply_bilift2
$Control_Biapply_bilift2 = (function() use (&$Control_Biapply_biapply, &$Data_Bifunctor_bimap, &$Prim_undefined, &$Control_Biapply_identity) {
  $__fn = function($dictBiapply) use (&$Control_Biapply_biapply, &$Data_Bifunctor_bimap, &$Prim_undefined, &$Control_Biapply_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$biapply1 = ($Control_Biapply_biapply)($dictBiapply);
$bimap = ($Data_Bifunctor_bimap)((($dictBiapply)->Bifunctor0)($Prim_undefined));
    $__res = (function() use ($biapply1, &$Control_Biapply_identity, $bimap) {
  $__fn = function($f, $g = null, $a = null, $b = null) use ($biapply1, &$Control_Biapply_identity, $bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($biapply1)(($Control_Biapply_identity)(($bimap)($f, $g), $a), $b);
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
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

// Control_Biapply_bilift3
$Control_Biapply_bilift3 = (function() use (&$Control_Biapply_biapply, &$Data_Bifunctor_bimap, &$Prim_undefined, &$Control_Biapply_identity) {
  $__fn = function($dictBiapply) use (&$Control_Biapply_biapply, &$Data_Bifunctor_bimap, &$Prim_undefined, &$Control_Biapply_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$biapply1 = ($Control_Biapply_biapply)($dictBiapply);
$bimap = ($Data_Bifunctor_bimap)((($dictBiapply)->Bifunctor0)($Prim_undefined));
    $__res = (function() use ($biapply1, &$Control_Biapply_identity, $bimap) {
  $__fn = function($f, $g = null, $a = null, $b = null, $c = null) use ($biapply1, &$Control_Biapply_identity, $bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($biapply1)(($biapply1)(($Control_Biapply_identity)(($bimap)($f, $g), $a), $b), $c);
    if ($__num > 5) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 5));
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

