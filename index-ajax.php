<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Dischi</title>
</head>
<body>
    <!-- HEADER      -->
    <?php include __DIR__ . '/partials/header.php' ?>
    <!-- MAIN  -->
    <main id="app">
    <div v-if="cards" class="container-cards">
        <div v-for="card in cards" class="cards">
            <div class="container-img">
               <img :src="card.poster" :alt="card.title">
            </div>
            <h1>{{ card.title }}</h1>
            <h3>{{ card.author }}</h3>
            <h4>{{ card.year }}</h4>
        </div>
    </div>
    <div v-else class="loading">
      <img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-ajax-dischi/img/spotify-logo.png" alt="">
      <h1>Caricamento in corso ...</h1>
    </div>
    </main>
    <!-- FOOTER  -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>