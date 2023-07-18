<!DOCTYPE html>
<html lang="en">
<head>
    <title>fines Details</title>

</head>
<body>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    
<link rel="stylesheet" href="CSS/view.css">
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>fines Details</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div id="table">
        <div class="fines-details p-5 my-4">
            <?php
            include("connect.php");
            $id = $_GET['id'];
            if ($id) {
                $sql = "SELECT * FROM fines WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                 ?>
                 <h3>Name:</h3> <p><?php echo $row["Name"]; ?></p>
                 <h3>Description:</h3>
                 <p><?php echo $row["description"]; ?></p>
                 <h3>issuer:</h3>
                 <p><?php echo $row["issuer"]; ?></p>
                 <h3>Type:</h3>
                 <p><?php echo $row["type"]; ?></p>
                 <h3>Date:</h3>
                 <p><?php echo $row["date"]; ?></p>
                 <h3>Contact_no:</h3>
                 <p><?php echo $row["Contact_no"]; ?></p>
                 <h3>Vehicle_no:</h3>
                 <p><?php echo $row["Vehicle_no"]; ?></p>
                 <?php
                }
            }
            else{
                echo "<h3>No Fines found</h3>";
            }
            ?>
            
        </div>
        </div>
    </div>
</body>
</html>