<?php

namespace Queue;

include_once "Node.php";

class Queue
{
    private $front;
    private $back;

    public function __construct()
    {
        $this->front = null;
        $this->back = null;
    }

    public function isEmpty(): bool
    {
        return is_null($this->front);
    }

    public function enqueue($value)
    {
        $data = new Node($value);

        if ($this->isEmpty()) {
            $this->front = $data;
        } else {

            $this->back->next = $data;
        }
        $this->back = $data;
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $item = $this->front->value;
        $this->front = $this->front->next;

        return $item;

    }

    public function getData(): array
    {
        $current = $this->front;
        $currentData = [];
        while ($current->value !== null) {
            $currentValue = $current->value;
            $current = $current->next;
            $currentData[] = $currentValue;
        }
        return $currentData;


    }
}