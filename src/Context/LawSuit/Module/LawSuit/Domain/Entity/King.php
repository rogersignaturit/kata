<?php

declare(strict_types=1);

namespace App\Context\LawSuit\Module\LawSuit\Domain\Entity;

final class King
{
    private const KING_VALUE = 5;
    private const KING = 'KING';

    private $name;
    private $value;

    public function __construct()
    {
        $this->name  = self::KING;
        $this->value = self::KING_VALUE;
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