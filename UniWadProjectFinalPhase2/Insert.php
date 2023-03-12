<?php
$databaseHost = 'localhost';
$databaseName = 'webproject';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


$Title = $_POST["Title"];
$Price = $_POST["Price"];
$Code = $_POST["Code"];
$Sizes = $_POST["Sizes"];
$Details = $_POST["Details"];
$Discount = $_POST["Discount"];
$InStock = $_POST["radio"];
if (empty($Title) || empty($Price) || empty($Code) || empty($Sizes) || empty($Details) || empty($Discount) || empty($InStock)) {
    echo "<center>";
    if (empty($Title)) {
        echo "<font style='font-size:30px' color='red'>Title field is empty.</font><br/>";
    } else {
        echo "<font style='font-size:30px' color='blue'>Title field is Filled.</font><br/>";
    }

    if (empty($Price)) {
        echo "<font style='font-size:30px' color='red'>Price field is empty.</font><br/>";
    } else {
        echo "<font style='font-size:30px' color='blue'>Price field is Filled.</font><br/>";
    }

    if (empty($Code)) {
        echo "<font style='font-size:30px' color='red'>Code field is empty.</font><br/>";
    } else {
        echo "<font style='font-size:30px' color='blue'>Code field is Filled.</font><br/>";
    }
    if (empty($Sizes)) {
        echo "<font style='font-size:30px' color='red'>Sizes field is empty.</font><br/>";
    } else {
        echo "<font style='font-size:30px' color='blue'>Sizes field is Filled.</font><br/>";
    }

    if (empty($Details)) {
        echo "<font style='font-size:30px' color='red'>Details field is empty.</font><br/>";
    } else {
        echo "<font style='font-size:30px' color='blue'>Details field is Filled.</font><br/>";
    }

    if (empty($Discount)) {
        echo "<font style='font-size:30px' color='red'>Discount field is empty.</font><br/>";
    } else {
        echo "<font style='font-size:30px' color='blue'>Discount field is Filled.</font><br/>";
    }
    if (empty($InStock)) {
        echo "<font style='font-size:30px' color='red'>InStock field is empty.</font><br/>";
    } else {
        echo "<font style='font-size:30px' color='blue'>InStock field is Filled.</font><br/>";
    }
    echo '<br><br><a href="AdminForm.html"> <button style = "font-size: 30px;border-radius : 10px;background-color: lightblue; width:200px;height:100px" class = "btn btn-primary">Go Back</button></a>';
    echo "</center>";

} else {

    if (!empty($_FILES["image"]["name"])) {
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));

            $insert = $mysqli->query("INSERT INTO data(Title,Price,Code,Discount,Sizes,Details,InStock,Image) VALUES('$Title','$Price','$Code','$Discount','$Sizes','$Details','$InStock','$imgContent')");

            if ($insert) {
                $statusMsg = "File uploaded successfully.";
                echo $statusMsg;
                header('Location: AdminOptions.php');
            } else {
                $statusMsg = "File upload failed, please try again.";
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
        }
    } else {
        $statusMsg = 'Please select an image file to upload.';
    }







}










?>