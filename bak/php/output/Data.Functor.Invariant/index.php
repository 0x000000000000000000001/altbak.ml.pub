<?php

namespace Data\Functor\Invariant;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Alternate/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Endo/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Functor_Invariant_compose
$Data_Functor_Invariant_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Functor_Invariant_Invariant$Dict
$Data_Functor_Invariant_Invariant__dollar__Dict = (function() {
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

// Data_Functor_Invariant_invariantMultiplicative
$Data_Functor_Invariant_invariantMultiplicative = ($Data_Functor_Invariant_Invariant__dollar__Dict)((object)["imap" => (function() use (&$Data_Monoid_Multiplicative_Multiplicative) {
  $__body = function($f, $v, $v1) use (&$Data_Monoid_Multiplicative_Multiplicative) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$x = $__case_2;
return ($Data_Monoid_Multiplicative_Multiplicative)(($f1)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $v1 = null) use (&$Data_Monoid_Multiplicative_Multiplicative, $__body, &$__fn) {
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

// Data_Functor_Invariant_invariantEndo
$Data_Functor_Invariant_invariantEndo = ($Data_Functor_Invariant_Invariant__dollar__Dict)((object)["imap" => (function() use (&$Data_Monoid_Endo_Endo, &$Data_Functor_Invariant_compose) {
  $__body = function($ab, $ba, $v) use (&$Data_Monoid_Endo_Endo, &$Data_Functor_Invariant_compose) {
    $__case_0 = $ab;
    $__case_1 = $ba;
    $__case_2 = $v;
    if (true) {
$ab1 = $__case_0;
$ba1 = $__case_1;
$f = $__case_2;
return ($Data_Monoid_Endo_Endo)(($Data_Functor_Invariant_compose)($ab1, ($Data_Functor_Invariant_compose)($f, $ba1)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($ab, $ba = null, $v = null) use (&$Data_Monoid_Endo_Endo, &$Data_Functor_Invariant_compose, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($ab, $ba, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($ab, $ba, $v);
  };
  return $__fn;
})()]);

// Data_Functor_Invariant_invariantDual
$Data_Functor_Invariant_invariantDual = ($Data_Functor_Invariant_Invariant__dollar__Dict)((object)["imap" => (function() use (&$Data_Monoid_Dual_Dual) {
  $__body = function($f, $v, $v1) use (&$Data_Monoid_Dual_Dual) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$x = $__case_2;
return ($Data_Monoid_Dual_Dual)(($f1)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $v1 = null) use (&$Data_Monoid_Dual_Dual, $__body, &$__fn) {
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

// Data_Functor_Invariant_invariantDisj
$Data_Functor_Invariant_invariantDisj = ($Data_Functor_Invariant_Invariant__dollar__Dict)((object)["imap" => (function() use (&$Data_Monoid_Disj_Disj) {
  $__body = function($f, $v, $v1) use (&$Data_Monoid_Disj_Disj) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$x = $__case_2;
return ($Data_Monoid_Disj_Disj)(($f1)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $v1 = null) use (&$Data_Monoid_Disj_Disj, $__body, &$__fn) {
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

// Data_Functor_Invariant_invariantConj
$Data_Functor_Invariant_invariantConj = ($Data_Functor_Invariant_Invariant__dollar__Dict)((object)["imap" => (function() use (&$Data_Monoid_Conj_Conj) {
  $__body = function($f, $v, $v1) use (&$Data_Monoid_Conj_Conj) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$x = $__case_2;
return ($Data_Monoid_Conj_Conj)(($f1)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $v1 = null) use (&$Data_Monoid_Conj_Conj, $__body, &$__fn) {
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

// Data_Functor_Invariant_invariantAdditive
$Data_Functor_Invariant_invariantAdditive = ($Data_Functor_Invariant_Invariant__dollar__Dict)((object)["imap" => (function() use (&$Data_Monoid_Additive_Additive) {
  $__body = function($f, $v, $v1) use (&$Data_Monoid_Additive_Additive) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$x = $__case_2;
return ($Data_Monoid_Additive_Additive)(($f1)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $v1 = null) use (&$Data_Monoid_Additive_Additive, $__body, &$__fn) {
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

// Data_Functor_Invariant_imapF
$Data_Functor_Invariant_imapF = (function() use (&$Data_Functor_map) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use ($map) {
  $__fn = function($f, $v = null) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($map)($f);
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

// Data_Functor_Invariant_invariantArray
$Data_Functor_Invariant_invariantArray = ($Data_Functor_Invariant_Invariant__dollar__Dict)((object)["imap" => ($Data_Functor_Invariant_imapF)($Data_Functor_functorArray)]);

// Data_Functor_Invariant_invariantFn
$Data_Functor_Invariant_invariantFn = ($Data_Functor_Invariant_Invariant__dollar__Dict)((object)["imap" => ($Data_Functor_Invariant_imapF)($Data_Functor_functorFn)]);

// Data_Functor_Invariant_imap
$Data_Functor_Invariant_imap = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->imap;
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

// Data_Functor_Invariant_invariantAlternate
$Data_Functor_Invariant_invariantAlternate = (function() use (&$Data_Functor_Invariant_imap, &$Data_Functor_Invariant_Invariant__dollar__Dict, &$Data_Monoid_Alternate_Alternate) {
  $__fn = function($dictInvariant) use (&$Data_Functor_Invariant_imap, &$Data_Functor_Invariant_Invariant__dollar__Dict, &$Data_Monoid_Alternate_Alternate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$imap1 = ($Data_Functor_Invariant_imap)($dictInvariant);
    $__res = ($Data_Functor_Invariant_Invariant__dollar__Dict)((object)["imap" => (function() use (&$Data_Monoid_Alternate_Alternate, $imap1) {
  $__body = function($f, $g, $v) use (&$Data_Monoid_Alternate_Alternate, $imap1) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$x = $__case_2;
return ($Data_Monoid_Alternate_Alternate)(($imap1)($f1, $g1, $x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $g = null, $v = null) use (&$Data_Monoid_Alternate_Alternate, $imap1, $__body, &$__fn) {
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

