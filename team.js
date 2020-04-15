// if (window.matchMedia("(max-width:738px)").matches) {


//     $(document).ready(function() {
//         $(".post").click(function() {
//             $(".pole").hide();
//             $(".holder").toggle();
//         });
//     });

//     /* The viewport is less than, or equal to, 700 pixels wide */
//     $(document).ready(function() {
//         $(".adv").click(function() {
//             $(".pole").hide();
//             $(".advisers").toggle();
//         });
//     });
//     $(document).ready(function() {
//         $(".mark").click(function() {
//             $(".pole").hide();
//             $(".market").toggle();
//         });
//     });
//     $(document).ready(function() {
//         $(".soc").click(function() {
//             $(".pole").hide();
//             $(".social").toggle();
//         });
//     });
//     $(document).ready(function() {
//         $(".tech").click(function() {
//             $(".pole").hide();
//             $(".technical").toggle();
//         });
//     });
//     $(document).ready(function() {
//         $(".eve").click(function() {
//             $(".pole").hide();
//             $(".events").toggle();
//         });
//     });
//     $(document).ready(function() {
//         $(".lao").click(function() {
//             $(".pole").hide();
//             $(".log").toggle();
//         });
//     });
//     $(document).ready(function() {
//         $(".ct").click(function() {
//             $(".pole").hide();
//             $(".creative").toggle();
//         });
//     });
//     $(document).ready(function() {
//         $(".ip").click(function() {
//             $(".pole").hide();
//             $(".internal").toggle();
//         });
//     });
//     $(document).ready(function() {
//         $(".dt").click(function() {
//             $(".pole").hide();
//             $(".design").toggle();
//         });
//     });
//     $(document).ready(function() {
//         $(".et").click(function() {
//             $(".pole").hide();
//             $(".external").toggle();

//         });
//     });
// }
$(window).scroll(function() {
    var theta = $(window).scrollTop() / 720 % Math.PI;
    $('.kylogo').css({ transform: 'rotate(' + theta + 'rad)' });
});