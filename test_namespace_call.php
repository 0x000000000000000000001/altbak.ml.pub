<?php
namespace Foo;
function bar() { return 42; }
echo (__NAMESPACE__ . '\\bar')() . "\n";
