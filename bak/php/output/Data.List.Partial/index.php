<?php

namespace Data\List\Partial;

require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Partial/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_List_Partial_tail
$Data_List_Partial_tail = (function() use (&$Prim_undefined) {
  $__fn = function($__dollar____unused, $v = null) use (&$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ((function() use ($v) {
  $__body = function($__dollar____unused) use ($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Cons")) {
$xs = ($__case_0)->values[1];
return $xs;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($__dollar____unused) use ($v, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($__dollar____unused);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($__dollar____unused);
  };
  return $__fn;
})())($Prim_undefined);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Partial_last
$Data_List_Partial_last = (function() use (&$Data_List_Partial_last, &$Prim_undefined) {
  $__fn = function($__dollar____unused, $v = null) use (&$Data_List_Partial_last, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($__dollar____unused, $v) use (&$Data_List_Partial_last, &$Prim_undefined) {
while (true) {
return ((function() use ($v, &$Data_List_Partial_last, &$Prim_undefined) {
  $__body = function($__dollar____unused) use ($v, &$Data_List_Partial_last, &$Prim_undefined) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[1])->tag === "Nil"))) {
$x = ($__case_0)->values[0];
return $x;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$xs = ($__case_0)->values[1];
return ($Data_List_Partial_last)($Prim_undefined, $xs);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($__dollar____unused) use ($v, &$Data_List_Partial_last, &$Prim_undefined, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($__dollar____unused);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($__dollar____unused);
  };
  return $__fn;
})())($Prim_undefined);
}
})($__dollar____unused, $v);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Partial_init
$Data_List_Partial_init = (function() use (&$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_Partial_init, &$Prim_undefined) {
  $__fn = function($__dollar____unused, $v = null) use (&$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_Partial_init, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($__dollar____unused, $v) use (&$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_Partial_init, &$Prim_undefined) {
while (true) {
return ((function() use ($v, &$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_Partial_init, &$Prim_undefined) {
  $__body = function($__dollar____unused) use ($v, &$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_Partial_init, &$Prim_undefined) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[1])->tag === "Nil"))) {
return $Data_List_Types_Nil;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Data_List_Types_Cons)($x, ($Data_List_Partial_init)($Prim_undefined, $xs));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($__dollar____unused) use ($v, &$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_Partial_init, &$Prim_undefined, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($__dollar____unused);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($__dollar____unused);
  };
  return $__fn;
})())($Prim_undefined);
}
})($__dollar____unused, $v);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Partial_head
$Data_List_Partial_head = (function() use (&$Prim_undefined) {
  $__fn = function($__dollar____unused, $v = null) use (&$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ((function() use ($v) {
  $__body = function($__dollar____unused) use ($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
return $x;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($__dollar____unused) use ($v, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($__dollar____unused);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($__dollar____unused);
  };
  return $__fn;
})())($Prim_undefined);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

