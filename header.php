<?php
    if (isset($page_success) && $page_success) {
?>

<nav class="navbar navbar-expand-lg nav-bg-lightbrown mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="images/logo/logo_brew-and-shot.png" alt="Logo" width="60px" class="me-2 mb-1">
            Brew & Shot
        </a>
        <div class="navbar-time ms-auto pe-3" id="clock"></div>
    </div>
</nav>

<?php } elseif (isset($page_adminsuccess) && $page_adminsuccess) { ?>

<nav class="navbar navbar-expand-lg nav-bg-lightbrown mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="../images/logo/logo_brew-and-shot.png" alt="Logo" width="60px" class="me-2 mb-1">
            Admin Panel
        </a>
        <div class="navbar-time ms-auto pe-3" id="clock"></div>
        <script src="../clock.js"></script>
    </div>
</nav>

<?php } elseif (isset($page_adminlogin) && $page_adminlogin) { ?>

<nav class="navbar navbar-expand-lg nav-bg-lightbrown mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="../images/logo/logo_brew-and-shot.png" alt="Logo" width="60px" class="me-2 mb-1">
            Admin Panel
        </a>
        <div class="navbar-time ms-auto pe-3" id="clock"></div>
    </div>
</nav>

<script src="../clock.js"></script>

<?php } elseif (isset($page_user) && $page_user === 'user') { ?>

<nav class="navbar navbar-expand-lg nav-bg-lightbrown border-0 py-2">
    <div class="container-fluid px-4">
        <a class="navbar-brand d-flex align-items-center fw-bold me-4" href="home.php">
            <img src="images/logo/logo_brew-and-shot.png" alt="Brew & Shot Logo" width="50px" class="me-2 object-fit-contain">
            Brew & Shot
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarNav">
            <div class="offcanvas-header">
                <div class="d-flex align-items-center">
                    <img src="images/logo/logo_brew-and-shot.png" alt="Brew & Shot Logo" width="45px" class="me-2">
                    <h5 class="offcanvas-title fw-bold">Brew & Shot</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body d-flex flex-column flex-lg-row justify-content-between align-items-lg-center">
                <ul class="navbar-nav me-auto mb-3 mb-lg-0 align-items-lg-center gap-lg-2">
                    <li class="nav-item">
                        <a class="nav-link text-nowrap <?php echo ($page_home === 'home') ? 'nav-active' : ''; ?>" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap <?php echo ($page_menu === 'menu') ? 'nav-active' : ''; ?>" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap <?php echo ($page_ourstory === 'our story') ? 'nav-active' : ''; ?>" href="our-story.php">Our Story</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap <?php echo ($page_contact === 'contact') ? 'nav-active' : ''; ?>" href="contact.php">Contact</a>
                    </li>
                </ul>
                
                <div class="navbar-utilities mt-auto mt-lg-0 pt-3 pt-lg-0 w-100 w-lg-auto">
                    <div class="d-flex align-items-center justify-content-between justify-content-lg-end gap-3">
                        <div class="navbar-time px-3 py-2 text-nowrap fw-semibold" id="clock"></div>
                        <a href="#" class="nav-link logout-link d-flex align-items-center gap-2 px-3 py-2 border-0" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <i class="bi bi-box-arrow-left"></i> <span class="nav-text">Log Out</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<script src="clock.js"></script>

<?php } else { 
        
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$is_logged_in = isset($_SESSION['user']);
        
?>

<nav class="navbar navbar-expand-lg nav-bg-lightbrown">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $is_logged_in ? 'home.php' : 'index.php'; ?>">
            <img src="images/logo/logo_brew-and-shot.png" alt="Logo" width="60px" class="me-2 mb-1">
            Brew & Shot
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarNav">
            <div class="offcanvas-header">
                <img src="images/logo/logo_brew-and-shot.png" alt="Logo" width="60px" class="me-2">
                <h5 class="offcanvas-title">Brew & Shot</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">              
                <ul class="navbar-nav me-auto mb-lg-0 mb-3 align-items-start align-items-lg-center gap-lg-2">
                    <?php if ($is_logged_in) { ?>
                        <!-- ================= BACKEND / USER NAVBAR ================= -->
                        <li class="nav-item">
                            <a class="nav-link text-nowrap <?php echo (isset($page_home) && $page_home === 'home') ? 'nav-active' : ''; ?>" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-nowrap <?php echo (isset($page_menu) && $page_menu === 'menu') ? 'nav-active' : ''; ?>" href="menu.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-nowrap <?php echo (isset($page_ourstory) && $page_ourstory === 'our story') ? 'nav-active' : ''; ?>" href="our-story.php">Our Story</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-nowrap <?php echo (isset($page_contact) && $page_contact === 'contact') ? 'nav-active' : ''; ?>" href="contact.php">Contact</a>
                        </li>
                    <?php } else { ?>
                        <!-- ================= FRONTEND / GUEST NAVBAR ================= -->
                        <li class="nav-item">
                            <a class="nav-link text-nowrap <?php echo (isset($page_menu) && $page_menu === 'menu') ? 'nav-active' : ''; ?>" href="menu.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-nowrap <?php echo (isset($page_ourstory) && $page_ourstory === 'our story') ? 'nav-active' : ''; ?>" href="our-story.php">Our Story</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-nowrap <?php echo (isset($page_contact) && $page_contact === 'contact') ? 'nav-active' : ''; ?>" href="contact.php">Contact</a>
                        </li>
                    <?php } ?>
                </ul>
                
                <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center gap-3 ms-lg-auto mt-3 mt-lg-0">
                    
                    <ul class="navbar-nav flex-column flex-lg-row align-items-start align-items-lg-center gap-2 gap-lg-3 mb-0">
                        <?php if ($is_logged_in) { ?>
                            <!-- BACKEND AUTH -->
                        	
                            <li class="nav-item">
                                
                                <a class="nav-link text-nowrap" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                    <i class="bi bi-box-arrow-left me-1"></i> <span class="nav-text">Log Out</span>
                                </a>
                            </li>
                        <?php } else { ?>
                            <!-- FRONTEND AUTH -->
                            <li class="nav-item">
                                <a class="nav-link text-nowrap <?php echo (isset($page_login) && $page_login === 'login') ? 'nav-active' : ''; ?>" href="index.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-nowrap <?php echo (isset($page_register) && $page_register === 'register') ? 'nav-active' : ''; ?>" href="register.php">Sign Up</a>
                            </li>
                        <?php } ?>
                        
                        <div class="navbar-time px-3 py-2 text-nowrap fw-semibold mt-2 mt-lg-0" id="clock"></div>
                        
                    </ul>

                </div>
                
            </div>
        </div>
    </div>
</nav>

<?php } ?>

<script src="clock.js"></script>

    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow">
                <div class="modal-body text-center p-4">
                    <i class="bi bi-box-arrow-right mt-2 mb-3"></i>

                    <h4 class="modal-title fw-bold mb-2" id="logoutModalLabel">Log Out</h4>
                    <p>Are you sure you want to log out?</p>

                    <div class="d-grid gap-2 col-10 mx-auto mt-4">
                        <a href="index.php?logout=1" class="btn btn-success py-2 border-0">Yes, Log Out</a>
                        <button type="button" class="btn btn-outline-secondary py-2" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>