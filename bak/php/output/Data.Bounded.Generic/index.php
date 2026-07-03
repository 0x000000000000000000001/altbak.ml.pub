<?php

namespace Data\Bounded\Generic;

require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Bounded.Generic/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Bounded_Generic_GenericTop$Dict
$Data_Bounded_Generic_GenericTop__dollar__Dict = (function() {
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

// Data_Bounded_Generic_GenericBottom$Dict
$Data_Bounded_Generic_GenericBottom__dollar__Dict = (function() {
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

// Data_Bounded_Generic_genericTopNoArguments
$Data_Bounded_Generic_genericTopNoArguments = ($Data_Bounded_Generic_GenericTop__dollar__Dict)((object)["genericTop'" => $Data_Generic_Rep_NoArguments]);

// Data_Bounded_Generic_genericTopArgument
$Data_Bounded_Generic_genericTopArgument = (function() use (&$Data_Bounded_Generic_GenericTop__dollar__Dict, &$Data_Generic_Rep_Argument, &$Data_Bounded_top) {
  $__fn = function($dictBounded) use (&$Data_Bounded_Generic_GenericTop__dollar__Dict, &$Data_Generic_Rep_Argument, &$Data_Bounded_top, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bounded_Generic_GenericTop__dollar__Dict)((object)["genericTop'" => ($Data_Generic_Rep_Argument)(($Data_Bounded_top)($dictBounded))]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Bounded_Generic_genericTop'
$Data_Bounded_Generic_genericTop__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericTop__prime__;
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

// Data_Bounded_Generic_genericTopConstructor
$Data_Bounded_Generic_genericTopConstructor = (function() use (&$Data_Bounded_Generic_GenericTop__dollar__Dict, &$Data_Generic_Rep_Constructor, &$Data_Bounded_Generic_genericTop__prime__) {
  $__fn = function($dictGenericTop) use (&$Data_Bounded_Generic_GenericTop__dollar__Dict, &$Data_Generic_Rep_Constructor, &$Data_Bounded_Generic_genericTop__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bounded_Generic_GenericTop__dollar__Dict)((object)["genericTop'" => ($Data_Generic_Rep_Constructor)(($Data_Bounded_Generic_genericTop__prime__)($dictGenericTop))]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Bounded_Generic_genericTopProduct
$Data_Bounded_Generic_genericTopProduct = (function() use (&$Data_Bounded_Generic_genericTop__prime__, &$Data_Bounded_Generic_GenericTop__dollar__Dict, &$Data_Generic_Rep_Product) {
  $__fn = function($dictGenericTop) use (&$Data_Bounded_Generic_genericTop__prime__, &$Data_Bounded_Generic_GenericTop__dollar__Dict, &$Data_Generic_Rep_Product, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericTop__prime__1 = ($Data_Bounded_Generic_genericTop__prime__)($dictGenericTop);
    $__res = (function() use (&$Data_Bounded_Generic_GenericTop__dollar__Dict, &$Data_Generic_Rep_Product, $genericTop__prime__1, &$Data_Bounded_Generic_genericTop__prime__) {
  $__fn = function($dictGenericTop1) use (&$Data_Bounded_Generic_GenericTop__dollar__Dict, &$Data_Generic_Rep_Product, $genericTop__prime__1, &$Data_Bounded_Generic_genericTop__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bounded_Generic_GenericTop__dollar__Dict)((object)["genericTop'" => ($Data_Generic_Rep_Product)($genericTop__prime__1, ($Data_Bounded_Generic_genericTop__prime__)($dictGenericTop1))]);
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

// Data_Bounded_Generic_genericTopSum
$Data_Bounded_Generic_genericTopSum = (function() use (&$Data_Bounded_Generic_GenericTop__dollar__Dict, &$Data_Generic_Rep_Inr, &$Data_Bounded_Generic_genericTop__prime__) {
  $__fn = function($dictGenericTop) use (&$Data_Bounded_Generic_GenericTop__dollar__Dict, &$Data_Generic_Rep_Inr, &$Data_Bounded_Generic_genericTop__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bounded_Generic_GenericTop__dollar__Dict)((object)["genericTop'" => ($Data_Generic_Rep_Inr)(($Data_Bounded_Generic_genericTop__prime__)($dictGenericTop))]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Bounded_Generic_genericTop
$Data_Bounded_Generic_genericTop = (function() use (&$Data_Generic_Rep_to, &$Data_Bounded_Generic_genericTop__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_Bounded_Generic_genericTop__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
    $__res = (function() use ($to, &$Data_Bounded_Generic_genericTop__prime__) {
  $__fn = function($dictGenericTop) use ($to, &$Data_Bounded_Generic_genericTop__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($to)(($Data_Bounded_Generic_genericTop__prime__)($dictGenericTop));
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

// Data_Bounded_Generic_genericBottomNoArguments
$Data_Bounded_Generic_genericBottomNoArguments = ($Data_Bounded_Generic_GenericBottom__dollar__Dict)((object)["genericBottom'" => $Data_Generic_Rep_NoArguments]);

// Data_Bounded_Generic_genericBottomArgument
$Data_Bounded_Generic_genericBottomArgument = (function() use (&$Data_Bounded_Generic_GenericBottom__dollar__Dict, &$Data_Generic_Rep_Argument, &$Data_Bounded_bottom) {
  $__fn = function($dictBounded) use (&$Data_Bounded_Generic_GenericBottom__dollar__Dict, &$Data_Generic_Rep_Argument, &$Data_Bounded_bottom, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bounded_Generic_GenericBottom__dollar__Dict)((object)["genericBottom'" => ($Data_Generic_Rep_Argument)(($Data_Bounded_bottom)($dictBounded))]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Bounded_Generic_genericBottom'
$Data_Bounded_Generic_genericBottom__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericBottom__prime__;
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

// Data_Bounded_Generic_genericBottomConstructor
$Data_Bounded_Generic_genericBottomConstructor = (function() use (&$Data_Bounded_Generic_GenericBottom__dollar__Dict, &$Data_Generic_Rep_Constructor, &$Data_Bounded_Generic_genericBottom__prime__) {
  $__fn = function($dictGenericBottom) use (&$Data_Bounded_Generic_GenericBottom__dollar__Dict, &$Data_Generic_Rep_Constructor, &$Data_Bounded_Generic_genericBottom__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bounded_Generic_GenericBottom__dollar__Dict)((object)["genericBottom'" => ($Data_Generic_Rep_Constructor)(($Data_Bounded_Generic_genericBottom__prime__)($dictGenericBottom))]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Bounded_Generic_genericBottomProduct
$Data_Bounded_Generic_genericBottomProduct = (function() use (&$Data_Bounded_Generic_genericBottom__prime__, &$Data_Bounded_Generic_GenericBottom__dollar__Dict, &$Data_Generic_Rep_Product) {
  $__fn = function($dictGenericBottom) use (&$Data_Bounded_Generic_genericBottom__prime__, &$Data_Bounded_Generic_GenericBottom__dollar__Dict, &$Data_Generic_Rep_Product, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericBottom__prime__1 = ($Data_Bounded_Generic_genericBottom__prime__)($dictGenericBottom);
    $__res = (function() use (&$Data_Bounded_Generic_GenericBottom__dollar__Dict, &$Data_Generic_Rep_Product, $genericBottom__prime__1, &$Data_Bounded_Generic_genericBottom__prime__) {
  $__fn = function($dictGenericBottom1) use (&$Data_Bounded_Generic_GenericBottom__dollar__Dict, &$Data_Generic_Rep_Product, $genericBottom__prime__1, &$Data_Bounded_Generic_genericBottom__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bounded_Generic_GenericBottom__dollar__Dict)((object)["genericBottom'" => ($Data_Generic_Rep_Product)($genericBottom__prime__1, ($Data_Bounded_Generic_genericBottom__prime__)($dictGenericBottom1))]);
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

// Data_Bounded_Generic_genericBottomSum
$Data_Bounded_Generic_genericBottomSum = (function() use (&$Data_Bounded_Generic_GenericBottom__dollar__Dict, &$Data_Generic_Rep_Inl, &$Data_Bounded_Generic_genericBottom__prime__) {
  $__fn = function($dictGenericBottom) use (&$Data_Bounded_Generic_GenericBottom__dollar__Dict, &$Data_Generic_Rep_Inl, &$Data_Bounded_Generic_genericBottom__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Bounded_Generic_GenericBottom__dollar__Dict)((object)["genericBottom'" => ($Data_Generic_Rep_Inl)(($Data_Bounded_Generic_genericBottom__prime__)($dictGenericBottom))]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Bounded_Generic_genericBottom
$Data_Bounded_Generic_genericBottom = (function() use (&$Data_Generic_Rep_to, &$Data_Bounded_Generic_genericBottom__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_Bounded_Generic_genericBottom__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
    $__res = (function() use ($to, &$Data_Bounded_Generic_genericBottom__prime__) {
  $__fn = function($dictGenericBottom) use ($to, &$Data_Bounded_Generic_genericBottom__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($to)(($Data_Bounded_Generic_genericBottom__prime__)($dictGenericBottom));
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

