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
        <h1>پوسته یا Shell در لینوکس</h1>
        <p>
            اولین بحثی که میخوایم در موردش صحبت کنیم ، پوسته (Shell) است ؛ ولی اصلا پوسته یعنی چی ؟
            شما وقتی لینوکس خودتون رو نصب میکنید از طریق برنامه ایی به نام ترمینال (توی ویندوز بهش میگن CMD) با هسته لینوکس ارتباط برقرار میکنید.
            و دستوراتی رو میتونید توی ترمینال (خط فرمان) وارد کنید. صد در صد تا حالا دیگه ترمینال رو یبار باز کردید و یچیزی شبیه مورد زیر مشاهده کردید :
        </p>
        <pre>
            <code>
                username@hostname:current_directory $

                Amirroox@Linux: /home/Desktop $
            </code>
        </pre>
        <p>
            خط اولی که نوشتم حالت کلی نمایشه ، و خط دومی که نوشتم توی ترمینال خودمه!
            به طور کلی توی ترمینال ، قسمت اول اسم یوزر میاد، بعد یه @ قرار میگیره و اسم هاست لینوکس میاد.
            بعد از اون هم یه دو نقطه قرار میگیره و مسیری که توش هستید نمایش داده میشه؛ و در آخر هم یه علامت دلار چاپ میشه (البته در پوسته های مختلف علامت های مختلفی وجود داره!) که بعد از اون میتونید
            دستورات خودتونو وارد کنید!
            <br>
            <b>
                توجه کنید که گفتم مسیری که توش هستید؛ مثلا اگه توی دسکتاپ یه پوشه بسازید به نام "فلان" و داخل این پوشه
                هم یه پوشه دیگه به نام "فلان 2" بسازید، اگه برید داخل پوشه "فلان 2" مسیری که توش هستید برابر میشه با : "دسکتاپ / فلان / فلان 2"
            </b>
            <br>
            حالا اینایی که گفتیم چه ربطی به پوسته داشت؟ کامپیوتر فقط 0 و 1 رو میفهمه و ماهم نمیتونیم تمام دستورات 0 و 1 رو حفظ کنیم!
            پس پوسته به وجود اومد تا بتونه کار مارو راحت کنه و دستوراتی که وارد میکنیم رو به زبان کاپیوتر (0 و 1) ترجمه کنه!
            <br>
            <b>
                پس به طور کلی Shell یعنی یه رابط کاربری بین کاربر و هسته لینوکس! یا بخوایم یکم بازترش کنیم، میتونیم بگیم
                یه قطعه نرم افزاره که به من و شما اجازه میده دسترسی مستقیم داشته باشیم به سیستم عامل!
            </b>
            <br>
            شما وقتی ترمینال روباز میکنید به طور خودکار پوسته Bash اجرا میشه (البته پوسته های مختلف دیگه ایی هم مثل zsh داریم، اما به طور پیشفرض اکثر توزیع های لینوکس از پوسته bash استفاده میکنن!)
            <br>
            حالا که فهمیدیم پوسته چیه بیاین اولین دستورمونو توی ترمینال بنویسیم :
        </p>
        <pre id="Command">
            <code>
                echo Hello World
                hello World
            </code>
        </pre>
        <p>
            فعلا زیاد درگیر echo نشید ، ولی در همین حد بدونید که اگه جلوی دستور echo هر چیزی رو وارد کنیم ، برامون چاپش میکنه!
            <br>
            <b>
                توجه کنید که به حروف بزرگ و کوچیکم حساسه! پس کلمه echo رو همینجوری که نوشتم بنویسید!
            </b>
        </p>

        <!-- Slider -->
        <swiper-container>
            <swiper-slide>
                <img src="https://d8it4huxumps7.cloudfront.net/uploads/images/640fed807bc17_diagram_1.jpg"
                     alt="Shell" loading="lazy">
            </swiper-slide>
            <swiper-slide>
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/cli_example.png"
                     alt="Shell" loading="lazy">
            </swiper-slide>
            <swiper-slide>
                <img src="https://static.javatpoint.com/linux/images/linux-bash.png"
                     alt="Bash" loading="lazy">
            </swiper-slide>
        </swiper-container>
    </div>

    <!-- Start Reference & Quiz -->
    <h1 class="md:hidden">منابع و آزمون</h1>
    <div id="referenceQuiz_lessons" nameSeason="<?= $name_file_season ?>" nameLesson="<?= $name_file ?>">
        <div class="CONTENT_COLOR">
            <h2>منابع مرتبط : </h2>
            <p>
                اینجا توضیخات و منابع تکمیلی رو براتون گذاشتم و همینطور نصب پوسته جدید روی لینوکس!
            </p>
            <ol class="text-center">
                <li><a href="https://sokanacademy.com/plus/mehrdad.mohammadi/shell-%DA%86%DB%8C%D8%B3%D8%AA-%D9%88-%DA%A9%D8%A7%D8%B1%D8%A8%D8%B1%D8%AF-%D8%A2%D9%86-%D8%AF%D8%B1-%D9%88%DB%8C%D9%86%D8%AF%D9%88%D8%B2-%D9%88-%D9%84%DB%8C%D9%86%D9%88%DA%A9%D8%B3-1003">شل چیست ؟</a></li>
                <li><a href="https://parsclick.net/article/%D9%86%D8%B5%D8%A8-%D9%88-%D8%B3%D9%88%D8%A7%D8%B1-%DA%A9%D8%B1%D8%AF%D9%86-zsh-%D8%A8%D8%B1-%D8%B1%D9%88%DB%8C-shell">نصب پوسته zsh</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Shell_(computing)">Shell (WikiPediA)</a></li>
                <li><a href="https://github.com/ohmyzsh/ohmyzsh">صفحه گیت هاب oh my zsh</a></li>
            </ol>
        </div>
        <div class="CONTENT_COLOR">
            <h2>آزمون :</h2>
            <ol>
                <li>
                    آیا ترمینال همان پوسته است ؟
                    <button quiz="1">مشاهده پاسخ</button>
                </li>
                <hr>
                <li>
                    فقط یدونه پوسته داریم؟ آیا میشه پوسته جدیدی نصب کرد؟ پوسته پیشفرض لینوکس چیه؟
                    <button quiz="2">مشاهده پاسخ</button>
                </li>
            </ol>
        </div>
    </div>
    <!-- End Reference & Quiz -->

    <!-- Start Next Lesson -->
    <?php
    Next_Lesson('pwd-command' , 'دستور pwd');
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
<script src="<?= MAIN_SERVER . 'assets/vendor/prism.js' ?>"></script>
</body>
</html>