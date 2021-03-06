<?php

declare(strict_types=1);

namespace App\Context\LawSuit\Module\LawSuit\Domain\Entity;

final class Validator
{
    private const VALIDATOR_VALUE = 1;
    private const VALIDATOR = 'VALIDATOR';

    private $name;
    private $value;

    public function __construct()
    {
        $this->name  = self::VALIDATOR;
        $this->value = self::VALIDATOR_VALUE;
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