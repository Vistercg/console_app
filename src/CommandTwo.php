<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class CommandTwo extends Command
{
    protected function configure()
    {
        $this
            ->setName('command2')
            ->setDescription('show text')
            ->addArgument('text', InputArgument::REQUIRED, 'Pass the text.')
            ->addArgument('summ', InputArgument::OPTIONAL);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $n = 1;

        if ($input->getArgument('summ')) {
            $n = $input->getArgument('summ');
        }
        for ($i = 1; $i <= $n; $i++) {
            $output->writeln(sprintf($input->getArgument('text')));
        }

        return Command::SUCCESS;
    }
}

