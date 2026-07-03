<?php

namespace Data\Reflectable;

require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Reflectable/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Reflectable_Reifiable$Dict
$Data_Reflectable_Reifiable__dollar__Dict = (function() {
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

// Data_Reflectable_Reflectable$Dict
$Data_Reflectable_Reflectable__dollar__Dict = (function() {
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

// Data_Reflectable_reifiableString
$Data_Reflectable_reifiableString = ($Data_Reflectable_Reifiable__dollar__Dict)((object)[]);

// Data_Reflectable_reifiableOrdering
$Data_Reflectable_reifiableOrdering = ($Data_Reflectable_Reifiable__dollar__Dict)((object)[]);

// Data_Reflectable_reifiableInt
$Data_Reflectable_reifiableInt = ($Data_Reflectable_Reifiable__dollar__Dict)((object)[]);

// Data_Reflectable_reifiableBoolean
$Data_Reflectable_reifiableBoolean = ($Data_Reflectable_Reifiable__dollar__Dict)((object)[]);

// Data_Reflectable_reifyType
$Data_Reflectable_reifyType = (function() use (&$Data_Reflectable_unsafeCoerce, &$Type_Proxy_Proxy) {
  $__fn = function($__dollar____unused, $s = null, $f = null) use (&$Data_Reflectable_unsafeCoerce, &$Type_Proxy_Proxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$coerce = $Data_Reflectable_unsafeCoerce;
    $__res = ($coerce)((function() use ($f) {
  $__fn = function($dictReflectable) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)($dictReflectable);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), (object)["reflectType" => (function() use ($s) {
  $__fn = function($v) use ($s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $s;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()], $Type_Proxy_Proxy);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Reflectable_reflectType
$Data_Reflectable_reflectType = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->reflectType;
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

