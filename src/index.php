<?php 
    include 'session.php'; 

    if(isset($_SESSION['id'])) {
        header("Location: account");
    }
?>
<?php include "layouts/_header.php" ?>
    <header>
        <?php include "layouts/_navigation.php" ?>
        <section id="banner" class="container">
            <div id="banner-description">
                <h1>Good Food, Good Mood</h1>
                <p>Food festive is a neighborhood restaurant service seasonal global cuisine driven by the faire.</p>
                <a href="#" class="btn btn-md btn-rounded">Explore our menu.</a> 
            </div>
            <div id="banner-image">
                <img src="assets/img/banner-image.png" alt="Banner Image">
            </div>
        </section>
    </header>
    <main>
        <section id="about" class="row">
            <div id="about-container" class="container">
                <div class="section-heading">
                    <h2>About Us</h2>
                </div>
                <div id="about-content">
                    <div id="primary-item">
                        <div id="primary-item-image">
                            <img src="assets/img/about-primary-image.jpg" alt="" class="thumbnail">
                        </div>
                        <div id="primary-item-heading">
                            <p>
                                Welcome to Food Festive, your ultimate destination for discovering and enjoying the best culinary experiences, both in-person and online. 
                                Our festival celebrates a world of flavors, bringing together a diverse array of delicious foods and beverages from top vendors and chefs. 
                                Now, you can also savor these delectable delights from the comfort of your home with our convenient online food offerings.
                            </p>
                        </div>
                    </div>
                    <div id="about-content-sub">
                        <div class="about-content-item">
                            <img src="assets/img/dish-2.png" alt="" class="thumbnail">
                        </div>
                        <div class="about-content-item">
                            <img src="assets/img/dish-3.png" alt="" class="thumbnail">
                        </div>
                        <div class="about-content-item">
                            <img src="assets/img/dish-1.png" alt="" class="thumbnail">
                        </div>
                        <div class="about-content-item">
                            <img src="assets/img/dish-2.png" alt="" class="thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="row">
            <div id="services-content" class="container">
                <div class="section-heading">
                    <h2>Our Awesome Services</h2>
                </div>
                <div id="services-list-content">
                    <div class="service-item">
                        <div class="service-item-image">
                            <img src="assets/img/quality-food.png" alt="Food festive quality food">
                        </div>
                        <div class="service-item-description">
                            <h3>Diverse Cuisine</h3>
                            <p>Our menu features a variety of dishes from around the world, including spicy Asian specialties, classic European dishes, and hearty American favorites.</p>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-item-image">
                            <img src="assets/img/catering.png" alt="Food festive super taste">
                        </div>
                        <div class="service-item-description">
                            <h3>Special Events and Catering</h3>
                            <p>Whether you're hosting a small gathering or a large event, Food Festive offers catering services that will impress your guests with our delicious food and professional service.</p>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-item-image">
                            <img src="assets/img/order.png" alt="Food festive super taste">
                        </div>
                        <div class="service-item-description">
                            <h3>Online Ordering</h3>
                            <p>Keep healthy food readily available. When you get hungry, you're more likely to eat the first thing you see on the counter.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="popular-dish" class="row">
            <div id="popular-dish-content" class="container">
                <div class="section-heading">
                    <h2>Most popular dishes</h2>
                </div>
                <div id="popular-dish-container">
                    <div class="dish-item card">
                        <div class="dish-item-image">
                            <img src="assets/img/dish-1.png" alt="Food Festive Dish #1">
                        </div>
                        <div class="dish-item-details">
                            <div class="dish-item-menu">
                                <div class="item-menu-title">
                                    <h3>Chicken Wings</h3>
                                </div>
                                <div class="item-menu-rating">
                                    <span class="item-rating-stars">&#9733;&#9733;&#9733;</span>
                                    <span class="item-rating-value">2.97</span>
                                    <span class="item-rating-description">Overall Rating</span>
                                </div>
                            </div>
                            <div class="dish-item-order-details">
                                <div class="item-order-price">
                                    <p>&#8369;150.00</p>
                                </div>
                                <div class="item-order-cart">
                                    <button class="btn btn-sm btn-rounded">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dish-item card">
                        <div class="dish-item-image">
                            <img src="assets/img/dish-2.png" alt="Food Festive Dish #2">
                        </div>
                        <div class="dish-item-details">
                            <div class="dish-item-menu">
                                <div class="item-menu-title">
                                    <h3>Flame Chicken</h3>
                                </div>
                                <div class="item-menu-rating">
                                    <span class="item-rating-stars">&#9733;&#9733;&#9733;</span>
                                    <span class="item-rating-value">2.50</span>
                                    <span class="item-rating-description">Overall Rating</span>
                                </div>
                            </div>
                            <div class="dish-item-order-details">
                                <div class="item-order-price">
                                    <p>&#8369;150.00</p>
                                </div>
                                <div class="item-order-cart">
                                    <button class="btn btn-sm btn-rounded">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dish-item card">
                        <div class="dish-item-image">
                            <img src="assets/img/dish-3.png" alt="Food Festive Dish #3">
                        </div>
                        <div class="dish-item-details">
                            <div class="dish-item-menu">
                                <div class="item-menu-title">
                                    <h3>Hasselback Potatoes</h3>
                                </div>
                                <div class="item-menu-rating">
                                    <span class="item-rating-stars">&#9733;&#9733;&#9733;</span>
                                    <span class="item-rating-value">3.00</span>
                                    <span class="item-rating-description">Overall Rating</span>
                                </div>
                            </div>
                            <div class="dish-item-order-details">
                                <div class="item-order-price">
                                    <p>&#8369;150.00</p>
                                </div>
                                <div class="item-order-cart">
                                    <button class="btn btn-sm btn-rounded">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dish-item card">
                        <div class="dish-item-image">
                            <img src="assets/img/dish-4.jpg" alt="Food Festive Dish #4">
                        </div>
                        <div class="dish-item-details">
                            <div class="dish-item-menu">
                                <div class="item-menu-title">
                                    <h3>Eggs Benedict</h3>
                                </div>
                                <div class="item-menu-rating">
                                    <span class="item-rating-stars">&#9733;&#9733;&#9733;</span>
                                    <span class="item-rating-value">3.00</span>
                                    <span class="item-rating-description">Overall Rating</span>
                                </div>
                            </div>
                            <div class="dish-item-order-details">
                                <div class="item-order-price">
                                    <p>&#8369;150.00</p>
                                </div>
                                <div class="item-order-cart">
                                    <button class="btn btn-sm btn-rounded">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dish-item card">
                        <div class="dish-item-image">
                            <img src="assets/img/dish-5.jpg" alt="Food Festive Dish #4">
                        </div>
                        <div class="dish-item-details">
                            <div class="dish-item-menu">
                                <div class="item-menu-title">
                                    <h3>Dumplings</h3>
                                </div>
                                <div class="item-menu-rating">
                                    <span class="item-rating-stars">&#9733;&#9733;&#9733;</span>
                                    <span class="item-rating-value">2.40</span>
                                    <span class="item-rating-description">Overall Rating</span>
                                </div>
                            </div>
                            <div class="dish-item-order-details">
                                <div class="item-order-price">
                                    <p>&#8369;150.00</p>
                                </div>
                                <div class="item-order-cart">
                                    <button class="btn btn-sm btn-rounded">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dish-item card">
                        <div class="dish-item-image">
                            <img src="assets/img/dish-6.jpg" alt="Food Festive Dish #6">
                        </div>
                        <div class="dish-item-details">
                            <div class="dish-item-menu">
                                <div class="item-menu-title">
                                    <h3>Overnight Oats</h3>
                                </div>
                                <div class="item-menu-rating">
                                    <span class="item-rating-stars">&#9733;&#9733;&#9733;</span>
                                    <span class="item-rating-value">3.00</span>
                                    <span class="item-rating-description">Overall Rating</span>
                                </div>
                            </div>
                            <div class="dish-item-order-details">
                                <div class="item-order-price">
                                    <p>&#8369;150.00</p>
                                </div>
                                <div class="item-order-cart">
                                    <button class="btn btn-sm btn-rounded">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include "layouts/_footer.php" ?>