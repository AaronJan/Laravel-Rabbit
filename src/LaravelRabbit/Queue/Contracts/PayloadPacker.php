<?php

namespace LaravelRabbit\Contracts;

interface PayloadPacker
{
    public function pack($job, $data = '', $queue = null);

    public function unpack($raw, $queue);

}