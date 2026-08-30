<?php
    session_start();

    $name = trim($_POST["name"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $subject = trim($_POST["subject"] ?? '');
    $message = trim($_POST["message"] ?? '');

    $error_msg = '';
    if (isset($_GET['empty'])) {
        $error_msg = 'Please fill in all required fields before submitting.';
    }

	$page_contact = 'contact';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />
    <link rel="icon" href="images/logo/favicon_brew-and-shot.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <?php 
    	include 'header.php'; 
    ?>

    <div class="headline-banner mb-5">
        <img class="img-fluid" src="images/banners/contact-banner.png" alt="Contact Us Banner">
        <h1 class="headline-caption-frontend">Contact</h1>
    </div>

    <div class="container">        

        <div class="contact-section-wrapper">
            <div class="container-fluid">
                <div class="contact-form">
                    <div class="row g-0 align-items-stretch">
                        <div class="col-md-6 p-4 p-lg-5">
                            <h2 class="fw-bold mb-4 text-dark-coffee">Get in touch with us</h2>
                            
                            <form action="success_contact.php" method="post">
                                <?php if(!empty($error_msg)): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $error_msg; ?>
                                    </div>
                                <?php endif; ?>

                                <div class="mt-3 mb-3">
                                    <label for="name" class="form-label fw-semibold">Name:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" value="<?php echo($name); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" value="<?php echo($email); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label fw-semibold">Subject:</label>
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" value="<?php echo($subject); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label fw-semibold">Message</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Your Message" name="message"><?php echo($message); ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Send Message</button>
                            </form>
                        </div>
                        
                        <div class="col-md-6 contact-info-bg">
                            <h2>Contact Information</h2>
                            <p class="mt-3 opacity-90">If you have any questions, feedback, or inquiries, please feel free to reach out to us. We would love to hear from you!</p>

                            <ul class="list-unstyled mt-4">
                                <li class="mb-3">                       
                                    <a href="tel:09953815867" class="footer-link">
                                    <i class="fa-solid fa-phone me-3"></i>
                                    0995 381 5867
                                    </a>
                                </li>
                                <li class="mb-3">            
                                    <a href="mailto:brewandshot@gmail.com" class="footer-link">
                                    <i class="fa-solid fa-envelope me-3"></i>
                                    brewandshot@gmail.com
                                    </a>
                                </li>
                                <li class="mb-3">            
                                    <a href="https://www.messenger.com/t/100447672955334" class="footer-link">
                                    <i class="fa-brands fa-facebook-messenger me-3"></i>
                                    Brew & Shot Messenger
                                    </a>
                                </li>
                            </ul>

                            <div class="social-links mt-4">
                                <a href="https://www.facebook.com/profile.php?id=100089704350988" class="social-icon" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/brewnshot/" class="social-icon" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.tiktok.com/@yszobel1_67jk3" class="social-icon" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>

        <div class="location-bg mt-4">
            <h1 class="fw-bold mb-4 text-dark-coffee text-center">Find Us on Google Maps</h1>
            <p class="opacity-90">Looking for Brew & Shot? Check Google Maps below to find our location and ready to serve you great coffee and great dessert. Come visit us today!</p>

            <div class="row mt-4">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3858.5891831628296!2d121.0334536!3d14.7358033!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b1bf0a8b04bf%3A0x2bf88da9f23225ea!2sBrew%20%26%20Shot!5e0!3m2!1sen!2sph!4v1775489756770!5m2!1sen!2sph" style="width: 100%; height: 400px; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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