<?php

namespace Control\Monad\Writer;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Monad.Writer/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_Writer_compose
$Control_Monad_Writer_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_Writer_unwrap
$Control_Monad_Writer_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Control_Monad_Writer_writer
$Control_Monad_Writer_writer = ($Control_Monad_Writer_compose)($Control_Monad_Writer_Trans_WriterT, ($Control_Applicative_pure)($Data_Identity_applicativeIdentity));

// Control_Monad_Writer_runWriter
$Control_Monad_Writer_runWriter = ($Control_Monad_Writer_compose)($Control_Monad_Writer_unwrap, $Control_Monad_Writer_Trans_runWriterT);

// Control_Monad_Writer_mapWriter
$Control_Monad_Writer_mapWriter = (function() use (&$Control_Monad_Writer_Trans_mapWriterT, &$Control_Monad_Writer_compose, &$Data_Identity_Identity, &$Control_Monad_Writer_unwrap) {
  $__fn = function($f) use (&$Control_Monad_Writer_Trans_mapWriterT, &$Control_Monad_Writer_compose, &$Data_Identity_Identity, &$Control_Monad_Writer_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Writer_Trans_mapWriterT)(($Control_Monad_Writer_compose)($Data_Identity_Identity, ($Control_Monad_Writer_compose)($f, $Control_Monad_Writer_unwrap)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Writer_execWriter
$Control_Monad_Writer_execWriter = (function() use (&$Data_Tuple_snd, &$Control_Monad_Writer_runWriter) {
  $__fn = function($m) use (&$Data_Tuple_snd, &$Control_Monad_Writer_runWriter, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_snd)(($Control_Monad_Writer_runWriter)($m));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

