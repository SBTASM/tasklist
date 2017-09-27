<?php

require_once 'autoload.php';
require_once 'vendor/autoload.php';

$app = new \core\App(require_once 'config/web.php');

echo $app->run();


