<?php

namespace Data\Bitraversable;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Bifoldable/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Bitraversable/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Clown/index.php';
require_once __DIR__ . '/../Data.Functor.Flip/index.php';
require_once __DIR__ . '/../Data.Functor.Joker/index.php';
require_once __DIR__ . '/../Data.Functor.Product2/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Bitraversable_identity
$Data_Bitraversable_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Bitraversable_Bitraversable$Dict
$Data_Bitraversable_Bitraversable__dollar__Dict = (function() {
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

// Data_Bitraversable_bitraverse
$Data_Bitraversable_bitraverse = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bitraverse;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($dict);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($dict);
  };
  return $__fn;
})();

// Data_Bitraversable_lfor
$Data_Bitraversable_lfor = (function() use (&$Data_Bitraversable_bitraverse, &$Control_Applicative_pure) {
  $__fn = function($dictBitraversable) use (&$Data_Bitraversable_bitraverse, &$Control_Applicative_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bitraverse1 = ($Data_Bitraversable_bitraverse)($dictBitraversable);
    $__res = (function() use ($bitraverse1, &$Control_Applicative_pure) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$Control_Applicative_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bitraverse2 = ($bitraverse1)($dictApplicative);
$pure = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use ($bitraverse2, $pure) {
  $__fn = function($t, $f = null) use ($bitraverse2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bitraverse2)($f, $pure, $t);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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

// Data_Bitraversable_ltraverse
$Data_Bitraversable_ltraverse = (function() use (&$Data_Bitraversable_bitraverse, &$Control_Applicative_pure) {
  $__fn = function($dictBitraversable) use (&$Data_Bitraversable_bitraverse, &$Control_Applicative_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bitraverse1 = ($Data_Bitraversable_bitraverse)($dictBitraversable);
    $__res = (function() use ($bitraverse1, &$Control_Applicative_pure) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$Control_Applicative_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bitraverse2 = ($bitraverse1)($dictApplicative);
$pure = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use ($bitraverse2, $pure) {
  $__fn = function($f) use ($bitraverse2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bitraverse2)($f, $pure);
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

// Data_Bitraversable_rfor
$Data_Bitraversable_rfor = (function() use (&$Data_Bitraversable_bitraverse, &$Control_Applicative_pure) {
  $__fn = function($dictBitraversable) use (&$Data_Bitraversable_bitraverse, &$Control_Applicative_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bitraverse1 = ($Data_Bitraversable_bitraverse)($dictBitraversable);
    $__res = (function() use ($bitraverse1, &$Control_Applicative_pure) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$Control_Applicative_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bitraverse2 = ($bitraverse1)($dictApplicative);
$pure = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use ($bitraverse2, $pure) {
  $__fn = function($t, $f = null) use ($bitraverse2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bitraverse2)($pure, $f, $t);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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

// Data_Bitraversable_rtraverse
$Data_Bitraversable_rtraverse = (function() use (&$Data_Bitraversable_bitraverse, &$Control_Applicative_pure) {
  $__fn = function($dictBitraversable) use (&$Data_Bitraversable_bitraverse, &$Control_Applicative_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bitraverse1 = ($Data_Bitraversable_bitraverse)($dictBitraversable);
    $__res = (function() use ($bitraverse1, &$Control_Applicative_pure) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$Control_Applicative_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bitraverse1)($dictApplicative, ($Control_Applicative_pure)($dictApplicative));
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

// Data_Bitraversable_bitraversableTuple
$Data_Bitraversable_bitraversableTuple = ($Data_Bitraversable_Bitraversable__dollar__Dict)((object)["bitraverse" => (function() use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Data_Tuple_Tuple) {
  $__fn = function($dictApplicative) use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Apply0 = (($dictApplicative)->Apply0)($Prim_undefined);
$apply = ($Control_Apply_apply)($Apply0);
$map = ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined));
    $__res = (function() use ($apply, $map, &$Data_Tuple_Tuple) {
  $__body = function($f, $g, $v) use ($apply, $map, &$Data_Tuple_Tuple) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$g1 = $__case_1;
$a = ($__case_2)->values[0];
$b = ($__case_2)->values[1];
return ($apply)(($map)($Data_Tuple_Tuple, ($f1)($a)), ($g1)($b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $g = null, $v = null) use ($apply, $map, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "bisequence" => (function() use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Data_Tuple_Tuple) {
  $__fn = function($dictApplicative) use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Apply0 = (($dictApplicative)->Apply0)($Prim_undefined);
$apply = ($Control_Apply_apply)($Apply0);
$map = ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined));
    $__res = (function() use ($apply, $map, &$Data_Tuple_Tuple) {
  $__body = function($v) use ($apply, $map, &$Data_Tuple_Tuple) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($apply)(($map)($Data_Tuple_Tuple, $a), $b);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($apply, $map, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
})(), "Bifunctor0" => (function() use (&$Data_Bifunctor_bifunctorTuple) {
  $__fn = function($__dollar____unused) use (&$Data_Bifunctor_bifunctorTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Bifunctor_bifunctorTuple;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() use (&$Data_Bifoldable_bifoldableTuple) {
  $__fn = function($__dollar____unused) use (&$Data_Bifoldable_bifoldableTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Bifoldable_bifoldableTuple;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Bitraversable_bitraversableJoker
$Data_Bitraversable_bitraversableJoker = (function() use (&$Data_Traversable_traverse, &$Data_Traversable_sequence, &$Data_Functor_Joker_bifunctorJoker, &$Prim_undefined, &$Data_Bifoldable_bifoldableJoker, &$Data_Bitraversable_Bitraversable__dollar__Dict, &$Data_Functor_map, &$Data_Functor_Joker_Joker) {
  $__fn = function($dictTraversable) use (&$Data_Traversable_traverse, &$Data_Traversable_sequence, &$Data_Functor_Joker_bifunctorJoker, &$Prim_undefined, &$Data_Bifoldable_bifoldableJoker, &$Data_Bitraversable_Bitraversable__dollar__Dict, &$Data_Functor_map, &$Data_Functor_Joker_Joker, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse = ($Data_Traversable_traverse)($dictTraversable);
$sequence = ($Data_Traversable_sequence)($dictTraversable);
$bifunctorJoker = ($Data_Functor_Joker_bifunctorJoker)((($dictTraversable)->Functor0)($Prim_undefined));
$bifoldableJoker = ($Data_Bifoldable_bifoldableJoker)((($dictTraversable)->Foldable1)($Prim_undefined));
    $__res = ($Data_Bitraversable_Bitraversable__dollar__Dict)((object)["bitraverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, $traverse, &$Data_Functor_Joker_Joker) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, $traverse, &$Data_Functor_Joker_Joker, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$traverse1 = ($traverse)($dictApplicative);
    $__res = (function() use ($map, &$Data_Functor_Joker_Joker, $traverse1) {
  $__body = function($v, $r, $v1) use ($map, &$Data_Functor_Joker_Joker, $traverse1) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $v1;
    if (true) {
$r1 = $__case_1;
$f = $__case_2;
return ($map)($Data_Functor_Joker_Joker, ($traverse1)($r1, $f));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $r = null, $v1 = null) use ($map, &$Data_Functor_Joker_Joker, $traverse1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $r, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $r, $v1);
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
})(), "bisequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, $sequence, &$Data_Functor_Joker_Joker) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, $sequence, &$Data_Functor_Joker_Joker, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$sequence1 = ($sequence)($dictApplicative);
    $__res = (function() use ($map, &$Data_Functor_Joker_Joker, $sequence1) {
  $__body = function($v) use ($map, &$Data_Functor_Joker_Joker, $sequence1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($map)($Data_Functor_Joker_Joker, ($sequence1)($f));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map, &$Data_Functor_Joker_Joker, $sequence1, $__body, &$__fn) {
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
})(), "Bifunctor0" => (function() use ($bifunctorJoker) {
  $__fn = function($__dollar____unused) use ($bifunctorJoker, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bifunctorJoker;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() use ($bifoldableJoker) {
  $__fn = function($__dollar____unused) use ($bifoldableJoker, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bifoldableJoker;
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

// Data_Bitraversable_bitraversableEither
$Data_Bitraversable_bitraversableEither = ($Data_Bitraversable_Bitraversable__dollar__Dict)((object)["bitraverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Either_Left, &$Data_Either_Right) {
  $__body = function($v, $v1, $v2) use ($map, &$Data_Either_Left, &$Data_Either_Right) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Left")) {
$f = $__case_0;
$a = ($__case_2)->values[0];
return ($map)($Data_Either_Left, ($f)($a));
} else {
;
};
    if ((($__case_2)->tag === "Right")) {
$g = $__case_1;
$b = ($__case_2)->values[0];
return ($map)($Data_Either_Right, ($g)($b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($map, &$Data_Either_Left, &$Data_Either_Right, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $v1, $v2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $v1, $v2);
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
})(), "bisequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Either_Left, &$Data_Either_Right) {
  $__body = function($v) use ($map, &$Data_Either_Left, &$Data_Either_Right) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Left")) {
$a = ($__case_0)->values[0];
return ($map)($Data_Either_Left, $a);
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$b = ($__case_0)->values[0];
return ($map)($Data_Either_Right, $b);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map, &$Data_Either_Left, &$Data_Either_Right, $__body, &$__fn) {
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
})(), "Bifunctor0" => (function() use (&$Data_Bifunctor_bifunctorEither) {
  $__fn = function($__dollar____unused) use (&$Data_Bifunctor_bifunctorEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Bifunctor_bifunctorEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() use (&$Data_Bifoldable_bifoldableEither) {
  $__fn = function($__dollar____unused) use (&$Data_Bifoldable_bifoldableEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Bifoldable_bifoldableEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Bitraversable_bitraversableConst
$Data_Bitraversable_bitraversableConst = ($Data_Bitraversable_Bitraversable__dollar__Dict)((object)["bitraverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Const_Const) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Const_Const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Const_Const) {
  $__body = function($f, $v, $v1) use ($map, &$Data_Const_Const) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$a = $__case_2;
return ($map)($Data_Const_Const, ($f1)($a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $v1 = null) use ($map, &$Data_Const_Const, $__body, &$__fn) {
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "bisequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Const_Const) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Const_Const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Const_Const) {
  $__body = function($v) use ($map, &$Data_Const_Const) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($map)($Data_Const_Const, $a);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map, &$Data_Const_Const, $__body, &$__fn) {
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
})(), "Bifunctor0" => (function() use (&$Data_Bifunctor_bifunctorConst) {
  $__fn = function($__dollar____unused) use (&$Data_Bifunctor_bifunctorConst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Bifunctor_bifunctorConst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() use (&$Data_Bifoldable_bifoldableConst) {
  $__fn = function($__dollar____unused) use (&$Data_Bifoldable_bifoldableConst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Bifoldable_bifoldableConst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Bitraversable_bitraversableClown
$Data_Bitraversable_bitraversableClown = (function() use (&$Data_Traversable_traverse, &$Data_Traversable_sequence, &$Data_Functor_Clown_bifunctorClown, &$Prim_undefined, &$Data_Bifoldable_bifoldableClown, &$Data_Bitraversable_Bitraversable__dollar__Dict, &$Data_Functor_map, &$Data_Functor_Clown_Clown) {
  $__fn = function($dictTraversable) use (&$Data_Traversable_traverse, &$Data_Traversable_sequence, &$Data_Functor_Clown_bifunctorClown, &$Prim_undefined, &$Data_Bifoldable_bifoldableClown, &$Data_Bitraversable_Bitraversable__dollar__Dict, &$Data_Functor_map, &$Data_Functor_Clown_Clown, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse = ($Data_Traversable_traverse)($dictTraversable);
$sequence = ($Data_Traversable_sequence)($dictTraversable);
$bifunctorClown = ($Data_Functor_Clown_bifunctorClown)((($dictTraversable)->Functor0)($Prim_undefined));
$bifoldableClown = ($Data_Bifoldable_bifoldableClown)((($dictTraversable)->Foldable1)($Prim_undefined));
    $__res = ($Data_Bitraversable_Bitraversable__dollar__Dict)((object)["bitraverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, $traverse, &$Data_Functor_Clown_Clown) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, $traverse, &$Data_Functor_Clown_Clown, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$traverse1 = ($traverse)($dictApplicative);
    $__res = (function() use ($map, &$Data_Functor_Clown_Clown, $traverse1) {
  $__body = function($l, $v, $v1) use ($map, &$Data_Functor_Clown_Clown, $traverse1) {
    $__case_0 = $l;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$l1 = $__case_0;
$f = $__case_2;
return ($map)($Data_Functor_Clown_Clown, ($traverse1)($l1, $f));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($l, $v = null, $v1 = null) use ($map, &$Data_Functor_Clown_Clown, $traverse1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($l, $v, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($l, $v, $v1);
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
})(), "bisequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, $sequence, &$Data_Functor_Clown_Clown) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, $sequence, &$Data_Functor_Clown_Clown, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$sequence1 = ($sequence)($dictApplicative);
    $__res = (function() use ($map, &$Data_Functor_Clown_Clown, $sequence1) {
  $__body = function($v) use ($map, &$Data_Functor_Clown_Clown, $sequence1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($map)($Data_Functor_Clown_Clown, ($sequence1)($f));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map, &$Data_Functor_Clown_Clown, $sequence1, $__body, &$__fn) {
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
})(), "Bifunctor0" => (function() use ($bifunctorClown) {
  $__fn = function($__dollar____unused) use ($bifunctorClown, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bifunctorClown;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() use ($bifoldableClown) {
  $__fn = function($__dollar____unused) use ($bifoldableClown, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bifoldableClown;
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

// Data_Bitraversable_bisequenceDefault
$Data_Bitraversable_bisequenceDefault = (function() use (&$Data_Bitraversable_bitraverse, &$Data_Bitraversable_identity) {
  $__fn = function($dictBitraversable) use (&$Data_Bitraversable_bitraverse, &$Data_Bitraversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bitraverse1 = ($Data_Bitraversable_bitraverse)($dictBitraversable);
    $__res = (function() use ($bitraverse1, &$Data_Bitraversable_identity) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$Data_Bitraversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bitraverse1)($dictApplicative, $Data_Bitraversable_identity, $Data_Bitraversable_identity);
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

// Data_Bitraversable_bisequence
$Data_Bitraversable_bisequence = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bisequence;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($dict);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($dict);
  };
  return $__fn;
})();

// Data_Bitraversable_bitraversableFlip
$Data_Bitraversable_bitraversableFlip = (function() use (&$Data_Bitraversable_bitraverse, &$Data_Bitraversable_bisequence, &$Data_Functor_Flip_bifunctorFlip, &$Prim_undefined, &$Data_Bifoldable_bifoldableFlip, &$Data_Bitraversable_Bitraversable__dollar__Dict, &$Data_Functor_map, &$Data_Functor_Flip_Flip) {
  $__fn = function($dictBitraversable) use (&$Data_Bitraversable_bitraverse, &$Data_Bitraversable_bisequence, &$Data_Functor_Flip_bifunctorFlip, &$Prim_undefined, &$Data_Bifoldable_bifoldableFlip, &$Data_Bitraversable_Bitraversable__dollar__Dict, &$Data_Functor_map, &$Data_Functor_Flip_Flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bitraverse1 = ($Data_Bitraversable_bitraverse)($dictBitraversable);
$bisequence1 = ($Data_Bitraversable_bisequence)($dictBitraversable);
$bifunctorFlip = ($Data_Functor_Flip_bifunctorFlip)((($dictBitraversable)->Bifunctor0)($Prim_undefined));
$bifoldableFlip = ($Data_Bifoldable_bifoldableFlip)((($dictBitraversable)->Bifoldable1)($Prim_undefined));
    $__res = ($Data_Bitraversable_Bitraversable__dollar__Dict)((object)["bitraverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, $bitraverse1, &$Data_Functor_Flip_Flip) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, $bitraverse1, &$Data_Functor_Flip_Flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$bitraverse2 = ($bitraverse1)($dictApplicative);
    $__res = (function() use ($map, &$Data_Functor_Flip_Flip, $bitraverse2) {
  $__body = function($r, $l, $v) use ($map, &$Data_Functor_Flip_Flip, $bitraverse2) {
    $__case_0 = $r;
    $__case_1 = $l;
    $__case_2 = $v;
    if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$p = $__case_2;
return ($map)($Data_Functor_Flip_Flip, ($bitraverse2)($l1, $r1, $p));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($r, $l = null, $v = null) use ($map, &$Data_Functor_Flip_Flip, $bitraverse2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($r, $l, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($r, $l, $v);
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
})(), "bisequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, $bisequence1, &$Data_Functor_Flip_Flip) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, $bisequence1, &$Data_Functor_Flip_Flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$bisequence2 = ($bisequence1)($dictApplicative);
    $__res = (function() use ($map, &$Data_Functor_Flip_Flip, $bisequence2) {
  $__body = function($v) use ($map, &$Data_Functor_Flip_Flip, $bisequence2) {
    $__case_0 = $v;
    if (true) {
$p = $__case_0;
return ($map)($Data_Functor_Flip_Flip, ($bisequence2)($p));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map, &$Data_Functor_Flip_Flip, $bisequence2, $__body, &$__fn) {
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
})(), "Bifunctor0" => (function() use ($bifunctorFlip) {
  $__fn = function($__dollar____unused) use ($bifunctorFlip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bifunctorFlip;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() use ($bifoldableFlip) {
  $__fn = function($__dollar____unused) use ($bifoldableFlip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bifoldableFlip;
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

// Data_Bitraversable_bitraversableProduct2
$Data_Bitraversable_bitraversableProduct2 = (function() use (&$Data_Bitraversable_bitraverse, &$Data_Bitraversable_bisequence, &$Data_Functor_Product2_bifunctorProduct2, &$Prim_undefined, &$Data_Bifoldable_bifoldableProduct2, &$Data_Bitraversable_Bitraversable__dollar__Dict, &$Control_Apply_apply, &$Data_Functor_map, &$Data_Functor_Product2_Product2) {
  $__fn = function($dictBitraversable) use (&$Data_Bitraversable_bitraverse, &$Data_Bitraversable_bisequence, &$Data_Functor_Product2_bifunctorProduct2, &$Prim_undefined, &$Data_Bifoldable_bifoldableProduct2, &$Data_Bitraversable_Bitraversable__dollar__Dict, &$Control_Apply_apply, &$Data_Functor_map, &$Data_Functor_Product2_Product2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bitraverse1 = ($Data_Bitraversable_bitraverse)($dictBitraversable);
$bisequence1 = ($Data_Bitraversable_bisequence)($dictBitraversable);
$bifunctorProduct2 = ($Data_Functor_Product2_bifunctorProduct2)((($dictBitraversable)->Bifunctor0)($Prim_undefined));
$bifoldableProduct2 = ($Data_Bifoldable_bifoldableProduct2)((($dictBitraversable)->Bifoldable1)($Prim_undefined));
    $__res = (function() use (&$Data_Bitraversable_bitraverse, &$Data_Bitraversable_bisequence, $bifunctorProduct2, &$Prim_undefined, $bifoldableProduct2, &$Data_Bitraversable_Bitraversable__dollar__Dict, &$Control_Apply_apply, &$Data_Functor_map, $bitraverse1, &$Data_Functor_Product2_Product2, $bisequence1) {
  $__fn = function($dictBitraversable1) use (&$Data_Bitraversable_bitraverse, &$Data_Bitraversable_bisequence, $bifunctorProduct2, &$Prim_undefined, $bifoldableProduct2, &$Data_Bitraversable_Bitraversable__dollar__Dict, &$Control_Apply_apply, &$Data_Functor_map, $bitraverse1, &$Data_Functor_Product2_Product2, $bisequence1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bitraverse2 = ($Data_Bitraversable_bitraverse)($dictBitraversable1);
$bisequence2 = ($Data_Bitraversable_bisequence)($dictBitraversable1);
$bifunctorProduct21 = ($bifunctorProduct2)((($dictBitraversable1)->Bifunctor0)($Prim_undefined));
$bifoldableProduct21 = ($bifoldableProduct2)((($dictBitraversable1)->Bifoldable1)($Prim_undefined));
    $__res = ($Data_Bitraversable_Bitraversable__dollar__Dict)((object)["bitraverse" => (function() use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, $bitraverse1, $bitraverse2, &$Data_Functor_Product2_Product2) {
  $__fn = function($dictApplicative) use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, $bitraverse1, $bitraverse2, &$Data_Functor_Product2_Product2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Apply0 = (($dictApplicative)->Apply0)($Prim_undefined);
$apply = ($Control_Apply_apply)($Apply0);
$map = ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined));
$bitraverse3 = ($bitraverse1)($dictApplicative);
$bitraverse4 = ($bitraverse2)($dictApplicative);
    $__res = (function() use ($apply, $map, &$Data_Functor_Product2_Product2, $bitraverse3, $bitraverse4) {
  $__body = function($l, $r, $v) use ($apply, $map, &$Data_Functor_Product2_Product2, $bitraverse3, $bitraverse4) {
    $__case_0 = $l;
    $__case_1 = $r;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Product2")) {
$l1 = $__case_0;
$r1 = $__case_1;
$f = ($__case_2)->values[0];
$g = ($__case_2)->values[1];
return ($apply)(($map)($Data_Functor_Product2_Product2, ($bitraverse3)($l1, $r1, $f)), ($bitraverse4)($l1, $r1, $g));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($l, $r = null, $v = null) use ($apply, $map, &$Data_Functor_Product2_Product2, $bitraverse3, $bitraverse4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($l, $r, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($l, $r, $v);
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
})(), "bisequence" => (function() use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, $bisequence1, $bisequence2, &$Data_Functor_Product2_Product2) {
  $__fn = function($dictApplicative) use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, $bisequence1, $bisequence2, &$Data_Functor_Product2_Product2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Apply0 = (($dictApplicative)->Apply0)($Prim_undefined);
$apply = ($Control_Apply_apply)($Apply0);
$map = ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined));
$bisequence3 = ($bisequence1)($dictApplicative);
$bisequence4 = ($bisequence2)($dictApplicative);
    $__res = (function() use ($apply, $map, &$Data_Functor_Product2_Product2, $bisequence3, $bisequence4) {
  $__body = function($v) use ($apply, $map, &$Data_Functor_Product2_Product2, $bisequence3, $bisequence4) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Product2")) {
$f = ($__case_0)->values[0];
$g = ($__case_0)->values[1];
return ($apply)(($map)($Data_Functor_Product2_Product2, ($bisequence3)($f)), ($bisequence4)($g));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($apply, $map, &$Data_Functor_Product2_Product2, $bisequence3, $bisequence4, $__body, &$__fn) {
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
})(), "Bifunctor0" => (function() use ($bifunctorProduct21) {
  $__fn = function($__dollar____unused) use ($bifunctorProduct21, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bifunctorProduct21;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() use ($bifoldableProduct21) {
  $__fn = function($__dollar____unused) use ($bifoldableProduct21, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bifoldableProduct21;
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

// Data_Bitraversable_bitraverseDefault
$Data_Bitraversable_bitraverseDefault = (function() use (&$Data_Bitraversable_bisequence, &$Data_Bifunctor_bimap, &$Prim_undefined) {
  $__fn = function($dictBitraversable) use (&$Data_Bitraversable_bisequence, &$Data_Bifunctor_bimap, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bisequence1 = ($Data_Bitraversable_bisequence)($dictBitraversable);
$bimap = ($Data_Bifunctor_bimap)((($dictBitraversable)->Bifunctor0)($Prim_undefined));
    $__res = (function() use ($bisequence1, $bimap) {
  $__fn = function($dictApplicative) use ($bisequence1, $bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bisequence2 = ($bisequence1)($dictApplicative);
    $__res = (function() use ($bisequence2, $bimap) {
  $__fn = function($f, $g = null, $t = null) use ($bisequence2, $bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bisequence2)(($bimap)($f, $g, $t));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
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

// Data_Bitraversable_bifor
$Data_Bitraversable_bifor = (function() use (&$Data_Bitraversable_bitraverse) {
  $__fn = function($dictBitraversable) use (&$Data_Bitraversable_bitraverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bitraverse1 = ($Data_Bitraversable_bitraverse)($dictBitraversable);
    $__res = (function() use ($bitraverse1) {
  $__fn = function($dictApplicative) use ($bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bitraverse2 = ($bitraverse1)($dictApplicative);
    $__res = (function() use ($bitraverse2) {
  $__fn = function($t, $f = null, $g = null) use ($bitraverse2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bitraverse2)($f, $g, $t);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
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

