
<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template Infolio Multi-Purpose themeforest">
    <meta name="description" content="Infolio - Multi-Purpose HTML5 Template">
    <meta name="author" content="">

    <!-- Title  -->
    <title>Infolio</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/imgs/favicon.ico">

    <!-- Google Fonts -->
    <link href="../../../css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="../../../css2?family=Allerta+Stencil&display=swap" rel="stylesheet">

    <!-- Font -->
    <link rel="stylesheet" href="assets/css/satoshi.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
            .alert {
                position: fixed;
                top: 20px;
                right: 20px;
                z-index: 99999999000;
                padding: 15px 20px;
                color: white;
                border-radius: 5px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
                display: none; /* Initially hidden */
            }
    
            .alert.success {
                background-color: #4caf50; /* Success color (Green) */
            }
    
            .alert.danger {
                background-color: #f44336; /* Danger color (Red) */
            }
    
            .alert.show {
                display: block;
                transform: translateX(20px); /* Start off-screen */
                animation: slideIn 0.5s forwards, fadeOut 0.5s 3s forwards;
            }
    
            @keyframes slideIn {
                0% {
                    opacity: 0;
                    transform: translateX(20px);
                }
                100% {
                    opacity: 1;
                    transform: translateX(0);
                }
            }
    
            @keyframes fadeOut {
                0% {
                    opacity: 1;
                }
                100% {
                    opacity: 0;
                    transform: translateX(20px);
                }
            }
            
            .honeypot {
                position: absolute;
                left: -9999px;
            }
        </style>

</head>

