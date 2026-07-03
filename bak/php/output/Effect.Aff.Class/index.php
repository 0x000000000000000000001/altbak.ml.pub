<?php

namespace Effect\Aff\Class;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Except.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.List.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Maybe.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.RWS.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.State.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Effect.Aff/index.php';
require_once __DIR__ . '/../Effect.Aff.Class/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Effect_Aff_Class_compose
$Effect_Aff_Class_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Effect_Aff_Class_lift
$Effect_Aff_Class_lift = ($Control_Monad_Trans_Class_lift)($Control_Monad_Cont_Trans_monadTransContT);

// Effect_Aff_Class_lift1
$Effect_Aff_Class_lift1 = ($Control_Monad_Trans_Class_lift)($Control_Monad_Except_Trans_monadTransExceptT);

// Effect_Aff_Class_lift2
$Effect_Aff_Class_lift2 = ($Control_Monad_Trans_Class_lift)($Control_Monad_List_Trans_monadTransListT);

// Effect_Aff_Class_lift3
$Effect_Aff_Class_lift3 = ($Control_Monad_Trans_Class_lift)($Control_Monad_Maybe_Trans_monadTransMaybeT);

// Effect_Aff_Class_lift4
$Effect_Aff_Class_lift4 = ($Control_Monad_Trans_Class_lift)($Control_Monad_Reader_Trans_monadTransReaderT);

// Effect_Aff_Class_lift5
$Effect_Aff_Class_lift5 = ($Control_Monad_Trans_Class_lift)($Control_Monad_State_Trans_monadTransStateT);

