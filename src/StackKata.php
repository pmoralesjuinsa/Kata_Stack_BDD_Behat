<?php

namespace Src;

class StackKata
{
    public $stack;
    protected $maxItems = 3;

    function __construct()
    {
        $this->stack = [];
    }

    function put($item)
    {
        if($this->maxItems < count($this->stack)) {
            array_push($this->stack, $item);
        }
    }

}