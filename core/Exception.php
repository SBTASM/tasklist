<?php

namespace core;

use Throwable;

class Exception extends \Exception{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        die($message);
        parent::__construct($message, $code, $previous);
    }
}