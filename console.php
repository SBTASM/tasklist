<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once 'vendor/autoload.php';
require_once 'config/database.php';

ConsoleRunner::run(null, null);
return ConsoleRunner::createHelperSet($entityManager);