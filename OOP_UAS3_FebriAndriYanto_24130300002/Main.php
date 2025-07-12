<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Classes\Club;
use App\Classes\Team;
use App\Classes\Match;
use App\Classes\Season;
use App\Classes\TrainingSession;
use App\Classes\Stadium;
use App\Classes\Sponsor;
use App\Classes\Contract;
use App\Implementations\PersonFactoryImpl;
use App\UseCases\CreatePlayerUseCase;

$personFactory = new PersonFactoryImpl();
$playerData = [
    'personId'    => 'P001',
    'firstName'   => 'Ronaldo',
    'lastName'    => 'Wati',
    'dateOfBirth' => new DateTime('1945-06-24'),
    'nationality' => 'Argentina',
    'teamId'      => 'T001',
    'position'    => 'Forward',
    'jerseyNumber'=> 10,
    'marketValue' => 50000000.0,
    'status'      => 'Active'
];

$createPlayerUC = new CreatePlayerUseCase($personFactory);
$player = $createPlayerUC->execute($playerData);
echo "Player: " . $player->getFullName() . PHP_EOL;


$coach = $personFactory->createCoach([
    'personId'    => 'C001',
    'firstName'   => 'Pep',
    'lastName'    => 'Si',
    'dateOfBirth' => new DateTime('1971-01-18'),
    'nationality' => 'Spain',
    'teamId'      => 'T001',
    'role'        => 'Head Coach',
    'licenseLevel'=> 'UEFA Pro'
]);
echo "Coach: " . $coach->getFullName() . PHP_EOL;

$staff = $personFactory->createStaff([
    'personId'    => 'S001',
    'firstName'   => 'Maria',
    'lastName'    => 'Gonzalez',
    'dateOfBirth' => new DateTime('1985-03-15'),
    'nationality' => 'Spain',
    'clubId'      => 'CL001',
    'role'        => 'Physio',
    'department'  => 'Medical'
]);
echo "Staff: " . $staff->getFullName() . PHP_EOL;

$stadium = new Stadium('ST001', 'Camp Nou', 99354, 'Barcelona, Spain');
$club = new Club('CL001', 'FC Barcelona', 'ST001', new DateTime('1899-11-29'), 100000000.0, 'La Liga');
$team = new Team('T001', 'CL001', 'Barcelona A', 'La Liga', 'First Division');

echo "Stadium: {$stadium->getName()} \n";
echo "Club: {$club->getName()}  \n";

$sponsor = new Sponsor(
    'SP001', 'Rakuten', 'Hiroshi Mikitani', '1234567890', 'contact@rakuten.com',
    20000000.0, new DateTime('2022-07-01'), new DateTime('2025-06-30')
);

$contract = new Contract(
    'CT001', 'CL001', 'P001',
    new DateTime('2024-07-01'), new DateTime('2025-06-30'),
    10000000.0, 'No injury break'
);

$match = new Match(
    'M001', 'T001', 'T002', new DateTime('2025-09-12'), '20:00',
    'ST001', 0, 0, 'La Liga', 'SE001'
);

$season = new Season('SE001', 2025, 'La Liga', new DateTime('2025-08-15'), new DateTime('2026-05-31'));
$trainingSession = new TrainingSession(
    'TS001', 'T001', new DateTime('2025-07-15'), '10:00', 'Ciutat Esportiva', 'Tactical'
);

echo "Sponsor: {$sponsor->getName()} \n";

$player->train();
$player->playMatch();
$coach->conductTraining();
$coach->selectSquad();
$staff->performDuties();
$club->manageBudget();
$club->signSponsor($sponsor);
$team->addPlayer($player);
$team->scheduleTraining($trainingSession);
$match->recordScore(3, 1);
$match->generateReport();
$season->getMatches();
$season->getStandings();
$trainingSession->recordAttendance($player, true);
$stadium->hostMatch($match);
$sponsor->renewContract(new DateTime('2028-06-30'), 25000000.0);
$contract->renew();
$contract->terminate();

