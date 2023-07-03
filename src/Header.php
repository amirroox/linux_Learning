<header class="py-4 bg-gray-700">
    <div class="text-sky-400 flex justify-between items-center">
        <div id="open-side-menu-btn">
            <img class="mr-7 cursor-pointer inline" src="<?= MAIN_SERVER . 'assets/img/side-menu.svg' ?>"
                 width="60" height="60" alt="Menu" title="Menu">
            <span class="cursor-pointer text-xl"> Menu </span>
        </div>
        <div class="mx-7 text-3xl hidden sm:block text-red-500"><a href="<?= MAIN_SITE ?>" target="_blank">All Road Map</a></div>
        <div class="ml-4 sm:ml-7 text-xl sm:text-2xl"> <a href="<?= MAIN_SERVER ?>"> Linux Learn </a> </div>
    </div>
    <div id="cover-back"></div>
    <aside id="side-menu" class="bg-gray-500 text-center">
        <img id="close-side-menu-btn" class="m-3 cursor-pointer inline mb-6" src="<?= MAIN_SERVER . 'assets/img/close-menu.svg' ?>"
             width="45" height="45" alt="Close-Menu" title="Close-Menu">
        <ul class="space-y-4">
            <li class="text-sky-400 sm:hidden"><a href="<?= MAIN_SITE ?>" target="_blank">All Road Map</a></li>
            <li><a href="javascript:void(0)">از اینجا شروع کنید</a></li>
        </ul>
    </aside>
</header>