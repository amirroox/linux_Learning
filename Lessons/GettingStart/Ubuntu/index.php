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
        <h1>توزیع ابونتو</h1>
        <h2>بررسی سریع : </h2>
        <p>
            احتمالا که نه،بلکه حتما اسم اوبنتو به گوشتون خورده! این توزیع یکی از محبوب ترین توزیع های لینوکسیه که همه جا در دسترسه و بر پایه توزیع Debian ساخته شده.
            این توزیع از محیط گرافیکی مخصوص به خودش به نام Unity استفاده میکنه (بقیه توزیع ها هم محیط گرافیکی (رابط کاربری گرافیکی) خودشون مثل GNOME رو دارن که باید توجه کنید هر توزیع برای خودش محیط گرافیکی نمیزنه و از موارد موجود استفاده میکنن و فقط شخصی سازی روش انجام میدن)
            <br>
            از ابونتو میشه روی سرور ، سیستم خانگی و حتی برای افراد مبتدی و پیشرفته استفاده کرد ، یعنی یه توزیع همه فن حریفه و Community (انجمن) قوی داره
            که به صورت رایگان در دسترس همه است!
            <br>
            زیاد توضیح خاصی ندارم بدم(البته درمورد این توزیع خیلی چیزا میشه گفت ، ولی اگه دوس دارید میتونید سرچ بزنید!) چون واقعا از همه نظر عالیه
            و برای شما عزیزان هم بهترین گزینه برای شروعه!
        </p>
        <h2>پکیج منیجر :</h2>
        <p>
            همونطور که قبلا هم گفتیم این توزیع بر پایه دبیانه پس از پکیج منیجر همون توزیع هم استفاده میکنه، یعنی dpkg و APT.
        </p>
        <h2>استفاده :</h2>
        <p>
            بالاتر گفتم این توزیع یه توزیع همه فن حریفه ، پس همه جا استفاده میشه و برای نصبش هم محیط گرافیکی خیلی ساده ایی داره
            و پیچدگی زیادی برای نصب و استفاده ازش ندارید!
        </p>
    </div>

    <!-- Start Next Lesson -->
    <?php
    Next_Lesson('Fedora');
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