<?php
$databaseHost = 'localhost';
$databaseName = 'webproject';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


$Name = $_POST["name"];
$Email = $_POST["email"];
$Role = $_POST["radio"];
$City = $_POST["city"];
$Message = $_POST["message"];
$Phone = $_POST["phone"];
if (empty($Name) || empty($Email) || empty($Role) || empty($City) || empty($Message) || empty($Phone)) {
    echo "<center>";
    if (empty($Name)) {
        echo "<font style='font-size:30px' color='red'>Name field is empty.</font><br/>";
    } else {
        echo "<font style='font-size:30px' color='blue'>Name field is Filled.</font><br/>";
    }

    if (empty($Email)) {
        echo "<font style='font-size:30px' color='red'>Email field is empty.</font><br/>";
    } else {
        echo "<font style='font-size:30px' color='blue'>Email field is Filled.</font><br/>";
    }

    if (empty($Role)) {
        echo "<font style='font-size:30px' color='red'>Role field is empty.</font><br/>";
    } else {
        echo "<font style='font-size:30px' color='blue'>Role field is Filled.</font><br/>";
    }
    if (empty($City)) {
        echo "<font style='font-size:30px' color='red'>City field is empty.</font><br/>";
    } else {
        echo "<font style='font-size:30px' color='blue'>City field is Filled.</font><br/>";
    }

    if (empty($Message)) {
        echo "<font style='font-size:30px' color='red'>Message field is empty.</font><br/>";
    } else {
        echo "<font style='font-size:30px' color='blue'>Message field is Filled.</font><br/>";
    }
    if (empty($Phone)) {
        echo "<font style='font-size:30px' color='red'>Phone field is empty.</font><br/>";
    } else {
        echo "<font style='font-size:30px' color='blue'>Phone field is Filled.</font><br/>";
    }
    echo '<br><br><a href="Contact.php"> <button style = "font-size: 30px;border-radius : 10px;background-color: lightblue; width:200px;height:100px" class = "btn btn-primary">Go Back</button></a>';
    echo "</center>";

} else {
    $pass = 0;
    $name = $_POST["name"];
    $pattern = '/^[a-zA-Z ]+$/';

    if (preg_match($pattern, $name)) {
        echo "<script>alert('Valid Name.');</script>";
        $pass = 1;


    } else {
        echo "<script>alert('Invalid Name.');</script>";
    }
    $email = $_POST["email"];
    $pattern = '/[A-Z a-z 0-9 _ \-\.]+[@][a-z]+[\.][a-z]/';

    if (preg_match($pattern, $email)) {
        echo "<script>alert('Valid Email.');</script>";
        $pass = 2;
    } else {
        echo "<script>alert('Invalid Email.');</script>";
    }
    $phone = $_POST["phone"];
    $pattern = '/[\+92][0-9]{10,}/';

    if (preg_match($pattern, $phone)) {
        echo "<script>alert('Valid Phone Number.');</script>";
        $pass = 3;

    } else {
        echo "<script>alert('Invalid Phone Number.');</script>";
    }







    if ($pass == 3) {

        if (
            isset($_COOKIE["name"]) && isset($_COOKIE["email"]) && isset($_COOKIE["phone"]) && isset($_COOKIE["radio"])
            && isset($_COOKIE["city"]) && isset($_COOKIE["message"])) 
            {
            echo "<script>alert('Cookies are already set');</script>";


        } else {
            setcookie("name", $Name, time() + (86400), "/");
            setcookie("email", $Email, time() + (86400), "/");
            setcookie("phone", $Phone, time() + (86400), "/");
            setcookie("radio", $Role, time() + (86400), "/");
            setcookie("city", $City, time() + (86400), "/");
            setcookie("message", $Message, time() + (86400), "/");
        }
        if (isset($_COOKIE["submissions"])) {
            $submissions = $_COOKIE["submissions"] + 1;
        } else {
            $submissions = 1;
        }

        if ($submissions <= 2) {
            setcookie("submissions", $submissions, time() + 86400);
            $insert = $mysqli->query("INSERT INTO contact(Name,Email,Role,City,Message,Phone) VALUES('$Name','$Email','$Role','$City','$Message','$Phone')");
            echo "<script>alert('Data Entered');</script>";
            echo "<script>window.location = 'Contact.php';</script>";


        } else {
            echo "<script>alert('You have reached the limit of 2 submissions per day');</script>";
            echo "<script>window.location = 'Contact.php';</script>";

        }


    } else {

        echo "<script>window.location = 'Contact.php';</script>";
    }




}










?>