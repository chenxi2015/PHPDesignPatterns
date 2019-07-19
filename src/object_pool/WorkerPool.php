<?php

namespace Gxheart\object_pool;

class WorkerPool implements \Countable
{
    /**
     * @var array
     */
    private $occupiedWorkers = [];

    /**
     * @var array
     */
    private $freeWorkers = [];

    public function get(): StringReverseWorker
    {
        if (count($this->freeWorkers) == 0) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count(): int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }

    /**
     * @return array
     */
    public function getFreeWorkers(): array
    {
        return $this->freeWorkers;
    }

    /**
     * @return array
     */
    public function getOccupiedWorkers(): array
    {
        return $this->occupiedWorkers;
    }
}