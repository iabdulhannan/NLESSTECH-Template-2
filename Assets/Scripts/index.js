window.onload = function () {


    $(document).ready(function () {

        /*Navigation Bar*/

        var tabs = $('.tabs');
        var activeItem = tabs.find('.active');
        var activeWidth = activeItem.innerWidth();
        $(".selector").css({
            "left": activeItem.position.left + "px",
            "width": activeWidth + "px"
        });

        $(".tabs").on("click", "a", function (e) {
            e.preventDefault();
            $('.tabs a').removeClass("active");
            $(this).addClass('active');
            var activeWidth = $(this).innerWidth();
            var itemPos = $(this).position();
            $(".selector").css({
                "left": itemPos.left + "px",
                "width": activeWidth + "px"
            });
        });



        $(document).scroll(function () {
            var y = $(this).scrollTop();
            let height = $('section:first-of-type').height();
            if (y > height) {
                $('.socialIconsDiv').fadeIn();
            } else {
                $('.socialIconsDiv').fadeOut();
            }


        });


    })



}
