<?php
header('Content-Type: application/json');

echo json_encode([
    ["id"=>1, "name"=>"Excavator", "price_per_day"=>120],
    ["id"=>2, "name"=>"Generator", "price_per_day"=>40],
    ["id"=>3, "name"=>"Forklift", "price_per_day"=>80]
]);
