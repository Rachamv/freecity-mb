<!DOCTYPE html>
<html lang="en">
<?php require_once 'header.php'?>

<body>

    <div class="brand">FreeCity</div>
    <div class="address-bar">3481 Melrose Place
Beverly Hills, CA 90210</div>
    
     <!-- Navigation -->
     <?php require_once 'nav.php'?>
     <!-- Navigation /-->

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-4.png" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">FreeCity</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>
                            <strong>Get Connected</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Free 
                        <strong>People</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/rachamv.jpg" alt="">
                    <hr class="visible-xs">
                    <p>freecity will be a city simulation game with high flexibility and combining features from other similiar games.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Beautiful
                        <strong> Places</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/slide-4.png" alt="">
                    <hr class="visible-xs">
                    <p>freecity will be a city simulation game with high flexibility and combining features from other similiar games.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
    <?php require_once 'footer.php'?>
</body>

</html>
