<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Options</title>
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

    table {
        background-color: whitesmoke;
        border-radius: 20px;

    }

    .buttonid {
        margin-top: 100px;
        margin-bottom: 100px;
    }

    .buttonid input {
        width: 70%;
    }
</style>

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
            <li class="nav-item">
                <a class="nav-link" href="Logout.php">Logout</a>
            </li>
        </ul>
    </nav>

    <br>
    <br>
    <br>
    <table class="table" align='center'>

        <tr align='center'>

            <th scope="col">ProductId</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Code</th>
            <th scope="col">InStock</th>
            <th scope="col">Discount</th>
            <th scope="col">Sizes</th>
            <th scope="col">Details</th>

        </tr>
        <?php
        $databaseHost = 'localhost';
        $databaseName = 'webproject';
        $databaseUsername = 'root';
        $databasePassword = '';

        $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

        $result = mysqli_query($mysqli, "SELECT * FROM data");

        while ($show = mysqli_fetch_array($result)) {
            echo "<tr align='center'scope = 'row'>";
            echo "<td>" . $show['ProductId'] . "</td>";
            echo "<td>" . $show['Title'] . "</td>"; ?>
            <td>
                <img width="100px" height="100px"
                    src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($show['Image']); ?>" </td>
                <?php
                echo "<td>" . $show['Price'] . "</td>";
                echo "<td>" . $show['Code'] . "</td>";
                echo "<td>" . $show['InStock'] . "</td>";
                echo "<td>" . $show['Discount'] . "</td>";
                echo "<td>" . $show['Sizes'] . "</td>";
                echo "<td>" . $show['Details'] . "</td>";
                echo "<td><a href=\"Update.php?id=$show[ProductId]\">Edit</a> | <a href=\"DeleteProduct.php?id=$show[ProductId]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }

        ?>
    </table>

    <center>
        <div class="buttonid">
            <a href="AdminForm.html"><input type="button" class="btn btn-primary" value="Insert"></a>
        </div>
    </center>


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

</body>

</html>