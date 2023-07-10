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
        <h2>استفاده :</h2>
        <p>
            استفاده و نصب هم از دبیان خیلی آسونه و طریقه سختی نداره ، چون به صورت گرافیکیه و مراحل پیچیده ایی برای نصب نداره. همینطور پیکربندی
            و تنظیماتشم پیچدیدگی بالایی نداره و ارتباط خوبی با هسته لینوکس برقرار میکنه!
        </p>
        <b>
            توجه داشته باشید نیاز نیست بقیه توزیع هارو هم یاد بگیرید فقط اطلاعات کافی در موردش داشته باشید بد نیست.
            در هر صورت میتونید برید درس بعد یا اگه حوصله ندارید برید فصل بعدی تا با چیزای اساسی و مهم آشنا بشیم!
        </b>
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