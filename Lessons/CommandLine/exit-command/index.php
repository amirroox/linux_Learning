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
    <?php include_once "../menu2.php" ?>
    <!-- End Menu -->

    <h1 class="md:hidden">توضیحات</h1>
    <div class="content_lessons CONTENT_COLOR">
        <h1>توزیع اُپِن سوزه</h1>
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

        <!-- Slider -->
        <swiper-container>
            <swiper-slide>
                <img src="https://www.dedoimedo.com/images/computers-years/2019-1/opensuse-ready.jpg"
                     alt="OpenSUSE" loading="lazy">
            </swiper-slide>
            <swiper-slide>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/OpenSUSE_Logo.svg/1200px-OpenSUSE_Logo.svg.png"
                     alt="OpenSUSE" loading="lazy">
            </swiper-slide>
            <swiper-slide>
                <img src="https://debugpointnews.com/wp-content/uploads/2022/06/openSUSE-Leap-15.4-GNOME-Desktop.jpg"
                     alt="OpenSUSE" loading="lazy">
            </swiper-slide>
        </swiper-container>
        <!-- Slider -->

    </div>

    <!-- Start Reference & Quiz -->
    <h1 class="md:hidden">منابع و آزمون</h1>
    <div id="referenceQuiz_lessons" nameSeason="<?= $name_file_season ?>" nameLesson="<?= $name_file ?>">
        <div class="CONTENT_COLOR">
            <h2>منابع مرتبط : </h2>
            <p>
                مثل همیشه ، منابع مرتبط این زیر هستن (از فصل های بعدی دیگه منابع نداریم! و به جاش تمرین دارید) :
            </p>
            <ol class="text-center">
                <li><a href="https://www.opensuse.org/">سایت رسمی اپن سوزه</a></li>
                <li><a href="https://fa.wikipedia.org/wiki/%D8%A7%D9%BE%D9%86%E2%80%8C%D8%B3%D9%88%D8%B2%D9%87">اپن‌سوزه (ویکی‌پدیا)</a></li>
                <li><a href="https://linux.tosinso.com/fa/articles/23101/Open-SUSE-%DA%86%DB%8C%D8%B3%D8%AA%D8%9F-%D9%85%D8%B9%D8%B1%D9%81%DB%8C-%D9%84%DB%8C%D9%86%D9%88%DA%A9%D8%B3-%D8%AA%D9%88%D8%B2%DB%8C%D8%B9-Open-SUSE-%D8%A8%D9%87-%D8%B2%D8%A8%D8%A7%D9%86-%D8%A8%D8%B3%DB%8C%D8%A7%D8%B1-%D8%B3%D8%A7%D8%AF%D9%87">Open SUSE چیست؟</a></li>
            </ol>
        </div>
        <div class="CONTENT_COLOR">
            <h2>آزمون :</h2>
            <ol>
                <li>
                    این توزیع از چه توزیعی ساخته شده ؟
                    <button quiz="1"></button>
                </li>
                <hr>
                <li>
                    این توزیع از چه پکیج منیجری استفاده میکنه؟
                    <button quiz="2"></button>
                </li>
            </ol>
        </div>
    </div>
    <!-- End Reference & Quiz -->

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

    // Season Next For Desktop
    $("#LessonsMenu ol").append(`
        <a href="../../WorkOnText">
            <li id="WorkOnText" class="hidden md:block LIST_LESSON py-1 hover:bg-red-500 hover:text-white duration-500">فصل بعدی : کار با متن ها</li>
        </a>
    `);
</script>
<script src="<?= MAIN_SERVER . 'assets/js/needLessonsScript.js' ?>"></script>
</body>
</html>