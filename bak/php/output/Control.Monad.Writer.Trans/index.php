<?php

namespace Control\Monad\Writer\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Trans/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_Writer_Trans_compose
$Control_Monad_Writer_Trans_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_Writer_Trans_WriterT
$Control_Monad_Writer_Trans_WriterT = (function() {
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

// Control_Monad_Writer_Trans_runWriterT
$Control_Monad_Writer_Trans_runWriterT = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return $x;
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

// Control_Monad_Writer_Trans_newtypeWriterT
$Control_Monad_Writer_Trans_newtypeWriterT = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
  $__fn = function($__dollar____unused) use (&$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Prim_undefined;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Writer_Trans_monadTransWriterT
$Control_Monad_Writer_Trans_monadTransWriterT = (function() use (&$Data_Monoid_mempty, &$Control_Monad_Trans_Class_MonadTrans__dollar__Dict, &$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Control_Monad_Trans_Class_MonadTrans__dollar__Dict, &$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = ($Control_Monad_Trans_Class_MonadTrans__dollar__Dict)((object)["lift" => (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $mempty) {
  $__fn = function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
    $__res = (function() use (&$Control_Monad_Writer_Trans_WriterT, $bind, $pure, &$Data_Tuple_Tuple, $mempty) {
  $__fn = function($m) use (&$Control_Monad_Writer_Trans_WriterT, $bind, $pure, &$Data_Tuple_Tuple, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Writer_Trans_WriterT)(($bind)($m, (function() use ($pure, &$Data_Tuple_Tuple, $mempty) {
  $__fn = function($a) use ($pure, &$Data_Tuple_Tuple, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)(($Data_Tuple_Tuple)($a, $mempty));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Writer_Trans_mapWriterT
$Control_Monad_Writer_Trans_mapWriterT = (function() use (&$Control_Monad_Writer_Trans_WriterT) {
  $__body = function($f, $v) use (&$Control_Monad_Writer_Trans_WriterT) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return ($Control_Monad_Writer_Trans_WriterT)(($f1)($m));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Monad_Writer_Trans_WriterT, $__body, &$__fn) {
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

// Control_Monad_Writer_Trans_functorWriterT
$Control_Monad_Writer_Trans_functorWriterT = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Control_Monad_Writer_Trans_mapWriterT, &$Data_Tuple_Tuple) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Control_Monad_Writer_Trans_mapWriterT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Control_Monad_Writer_Trans_mapWriterT, $map, &$Data_Tuple_Tuple) {
  $__fn = function($f) use (&$Control_Monad_Writer_Trans_mapWriterT, $map, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Writer_Trans_mapWriterT)(($map)((function() use (&$Data_Tuple_Tuple, $f) {
  $__body = function($v) use (&$Data_Tuple_Tuple, $f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$w = ($__case_0)->values[1];
return ($Data_Tuple_Tuple)(($f)($a), $w);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Tuple_Tuple, $f, $__body, &$__fn) {
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
})()));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Writer_Trans_execWriterT
$Control_Monad_Writer_Trans_execWriterT = (function() use (&$Data_Functor_map, &$Data_Tuple_snd) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Tuple_snd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use ($map, &$Data_Tuple_snd) {
  $__body = function($v) use ($map, &$Data_Tuple_snd) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($map)($Data_Tuple_snd, $m);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map, &$Data_Tuple_snd, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Writer_Trans_applyWriterT
$Control_Monad_Writer_Trans_applyWriterT = (function() use (&$Data_Semigroup_append, &$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, &$Control_Monad_Writer_Trans_functorWriterT, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, &$Control_Monad_Writer_Trans_functorWriterT, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)($dictSemigroup);
    $__res = (function() use (&$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, &$Control_Monad_Writer_Trans_functorWriterT, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $append) {
  $__fn = function($dictApply) use (&$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, &$Control_Monad_Writer_Trans_functorWriterT, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$apply = ($Control_Apply_apply)($dictApply);
$Functor0 = (($dictApply)->Functor0)($Prim_undefined);
$map = ($Data_Functor_map)($Functor0);
$functorWriterT1 = ($Control_Monad_Writer_Trans_functorWriterT)($Functor0);
    $__res = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $append, $apply, $map) {
  $__body = function($v, $v1) use (&$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $append, $apply, $map) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$v2 = $__case_1;
return ($Control_Monad_Writer_Trans_WriterT)((function() use (&$Data_Tuple_Tuple, $append, $apply, $map, $f, $v2) {
$k = (function() use (&$Data_Tuple_Tuple, $append) {
  $__body = function($v3, $v4) use (&$Data_Tuple_Tuple, $append) {
    $__case_0 = $v3;
    $__case_1 = $v4;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$a = ($__case_0)->values[0];
$w = ($__case_0)->values[1];
$b = ($__case_1)->values[0];
$w__prime__ = ($__case_1)->values[1];
return ($Data_Tuple_Tuple)(($a)($b), ($append)($w, $w__prime__));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v3, $v4 = null) use (&$Data_Tuple_Tuple, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v3, $v4);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v3, $v4);
  };
  return $__fn;
})();
return ($apply)(($map)($k, $f), $v2);
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $append, $apply, $map, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorWriterT1) {
  $__fn = function($__dollar____unused) use ($functorWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorWriterT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Control_Monad_Writer_Trans_bindWriterT
$Control_Monad_Writer_Trans_bindWriterT = (function() use (&$Data_Semigroup_append, &$Control_Monad_Writer_Trans_applyWriterT, &$Control_Bind_bind, &$Prim_undefined, &$Data_Functor_map, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Control_Monad_Writer_Trans_applyWriterT, &$Control_Bind_bind, &$Prim_undefined, &$Data_Functor_map, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)($dictSemigroup);
$applyWriterT1 = ($Control_Monad_Writer_Trans_applyWriterT)($dictSemigroup);
    $__res = (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Data_Functor_map, $applyWriterT1, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $append) {
  $__fn = function($dictBind) use (&$Control_Bind_bind, &$Prim_undefined, &$Data_Functor_map, $applyWriterT1, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)($dictBind);
$Apply0 = (($dictBind)->Apply0)($Prim_undefined);
$map = ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined));
$applyWriterT2 = ($applyWriterT1)($Apply0);
    $__res = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Control_Monad_Writer_Trans_WriterT, $bind, $map, &$Data_Tuple_Tuple, $append) {
  $__body = function($v, $k) use (&$Control_Monad_Writer_Trans_WriterT, $bind, $map, &$Data_Tuple_Tuple, $append) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($Control_Monad_Writer_Trans_WriterT)(($bind)($m, (function() use ($k1, $map, &$Data_Tuple_Tuple, $append) {
  $__body = function($v1) use ($k1, $map, &$Data_Tuple_Tuple, $append) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$w = ($__case_0)->values[1];
$v2 = ($k1)($a);
$__case_0 = $v2;
if (true) {
$wt = $__case_0;
return ($map)((function() use (&$Data_Tuple_Tuple, $append, $w) {
  $__body = function($v3) use (&$Data_Tuple_Tuple, $append, $w) {
    $__case_0 = $v3;
    if ((($__case_0)->tag === "Tuple")) {
$b = ($__case_0)->values[0];
$w__prime__ = ($__case_0)->values[1];
return ($Data_Tuple_Tuple)($b, ($append)($w, $w__prime__));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v3) use (&$Data_Tuple_Tuple, $append, $w, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($v3);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($v3);
  };
  return $__fn;
})(), $wt);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use ($k1, $map, &$Data_Tuple_Tuple, $append, $__body, &$__fn) {
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
})()));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $k = null) use (&$Control_Monad_Writer_Trans_WriterT, $bind, $map, &$Data_Tuple_Tuple, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $k);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $k);
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyWriterT2) {
  $__fn = function($__dollar____unused) use ($applyWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Control_Monad_Writer_Trans_semigroupWriterT
$Control_Monad_Writer_Trans_semigroupWriterT = (function() use (&$Control_Apply_lift2, &$Control_Monad_Writer_Trans_applyWriterT, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append) {
  $__fn = function($dictApply, $dictSemigroup = null) use (&$Control_Apply_lift2, &$Control_Monad_Writer_Trans_applyWriterT, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift2 = ($Control_Apply_lift2)(($Control_Monad_Writer_Trans_applyWriterT)($dictSemigroup, $dictApply));
    $__res = (function() use (&$Data_Semigroup_Semigroup__dollar__Dict, $lift2, &$Data_Semigroup_append) {
  $__fn = function($dictSemigroup1) use (&$Data_Semigroup_Semigroup__dollar__Dict, $lift2, &$Data_Semigroup_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => ($lift2)(($Data_Semigroup_append)($dictSemigroup1))]);
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

// Control_Monad_Writer_Trans_applicativeWriterT
$Control_Monad_Writer_Trans_applicativeWriterT = (function() use (&$Data_Monoid_mempty, &$Control_Monad_Writer_Trans_applyWriterT, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Control_Monad_Writer_Trans_applyWriterT, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
$applyWriterT1 = ($Control_Monad_Writer_Trans_applyWriterT)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = (function() use (&$Control_Applicative_pure, $applyWriterT1, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $mempty) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, $applyWriterT1, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
$applyWriterT2 = ($applyWriterT1)((($dictApplicative)->Apply0)($Prim_undefined));
    $__res = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => (function() use (&$Control_Monad_Writer_Trans_WriterT, $pure, &$Data_Tuple_Tuple, $mempty) {
  $__fn = function($a) use (&$Control_Monad_Writer_Trans_WriterT, $pure, &$Data_Tuple_Tuple, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Writer_Trans_WriterT)(($pure)(($Data_Tuple_Tuple)($a, $mempty)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyWriterT2) {
  $__fn = function($__dollar____unused) use ($applyWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Control_Monad_Writer_Trans_monadWriterT
$Control_Monad_Writer_Trans_monadWriterT = (function() use (&$Control_Monad_Writer_Trans_applicativeWriterT, &$Control_Monad_Writer_Trans_bindWriterT, &$Prim_undefined, &$Control_Monad_Monad__dollar__Dict) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Writer_Trans_applicativeWriterT, &$Control_Monad_Writer_Trans_bindWriterT, &$Prim_undefined, &$Control_Monad_Monad__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeWriterT1 = ($Control_Monad_Writer_Trans_applicativeWriterT)($dictMonoid);
$bindWriterT1 = ($Control_Monad_Writer_Trans_bindWriterT)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = (function() use ($applicativeWriterT1, &$Prim_undefined, $bindWriterT1, &$Control_Monad_Monad__dollar__Dict) {
  $__fn = function($dictMonad) use ($applicativeWriterT1, &$Prim_undefined, $bindWriterT1, &$Control_Monad_Monad__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeWriterT2 = ($applicativeWriterT1)((($dictMonad)->Applicative0)($Prim_undefined));
$bindWriterT2 = ($bindWriterT1)((($dictMonad)->Bind1)($Prim_undefined));
    $__res = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeWriterT2) {
  $__fn = function($__dollar____unused) use ($applicativeWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindWriterT2) {
  $__fn = function($__dollar____unused) use ($bindWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bindWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Control_Monad_Writer_Trans_monadAskWriterT
$Control_Monad_Writer_Trans_monadAskWriterT = (function() use (&$Control_Monad_Trans_Class_lift, &$Control_Monad_Writer_Trans_monadTransWriterT, &$Control_Monad_Writer_Trans_monadWriterT, &$Prim_undefined, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, &$Control_Monad_Reader_Class_ask) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Trans_Class_lift, &$Control_Monad_Writer_Trans_monadTransWriterT, &$Control_Monad_Writer_Trans_monadWriterT, &$Prim_undefined, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, &$Control_Monad_Reader_Class_ask, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift = ($Control_Monad_Trans_Class_lift)(($Control_Monad_Writer_Trans_monadTransWriterT)($dictMonoid));
$monadWriterT1 = ($Control_Monad_Writer_Trans_monadWriterT)($dictMonoid);
    $__res = (function() use (&$Prim_undefined, $monadWriterT1, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, $lift, &$Control_Monad_Reader_Class_ask) {
  $__fn = function($dictMonadAsk) use (&$Prim_undefined, $monadWriterT1, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, $lift, &$Control_Monad_Reader_Class_ask, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadAsk)->Monad0)($Prim_undefined);
$monadWriterT2 = ($monadWriterT1)($Monad0);
    $__res = ($Control_Monad_Reader_Class_MonadAsk__dollar__Dict)((object)["ask" => ($lift)($Monad0, ($Control_Monad_Reader_Class_ask)($dictMonadAsk)), "Monad0" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Control_Monad_Writer_Trans_monadReaderWriterT
$Control_Monad_Writer_Trans_monadReaderWriterT = (function() use (&$Control_Monad_Writer_Trans_monadAskWriterT, &$Control_Monad_Reader_Class_local, &$Prim_undefined, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_Writer_Trans_mapWriterT) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Writer_Trans_monadAskWriterT, &$Control_Monad_Reader_Class_local, &$Prim_undefined, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_Writer_Trans_mapWriterT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadAskWriterT1 = ($Control_Monad_Writer_Trans_monadAskWriterT)($dictMonoid);
    $__res = (function() use (&$Control_Monad_Reader_Class_local, $monadAskWriterT1, &$Prim_undefined, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_Writer_Trans_mapWriterT) {
  $__fn = function($dictMonadReader) use (&$Control_Monad_Reader_Class_local, $monadAskWriterT1, &$Prim_undefined, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_Writer_Trans_mapWriterT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$local = ($Control_Monad_Reader_Class_local)($dictMonadReader);
$monadAskWriterT2 = ($monadAskWriterT1)((($dictMonadReader)->MonadAsk0)($Prim_undefined));
    $__res = ($Control_Monad_Reader_Class_MonadReader__dollar__Dict)((object)["local" => (function() use (&$Control_Monad_Writer_Trans_mapWriterT, $local) {
  $__fn = function($f) use (&$Control_Monad_Writer_Trans_mapWriterT, $local, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Writer_Trans_mapWriterT)(($local)($f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "MonadAsk0" => (function() use ($monadAskWriterT2) {
  $__fn = function($__dollar____unused) use ($monadAskWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadAskWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Control_Monad_Writer_Trans_monadContWriterT
$Control_Monad_Writer_Trans_monadContWriterT = (function() use (&$Data_Monoid_mempty, &$Control_Monad_Writer_Trans_monadWriterT, &$Control_Monad_Cont_Class_callCC, &$Prim_undefined, &$Control_Monad_Cont_Class_MonadCont__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Control_Monad_Writer_Trans_monadWriterT, &$Control_Monad_Cont_Class_callCC, &$Prim_undefined, &$Control_Monad_Cont_Class_MonadCont__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
$monadWriterT1 = ($Control_Monad_Writer_Trans_monadWriterT)($dictMonoid);
    $__res = (function() use (&$Control_Monad_Cont_Class_callCC, $monadWriterT1, &$Prim_undefined, &$Control_Monad_Cont_Class_MonadCont__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $mempty) {
  $__fn = function($dictMonadCont) use (&$Control_Monad_Cont_Class_callCC, $monadWriterT1, &$Prim_undefined, &$Control_Monad_Cont_Class_MonadCont__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$callCC = ($Control_Monad_Cont_Class_callCC)($dictMonadCont);
$monadWriterT2 = ($monadWriterT1)((($dictMonadCont)->Monad0)($Prim_undefined));
    $__res = ($Control_Monad_Cont_Class_MonadCont__dollar__Dict)((object)["callCC" => (function() use (&$Control_Monad_Writer_Trans_WriterT, $callCC, &$Data_Tuple_Tuple, $mempty) {
  $__fn = function($f) use (&$Control_Monad_Writer_Trans_WriterT, $callCC, &$Data_Tuple_Tuple, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Writer_Trans_WriterT)(($callCC)((function() use ($f, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $mempty) {
  $__body = function($c) use ($f, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $mempty) {
    $v = ($f)((function() use (&$Control_Monad_Writer_Trans_WriterT, $c, &$Data_Tuple_Tuple, $mempty) {
  $__fn = function($a) use (&$Control_Monad_Writer_Trans_WriterT, $c, &$Data_Tuple_Tuple, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Writer_Trans_WriterT)(($c)(($Data_Tuple_Tuple)($a, $mempty)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    $__case_0 = $v;
    if (true) {
$b = $__case_0;
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($c) use ($f, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $mempty, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($c);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($c);
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
})(), "Monad0" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Control_Monad_Writer_Trans_monadEffectWriter
$Control_Monad_Writer_Trans_monadEffectWriter = (function() use (&$Control_Monad_Trans_Class_lift, &$Control_Monad_Writer_Trans_monadTransWriterT, &$Control_Monad_Writer_Trans_monadWriterT, &$Prim_undefined, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_Writer_Trans_compose, &$Effect_Class_liftEffect) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Trans_Class_lift, &$Control_Monad_Writer_Trans_monadTransWriterT, &$Control_Monad_Writer_Trans_monadWriterT, &$Prim_undefined, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_Writer_Trans_compose, &$Effect_Class_liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift = ($Control_Monad_Trans_Class_lift)(($Control_Monad_Writer_Trans_monadTransWriterT)($dictMonoid));
$monadWriterT1 = ($Control_Monad_Writer_Trans_monadWriterT)($dictMonoid);
    $__res = (function() use (&$Prim_undefined, $monadWriterT1, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_Writer_Trans_compose, $lift, &$Effect_Class_liftEffect) {
  $__fn = function($dictMonadEffect) use (&$Prim_undefined, $monadWriterT1, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_Writer_Trans_compose, $lift, &$Effect_Class_liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadEffect)->Monad0)($Prim_undefined);
$monadWriterT2 = ($monadWriterT1)($Monad0);
    $__res = ($Effect_Class_MonadEffect__dollar__Dict)((object)["liftEffect" => ($Control_Monad_Writer_Trans_compose)(($lift)($Monad0), ($Effect_Class_liftEffect)($dictMonadEffect)), "Monad0" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Control_Monad_Writer_Trans_monadRecWriterT
$Control_Monad_Writer_Trans_monadRecWriterT = (function() use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$Control_Monad_Writer_Trans_monadWriterT, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Rec_Class_tailRecM, &$Control_Monad_Rec_Class_MonadRec__dollar__Dict, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Writer_Trans_WriterT) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$Control_Monad_Writer_Trans_monadWriterT, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Rec_Class_tailRecM, &$Control_Monad_Rec_Class_MonadRec__dollar__Dict, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Writer_Trans_WriterT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$mempty = ($Data_Monoid_mempty)($dictMonoid);
$monadWriterT1 = ($Control_Monad_Writer_Trans_monadWriterT)($dictMonoid);
    $__res = (function() use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Rec_Class_tailRecM, $monadWriterT1, &$Control_Monad_Rec_Class_MonadRec__dollar__Dict, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, $append, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Writer_Trans_WriterT, $mempty) {
  $__fn = function($dictMonadRec) use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Rec_Class_tailRecM, $monadWriterT1, &$Control_Monad_Rec_Class_MonadRec__dollar__Dict, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, $append, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Writer_Trans_WriterT, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadRec)->Monad0)($Prim_undefined);
$bind = ($Control_Bind_bind)((($Monad0)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($Monad0)->Applicative0)($Prim_undefined));
$tailRecM = ($Control_Monad_Rec_Class_tailRecM)($dictMonadRec);
$monadWriterT2 = ($monadWriterT1)($Monad0);
    $__res = ($Control_Monad_Rec_Class_MonadRec__dollar__Dict)((object)["tailRecM" => (function() use ($bind, $pure, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, $append, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Writer_Trans_WriterT, $tailRecM, $mempty) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, $append, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Writer_Trans_WriterT, $tailRecM, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$f__prime__ = (function() use ($f, $bind, $pure, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, $append, &$Control_Monad_Rec_Class_Done) {
  $__body = function($v) use ($f, $bind, $pure, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, $append, &$Control_Monad_Rec_Class_Done) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a__prime__ = ($__case_0)->values[0];
$w = ($__case_0)->values[1];
$v1 = ($f)($a__prime__);
$__case_0 = $v1;
if (true) {
$wt = $__case_0;
return ($bind)($wt, (function() use ($pure, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, $append, $w, &$Control_Monad_Rec_Class_Done) {
  $__body = function($v2) use ($pure, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, $append, $w, &$Control_Monad_Rec_Class_Done) {
    $__case_0 = $v2;
    if ((($__case_0)->tag === "Tuple")) {
$m = ($__case_0)->values[0];
$w1 = ($__case_0)->values[1];
return ($pure)((function() use ($m, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, $append, $w, $w1, &$Control_Monad_Rec_Class_Done) {
$__case_0 = $m;
if ((($__case_0)->tag === "Loop")) {
$x = ($__case_0)->values[0];
return ($Control_Monad_Rec_Class_Loop)(($Data_Tuple_Tuple)($x, ($append)($w, $w1)));
} else {
;
};
if ((($__case_0)->tag === "Done")) {
$y = ($__case_0)->values[0];
return ($Control_Monad_Rec_Class_Done)(($Data_Tuple_Tuple)($y, ($append)($w, $w1)));
} else {
;
};
throw new \Exception("Pattern match failure");
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v2) use ($pure, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, $append, $w, &$Control_Monad_Rec_Class_Done, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($v2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($v2);
  };
  return $__fn;
})());
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($f, $bind, $pure, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, $append, &$Control_Monad_Rec_Class_Done, $__body, &$__fn) {
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
    $__res = ($Control_Monad_Writer_Trans_WriterT)(($tailRecM)($f__prime__, ($Data_Tuple_Tuple)($a, $mempty)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Control_Monad_Writer_Trans_monadStateWriterT
$Control_Monad_Writer_Trans_monadStateWriterT = (function() use (&$Control_Monad_Trans_Class_lift, &$Control_Monad_Writer_Trans_monadTransWriterT, &$Control_Monad_Writer_Trans_monadWriterT, &$Prim_undefined, &$Control_Monad_State_Class_state, &$Control_Monad_State_Class_MonadState__dollar__Dict) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Trans_Class_lift, &$Control_Monad_Writer_Trans_monadTransWriterT, &$Control_Monad_Writer_Trans_monadWriterT, &$Prim_undefined, &$Control_Monad_State_Class_state, &$Control_Monad_State_Class_MonadState__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift = ($Control_Monad_Trans_Class_lift)(($Control_Monad_Writer_Trans_monadTransWriterT)($dictMonoid));
$monadWriterT1 = ($Control_Monad_Writer_Trans_monadWriterT)($dictMonoid);
    $__res = (function() use (&$Prim_undefined, $lift, &$Control_Monad_State_Class_state, $monadWriterT1, &$Control_Monad_State_Class_MonadState__dollar__Dict) {
  $__fn = function($dictMonadState) use (&$Prim_undefined, $lift, &$Control_Monad_State_Class_state, $monadWriterT1, &$Control_Monad_State_Class_MonadState__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadState)->Monad0)($Prim_undefined);
$lift1 = ($lift)($Monad0);
$state = ($Control_Monad_State_Class_state)($dictMonadState);
$monadWriterT2 = ($monadWriterT1)($Monad0);
    $__res = ($Control_Monad_State_Class_MonadState__dollar__Dict)((object)["state" => (function() use ($lift1, $state) {
  $__fn = function($f) use ($lift1, $state, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($lift1)(($state)($f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Control_Monad_Writer_Trans_monadTellWriterT
$Control_Monad_Writer_Trans_monadTellWriterT = (function() use (&$Prim_undefined, &$Control_Monad_Writer_Trans_monadWriterT, &$Control_Monad_Writer_Class_MonadTell__dollar__Dict, &$Control_Monad_Writer_Trans_compose, &$Control_Monad_Writer_Trans_WriterT, &$Control_Applicative_pure, &$Data_Tuple_Tuple, &$Data_Unit_unit) {
  $__fn = function($dictMonoid) use (&$Prim_undefined, &$Control_Monad_Writer_Trans_monadWriterT, &$Control_Monad_Writer_Class_MonadTell__dollar__Dict, &$Control_Monad_Writer_Trans_compose, &$Control_Monad_Writer_Trans_WriterT, &$Control_Applicative_pure, &$Data_Tuple_Tuple, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Semigroup0 = (($dictMonoid)->Semigroup0)($Prim_undefined);
$monadWriterT1 = ($Control_Monad_Writer_Trans_monadWriterT)($dictMonoid);
    $__res = (function() use ($monadWriterT1, &$Control_Monad_Writer_Class_MonadTell__dollar__Dict, &$Control_Monad_Writer_Trans_compose, &$Control_Monad_Writer_Trans_WriterT, &$Control_Applicative_pure, &$Prim_undefined, &$Data_Tuple_Tuple, &$Data_Unit_unit, &$Semigroup0) {
  $__fn = function($dictMonad) use ($monadWriterT1, &$Control_Monad_Writer_Class_MonadTell__dollar__Dict, &$Control_Monad_Writer_Trans_compose, &$Control_Monad_Writer_Trans_WriterT, &$Control_Applicative_pure, &$Prim_undefined, &$Data_Tuple_Tuple, &$Data_Unit_unit, &$Semigroup0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadWriterT2 = ($monadWriterT1)($dictMonad);
    $__res = ($Control_Monad_Writer_Class_MonadTell__dollar__Dict)((object)["tell" => ($Control_Monad_Writer_Trans_compose)($Control_Monad_Writer_Trans_WriterT, ($Control_Monad_Writer_Trans_compose)(($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined)), ($Data_Tuple_Tuple)($Data_Unit_unit))), "Semigroup0" => (function() use (&$Semigroup0) {
  $__fn = function($__dollar____unused) use (&$Semigroup0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Semigroup0;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad1" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Control_Monad_Writer_Trans_monadWriterWriterT
$Control_Monad_Writer_Trans_monadWriterWriterT = (function() use (&$Control_Monad_Writer_Trans_monadTellWriterT, &$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_Writer_Class_MonadWriter__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Writer_Trans_monadTellWriterT, &$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_Writer_Class_MonadWriter__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadTellWriterT1 = ($Control_Monad_Writer_Trans_monadTellWriterT)($dictMonoid);
    $__res = (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, $monadTellWriterT1, &$Control_Monad_Writer_Class_MonadWriter__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $dictMonoid) {
  $__fn = function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, $monadTellWriterT1, &$Control_Monad_Writer_Class_MonadWriter__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Data_Tuple_Tuple, $dictMonoid, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$monadTellWriterT2 = ($monadTellWriterT1)($dictMonad);
    $__res = ($Control_Monad_Writer_Class_MonadWriter__dollar__Dict)((object)["listen" => (function() use (&$Control_Monad_Writer_Trans_WriterT, $bind, $pure, &$Data_Tuple_Tuple) {
  $__body = function($v) use (&$Control_Monad_Writer_Trans_WriterT, $bind, $pure, &$Data_Tuple_Tuple) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($Control_Monad_Writer_Trans_WriterT)(($bind)($m, (function() use ($pure, &$Data_Tuple_Tuple) {
  $__body = function($v1) use ($pure, &$Data_Tuple_Tuple) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$w = ($__case_0)->values[1];
return ($pure)(($Data_Tuple_Tuple)(($Data_Tuple_Tuple)($a, $w), $w));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use ($pure, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
})()));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Monad_Writer_Trans_WriterT, $bind, $pure, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
})(), "pass" => (function() use (&$Control_Monad_Writer_Trans_WriterT, $bind, $pure, &$Data_Tuple_Tuple) {
  $__body = function($v) use (&$Control_Monad_Writer_Trans_WriterT, $bind, $pure, &$Data_Tuple_Tuple) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($Control_Monad_Writer_Trans_WriterT)(($bind)($m, (function() use ($pure, &$Data_Tuple_Tuple) {
  $__body = function($v1) use ($pure, &$Data_Tuple_Tuple) {
    $__case_0 = $v1;
    if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$a = (($__case_0)->values[0])->values[0];
$f = (($__case_0)->values[0])->values[1];
$w = ($__case_0)->values[1];
return ($pure)(($Data_Tuple_Tuple)($a, ($f)($w)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use ($pure, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
})()));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Monad_Writer_Trans_WriterT, $bind, $pure, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
})(), "Monoid0" => (function() use ($dictMonoid) {
  $__fn = function($__dollar____unused) use ($dictMonoid, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $dictMonoid;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "MonadTell1" => (function() use ($monadTellWriterT2) {
  $__fn = function($__dollar____unused) use ($monadTellWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadTellWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Control_Monad_Writer_Trans_monadThrowWriterT
$Control_Monad_Writer_Trans_monadThrowWriterT = (function() use (&$Control_Monad_Trans_Class_lift, &$Control_Monad_Writer_Trans_monadTransWriterT, &$Control_Monad_Writer_Trans_monadWriterT, &$Prim_undefined, &$Control_Monad_Error_Class_throwError, &$Control_Monad_Error_Class_MonadThrow__dollar__Dict) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Trans_Class_lift, &$Control_Monad_Writer_Trans_monadTransWriterT, &$Control_Monad_Writer_Trans_monadWriterT, &$Prim_undefined, &$Control_Monad_Error_Class_throwError, &$Control_Monad_Error_Class_MonadThrow__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift = ($Control_Monad_Trans_Class_lift)(($Control_Monad_Writer_Trans_monadTransWriterT)($dictMonoid));
$monadWriterT1 = ($Control_Monad_Writer_Trans_monadWriterT)($dictMonoid);
    $__res = (function() use (&$Prim_undefined, $lift, &$Control_Monad_Error_Class_throwError, $monadWriterT1, &$Control_Monad_Error_Class_MonadThrow__dollar__Dict) {
  $__fn = function($dictMonadThrow) use (&$Prim_undefined, $lift, &$Control_Monad_Error_Class_throwError, $monadWriterT1, &$Control_Monad_Error_Class_MonadThrow__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadThrow)->Monad0)($Prim_undefined);
$lift1 = ($lift)($Monad0);
$throwError = ($Control_Monad_Error_Class_throwError)($dictMonadThrow);
$monadWriterT2 = ($monadWriterT1)($Monad0);
    $__res = ($Control_Monad_Error_Class_MonadThrow__dollar__Dict)((object)["throwError" => (function() use ($lift1, $throwError) {
  $__fn = function($e) use ($lift1, $throwError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($lift1)(($throwError)($e));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Control_Monad_Writer_Trans_monadErrorWriterT
$Control_Monad_Writer_Trans_monadErrorWriterT = (function() use (&$Control_Monad_Writer_Trans_monadThrowWriterT, &$Control_Monad_Error_Class_catchError, &$Prim_undefined, &$Control_Monad_Error_Class_MonadError__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Writer_Trans_monadThrowWriterT, &$Control_Monad_Error_Class_catchError, &$Prim_undefined, &$Control_Monad_Error_Class_MonadError__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadThrowWriterT1 = ($Control_Monad_Writer_Trans_monadThrowWriterT)($dictMonoid);
    $__res = (function() use (&$Control_Monad_Error_Class_catchError, $monadThrowWriterT1, &$Prim_undefined, &$Control_Monad_Error_Class_MonadError__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT) {
  $__fn = function($dictMonadError) use (&$Control_Monad_Error_Class_catchError, $monadThrowWriterT1, &$Prim_undefined, &$Control_Monad_Error_Class_MonadError__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$catchError = ($Control_Monad_Error_Class_catchError)($dictMonadError);
$monadThrowWriterT2 = ($monadThrowWriterT1)((($dictMonadError)->MonadThrow0)($Prim_undefined));
    $__res = ($Control_Monad_Error_Class_MonadError__dollar__Dict)((object)["catchError" => (function() use (&$Control_Monad_Writer_Trans_WriterT, $catchError) {
  $__body = function($v, $h) use (&$Control_Monad_Writer_Trans_WriterT, $catchError) {
    $__case_0 = $v;
    $__case_1 = $h;
    if (true) {
$m = $__case_0;
$h1 = $__case_1;
return ($Control_Monad_Writer_Trans_WriterT)(($catchError)($m, (function() use ($h1) {
  $__body = function($e) use ($h1) {
    $v1 = ($h1)($e);
    $__case_0 = $v1;
    if (true) {
$a = $__case_0;
return $a;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($e) use ($h1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($e);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($e);
  };
  return $__fn;
})()));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $h = null) use (&$Control_Monad_Writer_Trans_WriterT, $catchError, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $h);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $h);
  };
  return $__fn;
})(), "MonadThrow0" => (function() use ($monadThrowWriterT2) {
  $__fn = function($__dollar____unused) use ($monadThrowWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadThrowWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Control_Monad_Writer_Trans_monadSTWriterT
$Control_Monad_Writer_Trans_monadSTWriterT = (function() use (&$Control_Monad_Trans_Class_lift, &$Control_Monad_Writer_Trans_monadTransWriterT, &$Control_Monad_Writer_Trans_monadWriterT, &$Prim_undefined, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_Writer_Trans_compose, &$Control_Monad_ST_Class_liftST) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Trans_Class_lift, &$Control_Monad_Writer_Trans_monadTransWriterT, &$Control_Monad_Writer_Trans_monadWriterT, &$Prim_undefined, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_Writer_Trans_compose, &$Control_Monad_ST_Class_liftST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift = ($Control_Monad_Trans_Class_lift)(($Control_Monad_Writer_Trans_monadTransWriterT)($dictMonoid));
$monadWriterT1 = ($Control_Monad_Writer_Trans_monadWriterT)($dictMonoid);
    $__res = (function() use (&$Prim_undefined, $monadWriterT1, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_Writer_Trans_compose, $lift, &$Control_Monad_ST_Class_liftST) {
  $__fn = function($dictMonadST) use (&$Prim_undefined, $monadWriterT1, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_Writer_Trans_compose, $lift, &$Control_Monad_ST_Class_liftST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadST)->Monad0)($Prim_undefined);
$monadWriterT2 = ($monadWriterT1)($Monad0);
    $__res = ($Control_Monad_ST_Class_MonadST__dollar__Dict)((object)["liftST" => ($Control_Monad_Writer_Trans_compose)(($lift)($Monad0), ($Control_Monad_ST_Class_liftST)($dictMonadST)), "Monad0" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Control_Monad_Writer_Trans_monoidWriterT
$Control_Monad_Writer_Trans_monoidWriterT = (function() use (&$Control_Monad_Writer_Trans_semigroupWriterT, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_Writer_Trans_applicativeWriterT, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty) {
  $__fn = function($dictApplicative) use (&$Control_Monad_Writer_Trans_semigroupWriterT, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_Writer_Trans_applicativeWriterT, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupWriterT1 = ($Control_Monad_Writer_Trans_semigroupWriterT)((($dictApplicative)->Apply0)($Prim_undefined));
    $__res = (function() use (&$Control_Applicative_pure, &$Control_Monad_Writer_Trans_applicativeWriterT, $dictApplicative, $semigroupWriterT1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use (&$Control_Applicative_pure, &$Control_Monad_Writer_Trans_applicativeWriterT, $dictApplicative, $semigroupWriterT1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)(($Control_Monad_Writer_Trans_applicativeWriterT)($dictMonoid, $dictApplicative));
$semigroupWriterT2 = ($semigroupWriterT1)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = (function() use ($semigroupWriterT2, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, $pure, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid1) use ($semigroupWriterT2, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, $pure, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupWriterT3 = ($semigroupWriterT2)((($dictMonoid1)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($pure)(($Data_Monoid_mempty)($dictMonoid1)), "Semigroup0" => (function() use ($semigroupWriterT3) {
  $__fn = function($__dollar____unused) use ($semigroupWriterT3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupWriterT3;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Writer_Trans_altWriterT
$Control_Monad_Writer_Trans_altWriterT = (function() use (&$Control_Alt_alt, &$Control_Monad_Writer_Trans_functorWriterT, &$Prim_undefined, &$Control_Alt_Alt__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT) {
  $__fn = function($dictAlt) use (&$Control_Alt_alt, &$Control_Monad_Writer_Trans_functorWriterT, &$Prim_undefined, &$Control_Alt_Alt__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$alt = ($Control_Alt_alt)($dictAlt);
$functorWriterT1 = ($Control_Monad_Writer_Trans_functorWriterT)((($dictAlt)->Functor0)($Prim_undefined));
    $__res = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => (function() use (&$Control_Monad_Writer_Trans_WriterT, $alt) {
  $__body = function($v, $v1) use (&$Control_Monad_Writer_Trans_WriterT, $alt) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m = $__case_0;
$n = $__case_1;
return ($Control_Monad_Writer_Trans_WriterT)(($alt)($m, $n));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Control_Monad_Writer_Trans_WriterT, $alt, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorWriterT1) {
  $__fn = function($__dollar____unused) use ($functorWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorWriterT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Writer_Trans_plusWriterT
$Control_Monad_Writer_Trans_plusWriterT = (function() use (&$Control_Monad_Writer_Trans_altWriterT, &$Prim_undefined, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Control_Plus_empty) {
  $__fn = function($dictPlus) use (&$Control_Monad_Writer_Trans_altWriterT, &$Prim_undefined, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_Writer_Trans_WriterT, &$Control_Plus_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$altWriterT1 = ($Control_Monad_Writer_Trans_altWriterT)((($dictPlus)->Alt0)($Prim_undefined));
    $__res = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => ($Control_Monad_Writer_Trans_WriterT)(($Control_Plus_empty)($dictPlus)), "Alt0" => (function() use ($altWriterT1) {
  $__fn = function($__dollar____unused) use ($altWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $altWriterT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Writer_Trans_alternativeWriterT
$Control_Monad_Writer_Trans_alternativeWriterT = (function() use (&$Control_Monad_Writer_Trans_applicativeWriterT, &$Prim_undefined, &$Control_Monad_Writer_Trans_plusWriterT, &$Control_Alternative_Alternative__dollar__Dict) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Writer_Trans_applicativeWriterT, &$Prim_undefined, &$Control_Monad_Writer_Trans_plusWriterT, &$Control_Alternative_Alternative__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeWriterT1 = ($Control_Monad_Writer_Trans_applicativeWriterT)($dictMonoid);
    $__res = (function() use ($applicativeWriterT1, &$Prim_undefined, &$Control_Monad_Writer_Trans_plusWriterT, &$Control_Alternative_Alternative__dollar__Dict) {
  $__fn = function($dictAlternative) use ($applicativeWriterT1, &$Prim_undefined, &$Control_Monad_Writer_Trans_plusWriterT, &$Control_Alternative_Alternative__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeWriterT2 = ($applicativeWriterT1)((($dictAlternative)->Applicative0)($Prim_undefined));
$plusWriterT1 = ($Control_Monad_Writer_Trans_plusWriterT)((($dictAlternative)->Plus1)($Prim_undefined));
    $__res = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeWriterT2) {
  $__fn = function($__dollar____unused) use ($applicativeWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusWriterT1) {
  $__fn = function($__dollar____unused) use ($plusWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $plusWriterT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Control_Monad_Writer_Trans_monadPlusWriterT
$Control_Monad_Writer_Trans_monadPlusWriterT = (function() use (&$Control_Monad_Writer_Trans_monadWriterT, &$Control_Monad_Writer_Trans_alternativeWriterT, &$Prim_undefined, &$Control_MonadPlus_MonadPlus__dollar__Dict) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Writer_Trans_monadWriterT, &$Control_Monad_Writer_Trans_alternativeWriterT, &$Prim_undefined, &$Control_MonadPlus_MonadPlus__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadWriterT1 = ($Control_Monad_Writer_Trans_monadWriterT)($dictMonoid);
$alternativeWriterT1 = ($Control_Monad_Writer_Trans_alternativeWriterT)($dictMonoid);
    $__res = (function() use ($monadWriterT1, &$Prim_undefined, $alternativeWriterT1, &$Control_MonadPlus_MonadPlus__dollar__Dict) {
  $__fn = function($dictMonadPlus) use ($monadWriterT1, &$Prim_undefined, $alternativeWriterT1, &$Control_MonadPlus_MonadPlus__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadWriterT2 = ($monadWriterT1)((($dictMonadPlus)->Monad0)($Prim_undefined));
$alternativeWriterT2 = ($alternativeWriterT1)((($dictMonadPlus)->Alternative1)($Prim_undefined));
    $__res = ($Control_MonadPlus_MonadPlus__dollar__Dict)((object)["Monad0" => (function() use ($monadWriterT2) {
  $__fn = function($__dollar____unused) use ($monadWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use ($alternativeWriterT2) {
  $__fn = function($__dollar____unused) use ($alternativeWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $alternativeWriterT2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

