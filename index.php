<?php include_once "Constants.php" ?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <!-- Main All Meta + Tailwind -->
    <?php include MAIN_DIR . "assets/css/MainMeta.php" ?>
    <title>Linux Learn</title>
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        #HeroGrid div {
            border-radius: 10px;
            overflow: hidden;
        }
        #HeroGrid img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .Lessons div.box{
            /*background-color: white;*/
            transition: all .7s;
            padding: 1.5rem 2rem;
            border-radius: .9rem;
            box-shadow: 1px 1px 5px white;
        }
        .Lessons div.box:hover{
            background-color: lightgray;
            color: black;
            box-shadow: -1px -1px 5px white;
        }
    </style>
</head>
<body class="text-white MAIN-COLOR">
    <!-- Start Header -->
    <?php include MAIN_DIR . "src/Header.php" ?>
    <!-- End Header -->

    <!-- Start Main -->
    <main class="m-7 text-center space-y-7">
        <div class="text-center grid grid-cols-4 gap-4" id="HeroGrid">
            <div class="col-span-2">
                <img src="<?= MAIN_SERVER . 'assets/img/Hero/linux1.jpg' ?>" alt="Linux">
            </div>
            <div class="col-span-2">
                <img src="<?= MAIN_SERVER . 'assets/img/Hero/linux2.jpg' ?>" alt="Linux">
            </div>
            <div class="sm:hidden">
                <img src="<?= MAIN_SERVER . 'assets/img/Hero/linux3.jpg' ?>" alt="Linux">
            </div>
            <div class="col-span-2 sm:hidden">
                <img src="<?= MAIN_SERVER . 'assets/img/Hero/linux4.jpg' ?>" alt="Kali Linux">
            </div>
            <div class="sm:hidden">
                <img src="<?= MAIN_SERVER . 'assets/img/Hero/linux5.webp' ?>" alt="Linux">
            </div>
            <div>
                <img src="<?= MAIN_SERVER . 'assets/img/Hero/linux9.jpg' ?>" alt="debian">
            </div>
            <div>
                <img src="<?= MAIN_SERVER . 'assets/img/Hero/linux7.webp' ?>" alt="Kali Linux">
            </div>
            <div class="col-span-2">
                <img src="<?= MAIN_SERVER . 'assets/img/Hero/linux8.jpg' ?>" alt="Arch Linux">
            </div>
        </div>
        <h1 class="text-4xl">به صورت رایگان لینوکس یاد بگیرید !</h1>
        <hr class="my-3 w-1/2 m-auto border-sky-400">
        <h2 class="text-2xl">مفاهیم ابتدایی :</h2>
            <div class="w-full md:w-4/5 Lessons grid grid-cols-1 md:grid-cols-4 gap-y-7 md:gap-x-4 m-auto">
                <div class="box SEC-COLOR">
                    <a href="Lessons/GettingStart">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Getting Start.png' ?>" alt="Getting Started">
                        <h3 class="text-xl mb-2">Getting Started</h3>
                        <h3 class="text-xl mb-2">از اینجا شروع کنید</h3>
                        <p>اصلا لینوکس چیه؟چه توزیعی رو برای نصب انتخاب کنیم؟</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Command Line.png' ?>" alt="Command Line">
                        <h3 class="text-xl mb-2">Command Line</h3>
                        <h3 class="text-xl mb-2">خط فرمان</h3>
                        <p>اصول و دستورات ابتدایی خط فرمان رو یاد میگیریم.</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Work On Text.png' ?>" alt="Work On Text">
                        <h3 class="text-xl mb-2">Work On Text</h3>
                        <h3 class="text-xl mb-2">کار با متن ها</h3>
                        <p>دستکاری و چیزای جدید در مورد دستورات در لینوکس!</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Text-Fu Pro.png' ?>" alt="Text-Fu Pro">
                        <h3 class="text-xl mb-2">Text-Fu Pro</h3>
                        <h3 class="text-xl mb-2">کار پیشرفته با متن ها</h3>
                        <p>یکمی پیشرفته‌تر در مورد متن ها و ویرایشگر ها میفهمیم.</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/User Management.png' ?>" alt="User Management">
                        <h3 class="text-xl mb-2">User Management</h3>
                        <h3 class="text-xl mb-2">مدیریت کاربران</h3>
                        <p>با انواع یوزر ها و مدیریت اونها آشنا میشیم.</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Permissions.png' ?>" alt="Permissions">
                        <h3 class="text-xl mb-2">Permissions</h3>
                        <h3 class="text-xl mb-2">سطوح دسترسی</h3>
                        <p>درباره سطوح دسترسی و مجوز ها در لینوکس آشنا میشیم.</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Processes.png' ?>" alt="Processes">
                        <h3 class="text-xl mb-2">Processes</h3>
                        <h3 class="text-xl mb-2">فرایند ها</h3>
                        <p>با فرایند های در حال اجرا لینوکس آشنا میشیم.</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Packages.png' ?>" alt="Packages">
                        <h3 class="text-xl mb-2">Packages</h3>
                        <h3 class="text-xl mb-2">پکیج ها</h3>
                        <p>همه چیز رو در مورد مدیریت بسته ها یاد میگیرم.</p>
                    </a>
                </div>
            </div>
        <h2 class="text-2xl">مفاهیم میانی :</h2>
            <div class="w-full md:w-4/5 Lessons grid grid-cols-1 md:grid-cols-4 gap-4 m-auto">
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Devices.png' ?>" alt="Devices">
                        <h3 class="text-xl mb-2">Devices</h3>
                        <h3 class="text-xl mb-2">دستگاه ها</h3>
                        <p>در مورد تعامل بین دستگاه های لینوکس یاد میگیرم.</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/The Filesystem.png' ?>" alt="The Filesystem">
                        <h3 class="text-xl mb-2">The Filesystem</h3>
                        <h3 class="text-xl mb-2">فایل های سیستمی</h3>
                        <p>با انواع مختلف فایل های سیستمی و موارد دیگر آشنا میشیم.</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Boot The System.png' ?>" alt="Boot The System">
                        <h3 class="text-xl mb-2">Boot The System</h3>
                        <h3 class="text-xl mb-2">بوت در لینوکس</h3>
                        <p>با مراحل بوت و آغاز کار لینوکس آشنا میشیم.</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Kernel.png' ?>" alt="kernel">
                        <h3 class="text-xl mb-2">Kernel</h3>
                        <h3 class="text-xl mb-2">هسته لینوکس</h3>
                        <p>در مورد کرنل و نحوه کار باهاش آشنا میشیم.</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Init.png' ?>" alt="Init">
                        <h3 class="text-xl mb-2">Init</h3>
                        <h3 class="text-xl mb-2">مقدار دهی اولیه</h3>
                        <p>با سیستم های مختلف init، SysV، Upstart و systemd آشنا میشیم.</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Process Utilization.png' ?>" alt="Process Utilization">
                        <h3 class="text-xl mb-2">Process Utilization</h3>
                        <h3 class="text-xl mb-2">نظارت بر فرایند ها</h3>
                        <p>نظارت بر منابع و موارد مربوط بهش رو یاد میگیریم.</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Logging.png' ?>" alt="Logging">
                        <h3 class="text-xl mb-2">Logging</h3>
                        <h3 class="text-xl mb-2">گزارش گیری</h3>
                        <p>در مورد لاگ ها و گزارش های لینوکس آشنا میشیم.</p>
                    </a>
                </div>
            </div>
        <h2 class="text-2xl">مفاهیم شبکه :</h2>
            <div class="w-full md:w-4/5 Lessons grid grid-cols-1 md:grid-cols-4 gap-4 m-auto">
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Network Sharing.png' ?>" alt="Network Sharing">
                        <h3 class="text-xl mb-2">Network Sharing</h3>
                        <h3 class="text-xl mb-2">اشتراک شبکه</h3>
                        <p>با موارد مربوط به اشتراک گذاری شبکه در لینوکس آشنا میشیم.</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Network Basics.png' ?>" alt="Network Basics">
                        <h3 class="text-xl mb-2">Network Basics</h3>
                        <h3 class="text-xl mb-2">مبانی شبکه</h3>
                        <p>با اصول اولیه شبکه آشنا میشیم.</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Subnetting.png' ?>" alt="Subnetting">
                        <h3 class="text-xl mb-2">Subnetting</h3>
                        <h3 class="text-xl mb-2">زیرشبکه</h3>
                        <p>با سابنتینگ و ساب نت ماسک آشنا میشیم.</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Routing.png' ?>" alt="Routing">
                        <h3 class="text-xl mb-2">Routing</h3>
                        <h3 class="text-xl mb-2">مسیریابی</h3>
                        <p>در مورد مسیریابی پیکج ها در لینوکس بیشتر آشنا بشیم.</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Network Config.png' ?>" alt="Network Config">
                        <h3 class="text-xl mb-2">Network Config</h3>
                        <h3 class="text-xl mb-2">پیکربندی شبکه</h3>
                        <p>چجوری در لینوکس شبکه کانفیگ کنیم ؟</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/Troubleshooting.png' ?>" alt="Troubleshooting">
                        <h3 class="text-xl mb-2">Troubleshooting</h3>
                        <h3 class="text-xl mb-2">مشکل یابی</h3>
                        <p>در مورد عیب یابی در شبکه بیشتر یاد بگیریم!</p>
                    </a>
                </div>
                <div class="box SEC-COLOR">
                    <a href="#">
                        <img class="mb-5" src="<?= MAIN_SERVER . 'assets/img/Lessons/DNS.png' ?>" alt="DNS">
                        <h3 class="text-xl mb-2">DNS</h3>
                        <h3 class="text-xl mb-2">دی ان اس</h3>
                        <p>هرچیزی که در مورد DNS باید بدونید.</p>
                    </a>
                </div>
            </div>
    </main>
    <!-- End Main -->

    <!-- Start Footer -->
    <?php include MAIN_DIR . "src/Footer.php" ?>
    <!-- End Footer -->

    <!-- Jquery File -->
    <script src="<?= MAIN_SERVER . 'assets/vendor/jquery-3.7.0.min.js'?>"></script>
    <!-- Header And Footer Script -->
    <script src="<?= MAIN_SERVER . 'assets/js/HeaderFooter.js'?>"></script>
</body>
</html>