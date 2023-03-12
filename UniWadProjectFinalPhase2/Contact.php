<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="icon" href="images/logo.png" type="image/icon type">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="ProjectCss.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container-fluid">
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


    <div class="row justify-content-between contact-right">

        <form action="Contactinsert.php" method="post" class="f-contact col-9 col-lg-4">
            <h1 class="form-h">Contact Us</h1>

            <label for="name" class="form-label">Name: </label>
            <input type="text" class="form-control" name="name" id="name" value="<?php
            if (!empty($_COOKIE["name"])) {
                echo $_COOKIE["name"];

            } else {
                echo "";
            }
            ?>">
            <br>
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" id="email" value="<?php
            if (!empty($_COOKIE["email"])) {
                echo $_COOKIE["email"];

            } else {
                echo "";
            }
            ?>">
            <br>
            <label for="tel" class="form-label">Phone: </label>
            <input type="text" class="form-control" name="phone" id="tel" value="<?php
            if (!empty($_COOKIE["phone"])) {
                echo $_COOKIE["phone"];

            } else {
                echo "";
            }
            ?>">
            <br>
            <div class="radio-all">
                <label for="" class="form-label">Role: </label>
                <input type="radio" name="radio" id="radio1" value="Student" checked>
                <label for="" class="form-label" id="radio-op">Student</label>
                <input type="radio" name="radio" id="radio2" value="Teacher">
                <label for="" class="form-label" id="radio-op">Teacher</label>
            </div>

            <label for="city" class="form-label">City:</label>
            <select name="city" id="city">
                <option value="Lahore">Lahore</option>
                <option value="Karachi">Karachi</option>
                <option value="Islamabad">Islamabad</option>
                <option value="Multan">Multan</option>
            </select>
            <br>
            <label for="" class="form-label">Message: </label>
            <br>
            <textarea name="message" id="text-area" cols="30" rows="10"><?php
            if (!empty($_COOKIE["message"])) {
                echo $_COOKIE["message"];

            } else {
                echo "";
            }
            ?></textarea>
            <br>
            <div id="alert1">
                <button type="submit" class="btn btn-primary" id="alert2">Submit</button>
            </div>

        </form>
        <div class="col-6 col-lg-3">
            <div class="address">
                <h4>Address</h4>
                <p>Avenue 1, Khayaban-e-Jinnah, Road, Johar Town, Lahore, Punjab, Pakistan</p>
                <h4>Timings</h4>
                <ul class="timing">
                    <li>Thursday 9AM–5PM</li>
                    <li>Friday 9AM–1PM 3–5PM</li>
                    <li>Saturday Closed</li>
                    <li>Sunday Closed</li>
                    <li>Monday 9AM–5PM</li>
                    <li>Tuesday 9AM–5PM</li>
                    <li>Wednesday 9AM–5PM</li>
                </ul>
            </div>
            <div class="maps">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.8099120558977!2d74.26603755054342!3d31.4468996813025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919017432b1835b%3A0xe396992a5b05891c!2sUniversity%20of%20Central%20Punjab!5e0!3m2!1sen!2s!4v1670505252366!5m2!1sen!2s"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>







    <footer class="row justify-content-between">
        <div class=" news col-3">
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
    <div id="result"></div>
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