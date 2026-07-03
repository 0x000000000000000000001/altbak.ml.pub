<?php

namespace Data\Show\Generic;

require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Show.Generic/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Show_Generic_append
$Data_Show_Generic_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupArray);

// Data_Show_Generic_append1
$Data_Show_Generic_append1 = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Show_Generic_GenericShowArgs$Dict
$Data_Show_Generic_GenericShowArgs__dollar__Dict = (function() {
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

// Data_Show_Generic_GenericShow$Dict
$Data_Show_Generic_GenericShow__dollar__Dict = (function() {
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

// Data_Show_Generic_genericShowArgsNoArguments
$Data_Show_Generic_genericShowArgsNoArguments = ($Data_Show_Generic_GenericShowArgs__dollar__Dict)((object)["genericShowArgs" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = [];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Show_Generic_genericShowArgsArgument
$Data_Show_Generic_genericShowArgsArgument = (function() use (&$Data_Show_show, &$Data_Show_Generic_GenericShowArgs__dollar__Dict) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Generic_GenericShowArgs__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Generic_GenericShowArgs__dollar__Dict)((object)["genericShowArgs" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return [($show)($a)];
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($show, $__body, &$__fn) {
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

// Data_Show_Generic_genericShowArgs
$Data_Show_Generic_genericShowArgs = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericShowArgs;
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

// Data_Show_Generic_genericShowArgsProduct
$Data_Show_Generic_genericShowArgsProduct = (function() use (&$Data_Show_Generic_genericShowArgs, &$Data_Show_Generic_GenericShowArgs__dollar__Dict, &$Data_Show_Generic_append) {
  $__fn = function($dictGenericShowArgs) use (&$Data_Show_Generic_genericShowArgs, &$Data_Show_Generic_GenericShowArgs__dollar__Dict, &$Data_Show_Generic_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericShowArgs1 = ($Data_Show_Generic_genericShowArgs)($dictGenericShowArgs);
    $__res = (function() use (&$Data_Show_Generic_genericShowArgs, &$Data_Show_Generic_GenericShowArgs__dollar__Dict, &$Data_Show_Generic_append, $genericShowArgs1) {
  $__fn = function($dictGenericShowArgs1) use (&$Data_Show_Generic_genericShowArgs, &$Data_Show_Generic_GenericShowArgs__dollar__Dict, &$Data_Show_Generic_append, $genericShowArgs1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericShowArgs2 = ($Data_Show_Generic_genericShowArgs)($dictGenericShowArgs1);
    $__res = ($Data_Show_Generic_GenericShowArgs__dollar__Dict)((object)["genericShowArgs" => (function() use (&$Data_Show_Generic_append, $genericShowArgs1, $genericShowArgs2) {
  $__body = function($v) use (&$Data_Show_Generic_append, $genericShowArgs1, $genericShowArgs2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Product")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($Data_Show_Generic_append)(($genericShowArgs1)($a), ($genericShowArgs2)($b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Show_Generic_append, $genericShowArgs1, $genericShowArgs2, $__body, &$__fn) {
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

// Data_Show_Generic_genericShowConstructor
$Data_Show_Generic_genericShowConstructor = (function() use (&$Data_Show_Generic_genericShowArgs, &$Data_Symbol_reflectSymbol, &$Data_Show_Generic_GenericShow__dollar__Dict, &$Type_Proxy_Proxy, &$Data_Show_Generic_append1, &$Data_Show_Generic_intercalate, &$Data_Show_Generic_append) {
  $__fn = function($dictGenericShowArgs) use (&$Data_Show_Generic_genericShowArgs, &$Data_Symbol_reflectSymbol, &$Data_Show_Generic_GenericShow__dollar__Dict, &$Type_Proxy_Proxy, &$Data_Show_Generic_append1, &$Data_Show_Generic_intercalate, &$Data_Show_Generic_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericShowArgs1 = ($Data_Show_Generic_genericShowArgs)($dictGenericShowArgs);
    $__res = (function() use (&$Data_Symbol_reflectSymbol, &$Data_Show_Generic_GenericShow__dollar__Dict, &$Type_Proxy_Proxy, $genericShowArgs1, &$Data_Show_Generic_append1, &$Data_Show_Generic_intercalate, &$Data_Show_Generic_append) {
  $__fn = function($dictIsSymbol) use (&$Data_Symbol_reflectSymbol, &$Data_Show_Generic_GenericShow__dollar__Dict, &$Type_Proxy_Proxy, $genericShowArgs1, &$Data_Show_Generic_append1, &$Data_Show_Generic_intercalate, &$Data_Show_Generic_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$reflectSymbol = ($Data_Symbol_reflectSymbol)($dictIsSymbol);
    $__res = ($Data_Show_Generic_GenericShow__dollar__Dict)((object)["genericShow'" => (function() use ($reflectSymbol, &$Type_Proxy_Proxy, $genericShowArgs1, &$Data_Show_Generic_append1, &$Data_Show_Generic_intercalate, &$Data_Show_Generic_append) {
  $__body = function($v) use ($reflectSymbol, &$Type_Proxy_Proxy, $genericShowArgs1, &$Data_Show_Generic_append1, &$Data_Show_Generic_intercalate, &$Data_Show_Generic_append) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
$ctor = ($reflectSymbol)($Type_Proxy_Proxy);
$v1 = ($genericShowArgs1)($a);
$__case_0 = $v1;
if (($__case_0 === /* ArrayLiteral */)) {
return $ctor;
} else {
;
};
if (true) {
$args = $__case_0;
return ($Data_Show_Generic_append1)("(", ($Data_Show_Generic_append1)(($Data_Show_Generic_intercalate)(" ", ($Data_Show_Generic_append)([$ctor], $args)), ")"));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($reflectSymbol, &$Type_Proxy_Proxy, $genericShowArgs1, &$Data_Show_Generic_append1, &$Data_Show_Generic_intercalate, &$Data_Show_Generic_append, $__body, &$__fn) {
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

// Data_Show_Generic_genericShow'
$Data_Show_Generic_genericShow__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericShow__prime__;
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

// Data_Show_Generic_genericShowNoConstructors
$Data_Show_Generic_genericShowNoConstructors = ($Data_Show_Generic_GenericShow__dollar__Dict)((object)["genericShow'" => (function() use (&$Data_Show_Generic_genericShow__prime__, &$Data_Show_Generic_genericShowNoConstructors) {
  $__fn = function($a) use (&$Data_Show_Generic_genericShow__prime__, &$Data_Show_Generic_genericShowNoConstructors, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Show_Generic_genericShow__prime__)($Data_Show_Generic_genericShowNoConstructors, $a);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Show_Generic_genericShowSum
$Data_Show_Generic_genericShowSum = (function() use (&$Data_Show_Generic_genericShow__prime__, &$Data_Show_Generic_GenericShow__dollar__Dict) {
  $__fn = function($dictGenericShow) use (&$Data_Show_Generic_genericShow__prime__, &$Data_Show_Generic_GenericShow__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericShow__prime__1 = ($Data_Show_Generic_genericShow__prime__)($dictGenericShow);
    $__res = (function() use (&$Data_Show_Generic_genericShow__prime__, &$Data_Show_Generic_GenericShow__dollar__Dict, $genericShow__prime__1) {
  $__fn = function($dictGenericShow1) use (&$Data_Show_Generic_genericShow__prime__, &$Data_Show_Generic_GenericShow__dollar__Dict, $genericShow__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericShow__prime__2 = ($Data_Show_Generic_genericShow__prime__)($dictGenericShow1);
    $__res = ($Data_Show_Generic_GenericShow__dollar__Dict)((object)["genericShow'" => (function() use ($genericShow__prime__1, $genericShow__prime__2) {
  $__body = function($v) use ($genericShow__prime__1, $genericShow__prime__2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Inl")) {
$a = ($__case_0)->values[0];
return ($genericShow__prime__1)($a);
} else {
;
};
    if ((($__case_0)->tag === "Inr")) {
$b = ($__case_0)->values[0];
return ($genericShow__prime__2)($b);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($genericShow__prime__1, $genericShow__prime__2, $__body, &$__fn) {
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

// Data_Show_Generic_genericShow
$Data_Show_Generic_genericShow = (function() use (&$Data_Generic_Rep_from, &$Data_Show_Generic_genericShow__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_from, &$Data_Show_Generic_genericShow__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$from = ($Data_Generic_Rep_from)($dictGeneric);
    $__res = (function() use (&$Data_Show_Generic_genericShow__prime__, $from) {
  $__fn = function($dictGenericShow) use (&$Data_Show_Generic_genericShow__prime__, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericShow__prime__1 = ($Data_Show_Generic_genericShow__prime__)($dictGenericShow);
    $__res = (function() use ($genericShow__prime__1, $from) {
  $__fn = function($x) use ($genericShow__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($genericShow__prime__1)(($from)($x));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

