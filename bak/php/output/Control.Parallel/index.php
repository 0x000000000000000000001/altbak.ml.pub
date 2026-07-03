<?php

namespace Control\Parallel;

require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Parallel/index.php';
require_once __DIR__ . '/../Control.Parallel.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Parallel_compose
$Control_Parallel_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Parallel_identity
$Control_Parallel_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Control_Parallel_parTraverse_
$Control_Parallel_parTraverse_ = (function() use (&$Control_Parallel_Class_sequential, &$Control_Parallel_Class_parallel, &$Data_Foldable_traverse_, &$Control_Parallel_compose) {
  $__fn = function($dictParallel) use (&$Control_Parallel_Class_sequential, &$Control_Parallel_Class_parallel, &$Data_Foldable_traverse_, &$Control_Parallel_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequential = ($Control_Parallel_Class_sequential)($dictParallel);
$parallel = ($Control_Parallel_Class_parallel)($dictParallel);
    $__res = (function() use (&$Data_Foldable_traverse_, &$Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictApplicative) use (&$Data_Foldable_traverse_, &$Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse_ = ($Data_Foldable_traverse_)($dictApplicative);
    $__res = (function() use ($traverse_, &$Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictFoldable) use ($traverse_, &$Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse_1 = ($traverse_)($dictFoldable);
    $__res = (function() use (&$Control_Parallel_compose, $sequential, $traverse_1, $parallel) {
  $__fn = function($f) use (&$Control_Parallel_compose, $sequential, $traverse_1, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Parallel_compose)($sequential, ($traverse_1)(($Control_Parallel_compose)($parallel, $f)));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Parallel_parTraverse
$Control_Parallel_parTraverse = (function() use (&$Control_Parallel_Class_sequential, &$Control_Parallel_Class_parallel, &$Data_Traversable_traverse, &$Control_Parallel_compose) {
  $__fn = function($dictParallel) use (&$Control_Parallel_Class_sequential, &$Control_Parallel_Class_parallel, &$Data_Traversable_traverse, &$Control_Parallel_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequential = ($Control_Parallel_Class_sequential)($dictParallel);
$parallel = ($Control_Parallel_Class_parallel)($dictParallel);
    $__res = (function() use (&$Data_Traversable_traverse, &$Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictApplicative, $dictTraversable = null) use (&$Data_Traversable_traverse, &$Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse = ($Data_Traversable_traverse)($dictTraversable, $dictApplicative);
    $__res = (function() use (&$Control_Parallel_compose, $sequential, $traverse, $parallel) {
  $__fn = function($f) use (&$Control_Parallel_compose, $sequential, $traverse, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Parallel_compose)($sequential, ($traverse)(($Control_Parallel_compose)($parallel, $f)));
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

// Control_Parallel_parSequence_
$Control_Parallel_parSequence_ = (function() use (&$Control_Parallel_parTraverse_, &$Control_Parallel_identity) {
  $__fn = function($dictParallel) use (&$Control_Parallel_parTraverse_, &$Control_Parallel_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$parTraverse_1 = ($Control_Parallel_parTraverse_)($dictParallel);
    $__res = (function() use ($parTraverse_1, &$Control_Parallel_identity) {
  $__fn = function($dictApplicative) use ($parTraverse_1, &$Control_Parallel_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$parTraverse_2 = ($parTraverse_1)($dictApplicative);
    $__res = (function() use ($parTraverse_2, &$Control_Parallel_identity) {
  $__fn = function($dictFoldable) use ($parTraverse_2, &$Control_Parallel_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($parTraverse_2)($dictFoldable, $Control_Parallel_identity);
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

// Control_Parallel_parSequence
$Control_Parallel_parSequence = (function() use (&$Control_Parallel_parTraverse, &$Control_Parallel_identity) {
  $__fn = function($dictParallel) use (&$Control_Parallel_parTraverse, &$Control_Parallel_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$parTraverse1 = ($Control_Parallel_parTraverse)($dictParallel);
    $__res = (function() use ($parTraverse1, &$Control_Parallel_identity) {
  $__fn = function($dictApplicative) use ($parTraverse1, &$Control_Parallel_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$parTraverse2 = ($parTraverse1)($dictApplicative);
    $__res = (function() use ($parTraverse2, &$Control_Parallel_identity) {
  $__fn = function($dictTraversable) use ($parTraverse2, &$Control_Parallel_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($parTraverse2)($dictTraversable, $Control_Parallel_identity);
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

// Control_Parallel_parOneOfMap
$Control_Parallel_parOneOfMap = (function() use (&$Control_Parallel_Class_sequential, &$Control_Parallel_Class_parallel, &$Prim_undefined, &$Data_Foldable_oneOfMap, &$Control_Parallel_compose) {
  $__fn = function($dictParallel) use (&$Control_Parallel_Class_sequential, &$Control_Parallel_Class_parallel, &$Prim_undefined, &$Data_Foldable_oneOfMap, &$Control_Parallel_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequential = ($Control_Parallel_Class_sequential)($dictParallel);
$parallel = ($Control_Parallel_Class_parallel)($dictParallel);
    $__res = (function() use (&$Prim_undefined, &$Data_Foldable_oneOfMap, &$Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictAlternative) use (&$Prim_undefined, &$Data_Foldable_oneOfMap, &$Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Plus1 = (($dictAlternative)->Plus1)($Prim_undefined);
    $__res = (function() use (&$Data_Foldable_oneOfMap, &$Plus1, &$Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_oneOfMap, &$Plus1, &$Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$oneOfMap = ($Data_Foldable_oneOfMap)($dictFoldable, $Plus1);
    $__res = (function() use (&$Control_Parallel_compose, $sequential, $oneOfMap, $parallel) {
  $__fn = function($dictFunctor, $f = null) use (&$Control_Parallel_compose, $sequential, $oneOfMap, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Parallel_compose)($sequential, ($oneOfMap)(($Control_Parallel_compose)($parallel, $f)));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Parallel_parOneOf
$Control_Parallel_parOneOf = (function() use (&$Control_Parallel_Class_sequential, &$Control_Parallel_Class_parallel, &$Prim_undefined, &$Data_Foldable_oneOfMap, &$Control_Parallel_compose) {
  $__fn = function($dictParallel) use (&$Control_Parallel_Class_sequential, &$Control_Parallel_Class_parallel, &$Prim_undefined, &$Data_Foldable_oneOfMap, &$Control_Parallel_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequential = ($Control_Parallel_Class_sequential)($dictParallel);
$parallel = ($Control_Parallel_Class_parallel)($dictParallel);
    $__res = (function() use (&$Prim_undefined, &$Data_Foldable_oneOfMap, &$Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictAlternative) use (&$Prim_undefined, &$Data_Foldable_oneOfMap, &$Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Plus1 = (($dictAlternative)->Plus1)($Prim_undefined);
    $__res = (function() use (&$Data_Foldable_oneOfMap, &$Plus1, &$Control_Parallel_compose, $sequential, $parallel) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_oneOfMap, &$Plus1, &$Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$oneOfMap = ($Data_Foldable_oneOfMap)($dictFoldable, $Plus1);
    $__res = (function() use (&$Control_Parallel_compose, $sequential, $oneOfMap, $parallel) {
  $__fn = function($dictFunctor) use (&$Control_Parallel_compose, $sequential, $oneOfMap, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Parallel_compose)($sequential, ($oneOfMap)($parallel));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Parallel_parApply
$Control_Parallel_parApply = (function() use (&$Control_Parallel_Class_sequential, &$Control_Apply_apply, &$Prim_undefined, &$Control_Parallel_Class_parallel) {
  $__fn = function($dictParallel) use (&$Control_Parallel_Class_sequential, &$Control_Apply_apply, &$Prim_undefined, &$Control_Parallel_Class_parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequential = ($Control_Parallel_Class_sequential)($dictParallel);
$apply = ($Control_Apply_apply)((($dictParallel)->Apply1)($Prim_undefined));
$parallel = ($Control_Parallel_Class_parallel)($dictParallel);
    $__res = (function() use ($sequential, $apply, $parallel) {
  $__fn = function($mf, $ma = null) use ($sequential, $apply, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($sequential)(($apply)(($parallel)($mf), ($parallel)($ma)));
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

