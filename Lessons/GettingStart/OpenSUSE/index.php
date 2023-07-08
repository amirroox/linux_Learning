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
        <h1>توزیع اَپِن سوزه</h1>
        <h2>بررسی سریع : </h2>
        <p>
            این توزیع هم مثل توزیع دبیان و فدروا از کرنل اصلی لینوکس ساخته شده و یک محصول مستقل به حساب میاد.این پروژه یه پروژه کاملا اجتماعی
            و انجمن محور بوده ، پس کاملا هم رایگانه!
            این توزیع 3 هدف اصلی داشت : ساده و آسون باشه ، که یعنی هرکسی به راحتی بتونه دانلود و نصبش کنه. دوم اینکه تلاش کنه به عنوان یه توزیع رایگان بیشترین استفاده رو داشته باشه.
            و سوم اینکه بتونه برای برنامه نویسا و توسعه دهنده ها محیط خوبی رو ایجاد کنه.(در کل دوست داشته اول به حساب بیاد ، منم عصبی شدم آخر گذاشتمش :( )
            <br>
            این توزیع انعطاف پذیری بالایی داره و بروزرسانی خوبی ر هم دریافت میکنه ، اما از مشکلاتش میشه به سرعت کمتر نسبت به بقیه توزیع ها اشاره کرد(که زیاد خوشایند نیست!).
            همچنین یکی از موارد خیلی مهم دراین توزیع امنیته ، یعنی کوچک ترین کاری بدون اطلاع به کاربر توی سیستم عامل انجام نمیشه! و همچنین جزو معدود
            توزیع هاییه که موقعه نصب میتونید بسته های نرم افزاری خودتون رو تک به تک انتخاب کنید.
        </p>
        <h2>پکیج منیجر :</h2>
        <p>
            این توزیع پکیج منیجر مخصوص خودش رو نداره و از پکیج منیجر RPM استفاده میکنه.
        </p>
        <h2>استفاده :</h2>
        <p>
            همونجوری که گفتیم این توزیع خیلی آسونه و برای کاربران جدید یه انتخاب عالیه! همچنین یه برنامه گرافیکی به نام
            YaST داره که کار مدیریت سیستم و برنامه هارو براتون خیلی آسون میکنه!
            <br>
            این توزیع رو هم میشه در سرور و هم به صورت خانگی استفاده کرد و به گفته بعضی از سایت ها جزو 10 توزیع برتر لینوکس به حساب میاد.
        </p>
    </div>

    <!-- Start Next Lesson -->
    <?php
    Next_Lesson('CommandLine' , 'خط فرمان' , 1);
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
    $('#<?=$name_file?>').addClass("bg-red-500"); //Active Lesson

    $('body,html').animate({
        scrollTop: $('#end_menu').offset().top
    }, 800);

    // Season Next For Desktop
    $("#LessonsMenu ol").append(`
        <a href="../../CommandLine">
            <li id="CommandLine" class="hidden md:block LIST_LESSON py-1 hover:bg-red-500 hover:text-white duration-500">فصل بعدی : خط فرمان</li>
        </a>
    `);
</script>

</body>
</html>