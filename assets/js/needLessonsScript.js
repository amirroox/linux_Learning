/* Animate Scroll H1 */
$('body,html').animate({
    scrollTop: $('#end_menu').offset().top
}, 800);

/* All Link a */
let aLink = $('#referenceQuiz_lessons a');
aLink.attr("target" , "_blank");
aLink.attr("rel" , "noopener noreferrer nofollow");

/* Ajax For Answer Quiz */
$('#referenceQuiz_lessons button').on('click' , function () {
    let Season = document.getElementById('referenceQuiz_lessons').getAttribute("nameSeason");
    let Lesson = document.getElementById('referenceQuiz_lessons').getAttribute("nameLesson");
    let Quiz = this.getAttribute("quiz");
    $.ajax({
        method: "POST",
        data: {Season : Season , Lesson : Lesson , Quiz : Quiz},
        url: "../../AjaxHandler.php",
        success: function (res) {
            Swal.fire({
                showClass: {
                    popup: 'animate__animated animate__swing'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                },
                backdrop: `
                    rgba(0,0,123,0.4)
                    url("../../../assets/img/anim.gif")
                    left top
                    no-repeat
                `,
                scrollbarPadding: false,
                width:'90%' ,
                position: 'center',
                icon: 'success',
                title: 'پاسخ',
                text: res,
                showConfirmButton: false,
            })
        },
        error: function () {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'یه جایی به مشکل خوردیم!',
                showConfirmButton: false,
                timer: 1500
            })
        }
    });
});