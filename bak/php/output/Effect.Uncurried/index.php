<?php

namespace Effect\Uncurried;

require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Uncurried/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Effect_Uncurried_semigroupEffectFn9
$Effect_Uncurried_semigroupEffectFn9 = (function() use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn9, &$Effect_Uncurried_runEffectFn9) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn9, &$Effect_Uncurried_runEffectFn9, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)(($Effect_semigroupEffect)($dictSemigroup));
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Effect_Uncurried_mkEffectFn9, $append, &$Effect_Uncurried_runEffectFn9) {
  $__fn = function($f1, $f2 = null) use (&$Effect_Uncurried_mkEffectFn9, $append, &$Effect_Uncurried_runEffectFn9, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Uncurried_mkEffectFn9)((function() use ($append, &$Effect_Uncurried_runEffectFn9, $f1, $f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) use ($append, &$Effect_Uncurried_runEffectFn9, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 9) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)(($Effect_Uncurried_runEffectFn9)($f1, $a, $b, $c, $d, $e, $f, $g, $h, $i), ($Effect_Uncurried_runEffectFn9)($f2, $a, $b, $c, $d, $e, $f, $g, $h, $i));
    if ($__num > 9) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 9));
    }
    return $__res;
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Uncurried_semigroupEffectFn8
$Effect_Uncurried_semigroupEffectFn8 = (function() use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn8, &$Effect_Uncurried_runEffectFn8) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn8, &$Effect_Uncurried_runEffectFn8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)(($Effect_semigroupEffect)($dictSemigroup));
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Effect_Uncurried_mkEffectFn8, $append, &$Effect_Uncurried_runEffectFn8) {
  $__fn = function($f1, $f2 = null) use (&$Effect_Uncurried_mkEffectFn8, $append, &$Effect_Uncurried_runEffectFn8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Uncurried_mkEffectFn8)((function() use ($append, &$Effect_Uncurried_runEffectFn8, $f1, $f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) use ($append, &$Effect_Uncurried_runEffectFn8, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 8) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)(($Effect_Uncurried_runEffectFn8)($f1, $a, $b, $c, $d, $e, $f, $g, $h), ($Effect_Uncurried_runEffectFn8)($f2, $a, $b, $c, $d, $e, $f, $g, $h));
    if ($__num > 8) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 8));
    }
    return $__res;
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Uncurried_semigroupEffectFn7
$Effect_Uncurried_semigroupEffectFn7 = (function() use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn7, &$Effect_Uncurried_runEffectFn7) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn7, &$Effect_Uncurried_runEffectFn7, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)(($Effect_semigroupEffect)($dictSemigroup));
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Effect_Uncurried_mkEffectFn7, $append, &$Effect_Uncurried_runEffectFn7) {
  $__fn = function($f1, $f2 = null) use (&$Effect_Uncurried_mkEffectFn7, $append, &$Effect_Uncurried_runEffectFn7, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Uncurried_mkEffectFn7)((function() use ($append, &$Effect_Uncurried_runEffectFn7, $f1, $f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) use ($append, &$Effect_Uncurried_runEffectFn7, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 7) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)(($Effect_Uncurried_runEffectFn7)($f1, $a, $b, $c, $d, $e, $f, $g), ($Effect_Uncurried_runEffectFn7)($f2, $a, $b, $c, $d, $e, $f, $g));
    if ($__num > 7) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 7));
    }
    return $__res;
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Uncurried_semigroupEffectFn6
$Effect_Uncurried_semigroupEffectFn6 = (function() use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn6, &$Effect_Uncurried_runEffectFn6) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn6, &$Effect_Uncurried_runEffectFn6, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)(($Effect_semigroupEffect)($dictSemigroup));
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Effect_Uncurried_mkEffectFn6, $append, &$Effect_Uncurried_runEffectFn6) {
  $__fn = function($f1, $f2 = null) use (&$Effect_Uncurried_mkEffectFn6, $append, &$Effect_Uncurried_runEffectFn6, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Uncurried_mkEffectFn6)((function() use ($append, &$Effect_Uncurried_runEffectFn6, $f1, $f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null) use ($append, &$Effect_Uncurried_runEffectFn6, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)(($Effect_Uncurried_runEffectFn6)($f1, $a, $b, $c, $d, $e, $f), ($Effect_Uncurried_runEffectFn6)($f2, $a, $b, $c, $d, $e, $f));
    if ($__num > 6) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 6));
    }
    return $__res;
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Uncurried_semigroupEffectFn5
$Effect_Uncurried_semigroupEffectFn5 = (function() use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn5, &$Effect_Uncurried_runEffectFn5) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn5, &$Effect_Uncurried_runEffectFn5, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)(($Effect_semigroupEffect)($dictSemigroup));
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Effect_Uncurried_mkEffectFn5, $append, &$Effect_Uncurried_runEffectFn5) {
  $__fn = function($f1, $f2 = null) use (&$Effect_Uncurried_mkEffectFn5, $append, &$Effect_Uncurried_runEffectFn5, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Uncurried_mkEffectFn5)((function() use ($append, &$Effect_Uncurried_runEffectFn5, $f1, $f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null) use ($append, &$Effect_Uncurried_runEffectFn5, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)(($Effect_Uncurried_runEffectFn5)($f1, $a, $b, $c, $d, $e), ($Effect_Uncurried_runEffectFn5)($f2, $a, $b, $c, $d, $e));
    if ($__num > 5) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 5));
    }
    return $__res;
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Uncurried_semigroupEffectFn4
$Effect_Uncurried_semigroupEffectFn4 = (function() use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn4, &$Effect_Uncurried_runEffectFn4) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn4, &$Effect_Uncurried_runEffectFn4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)(($Effect_semigroupEffect)($dictSemigroup));
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Effect_Uncurried_mkEffectFn4, $append, &$Effect_Uncurried_runEffectFn4) {
  $__fn = function($f1, $f2 = null) use (&$Effect_Uncurried_mkEffectFn4, $append, &$Effect_Uncurried_runEffectFn4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Uncurried_mkEffectFn4)((function() use ($append, &$Effect_Uncurried_runEffectFn4, $f1, $f2) {
  $__fn = function($a, $b = null, $c = null, $d = null) use ($append, &$Effect_Uncurried_runEffectFn4, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)(($Effect_Uncurried_runEffectFn4)($f1, $a, $b, $c, $d), ($Effect_Uncurried_runEffectFn4)($f2, $a, $b, $c, $d));
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__res;
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Uncurried_semigroupEffectFn3
$Effect_Uncurried_semigroupEffectFn3 = (function() use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn3, &$Effect_Uncurried_runEffectFn3) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn3, &$Effect_Uncurried_runEffectFn3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)(($Effect_semigroupEffect)($dictSemigroup));
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Effect_Uncurried_mkEffectFn3, $append, &$Effect_Uncurried_runEffectFn3) {
  $__fn = function($f1, $f2 = null) use (&$Effect_Uncurried_mkEffectFn3, $append, &$Effect_Uncurried_runEffectFn3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Uncurried_mkEffectFn3)((function() use ($append, &$Effect_Uncurried_runEffectFn3, $f1, $f2) {
  $__fn = function($a, $b = null, $c = null) use ($append, &$Effect_Uncurried_runEffectFn3, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)(($Effect_Uncurried_runEffectFn3)($f1, $a, $b, $c), ($Effect_Uncurried_runEffectFn3)($f2, $a, $b, $c));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Uncurried_semigroupEffectFn2
$Effect_Uncurried_semigroupEffectFn2 = (function() use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn2, &$Effect_Uncurried_runEffectFn2) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn2, &$Effect_Uncurried_runEffectFn2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)(($Effect_semigroupEffect)($dictSemigroup));
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Effect_Uncurried_mkEffectFn2, $append, &$Effect_Uncurried_runEffectFn2) {
  $__fn = function($f1, $f2 = null) use (&$Effect_Uncurried_mkEffectFn2, $append, &$Effect_Uncurried_runEffectFn2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Uncurried_mkEffectFn2)((function() use ($append, &$Effect_Uncurried_runEffectFn2, $f1, $f2) {
  $__fn = function($a, $b = null) use ($append, &$Effect_Uncurried_runEffectFn2, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)(($Effect_Uncurried_runEffectFn2)($f1, $a, $b), ($Effect_Uncurried_runEffectFn2)($f2, $a, $b));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Uncurried_semigroupEffectFn10
$Effect_Uncurried_semigroupEffectFn10 = (function() use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn10, &$Effect_Uncurried_runEffectFn10) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn10, &$Effect_Uncurried_runEffectFn10, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)(($Effect_semigroupEffect)($dictSemigroup));
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Effect_Uncurried_mkEffectFn10, $append, &$Effect_Uncurried_runEffectFn10) {
  $__fn = function($f1, $f2 = null) use (&$Effect_Uncurried_mkEffectFn10, $append, &$Effect_Uncurried_runEffectFn10, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Uncurried_mkEffectFn10)((function() use ($append, &$Effect_Uncurried_runEffectFn10, $f1, $f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) use ($append, &$Effect_Uncurried_runEffectFn10, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 10) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)(($Effect_Uncurried_runEffectFn10)($f1, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j), ($Effect_Uncurried_runEffectFn10)($f2, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j));
    if ($__num > 10) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 10));
    }
    return $__res;
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Uncurried_semigroupEffectFn1
$Effect_Uncurried_semigroupEffectFn1 = (function() use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn1, &$Effect_Uncurried_runEffectFn1) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Effect_semigroupEffect, &$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Uncurried_mkEffectFn1, &$Effect_Uncurried_runEffectFn1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)(($Effect_semigroupEffect)($dictSemigroup));
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Effect_Uncurried_mkEffectFn1, $append, &$Effect_Uncurried_runEffectFn1) {
  $__fn = function($f1, $f2 = null) use (&$Effect_Uncurried_mkEffectFn1, $append, &$Effect_Uncurried_runEffectFn1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Uncurried_mkEffectFn1)((function() use ($append, &$Effect_Uncurried_runEffectFn1, $f1, $f2) {
  $__fn = function($a) use ($append, &$Effect_Uncurried_runEffectFn1, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)(($Effect_Uncurried_runEffectFn1)($f1, $a), ($Effect_Uncurried_runEffectFn1)($f2, $a));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Uncurried_monoidEffectFn9
$Effect_Uncurried_monoidEffectFn9 = (function() use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn9, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn9) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn9, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn9, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)(($Effect_monoidEffect)($dictMonoid));
$semigroupEffectFn91 = ($Effect_Uncurried_semigroupEffectFn9)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Effect_Uncurried_mkEffectFn9)((function() use ($mempty) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null, $v6 = null, $v7 = null, $v8 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 9) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $mempty;
    if ($__num > 9) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 9));
    }
    return $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn91) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn91, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupEffectFn91;
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

// Effect_Uncurried_monoidEffectFn8
$Effect_Uncurried_monoidEffectFn8 = (function() use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn8, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn8) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn8, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)(($Effect_monoidEffect)($dictMonoid));
$semigroupEffectFn81 = ($Effect_Uncurried_semigroupEffectFn8)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Effect_Uncurried_mkEffectFn8)((function() use ($mempty) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null, $v6 = null, $v7 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 8) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $mempty;
    if ($__num > 8) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 8));
    }
    return $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn81) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn81, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupEffectFn81;
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

