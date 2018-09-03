<?php
namespace App\Thread\Helper;

class AutoloadingWorker extends \Worker
{
    public function run()
    {
        require 'vendor/autoload.php';
    }
}
