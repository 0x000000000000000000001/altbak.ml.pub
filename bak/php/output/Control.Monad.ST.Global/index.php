<?php

namespace Control\Monad\ST\Global;

require_once __DIR__ . '/../Control.Monad.ST/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Unsafe.Coerce/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_ST_Global_toEffect
$Control_Monad_ST_Global_toEffect = $Unsafe_Coerce_unsafeCoerce;