// Effect_Uncurried_monoidEffectFn7
$Effect_Uncurried_monoidEffectFn7 = (function() use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn7, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn7) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn7, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn7, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)(($Effect_monoidEffect)($dictMonoid));
$semigroupEffectFn71 = ($Effect_Uncurried_semigroupEffectFn7)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Effect_Uncurried_mkEffectFn7)((function() use ($mempty) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null, $v6 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 7) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $mempty;
    if ($__num > 7) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 7));
    }
    return $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn71) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn71, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupEffectFn71;
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

// Effect_Uncurried_monoidEffectFn6
$Effect_Uncurried_monoidEffectFn6 = (function() use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn6, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn6) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn6, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn6, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)(($Effect_monoidEffect)($dictMonoid));
$semigroupEffectFn61 = ($Effect_Uncurried_semigroupEffectFn6)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Effect_Uncurried_mkEffectFn6)((function() use ($mempty) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $mempty;
    if ($__num > 6) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 6));
    }
    return $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn61) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn61, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupEffectFn61;
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

// Effect_Uncurried_monoidEffectFn5
$Effect_Uncurried_monoidEffectFn5 = (function() use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn5, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn5) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn5, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn5, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)(($Effect_monoidEffect)($dictMonoid));
$semigroupEffectFn51 = ($Effect_Uncurried_semigroupEffectFn5)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Effect_Uncurried_mkEffectFn5)((function() use ($mempty) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $mempty;
    if ($__num > 5) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 5));
    }
    return $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn51) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn51, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupEffectFn51;
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

