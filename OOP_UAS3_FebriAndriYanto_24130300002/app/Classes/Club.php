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

    public function manageBudget(): void {}

    public function signSponsor(Sponsor $sponsor): void { }

    public function getTeams(): array
    {
        return [];
    }
    public function getName(): string
    {
        return $this->name;
    }
}