<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class hellophp extends Command
{
    protected function configure()
    {
        $this
            ->setName('say_hello')
            ->setDescription('show you say')
            ->addArgument('text', InputArgument::REQUIRED, 'Pass the text.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $output->writeln(sprintf('Привет, %s', $input->getArgument('text')));

        return Command::SUCCESS;
    }

}