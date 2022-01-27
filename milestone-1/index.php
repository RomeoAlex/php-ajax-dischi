<?php 
                require __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:
Html, CSS, JS, VueJS, PHP
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere. -->
<div class="main-container">
                
        <header>
            <div class="logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Spotify_icon.png" alt="">
            </div>
        </header>
        <div class="album-wrapper">   
        <?php foreach ($database as $album) { ?>
            <div class="album-container">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg" alt="">
                <h3 class="album-title">
                    New Jersey
                </h3>
                <h4 class="author">
                    Bon Jovi
                </h4>
                <h5 class="date">
                    1988
                </h5>
            </div>
            <?php } ?>
        </div>
</div>

</body>
</html>