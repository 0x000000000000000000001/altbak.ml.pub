<?php
namespace Foo;
function bar() { return function($x) { return $x; }; }
echo (($GLOBALS['not_exist'] ?? (\Foo\bar())))("hello") . "\n";
