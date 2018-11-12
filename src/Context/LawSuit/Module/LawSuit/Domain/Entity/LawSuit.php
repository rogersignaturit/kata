<?php

declare(strict_types=1);


namespace App\Context\LawSuit\Module\LawSuit\Domain\Entity;


final class LawSuit
{
    private $partOne;
    private $partTwo;

    public function __construct(Part $partOne, Part $partTwo)
    {
        $this->partOne = $partOne;
        $this->partTwo = $partTwo;
    }

    public function winner(): string
    {
        $this->partOne->calculatePoints();
        $this->partTwo->calculatePoints();

        if ($this->partOne->calculatePoints() >= $this->partTwo->calculatePoints()) {
            return 'Part ONE';
        } else {
            return 'Part TWO';
        }
    }
}