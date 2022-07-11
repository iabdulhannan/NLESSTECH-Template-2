let errorExists;
let mailSent;

function setErrorStatus(error) {
    errorExists = error;
}

function setSentStatus(status) {
    mailSent = status;
}

$(document).ready(function () {


    $('button[type="submit"]').click(function (event) {
        let emptyError = false;

        $('input').each(function () {
            if ($(this).val() == '' || $(this).val() == null) {
                $(this).closest('div').addClass('textField-error-input')
                emptyError = true
            }
        })


        if ($('textarea').val() == '' || $('textarea').val() == null) {
            $('textarea').closest('div').addClass('textArea-error-input')
            emptyError = true
        }


        if (emptyError) {
            showError("Please provide all the details")
            event.preventDefault()
            console.log(emptyError)
        }

    })

    if (errorExists) {
        showError("Please provide all the details")
    }

    /*
        function enableSubmit() {
            let error = false;

            $('input').each(function () {
                if ($(this).val() == '' || $(this).val() == null) {
                    error = true
                }
            })

            if ($('textarea').val() == '' || $('textarea').val() == null) {
                error = true
            }

            if (!error) {
                $('button[type="submit"]').removeAttr('disabled').removeClass('cursor-not-allowed bg-gray-200').addClass('cursor-pointer bg-gray-400 hover:bg-red-500')
            } else {
                $('button[type="submit"]').attr('disabled', true).addClass('cursor-not-allowed bg-gray-200').removeClass('cursor-pointer bg-gray-400 hover:bg-red-500')
            }

        }
    */


    function showError(text) {
        $("#error").removeClass('hidden').animate({
            maxHeight: '10rem',
            paddingTop: '0.5rem',
            paddingBottom: '0.5rem'
        }, 1000);

        $('#error > label').text(text)
    }


    $('input').add('textarea').on('input', function () {
        if ($(this).closest('div').hasClass('textArea-error-input')) {
            $(this).closest('div').removeClass('textArea-error-input')
            return
        } else if ($(this).closest('div').hasClass('textField-error-input')) {
            $(this).closest('div').removeClass('textField-error-input')
            return
        }
        // enableSubmit()
    })

    if (mailSent) {
        $("#sent").removeClass('hidden').animate({
            maxHeight: '40px',
            paddingTop: '0.5rem',
            paddingBottom: '0.5rem'
        }, 1000);
    } else if (mailSent == 'false') {
        showError("Something went wrong, please try again. If the issue persists, email us at info@nlesstech.com or try again later")
    }


    let address =
        '<p class="text-red-600 text-justify"><span class="text-black">Address: </span>Sheikh\n' +
        'Zayed Road,\n' +
        'Trade Centre 1\n' +
        'Aspin Commercial Tower, Office 2701, Dubai, UAE</p>';

    let phone = '<p><span>Phone:</span> <a href="tel://+971557064386">+971557064386</a></p>';

    let email =
        '<p>\n' +
        '   <span>Email:</span>\n' +
        '   <a href="mailto:info@nlesstech.com">\n' +
        '   <img src="Assets/info@nlesstech.com.svg" width="168" class="inline">\n' +
        '   </a>\n' +
        '</p>';

    $('.icon').click(function () {
        if ($(window).width() <= 640) {

            if ($('#iconDetails').css('max-height') != 0) {
                $('#iconDetails').animate({
                    maxHeight: '0',
                }, 1000)
                showIconDetails($(this), 1000)
            } else
                showIconDetails($(this), 0)
        }
    })

    function showIconDetails(element, timeout) {

        setTimeout(() => {

            if (element.attr('name') == 'emailAddressLabel') {
                $('#iconDetails').html(email)
            } else if (element.attr('name') == 'officeAddressLabel') {
                $('#iconDetails').html(address)
            } else if (element.attr('name') == 'phoneNumberLabel') {
                $('#iconDetails').html(phone)
            }

            $('#iconDetails').animate({
                maxHeight: '20rem',
            }, 1000)

            $('.icon').each(function () {
                $(this).addClass('bg-gray-400').removeClass('bg-red-500')
            })

            element.removeClass('bg-gray-400').addClass('bg-red-500')

        }, timeout);
    }


})

