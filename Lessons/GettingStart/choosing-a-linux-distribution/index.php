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
        <h1>انتخاب یه توزیع برای کار</h1>
        <p>
            خب ، توی بخش قبلی یا بهتره بگیم درس قبلی با تاریخچه لینوکس آشنا شدیم ولی یه چیزی رو یادمون رفت بگیم که بهتره اینجا تصحیحش کنیم و اونم
            اینه که لینوکس به خودی خودش یه سیستم عامل نیست و وقتی میگیم لینوکس به هسته سیستم عامل اشاره داریم. حالا بعضیا میان و از این هسته
            استفاده میکنن و انواع مختلف سیستم عامل رو میسازن! برای همین معمولا لینوکس به سیستم عامل مشهوره (ولی یادتون باشه گفتم هسته سیستم عامل لینوکسه ، یعنی ازش به عنوان پایه ایی برای ساخت سیستم عامل استفاده میشه!)
            حالا که تصحیح کردیم گفته های قبلمون رو بیاید یه صحبتی در مورد خود لینوکس داشته باشیم. سیستم لینوکس (چیزی که از لینوکس ساخته شده)
            خودش دارای 3 بخش اصلیه (البته بخش های خیلی زیادی داره اما فعلا اساسی تریناشو میگم تا برسیم به وقتش) :
        </p>
        <ol class="md:mr-10 list-decimal">
            <li>
                هسته لینوکس : همونطوری که بالاتر گفتیم بخش اصلی سیستم عامل همین هسته است و کارشم مدیریت سخت‌افزار و تعامل با سیستمه!
            </li>
            <li>سخت افزار : بلخره یه سیستم عامل باید با یه چیزی اجرا بشه ، و تمامی سخت افزار ها مثل CPU ، حاظفه های جانبی و هرچیز دیگه ایی جزو این دسته است.</li>
            <li>فضای کاربر : همون دسکتاپ خودمون میشه ، بلخره کاربر باید از یه جایی با استفاده از هسته و سخت‌افزار کار خودشو بکنه یا نه؟!</li>
        </ol>
        <!-- Slider -->
        <swiper-container>
            <swiper-slide>
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20200105215737/Untitled-Diagram-215-1.jpg"
                     alt="The main parts of Linux">
            </swiper-slide>
        </swiper-container>
        <!-- Slider -->
        <p>
            حالا که اساس سیستم عامل رو فهمیدیم باید یه توزیع انتخاب کنیم (توزیع یه سیستم عامل با هسته لینوکسه و تعدادشونم خیلی زیاده!!) و بعد از انتخاب
            اونو نصبش کنیم. ما توزیع های زیادی از لینوکس داریم ، مثل Fedora ، Ubuntu ، centos ، Kali Linux و ... ولی ما که نمیتونیم همشونو توضیح بدیم! پس چنتا از مهم تریناشونو
            توی درس های بعدی معرفی میکنیم و با علاقه خودتون یکی رو انتخاب کنید (البته توجه داشته باشید که بعدا متوجه میشید بعضی از دستورات توی بعضی از توزیع ها متفاوته!)
            <br>
            توجه کنید که برای نصب هر توزیع یه سرچ کوچیک تو نت بزنید آموزش های قوی و قشنگی رو پیدا میکنید ، ماهم قرار نیست نصب لینوکسو اینجا یاد بدیم
            فقط میخوایم توزیعاشو معرفی کنیم و خودتون انتخاب کنید و نصبش کنید و بعد باهم برسیم سر چیزای اصلی تر و سخت تر!!!
        </p>
        <br>
        <b>
            برای شروع بهتره از توزیع هایی مثل ابونتو ، لینوکس مینت ، دبیان یا OpenSUSE استفاده کنید.من خودم توی این آموزش از مینت استفاده میکنم!
        </b>

        <!-- Slider -->
        <swiper-container>
            <swiper-slide>
                <img src="https://www.atatus.com/blog/content/images/size/w960/2023/01/top-10-linux-distros.png"
                     alt="Linux distributions" loading="lazy">
            </swiper-slide>
            <swiper-slide>
                <img src="https://static.thegeekstuff.com/wp-content/uploads/2009/06/top-linux-distros.jpg"
                     alt="Linux distributions" loading="lazy">
            </swiper-slide>
            <swiper-slide>
                <img src="https://www.how2shout.com/wp-content/uploads/2019/10/MX-Linux-best-linux-distro-2019.jpg"
                     alt="Linux distributions" loading="lazy">
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
                اگه میخواید توزیع های مختلف رو بشناسید و چک کنید چه مواردی میتونه براتون مناسب باشه
                لینک های زیر رو از دست ندید :
            </p>
            <ol class="text-center">
                <li><a href="https://4xmen.ir/%D8%A7%D9%86%D8%AA%D8%AE%D8%A7%D8%A8-%D8%AA%D9%88%D8%B2%DB%8C%D8%B9-%D9%87%D8%A7%DB%8C-%D9%84%DB%8C%D9%86%D9%88%DA%A9%D8%B3-%D8%AF%D8%B1-%DB%8C%DA%A9-%D9%86%DA%AF%D8%A7%D9%87-%DA%A9%D9%84%DB%8C-%D8%AA/">انتخاب توزیع های لینوکسی</a></li>
                <li><a href="https://blog.iranserver.com/linux-distributions/">بهترین توزیع لینوکس برای شما کدام است؟</a></li>
                <li><a href="https://www.zoomit.ir/computer-learning/24677-best-linux-distributions/">توزیع لینوکس چیست و بهترین انواع آن کدام‌اند؟</a></li>
                <li><a href="https://digiato.com/article/2022/09/28/install-linux-on-windows">چگونه لینوکس را در کنار ویندوز نصب کنیم؟</a></li>
            </ol>
        </div>
        <div class="CONTENT_COLOR">
            <h2>آزمون :</h2>
            <ol>
                <li>
                    سه بخش اساسی در سیستم های لینوکس ؟
                    <button quiz="1"></button>
                </li>
                <hr>
                <li>
                    آیا لینوکس یک سیستم عامل است ؟
                    <button quiz="2"></button>
                </li>
            </ol>
        </div>
    </div>
    <!-- End Reference & Quiz -->

    <!-- Start Next Lesson -->
    <?php
        Next_Lesson('Debian');
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