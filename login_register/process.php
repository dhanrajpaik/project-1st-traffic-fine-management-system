<?php
include('connect.php');
if (isset($_POST["create"])) {
    $Name = mysqli_real_escape_string($conn, $_POST["Name"]);
    $Contact_no = mysqli_real_escape_string($conn, $_POST["Contact_no"]);
    $Vehicle_no = mysqli_real_escape_string($conn, $_POST["Vehicle_no"]);
    $issuer = mysqli_real_escape_string($conn, $_POST["issuer"]);
    $Date = mysqli_real_escape_string($conn, $_POST["date"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $Fine_Amount = mysqli_real_escape_string($conn, $_POST["Fine_Amount"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $sqlInsert = "INSERT INTO fines(Name ,Contact_no, Vehicle_no, issuer, date, type, Fine_Amount, description) VALUES ('$Name','$Contact_no','$Vehicle_no','$issuer','$Date','$type','$Fine_Amount', '$description')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Fines Added Successfully!";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $Name = mysqli_real_escape_string($conn, $_POST["Name"]);
    $Contact_no = mysqli_real_escape_string($conn, $_POST["Contact_no"]);
    $Vehicle_no = mysqli_real_escape_string($conn, $_POST["Vehicle_no"]);
    $issuer = mysqli_real_escape_string($conn, $_POST["issuer"]);
    $Date = mysqli_real_escape_string($conn, $_POST["date"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $Fine_Amount = mysqli_real_escape_string($conn, $_POST["Fine_Amount"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE fines SET Name = '$Name', Contact_no = '$Contact_no',Vehicle_no = '$Vehicle_no',issuer = '$issuer', date = '$Date', type = '$type',Fine_Amount = '$Fine_Amount', description = '$description' WHERE id='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Fines Updated Successfully!";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}
?>