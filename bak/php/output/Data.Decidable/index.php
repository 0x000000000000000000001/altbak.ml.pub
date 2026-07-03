<?php

namespace Data\Decidable;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Comparison/index.php';
require_once __DIR__ . '/../Data.Decidable/index.php';
require_once __DIR__ . '/../Data.Decide/index.php';
require_once __DIR__ . '/../Data.Divisible/index.php';
require_once __DIR__ . '/../Data.Equivalence/index.php';
require_once __DIR__ . '/../Data.Op/index.php';
require_once __DIR__ . '/../Data.Predicate/index.php';
require_once __DIR__ . '/../Data.Void/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Decidable_identity
$Data_Decidable_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Decidable_Decidable$Dict
$Data_Decidable_Decidable__dollar__Dict = (function() {
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

// Data_Decidable_lose
$Data_Decidable_lose = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->lose;
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

// Data_Decidable_lost
$Data_Decidable_lost = (function() use (&$Data_Decidable_lose, &$Data_Decidable_identity) {
  $__fn = function($dictDecidable) use (&$Data_Decidable_lose, &$Data_Decidable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Decidable_lose)($dictDecidable, $Data_Decidable_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Decidable_decidablePredicate
$Data_Decidable_decidablePredicate = ($Data_Decidable_Decidable__dollar__Dict)((object)["lose" => (function() use (&$Data_Predicate_Predicate, &$Data_Void_absurd) {
  $__fn = function($f) use (&$Data_Predicate_Predicate, &$Data_Void_absurd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Predicate_Predicate)((function() use (&$Data_Void_absurd, $f) {
  $__fn = function($a) use (&$Data_Void_absurd, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Void_absurd)(($f)($a));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Decide0" => (function() use (&$Data_Decide_choosePredicate) {
  $__fn = function($__dollar____unused) use (&$Data_Decide_choosePredicate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Decide_choosePredicate;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Divisible1" => (function() use (&$Data_Divisible_divisiblePredicate) {
  $__fn = function($__dollar____unused) use (&$Data_Divisible_divisiblePredicate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Divisible_divisiblePredicate;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Decidable_decidableOp
$Data_Decidable_decidableOp = (function() use (&$Data_Decide_chooseOp, &$Prim_undefined, &$Data_Divisible_divisibleOp, &$Data_Decidable_Decidable__dollar__Dict, &$Data_Op_Op, &$Data_Void_absurd) {
  $__fn = function($dictMonoid) use (&$Data_Decide_chooseOp, &$Prim_undefined, &$Data_Divisible_divisibleOp, &$Data_Decidable_Decidable__dollar__Dict, &$Data_Op_Op, &$Data_Void_absurd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$chooseOp = ($Data_Decide_chooseOp)((($dictMonoid)->Semigroup0)($Prim_undefined));
$divisibleOp = ($Data_Divisible_divisibleOp)($dictMonoid);
    $__res = ($Data_Decidable_Decidable__dollar__Dict)((object)["lose" => (function() use (&$Data_Op_Op, &$Data_Void_absurd) {
  $__fn = function($f) use (&$Data_Op_Op, &$Data_Void_absurd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Op_Op)((function() use (&$Data_Void_absurd, $f) {
  $__fn = function($a) use (&$Data_Void_absurd, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Void_absurd)(($f)($a));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Decide0" => (function() use ($chooseOp) {
  $__fn = function($__dollar____unused) use ($chooseOp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $chooseOp;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Divisible1" => (function() use ($divisibleOp) {
  $__fn = function($__dollar____unused) use ($divisibleOp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $divisibleOp;
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

// Data_Decidable_decidableEquivalence
$Data_Decidable_decidableEquivalence = ($Data_Decidable_Decidable__dollar__Dict)((object)["lose" => (function() use (&$Data_Equivalence_Equivalence, &$Data_Void_absurd) {
  $__fn = function($f) use (&$Data_Equivalence_Equivalence, &$Data_Void_absurd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Equivalence_Equivalence)((function() use (&$Data_Void_absurd, $f) {
  $__fn = function($a) use (&$Data_Void_absurd, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Void_absurd)(($f)($a));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Decide0" => (function() use (&$Data_Decide_chooseEquivalence) {
  $__fn = function($__dollar____unused) use (&$Data_Decide_chooseEquivalence, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Decide_chooseEquivalence;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Divisible1" => (function() use (&$Data_Divisible_divisibleEquivalence) {
  $__fn = function($__dollar____unused) use (&$Data_Divisible_divisibleEquivalence, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Divisible_divisibleEquivalence;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Decidable_decidableComparison
$Data_Decidable_decidableComparison = ($Data_Decidable_Decidable__dollar__Dict)((object)["lose" => (function() use (&$Data_Comparison_Comparison, &$Data_Void_absurd) {
  $__fn = function($f) use (&$Data_Comparison_Comparison, &$Data_Void_absurd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Comparison_Comparison)((function() use (&$Data_Void_absurd, $f) {
  $__fn = function($a, $v = null) use (&$Data_Void_absurd, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Void_absurd)(($f)($a));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Decide0" => (function() use (&$Data_Decide_chooseComparison) {
  $__fn = function($__dollar____unused) use (&$Data_Decide_chooseComparison, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Decide_chooseComparison;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Divisible1" => (function() use (&$Data_Divisible_divisibleComparison) {
  $__fn = function($__dollar____unused) use (&$Data_Divisible_divisibleComparison, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Divisible_divisibleComparison;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

