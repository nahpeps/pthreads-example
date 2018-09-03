<?php

namespace App\Thread;


class TestThread extends \Thread {

    private $arg;

    public function __construct($arg)
    {
        $this->arg = $arg;
    }

    public function run()
    {
        if ($this->arg) {
            $sleep = mt_rand(5, 10);
            printf('%s: %s  -start -sleeps %d' . "\n", date("g:i:sa"), $this->arg, $sleep);
            sleep($sleep);
            printf('%s: %s  -finish' . "\n", date("g:i:sa"), $this->arg);
        }
    }
}
