<?php

namespace App\Classes;

class Season
{
    private string $seasonId;
    private int $year;
    private string $league;
    private \DateTime $startDate;
    private \DateTime $endDate;

    /** @var Match[] */
    private array $matches = [];

    public function __construct(
        string $seasonId,
        int $year,
        string $league,
        \DateTime $startDate,
        \DateTime $endDate
    ) {
        $this->seasonId = $seasonId;
        $this->year = $year;
        $this->league = $league;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * @return Match[]
     */
    public function getMatches(): array
    {
        return $this->matches;
    }

    /**
     * @return array<string, int>
     */
    public function getStandings(): array
    {
        // Implementasi logika standings
        return [];
    }

    public function addMatch(Match $match): void
    {
        $this->matches[] = $match;
    }

    // Getters and setters...
}