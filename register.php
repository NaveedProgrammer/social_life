<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en" class="bg-gray-100">

<!-- Mirrored from demo.foxthemes.net/socialitev2.2/form-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Nov 2022 06:18:31 GMT -->

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>



    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <style>
    input,
    .bootstrap-select.btn-group button {
        background-color: #f3f4f6 !important;
        height: 44px !important;
        box-shadow: none !important;
    }
    </style>

</head>

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
                <div class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" 
                    >
                    <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Register </h1>

                    <div id="message" style="text-align: center ; color: red"></div>
                    <div class="grid lg:grid-cols-2 gap-3">
                        <div>
                            <label class="mb-0"> First Name <span style="color:red;">*</span> </label>
                            <input type="text" placeholder="First Name" name="fname" id="fname"
                                class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                            <span style="color: red;" class="error" id="fname_errr"> </span>
                        </div>
                        <div>
                            <label class="mb-0"> Last Name <span style="color:red;">*</span> </label>
                            <input type="text" placeholder="Last  Name" name="lname" id="lname"
                                class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                            <span style="color: red;" class="error" id="lname_errr"> </span>
                        </div>
                    </div>
                    <div>
                        <label class="mb-0"> Username <span style="color:red;">*</span> </label>
                        <input type="text" placeholder="Username" name="username" id="username"
                            class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                        <span style="color: red;" class="error" id="username_errr"> </span>
                    </div>
                    <div>
                        <label class="mb-0"> Email Address <span style="color:red;">*</span> </label>
                        <input type="email" placeholder="Info@example.com" name="email" id="email"
                            class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                        <span style="color: red;" class="error" id="email_errr"> </span>
                    </div>
                    <!-- <div>
                        <label class="mb-0">Select Image <span style="color:red;">*</span> </label>
                        <input type="file" name="img" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                    </div> -->
                    <div>
                        <label class="mb-0"> Password <span style="color:red;">*</span> </label>
                        <input type="password" placeholder="******" name="pass" id="pass"
                            class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                        <span style="color: red;" class="error" id="pass_errr"> </span>
                    </div>
                    <div class="grid lg:grid-cols-2 gap-3">

                        <div class="radio">

                            <label class="mb-0"> Gender <span style="color:red;">*</span> </label><br>

                            <input id="radio-1" name="radios" type="radio">
                            <label for="radio-1"><span class="radio-label"></span> Male </label>

                            <input id="radio-2" name="radios" type="radio">
                            <label for="radio-2"><span class="radio-label"></span> Female </label>

                        </div>
                        <div>
                            <label class="mb-0"> Phone <span style="color:red;">*</span> </label>
                            <input type="text" placeholder="+92 54453 0543" name="phone" id="phone"
                                class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                            <span style="color: red;" class="error" id="phone_errr"> </span>
                        </div>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" id="chekcbox1" checked="">
                        <label for="chekcbox1"><span class="checkbox-icon"></span> I agree to the <a
                                href="pages-terms.html" target="_blank"
                                class="uk-text-bold uk-text-small uk-link-reset"> Terms and Conditions </a>
                        </label>
                    </div>

                    <div>
                        <button name="btnsignup" id="btnsignup"
                            class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">Get
                            Started</button>
                        <br />
                        <span style="color: #336699 ;" id="msgdisplayl"></span>

                        <!-- Ajax Code And Validation -->

                        

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


