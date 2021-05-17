<?php
include_once "Queue/Queue.php";

use Queue\Queue;

$queue = new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(3);
$queue->enqueue(4);
echo $queue->dequeue();
echo "<br>";
echo $queue->dequeue();
echo "<br>";
echo implode(",",$queue->getData());