<?php

use DemoApp\Car;
use DemoApp\Motorcycle;
use DemoApp\Bicycle;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    </head>
    <body>
        <h1>Vehicles</h1>
        <h3>Cars</h3>
        <?php
        $car = new Car('VW','Tiguan','SUV');
        $car->setPrice(30000);
        $car->setWeight(1600);
        $car->setEngine(2.0);
        $car->setEnginePower(132);
        $car->setMaxSpeed(240);
        $car->setDescription('family car');
        $car->setNumberOfSeats(5);

//        var_dump($car->getAll());
        ?>
        <ul>
            <?php foreach ($car->getAll() as $carData): ?>
                    <?=$carData;?><br>
                <?php endforeach;?>

       <?php
        echo 'Price: '.$car->getPrice().'Eur';
        echo '<br>';
        echo 'Weight: '.$car->getWeight().'kg';
        echo '<br>';
        echo 'Engine: '.$car->getEngine();
        echo '<br>';
        echo 'Engine power: '.$car->getEnginePower().'kW';
        echo '<br>';
        echo 'Max. speed: '.$car->getMaxSpeed().'km/h';
        echo '<br>';
        echo 'Description: '.$car->getDescription();
        echo '<br>';
        echo 'Seats: '.$car->getNumberOfSeats();
        ?>
        </ul>
        <h3>Motorcycles</h3>
        <?php
        $motorcycle = new Motorcycle('BMW','G 310','Roadster');
        $motorcycle->setPrice(6000);
        $motorcycle->setWeight(159);
        $motorcycle->setEngine(0.313);
        $motorcycle->setEnginePower(25);
        $motorcycle->setMaxSpeed(145);
        $motorcycle->setDescription('suitable for beginners');
        $motorcycle->setNumberOfSeats(2);

        //var_dump($motorcycle->getAll());
        ?>
        <ul>
            <?php foreach ($motorcycle->getAll() as $motorcycleData): ?>
                <?=$motorcycleData;?><br>
            <?php endforeach;?>

        <?php
        echo 'Price: '.$motorcycle->getPrice().'Eur';
        echo '<br>';
        echo 'Weight: '.$motorcycle->getWeight().'kg';
        echo '<br>';
        echo 'Engine: '.$motorcycle->getEngine();
        echo '<br>';
        echo 'Engine power: '.$motorcycle->getEnginePower().'kW';
        echo '<br>';
        echo 'Max.speed: '.$motorcycle->getMaxSpeed().'km/h';
        echo '<br>';
        echo 'Description: '.$motorcycle->getDescription();
        echo '<br>';
        echo 'Seats: '.$motorcycle->getNumberOfSeats();
        ?>
        </ul>
        <h3>Bicycles</h3>
        <?php
        $bicycle = new Bicycle('Pivot','Firebird','Enduro');
        $bicycle->setPrice(4000);
        $bicycle->setWeight(10);
        $bicycle->setDescription('high quality mountain bike');
        $bicycle->setNumberOfSeats(1);

        //var_dump($bicycle->getAll());
        ?>
        <ul>
            <?php foreach ($bicycle->getAll() as $bicycleData): ?>
                <?=$bicycleData;?><br>
            <?php endforeach;?>

        <?php
        echo 'Price: '.$bicycle->getPrice().'Eur';
        echo '<br>';
        echo 'Weight: '.$bicycle->getWeight().'kg';
        echo '<br>';
        echo 'Description: '.$bicycle->getDescription();
        echo '<br>';
        echo 'Seats: '.$bicycle->getNumberOfSeats();
        ?>
    </body>
</html>