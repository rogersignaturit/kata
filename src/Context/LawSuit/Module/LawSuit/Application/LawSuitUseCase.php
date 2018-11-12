<?php

declare(strict_types=1);


namespace App\Context\LawSuit\Module\LawSuit\Application;


use App\Context\LawSuit\Module\LawSuit\Domain\Entity\LawSuit;
use App\Context\LawSuit\Module\LawSuit\Domain\Entity\Part;

final class LawSuitUseCase
{
    public function __invoke(Part $partOne, Part $partTwo)
    {
        $lawSuit = new LawSuit($partOne, $partTwo);
        return $lawSuit->winner();
    }
}