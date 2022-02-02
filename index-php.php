<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi</title>
</head>
<body>
    <!-- HEADER      -->
    <?php include __DIR__ . '/partials/header.php' ?>
    <!-- MAIN  -->
    <main>
        <?php include_once __DIR__ . '/server/db.php' ?>
    <div class="container-cards">
        <?php foreach ($cards as $card) { ?>
        <div class="cards">
            <div class="container-img">
               <img src="<?= $card['poster'] ?>" alt="">
            </div>
            <h1><?= $card['title'] ?></h1>
            <h3><?= $card['author'] ?></h3>
            <h4><?= $card['year'] ?></h4>
        </div>
        <?php } ?>
    </div>
    </main>
    <!-- FOOTER  -->
</body>
</html>