<?php session_start();
?>


<!DOCTYPE html>
<html lang="en" class="bg-gray-100">

<!-- Mirrored from demo.foxthemes.net/socialitev2.2/form-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Nov 2022 06:15:42 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="images/favicon.png" rel="icon" type="image/png">

    <!-- Basic Page Needs
        ================================================== -->
    <title>Socialite </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Socialite is - Professional A unique and beautiful collection of UI elements">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="css/icons.css">

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="css/uikit.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <style>
    input,
    .bootstrap-select.btn-group button {
        background-color: #f3f4f6 !important;
        height: 44px !important;
        box-shadow: none !important;
    }
    </style>
</head>

<body>

    <body class="bg-gray-100">


        <div id="wrapper" class="flex flex-col justify-between h-screen">

            <!-- header-->
            <div class="bg-white py-4 shadow dark:bg-gray-800">
                <div class="max-w-6xl mx-auto">


                    <div class="flex items-center lg:justify-between justify-around">

                        <a href="trending.html">
                            <img src="images/logo.png" alt="" class="w-32">
                        </a>

                        <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                            <a href="login.php" class="py-3 px-4">Login</a>
                            <a href="register.php"
                                class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">Register</a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Content-->
            <div>
                <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">

                    <div class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" id="sign-in">
                        <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Login </h1>

                        <div id="message" style="text-align: center ; color: red"></div>
                        <!-- <div>
                            <label class="mb-0"> Username <span style="color:red;">*</span> </label>
                            <input type="text" placeholder="Username"
                                class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                            <span style="color: red;" class="error" id="username_err"> </span>
                        </div> -->
                        <div>
                            <label class="mb-0"> Email Address <span style="color:red;">*</span> </label>
                            <input type="email" placeholder="Info@example.com" name="emaill" id="emaill"
                                class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                            <span style="color: red;" class="error" id="email_err"> </span>
                        </div>
                        <div>
                            <label class="mb-0"> Password <span style="color:red;">*</span> </label>
                            <input type="password" placeholder="******" name="passl" id="passl"
                                class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                        </div>

                        <div>
                            <button id="btnsignin"
                                class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">Login</button>
                            <br />
                            <span style="color: #336699 ;" id="msgdisplayl"></span>

                            <script>
                            // if (typeof(localStorage.getItem("user_id"))=='undefined') {
                                window.open("index.php");
                            // }
                            $(document).ready(function() {

                                $('#emaill').on('input', function() {
                                    checkemail();
                                });
                                $('#passl').on('input', function() {
                                    checkpass();
                                });


                                $('#btnsignin').click(function() {

                                    if (!checkemail()) {
                                        console.log("er1");
                                        $("#message").html(
                                            `<div class="alert alert-warning">Please fill all required field</div>`
                                        );
                                    } else if (!checkemail()) {
                                        $("#message").html(
                                            `<div class="alert alert-warning">Please fill all required field</div>`
                                        );
                                        console.log("er");
                                    } else {

                                        var emaill = $('#emaill').val();
                                        var passl = $('#passl').val();
                                        $.ajax({

                                            url: 'ajaxconfig.php',
                                            type: 'POST',
                                            data: {
                                                Login: 1,
                                                l_email: emaill,
                                                l_pass: passl,
                                            },
                                            success: function(response) {
                                                if(isset($_SESSION['user_id'])){
                                                    header("location:index.php");
                                                }
                                                var obj = JSON.parse(response);
                                                alert(obj[0].message);
                                            },
                                            error: function(err) {
                                                alert(err);
                                            },

                                        });
                                    }
                                });

                                function checkemail() {
                                    var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                    var email = $('#emaill').val();
                                    var validemail = pattern1.test(email);
                                    if (email == "") {
                                        $('#email_err').html('Required field');
                                        return false;
                                    } else if (!validemail) {
                                        $('#email_err').html('Invalid email');
                                        return false;
                                    } else {
                                        $('#email_err').html('');
                                        return true;
                                    }
                                }


                            });
                            </script>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer -->

            <div class="lg:mb-5 py-3 uk-link-reset">
                <div
                    class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
                    <div class="flex space-x-2 text-gray-700 uppercase">
                        <a href="#"> About</a>
                        <a href="#"> Help</a>
                        <a href="#"> Terms</a>
                        <a href="#"> Privacy</a>
                    </div>
                    <p class="capitalize"> © copyright 2023 by Socialite</p>
                </div>
            </div>

        </div>



        <!-- For Night mode -->
        <script>
        (function(window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);

        (function(window, document, undefined) {

            'use strict';

            // Feature test
            if (!('localStorage' in window)) return;

            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;

            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function(event) {
                event.preventDefault();
                document.documentElement.classList.toggle('dark');
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);

        })(window, document);
        </script>

        <!-- Javascript
    ================================================== -->
        <script src="../../code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="js/tippy.all.min.js"></script>
        <script src="js/uikit.js"></script>
        <script src="js/simplebar.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/bootstrap-select.min.js"></script>
        <script src="unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

    </body>

    <!-- Mirrored from demo.foxthemes.net/socialitev2.2/form-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Nov 2022 06:15:43 GMT -->

</html>