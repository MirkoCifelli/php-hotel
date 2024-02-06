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
    if (isset($_GET['parking']) && !empty($_GET['parking'])) {

        $temp = [];

        foreach ($hotels as $hotel) {
            $park = $hotel['parking'] ? 'si' : 'no';
            if ($park == $_GET['parking'] ) {
               $temp[] = $hotel;
            }
        }
        $hotels = $temp;
    }
    
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Hotel</title>
  
</html>


</head>
<body>
    <div class="container">
        <h1 class=" text-center ">
            Hotel
        </h1>
    </div>

    <div class="container">
        <form action="./index.php" method="get">

            <div>
                <label for="parking">Desideri un pargheggio</label>
                <select name="parking" id="parking">
                    <option value="">Scegli</option>
                    <option value="si">Pargheggio disponibile</option>
                    <option value="no">Parcheggio non disponibile</option>
                </select>
            </div>

            <div>
                <label for="vote">Seleziona un voto da 1 a 5</label>
                <select name="vote" id="vote">
                    <option value="">Scegli</option> 
                    <option value="1">1</option>     
                    <option value="2">2</option>     
                    <option value="3">3</option>     
                    <option value="4">4</option>     
                    <option value="5">5</option>          

                </select>
            </div>
            <button> invia </button>
        </form>
    </div>
    <div class="container">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distanza dal centro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($hotels as $hotel) {
                            // var_dump($hotel);
                            ?>
                        <tr>
                    
                            <th scope="row"><?php echo $hotel['name'] ?></th>
                            <td><?php echo $hotel['description'] ?> </td>
                            <td><?php  
                            
                                    if ($hotel['parking'] == true ) {
                                        echo 'Parcheggio disponibile';
                                    }
                                    else{
                                        echo "Parcheggio non disponibile";
                                    }   
                                ?>
                            </td>
                            <td><?php echo $hotel['vote'] ?></td>
                            <td><?php echo $hotel['distance_to_center'] ?></td>
                        </tr>    


                    <?php
                
                        }

                    ?>
                
      
                    
                </tbody>
             </table>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>


</html>