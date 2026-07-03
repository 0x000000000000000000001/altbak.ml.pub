<?php

namespace Data\Functor\Clown;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Biapplicative/index.php';
require_once __DIR__ . '/../Control.Biapply/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Clown/index.php';
require_once __DIR__ . '/../Data.Functor.Contravariant/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Functor_Clown_append
$Data_Functor_Clown_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Functor_Clown_Clown
$Data_Functor_Clown_Clown = (function() {
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

// Data_Functor_Clown_showClown
$Data_Functor_Clown_showClown = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Clown_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Clown_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Functor_Clown_append, $show) {
  $__body = function($v) use (&$Data_Functor_Clown_append, $show) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($Data_Functor_Clown_append)("(Clown ", ($Data_Functor_Clown_append)(($show)($x), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Functor_Clown_append, $show, $__body, &$__fn) {
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Clown_profunctorClown
$Data_Functor_Clown_profunctorClown = (function() use (&$Data_Functor_Contravariant_cmap, &$Data_Profunctor_Profunctor__dollar__Dict, &$Data_Functor_Clown_Clown) {
  $__fn = function($dictContravariant) use (&$Data_Functor_Contravariant_cmap, &$Data_Profunctor_Profunctor__dollar__Dict, &$Data_Functor_Clown_Clown, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$cmap = ($Data_Functor_Contravariant_cmap)($dictContravariant);
    $__res = ($Data_Profunctor_Profunctor__dollar__Dict)((object)["dimap" => (function() use (&$Data_Functor_Clown_Clown, $cmap) {
  $__body = function($f, $v, $v1) use (&$Data_Functor_Clown_Clown, $cmap) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$a = $__case_2;
return ($Data_Functor_Clown_Clown)(($cmap)($f1, $a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $v1 = null) use (&$Data_Functor_Clown_Clown, $cmap, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Clown_ordClown
$Data_Functor_Clown_ordClown = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $dictOrd;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Clown_newtypeClown
$Data_Functor_Clown_newtypeClown = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Functor_Clown_hoistClown
$Data_Functor_Clown_hoistClown = (function() use (&$Data_Functor_Clown_Clown) {
  $__body = function($f, $v) use (&$Data_Functor_Clown_Clown) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$a = $__case_1;
return ($Data_Functor_Clown_Clown)(($f1)($a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Functor_Clown_Clown, $__body, &$__fn) {
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

// Data_Functor_Clown_functorClown
$Data_Functor_Clown_functorClown = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Functor_Clown_Clown) {
  $__body = function($v, $v1) use (&$Data_Functor_Clown_Clown) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_1;
return ($Data_Functor_Clown_Clown)($a);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Functor_Clown_Clown, $__body, &$__fn) {
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

// Data_Functor_Clown_eqClown
$Data_Functor_Clown_eqClown = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $dictEq;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Clown_bifunctorClown
$Data_Functor_Clown_bifunctorClown = (function() use (&$Data_Functor_map, &$Data_Bifunctor_Bifunctor__dollar__Dict, &$Data_Functor_Clown_Clown) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Bifunctor_Bifunctor__dollar__Dict, &$Data_Functor_Clown_Clown, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = ($Data_Bifunctor_Bifunctor__dollar__Dict)((object)["bimap" => (function() use (&$Data_Functor_Clown_Clown, $map) {
  $__body = function($f, $v, $v1) use (&$Data_Functor_Clown_Clown, $map) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$a = $__case_2;
return ($Data_Functor_Clown_Clown)(($map)($f1, $a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $v1 = null) use (&$Data_Functor_Clown_Clown, $map, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Clown_biapplyClown
$Data_Functor_Clown_biapplyClown = (function() use (&$Control_Apply_apply, &$Data_Functor_Clown_bifunctorClown, &$Prim_undefined, &$Control_Biapply_Biapply__dollar__Dict, &$Data_Functor_Clown_Clown) {
  $__fn = function($dictApply) use (&$Control_Apply_apply, &$Data_Functor_Clown_bifunctorClown, &$Prim_undefined, &$Control_Biapply_Biapply__dollar__Dict, &$Data_Functor_Clown_Clown, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$apply = ($Control_Apply_apply)($dictApply);
$bifunctorClown1 = ($Data_Functor_Clown_bifunctorClown)((($dictApply)->Functor0)($Prim_undefined));
    $__res = ($Control_Biapply_Biapply__dollar__Dict)((object)["biapply" => (function() use (&$Data_Functor_Clown_Clown, $apply) {
  $__body = function($v, $v1) use (&$Data_Functor_Clown_Clown, $apply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$fg = $__case_0;
$xy = $__case_1;
return ($Data_Functor_Clown_Clown)(($apply)($fg, $xy));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Functor_Clown_Clown, $apply, $__body, &$__fn) {
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
})(), "Bifunctor0" => (function() use ($bifunctorClown1) {
  $__fn = function($__dollar____unused) use ($bifunctorClown1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bifunctorClown1;
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

// Data_Functor_Clown_biapplicativeClown
$Data_Functor_Clown_biapplicativeClown = (function() use (&$Control_Applicative_pure, &$Data_Functor_Clown_biapplyClown, &$Prim_undefined, &$Control_Biapplicative_Biapplicative__dollar__Dict, &$Data_Functor_Clown_Clown) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Data_Functor_Clown_biapplyClown, &$Prim_undefined, &$Control_Biapplicative_Biapplicative__dollar__Dict, &$Data_Functor_Clown_Clown, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
$biapplyClown1 = ($Data_Functor_Clown_biapplyClown)((($dictApplicative)->Apply0)($Prim_undefined));
    $__res = ($Control_Biapplicative_Biapplicative__dollar__Dict)((object)["bipure" => (function() use (&$Data_Functor_Clown_Clown, $pure) {
  $__fn = function($a, $v = null) use (&$Data_Functor_Clown_Clown, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Clown_Clown)(($pure)($a));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Biapply0" => (function() use ($biapplyClown1) {
  $__fn = function($__dollar____unused) use ($biapplyClown1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $biapplyClown1;
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

