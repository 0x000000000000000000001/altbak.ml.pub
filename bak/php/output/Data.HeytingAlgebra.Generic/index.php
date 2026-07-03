<?php

namespace Data\HeytingAlgebra\Generic;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra.Generic/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_HeytingAlgebra_Generic_GenericHeytingAlgebra$Dict
$Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict = (function() {
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

// Data_HeytingAlgebra_Generic_genericTT'
$Data_HeytingAlgebra_Generic_genericTT__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericTT__prime__;
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

// Data_HeytingAlgebra_Generic_genericTT
$Data_HeytingAlgebra_Generic_genericTT = (function() use (&$Data_Generic_Rep_to, &$Data_HeytingAlgebra_Generic_genericTT__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_HeytingAlgebra_Generic_genericTT__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
    $__res = (function() use ($to, &$Data_HeytingAlgebra_Generic_genericTT__prime__) {
  $__fn = function($dictGenericHeytingAlgebra) use ($to, &$Data_HeytingAlgebra_Generic_genericTT__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($to)(($Data_HeytingAlgebra_Generic_genericTT__prime__)($dictGenericHeytingAlgebra));
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

// Data_HeytingAlgebra_Generic_genericNot'
$Data_HeytingAlgebra_Generic_genericNot__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericNot__prime__;
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

// Data_HeytingAlgebra_Generic_genericNot
$Data_HeytingAlgebra_Generic_genericNot = (function() use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_HeytingAlgebra_Generic_genericNot__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_HeytingAlgebra_Generic_genericNot__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
$from = ($Data_Generic_Rep_from)($dictGeneric);
    $__res = (function() use (&$Data_HeytingAlgebra_Generic_genericNot__prime__, $to, $from) {
  $__fn = function($dictGenericHeytingAlgebra) use (&$Data_HeytingAlgebra_Generic_genericNot__prime__, $to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericNot__prime__1 = ($Data_HeytingAlgebra_Generic_genericNot__prime__)($dictGenericHeytingAlgebra);
    $__res = (function() use ($to, $genericNot__prime__1, $from) {
  $__fn = function($x) use ($to, $genericNot__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($to)(($genericNot__prime__1)(($from)($x)));
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

// Data_HeytingAlgebra_Generic_genericImplies'
$Data_HeytingAlgebra_Generic_genericImplies__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericImplies__prime__;
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

// Data_HeytingAlgebra_Generic_genericImplies
$Data_HeytingAlgebra_Generic_genericImplies = (function() use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_HeytingAlgebra_Generic_genericImplies__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_HeytingAlgebra_Generic_genericImplies__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
$from = ($Data_Generic_Rep_from)($dictGeneric);
    $__res = (function() use (&$Data_HeytingAlgebra_Generic_genericImplies__prime__, $to, $from) {
  $__fn = function($dictGenericHeytingAlgebra) use (&$Data_HeytingAlgebra_Generic_genericImplies__prime__, $to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericImplies__prime__1 = ($Data_HeytingAlgebra_Generic_genericImplies__prime__)($dictGenericHeytingAlgebra);
    $__res = (function() use ($to, $genericImplies__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericImplies__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($to)(($genericImplies__prime__1)(($from)($x), ($from)($y)));
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

// Data_HeytingAlgebra_Generic_genericHeytingAlgebraNoArguments
$Data_HeytingAlgebra_Generic_genericHeytingAlgebraNoArguments = ($Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict)((object)["genericFF'" => $Data_Generic_Rep_NoArguments, "genericTT'" => $Data_Generic_Rep_NoArguments, "genericImplies'" => (function() use (&$Data_Generic_Rep_NoArguments) {
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
})(), "genericConj'" => (function() use (&$Data_Generic_Rep_NoArguments) {
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
})(), "genericDisj'" => (function() use (&$Data_Generic_Rep_NoArguments) {
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
})(), "genericNot'" => (function() use (&$Data_Generic_Rep_NoArguments) {
  $__fn = function($v) use (&$Data_Generic_Rep_NoArguments, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Generic_Rep_NoArguments;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument
$Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument = (function() use (&$Data_HeytingAlgebra_implies, &$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_not, &$Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict, &$Data_Generic_Rep_Argument, &$Data_HeytingAlgebra_ff, &$Data_HeytingAlgebra_tt) {
  $__fn = function($dictHeytingAlgebra) use (&$Data_HeytingAlgebra_implies, &$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_not, &$Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict, &$Data_Generic_Rep_Argument, &$Data_HeytingAlgebra_ff, &$Data_HeytingAlgebra_tt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$implies = ($Data_HeytingAlgebra_implies)($dictHeytingAlgebra);
$conj = ($Data_HeytingAlgebra_conj)($dictHeytingAlgebra);
$disj = ($Data_HeytingAlgebra_disj)($dictHeytingAlgebra);
$not = ($Data_HeytingAlgebra_not)($dictHeytingAlgebra);
    $__res = ($Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict)((object)["genericFF'" => ($Data_Generic_Rep_Argument)(($Data_HeytingAlgebra_ff)($dictHeytingAlgebra)), "genericTT'" => ($Data_Generic_Rep_Argument)(($Data_HeytingAlgebra_tt)($dictHeytingAlgebra)), "genericImplies'" => (function() use (&$Data_Generic_Rep_Argument, $implies) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Argument, $implies) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($Data_Generic_Rep_Argument)(($implies)($x, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Argument, $implies, $__body, &$__fn) {
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
})(), "genericConj'" => (function() use (&$Data_Generic_Rep_Argument, $conj) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Argument, $conj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($Data_Generic_Rep_Argument)(($conj)($x, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Argument, $conj, $__body, &$__fn) {
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
})(), "genericDisj'" => (function() use (&$Data_Generic_Rep_Argument, $disj) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Argument, $disj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($Data_Generic_Rep_Argument)(($disj)($x, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Argument, $disj, $__body, &$__fn) {
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
})(), "genericNot'" => (function() use (&$Data_Generic_Rep_Argument, $not) {
  $__body = function($v) use (&$Data_Generic_Rep_Argument, $not) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($Data_Generic_Rep_Argument)(($not)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Generic_Rep_Argument, $not, $__body, &$__fn) {
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

// Data_HeytingAlgebra_Generic_genericFF'
$Data_HeytingAlgebra_Generic_genericFF__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericFF__prime__;
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

// Data_HeytingAlgebra_Generic_genericFF
$Data_HeytingAlgebra_Generic_genericFF = (function() use (&$Data_Generic_Rep_to, &$Data_HeytingAlgebra_Generic_genericFF__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_HeytingAlgebra_Generic_genericFF__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
    $__res = (function() use ($to, &$Data_HeytingAlgebra_Generic_genericFF__prime__) {
  $__fn = function($dictGenericHeytingAlgebra) use ($to, &$Data_HeytingAlgebra_Generic_genericFF__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($to)(($Data_HeytingAlgebra_Generic_genericFF__prime__)($dictGenericHeytingAlgebra));
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

// Data_HeytingAlgebra_Generic_genericDisj'
$Data_HeytingAlgebra_Generic_genericDisj__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericDisj__prime__;
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

// Data_HeytingAlgebra_Generic_genericDisj
$Data_HeytingAlgebra_Generic_genericDisj = (function() use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_HeytingAlgebra_Generic_genericDisj__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_HeytingAlgebra_Generic_genericDisj__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
$from = ($Data_Generic_Rep_from)($dictGeneric);
    $__res = (function() use (&$Data_HeytingAlgebra_Generic_genericDisj__prime__, $to, $from) {
  $__fn = function($dictGenericHeytingAlgebra) use (&$Data_HeytingAlgebra_Generic_genericDisj__prime__, $to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericDisj__prime__1 = ($Data_HeytingAlgebra_Generic_genericDisj__prime__)($dictGenericHeytingAlgebra);
    $__res = (function() use ($to, $genericDisj__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericDisj__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($to)(($genericDisj__prime__1)(($from)($x), ($from)($y)));
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

// Data_HeytingAlgebra_Generic_genericConj'
$Data_HeytingAlgebra_Generic_genericConj__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericConj__prime__;
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

// Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor
$Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor = (function() use (&$Data_HeytingAlgebra_Generic_genericImplies__prime__, &$Data_HeytingAlgebra_Generic_genericConj__prime__, &$Data_HeytingAlgebra_Generic_genericDisj__prime__, &$Data_HeytingAlgebra_Generic_genericNot__prime__, &$Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict, &$Data_Generic_Rep_Constructor, &$Data_HeytingAlgebra_Generic_genericFF__prime__, &$Data_HeytingAlgebra_Generic_genericTT__prime__) {
  $__fn = function($dictGenericHeytingAlgebra) use (&$Data_HeytingAlgebra_Generic_genericImplies__prime__, &$Data_HeytingAlgebra_Generic_genericConj__prime__, &$Data_HeytingAlgebra_Generic_genericDisj__prime__, &$Data_HeytingAlgebra_Generic_genericNot__prime__, &$Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict, &$Data_Generic_Rep_Constructor, &$Data_HeytingAlgebra_Generic_genericFF__prime__, &$Data_HeytingAlgebra_Generic_genericTT__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericImplies__prime__1 = ($Data_HeytingAlgebra_Generic_genericImplies__prime__)($dictGenericHeytingAlgebra);
$genericConj__prime__1 = ($Data_HeytingAlgebra_Generic_genericConj__prime__)($dictGenericHeytingAlgebra);
$genericDisj__prime__1 = ($Data_HeytingAlgebra_Generic_genericDisj__prime__)($dictGenericHeytingAlgebra);
$genericNot__prime__1 = ($Data_HeytingAlgebra_Generic_genericNot__prime__)($dictGenericHeytingAlgebra);
    $__res = ($Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict)((object)["genericFF'" => ($Data_Generic_Rep_Constructor)(($Data_HeytingAlgebra_Generic_genericFF__prime__)($dictGenericHeytingAlgebra)), "genericTT'" => ($Data_Generic_Rep_Constructor)(($Data_HeytingAlgebra_Generic_genericTT__prime__)($dictGenericHeytingAlgebra)), "genericImplies'" => (function() use (&$Data_Generic_Rep_Constructor, $genericImplies__prime__1) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Constructor, $genericImplies__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($Data_Generic_Rep_Constructor)(($genericImplies__prime__1)($a1, $a2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Constructor, $genericImplies__prime__1, $__body, &$__fn) {
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
})(), "genericConj'" => (function() use (&$Data_Generic_Rep_Constructor, $genericConj__prime__1) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Constructor, $genericConj__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($Data_Generic_Rep_Constructor)(($genericConj__prime__1)($a1, $a2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Constructor, $genericConj__prime__1, $__body, &$__fn) {
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
})(), "genericDisj'" => (function() use (&$Data_Generic_Rep_Constructor, $genericDisj__prime__1) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Constructor, $genericDisj__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($Data_Generic_Rep_Constructor)(($genericDisj__prime__1)($a1, $a2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Constructor, $genericDisj__prime__1, $__body, &$__fn) {
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
})(), "genericNot'" => (function() use (&$Data_Generic_Rep_Constructor, $genericNot__prime__1) {
  $__body = function($v) use (&$Data_Generic_Rep_Constructor, $genericNot__prime__1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($Data_Generic_Rep_Constructor)(($genericNot__prime__1)($a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Generic_Rep_Constructor, $genericNot__prime__1, $__body, &$__fn) {
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

// Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct
$Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct = (function() use (&$Data_HeytingAlgebra_Generic_genericFF__prime__, &$Data_HeytingAlgebra_Generic_genericTT__prime__, &$Data_HeytingAlgebra_Generic_genericImplies__prime__, &$Data_HeytingAlgebra_Generic_genericConj__prime__, &$Data_HeytingAlgebra_Generic_genericDisj__prime__, &$Data_HeytingAlgebra_Generic_genericNot__prime__, &$Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict, &$Data_Generic_Rep_Product) {
  $__fn = function($dictGenericHeytingAlgebra) use (&$Data_HeytingAlgebra_Generic_genericFF__prime__, &$Data_HeytingAlgebra_Generic_genericTT__prime__, &$Data_HeytingAlgebra_Generic_genericImplies__prime__, &$Data_HeytingAlgebra_Generic_genericConj__prime__, &$Data_HeytingAlgebra_Generic_genericDisj__prime__, &$Data_HeytingAlgebra_Generic_genericNot__prime__, &$Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict, &$Data_Generic_Rep_Product, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericFF__prime__1 = ($Data_HeytingAlgebra_Generic_genericFF__prime__)($dictGenericHeytingAlgebra);
$genericTT__prime__1 = ($Data_HeytingAlgebra_Generic_genericTT__prime__)($dictGenericHeytingAlgebra);
$genericImplies__prime__1 = ($Data_HeytingAlgebra_Generic_genericImplies__prime__)($dictGenericHeytingAlgebra);
$genericConj__prime__1 = ($Data_HeytingAlgebra_Generic_genericConj__prime__)($dictGenericHeytingAlgebra);
$genericDisj__prime__1 = ($Data_HeytingAlgebra_Generic_genericDisj__prime__)($dictGenericHeytingAlgebra);
$genericNot__prime__1 = ($Data_HeytingAlgebra_Generic_genericNot__prime__)($dictGenericHeytingAlgebra);
    $__res = (function() use (&$Data_HeytingAlgebra_Generic_genericImplies__prime__, &$Data_HeytingAlgebra_Generic_genericConj__prime__, &$Data_HeytingAlgebra_Generic_genericDisj__prime__, &$Data_HeytingAlgebra_Generic_genericNot__prime__, &$Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict, &$Data_Generic_Rep_Product, $genericFF__prime__1, &$Data_HeytingAlgebra_Generic_genericFF__prime__, $genericTT__prime__1, &$Data_HeytingAlgebra_Generic_genericTT__prime__, $genericImplies__prime__1, $genericConj__prime__1, $genericDisj__prime__1, $genericNot__prime__1) {
  $__fn = function($dictGenericHeytingAlgebra1) use (&$Data_HeytingAlgebra_Generic_genericImplies__prime__, &$Data_HeytingAlgebra_Generic_genericConj__prime__, &$Data_HeytingAlgebra_Generic_genericDisj__prime__, &$Data_HeytingAlgebra_Generic_genericNot__prime__, &$Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict, &$Data_Generic_Rep_Product, $genericFF__prime__1, &$Data_HeytingAlgebra_Generic_genericFF__prime__, $genericTT__prime__1, &$Data_HeytingAlgebra_Generic_genericTT__prime__, $genericImplies__prime__1, $genericConj__prime__1, $genericDisj__prime__1, $genericNot__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericImplies__prime__2 = ($Data_HeytingAlgebra_Generic_genericImplies__prime__)($dictGenericHeytingAlgebra1);
$genericConj__prime__2 = ($Data_HeytingAlgebra_Generic_genericConj__prime__)($dictGenericHeytingAlgebra1);
$genericDisj__prime__2 = ($Data_HeytingAlgebra_Generic_genericDisj__prime__)($dictGenericHeytingAlgebra1);
$genericNot__prime__2 = ($Data_HeytingAlgebra_Generic_genericNot__prime__)($dictGenericHeytingAlgebra1);
    $__res = ($Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict)((object)["genericFF'" => ($Data_Generic_Rep_Product)($genericFF__prime__1, ($Data_HeytingAlgebra_Generic_genericFF__prime__)($dictGenericHeytingAlgebra1)), "genericTT'" => ($Data_Generic_Rep_Product)($genericTT__prime__1, ($Data_HeytingAlgebra_Generic_genericTT__prime__)($dictGenericHeytingAlgebra1)), "genericImplies'" => (function() use (&$Data_Generic_Rep_Product, $genericImplies__prime__1, $genericImplies__prime__2) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Product, $genericImplies__prime__1, $genericImplies__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->values[0];
$b1 = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$b2 = ($__case_1)->values[1];
return ($Data_Generic_Rep_Product)(($genericImplies__prime__1)($a1, $a2), ($genericImplies__prime__2)($b1, $b2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Product, $genericImplies__prime__1, $genericImplies__prime__2, $__body, &$__fn) {
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
})(), "genericConj'" => (function() use (&$Data_Generic_Rep_Product, $genericConj__prime__1, $genericConj__prime__2) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Product, $genericConj__prime__1, $genericConj__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->values[0];
$b1 = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$b2 = ($__case_1)->values[1];
return ($Data_Generic_Rep_Product)(($genericConj__prime__1)($a1, $a2), ($genericConj__prime__2)($b1, $b2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Product, $genericConj__prime__1, $genericConj__prime__2, $__body, &$__fn) {
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
})(), "genericDisj'" => (function() use (&$Data_Generic_Rep_Product, $genericDisj__prime__1, $genericDisj__prime__2) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Product, $genericDisj__prime__1, $genericDisj__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->values[0];
$b1 = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$b2 = ($__case_1)->values[1];
return ($Data_Generic_Rep_Product)(($genericDisj__prime__1)($a1, $a2), ($genericDisj__prime__2)($b1, $b2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Product, $genericDisj__prime__1, $genericDisj__prime__2, $__body, &$__fn) {
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
})(), "genericNot'" => (function() use (&$Data_Generic_Rep_Product, $genericNot__prime__1, $genericNot__prime__2) {
  $__body = function($v) use (&$Data_Generic_Rep_Product, $genericNot__prime__1, $genericNot__prime__2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Product")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($Data_Generic_Rep_Product)(($genericNot__prime__1)($a), ($genericNot__prime__2)($b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Generic_Rep_Product, $genericNot__prime__1, $genericNot__prime__2, $__body, &$__fn) {
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

// Data_HeytingAlgebra_Generic_genericConj
$Data_HeytingAlgebra_Generic_genericConj = (function() use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_HeytingAlgebra_Generic_genericConj__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_HeytingAlgebra_Generic_genericConj__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
$from = ($Data_Generic_Rep_from)($dictGeneric);
    $__res = (function() use (&$Data_HeytingAlgebra_Generic_genericConj__prime__, $to, $from) {
  $__fn = function($dictGenericHeytingAlgebra) use (&$Data_HeytingAlgebra_Generic_genericConj__prime__, $to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericConj__prime__1 = ($Data_HeytingAlgebra_Generic_genericConj__prime__)($dictGenericHeytingAlgebra);
    $__res = (function() use ($to, $genericConj__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericConj__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($to)(($genericConj__prime__1)(($from)($x), ($from)($y)));
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

