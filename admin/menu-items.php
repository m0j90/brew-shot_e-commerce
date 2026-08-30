<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Items</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />
    <link rel="icon" href="../images/logo/favicon_brew-and-shot.png" type="image/x-icon">
    <link rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">
</head>
<body>

    <?php
        $page_menuitems = 'menu items';
        include '../sidebar-menu.php';
    ?>

    <div class="banner-content">
        <div class="headline-banner">
            <img class="img-fluid" src="../images/banners/menu-banner.png" alt="Menu Items Banner">
            <h1 class="headline-caption">Menu Items</h1>
        </div>
    </div>

    <div class="main-page-content">

        <?php
            if (isset($_GET['success'])) { 
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Menu item added successfully!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
        ?>
        <div class="d-flex align-items-center  gap-3 mb-4 flex-wrap">
            <button class="btn text-white fw-semibold px-4 shadow-sm" style="background-color: #8c6239;" data-bs-toggle="modal" data-bs-target="#additemsModal">
                <i class="bi bi-plus-lg me-1"></i> Add Items
            </button>

            <div style="min-width: 200px;">
                <?php
                    $categories = array("Cake", "Croffles", "Pasta", "Coffee", "Non Coffee", "Blended Cream", "Cookies", "Muffins", "Tiramisu Cake");
                    sort($categories);
                    $current_cat = $_GET['cat'] ?? 'All';
                ?>
                <select class="form-select border-secondary-subtle shadow-sm" onchange="location = this.value;">
                    <option value="menu-items.php?cat=All" <?php echo ($current_cat === 'All') ? 'selected' : ''; ?>>All Categories</option>
                    <?php foreach ($categories as $cat) { ?>
                        <option value="menu-items.php?cat=<?php echo urlencode($cat); ?>" <?php echo ($current_cat === $cat) ? 'selected' : ''; ?>>
                            <?php echo $cat; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="modal fade" id="additemsModal" tabindex="-1" aria-labelledby="additemsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow-lg">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold text-dark" id="additemsModal">Add New Menu Item</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-4">
                        <?php
                            if (isset($_GET["empty"])) {
                                echo "<div class='alert alert-warning alert-dismissible fade show fw-medium' role='alert'>
                                    Please fill in all fields to add a menu item.
                                    </div>";
                            }
                        ?>
                        <form action="../upload.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="itemName" class="form-label fw-semibold text-secondary">Item Name</label>
                                <input type="text" class="form-control" id="itemName" name="item_name" placeholder="e.g. Spanish Latte">
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label for="itemCategory" class="form-label fw-semibold text-secondary">Category</label>
                                    <?php 
                                        $category = array("Cake", "Croffles", "Pasta", "Coffee", "Non Coffee", "Blended Cream", "Cookies", "Muffins", "Tiramisu Cake");
                                        sort($category);
                                        echo '<select class="form-select" id="itemCategory" name="category">';
                                        echo "<option value='' disabled selected hidden>Select category</option>";

                                        foreach ($category as $cat) {
                                            echo "<option>$cat</option>";
                                        }
                                        echo "</select>";
                                    ?>
                                </div>
                                <div class="col-md-6">
                                    <label for="itemPrice" class="form-label fw-semibold text-secondary">Price (&#8369;)</label>
                                    <input type="number" step="0.01" min="0" class="form-control" id="itemPrice" name="price" placeholder="0.00">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="menuImage" class="form-label fw-bold">Select Item Image</label>
                                <input class="form-control" type="file" name="image" id="menuImage" accept="image/*">
                            </div>
                            <button class="btn text-white w-100 py-2 shadow-sm d-flex align-items-center justify-content-center gap-2 fw-semibold" style="background-color: #8c6239;" type="submit" name="submit">
                                <i class="bi bi-cloud-upload fs-5"></i> Upload Image
                            </button>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary btn-sm px-3" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row g-4">
            <?php include 'display-items.php'; ?>
        </div>
        
            <?php
                $page_adminfooter = 'admin footer';
                include '../footer.php';
            ?>

    </div>
    
    <script src="modal-auto-open.js"></script>

</body>
</html>