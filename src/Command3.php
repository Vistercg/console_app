<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;

class Command3 extends Command
{
    protected function configure()
    {
        $this
            ->setName('command3')
            ->setDescription('show info');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $question = new Question('Please enter your name ', '');
        $name = $helper->ask($input, $output, $question);

        if($name){
            $question = new Question('Please enter your age ', '');
            $age = $helper->ask($input, $output, $question);
            if($age) {
                $question = new ChoiceQuestion(
                    'Please choose your gender (defaults to M)',
                    ['Man', 'Woman'],
                    0
                );
                $question->setErrorMessage('Gender %s is invalid.');

                $gender = $helper->ask($input, $output, $question);
            }
        }

        $output->write('Hello, Your name: ' . $name);
        $output->write('. Your age: ' . $age);
        $output->writeln('. Your gender: '.$gender);

        return Command::SUCCESS;
    }
}

