<div class="sidebar">
    <div class="sidebar-header">
        <a class="navbar-brand">
            <img src="../images/logo/logo_brew-and-shot.png" alt="Logo" width="60px" class="me-2 mb-1">
            Admin Panel
        </a>
    </div>
    <ul class="navbar-nav me-2 mb-1 mt-3">
        <li>
            <a class="nav-link <?php echo ($page_dashboard == 'dashboard') ? 'nav-active' : ''; ?>" href="dashboard.php"><i class="bi bi-speedometer2"></i> <span class="nav-text">Dashboard</span></a>
        </li>
        <li>
            <a class="nav-link <?php echo ($page_menuitems == 'menu items') ? 'nav-active' : ''; ?>" href="menu-items.php"><i class="bi bi-cup-hot"></i> <span class="nav-text">Menu Items</span></a>
        </li>
        <li>
            <a class="nav-link <?php echo (isset($page_subadmin) && $page_subadmin == 'sub-admin') ? 'nav-active' : ''; ?>" href="sub-admin.php"><i class="bi bi-person-gear"></i> <span class="nav-text">Sub Admin</span></a>
        </li>
    </ul>

        <div class="sidebar-footer p-3">
            <div class="sidebar-time text-center mb-2 fw-bold">
                <span id="clock"></span>
            </div>

            <a href="#" class="nav-link logout-link d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#logoutModal">
                <i class="bi bi-box-arrow-left"></i> <span class="nav-text">Log Out</span>
            </a>
        </div>
</div>

<script src="../clock.js"></script>

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