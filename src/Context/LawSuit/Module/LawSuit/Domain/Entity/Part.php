<?php

declare(strict_types=1);


namespace App\Context\LawSuit\Module\LawSuit\Domain\Entity;


final class Part
{

    private const KING = 'KING';
    private const VALIDATOR = 'VALIDATOR';

    private $roles;
    private $points;

    public function __construct()
    {
        $this->points = 0;
    }

    public function addRole($role): void
    {
        $this->roles[] = $role;
    }

    public function calculatePoints(): int
    {

        $points      = 0;
        $kingPresent = false;

        foreach ($this->roles as $role) {
            if ($role->name() === self::KING) {
                $kingPresent = true;
            }
        }

        foreach ($this->roles as $role) {
            $rolePoints = $role->value();
            if ($kingPresent && $role->name() === self::VALIDATOR) {
                $rolePoints = 0;
            }
            $points += $rolePoints;
        }

        $this->points = $points;

        return $points;
    }

    public function countRoles(): int
    {
        return \count($this->roles);
    }

}