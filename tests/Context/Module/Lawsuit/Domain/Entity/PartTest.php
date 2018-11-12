<?php

declare(strict_types=1);


namespace App\Tests\Context\Module\Lawsuit\Domain\Entity;


use App\Context\LawSuit\Module\LawSuit\Domain\Entity\King;
use App\Context\LawSuit\Module\LawSuit\Domain\Entity\Notary;
use App\Context\LawSuit\Module\LawSuit\Domain\Entity\Part;
use App\Context\LawSuit\Module\LawSuit\Domain\Entity\Validator;
use PHPUnit\Framework\TestCase;

final class PartTest extends TestCase
{
    public function testAddKingRole(): void
    {
        $partOne = new Part();
        $partOne->addRole(new King());

        $this->assertEquals(1, $partOne->countRoles());
        $this->assertEquals(5, $partOne->calculatePoints());
    }

    public function testAddKingAndNotaryRole(): void
    {
        $partOne = new Part();
        $partOne->addRole(new King());
        $partOne->addRole(new Notary());

        $this->assertEquals(2, $partOne->countRoles());
        $this->assertEquals(7, $partOne->calculatePoints());
    }

    public function testAddKingAndNotaryAndValidatorRole(): void
    {
        $partOne = new Part();
        $partOne->addRole(new King());
        $partOne->addRole(new Notary());
        $partOne->addRole(new Validator());

        $this->assertEquals(3, $partOne->countRoles());
        $this->assertEquals(8, $partOne->calculatePoints());
    }
}