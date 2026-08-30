<?php
    session_start();

    $categories = array("Cake", "Croffles", "Pasta", "Coffee", "Non Coffee", "Blended Cream", "Cookies", "Muffins", "Tiramisu Cake");
    sort($categories);
    $current_cat = $_GET['cat'] ?? 'All';

    $cart = $_SESSION['cart'] ?? [];
    $cart_count = 0;
    $cart_total = 0;
    foreach ($cart as $item) {
        $cart_count += (int)$item['quantity'];
        $cart_total += ((float)$item['price'] * (int)$item['quantity']);
    }

	$page_menu = 'menu';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
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
        <img class="img-fluid" src="images/banners/menu-banner.png" alt="Menu Banner">
        <h1 class="headline-caption-frontend">Menu</h1>
    </div>

    <div class="container">

        <?php if (isset($_GET['added'])) {
            echo '<div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i> Item added to your cart!
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>';
        }
        ?>

        <div class="d-flex align-items-center gap-3 mb-4 flex-wrap">
            <div style="min-width: 200px;">
                <select class="form-select border-secondary-subtle" onchange="location = this.value;">
                    <option value="menu.php?cat=All" <?php echo ($current_cat === 'All') ? 'selected' : ''; ?>>All Categories</option>
                    <?php foreach ($categories as $cat) { ?>
                        <option value="menu.php?cat=<?php echo urlencode($cat); ?>" <?php echo ($current_cat === $cat) ? 'selected' : ''; ?>>
                            <?php echo $cat; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

                <button class="btn btn-checkout fw-semibold px-4 position-relative" data-bs-toggle="modal" data-bs-target="#checkoutModal">
                    <i class="bi bi-cart3 me-1"></i> View Cart
                    <?php if ($cart_count > 0) {
                        echo '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">';
                            echo $cart_count;
                        echo '</span>';
                    }
                    ?>
                </button>
        </div>

        <hr>

        <div class="row g-4">
            <?php include 'admin/display-items.php'; ?>
        </div>
    </div>    

        <?php
            $page_userfooter = 'user footer';
            include 'footer.php'; 
        ?>

    <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">

                <div class="modal-header border-bottom border-light-subtle px-4 py-3">
                    <h5 class="modal-title fw-bold text-dark d-flex align-items-center gap-2 mb-0" id="checkoutModalLabel">
                        <i class="bi bi-bag-check me-2"></i> Your Shopping Cart
                        
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body p-5 text-center">
                    <?php if (empty($cart)) {
                        echo '<div class="py-4">';
                            echo '<i class="bi bi-cart-x fs-1 d-block mb-3"></i>';
                            echo '<p class="fs-5 fw-medium text-secondary mb-0">Your cart is currently empty.</p>';
                        echo '</div>';
                    } else {
                    ?>

                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Item</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center" style="width: 140px;">Qty</th>
                                    <th class="text-end">Subtotal</th>
                                    <th class="text-center" style="width: 50px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cart as $index => $item) { 
                                    $subtotal = (float)$item['price'] * (int)$item['quantity'];
                                ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>" style="width: 45px; height: 45px; object-fit: cover"; class="rounded">
                                                <span class="fw-semibold"><?php echo $item['name']; ?></span>
                                            </div>
                                        </td>
                                        <td class="text-center">&#8369;<?php echo number_format((float)$item['price'], 2); ?></td>

                                        <td class="text-center">
                                            <div class="d-flex align-items-center justify-content-center gap-1">
                                                <form action="cart.php" method="post" class="m-0">
                                                    <input type="hidden" name="action" value="update">
                                                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                                                    <input type="hidden" name="change" value="-1">
                                                    <button type="submit" class="btn btn-sm btn-outline-secondary px-2 py-0 fw-bold">&minus;</button>
                                                </form>

                                                <span class="fw-bold px-2"><?php echo (int)$item['quantity']; ?></span>

                                                <form action="cart.php" method="POST" class="m-0">
                                                    <input type="hidden" name="action" value="update">
                                                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                                                    <input type="hidden" name="change" value="1">
                                                    <button type="submit" class="btn btn-sm btn-outline-secondary px-2 py-0 fw-bold">+</button>
                                                </form>

                                            </div>
                                        </td>

                                        <td class="text-end fw-semibold">&#8369;<?php echo number_format($subtotal, 2); ?></td>

                                        <td class="text-center">
                                            <form action="cart.php" method="post" class="m-0">
                                                <input type="hidden" name="action" value="remove">
                                                <input type="hidden" name="index" value="<?php echo $index; ?>">
                                                <button type="submit" class="btn btn-sm text-danger border-0 p-1" title="Remove item">
                                                    <i class="bi bi-trash fs-6"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between align-items-center fs-5 fw-bold text-dark my-2">
                        <span>Total:</span>
                        <span>&#8369;<?php echo number_format($cart_total, 2) ?></span>
                    </div>

                    <?php } ?>
                </div>

                <div class="modal-footer px-4 pb-4">
                    <button type="button" class="btn btn-outline-secondary px-4 py-2" data-bs-dismiss="modal">Continue Shopping</button>

                    <?php if (!empty($cart)) {
                        echo '<a href="checkout.php" class="btn btn-checkout px-4 py-2">';
                            echo 'Proceed to Checkout <i class="bi bi-arrow-right ms-1"></i>';
                        echo '</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="cart-auto-open.js?v=<?php echo time(); ?>"></script>
    
</body>
</html>