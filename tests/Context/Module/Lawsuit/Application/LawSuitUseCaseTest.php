<?php

declare(strict_types=1);


namespace App\Tests\Context\Module\Lawsuit\Application;


use App\Context\LawSuit\Module\LawSuit\Application\LawSuitUseCase;
use App\Context\LawSuit\Module\LawSuit\Domain\Entity\King;
use App\Context\LawSuit\Module\LawSuit\Domain\Entity\Notary;
use App\Context\LawSuit\Module\LawSuit\Domain\Entity\Part;
use App\Context\LawSuit\Module\LawSuit\Domain\Entity\Validator;
use PHPUnit\Framework\TestCase;

final class LawSuitUseCaseTest extends TestCase
{
    public function testLawSuitUseCaseWinPartOne()
    {
        $partOne = new Part();
        $partOne->addRole(new King());
        $partOne->addRole(new Notary());

        $partTwo = new Part();
        $partTwo->addRole(new Notary());
        $partTwo->addRole(new Notary());
        $partTwo->addRole(new Validator());

        $lawSuitUseCase = new LawSuitUseCase();
        $winner         = $lawSuitUseCase($partOne, $partTwo);

        $this->assertEquals('Part ONE', $winner);
    }

    public function testLawSuitUseCaseWinPartTwo()
    {
        $partOne = new Part();
        $partOne->addRole(new King());
        $partOne->addRole(new Notary());

        $partTwo = new Part();
        $partTwo->addRole(new King());
        $partTwo->addRole(new King());
        $partTwo->addRole(new Notary());
        $partTwo->addRole(new Notary());
        $partTwo->addRole(new Validator());

        $lawSuitUseCase = new LawSuitUseCase();
        $winner         = $lawSuitUseCase($partOne, $partTwo);

        $this->assertEquals('Part TWO', $winner);
    }
}