<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="topheader">
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <img src="images/breadcrum.png" alt="">
                        </button>
                        <div class="col-md-1">
                            <div class="logo-sec">
                                <img src="images/logo2.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="zip-code">
                                <span class="location"><img src="images/location.png" alt=""></span><span>Home</span>
                                <span class="down">
                                    <a href="#" id="showLocationModal"><img src="images/down.png" alt=""></a>
                                </span>
                                <h5>1400 N Lake Shore</h5>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="search">
                                <form class="d-flex search-input">
                                    <input class="form-control me-2" type="search" placeholder="Search for products…" aria-label="Search">
                                    <img src="images/search.png" alt="">
                                </form>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="login">
                                <span>Login</span>
                                <a href="#" id="showLoginModal"><span><img src="images/down.png" alt=""></span></a>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="return">
                                <p>Return</p>
                                <h5>& Orders</h5>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="cart">
                                <span><i class="fa-solid fa-cart-shopping"></i></span>
                                <span class="cart-text">Cart</span>
                                <span class="number">0</span>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="offcanvas offcanvas-start sidebar" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header sidebar-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Hello Sanjay</h5>
                        <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <div class="offcanvas-body sidebar-body">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item heading">
                                <a class="nav-link" aria-current="page" href="#">Shop by category</a>
                            </li>
                            <li class="nav-item sub-heading">
                                <a class="nav-link" href="#">Grocery</a>
                            </li>
                            <li class="nav-item sub-heading">
                                <a class="nav-link" href="#">Food</a>
                            </li>
                            <li class="nav-item sub-heading">
                                <a class="nav-link" href="#">Nationwide</a>
                            </li>
                            <li class="nav-item sub-heading">
                                <a class="nav-link" href="#">Direct from India</a>
                            </li>
                            <li class="nav-item sub-heading">
                                <a class="nav-link" href="#">Astrology (Shubh Puja)</a>
                            </li>
                            <li class="nav-item sub-heading">
                                <a class="nav-link" href="#">Events</a>
                            </li>
                            <li class="nav-item sub-heading">
                                <a class="nav-link" href="#">Moments</a>
                            </li>
                            <li class="nav-item sub-heading">
                                <a class="nav-link" href="#">Just By Quicklly Meals</a>
                            </li>
                            <div class="aa">

                            </div>
                            <li class="nav-item heading">
                                <a class="nav-link" href="#">Programs & Features</a>
                            </li>
                            <li class="nav-item sub-heading">
                                <a class="nav-link" href="#">Q Pay</a>
                            </li>
                            <li class="nav-item sub-heading">
                                <a class="nav-link" href="#">Events</a>
                            </li>
                            <li class="nav-item sub-heading">
                                <a class="nav-link" href="#">Recipe</a>
                            </li>
                            <li class="nav-item sub-heading">
                                <a class="nav-link" href="#">Quicklly Pass</a>
                            </li>
                            <li class="nav-item sub-heading">
                                <a class="nav-link" href="#">Gift Card</a>
                            </li>
                            <li class="nav-item heading">
                                <a class="nav-link" href="#">Account & Settings</a>
                            </li>
                            <li class="nav-item sub-heading">
                                <a class="nav-link" href="#">Your Account</a>
                            </li>
                            <li class="nav-item sub-heading">
                                <a class="nav-link" href="#">Sign out</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Location Modal -->
                <!-- <div id="locationModal" class="modal">
                    <div class="clsContent">
                        <span id="closeLocationModal" class="close">&times;</span>
                        <p>Change your location</p>
                        <div class="clsChangePincode">
                            <form name="zipsearch" action="" method="post" onsubmit="return checkStoreZip();">
                                <input type="text" name="zip" id="zipcode" onkeypress="return IsAlphaNumeric(event)" placeholder="Enter Zip Code" maxlength="10" minlength="4" pattern=".{4,10}" class="chkzipcode" required="" value="60610" autofocus="">
                                <input type="hidden" name="submitzip" value="Submit">
                                <input type="submit" class="clsBtn" value="">
                            </form>
                        </div>
                    </div>
                </div> -->
                <!-- Login Modal -->
                <!-- <div id="loginModal" class="modal">
                    <div class="clsContent">
                        <span id="closeLoginModal" class="close">&times;</span>
                        <p>Login</p>
                        <div class="clsLoginForm">
                            <form name="login" action="" method="post" onsubmit="return checkLogin();">
                            <input type="text" name="firstname" id="firstname" placeholder="Enter First Name" required="">
                
                            <input type="text" name="lastname" id="lastname" placeholder="Enter Last Name" required="">

                            <input type="email" name="email" id="email" placeholder="Enter Email" required="">

                            <input type="text" name="username" id="username" placeholder="Enter Username" required="">
                            
                            <input type="password" name="password" id="password" placeholder="Enter Password" required="">
                            
                            <input type="submit" class="clsBtn" value="Login">
                            </form>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    
    <!-- <script>
        const locationModal = document.getElementById("locationModal");
        const showLocationModalButton = document.getElementById("showLocationModal");
        const closeLocationModalButton = document.getElementById("closeLocationModal");

        const loginModal = document.getElementById("loginModal");
        const showLoginModalButton = document.getElementById("showLoginModal");
        const closeLoginModalButton = document.getElementById("closeLoginModal");

        showLocationModalButton.onclick = function(event) {
            event.preventDefault();
            locationModal.style.display = "block";
        }

        closeLocationModalButton.onclick = function() {
            locationModal.style.display = "none";
        }

        showLoginModalButton.onclick = function(event) {
            event.preventDefault();
            loginModal.style.display = "block";
        }

        closeLoginModalButton.onclick = function() {
            loginModal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == locationModal) {
                locationModal.style.display = "none";
            }
            if (event.target == loginModal) {
                loginModal.style.display = "none";
            }
        }
    </script> -->
</body>

</html>