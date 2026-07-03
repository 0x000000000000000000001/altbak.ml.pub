<?php

namespace Data\Profunctor\Star;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Distributive/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Choice/index.php';
require_once __DIR__ . '/../Data.Profunctor.Closed/index.php';
require_once __DIR__ . '/../Data.Profunctor.Star/index.php';
require_once __DIR__ . '/../Data.Profunctor.Strong/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Profunctor_Star_composeFlipped
$Data_Profunctor_Star_composeFlipped = ($Control_Semigroupoid_composeFlipped)($Control_Semigroupoid_semigroupoidFn);

// Data_Profunctor_Star_compose
$Data_Profunctor_Star_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Profunctor_Star_Star
$Data_Profunctor_Star_Star = (function() {
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

// Data_Profunctor_Star_semigroupoidStar
$Data_Profunctor_Star_semigroupoidStar = (function() use (&$Control_Bind_bind, &$Control_Semigroupoid_Semigroupoid__dollar__Dict, &$Data_Profunctor_Star_Star) {
  $__fn = function($dictBind) use (&$Control_Bind_bind, &$Control_Semigroupoid_Semigroupoid__dollar__Dict, &$Data_Profunctor_Star_Star, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)($dictBind);
    $__res = ($Control_Semigroupoid_Semigroupoid__dollar__Dict)((object)["compose" => (function() use (&$Data_Profunctor_Star_Star, $bind) {
  $__body = function($v, $v1) use (&$Data_Profunctor_Star_Star, $bind) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$g = $__case_1;
return ($Data_Profunctor_Star_Star)((function() use ($bind, $g, $f) {
  $__fn = function($x) use ($bind, $g, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($g)($x), $f);
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
  $__fn = function($v, $v1 = null) use (&$Data_Profunctor_Star_Star, $bind, $__body, &$__fn) {
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Star_profunctorStar
$Data_Profunctor_Star_profunctorStar = (function() use (&$Data_Functor_map, &$Data_Profunctor_Profunctor__dollar__Dict, &$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_composeFlipped) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Profunctor_Profunctor__dollar__Dict, &$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_composeFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = ($Data_Profunctor_Profunctor__dollar__Dict)((object)["dimap" => (function() use (&$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_composeFlipped, $map) {
  $__body = function($f, $g, $v) use (&$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_composeFlipped, $map) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$ft = $__case_2;
return ($Data_Profunctor_Star_Star)(($Data_Profunctor_Star_composeFlipped)($f1, ($Data_Profunctor_Star_composeFlipped)($ft, ($map)($g1))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $g = null, $v = null) use (&$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_composeFlipped, $map, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Star_strongStar
$Data_Profunctor_Star_strongStar = (function() use (&$Data_Functor_map, &$Data_Profunctor_Star_profunctorStar, &$Data_Profunctor_Strong_Strong__dollar__Dict, &$Data_Profunctor_Star_Star, &$Data_Tuple_Tuple) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Profunctor_Star_profunctorStar, &$Data_Profunctor_Strong_Strong__dollar__Dict, &$Data_Profunctor_Star_Star, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
$profunctorStar1 = ($Data_Profunctor_Star_profunctorStar)($dictFunctor);
    $__res = ($Data_Profunctor_Strong_Strong__dollar__Dict)((object)["first" => (function() use (&$Data_Profunctor_Star_Star, $map, &$Data_Tuple_Tuple) {
  $__body = function($v) use (&$Data_Profunctor_Star_Star, $map, &$Data_Tuple_Tuple) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($Data_Profunctor_Star_Star)((function() use ($map, &$Data_Tuple_Tuple, $f) {
  $__body = function($v1) use ($map, &$Data_Tuple_Tuple, $f) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$s = ($__case_0)->values[0];
$x = ($__case_0)->values[1];
return ($map)((function() use (&$Data_Tuple_Tuple, $x) {
  $__fn = function($v2) use (&$Data_Tuple_Tuple, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($v2, $x);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($f)($s));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use ($map, &$Data_Tuple_Tuple, $f, $__body, &$__fn) {
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
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Profunctor_Star_Star, $map, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
})(), "second" => (function() use (&$Data_Profunctor_Star_Star, $map, &$Data_Tuple_Tuple) {
  $__body = function($v) use (&$Data_Profunctor_Star_Star, $map, &$Data_Tuple_Tuple) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($Data_Profunctor_Star_Star)((function() use ($map, &$Data_Tuple_Tuple, $f) {
  $__body = function($v1) use ($map, &$Data_Tuple_Tuple, $f) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$x = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
return ($map)(($Data_Tuple_Tuple)($x), ($f)($s));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use ($map, &$Data_Tuple_Tuple, $f, $__body, &$__fn) {
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
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Profunctor_Star_Star, $map, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
})(), "Profunctor0" => (function() use ($profunctorStar1) {
  $__fn = function($__dollar____unused) use ($profunctorStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $profunctorStar1;
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

// Data_Profunctor_Star_newtypeStar
$Data_Profunctor_Star_newtypeStar = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Profunctor_Star_invariantStar
$Data_Profunctor_Star_invariantStar = (function() use (&$Data_Functor_Invariant_imap, &$Data_Functor_Invariant_Invariant__dollar__Dict, &$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_compose) {
  $__fn = function($dictInvariant) use (&$Data_Functor_Invariant_imap, &$Data_Functor_Invariant_Invariant__dollar__Dict, &$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$imap = ($Data_Functor_Invariant_imap)($dictInvariant);
    $__res = ($Data_Functor_Invariant_Invariant__dollar__Dict)((object)["imap" => (function() use (&$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_compose, $imap) {
  $__body = function($f, $g, $v) use (&$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_compose, $imap) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$h = $__case_2;
return ($Data_Profunctor_Star_Star)(($Data_Profunctor_Star_compose)(($imap)($f1, $g1), $h));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $g = null, $v = null) use (&$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_compose, $imap, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Star_hoistStar
$Data_Profunctor_Star_hoistStar = (function() use (&$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_compose) {
  $__body = function($f, $v) use (&$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_compose) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
return ($Data_Profunctor_Star_Star)(($Data_Profunctor_Star_compose)($f1, $g));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_compose, $__body, &$__fn) {
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

// Data_Profunctor_Star_functorStar
$Data_Profunctor_Star_functorStar = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_compose) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_compose, $map) {
  $__body = function($f, $v) use (&$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_compose, $map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
return ($Data_Profunctor_Star_Star)(($Data_Profunctor_Star_compose)(($map)($f1), $g));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_compose, $map, $__body, &$__fn) {
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

// Data_Profunctor_Star_distributiveStar
$Data_Profunctor_Star_distributiveStar = (function() use (&$Data_Distributive_collect, &$Data_Profunctor_Star_functorStar, &$Prim_undefined, &$Data_Distributive_Distributive__dollar__Dict, &$Data_Profunctor_Star_Star, &$Data_Functor_map, &$Data_Profunctor_Star_compose, &$Data_Distributive_distribute, &$Data_Profunctor_Star_distributiveStar) {
  $__fn = function($dictDistributive) use (&$Data_Distributive_collect, &$Data_Profunctor_Star_functorStar, &$Prim_undefined, &$Data_Distributive_Distributive__dollar__Dict, &$Data_Profunctor_Star_Star, &$Data_Functor_map, &$Data_Profunctor_Star_compose, &$Data_Distributive_distribute, &$Data_Profunctor_Star_distributiveStar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictDistributive) use (&$Data_Distributive_collect, &$Data_Profunctor_Star_functorStar, &$Prim_undefined, &$Data_Distributive_Distributive__dollar__Dict, &$Data_Profunctor_Star_Star, &$Data_Functor_map, &$Data_Profunctor_Star_compose, &$Data_Distributive_distribute, &$Data_Profunctor_Star_distributiveStar) {
while (true) {
$collect = ($Data_Distributive_collect)($dictDistributive);
$functorStar1 = ($Data_Profunctor_Star_functorStar)((($dictDistributive)->Functor0)($Prim_undefined));
return ($Data_Distributive_Distributive__dollar__Dict)((object)["distribute" => (function() use ($collect, &$Data_Profunctor_Star_Star) {
  $__fn = function($dictFunctor) use ($collect, &$Data_Profunctor_Star_Star, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$collect1 = ($collect)($dictFunctor);
    $__res = (function() use (&$Data_Profunctor_Star_Star, $collect1) {
  $__fn = function($f) use (&$Data_Profunctor_Star_Star, $collect1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Profunctor_Star_Star)((function() use ($collect1, $f) {
  $__fn = function($a) use ($collect1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($collect1)((function() use ($a) {
  $__body = function($v) use ($a) {
    $__case_0 = $v;
    if (true) {
$g = $__case_0;
return ($g)($a);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($a, $__body, &$__fn) {
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
})(), $f);
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
})(), "collect" => (function() use (&$Data_Functor_map, &$Data_Profunctor_Star_compose, &$Data_Distributive_distribute, &$Data_Profunctor_Star_distributiveStar, $dictDistributive) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Profunctor_Star_compose, &$Data_Distributive_distribute, &$Data_Profunctor_Star_distributiveStar, $dictDistributive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Data_Profunctor_Star_compose, &$Data_Distributive_distribute, &$Data_Profunctor_Star_distributiveStar, $dictDistributive, $dictFunctor, $map) {
  $__fn = function($f) use (&$Data_Profunctor_Star_compose, &$Data_Distributive_distribute, &$Data_Profunctor_Star_distributiveStar, $dictDistributive, $dictFunctor, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Profunctor_Star_compose)(($Data_Distributive_distribute)(($Data_Profunctor_Star_distributiveStar)($dictDistributive), $dictFunctor), ($map)($f));
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
})(), "Functor0" => (function() use ($functorStar1) {
  $__fn = function($__dollar____unused) use ($functorStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorStar1;
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

// Data_Profunctor_Star_closedStar
$Data_Profunctor_Star_closedStar = (function() use (&$Data_Distributive_distribute, &$Data_Functor_functorFn, &$Data_Profunctor_Star_profunctorStar, &$Prim_undefined, &$Data_Profunctor_Closed_Closed__dollar__Dict, &$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_compose) {
  $__fn = function($dictDistributive) use (&$Data_Distributive_distribute, &$Data_Functor_functorFn, &$Data_Profunctor_Star_profunctorStar, &$Prim_undefined, &$Data_Profunctor_Closed_Closed__dollar__Dict, &$Data_Profunctor_Star_Star, &$Data_Profunctor_Star_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$distribute = ($Data_Distributive_distribute)($dictDistributive, $Data_Functor_functorFn);
$profunctorStar1 = ($Data_Profunctor_Star_profunctorStar)((($dictDistributive)->Functor0)($Prim_undefined));
    $__res = ($Data_Profunctor_Closed_Closed__dollar__Dict)((object)["closed" => (function() use (&$Data_Profunctor_Star_Star, $distribute, &$Data_Profunctor_Star_compose) {
  $__body = function($v) use (&$Data_Profunctor_Star_Star, $distribute, &$Data_Profunctor_Star_compose) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($Data_Profunctor_Star_Star)((function() use ($distribute, &$Data_Profunctor_Star_compose, $f) {
  $__fn = function($g) use ($distribute, &$Data_Profunctor_Star_compose, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($distribute)(($Data_Profunctor_Star_compose)($f, $g));
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
  $__fn = function($v) use (&$Data_Profunctor_Star_Star, $distribute, &$Data_Profunctor_Star_compose, $__body, &$__fn) {
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
})(), "Profunctor0" => (function() use ($profunctorStar1) {
  $__fn = function($__dollar____unused) use ($profunctorStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $profunctorStar1;
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

// Data_Profunctor_Star_choiceStar
$Data_Profunctor_Star_choiceStar = (function() use (&$Prim_undefined, &$Data_Functor_map, &$Control_Applicative_pure, &$Data_Profunctor_Star_profunctorStar, &$Data_Profunctor_Choice_Choice__dollar__Dict, &$Data_Profunctor_Star_Star, &$Data_Either_either, &$Data_Profunctor_Star_compose, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictApplicative) use (&$Prim_undefined, &$Data_Functor_map, &$Control_Applicative_pure, &$Data_Profunctor_Star_profunctorStar, &$Data_Profunctor_Choice_Choice__dollar__Dict, &$Data_Profunctor_Star_Star, &$Data_Either_either, &$Data_Profunctor_Star_compose, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Functor0 = (((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined);
$map = ($Data_Functor_map)($Functor0);
$pure = ($Control_Applicative_pure)($dictApplicative);
$profunctorStar1 = ($Data_Profunctor_Star_profunctorStar)($Functor0);
    $__res = ($Data_Profunctor_Choice_Choice__dollar__Dict)((object)["left" => (function() use (&$Data_Profunctor_Star_Star, &$Data_Either_either, &$Data_Profunctor_Star_compose, $map, &$Data_Either_Left, $pure, &$Data_Either_Right) {
  $__body = function($v) use (&$Data_Profunctor_Star_Star, &$Data_Either_either, &$Data_Profunctor_Star_compose, $map, &$Data_Either_Left, $pure, &$Data_Either_Right) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($Data_Profunctor_Star_Star)(($Data_Either_either)(($Data_Profunctor_Star_compose)(($map)($Data_Either_Left), $f), ($Data_Profunctor_Star_compose)($pure, $Data_Either_Right)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Profunctor_Star_Star, &$Data_Either_either, &$Data_Profunctor_Star_compose, $map, &$Data_Either_Left, $pure, &$Data_Either_Right, $__body, &$__fn) {
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
})(), "right" => (function() use (&$Data_Profunctor_Star_Star, &$Data_Either_either, &$Data_Profunctor_Star_compose, $pure, &$Data_Either_Left, $map, &$Data_Either_Right) {
  $__body = function($v) use (&$Data_Profunctor_Star_Star, &$Data_Either_either, &$Data_Profunctor_Star_compose, $pure, &$Data_Either_Left, $map, &$Data_Either_Right) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($Data_Profunctor_Star_Star)(($Data_Either_either)(($Data_Profunctor_Star_compose)($pure, $Data_Either_Left), ($Data_Profunctor_Star_compose)(($map)($Data_Either_Right), $f)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Profunctor_Star_Star, &$Data_Either_either, &$Data_Profunctor_Star_compose, $pure, &$Data_Either_Left, $map, &$Data_Either_Right, $__body, &$__fn) {
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
})(), "Profunctor0" => (function() use ($profunctorStar1) {
  $__fn = function($__dollar____unused) use ($profunctorStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $profunctorStar1;
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

// Data_Profunctor_Star_categoryStar
$Data_Profunctor_Star_categoryStar = (function() use (&$Data_Profunctor_Star_semigroupoidStar, &$Prim_undefined, &$Control_Category_Category__dollar__Dict, &$Data_Profunctor_Star_Star, &$Control_Applicative_pure) {
  $__fn = function($dictMonad) use (&$Data_Profunctor_Star_semigroupoidStar, &$Prim_undefined, &$Control_Category_Category__dollar__Dict, &$Data_Profunctor_Star_Star, &$Control_Applicative_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupoidStar1 = ($Data_Profunctor_Star_semigroupoidStar)((($dictMonad)->Bind1)($Prim_undefined));
    $__res = ($Control_Category_Category__dollar__Dict)((object)["identity" => ($Data_Profunctor_Star_Star)(($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined))), "Semigroupoid0" => (function() use ($semigroupoidStar1) {
  $__fn = function($__dollar____unused) use ($semigroupoidStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupoidStar1;
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

// Data_Profunctor_Star_applyStar
$Data_Profunctor_Star_applyStar = (function() use (&$Control_Apply_apply, &$Data_Profunctor_Star_functorStar, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Data_Profunctor_Star_Star) {
  $__fn = function($dictApply) use (&$Control_Apply_apply, &$Data_Profunctor_Star_functorStar, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Data_Profunctor_Star_Star, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$apply = ($Control_Apply_apply)($dictApply);
$functorStar1 = ($Data_Profunctor_Star_functorStar)((($dictApply)->Functor0)($Prim_undefined));
    $__res = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Profunctor_Star_Star, $apply) {
  $__body = function($v, $v1) use (&$Data_Profunctor_Star_Star, $apply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$g = $__case_1;
return ($Data_Profunctor_Star_Star)((function() use ($apply, $f, $g) {
  $__fn = function($a) use ($apply, $f, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($apply)(($f)($a), ($g)($a));
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
  $__fn = function($v, $v1 = null) use (&$Data_Profunctor_Star_Star, $apply, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorStar1) {
  $__fn = function($__dollar____unused) use ($functorStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorStar1;
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

// Data_Profunctor_Star_bindStar
$Data_Profunctor_Star_bindStar = (function() use (&$Control_Bind_bind, &$Data_Profunctor_Star_applyStar, &$Prim_undefined, &$Control_Bind_Bind__dollar__Dict, &$Data_Profunctor_Star_Star) {
  $__fn = function($dictBind) use (&$Control_Bind_bind, &$Data_Profunctor_Star_applyStar, &$Prim_undefined, &$Control_Bind_Bind__dollar__Dict, &$Data_Profunctor_Star_Star, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)($dictBind);
$applyStar1 = ($Data_Profunctor_Star_applyStar)((($dictBind)->Apply0)($Prim_undefined));
    $__res = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Data_Profunctor_Star_Star, $bind) {
  $__body = function($v, $f) use (&$Data_Profunctor_Star_Star, $bind) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return ($Data_Profunctor_Star_Star)((function() use ($bind, $m, $f1) {
  $__fn = function($x) use ($bind, $m, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($m)($x), (function() use ($f1, $x) {
  $__body = function($a) use ($f1, $x) {
    $v1 = ($f1)($a);
    $__case_0 = $v1;
    if (true) {
$g = $__case_0;
return ($g)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a) use ($f1, $x, $__body, &$__fn) {
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
  $__fn = function($v, $f = null) use (&$Data_Profunctor_Star_Star, $bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $f);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $f);
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyStar1) {
  $__fn = function($__dollar____unused) use ($applyStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyStar1;
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

// Data_Profunctor_Star_applicativeStar
$Data_Profunctor_Star_applicativeStar = (function() use (&$Control_Applicative_pure, &$Data_Profunctor_Star_applyStar, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Profunctor_Star_Star) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Data_Profunctor_Star_applyStar, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Profunctor_Star_Star, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
$applyStar1 = ($Data_Profunctor_Star_applyStar)((($dictApplicative)->Apply0)($Prim_undefined));
    $__res = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => (function() use (&$Data_Profunctor_Star_Star, $pure) {
  $__fn = function($a) use (&$Data_Profunctor_Star_Star, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Profunctor_Star_Star)((function() use ($pure, $a) {
  $__fn = function($v) use ($pure, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)($a);
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
})(), "Apply0" => (function() use ($applyStar1) {
  $__fn = function($__dollar____unused) use ($applyStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyStar1;
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

// Data_Profunctor_Star_monadStar
$Data_Profunctor_Star_monadStar = (function() use (&$Data_Profunctor_Star_applicativeStar, &$Prim_undefined, &$Data_Profunctor_Star_bindStar, &$Control_Monad_Monad__dollar__Dict) {
  $__fn = function($dictMonad) use (&$Data_Profunctor_Star_applicativeStar, &$Prim_undefined, &$Data_Profunctor_Star_bindStar, &$Control_Monad_Monad__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeStar1 = ($Data_Profunctor_Star_applicativeStar)((($dictMonad)->Applicative0)($Prim_undefined));
$bindStar1 = ($Data_Profunctor_Star_bindStar)((($dictMonad)->Bind1)($Prim_undefined));
    $__res = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeStar1) {
  $__fn = function($__dollar____unused) use ($applicativeStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeStar1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindStar1) {
  $__fn = function($__dollar____unused) use ($bindStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bindStar1;
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

// Data_Profunctor_Star_altStar
$Data_Profunctor_Star_altStar = (function() use (&$Control_Alt_alt, &$Data_Profunctor_Star_functorStar, &$Prim_undefined, &$Control_Alt_Alt__dollar__Dict, &$Data_Profunctor_Star_Star) {
  $__fn = function($dictAlt) use (&$Control_Alt_alt, &$Data_Profunctor_Star_functorStar, &$Prim_undefined, &$Control_Alt_Alt__dollar__Dict, &$Data_Profunctor_Star_Star, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$alt = ($Control_Alt_alt)($dictAlt);
$functorStar1 = ($Data_Profunctor_Star_functorStar)((($dictAlt)->Functor0)($Prim_undefined));
    $__res = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => (function() use (&$Data_Profunctor_Star_Star, $alt) {
  $__body = function($v, $v1) use (&$Data_Profunctor_Star_Star, $alt) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$g = $__case_1;
return ($Data_Profunctor_Star_Star)((function() use ($alt, $f, $g) {
  $__fn = function($a) use ($alt, $f, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($alt)(($f)($a), ($g)($a));
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
  $__fn = function($v, $v1 = null) use (&$Data_Profunctor_Star_Star, $alt, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorStar1) {
  $__fn = function($__dollar____unused) use ($functorStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorStar1;
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

// Data_Profunctor_Star_plusStar
$Data_Profunctor_Star_plusStar = (function() use (&$Control_Plus_empty, &$Data_Profunctor_Star_altStar, &$Prim_undefined, &$Control_Plus_Plus__dollar__Dict, &$Data_Profunctor_Star_Star) {
  $__fn = function($dictPlus) use (&$Control_Plus_empty, &$Data_Profunctor_Star_altStar, &$Prim_undefined, &$Control_Plus_Plus__dollar__Dict, &$Data_Profunctor_Star_Star, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$empty = ($Control_Plus_empty)($dictPlus);
$altStar1 = ($Data_Profunctor_Star_altStar)((($dictPlus)->Alt0)($Prim_undefined));
    $__res = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => ($Data_Profunctor_Star_Star)((function() use ($empty) {
  $__fn = function($v) use ($empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $empty;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), "Alt0" => (function() use ($altStar1) {
  $__fn = function($__dollar____unused) use ($altStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $altStar1;
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

// Data_Profunctor_Star_alternativeStar
$Data_Profunctor_Star_alternativeStar = (function() use (&$Data_Profunctor_Star_applicativeStar, &$Prim_undefined, &$Data_Profunctor_Star_plusStar, &$Control_Alternative_Alternative__dollar__Dict) {
  $__fn = function($dictAlternative) use (&$Data_Profunctor_Star_applicativeStar, &$Prim_undefined, &$Data_Profunctor_Star_plusStar, &$Control_Alternative_Alternative__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeStar1 = ($Data_Profunctor_Star_applicativeStar)((($dictAlternative)->Applicative0)($Prim_undefined));
$plusStar1 = ($Data_Profunctor_Star_plusStar)((($dictAlternative)->Plus1)($Prim_undefined));
    $__res = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeStar1) {
  $__fn = function($__dollar____unused) use ($applicativeStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeStar1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusStar1) {
  $__fn = function($__dollar____unused) use ($plusStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $plusStar1;
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

// Data_Profunctor_Star_monadPlusStar
$Data_Profunctor_Star_monadPlusStar = (function() use (&$Data_Profunctor_Star_monadStar, &$Prim_undefined, &$Data_Profunctor_Star_alternativeStar, &$Control_MonadPlus_MonadPlus__dollar__Dict) {
  $__fn = function($dictMonadPlus) use (&$Data_Profunctor_Star_monadStar, &$Prim_undefined, &$Data_Profunctor_Star_alternativeStar, &$Control_MonadPlus_MonadPlus__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadStar1 = ($Data_Profunctor_Star_monadStar)((($dictMonadPlus)->Monad0)($Prim_undefined));
$alternativeStar1 = ($Data_Profunctor_Star_alternativeStar)((($dictMonadPlus)->Alternative1)($Prim_undefined));
    $__res = ($Control_MonadPlus_MonadPlus__dollar__Dict)((object)["Monad0" => (function() use ($monadStar1) {
  $__fn = function($__dollar____unused) use ($monadStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadStar1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use ($alternativeStar1) {
  $__fn = function($__dollar____unused) use ($alternativeStar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $alternativeStar1;
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

