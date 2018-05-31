<?php
    require_once('config/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Pay Page</title>
</head>
<body>
    <br>
    <br>
    <div class="container">
        <h2>Customers</h2>
        <table class="table table-striped">
            <thead>
                <th>Customer ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Date</th>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * from customers";

                    $results = mysqli_query($conn , $sql);
                    while($rows = mysqli_fetch_assoc($results)){ 
                    ?>  
                    <tr>
                        <td><?php echo $rows['id']; ?></td>
                        <td><?php echo $rows['fname']; ?></td>
                        <td><?php echo $rows['lname']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['created_at']; ?></td>
                    </tr>      
                    <?php   
                    }
                ?>
                
            </tbody>
        </table>
        <br>
        <p><a href="index.php">Pay Page</a></p>
    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="./javascript/charge.js"></script>
</html>