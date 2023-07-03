<?php include_once "Constants.php" ?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <!-- Main All Meta + Tailwind -->
    <?php include MAIN_DIR . "assets/css/MainMeta.php" ?>
    <title>Linux Learn</title>
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-gray-800 text-white">
    <!-- Header -->
    <?php include MAIN_DIR . "src/Header.php" ?>

    <!-- Footer -->
    <?php include MAIN_DIR . "src/Footer.php" ?>

    <!-- Jquery File -->
    <script src="<?= MAIN_SERVER . 'assets/vendor/jquery-3.7.0.min.js'?>"></script>
    <!-- Header And Footer Script -->
    <script src="<?= MAIN_SERVER . 'assets/js/HeaderFooter.js'?>"></script>
</body>
</html>