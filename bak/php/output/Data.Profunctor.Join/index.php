<?php

namespace Data\Profunctor\Join;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Join/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Profunctor_Join_append
$Data_Profunctor_Join_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Profunctor_Join_Join
$Data_Profunctor_Join_Join = (function() {
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

// Data_Profunctor_Join_showJoin
$Data_Profunctor_Join_showJoin = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Profunctor_Join_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Profunctor_Join_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Profunctor_Join_append, $show) {
  $__body = function($v) use (&$Data_Profunctor_Join_append, $show) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($Data_Profunctor_Join_append)("(Join ", ($Data_Profunctor_Join_append)(($show)($x), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Profunctor_Join_append, $show, $__body, &$__fn) {
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

// Data_Profunctor_Join_semigroupJoin
$Data_Profunctor_Join_semigroupJoin = (function() use (&$Control_Semigroupoid_compose, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Profunctor_Join_Join) {
  $__fn = function($dictSemigroupoid) use (&$Control_Semigroupoid_compose, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Profunctor_Join_Join, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compose = ($Control_Semigroupoid_compose)($dictSemigroupoid);
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Profunctor_Join_Join, $compose) {
  $__body = function($v, $v1) use (&$Data_Profunctor_Join_Join, $compose) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($Data_Profunctor_Join_Join)(($compose)($a, $b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Profunctor_Join_Join, $compose, $__body, &$__fn) {
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

// Data_Profunctor_Join_ordJoin
$Data_Profunctor_Join_ordJoin = (function() {
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

// Data_Profunctor_Join_newtypeJoin
$Data_Profunctor_Join_newtypeJoin = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Profunctor_Join_monoidJoin
$Data_Profunctor_Join_monoidJoin = (function() use (&$Data_Profunctor_Join_semigroupJoin, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Profunctor_Join_Join, &$Control_Category_identity) {
  $__fn = function($dictCategory) use (&$Data_Profunctor_Join_semigroupJoin, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Profunctor_Join_Join, &$Control_Category_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupJoin1 = ($Data_Profunctor_Join_semigroupJoin)((($dictCategory)->Semigroupoid0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Profunctor_Join_Join)(($Control_Category_identity)($dictCategory)), "Semigroup0" => (function() use ($semigroupJoin1) {
  $__fn = function($__dollar____unused) use ($semigroupJoin1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupJoin1;
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

// Data_Profunctor_Join_invariantJoin
$Data_Profunctor_Join_invariantJoin = (function() use (&$Data_Profunctor_dimap, &$Data_Functor_Invariant_Invariant__dollar__Dict, &$Data_Profunctor_Join_Join) {
  $__fn = function($dictProfunctor) use (&$Data_Profunctor_dimap, &$Data_Functor_Invariant_Invariant__dollar__Dict, &$Data_Profunctor_Join_Join, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$dimap = ($Data_Profunctor_dimap)($dictProfunctor);
    $__res = ($Data_Functor_Invariant_Invariant__dollar__Dict)((object)["imap" => (function() use (&$Data_Profunctor_Join_Join, $dimap) {
  $__body = function($f, $g, $v) use (&$Data_Profunctor_Join_Join, $dimap) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$a = $__case_2;
return ($Data_Profunctor_Join_Join)(($dimap)($g1, $f1, $a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $g = null, $v = null) use (&$Data_Profunctor_Join_Join, $dimap, $__body, &$__fn) {
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

// Data_Profunctor_Join_eqJoin
$Data_Profunctor_Join_eqJoin = (function() {
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

