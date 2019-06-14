<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MASSIVELY</title>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="style.css?v=1">
    <link rel="shortcut icon" href="img/logotwo.png" type="image/jpg">
    <link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body>
    <div id="container" class="container">
        <div class="row content">
            <div id="menu_block" class="menu_block">
                <div id="menu_absolute" class="menu_absolute">
                    <div href="javascript:void(0);" onclick="menuCrossFunction()" class="menu_cross">
                        <i class="fas fa-times"></i>
                    </div>
                        <ul id="menu_absolute_ul" class="menu_absolute_ul">
                            <li class="menu_absolute_ul_li menu_absolute_ul_li_active">
                                <a href="index.php">
                                    <p>
                                        This is Massively
                                    </p>
                                </a>
                            </li>
                            <li class="menu_absolute_ul_li">
                                <a href="generic.html">
                                    <p>
                                        Generic Page
                                    </p>
                                </a>
                            </li>
                            <li class="menu_absolute_ul_li">
                                <a href="elements.html">
                                    <p>
                                        Elements Reference
                                    </p>
                                </a>
                            </li>
                        </ul>
                        <ul class="pagination">
                            <li class="pagination_li">
                                <a href="https://twitter.com/?lang=ru" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="pagination_li">
                                <a href="https://ru-ru.facebook.com/" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="pagination_li">
                                <a href="https://www.instagram.com/?hl=ru" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="pagination_li">
                                <a href="https://github.com/ProgProgrammer" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                        </ul>
                </div>
            </div>
            <header id="header" class="header">
                <a href="javascript:void(0);" onclick="menuAdaptiveFunction()" id="menu_adaptive" class="menu_adaptive" href="">
                    <i class="fas fa-bars"></i> menu
                </a>
                    <div id="header_padding" class="header_padding">
                        <h1 id="header_h1" class="header_h1">THIS IS
                            <br>
                            MASSIVELY</h1>
                        <p id="header_p" class="header_p">
                            A free, fully responsive HTML5 + CSS3 site template designed by
                            <a href="https://github.com/ProgProgrammer" target="_blank">ProgProgrammer</a>
                            <br>
                            for
                            <a href="https://html5up.net/" target="_blank">HTML5 UP</a>
                            and released for free under the
                            <a href="https://html5up.net/license" target="_blank">Creative Commons license</a>.
                        </p>
                        <a href="#header_p" id="header_arrow" class="header_arrow">
                            <i class="fas fa-arrow-down"></i>
                        </a>
                        <a href="index.php" id="button" class="button">massively</a>
                    </div>
                    <div id="nav_header" class="nav_header">
                        <nav id="row_nav" class="row nav">
                            <div id="row_nav_fixed" class="row_nav_fixed">
                                <ul class="col-md-9 menu">
                                    <li class="menu_li menu_active">
                                        <a href="index.php"><p>This is Massively</p></a>
                                    </li>
                                    <li class="menu_li">
                                        <a href="generic.html"><p>Generic Page</p></a>
                                    </li>
                                    <li class="menu_li">
                                        <a href="elements.html"><p>Elements Reference</p></a>
                                    </li>
                                </ul>
                                <ul class="col-md-3 icons">
                                    <li class="icons_li"><a href="#" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a></li>
                                    <li class="icons_li"><a href="#" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a></li>
                                    <li class="icons_li"><a href="#" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a></li>
                                    <li class="icons_li"><a href="https://github.com/ProgProgrammer" target="_blank">
                                        <i class="fab fa-github"></i>
                                    </a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
            </header>
            <main id="main" class="main">
                <article class="main_center">
                    <span class="main_date">April 25, 2019</span>
                    <h2 class="main_h2">
                        <a href="#">
                            And this is a
                            <br>
                            massive headline
                        </a>
                    </h2>
                    <p class="main_p">
                        Aenean ornare velit lacus varius enim ullamcorper proin aliquam
                        <br>
                        facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor
                        <br>
                        amet nullam sed etiam veroeros.
                    </p>
                    <div class="main_div_image">
                        <a href="#">
                            <img src="img/pic01.jpg" alt="image1">
                        </a>
                    </div>
                    <a href="#" class="main_button">full story</a>
                </article>
                <div class="row main_posts">
                    <article class="col-md-6 main_post1">
                        <p class="main_post_p">April 24, 2019</p>
                        <h3 class="main_post_h3"><a href="#">
                            Sed magna
                            <br>
                            ipsum faucibus
                        </a></h3>
                        <div class="main_post_img"><a href="#"><img src="img/pic02.jpg" alt="image2"></a></div>
                        <p class="main_post_p2">
                            Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.
                        </p>
                        <a href="#" class="main_post_a">
                            full story
                        </a>
                    </article>
                    <article class="col-md-6 main_post2">
                        <p class="main_post_p">April 24, 2019</p>
                        <h3 class="main_post_h3"><a href="#">
                            Primis eget
                            <br>
                            imperdiet lorem
                        </a></h3>
                        <div class="main_post_img"><a href="#"><img src="img/pic03.jpg" alt="image3"></a></div>
                        <p class="main_post_p2">
                            Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.
                        </p>
                        <a href="#" class="main_post_a">
                            full story
                        </a>
                    </article>
                    <article class="col-md-6 main_post1">
                        <p class="main_post_p">April 24, 2019</p>
                        <h3 class="main_post_h3"><a href="#">
                            Ante mattis
                            <br>
                            interdum dolor
                        </a></h3>
                        <div class="main_post_img"><a href="#"><img src="img/pic04.jpg" alt="image4"></a></div>
                        <p class="main_post_p2">
                            Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.
                        </p>
                        <a href="#" class="main_post_a">
                            full story
                        </a>
                    </article>
                    <article class="col-md-6 main_post2">
                        <p class="main_post_p">April 24, 2019</p>
                        <h3 class="main_post_h3"><a href="#">
                            Tempus sed
                            <br>
                            nulla imperdiet
                        </a></h3>
                        <div class="main_post_img"><a href="#"><img src="img/pic05.jpg" alt="image5"></a></div>
                        <p class="main_post_p2">
                            Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.
                        </p>
                        <a href="#" class="main_post_a">
                            full story
                        </a>
                    </article>
                    <article class="col-md-6 main_post1">
                        <p class="main_post_p">April 24, 2019</p>
                        <h3 class="main_post_h3"><a href="#">
                            Odio magna
                            <br>
                            sed consectetur
                        </a></h3>
                        <div class="main_post_img"><a href="#"><img src="img/pic06.jpg" alt="image6"></a></div>
                        <p class="main_post_p2">
                            Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.
                        </p>
                        <a href="#" class="main_post_a">
                            full story
                        </a>
                    </article>
                    <article class="col-md-6 main_post2">
                        <p class="main_post_p">April 24, 2019</p>
                        <h3 class="main_post_h3"><a href="#">
                            Augue lorem
                            <br>
                            primis vestibulum
                        </a></h3>
                        <div class="main_post_img"><a href=""><img src="img/pic07.jpg" alt="image7"></a></div>
                        <p class="main_post_p2">
                            Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.
                        </p>
                        <a href="#" class="main_post_a">
                            full story
                        </a>
                    </article>
                </div>
                <div class="main_pagination">
                    <a class="main_pagination_a main_pagination_active" href="#">1</a>
                    <a class="main_pagination_a" href="#">2</a>
                    <a class="main_pagination_a" href="#">3</a>
                    <span class="main_pagination_span"></span>
                    <a class="main_pagination_a" href="#">8</a>
                    <a class="main_pagination_a" href="#">9</a>
                    <a class="main_pagination_a" href="#">10</a>
                    <a class="main_pagination_next" href="#">next <i class="fas fa-chevron-right"></i></a>
                </div>
            </main>
            <footer class="footer_center">
                <div id="footer" class="row footer">
                    <div class="col-md-6 footer_leftblock">
                        <form class="row form" method="post" action="#">
                            <div class="col-md-12 input">
                                <label>name</label>
                                <input type="text" required>
                            </div>
                            <div class="col-md-12 input">
                                <label>email</label>
                                <input type="text" required>
                            </div>
                            <div class="col-md-12 input">
                                <label for="message">message</label>
                                <textarea name="message" id="message" rows="8" required></textarea>
                            </div>
                            <div class="button2">
                                <button type="submit">send message</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 footer_rightblock">
                        <section class="footer_rightblock_block1">
                            <h4>ADDRESS
                            </h4>
                            <p>
                                1234 Somewhere Road #87257
                                Nashville, TN 00000-0000
                            </p>
                        </section>
                        <section class="footer_rightblock_block2">
                            <h4>PHONE
                            </h4>
                            <p><a href="tel:+79178311783">(917) 831-1783</a></p>
                        </section>
                        <section class="footer_rightblock_block3">
                            <h4>EMAIL</h4>
                            <p><a href="mailto:vladimirandreev260@gmail.com">vladimirandreev260@gmail.com</a></p>
                        </section>
                        <section class="footer_rightblock_block4">
                            <h4>SOCIAL</h4>
                            <ul class="footer_rightblock_block4_ul">
                                <li><a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a></li>
                                <li><a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a></li>
                                <li><a href="#" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a></li>
                                <li><a href="https://github.com/ProgProgrammer" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="copyright">
                        <ul class="copyright_ul">
                            <li>© UNTITLED</li>
                            <li>DESIGN: <a href="https://html5up.net" target="_blank">HTML5 UP</a></li>
                            <li>DEMO IMAGES: <a href="https://unsplash.com" target="_blank">UNSPLASH</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="js/animation1.js"></script>
    <script>
        $(document).ready(function(){
            $("#header_padding").on("click","a", function (event) {
                event.preventDefault();
                var id  = $(this).attr('href'),
                    top = $(id).offset().top;
                $('body,html').animate({scrollTop: top}, 1000);
            });
        });
    </script>
    <script src="js/animation_menu.js"></script>
    <script src="js/menu_adaptive.js"></script>
    <script src="js/menu_remove_add.js"></script>
</body>
</html>