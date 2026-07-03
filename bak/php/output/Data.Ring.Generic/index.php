<?php

namespace Data\Ring\Generic;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Ring.Generic/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Ring_Generic_GenericRing$Dict
$Data_Ring_Generic_GenericRing__dollar__Dict = (function() {
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

// Data_Ring_Generic_genericSub'
$Data_Ring_Generic_genericSub__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericSub__prime__;
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

// Data_Ring_Generic_genericSub
$Data_Ring_Generic_genericSub = (function() use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_Ring_Generic_genericSub__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_Ring_Generic_genericSub__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
$from = ($Data_Generic_Rep_from)($dictGeneric);
    $__res = (function() use (&$Data_Ring_Generic_genericSub__prime__, $to, $from) {
  $__fn = function($dictGenericRing) use (&$Data_Ring_Generic_genericSub__prime__, $to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericSub__prime__1 = ($Data_Ring_Generic_genericSub__prime__)($dictGenericRing);
    $__res = (function() use ($to, $genericSub__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericSub__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($to)(($genericSub__prime__1)(($from)($x), ($from)($y)));
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

// Data_Ring_Generic_genericRingProduct
$Data_Ring_Generic_genericRingProduct = (function() use (&$Data_Ring_Generic_genericSub__prime__, &$Data_Ring_Generic_GenericRing__dollar__Dict, &$Data_Generic_Rep_Product) {
  $__fn = function($dictGenericRing) use (&$Data_Ring_Generic_genericSub__prime__, &$Data_Ring_Generic_GenericRing__dollar__Dict, &$Data_Generic_Rep_Product, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericSub__prime__1 = ($Data_Ring_Generic_genericSub__prime__)($dictGenericRing);
    $__res = (function() use (&$Data_Ring_Generic_genericSub__prime__, &$Data_Ring_Generic_GenericRing__dollar__Dict, &$Data_Generic_Rep_Product, $genericSub__prime__1) {
  $__fn = function($dictGenericRing1) use (&$Data_Ring_Generic_genericSub__prime__, &$Data_Ring_Generic_GenericRing__dollar__Dict, &$Data_Generic_Rep_Product, $genericSub__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericSub__prime__2 = ($Data_Ring_Generic_genericSub__prime__)($dictGenericRing1);
    $__res = ($Data_Ring_Generic_GenericRing__dollar__Dict)((object)["genericSub'" => (function() use (&$Data_Generic_Rep_Product, $genericSub__prime__1, $genericSub__prime__2) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Product, $genericSub__prime__1, $genericSub__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->values[0];
$b1 = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$b2 = ($__case_1)->values[1];
return ($Data_Generic_Rep_Product)(($genericSub__prime__1)($a1, $a2), ($genericSub__prime__2)($b1, $b2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Product, $genericSub__prime__1, $genericSub__prime__2, $__body, &$__fn) {
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

// Data_Ring_Generic_genericRingNoArguments
$Data_Ring_Generic_genericRingNoArguments = ($Data_Ring_Generic_GenericRing__dollar__Dict)((object)["genericSub'" => (function() use (&$Data_Generic_Rep_NoArguments) {
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_NoArguments, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Generic_Rep_NoArguments;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ring_Generic_genericRingConstructor
$Data_Ring_Generic_genericRingConstructor = (function() use (&$Data_Ring_Generic_genericSub__prime__, &$Data_Ring_Generic_GenericRing__dollar__Dict, &$Data_Generic_Rep_Constructor) {
  $__fn = function($dictGenericRing) use (&$Data_Ring_Generic_genericSub__prime__, &$Data_Ring_Generic_GenericRing__dollar__Dict, &$Data_Generic_Rep_Constructor, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericSub__prime__1 = ($Data_Ring_Generic_genericSub__prime__)($dictGenericRing);
    $__res = ($Data_Ring_Generic_GenericRing__dollar__Dict)((object)["genericSub'" => (function() use (&$Data_Generic_Rep_Constructor, $genericSub__prime__1) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Constructor, $genericSub__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($Data_Generic_Rep_Constructor)(($genericSub__prime__1)($a1, $a2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Constructor, $genericSub__prime__1, $__body, &$__fn) {
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

// Data_Ring_Generic_genericRingArgument
$Data_Ring_Generic_genericRingArgument = (function() use (&$Data_Ring_sub, &$Data_Ring_Generic_GenericRing__dollar__Dict, &$Data_Generic_Rep_Argument) {
  $__fn = function($dictRing) use (&$Data_Ring_sub, &$Data_Ring_Generic_GenericRing__dollar__Dict, &$Data_Generic_Rep_Argument, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sub = ($Data_Ring_sub)($dictRing);
    $__res = ($Data_Ring_Generic_GenericRing__dollar__Dict)((object)["genericSub'" => (function() use (&$Data_Generic_Rep_Argument, $sub) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Argument, $sub) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($Data_Generic_Rep_Argument)(($sub)($x, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Argument, $sub, $__body, &$__fn) {
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

