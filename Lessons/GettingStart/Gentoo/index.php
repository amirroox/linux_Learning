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
        <h1>توزیع جنتو</h1>
        <h2>بررسی سریع : </h2>
        <p>
            جنتو یکی دیگه از توزیع های قدرتمند و قابل شخصی سازی در دنیای لینوکس است. این توزیع به طور ویژه کاربران حرفه ایی تر رو هدف قرار داده، پس اگه
            عاشق چالشید برید سمتش!
            <br>
            اما جدا از سختی های این توزیع میشه گفت ، جنتو کنترل بالایی داره! حالا کنترل یعنی چی؟ یعنی شما رو جزئی ترین کارای سیستم عاملتون دسترسی مستقیم دارید.
            یکی دیگه از فایده های جنتو بهینه‌سازی و سرعت زیادشه(شاید بگید همه مگه از هسته لینوکس ساخته نشدن؟ باید بگم چرا ساخته شدن ، اما شخصی سازی ها و ابزارهای داخلی هر توزیع شبیه به هم نیست!)
            <br>
            و مورد آخر هم اینکه شاید این توزیع سخت باشه ، ولی بعد از یادگیری دیگه ازش دست برنمیدارید! (اگه یچیز آماده در اختیارتون باشه سریع ارزشش کم میشه ، اما وقتی ریز به ریز جزئیات رو خودتون درک کنید ارزش کارتون بالاتر میره!)
        </p>
        <h2>پکیج منیجر :</h2>
        <p>
            بر خلاف خانواده دبیان و فدورا ، جنتو از پکیج منیجر مخصوص خودش به نام Portage استفاده میکنه.
        </p>
        <h2>استفاده :</h2>
        <p>
            استفاده از جنتو مثل توزیع های قبلی آسون نیست! و کلا برای کاربران مبتدی مناسب نیست، حتی برای نصب هم باید از دستورات استفاده کنید
            و از محیط گرافیکی خبری نیست! ولی در هر صورت اگه از چالش خوشتون میاد و یادگیری براتون لذت بخشه میتونید این توزیع رو استفاده کنید و لذت ببرید.
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
    Next_Lesson('ArchLinux');
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