<?php

namespace Data\List\ZipList;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.List.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy.Types/index.php';
require_once __DIR__ . '/../Data.List.ZipList/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_List_ZipList_append
$Data_List_ZipList_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_List_ZipList_append1
$Data_List_ZipList_append1 = ($Data_Semigroup_append)($Data_List_Lazy_Types_semigroupList);

// Data_List_ZipList_ZipList
$Data_List_ZipList_ZipList = (function() {
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

// Data_List_ZipList_traversableZipList
$Data_List_ZipList_traversableZipList = $Data_List_Lazy_Types_traversableList;

// Data_List_ZipList_showZipList
$Data_List_ZipList_showZipList = (function() use (&$Data_Show_show, &$Data_List_Lazy_Types_showList, &$Data_Show_Show__dollar__Dict, &$Data_List_ZipList_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_List_Lazy_Types_showList, &$Data_Show_Show__dollar__Dict, &$Data_List_ZipList_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)(($Data_List_Lazy_Types_showList)($dictShow));
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_List_ZipList_append, $show) {
  $__body = function($v) use (&$Data_List_ZipList_append, $show) {
    $__case_0 = $v;
    if (true) {
$xs = $__case_0;
return ($Data_List_ZipList_append)("(ZipList ", ($Data_List_ZipList_append)(($show)($xs), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_ZipList_append, $show, $__body, &$__fn) {
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

// Data_List_ZipList_semigroupZipList
$Data_List_ZipList_semigroupZipList = $Data_List_Lazy_Types_semigroupList;

// Data_List_ZipList_ordZipList
$Data_List_ZipList_ordZipList = (function() use (&$Data_List_Lazy_Types_ordList) {
  $__fn = function($dictOrd) use (&$Data_List_Lazy_Types_ordList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_ordList)($dictOrd);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_ZipList_newtypeZipList
$Data_List_ZipList_newtypeZipList = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
  $__fn = function($__dollar____unused) use (&$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Prim_undefined;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_ZipList_monoidZipList
$Data_List_ZipList_monoidZipList = $Data_List_Lazy_Types_monoidList;

// Data_List_ZipList_functorZipList
$Data_List_ZipList_functorZipList = $Data_List_Lazy_Types_functorList;

// Data_List_ZipList_foldableZipList
$Data_List_ZipList_foldableZipList = $Data_List_Lazy_Types_foldableList;

// Data_List_ZipList_eqZipList
$Data_List_ZipList_eqZipList = (function() use (&$Data_List_Lazy_Types_eqList) {
  $__fn = function($dictEq) use (&$Data_List_Lazy_Types_eqList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_eqList)($dictEq);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_ZipList_applyZipList
$Data_List_ZipList_applyZipList = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_List_ZipList_ZipList, &$Data_List_Lazy_zipWith, &$Data_Function_apply) {
  $__body = function($v, $v1) use (&$Data_List_ZipList_ZipList, &$Data_List_Lazy_zipWith, &$Data_Function_apply) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$fs = $__case_0;
$xs = $__case_1;
return ($Data_List_ZipList_ZipList)(($Data_List_Lazy_zipWith)($Data_Function_apply, $fs, $xs));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_List_ZipList_ZipList, &$Data_List_Lazy_zipWith, &$Data_Function_apply, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_List_ZipList_functorZipList) {
  $__fn = function($__dollar____unused) use (&$Data_List_ZipList_functorZipList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_ZipList_functorZipList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_ZipList_zipListIsNotBind
$Data_List_ZipList_zipListIsNotBind = (function() use (&$Control_Bind_Bind__dollar__Dict, &$Partial_Unsafe_unsafeCrashWith, &$Data_List_ZipList_applyZipList) {
  $__fn = function($__dollar____unused) use (&$Control_Bind_Bind__dollar__Dict, &$Partial_Unsafe_unsafeCrashWith, &$Data_List_ZipList_applyZipList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => ($Partial_Unsafe_unsafeCrashWith)("bind: unreachable"), "Apply0" => (function() use (&$Data_List_ZipList_applyZipList) {
  $__fn = function($__dollar____unused) use (&$Data_List_ZipList_applyZipList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_ZipList_applyZipList;
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

// Data_List_ZipList_applicativeZipList
$Data_List_ZipList_applicativeZipList = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn, $Data_List_ZipList_ZipList, $Data_List_Lazy_repeat), "Apply0" => (function() use (&$Data_List_ZipList_applyZipList) {
  $__fn = function($__dollar____unused) use (&$Data_List_ZipList_applyZipList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_ZipList_applyZipList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_ZipList_altZipList
$Data_List_ZipList_altZipList = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => (function() use (&$Data_List_ZipList_ZipList, &$Data_List_ZipList_append1, &$Data_List_Lazy_drop, &$Data_List_Lazy_length) {
  $__body = function($v, $v1) use (&$Data_List_ZipList_ZipList, &$Data_List_ZipList_append1, &$Data_List_Lazy_drop, &$Data_List_Lazy_length) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$xs = $__case_0;
$ys = $__case_1;
return ($Data_List_ZipList_ZipList)(($Data_List_ZipList_append1)($xs, ($Data_List_Lazy_drop)(($Data_List_Lazy_length)($xs), $ys)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_List_ZipList_ZipList, &$Data_List_ZipList_append1, &$Data_List_Lazy_drop, &$Data_List_Lazy_length, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_List_ZipList_functorZipList) {
  $__fn = function($__dollar____unused) use (&$Data_List_ZipList_functorZipList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_ZipList_functorZipList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_ZipList_plusZipList
$Data_List_ZipList_plusZipList = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => ($Data_Monoid_mempty)($Data_List_ZipList_monoidZipList), "Alt0" => (function() use (&$Data_List_ZipList_altZipList) {
  $__fn = function($__dollar____unused) use (&$Data_List_ZipList_altZipList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_ZipList_altZipList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_ZipList_alternativeZipList
$Data_List_ZipList_alternativeZipList = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_List_ZipList_applicativeZipList) {
  $__fn = function($__dollar____unused) use (&$Data_List_ZipList_applicativeZipList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_ZipList_applicativeZipList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use (&$Data_List_ZipList_plusZipList) {
  $__fn = function($__dollar____unused) use (&$Data_List_ZipList_plusZipList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_ZipList_plusZipList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

