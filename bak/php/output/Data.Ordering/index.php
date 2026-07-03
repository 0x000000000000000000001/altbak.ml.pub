<?php

namespace Data\Ordering;

require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Ordering_LT
$Data_Ordering_LT = (object)["tag" => "LT", "values" => []];

// Data_Ordering_GT
$Data_Ordering_GT = (object)["tag" => "GT", "values" => []];

// Data_Ordering_EQ
$Data_Ordering_EQ = (object)["tag" => "EQ", "values" => []];

// Data_Ordering_showOrdering
$Data_Ordering_showOrdering = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "LT")) {
return "LT";
} else {
;
};
    if ((($__case_0)->tag === "GT")) {
return "GT";
} else {
;
};
    if ((($__case_0)->tag === "EQ")) {
return "EQ";
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
})()]);

// Data_Ordering_semigroupOrdering
$Data_Ordering_semigroupOrdering = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__body = function($v, $v1) use (&$Data_Ordering_LT, &$Data_Ordering_GT) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "LT")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_0)->tag === "GT")) {
return $Data_Ordering_GT;
} else {
;
};
    if ((($__case_0)->tag === "EQ")) {
$y = $__case_1;
return $y;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Ordering_LT, &$Data_Ordering_GT, $__body, &$__fn) {
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

// Data_Ordering_invert
$Data_Ordering_invert = (function() use (&$Data_Ordering_LT, &$Data_Ordering_EQ, &$Data_Ordering_GT) {
  $__body = function($v) use (&$Data_Ordering_LT, &$Data_Ordering_EQ, &$Data_Ordering_GT) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "GT")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_0)->tag === "EQ")) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "LT")) {
return $Data_Ordering_GT;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Ordering_LT, &$Data_Ordering_EQ, &$Data_Ordering_GT, $__body, &$__fn) {
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
})();

// Data_Ordering_eqOrdering
$Data_Ordering_eqOrdering = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "LT") && (($__case_1)->tag === "LT"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "GT") && (($__case_1)->tag === "GT"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "EQ") && (($__case_1)->tag === "EQ"))) {
return true;
} else {
;
};
    if (true) {
return false;
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

