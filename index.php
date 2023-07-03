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

    if (isset($_GET['parkingSpot']) && $_GET['parkingSpot'] == "1") {
        $hotels = array_filter($hotels, function ($hotel) {
            return $hotel['parking'] === true;
        });
    };

    if (isset($_GET['rating']) && is_numeric($_GET['rating'])) {
        $rating = intval($_GET['rating']);
        $hotels = array_filter($hotels, function ($hotel) use ($rating) {
            return $hotel['vote'] >= $rating;
        });
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel list</title>

    <!-- ----Link to bootstrap---- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>
    <header class="d-flex justify-content-between w-75 m-auto">
        <h1 class="p-3">Hotel list:</h1>

        <form method="GET" action="" class="d-flex flex-column p-3">
            <div class="parking">
                <label for="parkingSpot">Show only hotels with parking:</label>
                <input type="checkbox" name="parkingSpot" id="parkingSpot" value="1" <?php echo (isset($_GET['parkingSpot']) && $_GET['parkingSpot'] == "1") ? "checked" : ""; ?>>
            </div>
            <div class="vote">
                <label for="rating">Minimum rating:</label>
                <input type="number" name="rating" id="rating" min="1" max="5" value="<?php echo isset($_GET['rating']) ? $_GET['rating'] : ""; ?>" class="w-25">
            </div>
            <button type="submit" class="w-25 align-self-end">Filter</button>
        </form>
    </header>
    
    <table class="table m-auto w-75">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Parking</th>
            <th scope="col">Vote</th>
            <th scope="col">Distance to center</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel){?>
                <tr>
                <td><?php echo $hotel['name']?></td>
                <td><?php echo $hotel['description']?></td>
                <td><?php echo $hotel['parking'] ? 'Yes' : 'No'?></td>
                <td><?php echo $hotel['vote']?></td>
                <td><?php echo $hotel['distance_to_center']?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>

