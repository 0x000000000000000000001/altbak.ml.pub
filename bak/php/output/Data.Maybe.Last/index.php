<?php

namespace Data\Maybe\Last;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Maybe_Last_append
$Data_Maybe_Last_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Maybe_Last_Last
$Data_Maybe_Last_Last = (function() {
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

// Data_Maybe_Last_showLast
$Data_Maybe_Last_showLast = (function() use (&$Data_Show_show, &$Data_Maybe_showMaybe, &$Data_Show_Show__dollar__Dict, &$Data_Maybe_Last_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Maybe_showMaybe, &$Data_Show_Show__dollar__Dict, &$Data_Maybe_Last_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)(($Data_Maybe_showMaybe)($dictShow));
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Maybe_Last_append, $show) {
  $__body = function($v) use (&$Data_Maybe_Last_append, $show) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($Data_Maybe_Last_append)("(Last ", ($Data_Maybe_Last_append)(($show)($a), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_Last_append, $show, $__body, &$__fn) {
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

// Data_Maybe_Last_semigroupLast
$Data_Maybe_Last_semigroupLast = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Just")) {
$last = $__case_1;
return $last;
} else {
;
};
    if ((($__case_1)->tag === "Nothing")) {
$last = $__case_0;
return $last;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
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

// Data_Maybe_Last_ordLast
$Data_Maybe_Last_ordLast = (function() use (&$Data_Maybe_ordMaybe) {
  $__fn = function($dictOrd) use (&$Data_Maybe_ordMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_ordMaybe)($dictOrd);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Maybe_Last_ord1Last
$Data_Maybe_Last_ord1Last = $Data_Maybe_ord1Maybe;

// Data_Maybe_Last_newtypeLast
$Data_Maybe_Last_newtypeLast = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Maybe_Last_monoidLast
$Data_Maybe_Last_monoidLast = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Maybe_Last_Last)($Data_Maybe_Nothing), "Semigroup0" => (function() use (&$Data_Maybe_Last_semigroupLast) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_Last_semigroupLast, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_Last_semigroupLast;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Maybe_Last_monadLast
$Data_Maybe_Last_monadLast = $Data_Maybe_monadMaybe;

// Data_Maybe_Last_invariantLast
$Data_Maybe_Last_invariantLast = $Data_Maybe_invariantMaybe;

// Data_Maybe_Last_functorLast
$Data_Maybe_Last_functorLast = $Data_Maybe_functorMaybe;

// Data_Maybe_Last_extendLast
$Data_Maybe_Last_extendLast = $Data_Maybe_extendMaybe;

// Data_Maybe_Last_eqLast
$Data_Maybe_Last_eqLast = (function() use (&$Data_Maybe_eqMaybe) {
  $__fn = function($dictEq) use (&$Data_Maybe_eqMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_eqMaybe)($dictEq);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Maybe_Last_eq1Last
$Data_Maybe_Last_eq1Last = $Data_Maybe_eq1Maybe;

// Data_Maybe_Last_boundedLast
$Data_Maybe_Last_boundedLast = (function() use (&$Data_Maybe_boundedMaybe) {
  $__fn = function($dictBounded) use (&$Data_Maybe_boundedMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_boundedMaybe)($dictBounded);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Maybe_Last_bindLast
$Data_Maybe_Last_bindLast = $Data_Maybe_bindMaybe;

// Data_Maybe_Last_applyLast
$Data_Maybe_Last_applyLast = $Data_Maybe_applyMaybe;

// Data_Maybe_Last_applicativeLast
$Data_Maybe_Last_applicativeLast = $Data_Maybe_applicativeMaybe;

// Data_Maybe_Last_altLast
$Data_Maybe_Last_altLast = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => ($Data_Semigroup_append)($Data_Maybe_Last_semigroupLast), "Functor0" => (function() use (&$Data_Maybe_Last_functorLast) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_Last_functorLast, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_Last_functorLast;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Maybe_Last_plusLast
$Data_Maybe_Last_plusLast = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => ($Data_Monoid_mempty)($Data_Maybe_Last_monoidLast), "Alt0" => (function() use (&$Data_Maybe_Last_altLast) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_Last_altLast, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_Last_altLast;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Maybe_Last_alternativeLast
$Data_Maybe_Last_alternativeLast = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_Maybe_Last_applicativeLast) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_Last_applicativeLast, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_Last_applicativeLast;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use (&$Data_Maybe_Last_plusLast) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_Last_plusLast, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_Last_plusLast;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

