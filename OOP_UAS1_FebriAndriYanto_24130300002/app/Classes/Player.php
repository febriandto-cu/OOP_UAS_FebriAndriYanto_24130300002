<?php

namespace App\Classes;

use App\Abstracts\Person;

class Player extends Person
{
    private string $playerId;
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
        string $playerId,
        string $teamId,
        string $position,
        int $jerseyNumber,
        float $marketValue,
        string $status
    ) {
        parent::__construct($personId, $firstName, $lastName, $dateOfBirth, $nationality);
        $this->playerId = $playerId;
        $this->teamId = $teamId;
        $this->position = $position;
        $this->jerseyNumber = $jerseyNumber;
        $this->marketValue = $marketValue;
        $this->status = $status;
    }

    public function train(): void
    {
        // Implementasi logika pelatihan
    }

    public function playMatch(): void
    {
        // Implementasi logika bermain pertandingan
    }
}