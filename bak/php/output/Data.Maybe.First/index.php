<?php

namespace Data\Maybe\First;

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
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Maybe_First_append
$Data_Maybe_First_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Maybe_First_First
$Data_Maybe_First_First = (function() {
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

// Data_Maybe_First_showFirst
$Data_Maybe_First_showFirst = (function() use (&$Data_Show_show, &$Data_Maybe_showMaybe, &$Data_Show_Show__dollar__Dict, &$Data_Maybe_First_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Maybe_showMaybe, &$Data_Show_Show__dollar__Dict, &$Data_Maybe_First_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)(($Data_Maybe_showMaybe)($dictShow));
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Maybe_First_append, $show) {
  $__body = function($v) use (&$Data_Maybe_First_append, $show) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($Data_Maybe_First_append)("First (", ($Data_Maybe_First_append)(($show)($a), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_First_append, $show, $__body, &$__fn) {
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

// Data_Maybe_First_semigroupFirst
$Data_Maybe_First_semigroupFirst = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Just")) {
$first = $__case_0;
return $first;
} else {
;
};
    if (true) {
$second = $__case_1;
return $second;
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

// Data_Maybe_First_ordFirst
$Data_Maybe_First_ordFirst = (function() use (&$Data_Maybe_ordMaybe) {
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

// Data_Maybe_First_ord1First
$Data_Maybe_First_ord1First = $Data_Maybe_ord1Maybe;

// Data_Maybe_First_newtypeFirst
$Data_Maybe_First_newtypeFirst = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Maybe_First_monoidFirst
$Data_Maybe_First_monoidFirst = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Maybe_First_First)($Data_Maybe_Nothing), "Semigroup0" => (function() use (&$Data_Maybe_First_semigroupFirst) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_First_semigroupFirst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_First_semigroupFirst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Maybe_First_monadFirst
$Data_Maybe_First_monadFirst = $Data_Maybe_monadMaybe;

// Data_Maybe_First_invariantFirst
$Data_Maybe_First_invariantFirst = $Data_Maybe_invariantMaybe;

// Data_Maybe_First_functorFirst
$Data_Maybe_First_functorFirst = $Data_Maybe_functorMaybe;

// Data_Maybe_First_extendFirst
$Data_Maybe_First_extendFirst = $Data_Maybe_extendMaybe;

// Data_Maybe_First_eqFirst
$Data_Maybe_First_eqFirst = (function() use (&$Data_Maybe_eqMaybe) {
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

// Data_Maybe_First_eq1First
$Data_Maybe_First_eq1First = $Data_Maybe_eq1Maybe;

// Data_Maybe_First_boundedFirst
$Data_Maybe_First_boundedFirst = (function() use (&$Data_Maybe_boundedMaybe) {
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

// Data_Maybe_First_bindFirst
$Data_Maybe_First_bindFirst = $Data_Maybe_bindMaybe;

// Data_Maybe_First_applyFirst
$Data_Maybe_First_applyFirst = $Data_Maybe_applyMaybe;

// Data_Maybe_First_applicativeFirst
$Data_Maybe_First_applicativeFirst = $Data_Maybe_applicativeMaybe;

// Data_Maybe_First_altFirst
$Data_Maybe_First_altFirst = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => ($Data_Semigroup_append)($Data_Maybe_First_semigroupFirst), "Functor0" => (function() use (&$Data_Maybe_First_functorFirst) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_First_functorFirst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_First_functorFirst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Maybe_First_plusFirst
$Data_Maybe_First_plusFirst = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => ($Data_Monoid_mempty)($Data_Maybe_First_monoidFirst), "Alt0" => (function() use (&$Data_Maybe_First_altFirst) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_First_altFirst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_First_altFirst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Maybe_First_alternativeFirst
$Data_Maybe_First_alternativeFirst = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_Maybe_First_applicativeFirst) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_First_applicativeFirst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_First_applicativeFirst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use (&$Data_Maybe_First_plusFirst) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_First_plusFirst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_First_plusFirst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

