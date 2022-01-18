<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class showsString extends Command
{
    protected function configure()
    {
        $this
            ->setName('showsString')
            ->setDescription('shows the entered string n times')
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

