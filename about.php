<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;1,300&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>About</title>
</head>

<body>

<!-- Sprite - icon-->
<?php 
    require "templates/sprite.php"
?>

<!-- Page -->
<div class="wraper">
    
    <div class="fixed-container">
        <!-- Social-networks + -->
        <?php 
            require "blocks-html/social-networks.php"
        ?>

        <!-- Menu -->
        <?php 
            require "blocks-html/menu.php"
        ?>
    </div>

    <div class="header-block">
        <img class="header-block__img" src="images/intro-bg.jpg" alt="">
        <div class="container">
            <div class="header-block__inner">
                <div class="header-block__name">ABOUT US</div>
            </div>
        </div>
    </div>

    <div class="intro-bottom">
        <div class="container">
            <div class="intro-bottom__inner">
                <img class="intro-bottom__photo" src="images/about/team.jpg" alt="370x200">
                <div class="intro-bottom__content">
                    <div class="intro-bottom__title">Lorem ipsum dolorsit!</div>
                    <div class="intro-bottom__text">Simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy </div>
                    <div class="intro-bottom__worker">John Wolf - <span> GYMSport Responsabile </span></div>
                </div>
            </div>
        </div>
    </div>

    <!-- TRAINERS -->
    <div class="trainers-page">
        <div class="container">
            <div class="block-name">OUR TRAINERS</div>
            <div class="inner-trainers">
                <!-- worker 1-->
                <div class="trainers__content">
                    <div class="trainers__item worker">
                        <div class="worker__img">
                            <img src="images/trainers/1.jpg" alt="">
                        </div>
                        <div class="worker__name white-color">JOHN JONES</div>
                        <div class="worker__prof yellow-color">KIK BOXING</div>
                        <div class="worker__description white-color">
                            Creating the perfect body is no small matter.
                        </div>
        
                        <div class="worker__footer">
                            <div class="worker__like">
                                <a class="worker__like-item" href="#" target="_blank">
                                    <svg class="worker__like-link">
                                        <use xlink:href="#heart"></use>
                                    </svg>
                                </a>
        
                                <a class="worker__like-item" href="#" target="_blank">
                                    <svg class="worker__like-link">
                                        <use xlink:href="#like"></use>
                                    </svg>
                                </a>
                            </div>
        
                            <div class="worker__network">
                                <a class="worker__network-item" href="#" target="_blank">
                                    <svg class="worker__network-link">
                                        <use xlink:href="#twitter"></use>
                                    </svg>
                                </a>
        
                                <a class="worker__network-item" href="#" target="_blank">
                                    <svg class="worker__network-link">
                                        <use xlink:href="#facebook"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
        
                    <!-- content-->
                    <div class="trainers__item content-worker">
                        <div class="content-worker__level">Qualifications</div>
                        <div class="content-worker__more-level">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. Aliquam id odio sit amet mauris porttitor iaculis a eu dui.</div>
                        <div class="content-worker__prof">Speciality</div>
                        <div class="content-worker__more-prof">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. </div>
                    </div>
                </div>
        
                <!-- worker 2-->
                <div class="trainers__content">
                    <div class="trainers__item worker">
                        <div class="worker__img">
                            <img src="images/trainers/2.jpg" alt="">
                        </div>
                        <div class="worker__name black-color">REBECCA SMITH</div>
                        <div class="worker__prof red-color">Spinning</div>
                        <div class="worker__description black-color">
                            Creating the perfect body is no small matter.
                        </div>
        
                        <div class="worker__footer">
                            <div class="worker__like">
                                <a class="worker__like-item" href="#" target="_blank">
                                    <svg class="worker__like-link">
                                        <use xlink:href="#heart"></use>
                                    </svg>
                                </a>
        
                                <a class="worker__like-item" href="#" target="_blank">
                                    <svg class="worker__like-link">
                                        <use xlink:href="#like"></use>
                                    </svg>
                                </a>
                            </div>
        
                            <div class="worker__network">
                                <a class="worker__network-item" href="#" target="_blank">
                                    <svg class="worker__network-link">
                                        <use xlink:href="#twitter"></use>
                                    </svg>
                                </a>
        
                                <a class="worker__network-item" href="#" target="_blank">
                                    <svg class="worker__network-link">
                                        <use xlink:href="#facebook"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
        
                    <!-- content-->
                    <div class="trainers__item content-worker">
                        <div class="content-worker__level">Qualifications</div>
                        <div class="content-worker__more-level">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. Aliquam id odio sit amet mauris porttitor iaculis a eu dui.</div>
                        <div class="content-worker__prof">Speciality</div>
                        <div class="content-worker__more-prof">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. </div>
                    </div>
                </div>
        
                <!-- worker 3-->
                <div class="trainers__content">
                    <div class="trainers__item worker">
                        <div class="worker__img">
                        <img src="images/trainers/3.jpg" alt="">
                        </div>
                        <div class="worker__name white-color">MARC STORM</div>
                        <div class="worker__prof yellow-color">CROSSFIT</div>
                        <div class="worker__description white-color">
                            Creating the perfect body is no small matter.
                        </div>
        
                        <div class="worker__footer">
                            <div class="worker__like">
                                <a class="worker__like-item" href="#" target="_blank">
                                    <svg class="worker__like-link">
                                        <use xlink:href="#heart"></use>
                                    </svg>
                                </a>
        
                                <a class="worker__like-item" href="#" target="_blank">
                                    <svg class="worker__like-link">
                                        <use xlink:href="#like"></use>
                                    </svg>
                                </a>
                            </div>
        
                            <div class="worker__network">
                                <a class="worker__network-item" href="#" target="_blank">
                                    <svg class="worker__network-link">
                                        <use xlink:href="#twitter"></use>
                                    </svg>
                                </a>
        
                                <a class="worker__network-item" href="#" target="_blank">
                                    <svg class="worker__network-link">
                                        <use xlink:href="#facebook"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
        
                    <!-- content-->
                    <div class="trainers__item content-worker">
                        <div class="content-worker__level">Qualifications</div>
                        <div class="content-worker__more-level">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. Aliquam id odio sit amet mauris porttitor iaculis a eu dui.</div>
                        <div class="content-worker__prof">Speciality</div>
                        <div class="content-worker__more-prof">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. </div>
                    </div>
                </div>
        
                <!-- worker 4-->
                <div class="trainers__content">
                    <div class="trainers__item worker">
                        <div class="worker__img">
                            <img src="images/trainers/4.jpg" alt="">
                        </div>
                        <div class="worker__name black-color">JASMINE PATTER</div>
                        <div class="worker__prof red-color">AEROBICS</div>
                        <div class="worker__description black-color">
                            Creating the perfect body is no small matter.
                        </div>
        
                        <div class="worker__footer">
                            <div class="worker__like">
                                <a class="worker__like-item" href="#" target="_blank">
                                    <svg class="worker__like-link">
                                        <use xlink:href="#heart"></use>
                                    </svg>
                                </a>
        
                                <a class="worker__like-item" href="#" target="_blank">
                                    <svg class="worker__like-link">
                                        <use xlink:href="#like"></use>
                                    </svg>
                                </a>
                            </div>
        
                            <div class="worker__network">
                                <a class="worker__network-item" href="#" target="_blank">
                                    <svg class="worker__network-link">
                                        <use xlink:href="#twitter"></use>
                                    </svg>
                                </a>
        
                                <a class="worker__network-item" href="#" target="_blank">
                                    <svg class="worker__network-link">
                                        <use xlink:href="#facebook"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
        
                    <!-- content-->
                    <div class="trainers__item content-worker">
                        <div class="content-worker__level">Qualifications</div>
                        <div class="content-worker__more-level">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. Aliquam id odio sit amet mauris porttitor iaculis a eu dui.</div>
                        <div class="content-worker__prof">Speciality</div>
                        <div class="content-worker__more-prof">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. </div>
                    </div>
                </div>
        
                <!-- worker 5-->
                <div class="trainers__content">
                    <div class="trainers__item worker">
                        <div class="worker__img">
                        <img src="images/trainers/5.jpg" alt="">
                        </div>
                        <div class="worker__name white-color">Jack GODMAN</div>
                        <div class="worker__prof yellow-color">CARDIO FITNESS</div>
                        <div class="worker__description white-color">
                            Creating the perfect body is no small matter.
                        </div>
        
                        <div class="worker__footer">
                            <div class="worker__like">
                                <a class="worker__like-item" href="#" target="_blank">
                                    <svg class="worker__like-link">
                                        <use xlink:href="#heart"></use>
                                    </svg>
                                </a>
        
                                <a class="worker__like-item" href="#" target="_blank">
                                    <svg class="worker__like-link">
                                        <use xlink:href="#like"></use>
                                    </svg>
                                </a>
                            </div>
        
                            <div class="worker__network">
                                <a class="worker__network-item" href="#" target="_blank">
                                    <svg class="worker__network-link">
                                        <use xlink:href="#twitter"></use>
                                    </svg>
                                </a>
        
                                <a class="worker__network-item" href="#" target="_blank">
                                    <svg class="worker__network-link">
                                        <use xlink:href="#facebook"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
        
                    <!-- content-->
                    <div class="trainers__item content-worker">
                        <div class="content-worker__level">Qualifications</div>
                        <div class="content-worker__more-level">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. Aliquam id odio sit amet mauris porttitor iaculis a eu dui.</div>
                        <div class="content-worker__prof">Speciality</div>
                        <div class="content-worker__more-prof">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. </div>
                    </div>
                </div>
        
                <!-- worker 6-->
                <div class="trainers__content">
                    <div class="trainers__item worker">
                        <div class="worker__img">
                            <img src="images/trainers/6.jpg" alt="">
                        </div>
                        <div class="worker__name black-color">DEMI MOSS</div>
                        <div class="worker__prof red-color">YOGA</div>
                        <div class="worker__description black-color">
                            Creating the perfect body is no small matter.
                        </div>
        
                        <div class="worker__footer">
                            <div class="worker__like">
                                <a class="worker__like-item" href="#" target="_blank">
                                    <svg class="worker__like-link">
                                        <use xlink:href="#heart"></use>
                                    </svg>
                                </a>
        
                                <a class="worker__like-item" href="#" target="_blank">
                                    <svg class="worker__like-link">
                                        <use xlink:href="#like"></use>
                                    </svg>
                                </a>
                            </div>
        
                            <div class="worker__network">
                                <a class="worker__network-item" href="#" target="_blank">
                                    <svg class="worker__network-link">
                                        <use xlink:href="#twitter"></use>
                                    </svg>
                                </a>
        
                                <a class="worker__network-item" href="#" target="_blank">
                                    <svg class="worker__network-link">
                                        <use xlink:href="#facebook"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
        
                    <!-- content-->
                    <div class="trainers__item content-worker">
                        <div class="content-worker__level">Qualifications</div>
                        <div class="content-worker__more-level">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. Aliquam id odio sit amet mauris porttitor iaculis a eu dui.</div>
                        <div class="content-worker__prof">Speciality</div>
                        <div class="content-worker__more-prof">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Join -->
    <?php 
        require "blocks-html/join.php"
    ?>

    <!-- Quote +-->
    <div class="quote">
        <div class="container">
            <div class="quote__inner">
                <div class="quote__img">
                    <img src="images/about/quote-icon.png" alt="" class="quote__icon">
                </div>
                <div class="quote__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                </div>
                <div class="quote__worker">John White, <span> CEO - THEUNCREATIVELAB </span></div>
            </div>
        </div>
    </div>

    <!--Gallery/partner +-->
    <div class="container">
        <div class="section-blocks section-mb30">
            <div class="section-gallery">
                <?php 
                    require "blocks-html/gallery.php"
                ?>
            </div>

            <div class="section-partner">
                <?php 
                    require "blocks-html/partner.php"
                ?>
            </div>
        </div>
    </div>

    <!-- Footer + -->
    <?php 
        require "blocks-html/footer.php"
    ?>

    <?php 
        require "blocks-html/social-networks-footer.php"
    ?>

</div>

<!-- Підключаємо слайдер -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Подключаем jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<!-- Подключаем файл JS скриптов -->
<script src="js/main.js"></script>

</body>
</html>