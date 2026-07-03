<?php

namespace Data\Array\ST\Iterator;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.ST/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Ref/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array.ST/index.php';
require_once __DIR__ . '/../Data.Array.ST.Iterator/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Array_ST_Iterator_bind
$Data_Array_ST_Iterator_bind = ($Control_Bind_bind)($Control_Monad_ST_Internal_bindST);

// Data_Array_ST_Iterator_pure
$Data_Array_ST_Iterator_pure = ($Control_Applicative_pure)($Control_Monad_ST_Internal_applicativeST);

// Data_Array_ST_Iterator_add
$Data_Array_ST_Iterator_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Data_Array_ST_Iterator_map
$Data_Array_ST_Iterator_map = ($Data_Functor_map)($Control_Monad_ST_Internal_functorST);

// Data_Array_ST_Iterator_not
$Data_Array_ST_Iterator_not = ($Data_HeytingAlgebra_not)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Array_ST_Iterator_void
$Data_Array_ST_Iterator_void = ($Data_Functor_void)($Control_Monad_ST_Internal_functorST);

// Data_Array_ST_Iterator_Iterator
$Data_Array_ST_Iterator_Iterator = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Iterator", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_ST_Iterator_peek
$Data_Array_ST_Iterator_peek = (function() use (&$Data_Array_ST_Iterator_bind, &$Control_Monad_ST_Internal_read, &$Data_Array_ST_Iterator_pure) {
  $__body = function($v) use (&$Data_Array_ST_Iterator_bind, &$Control_Monad_ST_Internal_read, &$Data_Array_ST_Iterator_pure) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Iterator")) {
$f = ($__case_0)->values[0];
$currentIndex = ($__case_0)->values[1];
return ($Data_Array_ST_Iterator_bind)(($Control_Monad_ST_Internal_read)($currentIndex), (function() use (&$Data_Array_ST_Iterator_pure, $f) {
  $__fn = function($i) use (&$Data_Array_ST_Iterator_pure, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_Iterator_pure)(($f)($i));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Array_ST_Iterator_bind, &$Control_Monad_ST_Internal_read, &$Data_Array_ST_Iterator_pure, $__body, &$__fn) {
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
})();

// Data_Array_ST_Iterator_next
$Data_Array_ST_Iterator_next = (function() use (&$Data_Array_ST_Iterator_bind, &$Control_Monad_ST_Internal_read, &$Control_Monad_ST_Internal_modify, &$Data_Array_ST_Iterator_add, &$Data_Array_ST_Iterator_pure) {
  $__body = function($v) use (&$Data_Array_ST_Iterator_bind, &$Control_Monad_ST_Internal_read, &$Control_Monad_ST_Internal_modify, &$Data_Array_ST_Iterator_add, &$Data_Array_ST_Iterator_pure) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Iterator")) {
$f = ($__case_0)->values[0];
$currentIndex = ($__case_0)->values[1];
return ($Data_Array_ST_Iterator_bind)(($Control_Monad_ST_Internal_read)($currentIndex), (function() use (&$Data_Array_ST_Iterator_bind, &$Control_Monad_ST_Internal_modify, &$Data_Array_ST_Iterator_add, $currentIndex, &$Data_Array_ST_Iterator_pure, $f) {
  $__fn = function($i) use (&$Data_Array_ST_Iterator_bind, &$Control_Monad_ST_Internal_modify, &$Data_Array_ST_Iterator_add, $currentIndex, &$Data_Array_ST_Iterator_pure, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_Iterator_bind)(($Control_Monad_ST_Internal_modify)((function() use (&$Data_Array_ST_Iterator_add) {
  $__fn = function($v1) use (&$Data_Array_ST_Iterator_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_Iterator_add)($v1, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $currentIndex), (function() use (&$Data_Array_ST_Iterator_pure, $f, $i) {
  $__fn = function($__dollar____unused) use (&$Data_Array_ST_Iterator_pure, $f, $i, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_Iterator_pure)(($f)($i));
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
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Array_ST_Iterator_bind, &$Control_Monad_ST_Internal_read, &$Control_Monad_ST_Internal_modify, &$Data_Array_ST_Iterator_add, &$Data_Array_ST_Iterator_pure, $__body, &$__fn) {
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
})();

// Data_Array_ST_Iterator_pushWhile
$Data_Array_ST_Iterator_pushWhile = (function() use (&$Data_Array_ST_Iterator_bind, &$Control_Monad_ST_Internal_new, &$Control_Monad_ST_Internal_while, &$Data_Array_ST_Iterator_map, &$Data_Array_ST_Iterator_not, &$Control_Monad_ST_Internal_read, &$Data_Array_ST_Iterator_peek, &$Data_Array_ST_Iterator_void, &$Control_Monad_ST_Internal_write) {
  $__fn = function($p, $iter = null, $array = null) use (&$Data_Array_ST_Iterator_bind, &$Control_Monad_ST_Internal_new, &$Control_Monad_ST_Internal_while, &$Data_Array_ST_Iterator_map, &$Data_Array_ST_Iterator_not, &$Control_Monad_ST_Internal_read, &$Data_Array_ST_Iterator_peek, &$Data_Array_ST_Iterator_void, &$Control_Monad_ST_Internal_write, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_Iterator_bind)(($Control_Monad_ST_Internal_new)(false), (function() use (&$Control_Monad_ST_Internal_while, &$Data_Array_ST_Iterator_map, &$Data_Array_ST_Iterator_not, &$Control_Monad_ST_Internal_read, &$Data_Array_ST_Iterator_bind, &$Data_Array_ST_Iterator_peek, $iter, &$Data_Array_ST_Iterator_void, &$Control_Monad_ST_Internal_write) {
  $__fn = function($break) use (&$Control_Monad_ST_Internal_while, &$Data_Array_ST_Iterator_map, &$Data_Array_ST_Iterator_not, &$Control_Monad_ST_Internal_read, &$Data_Array_ST_Iterator_bind, &$Data_Array_ST_Iterator_peek, $iter, &$Data_Array_ST_Iterator_void, &$Control_Monad_ST_Internal_write, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_ST_Internal_while)(($Data_Array_ST_Iterator_map)($Data_Array_ST_Iterator_not, ($Control_Monad_ST_Internal_read)($break)), ($Data_Array_ST_Iterator_bind)(($Data_Array_ST_Iterator_peek)($iter), (function() use (&$Data_Array_ST_Iterator_void, &$Control_Monad_ST_Internal_write, $break) {
  $__body = function($mx) use (&$Data_Array_ST_Iterator_void, &$Control_Monad_ST_Internal_write, $break) {
    $__case_0 = $mx;
    if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
return "/* Unsupported: Guards not supported */";
} else {
;
};
    if (true) {
return ($Data_Array_ST_Iterator_void)(($Control_Monad_ST_Internal_write)(true, $break));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($mx) use (&$Data_Array_ST_Iterator_void, &$Control_Monad_ST_Internal_write, $break, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($mx);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($mx);
  };
  return $__fn;
})()));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
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

// Data_Array_ST_Iterator_pushAll
$Data_Array_ST_Iterator_pushAll = ($Data_Array_ST_Iterator_pushWhile)(($Data_Function_const)(true));

// Data_Array_ST_Iterator_iterator
$Data_Array_ST_Iterator_iterator = (function() use (&$Data_Array_ST_Iterator_map, &$Data_Array_ST_Iterator_Iterator, &$Control_Monad_ST_Internal_new) {
  $__fn = function($f) use (&$Data_Array_ST_Iterator_map, &$Data_Array_ST_Iterator_Iterator, &$Control_Monad_ST_Internal_new, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_Iterator_map)(($Data_Array_ST_Iterator_Iterator)($f), ($Control_Monad_ST_Internal_new)(0));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_ST_Iterator_iterate
$Data_Array_ST_Iterator_iterate = (function() use (&$Data_Array_ST_Iterator_bind, &$Control_Monad_ST_Internal_new, &$Control_Monad_ST_Internal_while, &$Data_Array_ST_Iterator_map, &$Data_Array_ST_Iterator_not, &$Control_Monad_ST_Internal_read, &$Data_Array_ST_Iterator_next, &$Data_Array_ST_Iterator_void, &$Control_Monad_ST_Internal_write) {
  $__fn = function($iter, $f = null) use (&$Data_Array_ST_Iterator_bind, &$Control_Monad_ST_Internal_new, &$Control_Monad_ST_Internal_while, &$Data_Array_ST_Iterator_map, &$Data_Array_ST_Iterator_not, &$Control_Monad_ST_Internal_read, &$Data_Array_ST_Iterator_next, &$Data_Array_ST_Iterator_void, &$Control_Monad_ST_Internal_write, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_Iterator_bind)(($Control_Monad_ST_Internal_new)(false), (function() use (&$Control_Monad_ST_Internal_while, &$Data_Array_ST_Iterator_map, &$Data_Array_ST_Iterator_not, &$Control_Monad_ST_Internal_read, &$Data_Array_ST_Iterator_bind, &$Data_Array_ST_Iterator_next, $iter, $f, &$Data_Array_ST_Iterator_void, &$Control_Monad_ST_Internal_write) {
  $__fn = function($break) use (&$Control_Monad_ST_Internal_while, &$Data_Array_ST_Iterator_map, &$Data_Array_ST_Iterator_not, &$Control_Monad_ST_Internal_read, &$Data_Array_ST_Iterator_bind, &$Data_Array_ST_Iterator_next, $iter, $f, &$Data_Array_ST_Iterator_void, &$Control_Monad_ST_Internal_write, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_ST_Internal_while)(($Data_Array_ST_Iterator_map)($Data_Array_ST_Iterator_not, ($Control_Monad_ST_Internal_read)($break)), ($Data_Array_ST_Iterator_bind)(($Data_Array_ST_Iterator_next)($iter), (function() use ($f, &$Data_Array_ST_Iterator_void, &$Control_Monad_ST_Internal_write, $break) {
  $__body = function($mx) use ($f, &$Data_Array_ST_Iterator_void, &$Control_Monad_ST_Internal_write, $break) {
    $__case_0 = $mx;
    if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
return ($f)($x);
} else {
;
};
    if ((($__case_0)->tag === "Nothing")) {
return ($Data_Array_ST_Iterator_void)(($Control_Monad_ST_Internal_write)(true, $break));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($mx) use ($f, &$Data_Array_ST_Iterator_void, &$Control_Monad_ST_Internal_write, $break, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($mx);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($mx);
  };
  return $__fn;
})()));
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

// Data_Array_ST_Iterator_exhausted
$Data_Array_ST_Iterator_exhausted = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn, ($Data_Array_ST_Iterator_map)($Data_Maybe_isNothing), $Data_Array_ST_Iterator_peek);

