<?php

namespace LaravelRabbit\Contracts;

interface PayloadPacker
{
    public function pack($job, $queue, $data = '');

    public function unpack($raw, $queue);

}