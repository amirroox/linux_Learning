<?php
include_once "../../../Constants.php" ;
$name_file = basename(__DIR__);
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
<main class="p-4 text-white text-center grid grid-cols-1 md:grid-cols-5 gap-4">
    <div class="md:hidden">
        <h1 class="text-2xl">لیست فهرست</h1>
    </div>
    <div>
        <ol class="space-y-3">
            <li class="bg-red-500 py-1 hover:bg-sky-500 hover:text-white duration-500"><a href="javascript:void(0)">تاریخچه</a></li>
            <li class="bg-red-500 py-1 hover:bg-sky-500 hover:text-white duration-500"><a href="javascript:void(0)">انتخاب توزیع لینوکس</a></li>
            <li class="bg-red-500 py-1 hover:bg-sky-500 hover:text-white duration-500"><a href="javascript:void(0)">دبیان - Debian</a></li>
            <li class="bg-red-500 py-1 hover:bg-sky-500 hover:text-white duration-500"><a href="javascript:void(0)">رد هت - Red Hat</a></li>
            <li class="bg-red-500 py-1 hover:bg-sky-500 hover:text-white duration-500"><a href="javascript:void(0)">اوبونتو - Ubuntu</a></li>
            <li class="bg-red-500 py-1 hover:bg-sky-500 hover:text-white duration-500"><a href="javascript:void(0)">فدورا - Fedora</a></li>
            <li class="bg-red-500 py-1 hover:bg-sky-500 hover:text-white duration-500"><a href="javascript:void(0)">لینوکس مینت - Linux mint</a></li>
            <li class="bg-red-500 py-1 hover:bg-sky-500 hover:text-white duration-500"><a href="javascript:void(0)">جنتو - Gentoo</a></li>
            <li class="bg-red-500 py-1 hover:bg-sky-500 hover:text-white duration-500"><a href="javascript:void(0)">آرچ لینوکس - Arch Linux</a></li>
            <li class="bg-red-500 py-1 hover:bg-sky-500 hover:text-white duration-500"><a href="javascript:void(0)">OpenSUSE</a></li>
        </ol>
    </div>
    <div class="md:hidden">
        <h1 class="text-2xl">توضیحات</h1>
    </div>
    <div class="md:col-span-4 bg-red-300 border-4 border-red-500 md:max-h-fit text-right py-3 px-5 text-black">
        <p>سلام بچه ها</p>
    </div>
</main>
<!-- End Main -->

<!-- Jquery File -->
<script src="<?= MAIN_SERVER . 'assets/vendor/jquery-3.7.0.min.js'?>"></script>
<!-- Header And Footer Script -->
<script src="<?= MAIN_SERVER . 'assets/js/HeaderFooter.js'?>"></script>
</body>
</html>