<?php
    $hotels = [
            ['name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4],
            ['name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2],
            ['name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1],
            ['name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5],
            ['name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel list</title>

</head>
<body>
    
    <h1>Hotel list:</h1>
    <ul>
    <?php foreach ($hotels as $hotel){?>
        <li>Name: <?php echo $hotel['name']?></li>
        <li>Description: <?php echo $hotel['description']?></li>
        <li>Parking: <?php echo $hotel['parking']?></li>
        <li>Vote: <?php echo $hotel['vote']?></li>
        <li>Distance to center: <?php echo $hotel['distance_to_center']?></li>
    <?php } ?>
    </ul>
</body>
</html>