<?php

namespace Control\Parallel\Class;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Except.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Maybe.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Trans/index.php';
require_once __DIR__ . '/../Control.Parallel.Class/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Costar/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Profunctor.Star/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Effect.Ref/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Parallel_Class_compose
$Control_Parallel_Class_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Parallel_Class_composeFlipped
$Control_Parallel_Class_composeFlipped = ($Control_Semigroupoid_composeFlipped)($Control_Semigroupoid_semigroupoidFn);

// Control_Parallel_Class_discard
$Control_Parallel_Class_discard = ($Control_Bind_discard)($Control_Bind_discardUnit);

// Control_Parallel_Class_Parallel$Dict
$Control_Parallel_Class_Parallel__dollar__Dict = (function() {
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

// Control_Parallel_Class_ParCont
$Control_Parallel_Class_ParCont = (function() {
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

// Control_Parallel_Class_sequential
$Control_Parallel_Class_sequential = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->sequential;
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

// Control_Parallel_Class_parallel
$Control_Parallel_Class_parallel = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->parallel;
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

// Control_Parallel_Class_newtypeParCont
$Control_Parallel_Class_newtypeParCont = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Control_Parallel_Class_monadParWriterT
$Control_Parallel_Class_monadParWriterT = (function() use (&$Control_Monad_Writer_Trans_applyWriterT, &$Prim_undefined, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Control_Monad_Writer_Trans_mapWriterT, &$Control_Parallel_Class_parallel, &$Control_Parallel_Class_sequential) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Writer_Trans_applyWriterT, &$Prim_undefined, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Control_Monad_Writer_Trans_mapWriterT, &$Control_Parallel_Class_parallel, &$Control_Parallel_Class_sequential, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applyWriterT = ($Control_Monad_Writer_Trans_applyWriterT)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = (function() use ($applyWriterT, &$Prim_undefined, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Control_Monad_Writer_Trans_mapWriterT, &$Control_Parallel_Class_parallel, &$Control_Parallel_Class_sequential) {
  $__fn = function($dictParallel) use ($applyWriterT, &$Prim_undefined, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Control_Monad_Writer_Trans_mapWriterT, &$Control_Parallel_Class_parallel, &$Control_Parallel_Class_sequential, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applyWriterT1 = ($applyWriterT)((($dictParallel)->Apply0)($Prim_undefined));
$applyWriterT2 = ($applyWriterT)((($dictParallel)->Apply1)($Prim_undefined));
    $__res = ($Control_Parallel_Class_Parallel__dollar__Dict)((object)["parallel" => ($Control_Monad_Writer_Trans_mapWriterT)(($Control_Parallel_Class_parallel)($dictParallel)), "sequential" => ($Control_Monad_Writer_Trans_mapWriterT)(($Control_Parallel_Class_sequential)($dictParallel)), "Apply0" => (function() use ($applyWriterT1) {
  $__fn = function($__dollar____unused) use ($applyWriterT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyWriterT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($applyWriterT2) {
  $__fn = function($__dollar____unused) use ($applyWriterT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyWriterT2;
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

// Control_Parallel_Class_monadParStar
$Control_Parallel_Class_monadParStar = (function() use (&$Control_Parallel_Class_parallel, &$Control_Parallel_Class_sequential, &$Data_Profunctor_Star_applyStar, &$Prim_undefined, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Data_Profunctor_Star_Star, &$Control_Parallel_Class_compose) {
  $__fn = function($dictParallel) use (&$Control_Parallel_Class_parallel, &$Control_Parallel_Class_sequential, &$Data_Profunctor_Star_applyStar, &$Prim_undefined, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Data_Profunctor_Star_Star, &$Control_Parallel_Class_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$parallel1 = ($Control_Parallel_Class_parallel)($dictParallel);
$sequential1 = ($Control_Parallel_Class_sequential)($dictParallel);
$applyStar = ($Data_Profunctor_Star_applyStar)((($dictParallel)->Apply0)($Prim_undefined));
$applyStar1 = ($Data_Profunctor_Star_applyStar)((($dictParallel)->Apply1)($Prim_undefined));
    $__res = ($Control_Parallel_Class_Parallel__dollar__Dict)((object)["parallel" => (function() use (&$Data_Profunctor_Star_Star, &$Control_Parallel_Class_compose, $parallel1) {
  $__body = function($v) use (&$Data_Profunctor_Star_Star, &$Control_Parallel_Class_compose, $parallel1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($Data_Profunctor_Star_Star)(($Control_Parallel_Class_compose)($parallel1, $f));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Profunctor_Star_Star, &$Control_Parallel_Class_compose, $parallel1, $__body, &$__fn) {
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
})(), "sequential" => (function() use (&$Data_Profunctor_Star_Star, &$Control_Parallel_Class_compose, $sequential1) {
  $__body = function($v) use (&$Data_Profunctor_Star_Star, &$Control_Parallel_Class_compose, $sequential1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($Data_Profunctor_Star_Star)(($Control_Parallel_Class_compose)($sequential1, $f));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Profunctor_Star_Star, &$Control_Parallel_Class_compose, $sequential1, $__body, &$__fn) {
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
})(), "Apply0" => (function() use ($applyStar) {
  $__fn = function($__dollar____unused) use ($applyStar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyStar;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($applyStar1) {
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

// Control_Parallel_Class_monadParReaderT
$Control_Parallel_Class_monadParReaderT = (function() use (&$Control_Monad_Reader_Trans_applyReaderT, &$Prim_undefined, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Control_Monad_Reader_Trans_mapReaderT, &$Control_Parallel_Class_parallel, &$Control_Parallel_Class_sequential) {
  $__fn = function($dictParallel) use (&$Control_Monad_Reader_Trans_applyReaderT, &$Prim_undefined, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Control_Monad_Reader_Trans_mapReaderT, &$Control_Parallel_Class_parallel, &$Control_Parallel_Class_sequential, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applyReaderT = ($Control_Monad_Reader_Trans_applyReaderT)((($dictParallel)->Apply0)($Prim_undefined));
$applyReaderT1 = ($Control_Monad_Reader_Trans_applyReaderT)((($dictParallel)->Apply1)($Prim_undefined));
    $__res = ($Control_Parallel_Class_Parallel__dollar__Dict)((object)["parallel" => ($Control_Monad_Reader_Trans_mapReaderT)(($Control_Parallel_Class_parallel)($dictParallel)), "sequential" => ($Control_Monad_Reader_Trans_mapReaderT)(($Control_Parallel_Class_sequential)($dictParallel)), "Apply0" => (function() use ($applyReaderT) {
  $__fn = function($__dollar____unused) use ($applyReaderT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyReaderT;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($applyReaderT1) {
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

// Control_Parallel_Class_monadParMaybeT
$Control_Parallel_Class_monadParMaybeT = (function() use (&$Control_Parallel_Class_parallel, &$Control_Parallel_Class_sequential, &$Data_Functor_Compose_applyCompose, &$Prim_undefined, &$Data_Maybe_applyMaybe, &$Control_Monad_Maybe_Trans_applyMaybeT, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Data_Functor_Compose_Compose, &$Control_Monad_Maybe_Trans_MaybeT) {
  $__fn = function($dictParallel) use (&$Control_Parallel_Class_parallel, &$Control_Parallel_Class_sequential, &$Data_Functor_Compose_applyCompose, &$Prim_undefined, &$Data_Maybe_applyMaybe, &$Control_Monad_Maybe_Trans_applyMaybeT, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Data_Functor_Compose_Compose, &$Control_Monad_Maybe_Trans_MaybeT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$parallel1 = ($Control_Parallel_Class_parallel)($dictParallel);
$sequential1 = ($Control_Parallel_Class_sequential)($dictParallel);
$applyCompose = ($Data_Functor_Compose_applyCompose)((($dictParallel)->Apply1)($Prim_undefined), $Data_Maybe_applyMaybe);
    $__res = (function() use (&$Control_Monad_Maybe_Trans_applyMaybeT, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Data_Functor_Compose_Compose, $parallel1, &$Control_Monad_Maybe_Trans_MaybeT, $sequential1, $applyCompose) {
  $__fn = function($dictMonad) use (&$Control_Monad_Maybe_Trans_applyMaybeT, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Data_Functor_Compose_Compose, $parallel1, &$Control_Monad_Maybe_Trans_MaybeT, $sequential1, $applyCompose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applyMaybeT = ($Control_Monad_Maybe_Trans_applyMaybeT)($dictMonad);
    $__res = ($Control_Parallel_Class_Parallel__dollar__Dict)((object)["parallel" => (function() use (&$Data_Functor_Compose_Compose, $parallel1) {
  $__body = function($v) use (&$Data_Functor_Compose_Compose, $parallel1) {
    $__case_0 = $v;
    if (true) {
$ma = $__case_0;
return ($Data_Functor_Compose_Compose)(($parallel1)($ma));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Functor_Compose_Compose, $parallel1, $__body, &$__fn) {
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
})(), "sequential" => (function() use (&$Control_Monad_Maybe_Trans_MaybeT, $sequential1) {
  $__body = function($v) use (&$Control_Monad_Maybe_Trans_MaybeT, $sequential1) {
    $__case_0 = $v;
    if (true) {
$fa = $__case_0;
return ($Control_Monad_Maybe_Trans_MaybeT)(($sequential1)($fa));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Monad_Maybe_Trans_MaybeT, $sequential1, $__body, &$__fn) {
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
})(), "Apply0" => (function() use ($applyMaybeT) {
  $__fn = function($__dollar____unused) use ($applyMaybeT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyMaybeT;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($applyCompose) {
  $__fn = function($__dollar____unused) use ($applyCompose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyCompose;
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

// Control_Parallel_Class_monadParExceptT
$Control_Parallel_Class_monadParExceptT = (function() use (&$Control_Parallel_Class_parallel, &$Control_Parallel_Class_sequential, &$Data_Functor_Compose_applyCompose, &$Prim_undefined, &$Data_Either_applyEither, &$Control_Monad_Except_Trans_applyExceptT, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Data_Functor_Compose_Compose, &$Control_Monad_Except_Trans_ExceptT) {
  $__fn = function($dictParallel) use (&$Control_Parallel_Class_parallel, &$Control_Parallel_Class_sequential, &$Data_Functor_Compose_applyCompose, &$Prim_undefined, &$Data_Either_applyEither, &$Control_Monad_Except_Trans_applyExceptT, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Data_Functor_Compose_Compose, &$Control_Monad_Except_Trans_ExceptT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$parallel1 = ($Control_Parallel_Class_parallel)($dictParallel);
$sequential1 = ($Control_Parallel_Class_sequential)($dictParallel);
$applyCompose = ($Data_Functor_Compose_applyCompose)((($dictParallel)->Apply1)($Prim_undefined), $Data_Either_applyEither);
    $__res = (function() use (&$Control_Monad_Except_Trans_applyExceptT, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Data_Functor_Compose_Compose, $parallel1, &$Control_Monad_Except_Trans_ExceptT, $sequential1, $applyCompose) {
  $__fn = function($dictMonad) use (&$Control_Monad_Except_Trans_applyExceptT, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Data_Functor_Compose_Compose, $parallel1, &$Control_Monad_Except_Trans_ExceptT, $sequential1, $applyCompose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applyExceptT = ($Control_Monad_Except_Trans_applyExceptT)($dictMonad);
    $__res = ($Control_Parallel_Class_Parallel__dollar__Dict)((object)["parallel" => (function() use (&$Data_Functor_Compose_Compose, $parallel1) {
  $__body = function($v) use (&$Data_Functor_Compose_Compose, $parallel1) {
    $__case_0 = $v;
    if (true) {
$ma = $__case_0;
return ($Data_Functor_Compose_Compose)(($parallel1)($ma));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Functor_Compose_Compose, $parallel1, $__body, &$__fn) {
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
})(), "sequential" => (function() use (&$Control_Monad_Except_Trans_ExceptT, $sequential1) {
  $__body = function($v) use (&$Control_Monad_Except_Trans_ExceptT, $sequential1) {
    $__case_0 = $v;
    if (true) {
$fa = $__case_0;
return ($Control_Monad_Except_Trans_ExceptT)(($sequential1)($fa));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Monad_Except_Trans_ExceptT, $sequential1, $__body, &$__fn) {
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
})(), "Apply0" => (function() use ($applyExceptT) {
  $__fn = function($__dollar____unused) use ($applyExceptT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyExceptT;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use ($applyCompose) {
  $__fn = function($__dollar____unused) use ($applyCompose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyCompose;
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

// Control_Parallel_Class_monadParCostar
$Control_Parallel_Class_monadParCostar = (function() use (&$Control_Parallel_Class_sequential, &$Control_Parallel_Class_parallel, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Data_Functor_Costar_Costar, &$Control_Parallel_Class_composeFlipped, &$Data_Functor_Costar_applyCostar) {
  $__fn = function($dictParallel) use (&$Control_Parallel_Class_sequential, &$Control_Parallel_Class_parallel, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Data_Functor_Costar_Costar, &$Control_Parallel_Class_composeFlipped, &$Data_Functor_Costar_applyCostar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequential1 = ($Control_Parallel_Class_sequential)($dictParallel);
$parallel1 = ($Control_Parallel_Class_parallel)($dictParallel);
    $__res = ($Control_Parallel_Class_Parallel__dollar__Dict)((object)["parallel" => (function() use (&$Data_Functor_Costar_Costar, &$Control_Parallel_Class_composeFlipped, $sequential1) {
  $__body = function($v) use (&$Data_Functor_Costar_Costar, &$Control_Parallel_Class_composeFlipped, $sequential1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($Data_Functor_Costar_Costar)(($Control_Parallel_Class_composeFlipped)($sequential1, $f));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Functor_Costar_Costar, &$Control_Parallel_Class_composeFlipped, $sequential1, $__body, &$__fn) {
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
})(), "sequential" => (function() use (&$Data_Functor_Costar_Costar, &$Control_Parallel_Class_composeFlipped, $parallel1) {
  $__body = function($v) use (&$Data_Functor_Costar_Costar, &$Control_Parallel_Class_composeFlipped, $parallel1) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($Data_Functor_Costar_Costar)(($Control_Parallel_Class_composeFlipped)($parallel1, $f));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Functor_Costar_Costar, &$Control_Parallel_Class_composeFlipped, $parallel1, $__body, &$__fn) {
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
})(), "Apply0" => (function() use (&$Data_Functor_Costar_applyCostar) {
  $__fn = function($__dollar____unused) use (&$Data_Functor_Costar_applyCostar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Functor_Costar_applyCostar;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use (&$Data_Functor_Costar_applyCostar) {
  $__fn = function($__dollar____unused) use (&$Data_Functor_Costar_applyCostar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Functor_Costar_applyCostar;
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

// Control_Parallel_Class_monadParParCont
$Control_Parallel_Class_monadParParCont = (function() use (&$Control_Monad_Cont_Trans_applyContT, &$Prim_undefined, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Control_Parallel_Class_ParCont, &$Control_Parallel_Class_applyParCont) {
  $__fn = function($dictMonadEffect) use (&$Control_Monad_Cont_Trans_applyContT, &$Prim_undefined, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Control_Parallel_Class_ParCont, &$Control_Parallel_Class_applyParCont, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonadEffect) use (&$Control_Monad_Cont_Trans_applyContT, &$Prim_undefined, &$Control_Parallel_Class_Parallel__dollar__Dict, &$Control_Parallel_Class_ParCont, &$Control_Parallel_Class_applyParCont) {
while (true) {
$applyContT = ($Control_Monad_Cont_Trans_applyContT)((((((($dictMonadEffect)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined))->Apply0)($Prim_undefined));
return ($Control_Parallel_Class_Parallel__dollar__Dict)((object)["parallel" => $Control_Parallel_Class_ParCont, "sequential" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$ma = $__case_0;
return $ma;
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
})(), "Apply0" => (function() use ($applyContT) {
  $__fn = function($__dollar____unused) use ($applyContT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyContT;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use (&$Control_Parallel_Class_applyParCont, $dictMonadEffect) {
  $__fn = function($__dollar____unused) use (&$Control_Parallel_Class_applyParCont, $dictMonadEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Parallel_Class_applyParCont)($dictMonadEffect);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
}
})($dictMonadEffect);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_functorParCont
$Control_Parallel_Class_functorParCont = (function() use (&$Data_Functor_map, &$Control_Monad_Cont_Trans_functorContT, &$Prim_undefined, &$Data_Functor_Functor__dollar__Dict, &$Control_Parallel_Class_compose, &$Control_Parallel_Class_parallel, &$Control_Parallel_Class_monadParParCont, &$Control_Parallel_Class_sequential) {
  $__fn = function($dictMonadEffect) use (&$Data_Functor_map, &$Control_Monad_Cont_Trans_functorContT, &$Prim_undefined, &$Data_Functor_Functor__dollar__Dict, &$Control_Parallel_Class_compose, &$Control_Parallel_Class_parallel, &$Control_Parallel_Class_monadParParCont, &$Control_Parallel_Class_sequential, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonadEffect) use (&$Data_Functor_map, &$Control_Monad_Cont_Trans_functorContT, &$Prim_undefined, &$Data_Functor_Functor__dollar__Dict, &$Control_Parallel_Class_compose, &$Control_Parallel_Class_parallel, &$Control_Parallel_Class_monadParParCont, &$Control_Parallel_Class_sequential) {
while (true) {
$map = ($Data_Functor_map)(($Control_Monad_Cont_Trans_functorContT)((((((((($dictMonadEffect)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined)));
return ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Control_Parallel_Class_compose, &$Control_Parallel_Class_parallel, &$Control_Parallel_Class_monadParParCont, $dictMonadEffect, $map, &$Control_Parallel_Class_sequential) {
  $__fn = function($f) use (&$Control_Parallel_Class_compose, &$Control_Parallel_Class_parallel, &$Control_Parallel_Class_monadParParCont, $dictMonadEffect, $map, &$Control_Parallel_Class_sequential, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Parallel_Class_compose)(($Control_Parallel_Class_parallel)(($Control_Parallel_Class_monadParParCont)($dictMonadEffect)), ($Control_Parallel_Class_compose)(($map)($f), ($Control_Parallel_Class_sequential)(($Control_Parallel_Class_monadParParCont)($dictMonadEffect))));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
}
})($dictMonadEffect);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_applyParCont
$Control_Parallel_Class_applyParCont = (function() use (&$Prim_undefined, &$Control_Bind_bind, &$Effect_Class_liftEffect, &$Control_Parallel_Class_discard, &$Control_Apply_Apply__dollar__Dict, &$Control_Parallel_Class_ParCont, &$Control_Monad_Cont_Trans_ContT, &$Effect_Ref_new, &$Data_Maybe_Nothing, &$Control_Monad_Cont_Trans_runContT, &$Effect_Ref_read, &$Effect_Ref_write, &$Data_Maybe_Just, &$Control_Parallel_Class_functorParCont) {
  $__fn = function($dictMonadEffect) use (&$Prim_undefined, &$Control_Bind_bind, &$Effect_Class_liftEffect, &$Control_Parallel_Class_discard, &$Control_Apply_Apply__dollar__Dict, &$Control_Parallel_Class_ParCont, &$Control_Monad_Cont_Trans_ContT, &$Effect_Ref_new, &$Data_Maybe_Nothing, &$Control_Monad_Cont_Trans_runContT, &$Effect_Ref_read, &$Effect_Ref_write, &$Data_Maybe_Just, &$Control_Parallel_Class_functorParCont, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonadEffect) use (&$Prim_undefined, &$Control_Bind_bind, &$Effect_Class_liftEffect, &$Control_Parallel_Class_discard, &$Control_Apply_Apply__dollar__Dict, &$Control_Parallel_Class_ParCont, &$Control_Monad_Cont_Trans_ContT, &$Effect_Ref_new, &$Data_Maybe_Nothing, &$Control_Monad_Cont_Trans_runContT, &$Effect_Ref_read, &$Effect_Ref_write, &$Data_Maybe_Just, &$Control_Parallel_Class_functorParCont) {
while (true) {
$Bind1 = (((($dictMonadEffect)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined);
$bind = ($Control_Bind_bind)($Bind1);
$liftEffect = ($Effect_Class_liftEffect)($dictMonadEffect);
$discard1 = ($Control_Parallel_Class_discard)($Bind1);
return ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Control_Parallel_Class_ParCont, &$Control_Monad_Cont_Trans_ContT, $bind, $liftEffect, &$Effect_Ref_new, &$Data_Maybe_Nothing, $discard1, &$Control_Monad_Cont_Trans_runContT, &$Effect_Ref_read, &$Effect_Ref_write, &$Data_Maybe_Just) {
  $__body = function($v, $v1) use (&$Control_Parallel_Class_ParCont, &$Control_Monad_Cont_Trans_ContT, $bind, $liftEffect, &$Effect_Ref_new, &$Data_Maybe_Nothing, $discard1, &$Control_Monad_Cont_Trans_runContT, &$Effect_Ref_read, &$Effect_Ref_write, &$Data_Maybe_Just) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$ca = $__case_0;
$cb = $__case_1;
return ($Control_Parallel_Class_ParCont)(($Control_Monad_Cont_Trans_ContT)((function() use ($bind, $liftEffect, &$Effect_Ref_new, &$Data_Maybe_Nothing, $discard1, &$Control_Monad_Cont_Trans_runContT, $ca, &$Effect_Ref_read, &$Effect_Ref_write, &$Data_Maybe_Just, $cb) {
  $__fn = function($k) use ($bind, $liftEffect, &$Effect_Ref_new, &$Data_Maybe_Nothing, $discard1, &$Control_Monad_Cont_Trans_runContT, $ca, &$Effect_Ref_read, &$Effect_Ref_write, &$Data_Maybe_Just, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($liftEffect)(($Effect_Ref_new)($Data_Maybe_Nothing)), (function() use ($bind, $liftEffect, &$Effect_Ref_new, &$Data_Maybe_Nothing, $discard1, &$Control_Monad_Cont_Trans_runContT, $ca, &$Effect_Ref_read, &$Effect_Ref_write, &$Data_Maybe_Just, $k, $cb) {
  $__fn = function($ra) use ($bind, $liftEffect, &$Effect_Ref_new, &$Data_Maybe_Nothing, $discard1, &$Control_Monad_Cont_Trans_runContT, $ca, &$Effect_Ref_read, &$Effect_Ref_write, &$Data_Maybe_Just, $k, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($liftEffect)(($Effect_Ref_new)($Data_Maybe_Nothing)), (function() use ($discard1, &$Control_Monad_Cont_Trans_runContT, $ca, $bind, $liftEffect, &$Effect_Ref_read, &$Effect_Ref_write, &$Data_Maybe_Just, $ra, $k, $cb) {
  $__fn = function($rb) use ($discard1, &$Control_Monad_Cont_Trans_runContT, $ca, $bind, $liftEffect, &$Effect_Ref_read, &$Effect_Ref_write, &$Data_Maybe_Just, $ra, $k, $cb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($discard1)(($Control_Monad_Cont_Trans_runContT)($ca, (function() use ($bind, $liftEffect, &$Effect_Ref_read, $rb, &$Effect_Ref_write, &$Data_Maybe_Just, $ra, $k) {
  $__fn = function($a) use ($bind, $liftEffect, &$Effect_Ref_read, $rb, &$Effect_Ref_write, &$Data_Maybe_Just, $ra, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($liftEffect)(($Effect_Ref_read)($rb)), (function() use ($liftEffect, &$Effect_Ref_write, &$Data_Maybe_Just, $a, $ra, $k) {
  $__body = function($mb) use ($liftEffect, &$Effect_Ref_write, &$Data_Maybe_Just, $a, $ra, $k) {
    $__case_0 = $mb;
    if ((($__case_0)->tag === "Nothing")) {
return ($liftEffect)(($Effect_Ref_write)(($Data_Maybe_Just)($a), $ra));
} else {
;
};
    if ((($__case_0)->tag === "Just")) {
$b = ($__case_0)->values[0];
return ($k)(($a)($b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($mb) use ($liftEffect, &$Effect_Ref_write, &$Data_Maybe_Just, $a, $ra, $k, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($mb);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($mb);
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
})()), (function() use (&$Control_Monad_Cont_Trans_runContT, $cb, $bind, $liftEffect, &$Effect_Ref_read, $ra, &$Effect_Ref_write, &$Data_Maybe_Just, $rb, $k) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_Cont_Trans_runContT, $cb, $bind, $liftEffect, &$Effect_Ref_read, $ra, &$Effect_Ref_write, &$Data_Maybe_Just, $rb, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Cont_Trans_runContT)($cb, (function() use ($bind, $liftEffect, &$Effect_Ref_read, $ra, &$Effect_Ref_write, &$Data_Maybe_Just, $rb, $k) {
  $__fn = function($b) use ($bind, $liftEffect, &$Effect_Ref_read, $ra, &$Effect_Ref_write, &$Data_Maybe_Just, $rb, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($liftEffect)(($Effect_Ref_read)($ra)), (function() use ($liftEffect, &$Effect_Ref_write, &$Data_Maybe_Just, $b, $rb, $k) {
  $__body = function($ma) use ($liftEffect, &$Effect_Ref_write, &$Data_Maybe_Just, $b, $rb, $k) {
    $__case_0 = $ma;
    if ((($__case_0)->tag === "Nothing")) {
return ($liftEffect)(($Effect_Ref_write)(($Data_Maybe_Just)($b), $rb));
} else {
;
};
    if ((($__case_0)->tag === "Just")) {
$a = ($__case_0)->values[0];
return ($k)(($a)($b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($ma) use ($liftEffect, &$Effect_Ref_write, &$Data_Maybe_Just, $b, $rb, $k, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($ma);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($ma);
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
})()));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Control_Parallel_Class_ParCont, &$Control_Monad_Cont_Trans_ContT, $bind, $liftEffect, &$Effect_Ref_new, &$Data_Maybe_Nothing, $discard1, &$Control_Monad_Cont_Trans_runContT, &$Effect_Ref_read, &$Effect_Ref_write, &$Data_Maybe_Just, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Control_Parallel_Class_functorParCont, $dictMonadEffect) {
  $__fn = function($__dollar____unused) use (&$Control_Parallel_Class_functorParCont, $dictMonadEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Parallel_Class_functorParCont)($dictMonadEffect);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
}
})($dictMonadEffect);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Parallel_Class_applicativeParCont
$Control_Parallel_Class_applicativeParCont = (function() use (&$Control_Parallel_Class_applyParCont, &$Control_Applicative_Applicative__dollar__Dict, &$Control_Parallel_Class_compose, &$Control_Parallel_Class_parallel, &$Control_Parallel_Class_monadParParCont, &$Control_Applicative_pure, &$Control_Monad_Cont_Trans_applicativeContT, &$Prim_undefined) {
  $__fn = function($dictMonadEffect) use (&$Control_Parallel_Class_applyParCont, &$Control_Applicative_Applicative__dollar__Dict, &$Control_Parallel_Class_compose, &$Control_Parallel_Class_parallel, &$Control_Parallel_Class_monadParParCont, &$Control_Applicative_pure, &$Control_Monad_Cont_Trans_applicativeContT, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applyParCont1 = ($Control_Parallel_Class_applyParCont)($dictMonadEffect);
    $__res = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => ($Control_Parallel_Class_compose)(($Control_Parallel_Class_parallel)(($Control_Parallel_Class_monadParParCont)($dictMonadEffect)), ($Control_Applicative_pure)(($Control_Monad_Cont_Trans_applicativeContT)((((($dictMonadEffect)->Monad0)($Prim_undefined))->Applicative0)($Prim_undefined)))), "Apply0" => (function() use ($applyParCont1) {
  $__fn = function($__dollar____unused) use ($applyParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyParCont1;
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

// Control_Parallel_Class_altParCont
$Control_Parallel_Class_altParCont = (function() use (&$Prim_undefined, &$Control_Bind_bind, &$Effect_Class_liftEffect, &$Control_Parallel_Class_discard, &$Control_Applicative_pure, &$Control_Parallel_Class_functorParCont, &$Control_Alt_Alt__dollar__Dict, &$Control_Parallel_Class_ParCont, &$Control_Monad_Cont_Trans_ContT, &$Effect_Ref_new, &$Control_Monad_Cont_Trans_runContT, &$Effect_Ref_read, &$Data_Unit_unit, &$Effect_Ref_write) {
  $__fn = function($dictMonadEffect) use (&$Prim_undefined, &$Control_Bind_bind, &$Effect_Class_liftEffect, &$Control_Parallel_Class_discard, &$Control_Applicative_pure, &$Control_Parallel_Class_functorParCont, &$Control_Alt_Alt__dollar__Dict, &$Control_Parallel_Class_ParCont, &$Control_Monad_Cont_Trans_ContT, &$Effect_Ref_new, &$Control_Monad_Cont_Trans_runContT, &$Effect_Ref_read, &$Data_Unit_unit, &$Effect_Ref_write, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadEffect)->Monad0)($Prim_undefined);
$Bind1 = (($Monad0)->Bind1)($Prim_undefined);
$bind = ($Control_Bind_bind)($Bind1);
$liftEffect = ($Effect_Class_liftEffect)($dictMonadEffect);
$discard1 = ($Control_Parallel_Class_discard)($Bind1);
$pure = ($Control_Applicative_pure)((($Monad0)->Applicative0)($Prim_undefined));
$functorParCont1 = ($Control_Parallel_Class_functorParCont)($dictMonadEffect);
    $__res = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => (function() use (&$Control_Parallel_Class_ParCont, &$Control_Monad_Cont_Trans_ContT, $bind, $liftEffect, &$Effect_Ref_new, $discard1, &$Control_Monad_Cont_Trans_runContT, &$Effect_Ref_read, $pure, &$Data_Unit_unit, &$Effect_Ref_write) {
  $__body = function($v, $v1) use (&$Control_Parallel_Class_ParCont, &$Control_Monad_Cont_Trans_ContT, $bind, $liftEffect, &$Effect_Ref_new, $discard1, &$Control_Monad_Cont_Trans_runContT, &$Effect_Ref_read, $pure, &$Data_Unit_unit, &$Effect_Ref_write) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$c1 = $__case_0;
$c2 = $__case_1;
return ($Control_Parallel_Class_ParCont)(($Control_Monad_Cont_Trans_ContT)((function() use ($bind, $liftEffect, &$Effect_Ref_new, $discard1, &$Control_Monad_Cont_Trans_runContT, $c1, &$Effect_Ref_read, $pure, &$Data_Unit_unit, &$Effect_Ref_write, $c2) {
  $__fn = function($k) use ($bind, $liftEffect, &$Effect_Ref_new, $discard1, &$Control_Monad_Cont_Trans_runContT, $c1, &$Effect_Ref_read, $pure, &$Data_Unit_unit, &$Effect_Ref_write, $c2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($liftEffect)(($Effect_Ref_new)(false)), (function() use ($discard1, &$Control_Monad_Cont_Trans_runContT, $c1, $bind, $liftEffect, &$Effect_Ref_read, $pure, &$Data_Unit_unit, &$Effect_Ref_write, $k, $c2) {
  $__fn = function($done) use ($discard1, &$Control_Monad_Cont_Trans_runContT, $c1, $bind, $liftEffect, &$Effect_Ref_read, $pure, &$Data_Unit_unit, &$Effect_Ref_write, $k, $c2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($discard1)(($Control_Monad_Cont_Trans_runContT)($c1, (function() use ($bind, $liftEffect, &$Effect_Ref_read, $done, $pure, &$Data_Unit_unit, $discard1, &$Effect_Ref_write, $k) {
  $__fn = function($a) use ($bind, $liftEffect, &$Effect_Ref_read, $done, $pure, &$Data_Unit_unit, $discard1, &$Effect_Ref_write, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($liftEffect)(($Effect_Ref_read)($done)), (function() use ($pure, &$Data_Unit_unit, $discard1, $liftEffect, &$Effect_Ref_write, $done, $k, $a) {
  $__body = function($b) use ($pure, &$Data_Unit_unit, $discard1, $liftEffect, &$Effect_Ref_write, $done, $k, $a) {
    $__case_0 = $b;
    if (($__case_0 === true)) {
return ($pure)($Data_Unit_unit);
} else {
;
};
    if (true) {
return ($discard1)(($liftEffect)(($Effect_Ref_write)(true, $done)), (function() use ($k, $a) {
  $__fn = function($__dollar____unused) use ($k, $a, &$__fn) {
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
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($b) use ($pure, &$Data_Unit_unit, $discard1, $liftEffect, &$Effect_Ref_write, $done, $k, $a, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($b);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($b);
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
})()), (function() use (&$Control_Monad_Cont_Trans_runContT, $c2, $bind, $liftEffect, &$Effect_Ref_read, $done, $pure, &$Data_Unit_unit, $discard1, &$Effect_Ref_write, $k) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_Cont_Trans_runContT, $c2, $bind, $liftEffect, &$Effect_Ref_read, $done, $pure, &$Data_Unit_unit, $discard1, &$Effect_Ref_write, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Cont_Trans_runContT)($c2, (function() use ($bind, $liftEffect, &$Effect_Ref_read, $done, $pure, &$Data_Unit_unit, $discard1, &$Effect_Ref_write, $k) {
  $__fn = function($a) use ($bind, $liftEffect, &$Effect_Ref_read, $done, $pure, &$Data_Unit_unit, $discard1, &$Effect_Ref_write, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($liftEffect)(($Effect_Ref_read)($done)), (function() use ($pure, &$Data_Unit_unit, $discard1, $liftEffect, &$Effect_Ref_write, $done, $k, $a) {
  $__body = function($b) use ($pure, &$Data_Unit_unit, $discard1, $liftEffect, &$Effect_Ref_write, $done, $k, $a) {
    $__case_0 = $b;
    if (($__case_0 === true)) {
return ($pure)($Data_Unit_unit);
} else {
;
};
    if (true) {
return ($discard1)(($liftEffect)(($Effect_Ref_write)(true, $done)), (function() use ($k, $a) {
  $__fn = function($__dollar____unused) use ($k, $a, &$__fn) {
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
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($b) use ($pure, &$Data_Unit_unit, $discard1, $liftEffect, &$Effect_Ref_write, $done, $k, $a, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($b);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($b);
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
})()));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Control_Parallel_Class_ParCont, &$Control_Monad_Cont_Trans_ContT, $bind, $liftEffect, &$Effect_Ref_new, $discard1, &$Control_Monad_Cont_Trans_runContT, &$Effect_Ref_read, $pure, &$Data_Unit_unit, &$Effect_Ref_write, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorParCont1) {
  $__fn = function($__dollar____unused) use ($functorParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorParCont1;
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

// Control_Parallel_Class_plusParCont
$Control_Parallel_Class_plusParCont = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Parallel_Class_altParCont, &$Control_Plus_Plus__dollar__Dict, &$Control_Parallel_Class_ParCont, &$Control_Monad_Cont_Trans_ContT, &$Data_Unit_unit) {
  $__fn = function($dictMonadEffect) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Parallel_Class_altParCont, &$Control_Plus_Plus__dollar__Dict, &$Control_Parallel_Class_ParCont, &$Control_Monad_Cont_Trans_ContT, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)((((($dictMonadEffect)->Monad0)($Prim_undefined))->Applicative0)($Prim_undefined));
$altParCont1 = ($Control_Parallel_Class_altParCont)($dictMonadEffect);
    $__res = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => ($Control_Parallel_Class_ParCont)(($Control_Monad_Cont_Trans_ContT)((function() use ($pure, &$Data_Unit_unit) {
  $__fn = function($v) use ($pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)($Data_Unit_unit);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})())), "Alt0" => (function() use ($altParCont1) {
  $__fn = function($__dollar____unused) use ($altParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $altParCont1;
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

// Control_Parallel_Class_alternativeParCont
$Control_Parallel_Class_alternativeParCont = (function() use (&$Control_Parallel_Class_applicativeParCont, &$Control_Parallel_Class_plusParCont, &$Control_Alternative_Alternative__dollar__Dict) {
  $__fn = function($dictMonadEffect) use (&$Control_Parallel_Class_applicativeParCont, &$Control_Parallel_Class_plusParCont, &$Control_Alternative_Alternative__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeParCont1 = ($Control_Parallel_Class_applicativeParCont)($dictMonadEffect);
$plusParCont1 = ($Control_Parallel_Class_plusParCont)($dictMonadEffect);
    $__res = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeParCont1) {
  $__fn = function($__dollar____unused) use ($applicativeParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeParCont1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusParCont1) {
  $__fn = function($__dollar____unused) use ($plusParCont1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $plusParCont1;
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

