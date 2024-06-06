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
    <?php include_once "../menu1.php" ?>
    <!-- End Menu -->

    <h1 class="md:hidden">توضیحات</h1>
    <div class="content_lessons CONTENT_COLOR">
        <h1>دستور less</h1>
        <h2>خواندن فایل ها به صورت کوتاه </h2>
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
            پکیج منیجری که ردهت (و خانواده فدورا) ازش استفاده میکنه RPM Package Manager است که با این پکیج منیجرم در فصل های بعدی آشنا میشیم، پس فعلا فقط اینارو بدونید!
        </p>
        <!-- Slider -->
        <swiper-container>
            <swiper-slide>
                <img src="https://www.redhat.com/sysadmin/sites/default/files/styles/embed_large/public/2020-04/p2.png"
                     alt="RPM" loading="lazy">
            </swiper-slide>
        </swiper-container>
        <!-- Slider -->
        <h2>استفاده :</h2>
        <p>
            استفاده از ردهت یکمی سختتر از دبیانه ولی بازم نمیشه گفت برای استفاده خیلی پیچیده است ، بلکه با کمی دانش فنی پایه میشه راحت ازش استفاده کرد.
            و توجه کنید که این توزیع بیشتر برای سرور استفاده میشه (همونطوری که از اسم کاملشم مشخصه) پس اگه سرور دارید یا سیستم قوی دارید از این
            توزیع استفاده کنید.(البته مشخصات سیستمی قوی هم نیاز نداره ، اما برای شروع هزینه نکنید بهتره و با چیزای رایگان هم کارتون راه میوفته!)
        </p>
        <!-- Slider -->
        <swiper-container>
            <swiper-slide>
                <img src="https://venturebeat.com/wp-content/uploads/2021/09/Red-Hat-e1684880569131.jpg"
                     alt="redhat" loading="lazy">
            </swiper-slide>
            <swiper-slide>
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20201109002948/searchbar.png"
                     alt="redhat" loading="lazy">
            </swiper-slide>
            <swiper-slide>
                <img src="https://www.unixsysadmin.com/wp-content/uploads/sites/3/2022/07/RHEL9.png"
                     alt="redhat" loading="lazy">
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
                این زیرم براتون چنتا لینک مرتبط گذاشتم ، که اگه دوست داشتید دنبال کنید :
            </p>
            <ol class="text-center">
                <li><a href="https://www.redhat.com/en">سایت اصلی ردهت</a></li>
                <li><a href="https://linux.tosinso.com/fa/articles/23094/RedHat-%DA%86%DB%8C%D8%B3%D8%AA%D8%9F-%D9%85%D8%B9%D8%B1%D9%81%DB%8C-%D9%84%DB%8C%D9%86%D9%88%DA%A9%D8%B3-%D8%AA%D9%88%D8%B2%DB%8C%D8%B9-RHEL-%D8%A8%D9%87-%D8%B2%D8%A8%D8%A7%D9%86-%D8%A8%D8%B3%DB%8C%D8%A7%D8%B1-%D8%B3%D8%A7%D8%AF%D9%87">RedHat چیست؟ معرفی لینوکس توزیع RHEL به زبان بسیار ساده</a></li>
                <li><a href="https://blog.shetabanhost.com/what-is-red-hat/">توزیع رد هت چیست و چه کاربردی دارد</a></li>
            </ol>
        </div>
        <div class="CONTENT_COLOR">
            <h2>آزمون :</h2>
            <ol>
                <li>
                    پکیج منیجر ردهت چیه ؟
                    <button quiz="1"></button>
                </li>
                <hr>
                <li>
                    ردهت از چه خانواده لینوکسیه ؟
                    <button quiz="2"></button>
                </li>
            </ol>
        </div>
    </div>
    <!-- End Reference & Quiz -->

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
</script>
<script src="<?= MAIN_SERVER . 'assets/js/needLessonsScript.js' ?>"></script>
</body>
</html>