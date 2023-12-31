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
        <h1>تاریخچه لینوکس خوشگلمون</h1>
        <p>
            اگه بخوایم الان در مورد تاریخچه لینوکس صحبت کنیم من ینفر محتوا کم میارم(همینجوری هم همیشه محتوا کم دارم!)
            اما چون قراره باهم دیگه لینوکس کار کنیم ، بلخره باید یه چیزایی رو از تاریخچه و شکل گیری این سیستم عامل
            هم بدونیم!
            <br>
            حرف اضافه نمیزنم میریم سر تاریخچه لینوکس : لینوکس در سال 1991 (که خیلی ام ازش نمیگذره) توسط لینوس توروالدز (Linus Torvalds)
            ساخته شد؛اما این همه داستان نیست و داستان شکل گیری لینوکس به قبل از همه اینا برمگیرده! تا قبل از سال 1991 سیستم عامل هایی
            داشتیم مثل Mac (که مثل الان ، همون موقعه هم گرون بودن!) یا سیستم عاملی مثل Dos که امپراطوری میکرد (اما آنچنان ارزون و قابل دسترس نبود)
            برای همین موارد وجود یه چیز رایگان و سریع و به طور کلی عالی ، کم بود!
            <br>
            از یه طرفی سیستم عامل Unix وجود داشت ، اما قیمت خیلی بالایی داشت که بازم برای همه نمیصرفید!کم کم سیستم عاملی به نام Minix ساخته شد که در واقع ساختش
            توسط یه پروفسور بود که میخواست عملکر درونی یه سیستم واقعی رو به دانشجوهاش نشون بده (بعد تو ایران ... بگذریم) ،
            از یه طرفی وقتی Minix سر و صدا به پا کرد ، اولین سیستم عاملی بود که به صورت متن باز (اوپن سورس - کلا سورسش در دسترس همه) در دسترس عموم
            قرار میگرفت و همین انقلابی در مورد آزادی و جامعه اپن سورس بود!
            خالق Minix یه کتاب برای کمک به درک کد های سیستم عامل نوشت و یکی از کسانی که اون کتاب رو خوندن ، لینوس توروالدز بود!
            <br>
            حالا مسیرو تغییر میدیم تا ببینم این لینوکس عزیزمون چجوری ساخته شد! لینوس یه هکر خود آموخته و دانشجو سال دوم علوم کامپیوتر توی دانشگاه هلسینکی (فنلاند)
            بود و خیلی به برداشتن محدودیت های سیستم های عامل علاقه داشت (محدودیت اصلا خوب نیستتت!) ؛ از یه طرفی Minix سیستم عامل خوبی بود
            اما آموزشی بود و برای مصارف تجاری و یا عمومی گزینه مناسبی نبود!
            همچنین تو اون زمان سیستم عامل GNU هم ساخته شده بود که حرف اول توی سیستم عامل های متن باز و اوپن سورس رو میزد.
            (گنو در سال 1983 ساخته شد اما بازم کاملا اوپن سورس نبود و حتی Minix هم قرار بود لایسنس دار بشه ، پس کلا نیاز داشتیم یچیزی کاملا رایگان به وجود بیاد!)
            حالا از گنو بگذریم لینوس قصه ما بلخره توی سال 1991 به گروه خبری Minix یه متنی رو ارسال کرد که اگه بخوام خلاصه بگم اینو گفت : من یه سیستم عامل کاملا آزاد برای سرگرمی ساختم
            و قرار نیست تجاری باشه ولی چون شبیه Minix ، میخواستم بازخورد های شما رو داشته باشم و بدونم مردم چه فیچر هایی رو دوست دارن.
            حتی خود لینوس هم فک نمیکرد یه تایمی سیستم عاملش انقدر بزرگ بشه که یکی از اون سر دنیا در مورد تاریخچش فقط این همه بنویسه!
            در هر صورت کد های سیستم عامل لینوکس تو اینترنت آپلود شد و خیلی زود فراگیر شد و استقبال پرشوری هم داشت! اما خیلی زود خالق Minix (اسم اون پرفسور ، اندرو تاننبوم بود) جواب لینوس رو خیلی تند داد ، به طور خلاصه هم اینو گفت :
            طراحی یه هسته یکپارچه توی سال 1991 یه اشتباه محضه و خدارو شکر که دانشجو من نیستی وگرنه نمره بالایی نمیگرفتی.(خدایی ناراحت شدم :( )
            <br>
            تاننبوم قطعا پرفسور معروفی بود و حرفش اهمیت زیادی داشت ، اما در مورد Linux اشتباه میکرد و همچنین لینوس هم با این بادا نلرزید و به کارش ادامه داد. طرفدارای لینوکس هرروز اضافه میشد و دیگه اسباب بازی برای
            هکر ها نبود و واقعا یه سیستم عامل کاربردی شده بود! در آخر هم لینوکس مجوز عمومی GNU رو گرفت و جزو یه سیستم عامل واقعی شد که برای استفاده و توسعه رایگان بود!
            <br>
            اما همینجوری نموند و بعضی از شرکت ها اومدن و نسخه های خودشون رو ارائه دادن (بر پایه لینوکس) و با قیمت های خودشون به فروش رسوندن ، اما هنوز که هنوزه
            لینوکس یه سیستم عامل رایگانه که میتونید همه جا راحت دانلودش کنید و هر بلایی خواستید سرش بیارید.(من از طرف شما از لینوس تشکر میکنم!)
        </p>

        <!-- Slider -->
        <swiper-container>
            <swiper-slide>
                <img src="https://slideplayer.com/slide/12761004/77/images/2/LINUX+History.jpg"
                     alt="linux History" loading="lazy">
            </swiper-slide>
            <swiper-slide>
                <img src="https://www.linuxadictos.com/wp-content/uploads/linustorvalds-1024x683.jpg"
                     alt="Linus Torvalds" loading="lazy">
            </swiper-slide>
            <swiper-slide>
                <img src="https://techcrunch.com/wp-content/uploads/2016/08/gettyimages-532505754.jpg"
                     alt="Linus Torvalds" loading="lazy">
            </swiper-slide>
        </swiper-container>
    </div>

    <!-- Start Reference & Quiz -->
    <h1 class="md:hidden">منابع و آزمون</h1>
    <div id="referenceQuiz_lessons" nameSeason="<?= $name_file_season ?>" nameLesson="<?= $name_file ?>">
        <div class="CONTENT_COLOR">
            <h2>منابع مرتبط : </h2>
            <p>
                اگه علاقه داشتید تاریخچه رو به صورت کامل تر بخونید حتما لینک های زیر رو دنبال کنید!
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
    Next_Lesson('choosing-a-linux-distribution' , 'انتخاب توزیع');
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