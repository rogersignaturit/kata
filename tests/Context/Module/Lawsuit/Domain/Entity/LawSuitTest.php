<?php

declare(strict_types=1);


namespace App\Tests\Context\Module\Lawsuit\Domain\Entity;


use App\Context\LawSuit\Module\LawSuit\Domain\Entity\King;
use App\Context\LawSuit\Module\LawSuit\Domain\Entity\LawSuit;
use App\Context\LawSuit\Module\LawSuit\Domain\Entity\Notary;
use App\Context\LawSuit\Module\LawSuit\Domain\Entity\Part;
use App\Context\LawSuit\Module\LawSuit\Domain\Entity\Validator;
use PHPUnit\Framework\TestCase;

final class LawSuitTest extends TestCase
{
    public function testPartOneWinner()
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

        $this->assertEquals('Part ONE', $winner);
    }

    public function testPartTwoWinner()
    {
        $partOne = new Part();
        $partOne->addRole(new King());
        $partOne->addRole(new Notary());

        $partTwo = new Part();
        $partTwo->addRole(new King());
        $partTwo->addRole(new King());
        $partTwo->addRole(new King());

        $lawSuit = new LawSuit($partOne, $partTwo);
        $winner  = $lawSuit->winner();

        $this->assertEquals('Part TWO', $winner);
    }
}