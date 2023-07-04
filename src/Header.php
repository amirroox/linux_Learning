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
    <aside id="side-menu" class="bg-gray-500 text-center pb-10">
        <img id="close-side-menu-btn" class="m-3 cursor-pointer inline mb-6" src="<?= MAIN_SERVER . 'assets/img/close-menu.svg' ?>"
             width="45" height="45" alt="Close-Menu" title="Close-Menu">
        <ul class="space-y-4">
            <li class="text-sky-400 sm:hidden text-xl" style="-webkit-text-stroke: 1px white;"><a href="<?= MAIN_SITE ?>" target="_blank">همه نقشه های راه</a></li>
            <hr class="my-3 w-1/2 m-auto border-sky-400 sm:hidden">
            <li class="openSubMenu cursor-pointer text-xl text-green-300">
                مفاهیم ابتدایی
                <br><br>
                <ul class="subMenuD space-y-3 text-base text-white">
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">از اینجا شروع کنید</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">خط فرمان</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">کار با متن ها</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">کار پیشرفته با متن ها</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">مدیریت کاربران</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">سطوح دسترسی</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">فرایند ها</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">پیکج ها</a></li>
                </ul>
            </li>
            <hr class="my-3 w-1/2 m-auto border-sky-400">
            <li class="openSubMenu cursor-pointer text-xl text-green-300">
                مفاهیم میانی
                <br><br>
                <ul class="subMenuD space-y-3 text-base text-white">
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">دستگاه ها</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">فایل های سیستمی</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">بوت در لینوکس</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">هسته لینوکس</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">مقدار دهی اولیه</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">نظارت بر فرایند ها</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">ورود به سیستم</a></li>
                </ul>
            </li>
            <hr class="my-3 w-1/2 m-auto border-sky-400">
            <li class="openSubMenu cursor-pointer text-xl text-green-300">
                مفاهیم شبکه
                <br><br>
                <ul class="subMenuD space-y-3 text-base text-white">
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">اشتراک شبکه</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">مبانی شبکه</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">زیر شبکه</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">مسیریابی</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">پیکربندی شبکه</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">مشکل یابی</a></li>
                    <li class="hover:text-sky-400"><a href="javascript:void(0)">دی ان اس</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</header>