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
        <h1>دستور file</h1>
        <h2>بررسی نوع فایل</h2>
        <p>
            یه دستور خیلی خوب و جذاب داریم به نام file که کارش اینه بهتون فرمت و نوع فایل رو بگه! مثلا اگه یه فایل pdf داشته باشید
            با این دستور متوجه میشید که این فایل واقعا pdf هست یا نه! توی درس قبلی با دستور touch آشنا شدید و اگه واقعا تمرین کرده باشید
            میدونید که اگه یه فایل text.jpg بسازید ، شاید فرمتش رو رعایت کرده باشید اما واقعا یه عکس تولید نکردید!
            <br>
            برای همین دستور file بهتون کمک میکنه که فرمت واقعی فایل هارو شناسایی کنید، بزارید این زیر یه مثال بزنم :
        </p>
        <pre id="Command">
            <code>
                touch text.txt
                file text.txt
                text.txt: empty
                # میتونید ببینید که وقتی یه فایل خالی ایجاد میکنیم
                # نوع فایل هم خالی حساب میشه
                touch jojo.jpg
                file jojo.jpg
                jojo.jpg: empty
            </code>
        </pre>
        <p>
            حالا ما رفتیم چنتا فایل واقعی پیدا کردیم! مثلا 2 عکس دانلود کردیم و یدونه pdf ، حالا خروجی دستور زیر رو ببینید :
        </p>
        <pre>
            <code>
                ls
                hand.avif
                hello-world.pdf
                v.jpg

                file v.jpg
                v.jpg: JPEG image data, JFIF standard 1.01, resolution (DPI),
                density 72x72, segment length 16, Exif Standard:
                [TIFF image data, little-endian, direntries=2,
                copyright=Rawpixel Ltd.],
                progressive, precision 8, 800x533, components 3

                file hello-world.pdf
                hello-world.pdf: PDF document, version 1.4, 1 pages

                file hand.avif
                hand.avif: ISO Media, AVIF Image
            </code>
        </pre>
        <b>
            میبینید که دستور file علاوه بر نوع فرمت فایل، یه اطلاعات دیگه هم بهتون میده که بدردتون میخوره!
            مثلا برای pdf بهتون میگخ چند صفحه است و برای jpg مشخصات کامل عکس و اندازه رو میده(که واقعا خیلی باحاله!)
        </b>
    </div>

    <!-- Start Reference & Quiz -->
    <h1 class="md:hidden">تمرین و آزمون</h1>
    <div id="referenceQuiz_lessons" nameSeason="<?= $name_file_season ?>" nameLesson="<?= $name_file ?>">
        <div class="CONTENT_COLOR">
            <h2>تمرینات مرتبط : </h2>
            <p>
                فقط یه تمرین دارید که برای خودتونم میتونه جذاب باشه! برید چنتا چیز مختلف دانلود کنید
                با فرمت های مختلفی مثل jpg, png, pdf, txt, iso و هر فرمتی که دلتون خواست و با دستور file
                ببینید چه خروجی به شما میده!
            </p>
        </div>
        <div class="CONTENT_COLOR">
            <h2>آزمون :</h2>
            <ol>
                <li>
                  دستور file میتونه چنتا فایل رو هم همزمان قبول کنه؟
                    <button quiz="1"></button>
                </li>
                <li>
                    دستور file فقط فرمت رو نمایش میده؟
                    <button quiz="2"></button>
                </li>
            </ol>
        </div>
    </div>
    <!-- End Reference & Quiz -->

    <!-- Start Next Lesson -->
    <?php
    Next_Lesson('cat-command', 'دستور cat');
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