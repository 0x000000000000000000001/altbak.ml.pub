<?php

namespace Control\Monad\Gen\Common;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Common/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_Gen_Common_compose
$Control_Monad_Gen_Common_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_Gen_Common_max
$Control_Monad_Gen_Common_max = ($Data_Ord_max)($Data_Ord_ordInt);

// Control_Monad_Gen_Common_sub
$Control_Monad_Gen_Common_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Control_Monad_Gen_Common_lessThan
$Control_Monad_Gen_Common_lessThan = ($Data_Ord_lessThan)($Data_Ord_ordNumber);

// Control_Monad_Gen_Common_genTuple
$Control_Monad_Gen_Common_genTuple = (function() use (&$Control_Apply_lift2, &$Data_Tuple_Tuple) {
  $__fn = function($dictApply) use (&$Control_Apply_lift2, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Apply_lift2)($dictApply, $Data_Tuple_Tuple);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_Common_genNonEmpty
$Control_Monad_Gen_Common_genNonEmpty = (function() use (&$Control_Monad_Gen_unfoldable, &$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Control_Monad_Gen_Class_resize, &$Data_NonEmpty_NonEmpty, &$Control_Monad_Gen_Common_compose, &$Control_Monad_Gen_Common_max, &$Control_Monad_Gen_Common_sub) {
  $__fn = function($dictMonadRec) use (&$Control_Monad_Gen_unfoldable, &$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Control_Monad_Gen_Class_resize, &$Data_NonEmpty_NonEmpty, &$Control_Monad_Gen_Common_compose, &$Control_Monad_Gen_Common_max, &$Control_Monad_Gen_Common_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$unfoldable = ($Control_Monad_Gen_unfoldable)($dictMonadRec);
    $__res = (function() use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Control_Monad_Gen_Class_resize, $unfoldable, &$Data_NonEmpty_NonEmpty, &$Control_Monad_Gen_Common_compose, &$Control_Monad_Gen_Common_max, &$Control_Monad_Gen_Common_sub) {
  $__fn = function($dictMonadGen) use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Control_Monad_Gen_Class_resize, $unfoldable, &$Data_NonEmpty_NonEmpty, &$Control_Monad_Gen_Common_compose, &$Control_Monad_Gen_Common_max, &$Control_Monad_Gen_Common_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Apply0 = (((((($dictMonadGen)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined))->Apply0)($Prim_undefined);
$apply = ($Control_Apply_apply)($Apply0);
$map = ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined));
$resize = ($Control_Monad_Gen_Class_resize)($dictMonadGen);
$unfoldable1 = ($unfoldable)($dictMonadGen);
    $__res = (function() use ($unfoldable1, $apply, $map, &$Data_NonEmpty_NonEmpty, $resize, &$Control_Monad_Gen_Common_compose, &$Control_Monad_Gen_Common_max, &$Control_Monad_Gen_Common_sub) {
  $__fn = function($dictUnfoldable) use ($unfoldable1, $apply, $map, &$Data_NonEmpty_NonEmpty, $resize, &$Control_Monad_Gen_Common_compose, &$Control_Monad_Gen_Common_max, &$Control_Monad_Gen_Common_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$unfoldable2 = ($unfoldable1)($dictUnfoldable);
    $__res = (function() use ($apply, $map, &$Data_NonEmpty_NonEmpty, $resize, &$Control_Monad_Gen_Common_compose, &$Control_Monad_Gen_Common_max, &$Control_Monad_Gen_Common_sub, $unfoldable2) {
  $__fn = function($gen) use ($apply, $map, &$Data_NonEmpty_NonEmpty, $resize, &$Control_Monad_Gen_Common_compose, &$Control_Monad_Gen_Common_max, &$Control_Monad_Gen_Common_sub, $unfoldable2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($apply)(($map)($Data_NonEmpty_NonEmpty, $gen), ($resize)(($Control_Monad_Gen_Common_compose)(($Control_Monad_Gen_Common_max)(0), (function() use (&$Control_Monad_Gen_Common_sub) {
  $__fn = function($v) use (&$Control_Monad_Gen_Common_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Gen_Common_sub)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), ($unfoldable2)($gen)));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_Common_genMaybe'
$Control_Monad_Gen_Common_genMaybe__prime__ = (function() use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Gen_Class_chooseFloat, &$Data_Functor_map, &$Control_Applicative_pure, &$Control_Monad_Gen_Common_lessThan, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__fn = function($dictMonadGen) use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Gen_Class_chooseFloat, &$Data_Functor_map, &$Control_Applicative_pure, &$Control_Monad_Gen_Common_lessThan, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadGen)->Monad0)($Prim_undefined);
$Bind1 = (($Monad0)->Bind1)($Prim_undefined);
$bind = ($Control_Bind_bind)($Bind1);
$chooseFloat = ($Control_Monad_Gen_Class_chooseFloat)($dictMonadGen);
$map = ($Data_Functor_map)((((($Bind1)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($Monad0)->Applicative0)($Prim_undefined));
    $__res = (function() use ($bind, $chooseFloat, &$Control_Monad_Gen_Common_lessThan, $map, &$Data_Maybe_Just, $pure, &$Data_Maybe_Nothing) {
  $__fn = function($bias, $gen = null) use ($bind, $chooseFloat, &$Control_Monad_Gen_Common_lessThan, $map, &$Data_Maybe_Just, $pure, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($chooseFloat)(0.0, 1.0), (function() use (&$Control_Monad_Gen_Common_lessThan, $bias, $map, &$Data_Maybe_Just, $gen, $pure, &$Data_Maybe_Nothing) {
  $__body = function($n) use (&$Control_Monad_Gen_Common_lessThan, $bias, $map, &$Data_Maybe_Just, $gen, $pure, &$Data_Maybe_Nothing) {
    $__case_0 = ($Control_Monad_Gen_Common_lessThan)($n, $bias);
    if (($__case_0 === true)) {
return ($map)($Data_Maybe_Just, $gen);
} else {
;
};
    if (true) {
return ($pure)($Data_Maybe_Nothing);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($n) use (&$Control_Monad_Gen_Common_lessThan, $bias, $map, &$Data_Maybe_Just, $gen, $pure, &$Data_Maybe_Nothing, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($n);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($n);
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_Common_genMaybe
$Control_Monad_Gen_Common_genMaybe = (function() use (&$Control_Monad_Gen_Common_genMaybe__prime__) {
  $__fn = function($dictMonadGen) use (&$Control_Monad_Gen_Common_genMaybe__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Gen_Common_genMaybe__prime__)($dictMonadGen, 0.75);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_Common_genIdentity
$Control_Monad_Gen_Common_genIdentity = (function() use (&$Data_Functor_map, &$Data_Identity_Identity) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Identity_Identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_map)($dictFunctor, $Data_Identity_Identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_Common_genEither'
$Control_Monad_Gen_Common_genEither__prime__ = (function() use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Gen_Class_chooseFloat, &$Data_Functor_map, &$Control_Monad_Gen_Common_lessThan, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictMonadGen) use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Gen_Class_chooseFloat, &$Data_Functor_map, &$Control_Monad_Gen_Common_lessThan, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Bind1 = (((($dictMonadGen)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined);
$bind = ($Control_Bind_bind)($Bind1);
$chooseFloat = ($Control_Monad_Gen_Class_chooseFloat)($dictMonadGen);
$map = ($Data_Functor_map)((((($Bind1)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($bind, $chooseFloat, &$Control_Monad_Gen_Common_lessThan, $map, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($bias, $genA = null, $genB = null) use ($bind, $chooseFloat, &$Control_Monad_Gen_Common_lessThan, $map, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($chooseFloat)(0.0, 1.0), (function() use (&$Control_Monad_Gen_Common_lessThan, $bias, $map, &$Data_Either_Left, $genA, &$Data_Either_Right, $genB) {
  $__body = function($n) use (&$Control_Monad_Gen_Common_lessThan, $bias, $map, &$Data_Either_Left, $genA, &$Data_Either_Right, $genB) {
    $__case_0 = ($Control_Monad_Gen_Common_lessThan)($n, $bias);
    if (($__case_0 === true)) {
return ($map)($Data_Either_Left, $genA);
} else {
;
};
    if (true) {
return ($map)($Data_Either_Right, $genB);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($n) use (&$Control_Monad_Gen_Common_lessThan, $bias, $map, &$Data_Either_Left, $genA, &$Data_Either_Right, $genB, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($n);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($n);
  };
  return $__fn;
})());
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

// Control_Monad_Gen_Common_genEither
$Control_Monad_Gen_Common_genEither = (function() use (&$Control_Monad_Gen_Common_genEither__prime__) {
  $__fn = function($dictMonadGen) use (&$Control_Monad_Gen_Common_genEither__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Gen_Common_genEither__prime__)($dictMonadGen, 0.5);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

