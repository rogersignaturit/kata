<?php

declare(strict_types=1);


namespace App\Tests\Context\Module\Lawsuit\Domain\Entity;


use App\Context\LawSuit\Module\LawSuit\Domain\Entity\Validator;
use PHPUnit\Framework\TestCase;

final class ValidatorTest extends TestCase
{
    public function testValidatorValue()
    {
        $validator = new Validator();

        $this->assertEquals('VALIDATOR', $validator->name());
        $this->assertEquals(1, $validator->value());

    }
}