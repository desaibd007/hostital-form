<?php
include "master.php";

session_start();
include 'config.php';
if (isset($_POST['submit'])) {
    $a = $_POST['username'];
    $b = $_POST['password'];
    $b = md5($b);
    $date = date_create()->format('d-m-Y');
  $sqlu = "SELECT * FROM users_table WHERE (userid='$a' OR email='$a') AND pwd='$b'"; 
    $resultu = $conn->query($sqlu);
    if ($resultu->num_rows > 0) {
        $sql = "SELECT * FROM users_table WHERE (userid='$a' OR email='$a') AND pwd='$b'";
        $result = mysqli_query($conn, $sql);
        $firm = mysqli_fetch_array($result);
        $customer_id = $firm['customer_id'];
        $status = $firm['active'];
        $userid = $firm['userid'];

        session_start();
        $_SESSION['dtusr_id'] = $customer_id;
        $_SESSION['dtuserid'] = $firm['userid'];
        echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='https://castorcredit.com/dashboard/index.php';</SCRIPT>");
    } else {
        echo "<script>alert('Invalid Login Details Username Or Password')</script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="UFk779txBhLYArm8j0f2UaHSAyJXJgicpx8pR4vM">
    <title><?php echo $tital ?> - Sign In</title>
    <meta name="description" content="5 income on a single Stacking">
    <meta name="keywords" content="investment,, Best Investment Trading Plan">
    <link rel="shortcut icon" href="<?php echo $logo; ?>" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="<?php echo $logo; ?>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content=" - Sign In">
    
    <meta itemprop="name" content=" - Sign In">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="<?php echo $logo; ?>">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?php echo $logo; ?>"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="login">
    
    <meta name="twitter:card" content="summary_large_image">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Exo:300,400,600,700|Open+Sans: 400,500,700&display=swap">

    <link rel="stylesheet" href="assets/templates/neo_dark/css/all.min.css">
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="assets/templates/neo_dark/css/line-awesome.min.css">

    <link rel="stylesheet" href="assets/templates/neo_dark/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/templates/neo_dark/css/vendor/animate.css">
    <link rel="stylesheet" href="assets/templates/neo_dark/css/vendor/nice-select.css">
    <link rel="stylesheet" href="assets/templates/neo_dark/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/templates/neo_dark/css/main.css">
    <link rel="stylesheet" href="assets/templates/neo_dark/css/custom.css">
    <link rel="stylesheet" href="assets/templates/neo_dark/css/color.php">
    </head>
<body>
<div class="preloader">
    <div class="dl">
        <div class="dl__container">
            <div class="dl__corner--top"></div>
            <div class="dl__corner--bottom"></div>
        </div>
        <div class="dl__square"></div>
    </div>
</div>
<main class="color-version-one">
    <!-- header-section start  -->
    <header class="header-section">
        <div class="header-top">
            <div class="container-fluid">
                <div class="header-top-content d-flex flex-wrap align-items-center justify-content-between">
                    <div class="header-top-left">
                        <select class="langSel">
                                                            <option value="en"  selected  >English</option>
                                                    </select>
                    </div>
                    <div class="header-top-right">
                        <div class="header-action d-flex flex-wrap align-items-center">
                                                        <a href="login.php" class="btn btn-primary btn-small">Login</a>
                            <a href="register.php" class="btn btn-primary btn-small">Register</a>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-xl align-items-center">

                    <a href="" class="site-logo site-title">
                        <img src="<?php echo $logo; ?>" alt="logo">
                    </a>
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-toggle"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     

                    </div><!-- navbar-collapse end -->
                </nav>
            </div>
        </div>
    </header>

    <!-- header-section end  -->


        <section class="inner-hero-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="inner-hero-content">
                    <h2 class="inner-hero__title text-shadow">Sign In</h2>
                    <ul class="page__breadcums">
                        <li><a href="">home</a></li>
                        <li>Sign In</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="particles"></div>
</section>
<section class="pt-150">
    <div class="signin-wrapper">
        <div class="outset-circle"></div>
        <div class="container">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="signin-thumb"><img src="assets/templates/neo_dark/images/signin.png" alt="image"></div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="signin-form-area">
                        <h3 class="title text-capitalize text-shadow mb-30">Sign In</h3>
                        <form class="signin-form" action="" method="POST">
                            <input type="hidden" name="_token" value="UFk779txBhLYArm8j0f2UaHSAyJXJgicpx8pR4vM">                            
                            <div class="form-group custom-form-field">
                                <i class="fa fa-user"></i>
                                <input type="text" name="username" id="signin_name" placeholder="username" value="" required>
                            </div>

                            <div class="form-group custom-form-field">
                                <i class="fa fa-lock"></i>
                                <input type="password" name="password"  id="signin_pass"  placeholder="password" required autocomplete="current-password" required>
                            </div>


                            <div class="form-group custom-form-field">
                                                            </div>

                                                        <div class="form-group">
                                <button type="submit"  name="submit"  class="btn btn-success btn-small w-100 btn-primary">Sign In</button>
                            </div>
                            <p>Forgot Your Password?
                                <a href="password/reset" class="label-text base--color">Reset Now</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    
<?php include "footer.php"; ?>