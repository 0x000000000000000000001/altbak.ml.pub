<?php

namespace Data\Functor\Joker;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Biapplicative/index.php';
require_once __DIR__ . '/../Control.Biapply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Joker/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Choice/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Functor_Joker_append
$Data_Functor_Joker_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Functor_Joker_composeFlipped
$Data_Functor_Joker_composeFlipped = ($Control_Semigroupoid_composeFlipped)($Control_Semigroupoid_semigroupoidFn);

// Data_Functor_Joker_un
$Data_Functor_Joker_un = ($Data_Newtype_un)($Prim_undefined);

// Data_Functor_Joker_compose
$Data_Functor_Joker_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Functor_Joker_Joker
$Data_Functor_Joker_Joker = (function() {
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

// Data_Functor_Joker_showJoker
$Data_Functor_Joker_showJoker = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Joker_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Joker_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Functor_Joker_append, $show) {
  $__body = function($v) use (&$Data_Functor_Joker_append, $show) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($Data_Functor_Joker_append)("(Joker ", ($Data_Functor_Joker_append)(($show)($x), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Functor_Joker_append, $show, $__body, &$__fn) {
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

// Data_Functor_Joker_profunctorJoker
$Data_Functor_Joker_profunctorJoker = (function() use (&$Data_Functor_map, &$Data_Profunctor_Profunctor__dollar__Dict, &$Data_Functor_Joker_Joker) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Profunctor_Profunctor__dollar__Dict, &$Data_Functor_Joker_Joker, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = ($Data_Profunctor_Profunctor__dollar__Dict)((object)["dimap" => (function() use (&$Data_Functor_Joker_Joker, $map) {
  $__body = function($v, $g, $v1) use (&$Data_Functor_Joker_Joker, $map) {
    $__case_0 = $v;
    $__case_1 = $g;
    $__case_2 = $v1;
    if (true) {
$g1 = $__case_1;
$a = $__case_2;
return ($Data_Functor_Joker_Joker)(($map)($g1, $a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $g = null, $v1 = null) use (&$Data_Functor_Joker_Joker, $map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $g, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $g, $v1);
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

// Data_Functor_Joker_ordJoker
$Data_Functor_Joker_ordJoker = (function() {
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

// Data_Functor_Joker_newtypeJoker
$Data_Functor_Joker_newtypeJoker = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Functor_Joker_hoistJoker
$Data_Functor_Joker_hoistJoker = (function() use (&$Data_Functor_Joker_Joker) {
  $__body = function($f, $v) use (&$Data_Functor_Joker_Joker) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$a = $__case_1;
return ($Data_Functor_Joker_Joker)(($f1)($a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Functor_Joker_Joker, $__body, &$__fn) {
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

// Data_Functor_Joker_functorJoker
$Data_Functor_Joker_functorJoker = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Joker_Joker) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Joker_Joker, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Functor_Joker_Joker, $map) {
  $__body = function($f, $v) use (&$Data_Functor_Joker_Joker, $map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$a = $__case_1;
return ($Data_Functor_Joker_Joker)(($map)($f1, $a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Functor_Joker_Joker, $map, $__body, &$__fn) {
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

// Data_Functor_Joker_eqJoker
$Data_Functor_Joker_eqJoker = (function() {
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

// Data_Functor_Joker_choiceJoker
$Data_Functor_Joker_choiceJoker = (function() use (&$Data_Functor_map, &$Data_Functor_Joker_profunctorJoker, &$Data_Profunctor_Choice_Choice__dollar__Dict, &$Data_Functor_Joker_Joker, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Joker_profunctorJoker, &$Data_Profunctor_Choice_Choice__dollar__Dict, &$Data_Functor_Joker_Joker, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
$profunctorJoker1 = ($Data_Functor_Joker_profunctorJoker)($dictFunctor);
    $__res = ($Data_Profunctor_Choice_Choice__dollar__Dict)((object)["left" => (function() use (&$Data_Functor_Joker_Joker, $map, &$Data_Either_Left) {
  $__body = function($v) use (&$Data_Functor_Joker_Joker, $map, &$Data_Either_Left) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($Data_Functor_Joker_Joker)(($map)($Data_Either_Left, $f));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Functor_Joker_Joker, $map, &$Data_Either_Left, $__body, &$__fn) {
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
})(), "right" => (function() use (&$Data_Functor_Joker_Joker, $map, &$Data_Either_Right) {
  $__body = function($v) use (&$Data_Functor_Joker_Joker, $map, &$Data_Either_Right) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($Data_Functor_Joker_Joker)(($map)($Data_Either_Right, $f));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Functor_Joker_Joker, $map, &$Data_Either_Right, $__body, &$__fn) {
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
})(), "Profunctor0" => (function() use ($profunctorJoker1) {
  $__fn = function($__dollar____unused) use ($profunctorJoker1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $profunctorJoker1;
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

// Data_Functor_Joker_bifunctorJoker
$Data_Functor_Joker_bifunctorJoker = (function() use (&$Data_Functor_map, &$Data_Bifunctor_Bifunctor__dollar__Dict, &$Data_Functor_Joker_Joker) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Bifunctor_Bifunctor__dollar__Dict, &$Data_Functor_Joker_Joker, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = ($Data_Bifunctor_Bifunctor__dollar__Dict)((object)["bimap" => (function() use (&$Data_Functor_Joker_Joker, $map) {
  $__body = function($v, $g, $v1) use (&$Data_Functor_Joker_Joker, $map) {
    $__case_0 = $v;
    $__case_1 = $g;
    $__case_2 = $v1;
    if (true) {
$g1 = $__case_1;
$a = $__case_2;
return ($Data_Functor_Joker_Joker)(($map)($g1, $a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $g = null, $v1 = null) use (&$Data_Functor_Joker_Joker, $map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $g, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $g, $v1);
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

// Data_Functor_Joker_biapplyJoker
$Data_Functor_Joker_biapplyJoker = (function() use (&$Control_Apply_apply, &$Data_Functor_Joker_bifunctorJoker, &$Prim_undefined, &$Control_Biapply_Biapply__dollar__Dict, &$Data_Functor_Joker_Joker) {
  $__fn = function($dictApply) use (&$Control_Apply_apply, &$Data_Functor_Joker_bifunctorJoker, &$Prim_undefined, &$Control_Biapply_Biapply__dollar__Dict, &$Data_Functor_Joker_Joker, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$apply = ($Control_Apply_apply)($dictApply);
$bifunctorJoker1 = ($Data_Functor_Joker_bifunctorJoker)((($dictApply)->Functor0)($Prim_undefined));
    $__res = ($Control_Biapply_Biapply__dollar__Dict)((object)["biapply" => (function() use (&$Data_Functor_Joker_Joker, $apply) {
  $__body = function($v, $v1) use (&$Data_Functor_Joker_Joker, $apply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$fg = $__case_0;
$xy = $__case_1;
return ($Data_Functor_Joker_Joker)(($apply)($fg, $xy));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Functor_Joker_Joker, $apply, $__body, &$__fn) {
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
})(), "Bifunctor0" => (function() use ($bifunctorJoker1) {
  $__fn = function($__dollar____unused) use ($bifunctorJoker1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bifunctorJoker1;
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

// Data_Functor_Joker_biapplicativeJoker
$Data_Functor_Joker_biapplicativeJoker = (function() use (&$Control_Applicative_pure, &$Data_Functor_Joker_biapplyJoker, &$Prim_undefined, &$Control_Biapplicative_Biapplicative__dollar__Dict, &$Data_Functor_Joker_Joker) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Data_Functor_Joker_biapplyJoker, &$Prim_undefined, &$Control_Biapplicative_Biapplicative__dollar__Dict, &$Data_Functor_Joker_Joker, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
$biapplyJoker1 = ($Data_Functor_Joker_biapplyJoker)((($dictApplicative)->Apply0)($Prim_undefined));
    $__res = ($Control_Biapplicative_Biapplicative__dollar__Dict)((object)["bipure" => (function() use (&$Data_Functor_Joker_Joker, $pure) {
  $__fn = function($v, $b = null) use (&$Data_Functor_Joker_Joker, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Joker_Joker)(($pure)($b));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Biapply0" => (function() use ($biapplyJoker1) {
  $__fn = function($__dollar____unused) use ($biapplyJoker1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $biapplyJoker1;
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

// Data_Functor_Joker_applyJoker
$Data_Functor_Joker_applyJoker = (function() use (&$Control_Apply_apply, &$Data_Functor_Joker_functorJoker, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Data_Functor_Joker_Joker) {
  $__fn = function($dictApply) use (&$Control_Apply_apply, &$Data_Functor_Joker_functorJoker, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Data_Functor_Joker_Joker, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$apply = ($Control_Apply_apply)($dictApply);
$functorJoker1 = ($Data_Functor_Joker_functorJoker)((($dictApply)->Functor0)($Prim_undefined));
    $__res = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Functor_Joker_Joker, $apply) {
  $__body = function($v, $v1) use (&$Data_Functor_Joker_Joker, $apply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$g = $__case_1;
return ($Data_Functor_Joker_Joker)(($apply)($f, $g));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Functor_Joker_Joker, $apply, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorJoker1) {
  $__fn = function($__dollar____unused) use ($functorJoker1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorJoker1;
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

// Data_Functor_Joker_bindJoker
$Data_Functor_Joker_bindJoker = (function() use (&$Control_Bind_bind, &$Data_Functor_Joker_applyJoker, &$Prim_undefined, &$Control_Bind_Bind__dollar__Dict, &$Data_Functor_Joker_Joker, &$Data_Functor_Joker_composeFlipped, &$Data_Functor_Joker_un) {
  $__fn = function($dictBind) use (&$Control_Bind_bind, &$Data_Functor_Joker_applyJoker, &$Prim_undefined, &$Control_Bind_Bind__dollar__Dict, &$Data_Functor_Joker_Joker, &$Data_Functor_Joker_composeFlipped, &$Data_Functor_Joker_un, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)($dictBind);
$applyJoker1 = ($Data_Functor_Joker_applyJoker)((($dictBind)->Apply0)($Prim_undefined));
    $__res = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Data_Functor_Joker_Joker, $bind, &$Data_Functor_Joker_composeFlipped, &$Data_Functor_Joker_un) {
  $__body = function($v, $amb) use (&$Data_Functor_Joker_Joker, $bind, &$Data_Functor_Joker_composeFlipped, &$Data_Functor_Joker_un) {
    $__case_0 = $v;
    $__case_1 = $amb;
    if (true) {
$ma = $__case_0;
$amb1 = $__case_1;
return ($Data_Functor_Joker_Joker)(($bind)($ma, ($Data_Functor_Joker_composeFlipped)($amb1, ($Data_Functor_Joker_un)($Data_Functor_Joker_Joker))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $amb = null) use (&$Data_Functor_Joker_Joker, $bind, &$Data_Functor_Joker_composeFlipped, &$Data_Functor_Joker_un, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $amb);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $amb);
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyJoker1) {
  $__fn = function($__dollar____unused) use ($applyJoker1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyJoker1;
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

// Data_Functor_Joker_applicativeJoker
$Data_Functor_Joker_applicativeJoker = (function() use (&$Data_Functor_Joker_applyJoker, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Functor_Joker_compose, &$Data_Functor_Joker_Joker, &$Control_Applicative_pure) {
  $__fn = function($dictApplicative) use (&$Data_Functor_Joker_applyJoker, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Functor_Joker_compose, &$Data_Functor_Joker_Joker, &$Control_Applicative_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applyJoker1 = ($Data_Functor_Joker_applyJoker)((($dictApplicative)->Apply0)($Prim_undefined));
    $__res = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => ($Data_Functor_Joker_compose)($Data_Functor_Joker_Joker, ($Control_Applicative_pure)($dictApplicative)), "Apply0" => (function() use ($applyJoker1) {
  $__fn = function($__dollar____unused) use ($applyJoker1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyJoker1;
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

// Data_Functor_Joker_monadJoker
$Data_Functor_Joker_monadJoker = (function() use (&$Data_Functor_Joker_applicativeJoker, &$Prim_undefined, &$Data_Functor_Joker_bindJoker, &$Control_Monad_Monad__dollar__Dict) {
  $__fn = function($dictMonad) use (&$Data_Functor_Joker_applicativeJoker, &$Prim_undefined, &$Data_Functor_Joker_bindJoker, &$Control_Monad_Monad__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeJoker1 = ($Data_Functor_Joker_applicativeJoker)((($dictMonad)->Applicative0)($Prim_undefined));
$bindJoker1 = ($Data_Functor_Joker_bindJoker)((($dictMonad)->Bind1)($Prim_undefined));
    $__res = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeJoker1) {
  $__fn = function($__dollar____unused) use ($applicativeJoker1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeJoker1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindJoker1) {
  $__fn = function($__dollar____unused) use ($bindJoker1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bindJoker1;
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

