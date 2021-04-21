<?php

//Ange lämpliga http headers
//läs mer här: https://stackoverflow.com/questions/10636611/how-does-access-control-allow-origin-header-work
header('Content-Type: application/json; charset=UTF-8');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header(
  'Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept'
);
header('Referrer-Policy: no-referrer');

//php starkt baserat på arrayer JS på objekt
$firstNames = ['Åsa', 'F2', 'F3', 'F4', 'F5', 'F6', 'F7', 'F8', 'F9', 'F10'];
$lastNames = ['Öberg', 'L2', 'L3', 'L4', 'L5', 'L6', 'L7', 'L8', 'L9', 'L10'];

$names = [];

for ($i = 0; $i < 10; $i++) {
  $name = [
    'firstname' => $firstNames[rand(0, 9)],
    'lastname' => $lastNames[rand(0, 9)],
  ];
  array_push($names, $name);
}

//print_r($names); die();

$json = json_encode($names, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

echo $json;

?>
