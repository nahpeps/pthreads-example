<?php

namespace App\Command;

use App\Thread\Helper\AutoloadingWorker;
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

        // Create our worker and stack our job on it
        $worker = new AutoloadingWorker();

        $ops = array();
        foreach (range("A", "Z") as $k => $task) {
            $ops[$task] = new TestThread($task);
            $worker->stack($ops[$task]);
        }

        $worker->start();
        $worker->join();

        /*
// Or use a pool and specify our custom worker
        $pool = new Pool(5, AutoloadingWorker::class);
        $pool->submit(new Example());
        $pool->shutdown();



*/
    }
}
