<?php
include_once "../../../Constants.php" ;
$name_file = basename(__DIR__);
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
    $('body,html').animate({
        scrollTop: $('#end_menu').offset().top
    }, 800);
</script>

</body>
</html>