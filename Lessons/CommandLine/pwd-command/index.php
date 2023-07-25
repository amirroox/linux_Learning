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
        <h1>دستور pwd</h1>
        <h2>(Print Working Directory) - چاپ مسیر حال حاضر</h2>
        <p>
            همه چیز توی لینوکس یه فایله! هرچقدر جلوتر بریم با این مفهوم بیشتر آشنا میشید، ولی فعلا فقط در نظر بگیرید که دنیای لینوکس
            دنیای فایل هاست! توی ویندوز وقتی مای کامپیوتر رو باز میکنید درایوهاتون رو میتونید ببنید و هرکدوم رو که باز کنید
            پوشه بندی های خودشون رو دارن؛ توی لینوکس هم همین شکلیه با این تفاوت که فقط درایو های ذخیره سازی وجود نداره و یکمی درایو بندی ها پیچیده ترن!
            <br>
            من قرار نیست فعلا در مورد پوشه بندی ها صحبت کنم ، اما موارد پایه رو میگم تا در جریان باشید!
            <br>
            توی ویندوز، مای کامپیوتر اولین دایرکتوی (پوشه ریشه (root Directory)) برای شماست ، اما توی لینوکس اولین دایرکتوری رو با / مشخص میکنن! و این دایرکتوی فایل ها و پوشه های زیادی داره
            که من چنتاش رو این زیر گذاشتم:
        </p>
        <pre class="language-treeview">
            <code>
                / (Root)/
                    bin/
                        x11/
                        7z.txt
                        apt.bash
                        apt-clone.py
                        ...
                    boot/
                        .../
                        ...
                    dev/
                        .../
                        ...
                    etc/
                        .../
                        ...
                    home/
                        amirroox (Users)/
                            Documents/
                            Desktops/
                            Downloads/
                            Music/
                    lib/
                        .../
                            .../
                            .../
                        .../
                        ...
                    .../
                    usr/
                        .../
                            .../
                            ...
                        .../
                    var/
                        .../
                        .../
                    .../
            </code>
        </pre>
        <p>
             پوشه های بالا چنتا از پوشه های داخل ریشه (root) هستن، و از این به بعد به مسیر هر فایل میگیم Path.
            <br>
            مثلا تو قسمت بالا یه پوشه به نام home داریم که داخلش یه پوشه دیگه به نام amirroox هست و داخل اون هم یه پوشه به نام Download ، حالا اگه بریم داخل پوشه Download
            مسیر ما یا همون Path چی میشه؟ آفرین میشه home/amirroox/Download .
            <br>
            حالا همه اینارو گفتیم که به چی برسیم؟ ما دستوری داریم به نام pwd که این دستور مسیر شمارو نشون میده ، توی مثال زیر فرض کنید داخل همون پوشه Download هستیم.
        </p>
        <pre id="Command">
            <code>
                pwd
                /home/amirroox/Download
            </code>
        </pre>
        <b>
            توجه کنید که دستور pwd مسیر شما رو از ریشه به دست میاره (ینی دقیقا از ریشه مسیریابی میکنه و path کامل رو در اختیارتون میزاره)
        </b>
        <!-- Slider -->
        <swiper-container>
            <swiper-slide>
                <img src="https://www.cyberciti.biz/media/new/faq/2011/03/pwd-command-line-used-for-output.png"
                     alt="pwd command" loading="lazy">
            </swiper-slide>
            <swiper-slide>
                <img src="https://phoenixnap.com/kb/wp-content/uploads/2021/12/show-pwd-help-file.png"
                     alt="pwd command" loading="lazy">
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
                یه لینک براتون گذاشتم که بیشتر با دستور pwd آشنا بشید:
            </p>
            <ol class="text-center">
                <li><a href="https://www.geeksforgeeks.org/pwd-command-in-linux-with-examples/">pwd Command in Linux with Examples</a></li>
            </ol>
            <br>
            <b>
                برای اینکه بیشتر با این دستور آشنا بشید ، حتما ترمینال رو توی مسیرهای مختلف باز کنید
                و چک کنید چه مسیری رو بهتون نمایش میده!
            </b>
        </div>
        <div class="CONTENT_COLOR">
            <h2>آزمون :</h2>
            <ol>
                <li>
                    اولین دایرکتوری توی لینوکس چیست ؟ و با چه علامتی نمایش داده میشود؟
                    <button quiz="1"></button>
                </li>
                <hr>
                <li>
                    دستوری که الان یاد گرفتید به چه دردی میخوره؟
                    <button quiz="2"></button>
                </li>
            </ol>
        </div>
    </div>
    <!-- End Reference & Quiz -->

    <!-- Start Next Lesson -->
    <?php
    Next_Lesson('cd-command','دستور cd');
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