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

    <div class="header-contacts">
        <div class="hedear-contacts__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.218542723223!2d-118.33176328435425!3d34.08954148059574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf337032e6bd%3A0x9f8884792eb5203e!2sGold&#39;s%20Gym!5e0!3m2!1sru!2sua!4v1606236690960!5m2!1sru!2sua" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="container">
            <div class="header-block__inner">
                <div class="header-block__name">CONTACTS</div>
            </div>
        </div>
    </div>



    <div class="intro-contacts">
        <div class="container">
            <div class="intro-contacts__inner">
                <form class="intro-contacts__form intro-form" action="meta">
                    <div class="intro-form__title">send us a message</div>
                    <div class="intro-form__text">We are an independent gym that is committed to working with you to gain the results you. </div>
                    <div class="intro-form__items">
                        <input class="intro-form__item" type="name" placeholder="your name">
                        <input class="intro-form__item" type="email" placeholder="email addres">
                        <input class="intro-form__item" type="name" placeholder="subject">
                    </div>
                    <div class="intro-form__row">
                        <textarea class="intro-form__textarea" placeholder="your text" name="text"></textarea>
                        <div  class="intro-form__btn-block">
                            <button class="intro-form__btn" type="submit">submit your message</button>
                            <p class="intro-form__textbtn">Make sure you put a valid email.</p>
                        </div>
                    </div>
                </form>

                <div class="intro-bottom__info info-content">
                    <div class="info-content__title">contact info</div>
                    <div class="info-content__description">Ut volutpat consectetur aliquam. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum gravida, metus elit vehicula dui.
                    </div>
                    <a class="info-content__call" href="tel:1-900-342-98-76">+1-900-342-9876</a>
                    <a class="info-content__mail" href="mailto:info@gymsports.com" >info@gymsports.com</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Map-scedule/events/blog/ -->
    <div class="container">
        <div class="section-contacts">
            <!-- Map -->
            <div class="section-contacts__scedule">
                <?php 
                    require "blocks-html/map-scedule.php"
                ?>
            </div>

            <div class="section-contacts__blocks">
                <div class="section-contacts__row">
                    <!-- Events -->
                    <div class="section-contacts__events">
                        <?php 
                            require "blocks-html/events.php"
                        ?>
                    </div>
                    <!-- Blog -->
                    <div class="section-contacts__blog">
                        <?php 
                            require "blocks-html/blog.php"
                        ?>
                    </div>
                </div>

                <!-- Conection -->
                <div class="section-contacts__row contacts-conection">
                    <div class="contacts-conection__content">
                        <div class="contacts-conection__title">WHY JOIN?</div>
                        <div class="contacts-conection__subtitle">This is an awesome subhead</div>
                        <div class="contacts-conection__description">Maecenas mattis vitae tellus vel interdum. Quisque lacinia mauris id convallis pretium. Aliquam id odio sit amet mauris porttitor iaculis a eu dui.</div>
                    </div>
                    <a href="" class="contacts-conection__btn">JOIN TODAY</a>
                </div>
            </div>

            <div class="section-contacts__scedule--copy">
                <?php 
                    require "blocks-html/map-scedule.php"
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