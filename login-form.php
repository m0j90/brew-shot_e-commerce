<?php
    $LoginForm = array("Login","Administrator Login");
?>

<?php
    if (isset($page_admin) && $page_admin) {
?>

<div class="login-form p-4">
    <h2 class="fw-bold"> <?php echo $LoginForm[1] ?> </h2>
    <form action="dashboard.php" method="post">
        <?php
            if(isset($_GET["logout"])) {
                echo '<div class="alert alert-success">
                    You have successfully logged out.
                    </div>';
            }

            if (isset($_GET['invalid'])) {
                echo "<div class='alert alert-danger'>
                    We couldn't find an account matching that information.
                    </div>";
            }

            if (isset($_GET["empty"])) {
                echo "<div class='alert alert-warning'>
                    Please fill in all fields to log in.
                    </div>";
            }
        ?>

        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
        </div>
        <div class="mb-3">
            <?php
                $positions = array("Administrator", "Sub-Administrator");
                echo "<label for='position' class='form-label'>Position:</label>";
                echo "<select class='form-select' id='position' name='position' required>";
                echo "<option value='' disabled selected hidden>Select your position</option>";

                foreach ($positions as $pos) {
                    echo "<option value='$pos'>$pos</option>";
                }
                echo "</select>";                           
            ?>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember" name="remember"> 
                <label class="form-check-label" for="remember">
                    Remember me   
                </label>
            </div>
            <div>
                <a href="#" class="text-decoration-none">Forgot password?</a>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Log In</button>
    </form>
</div>

<?php } else { ?>

<div class="container my-5">
    <div class="row g-0 main-login-card rounded-4 overflow-hidden shadow">
        
        <div class="col-lg-6 login-form-bg p-5 d-flex flex-column justify-content-center">
            <h1 class="fw-bold mb-3 text-white font-playfair display-5">Welcome back!</h1>
            <p class="mb-0 text-white lh-base opacity-90">
                Your neighborhood spot for slow mornings, creative afternoons, and warm connections. Every cup is made with care. Log in to order your favorites.
            </p>
        </div>

        <div class="col-lg-6 bg-cream p-4 p-md-5 d-flex flex-column justify-content-center">
            <h2 class="fw-bold mb-4"> <?php echo $LoginForm[0] ?> </h2>
                <form action="home.php" method="post">
                    <?php
                        if(isset($_GET["logout"])) {
                            echo '<div class="alert alert-success">
                                You have successfully logged out.
                                </div>';
                        }

                        if (isset($_GET['invalid'])) {
                            echo "<div class='alert alert-danger'>
                                We couldn't find an account matching that information.
                                </div>";
                        }

                        if (isset($_GET["empty"])) {
                            echo "<div class='alert alert-warning'>
                                Please fill in all fields to log in.
                                </div>";
                        }
              
              			if (isset($_SESSION['login_message'])) {
                            echo '<div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">';
                            	echo $_SESSION['login_message']; 
                                unset($_SESSION['login_message']);
                            echo '</div>';
                        }
                    ?>
      
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Password:</label>
                    <input type="password" class="form-control" id="password" name="pswd" placeholder="Enter password">
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember">
                        <label class="form-check-label small" for="remember">Remember me</label>
                    </div>
                    <a href="forgot-password.php" class="small text-muted text-decoration-none">Forgot password?</a>
                </div>

                <button type="submit" class="btn btn-dark-coffee w-100 py-2 fw-bold mb-3">Log In</button>

                <div class="text-center">
                    <span class="small text-muted">Don't have an account? </span>
                    <a href="register.php" class="small fw-semibold text-dark-coffee">Sign up</a>
                </div>
            </form>
        </div>

    </div>
</div>

<?php } ?>