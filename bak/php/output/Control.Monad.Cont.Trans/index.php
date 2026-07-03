<?php

namespace Control\Monad\Cont\Trans;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_Cont_Trans_compose
$Control_Monad_Cont_Trans_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_Cont_Trans_ContT
$Control_Monad_Cont_Trans_ContT = (function() {
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

// Control_Monad_Cont_Trans_withContT
$Control_Monad_Cont_Trans_withContT = (function() use (&$Control_Monad_Cont_Trans_ContT) {
  $__body = function($f, $v) use (&$Control_Monad_Cont_Trans_ContT) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return ($Control_Monad_Cont_Trans_ContT)((function() use ($m, $f1) {
  $__fn = function($k) use ($m, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($m)(($f1)($k));
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
  $__fn = function($f, $v = null) use (&$Control_Monad_Cont_Trans_ContT, $__body, &$__fn) {
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

// Control_Monad_Cont_Trans_runContT
$Control_Monad_Cont_Trans_runContT = (function() {
  $__body = function($v, $k) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$f = $__case_0;
$k1 = $__case_1;
return ($f)($k1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $k = null) use ($__body, &$__fn) {
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
})();

// Control_Monad_Cont_Trans_newtypeContT
$Control_Monad_Cont_Trans_newtypeContT = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Control_Monad_Cont_Trans_monadTransContT
$Control_Monad_Cont_Trans_monadTransContT = ($Control_Monad_Trans_Class_MonadTrans__dollar__Dict)((object)["lift" => (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Monad_Cont_Trans_ContT) {
  $__fn = function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Monad_Cont_Trans_ContT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
    $__res = (function() use (&$Control_Monad_Cont_Trans_ContT, $bind) {
  $__fn = function($m) use (&$Control_Monad_Cont_Trans_ContT, $bind, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Cont_Trans_ContT)((function() use ($bind, $m) {
  $__fn = function($k) use ($bind, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)($m, $k);
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
})()]);

// Control_Monad_Cont_Trans_lift
$Control_Monad_Cont_Trans_lift = ($Control_Monad_Trans_Class_lift)($Control_Monad_Cont_Trans_monadTransContT);

// Control_Monad_Cont_Trans_mapContT
$Control_Monad_Cont_Trans_mapContT = (function() use (&$Control_Monad_Cont_Trans_ContT) {
  $__body = function($f, $v) use (&$Control_Monad_Cont_Trans_ContT) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return ($Control_Monad_Cont_Trans_ContT)((function() use ($f1, $m) {
  $__fn = function($k) use ($f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f1)(($m)($k));
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
  $__fn = function($f, $v = null) use (&$Control_Monad_Cont_Trans_ContT, $__body, &$__fn) {
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

// Control_Monad_Cont_Trans_functorContT
$Control_Monad_Cont_Trans_functorContT = (function() use (&$Data_Functor_Functor__dollar__Dict, &$Control_Monad_Cont_Trans_ContT) {
  $__fn = function($dictFunctor) use (&$Data_Functor_Functor__dollar__Dict, &$Control_Monad_Cont_Trans_ContT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Control_Monad_Cont_Trans_ContT) {
  $__body = function($f, $v) use (&$Control_Monad_Cont_Trans_ContT) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return ($Control_Monad_Cont_Trans_ContT)((function() use ($m, $f1) {
  $__fn = function($k) use ($m, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($m)((function() use ($k, $f1) {
  $__fn = function($a) use ($k, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($k)(($f1)($a));
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
  $__fn = function($f, $v = null) use (&$Control_Monad_Cont_Trans_ContT, $__body, &$__fn) {
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Cont_Trans_applyContT
$Control_Monad_Cont_Trans_applyContT = (function() use (&$Control_Monad_Cont_Trans_functorContT, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_Cont_Trans_ContT) {
  $__fn = function($dictApply) use (&$Control_Monad_Cont_Trans_functorContT, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_Cont_Trans_ContT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$functorContT1 = ($Control_Monad_Cont_Trans_functorContT)((($dictApply)->Functor0)($Prim_undefined));
    $__res = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Control_Monad_Cont_Trans_ContT) {
  $__body = function($v, $v1) use (&$Control_Monad_Cont_Trans_ContT) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$v2 = $__case_1;
return ($Control_Monad_Cont_Trans_ContT)((function() use ($f, $v2) {
  $__fn = function($k) use ($f, $v2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)((function() use ($v2, $k) {
  $__fn = function($g) use ($v2, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($v2)((function() use ($k, $g) {
  $__fn = function($a) use ($k, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($k)(($g)($a));
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
  $__fn = function($v, $v1 = null) use (&$Control_Monad_Cont_Trans_ContT, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorContT1) {
  $__fn = function($__dollar____unused) use ($functorContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorContT1;
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

// Control_Monad_Cont_Trans_bindContT
$Control_Monad_Cont_Trans_bindContT = (function() use (&$Control_Monad_Cont_Trans_applyContT, &$Prim_undefined, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_Cont_Trans_ContT) {
  $__fn = function($dictBind) use (&$Control_Monad_Cont_Trans_applyContT, &$Prim_undefined, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_Cont_Trans_ContT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applyContT1 = ($Control_Monad_Cont_Trans_applyContT)((($dictBind)->Apply0)($Prim_undefined));
    $__res = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Control_Monad_Cont_Trans_ContT) {
  $__body = function($v, $k) use (&$Control_Monad_Cont_Trans_ContT) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($Control_Monad_Cont_Trans_ContT)((function() use ($m, $k1) {
  $__fn = function($k__prime__) use ($m, $k1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($m)((function() use ($k1, $k__prime__) {
  $__body = function($a) use ($k1, $k__prime__) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$m__prime__ = $__case_0;
return ($m__prime__)($k__prime__);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a) use ($k1, $k__prime__, $__body, &$__fn) {
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
  $__fn = function($v, $k = null) use (&$Control_Monad_Cont_Trans_ContT, $__body, &$__fn) {
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
})(), "Apply0" => (function() use ($applyContT1) {
  $__fn = function($__dollar____unused) use ($applyContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyContT1;
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

// Control_Monad_Cont_Trans_semigroupContT
$Control_Monad_Cont_Trans_semigroupContT = (function() use (&$Control_Apply_lift2, &$Control_Monad_Cont_Trans_applyContT, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append) {
  $__fn = function($dictApply) use (&$Control_Apply_lift2, &$Control_Monad_Cont_Trans_applyContT, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift2 = ($Control_Apply_lift2)(($Control_Monad_Cont_Trans_applyContT)($dictApply));
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

// Control_Monad_Cont_Trans_applicativeContT
$Control_Monad_Cont_Trans_applicativeContT = (function() use (&$Control_Monad_Cont_Trans_applyContT, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_Cont_Trans_ContT) {
  $__fn = function($dictApplicative) use (&$Control_Monad_Cont_Trans_applyContT, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_Cont_Trans_ContT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applyContT1 = ($Control_Monad_Cont_Trans_applyContT)((($dictApplicative)->Apply0)($Prim_undefined));
    $__res = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => (function() use (&$Control_Monad_Cont_Trans_ContT) {
  $__fn = function($a) use (&$Control_Monad_Cont_Trans_ContT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Cont_Trans_ContT)((function() use ($a) {
  $__fn = function($k) use ($a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($k)($a);
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
})(), "Apply0" => (function() use ($applyContT1) {
  $__fn = function($__dollar____unused) use ($applyContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyContT1;
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

// Control_Monad_Cont_Trans_monadContT
$Control_Monad_Cont_Trans_monadContT = (function() use (&$Control_Monad_Cont_Trans_applicativeContT, &$Prim_undefined, &$Control_Monad_Cont_Trans_bindContT, &$Control_Monad_Monad__dollar__Dict) {
  $__fn = function($dictMonad) use (&$Control_Monad_Cont_Trans_applicativeContT, &$Prim_undefined, &$Control_Monad_Cont_Trans_bindContT, &$Control_Monad_Monad__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeContT1 = ($Control_Monad_Cont_Trans_applicativeContT)((($dictMonad)->Applicative0)($Prim_undefined));
$bindContT1 = ($Control_Monad_Cont_Trans_bindContT)((($dictMonad)->Bind1)($Prim_undefined));
    $__res = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeContT1) {
  $__fn = function($__dollar____unused) use ($applicativeContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeContT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindContT1) {
  $__fn = function($__dollar____unused) use ($bindContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bindContT1;
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

// Control_Monad_Cont_Trans_monadAskContT
$Control_Monad_Cont_Trans_monadAskContT = (function() use (&$Prim_undefined, &$Control_Monad_Cont_Trans_monadContT, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, &$Control_Monad_Cont_Trans_lift, &$Control_Monad_Reader_Class_ask) {
  $__fn = function($dictMonadAsk) use (&$Prim_undefined, &$Control_Monad_Cont_Trans_monadContT, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, &$Control_Monad_Cont_Trans_lift, &$Control_Monad_Reader_Class_ask, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadAsk)->Monad0)($Prim_undefined);
$monadContT1 = ($Control_Monad_Cont_Trans_monadContT)($Monad0);
    $__res = ($Control_Monad_Reader_Class_MonadAsk__dollar__Dict)((object)["ask" => ($Control_Monad_Cont_Trans_lift)($Monad0, ($Control_Monad_Reader_Class_ask)($dictMonadAsk)), "Monad0" => (function() use ($monadContT1) {
  $__fn = function($__dollar____unused) use ($monadContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadContT1;
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

// Control_Monad_Cont_Trans_monadReaderContT
$Control_Monad_Cont_Trans_monadReaderContT = (function() use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Reader_Class_ask, &$Control_Monad_Reader_Class_local, &$Control_Monad_Cont_Trans_monadAskContT, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_Cont_Trans_ContT, &$Control_Monad_Cont_Trans_compose, &$Data_Function_const) {
  $__fn = function($dictMonadReader) use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Reader_Class_ask, &$Control_Monad_Reader_Class_local, &$Control_Monad_Cont_Trans_monadAskContT, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_Cont_Trans_ContT, &$Control_Monad_Cont_Trans_compose, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$MonadAsk0 = (($dictMonadReader)->MonadAsk0)($Prim_undefined);
$bind = ($Control_Bind_bind)((((($MonadAsk0)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined));
$ask = ($Control_Monad_Reader_Class_ask)($MonadAsk0);
$local = ($Control_Monad_Reader_Class_local)($dictMonadReader);
$monadAskContT1 = ($Control_Monad_Cont_Trans_monadAskContT)($MonadAsk0);
    $__res = ($Control_Monad_Reader_Class_MonadReader__dollar__Dict)((object)["local" => (function() use (&$Control_Monad_Cont_Trans_ContT, $bind, $ask, $local, &$Control_Monad_Cont_Trans_compose, &$Data_Function_const) {
  $__body = function($f, $v) use (&$Control_Monad_Cont_Trans_ContT, $bind, $ask, $local, &$Control_Monad_Cont_Trans_compose, &$Data_Function_const) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$c = $__case_1;
return ($Control_Monad_Cont_Trans_ContT)((function() use ($bind, $ask, $local, $f1, $c, &$Control_Monad_Cont_Trans_compose, &$Data_Function_const) {
  $__fn = function($k) use ($bind, $ask, $local, $f1, $c, &$Control_Monad_Cont_Trans_compose, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)($ask, (function() use ($local, $f1, $c, &$Control_Monad_Cont_Trans_compose, &$Data_Function_const, $k) {
  $__fn = function($r) use ($local, $f1, $c, &$Control_Monad_Cont_Trans_compose, &$Data_Function_const, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($local)($f1, ($c)(($Control_Monad_Cont_Trans_compose)(($local)(($Data_Function_const)($r)), $k)));
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
  $__fn = function($f, $v = null) use (&$Control_Monad_Cont_Trans_ContT, $bind, $ask, $local, &$Control_Monad_Cont_Trans_compose, &$Data_Function_const, $__body, &$__fn) {
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
})(), "MonadAsk0" => (function() use ($monadAskContT1) {
  $__fn = function($__dollar____unused) use ($monadAskContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadAskContT1;
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

// Control_Monad_Cont_Trans_monadContContT
$Control_Monad_Cont_Trans_monadContContT = (function() use (&$Control_Monad_Cont_Trans_monadContT, &$Control_Monad_Cont_Class_MonadCont__dollar__Dict, &$Control_Monad_Cont_Trans_ContT) {
  $__fn = function($dictMonad) use (&$Control_Monad_Cont_Trans_monadContT, &$Control_Monad_Cont_Class_MonadCont__dollar__Dict, &$Control_Monad_Cont_Trans_ContT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadContT1 = ($Control_Monad_Cont_Trans_monadContT)($dictMonad);
    $__res = ($Control_Monad_Cont_Class_MonadCont__dollar__Dict)((object)["callCC" => (function() use (&$Control_Monad_Cont_Trans_ContT) {
  $__fn = function($f) use (&$Control_Monad_Cont_Trans_ContT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Cont_Trans_ContT)((function() use ($f, &$Control_Monad_Cont_Trans_ContT) {
  $__body = function($k) use ($f, &$Control_Monad_Cont_Trans_ContT) {
    $v = ($f)((function() use (&$Control_Monad_Cont_Trans_ContT, $k) {
  $__fn = function($a) use (&$Control_Monad_Cont_Trans_ContT, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Cont_Trans_ContT)((function() use ($k, $a) {
  $__fn = function($v1) use ($k, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($k)($a);
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
    $__case_0 = $v;
    if (true) {
$f__prime__ = $__case_0;
return ($f__prime__)($k);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($k) use ($f, &$Control_Monad_Cont_Trans_ContT, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($k);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($k);
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
})(), "Monad0" => (function() use ($monadContT1) {
  $__fn = function($__dollar____unused) use ($monadContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadContT1;
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

// Control_Monad_Cont_Trans_monadEffectContT
$Control_Monad_Cont_Trans_monadEffectContT = (function() use (&$Prim_undefined, &$Control_Monad_Cont_Trans_monadContT, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_Cont_Trans_compose, &$Control_Monad_Cont_Trans_lift, &$Effect_Class_liftEffect) {
  $__fn = function($dictMonadEffect) use (&$Prim_undefined, &$Control_Monad_Cont_Trans_monadContT, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_Cont_Trans_compose, &$Control_Monad_Cont_Trans_lift, &$Effect_Class_liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadEffect)->Monad0)($Prim_undefined);
$monadContT1 = ($Control_Monad_Cont_Trans_monadContT)($Monad0);
    $__res = ($Effect_Class_MonadEffect__dollar__Dict)((object)["liftEffect" => ($Control_Monad_Cont_Trans_compose)(($Control_Monad_Cont_Trans_lift)($Monad0), ($Effect_Class_liftEffect)($dictMonadEffect)), "Monad0" => (function() use ($monadContT1) {
  $__fn = function($__dollar____unused) use ($monadContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadContT1;
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

// Control_Monad_Cont_Trans_monadStateContT
$Control_Monad_Cont_Trans_monadStateContT = (function() use (&$Prim_undefined, &$Control_Monad_Cont_Trans_monadContT, &$Control_Monad_State_Class_MonadState__dollar__Dict, &$Control_Monad_Cont_Trans_compose, &$Control_Monad_Cont_Trans_lift, &$Control_Monad_State_Class_state) {
  $__fn = function($dictMonadState) use (&$Prim_undefined, &$Control_Monad_Cont_Trans_monadContT, &$Control_Monad_State_Class_MonadState__dollar__Dict, &$Control_Monad_Cont_Trans_compose, &$Control_Monad_Cont_Trans_lift, &$Control_Monad_State_Class_state, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadState)->Monad0)($Prim_undefined);
$monadContT1 = ($Control_Monad_Cont_Trans_monadContT)($Monad0);
    $__res = ($Control_Monad_State_Class_MonadState__dollar__Dict)((object)["state" => ($Control_Monad_Cont_Trans_compose)(($Control_Monad_Cont_Trans_lift)($Monad0), ($Control_Monad_State_Class_state)($dictMonadState)), "Monad0" => (function() use ($monadContT1) {
  $__fn = function($__dollar____unused) use ($monadContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadContT1;
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

// Control_Monad_Cont_Trans_monadSTContT
$Control_Monad_Cont_Trans_monadSTContT = (function() use (&$Prim_undefined, &$Control_Monad_Cont_Trans_monadContT, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_Cont_Trans_compose, &$Control_Monad_Cont_Trans_lift, &$Control_Monad_ST_Class_liftST) {
  $__fn = function($dictMonadST) use (&$Prim_undefined, &$Control_Monad_Cont_Trans_monadContT, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_Cont_Trans_compose, &$Control_Monad_Cont_Trans_lift, &$Control_Monad_ST_Class_liftST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadST)->Monad0)($Prim_undefined);
$monadContT1 = ($Control_Monad_Cont_Trans_monadContT)($Monad0);
    $__res = ($Control_Monad_ST_Class_MonadST__dollar__Dict)((object)["liftST" => ($Control_Monad_Cont_Trans_compose)(($Control_Monad_Cont_Trans_lift)($Monad0), ($Control_Monad_ST_Class_liftST)($dictMonadST)), "Monad0" => (function() use ($monadContT1) {
  $__fn = function($__dollar____unused) use ($monadContT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadContT1;
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

// Control_Monad_Cont_Trans_monoidContT
$Control_Monad_Cont_Trans_monoidContT = (function() use (&$Control_Applicative_pure, &$Control_Monad_Cont_Trans_applicativeContT, &$Control_Monad_Cont_Trans_semigroupContT, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Control_Monad_Cont_Trans_applicativeContT, &$Control_Monad_Cont_Trans_semigroupContT, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)(($Control_Monad_Cont_Trans_applicativeContT)($dictApplicative));
$semigroupContT1 = ($Control_Monad_Cont_Trans_semigroupContT)((($dictApplicative)->Apply0)($Prim_undefined));
    $__res = (function() use ($semigroupContT1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, $pure, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use ($semigroupContT1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, $pure, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupContT2 = ($semigroupContT1)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($pure)(($Data_Monoid_mempty)($dictMonoid)), "Semigroup0" => (function() use ($semigroupContT2) {
  $__fn = function($__dollar____unused) use ($semigroupContT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupContT2;
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

