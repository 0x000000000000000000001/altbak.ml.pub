<?php

namespace Data\Bifunctor\Join;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Biapplicative/index.php';
require_once __DIR__ . '/../Control.Biapply/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Bifunctor.Join/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Bifunctor_Join_append
$Data_Bifunctor_Join_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Bifunctor_Join_Join
$Data_Bifunctor_Join_Join = (function() {
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

// Data_Bifunctor_Join_showJoin
$Data_Bifunctor_Join_showJoin = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Bifunctor_Join_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Bifunctor_Join_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Bifunctor_Join_append, $show) {
  $__body = function($v) use (&$Data_Bifunctor_Join_append, $show) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($Data_Bifunctor_Join_append)("(Join ", ($Data_Bifunctor_Join_append)(($show)($x), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Bifunctor_Join_append, $show, $__body, &$__fn) {
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

// Data_Bifunctor_Join_ordJoin
$Data_Bifunctor_Join_ordJoin = (function() {
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

// Data_Bifunctor_Join_newtypeJoin
$Data_Bifunctor_Join_newtypeJoin = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Bifunctor_Join_eqJoin
$Data_Bifunctor_Join_eqJoin = (function() {
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

// Data_Bifunctor_Join_bifunctorJoin
$Data_Bifunctor_Join_bifunctorJoin = (function() use (&$Data_Bifunctor_bimap, &$Data_Functor_Functor__dollar__Dict, &$Data_Bifunctor_Join_Join) {
  $__fn = function($dictBifunctor) use (&$Data_Bifunctor_bimap, &$Data_Functor_Functor__dollar__Dict, &$Data_Bifunctor_Join_Join, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bimap = ($Data_Bifunctor_bimap)($dictBifunctor);
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Bifunctor_Join_Join, $bimap) {
  $__body = function($f, $v) use (&$Data_Bifunctor_Join_Join, $bimap) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$a = $__case_1;
return ($Data_Bifunctor_Join_Join)(($bimap)($f1, $f1, $a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Bifunctor_Join_Join, $bimap, $__body, &$__fn) {
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

// Data_Bifunctor_Join_biapplyJoin
$Data_Bifunctor_Join_biapplyJoin = (function() use (&$Control_Biapply_biapply, &$Data_Bifunctor_Join_bifunctorJoin, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Data_Bifunctor_Join_Join) {
  $__fn = function($dictBiapply) use (&$Control_Biapply_biapply, &$Data_Bifunctor_Join_bifunctorJoin, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Data_Bifunctor_Join_Join, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$biapply = ($Control_Biapply_biapply)($dictBiapply);
$bifunctorJoin1 = ($Data_Bifunctor_Join_bifunctorJoin)((($dictBiapply)->Bifunctor0)($Prim_undefined));
    $__res = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Bifunctor_Join_Join, $biapply) {
  $__body = function($v, $v1) use (&$Data_Bifunctor_Join_Join, $biapply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$a = $__case_1;
return ($Data_Bifunctor_Join_Join)(($biapply)($f, $a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Bifunctor_Join_Join, $biapply, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($bifunctorJoin1) {
  $__fn = function($__dollar____unused) use ($bifunctorJoin1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bifunctorJoin1;
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

// Data_Bifunctor_Join_biapplicativeJoin
$Data_Bifunctor_Join_biapplicativeJoin = (function() use (&$Control_Biapplicative_bipure, &$Data_Bifunctor_Join_biapplyJoin, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Bifunctor_Join_Join) {
  $__fn = function($dictBiapplicative) use (&$Control_Biapplicative_bipure, &$Data_Bifunctor_Join_biapplyJoin, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Bifunctor_Join_Join, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bipure = ($Control_Biapplicative_bipure)($dictBiapplicative);
$biapplyJoin1 = ($Data_Bifunctor_Join_biapplyJoin)((($dictBiapplicative)->Biapply0)($Prim_undefined));
    $__res = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => (function() use (&$Data_Bifunctor_Join_Join, $bipure) {
  $__fn = function($a) use (&$Data_Bifunctor_Join_Join, $bipure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bifunctor_Join_Join)(($bipure)($a, $a));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($biapplyJoin1) {
  $__fn = function($__dollar____unused) use ($biapplyJoin1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $biapplyJoin1;
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

