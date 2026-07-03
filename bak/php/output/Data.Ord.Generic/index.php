<?php

namespace Data\Ord\Generic;

require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ord.Generic/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Ord_Generic_GenericOrd$Dict
$Data_Ord_Generic_GenericOrd__dollar__Dict = (function() {
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

// Data_Ord_Generic_genericOrdNoConstructors
$Data_Ord_Generic_genericOrdNoConstructors = ($Data_Ord_Generic_GenericOrd__dollar__Dict)((object)["genericCompare'" => (function() use (&$Data_Ordering_EQ) {
  $__fn = function($v, $v1 = null) use (&$Data_Ordering_EQ, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ordering_EQ;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ord_Generic_genericOrdNoArguments
$Data_Ord_Generic_genericOrdNoArguments = ($Data_Ord_Generic_GenericOrd__dollar__Dict)((object)["genericCompare'" => (function() use (&$Data_Ordering_EQ) {
  $__fn = function($v, $v1 = null) use (&$Data_Ordering_EQ, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ordering_EQ;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ord_Generic_genericOrdArgument
$Data_Ord_Generic_genericOrdArgument = (function() use (&$Data_Ord_compare, &$Data_Ord_Generic_GenericOrd__dollar__Dict) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Ord_Generic_GenericOrd__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = ($Data_Ord_Generic_GenericOrd__dollar__Dict)((object)["genericCompare'" => (function() use ($compare) {
  $__body = function($v, $v1) use ($compare) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($compare)($a1, $a2);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($compare, $__body, &$__fn) {
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

// Data_Ord_Generic_genericCompare'
$Data_Ord_Generic_genericCompare__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericCompare__prime__;
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

// Data_Ord_Generic_genericOrdConstructor
$Data_Ord_Generic_genericOrdConstructor = (function() use (&$Data_Ord_Generic_genericCompare__prime__, &$Data_Ord_Generic_GenericOrd__dollar__Dict) {
  $__fn = function($dictGenericOrd) use (&$Data_Ord_Generic_genericCompare__prime__, &$Data_Ord_Generic_GenericOrd__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericCompare__prime__1 = ($Data_Ord_Generic_genericCompare__prime__)($dictGenericOrd);
    $__res = ($Data_Ord_Generic_GenericOrd__dollar__Dict)((object)["genericCompare'" => (function() use ($genericCompare__prime__1) {
  $__body = function($v, $v1) use ($genericCompare__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($genericCompare__prime__1)($a1, $a2);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($genericCompare__prime__1, $__body, &$__fn) {
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

// Data_Ord_Generic_genericOrdProduct
$Data_Ord_Generic_genericOrdProduct = (function() use (&$Data_Ord_Generic_genericCompare__prime__, &$Data_Ord_Generic_GenericOrd__dollar__Dict) {
  $__fn = function($dictGenericOrd) use (&$Data_Ord_Generic_genericCompare__prime__, &$Data_Ord_Generic_GenericOrd__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericCompare__prime__1 = ($Data_Ord_Generic_genericCompare__prime__)($dictGenericOrd);
    $__res = (function() use (&$Data_Ord_Generic_genericCompare__prime__, &$Data_Ord_Generic_GenericOrd__dollar__Dict, $genericCompare__prime__1) {
  $__fn = function($dictGenericOrd1) use (&$Data_Ord_Generic_genericCompare__prime__, &$Data_Ord_Generic_GenericOrd__dollar__Dict, $genericCompare__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericCompare__prime__2 = ($Data_Ord_Generic_genericCompare__prime__)($dictGenericOrd1);
    $__res = ($Data_Ord_Generic_GenericOrd__dollar__Dict)((object)["genericCompare'" => (function() use ($genericCompare__prime__1, $genericCompare__prime__2) {
  $__body = function($v, $v1) use ($genericCompare__prime__1, $genericCompare__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->values[0];
$b1 = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$b2 = ($__case_1)->values[1];
$v2 = ($genericCompare__prime__1)($a1, $a2);
$__case_0 = $v2;
if ((($__case_0)->tag === "EQ")) {
return ($genericCompare__prime__2)($b1, $b2);
} else {
;
};
if (true) {
$other = $__case_0;
return $other;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($genericCompare__prime__1, $genericCompare__prime__2, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Ord_Generic_genericOrdSum
$Data_Ord_Generic_genericOrdSum = (function() use (&$Data_Ord_Generic_genericCompare__prime__, &$Data_Ord_Generic_GenericOrd__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictGenericOrd) use (&$Data_Ord_Generic_genericCompare__prime__, &$Data_Ord_Generic_GenericOrd__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericCompare__prime__1 = ($Data_Ord_Generic_genericCompare__prime__)($dictGenericOrd);
    $__res = (function() use (&$Data_Ord_Generic_genericCompare__prime__, &$Data_Ord_Generic_GenericOrd__dollar__Dict, $genericCompare__prime__1, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictGenericOrd1) use (&$Data_Ord_Generic_genericCompare__prime__, &$Data_Ord_Generic_GenericOrd__dollar__Dict, $genericCompare__prime__1, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericCompare__prime__2 = ($Data_Ord_Generic_genericCompare__prime__)($dictGenericOrd1);
    $__res = ($Data_Ord_Generic_GenericOrd__dollar__Dict)((object)["genericCompare'" => (function() use ($genericCompare__prime__1, $genericCompare__prime__2, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__body = function($v, $v1) use ($genericCompare__prime__1, $genericCompare__prime__2, &$Data_Ordering_LT, &$Data_Ordering_GT) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Inl") && (($__case_1)->tag === "Inl"))) {
$a1 = ($__case_0)->values[0];
$a2 = ($__case_1)->values[0];
return ($genericCompare__prime__1)($a1, $a2);
} else {
;
};
    if (((($__case_0)->tag === "Inr") && (($__case_1)->tag === "Inr"))) {
$b1 = ($__case_0)->values[0];
$b2 = ($__case_1)->values[0];
return ($genericCompare__prime__2)($b1, $b2);
} else {
;
};
    if (((($__case_0)->tag === "Inl") && (($__case_1)->tag === "Inr"))) {
return $Data_Ordering_LT;
} else {
;
};
    if (((($__case_0)->tag === "Inr") && (($__case_1)->tag === "Inl"))) {
return $Data_Ordering_GT;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($genericCompare__prime__1, $genericCompare__prime__2, &$Data_Ordering_LT, &$Data_Ordering_GT, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Ord_Generic_genericCompare
$Data_Ord_Generic_genericCompare = (function() use (&$Data_Generic_Rep_from, &$Data_Ord_Generic_genericCompare__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_from, &$Data_Ord_Generic_genericCompare__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$from = ($Data_Generic_Rep_from)($dictGeneric);
    $__res = (function() use (&$Data_Ord_Generic_genericCompare__prime__, $from) {
  $__fn = function($dictGenericOrd) use (&$Data_Ord_Generic_genericCompare__prime__, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericCompare__prime__1 = ($Data_Ord_Generic_genericCompare__prime__)($dictGenericOrd);
    $__res = (function() use ($genericCompare__prime__1, $from) {
  $__fn = function($x, $y = null) use ($genericCompare__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($genericCompare__prime__1)(($from)($x), ($from)($y));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

