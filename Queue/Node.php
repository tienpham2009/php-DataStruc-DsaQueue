<?php
namespace Queue;

class Node
{
    public $value;
    public $next;

    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
    }

    public function show()
    {
        return $this->value;
    }

}