<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;1,300&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
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
                <div class="header-block__name">BLOG</div>
            </div>
        </div>
    </div>

    <!-- Blogs -->
    <div class="container">
        <div class="blogs">
            <div class="media">

                <!-- Articles -->
                <div class="media__item">
                    <div class="media__title">
                        Donec quis quam a lorem volutpat vestibulum. Integer pharetra dolor. In in interdum tellus.
                    </div>
                    <img src="images/blog/1.png" alt="" class="media__icon">
                    <div class="media__content">
                        <img class="media__content-img" src="images/blog/run.jpg" alt="">
                    </div>

                    <div class="media__description">
                        <p>
                            Integer ornare libero nisi. Duis ac magna urna. Nulla facilisi. Phasellus at ante magna. Quisque nec porta nulla. Suspendisse nec orci vel elit aliquet blandit in non orci. Vivamus posuere dui eget lacinia rutrum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed ullamcorper neque sed consequat bibendum...
                        </p>

                        <p class="show-text">
                            Integer ornare libero nisi. Duis ac magna urna. Nulla facilisi. Phasellus at ante magna. Quisque nec porta nulla. Suspendisse nec orci vel elit aliquet blandit in non orci. Vivamus posuere dui eget lacinia rutrum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed ullamcorper neque sed consequat bibendum...
                            <br>
                            Integer ornare libero nisi. Duis ac magna urna. Nulla facilisi. Phasellus at ante magna. Quisque nec porta nulla. Suspendisse nec orci vel elit aliquet blandit in non orci. Vivamus posuere dui eget lacinia rutrum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed ullamcorper neque sed consequat bibendum...
                            <br>
                            Integer ornare libero nisi. Duis ac magna urna. Nulla facilisi. Phasellus at ante magna. Quisque nec porta nulla. Suspendisse nec orci vel elit aliquet blandit in non orci. Vivamus posuere dui eget lacinia rutrum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed ullamcorper neque sed consequat bibendum...
                        </p>
                    </div>

                    <div class="media__count">
                        <?php 
                            require "templates/blog-score.php"
                        ?>

                        <a class="spoller--more" href="#">
                            <div class="media__read-more">Read More</div>
                        </a>
                    </div>
                </div>

                <div class="horizontal__line"></div>

                <!-- Images -->
                <div class="media__item">
                    <div class="media__title">
                        Donec quis quam a lorem volutpat vestibulum. Integer pharetra dolor. In in interdum tellus.
                    </div>

                    <img src="images/blog/2.png" alt="" class="media__icon">
                    <div class="media__content">
                        <img class="media__content-img" src="images/blog/stand-arm.jpg" alt="">
                    </div>
                    <div class="media__description">
                        Donec quis quam a lorem volutpat.
                    </div>

                    <div class="media__count">

                        <?php 
                            require "templates/blog-score.php"
                        ?>

                        <a href="#">
                            <div class="media__read-more">Read More</div>
                        </a>
                    </div>
                </div>

                <div class="horizontal__line"></div>

                <!-- Video -->
                <div class="media__item">
                    <div class="media__title">
                        Donec quis quam a lorem volutpat vestibulum. Integer pharetra dolor. In in interdum tellus.
                    </div>

                    <img src="images/blog/3.png" alt="" class="media__icon">
                    <div class="media__content media__content--height">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/v0UtWQ5GuaA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;       picture-in-picture" allowfullscreen>
                        </iframe>
                    </div>

                    <div class="media__player">
                        <!-- <audio style="width:740px; height:30px; margin: 15px 15px 0px;" controls>
                            <source src="audio/music.ogg" type="audio/ogg; codecs=vorbis">
                            <source src="audio/music.mp3" type="audio/mpeg">
                            Тег audio не поддерживается вашим браузером. 
                            <a href="audio/music.mp3">Скачайте музыку</a>.
                        </audio> -->
                    </div>
                    <div class="media__description">
                        Donec quis quam a lorem volutpat.
                    </div>

                    <div class="media__count">
                        <?php 
                            require "templates/blog-score.php"
                        ?>
                        <a href="#">
                            <div class="media__read-more">Read More</div>
                        </a>
                    </div>
                </div>
                
                <div class="horizontal__line"></div>

                <!-- Quote -->
                <div class="media__item">
                    <div class="media__title">
                        Donec quis quam a lorem volutpat..
                    </div>

                    <img src="images/blog/4.png" alt="" class="media__icon">

                    <div class="media__description">
                        Integer ornare libero nisi. Duis ac magna urna. Nulla facilisi. Phasellus at ante magna. Quisque nec porta nulla. Suspendisse nec orci vel elit aliquet blandit in non orci. Vivamus posuere dui eget lacinia rutrum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed ullamcorper neque   sed consequat bibendum...
                    </div>

                    <div class="media__count">

                        <?php 
                            require "templates/blog-score.php"
                        ?>
                    </div>
                </div>

                <div class="horizontal__line"></div>

                <!-- Musics -->
                <div class="media__item">
                    <div class="media__title">
                        Donec quis quam a lorem volutpat.
                    </div>

                    <img src="images/blog/5.png" alt="" class="media__icon">
    
                    <div class="media__player">
                        <audio style="width: 100%; height:25px; padding: 0 15px 0 15px; margin:0 0 15px 0" controls>
                            <source src="audio/music.ogg" type="audio/ogg; codecs=vorbis">
                            <source src="audio/music.mp3" type="audio/mpeg">
                            Тег audio не поддерживается вашим браузером. 
                            <a href="audio/music.mp3">Скачайте музыку</a>.
                        </audio>
                    </div>

                    <div class="media__count">

                        <?php 
                            require "templates/blog-score.php"
                        ?>
                    </div>
                </div>

                <div class="horizontal__line"></div>

                <!-- Slider -->
                <div class="media__item">
                    <div class="media__slider"></div>
                </div>
            </div>

            <!-- ASIDE -->
            <div class="aside">
                <!-- Categories -->
                <div class="categories">
                    <div class="categories__title">CATEGORIES</div>

                    <ul class="categories__list">
                        <li class="categories__item">EVENTS</li>
                        <li class="categories__item">AEROBICS</li>
                        <li class="categories__item">CROSSFIT</li>
                        <li class="categories__item">SPINNING</li>
                        <li class="categories__item">NEWS</li>
                    </ul>
                </div>
                
                <!-- Recent-post -->
                <div class="recent-post">
                    <div class="recent-post__title">RECENT POSTS</div>
                    <div class="recent-post__item">
                        <div class="recent-post__name">Curabitur vitae velit</div>
                        <div class="recent-post__data">25 May 2013</div>
                    </div>
                    <div class="recent-post__item">
                        <div class="recent-post__name">Vivamus at elit quis urna adipiscing iaculis</div>
                        <div class="recent-post__data">25 May 2013</div>
                    </div>
                    <div class="recent-post__item">
                        <div class="recent-post__name">Curabitur vitae velit</div>
                        <div class="recent-post__data">25 May 2013</div>
                    </div>
                    <div class="recent-post__item">
                        <div class="recent-post__name">Vivamus at elit quis urna adipiscing iaculis</div>
                        <div class="recent-post__data">25 May 2013</div>
                    </div>
                </div>

                <!-- Map-scedule -->
                <div class="section-mb30">
                    <?php 
                        require "blocks-html/map-scedule.php"
                    ?>
                </div>

                <!-- Trainers -->
                <div class="section-mb30">
                    <?php 
                        require "blocks-html/trainers.php"
                    ?>
                </div>

                <!-- Prices -->
                <div class="section-mb30 section-w100">
                    <?php 
                        require "blocks-html/prices.php"
                    ?>
                </div>

                    <!-- Tags -->
                <div class="tags">
                    <div class="block-name">TAGS</div>
                    <div class="tags__row">
                        <a href="" class="tags__item">Maecenas</a>
                        <a href="" class="tags__item">Nunc </a>
                        <a href="" class="tags__item">Praesent </a>
                    </div>
                    <div class="tags__row">
                        <a href="" class="tags__item">Nunc </a>
                        <a href="" class="tags__item">Praesent </a>
                        <a href="" class="tags__item">Nunc </a>
                    </div>
                    <div class="tags__row">
                        <a href="" class="tags__item">Maecenas </a>
                        <a href="" class="tags__item">Praesent </a>
                        <a href="" class="tags__item">Nunc </a>
                    </div>
                </div>

                <!-- Arhive -->
                <div class="arhive">
                    <div class="arhive__row">
                        <div class="arhive__title">arhive</div>
                        <a href="" class="arhive__item">
                            <img src="images/blog/arrow-right.png" alt=""> 
                            2013
                        </a>
                        <a href="" class="arhive__item">
                            <img src="images/blog/arrow-right.png" alt=""> 2012
                        </a>
                        <a href="" class="arhive__item">
                            <img src="images/blog/arrow-right.png" alt=""> 2011
                        </a>
                    </div>
                </div>

                <!-- Partner -->
                <div class="section-mb30">
                    <?php 
                        require "blocks-html/partner.php"
                    ?>
                </div>
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
<script src="js/main.js"></script>

</body>
</html>