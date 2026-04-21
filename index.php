<?php
$config = require "config.php";
require "services/RentalClient.php";

$client = new RentalClient($config);
$equipment = $client->getEquipment();
?>

<h1>Equipment Leasing Dashboard</h1>

<a href="views/list.php">Browse Equipment</a>

<hr>

<h2>Available Equipment</h2>

<ul>
<?php foreach ($equipment as $item): ?>
    <li>
        <strong><?= htmlspecialchars($item['name']) ?></strong>
        - $<?= htmlspecialchars($item['price_per_day']) ?>/day
    </li>
<?php endforeach; ?>
</ul>
