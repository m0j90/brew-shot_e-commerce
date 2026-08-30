<?php
    session_start();

    if(isset($_GET['logout'])) {
        session_unset();
        session_destroy();
    }

    if(isset($_SESSION['ValidSessionPage'])) {
        header("Location: home.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair+Display" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Quicksand" />
    <link rel="icon" href="images/logo/favicon_brew-and-shot.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

    <?php
        $page_login = 'login';
        include 'header.php';
    ?>

    <div class="container">
        <?php
            $page_user = 'user';
            include 'login-form.php';
        ?>  
    </div>

    <?php
        include 'footer.php';
    ?>
    
</body>
</html>