<?php

namespace Data\Bifunctor;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Bifunctor_identity
$Data_Bifunctor_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Bifunctor_Bifunctor$Dict
$Data_Bifunctor_Bifunctor__dollar__Dict = (function() {
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

// Data_Bifunctor_bimap
$Data_Bifunctor_bimap = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bimap;
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

// Data_Bifunctor_bivoid
$Data_Bifunctor_bivoid = (function() use (&$Data_Bifunctor_bimap, &$Data_Function_const, &$Data_Unit_unit) {
  $__fn = function($dictBifunctor) use (&$Data_Bifunctor_bimap, &$Data_Function_const, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bifunctor_bimap)($dictBifunctor, ($Data_Function_const)($Data_Unit_unit), ($Data_Function_const)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Bifunctor_lmap
$Data_Bifunctor_lmap = (function() use (&$Data_Bifunctor_bimap, &$Data_Bifunctor_identity) {
  $__fn = function($dictBifunctor) use (&$Data_Bifunctor_bimap, &$Data_Bifunctor_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bimap1 = ($Data_Bifunctor_bimap)($dictBifunctor);
    $__res = (function() use ($bimap1, &$Data_Bifunctor_identity) {
  $__fn = function($f) use ($bimap1, &$Data_Bifunctor_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bimap1)($f, $Data_Bifunctor_identity);
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

// Data_Bifunctor_rmap
$Data_Bifunctor_rmap = (function() use (&$Data_Bifunctor_bimap, &$Data_Bifunctor_identity) {
  $__fn = function($dictBifunctor) use (&$Data_Bifunctor_bimap, &$Data_Bifunctor_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bifunctor_bimap)($dictBifunctor, $Data_Bifunctor_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Bifunctor_bifunctorTuple
$Data_Bifunctor_bifunctorTuple = ($Data_Bifunctor_Bifunctor__dollar__Dict)((object)["bimap" => (function() use (&$Data_Tuple_Tuple) {
  $__body = function($f, $g, $v) use (&$Data_Tuple_Tuple) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$g1 = $__case_1;
$x = ($__case_2)->values[0];
$y = ($__case_2)->values[1];
return ($Data_Tuple_Tuple)(($f1)($x), ($g1)($y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $g = null, $v = null) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $g, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $g, $v);
  };
  return $__fn;
})()]);

// Data_Bifunctor_bifunctorEither
$Data_Bifunctor_bifunctorEither = ($Data_Bifunctor_Bifunctor__dollar__Dict)((object)["bimap" => (function() use (&$Data_Either_Left, &$Data_Either_Right) {
  $__body = function($v, $v1, $v2) use (&$Data_Either_Left, &$Data_Either_Right) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Left")) {
$f = $__case_0;
$l = ($__case_2)->values[0];
return ($Data_Either_Left)(($f)($l));
} else {
;
};
    if ((($__case_2)->tag === "Right")) {
$g = $__case_1;
$r = ($__case_2)->values[0];
return ($Data_Either_Right)(($g)($r));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_Either_Left, &$Data_Either_Right, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $v1, $v2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $v1, $v2);
  };
  return $__fn;
})()]);

// Data_Bifunctor_bifunctorConst
$Data_Bifunctor_bifunctorConst = ($Data_Bifunctor_Bifunctor__dollar__Dict)((object)["bimap" => (function() use (&$Data_Const_Const) {
  $__body = function($f, $v, $v1) use (&$Data_Const_Const) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$a = $__case_2;
return ($Data_Const_Const)(($f1)($a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $v1 = null) use (&$Data_Const_Const, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $v, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $v, $v1);
  };
  return $__fn;
})()]);

