<?php

namespace Control\Monad\Reader\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Distributive/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_Reader_Trans_compose
$Control_Monad_Reader_Trans_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_Reader_Trans_ReaderT
$Control_Monad_Reader_Trans_ReaderT = (function() {
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

// Control_Monad_Reader_Trans_withReaderT
$Control_Monad_Reader_Trans_withReaderT = (function() use (&$Control_Monad_Reader_Trans_ReaderT, &$Control_Monad_Reader_Trans_compose) {
  $__body = function($f, $v) use (&$Control_Monad_Reader_Trans_ReaderT, &$Control_Monad_Reader_Trans_compose) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return ($Control_Monad_Reader_Trans_ReaderT)(($Control_Monad_Reader_Trans_compose)($m, $f1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Monad_Reader_Trans_ReaderT, &$Control_Monad_Reader_Trans_compose, $__body, &$__fn) {
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

// Control_Monad_Reader_Trans_runReaderT
$Control_Monad_Reader_Trans_runReaderT = (function() {
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

// Control_Monad_Reader_Trans_newtypeReaderT
$Control_Monad_Reader_Trans_newtypeReaderT = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Control_Monad_Reader_Trans_monadTransReaderT
$Control_Monad_Reader_Trans_monadTransReaderT = ($Control_Monad_Trans_Class_MonadTrans__dollar__Dict)((object)["lift" => (function() use (&$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_ReaderT, &$Data_Function_const) {
  $__fn = function($dictMonad) use (&$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_ReaderT, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Reader_Trans_compose)($Control_Monad_Reader_Trans_ReaderT, $Data_Function_const);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Reader_Trans_lift
$Control_Monad_Reader_Trans_lift = ($Control_Monad_Trans_Class_lift)($Control_Monad_Reader_Trans_monadTransReaderT);

// Control_Monad_Reader_Trans_mapReaderT
$Control_Monad_Reader_Trans_mapReaderT = (function() use (&$Control_Monad_Reader_Trans_ReaderT, &$Control_Monad_Reader_Trans_compose) {
  $__body = function($f, $v) use (&$Control_Monad_Reader_Trans_ReaderT, &$Control_Monad_Reader_Trans_compose) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return ($Control_Monad_Reader_Trans_ReaderT)(($Control_Monad_Reader_Trans_compose)($f1, $m));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Monad_Reader_Trans_ReaderT, &$Control_Monad_Reader_Trans_compose, $__body, &$__fn) {
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

// Control_Monad_Reader_Trans_functorReaderT
$Control_Monad_Reader_Trans_functorReaderT = (function() use (&$Data_Functor_Functor__dollar__Dict, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_mapReaderT, &$Data_Functor_map) {
  $__fn = function($dictFunctor) use (&$Data_Functor_Functor__dollar__Dict, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_mapReaderT, &$Data_Functor_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => ($Control_Monad_Reader_Trans_compose)($Control_Monad_Reader_Trans_mapReaderT, ($Data_Functor_map)($dictFunctor))]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_distributiveReaderT
$Control_Monad_Reader_Trans_distributiveReaderT = (function() use (&$Data_Distributive_collect, &$Control_Monad_Reader_Trans_functorReaderT, &$Prim_undefined, &$Data_Distributive_Distributive__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT, &$Data_Functor_map, &$Control_Monad_Reader_Trans_compose, &$Data_Distributive_distribute, &$Control_Monad_Reader_Trans_distributiveReaderT) {
  $__fn = function($dictDistributive) use (&$Data_Distributive_collect, &$Control_Monad_Reader_Trans_functorReaderT, &$Prim_undefined, &$Data_Distributive_Distributive__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT, &$Data_Functor_map, &$Control_Monad_Reader_Trans_compose, &$Data_Distributive_distribute, &$Control_Monad_Reader_Trans_distributiveReaderT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictDistributive) use (&$Data_Distributive_collect, &$Control_Monad_Reader_Trans_functorReaderT, &$Prim_undefined, &$Data_Distributive_Distributive__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT, &$Data_Functor_map, &$Control_Monad_Reader_Trans_compose, &$Data_Distributive_distribute, &$Control_Monad_Reader_Trans_distributiveReaderT) {
while (true) {
$collect = ($Data_Distributive_collect)($dictDistributive);
$functorReaderT1 = ($Control_Monad_Reader_Trans_functorReaderT)((($dictDistributive)->Functor0)($Prim_undefined));
return ($Data_Distributive_Distributive__dollar__Dict)((object)["distribute" => (function() use ($collect, &$Control_Monad_Reader_Trans_ReaderT) {
  $__fn = function($dictFunctor) use ($collect, &$Control_Monad_Reader_Trans_ReaderT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$collect1 = ($collect)($dictFunctor);
    $__res = (function() use (&$Control_Monad_Reader_Trans_ReaderT, $collect1) {
  $__fn = function($a) use (&$Control_Monad_Reader_Trans_ReaderT, $collect1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Reader_Trans_ReaderT)((function() use ($collect1, $a) {
  $__fn = function($e) use ($collect1, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($collect1)((function() use ($e) {
  $__body = function($r) use ($e) {
    $__case_0 = $r;
    if (true) {
$r__prime__ = $__case_0;
return ($r__prime__)($e);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($r) use ($e, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($r);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($r);
  };
  return $__fn;
})(), $a);
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "collect" => (function() use (&$Data_Functor_map, &$Control_Monad_Reader_Trans_compose, &$Data_Distributive_distribute, &$Control_Monad_Reader_Trans_distributiveReaderT, $dictDistributive) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Control_Monad_Reader_Trans_compose, &$Data_Distributive_distribute, &$Control_Monad_Reader_Trans_distributiveReaderT, $dictDistributive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Control_Monad_Reader_Trans_compose, &$Data_Distributive_distribute, &$Control_Monad_Reader_Trans_distributiveReaderT, $dictDistributive, $dictFunctor, $map) {
  $__fn = function($f) use (&$Control_Monad_Reader_Trans_compose, &$Data_Distributive_distribute, &$Control_Monad_Reader_Trans_distributiveReaderT, $dictDistributive, $dictFunctor, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Reader_Trans_compose)(($Data_Distributive_distribute)(($Control_Monad_Reader_Trans_distributiveReaderT)($dictDistributive), $dictFunctor), ($map)($f));
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
})(), "Functor0" => (function() use ($functorReaderT1) {
  $__fn = function($__dollar____unused) use ($functorReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorReaderT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
}
})($dictDistributive);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Reader_Trans_applyReaderT
$Control_Monad_Reader_Trans_applyReaderT = (function() use (&$Control_Apply_apply, &$Control_Monad_Reader_Trans_functorReaderT, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT) {
  $__fn = function($dictApply) use (&$Control_Apply_apply, &$Control_Monad_Reader_Trans_functorReaderT, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$apply = ($Control_Apply_apply)($dictApply);
$functorReaderT1 = ($Control_Monad_Reader_Trans_functorReaderT)((($dictApply)->Functor0)($Prim_undefined));
    $__res = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Control_Monad_Reader_Trans_ReaderT, $apply) {
  $__body = function($v, $v1) use (&$Control_Monad_Reader_Trans_ReaderT, $apply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$v2 = $__case_1;
return ($Control_Monad_Reader_Trans_ReaderT)((function() use ($apply, $f, $v2) {
  $__fn = function($r) use ($apply, $f, $v2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($apply)(($f)($r), ($v2)($r));
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
  $__fn = function($v, $v1 = null) use (&$Control_Monad_Reader_Trans_ReaderT, $apply, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorReaderT1) {
  $__fn = function($__dollar____unused) use ($functorReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorReaderT1;
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

// Control_Monad_Reader_Trans_bindReaderT
$Control_Monad_Reader_Trans_bindReaderT = (function() use (&$Control_Bind_bind, &$Control_Monad_Reader_Trans_applyReaderT, &$Prim_undefined, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT) {
  $__fn = function($dictBind) use (&$Control_Bind_bind, &$Control_Monad_Reader_Trans_applyReaderT, &$Prim_undefined, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)($dictBind);
$applyReaderT1 = ($Control_Monad_Reader_Trans_applyReaderT)((($dictBind)->Apply0)($Prim_undefined));
    $__res = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Control_Monad_Reader_Trans_ReaderT, $bind) {
  $__body = function($v, $k) use (&$Control_Monad_Reader_Trans_ReaderT, $bind) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($Control_Monad_Reader_Trans_ReaderT)((function() use ($bind, $m, $k1) {
  $__fn = function($r) use ($bind, $m, $k1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($m)($r), (function() use ($k1, $r) {
  $__body = function($a) use ($k1, $r) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$f = $__case_0;
return ($f)($r);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a) use ($k1, $r, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($a);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($a);
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
  $__fn = function($v, $k = null) use (&$Control_Monad_Reader_Trans_ReaderT, $bind, $__body, &$__fn) {
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
})(), "Apply0" => (function() use ($applyReaderT1) {
  $__fn = function($__dollar____unused) use ($applyReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyReaderT1;
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

// Control_Monad_Reader_Trans_semigroupReaderT
$Control_Monad_Reader_Trans_semigroupReaderT = (function() use (&$Control_Apply_lift2, &$Control_Monad_Reader_Trans_applyReaderT, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append) {
  $__fn = function($dictApply) use (&$Control_Apply_lift2, &$Control_Monad_Reader_Trans_applyReaderT, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift2 = ($Control_Apply_lift2)(($Control_Monad_Reader_Trans_applyReaderT)($dictApply));
    $__res = (function() use (&$Data_Semigroup_Semigroup__dollar__Dict, $lift2, &$Data_Semigroup_append) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_Semigroup__dollar__Dict, $lift2, &$Data_Semigroup_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => ($lift2)(($Data_Semigroup_append)($dictSemigroup))]);
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

// Control_Monad_Reader_Trans_applicativeReaderT
$Control_Monad_Reader_Trans_applicativeReaderT = (function() use (&$Control_Monad_Reader_Trans_applyReaderT, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_ReaderT, &$Data_Function_const, &$Control_Applicative_pure) {
  $__fn = function($dictApplicative) use (&$Control_Monad_Reader_Trans_applyReaderT, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_ReaderT, &$Data_Function_const, &$Control_Applicative_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applyReaderT1 = ($Control_Monad_Reader_Trans_applyReaderT)((($dictApplicative)->Apply0)($Prim_undefined));
    $__res = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => ($Control_Monad_Reader_Trans_compose)($Control_Monad_Reader_Trans_ReaderT, ($Control_Monad_Reader_Trans_compose)($Data_Function_const, ($Control_Applicative_pure)($dictApplicative))), "Apply0" => (function() use ($applyReaderT1) {
  $__fn = function($__dollar____unused) use ($applyReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyReaderT1;
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

// Control_Monad_Reader_Trans_monadReaderT
$Control_Monad_Reader_Trans_monadReaderT = (function() use (&$Control_Monad_Reader_Trans_applicativeReaderT, &$Prim_undefined, &$Control_Monad_Reader_Trans_bindReaderT, &$Control_Monad_Monad__dollar__Dict) {
  $__fn = function($dictMonad) use (&$Control_Monad_Reader_Trans_applicativeReaderT, &$Prim_undefined, &$Control_Monad_Reader_Trans_bindReaderT, &$Control_Monad_Monad__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeReaderT1 = ($Control_Monad_Reader_Trans_applicativeReaderT)((($dictMonad)->Applicative0)($Prim_undefined));
$bindReaderT1 = ($Control_Monad_Reader_Trans_bindReaderT)((($dictMonad)->Bind1)($Prim_undefined));
    $__res = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeReaderT1) {
  $__fn = function($__dollar____unused) use ($applicativeReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeReaderT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindReaderT1) {
  $__fn = function($__dollar____unused) use ($bindReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bindReaderT1;
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

// Control_Monad_Reader_Trans_monadAskReaderT
$Control_Monad_Reader_Trans_monadAskReaderT = (function() use (&$Control_Monad_Reader_Trans_monadReaderT, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT, &$Control_Applicative_pure, &$Prim_undefined) {
  $__fn = function($dictMonad) use (&$Control_Monad_Reader_Trans_monadReaderT, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT, &$Control_Applicative_pure, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadReaderT1 = ($Control_Monad_Reader_Trans_monadReaderT)($dictMonad);
    $__res = ($Control_Monad_Reader_Class_MonadAsk__dollar__Dict)((object)["ask" => ($Control_Monad_Reader_Trans_ReaderT)(($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined))), "Monad0" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadReaderT1;
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

// Control_Monad_Reader_Trans_monadReaderReaderT
$Control_Monad_Reader_Trans_monadReaderReaderT = (function() use (&$Control_Monad_Reader_Trans_monadAskReaderT, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_Reader_Trans_withReaderT) {
  $__fn = function($dictMonad) use (&$Control_Monad_Reader_Trans_monadAskReaderT, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_Reader_Trans_withReaderT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadAskReaderT1 = ($Control_Monad_Reader_Trans_monadAskReaderT)($dictMonad);
    $__res = ($Control_Monad_Reader_Class_MonadReader__dollar__Dict)((object)["local" => $Control_Monad_Reader_Trans_withReaderT, "MonadAsk0" => (function() use ($monadAskReaderT1) {
  $__fn = function($__dollar____unused) use ($monadAskReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadAskReaderT1;
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

// Control_Monad_Reader_Trans_monadContReaderT
$Control_Monad_Reader_Trans_monadContReaderT = (function() use (&$Control_Monad_Cont_Class_callCC, &$Control_Monad_Reader_Trans_monadReaderT, &$Prim_undefined, &$Control_Monad_Cont_Class_MonadCont__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT, &$Control_Monad_Reader_Trans_compose, &$Data_Function_const) {
  $__fn = function($dictMonadCont) use (&$Control_Monad_Cont_Class_callCC, &$Control_Monad_Reader_Trans_monadReaderT, &$Prim_undefined, &$Control_Monad_Cont_Class_MonadCont__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT, &$Control_Monad_Reader_Trans_compose, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$callCC = ($Control_Monad_Cont_Class_callCC)($dictMonadCont);
$monadReaderT1 = ($Control_Monad_Reader_Trans_monadReaderT)((($dictMonadCont)->Monad0)($Prim_undefined));
    $__res = ($Control_Monad_Cont_Class_MonadCont__dollar__Dict)((object)["callCC" => (function() use (&$Control_Monad_Reader_Trans_ReaderT, $callCC, &$Control_Monad_Reader_Trans_compose, &$Data_Function_const) {
  $__fn = function($f) use (&$Control_Monad_Reader_Trans_ReaderT, $callCC, &$Control_Monad_Reader_Trans_compose, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Reader_Trans_ReaderT)((function() use ($callCC, $f, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_ReaderT, &$Data_Function_const) {
  $__fn = function($r) use ($callCC, $f, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_ReaderT, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($callCC)((function() use ($f, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_ReaderT, &$Data_Function_const, $r) {
  $__body = function($c) use ($f, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_ReaderT, &$Data_Function_const, $r) {
    $v = ($f)(($Control_Monad_Reader_Trans_compose)($Control_Monad_Reader_Trans_ReaderT, ($Control_Monad_Reader_Trans_compose)($Data_Function_const, $c)));
    $__case_0 = $v;
    if (true) {
$f__prime__ = $__case_0;
return ($f__prime__)($r);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($c) use ($f, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_ReaderT, &$Data_Function_const, $r, $__body, &$__fn) {
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
})());
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
})(), "Monad0" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadReaderT1;
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

// Control_Monad_Reader_Trans_monadEffectReader
$Control_Monad_Reader_Trans_monadEffectReader = (function() use (&$Prim_undefined, &$Control_Monad_Reader_Trans_monadReaderT, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_lift, &$Effect_Class_liftEffect) {
  $__fn = function($dictMonadEffect) use (&$Prim_undefined, &$Control_Monad_Reader_Trans_monadReaderT, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_lift, &$Effect_Class_liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadEffect)->Monad0)($Prim_undefined);
$monadReaderT1 = ($Control_Monad_Reader_Trans_monadReaderT)($Monad0);
    $__res = ($Effect_Class_MonadEffect__dollar__Dict)((object)["liftEffect" => ($Control_Monad_Reader_Trans_compose)(($Control_Monad_Reader_Trans_lift)($Monad0), ($Effect_Class_liftEffect)($dictMonadEffect)), "Monad0" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadReaderT1;
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

// Control_Monad_Reader_Trans_monadRecReaderT
$Control_Monad_Reader_Trans_monadRecReaderT = (function() use (&$Prim_undefined, &$Control_Bind_bindFlipped, &$Control_Applicative_pure, &$Control_Monad_Rec_Class_tailRecM, &$Control_Monad_Reader_Trans_monadReaderT, &$Control_Monad_Rec_Class_MonadRec__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT) {
  $__fn = function($dictMonadRec) use (&$Prim_undefined, &$Control_Bind_bindFlipped, &$Control_Applicative_pure, &$Control_Monad_Rec_Class_tailRecM, &$Control_Monad_Reader_Trans_monadReaderT, &$Control_Monad_Rec_Class_MonadRec__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadRec)->Monad0)($Prim_undefined);
$bindFlipped = ($Control_Bind_bindFlipped)((($Monad0)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($Monad0)->Applicative0)($Prim_undefined));
$tailRecM = ($Control_Monad_Rec_Class_tailRecM)($dictMonadRec);
$monadReaderT1 = ($Control_Monad_Reader_Trans_monadReaderT)($Monad0);
    $__res = ($Control_Monad_Rec_Class_MonadRec__dollar__Dict)((object)["tailRecM" => (function() use ($bindFlipped, $pure, &$Control_Monad_Reader_Trans_ReaderT, $tailRecM) {
  $__fn = function($k, $a = null) use ($bindFlipped, $pure, &$Control_Monad_Reader_Trans_ReaderT, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$k__prime__ = (function() use ($k, $bindFlipped, $pure) {
  $__body = function($r, $a__prime__) use ($k, $bindFlipped, $pure) {
    $v = ($k)($a__prime__);
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($bindFlipped)($pure, ($f)($r));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($r, $a__prime__ = null) use ($k, $bindFlipped, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($r, $a__prime__);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($r, $a__prime__);
  };
  return $__fn;
})();
    $__res = ($Control_Monad_Reader_Trans_ReaderT)((function() use ($tailRecM, $k__prime__, $a) {
  $__fn = function($r) use ($tailRecM, $k__prime__, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($tailRecM)(($k__prime__)($r), $a);
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
})(), "Monad0" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadReaderT1;
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

// Control_Monad_Reader_Trans_monadStateReaderT
$Control_Monad_Reader_Trans_monadStateReaderT = (function() use (&$Prim_undefined, &$Control_Monad_Reader_Trans_monadReaderT, &$Control_Monad_State_Class_MonadState__dollar__Dict, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_lift, &$Control_Monad_State_Class_state) {
  $__fn = function($dictMonadState) use (&$Prim_undefined, &$Control_Monad_Reader_Trans_monadReaderT, &$Control_Monad_State_Class_MonadState__dollar__Dict, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_lift, &$Control_Monad_State_Class_state, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadState)->Monad0)($Prim_undefined);
$monadReaderT1 = ($Control_Monad_Reader_Trans_monadReaderT)($Monad0);
    $__res = ($Control_Monad_State_Class_MonadState__dollar__Dict)((object)["state" => ($Control_Monad_Reader_Trans_compose)(($Control_Monad_Reader_Trans_lift)($Monad0), ($Control_Monad_State_Class_state)($dictMonadState)), "Monad0" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadReaderT1;
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

// Control_Monad_Reader_Trans_monadTellReaderT
$Control_Monad_Reader_Trans_monadTellReaderT = (function() use (&$Prim_undefined, &$Control_Monad_Reader_Trans_monadReaderT, &$Control_Monad_Writer_Class_MonadTell__dollar__Dict, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_lift, &$Control_Monad_Writer_Class_tell) {
  $__fn = function($dictMonadTell) use (&$Prim_undefined, &$Control_Monad_Reader_Trans_monadReaderT, &$Control_Monad_Writer_Class_MonadTell__dollar__Dict, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_lift, &$Control_Monad_Writer_Class_tell, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad1 = (($dictMonadTell)->Monad1)($Prim_undefined);
$Semigroup0 = (($dictMonadTell)->Semigroup0)($Prim_undefined);
$monadReaderT1 = ($Control_Monad_Reader_Trans_monadReaderT)($Monad1);
    $__res = ($Control_Monad_Writer_Class_MonadTell__dollar__Dict)((object)["tell" => ($Control_Monad_Reader_Trans_compose)(($Control_Monad_Reader_Trans_lift)($Monad1), ($Control_Monad_Writer_Class_tell)($dictMonadTell)), "Semigroup0" => (function() use (&$Semigroup0) {
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
})(), "Monad1" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadReaderT1;
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

// Control_Monad_Reader_Trans_monadWriterReaderT
$Control_Monad_Reader_Trans_monadWriterReaderT = (function() use (&$Prim_undefined, &$Control_Monad_Reader_Trans_monadTellReaderT, &$Control_Monad_Writer_Class_MonadWriter__dollar__Dict, &$Control_Monad_Reader_Trans_mapReaderT, &$Control_Monad_Writer_Class_listen, &$Control_Monad_Writer_Class_pass) {
  $__fn = function($dictMonadWriter) use (&$Prim_undefined, &$Control_Monad_Reader_Trans_monadTellReaderT, &$Control_Monad_Writer_Class_MonadWriter__dollar__Dict, &$Control_Monad_Reader_Trans_mapReaderT, &$Control_Monad_Writer_Class_listen, &$Control_Monad_Writer_Class_pass, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monoid0 = (($dictMonadWriter)->Monoid0)($Prim_undefined);
$monadTellReaderT1 = ($Control_Monad_Reader_Trans_monadTellReaderT)((($dictMonadWriter)->MonadTell1)($Prim_undefined));
    $__res = ($Control_Monad_Writer_Class_MonadWriter__dollar__Dict)((object)["listen" => ($Control_Monad_Reader_Trans_mapReaderT)(($Control_Monad_Writer_Class_listen)($dictMonadWriter)), "pass" => ($Control_Monad_Reader_Trans_mapReaderT)(($Control_Monad_Writer_Class_pass)($dictMonadWriter)), "Monoid0" => (function() use (&$Monoid0) {
  $__fn = function($__dollar____unused) use (&$Monoid0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Monoid0;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "MonadTell1" => (function() use ($monadTellReaderT1) {
  $__fn = function($__dollar____unused) use ($monadTellReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadTellReaderT1;
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

// Control_Monad_Reader_Trans_monadThrowReaderT
$Control_Monad_Reader_Trans_monadThrowReaderT = (function() use (&$Prim_undefined, &$Control_Monad_Reader_Trans_monadReaderT, &$Control_Monad_Error_Class_MonadThrow__dollar__Dict, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_lift, &$Control_Monad_Error_Class_throwError) {
  $__fn = function($dictMonadThrow) use (&$Prim_undefined, &$Control_Monad_Reader_Trans_monadReaderT, &$Control_Monad_Error_Class_MonadThrow__dollar__Dict, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_lift, &$Control_Monad_Error_Class_throwError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadThrow)->Monad0)($Prim_undefined);
$monadReaderT1 = ($Control_Monad_Reader_Trans_monadReaderT)($Monad0);
    $__res = ($Control_Monad_Error_Class_MonadThrow__dollar__Dict)((object)["throwError" => ($Control_Monad_Reader_Trans_compose)(($Control_Monad_Reader_Trans_lift)($Monad0), ($Control_Monad_Error_Class_throwError)($dictMonadThrow)), "Monad0" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadReaderT1;
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

// Control_Monad_Reader_Trans_monadErrorReaderT
$Control_Monad_Reader_Trans_monadErrorReaderT = (function() use (&$Control_Monad_Error_Class_catchError, &$Control_Monad_Reader_Trans_monadThrowReaderT, &$Prim_undefined, &$Control_Monad_Error_Class_MonadError__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT) {
  $__fn = function($dictMonadError) use (&$Control_Monad_Error_Class_catchError, &$Control_Monad_Reader_Trans_monadThrowReaderT, &$Prim_undefined, &$Control_Monad_Error_Class_MonadError__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$catchError = ($Control_Monad_Error_Class_catchError)($dictMonadError);
$monadThrowReaderT1 = ($Control_Monad_Reader_Trans_monadThrowReaderT)((($dictMonadError)->MonadThrow0)($Prim_undefined));
    $__res = ($Control_Monad_Error_Class_MonadError__dollar__Dict)((object)["catchError" => (function() use (&$Control_Monad_Reader_Trans_ReaderT, $catchError) {
  $__body = function($v, $h) use (&$Control_Monad_Reader_Trans_ReaderT, $catchError) {
    $__case_0 = $v;
    $__case_1 = $h;
    if (true) {
$m = $__case_0;
$h1 = $__case_1;
return ($Control_Monad_Reader_Trans_ReaderT)((function() use ($catchError, $m, $h1) {
  $__fn = function($r) use ($catchError, $m, $h1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($catchError)(($m)($r), (function() use ($h1, $r) {
  $__body = function($e) use ($h1, $r) {
    $v1 = ($h1)($e);
    $__case_0 = $v1;
    if (true) {
$f = $__case_0;
return ($f)($r);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($e) use ($h1, $r, $__body, &$__fn) {
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
  $__fn = function($v, $h = null) use (&$Control_Monad_Reader_Trans_ReaderT, $catchError, $__body, &$__fn) {
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
})(), "MonadThrow0" => (function() use ($monadThrowReaderT1) {
  $__fn = function($__dollar____unused) use ($monadThrowReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadThrowReaderT1;
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

// Control_Monad_Reader_Trans_monadSTReaderT
$Control_Monad_Reader_Trans_monadSTReaderT = (function() use (&$Prim_undefined, &$Control_Monad_Reader_Trans_monadReaderT, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_lift, &$Control_Monad_ST_Class_liftST) {
  $__fn = function($dictMonadST) use (&$Prim_undefined, &$Control_Monad_Reader_Trans_monadReaderT, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_Reader_Trans_compose, &$Control_Monad_Reader_Trans_lift, &$Control_Monad_ST_Class_liftST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadST)->Monad0)($Prim_undefined);
$monadReaderT1 = ($Control_Monad_Reader_Trans_monadReaderT)($Monad0);
    $__res = ($Control_Monad_ST_Class_MonadST__dollar__Dict)((object)["liftST" => ($Control_Monad_Reader_Trans_compose)(($Control_Monad_Reader_Trans_lift)($Monad0), ($Control_Monad_ST_Class_liftST)($dictMonadST)), "Monad0" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadReaderT1;
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

// Control_Monad_Reader_Trans_monoidReaderT
$Control_Monad_Reader_Trans_monoidReaderT = (function() use (&$Control_Applicative_pure, &$Control_Monad_Reader_Trans_applicativeReaderT, &$Control_Monad_Reader_Trans_semigroupReaderT, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Control_Monad_Reader_Trans_applicativeReaderT, &$Control_Monad_Reader_Trans_semigroupReaderT, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)(($Control_Monad_Reader_Trans_applicativeReaderT)($dictApplicative));
$semigroupReaderT1 = ($Control_Monad_Reader_Trans_semigroupReaderT)((($dictApplicative)->Apply0)($Prim_undefined));
    $__res = (function() use ($semigroupReaderT1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, $pure, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use ($semigroupReaderT1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, $pure, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupReaderT2 = ($semigroupReaderT1)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($pure)(($Data_Monoid_mempty)($dictMonoid)), "Semigroup0" => (function() use ($semigroupReaderT2) {
  $__fn = function($__dollar____unused) use ($semigroupReaderT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupReaderT2;
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

// Control_Monad_Reader_Trans_altReaderT
$Control_Monad_Reader_Trans_altReaderT = (function() use (&$Control_Alt_alt, &$Control_Monad_Reader_Trans_functorReaderT, &$Prim_undefined, &$Control_Alt_Alt__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT) {
  $__fn = function($dictAlt) use (&$Control_Alt_alt, &$Control_Monad_Reader_Trans_functorReaderT, &$Prim_undefined, &$Control_Alt_Alt__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$alt = ($Control_Alt_alt)($dictAlt);
$functorReaderT1 = ($Control_Monad_Reader_Trans_functorReaderT)((($dictAlt)->Functor0)($Prim_undefined));
    $__res = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => (function() use (&$Control_Monad_Reader_Trans_ReaderT, $alt) {
  $__body = function($v, $v1) use (&$Control_Monad_Reader_Trans_ReaderT, $alt) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m = $__case_0;
$n = $__case_1;
return ($Control_Monad_Reader_Trans_ReaderT)((function() use ($alt, $m, $n) {
  $__fn = function($r) use ($alt, $m, $n, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($alt)(($m)($r), ($n)($r));
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
  $__fn = function($v, $v1 = null) use (&$Control_Monad_Reader_Trans_ReaderT, $alt, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorReaderT1) {
  $__fn = function($__dollar____unused) use ($functorReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorReaderT1;
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

// Control_Monad_Reader_Trans_plusReaderT
$Control_Monad_Reader_Trans_plusReaderT = (function() use (&$Control_Monad_Reader_Trans_altReaderT, &$Prim_undefined, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT, &$Data_Function_const, &$Control_Plus_empty) {
  $__fn = function($dictPlus) use (&$Control_Monad_Reader_Trans_altReaderT, &$Prim_undefined, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_Reader_Trans_ReaderT, &$Data_Function_const, &$Control_Plus_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$altReaderT1 = ($Control_Monad_Reader_Trans_altReaderT)((($dictPlus)->Alt0)($Prim_undefined));
    $__res = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => ($Control_Monad_Reader_Trans_ReaderT)(($Data_Function_const)(($Control_Plus_empty)($dictPlus))), "Alt0" => (function() use ($altReaderT1) {
  $__fn = function($__dollar____unused) use ($altReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $altReaderT1;
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

// Control_Monad_Reader_Trans_alternativeReaderT
$Control_Monad_Reader_Trans_alternativeReaderT = (function() use (&$Control_Monad_Reader_Trans_applicativeReaderT, &$Prim_undefined, &$Control_Monad_Reader_Trans_plusReaderT, &$Control_Alternative_Alternative__dollar__Dict) {
  $__fn = function($dictAlternative) use (&$Control_Monad_Reader_Trans_applicativeReaderT, &$Prim_undefined, &$Control_Monad_Reader_Trans_plusReaderT, &$Control_Alternative_Alternative__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeReaderT1 = ($Control_Monad_Reader_Trans_applicativeReaderT)((($dictAlternative)->Applicative0)($Prim_undefined));
$plusReaderT1 = ($Control_Monad_Reader_Trans_plusReaderT)((($dictAlternative)->Plus1)($Prim_undefined));
    $__res = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeReaderT1) {
  $__fn = function($__dollar____unused) use ($applicativeReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeReaderT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusReaderT1) {
  $__fn = function($__dollar____unused) use ($plusReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $plusReaderT1;
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

// Control_Monad_Reader_Trans_monadPlusReaderT
$Control_Monad_Reader_Trans_monadPlusReaderT = (function() use (&$Control_Monad_Reader_Trans_monadReaderT, &$Prim_undefined, &$Control_Monad_Reader_Trans_alternativeReaderT, &$Control_MonadPlus_MonadPlus__dollar__Dict) {
  $__fn = function($dictMonadPlus) use (&$Control_Monad_Reader_Trans_monadReaderT, &$Prim_undefined, &$Control_Monad_Reader_Trans_alternativeReaderT, &$Control_MonadPlus_MonadPlus__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadReaderT1 = ($Control_Monad_Reader_Trans_monadReaderT)((($dictMonadPlus)->Monad0)($Prim_undefined));
$alternativeReaderT1 = ($Control_Monad_Reader_Trans_alternativeReaderT)((($dictMonadPlus)->Alternative1)($Prim_undefined));
    $__res = ($Control_MonadPlus_MonadPlus__dollar__Dict)((object)["Monad0" => (function() use ($monadReaderT1) {
  $__fn = function($__dollar____unused) use ($monadReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadReaderT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use ($alternativeReaderT1) {
  $__fn = function($__dollar____unused) use ($alternativeReaderT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $alternativeReaderT1;
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

