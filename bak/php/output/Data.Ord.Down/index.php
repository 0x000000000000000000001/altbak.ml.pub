<?php

namespace Data\Ord\Down;

require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ord.Down/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Ord_Down_append
$Data_Ord_Down_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Ord_Down_Down
$Data_Ord_Down_Down = (function() {
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

// Data_Ord_Down_showDown
$Data_Ord_Down_showDown = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Ord_Down_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Ord_Down_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Ord_Down_append, $show) {
  $__body = function($v) use (&$Data_Ord_Down_append, $show) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($Data_Ord_Down_append)("(Down ", ($Data_Ord_Down_append)(($show)($a), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Ord_Down_append, $show, $__body, &$__fn) {
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

// Data_Ord_Down_newtypeDown
$Data_Ord_Down_newtypeDown = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Ord_Down_eqDown
$Data_Ord_Down_eqDown = (function() {
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

// Data_Ord_Down_ordDown
$Data_Ord_Down_ordDown = (function() use (&$Data_Ord_compare, &$Data_Ord_Down_eqDown, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_invert) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Ord_Down_eqDown, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_invert, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
$eqDown1 = ($Data_Ord_Down_eqDown)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Ordering_invert, $compare) {
  $__body = function($v, $v1) use (&$Data_Ordering_invert, $compare) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($Data_Ordering_invert)(($compare)($x, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Ordering_invert, $compare, $__body, &$__fn) {
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
})(), "Eq0" => (function() use ($eqDown1) {
  $__fn = function($__dollar____unused) use ($eqDown1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqDown1;
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

// Data_Ord_Down_boundedDown
$Data_Ord_Down_boundedDown = (function() use (&$Data_Ord_Down_ordDown, &$Prim_undefined, &$Data_Bounded_Bounded__dollar__Dict, &$Data_Ord_Down_Down, &$Data_Bounded_bottom, &$Data_Bounded_top) {
  $__fn = function($dictBounded) use (&$Data_Ord_Down_ordDown, &$Prim_undefined, &$Data_Bounded_Bounded__dollar__Dict, &$Data_Ord_Down_Down, &$Data_Bounded_bottom, &$Data_Bounded_top, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ordDown1 = ($Data_Ord_Down_ordDown)((($dictBounded)->Ord0)($Prim_undefined));
    $__res = ($Data_Bounded_Bounded__dollar__Dict)((object)["top" => ($Data_Ord_Down_Down)(($Data_Bounded_bottom)($dictBounded)), "bottom" => ($Data_Ord_Down_Down)(($Data_Bounded_top)($dictBounded)), "Ord0" => (function() use ($ordDown1) {
  $__fn = function($__dollar____unused) use ($ordDown1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $ordDown1;
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

