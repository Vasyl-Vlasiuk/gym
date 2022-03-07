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
            <div class="header-block__inner header-block__inner--long">
                <div class="header-block__slide"></div>
                <div class="header-block__name">CLASSES <span> > pilates</span></div>
            </div>
        </div>
    </div>

    <!-- Trainer/featured/pricing -->
    <div class="container">
        <div class="class-single">
            <div class="class-single__content">
                <div class="class-single__media">
                    <img src="images/class-single/pilates.jpg" alt="">
                </div>
                <div class="class-single__description">
                    Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                </div>
                <!-- Trainer/featured/pricing -->
                <div class="class-single__blocks">
                    
                    <div class="class-single__col worker">
                        <div class="class-single__title">TRAINER</div>
                        <div class="worker__img">
                            <img src="images/trainers/6.jpg" alt="">
                        </div>
                        <div class="worker__name black-color">REBECCA SMITH</div>
                        <div class="worker__prof red-color">SPINNING</div>
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

                    <div class="class-single__col feature">
                        <div class="feature__title">FEATURED</div>
                        <div class="feature__inner">
                            <div class="feature__item">Duis dapibus aliquam mi</div>
                            <div class="feature__item">Duis dapibus aliquam mi</div>
                            <div class="feature__item">Duis dapibus aliquam mi</div>
                            <div class="feature__item">Duis dapibus aliquam mi</div>
                            <div class="feature__item">Duis dapibus aliquam mi</div>
                        </div>
                    </div>

                    <div class="class-single__col pricing-class">
                        <div class="pricing-class__title">Pricing of Class</div>
                        <div class="pricing-class__inner">
                            <div class="pricing-class__item">
                                <div class="pricing-class__sum">3 days session</div>
                                <div class="pricing-class__price">$   9,90</div>
                            </div>
                            <div class="pricing-class__item">
                                <div class="pricing-class__sum">7 days session</div>
                                <div class="pricing-class__price">$ 15,90</div>
                            </div>
                            <div class="pricing-class__item">
                                <div class="pricing-class__sum">15 days session</div>
                                <div class="pricing-class__price">$ 27,90</div>
                            </div>
                            <div class="pricing-class__item">
                                <div class="pricing-class__sum">30 days session</div>
                                <div class="pricing-class__price">$ 45,00</div>
                            </div>
                            <div class="pricing-class__item">
                                <div class="pricing-class__sum">60 days session</div>
                                <div class="pricing-class__price">$ 75,00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="class-single__aside">
                <div class="class-single__map-scedule">
                    <?php 
                        require "blocks-html/map-scedule.php"
                    ?>
                </div>
                <div class="class-single__price">
                    <?php 
                        require "blocks-html/prices.php"
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Join -->
    <?php 
        require "blocks-html/join.php"
    ?>

    <!-- Quote -->>
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

    <?php 
        require "blocks-html/footer.php"
    ?>

    <?php 
        require "blocks-html/social-networks-footer.php"
    ?>

</div>

<!-- Подключаем jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

<!-- Подключаем файл JS скриптов -->
<script src="js/main.js"></script> -->

<!-- Підключаємо слайдер -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Подключаем map -->
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBO4-vFdJzcdXkUMJ5RQAJGakFcpUCX-b8&callback=initMap&libraries=&v=weekly"
      defer
></script>

</body>
</html>