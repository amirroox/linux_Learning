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
        <h1>توزیع لینوکس مینت</h1>
        <h2>بررسی سریع : </h2>
        <p>
            لینوکس مینت بر پایه اوبنتو ساخته شده و خود ابونتو هم از دبیان ساخته شده ، پس هردوشون یه توزیع بر پایه دبیان هستن!
            طراحان لینوکس مینت میخواستن یه توزیع مدرن و زیبا معرفی کنن که علاوه بر محیط قشنگش ، کار باهاش راحت باشه.
            این توزیع رابط های متفاوتی برای آسون کردن کارها داره و همچنین میتونید منوها و خود Desktop رو هم شخصی سازی کنید.
            <br>
            همچنین یه مورد خیلی خوب در این توزیع سازگاری کامل با مخازن ابونتو است (در بخش پکیج منیجر ها در مورد مخزن ها هم صحبت میکنیم ، ولی تا فعلا بدونید هر توزیع برای خودش یه مخزن داره و میتونید از اونجا توزیع رو آپدیت کنید یا برنامه ایی رو نصب کنید!)
            <br>
            در کل این توزیع یه توزیع خیلی قوی مثل اوبونتوعه (و در خیلی چیزا مشابه است) و حتی ممکنه ظاهر قشنگ تریم داشته باشه ، برای همین اگه نظر من رو بخواید میتونید با این توزیع شروع کنید.(خودم چنتا توزیع دارم ولی با کالی لینوکس (یه توزیع برای هک) و مینت بیشتر کار میکنم! البته اگه اصلا میخواستید بدونید من با چی کار میکنم!)
        </p>
        <h2>پکیج منیجر :</h2>
        <p>
            چون این توزیع هم بر پایه دبیان است پس از پکیج منیجر خانواده دبیان یعنی APT و dpkg استفاده میکنه!
        </p>
        <h2>استفاده :</h2>
        <p>
           از این توزیع هم میشه روی سرور استفاده کرد ، اما به ندرت استفاده میشه و برای سیستم های رومیزی و خونگی خیلی بهتره!
        </p>
        <b>
            منم تو این آموزش از توزیع های بر پایه دبیان استفاده میکنم!
        </b>
    </div>

    <!-- Start Next Lesson -->
    <?php
    Next_Lesson('Gentoo');
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