<?php

namespace Src;

class StackKata
{
    public $stack;
    protected $maxItems;

    function __construct($maxItems = 3)
    {
        $this->stack = [];
        $this->maxItems = $maxItems;
    }

    function put($item)
    {
        if(count($this->stack) >= $this->maxItems) {
            throw new \Exception('Stack is full');
        }

        array_push($this->stack, $item);

    }

    function pop()
    {
        if(empty($this->stack)) {
            throw new \Exception('Stack is empty');
        }

        array_pop($this->stack);
    }

}