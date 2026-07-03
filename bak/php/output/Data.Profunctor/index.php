<?php

namespace Data\Profunctor;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Profunctor_composeFlipped
$Data_Profunctor_composeFlipped = ($Control_Semigroupoid_composeFlipped)($Control_Semigroupoid_semigroupoidFn);

// Data_Profunctor_identity
$Data_Profunctor_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Profunctor_wrap
$Data_Profunctor_wrap = ($Data_Newtype_wrap)($Prim_undefined);

// Data_Profunctor_unwrap
$Data_Profunctor_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Data_Profunctor_Profunctor$Dict
$Data_Profunctor_Profunctor__dollar__Dict = (function() {
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

// Data_Profunctor_profunctorFn
$Data_Profunctor_profunctorFn = ($Data_Profunctor_Profunctor__dollar__Dict)((object)["dimap" => (function() use (&$Data_Profunctor_composeFlipped) {
  $__fn = function($a2b, $c2d = null, $b2c = null) use (&$Data_Profunctor_composeFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Profunctor_composeFlipped)($a2b, ($Data_Profunctor_composeFlipped)($b2c, $c2d));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Profunctor_dimap
$Data_Profunctor_dimap = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->dimap;
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

// Data_Profunctor_lcmap
$Data_Profunctor_lcmap = (function() use (&$Data_Profunctor_dimap, &$Data_Profunctor_identity) {
  $__fn = function($dictProfunctor) use (&$Data_Profunctor_dimap, &$Data_Profunctor_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$dimap1 = ($Data_Profunctor_dimap)($dictProfunctor);
    $__res = (function() use ($dimap1, &$Data_Profunctor_identity) {
  $__fn = function($a2b) use ($dimap1, &$Data_Profunctor_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($dimap1)($a2b, $Data_Profunctor_identity);
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

// Data_Profunctor_rmap
$Data_Profunctor_rmap = (function() use (&$Data_Profunctor_dimap, &$Data_Profunctor_identity) {
  $__fn = function($dictProfunctor) use (&$Data_Profunctor_dimap, &$Data_Profunctor_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$dimap1 = ($Data_Profunctor_dimap)($dictProfunctor);
    $__res = (function() use ($dimap1, &$Data_Profunctor_identity) {
  $__fn = function($b2c) use ($dimap1, &$Data_Profunctor_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($dimap1)($Data_Profunctor_identity, $b2c);
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

// Data_Profunctor_unwrapIso
$Data_Profunctor_unwrapIso = (function() use (&$Data_Profunctor_dimap, &$Data_Profunctor_wrap, &$Data_Profunctor_unwrap) {
  $__fn = function($dictProfunctor) use (&$Data_Profunctor_dimap, &$Data_Profunctor_wrap, &$Data_Profunctor_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$dimap1 = ($Data_Profunctor_dimap)($dictProfunctor);
    $__res = (function() use ($dimap1, &$Data_Profunctor_wrap, &$Data_Profunctor_unwrap) {
  $__fn = function($__dollar____unused) use ($dimap1, &$Data_Profunctor_wrap, &$Data_Profunctor_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($dimap1)($Data_Profunctor_wrap, $Data_Profunctor_unwrap);
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

// Data_Profunctor_wrapIso
$Data_Profunctor_wrapIso = (function() use (&$Data_Profunctor_dimap, &$Data_Profunctor_unwrap, &$Data_Profunctor_wrap) {
  $__fn = function($dictProfunctor) use (&$Data_Profunctor_dimap, &$Data_Profunctor_unwrap, &$Data_Profunctor_wrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$dimap1 = ($Data_Profunctor_dimap)($dictProfunctor);
    $__res = (function() use ($dimap1, &$Data_Profunctor_unwrap, &$Data_Profunctor_wrap) {
  $__fn = function($__dollar____unused, $v = null) use ($dimap1, &$Data_Profunctor_unwrap, &$Data_Profunctor_wrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($dimap1)($Data_Profunctor_unwrap, $Data_Profunctor_wrap);
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

// Data_Profunctor_arr
$Data_Profunctor_arr = (function() use (&$Control_Category_identity, &$Data_Profunctor_rmap) {
  $__fn = function($dictCategory) use (&$Control_Category_identity, &$Data_Profunctor_rmap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$identity1 = ($Control_Category_identity)($dictCategory);
    $__res = (function() use (&$Data_Profunctor_rmap, $identity1) {
  $__fn = function($dictProfunctor) use (&$Data_Profunctor_rmap, $identity1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$rmap1 = ($Data_Profunctor_rmap)($dictProfunctor);
    $__res = (function() use ($rmap1, $identity1) {
  $__fn = function($f) use ($rmap1, $identity1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($rmap1)($f, $identity1);
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

