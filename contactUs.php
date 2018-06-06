<!DOCTYPE html>
<html lang="en">

<head>
    <title>PopSmart Kids</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- load bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- load font awesome for social media icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- our local style sheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- favicon !-->
    <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />

    <!-- A google api font, really easy to change !-->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"/>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119802114-1"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119802114-1');
        
        
        var submit = false;
        function capcha_filled(){
            submit = true; 
        }

        function capcha_expired(){
            submit = false;
        }

        function check_if_capcha_is_filled(e){
            if(submit) return true;
            e.preventDefault();
            alert('Fill in the capcha!');
        }
    </script>
</head>

<body>
    <!-- Begin Header (navbar) section -->
    <!-- This section should stay with each static page, as is, with the exception of changing out
        which links are available in the nav bar depending on where you are -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- This creates the navbar button that changes with smaller screen sizes -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <!-- these spans are meant to be empty, they just create the lines inside the button -->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is bootstrap, this is where our logo image in the top left goes -->
                <a class="navbar-brand" href="index.html"><img class="logo" src="images/navbarLogo.png" alt="SmartPopKids Logo"></a>
            </div>
            <!-- this continues to create the navbar/button which changes with screen size -->
            <div class="collapse navbar-collapse text-right" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="local">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="local">
                        <a href="aboutUs.html">About Us</a>
                    </li>
                    <li class="local">
                        <a href="/products/">Products</a>
                    </li>
                    <li class="local">
                        <a href="/blog/">Blog</a>
                    </li>
                    <li class="active">
                        <a href="">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- end collapsing navigation section -->
        </div>
    </nav>
    <!-- end header (navbar) section -->

    <!-- empty container to adjust for navbar height -->
    <div class="container" id="contactus"></div>

    <div class="container" style="border-bottom:#F0F0F0 1px solid">
        <h1>
            <center><strong><font color="#77B5FE">CONTACT US</font></strong></center>
        </h1>
    </div>

    <!-- main body of context -->
    <div class="row">
        <div class="container-fluid">
            <center>
                <div class="contact">
                    <form action="formhandler.php" method="post">
                        <legend>Questions? Comments? We can help!</legend>

                        <input type="text" name="FName" placeholder="* First Name" required>

                        <input type="text" name="LName" placeholder="* Last Name" required>

                        <input type="phone" name="phone" placeholder="Phone">

                        <input type="email" name="email" placeholder="* Email" required>

                        <input type="text" name="company" placeholder="Compnay Name">

                        <input type="text" name="website" placeholder="Website">

                        <textarea name="comments" rows="10" placeholder="  How can we help you?"></textarea>

                        <div class="g-recaptcha" data-callback="capcha_filled"
                                data-expired-callback="capcha_expired" 
                             data-sitekey="6Lf4bFwUAAAAAItba3M1Xfbu9dH4wNq3NFHzhD6W"></div>

                        <input class="btn btn-primary"type="submit"  value="Submit" onsubmit="check_if_capcha_is_filled">
                    </form>
                </div>
            </center>
        </div>
        <hr>
        <div class="container-fluid">
            <center>
                <div class="QA">
                    <div class="Q1">
                        <h2>Q&A/Frequently Asked Questions</h2>
                        <p>1. Where can I download the app?</p>

                        <div id="cl" value="+" style="display: inline; cursor: pointer;">+</div>
                        <ul id="list" style="display:none;">
                            <li>
                                <p>You can download our app from Google PlayStore and Apple App Store.</p>
                            </li>
                        </ul>
                        <script type="text/javascript">
                            var btn = document.getElementById("cl");
                            btn.onclick = function() {
                                var show = document.getElementById("list");
                                if (show.style.display == "block") {
                                    show.style.display = "none";
                                    cl.innerHTML = "+";
                                } else {
                                    show.style.display = "block";
                                    cl.innerHTML = "-";
                                }
                            }

                        </script>
                    </div>
                    <div class="Q2">
                        <p>2. Where can I download the app?</p>
                        <div id="cl2" value="+" style="display: inline; cursor: pointer;">+</div>
                        <ul id="list2" style="display:none;">
                            <li>
                                <p>You can download our app from Google PlayStore and Apple App Store.</p>
                            </li>
                        </ul>
                        <script type="text/javascript">
                            var btn = document.getElementById("cl2");
                            btn.onclick = function() {
                                var show = document.getElementById("list2");
                                if (show.style.display == "block") {
                                    show.style.display = "none";
                                    cl2.innerHTML = "+";
                                } else {
                                    show.style.display = "block";
                                    cl2.innerHTML = "-";
                                }
                            }

                        </script>
                    </div>
                    <div class="Q3">
                        <p>3. Where can I download the app?</p>
                        <div id="cl3" value="+" style="display: inline; cursor: pointer;">+</div>
                        <ul id="list3" style="display:none;">
                            <li>
                                <p>You can download our app from Google PlayStore and Apple App Store.</p>
                            </li>
                        </ul>
                        <script type="text/javascript">
                            var btn = document.getElementById("cl3");
                            btn.onclick = function() {
                                var show = document.getElementById("list3");
                                if (show.style.display == "block") {
                                    show.style.display = "none";
                                    cl3.innerHTML = "+";
                                } else {
                                    show.style.display = "block";
                                    cl3.innerHTML = "-";
                                }
                            }

                        </script>
                    </div>
                    <div class="Q4">
                        <p>4. Where can I download the app?</p>
                        <div id="cl4" value="+" style="display: inline; cursor: pointer;">+</div>
                        <ul id="list4" style="display:none;">
                            <li>
                                <p>You can download our app from Google PlayStore and Apple App Store.</p>
                            </li>
                        </ul>
                        <script type="text/javascript">
                            var btn = document.getElementById("cl4");
                            btn.onclick = function() {
                                var show = document.getElementById("list4");
                                if (show.style.display == "block") {
                                    show.style.display = "none";
                                    cl4.innerHTML = "+";
                                } else {
                                    show.style.display = "block";
                                    cl4.innerHTML = "-";
                                }
                            }

                        </script>
                    </div>
                    <div class="Q5">
                        <p>5. Where can I download the app?</p>
                        <div id="cl5" value="+" style="display: inline; cursor: pointer;">+</div>
                        <ul id="list5" style="display:none;">
                            <li>
                                <p>You can download our app from Google PlayStore and Apple App Store.</p>
                            </li>
                        </ul>
                        <script type="text/javascript">
                            var btn = document.getElementById("cl5");
                            btn.onclick = function() {
                                var show = document.getElementById("list5");
                                if (show.style.display == "block") {
                                    show.style.display = "none";
                                    cl5.innerHTML = "+";
                                } else {
                                    show.style.display = "block";
                                    cl5.innerHTML = "-";
                                }
                            }

                        </script>
                    </div>
                </div>
            </center>
        </div>
    </div>
    <hr>
    <center>
        <li><strong>Contact Information:</strong></li>
    </center>


    <center>
        PopSmartKids, Inc. <br> 8 The Green, Ste A <br> Dover, Delaware 19901 <br> Telephone: 206-923-9420 <br> Email: contact@popsmartkids.com
    </center>
    <!--Footer-->
    <footer class="page-footer font-small indigo pt-0">

        <!-- light grey line that seperates footer items -->
        <!-- adjust margin percentages in css file to mess with container sizes -->
        <hr class="footer-hr">


        <!--Footer Links-->
        <div class="container-fluid">

            <!--Grid row-->
            <!--        <div class="row pt-5 mb-3 text-center d-flex justify-content-center">-->
            <div class="row justify-content-md-center text-center">

                <div class="col-md-3 mb-3">
                </div>
                <!--Grid column-->
                <!--            <div class="col-md-3 mb-3">-->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a class="footer-info" href="privacyPolicy.html">Privacy Policy</a>
                    </h6>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a class="footer-info" href="legal.html">legal</a>
                    </h6>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a class="footer-info" href="safeZone.html">safe zone</a>
                    </h6>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!-- light grey line that seperates footer items -->
            <!-- adjust margin percentages to mess with container sizes -->
            <hr class="footer-hr">

            <!--Grid row-->
            <div class="row pb-3">

                <!-- Social Media -->
                <div class="col-md-12">
                    <div class="mb-5 text-center">
                        <a href="https://facebook.com/popsmartkids/" class="fab fa-facebook-square"></a>
                        <a href="https://twitter.com/popsmartkids/" class="fab fa-twitter-square"></a>
                        <a href="https://linkedin.com/in/priyankaraha/" class="fab fa-linkedin"></a>
                        <a href="https://linkedin.com/in/priyankaraha/" class="fab fa-google-plus-square"></a>
                    </div>
                </div>
            </div>
        </div>
        <!--/Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            © 2018 Copyright: PopSmartKids
        </div>
        <!--/Copyright-->

    </footer>

    <!-- I'm honestly not sure if bootstrap even uses jquery but the tutorial said to put this here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>

</html>
