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
        <h1>دستور cd</h1>
        <h2>(Changing Directory) - تغییر مسیر</h2>
        <p>
            خب تو درس قبلی فهمیدیم میتونیم مسیر حال حاضرمونو پیدا کنیم ولی چجوری میتونیم مسیرمونو تغییر بدیم؟
            توی ویندوز وقتی روی درایو یا پوشه ایی دوبار کلیک کنیم، واردش میشیم اما توی خط فرمان لینوکس که نمیتونیم روی چیزی کلیک کنیم! پس باید چیکار کنیم؟
            هیچی خیلی راحت از دستور cd استفاده میکنیم که مخفف Change Directory !
            <br>
            مثال زیر رو فرض کنید ، اول مسیر حال حاضرمون رو چک میکنیم و بعد میبینید چجوری وارد یه مسیر دیگه میشیم :
        </p>
        <pre id="Command">
            <code>
                pwd
                /home/amirroox
                cd Download
                pwd
                /home/amirroox/Download
            </code>
        </pre>
        <p>
            خب میبینید بعد از دستور cd یچیزی وارد کردیم و اون چیزی نیست جز جایی که میخوایم واردش بشیم! از قبل دیدیم که توی پوشه amirroox یه پوشه به نام Download وجود داره
            پس با دستور cd وارد اون پوشه شدیم و با دستور pwd چک کردیم که توی مسیر هستیم یا نه!
            <br>
            <b>
                بیاین یکم علمی تر بررسی کنیم! برای وارد شدن به یه مسیر توی لینوکس دوتا روش دارید که این زیر مشخصه :
            </b>
        </p>
        <ol class="md:mr-10 list-decimal">
            <li>
                اولین مورد رو که توی قسمت بالا دیدیم، یعنی هرجا که هستیم به صورت نسبی مسیر میدیم. مثلا توی home/amirroox هستیم
                و میخوایم وارد Download بشیم ، پس خیلی راحت فقط Download رو مینویسیم و واردش میشیم!
            </li>
            <li>
                دومین روش به صورت مطلق یا مستقیمه! مثلا فرض کنید توی آدرس etc/hosts هستید و میخواید وارد همون پوشه Download بشید،
                این دو آدرس ، آدرس های جدایی هستیند پس نمیشه مثل بالا فقط Download رو بزنیم، باید مسیر کامل رو بهش بدیم.
                یعنی بنویسیم cd /home/amirroox/Download با این دستور هم وارد پوشه Download میشیم.
            </li>
        </ol>
        <br>
        <b>
            توجه کنید که اگه توی مسیر etc/hosts باشید، یا باید برید عقب و آدرس پوشه موردنظرتون رو پیدا کنید و بعد از روش یک استفاده کنید یا اینکه فقط از روش دو به صورت ساده استفاده کنید.
        </b>
        <p>
            خب احتمالا خودتونم بگید که کلیک کردن خیلی ساده‌تر بود تا اینکه کل مسیرو خودمون وارد کنیم! لینوکس برای این سختی هم یه فکری کرده
            و چنتا علامت گذاشته برای میانبر، که این زیر میبنید:
        </p>
        <ol class="md:mr-10 list-decimal">
            <li>
                (.) (یه نقظه): نشان دهنده مسیر حال حاضر!
            </li>
            <li>
                (..) (دوتا نقظه): برگشتن به پوشه والد (مثلا amirroox والد پوشه Download است!)
            </li>
            <li>
                (~) : مستقیم شما رو به دایرکتوری home/amirroox میبره (صد در صد اسم یوزر شما یچیز دیگه است ، ولی این علامت به صورت پیشفرض شما رو به مسیر یوزر میبره)
            </li>
            <li>
                (-) (خط تیره): با استفاده از خط تیره هرجایی که قبلا بودید ، به همونجا برمیگردید (مثلا اگه توی مسیر etc/hosts باشید ، بعد وارد مسیر home/amirroox/Download بشید با زدن - cd دوباره وارد etc/hosts میشید!)
            </li>
        </ol>
        <b>
            مثال های بالا رو این زیر هم نوشتم تا خروجیش رو ببینید :
        </b>
        <pre>
            <code>
                # استفاده از نقطه (.)
                pwd
                home/amirroox
                cd .
                pwd
                home/amirroox
                # میبینید که مسیر هیچ تغییری نکرد

                # استفاده از دو نقطه (..)
                pwd
                home/amirroox
                cd ..
                pwd
                home
                # میبینید که ایندفعه یه خونه عقب رفت

                # استفاده از مدک (~)
                pwd
                home
                cd ~
                pwd
                home/amirroox
                # میبنید که ایندفعه وارد یوزر شد

                # استفاده از خط تیره (-)
                pwd
                home
                cd etc/group
                pwd
                etc/group
                cd -
                pwd
                home
                # میبیند که بدون توجه به مسیر دقیقا به مسیر قبلی رفت
            </code>
        </pre>
        <b>
            حتما حتما این دستورات رو انجام بدید تا قشنگ ملکه ذهنتون بشه!
        </b>

    </div>

    <!-- Start Reference & Quiz -->
    <h1 class="md:hidden">تمرین و آزمون</h1>
    <div id="referenceQuiz_lessons" nameSeason="<?= $name_file_season ?>" nameLesson="<?= $name_file ?>">
        <div class="CONTENT_COLOR">
            <h2>تمرینات مرتبط : </h2>
            <p>
                یبار دستور cd رو بدون هیچ چیزی اجرا کنید! یعنی خالی بنویسید cd و بعد ببینید چه اتفاقی میوفته!
                و به چه مسیری انتقال پیدا میکنید!
            </p>
            <p>
                توی مسیر های مختلف برید و فایل ها و پوشه بندی های مختلف رو مشاهده کنید. (برای خودتون بازی کنید و هی توی پوشه ها جلو عقب برید تا دستتون عادت کنه به این دستور ، چون خیلی استفاده میشه!)
            </p>
        </div>
        <div class="CONTENT_COLOR">
            <h2>آزمون :</h2>
            <ol>
                <li>
                    فرض کنید توی path یا آدرس home/amir هستید و میخواید وارد مسیر root بشید ، باید چیکار کنید ؟
                    <button quiz="1"></button>
                </li>
                <hr>
                <li>
                    فرض کنید توی همون مثال بالا میخواید یه خونه برید عقب! چیکار میکنید؟
                    <button quiz="2"></button>
                </li>
            </ol>
        </div>
    </div>
    <!-- End Reference & Quiz -->

    <!-- Start Next Lesson -->
    <?php
        Next_Lesson('ls-command','دستور ls');
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