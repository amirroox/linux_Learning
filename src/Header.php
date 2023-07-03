<header class="py-4 bg-gray-700">
    <div class="text-sky-400 flex justify-between items-center" id="head">
        <div id="open-side-menu-btn">
            <img class="mr-4 cursor-pointer inline" src="<?= MAIN_SERVER . 'assets/img/side-menu.svg' ?>"
                 width="60" height="60" alt="Menu" title="Menu">
            <span class="cursor-pointer text-xl"> Menu </span>
        </div>
        <div class="mx-7 text-3xl hidden sm:block text-red-500 hover:text-blue-700 duration-1000"><a href="<?= MAIN_SITE ?>" target="_blank">همه نقشه راه ها</a></div>
        <div class="ml-4 sm:ml-7 text-xl sm:text-2xl"> <a href="<?= MAIN_SERVER ?>"> Linux Learn </a> </div>
    </div>
    <div id="cover-back"></div>
    <aside id="side-menu" class="bg-gray-500 text-center">
        <img id="close-side-menu-btn" class="m-3 cursor-pointer inline mb-6" src="<?= MAIN_SERVER . 'assets/img/close-menu.svg' ?>"
             width="45" height="45" alt="Close-Menu" title="Close-Menu">
        <ul class="space-y-4">
            <li class="text-sky-400 sm:hidden"><a href="<?= MAIN_SITE ?>" target="_blank">همه نقشه های راه</a></li>
            <li><a href="javascript:void(0)">از اینجا شروع کنید</a></li>
        </ul>
    </aside>
</header>