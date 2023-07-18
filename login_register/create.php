<!DOCTYPE html>
<html lang="en">
<head>
   <title>Add New Fines</title>
</head>
<body>
<link rel="stylesheet" href="CSS/create.css">
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Add New Fines</h1>
            <div id="bottom">
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
            <br>
    </header>
        
        <form action="process.php" method="post">
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="Name" placeholder="Name:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="Contact_no" placeholder="Contact_no:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="Vehicle_no" placeholder="Vehicle_no:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="issuer" placeholder="issuer:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="date" placeholder="date:">
            </div>
            <div class="form-elemnt my-4">
                <select name="type" id="" class="form-control">
                    <option value="">Select fines:</option>
                    <option value="Light violation">light violation</option>
                    <option value="Overloading">overloading</option>
                    <option value="Accidental">Accidental</option>
                    <option value="Wrong lane">Wrong lane</option>
                    <option value="Drink and drive">Drink and drive</option>
                    <option value="overspeeding">overspeeding</option>
                    <option value="Rash driving">Rash driving</option>
                </select>
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="Fine_Amount" placeholder="Fine_Amount:">
            </div>
            <div class="form-element my-4">
                <textarea name="description" id="" class="form-control" placeholder="Fines Description:"></textarea>
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Add Fines" class="btn btn-primary">
            </div>
        </form>
        
        
    </div>
</body>
</html>