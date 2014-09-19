<?php

$autoloadFiles = array(
    __DIR__ . '/../vendor/autoload.php',
    __DIR__ . '/../../../../vendor/autoload.php',
);

$autoloadFile = false;

foreach ($autoloadFiles as $file) {
    if (is_file($file)) {
        $autoloadFile = $file;
        break;
    }
}

if (!$autoloadFile) {
    die('Can\'t find autoloader');
}

include $autoloadFile;