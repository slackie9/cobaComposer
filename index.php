<?php 

require_once 'vendor/autoload.php';
$faker = Faker\Factory::create('id_ID');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penduduk</title>
</head>
<body>
    <h1>Data Penduduk</h1>

    <?php for($i = 0; $i<10; $i++): ?>
        <ul>
            <li><?= $faker->name() . "\n"; ?></li>
            <li><?= $faker->address() . "\n"; ?></li>
            <li><?= $faker->email() . "\n"; ?></li>
        </ul>
    <?php endfor; ?>
</body>
</html>