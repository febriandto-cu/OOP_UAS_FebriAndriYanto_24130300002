<?php

namespace App\Classes;

class Match
{
    private string $matchId;
    private string $homeTeamId;
    private string $awayTeamId;
    private \DateTime $matchDate;
    private string $matchTime;
    private string $stadiumId;
    private int $homeScore;
    private int $awayScore;
    private string $competition;
    private string $seasonId;

    public function __construct(
        string $matchId,
        string $homeTeamId,
        string $awayTeamId,
        \DateTime $matchDate,
        string $matchTime,
        string $stadiumId,
        int $homeScore,
        int $awayScore,
        string $competition,
        string $seasonId
    ) {
        $this->matchId = $matchId;
        $this->homeTeamId = $homeTeamId;
        $this->awayTeamId = $awayTeamId;
        $this->matchDate = $matchDate;
        $this->matchTime = $matchTime;
        $this->stadiumId = $stadiumId;
        $this->homeScore = $homeScore;
        $this->awayScore = $awayScore;
        $this->competition = $competition;
        $this->seasonId = $seasonId;
    }

    public function recordScore(int $homeScore, int $awayScore): void
    {
        $this->homeScore = $homeScore;
        $this->awayScore = $awayScore;
    }

    public function generateReport(): array
    {
        // Buat laporan pertandingan
        return [];
    }
}