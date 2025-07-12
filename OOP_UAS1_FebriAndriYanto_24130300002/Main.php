<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Classes\Player;
use App\Classes\Coach;
use App\Classes\Staff;

$player = new Player(
    'P007',
    'Ronaldo',
    'Wati',
    new \DateTime('1990-01-01'),
    'Bandung',
    'PL007',
    'T001',
    'Forward',
    10,
    5000000.00,
    'Active'
);

$staff = new Staff(
    'S001',
    'Budi',
    'Santoso',
    new \DateTime('1985-05-15'),
    'Citayem',
    'PL001',
    'T001',
    'Manager',
    60000.00,
);

$coach = new Coach(
    'C001',
    'Andi',
    'Pratama',
    new \DateTime('1980-03-20'),
    'Jakarta',
    'C001',
    'T001',
    70000.00,
    'UEFA Pro License'
);

echo $player->getFullName() . PHP_EOL;
echo $staff->getFullName() . PHP_EOL;
echo $coach->selectSquad() . PHP_EOL;
