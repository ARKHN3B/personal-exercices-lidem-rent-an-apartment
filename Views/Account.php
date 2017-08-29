<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Hosting</title>
        <link rel="stylesheet" href="../assets/styles/css/Website/styles_account.css">
        <link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <img src="../assets/_pictures/background_1test2.png"
        alt=""
        id="background_header">
        <header>
            <div class="bloc-logo">
                <canvas id="logo-canvas"></canvas>
                <div href="" class="logo-mask">Granim.js</div>
            </div>
            <h1> <a href="../home">Bilskirnir Location</a> </h1>
            <span>
                <a href="">Home</a>
                <a href="../hosting">Become a host</a>
                <a href="">Help</a>
                <a href="">My Account </a>
                <a href="" id="link_img_account"><img src="../assets/_pictures/account.png" alt="" id="img_account"></a>
            </span>
        </header>

        <section>
            <img src="../assets/_pictures/account.png" alt="">
            <span id="firstlastname">
                <p><?= $firstname ?></p>
                <p><?= $lastname ?></p>
            </span>
            <p id="email"><?= $email ?></p>
            <p id="birth">Born on <?= $birth ?>.</p>
            <p id="register">Registered since the : <?= $register ?>.</p>
            <p class="note_profil">Notes : <span>‎★‎★‎★‎★‎★</span></p>

            <a href=""><i class="fa fa-external-link" aria-hidden="true"></i> edit</a>
        </section>

        <script src="../assets/scripts/jquery-3.2.1.min.js"></script>
        <script src="../assets/scripts/granim.js-1.0.6/dist/granim.min.js"></script>
        <script src="../assets/scripts/script_account.js"></script>
    </body>
</html>