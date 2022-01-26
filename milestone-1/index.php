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
        <div class="comic">
                <?php 
                require __DIR__ . '/database.php';
                foreach($database as $data){ ?>
                    <?php echo '' . $data['poster'] . '';  ?>
                    <?php echo '<span class="comic-title">' . $data['title'] . '</span>';  ?>
                   <?php } ?>
        </div>       
                <div class="comic">
                <img :src="objectComic.thumb" :alt="objectComic.series">
                
                
                </div>
        </div>
</div>
<script text="javascript" src="js/script.js"></script>
</body>
</html>