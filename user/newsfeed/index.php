<!DOCTYPE html>
<html>

<head>
    <title>NewsFeed</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- [if lt IE 9]> -->
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <!-- <![endif] -->
</head>

<body>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <div class="container">
        <header id="header">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="header_top">
                        
                        <div class="header_top_right">
                            <p>
                            <?php
                             // set the default timezone to use. Available since PHP 5.1
                            date_default_timezone_set('Africa/Nairobi');

                            // Prints date and time
                            echo date("r");
?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="header_bottom">
                        <div class="logo_area">
                            <a href="index.html" class="logo"><img src="" alt=""></a>
                        </div>
                        <div class="add_banner">
                            <a href="#"><img src="" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
       
   
        
        <section id="contentSection">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="left_content">
                        <div class="single_post_content">
                            <h2><span>Administration corner</span></h2>
                            <div class="single_post_content_left">
                                <ul class="business_catgnav  wow fadeInDown">
                                    <li>
                                        <figure class="bsbig_fig">
                                            <a href="pages/single_page.html" class="featured_img"> <img alt="" src="newsfeed/images/udsm.jpeg"> <span class="overlay"></span> </a>
                                            <figcaption> <a href="pages/single_page.html">.........................</a> </figcaption>
                                            <p>...................................</p>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                            <div class="single_post_content_right">
                                <ul class="spost_nav">
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="pages/single_page.html" class="media-left"> <img alt="image" src="images/post_img1.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> news link </a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="pages/single_page.html" class="media-left"> <img alt="image" src="images/post_img2.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> news link</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="pages/single_page.html" class="media-left"> <img alt="image" src="images/post_img1.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> news link</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="pages/single_page.html" class="media-left"> <img alt="image" src="images/post_img2.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title">news link</a> </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="fashion_technology_area">
                            <div class="fashion">
                                <div class="single_post_content">
                                    <h2><span>Library Corner</span></h2>
                                    <ul class="business_catgnav wow fadeInDown">
                                        <li>
                                            <figure class="bsbig_fig">
                                                <a href="pages/single_page.html" class="featured_img"> <img alt="" src="newsfeed/images/library.jpg"> <span class="overlay"></span> </a>
                                                <figcaption> <a href="pages/single_page.html">................................................</a> </figcaption>
                                                <p>...................................................................</p>
                                            </figure>
                                        </li>
                                    </ul>
                                    <ul class="spost_nav">
                                        <li>
                                            <div class="media wow fadeInDown">
                                                <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title">.................................................</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown">
                                                <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title">.................................................</a> </div>
                                            </div>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="technology">
                                <div class="single_post_content">
                                    <h2><span>Cafeteria Corner</span></h2>
                                    <ul class="business_catgnav">
                                        <li>
                                            <figure class="bsbig_fig wow fadeInDown">
                                                <a href="pages/single_page.html" class="featured_img"> <img alt="" src="newsfeed/images/cafeteria.jpg"> <span class="overlay"></span> </a>
                                                <figcaption> <a href="pages/single_page.html">........................................................</a> </figcaption>
                                                <p>...........................................................................</p>
                                            </figure>
                                        </li>
                                    </ul>
                                    <ul class="spost_nav">
                                        <li>
                                            <div class="media wow fadeInDown">
                                                <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title">............................................</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown">
                                                <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> ..........................................</a> </div>
                                            </div>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_post_content">
                            <h2><span>Sports Corner</span></h2>
                            <div class="single_post_content_left">
                                <ul class="business_catgnav">
                                    <li>
                                        <figure class="bsbig_fig  wow fadeInDown">
                                            <a class="featured_img" href="pages/single_page.html"> <img src="images/featured_img1.jpg" alt=""> <span class="overlay"></span> </a>
                                            <figcaption> <a href="pages/single_page.html">..................................................</a> </figcaption>
                                            <p>.....................</p>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                            <div class="single_post_content_right">
                                <ul class="spost_nav">
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> annoncement 1</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> annoncement 2</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> annoncement 3</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> annoncement 4</a> </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <aside class="right_content">
                        <div class="single_sidebar">
                            <h2><span>Hostel Corner</span></h2>
                            <ul class="spost_nav">
                                <li>
                                    <div class="media wow fadeInDown">
                                        <a href="pages/single_page.html" class="media-left"> <img alt="" src="newsfeed/images/hostels.jpg"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> news no 1</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown">
                                        <a href="pages/single_page.html" class="media-left"> <img alt="" src="newsfeed/images/magu.jpg"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> news no 2</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown">
                                        <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> news no 3</a> </div>
                                    </div>
                                </li>
                               
                            </ul>
                        </div>
                        <div class="single_sidebar">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Other Udsm Systems</a></li>
                                                           
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="category">
                                    <ul>
                                        <li class="cat-item"><a href="https://ptms.coict.udsm.ac.tz/user/auth/login">PTMS for COICT</a></li>
                                        <li class="cat-item"><a href="https://aris2.udsm.ac.tz/">Aris</a></li>
                                        <li class="cat-item"><a href="https://timetable.udsm.ac.tz/">Timetable</a></li>
                                        <li class="cat-item"><a href="https://lms.udsm.ac.tz/login/index.php">LMS</a></li>
                                        <li class="cat-item"><a href="#">Library</a></li>
                                        
                                    </ul>
                                </div>
                                
                                <div role="tabpanel" class="tab-pane" id="comments">
                                    <ul class="spost_nav">
                                        <li>
                                            <div class="media wow fadeInDown">
                                                <a href="pages/single_page.html" class="media-left"> <img alt="image" src=""> </a>
                                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title">news link 1</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown">
                                                <a href="pages/single_page.html" class="media-left"> <img alt="image" src=""> </a>
                                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> news link 2</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown">
                                                <a href="pages/single_page.html" class="media-left"> <img alt="image" src=""> </a>
                                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> news link 3</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown">
                                                <a href="pages/single_page.html" class="media-left"> <img alt="image" src=""> </a>
                                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> news link 4</a> </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single_sidebar wow fadeInDown">
                            <h2><span>Dean Corner</span></h2>
                            <a class="sideAdd" href="#"><img src="newsfeed/images/dean.jpg" alt=""></a>
                        </div>
                        
                        <div class="single_sidebar wow fadeInDown">
                            <h2><span>Other Udsm College Links</span></h2>
                            <ul>
                                <li><a href="#">SJMC</a></li>
                                <li><a href="#">UDBS</a></li>
                                <li><a href="#">COHU</a></li>
                                <li><a href="#">COET</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <footer id="footer">
            
            <div class="d-flex">
                <p class="copyright">Copyright &copy; 2019 <a href="index.html">notice board system</a></p>
                <span class="developer">Team: Masaka Mgini Mwaulanga</span>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.li-scroller.1.0.js"></script>
    <script src="assets/js/jquery.newsTicker.min.js"></script>
    <script src="assets/js/jquery.fancybox.pack.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>