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

    <div class="md:hidden">
        <h1 class="text-2xl">توضیحات</h1>
    </div>
    <div class="content_lessons CONTENT_COLOR">
        <h1>توزیع فدورا</h1>
        <h2>بررسی سریع : </h2>
        <p>
            قبلا گفتیم توزیع رد هت از توزیع فدورا شکل گرفته. پروژه Fedora اواخر سال 2003 شروع به کار کرد و درست زمانی بود که Red Hat متوقف شده بود.
            برای همین شرکت RedHat تصمیم گرفت محصول جدید خودش رو از توزیع Fedora بسازه(البته اینم بگم پشتیبان و حمایت کننده Fedora خود شرکت RedHat)
            <br>
            اگه بخوام از اول اول تعریف کنم نسخه اولیه Fedora به عنوان یه پروژه دانشجویی شروع شد و هدفشم این بود که بتونه نرم افزار های RedHat رو روی یه سیستم عامل جدید دریافت کنه و آماده به توسعه باشه!
            اما فرق اساسی فدورا با ردهت این بود که فدورا رایگان و ردهت تجاری بود برای همین داخل ردهت بخش همکاری در توسعه وجود نداشت!
            اما همین بخش در فدورا باعث پیشرفت این توزیع شد، تا جایی که RedHat محصول اولیه خودش رو حذف کرد و نسخه جدید رو بر پایه فدورا ساخت!
            <br>
            این از تاریخچه ارتباط بین ردهت و فدورا ، ولی اگه بخوایم در مورد خود فدورا صحبت کنیم ، باید بگیم این توزیع دقیقا از هسته اصلی لینوکس (Kernel) ساخته شده و از بقیه توزیع ها استفاده نکرده.
            همچنین از محیط های گرافیکی متفاوتی مثل GNOME ، KDE ، MATE و غیره پشتیبانی میکنه!
            و مهم تر از همه اینکه برخلاف ردهت رایگان رایگانه!
            و اینم بگم که این توزیع ، توزیع مورد علاقه پدر لینوکس دنیا ینی خود لینوس توروالدزه!
        </p>
        <h2>پکیج منیجر :</h2>
        <p>
            فدروا هم مثل رد هت از پکیج منیجیر RPM استفاده میکنه.(پکیج منیجر RPM برای خانواده فدرواست، یادتون باشه!)
        </p>
        <h2>استفاده :</h2>
        <p>
            استفاده از فدروا هم مثل بقیه توزیع ها آسونه و دانش فنی خاصی برای نصب نیاز نداره. همچنین یه نسخه Live داره که میتونید
            روی فلش یا DVD رایت کنید و ازش به صورت زنده استفاده کنید.(حالت زنده یعنی با ریبوت کردن اطلاعات شما از بین میره و فقط تا زمانی اطلاعات رو دارید که فلش یا سی دی شما در حال کاره!)
            <br>
            کلا اگه میخواید یه چیزی مشابه با RedHat استفاده کنید ، ولی بخاطرش پول ندید این توزیع مناسب شماست :)
        </p>
    </div>

    <!-- Start Next Lesson -->
    <?php
    Next_Lesson('LinuxMint');
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