// Effect_Aff_Class_MonadAff$Dict
$Effect_Aff_Class_MonadAff__dollar__Dict = (function() {
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

// Effect_Aff_Class_monadAffAff
$Effect_Aff_Class_monadAffAff = ($Effect_Aff_Class_MonadAff__dollar__Dict)((object)["liftAff" => ($Control_Category_identity)($Control_Category_categoryFn), "MonadEffect0" => (function() use (&$Effect_Aff_monadEffectAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_monadEffectAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_monadEffectAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_Class_liftAff
$Effect_Aff_Class_liftAff = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->liftAff;
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

// Effect_Aff_Class_monadAffContT
$Effect_Aff_Class_monadAffContT = (function() use (&$Prim_undefined, &$Control_Monad_Cont_Trans_monadEffectContT, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Effect_Aff_Class_lift, &$Effect_Aff_Class_liftAff) {
  $__fn = function($dictMonadAff) use (&$Prim_undefined, &$Control_Monad_Cont_Trans_monadEffectContT, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Effect_Aff_Class_lift, &$Effect_Aff_Class_liftAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)($Prim_undefined);
$monadEffectContT = ($Control_Monad_Cont_Trans_monadEffectContT)($MonadEffect0);
    $__res = ($Effect_Aff_Class_MonadAff__dollar__Dict)((object)["liftAff" => ($Effect_Aff_Class_compose)(($Effect_Aff_Class_lift)((($MonadEffect0)->Monad0)($Prim_undefined)), ($Effect_Aff_Class_liftAff)($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectContT) {
  $__fn = function($__dollar____unused) use ($monadEffectContT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadEffectContT;
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

// Effect_Aff_Class_monadAffExceptT
$Effect_Aff_Class_monadAffExceptT = (function() use (&$Prim_undefined, &$Control_Monad_Except_Trans_monadEffectExceptT, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Effect_Aff_Class_lift1, &$Effect_Aff_Class_liftAff) {
  $__fn = function($dictMonadAff) use (&$Prim_undefined, &$Control_Monad_Except_Trans_monadEffectExceptT, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Effect_Aff_Class_lift1, &$Effect_Aff_Class_liftAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)($Prim_undefined);
$monadEffectExceptT = ($Control_Monad_Except_Trans_monadEffectExceptT)($MonadEffect0);
    $__res = ($Effect_Aff_Class_MonadAff__dollar__Dict)((object)["liftAff" => ($Effect_Aff_Class_compose)(($Effect_Aff_Class_lift1)((($MonadEffect0)->Monad0)($Prim_undefined)), ($Effect_Aff_Class_liftAff)($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectExceptT) {
  $__fn = function($__dollar____unused) use ($monadEffectExceptT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadEffectExceptT;
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

// Effect_Aff_Class_monadAffListT
$Effect_Aff_Class_monadAffListT = (function() use (&$Prim_undefined, &$Control_Monad_List_Trans_monadEffectListT, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Effect_Aff_Class_lift2, &$Effect_Aff_Class_liftAff) {
  $__fn = function($dictMonadAff) use (&$Prim_undefined, &$Control_Monad_List_Trans_monadEffectListT, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Effect_Aff_Class_lift2, &$Effect_Aff_Class_liftAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)($Prim_undefined);
$monadEffectListT = ($Control_Monad_List_Trans_monadEffectListT)($MonadEffect0);
    $__res = ($Effect_Aff_Class_MonadAff__dollar__Dict)((object)["liftAff" => ($Effect_Aff_Class_compose)(($Effect_Aff_Class_lift2)((($MonadEffect0)->Monad0)($Prim_undefined)), ($Effect_Aff_Class_liftAff)($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectListT) {
  $__fn = function($__dollar____unused) use ($monadEffectListT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadEffectListT;
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

// Effect_Aff_Class_monadAffMaybe
$Effect_Aff_Class_monadAffMaybe = (function() use (&$Prim_undefined, &$Control_Monad_Maybe_Trans_monadEffectMaybe, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Effect_Aff_Class_lift3, &$Effect_Aff_Class_liftAff) {
  $__fn = function($dictMonadAff) use (&$Prim_undefined, &$Control_Monad_Maybe_Trans_monadEffectMaybe, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Effect_Aff_Class_lift3, &$Effect_Aff_Class_liftAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)($Prim_undefined);
$monadEffectMaybe = ($Control_Monad_Maybe_Trans_monadEffectMaybe)($MonadEffect0);
    $__res = ($Effect_Aff_Class_MonadAff__dollar__Dict)((object)["liftAff" => ($Effect_Aff_Class_compose)(($Effect_Aff_Class_lift3)((($MonadEffect0)->Monad0)($Prim_undefined)), ($Effect_Aff_Class_liftAff)($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectMaybe) {
  $__fn = function($__dollar____unused) use ($monadEffectMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadEffectMaybe;
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

// Effect_Aff_Class_monadAffRWS
$Effect_Aff_Class_monadAffRWS = (function() use (&$Prim_undefined, &$Effect_Aff_Class_liftAff, &$Control_Monad_RWS_Trans_monadEffectRWS, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Control_Monad_Trans_Class_lift, &$Control_Monad_RWS_Trans_monadTransRWST) {
  $__fn = function($dictMonadAff) use (&$Prim_undefined, &$Effect_Aff_Class_liftAff, &$Control_Monad_RWS_Trans_monadEffectRWS, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Control_Monad_Trans_Class_lift, &$Control_Monad_RWS_Trans_monadTransRWST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)($Prim_undefined);
$Monad0 = (($MonadEffect0)->Monad0)($Prim_undefined);
$liftAff1 = ($Effect_Aff_Class_liftAff)($dictMonadAff);
    $__res = (function() use (&$Control_Monad_RWS_Trans_monadEffectRWS, &$MonadEffect0, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Control_Monad_Trans_Class_lift, &$Control_Monad_RWS_Trans_monadTransRWST, &$Monad0, $liftAff1) {
  $__fn = function($dictMonoid) use (&$Control_Monad_RWS_Trans_monadEffectRWS, &$MonadEffect0, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Control_Monad_Trans_Class_lift, &$Control_Monad_RWS_Trans_monadTransRWST, &$Monad0, $liftAff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadEffectRWS = ($Control_Monad_RWS_Trans_monadEffectRWS)($dictMonoid, $MonadEffect0);
    $__res = ($Effect_Aff_Class_MonadAff__dollar__Dict)((object)["liftAff" => ($Effect_Aff_Class_compose)(($Control_Monad_Trans_Class_lift)(($Control_Monad_RWS_Trans_monadTransRWST)($dictMonoid), $Monad0), $liftAff1), "MonadEffect0" => (function() use ($monadEffectRWS) {
  $__fn = function($__dollar____unused) use ($monadEffectRWS, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadEffectRWS;
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Aff_Class_monadAffReader
$Effect_Aff_Class_monadAffReader = (function() use (&$Prim_undefined, &$Control_Monad_Reader_Trans_monadEffectReader, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Effect_Aff_Class_lift4, &$Effect_Aff_Class_liftAff) {
  $__fn = function($dictMonadAff) use (&$Prim_undefined, &$Control_Monad_Reader_Trans_monadEffectReader, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Effect_Aff_Class_lift4, &$Effect_Aff_Class_liftAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)($Prim_undefined);
$monadEffectReader = ($Control_Monad_Reader_Trans_monadEffectReader)($MonadEffect0);
    $__res = ($Effect_Aff_Class_MonadAff__dollar__Dict)((object)["liftAff" => ($Effect_Aff_Class_compose)(($Effect_Aff_Class_lift4)((($MonadEffect0)->Monad0)($Prim_undefined)), ($Effect_Aff_Class_liftAff)($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectReader) {
  $__fn = function($__dollar____unused) use ($monadEffectReader, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadEffectReader;
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

// Effect_Aff_Class_monadAffState
$Effect_Aff_Class_monadAffState = (function() use (&$Prim_undefined, &$Control_Monad_State_Trans_monadEffectState, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Effect_Aff_Class_lift5, &$Effect_Aff_Class_liftAff) {
  $__fn = function($dictMonadAff) use (&$Prim_undefined, &$Control_Monad_State_Trans_monadEffectState, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Effect_Aff_Class_lift5, &$Effect_Aff_Class_liftAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)($Prim_undefined);
$monadEffectState = ($Control_Monad_State_Trans_monadEffectState)($MonadEffect0);
    $__res = ($Effect_Aff_Class_MonadAff__dollar__Dict)((object)["liftAff" => ($Effect_Aff_Class_compose)(($Effect_Aff_Class_lift5)((($MonadEffect0)->Monad0)($Prim_undefined)), ($Effect_Aff_Class_liftAff)($dictMonadAff)), "MonadEffect0" => (function() use ($monadEffectState) {
  $__fn = function($__dollar____unused) use ($monadEffectState, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadEffectState;
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

// Effect_Aff_Class_monadAffWriter
$Effect_Aff_Class_monadAffWriter = (function() use (&$Prim_undefined, &$Effect_Aff_Class_liftAff, &$Control_Monad_Writer_Trans_monadEffectWriter, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Control_Monad_Trans_Class_lift, &$Control_Monad_Writer_Trans_monadTransWriterT) {
  $__fn = function($dictMonadAff) use (&$Prim_undefined, &$Effect_Aff_Class_liftAff, &$Control_Monad_Writer_Trans_monadEffectWriter, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Control_Monad_Trans_Class_lift, &$Control_Monad_Writer_Trans_monadTransWriterT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$MonadEffect0 = (($dictMonadAff)->MonadEffect0)($Prim_undefined);
$Monad0 = (($MonadEffect0)->Monad0)($Prim_undefined);
$liftAff1 = ($Effect_Aff_Class_liftAff)($dictMonadAff);
    $__res = (function() use (&$Control_Monad_Writer_Trans_monadEffectWriter, &$MonadEffect0, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Control_Monad_Trans_Class_lift, &$Control_Monad_Writer_Trans_monadTransWriterT, &$Monad0, $liftAff1) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Writer_Trans_monadEffectWriter, &$MonadEffect0, &$Effect_Aff_Class_MonadAff__dollar__Dict, &$Effect_Aff_Class_compose, &$Control_Monad_Trans_Class_lift, &$Control_Monad_Writer_Trans_monadTransWriterT, &$Monad0, $liftAff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadEffectWriter = ($Control_Monad_Writer_Trans_monadEffectWriter)($dictMonoid, $MonadEffect0);
    $__res = ($Effect_Aff_Class_MonadAff__dollar__Dict)((object)["liftAff" => ($Effect_Aff_Class_compose)(($Control_Monad_Trans_Class_lift)(($Control_Monad_Writer_Trans_monadTransWriterT)($dictMonoid), $Monad0), $liftAff1), "MonadEffect0" => (function() use ($monadEffectWriter) {
  $__fn = function($__dollar____unused) use ($monadEffectWriter, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadEffectWriter;
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

