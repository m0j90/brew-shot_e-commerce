<?php if (isset($page_userfooter) && $page_userfooter) { ?>

<footer class="footer-user-bg text-light mt-5 pt-4 pb-4">
    <div class="container-fluid px-4 px-md-5">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-4 fw-bold text-uppercase">About Us</h5>
                <p class="mb-4 opacity-75 small lh-base">
                  More than just coffee—this is your neighborhood spot for slow mornings, creative afternoons, and warm connections. Every cup is made with care, every visit feels like home.
                </p>
                <div class="social-links d-flex gap-2">
                    <a href="https://www.facebook.com/profile.php?id=100089704350988" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/brewnshot/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.tiktok.com/@yszobel1_67jk3" class="social-icon"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <h5 class="mb-4 fw-bold text-uppercase">Services</h5>
                <ul class="list-unstyled opacity-75 mb-0">
                    <li class="mb-2 d-flex align-items-center"><i class="fas fa-check me-2"></i>Takeout</li>
                    <li class="mb-2 d-flex align-items-center"><i class="fas fa-check me-2"></i>Reservations</li>
                    <li class="mb-2 d-flex align-items-center"><i class="fas fa-check me-2"></i>Dine-in</li>
                    <li class="mb-2 d-flex align-items-center"><i class="fas fa-check me-2"></i>In-store pickup</li>
                    <li class="mb-2 d-flex align-items-center"><i class="fas fa-check me-2"></i>Outdoor seating</li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="mb-4 fw-bold text-uppercase">Contact Info</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-3">
                        <a href="https://maps.app.goo.gl/P6QwPMF5Jk4gCxhU8" target="_blank" class="footer-link">
                          <i class="bi bi-geo-alt-fill contact-icon me-2 mt-1"></i>
                          <span>#2 Susano Road Stall #5 Brgy. 170 Novaliches, Caloocan City, Caloocan, Philippines, 1400</span>
                        </a>
                    </li>
                    <li class="mb-2">                       
                        <a href="tel:09953815867" class="footer-link">
                          <i class="bi bi-telephone-fill contact-icon me-2 flex-shrink-0"></i>
                          <span class="mt-2">0995 381 5867</span>
                        </a>
                    </li>
                    <li class="mb-2">            
                        <a href="mailto:brewandshot@gmail.com" class="footer-link">
                          <i class="bi bi-envelope-fill contact-icon me-2 flex-shrink-0"></i>
                          <span>brewandshot@gmail.com</span>
                        </a>
                    </li>
                    <li class="mb-2">            
                        <a href="https://www.messenger.com/t/100447672955334" class="footer-link">
                          <i class="bi bi-messenger contact-icon me-2 flex-shrink-0"></i>
                          <span>Brew & Shot Messenger</span>
                        </a>
                    </li>
                </ul>
            </div>
        
            <div class="col-lg-4 col-md-6">
                <h5 class="mb-4 fw-bold text-uppercase">Opening Hours</h5>
                <table class="table table-borderless table-opening-hours mb-0">
                    <tbody>
                        <tr>
                            <td class="ps-0 fw-semibold">Monday:</td>
                            <td class="pe-0 opacity-75 text-end text-sm-start">10:00 AM - 10:00 PM</td>
                        </tr>
                        <tr>
                            <td class="ps-0 fw-semibold text-danger">Tuesday:</td>
                            <td class="pe-0 text-danger fw-bold text-end text-sm-start">CLOSED</td>
                        </tr>
                        <tr>
                            <td class="ps-0 fw-semibold">Wednesday - Friday:</td>
                            <td class="pe-0 opacity-75 text-end text-sm-start">10:00 AM - 10:00 PM</td>
                        </tr>
                        <tr>
                            <td class="ps-0 fw-semibold">Saturday - Sunday:</td>
                            <td class="pe-0 opacity-75 text-end text-sm-start">12:00 PM - 12:00 AM</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-4 pt-2">
            <div class="col-12">
                <hr class="mb-4 border-light opacity-25">
                <div class="text-center opacity-75 small">
                    <p class="mb-0">&copy; <?php echo date("Y"); ?> Brew & Shot. All rights reserved | Developed by Jerome Zabanal</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<?php } elseif (isset($page_adminfooter) && $page_adminfooter) { ?>

<footer class="footer-bg text-white py-3 mt-5">
    <div class="container-fluid">
        <div class="text-center">
            <p class="mb-0">&copy; <?php echo date("Y"); ?> Brew & Shot. All rights reserved | Developed by Jerome Zabanal</p>
        </div>
    </div>
</footer>

<?php } else { ?>

<footer class="text-white py-3 mt-5">
    <div class="container-fluid">
        <div class="text-center">
            <p class="mb-0">&copy; <?php echo date("Y"); ?> Brew & Shot. All rights reserved | Developed by Jerome Zabanal</p>
        </div>
    </div>
</footer>

<?php } ?>