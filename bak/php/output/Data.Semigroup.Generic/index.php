<?php

namespace Data\Semigroup\Generic;

require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Generic/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Semigroup_Generic_GenericSemigroup$Dict
$Data_Semigroup_Generic_GenericSemigroup__dollar__Dict = (function() {
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

// Data_Semigroup_Generic_genericSemigroupNoConstructors
$Data_Semigroup_Generic_genericSemigroupNoConstructors = ($Data_Semigroup_Generic_GenericSemigroup__dollar__Dict)((object)["genericAppend'" => (function() {
  $__fn = function($a, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $a;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_Generic_genericSemigroupNoArguments
$Data_Semigroup_Generic_genericSemigroupNoArguments = ($Data_Semigroup_Generic_GenericSemigroup__dollar__Dict)((object)["genericAppend'" => (function() {
  $__fn = function($a, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $a;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_Generic_genericSemigroupArgument
$Data_Semigroup_Generic_genericSemigroupArgument = (function() use (&$Data_Semigroup_append, &$Data_Semigroup_Generic_GenericSemigroup__dollar__Dict, &$Data_Generic_Rep_Argument) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Data_Semigroup_Generic_GenericSemigroup__dollar__Dict, &$Data_Generic_Rep_Argument, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)($dictSemigroup);
    $__res = ($Data_Semigroup_Generic_GenericSemigroup__dollar__Dict)((object)["genericAppend'" => (function() use (&$Data_Generic_Rep_Argument, $append) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Argument, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($Data_Generic_Rep_Argument)(($append)($a1, $a2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Argument, $append, $__body, &$__fn) {
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

// Data_Semigroup_Generic_genericAppend'
$Data_Semigroup_Generic_genericAppend__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericAppend__prime__;
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

// Data_Semigroup_Generic_genericSemigroupConstructor
$Data_Semigroup_Generic_genericSemigroupConstructor = (function() use (&$Data_Semigroup_Generic_genericAppend__prime__, &$Data_Semigroup_Generic_GenericSemigroup__dollar__Dict, &$Data_Generic_Rep_Constructor) {
  $__fn = function($dictGenericSemigroup) use (&$Data_Semigroup_Generic_genericAppend__prime__, &$Data_Semigroup_Generic_GenericSemigroup__dollar__Dict, &$Data_Generic_Rep_Constructor, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericAppend__prime__1 = ($Data_Semigroup_Generic_genericAppend__prime__)($dictGenericSemigroup);
    $__res = ($Data_Semigroup_Generic_GenericSemigroup__dollar__Dict)((object)["genericAppend'" => (function() use (&$Data_Generic_Rep_Constructor, $genericAppend__prime__1) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Constructor, $genericAppend__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($Data_Generic_Rep_Constructor)(($genericAppend__prime__1)($a1, $a2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Constructor, $genericAppend__prime__1, $__body, &$__fn) {
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

// Data_Semigroup_Generic_genericSemigroupProduct
$Data_Semigroup_Generic_genericSemigroupProduct = (function() use (&$Data_Semigroup_Generic_genericAppend__prime__, &$Data_Semigroup_Generic_GenericSemigroup__dollar__Dict, &$Data_Generic_Rep_Product) {
  $__fn = function($dictGenericSemigroup) use (&$Data_Semigroup_Generic_genericAppend__prime__, &$Data_Semigroup_Generic_GenericSemigroup__dollar__Dict, &$Data_Generic_Rep_Product, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericAppend__prime__1 = ($Data_Semigroup_Generic_genericAppend__prime__)($dictGenericSemigroup);
    $__res = (function() use (&$Data_Semigroup_Generic_genericAppend__prime__, &$Data_Semigroup_Generic_GenericSemigroup__dollar__Dict, &$Data_Generic_Rep_Product, $genericAppend__prime__1) {
  $__fn = function($dictGenericSemigroup1) use (&$Data_Semigroup_Generic_genericAppend__prime__, &$Data_Semigroup_Generic_GenericSemigroup__dollar__Dict, &$Data_Generic_Rep_Product, $genericAppend__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericAppend__prime__2 = ($Data_Semigroup_Generic_genericAppend__prime__)($dictGenericSemigroup1);
    $__res = ($Data_Semigroup_Generic_GenericSemigroup__dollar__Dict)((object)["genericAppend'" => (function() use (&$Data_Generic_Rep_Product, $genericAppend__prime__1, $genericAppend__prime__2) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Product, $genericAppend__prime__1, $genericAppend__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->values[0];
$b1 = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$b2 = ($__case_1)->values[1];
return ($Data_Generic_Rep_Product)(($genericAppend__prime__1)($a1, $a2), ($genericAppend__prime__2)($b1, $b2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Product, $genericAppend__prime__1, $genericAppend__prime__2, $__body, &$__fn) {
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

// Data_Semigroup_Generic_genericAppend
$Data_Semigroup_Generic_genericAppend = (function() use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_Semigroup_Generic_genericAppend__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_Semigroup_Generic_genericAppend__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
$from = ($Data_Generic_Rep_from)($dictGeneric);
    $__res = (function() use (&$Data_Semigroup_Generic_genericAppend__prime__, $to, $from) {
  $__fn = function($dictGenericSemigroup) use (&$Data_Semigroup_Generic_genericAppend__prime__, $to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericAppend__prime__1 = ($Data_Semigroup_Generic_genericAppend__prime__)($dictGenericSemigroup);
    $__res = (function() use ($to, $genericAppend__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericAppend__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($to)(($genericAppend__prime__1)(($from)($x), ($from)($y)));
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

