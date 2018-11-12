<?php

declare(strict_types=1);


namespace App\Context\LawSuit\Module\LawSuit\Domain\Entity;


final class Part
{

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
        $points = 0;
        foreach ($this->roles as $role) {
            $points += $role->value();
        }

        $this->points = $points;

        return $points;
    }

    public function countRoles(): int
    {
        return \count($this->roles);
    }

}