<?php

namespace Data\Generic\Rep;

require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Void/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Generic_Rep_append
$Data_Generic_Rep_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Generic_Rep_show
$Data_Generic_Rep_show = ($Data_Show_show)($Data_Show_showString);

// Data_Generic_Rep_Inl
$Data_Generic_Rep_Inl = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Inl", "values" => [$value0]];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Generic_Rep_Inr
$Data_Generic_Rep_Inr = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Inr", "values" => [$value0]];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Generic_Rep_Product
$Data_Generic_Rep_Product = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Product", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Generic_Rep_NoConstructors
$Data_Generic_Rep_NoConstructors = (function() {
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

// Data_Generic_Rep_NoArguments
$Data_Generic_Rep_NoArguments = (object)["tag" => "NoArguments", "values" => []];

// Data_Generic_Rep_Generic$Dict
$Data_Generic_Rep_Generic__dollar__Dict = (function() {
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

// Data_Generic_Rep_Constructor
$Data_Generic_Rep_Constructor = (function() {
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

// Data_Generic_Rep_Argument
$Data_Generic_Rep_Argument = (function() {
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

// Data_Generic_Rep_to
$Data_Generic_Rep_to = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->to;
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

// Data_Generic_Rep_showSum
$Data_Generic_Rep_showSum = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Generic_Rep_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Generic_Rep_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show1 = ($Data_Show_show)($dictShow);
    $__res = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Generic_Rep_append, $show1) {
  $__fn = function($dictShow1) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Generic_Rep_append, $show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show2 = ($Data_Show_show)($dictShow1);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Generic_Rep_append, $show1, $show2) {
  $__body = function($v) use (&$Data_Generic_Rep_append, $show1, $show2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Inl")) {
$a = ($__case_0)->values[0];
return ($Data_Generic_Rep_append)("(Inl ", ($Data_Generic_Rep_append)(($show1)($a), ")"));
} else {
;
};
    if ((($__case_0)->tag === "Inr")) {
$b = ($__case_0)->values[0];
return ($Data_Generic_Rep_append)("(Inr ", ($Data_Generic_Rep_append)(($show2)($b), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Generic_Rep_append, $show1, $show2, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Generic_Rep_showProduct
$Data_Generic_Rep_showProduct = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Generic_Rep_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Generic_Rep_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show1 = ($Data_Show_show)($dictShow);
    $__res = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Generic_Rep_append, $show1) {
  $__fn = function($dictShow1) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Generic_Rep_append, $show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show2 = ($Data_Show_show)($dictShow1);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Generic_Rep_append, $show1, $show2) {
  $__body = function($v) use (&$Data_Generic_Rep_append, $show1, $show2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Product")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($Data_Generic_Rep_append)("(Product ", ($Data_Generic_Rep_append)(($show1)($a), ($Data_Generic_Rep_append)(" ", ($Data_Generic_Rep_append)(($show2)($b), ")"))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Generic_Rep_append, $show1, $show2, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Generic_Rep_showNoArguments
$Data_Generic_Rep_showNoArguments = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = "NoArguments";
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Generic_Rep_showConstructor
$Data_Generic_Rep_showConstructor = (function() use (&$Data_Symbol_reflectSymbol, &$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Generic_Rep_append, &$Data_Generic_Rep_show, &$Type_Proxy_Proxy) {
  $__fn = function($dictIsSymbol) use (&$Data_Symbol_reflectSymbol, &$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Generic_Rep_append, &$Data_Generic_Rep_show, &$Type_Proxy_Proxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$reflectSymbol = ($Data_Symbol_reflectSymbol)($dictIsSymbol);
    $__res = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Generic_Rep_append, &$Data_Generic_Rep_show, $reflectSymbol, &$Type_Proxy_Proxy) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Generic_Rep_append, &$Data_Generic_Rep_show, $reflectSymbol, &$Type_Proxy_Proxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show1 = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Generic_Rep_append, &$Data_Generic_Rep_show, $reflectSymbol, &$Type_Proxy_Proxy, $show1) {
  $__body = function($v) use (&$Data_Generic_Rep_append, &$Data_Generic_Rep_show, $reflectSymbol, &$Type_Proxy_Proxy, $show1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($Data_Generic_Rep_append)("(Constructor @", ($Data_Generic_Rep_append)(($Data_Generic_Rep_show)(($reflectSymbol)($Type_Proxy_Proxy)), ($Data_Generic_Rep_append)(" ", ($Data_Generic_Rep_append)(($show1)($a), ")"))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Generic_Rep_append, &$Data_Generic_Rep_show, $reflectSymbol, &$Type_Proxy_Proxy, $show1, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Generic_Rep_showArgument
$Data_Generic_Rep_showArgument = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Generic_Rep_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Generic_Rep_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show1 = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Generic_Rep_append, $show1) {
  $__body = function($v) use (&$Data_Generic_Rep_append, $show1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($Data_Generic_Rep_append)("(Argument ", ($Data_Generic_Rep_append)(($show1)($a), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Generic_Rep_append, $show1, $__body, &$__fn) {
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

// Data_Generic_Rep_repOf
$Data_Generic_Rep_repOf = (function() use (&$Type_Proxy_Proxy) {
  $__fn = function($dictGeneric, $v = null) use (&$Type_Proxy_Proxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Type_Proxy_Proxy;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Generic_Rep_from
$Data_Generic_Rep_from = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->from;
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