<script>
                    $(document).ready(function() {

                        $('#fname').on('input', function() {
                            checkname();
                        });
                        $('#email').on('input', function() {
                            checkemail();
                        });
                        $('#pass').on('input', function() {
                            checkpass();
                        });
                        $('#phone').on('input', function() {
                            checkphone();
                        });
                        $('#lname').on('input', function() {
                            checkname();
                        });

                        $('#btnsignup').click(function() {

                            if (!checkname() && !checklname() && !checkemail() && !checkpass() && !checkphone()) {
                                console.log("er1");
                                $("#messages").html(
                                    `<div class="alert alert-warning">Please fill all required field</div>`
                                    );
                            } else if (!checkname() || !checklname() || !checkemail() || !checkpass() || !checkphone()) {
                                $("#messages").html(
                                    `<div class="alert alert-warning">Please fill all required field</div>`
                                    );
                                console.log("er");
                            } else {

                                var fname = $('#fname').val();
                                var lname = $('#lname').val();
                                var email = $('#email').val();
                                var phone = $('#phone').val();
                                var pass = $('#pass').val();
                                
                                $.ajax({

                                    url: 'ajaxconfig.php',
                                    type: 'POST',
                                    data: {
                                        Signup: 1,
                                        f_name: fname,
                                        l_name: lname,
                                        s_email: email,
                                        s_phone: phone,
                                        s_pass: pass,
                                        
                                    },
                                    success: function(response) {
                                        if (response != 1) {
                                            blankfield();
                                            window.location.href ='login.php';
                                        } else {
                                            alert(
                                                'Your Account Already Exists With This Email.'
                                            );
                                            // var errr="You Account Has Not Been Registered. Try Again!";
                                        }
                                    },
                                    error: function(err) {
                                        alert("Api Call Failed");
                                    },

                                });

                                function blankfield() {
                                    $('#fname').val("");
                                    $('#lname').val("");
                                    $('#email').val("");
                                    $('#phone').val("");
                                    $('#pass').val("");
                                    
                                }
                            }
                        });


                        function checkname() {
                            var pattern = /^[a-zA-Z]{3,}(?: [a-zA-Z]+){0,2}$/gm;
                            var user = $('#fname').val();
                            var validuser = pattern.test(user);
                            if ($('#fname').val().length < 4) {
                                $('#fname_errr').html('Name length is too short');
                                return false;
                            } else if (!validuser) {
                                $('#fname_errr').html('Name should be a-z ,A-Z only');
                                return false;
                            } else {
                                $('#fname_errr').html('');
                                return true;
                            }
                        }

                        function checklname() {
                            var pattern = /^[a-zA-Z]{3,}(?: [a-zA-Z]+){0,2}$/gm;
                            var user = $('#lname').val();
                            var validuser = pattern.test(user);
                            if ($('#lname').val().length < 4) {
                                $('#lname_errr').html('Name length is too short');
                                return false;
                            } else if (!validuser) {
                                $('#lname_errr').html('Name should be a-z ,A-Z only');
                                return false;
                            } else {
                                $('#lname_errr').html('');
                                return true;
                            }
                        }

                        function checkemail() {
                            var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                            var email = $('#email').val();
                            var validemail = pattern1.test(email);
                            if (email == "") {
                                $('#email_errr').html('Required field');
                                return false;
                            } else if (!validemail) {
                                $('#email_errr').html('Invalid email');
                                return false;
                            } else {
                                $('#email_errr').html('');
                                return true;
                            }
                        }

                        function checkpass() {
                            console.log("sass");
                            var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
                            var pass = $('#pass').val();
                            var validpass = pattern2.test(pass);

                            if (pass == "") {
                                $('#pass_errr').html('Password can not be empty');
                                return false;
                            } else if (!validpass) {
                                $('#pass_errr').html(
                                    'Minimum 5 and upto 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character:'
                                    );
                                return false;

                            } else {
                                $('#pass_errr').html("");
                                return true;
                            }
                        }


                        function checkphone() {
                            if (!$.isNumeric($("#phone").val())) {
                                $("#phone_errr").html("only number is allowed");
                                return false;
                            } else if ($("#phone").val().length != 11) {
                                $("#phone_errr").html("11 digit required");
                                return false;
                            } else {
                                $("#phone_errr").html("");
                                return true;
                            }
                        }




                    });
                    </script>


    <!-- Javascript
    ================================================== -->

    <script src="js/tippy.all.min.js"></script>
    <script src="js/uikit.js"></script>
    <script src="js/simplebar.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>


</body>

<!-- Mirrored from demo.foxthemes.net/socialitev2.2/form-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Nov 2022 06:18:32 GMT -->

</html>