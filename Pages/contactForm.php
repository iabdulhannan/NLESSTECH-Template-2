<?php

?>

<!doctype html>
<html lang="en">
<head>
    <title>ENDLESSTECH - Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../Assets/Stylesheets/Tailwind.css" rel="stylesheet">
    <link href="../Assets/Stylesheets/index.css" rel="stylesheet">
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
        /*background: #46b5d1;*/
        /*background: #31969c;*/
        background: rgb(107, 114, 128);
        margin: 0 auto;
        margin-bottom: 20px;
    }

    .icon span {
        font-size: 20px;
        color: #fff;
    }

    p a {
        /*color: #46b5d1;*/
        /*color: #31969c;*/
        color: #DC2626;
    }

    .contact-wrap {
        background: #fff;
    }

    #form-message-warning, #form-message-success {
        display: none;
    }

    #form-message-warning {
        color: red;
    }

    .contactForm .label {
        color: #000;
        text-transform: uppercase;
        font-size: 12px;
        font-weight: 600;
    }

    label {
        display: inline-block;
        margin-bottom: 0.5rem;
    }

    #contactForm .input-field {
        font-size: 16px;
    }

    .contactForm .input-field {
        border: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        padding: 0;
    }

    .input-field {
        background: #fff;
        color: rgba(0, 0, 0, 0.8);
        font-size: 14px;
        border-radius: 2px;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .input-field {
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
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
<h1 class="text-black p-4 flex items-center gap-x-2 cursor-pointer" onclick="history.back()">
    <span class="text-2xl">&#10094;</span>
    <a href="../index.html">
        Back
    </a>
</h1>
<section class="md:p-16 px-2 pt-20 md:p-28 bg-gray-50" style="background-color: #f0f0f0">
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
                    <div class="grid grid-cols-12 mb-5">

                        <div class="col-span-12 sm:col-span-12 md:col-span-4">
                            <div class="mb-24 w-full text-center">
                                <div class="icon flex items-center justify-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text">
                                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@nlesstech.com</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-12 md:col-span-4">
                            <div class="mb-24 w-full text-center">
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
                            <div class="mb-24 w-full text-center">
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
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
                                    Your message was sent, thank you!
                                </div>


                                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                    <div class="flex flex-wrap">

                                        <div class="w-full lg:w-1/2 px-4 py-2">
                                            <div class=" mb-4">
                                                <label class="label" for="name">Full Name</label>
                                                <input type="text" class="input-field" name="name" id="name"
                                                       placeholder="Name">
                                            </div>
                                        </div>

                                        <div class="w-full lg:w-1/2 px-4 py-2">
                                            <div class="">
                                                <label class="label" for="email">Email Address</label>
                                                <input type="email" class="input-field" name="email" id="email"
                                                       placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="w-full px-4 py-2">
                                            <div class="">
                                                <label class="label" for="subject">Subject</label>
                                                <input type="text" class="input-field" name="subject" id="subject"
                                                       placeholder="Subject">
                                            </div>
                                        </div>

                                        <div class="w-full px-4 py-2">
                                            <div class="">
                                                <label class="label">Message</label>
                                                <textarea name="message" class="input-field" id="message" cols="30"
                                                          rows="4" placeholder="Message"></textarea>
                                            </div>
                                        </div>

                                        <div class="w-full px-4 py-2">
                                            <div class="">
                                                <input type="submit" value="Send Message"
                                                       class="p-2 text-white rounded cursor-pointer"
                                                       style="background-color: rgb(156,163,175)">
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </form>
                        <div class="w-full md:w-2/5 flex items-center justify-center p-8">
                            <img src="../Assets/Images/logo.svg">
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
