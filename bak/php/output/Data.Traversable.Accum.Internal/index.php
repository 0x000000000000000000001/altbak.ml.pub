<?php

namespace Data\Traversable\Accum\Internal;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum.Internal/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Traversable_Accum_Internal_StateR
$Data_Traversable_Accum_Internal_StateR = (function() {
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

// Data_Traversable_Accum_Internal_StateL
$Data_Traversable_Accum_Internal_StateL = (function() {
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

// Data_Traversable_Accum_Internal_stateR
$Data_Traversable_Accum_Internal_stateR = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$k = $__case_0;
return $k;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($__body, &$__fn) {
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

// Data_Traversable_Accum_Internal_stateL
$Data_Traversable_Accum_Internal_stateL = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$k = $__case_0;
return $k;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($__body, &$__fn) {
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

// Data_Traversable_Accum_Internal_functorStateR
$Data_Traversable_Accum_Internal_functorStateR = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Traversable_Accum_Internal_StateR, &$Data_Traversable_Accum_Internal_stateR) {
  $__fn = function($f, $k = null) use (&$Data_Traversable_Accum_Internal_StateR, &$Data_Traversable_Accum_Internal_stateR, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_Accum_Internal_StateR)((function() use (&$Data_Traversable_Accum_Internal_stateR, $k, $f) {
  $__body = function($s) use (&$Data_Traversable_Accum_Internal_stateR, $k, $f) {
    $v = ($Data_Traversable_Accum_Internal_stateR)($k, $s);
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$s1 = ($__case_0)->accum;
$a = ($__case_0)->value;
return (object)["accum" => $s1, "value" => ($f)($a)];
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($s) use (&$Data_Traversable_Accum_Internal_stateR, $k, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($s);
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

// Data_Traversable_Accum_Internal_functorStateL
$Data_Traversable_Accum_Internal_functorStateL = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Traversable_Accum_Internal_StateL, &$Data_Traversable_Accum_Internal_stateL) {
  $__fn = function($f, $k = null) use (&$Data_Traversable_Accum_Internal_StateL, &$Data_Traversable_Accum_Internal_stateL, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_Accum_Internal_StateL)((function() use (&$Data_Traversable_Accum_Internal_stateL, $k, $f) {
  $__body = function($s) use (&$Data_Traversable_Accum_Internal_stateL, $k, $f) {
    $v = ($Data_Traversable_Accum_Internal_stateL)($k, $s);
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$s1 = ($__case_0)->accum;
$a = ($__case_0)->value;
return (object)["accum" => $s1, "value" => ($f)($a)];
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($s) use (&$Data_Traversable_Accum_Internal_stateL, $k, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($s);
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

// Data_Traversable_Accum_Internal_applyStateR
$Data_Traversable_Accum_Internal_applyStateR = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Traversable_Accum_Internal_StateR, &$Data_Traversable_Accum_Internal_stateR) {
  $__fn = function($f, $x = null) use (&$Data_Traversable_Accum_Internal_StateR, &$Data_Traversable_Accum_Internal_stateR, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_Accum_Internal_StateR)((function() use (&$Data_Traversable_Accum_Internal_stateR, $x, $f) {
  $__body = function($s) use (&$Data_Traversable_Accum_Internal_stateR, $x, $f) {
    $v = ($Data_Traversable_Accum_Internal_stateR)($x, $s);
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$s1 = ($__case_0)->accum;
$x__prime__ = ($__case_0)->value;
$v1 = ($Data_Traversable_Accum_Internal_stateR)($f, $s1);
$__case_0 = $v1;
if ((is_object)($__case_0)) {
$s2 = ($__case_0)->accum;
$f__prime__ = ($__case_0)->value;
return (object)["accum" => $s2, "value" => ($f__prime__)($x__prime__)];
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($s) use (&$Data_Traversable_Accum_Internal_stateR, $x, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($s);
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
})(), "Functor0" => (function() use (&$Data_Traversable_Accum_Internal_functorStateR) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_Accum_Internal_functorStateR, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_Accum_Internal_functorStateR;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_Accum_Internal_applyStateL
$Data_Traversable_Accum_Internal_applyStateL = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Traversable_Accum_Internal_StateL, &$Data_Traversable_Accum_Internal_stateL) {
  $__fn = function($f, $x = null) use (&$Data_Traversable_Accum_Internal_StateL, &$Data_Traversable_Accum_Internal_stateL, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_Accum_Internal_StateL)((function() use (&$Data_Traversable_Accum_Internal_stateL, $f, $x) {
  $__body = function($s) use (&$Data_Traversable_Accum_Internal_stateL, $f, $x) {
    $v = ($Data_Traversable_Accum_Internal_stateL)($f, $s);
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$s1 = ($__case_0)->accum;
$f__prime__ = ($__case_0)->value;
$v1 = ($Data_Traversable_Accum_Internal_stateL)($x, $s1);
$__case_0 = $v1;
if ((is_object)($__case_0)) {
$s2 = ($__case_0)->accum;
$x__prime__ = ($__case_0)->value;
return (object)["accum" => $s2, "value" => ($f__prime__)($x__prime__)];
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($s) use (&$Data_Traversable_Accum_Internal_stateL, $f, $x, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($s);
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
})(), "Functor0" => (function() use (&$Data_Traversable_Accum_Internal_functorStateL) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_Accum_Internal_functorStateL, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_Accum_Internal_functorStateL;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_Accum_Internal_applicativeStateR
$Data_Traversable_Accum_Internal_applicativeStateR = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => (function() use (&$Data_Traversable_Accum_Internal_StateR) {
  $__fn = function($a) use (&$Data_Traversable_Accum_Internal_StateR, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_Accum_Internal_StateR)((function() use ($a) {
  $__fn = function($s) use ($a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["accum" => $s, "value" => $a];
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
})(), "Apply0" => (function() use (&$Data_Traversable_Accum_Internal_applyStateR) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_Accum_Internal_applyStateR, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_Accum_Internal_applyStateR;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_Accum_Internal_applicativeStateL
$Data_Traversable_Accum_Internal_applicativeStateL = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => (function() use (&$Data_Traversable_Accum_Internal_StateL) {
  $__fn = function($a) use (&$Data_Traversable_Accum_Internal_StateL, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_Accum_Internal_StateL)((function() use ($a) {
  $__fn = function($s) use ($a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["accum" => $s, "value" => $a];
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
})(), "Apply0" => (function() use (&$Data_Traversable_Accum_Internal_applyStateL) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_Accum_Internal_applyStateL, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_Accum_Internal_applyStateL;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

