<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Fines</title>   
</head>
<body>
<link rel="stylesheet" href="CSS/edit.css">
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Edit Fines</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM fines WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="Name" placeholder="Name:" value="<?php echo $row["Name"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="Contact_no" placeholder="Contact_no:" value="<?php echo $row["Contact_no"]; ?>">
            </div>
            
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="Vehicle_no" placeholder="Vehicle_no:" value="<?php echo $row["Vehicle_no"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="issuer" placeholder="issuer:" value="<?php echo $row["issuer"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="date" placeholder="date:" value="<?php echo $row["date"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <select name="type" id="" class="form-control">
                    <option value="">Select Fines Type:</option>
                    <option value="Light violation"<?php if($row["type"]=="Light violation"){echo "selected";} ?>>light violation</option>
                    <option value="Overloading"<?php if($row["type"]=="Overloading"){echo "selected";} ?>>overloading</option>
                    <option value="Accidental"<?php if($row["type"]=="Accidental"){echo "selected";} ?>>Accidental</option>
                    <option value="Wrong lane"<?php if($row["type"]=="Wrong lane"){echo "selected";} ?>>Wrong lane</option>
                    <option value="Drink and drive"<?php if($row["type"]=="Drink and drive"){echo "selected";} ?>>Drink and drive</option>
                    <option value="overspeeding"<?php if($row["type"]=="overspeeding"){echo "selected";} ?>>overspeeding</option>
                    <option value="Rash driving"<?php if($row["type"]=="Rash driving"){echo "selected";} ?>>Rash driving</option>
                </select>
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="Fine_Amount" placeholder="Fine_Amount:"<?php echo $row["Fine_Amount"]; ?>>
            </div>
            <div class="form-element my-4">
                <textarea name="description" id="" class="form-control" placeholder="description:"><?php echo $row["description"]; ?></textarea>
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit fines" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>fine Does Not Exist</h3>";
            }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>