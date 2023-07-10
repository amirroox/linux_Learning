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
    <?php include_once "../menu.php" ?>
    <!-- End Menu -->

    <h1 class="md:hidden">توضیحات</h1>
    <div class="content_lessons CONTENT_COLOR">
        <h1>توزیع آرچ لینوکس</h1>
        <h2>بررسی سریع : </h2>
        <p>
            توزیع های لینوکسی به خاطر سادگیشون معروف شدن اما توزیع آرچ لینوکس کلا با راحتی مشکل داره! این توزیع به کاربران اجازه میده
            هرچیزی که دلشون خواست رو انتخاب کنن و در عین حال عملکرد سیستم بهینه بمونه!مثل جنتو هم این توزیع برای مبتدیا مناسب نیست ، اما اگه از چالش و خرابکاری و از 0 شروع کردن خوشتون میاد میتونید این توزیع رو نصب کنید (البته اگه بتونید!)
            <br>
            مهم ترین مورد توی آرچ ، همین شخصی سازی و اجازه به کاربرانه، تا جایی که معتقده همه ویژگی ها باید توسط کاربر شخصی سازی بشه!
            مثلا هیچ دستکتاپ بومی از قبل روش نصب نیست و خودتون باید انتخاب کنید که چی دوس دارید!
            همچنین پروسه نصب بسیار متفاوت تر از بقیه توزیع هاست که همین جالب ترش میکنه. و همچنین کمتر دارای نرم افزار های گرافیکیه تا شمارو
            بیشتر درگیر خط فرمان کنه!
        </p>
        <h2>پکیج منیجر :</h2>
        <p>
            این توزیع هم مثل جنتو از پکیج منیجر مخصوص به خودش به نام pacman استفاده میکنه.
        </p>
        <h2>استفاده :</h2>
        <p>
            استفاده از آرچ هم در حد گنتو پیچیده است و برای افراد مبتدی مناسب نیست ، اما سرعت و سبکیش میتونه برای هر سیستمی با
            هر مشخصاتی مناسب باشه!
            <br>
            همچنین اگه واقعا میخواید یه سیستم عامل سبک داشته باشید و لینوکس رو قشنگ (با درد) حس کنید از آرچ لینوکس استفاده کنید.
            ممکنه یکم توی یادگیریش و نصبش به مشکل بخورید ولی همین حل کردن مشکل میتونه به یادگیریتون خیلی کمک کنه!
            <br>
            (نصب کننده گرافیکی هم برای آرچ وجود داره ، ولی اگه میخواید واقعا چالش داشته باشید ازش استفاده نکنید و برای نصب از
            <a href="https://wiki.archlinux.org/" class="text-red-400">
                Arch Wiki
            </a>
            استفاده کنید)
        </p>
    </div>

    <!-- Start Reference & Quiz -->
    <h1 class="md:hidden">منابع و آزمون</h1>
    <div id="referenceQuiz_lessons" nameSeason="<?= $name_file_season ?>" nameLesson="<?= $name_file ?>">
        <div class="CONTENT_COLOR">
            <h2>منابع مرتبط : </h2>
            <p>
                اگه علاقه داشتید تاریخچه رو به صورت کامل تر بخونید حتما لینک های بالا رو دنبال کنید!
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
    Next_Lesson('OpenSUSE');
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

</body>
</html>