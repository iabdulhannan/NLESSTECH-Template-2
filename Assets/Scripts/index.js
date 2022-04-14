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


        /*Burger Menu*/
        $('#nav-icon3').click(function () {
            $(this).toggleClass('open');

            if ($('#emergerMenu').hasClass("fixed")) {
                $('#emergerMenu').removeClass("fixed").addClass("absolute")
                $('#emergerMenu').animate({
                    right: "100%"
                }, 1000)

            } else {

                $('#emergerMenu').animate({
                    right: "0"
                }, 1000).addClass("fixed").removeClass("absolute")
            }

        });

        $('#emergerMenu a').click(function () {
            $('#emergerMenu').removeClass("fixed").addClass("absolute")
            $('#emergerMenu').animate({
                right: "100%"
            }, 1000).removeClass("menuExpanded")

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
