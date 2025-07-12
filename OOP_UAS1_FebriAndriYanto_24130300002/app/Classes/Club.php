<?php

namespace App\Classes;

class Club
{
    private string $clubId;
    private string $name;
    private string $stadiumId;
    private \DateTime $foundingDate;
    private float $budget;
    private string $league;

    private array $teams = [];

    public function __construct(
        string $clubId,
        string $name,
        string $stadiumId,
        \DateTime $foundingDate,
        float $budget,
        string $league
    ) {
        $this->clubId = $clubId;
        $this->name = $name;
        $this->stadiumId = $stadiumId;
        $this->foundingDate = $foundingDate;
        $this->budget = $budget;
        $this->league = $league;
    }

    public function manageBudget(): void
    {
        echo "Managing budget for club: {$this->name}";
    }

    public function signSponsor(Sponsor $sponsor): void
    {
        echo "Signing sponsor for club: {$this->name}";
    }

    public function getTeams(): array
    {
        return $this->teams;
    }

    public function addTeam(Team $team): void
    {
        $this->teams[] = $team;
    }
}