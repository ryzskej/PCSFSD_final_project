<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/style.css">
    <link rel="stylesheet" href="./resources/queries.css">
    <title><?php echo $title ?></title>
</head>

<body>

<div class="header-img">
    <p class="header-descr">Databáze ovocných dřevin</p>
</div>

<!-- tento header jsem vložil mj. do index.php, kam se includne pomocí include "./umisteni/tohoto/souboru". Úplně stejně můžeme použít require místo include, rozdíl je pouze v tom, jakou vyvolávají chybu, když se něco nepovede. Include vyvolává warning, ale script jede dál. Když použiju require, tak vyhodí fatal error -->