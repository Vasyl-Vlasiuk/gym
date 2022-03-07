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
        <?php 
            require "blocks-html/social-networks.php"
        ?>

        <?php 
            require "blocks-html/menu.php"
        ?>
    </div>

    <div class="header-block">
        <img class="header-block__img" src="images/intro-bg.jpg" alt="">
        <div class="container">
            <div class="header-block__inner header-block__inner--long">
                <div class="header-block__slide"></div>
                <div class="header-block__name">BLOG <span> > Duis dapibus aliquam mi.</span>
                </div>
            </div>
        </div>
    </div>

    <!-- MEDIA -->
    <div class="container">
        <div class="blogs-single">

            <div class="media-single">
                <!-- Articles -->
                <div class="media__title">
                    Donec quis quam a lorem volutpat vestibulum.
                </div>

                <div class="media__count">
                        <?php 
                            require "templates/blog-score.php"
                        ?>
                </div>

                <img class="media__article-photo" src="images/blog-single/1.jpg" alt="">
                <div class="media__description">
                    Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 

                    Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 

                    Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 

                    Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                </div>

                <div class="media__panel panel-media">
                    <div class="panel-media__social-link">
                        <a class="panel-media__item--share" href="#">share</a>

                        <a class="panel-media__item-link" href="#" target="_blank">
                            <svg class="panel-media__icon">
                                <use xlink:href="#facebook"></use>
                            </svg>
                        </a>

                        <a class="panel-media__item-link" href="#" target="_blank">
                            <svg class="panel-media__icon">
                                <use xlink:href="#twitter"></use>
                            </svg>
                        </a>

                        <a class="panel-media__item-link" href="#" target="_blank">
                            <svg class="panel-media__icon">
                                <use xlink:href="#google-plus"></use>
                            </svg>
                        </a>

                        <a class="panel-media__item-link" href="#" target="_blank">
                            <svg class="panel-media__icon">
                                <use xlink:href="#linked-in"></use>
                            </svg>
                        </a>
                    </div>

                    <div class="panel-media__arrow ">
                        <a class="panel-media__arrow-left" href="#" target="_blank">
                            <svg class="panel-media__arrow-icon">
                                <use xlink:href="#left-arrow"></use>
                            </svg>
                        </a>

                        <a class="panel-media__arrow-right" href="#" target="_blank">
                            <svg class="panel-media__arrow-icon">
                                <use xlink:href="#right-arrow"></use>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="media__comments comments-media">
                    <div class="comments-media__title">10 Comments</div>
                    <div class="comments-media__inner informer">
                        <!-- informer -->
                        <div class="informer__item">
                            <div class="informer__top">
                                <div class="informer__name">Matt Dill</div>
                                <div class="informer__data">26 June 2013, 15:20</div>
                                <a class="informer__reply" href="#">REPLY</a>
                            </div>

                            <div class="informer__content">
                                <div class="informer__photo">
                                    <a href="#" target="_blank">
                                        <svg class="informer__icon">
                                            <use xlink:href="#user"></use>
                                        </svg>
                                    </a>
                                </div>
                                <div class="informer__comments">
                                    Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. 
                                </div>
                            </div>
                        </div>

                        <!-- informer -->
                        <div class="informer__item">
                            <div class="informer__top">
                                <div class="informer__name">Matt Dill</div>
                                <div class="informer__data">26 June 2013, 15:20</div>
                                <a class="informer__reply" href="#">REPLY</a>
                            </div>

                            <div class="informer__content">
                                <div class="informer__photo">
                                    <a href="#" target="_blank">
                                        <svg class="informer__icon">
                                            <use xlink:href="#user"></use>
                                        </svg>
                                    </a>
                                </div>
                                <div class="informer__comments">
                                    Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.
                                </div>
                            </div>
                        </div>

                        <!-- informer -->
                        <div class="informer__item">
                            <div class="informer__top">
                                <div class="informer__name">Matt Dill</div>
                                <div class="informer__data">26 June 2013, 15:20</div>
                                <a class="informer__reply" href="#">REPLY</a>
                            </div>

                            <div class="informer__content">
                                <div class="informer__photo">
                                    <a href="#" target="_blank">
                                        <svg class="informer__icon">
                                            <use xlink:href="#user"></use>
                                        </svg>
                                    </a>
                                </div>
                                <div class="informer__comments">
                                    Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="media__form form-media">
                    <div class="form-media__title">Leave a comment</div>
                    <div class="form-media__content">
                        <div class="form-media__item">
                            <input class="form-media__input" type="text">
                            <div class="form-media__name">Name</div>
                        </div>
                        <div class="form-media__item">
                            <input class="form-media__input" type="text">
                            <div class="form-media__mail">E-mail</div>
                        </div>
                        <div class="form-media__item">
                            <input class="form-media__input" type="text">
                            <div class="form-media__mail">Web site</div>
                        </div>
                        <div class="form-media__item">
                            <textarea class="form-media__comments" name="text"></textarea>
                            <div class="form-media__comments-text">Comments</div>
                        </div>
                        <button class="form-media__btn" type="submit">Send</button>
                    </div>
                </form>
                
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