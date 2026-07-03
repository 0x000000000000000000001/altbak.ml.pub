<?php

namespace Data\Map\Gen;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Map_Gen_genMap
$Data_Map_Gen_genMap = (function() use (&$Control_Monad_Gen_unfoldable, &$Control_Monad_Gen_Class_sized, &$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Gen_Class_chooseInt, &$Control_Monad_Gen_Class_resize, &$Data_Functor_map, &$Data_List_Types_unfoldableList, &$Control_Apply_apply, &$Data_Map_Internal_fromFoldable, &$Data_List_Types_foldableList, &$Data_Function_const, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonadRec) use (&$Control_Monad_Gen_unfoldable, &$Control_Monad_Gen_Class_sized, &$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Gen_Class_chooseInt, &$Control_Monad_Gen_Class_resize, &$Data_Functor_map, &$Data_List_Types_unfoldableList, &$Control_Apply_apply, &$Data_Map_Internal_fromFoldable, &$Data_List_Types_foldableList, &$Data_Function_const, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$unfoldable = ($Control_Monad_Gen_unfoldable)($dictMonadRec);
    $__res = (function() use (&$Control_Monad_Gen_Class_sized, &$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Gen_Class_chooseInt, &$Control_Monad_Gen_Class_resize, &$Data_Functor_map, $unfoldable, &$Data_List_Types_unfoldableList, &$Control_Apply_apply, &$Data_Map_Internal_fromFoldable, &$Data_List_Types_foldableList, &$Data_Function_const, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonadGen) use (&$Control_Monad_Gen_Class_sized, &$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Gen_Class_chooseInt, &$Control_Monad_Gen_Class_resize, &$Data_Functor_map, $unfoldable, &$Data_List_Types_unfoldableList, &$Control_Apply_apply, &$Data_Map_Internal_fromFoldable, &$Data_List_Types_foldableList, &$Data_Function_const, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sized = ($Control_Monad_Gen_Class_sized)($dictMonadGen);
$Bind1 = (((($dictMonadGen)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined);
$bind = ($Control_Bind_bind)($Bind1);
$chooseInt = ($Control_Monad_Gen_Class_chooseInt)($dictMonadGen);
$resize = ($Control_Monad_Gen_Class_resize)($dictMonadGen);
$Apply0 = (($Bind1)->Apply0)($Prim_undefined);
$map = ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined));
$unfoldable1 = ($unfoldable)($dictMonadGen, $Data_List_Types_unfoldableList);
$apply = ($Control_Apply_apply)($Apply0);
    $__res = (function() use (&$Data_Map_Internal_fromFoldable, &$Data_List_Types_foldableList, $sized, $bind, $chooseInt, $resize, &$Data_Function_const, $map, $unfoldable1, $apply, &$Data_Tuple_Tuple) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_fromFoldable, &$Data_List_Types_foldableList, $sized, $bind, $chooseInt, $resize, &$Data_Function_const, $map, $unfoldable1, $apply, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$fromFoldable = ($Data_Map_Internal_fromFoldable)($dictOrd, $Data_List_Types_foldableList);
    $__res = (function() use ($sized, $bind, $chooseInt, $resize, &$Data_Function_const, $map, $fromFoldable, $unfoldable1, $apply, &$Data_Tuple_Tuple) {
  $__fn = function($genKey, $genValue = null) use ($sized, $bind, $chooseInt, $resize, &$Data_Function_const, $map, $fromFoldable, $unfoldable1, $apply, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($sized)((function() use ($bind, $chooseInt, $resize, &$Data_Function_const, $map, $fromFoldable, $unfoldable1, $apply, &$Data_Tuple_Tuple, $genKey, $genValue) {
  $__fn = function($size) use ($bind, $chooseInt, $resize, &$Data_Function_const, $map, $fromFoldable, $unfoldable1, $apply, &$Data_Tuple_Tuple, $genKey, $genValue, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($chooseInt)(0, $size), (function() use ($resize, &$Data_Function_const, $map, $fromFoldable, $unfoldable1, $apply, &$Data_Tuple_Tuple, $genKey, $genValue) {
  $__fn = function($newSize) use ($resize, &$Data_Function_const, $map, $fromFoldable, $unfoldable1, $apply, &$Data_Tuple_Tuple, $genKey, $genValue, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($resize)(($Data_Function_const)($newSize), ($map)($fromFoldable, ($unfoldable1)(($apply)(($map)($Data_Tuple_Tuple, $genKey), $genValue))));
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

