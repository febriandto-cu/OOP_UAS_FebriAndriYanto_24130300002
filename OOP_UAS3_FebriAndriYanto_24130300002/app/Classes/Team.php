<?php

namespace App\Classes;

class Team
{
    private string $teamId;
    private string $clubId;
    private string $name;
    private string $league;
    private string $division;

    public function __construct(
        string $teamId,
        string $clubId,
        string $name,
        string $league,
        string $division
    ) {
        $this->teamId = $teamId;
        $this->clubId = $clubId;
        $this->name = $name;
        $this->league = $league;
        $this->division = $division;
    }

    public function addPlayer(Player $player): void
    {
        // Tambahkan pemain ke tim
    }

    public function removePlayer(Player $player): void
    {
        // Hapus pemain dari tim
    }

    public function scheduleTraining(TrainingSession $session): void
    {
        // Jadwalkan sesi latihan
    }
}