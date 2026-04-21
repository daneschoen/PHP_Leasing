<?php
$config = require "../config.php";
require "../services/RentalClient.php";

$client = new RentalClient($config);

$id = $_POST['id'];
$from = $_POST['from'];
$to = $_POST['to'];

$result = $client->createBooking($id, $from, $to);

if ($result['success']) {
    echo "Booking confirmed!";
} else {
    echo "Booking failed!";
}
?>
