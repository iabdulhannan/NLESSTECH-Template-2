<?php

$errorExists = false;
$mailSent = false;

if (isset($_POST['sendMessage'])) {

    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])) {
        $errorExists = true;
        echo '1';
    } else {
        $mailSent = true;
    }

}

?>

<!doctype html>
<html lang="en">
<head>
    <title>ENDLESSTECH - Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../../Assets/Stylesheets/Tailwind.css" rel="stylesheet">
    <link href="../../Assets/Stylesheets/index.css" rel="stylesheet">
    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <link href="Assets/contact.css" rel="stylesheet">
    <script src="Assets/contactScript.js"></script>
    <script>
        setErrorStatus(<?php echo json_encode($errorExists); ?>);
        setSentStatus(<?php echo json_encode($mailSent); ?>);
    </script>
</head>
<style>
    :root {
        --seaGreen: rgba(49, 150, 156, 1);
        --nLessRed: #DC2626; /*text-red-600*/
        --nLessGray: rgb(156, 163, 175);
        --nLessDarkGray: rgb(107, 114, 128);
    }


    .icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: rgb(107, 114, 128);
        margin: 0 auto 20px;
    }

    .icon span {
        font-size: 20px;
        color: #fff;
    }

    p a {
        color: #DC2626;
    }

    .contact-wrap {
        background: #fff;
    }

    input:focus {
        outline: none;
        border-color: black;
    }

    textarea:focus {
        outline: none;
    }

    #message {
        resize: vertical;
    }

    textarea {
        overflow: auto;
        resize: vertical;
    }

</style>
<body>
<h1 class="text-black p-4 flex items-center gap-x-2 cursor-pointer" style="background-color: #f0f0f0"
    onclick="history.back()">
    <span class="text-2xl">&#10094;</span>
    <a href="../../index.html">
        Back
    </a>
</h1>
<section class="md:py-8 md:px-28 bg-gray-50" style="background-color: #f0f0f0">
    <div class="container lg:px-40 px-2 md:px-20 mr-auto ml-auto">
        <div class="flex justify-center mb-10">
            <div class="md:w-1/2 text-center mb-5">
                <h2 class="text-3xl">Contact Us </h2>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="md:w-full">
                <div class="w-full">

                    <!--					Icons-->
                    <div class="grid grid-cols-12 mb-2">

                        <div class="col-span-12 sm:col-span-12 md:col-span-4">
                            <div class="mb-20 w-full text-center">
                                <div class="icon flex items-center justify-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text">
                                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">
                                            <img src="Assets/info@nlesstech.com.svg" width="168" class="inline">
                                        </a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-12 md:col-span-4">
                            <div class="mb-20 w-full text-center">
                                <div class="icon flex items-center justify-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text-center">
                                    <p class="text-red-600 text-center"><span class="text-black">Address: </span>Sheikh
                                        Zayed Road,
                                        Trade Centre 1
                                        Aspin Commercial Tower, Office 2701,Dubai, UAE</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-12 md:col-span-4">
                            <div class="mb-20 w-full text-center">
                                <div class="icon flex items-center justify-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text">
                                    <p><span>Phone:</span> <a href="tel://971557064386">+971557064386</a></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--					Form-->
                    <div class="flex flex-wrap mx-0 bg-white">
                        <form method="post" class="w-full md:w-3/5">
                            <div class="contact-wrap w-full md:p-5 p-4">
                                <h4 class="mb-4 pl-4 text-xl">Please fill in the details</h4>

                                <div class="bg-red-100 m-4 rounded flex items-center px-2 text-sm overflow-hidden"
                                     id="error" style="max-height: 0">
                                    <div class="mx-5">
                                        <img src="Assets/exclamation-mark.png" width="20">
                                    </div>
                                    <label class="text-red-600"></label>
                                </div>

                                <div class="bg-green-100 m-4 rounded px-2 flex items-center text-sm overflow-hidden"
                                     id="sent" style="max-height: 0">
                                    <div class="mx-5">
                                        <img src="Assets/tick.png" width="20">
                                    </div>
                                    <label class="text-green-600 ">Email Sent Successfully</label>
                                </div>


                                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                    <div class="flex flex-wrap">

                                        <div class="w-full lg:w-1/2 px-4 py-2">
                                            <div class="textField-label-content mb-4 w-full">
                                                <input class="textField" type="text" placeholder=" " id="nameID"
                                                       name="name">
                                                <label class="textField-label">Name</label>
                                            </div>
                                        </div>


                                        <div class="w-full lg:w-1/2 px-4 py-2">

                                            <div class="textField-label-content mb-4 w-full">
                                                <input class="textField" type="email" placeholder=" " id="emailID"
                                                       name="email">
                                                <label class="textField-label">Email</label>
                                            </div>

                                        </div>

                                        <div class="w-full px-4 py-2">
                                            <div class="textField-label-content mb-4 w-full">
                                                <input class="textField" type="text" placeholder=" " id="subjectID"
                                                       name="subject">
                                                <label class="textField-label">Subject</label>
                                            </div>
                                        </div>

                                        <div class="w-full px-4 py-2">
                                            <div class="textArea-label-content mb-4 w-full h-full">

                                                <textarea name="message" class="textArea" id="message" cols="30"
                                                          rows="4" placeholder="Message"></textarea>
                                                <label class="textArea-label">Message</label>
                                            </div>
                                        </div>

                                        <div class="w-full px-4 py-2">
                                            <div>
                                                <button type="submit" name="sendMessage"
                                                        class="p-2 text-white rounded h-1/2 cursor-pointer bg-gray-400 hover:bg-red-500">
                                                    Send Message
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </form>
                        <div class="w-full md:w-2/5 flex items-center justify-center p-8">
                            <img src="../../Assets/Images/logo.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


</body>
</html>

