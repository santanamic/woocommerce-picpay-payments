<?php

namespace _PA88H63MC84HH6TR4VD\GuzzleHttp\Promise;

interface TaskQueueInterface
{
    /**
     * Returns true if the queue is empty.
     *
     * @return bool
     */
    public function isEmpty();
    /**
     * Adds a task to the queue that will be executed the next time run is
     * called.
     *
     * @param callable $task
     */
    public function add(callable $task);
    /**
     * Execute all of the pending task in the queue.
     */
    public function run();
}