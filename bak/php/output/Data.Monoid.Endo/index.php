<?php

namespace Data\Monoid\Endo;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Endo/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Monoid_Endo_append
$Data_Monoid_Endo_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Monoid_Endo_Endo
$Data_Monoid_Endo_Endo = (function() {
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

// Data_Monoid_Endo_showEndo
$Data_Monoid_Endo_showEndo = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Monoid_Endo_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Monoid_Endo_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Monoid_Endo_append, $show) {
  $__body = function($v) use (&$Data_Monoid_Endo_append, $show) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($Data_Monoid_Endo_append)("(Endo ", ($Data_Monoid_Endo_append)(($show)($x), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Monoid_Endo_append, $show, $__body, &$__fn) {
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

// Data_Monoid_Endo_semigroupEndo
$Data_Monoid_Endo_semigroupEndo = (function() use (&$Control_Semigroupoid_compose, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Monoid_Endo_Endo) {
  $__fn = function($dictSemigroupoid) use (&$Control_Semigroupoid_compose, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Monoid_Endo_Endo, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compose = ($Control_Semigroupoid_compose)($dictSemigroupoid);
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Monoid_Endo_Endo, $compose) {
  $__body = function($v, $v1) use (&$Data_Monoid_Endo_Endo, $compose) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($Data_Monoid_Endo_Endo)(($compose)($a, $b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Monoid_Endo_Endo, $compose, $__body, &$__fn) {
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

// Data_Monoid_Endo_ordEndo
$Data_Monoid_Endo_ordEndo = (function() {
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

// Data_Monoid_Endo_monoidEndo
$Data_Monoid_Endo_monoidEndo = (function() use (&$Data_Monoid_Endo_semigroupEndo, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_Endo_Endo, &$Control_Category_identity) {
  $__fn = function($dictCategory) use (&$Data_Monoid_Endo_semigroupEndo, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_Endo_Endo, &$Control_Category_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupEndo1 = ($Data_Monoid_Endo_semigroupEndo)((($dictCategory)->Semigroupoid0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Monoid_Endo_Endo)(($Control_Category_identity)($dictCategory)), "Semigroup0" => (function() use ($semigroupEndo1) {
  $__fn = function($__dollar____unused) use ($semigroupEndo1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupEndo1;
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

// Data_Monoid_Endo_eqEndo
$Data_Monoid_Endo_eqEndo = (function() {
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

// Data_Monoid_Endo_boundedEndo
$Data_Monoid_Endo_boundedEndo = (function() {
  $__fn = function($dictBounded) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $dictBounded;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

