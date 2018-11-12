<?php

declare(strict_types=1);


namespace App\Tests\Context\Module\Lawsuit\Domain\Entity;


use App\Context\LawSuit\Module\LawSuit\Domain\Entity\King;
use PHPUnit\Framework\TestCase;

final class KingTest extends TestCase
{
    public function testKingValue()
    {
        $king = new King();

        $this->assertEquals('KING', $king->name());
        $this->assertEquals(5, $king->value());

    }
}