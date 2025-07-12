<?php

namespace App\Classes;

use App\Abstracts\Person;

class Coach extends Person
{
    private string $coachId;
    private string $teamId;
    private string $role;
    private string $licenseLevel;

    public function __construct(
        string $personId,
        string $firstName,
        string $lastName,
        \DateTime $dateOfBirth,
        string $nationality,
        string $coachId,
        string $teamId,
        string $role,
        string $licenseLevel
    ) {
        parent::__construct($personId, $firstName, $lastName, $dateOfBirth, $nationality);
        $this->coachId = $coachId;
        $this->teamId = $teamId;
        $this->role = $role;
        $this->licenseLevel = $licenseLevel;
    }

    public function conductTraining(): void
    {
        
    }

    public function selectSquad(): void
    {
        echo "Selecting squad for the match." . PHP_EOL;
    }
}