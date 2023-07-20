<?php
include_once "../../../Constants.php" ;
$name_file = basename(__DIR__); /* Name This Lesson */
$name_file_season = basename(dirname( __DIR__)); /* Name This Season */
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <!-- Main All Meta + Tailwind -->
    <?php include MAIN_DIR . "assets/css/MainMeta.php" ?>
    <title><?= $name_file ?></title>
    <!-- Main Style -->
    <link rel="stylesheet" href="<?= MAIN_SERVER . 'assets/css/style.css' ?>">
</head>
<body class="CONTENT_BACK_COLOR">
<!-- Start Header -->
<?php include MAIN_DIR . "src/Header.php" ?>
<!-- End Header -->

<!-- Start Main -->
<main class="main_content">

    <!-- Start Menu -->
    <?php include_once "../menu1.php" ?>
    <!-- End Menu -->

    <h1 class="md:hidden">توضیحات</h1>
    <div class="content_lessons CONTENT_COLOR">
        <h1>پوسته یا Shell در لینوکس</h1>
        <pre id="Command">
            <code>
                echo "hello"
                echo "hello"
                echo "hello"
                echo "hello"
                echo "hello"
                echo "hello"
            </code>
        </pre>
        <p>
        </p>

        <!-- Slider -->
        <swiper-container>
            <swiper-slide>
                <img src=""
                     alt="linux History" loading="lazy">
            </swiper-slide>
            <swiper-slide>
                <img src=""
                     alt="Linus Torvalds" loading="lazy">
            </swiper-slide>
            <swiper-slide>
                <img src=""
                     alt="Linus Torvalds" loading="lazy">
            </swiper-slide>
        </swiper-container>
    </div>

    <!-- Start Reference & Quiz -->
    <h1 class="md:hidden">منابع و آزمون</h1>
    <div id="referenceQuiz_lessons" nameSeason="<?= $name_file_season ?>" nameLesson="<?= $name_file ?>">
        <div class="CONTENT_COLOR">
            <h2>منابع مرتبط : </h2>
            <p>
                اگه علاقه داشتید تاریخچه رو به صورت کامل تر بخونید حتما لینک های زیر رو دنبال کنید!
            </p>
            <ol class="text-center">
                <li><a href="https://fa.wikipedia.org/wiki/%D8%AA%D8%A7%D8%B1%DB%8C%D8%AE%DA%86%D9%87_%D9%84%DB%8C%D9%86%D9%88%DA%A9%D8%B3">تاریخچه لینوکس (ویکی پدیا)</a></li>
                <li><a href="https://www.digikala.com/mag/%D8%AA%D8%A7%D8%B1%DB%8C%D8%AE%DA%86%D9%87-%D8%B3%DB%8C%D8%B3%D8%AA%D9%85%E2%80%8C%D8%B9%D8%A7%D9%85%D9%84-%D9%84%DB%8C%D9%86%D9%88%DA%A9%D8%B3/">نگاهی به تاریخچه‌ی لینوکس (دیجی مگ)</a></li>
                <li><a href="https://tehrantrain.com/learning/unix-linux-history/">تاریخچه کامل لینوکس</a></li>
                <li><a href="https://en.wikipedia.org/wiki/GNU">سیستم عامل گنو</a></li>
            </ol>
        </div>
        <div class="CONTENT_COLOR">
            <h2>آزمون :</h2>
            <ol>
                <li>
                    سازنده هسته لینوکس چه نام داشت؟
                    <button quiz="1">مشاهده پاسخ</button>
                </li>
                <hr>
                <li>
                    هسته لینوکس در چه سالی تولید شد؟
                    <button quiz="2">مشاهده پاسخ</button>
                </li>
                <hr>
                <li>
                    لینوکس به چه دلیل ساخته شد؟
                    <button quiz="3">مشاهده پاسخ</button>
                </li>
            </ol>
        </div>
    </div>
    <!-- End Reference & Quiz -->

    <!-- Start Next Lesson -->
    <?php
    Next_Lesson('pwd-command' , 'دستور pwd');
    ?>
    <!-- End Next Lesson -->

</main>
<!-- End Main -->

<!-- Jquery File -->
<script src="<?= MAIN_SERVER . 'assets/vendor/jquery-3.7.0.min.js'?>"></script>
<!-- Header And Footer Script -->
<script src="<?= MAIN_SERVER . 'assets/js/HeaderFooter.js'?>"></script>
<!-- Custom Script -->
<script>
    $('#<?=$name_file?>').addClass("bg-red-500");
</script>
<script src="<?= MAIN_SERVER . 'assets/js/needLessonsScript.js' ?>"></script>
<script src="<?= MAIN_SERVER . 'assets/vendor/prism.js' ?>"></script>
</body>
</html>