<?php

namespace Data\Profunctor\Split;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Exists/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Split/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Profunctor_Split_compose
$Data_Profunctor_Split_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Profunctor_Split_identity
$Data_Profunctor_Split_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Profunctor_Split_SplitF
$Data_Profunctor_Split_SplitF = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "SplitF", "values" => [$value0, $value1, $value2]];
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Split_Split
$Data_Profunctor_Split_Split = (function() {
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

// Data_Profunctor_Split_unSplit
$Data_Profunctor_Split_unSplit = (function() use (&$Data_Exists_runExists) {
  $__body = function($f, $v) use (&$Data_Exists_runExists) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$e = $__case_1;
return ($Data_Exists_runExists)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "SplitF")) {
$g = ($__case_0)->values[0];
$h = ($__case_0)->values[1];
$fx = ($__case_0)->values[2];
return ($f1)($g, $h, $fx);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($v1);
  };
  return $__fn;
})(), $e);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Exists_runExists, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f, $v);
  };
  return $__fn;
})();

// Data_Profunctor_Split_split
$Data_Profunctor_Split_split = (function() use (&$Data_Profunctor_Split_Split, &$Data_Exists_mkExists, &$Data_Profunctor_Split_SplitF) {
  $__fn = function($f, $g = null, $fx = null) use (&$Data_Profunctor_Split_Split, &$Data_Exists_mkExists, &$Data_Profunctor_Split_SplitF, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Profunctor_Split_Split)(($Data_Exists_mkExists)(($Data_Profunctor_Split_SplitF)($f, $g, $fx)));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Split_profunctorSplit
$Data_Profunctor_Split_profunctorSplit = ($Data_Profunctor_Profunctor__dollar__Dict)((object)["dimap" => (function() use (&$Data_Profunctor_Split_unSplit, &$Data_Profunctor_Split_split, &$Data_Profunctor_Split_compose) {
  $__fn = function($f, $g = null) use (&$Data_Profunctor_Split_unSplit, &$Data_Profunctor_Split_split, &$Data_Profunctor_Split_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Profunctor_Split_unSplit)((function() use (&$Data_Profunctor_Split_split, &$Data_Profunctor_Split_compose, $f, $g) {
  $__fn = function($h, $i = null) use (&$Data_Profunctor_Split_split, &$Data_Profunctor_Split_compose, $f, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Profunctor_Split_split)(($Data_Profunctor_Split_compose)($h, $f), ($Data_Profunctor_Split_compose)($g, $i));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Profunctor_Split_lowerSplit
$Data_Profunctor_Split_lowerSplit = (function() use (&$Data_Profunctor_Split_unSplit, &$Data_Function_flip, &$Data_Functor_Invariant_imap) {
  $__fn = function($dictInvariant) use (&$Data_Profunctor_Split_unSplit, &$Data_Function_flip, &$Data_Functor_Invariant_imap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Profunctor_Split_unSplit)(($Data_Function_flip)(($Data_Functor_Invariant_imap)($dictInvariant)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Split_liftSplit
$Data_Profunctor_Split_liftSplit = ($Data_Profunctor_Split_split)($Data_Profunctor_Split_identity, $Data_Profunctor_Split_identity);

// Data_Profunctor_Split_hoistSplit
$Data_Profunctor_Split_hoistSplit = (function() use (&$Data_Profunctor_Split_unSplit, &$Data_Profunctor_Split_compose, &$Data_Profunctor_Split_split) {
  $__fn = function($nat) use (&$Data_Profunctor_Split_unSplit, &$Data_Profunctor_Split_compose, &$Data_Profunctor_Split_split, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Profunctor_Split_unSplit)((function() use (&$Data_Profunctor_Split_compose, &$Data_Profunctor_Split_split, $nat) {
  $__fn = function($f, $g = null) use (&$Data_Profunctor_Split_compose, &$Data_Profunctor_Split_split, $nat, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Profunctor_Split_compose)(($Data_Profunctor_Split_split)($f, $g), $nat);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Split_functorSplit
$Data_Profunctor_Split_functorSplit = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Profunctor_Split_unSplit, &$Data_Profunctor_Split_split, &$Data_Profunctor_Split_compose) {
  $__fn = function($f) use (&$Data_Profunctor_Split_unSplit, &$Data_Profunctor_Split_split, &$Data_Profunctor_Split_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Profunctor_Split_unSplit)((function() use (&$Data_Profunctor_Split_split, &$Data_Profunctor_Split_compose, $f) {
  $__fn = function($g, $h = null, $fx = null) use (&$Data_Profunctor_Split_split, &$Data_Profunctor_Split_compose, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Profunctor_Split_split)($g, ($Data_Profunctor_Split_compose)($f, $h), $fx);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

