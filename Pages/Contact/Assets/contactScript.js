let errorExists;
let mailSent;

function setErrorStatus(error) {
    errorExists = error;
}

function setSentStatus(status) {
    mailSent = status;
}

$(document).ready(function () {

    let emptyError = false;

    $('button[type="submit"]').click(function (event) {

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
        $("#error").animate({
            maxHeight: '40px',
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
        $("#sent").animate({
            maxHeight: '40px',
            paddingTop: '0.5rem',
            paddingBottom: '0.5rem'
        }, 1000);

    }


})