// Effect_Uncurried_monoidEffectFn4
$Effect_Uncurried_monoidEffectFn4 = (function() use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn4, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn4) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn4, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)(($Effect_monoidEffect)($dictMonoid));
$semigroupEffectFn41 = ($Effect_Uncurried_semigroupEffectFn4)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Effect_Uncurried_mkEffectFn4)((function() use ($mempty) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $mempty;
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn41) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn41, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupEffectFn41;
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

// Effect_Uncurried_monoidEffectFn3
$Effect_Uncurried_monoidEffectFn3 = (function() use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn3, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn3) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn3, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)(($Effect_monoidEffect)($dictMonoid));
$semigroupEffectFn31 = ($Effect_Uncurried_semigroupEffectFn3)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Effect_Uncurried_mkEffectFn3)((function() use ($mempty) {
  $__fn = function($v, $v1 = null, $v2 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $mempty;
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn31) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn31, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupEffectFn31;
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

// Effect_Uncurried_monoidEffectFn2
$Effect_Uncurried_monoidEffectFn2 = (function() use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn2, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn2) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn2, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)(($Effect_monoidEffect)($dictMonoid));
$semigroupEffectFn21 = ($Effect_Uncurried_semigroupEffectFn2)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Effect_Uncurried_mkEffectFn2)((function() use ($mempty) {
  $__fn = function($v, $v1 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $mempty;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn21) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn21, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupEffectFn21;
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

// Effect_Uncurried_monoidEffectFn10
$Effect_Uncurried_monoidEffectFn10 = (function() use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn10, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn10) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn10, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn10, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)(($Effect_monoidEffect)($dictMonoid));
$semigroupEffectFn101 = ($Effect_Uncurried_semigroupEffectFn10)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Effect_Uncurried_mkEffectFn10)((function() use ($mempty) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null, $v6 = null, $v7 = null, $v8 = null, $v9 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 10) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $mempty;
    if ($__num > 10) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 10));
    }
    return $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn101) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn101, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupEffectFn101;
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

// Effect_Uncurried_monoidEffectFn1
$Effect_Uncurried_monoidEffectFn1 = (function() use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn1) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Effect_monoidEffect, &$Effect_Uncurried_semigroupEffectFn1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Uncurried_mkEffectFn1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)(($Effect_monoidEffect)($dictMonoid));
$semigroupEffectFn11 = ($Effect_Uncurried_semigroupEffectFn1)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Effect_Uncurried_mkEffectFn1)((function() use ($mempty) {
  $__fn = function($v) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $mempty;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), "Semigroup0" => (function() use ($semigroupEffectFn11) {
  $__fn = function($__dollar____unused) use ($semigroupEffectFn11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupEffectFn11;
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

