 <!-- http://localhost/recipe_blog/pages/index.php#-->

<?php
    include("../path.php");
    require ROOT_PATH . "/assets/php/header.php";
    
?>

<main>

  <!--page wrapper-->
  
  <div class="page-wrapper">
  
<!-----Post Slider-->
<div class="post-slider">
    <h1 class="slider-title">Trending Posts</h1>
    <i class="fa fa-chevron-left prev"></i>
    <!--could be fas-->
    <i class="fa fa-chevron-right next"></i>

    <div class="post-wrapper">
        <div class="post">
            <img src="<?php echo BASE_URL . "/assets/Images/IMG_6011.jpg"?>" alt="" class="slider-image">
            <div class="post-info">
                <h4> <a href="single.php">Pastries</a></h4>
                <i class="fa fa-user">Marko</i>
                <!--could be far-->
                &nbsp;
                <i class="fa fa-calendar">October 16 2020</i>
                <!--could be far-->
            </div>
        </div>

        <div class="post">
            <img src="<?php echo BASE_URL . "/assets/Images/Waffle.jpg"?>" alt="" class="slider-image">
            <div class="post-info">
                <h4> <a href="single.php">Breakfast</a></h4>
                <i class="fa fa-user">Marko</i>
                <!--could be far-->
                &nbsp;
                <i class="fa fa-calendar">October 16 2020</i>
                <!--could be far-->
            </div>
        </div>

        <div class="post">
            <img src="<?php echo BASE_URL . "/assets/Images/Cake.jpg"?>" alt="" class="slider-image">
            <div class="post-info">
                <h4> <a href="single.php">Cakes</a></h4>
                <i class="fa fa-user">Marko</i>
                <!--could be far-->
                &nbsp;
                <i class="fa fa-calendar">October 16 2020</i>
                <!--could be far-->
            </div>
        </div>

        <div class="post">
            <img src="<?php echo BASE_URL . "/assets/Images/Dinner.jpg"?>" alt="" class="slider-image">
            <div class="post-info">
                <h4> <a href="single.php">Diners</a></h4>
                <i class="fa fa-user">Marko</i>
                <!--could be far-->
                &nbsp;
                <i class="fa fa-calendar">October 16 2020</i>
                <!--could be far-->
            </div>
        </div>

        <div class="post">
            <img src="<?php echo BASE_URL . "/assets/Images/Soups.jpg"?>" alt="" class="slider-image">
            <div class="post-info">
                <h4> <a href="single.php">Soups</a></h4>
                <i class="fa fa-user">Marko</i>
                <!--could be far-->
                &nbsp;
                <i class="fa fa-calendar">October 16 2020</i>
                <!--could be far-->
            </div>
        </div>


    </div>

</div>

<!----//Post Slider-->


<!---Content-->
<div class="content clearfix">

    <!--- Main Content-->
    <div class="main-content">
        <h1 class="recent-post-title">Recent Posts</h1>
        <div class="post clearfix">
            <img src="<?php echo BASE_URL . "/assets/Images/Soups.jpg"?>" alt="" class="post-image">
            <div class="post-preview">
                <h2><a href="single.php"> cszndsijnj</a></h2>
                <i class="fa fa-user">Marko</i>
                <!--could be far-->
                &nbsp;
                <i class="fa fa-calendar">October 16 2020</i>
                <p class="preview-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde nesciunt
                    ex
                    molestiae, quibusdam doloribus atque.</p>
                <a href="single.php" class="btn read-more">Read More</a>
            </div>
        </div>

        <div class="post clearfix">
            <img src="<?php echo BASE_URL . "/assets/Images/Soups.jpg"?>" alt="" class="post-image">
            <div class="post-preview">
                <h2><a href="single.php"> cszndsijnj</a></h2>
                <i class="fa fa-user">Marko</i>
                <!--could be far-->
                &nbsp;
                <i class="fa fa-calendar">October 16 2020</i>
                <p class="preview-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde nesciunt
                    ex
                    molestiae, quibusdam doloribus atque.</p>
                <a href="single.php" class="btn read-more">Read More</a>
            </div>
        </div>

        <div class="post clearfix">
            <img src="<?php echo BASE_URL . "/assets/Images/Soups.jpg"?>" alt="" class="post-image">
            <div class="post-preview">
                <h2><a href="single.php"> cszndsijnj</a></h2>
                <i class="fa fa-user">Marko</i>
                <!--could be far-->
                &nbsp;
                <i class="fa fa-calendar">October 16 2020</i>
                <p class="preview-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde nesciunt
                    ex
                    molestiae, quibusdam doloribus atque.</p>
                <a href="single.php" class="btn read-more">Read More</a>
            </div>
        </div>

        <div class="post clearfix">
            <img src="<?php echo BASE_URL . "/assets/Images/Soups.jpg"?>" alt="" class="post-image">
            <div class="post-preview">
                <h2><a href="single.php"> cszndsijnj</a></h2>
                <i class="fa fa-user">Marko</i>
                <!--could be far-->
                &nbsp;
                <i class="fa fa-calendar">October 16 2020</i>
                <p class="preview-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde nesciunt
                    ex
                    molestiae, quibusdam doloribus atque.</p>
                <a href="single.php" class="btn read-more">Read More</a>
            </div>
        </div>

        <div class="post clearfix">
            <img src="<?php echo BASE_URL . "/assets/Images/Waffle.jpg"?>" alt="" class="post-image">
            <div class="post-preview">
                <h2><a href="single.php"> cszndsijnj</a></h2>
                <i class="fa fa-user">Marko</i>
                <!--could be far-->
                &nbsp;
                <i class="fa fa-calendar">October 16 2020</i>
                <p class="preview-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde nesciunt
                    ex
                    molestiae, quibusdam doloribus atque.</p>
                <a href="single.php" class="btn read-more">Read More</a>
            </div>
        </div>


    </div>



    <!--- Main Content-->
    <div class="sidebar">
        <div class="section search">
            <h2 class="section-title">Search</h2>
            <form action="index.html" method="POST">
                <input type="text" name="search-term" class="text-input" placeholder="Search........">
            </form>
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
</div>

<!---//Content-->

</div>
<!----//page wrapper-->

</main>

<?php
    require ROOT_PATH . "/assets/php/footer.php";
?>