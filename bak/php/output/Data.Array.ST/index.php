<?php

namespace Data\Array\ST;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.ST/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Uncurried/index.php';
require_once __DIR__ . '/../Data.Array.ST/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Array_ST_bind
$Data_Array_ST_bind = ($Control_Bind_bind)($Control_Monad_ST_Internal_bindST);

// Data_Array_ST_negate
$Data_Array_ST_negate = ($Data_Ring_negate)($Data_Ring_ringInt);

// Data_Array_ST_pure
$Data_Array_ST_pure = ($Control_Applicative_pure)($Control_Monad_ST_Internal_applicativeST);

// Data_Array_ST_unshiftAll
$Data_Array_ST_unshiftAll = ($Control_Monad_ST_Uncurried_runSTFn2)($Data_Array_ST_unshiftAllImpl);

// Data_Array_ST_unshift
$Data_Array_ST_unshift = (function() use (&$Control_Monad_ST_Uncurried_runSTFn2, &$Data_Array_ST_unshiftAllImpl) {
  $__fn = function($a) use (&$Control_Monad_ST_Uncurried_runSTFn2, &$Data_Array_ST_unshiftAllImpl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_ST_Uncurried_runSTFn2)($Data_Array_ST_unshiftAllImpl, [$a]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_ST_unsafeThaw
$Data_Array_ST_unsafeThaw = ($Control_Monad_ST_Uncurried_runSTFn1)($Data_Array_ST_unsafeThawImpl);

// Data_Array_ST_unsafeFreeze
$Data_Array_ST_unsafeFreeze = ($Control_Monad_ST_Uncurried_runSTFn1)($Data_Array_ST_unsafeFreezeImpl);

// Data_Array_ST_toAssocArray
$Data_Array_ST_toAssocArray = ($Control_Monad_ST_Uncurried_runSTFn1)($Data_Array_ST_toAssocArrayImpl);

// Data_Array_ST_thaw
$Data_Array_ST_thaw = ($Control_Monad_ST_Uncurried_runSTFn1)($Data_Array_ST_thawImpl);

// Data_Array_ST_withArray
$Data_Array_ST_withArray = (function() use (&$Data_Array_ST_bind, &$Data_Array_ST_thaw, &$Data_Array_ST_unsafeFreeze) {
  $__fn = function($f, $xs = null) use (&$Data_Array_ST_bind, &$Data_Array_ST_thaw, &$Data_Array_ST_unsafeFreeze, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_bind)(($Data_Array_ST_thaw)($xs), (function() use (&$Data_Array_ST_bind, $f, &$Data_Array_ST_unsafeFreeze) {
  $__fn = function($result) use (&$Data_Array_ST_bind, $f, &$Data_Array_ST_unsafeFreeze, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_bind)(($f)($result), (function() use (&$Data_Array_ST_unsafeFreeze, $result) {
  $__fn = function($__dollar____unused) use (&$Data_Array_ST_unsafeFreeze, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_unsafeFreeze)($result);
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
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_ST_splice
$Data_Array_ST_splice = ($Control_Monad_ST_Uncurried_runSTFn4)($Data_Array_ST_spliceImpl);

// Data_Array_ST_sortBy
$Data_Array_ST_sortBy = (function() use (&$Control_Monad_ST_Uncurried_runSTFn3, &$Data_Array_ST_sortByImpl, &$Data_Array_ST_negate) {
  $__fn = function($comp) use (&$Control_Monad_ST_Uncurried_runSTFn3, &$Data_Array_ST_sortByImpl, &$Data_Array_ST_negate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_ST_Uncurried_runSTFn3)($Data_Array_ST_sortByImpl, $comp, (function() use (&$Data_Array_ST_negate) {
  $__body = function($v) use (&$Data_Array_ST_negate) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "GT")) {
return 1;
} else {
;
};
    if ((($__case_0)->tag === "EQ")) {
return 0;
} else {
;
};
    if ((($__case_0)->tag === "LT")) {
return ($Data_Array_ST_negate)(1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Array_ST_negate, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($v);
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

// Data_Array_ST_sortWith
$Data_Array_ST_sortWith = (function() use (&$Data_Ord_comparing, &$Data_Array_ST_sortBy) {
  $__fn = function($dictOrd) use (&$Data_Ord_comparing, &$Data_Array_ST_sortBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$comparing = ($Data_Ord_comparing)($dictOrd);
    $__res = (function() use (&$Data_Array_ST_sortBy, $comparing) {
  $__fn = function($f) use (&$Data_Array_ST_sortBy, $comparing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_sortBy)(($comparing)($f));
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

// Data_Array_ST_sort
$Data_Array_ST_sort = (function() use (&$Data_Array_ST_sortBy, &$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_Array_ST_sortBy, &$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_sortBy)(($Data_Ord_compare)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_ST_shift
$Data_Array_ST_shift = ($Control_Monad_ST_Uncurried_runSTFn3)($Data_Array_ST_shiftImpl, $Data_Maybe_Just, $Data_Maybe_Nothing);

// Data_Array_ST_run
$Data_Array_ST_run = (function() use (&$Control_Monad_ST_Internal_run, &$Data_Array_ST_bind, &$Data_Array_ST_unsafeFreeze) {
  $__fn = function($st) use (&$Control_Monad_ST_Internal_run, &$Data_Array_ST_bind, &$Data_Array_ST_unsafeFreeze, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_ST_Internal_run)(($Data_Array_ST_bind)($st, $Data_Array_ST_unsafeFreeze));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_ST_pushAll
$Data_Array_ST_pushAll = ($Control_Monad_ST_Uncurried_runSTFn2)($Data_Array_ST_pushAllImpl);

// Data_Array_ST_push
$Data_Array_ST_push = ($Control_Monad_ST_Uncurried_runSTFn2)($Data_Array_ST_pushImpl);

// Data_Array_ST_pop
$Data_Array_ST_pop = ($Control_Monad_ST_Uncurried_runSTFn3)($Data_Array_ST_popImpl, $Data_Maybe_Just, $Data_Maybe_Nothing);

// Data_Array_ST_poke
$Data_Array_ST_poke = ($Control_Monad_ST_Uncurried_runSTFn3)($Data_Array_ST_pokeImpl);

// Data_Array_ST_peek
$Data_Array_ST_peek = ($Control_Monad_ST_Uncurried_runSTFn4)($Data_Array_ST_peekImpl, $Data_Maybe_Just, $Data_Maybe_Nothing);

// Data_Array_ST_modify
$Data_Array_ST_modify = (function() use (&$Data_Array_ST_bind, &$Data_Array_ST_peek, &$Data_Array_ST_poke, &$Data_Array_ST_pure) {
  $__fn = function($i, $f = null, $xs = null) use (&$Data_Array_ST_bind, &$Data_Array_ST_peek, &$Data_Array_ST_poke, &$Data_Array_ST_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_bind)(($Data_Array_ST_peek)($i, $xs), (function() use (&$Data_Array_ST_poke, $i, $f, $xs, &$Data_Array_ST_pure) {
  $__body = function($entry) use (&$Data_Array_ST_poke, $i, $f, $xs, &$Data_Array_ST_pure) {
    $__case_0 = $entry;
    if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
return ($Data_Array_ST_poke)($i, ($f)($x), $xs);
} else {
;
};
    if ((($__case_0)->tag === "Nothing")) {
return ($Data_Array_ST_pure)(false);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($entry) use (&$Data_Array_ST_poke, $i, $f, $xs, &$Data_Array_ST_pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($entry);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($entry);
  };
  return $__fn;
})());
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_ST_length
$Data_Array_ST_length = ($Control_Monad_ST_Uncurried_runSTFn1)($Data_Array_ST_lengthImpl);

// Data_Array_ST_freeze
$Data_Array_ST_freeze = ($Control_Monad_ST_Uncurried_runSTFn1)($Data_Array_ST_freezeImpl);

// Data_Array_ST_clone
$Data_Array_ST_clone = ($Control_Monad_ST_Uncurried_runSTFn1)($Data_Array_ST_cloneImpl);

