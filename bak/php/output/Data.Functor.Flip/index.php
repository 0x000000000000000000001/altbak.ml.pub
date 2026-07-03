<?php

namespace Data\Functor\Flip;

require_once __DIR__ . '/../Control.Biapplicative/index.php';
require_once __DIR__ . '/../Control.Biapply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Contravariant/index.php';
require_once __DIR__ . '/../Data.Functor.Flip/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Functor_Flip_append
$Data_Functor_Flip_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Functor_Flip_Flip
$Data_Functor_Flip_Flip = (function() {
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

// Data_Functor_Flip_showFlip
$Data_Functor_Flip_showFlip = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Flip_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Flip_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Functor_Flip_append, $show) {
  $__body = function($v) use (&$Data_Functor_Flip_append, $show) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($Data_Functor_Flip_append)("(Flip ", ($Data_Functor_Flip_append)(($show)($x), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Functor_Flip_append, $show, $__body, &$__fn) {
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

// Data_Functor_Flip_semigroupoidFlip
$Data_Functor_Flip_semigroupoidFlip = (function() use (&$Control_Semigroupoid_compose, &$Control_Semigroupoid_Semigroupoid__dollar__Dict, &$Data_Functor_Flip_Flip) {
  $__fn = function($dictSemigroupoid) use (&$Control_Semigroupoid_compose, &$Control_Semigroupoid_Semigroupoid__dollar__Dict, &$Data_Functor_Flip_Flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compose = ($Control_Semigroupoid_compose)($dictSemigroupoid);
    $__res = ($Control_Semigroupoid_Semigroupoid__dollar__Dict)((object)["compose" => (function() use (&$Data_Functor_Flip_Flip, $compose) {
  $__body = function($v, $v1) use (&$Data_Functor_Flip_Flip, $compose) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($Data_Functor_Flip_Flip)(($compose)($b, $a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Functor_Flip_Flip, $compose, $__body, &$__fn) {
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

// Data_Functor_Flip_ordFlip
$Data_Functor_Flip_ordFlip = (function() {
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

// Data_Functor_Flip_newtypeFlip
$Data_Functor_Flip_newtypeFlip = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Functor_Flip_functorFlip
$Data_Functor_Flip_functorFlip = (function() use (&$Data_Bifunctor_lmap, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Flip_Flip) {
  $__fn = function($dictBifunctor) use (&$Data_Bifunctor_lmap, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Flip_Flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lmap = ($Data_Bifunctor_lmap)($dictBifunctor);
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Functor_Flip_Flip, $lmap) {
  $__body = function($f, $v) use (&$Data_Functor_Flip_Flip, $lmap) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$a = $__case_1;
return ($Data_Functor_Flip_Flip)(($lmap)($f1, $a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Functor_Flip_Flip, $lmap, $__body, &$__fn) {
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

// Data_Functor_Flip_eqFlip
$Data_Functor_Flip_eqFlip = (function() {
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

// Data_Functor_Flip_contravariantFlip
$Data_Functor_Flip_contravariantFlip = (function() use (&$Data_Profunctor_lcmap, &$Data_Functor_Contravariant_Contravariant__dollar__Dict, &$Data_Functor_Flip_Flip) {
  $__fn = function($dictProfunctor) use (&$Data_Profunctor_lcmap, &$Data_Functor_Contravariant_Contravariant__dollar__Dict, &$Data_Functor_Flip_Flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lcmap = ($Data_Profunctor_lcmap)($dictProfunctor);
    $__res = ($Data_Functor_Contravariant_Contravariant__dollar__Dict)((object)["cmap" => (function() use (&$Data_Functor_Flip_Flip, $lcmap) {
  $__body = function($f, $v) use (&$Data_Functor_Flip_Flip, $lcmap) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$a = $__case_1;
return ($Data_Functor_Flip_Flip)(($lcmap)($f1, $a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Functor_Flip_Flip, $lcmap, $__body, &$__fn) {
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

// Data_Functor_Flip_categoryFlip
$Data_Functor_Flip_categoryFlip = (function() use (&$Data_Functor_Flip_semigroupoidFlip, &$Prim_undefined, &$Control_Category_Category__dollar__Dict, &$Data_Functor_Flip_Flip, &$Control_Category_identity) {
  $__fn = function($dictCategory) use (&$Data_Functor_Flip_semigroupoidFlip, &$Prim_undefined, &$Control_Category_Category__dollar__Dict, &$Data_Functor_Flip_Flip, &$Control_Category_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupoidFlip1 = ($Data_Functor_Flip_semigroupoidFlip)((($dictCategory)->Semigroupoid0)($Prim_undefined));
    $__res = ($Control_Category_Category__dollar__Dict)((object)["identity" => ($Data_Functor_Flip_Flip)(($Control_Category_identity)($dictCategory)), "Semigroupoid0" => (function() use ($semigroupoidFlip1) {
  $__fn = function($__dollar____unused) use ($semigroupoidFlip1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupoidFlip1;
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

// Data_Functor_Flip_bifunctorFlip
$Data_Functor_Flip_bifunctorFlip = (function() use (&$Data_Bifunctor_bimap, &$Data_Bifunctor_Bifunctor__dollar__Dict, &$Data_Functor_Flip_Flip) {
  $__fn = function($dictBifunctor) use (&$Data_Bifunctor_bimap, &$Data_Bifunctor_Bifunctor__dollar__Dict, &$Data_Functor_Flip_Flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bimap = ($Data_Bifunctor_bimap)($dictBifunctor);
    $__res = ($Data_Bifunctor_Bifunctor__dollar__Dict)((object)["bimap" => (function() use (&$Data_Functor_Flip_Flip, $bimap) {
  $__body = function($f, $g, $v) use (&$Data_Functor_Flip_Flip, $bimap) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$a = $__case_2;
return ($Data_Functor_Flip_Flip)(($bimap)($g1, $f1, $a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $g = null, $v = null) use (&$Data_Functor_Flip_Flip, $bimap, $__body, &$__fn) {
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

// Data_Functor_Flip_biapplyFlip
$Data_Functor_Flip_biapplyFlip = (function() use (&$Control_Biapply_biapply, &$Data_Functor_Flip_bifunctorFlip, &$Prim_undefined, &$Control_Biapply_Biapply__dollar__Dict, &$Data_Functor_Flip_Flip) {
  $__fn = function($dictBiapply) use (&$Control_Biapply_biapply, &$Data_Functor_Flip_bifunctorFlip, &$Prim_undefined, &$Control_Biapply_Biapply__dollar__Dict, &$Data_Functor_Flip_Flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$biapply = ($Control_Biapply_biapply)($dictBiapply);
$bifunctorFlip1 = ($Data_Functor_Flip_bifunctorFlip)((($dictBiapply)->Bifunctor0)($Prim_undefined));
    $__res = ($Control_Biapply_Biapply__dollar__Dict)((object)["biapply" => (function() use (&$Data_Functor_Flip_Flip, $biapply) {
  $__body = function($v, $v1) use (&$Data_Functor_Flip_Flip, $biapply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$fg = $__case_0;
$xy = $__case_1;
return ($Data_Functor_Flip_Flip)(($biapply)($fg, $xy));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Functor_Flip_Flip, $biapply, $__body, &$__fn) {
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
})(), "Bifunctor0" => (function() use ($bifunctorFlip1) {
  $__fn = function($__dollar____unused) use ($bifunctorFlip1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bifunctorFlip1;
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

// Data_Functor_Flip_biapplicativeFlip
$Data_Functor_Flip_biapplicativeFlip = (function() use (&$Control_Biapplicative_bipure, &$Data_Functor_Flip_biapplyFlip, &$Prim_undefined, &$Control_Biapplicative_Biapplicative__dollar__Dict, &$Data_Functor_Flip_Flip) {
  $__fn = function($dictBiapplicative) use (&$Control_Biapplicative_bipure, &$Data_Functor_Flip_biapplyFlip, &$Prim_undefined, &$Control_Biapplicative_Biapplicative__dollar__Dict, &$Data_Functor_Flip_Flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bipure = ($Control_Biapplicative_bipure)($dictBiapplicative);
$biapplyFlip1 = ($Data_Functor_Flip_biapplyFlip)((($dictBiapplicative)->Biapply0)($Prim_undefined));
    $__res = ($Control_Biapplicative_Biapplicative__dollar__Dict)((object)["bipure" => (function() use (&$Data_Functor_Flip_Flip, $bipure) {
  $__fn = function($a, $b = null) use (&$Data_Functor_Flip_Flip, $bipure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Flip_Flip)(($bipure)($b, $a));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Biapply0" => (function() use ($biapplyFlip1) {
  $__fn = function($__dollar____unused) use ($biapplyFlip1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $biapplyFlip1;
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

