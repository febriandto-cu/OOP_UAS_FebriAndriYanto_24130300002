<?php

namespace App\Classes;

class TrainingSession
{
    private string $sessionId;
    private string $teamId;
    private \DateTime $sessionDate;
    private string $sessionTime;
    private string $location;
    private string $focusArea;

    public function __construct(
        string $sessionId,
        string $teamId,
        \DateTime $sessionDate,
        string $sessionTime,
        string $location,
        string $focusArea
    ) {
        $this->sessionId = $sessionId;
        $this->teamId = $teamId;
        $this->sessionDate = $sessionDate;
        $this->sessionTime = $sessionTime;
        $this->location = $location;
        $this->focusArea = $focusArea;
    }

    public function recordAttendance(Player $player, bool $present): void
    {
        // Catat kehadiran pemain
    }
}