/* Open & Close SideMenu */
$("#open-side-menu-btn").on("click" , function () {
    $("#side-menu").addClass("side-menu-enable");
});
$("#close-side-menu-btn").on("click" , function () {
    $("#side-menu").removeClass("side-menu-enable");
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