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

    <!-- Header +-->
    <?php 
        require "blocks-html/header.php"
    ?>

    <!-- Menu -->
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


    <!-- Intro +-->
    <?php 
        require "blocks-html/intro.php"
    ?>

    <!-- Live +-->
    <?php 
        require "blocks-html/live.php"
    ?>

    <!--Classes/prices/trainers/events/blog -->
    <div class="container">
        <div class="section-blocks">
            
            <div class="section-classes">
                <?php 
                    require "blocks-html/classes.php"
                ?>
            </div>

            <div class="section-prices">
                <?php 
                    require "blocks-html/prices.php"
                ?>
            </div>
    
            <div class="section-trainers">
                <?php 
                    require "blocks-html/trainers.php"
                ?>
            </div>

            <div class="section-events">
                <?php 
                    require "blocks-html/events.php"
                ?>
            </div>

            <div class="section-blog">
                <?php 
                    require "blocks-html/blog.php"
                ?>
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

            <div class="section-partner section-mb50">
                <?php 
                    require "blocks-html/partner.php"
                ?>
            </div>
        </div>
    </div>

    <!-- Map -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.218542723223!2d-118.33176328435425!3d34.08954148059574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf337032e6bd%3A0x9f8884792eb5203e!2sGold&#39;s%20Gym!5e0!3m2!1sru!2sua!4v1606236690960!5m2!1sru!2sua" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="container">
            <!-- <div class="map__indicator" >
                <img src="images/sprite/location.svg" alt="">
            </div> -->
            <div class="map-scedule--position">
                <?php 
                    require "blocks-html/map-scedule.php"
                ?>
            </div>
        </div>
    </div>

    <!-- <div id="map"></div> -->
    
    <!-- Twitter-box -->
    <?php 
            require "blocks-html/twitter-box.php"
    ?>

    <!-- Footer -->
    <?php 
            require "blocks-html/footer.php"
    ?>

    <!-- Social-networks-footer -->
    <?php 
        require "blocks-html/social-networks-footer.php"
    ?>  

</div>

<!-- Підключаємо слайдер -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Подключаем jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

<!-- Подключаем файл JS скриптов -->
<script src="js/main.js"></script> -->

<!-- Подключаем map -->
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBO4-vFdJzcdXkUMJ5RQAJGakFcpUCX-b8&callback=initMap&libraries=&v=weekly"
      defer
></script>

</body>
</html>