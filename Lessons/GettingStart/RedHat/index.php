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
    $('body,html').animate({
        scrollTop: $('#end_menu').offset().top
    }, 800);
</script>

</body>
</html>