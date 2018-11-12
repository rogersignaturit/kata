<?php

declare(strict_types=1);


namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class LawSuitCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('lawsuit')
            ->setDescription('Signaturit kata')
            ->setHelp('Signaturit kata');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }
}