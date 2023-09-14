<?php require "./includes/header.php";
$categories = $conn->query("SELECT * FROM categories");
$categories->execute();
$allcategories = $categories->fetchAll(PDO::FETCH_OBJ);

$eyeglasses = $conn->query("SELECT * FROM eyeglasses");
$eyeglasses->execute();
$alleyeglasses = $eyeglasses->fetchAll(PDO::FETCH_OBJ);
?>

<div id="page-content" class="page-content">
    <div class="banner" >
        <div class="jumbotron jumbotron-video text-center bg-dark mb-0 rounded-0" >
            <video width="100%" preload="auto" loop autoplay muted>
                <source src='<?php echo APPURL; ?>/assets/media/explore.mp4' type='video/mp4' />
                <source src='<?php echo APPURL; ?>/assets/media/explore.webm' type='video/webm' />
            </video> 
            <div class="container">
                <h1 class="pt-5">
                    See Clearly, Live Stylishly <br>
                    Discover Your Perfect Frames with Us
                </h1>
                <p class="lead">
                    Always In Your Service.
                </p>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                    <i class="fa fa-shopping-basket"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Buy
                                </h4>
                                <p class="card-text">
                                    Simply click-to-buy on the product you want and submit your order when you're done.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                    <i class="fas fa-leaf"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Quality
                                </h4>
                                <p class="card-text">
                                    Our team ensures the produce quality is up to our standard and delivers to your door within 24 hours of harvest day.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                    <i class="fa fa-truck"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Delivery
                                </h4>
                                <p class="card-text">
                                    Owner receive your orders two days in advance so they can prepare for harvest exactly as your orders.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section id="categories" class="pb-0 gray-bg">
        <h2 class="title">Categories</h2>
        <div class="landing-categories owl-carousel">

            <?php foreach ($allcategories as $categories) : ?>
                <div class="item" style="margin: 10px;">
                    <div class="card rounded-0 border-0 text-center">
                        <img src="assets/img/<?php echo $categories->image; ?>">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">

                            <a href="shop.html" class="btn btn-primary btn-lg"><?php echo $categories->name; ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </section>

    <section id="categories" class="pb-0 gray-bg">
        <h2 class="title">Eyeglasses</h2>

        <div class="landing-categories owl-carousel">
            <?php foreach ($alleyeglasses as $eyeglasses) : ?>
                <div class="item" style="margin: 10px;">
                    <div class="card rounded-0 border-0 text-center">
                        <img src="assets/img/<?php echo $eyeglasses->image; ?>">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">

                            <a href="shop.html" class="btn btn-primary btn-lg"><?php echo $eyeglasses->name; ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </section>

    <section id="categories" class="pb-0 gray-bg">
        <h2 class="title">Sunglasses</h2>
        <div class="landing-categories owl-carousel">
            <div class="item" style="margin: 10px;">
                <div class="card rounded-0 border-0 text-center">
                    <img src="assets/img/eg1.jpg">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">

                        <!-- <a href="shop.html" class="btn btn-primary btn-lg">Eyeglasses</a> -->
                    </div>
                </div>
            </div>
            <div class="item" style="margin: 10px;">
                <div class="card rounded-0 border-0 text-center">
                    <img src="assets/img/sg1.jpg">
                    <div class="card-img-overlay d-flex align-items-center  justify-content-center">
                        <!-- <h4 class="card-title">Fruits</h4> -->
                        <!--  <a href="shop.html" class="btn btn-primary btn-lg">Sunglasses</a> -->
                    </div>
                </div>
            </div>
            <div class="item" style="margin: 10px;">
                <div class="card rounded-0 border-0 text-center">
                    <img src="assets/img/cg1.jpg">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">
                        <!-- <h4 class="card-title">Meats</h4> -->
                        <!--  <a href="shop.html" class="btn btn-primary btn-lg">Computer Glasses</a> -->
                    </div>
                </div>
            </div>
            <div class="item" style="margin: 10px;">
                <div class="card rounded-0 border-0 text-center">
                    <img src="assets/img/lense1.jpg">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">
                        <!-- <h4 class="card-title">Fishes</h4> -->
                        <!--   <a href="shop.html" class="btn btn-primary btn-lg">Contact Lenses</a> -->
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="categories" class="pb-0 gray-bg">
        <h2 class="title">Computer Glasses</h2>
        <div class="landing-categories owl-carousel">
            <div class="item" style="margin: 10px;">
                <div class="card rounded-0 border-0 text-center">
                    <img src="assets/img/eg1.jpg">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">

                        <!-- <a href="shop.html" class="btn btn-primary btn-lg">Eyeglasses</a> -->
                    </div>
                </div>
            </div>
            <div class="item" style="margin: 10px;">
                <div class="card rounded-0 border-0 text-center">
                    <img src="assets/img/sg1.jpg">
                    <div class="card-img-overlay d-flex align-items-center  justify-content-center">
                        <!-- <h4 class="card-title">Fruits</h4> -->
                        <!--  <a href="shop.html" class="btn btn-primary btn-lg">Sunglasses</a> -->
                    </div>
                </div>
            </div>
            <div class="item" style="margin: 10px;">
                <div class="card rounded-0 border-0 text-center">
                    <img src="assets/img/cg1.jpg">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">
                        <!-- <h4 class="card-title">Meats</h4> -->
                        <!--  <a href="shop.html" class="btn btn-primary btn-lg">Computer Glasses</a> -->
                    </div>
                </div>
            </div>
            <div class="item" style="margin: 10px;">
                <div class="card rounded-0 border-0 text-center">
                    <img src="assets/img/lense1.jpg">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">
                        <!-- <h4 class="card-title">Fishes</h4> -->
                        <!--   <a href="shop.html" class="btn btn-primary btn-lg">Contact Lenses</a> -->
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="categories" class="pb-0 gray-bg">
        <h2 class="title">Comtact Lenses</h2>
        <div class="landing-categories owl-carousel">
            <div class="item" style="margin: 10px;">
                <div class="card rounded-0 border-0 text-center">
                    <img src="assets/img/eg1.jpg">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">

                        <!-- <a href="shop.html" class="btn btn-primary btn-lg">Eyeglasses</a> -->
                    </div>
                </div>
            </div>
            <div class="item" style="margin: 10px;">
                <div class="card rounded-0 border-0 text-center">
                    <img src="assets/img/sg1.jpg">
                    <div class="card-img-overlay d-flex align-items-center  justify-content-center">
                        <!-- <h4 class="card-title">Fruits</h4> -->
                        <!--  <a href="shop.html" class="btn btn-primary btn-lg">Sunglasses</a> -->
                    </div>
                </div>
            </div>
            <div class="item" style="margin: 10px;">
                <div class="card rounded-0 border-0 text-center">
                    <img src="assets/img/cg1.jpg">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">
                        <!-- <h4 class="card-title">Meats</h4> -->
                        <!--  <a href="shop.html" class="btn btn-primary btn-lg">Computer Glasses</a> -->
                    </div>
                </div>
            </div>
            <div class="item" style="margin: 10px;">
                <div class="card rounded-0 border-0 text-center">
                    <img src="assets/img/lense1.jpg">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">
                        <!-- <h4 class="card-title">Fishes</h4> -->
                        <!--   <a href="shop.html" class="btn btn-primary btn-lg">Contact Lenses</a> -->
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<?php require "includes/footer.php"; ?>