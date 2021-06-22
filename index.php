<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet07 Exercice01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet07 Exercice01</h1>
            <h2 class="col-12 text-info text-center">Sur une même page, affichez votre user_agent, 
            l'adresse ip de votre serveur et le nom de votre serveur.</h2>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center"> 
        <?php
        echo 'Affichage informations ordinateur "User agent" : Détection de la machine du visiteur en PHP : '. ' '.  $_SERVER['HTTP_USER_AGENT'];
        ?>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center"> 
        <?php
        echo 'Affichage adresse ip du serveur en PHP : '. ' '.  $_SERVER['SERVER_ADDR'];
        ?>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center"> 
        <?php
        echo 'Nom de serveur de la page projet PHP : '. ' '.  $_SERVER['SERVER_NAME'];
        ?>
        </div>
    </div>
</body>
</html>