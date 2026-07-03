<?php

namespace Effect\Exception\Unsafe;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
require_once __DIR__ . '/../Effect.Exception.Unsafe/index.php';
require_once __DIR__ . '/../Effect.Unsafe/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Effect_Exception_Unsafe_compose
$Effect_Exception_Unsafe_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Effect_Exception_Unsafe_unsafeThrowException
$Effect_Exception_Unsafe_unsafeThrowException = ($Effect_Exception_Unsafe_compose)($Effect_Unsafe_unsafePerformEffect, $Effect_Exception_throwException);

// Effect_Exception_Unsafe_unsafeThrow
$Effect_Exception_Unsafe_unsafeThrow = ($Effect_Exception_Unsafe_compose)($Effect_Exception_Unsafe_unsafeThrowException, $Effect_Exception_error);

