<?php

require_once __DIR__ . DS . '..' . DS . 'vendor/autoload.php';
new Jevets\Kirby\Dotenv\Dotenv(__DIR__ . DS . '..');

# Setup Kirby
$kirby = kirby();
$kirby->roots()->site = __DIR__ . DS . '..' . DS . 'site';