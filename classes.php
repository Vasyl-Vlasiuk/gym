<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;1,300&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>GYM</title>
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
                <div class="header-block__name">Classes</div>
            </div>
        </div>
    </div>
   
    <!-- Workers -->
    <div class="classes-trainers">
        <div class="container">
            <div class="classes-trainers__intro">
                <!-- Worker1 -->
                <div class="classes-trainers__item">
                    <div class="classes-trainers__photo"><img src="images/trainers/1.jpg" alt=""></div>
                    <div class="classes-trainers__content content-classes">
                        <div class="content-classes__title">KIK BOXING</div>
                        <div class="content-classes__subtitle">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. Aliquam id odio sit amet mauris porttitor iaculis a eu dui.</div>
                        <div class="worker-classes">
                            <div class="worker-classes__info">
                                <div class="worker-classes__photo"><img src="images/trainers/1.jpg" alt=""></div>
                                <div class="worker-classes__text">
                                    <div class="worker-classes__prof">TRAINER</div>
                                    <div class="worker-classes__name">VICTOR Jones</div>
                                    <div class="worker-classes__description">Creating the perfect body is no small matter. </div>
                                </div>
                            </div>
                            <div class="worker-classes__link">
                                <a class="worker-classes__btn" href="">read more</a>
                                <a class="worker-classes__btn" href="">timetable</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Worker2 -->
                <div class="classes-trainers__item">
                    <div class="classes-trainers__photo"><img src="images/trainers/2.jpg" alt=""></div>
                    <div class="classes-trainers__content content-classes">
                        <div class="content-classes__title">SPINNING</div>
                        <div class="content-classes__subtitle">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. Aliquam id odio sit amet mauris porttitor iaculis a eu dui.</div>
                        <div class="worker-classes">
                            <div class="worker-classes__info">
                                <div class="worker-classes__photo"><img src="images/trainers/2.jpg" alt=""></div>
                                <div class="worker-classes__text">
                                    <div class="worker-classes__prof">TRAINER</div>
                                    <div class="worker-classes__name">REBECCA SMITH</div>
                                    <div class="worker-classes__description">Creating the perfect body is no small matter. </div>
                                </div>
                            </div>
                            <div class="worker-classes__link">
                                <a class="worker-classes__btn" href="">read more</a>
                                <a class="worker-classes__btn" href="">timetable</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Worker3 -->
                <div class="classes-trainers__item">
                    <div class="classes-trainers__photo"><img src="images/trainers/3.jpg" alt=""></div>
                    <div class="classes-trainers__content content-classes">
                        <div class="content-classes__title">CROSSFIT</div>
                        <div class="content-classes__subtitle">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. Aliquam id odio sit amet mauris porttitor iaculis a eu dui.</div>
                        <div class="worker-classes">
                            <div class="worker-classes__info">
                                <div class="worker-classes__photo"><img src="images/trainers/3.jpg" alt=""></div>
                                <div class="worker-classes__text">
                                    <div class="worker-classes__prof">TRAINER</div>
                                    <div class="worker-classes__name">MARC STORM</div>
                                    <div class="worker-classes__description">Creating the perfect body is no small matter. </div>
                                </div>
                            </div>
                            <div class="worker-classes__link">
                                <a class="worker-classes__btn" href="">read more</a>
                                <a class="worker-classes__btn" href="">timetable</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Worker4 -->
                <div class="classes-trainers__item">
                    <div class="classes-trainers__photo"><img src="images/trainers/4.jpg" alt=""></div>
                    <div class="classes-trainers__content content-classes">
                        <div class="content-classes__title">AEROBICS</div>
                        <div class="content-classes__subtitle">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. Aliquam id odio sit amet mauris porttitor iaculis a eu dui.</div>
                        <div class="worker-classes">
                            <div class="worker-classes__info">
                                <div class="worker-classes__photo"><img src="images/trainers/4.jpg" alt=""></div>
                                <div class="worker-classes__text">
                                    <div class="worker-classes__prof">TRAINER</div>
                                    <div class="worker-classes__name">JASMINE PATTER</div>
                                    <div class="worker-classes__description">Creating the perfect body is no small matter. </div>
                                </div>
                            </div>
                            <div class="worker-classes__link">
                                <a class="worker-classes__btn" href="">read more</a>
                                <a class="worker-classes__btn" href="">timetable</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Worker5 -->
                <div class="classes-trainers__item">
                    <div class="classes-trainers__photo"><img src="images/trainers/5.jpg" alt=""></div>
                    <div class="classes-trainers__content content-classes">
                        <div class="content-classes__title">CARDIO FITNESS</div>
                        <div class="content-classes__subtitle">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. Aliquam id odio sit amet mauris porttitor iaculis a eu dui.</div>
                        <div class="worker-classes">
                            <div class="worker-classes__info">
                                <div class="worker-classes__photo"><img src="images/trainers/5.jpg" alt=""></div>
                                <div class="worker-classes__text">
                                    <div class="worker-classes__prof">TRAINER</div>
                                    <div class="worker-classes__name">Jack GODMAN</div>
                                    <div class="worker-classes__description">Creating the perfect body is no small matter. </div>
                                </div>
                            </div>
                            <div class="worker-classes__link">
                                <a class="worker-classes__btn" href="">read more</a>
                                <a class="worker-classes__btn" href="">timetable</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Worker6 -->
                <div class="classes-trainers__item">
                    <div class="classes-trainers__photo"><img src="images/trainers/6.jpg" alt=""></div>
                    <div class="classes-trainers__content content-classes">
                        <div class="content-classes__title">YOGA</div>
                        <div class="content-classes__subtitle">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. Aliquam id odio sit amet mauris porttitor iaculis a eu dui.</div>
                        <div class="worker-classes">
                            <div class="worker-classes__info">
                                <div class="worker-classes__photo"><img src="images/trainers/6.jpg" alt=""></div>
                                <div class="worker-classes__text">
                                    <div class="worker-classes__prof">TRAINER</div>
                                    <div class="worker-classes__name">DEMI MOSS</div>
                                    <div class="worker-classes__description">Creating the perfect body is no small matter. </div>
                                </div>
                            </div>
                            <div class="worker-classes__link">
                                <a class="worker-classes__btn" href="">read more</a>
                                <a class="worker-classes__btn" href="">timetable</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Classes/events -->
    <div class="container">
        <div class="section-blocks">
            <div class="section-classes">
                <?php 
                    require "blocks-html/classes.php"
                ?>
            </div>
    
            <div class="section-events">
                <?php 
                    require "blocks-html/blog.php"
                ?>
            </div>
        </div>
    </div>
  

    <?php 
        require "blocks-html/join.php"
    ?>

    <!--Gallery/partner +-->
    <div class="container">
        <div class="section-blocks">
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


    <?php 
        require "blocks-html/twitter-box.php"
    ?>

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