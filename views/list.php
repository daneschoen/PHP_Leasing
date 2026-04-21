<?php
$config = require "../config.php";
require "../services/RentalClient.php";

$client = new RentalClient($config);
$equipment = $client->getEquipment();
?>

<h1>Rent Equipment</h1>

<?php foreach ($equipment as $item): ?>
    <div style="margin-bottom:20px;">
        <h3><?= htmlspecialchars($item['name']) ?></h3>
        <p>$<?= $item['price_per_day'] ?>/day</p>

        <form method="POST" action="book.php">
            <input type="hidden" name="id" value="<?= $item['id'] ?>">
            <input type="date" name="from" required>
            <input type="date" name="to" required>
            <button type="submit">Book</button>
        </form>
    </div>
<?php endforeach; ?>
