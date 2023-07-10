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
        <h1>توزیع ردهت</h1>
        <h2>بررسی سریع : </h2>
        <p>
            اول بگیم که اسم کامل این توزیع Red Hat Enterprise Linux است که به مختصر بهش RHEL گفته میشه.قبل از بررسی
            پیشرفته باید بگم که این توزیع یکی از محدود توزیع هایه که از قوانین و لایسنس GNU پیروی نمیکنه(بخوام خیلی آسون بهتون بگم ، یعنی خیلی آزاد و رایگان نیست!)،
            همچنین این توزیع از توزیع Fedora شکل گرفته که در درس های بعدی حتما باهاش سروکار داریم!
            همچنین این توزیع هم میتونه به عنوان سرور مجازی و هم سرور خانگی استفاده بشه؛ ولی یادتون باشه گفتم این توزیع رایگان نیست و باید بخریدش!
            <br>
            مورد بعدی اینکه این توزیع رو با توزیع Red Hat خالی اشتباه نگیرید (اسم کاملش Red hat Commercial Linux بود) ، توزیع Red Hat قبلی از سال 2004 به بعد تولید نشد و این محصول جدیدیه
            که اسم کاملشم بالاتر گفتیم.
        </p>
        <h2>پکیج منیجر :</h2>
        <p>
            ردهت اولین توزیع از لینوکس بود که از پکیج منیجر جدیدی استفاده کرد و همین کار باعث شد توزیع های جدیدتر هم از این قالب بندی استفاده کنن.
            پکیج منیجری که ردهت (و خانواده فدورا) ازش استفاده میکنه RPM Package Manager که با این پکیج منیجرم در فصل های بعدی آشنا میشیم، پس فعلا فقط اینارو بدونید!
        </p>
        <h2>استفاده :</h2>
        <p>
            استفاده از ردهت یکمی سختتر از دبیانه ولی بازم نمیشه گفت برای استفاده خیلی پیچیده است ، بلکه با کمی دانش فنی پایه میشه راحت ازش استفاده کرد.
            و توجه کنید که این توزیع بیشتر برای سرور استفاده میشه (همونطوری که از اسم کاملشم مشخصه) پس اگه سرور دارید یا سیستم قوی دارید از این
            توزیع استفاده کنید.(البته مشخصات سیستمی قوی هم نیاز نداره ، اما برای شروع هزینه نکنید بهتره و با چیزای رایگان هم کارتون راه میوفته!)
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
    Next_Lesson('Ubuntu');
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