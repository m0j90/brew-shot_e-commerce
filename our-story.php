<?php
session_start();

$page_ourstory = 'our story';

$is_logged_in = isset($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Story</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair+Display" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Quicksand" />
    <link rel="icon" href="images/logo/favicon_brew-and-shot.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    
    <?php 
        include 'header.php'; 
    ?>
    
    <div class="headline-banner mb-5">
        <img class="img-fluid" src="images/banners/our-story-banner.png" alt="Our Story Banner">
        <h1 class="headline-caption-frontend">Our Story</h1>
    </div>

    <div class="py-5 mb-5">
        <div class="container ourstory-section">
            <div class="row align-items-center g-4 g-lg-5">

                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="d-flex flex-column gap-3">
                        <img class="img-fluid story-img shadow-sm" src="images/our-story/ourstory-2.png" alt="Brew & Shot Owner">
                        <img class="img-fluid story-img shadow-sm" src="images/our-story/ourstory.png" alt="Brew & Shot Storefront">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="story-content px-lg-3">
                        <p class="story-lead">
                            Sometimes, a dream begins with a simple idea—and the courage to keep going, even when you're unsure where it will lead. 
                        </p>

                        <p> 
                            We had a small space with plans and possibilities, and while not everything turned out perfectly, our passion to continue never faded. Then one day, we thought—what if we turn it into a coffee shop? A place that truly reflects who we are, because we’ve always loved coffee and the simple joy it brings. 
                        </p>    

                        <p> 
                            We didn’t change everything. We kept the same theme, the same colors, and the story of the space—just added more warmth, more smiles, and of course, more coffee. That’s how Brew & Shot came to life. 
                        </p>
                        
                        <p>
                            Little by little, it became more than just a coffee shop. Today, Brew & Shot has become a second home—a space where meetings happen, where students stay late to study and work comfortably, and where people come to simply relax and unwind. 
                        </p>  

                        <p>
                            Until now, we may not have fully recovered our investment yet, but what matters most is that we remain open—because every day, we get to make people smile, and more importantly, we’re able to provide jobs. 
                        </p>   

                        <p class="fst-italic fw-medium">
                            And for us, that’s more than enough reason to keep going. 
                        </p>  
                        
                        <blockquote class="story-quote my-4 p-3 border-start border-3 border-dark">
                            "Because sometimes, success isn’t measured by profit—but by the lives you touch and the heart you pour into every cup of coffee."
                        </blockquote>    

                        <p class="fw-bold mb-0 text-dark">
                            This is Brew & Shot—brewed with passion, served with purpose.
                        </p>
                    </div>    
                </div>

            </div>
        </div>
    </div>

    <?php
    	$page_userfooter = 'user footer';
    	include 'footer.php'; 
    ?>
    
</body>
</html>