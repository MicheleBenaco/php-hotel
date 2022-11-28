<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    var_dump($hotels)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>hotels</title>
</head>
<body>
    <!-- <div class="container">
        <div class="card text-center pt-5">
           <?php 
           foreach($hotels as $item){
           echo '<h1>' . $item['name'] . '</h1>';
           echo '<h1> descriozne:' . $item['description'] . '</h1>';
           echo '<h1> voto:' . $item['vote'] . '</h1>';
           echo '<h1> distanza dal centro :' . $item['distance_to_center'] . '</h1>';
           }
           ?>

        </div> -->







           <form action="index.php" method="GET" name="filter">
                <div class="mb-3">
                    <label for="type" class="form-flabel">type</label>
                    <select name="type" id="type"></select>
                    <option value=""></option>
                    <option value=""></option>
                </div>
            <button type="submit" class="btn btn-primary">Filtra</button>
           </form>







        <h1 class="text-center">Hotels Disponibili</h1>
        <div class="container d-flex">
            <?php
           foreach($hotels as $item){ ?>
           <div class="col-2">
            <div class="card ">
                <p>
                    <?php echo $item['name']?>
                </p>
                <p>
                    <?php echo $item['description']?>
                </p>
                <p>
                    <?php echo $item['vote']?>
                </p>
                <p>
                    <?php echo $item['parking']?>
                </p>
                <p>
                    <?php echo $item['distance_to_center']?>
                </p>
            </div>

           </div>

          <?php }

        ?>
        </div>
        

        
    </div>
    
</body>
</html>