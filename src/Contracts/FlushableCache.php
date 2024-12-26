<?php

namespace Laravel\Pennant\Contracts;

interface FlushableCache
{
    /**
     * Flush the cache.
     *
     * @return void
     */
    public function flushCache();
}
