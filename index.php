<?php include_once "Constants.php" ?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <!-- Main All Meta + Tailwind -->
    <?php include MAIN_DIR . "assets/css/MainMeta.php" ?>
    <title>Linux Learn</title>
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        #HeroGrid div {
            border-radius: 10px;
            overflow: hidden;
        }
        #HeroGrid img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .Lessons div.box{
            /*background-color: white;*/
            transition: all .7s;
            padding: 1.5rem 2rem;
            border-radius: .9rem;
            box-shadow: 1px 1px 5px white;
        }
        .Lessons div.box:hover{
            background-color: lightgray;
            color: black;
            box-shadow: -1px -1px 5px white;
        }
    </style>
</head>
<body class="bg-gray-800 text-white">
    <!-- Start Header -->
    <?php include MAIN_DIR . "src/Header.php" ?>
    <!-- End Header -->

    <!-- Start Main -->
    <main class="m-7 text-center space-y-7">
        <div class="text-center grid grid-cols-4 gap-4" id="HeroGrid">
            <div class="col-span-2 bg-sky-400">
                <img src="<?= MAIN_SERVER . 'assets/img/Hero/linux1.jpg' ?>" alt="Linux">
            </div>
            <div class="col-span-2 bg-sky-400">
                <img src="<?= MAIN_SERVER . 'assets/img/Hero/linux2.jpg' ?>" alt="Linux">
            </div>
            <div class="bg-sky-400 sm:hidden">
                <img src="<?= MAIN_SERVER . 'assets/img/Hero/linux3.jpg' ?>" alt="Linux">
            </div>
            <div class="col-span-2 bg-sky-400 sm:hidden">
                <img src="<?= MAIN_SERVER . 'assets/img/Hero/linux4.jpg' ?>" alt="Kali Linux">
            </div>
            <div class="bg-sky-400 sm:hidden">
                <img src="<?= MAIN_SERVER . 'assets/img/Hero/linux5.webp' ?>" alt="Linux">
            </div>
            <div class="bg-sky-400">
                <img src="<?= MAIN_SERVER . 'assets/img/Hero/linux9.jpg' ?>" alt="debian">
            </div>
            <div class="bg-sky-400">
                <img src="<?= MAIN_SERVER . 'assets/img/Hero/linux7.webp' ?>" alt="Kali Linux">
            </div>
            <div class="col-span-2 bg-sky-400">
                <img src="<?= MAIN_SERVER . 'assets/img/Hero/linux8.jpg' ?>" alt="Arch Linux">
            </div>
        </div>
        <h1 class="text-4xl">به صورت رایگان لینوکس یاد بگیرید !</h1>
        <hr class="my-3 w-1/2 m-auto border-sky-400">
        <h2 class="text-2xl">مفاهیم ابتدایی :</h2>
            <div class="w-full md:w-4/5 Lessons grid grid-cols-1 md:grid-cols-4 gap-4 m-auto">
                <div class="box bg-gray-700">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/start.gif' ?>" alt="Start">
                        <h3 class="text-xl mb-2">از اینجا شروع کنید</h3>
                        <p>اصلا لینوکس چیه؟چه توزیعی رو برای نصب انتخاب کنیم؟</p>
                    </a>
                </div>
                <div class="box bg-gray-700">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/command line.png' ?>" alt="Start">
                        <h3 class="text-xl mb-2">خط فرمان</h3>
                        <p>اصول و دستورات ابتدایی خط فرمان رو یاد میگیریم.</p>
                    </a>
                </div>
                <div class="box bg-gray-700">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/start1.gif' ?>" alt="Start">
                        <h3 class="text-xl mb-2">کار با متن ها</h3>
                        <p>دستکاری و چیزای جدید در مورد دستورات در لینوکس!</p>
                    </a>
                </div>
                <div class="box bg-gray-700">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/start1.gif' ?>" alt="Start">
                        <h3 class="text-xl mb-2">کار پیشرفته با متن ها</h3>
                        <p>یکمی پیشرفته تر در مورد متن ها و ویرایشگر ها میفهمیم.</p>
                    </a>
                </div>
            </div>
    </main>
    <!-- End Main -->

    <!-- Start Footer -->
    <?php include MAIN_DIR . "src/Footer.php" ?>
    <!-- End Footer -->

    <!-- Jquery File -->
    <script src="<?= MAIN_SERVER . 'assets/vendor/jquery-3.7.0.min.js'?>"></script>
    <!-- Header And Footer Script -->
    <script src="<?= MAIN_SERVER . 'assets/js/HeaderFooter.js'?>"></script>
</body>
</html>