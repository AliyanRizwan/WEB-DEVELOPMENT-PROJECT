<?php

$databaseHost = 'localhost';
$databaseName = 'webproject';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
$result = mysqli_query($mysqli, "SELECT * FROM data");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPUTER TECHNOLOGY</title>
    <link rel="icon" href="images/logo.png" type="image/icon type">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="ProjectCss.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


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


    <div id="mycarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="images/banner-1.png" alt="Image-1" class="d-block w-100">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="images/banner-2.png" alt="Image-2" class="d-block w-100">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="images/banner-3.png" alt="Image-2" class="d-block w-100">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
    </div>


    <div class="heading">
        <h4>Buying a Laptop is becoming difficult & expensive day by day. So we made your life easy by giving you all
            types of Laptop whether its for gaming, working, or just for consuming media we got you covered. Buy latest
            Laptop on Computer Technology.
        </h4>
    </div>

    <div class="l-products">
        <h2 class="p-heading">Latest Products</h2>
        <div class="p-image row ">
            <?php
            $count = 0;
            while ($show = mysqli_fetch_array($result)) {
                if ($count < 3) {
                    echo '<div class="img1 col">';
                    echo "<a href=\"ProductDetail.php?id=$show[ProductId]\" >";
                    ?>

                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($show['Image']); ?>" alt="Image">
                    <h4>
                        <?php echo $show['Title'] ?>
                    </h4>
                    </a>
                </div>

                <?php
                $count++;
                }
            } ?>

    </div>
    </div>
    <footer class="row justify-content-between">
        <div class=" news col-7">
            <h4 class="News-h">News<h4>

                    <ul><a href="https://www.laptopmag.com/news/live/black-friday-gaming-laptop-deals" target="_blank">
                            <li> Black Friday Gaming Laptop deals still running today LIVE: Big savings on Alienware,
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

</html>