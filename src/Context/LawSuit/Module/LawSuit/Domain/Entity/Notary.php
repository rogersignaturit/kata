<?php

declare(strict_types=1);

namespace App\Context\LawSuit\Module\LawSuit\Domain\Entity;

final class Notary
{
    private const NOTARY_VALUE = 2;
    private const NOTARY = 'NOTARY';

    private $name;
    private $value;

    public function __construct()
    {
        $this->name  = self::NOTARY;
        $this->value = self::NOTARY_VALUE;
    }


    public function name(): string
    {
        return $this->name;
    }

    public function value(): int
    {
        return $this->value;
    }
}