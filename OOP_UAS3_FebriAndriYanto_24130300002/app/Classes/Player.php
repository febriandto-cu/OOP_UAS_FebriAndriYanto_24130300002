<?php

namespace App\Classes;

use App\Abstracts\Person;

class Player extends Person
{
    private string $teamId;
    private string $position;
    private int $jerseyNumber;
    private float $marketValue;
    private string $status;

    public function __construct(
        string $personId,
        string $firstName,
        string $lastName,
        \DateTime $dateOfBirth,
        string $nationality,
        string $teamId,
        string $position,
        int $jerseyNumber,
        float $marketValue,
        string $status
    ) {
        parent::__construct($personId, $firstName, $lastName, $dateOfBirth, $nationality);
        $this->teamId = $teamId;
        $this->position = $position;
        $this->jerseyNumber = $jerseyNumber;
        $this->marketValue = $marketValue;
        $this->status = $status;
    }

    public function train(): void
    {
        // Implementasi pelatihan pemain
    }

    public function playMatch(): void
    {
        // Implementasi aksi bermain di pertandingan
    }
}