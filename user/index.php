<?php

include('functions/userfunctions.php');
include('includes/header.php'); 
include('includes/slider.php'); ?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Trending Products</h4>
                <div class="underline mb-2"></div>
                <div class="owl-carousel">
                    <?php
                        $trendingProducts = getAllTrending();
                        if(mysqli_num_rows($trendingProducts) > 0)
                        {
                            foreach ($trendingProducts as $item) {
                                ?>
                                    <div class="item">
                                        <a href="product-view.php?product=<?= $item['slug']; ?>">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <img src="uploads/<?= $item['image']; ?>" alt="Product Image" class="w-100">
                                                    <h6 class="text-center"><?= $item['name']; ?></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-f2f2f2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>About Us</h4>
                <div class="underline mb-2"></div>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere officiis reiciendis perspiciatis sed veritatis, alias consequatur veniam nisi doloribus sequi totam, ullam eos ratione voluptatum dolorum quia quod maxime consectetur.
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere officiis reiciendis perspiciatis sed veritatis, alias consequatur veniam nisi doloribus sequi totam, ullam eos ratione voluptatum dolorum quia quod maxime consectetur.
                    <br>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere officiis reiciendis perspiciatis sed veritatis, alias consequatur veniam nisi doloribus sequi totam, ullam eos ratione voluptatum dolorum quia quod maxime consectetur.
                </p>
            </div>
        </div>
    </div>
</div>


<div class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="text-white">Steel E-com</h4>
                <div class="underline mb-2"></div>
                <a href="index.php" class="text-white"><i class="fa fa-angle-right"></i> Home</a> <br>
                <a href="#" class="text-white"><i class="fa fa-angle-right"></i> About Us</a> <br>
                <a href="cart.php" class="text-white"><i class="fa fa-angle-right"></i> My Cart</a> <br>
                <a href="categories.php" class="text-white"><i class="fa fa-angle-right"></i> Our Collections</a>
            </div>
            <div class="col-md-3">
                <h4 class="text-white">Address</h4>
                <div class="underline mb-2"></div>
                <p class="text-white">
                        212/1-a, 2nd floor,
                        sector 1, ecomspace layout,
                        Visakhapatnam, India. 
                </p>
                <a href="tel:+919831313135" class="text-white"> <i class="fa fa-phone"></i> +91 9831313135 </a> <br>
                <a href="mailto:steelecom@gmail.com" class="text-white"> <i class="fa fa-envelope"></i> steelecom@gmail.com </a>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>
<script>

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
});
</script>