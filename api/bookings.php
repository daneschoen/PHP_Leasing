<?php
header('Content-Type: application/json');

$input = json_decode(file_get_contents("php://input"), true);

echo json_encode([
    "success" => true,
    "message" => "Booked successfully",
    "data" => $input
]);
