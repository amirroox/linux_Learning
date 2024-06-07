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
        <h1>دستور cat</h1>
        <h2>خواندن محتویات فایل </h2>
        <p>
            خب خب ، تا حالا در مورد خیلی چیزا یاد گرفتیم و تا حالا فهمیدیم چجوری یه فایل بسازیم و چجوری بفهمیم که چه نوع فایلیه!
            ولی اگه حواستون باشه یچیزی کمه!! فرضا کنید یه فایل متنی درست کردید یا یه عکس دانلود کردید، خیلی راحت میتونید با دستور file ببیند چه فرمتی داره
            اما اگه بخوایم فایل متنیمون رو بخونیم باید چیکار کنیم؟ هان؟
            <br>
            آفرین ، دستور امروز همین کارو میکنه و باعث میشه بتونیم یه فایل رو بخونیم. بزارید باز مثال بزنیم و توی کد بیشتر باهاش آشنا بشیم :
        </p>
        <pre>
            <code>
                touch my.txt
                cat my.txt
                # اگه تا اینجا تست کنید متوجه میشید که فایل خالی خروجی نداره که عجیبم نیست
                # اما حالا یه فایل متنی از قبل آماده کردیم و اون رو صدا میزنیم
                cat hi.txt
                Hello World
                # داخل فایل صدا زده شده دقیقا همین متن نوشته شده.
            </code>
        </pre>
        <br>
        <b>
            توجه کنید که میتونید چندین فایل رو هم باهم صدا بزنید (که بهم متصلشون میکنه) و متن داخلشون رو بخونید (البته از الان گفته باشم که این دستور برای خوندن فایل های ساده و کوتاست) :
        </b>
        <pre id="Command">
            <code>
                cat hi.txt bay-bay.txt
                Hello World
                Buy Buy Single Life :)
            </code>
        </pre>
        <b>
            این دستور همینقدر ساده است (فعلا برای مقدمات ساده است) !!! همچنین بدونید که دستور cat به معنای گربه نیست و مخفف concatenate (به هم چسبوندن) است که بالاترم گفتیم وقتی دوتا یا چنتا فایلو باهم صدا بزنید بهم وصلشون میکنه!
            و هیچ ربطی به گربه و حیوانات نداره!
        </b>
    </div>

    <!-- Start Reference & Quiz -->
    <h1 class="md:hidden">تمرین و آزمون</h1>
    <div id="referenceQuiz_lessons" nameSeason="<?= $name_file_season ?>" nameLesson="<?= $name_file ?>">
        <div class="CONTENT_COLOR">
            <h2>تمرینات مرتبط : </h2>
            <p>
                واقعا باید تمرین بدم ؟
                خب نمیدم! ولی در کل بهتره روی فایل ها و فرمت های مختلف تست کنید تا ببیند چه نتیجه ایی میده.
                مثلا روی فرمت های عکسی و پی دی افی حتما امتحان کنید قشنگای بابا!
                میتونید لینک زیرم برای اطلاعات بیشتر بخونید :
            </p>
            <a href="https://www.geeksforgeeks.org/cat-command-in-linux-with-examples/">cat command</a>
        </div>
        <div class="CONTENT_COLOR">
            <h2>آزمون :</h2>
            <ol>
                <li>
                    دستور cat برای چه کاری استفاده میشه ؟
                    <button quiz="1"></button>
                </li>
                <hr>
                <li>
                    دستور cat هر فایلی رو میخونه؟
                    <button quiz="2"></button>
                </li>
            </ol>
        </div>
    </div>
    <!-- End Reference & Quiz -->

    <!-- Start Next Lesson -->
    <?php
    Next_Lesson('less-command');
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