<?php

namespace Data\BooleanAlgebra;

require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_BooleanAlgebra_heytingAlgebraRecord
$Data_BooleanAlgebra_heytingAlgebraRecord = ($Data_HeytingAlgebra_heytingAlgebraRecord)($Prim_undefined);

// Data_BooleanAlgebra_BooleanAlgebraRecord$Dict
$Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict = (function() {
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

// Data_BooleanAlgebra_BooleanAlgebra$Dict
$Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict = (function() {
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

// Data_BooleanAlgebra_booleanAlgebraUnit
$Data_BooleanAlgebra_booleanAlgebraUnit = ($Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict)((object)["HeytingAlgebra0" => (function() use (&$Data_HeytingAlgebra_heytingAlgebraUnit) {
  $__fn = function($__dollar____unused) use (&$Data_HeytingAlgebra_heytingAlgebraUnit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_HeytingAlgebra_heytingAlgebraUnit;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_BooleanAlgebra_booleanAlgebraRecordNil
$Data_BooleanAlgebra_booleanAlgebraRecordNil = ($Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict)((object)["HeytingAlgebraRecord0" => (function() use (&$Data_HeytingAlgebra_heytingAlgebraRecordNil) {
  $__fn = function($__dollar____unused) use (&$Data_HeytingAlgebra_heytingAlgebraRecordNil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_HeytingAlgebra_heytingAlgebraRecordNil;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_BooleanAlgebra_booleanAlgebraRecordCons
$Data_BooleanAlgebra_booleanAlgebraRecordCons = (function() use (&$Data_HeytingAlgebra_heytingAlgebraRecordCons, &$Prim_undefined, &$Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict) {
  $__fn = function($dictIsSymbol) use (&$Data_HeytingAlgebra_heytingAlgebraRecordCons, &$Prim_undefined, &$Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$heytingAlgebraRecordCons = ($Data_HeytingAlgebra_heytingAlgebraRecordCons)($dictIsSymbol, $Prim_undefined);
    $__res = (function() use ($heytingAlgebraRecordCons, &$Prim_undefined, &$Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict) {
  $__fn = function($__dollar____unused, $dictBooleanAlgebraRecord = null) use ($heytingAlgebraRecordCons, &$Prim_undefined, &$Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$heytingAlgebraRecordCons1 = ($heytingAlgebraRecordCons)((($dictBooleanAlgebraRecord)->HeytingAlgebraRecord0)($Prim_undefined));
    $__res = (function() use ($heytingAlgebraRecordCons1, &$Prim_undefined, &$Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict) {
  $__fn = function($dictBooleanAlgebra) use ($heytingAlgebraRecordCons1, &$Prim_undefined, &$Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$heytingAlgebraRecordCons2 = ($heytingAlgebraRecordCons1)((($dictBooleanAlgebra)->HeytingAlgebra0)($Prim_undefined));
    $__res = ($Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict)((object)["HeytingAlgebraRecord0" => (function() use ($heytingAlgebraRecordCons2) {
  $__fn = function($__dollar____unused) use ($heytingAlgebraRecordCons2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $heytingAlgebraRecordCons2;
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

// Data_BooleanAlgebra_booleanAlgebraRecord
$Data_BooleanAlgebra_booleanAlgebraRecord = (function() use (&$Data_BooleanAlgebra_heytingAlgebraRecord, &$Prim_undefined, &$Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict) {
  $__fn = function($__dollar____unused, $dictBooleanAlgebraRecord = null) use (&$Data_BooleanAlgebra_heytingAlgebraRecord, &$Prim_undefined, &$Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$heytingAlgebraRecord1 = ($Data_BooleanAlgebra_heytingAlgebraRecord)((($dictBooleanAlgebraRecord)->HeytingAlgebraRecord0)($Prim_undefined));
    $__res = ($Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict)((object)["HeytingAlgebra0" => (function() use ($heytingAlgebraRecord1) {
  $__fn = function($__dollar____unused) use ($heytingAlgebraRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $heytingAlgebraRecord1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_BooleanAlgebra_booleanAlgebraProxy
$Data_BooleanAlgebra_booleanAlgebraProxy = ($Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict)((object)["HeytingAlgebra0" => (function() use (&$Data_HeytingAlgebra_heytingAlgebraProxy) {
  $__fn = function($__dollar____unused) use (&$Data_HeytingAlgebra_heytingAlgebraProxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_HeytingAlgebra_heytingAlgebraProxy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_BooleanAlgebra_booleanAlgebraFn
$Data_BooleanAlgebra_booleanAlgebraFn = (function() use (&$Data_HeytingAlgebra_heytingAlgebraFunction, &$Prim_undefined, &$Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict) {
  $__fn = function($dictBooleanAlgebra) use (&$Data_HeytingAlgebra_heytingAlgebraFunction, &$Prim_undefined, &$Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$heytingAlgebraFunction = ($Data_HeytingAlgebra_heytingAlgebraFunction)((($dictBooleanAlgebra)->HeytingAlgebra0)($Prim_undefined));
    $__res = ($Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict)((object)["HeytingAlgebra0" => (function() use ($heytingAlgebraFunction) {
  $__fn = function($__dollar____unused) use ($heytingAlgebraFunction, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $heytingAlgebraFunction;
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

// Data_BooleanAlgebra_booleanAlgebraBoolean
$Data_BooleanAlgebra_booleanAlgebraBoolean = ($Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict)((object)["HeytingAlgebra0" => (function() use (&$Data_HeytingAlgebra_heytingAlgebraBoolean) {
  $__fn = function($__dollar____unused) use (&$Data_HeytingAlgebra_heytingAlgebraBoolean, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_HeytingAlgebra_heytingAlgebraBoolean;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

