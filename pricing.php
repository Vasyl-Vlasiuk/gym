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
                <div class="header-block__name">ABOUT US</div>
            </div>
        </div>
    </div>
    
    <div class="pricing">
        <div class="container">
            <div class="pricing__title">Pricing and plans</div>
            <div class="pricing__inner">
                <div class="pricing__item">
                    <div class="pricing__time-training">ONE DAY TRAINING</div>
                    <div class="pricing__price">Free</div>
                    <ul class="pricing__services">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                    </ul>
                    <a href="" class="pricing__btn">BUY NOW</a>
                </div>
    
                <div class="pricing__item">
                    <div class="pricing__time-training">3 MONTHS MEMBERSHIP</div>
                    <div class="pricing__price">$33.33</div>
                    <ul class="pricing__services">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                    </ul>
                    <a href="" class="pricing__btn">BUY NOW</a>
                </div>
    
                <div class="pricing__item pricing__item--offer">
                    <div class="pricing__time-training">6 MONTHS MEMBERSHIP</div>
                    <div class="pricing__price">$49.00</div>
                    <ul class="pricing__services">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                    </ul>
                    <a href="" class="pricing__btn pricing__btn--offer"> BUY NOW</a>
                </div>
    
                <div class="pricing__item ">
                    <div class="pricing__time-training">12 MONTHS MEMBERSHIP</div>
                    <div class="pricing__price">$120.00</div>
                    <ul class="pricing__services">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                    </ul>
                    <a href="" class="pricing__btn">BUY NOW</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="question">
        <div class="container">
            <div class="question__inner">
                <div class="question__text">
                    <div class="question__ask">Have a question?</div>
                    <div class="question__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, Please don’t hesitate to call our customer service!</div>
                </div>
    
                <div class="question__call">
                    <a class="question__call-btn" href="tel:1-900-342-9876">1-900-342-9876</a>
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
                    require "blocks-html/events.php"
                ?>
            </div>
        </div>
    </div>

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