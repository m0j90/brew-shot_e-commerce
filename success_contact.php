<?php 
    session_start();

	if (!isset($_SESSION['user'])) {
        $_SESSION['login_message'] = "Please log in to send us a message.";
        header("Location: index.php");
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name    = trim($_POST["name"] ?? '');
        $email   = trim($_POST["email"] ?? '');
        $subject = trim($_POST["subject"] ?? '');
        $message = trim($_POST["message"] ?? '');

        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            header('Location: contact.php?empty=1');
            exit();
        }

        $submitted_contact_details = [
            'Name'    => $name,
            'Email'   => $email,
            'Subject' => $subject,
            'Message' => $message
        ];
    } else {
        header('Location: contact.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Sent Successfully</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />
    <link rel="icon" href="images/logo/favicon_brew-and-shot.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

    <?php
        $page_user = 'user';
        $page_contact = 'contact';
        include 'header.php';
    ?>

    <div class="container my-5" style="max-width: 900px;">
        <div class="text-center border-0 shadow-sm mb-4">
            <div class="alert alert-success m-0 p-4 rounded-3">
                <h4 class="fw-bold mb-2">Thank you for reaching out!</h4>
                <p class="mb-0">Your message has been sent successfully. We will get back to you shortly.</p>
            </div>
        </div>

        <div class="user_details-form p-4 shadow-sm bg-white rounded-3">
            <h2 class="fw-bold mb-4 text-dark-coffee">Submitted Contact Details</h2>
            <div class="table-responsive">
                <table class="table table-striped align-middle">
                    <tbody>
                        <?php foreach ($submitted_contact_details as $label => $value): ?>
                            <tr class="lh-base">
                                <th style="width: 30%;" class="fw-semibold"><?php echo $label; ?>:</th>
                                <td><?php echo $value; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="mt-4 text-center">
                <a href="contact.php" class="btn btn-outline-coffee me-2">Back to Contact Page</a>
                <a href="home.php" class="btn btn-contact">Return to Home</a>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    
</body>
</html>