<?php

namespace App\Command;

use App\Thread\TestThread;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('app:thread-test');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $ops = array();
        foreach (range("A", "Z") as $k => $task) {
            $ops[$task] = new TestThread($task);
            $ops[$task]->start();
        }
    }
}
