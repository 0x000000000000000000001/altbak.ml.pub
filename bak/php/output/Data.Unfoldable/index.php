<?php

namespace Data\Unfoldable;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Unfoldable_map
$Data_Unfoldable_map = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Data_Unfoldable_fromJust
$Data_Unfoldable_fromJust = ($Data_Maybe_fromJust)($Prim_undefined);

// Data_Unfoldable_lessThanOrEq
$Data_Unfoldable_lessThanOrEq = ($Data_Ord_lessThanOrEq)($Data_Ord_ordInt);

// Data_Unfoldable_sub
$Data_Unfoldable_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Data_Unfoldable_Unfoldable$Dict
$Data_Unfoldable_Unfoldable__dollar__Dict = (function() {
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

// Data_Unfoldable_unfoldr
$Data_Unfoldable_unfoldr = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->unfoldr;
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

// Data_Unfoldable_unfoldableMaybe
$Data_Unfoldable_unfoldableMaybe = ($Data_Unfoldable_Unfoldable__dollar__Dict)((object)["unfoldr" => (function() use (&$Data_Unfoldable_map, &$Data_Tuple_fst) {
  $__fn = function($f, $b = null) use (&$Data_Unfoldable_map, &$Data_Tuple_fst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Unfoldable_map)($Data_Tuple_fst, ($f)($b));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Unfoldable10" => (function() use (&$Data_Unfoldable1_unfoldable1Maybe) {
  $__fn = function($__dollar____unused) use (&$Data_Unfoldable1_unfoldable1Maybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Unfoldable1_unfoldable1Maybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Unfoldable_unfoldableArray
$Data_Unfoldable_unfoldableArray = ($Data_Unfoldable_Unfoldable__dollar__Dict)((object)["unfoldr" => ($Data_Unfoldable_unfoldrArrayImpl)($Data_Maybe_isNothing, ($Partial_Unsafe_unsafePartial)((function() use (&$Data_Unfoldable_fromJust) {
  $__fn = function($__dollar____unused) use (&$Data_Unfoldable_fromJust, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Unfoldable_fromJust;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), $Data_Tuple_fst, $Data_Tuple_snd), "Unfoldable10" => (function() use (&$Data_Unfoldable1_unfoldable1Array) {
  $__fn = function($__dollar____unused) use (&$Data_Unfoldable1_unfoldable1Array, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Unfoldable1_unfoldable1Array;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Unfoldable_replicate
$Data_Unfoldable_replicate = (function() use (&$Data_Unfoldable_unfoldr, &$Data_Unfoldable_lessThanOrEq, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Unfoldable_sub) {
  $__fn = function($dictUnfoldable) use (&$Data_Unfoldable_unfoldr, &$Data_Unfoldable_lessThanOrEq, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Unfoldable_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$unfoldr1 = ($Data_Unfoldable_unfoldr)($dictUnfoldable);
    $__res = (function() use (&$Data_Unfoldable_lessThanOrEq, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Unfoldable_sub, $unfoldr1) {
  $__fn = function($n, $v = null) use (&$Data_Unfoldable_lessThanOrEq, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Unfoldable_sub, $unfoldr1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$step = (function() use (&$Data_Unfoldable_lessThanOrEq, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple, $v, &$Data_Unfoldable_sub) {
  $__body = function($i) use (&$Data_Unfoldable_lessThanOrEq, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple, $v, &$Data_Unfoldable_sub) {
    $__case_0 = ($Data_Unfoldable_lessThanOrEq)($i, 0);
    if (($__case_0 === true)) {
return $Data_Maybe_Nothing;
} else {
;
};
    if (true) {
return ($Data_Maybe_Just)(($Data_Tuple_Tuple)($v, ($Data_Unfoldable_sub)($i, 1)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($i) use (&$Data_Unfoldable_lessThanOrEq, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple, $v, &$Data_Unfoldable_sub, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($i);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($i);
  };
  return $__fn;
})();
    $__res = ($unfoldr1)($step, $n);
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

// Data_Unfoldable_replicateA
$Data_Unfoldable_replicateA = (function() use (&$Data_Unfoldable_replicate, &$Data_Traversable_sequence) {
  $__fn = function($dictApplicative, $dictUnfoldable = null) use (&$Data_Unfoldable_replicate, &$Data_Traversable_sequence, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$replicate1 = ($Data_Unfoldable_replicate)($dictUnfoldable);
    $__res = (function() use (&$Data_Traversable_sequence, $dictApplicative, $replicate1) {
  $__fn = function($dictTraversable) use (&$Data_Traversable_sequence, $dictApplicative, $replicate1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequence = ($Data_Traversable_sequence)($dictTraversable, $dictApplicative);
    $__res = (function() use ($sequence, $replicate1) {
  $__fn = function($n, $m = null) use ($sequence, $replicate1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($sequence)(($replicate1)($n, $m));
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
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Unfoldable_none
$Data_Unfoldable_none = (function() use (&$Data_Unfoldable_unfoldr, &$Data_Function_const, &$Data_Maybe_Nothing, &$Data_Unit_unit) {
  $__fn = function($dictUnfoldable) use (&$Data_Unfoldable_unfoldr, &$Data_Function_const, &$Data_Maybe_Nothing, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Unfoldable_unfoldr)($dictUnfoldable, ($Data_Function_const)($Data_Maybe_Nothing), $Data_Unit_unit);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Unfoldable_fromMaybe
$Data_Unfoldable_fromMaybe = (function() use (&$Data_Unfoldable_unfoldr, &$Data_Unfoldable_map, &$Data_Function_flip, &$Data_Tuple_Tuple, &$Data_Maybe_Nothing) {
  $__fn = function($dictUnfoldable) use (&$Data_Unfoldable_unfoldr, &$Data_Unfoldable_map, &$Data_Function_flip, &$Data_Tuple_Tuple, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Unfoldable_unfoldr)($dictUnfoldable, (function() use (&$Data_Unfoldable_map, &$Data_Function_flip, &$Data_Tuple_Tuple, &$Data_Maybe_Nothing) {
  $__fn = function($b) use (&$Data_Unfoldable_map, &$Data_Function_flip, &$Data_Tuple_Tuple, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Unfoldable_map)(($Data_Function_flip)($Data_Tuple_Tuple, $Data_Maybe_Nothing), $b);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

