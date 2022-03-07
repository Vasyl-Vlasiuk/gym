<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- Шрифти -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;1,300&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <!-- Swiper -->
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
                <div class="header-block__name">TIMETABLE</div>
            </div>
        </div>
    </div>


    <div style="overflow-x:auto;">
        <table class="timetable">
            <caption class="filter">
                <a href="" class="filter__item">ALL</a>
                <a href="" class="filter__item">AEROBICS</a>
                <a href="" class="filter__item">CROSSFIT</a>
                <a href="" class="filter__item">BOXING</a>
                <a href="" class="filter__item">KIK BOXING </a>
                <a href="" class="filter__item">PILATES</a>
                <a href="" class="filter__item">SPINNING</a>
            </caption>
            <!-- Days -->
            <tr>
                <th></th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
            </tr>

            <tr class="timetable-row">
                <td>06.oo - 07.00</td>
                <td class="tbl-red">Aerobics - Room A</td>
                <td class="tbl-pink">Pilates - Room D</td>
                <td class="tbl-red">Aerobics - Room A</td>
                <td class="tbl-pink">Pilates - Room D</td>
                <td class="tbl-red">Aerobics - Room A</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>07.oo - 08.00</td>
                <td class="tbl-blue">Kik Boxing - Room B</td>
                <td class="tbl-green">Crossfit - Room B</td>
                <td></td>
                <td class="tbl-blue">Kik Boxing - Room B</td>
                <td>Spinning- Room D</td>
                <td class="tbl-green">Crossfit - Room B</td>
                <td class="tbl-blue">Kik Boxing - Room B</td>
            </tr>
            <tr>
                <td>08.oo - 09.00</td>
                <td class="tbl-cyan">Boxing - Room C</td>
                <td>Spinning- Room D</td>
                <td class="tbl-cyan">Boxing - Room C</td>
                <td>Spinning- Room D</td>
                <td></td>
                <td>Spinning- Room D</td>
                <td class="tbl-cyan">Boxing - Room C</td>
            </tr>
            <tr>
                <td >09.oo - 10.00</td>
                <td class="tbl-red">Aerobics - Room A</td>
                <td></td>
                <td class="tbl-red">Aerobics - Room A</td>
                <td class="tbl-green">Crossfit - Room B</td>
                <td class="tbl-red">Aerobics - Room A</td>
                <td></td>
                <td>Spinning- Room D</td>
            </tr>
            <tr>
                <td>10.oo - 11.00</td>
                <td class="tbl-pink">Pilates - Room D</td>
                <td class="tbl-green">Crossfit - Room B</td>
                <td></td>
                <td>Spinning- Room D</td>
                <td></td>
                <td>Spinning- Room D</td>
                <td class="tbl-pink">Pilates - Room D</td>
            </tr>
            <tr>
                <td>11.oo - 12.00</td>
                <td class="tbl-cyan">Boxing - Room C</td>
                <td class="tbl-pink">Pilates - Room D</td>
                <td>Boxing - Room C</td>
                <td class="tbl-pink">Pilates - Room D</td>
                <td></td>
                <td class="tbl-green">Crossfit - Room B</td>
                <td class="tbl-cyan">Boxing - Room C</td>
            </tr>
            <tr>
                <td>12.oo - 13.00</td>
                <td></td>
                <td class="tbl-green">Crossfit - Room B</td>
                <td></td>
                <td class="tbl-blue">Kik Boxing - Room B</td>
                <td>Spinning- Room D</td>
                <td></td>
                <td>Spinning- Room D</td>
            </tr>
            <tr>
                <td>13.oo - 14.00</td>
                <td class="tbl-blue">Kik Boxing - Room B</td>
                <td></td>
                <td></td>
                <td class="tbl-green">Crossfit - Room B</td>
                <td></td>
                <td></td>
                <td class="tbl-blue">Kik Boxing - Room B</td>
            </tr>
            <tr>
                <td>14.oo - 15.00</td>
                <td class="tbl-red">Aerobics - Room A</td>
                <td></td>
                <td class="tbl-red">Aerobics - Room A</td>
                <td>Spinning- Room D</td>
                <td class="tbl-red">Aerobics - Room A</td>
                <td>Spinning- Room D</td>
                <td></td>
            </tr>
            <tr>
                <td>15.oo - 16.00</td>
                <td class="tbl-cyan">Boxing - Room C</td>
                <td></td>
                <td class="tbl-cyan">Boxing - Room C</td>
                <td></td>
                <td></td>
                <td class="tbl-green">Crossfit - Room B</td>
                <td>Boxing - Room C</td>
            </tr>
            <tr>
                <td>16.oo - 17.00</td>
                <td class="tbl-pink">Pilates - Room D</td>
                <td class="tbl-green">Crossfit - Room B</td>
                <td></td>
                <td>Spinning- Room D</td>
                <td></td>
                <td>Spinning- Room D</td>
                <td></td>
            </tr>
        </table>
    </div>

    <!--Trainers/events/blog -->
    <div class="container">
        <div class="section-blocks"> 
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

    <?php 
        require "blocks-html/join.php"
    ?>

    <!--Gallery/partner-->
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
<script src="js/main.js"></script> -->
<!-- Підключаємо карусель -->
<!-- <script src="js/owl.carousel.min.js"></script> -->
</body>
</html>