<body>



    <!-- ==================== Start Loading ==================== -->

    <div class="loader-wrap">
        <svg viewbox="0 0 1000 1000" preserveaspectratio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <div class="cursor"></div>


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->



    <div id="smooth-wrapper">



        <!-- ==================== Start Navbar ==================== -->

        <nav class="navbar navbar-expand-lg bord blur">
            <div class="container">

                <!-- Logo -->
                <a class="logo icon-img-100" href="#">
                    <img src="assets/imgs/logo2.png" alt="logo">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"><i class="fas fa-bars"></i></span>
                </button>

                <!-- navbar links -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#0" data-scroll-nav="0"><span class="rolling-text">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#0" data-scroll-nav="1"><span class="rolling-text">Services</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#0" data-scroll-nav="2"><span class="rolling-text">About</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#0" data-scroll-nav="3"><span class="rolling-text">Portfolio</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#0" data-scroll-nav="6"><span class="rolling-text">Contact</span></a>
                        </li>
                    </ul>
                </div>

                <div class="topnav">
                    <div class="menu-icon cursor-pointer">
                        <span class="icon ti-align-right"></span>
                    </div>
                </div>
            </div>
        </nav>

        <div class="hamenu one-scroll">
            <div class="logo icon-img-100">
                <img src="assets/imgs/logo2.png" alt="">
            </div>
            <div class="close-menu cursor-pointer ti-close"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="menu-text">
                            <div class="text">
                                <h2>Menu</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="menu-links">
                            <ul class="main-menu rest">
                                <li data-scroll-nav="0">
                                    <div class="o-hidden">
                                        <div class="link cursor-pointer dmenu"><span class="fill-text" data-text="Home">Home</span></div>
                                    </div>
                                </li>
                                <li data-scroll-nav="1">
                                    <div class="o-hidden">
                                        <div class="link cursor-pointer dmenu"><span class="fill-text" data-text="Services">Services</span>
                                        </div>
                                    </div>
                                </li>
                                <li data-scroll-nav="2">
                                    <div class="o-hidden">
                                        <div class="link cursor-pointer dmenu"><span class="fill-text" data-text="About">About</span>
                                        </div>
                                    </div>
                                </li>
                                <li data-scroll-nav="3">
                                    <div class="o-hidden">
                                        <div class="link cursor-pointer dmenu"><span class="fill-text" data-text="Portfolio">Portfolio</span>
                                        </div>
                                    </div>
                                </li>
                                <li data-scroll-nav="4">
                                </li>
                                <li data-scroll-nav="5">
                                   
                                </li>
                                <li data-scroll-nav="6">
                                    <div class="o-hidden">
                                        <div class="link cursor-pointer dmenu"><span class="fill-text" data-text="Contact">Contact</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="cont-info">
                            <div class="item mb-50">
                                <h6 class="sub-title mb-15 opacity-7">Address</h6>
                                <h5>Kenya <br>Mombasa</h5>
                            </div>
                            <div class="item mb-50">
                                <h6 class="sub-title mb-15 opacity-7">Social Media</h6>
                                <ul class="rest social-text">
                                    <li class="mb-10">
                                        <a href="#0" class="hover-this"><span class="hover-anim">Facebook</span></a>
                                    </li>
                                    <li class="mb-10">
                                        <a href="https://x.com/abdulazizm2455" class="hover-this"><span class="hover-anim">Twitter</span></a>
                                    </li>
                                    <li class="mb-10">
                                        <a href="https://wa.me/254792310041" class="hover-this"><span class="hover-anim">Watsaap</span></a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/_bad_mash_buowy" class="hover-this"><span class="hover-anim">Instagram</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item mb-40">
                                <h6 class="sub-title mb-15 opacity-7">Contact Us</h6>
                                <h5><a href="#0">mufidhabdulaziz9@gmail.com</a></h5>
                                <h5 class="underline mt-10"><a href="#0">+254 792 31 00 41</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==================== End Navbar ==================== -->



        <div id="smooth-content">

            <main class="main-bg">


                <!-- ==================== Start Header ==================== -->

                <header class="freelancer" data-scroll-index="0">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="img">
                                    <img src="assets/imgs/me.png" alt="" style="width: 380px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="caption">
                        <h1 class="up stroke"><span>I'm MUFID</span> <span>Designer</span></h1>
                        <h1 class="down"><span>I'm MUFID</span> <span>Designer</span></h1>
                    </div>
                </header>

                <!-- ==================== End Header ==================== -->



                <!-- ==================== Start Services ==================== -->

                <section class="services section-padding pb-0" data-scroll-index="1">
                    <div class="container">
                        <div class="sec-head mb-80">
                            <h6 class="sub-title main-color mb-25">Our Specialize</h6>
                            
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="item-box radius-15 md-mb30">
                                    <div class="ti-paint-bucket main-color fz-50 mb-40"></div>
                                    <h5 class="mb-15">UI / UX Design</h5>
                                    <p>With a focus on delivering user-centric solutions, I bring UI/UX design expertise that prioritizes seamless user experiences. I design intuitive interfaces and prototypes that are both visually appealing and easy to navigate..</p>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item-box radius-15 md-mb30">
                                    <div class="ti-layout-slider main-color fz-50 mb-40"></div>
                                    <h5 class="mb-15">Web Development</h5>
                                    <p>I specialize in building modern, responsive websites that perform efficiently across different platforms. My technical skill set includes HTML, CSS, JavaScript, PHP, and Firebase, to develop dynamic, interactive, and secure websites. ..</p>
                                   
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item-box radius-15">
                                    <div class="ti-rocket main-color fz-50 mb-40"></div>
                                    <h5 class="mb-15">Graphic Design</h5>
                                    <p> I specialize in crafting unique brand identities, logos, posters,that align with a brand’s vision and message. My design philosophy revolves around combining creativity with functionality to ensure each project is effective..</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Services ==================== -->



                <!-- ==================== Start about ==================== -->

                <section class="about-crev section-padding position-re" data-scroll-index="2">
                    <div class="container">
                        <div class="row lg-marg">
                            <div class="col-lg-6">
                                <div class="left-block mt-100 md-mb50">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="info">
                                                <h3 class=" main-color fz-50 line-height-1">1</h3>
                                                <p class="nowrap">Years of<br> Experience</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="img fit-img radius-30">
                                                <img src="assets/imgs/me 2.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mz-shap"><svg height="100%" viewbox="0 0 610 547" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M116.134 529.548C116.134 538.642 123.506 546.015 132.6 546.015H211.63C211.635 546.015 211.638 546.011 211.638 546.007V546.007C211.638 546.003 211.642 545.999 211.646 545.999H592.691C601.786 545.999 609.158 538.627 609.158 529.533L609.157 251.366C609.157 242.272 601.785 234.899 592.691 234.899H401.097C392.003 234.899 384.631 227.527 384.631 218.433V112.465C384.631 103.371 377.259 95.999 368.164 95.999H214.466C205.372 95.999 198 88.6268 198 79.5327V16.4662C198 7.37219 190.628 0 181.534 0H88.4662C79.3722 0 72 7.37219 72 16.4662V104.534C72 113.628 79.3722 121 88.4662 121H166.917C176.011 121 183.383 128.372 183.383 137.466V273.565C183.383 282.659 176.011 290.031 166.917 290.031H116.134H116.134H16.5634C7.46936 290.031 0.0971666 297.403 0.0971666 306.497V445.923C0.0971666 455.017 7.46935 462.39 16.5634 462.39H99.6677C108.762 462.39 116.134 469.762 116.134 478.856V529.548Z" fill="#222"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 valign">
                                <div class="content full-width">
                                    <div class="sec-head mb-30">
                                        <h6 class="sub-title mb-15 main-color">About Me</h6>
                                        <h2>Bringing Your Digital Vision to Life <br></h2>
                                        <div class="text mt-15">
                                            <p>As a web developer, my approach combines creativity, problem-solving, and attention to detail to build websites that stand out, engage users, and meet business goals. I'm driven by the desire to continuously learn, innovate, and create digital solutions that leave a lasting impact.
                                                .</p>
                                        </div>
                                    </div>
                                    <div class="info-author mt-40 pt-40 bord-thin-top">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center mb-20">
                                                    <div>
                                                        <h6 class="nowrap fz-16">Name :</h6>
                                                    </div>
                                                    <div class="ml-20">
                                                        <p class="fz-14">Mufid abdulaziz</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <h6 class="nowrap fz-16">Address :</h6>
                                                    </div>
                                                    <div class="ml-20">
                                                        <p class="fz-14">kenya Mombasa</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center mb-20">
                                                    <div>
                                                        <h6 class="nowrap fz-16">Phone :</h6>
                                                    </div>
                                                    <div class="ml-20">
                                                        <p class="fz-14">+254 792 31 00 41</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <h6 class="nowrap fz-16">Email :</h6>
                                                    </div>
                                                    <div class="ml-20">
                                                        <p class="fz-14">mufidhabdulaziz9@gmail.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="assets/mufidh abdulaziz cv.pdf" class="butn butn-md main-colorbg radius-30 mt-40">
                                        <span class="text-dark">Dwonload CV</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line-overlay opacity-7">
                        <svg viewbox="0 0 1728 1101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-43 773.821C160.86 662.526 451.312 637.01 610.111 733.104C768.91 829.197 932.595 1062.9 602.782 1098.75C272.969 1134.6 676.888 25.4306 1852 1" style="stroke-dasharray: 3246.53, 0;"></path>
                        </svg>
                    </div>
                </section>

                <!-- ==================== End about ==================== -->



                <!-- ==================== Start Skills ==================== -->

                

                <!-- ==================== End Skills ==================== -->



                <!-- ==================== Start Portfolio ==================== -->

                <section class="portfolio-carsouel section-padding" data-scroll-index="3">
                    <div class="container">
                        <div class="sec-head mb-80">
                            <h6 class="sub-title main-color mb-25">Our Portfolio</h6>
                            <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                                <h2>Our featured <span class="fw-200">projects</span></h2>
                                <div class="ml-auto">
                                    <div class="swiper-arrow-control">
                                        <div class="swiper-button-prev">
                                            <span class="ti-arrow-left"></span>
                                        </div>
                                        <div class="swiper-button-next">
                                            <span class="ti-arrow-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="work-swiper-center" data-carousel="swiper" data-items="2" data-center="center" data-loop="true" data-space="100">
                            <div id="content-carousel-container-unq-work" class="swiper-container" data-swiper="container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img">
                                                <img src="assets/imgs/works/1/1.jpg" alt="">
                                            </div>
                                            <div class="cont d-flex align-items-center mt-30 pb-15 bord-thin-bottom">
                                                <div>
                                                    <h5>Nice guy with a smile</h5>
                                                    <p>Graphic Designing</p>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="project3.html" class="rmore">
                                                        <img src="assets/imgs/arrow-right.png" alt="" class="icon-img-20">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img">
                                                <img src="assets/imgs/works/1/2.jpg" alt="">
                                            </div>
                                            <div class="cont d-flex align-items-center mt-30 pb-15 bord-thin-bottom">
                                                <div>
                                                    <h5>Nice guy with a smile</h5>
                                                    <p>Graphic Designing</p>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="project3.html" class="rmore">
                                                        <img src="assets/imgs/arrow-right.png" alt="" class="icon-img-20">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img">
                                                <img src="assets/imgs/works/1/3.jpg" alt="">
                                            </div>
                                            <div class="cont d-flex align-items-center mt-30 pb-15 bord-thin-bottom">
                                                <div>
                                                    <h5>Nice guy with a smile</h5>
                                                    <p>Graphic Designing</p>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="project3.html" class="rmore">
                                                        <img src="assets/imgs/arrow-right.png" alt="" class="icon-img-20">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img">
                                                <img src="assets/imgs/works/1/4.jpg" alt="">
                                            </div>
                                            <div class="cont d-flex align-items-center mt-30 pb-15 bord-thin-bottom">
                                                <div>
                                                    <h5>Nice guy with a smile</h5>
                                                    <p>Graphic Designing</p>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="project3.html" class="rmore">
                                                        <img src="assets/imgs/arrow-right.png" alt="" class="icon-img-20">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Portfolio ==================== -->



                <!-- ==================== Start Testimonials ==================== -->

                

                <!-- ==================== End Testimonials ==================== -->



                <!-- ==================== Start Blog ==================== -->

                

                <!-- ==================== End Blog ==================== -->



                <!-- ==================== Start Contact ==================== -->

                <section class="contact-crev section-padding bord-thin-bottom bord-thin-top" data-scroll-index="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="sec-head md-mb80">
                                    <h6 class="sub-title main-color mb-15 wow fadeInUp">Get In Touch</h6>
                                    <h2 class="text-u ls1 d-rotate wow">
                                        <span class="rotate-text">Let's make your brand <span class="fw-200">brilliant!</span></span>
                                    </h2>
                                    <p class="mt-10">If you would like to work with us or just want to get in
                                        touch, we’d love to hear from you!</p>
                                    <div class="phone fz-30 fw-600 mt-80 underline main-color">
                                        <a href="#0">+254 792 31 00 41</a>
                                    </div>
                                    <ul class="rest social-text d-flex mt-40">
                                        <li class="mr-30">
                                            <a href="#0" class="hover-this"><span class="hover-anim">Facebook</span></a>
                                        </li>
                                        <li class="mr-30">
                                            <a href="https://x.com/abdulazizm2455" class="hover-this"><span class="hover-anim">Twitter</span></a>
                                        </li>
                                        <li class="mr-30">
                                            <a href="https://wa.me/254792310041" class="hover-this"><span class="hover-anim">Watsaap</span></a>
                                        </li>
                                        <li>
                                            <a href="https://instagram.com/_bad_mash_buowy" class="hover-this"><span class="hover-anim">Instagram</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                             <!-- Alert Message -->
                         <?php if ($alertMessage): ?>
                                    <div id="alert" class="alert <?php echo htmlspecialchars($alertType); ?> animate__animated animate__fadeInDown">
                                        <?php echo htmlspecialchars($alertMessage); ?>
                                    </div>
                                <?php endif; ?>

                                <!-- Alert Script -->
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const alertBox = document.getElementById('alert');
                                        if (alertBox) {
                                            alertBox.classList.add('show');
                                            setTimeout(() => {
                                                alertBox.classList.remove('animate__fadeInDown');
                                                alertBox.classList.add('animate__fadeOutUp');
                                                setTimeout(() => alertBox.style.display = 'none', 1000);
                                            }, 3000);
                                        }
                                    });
                                   </script>
                            <div class="col-lg-6 offset-lg-1 valign">
                                <div class="full-width">
                                    <form id="contact-form" method="post" action="contact.php">

                                        <div class="messages"></div>

                                        <div class="controls row">

                                            <div class="col-lg-6">
                                                <div class="form-group mb-30">
                                                    <input id="form_name" type="text" name="name" placeholder="Name" required="required">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group mb-30">
                                                    <input id="form_email" type="email" name="email" placeholder="Email" required="required">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group mb-30">
                                                    <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
                                                </div>
                                                <div class="mt-30">
                                                    <button type="submit" class="butn butn-full butn-bord radius-30">
                                                        <span class="text">Let's Talk</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Contact ==================== -->



                <!-- ==================== Start Footer ==================== -->

                <footer class="min-footer sub-bg pt-30 pb-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 md-mb15">
                                <div class="logo icon-img-100">
                                    <img src="assets/imgs/logo2.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 order-md-3">
                                <div class="text-center">
                                    <p class="fz-14">© 2025 Designed and developed by mufid <span class="underline main-color"><a href="https://instagram.com/_bad_mash_buowy" target="_blank">Instagram</a></span></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </footer>

                <!-- ==================== End Footer ==================== -->


            </main>

        </div>

    </div>










    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery-migrate-3.4.0.min.js"></script>

    <!-- plugins -->
    <script src="assets/js/plugins.js"></script>

    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/smoother-script.js"></script>

    <!-- custom scripts -->
    <script src="assets/js/scripts.js"></script>


</body>

</html>