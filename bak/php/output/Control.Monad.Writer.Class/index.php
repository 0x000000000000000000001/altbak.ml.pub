<?php

namespace Control\Monad\Writer\Class;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_Writer_Class_MonadTell$Dict
$Control_Monad_Writer_Class_MonadTell__dollar__Dict = (function() {
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

// Control_Monad_Writer_Class_MonadWriter$Dict
$Control_Monad_Writer_Class_MonadWriter__dollar__Dict = (function() {
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

// Control_Monad_Writer_Class_tell
$Control_Monad_Writer_Class_tell = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->tell;
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

// Control_Monad_Writer_Class_pass
$Control_Monad_Writer_Class_pass = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->pass;
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

// Control_Monad_Writer_Class_listen
$Control_Monad_Writer_Class_listen = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->listen;
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

// Control_Monad_Writer_Class_listens
$Control_Monad_Writer_Class_listens = (function() use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Writer_Class_listen, &$Control_Applicative_pure, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonadWriter) use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Writer_Class_listen, &$Control_Applicative_pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad1 = (((($dictMonadWriter)->MonadTell1)($Prim_undefined))->Monad1)($Prim_undefined);
$bind = ($Control_Bind_bind)((($Monad1)->Bind1)($Prim_undefined));
$listen1 = ($Control_Monad_Writer_Class_listen)($dictMonadWriter);
$pure = ($Control_Applicative_pure)((($Monad1)->Applicative0)($Prim_undefined));
    $__res = (function() use ($bind, $listen1, $pure, &$Data_Tuple_Tuple) {
  $__fn = function($f, $m = null) use ($bind, $listen1, $pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($listen1)($m), (function() use ($pure, &$Data_Tuple_Tuple, $f) {
  $__body = function($v) use ($pure, &$Data_Tuple_Tuple, $f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$w = ($__case_0)->values[1];
return ($pure)(($Data_Tuple_Tuple)($a, ($f)($w)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($pure, &$Data_Tuple_Tuple, $f, $__body, &$__fn) {
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
})());
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

// Control_Monad_Writer_Class_censor
$Control_Monad_Writer_Class_censor = (function() use (&$Control_Monad_Writer_Class_pass, &$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonadWriter) use (&$Control_Monad_Writer_Class_pass, &$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pass1 = ($Control_Monad_Writer_Class_pass)($dictMonadWriter);
$Monad1 = (((($dictMonadWriter)->MonadTell1)($Prim_undefined))->Monad1)($Prim_undefined);
$bind = ($Control_Bind_bind)((($Monad1)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($Monad1)->Applicative0)($Prim_undefined));
    $__res = (function() use ($pass1, $bind, $pure, &$Data_Tuple_Tuple) {
  $__fn = function($f, $m = null) use ($pass1, $bind, $pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pass1)(($bind)($m, (function() use ($pure, &$Data_Tuple_Tuple, $f) {
  $__fn = function($a) use ($pure, &$Data_Tuple_Tuple, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)(($Data_Tuple_Tuple)($a, $f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
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

