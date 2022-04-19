<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Letmegrab">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Letmegrab | Registration</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <style>
            .nice-select {
                margin-bottom: 20px;
                width: 100%;
                /* height: 46px; */
                border: 1px solid #ebebeb;
                padding-left: 20px;
                font-size: 16px;
                color: #b2b2b2;
                border-radius: 4px;
            }
            .list {
                width: 100%;
            }
            form .error {
                color: #ff0000;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    </head>

    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Humberger Begin -->
        <div class="humberger__menu__overlay"></div>
        <div class="humberger__menu__wrapper">
            <div class="humberger__menu__logo">
                <a href="#"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="humberger__menu__cart">
                <ul>
                    <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                    <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                </ul>
                <div class="header__cart__price">item: <span>$150.00</span></div>
            </div>
            <div class="humberger__menu__widget">
                <div class="header__top__right__language">
                    <img src="img/language.png" alt="">
                    <div>English</div>
                    <span class="arrow_carrot-down"></span>
                    <ul>
                        <li><a href="#">Spanis</a></li>
                        <li><a href="#">English</a></li>
                    </ul>
                </div>
                <div class="header__top__right__auth">
                    <a href="#"><i class="fa fa-user"></i> Login</a>
                </div>
            </div>
            <nav class="humberger__menu__nav mobile-menu">
                <ul>
                    <li class="active"><a href="./index.html">Home</a></li>
                    <li><a href="./shop-grid.html">Shop</a></li>
                    <li><a href="#">Pages</a>
                        <ul class="header__menu__dropdown">
                            <li><a href="./shop-details.html">Shop Details</a></li>
                            <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                            <li><a href="./checkout.html">Check Out</a></li>
                            <li><a href="./blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="./blog.html">Blog</a></li>
                    <li><a href="./contact.html">Contact</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
            <div class="header__top__right__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
            </div>
            <div class="humberger__menu__contact">
                <ul>
                    <li><i class="fa fa-envelope"></i> info@letmegrab.com</li>
                    <li>Free Shipping for all Order of $99</li>
                </ul>
            </div>
        </div>
        <!-- Humberger End -->

        <!-- Header Section Begin -->
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="header__top__left">
                                <ul>
                                    <li><i class="fa fa-envelope"></i> info@letmegrab.com</li>
                                    <li>Free Shipping for all Order of $99</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header__top__right">
                                <div class="header__top__right__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                                <div class="header__top__right__language">
                                    <img src="img/language.png" alt="">
                                    <div>English</div>
                                    <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li><a href="#">Spanis</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                                <div class="header__top__right__auth">
                                    <a href="#"><i class="fa fa-user"></i> Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="./index.html">Home</a></li>
                                <li><a href="./shop-grid.html">Shop</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="./shop-details.html">Shop Details</a></li>
                                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                        <li><a href="./checkout.html">Check Out</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="./blog.html">Blog</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__cart">
                            <ul>
                                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                            </ul>
                            <div class="header__cart__price">item: <span>$150.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>
        <!-- Header Section End -->

        <!-- Hero Section Begin -->
        <section class="hero hero-normal">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="hero__categories">
                            <div class="hero__categories__all">
                                <i class="fa fa-bars"></i>
                                <span>All departments</span>
                            </div>
                            <ul>
                                <li><a href="#">Fresh Meat</a></li>
                                <li><a href="#">Vegetables</a></li>
                                <li><a href="#">Fruit & Nut Gifts</a></li>
                                <li><a href="#">Fresh Berries</a></li>
                                <li><a href="#">Ocean Foods</a></li>
                                <li><a href="#">Butter & Eggs</a></li>
                                <li><a href="#">Fastfood</a></li>
                                <li><a href="#">Fresh Onion</a></li>
                                <li><a href="#">Papayaya & Crisps</a></li>
                                <li><a href="#">Oatmeal</a></li>
                                <li><a href="#">Fresh Bananas</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="hero__search">
                            <div class="hero__search__form">
                                <form action="#">
                                    <div class="hero__search__categories">
                                        All Categories
                                        <span class="arrow_carrot-down"></span>
                                    </div>
                                    <input type="text" placeholder="What do yo u need?">
                                    <button type="submit" class="site-btn">SEARCH</button>
                                </form>
                            </div>
                            <div class="hero__search__phone">
                                <div class="hero__search__phone__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="hero__search__phone__text">
                                    <h5>+65 11.188.888</h5>
                                    <span>support 24/7 time</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Registration</h2>
                            <div class="breadcrumb__option">
                                <a href="./index.html">Home</a>
                                <span>Registration</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Checkout Section Begin -->
        <section class="checkout spad">
            <div class="container">
                <div class="checkout__form">
                    <h4>User Details</h4>
                    <form action="index.php" method="post" name="registration" id="registration" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="checkout__input">
                                            <p>Name<span>*</span></p>
                                            <input type="text" name="name" id="name" placeholder="Enter Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="checkout__input">
                                            <p>Email<span>*</span></p>
                                            <input type="text" name="email" id="email" placeholder="Enter Email" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="checkout__input">
                                            <p>Password<span>*</span></p>
                                            <input type="password" name="password" id="password" placeholder="Enter Password" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="checkout__input">
                                            <img src="img/default-user.png" name="photo_view" id="photo_view" height="100" width="100" class="rounded-circle" />
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="checkout__input">
                                            <p>Photo<span>*</span></p>
                                            <input type="file" name="photo" id="photo" style="border: unset !important; padding-left: unset !important;" accept="image/*">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="checkout__input">
                                            <p>Contact Number<span>*</span></p>
                                            <input type="text" name="contact_number" id="contact_number" placeholder="Enter Contact Number" autocomplete="off" onkeypress="return isDigit(event)">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="checkout__input">
                                            <p>Aadhar Card Number<span>*</span></p>
                                            <input type="text" name="aadhar_card" id="aadhar_card" placeholder="Enter Aadhar Card Number" autocomplete="off" onkeypress="return isDigit(event)">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="checkout__input">
                                            <p>PAN Card Number<span>*</span></p>
                                            <input type="text" name="pan_card" id="pan_card" placeholder="Enter PAN Card Number" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="checkout__input">
                                            <p>Gender<span>*</span></p>
                                        </div>
                                        <div class="checkout__input__checkbox">
                                            <label for="diff-acc_male" style="padding-left: 20px !important; padding-right: 40px !important;">
                                                Male
                                                <input type="radio" name="gender" id="diff-acc_male" value="Male" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                            <label for="diff-acc_female" style="padding-left: 20px !important; padding-right: 40px !important;">
                                                Female
                                                <input type="radio" name="gender" id="diff-acc_female" value="Female">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="checkout__input">
                                            <p>Website URL<span>*</span></p>
                                            <input type="text" name="website_url" id="website_url" placeholder="Enter Website URL" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h4>Bank Details</h4>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Bank Name<span>*</span></p>
                                            <input type="text" name="bank_name" id="bank_name" placeholder="Enter Bank Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Branch Name<span>*</span></p>
                                            <input type="text" name="branch_name" id="branch_name" placeholder="Enter Branch Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="checkout__input">
                                            <p>Beneficiary Name<span>*</span></p>
                                            <input type="text" name="beneficiary_name" id="beneficiary_name" placeholder="Enter Beneficiary Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="checkout__input">
                                            <p>Account Number<span>*</span></p>
                                            <input type="text" name="account_number" id="account_number" placeholder="Enter Account Number" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="checkout__input">
                                            <p>Account Type<span>*</span></p>
                                            <select name="account_type" id="account_type">
                                                <option value="Saving Account">Saving Account</option>
                                                <option value="Current Account">Current Account</option>
                                            </select>
                                        </div>                                    
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="checkout__input">
                                            <p>IFSC Code<span>*</span></p>
                                            <input type="text" name="ifsc_code" id="ifsc_code" placeholder="Enter IFSC Code" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <button type="submit" name="btnSubmit" class="site-btn">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Checkout Section End -->

        <!-- Footer Section Begin -->
        <footer class="footer spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__about__logo">
                                <a href="./index.html"><img src="img/logo.png" alt=""></a>
                            </div>
                            <ul>
                                <li>Address: 60-49 Road 11378 New York</li>
                                <li>Phone: +65 11.188.888</li>
                                <li>Email: info@letmegrab.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                        <div class="footer__widget">
                            <h6>Useful Links</h6>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">About Our Shop</a></li>
                                <li><a href="#">Secure Shopping</a></li>
                                <li><a href="#">Delivery infomation</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Who We Are</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Projects</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Innovation</a></li>
                                <li><a href="#">Testimonials</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__widget">
                            <h6>Join Our Newsletter Now</h6>
                            <p>Get E-mail updates about our latest shop and special offers.</p>
                            <form action="#">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit" class="site-btn">Subscribe</button>
                            </form>
                            <div class="footer__widget__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer__copyright">
                            <div class="footer__copyright__text">
                                <p>
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed and Developed with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="javascript:void(0)" target="_blank">Vinay Ghael</a>
                                </p>
                            </div>
                            <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Js Plugins -->
        <!-- <script src="js/jquery-3.3.1.min.js"></script> -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/mixitup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>

        <script>
            // Wait for the DOM to be ready
            $(function() {
                // Initialize form validation on the registration form.
                $("form[name='registration']").validate({
                    // Specify validation rules
                    rules: {
                        name: "required",
                        email: {
                            required: true,
                            email: true,
                        },
                        password: {
                            required: true,
                            minlength: 8,
                            pwcheck: true,
                        },
                        photo: {
                            required: true,
                            accept: "image/*",
                        },
                        contact_number: {
                            required: true,
                            maxlength: 10,
                            minlength: 10,
                        },
                        aadhar_card: {
                            required: true,
                            maxlength: 12,
                            minlength: 12,
                        },
                        pan_card: {
                            required: true,
                            checkpan: true,
                        },
                        gender: {
                            required: true,
                        },
                        website_url: {
                            required: true,
                            url: true,
                        },
                        bank_name: {
                            required: true,
                        },
                        branch_name: {
                            required: true,
                        },
                        beneficiary_name: {
                            required: true,
                            minlength: 1,
                            maxlength: 100,
                        },
                        account_number: {
                            required: true,
                        },
                        select: {
                            required: true,
                        },
                        ifsc_code: {
                            required: true,
                            isValidIFSC: true,
                        },
                    },
                    // Specify validation error messages
                    messages: {
                        name: "The name field must be required!",
                        email: {
                            required: "The email field must be required!",
                            email: "Please enter valid email address!",
                        },
                        password: {
                            required: "The password field must be required!",
                            minlength: "Your password must be at least 8 characters long!",
                            pwcheck: "Password must contain at least 8 characters, including at least one uppercase, lowercase letters and special character(s)",
                        },
                        photo: {
                            required: "Please upload your profile photo!",
                            accept: "Accept only jpeg,jpg,png,gif file format!",
                        },
                        contact_number: {
                            required: "The contact number field must be required!",
                            maxlength: "Please put 10 digit mobile number!",
                            minlength: "Please put 10 digit mobile number!",
                        },
                        aadhar_card: {
                            required: "The aadhar card number field must be required!",
                            maxlength: "Please put 12 digit aadhar card number!",
                            minlength: "Please put 12 digit aadhar card number!",
                        },
                        pan_card: {
                            required: "The PAN card number field must be required!",
                            checkpan: "Please enter valid PAN number!"
                        },
                        gender: {
                            required: "Please select your gender!",
                        },
                        website_url: {
                            required: "The website url field must be required!",
                            url: "Please enter a valid URL!"
                        },
                        bank_name: {
                            required: "The bank name field must be required!",
                        },
                        branch_name: {
                            required: "The branch name field must be required!",
                        },
                        beneficiary_name: {
                            required: "The beneficiary name field must be required!",
                            minlength: "Beneficiary name must be between 1 and 100 characters!",
                            maxlength: "Beneficiary name must be between 1 and 100 characters!",
                        },
                        account_number: {
                            required: "The account number field must be required!",
                        },
                        select: {
                            required: "Please select account number!",
                        },
                        ifsc_code: {
                            required: "The IFSC code field must be required!",
                            isValidIFSC: "Please enter valid IFSC Code!"
                        },
                    },
                    
                    submitHandler: function(form) {
                        form.submit();
                    }
                });

                $.validator.addMethod("pwcheck", function(value) {
                    return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
                        && /[A-Z]/.test(value) // has a uppercase letter
                        && /[a-z]/.test(value) // has a lowercase letter
                        && /\d/.test(value) // has a digit
                        && /[*@!#%&()^~{}]+/.test(value) // has special character
                });
                $.validator.addMethod("checkpan", function(value) {
                    return /[A-Z]{5}[0-9]{4}[A-Z]{1}$/.test(value) // has a PAN no
                });
                $.validator.addMethod("isValidIFSC", function(value) {
                    return /[A-Z|a-z]{4}[0][a-zA-Z0-9]{6}$/.test(value) // has a IFSC code
                });
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#photo_view').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#photo").change(function () {
                readURL(this);
            });

            // Only Number Allow
            function isDigit(evt) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            }
        </script>

    </body>

</html>