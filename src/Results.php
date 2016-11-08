<?php

namespace Laravel\Scout;

use Illuminate\Support\Collection;

class Results
{
    public function __construct($engine, $results)
    {
        $this->results = $results;
        $this->engine = $engine;
    }

    public function count() {
        return $this->engine->getTotalCount($this->results);
    }

    public function keys()
    {
        return Collection::make(
            $this->engine->getPrimaryKeys($this->results)
        );
    }
}
