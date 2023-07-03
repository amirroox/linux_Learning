$("#open-side-menu-btn").on("click" , function () {
    $("#side-menu").addClass('side-menu-enable');
    $('#cover-back').css("display" , 'unset');
})
$("#close-side-menu-btn , #cover-back").on("click" , function () {
    $("#side-menu").removeClass('side-menu-enable');
    $('#cover-back').css("display" , 'none');
})