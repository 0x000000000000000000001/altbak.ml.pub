<?php

namespace Data\Functor\Compose;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Functor_Compose_append
$Data_Functor_Compose_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Functor_Compose_compose
$Data_Functor_Compose_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Functor_Compose_Compose
$Data_Functor_Compose_Compose = (function() {
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

// Data_Functor_Compose_showCompose
$Data_Functor_Compose_showCompose = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Compose_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Compose_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Functor_Compose_append, $show) {
  $__body = function($v) use (&$Data_Functor_Compose_append, $show) {
    $__case_0 = $v;
    if (true) {
$fga = $__case_0;
return ($Data_Functor_Compose_append)("(Compose ", ($Data_Functor_Compose_append)(($show)($fga), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Functor_Compose_append, $show, $__body, &$__fn) {
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

// Data_Functor_Compose_newtypeCompose
$Data_Functor_Compose_newtypeCompose = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Functor_Compose_functorCompose
$Data_Functor_Compose_functorCompose = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Compose_Compose) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Compose_Compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Compose_Compose, $map) {
  $__fn = function($dictFunctor1) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Compose_Compose, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)($dictFunctor1);
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Functor_Compose_Compose, $map, $map1) {
  $__body = function($f, $v) use (&$Data_Functor_Compose_Compose, $map, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($Data_Functor_Compose_Compose)(($map)(($map1)($f1), $fga));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Functor_Compose_Compose, $map, $map1, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Compose_eqCompose
$Data_Functor_Compose_eqCompose = (function() use (&$Data_Eq_eq1, &$Data_Functor_App_eqApp, &$Data_Eq_Eq__dollar__Dict, &$Data_Functor_App_hoistLiftApp) {
  $__fn = function($dictEq1) use (&$Data_Eq_eq1, &$Data_Functor_App_eqApp, &$Data_Eq_Eq__dollar__Dict, &$Data_Functor_App_hoistLiftApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1 = ($Data_Eq_eq1)($dictEq1);
    $__res = (function() use (&$Data_Functor_App_eqApp, $eq1, &$Data_Eq_Eq__dollar__Dict, &$Data_Functor_App_hoistLiftApp) {
  $__fn = function($dictEq11) use (&$Data_Functor_App_eqApp, $eq1, &$Data_Eq_Eq__dollar__Dict, &$Data_Functor_App_hoistLiftApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eqApp = ($Data_Functor_App_eqApp)($dictEq11);
    $__res = (function() use ($eq1, $eqApp, &$Data_Eq_Eq__dollar__Dict, &$Data_Functor_App_hoistLiftApp) {
  $__fn = function($dictEq) use ($eq1, $eqApp, &$Data_Eq_Eq__dollar__Dict, &$Data_Functor_App_hoistLiftApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq11 = ($eq1)(($eqApp)($dictEq));
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use ($eq11, &$Data_Functor_App_hoistLiftApp) {
  $__body = function($v, $v1) use ($eq11, &$Data_Functor_App_hoistLiftApp) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$fga1 = $__case_0;
$fga2 = $__case_1;
return ($eq11)(($Data_Functor_App_hoistLiftApp)($fga1), ($Data_Functor_App_hoistLiftApp)($fga2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($eq11, &$Data_Functor_App_hoistLiftApp, $__body, &$__fn) {
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

// Data_Functor_Compose_ordCompose
$Data_Functor_Compose_ordCompose = (function() use (&$Data_Ord_compare1, &$Data_Functor_Compose_eqCompose, &$Prim_undefined, &$Data_Functor_App_ordApp, &$Data_Ord_Ord__dollar__Dict, &$Data_Functor_App_hoistLiftApp) {
  $__fn = function($dictOrd1) use (&$Data_Ord_compare1, &$Data_Functor_Compose_eqCompose, &$Prim_undefined, &$Data_Functor_App_ordApp, &$Data_Ord_Ord__dollar__Dict, &$Data_Functor_App_hoistLiftApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare1 = ($Data_Ord_compare1)($dictOrd1);
$eqCompose1 = ($Data_Functor_Compose_eqCompose)((($dictOrd1)->Eq10)($Prim_undefined));
    $__res = (function() use (&$Data_Functor_App_ordApp, $eqCompose1, &$Prim_undefined, $compare1, &$Data_Ord_Ord__dollar__Dict, &$Data_Functor_App_hoistLiftApp) {
  $__fn = function($dictOrd11) use (&$Data_Functor_App_ordApp, $eqCompose1, &$Prim_undefined, $compare1, &$Data_Ord_Ord__dollar__Dict, &$Data_Functor_App_hoistLiftApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ordApp = ($Data_Functor_App_ordApp)($dictOrd11);
$eqCompose2 = ($eqCompose1)((($dictOrd11)->Eq10)($Prim_undefined));
    $__res = (function() use ($compare1, $ordApp, $eqCompose2, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Functor_App_hoistLiftApp) {
  $__fn = function($dictOrd) use ($compare1, $ordApp, $eqCompose2, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Functor_App_hoistLiftApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare11 = ($compare1)(($ordApp)($dictOrd));
$eqCompose3 = ($eqCompose2)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use ($compare11, &$Data_Functor_App_hoistLiftApp) {
  $__body = function($v, $v1) use ($compare11, &$Data_Functor_App_hoistLiftApp) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$fga1 = $__case_0;
$fga2 = $__case_1;
return ($compare11)(($Data_Functor_App_hoistLiftApp)($fga1), ($Data_Functor_App_hoistLiftApp)($fga2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($compare11, &$Data_Functor_App_hoistLiftApp, $__body, &$__fn) {
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
})(), "Eq0" => (function() use ($eqCompose3) {
  $__fn = function($__dollar____unused) use ($eqCompose3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqCompose3;
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

// Data_Functor_Compose_eq1Compose
$Data_Functor_Compose_eq1Compose = (function() use (&$Data_Functor_Compose_eqCompose, &$Data_Eq_Eq1__dollar__Dict, &$Data_Eq_eq) {
  $__fn = function($dictEq1) use (&$Data_Functor_Compose_eqCompose, &$Data_Eq_Eq1__dollar__Dict, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eqCompose1 = ($Data_Functor_Compose_eqCompose)($dictEq1);
    $__res = (function() use ($eqCompose1, &$Data_Eq_Eq1__dollar__Dict, &$Data_Eq_eq) {
  $__fn = function($dictEq11) use ($eqCompose1, &$Data_Eq_Eq1__dollar__Dict, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eqCompose2 = ($eqCompose1)($dictEq11);
    $__res = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use (&$Data_Eq_eq, $eqCompose2) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, $eqCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_eq)(($eqCompose2)($dictEq));
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

// Data_Functor_Compose_ord1Compose
$Data_Functor_Compose_ord1Compose = (function() use (&$Data_Functor_Compose_ordCompose, &$Data_Functor_Compose_eq1Compose, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, &$Data_Ord_compare) {
  $__fn = function($dictOrd1) use (&$Data_Functor_Compose_ordCompose, &$Data_Functor_Compose_eq1Compose, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, &$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ordCompose1 = ($Data_Functor_Compose_ordCompose)($dictOrd1);
$eq1Compose1 = ($Data_Functor_Compose_eq1Compose)((($dictOrd1)->Eq10)($Prim_undefined));
    $__res = (function() use ($ordCompose1, $eq1Compose1, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, &$Data_Ord_compare) {
  $__fn = function($dictOrd11) use ($ordCompose1, $eq1Compose1, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, &$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ordCompose2 = ($ordCompose1)($dictOrd11);
$eq1Compose2 = ($eq1Compose1)((($dictOrd11)->Eq10)($Prim_undefined));
    $__res = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use (&$Data_Ord_compare, $ordCompose2) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, $ordCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Ord_compare)(($ordCompose2)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1Compose2) {
  $__fn = function($__dollar____unused) use ($eq1Compose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eq1Compose2;
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

// Data_Functor_Compose_bihoistCompose
$Data_Functor_Compose_bihoistCompose = (function() use (&$Data_Functor_map, &$Data_Functor_Compose_Compose) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Compose_Compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Data_Functor_Compose_Compose, $map) {
  $__body = function($natF, $natG, $v) use (&$Data_Functor_Compose_Compose, $map) {
    $__case_0 = $natF;
    $__case_1 = $natG;
    $__case_2 = $v;
    if (true) {
$natF1 = $__case_0;
$natG1 = $__case_1;
$fga = $__case_2;
return ($Data_Functor_Compose_Compose)(($natF1)(($map)($natG1, $fga)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($natF, $natG = null, $v = null) use (&$Data_Functor_Compose_Compose, $map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($natF, $natG, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($natF, $natG, $v);
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

// Data_Functor_Compose_applyCompose
$Data_Functor_Compose_applyCompose = (function() use (&$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, &$Data_Functor_Compose_functorCompose, &$Control_Apply_Apply__dollar__Dict, &$Data_Functor_Compose_Compose) {
  $__fn = function($dictApply) use (&$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, &$Data_Functor_Compose_functorCompose, &$Control_Apply_Apply__dollar__Dict, &$Data_Functor_Compose_Compose, &$__fn) {
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
$functorCompose1 = ($Data_Functor_Compose_functorCompose)($Functor0);
    $__res = (function() use (&$Control_Apply_apply, $functorCompose1, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Data_Functor_Compose_Compose, $apply, $map) {
  $__fn = function($dictApply1) use (&$Control_Apply_apply, $functorCompose1, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Data_Functor_Compose_Compose, $apply, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$apply1 = ($Control_Apply_apply)($dictApply1);
$functorCompose2 = ($functorCompose1)((($dictApply1)->Functor0)($Prim_undefined));
    $__res = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Functor_Compose_Compose, $apply, $map, $apply1) {
  $__body = function($v, $v1) use (&$Data_Functor_Compose_Compose, $apply, $map, $apply1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$x = $__case_1;
return ($Data_Functor_Compose_Compose)(($apply)(($map)($apply1, $f), $x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Functor_Compose_Compose, $apply, $map, $apply1, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorCompose2) {
  $__fn = function($__dollar____unused) use ($functorCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorCompose2;
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

// Data_Functor_Compose_applicativeCompose
$Data_Functor_Compose_applicativeCompose = (function() use (&$Control_Applicative_pure, &$Data_Functor_Compose_applyCompose, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Functor_Compose_compose, &$Data_Functor_Compose_Compose) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Data_Functor_Compose_applyCompose, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Functor_Compose_compose, &$Data_Functor_Compose_Compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
$applyCompose1 = ($Data_Functor_Compose_applyCompose)((($dictApplicative)->Apply0)($Prim_undefined));
    $__res = (function() use ($applyCompose1, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Functor_Compose_compose, &$Data_Functor_Compose_Compose, $pure, &$Control_Applicative_pure) {
  $__fn = function($dictApplicative1) use ($applyCompose1, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Functor_Compose_compose, &$Data_Functor_Compose_Compose, $pure, &$Control_Applicative_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applyCompose2 = ($applyCompose1)((($dictApplicative1)->Apply0)($Prim_undefined));
    $__res = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => ($Data_Functor_Compose_compose)($Data_Functor_Compose_Compose, ($Data_Functor_Compose_compose)($pure, ($Control_Applicative_pure)($dictApplicative1))), "Apply0" => (function() use ($applyCompose2) {
  $__fn = function($__dollar____unused) use ($applyCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyCompose2;
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

// Data_Functor_Compose_altCompose
$Data_Functor_Compose_altCompose = (function() use (&$Control_Alt_alt, &$Data_Functor_Compose_functorCompose, &$Prim_undefined, &$Control_Alt_Alt__dollar__Dict, &$Data_Functor_Compose_Compose) {
  $__fn = function($dictAlt) use (&$Control_Alt_alt, &$Data_Functor_Compose_functorCompose, &$Prim_undefined, &$Control_Alt_Alt__dollar__Dict, &$Data_Functor_Compose_Compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$alt = ($Control_Alt_alt)($dictAlt);
$functorCompose1 = ($Data_Functor_Compose_functorCompose)((($dictAlt)->Functor0)($Prim_undefined));
    $__res = (function() use ($functorCompose1, &$Control_Alt_Alt__dollar__Dict, &$Data_Functor_Compose_Compose, $alt) {
  $__fn = function($dictFunctor) use ($functorCompose1, &$Control_Alt_Alt__dollar__Dict, &$Data_Functor_Compose_Compose, $alt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$functorCompose2 = ($functorCompose1)($dictFunctor);
    $__res = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => (function() use (&$Data_Functor_Compose_Compose, $alt) {
  $__body = function($v, $v1) use (&$Data_Functor_Compose_Compose, $alt) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($Data_Functor_Compose_Compose)(($alt)($a, $b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Functor_Compose_Compose, $alt, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorCompose2) {
  $__fn = function($__dollar____unused) use ($functorCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorCompose2;
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

// Data_Functor_Compose_plusCompose
$Data_Functor_Compose_plusCompose = (function() use (&$Control_Plus_empty, &$Data_Functor_Compose_altCompose, &$Prim_undefined, &$Control_Plus_Plus__dollar__Dict, &$Data_Functor_Compose_Compose) {
  $__fn = function($dictPlus) use (&$Control_Plus_empty, &$Data_Functor_Compose_altCompose, &$Prim_undefined, &$Control_Plus_Plus__dollar__Dict, &$Data_Functor_Compose_Compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$empty = ($Control_Plus_empty)($dictPlus);
$altCompose1 = ($Data_Functor_Compose_altCompose)((($dictPlus)->Alt0)($Prim_undefined));
    $__res = (function() use ($altCompose1, &$Control_Plus_Plus__dollar__Dict, &$Data_Functor_Compose_Compose, $empty) {
  $__fn = function($dictFunctor) use ($altCompose1, &$Control_Plus_Plus__dollar__Dict, &$Data_Functor_Compose_Compose, $empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$altCompose2 = ($altCompose1)($dictFunctor);
    $__res = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => ($Data_Functor_Compose_Compose)($empty), "Alt0" => (function() use ($altCompose2) {
  $__fn = function($__dollar____unused) use ($altCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $altCompose2;
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

// Data_Functor_Compose_alternativeCompose
$Data_Functor_Compose_alternativeCompose = (function() use (&$Data_Functor_Compose_applicativeCompose, &$Prim_undefined, &$Data_Functor_Compose_plusCompose, &$Control_Alternative_Alternative__dollar__Dict) {
  $__fn = function($dictAlternative) use (&$Data_Functor_Compose_applicativeCompose, &$Prim_undefined, &$Data_Functor_Compose_plusCompose, &$Control_Alternative_Alternative__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeCompose1 = ($Data_Functor_Compose_applicativeCompose)((($dictAlternative)->Applicative0)($Prim_undefined));
$plusCompose1 = ($Data_Functor_Compose_plusCompose)((($dictAlternative)->Plus1)($Prim_undefined));
    $__res = (function() use ($applicativeCompose1, $plusCompose1, &$Prim_undefined, &$Control_Alternative_Alternative__dollar__Dict) {
  $__fn = function($dictApplicative) use ($applicativeCompose1, $plusCompose1, &$Prim_undefined, &$Control_Alternative_Alternative__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeCompose2 = ($applicativeCompose1)($dictApplicative);
$plusCompose2 = ($plusCompose1)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeCompose2) {
  $__fn = function($__dollar____unused) use ($applicativeCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeCompose2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusCompose2) {
  $__fn = function($__dollar____unused) use ($plusCompose2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $plusCompose2;
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

