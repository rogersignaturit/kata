<?php

declare(strict_types=1);


namespace App\Command;

use App\Context\LawSuit\Module\LawSuit\Domain\Entity\King;
use App\Context\LawSuit\Module\LawSuit\Domain\Entity\LawSuit;
use App\Context\LawSuit\Module\LawSuit\Domain\Entity\Notary;
use App\Context\LawSuit\Module\LawSuit\Domain\Entity\Part;
use App\Context\LawSuit\Module\LawSuit\Domain\Entity\Validator;
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
        $partOne = new Part();
        $partOne->addRole(new King());
        $partOne->addRole(new Notary());

        $partTwo = new Part();
        $partTwo->addRole(new Notary());
        $partTwo->addRole(new Notary());
        $partTwo->addRole(new Validator());

        $lawSuit = new LawSuit($partOne, $partTwo);
        $winner  = $lawSuit->winner();

        $output->writeln('The winner is <info>' . $winner . '</info>');
    }
}