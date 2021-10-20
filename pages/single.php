<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../assets/css/style.css">
        <!--fonts.google-->
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
        <!--fonts.awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Single Post</title>

    </head>

    <body>
        <!--Facebook plugein SDK-->

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0"
            nonce="PpfdG4qP"></script>
        <!--//Facebook plugein SDK-->


        <?php
    include("../path.php");
    require ROOT_PATH . "/assets/php/header.php";
    
?>


        <!--page wrapper-->
        <div class="page-wrapper">


            <!---Content-->
            <div class="content clearfix">

                <!--- Main Content Wrapper-->
                <div class="main-content-wrapper">
                <div class="main-content single">
                    <h1 class="post-title">Post Title</h1>

                    <div class="post-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quo dignissimos repellendus
                            inventore hic assumenda in veniam sequi beatae ullam laboriosam, doloremque dolore quaerat porro
                            sint itaque maxime consequuntur nobis.
                        </p>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, veritatis! Corrupti asperiores
                            placeat aperiam ducimus esse minima, quo dolore aut, saepe eum ad inventore suscipit totam?
                            Harum repellat ad porro?
                        </p>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quod esse error omnis cumque
                            consectetur voluptate, distinctio nostrum voluptatem natus a possimus incidunt molestias illum
                            voluptatum fuga. Voluptates, maxime necessitatibus!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quo dignissimos repellendus
                            inventore hic assumenda in veniam sequi beatae ullam laboriosam, doloremque dolore quaerat porro
                            sint itaque maxime consequuntur nobis.
                        </p>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, veritatis! Corrupti asperiores
                            placeat aperiam ducimus esse minima, quo dolore aut, saepe eum ad inventore suscipit totam?
                            Harum repellat ad porro?
                        </p>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quod esse error omnis cumque
                            consectetur voluptate, distinctio nostrum voluptatem natus a possimus incidunt molestias illum
                            voluptatum fuga. Voluptates, maxime necessitatibus!
                        </p>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quod esse error omnis cumque
                            consectetur voluptate, distinctio nostrum voluptatem natus a possimus incidunt molestias illum
                            voluptatum fuga. Voluptates, maxime necessitatibus!
                        </p>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quod esse error omnis cumque
                            consectetur voluptate, distinctio nostrum voluptatem natus a possimus incidunt molestias illum
                            voluptatum fuga. Voluptates, maxime necessitatibus!
                        </p>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quod esse error omnis cumque
                            consectetur voluptate, distinctio nostrum voluptatem natus a possimus incidunt molestias illum
                            voluptatum fuga. Voluptates, maxime necessitatibus!
                        </p>
                    </div>
                </div>
                </div>  
                <!--- Main Content-->

                <!--sidebar-->
                <div class="sidebar single">

                    <!--Face book pluge 1 -->
                    <div class="fb-page" data-href="https://www.facebook.com/natashaskitchen" data-tabs="" data-width=""
                        data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                        data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/natashaskitchen" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/natashaskitchen">NatashasKitchen.com</a></blockquote>
                    </div>
                    <!--Face book pluge 1-->
                    <div class="section popular single">
                        <h2 class="section-title">Popular</h2>

                        <div class="post clearfix">
                            <img src="../assets/Images/Dinner.jpg" alt="">
                            <a href="" class="title">dinner</a>
                        </div>
                        <div class="post clearfix">
                            <img src="../assets/Images/bread.jpg" alt="">
                            <a href="" class="title">breads</a>
                        </div>
                        <div class="post clearfix">
                            <img src="../assets/Images/Cake.jpg" alt="">
                            <a href="" class="title">Cakes</a>
                        </div>
                        <div class="post clearfix">
                            <img src="../assets/Images/Soups.jpg" alt="">
                            <a href="" class="title">Soups</a>
                        </div>

                    </div>
                    <div class="section topics">
                        <h2 class="section-title">Categories</h2>
                        <ul>
                            <li><a href="#">Baking</a></li>
                            <li><a href="#">Breakfast</a></li>
                            <li><a href="#">Cakes</a></li>
                            <li><a href="#">Dinner</a></li>
                            <li><a href="#">Pastries</a></li>
                            <li><a href="#">Soups</a></li>
                        </ul>

                    </div>


                </div>
                <!--//sidebar-->

            </div>

            <!---//Content-->

        </div>
        <!----//page wrapper-->


        <!--Footer-->
        <?php
        require "footer.php";
        ?>


        <!--//Footer-->

        <!---- JQuery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
            crossorigin="anonymous"></script>


        <!---slick-carouse-->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <!-- Custom Script-->
        <script src="js/script.js"></script>
    </body>


</html>