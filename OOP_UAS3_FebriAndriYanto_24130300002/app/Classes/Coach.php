<?php

namespace App\Classes;

use App\Abstracts\Person;

class Coach extends Person
{
    private string $teamId;
    private string $role;
    private string $licenseLevel;

    public function __construct(
        string $personId,
        string $firstName,
        string $lastName,
        \DateTime $dateOfBirth,
        string $nationality,
        string $teamId,
        string $role,
        string $licenseLevel
    ) {
        parent::__construct($personId, $firstName, $lastName, $dateOfBirth, $nationality);
        $this->teamId = $teamId;
        $this->role = $role;
        $this->licenseLevel = $licenseLevel;
    }

    public function conductTraining(): void
    {
        // Implementasi pelatihan oleh pelatih
    }

    public function selectSquad(): void
    {
        // Implementasi seleksi skuad
    }
}