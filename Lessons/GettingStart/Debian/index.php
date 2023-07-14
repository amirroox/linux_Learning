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
        <h1>توزیع دبیان</h1>
        <h2>بررسی سریع : </h2>
        <p>
            دبیان یکی از اولین توزیع های لینوکسه که خیلی هم خوبه (چون کاملا رایگان و اپن سورسه!) ، وقتی میخواستن این توزیع رو بسازن
            اصلا به فکر تجاری کردنش نبودن و حتی پشتیبانی مالی هم نداشتن ، اما تونستن یه یچیز فوق‌العاده درست کنن که در دسترس همه باشه تا جایی
            که الان خیلی از توزیع های دیگه از همین توزیع شکل گرفتن.
            <br>
            نکته دیگه ایی که در مورد این توزیع لینوکسی میشه داد ، اینه که این توزیع هم سمت سرور و هم سمت کاربر میتونه اجرا بشه (سمت سرور یعنی روی یه سرور مجازی و سمت کاربر هم یعنی به صورت خونگی استفاده بشه!)؛
             خود توزیع دبیان 3 تا نسخه متفاوت برای دانلود داره به نام های پایدار (Stable) ، ناپایدار (Unstable) و تست (Testing) که یه فرق های
            ریزی باهم دیگه دارن. اما اگه بخوام به طور خلاصه فرق هاشون رو براتون توضیح بدم اینجوریه که نسخه پایدار بیشترین امنیت و کمترین باگ رو داره ولی آخرین نسخه منتشر شده نیست!
            از یه طرف دیگه یه نسخه ناپیدار داره که آخرین نسخه است ولی ممکنه باگ داشته باشه! و نسخه تست هم برای توسعه دهندگانه و میشه گفت یچیزی بین پایدار و ناپایداره!
        </p>
        <h2>توزیع های مرتبط : </h2>
        <p>
            همونطوری که بالاتر اشاره کردم دبیان یه توزیع پایه است و خیلی از توزیع های دیگه بر پایه دبیان به وجود اومدن. مثلا توزیع قدرتمند اوبنتو
            که احتمالا اسمشم شنیدید از دبیان ساخته شده و توزیع مینت (Mint) هم از ابونتو ساخته شده که یعنی توزیع مینت هم پایه اصلیش از دبیان میاد!
        </p>
        <h2>پکیج منیجر :</h2>
        <p>
            پکیج منیجر رو اگه بخوام به طور خلاصه توضیح بدم یعنی نرم افزاری داخل سیستم عامل که میتونید باهاش نرم افزار ها و پیکج های مختلف رو دانلود و نصب کنید(ولی به صورت کلی یعنی مدیریت بسته های نصبی - یجور مدیریت برنامه هامونه).
            هر توزیع پکیج منجیر مخصوص خودش رو داره و حتی ممکنه دستورات نصب متفاوتی داشته باشه ولی فعلا این مبحثو پس ذهنتون نگه دارید تا به وقتش
            به درس پکیج منیجر ها برسیم.
            پکیج منیجری که خانواده دبیان ازش استفاده میکنه dpkg و ابزار APT است.
            (dpkg مخفف Debian package است!)
        </p>
        <!-- Slider -->
        <swiper-container>
            <swiper-slide>
                <img src="https://phoenixnap.com/kb/wp-content/uploads/2022/03/dpkg-i-deb-package-terminal-output.png"
                     alt="dpkg" loading="lazy">
            </swiper-slide>
        </swiper-container>
        <!-- Slider -->
        <h2>استفاده :</h2>
        <p>
            استفاده و نصب هم از دبیان خیلی آسونه و طریقه سختی نداره ، چون به صورت گرافیکیه و مراحل پیچیده ایی برای نصب نداره. همینطور پیکربندی
            و تنظیماتشم پیچدیدگی بالایی نداره و ارتباط خوبی با هسته لینوکس برقرار میکنه!
        </p>
        <b>
            توجه داشته باشید نیاز نیست بقیه توزیع هارو هم یاد بگیرید فقط اطلاعات کافی در موردش داشته باشید بد نیست.
            در هر صورت میتونید برید درس بعد یا اگه حوصله ندارید برید فصل بعدی تا با چیزای اساسی و مهم آشنا بشیم!
        </b>

        <!-- Slider -->
        <swiper-container>
            <swiper-slide>
                <img src="https://www.debian.org/Pics/calamares-bookworm.png"
                     alt="debian" loading="lazy">
            </swiper-slide>
            <swiper-slide>
                <img src="https://www.fosslinux.com/wp-content/uploads/2022/02/Xfce-desktop.png"
                     alt="debian" loading="lazy">
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
                لینک های مرتبط با دبیان رو این پایین براتون گذاشتم ، همچنین اگه میخواید بیشتر بدونید هم چنتا لینک گذاشتم :
            </p>
            <ol class="text-center">
                <li><a href="https://www.debian.org/">سایت اصلی دبیان</a></li>
                <li><a href="https://www.debian.org/index.fa.html">سایت اصلی دبیان (فارسی)</a></li>
                <li><a href="https://fa.wikipedia.org/wiki/%D8%AF%D8%A8%DB%8C%D8%A7%D9%86">دبیان (ویکی پدیا)</a></li>
                <li><a href="https://linux.tosinso.com/fa/articles/23089/Debian-%DA%86%DB%8C%D8%B3%D8%AA%D8%9F-%D9%85%D8%B9%D8%B1%D9%81%DB%8C-%D9%84%DB%8C%D9%86%D9%88%DA%A9%D8%B3-%D8%AA%D9%88%D8%B2%DB%8C%D8%B9-%D8%AF%D8%A8%DB%8C%D9%86-%D8%A8%D9%87-%D8%B2%D8%A8%D8%A7%D9%86-%D8%A8%D8%B3%DB%8C%D8%A7%D8%B1-%D8%B3%D8%A7%D8%AF%D9%87">Debian چیست؟ معرفی لینوکس توزیع دبین به زبان بسیار ساده</a></li>
            </ol>
        </div>
        <div class="CONTENT_COLOR">
            <h2>آزمون :</h2>
            <ol>
                <li>
                    دبیان از چه پکیج منیجری استفاده میکنه؟
                    <button quiz="1"></button>
                </li>
                <hr>
                <li>
                    چه توزیع هایی از دبیان ساخته شده اند ؟
                    <button quiz="2"></button>
                </li>
                <hr>
                <li>
                    دبیان چند نسخه برای دانلود دارد ؟
                    <button quiz="3"></button>
                </li>
            </ol>
        </div>
    </div>
    <!-- End Reference & Quiz -->


    <!-- Start Next Lesson -->
    <?php
    Next_Lesson('RedHat');
    Next_Lesson('CommandLine' , 'فصل بعدی - خط فرمان' , 1);
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
    // Season next
    $("#LessonsMenu ol").append(`
        <a href="../../CommandLine">
            <li id="CommandLine" class="hidden md:block LIST_LESSON py-1 hover:bg-red-500 hover:text-white duration-500">فصل بعدی : خط فرمان</li>
        </a>
    `);
</script>
<script src="<?= MAIN_SERVER . 'assets/js/needLessonsScript.js' ?>"></script>
</body>
</html>