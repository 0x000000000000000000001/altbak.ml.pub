<?php

namespace Data\Monoid\Generic;

require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Generic/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Monoid_Generic_GenericMonoid$Dict
$Data_Monoid_Generic_GenericMonoid__dollar__Dict = (function() {
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

// Data_Monoid_Generic_genericMonoidNoArguments
$Data_Monoid_Generic_genericMonoidNoArguments = ($Data_Monoid_Generic_GenericMonoid__dollar__Dict)((object)["genericMempty'" => $Data_Generic_Rep_NoArguments]);

// Data_Monoid_Generic_genericMonoidArgument
$Data_Monoid_Generic_genericMonoidArgument = (function() use (&$Data_Monoid_Generic_GenericMonoid__dollar__Dict, &$Data_Generic_Rep_Argument, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_Generic_GenericMonoid__dollar__Dict, &$Data_Generic_Rep_Argument, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Monoid_Generic_GenericMonoid__dollar__Dict)((object)["genericMempty'" => ($Data_Generic_Rep_Argument)(($Data_Monoid_mempty)($dictMonoid))]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Monoid_Generic_genericMempty'
$Data_Monoid_Generic_genericMempty__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericMempty__prime__;
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

// Data_Monoid_Generic_genericMonoidConstructor
$Data_Monoid_Generic_genericMonoidConstructor = (function() use (&$Data_Monoid_Generic_GenericMonoid__dollar__Dict, &$Data_Generic_Rep_Constructor, &$Data_Monoid_Generic_genericMempty__prime__) {
  $__fn = function($dictGenericMonoid) use (&$Data_Monoid_Generic_GenericMonoid__dollar__Dict, &$Data_Generic_Rep_Constructor, &$Data_Monoid_Generic_genericMempty__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Monoid_Generic_GenericMonoid__dollar__Dict)((object)["genericMempty'" => ($Data_Generic_Rep_Constructor)(($Data_Monoid_Generic_genericMempty__prime__)($dictGenericMonoid))]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Monoid_Generic_genericMonoidProduct
$Data_Monoid_Generic_genericMonoidProduct = (function() use (&$Data_Monoid_Generic_genericMempty__prime__, &$Data_Monoid_Generic_GenericMonoid__dollar__Dict, &$Data_Generic_Rep_Product) {
  $__fn = function($dictGenericMonoid) use (&$Data_Monoid_Generic_genericMempty__prime__, &$Data_Monoid_Generic_GenericMonoid__dollar__Dict, &$Data_Generic_Rep_Product, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericMempty__prime__1 = ($Data_Monoid_Generic_genericMempty__prime__)($dictGenericMonoid);
    $__res = (function() use (&$Data_Monoid_Generic_GenericMonoid__dollar__Dict, &$Data_Generic_Rep_Product, $genericMempty__prime__1, &$Data_Monoid_Generic_genericMempty__prime__) {
  $__fn = function($dictGenericMonoid1) use (&$Data_Monoid_Generic_GenericMonoid__dollar__Dict, &$Data_Generic_Rep_Product, $genericMempty__prime__1, &$Data_Monoid_Generic_genericMempty__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Monoid_Generic_GenericMonoid__dollar__Dict)((object)["genericMempty'" => ($Data_Generic_Rep_Product)($genericMempty__prime__1, ($Data_Monoid_Generic_genericMempty__prime__)($dictGenericMonoid1))]);
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

// Data_Monoid_Generic_genericMempty
$Data_Monoid_Generic_genericMempty = (function() use (&$Data_Generic_Rep_to, &$Data_Monoid_Generic_genericMempty__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_Monoid_Generic_genericMempty__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
    $__res = (function() use ($to, &$Data_Monoid_Generic_genericMempty__prime__) {
  $__fn = function($dictGenericMonoid) use ($to, &$Data_Monoid_Generic_genericMempty__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($to)(($Data_Monoid_Generic_genericMempty__prime__)($dictGenericMonoid));
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

