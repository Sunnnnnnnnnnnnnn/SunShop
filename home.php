<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta property="og:title" content="<?php echo $config['name']; ?> - ยินดีต้อนรับ">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $_SERVER['SERVER_NAME'] ?>">
    <meta name="twitter:card" content="summary_large_image">
	<meta name="theme-color" content="#5ACCD0">
    <meta property="og:image" content="<?php echo $config['bg3']; ?>">
    <meta property="og:description" content="<?php echo $config['des']; ?>">

    <title><?= $config['name'] ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');

        :root {
            --main-color: <?= $config["main_color"]; ?>;
            --sub-color: <?= $config["sec_color"]; ?>;
        }

        * {
            font-family: 'Kanit', sans-serif;
        }

        }

        ::-webkit-scrollbar-track {
            background: black;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 25px;
            background: -webkit-linear-gradient(transparent, var(--main-color));
        }

        .bg-cover {
            position: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            min-height: 100vh;
            z-index: -10;
        }

        .blur {
            position: fixed;
            width: 100%;
            height: 100vh;
            z-index: -9;
            filter: blur(10px);
        }

        .bg-80 {
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bg-80-center {
            width: 600px;
            height: auto;
        }

        .bg-20 {
            width: 100%;
            min-height: 10vh;
            max-height: auto;
            background-color: rgba(0, 0, 0, .5);
        }

        .bg-black-80 {
            background-color: rgba(0, 0, 0, .5);
        }

        /* .text-ani {
            color: var(--main-color);
            font-size: 60px;
            transition: all .5s ease;
            text-transform: uppercase;
            font-family: 'Prompt', sans-serif;
        } */

        .text-ani {
            color: #fff;
            font-size: 20px;
            font-family: 'Prompt', sans-serif;
            transition: all .5s ease;
            text-transform: uppercase;
            background-image: linear-gradient(to right,
                    var(--sub-color) 0%,
                    var(--main-color) 55%,
                    var(--main-color) 63%,
                    var(--sub-color) 100%);
            background-size: auto auto;
            background-clip: border-box;
            background-size: 200% auto;
            background-clip: text;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textclip 1s linear infinite;
            transition: all .5s ease;
        }

        .text-ani:hover {
            transform: scale(1.8);
        }

        @keyframes textclip {
            to {
                background-position: 200% center;
            }
        }

        .img-ani {
            color: var(--main-color);
            font-size: 60px;
            transition: all .5s ease;
        }

        .img-ani:hover {
            transform: translateY(-10px);
        }

        .btn-main {
            font-size: 15px;
            padding: 10px 25px;
            border-radius: 1vh;
            text-decoration: none;
            color: var(--main-color);
            font-family: 'Prompt', sans-serif;
            border: 2.5px solid var(--main-color);
            filter: drop-shadow(0 0 90px var(--main-color));
            transition: all .5s ease;
        }

        .btn-main:hover {
            color: white;
            background-color: var(--main-color);
            border: 2.5px solid var(--main-color);
        }

        .content {
            border-radius: 1vh;
            background-color: #00000090;
            border: 2.5px solid #ffffff40;
            transition: all .5s ease;
        }

        .content:hover {
            border: 2.5px solid var(--main-color);
        }

        .float-ani {
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translatey(0px);
            }

            50% {
                transform: translatey(-30px);
            }

            100% {
                transform: translatey(0px);
            }
        }

    </style>
    <link rel="icon" href="<?= $config['logo'] ?>" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://kit-pro.fontawesome.com/releases/v6.2.0/css/pro.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <div class="bg-cover" style="background-image: linear-gradient(to top, black 10%, transparent 100%),url(<?= $config['bg2'] ?>);"></div>
        <div class="container">
            <!-- <nav class="navbar" style="position: fixed; z-index: 100;">
                <img src="<?= $config['logo'] ?>" width="60">
                <span class="navbar-brand mb-0 ms-3 text-white" style="font-size: 25px; text-shadow: 0 0 5px black;"><?= $config['name'] ?></span>
            </nav> -->
        </div>
        <div class="bg-80 p-3">
            <div class="bg-80-center">
                <center>
                    <img src="<?= $config['logo'] ?>" class="float-ani" width="300">
                    <h1 class="text-main-gra img-ani fw-bold">ยินดีต้อนรับเข้าสู่ร้านค้า</h1>
                    <h1 class="text-ani fw-bold"><?php echo $config['name']; ?></h1>
                    <br/>
                    <a class="btn-main pt-3 pb-2" href="?page=home" role="button">เริ่มต้นเว็บไซต์</a>
                </center>
            </div>
        </div>
        <div class="bg-20 p-3"></div>
    </main>
    <style>
        .blur-eff {
            filter: blur(5px);
            transition: all .5s ease;
        }
        .blur-eff:hover {
            filter: blur(0px);
        }
    </style>

    <center>
        <p class="text-white mb-1 "><strong><i class="fa-regular fa-copyright"></i>&nbsp; 2023 <?php echo $config['name']; ?>, All right reserved.</strong></p>
        <small class="text-white mb-1 "></i>&nbsp; Create By SongKran & Overdrive-C.<a href="https://discord.gg/overdrive-c" class="text-white mb-1"><i class="fa-solid fa-triangle-exclamation fa-fade"></i>&nbsp;ติดต่อเจ้าของร้านไม่ได้ / แจ้งปัญหาร้านค้าโกง</a></small>
    </center>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>