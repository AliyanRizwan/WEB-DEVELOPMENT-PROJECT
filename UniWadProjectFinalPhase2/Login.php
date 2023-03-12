<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="icon" href="images/logo.png" type="image/icon type">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="ProjectCss.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    body {
        background-color: white;

    }

    .form-out {
        background-color: rgb(174, 181, 221, 50%);
        margin: 200px;
        width: 350px;
        height: 370px;
        border-radius: 10px;


    }

    form .btn {
        margin-top: 50px;
        width: 100%;
    }

    form label {
        margin: 10px;
    }
</style>

<body>

    <body>
        <div class="container-fluid ">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-1 logo">
                    <center>
                        <img src="images/logo.png" alt="logo">
                    </center>
                </div>
                <div class="col-12 col-lg-2 s-all-icons my-auto ">
                    <center>
                        <a href="https://www.youtube.com/">
                            <img src="images/social-1.png" alt="Image" class="s-icons "></a>
                        <a href="https://web.whatsapp.com/">
                            <img src="images/social-2.png" alt="Image" class="s-icons"></a>
                        <a href="https://twitter.com/">
                            <img src="images/social-3.png" alt="Image" class="s-icons"></a>
                        <a href="https://www.facebook.com/">
                            <img src="images/social-4.png" alt="Image" class="s-icons"></a>
                    </center>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-sm justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="Home()">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="About()">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="Product()">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="Contact()">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Login.php">Admin Login</a>
                </li>
            </ul>
        </nav>
        <center>
            <div class="form-out">

                <form action="Login.php" method="post">
                    <label for="username" class="form-lable">Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                    <label for="password" class="form-lable">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <?php
                    $databaseHost = 'localhost';
                    $databaseName = 'webproject';
                    $databaseUsername = 'root';
                    $databasePassword = '';

                    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
                    $result = mysqli_query($mysqli, "SELECT * FROM login");
                    $show = mysqli_fetch_array($result);

                    if (isset($_POST['username']) && isset($_POST['password'])) {
                        if (
                            !empty($_POST['username']) && !empty($_POST['password'])
                        ) {

                            if (
                                $_POST['username'] == $show['username'] &&
                                $_POST['password'] == $show['password']
                            ) {
                                $_SESSION['username'] = $show['username'];

                                echo '<script>alert("Login Successful")</script>';
                                echo "<script>window.location = 'AdminOptions.php';</script>";
                            } else {
                                echo '<p class = "text-danger">Wrong username or password</p>';

                            }
                        } else {
                            echo '<script>alert("Username or Password field empty")</script>';

                        }
                    }
                    ?>
                    <a href="Forget.php">Forget Password</a>
                    <input type="submit" value="LOGIN" name="login" class="btn btn-primary">
            </div>

        </center>


        </form>



        <footer class="row justify-content-between">
            <div class=" news col-7">
                <h4 class="News-h">News<h4>

                        <ul><a href="https://www.laptopmag.com/news/live/black-friday-gaming-laptop-deals"
                                target="_blank">
                                <li> Black Friday Gaming Laptop deals still running today LIVE: Big savings on
                                    Alienware,
                                    Razer, Asus and more</li>
                            </a>
                            <a href="https://www.laptopmag.com/uk/best-macbook-deals" target="_blank">
                                <li>Wow! The M1 MacBook Pro with 1TB of storage is $500 off right now</li>
                            </a>
                            <a href="https://www.laptopmag.com/news/cyber-monday-deals-2022" target="_blank">
                                <li>
                                    Extended Cyber Monday deals are now Cyber Week with epic ongoing deals on Laptops.
                                </li>

                            </a>
                            <a href="https://www.laptopmag.com/news/best-dell-deals" target="_blank">
                                <li>
                                    The Best Dell Deals in December 2022.
                                </li>

                            </a>
                        </ul>
            </div>
            <div class=" f-social-h col-4  align-self-center ">
                <a href="https://www.youtube.com/">
                    <img src="images/social-1.png" alt="Image" class="f-social"></a>
                <a href="https://web.whatsapp.com/">
                    <img src="images/social-2.png" alt="Image" class="f-social"></a>
                <a href="https://twitter.com/">
                    <img src="images/social-3.png" alt="Image" class="f-social"></a>
                <a href="https://www.facebook.com/">
                    <img src="images/social-4.png" alt="Image" class="f-social"></a>

            </div>
            <div class="creator">
                <p>Created by Mohammad Aliyan L1F20BSCS0029</p>
            </div>
        </footer>
    </body>


</body>

</html>
<script>
    function Home() {
        window.open("Home.php", "_self");
    }
    function About() {
        window.open("AboutUs.html", "_self");
    }
    function Product() {
        window.open("Products.php", "_self");
    }
    function Contact() {
        window.open("Contact.php", "_self");
    }


</script>