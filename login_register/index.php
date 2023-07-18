<!DOCTYPE html>
<html lang="en">
<head>
<div class="navbar navbar-dark bg-dark">
    <h1>Fines List</h1>
  <a class="btn btn-primary" href="main.php">Home</a>
  <a class="btn btn-success" href="create.php">Add New </a>
  <a class="btn btn-warning" href="search.php">Search</a>
  <a class="btn btn-danger" href="logout.php">Logout</a>
</div>
<img src="img/header.png" class = "topImage"><br>
<title>Fines List</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    


<style>
    body{
    padding:10px;
}

        table  td, table th{
        vertical-align:middle;
        text-align:right;
        padding:20px!important;
        }
        
.topImage{
  height: 220px;
  width: 1240px;
  margin-top: 30px;
  border-radius: 20px;
  opacity: 0.9;
  box-shadow: 5px 5px 5px 5px #3e2723;
  -webkit-transition: all 0.4s ease-out;
  -moz-transition: all 0.4s ease-out;
  -o-transition: all 0.4s ease-out;
  -ms-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
}

#customers {
    margin-top: 70px;
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    
  }
  
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  } 
  #customers tr:nth-child(even){background-color:  #c9c5c5;}
  
  #customers tr:hover {background-color: #c3bfbf;;}
  
  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #f99898;
    color: white;
  }
 

  
    </style>
</head>
<body >
        <?php
        session_start();
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
    
        ?>


        <table id="customers">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Contact_no</th>
                <th>Vehicle_no</th>
                <th>issuer</th>
                <th>date</th>
                <th>Type</th>
                <th>Fine_Amount</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
        include('connect.php');
        $sqlSelect = "SELECT * FROM fines";
        $result = mysqli_query($conn,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
            ?>
            
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['Name']; ?></td>
                <td><?php echo $data['Contact_no']; ?></td>
                <td><?php echo $data['Vehicle_no']; ?></td>
                <td><?php echo $data['issuer']; ?></td>
                <td><?php echo $data['date']; ?></td>
                <td><?php echo $data['type']; ?></td>
                <td><?php echo $data['Fine_Amount']; ?></td>
                <td><?php echo $data['description']; ?></td>
                <td>
                    <a href="view.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Read More</a>
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?></tbody>
        </table>
    </div>
</body>
</html>