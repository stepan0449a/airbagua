<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9"
      lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"
      lang="en-US"> <!--<![endif]-->

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Пансионат - Верона</title>
    <meta name="description"
          content="">
    <meta name="author"
          content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">


    <link rel="" href="">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
        <script src="assets/js/modernizr.custom.js"></script>
        <script src="assets/js/classie.js"></script>
</head>

<body>
<div id="main">

    <section class="welcome" >
        <div class="container_menu" id="container_menu">
            <a class="button_up"></a>
            <a class="button_down"></a>
            <div class="logo">
                <div class="line"></div>
                <span>AIRBAGUA</span>

                
            </div>
            <h1 class="header_sub_tittle">Реставрация подушек безопасности</h1>
        </div>
        <?php include_once('components/components_ru_menu.html')?>
    </section>
    <section class="airbagua_service">
        <video class="image" autoplay loop>
            <source src="/assets/video/vw.mp4">
        </video>

        <aside>

            <p>Мы являемся одной из первых компаний по ремонту модулей и ремней безопасности SRS в Украине и имеем опыт
                работы со всеми марками автомобилей.
                Когда мы ремонтируем ваш модуль, подушки безопасности, качество изготовления не имеет себе равных.

            </p>

        </aside>
        <p id="textType"></p>
        <div class="slogan">Мы не можем подвести</div>
        <a class="button_up"></a>
        <a class="button_down"></a>
        <div class="owl-carousel">
            <div class="item">
                <div class="card_name">
                    <h3>Ремни безопасности</h3>
                </div>
                <img src="/assets/images/img1.png" alt="">

            </div>
            <div class="item">
                <div class="card_name">
                    <h3>Реставрация торпедо</h3>
                </div>
                <img src="/assets/images/img1.png" alt="">

            </div>
            <div class="item">
                <div class="card_name">
                    <h3>Ремонт шторки</h3>
                </div>
                <img src="/assets/images/img1.png" alt="">

            </div>
            <div class="item">
                <div class="card_name">
                    <h3>Замена пиропатрона</h3>
                </div>
                <img src="/assets/images/img1.png" alt="">

            </div>
            <div class="item">
                <div class="card_name">
                    <h3>Замена значка подушки руля</h3>
                </div>
                <img src="/assets/images/img1.png" alt="">

            </div>
            <div class="item">
                <div class="card_name">
                    <h3>Ремонт сидение</h3>
                </div>
                <img src="/assets/images/img1.png" alt="">

            </div>


        </div>

        
    </section>
    <section>
        <p class="odometer"></p>
        <a class="button_up"></a>
        <a class="button_down"></a>
    </section>
    <section>
        <a class="button_up"></a>
        <a class="button_down"></a>

</section>
</div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTnL4HenV5LsOefdwtyN7qmU78X96h99g"></script>
<script src="assets/js/type.min.js"></script>
<script>
    setTimeout(function () {
        new TypeIt('#textType', {
            strings: ["Реставрация ремней безопасности", "Подушки безопасности коленей", "Реставрация торпедо", "Реставрация руля", "Наша команда не может подвести."],
            speed: 70,
            breakLines: false,
            waitUntilVisible: false,
            loop: true
        }).go();
    }, 1000);

</script>

</body>
</html>
