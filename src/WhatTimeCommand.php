<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class WhatTimeCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('what_time')
            ->setDescription('show current time')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $time = \Carbon\Carbon::now();
        
        $output->writeln($time->toRfc822String());
        
	return Command::SUCCESS;
    }
}
