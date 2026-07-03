<?php
require_once __DIR__ . '/App/index.php';
$App_main();
if (class_exists('\\Revolt\\EventLoop')) { \Revolt\EventLoop::run(); }
