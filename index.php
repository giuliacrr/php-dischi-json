<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <!-- CUSTOM STYLE SHEET FILE LINK -->
    <link rel="stylesheet" href="./style.css">
    <!-- THIRD PARTY LIBRARIES -->
    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- FONTAWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- STANDARD FAVICON TO AVOID CONSOLE ERRORS ON FIREFOX -->
    <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
    <!-- VUE CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- AXIOS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">
        <div>
            <div class="container">
                <div class="text-white mt-3 mb-3 fw-bold display-5"> <img src="https://cdn.discordapp.com/attachments/1113389363489943552/1150803195912802334/spotify-logo-transparent-free-png.png" 
                    alt="spotify"
                    class="spoty-img">
                    Spotify
                </div>
            </div>
        </div>
        <div class="mt-5 mb-5">
            <div class="container p-5 cards-box rounded">
                <div class="container text-center">
                    <div class="container text-center">
                        <div class="p-1 d-flex flex-wrap justify-content-center">
                            <div class="card m-2" v-for="dischi in posts">
                                <img :src="dischi.immagine" class="card-img-top" alt="cover">
                                <div class="card-body text-center text-white bg-darker">
                                    <span class="fw-bold">{{ dischi.nome_album }}</span><br>
                                    <span>{{ dischi.nome_artista }}</span><br>
                                    <span class="fw-bold">{{ dischi.anno_uscita }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>