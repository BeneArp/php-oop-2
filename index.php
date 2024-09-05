<?php

    require_once __DIR__ . '/data/db.php';

    // var_dump($db['beds'][0]);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Cani</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="gatti.php">Gatti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mt-5">
        
        <h2>Cibo</h2>

        <div class="d-flex">

            <?php foreach($db['foods'] as $food) : ?>

                <?php if($food->pet === 'dog') :?>

                <div class="card m-2 p-2" style="width: 18rem;">

                    <img src="<?php echo $food->img ?>" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h5 class="card-title"> <?php echo $food->name ?> </h5>
                        <h6> <?php echo $food->brand ?> </h6>
                        <span>Prezzo: <?php echo $food->price ?>€</span>
                        
                        <ul>
                            <li>Gusto: <?php echo $food->flavor ?></li>
                            <li>Età: <?php echo $food->lifestage ?></li>
                            <li>Categoria: <?php echo $food->breed ?></li>
                        </ul>


                    </div>

                </div>
                
                <?php endif;?>

            <?php endforeach; ?>

        </div>

        <h2 class="mt-5">Giochi</h2>

        <div class="d-flex mt-1">

            <?php foreach($db['toys'] as $toy) : ?>

                <?php if($toy->pet === 'dog') :?>

                <div class="card m-2 p-2" style="width: 18rem;">

                    <img src="<?php echo $toy->img ?>" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h5 class="card-title"> <?php echo $toy->name ?> </h5>
                        <h6> <?php echo $toy->brand ?> </h6>
                        <span>Prezzo: <?php echo $toy->price ?>€</span>
                        
                        <ul>
                            <li>Materiale: <?php echo $toy->material ?></li>
                        </ul>


                    </div>

                </div>
                
                <?php endif;?>

            <?php endforeach; ?>

        </div>


        <h2 class="mt-5">Cucce</h2>

        <div class="d-flex mt-1">

            <?php foreach($db['beds'] as $bed) : ?>

                <?php if($bed->pet === 'dog') :?>

                <div class="card m-2 p-2" style="width: 18rem;">

                    <img src="<?php echo $bed->img ?>" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h5 class="card-title"> <?php echo $bed->name ?> </h5>
                        <h6> <?php echo $bed->brand ?> </h6>
                        <span>Prezzo: <?php echo $bed->price ?>€</span>
                        
                        <ul>
                            <li>Taglia: <?php echo $bed->size ?></li>
                            <li>Lunghezza: <?php echo $bed->length ?>cm</li>
                            <li>Altezza: <?php echo $bed->height ?>cm</li>
                        </ul>


                    </div>

                </div>
                
                <?php endif;?>

            <?php endforeach; ?>

        </div>

    </div>
    

</body>
</html>