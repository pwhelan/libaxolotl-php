<?php
namespace Libaxolotl\exceptions;

class NoSessionException extends \Exception
{
    public function __construct($s) // [String s]
    {
        $this->message = $s;
    }
}
