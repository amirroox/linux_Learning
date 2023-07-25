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
        <h1>دستور ls</h1>
        <h2>(list directories) - لیست دایرکتوری ها</h2>
        <p>
            خب تا حالا فهمیدیم چجوری میتونیم وارد یه پوشه بشیم و همینطور میدونیم که چجوری میشه ببینیم تو چه مسیری هستیم!
            ولی توی ویندوز، وقتی وارد یه پوشه میشید میتونید ببینید که داخل اون پوشه چه فایل ها و پوشه هایی وجود داره، حالا توی لینوکس و خط فرمان چجوری میتونیم ببینم توی مسیرمون چه چیز هایی وجود داره؟
            آفرین، دستور امروز ما همینکارو میکنه و به ما نشون میده چه چیز هایی توی مسیرمون هست.
            بیاید یه مثال ساده رو این زیر ببینیم :
        </p>
        <pre id="Command">
            <code>
                pwd
                /
                ls
                bin    dev    etc    home    root    sbin    tmp    usr    var
            </code>
        </pre>
        <p>
            با توجه به دستورات بالا متوجه میشید که ما توی مسیر ریشه هستیم و با دستور ls میتونیم پوشه ها و فایل های
            داخل ریشه رو مشاهده کنیم(به همین سادگی!)
            <br>
            <b>
                اما توجه داشته باشید که دستور ls به تنهایی نمیتونه تموم فایل هارو نشون بده (مثلا فایل هایی که با نقطه شروع میشن و مخفی هستن!)
            </b>
            <br>
            برای حل این مشکل هم میتونیم از پرچم ها (flag) استفاده کنیم.(پرچم ها ویژگی هایی جدیدی به دستور اضافه میکنن که جلوتر متوجه میشیم!)
            ولی فعلا بیاید روی همین ls مانور بدیم!
            اولین پرچم برای ls پرچم a هست که مخفف کلمه all ، که همونطور که از اسمش پیداست باعث میشه همه فایل هارو بتونید مشاهده کنید(حتی فایل هایی که با نقطه شروع میشن!) این زیر مثالشو میبینید :
        </p>
        <pre id="Command">
            <code>
                pwd
                /
                ls -a
                .  bin  dev  etc  home  root  sbin  tmp  usr  var
            </code>
        </pre>
        <p>
            با توجه به استفاده از فِلَگ a میتونید ببینید که یه . به دایرکتوری ها اضافه شده!
            <br>
            حالا بیاید یه پرچم دیگرو بررسی کنیم! این پرچم رو با l نشون میدن و مخفف long ، که یعنی جزئیات دایرکتوری هارو هم به شما نشون میده!
            مثال این پرچم رو هم میتونید این پایین ببینید :
        </p>
        <pre>
            <code>
                pwd
                /
                ls -l
                drwxrwxrwx  2  root      wheel     --------  2003/11/05 12:00:00  bin
                drwxrwxr-x  2  root      system    --------  2003/11/05 12:00:00  dev
                drwxrwxrwt  2  root      system    --------  2023/07/24 14:01:24  etc
                drwxrwxrwx  2  root      wheel     --------  2023/07/24 14:01:24  home
                drwx------  2  root      system    --------  2003/11/05 12:00:00  root
                drwxrwxr-x  2  root      system    --------  2003/11/05 12:00:00  sbin
                drwxrwxrwt  2  root      system    --------  2003/11/05 12:00:00  tmp
                drwxrwxrwx  2  root      wheel     --------  2003/11/05 12:00:00  usr
                drwxrwxrwx  2  root      wheel     --------  2023/07/24 14:01:20  var
            </code>
        </pre>
        <p>
            خب ، ایندفعه میبینید که جزئیات زیادی بهشون اضافه شده! در سمت چپ یه چیزایی عجیبی میبینید مثل drwxrwxrwx که خیلی
            عجیبم نیست و بعدا باهاش آشنا میشیم (ولی فعلا بدونید که سطح دسترسی رو نشون میده!) و قسمت های مختلف دیگه ایی هم وجود داره که از بحث الان ما خارجه!
        </p>
        <br>
        <b>
            با توجه به اینکه الان دوتا flag یاد گرفتیم شاید براتون سوال باشه میشه باهم استفادشون کرد؟
            در جواب باید بگم بله که میشه! میتونید باهم استفاده کنید و لذت ببرید ، البته باید توجه داشته باشید استفاده از پرچم ها ، ترتیبشون مهمه
            ولی تو خیلی از دستورات تاثیری نداره!
            <br>
            یادتون باشه بعضیا به flag ها میگن option یا arguments ، شماهم هرکدوم دلتون خواست رو بگید، منم چون یخورده خستم
            با flag بیشتر حال کردم، در هر صورت هرچیزی میگید بگید، کارشون یچیزه و اونم اینه که عملکرد بیشتری رو به دستور اضافه کنه.
        </b>
        <pre>
            <code>
                pwd
                /
                # تمامی دستورات پایین یه خروجی دارن
                ls -la یا ls -l -a یا ls -a -l یا ls -al
                drwxrwxrwt  2  root      system    --------  2003/11/05 12:00:00  .
                drwxrwxrwx  2  root      wheel     --------  2003/11/05 12:00:00  bin
                drwxrwxr-x  2  root      system    --------  2003/11/05 12:00:00  dev
                drwxrwxrwt  2  root      system    --------  2023/07/24 14:01:24  etc
                drwxrwxrwx  2  root      wheel     --------  2023/07/24 14:01:24  home
                drwx------  2  root      system    --------  2003/11/05 12:00:00  root
                drwxrwxr-x  2  root      system    --------  2003/11/05 12:00:00  sbin
                drwxrwxrwt  2  root      system    --------  2003/11/05 12:00:00  tmp
                drwxrwxrwx  2  root      wheel     --------  2003/11/05 12:00:00  usr
                drwxrwxrwx  2  root      wheel     --------  2023/07/24 14:01:20  var
            </code>
        </pre>
        <b>
            تا یادم نرفته اینم بگم که دقیقا مثل دستور cd توی دستور ls هم میتونید مسیر مستقیم بدید مثل زیر :
        </b>
        <pre id="Command">
            <code>
                ls -a home/amirroox/desktop
                NewFolder    Hack.py    Plus.bash
            </code>
        </pre>
    </div>
    <!-- Start Reference & Quiz -->
    <h1 class="md:hidden">تمرین و آزمون</h1>
    <div id="referenceQuiz_lessons" nameSeason="<?= $name_file_season ?>" nameLesson="<?= $name_file ?>">
        <div class="CONTENT_COLOR">
            <h2>تمرین مرتبط : </h2>
            <p>
                خب چنتا ترین دارید که باید انجام بدید، دستورات زیر رو چک کنید ببینید چجوری کار میکنن :
            </p>
            <ol class="text-center">
                <li>ls -R</li>
                <li>ls -r</li>
                <li>ls -t</li>
            </ol>
            <br>
            <b>
                ممکنه با تست کردن یکمی براتون سخت باشه فهمیدن اینکه چیکار میکنن ، پس یه راهنمایی کوچیک براتون دارم!
                 پرچم r- مخفف reverse ، پس خیلی راحت میشه فهمید چیکار میکنه!
                <br>
                <br>
                پرچم t- مخفف time که اینم روشه که چیکار میکنه(بر اساس زمان مرتب‌سازی میکنه) و در آخر
                پرچم R- مخفف کلمه recursive به معنی بازگشتیه که اگه بخوام راهنمایی کنم کارش اینه که فایل ها و پوشه های داخل پوشه هارو هم بهتون نمایش میده (خودتون تست کنید بیشتر متوجه میشید!)
            </b>
        </div>
        <div class="CONTENT_COLOR">
            <h2>آزمون :</h2>
            <ol>
                <li>
                    با چه دستوری میشه تمامی فایل های یه دایرکتوری رو دید (حتی فایل های مخفی)؟
                    <button quiz="1"></button>
                </li>
                <hr>
                <li>
                    پرچم l چه کاری انجام میده ؟
                    <button quiz="2"></button>
                </li>
                <hr>
                <li>
                    میشه از پرچم ها باهم استفاده کرد؟
                    <button quiz="3"></button>
                </li>
            </ol>
        </div>
    </div>
    <!-- End Reference & Quiz -->


    <!-- Start Next Lesson -->
    <?php
    Next_Lesson('touch-command','دستور touch');
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