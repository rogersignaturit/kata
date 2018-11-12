<?php

declare(strict_types=1);


namespace App\Tests\Context\Module\Lawsuit\Domain\Entity;


use App\Context\LawSuit\Module\LawSuit\Domain\Entity\Notary;
use PHPUnit\Framework\TestCase;

final class NotaryTest extends TestCase
{

    public function testNotaryValue()
    {
        $notary = new Notary();

        $this->assertEquals('NOTARY', $notary->name());
        $this->assertEquals(2, $notary->value());

    }

}