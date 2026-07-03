<?php

namespace Data\CommutativeRing;

require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_CommutativeRing_ringRecord
$Data_CommutativeRing_ringRecord = ($Data_Ring_ringRecord)($Prim_undefined);

// Data_CommutativeRing_CommutativeRingRecord$Dict
$Data_CommutativeRing_CommutativeRingRecord__dollar__Dict = (function() {
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

// Data_CommutativeRing_CommutativeRing$Dict
$Data_CommutativeRing_CommutativeRing__dollar__Dict = (function() {
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

// Data_CommutativeRing_commutativeRingUnit
$Data_CommutativeRing_commutativeRingUnit = ($Data_CommutativeRing_CommutativeRing__dollar__Dict)((object)["Ring0" => (function() use (&$Data_Ring_ringUnit) {
  $__fn = function($__dollar____unused) use (&$Data_Ring_ringUnit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ring_ringUnit;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_CommutativeRing_commutativeRingRecordNil
$Data_CommutativeRing_commutativeRingRecordNil = ($Data_CommutativeRing_CommutativeRingRecord__dollar__Dict)((object)["RingRecord0" => (function() use (&$Data_Ring_ringRecordNil) {
  $__fn = function($__dollar____unused) use (&$Data_Ring_ringRecordNil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ring_ringRecordNil;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_CommutativeRing_commutativeRingRecordCons
$Data_CommutativeRing_commutativeRingRecordCons = (function() use (&$Data_Ring_ringRecordCons, &$Prim_undefined, &$Data_CommutativeRing_CommutativeRingRecord__dollar__Dict) {
  $__fn = function($dictIsSymbol) use (&$Data_Ring_ringRecordCons, &$Prim_undefined, &$Data_CommutativeRing_CommutativeRingRecord__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ringRecordCons = ($Data_Ring_ringRecordCons)($dictIsSymbol, $Prim_undefined);
    $__res = (function() use ($ringRecordCons, &$Prim_undefined, &$Data_CommutativeRing_CommutativeRingRecord__dollar__Dict) {
  $__fn = function($__dollar____unused, $dictCommutativeRingRecord = null) use ($ringRecordCons, &$Prim_undefined, &$Data_CommutativeRing_CommutativeRingRecord__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ringRecordCons1 = ($ringRecordCons)((($dictCommutativeRingRecord)->RingRecord0)($Prim_undefined));
    $__res = (function() use ($ringRecordCons1, &$Prim_undefined, &$Data_CommutativeRing_CommutativeRingRecord__dollar__Dict) {
  $__fn = function($dictCommutativeRing) use ($ringRecordCons1, &$Prim_undefined, &$Data_CommutativeRing_CommutativeRingRecord__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ringRecordCons2 = ($ringRecordCons1)((($dictCommutativeRing)->Ring0)($Prim_undefined));
    $__res = ($Data_CommutativeRing_CommutativeRingRecord__dollar__Dict)((object)["RingRecord0" => (function() use ($ringRecordCons2) {
  $__fn = function($__dollar____unused) use ($ringRecordCons2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $ringRecordCons2;
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

// Data_CommutativeRing_commutativeRingRecord
$Data_CommutativeRing_commutativeRingRecord = (function() use (&$Data_CommutativeRing_ringRecord, &$Prim_undefined, &$Data_CommutativeRing_CommutativeRing__dollar__Dict) {
  $__fn = function($__dollar____unused, $dictCommutativeRingRecord = null) use (&$Data_CommutativeRing_ringRecord, &$Prim_undefined, &$Data_CommutativeRing_CommutativeRing__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ringRecord1 = ($Data_CommutativeRing_ringRecord)((($dictCommutativeRingRecord)->RingRecord0)($Prim_undefined));
    $__res = ($Data_CommutativeRing_CommutativeRing__dollar__Dict)((object)["Ring0" => (function() use ($ringRecord1) {
  $__fn = function($__dollar____unused) use ($ringRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $ringRecord1;
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

// Data_CommutativeRing_commutativeRingProxy
$Data_CommutativeRing_commutativeRingProxy = ($Data_CommutativeRing_CommutativeRing__dollar__Dict)((object)["Ring0" => (function() use (&$Data_Ring_ringProxy) {
  $__fn = function($__dollar____unused) use (&$Data_Ring_ringProxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ring_ringProxy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_CommutativeRing_commutativeRingNumber
$Data_CommutativeRing_commutativeRingNumber = ($Data_CommutativeRing_CommutativeRing__dollar__Dict)((object)["Ring0" => (function() use (&$Data_Ring_ringNumber) {
  $__fn = function($__dollar____unused) use (&$Data_Ring_ringNumber, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ring_ringNumber;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_CommutativeRing_commutativeRingInt
$Data_CommutativeRing_commutativeRingInt = ($Data_CommutativeRing_CommutativeRing__dollar__Dict)((object)["Ring0" => (function() use (&$Data_Ring_ringInt) {
  $__fn = function($__dollar____unused) use (&$Data_Ring_ringInt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ring_ringInt;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_CommutativeRing_commutativeRingFn
$Data_CommutativeRing_commutativeRingFn = (function() use (&$Data_Ring_ringFn, &$Prim_undefined, &$Data_CommutativeRing_CommutativeRing__dollar__Dict) {
  $__fn = function($dictCommutativeRing) use (&$Data_Ring_ringFn, &$Prim_undefined, &$Data_CommutativeRing_CommutativeRing__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ringFn = ($Data_Ring_ringFn)((($dictCommutativeRing)->Ring0)($Prim_undefined));
    $__res = ($Data_CommutativeRing_CommutativeRing__dollar__Dict)((object)["Ring0" => (function() use ($ringFn) {
  $__fn = function($__dollar____unused) use ($ringFn, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $ringFn;
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

