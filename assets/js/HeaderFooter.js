/* Open & Close SideMenu */
$("#open-side-menu-btn").on("click" , function () {
    $("#side-menu").addClass("side-menu-enable");
    $("#cover-back").css("display" , "unset");
});
$("#close-side-menu-btn , #cover-back").on("click" , function () {
    $("#side-menu").removeClass("side-menu-enable");
    $("#cover-back").css("display" , "none");
});

/* Open & Close SubMenu In SideBar */
$(".openSubMenu").on("click" , function () {
    let submenu = $(this).find('ul');
    if(submenu.hasClass('subMenuD')) {
        submenu.removeClass('subMenuD');
    }
    else {
        submenu.addClass('subMenuD');
    }
});