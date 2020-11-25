
<?php
include 'server.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="index.php" method="post" class="w-50 m-auto">
        <div class="form-group">
            <label for="">First Name</label>
            <input type="text" class="form-control" name="firstname">
        </div>
        <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" class="form-control" name="lastname">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="">
                <h3>Gender :</h3>
            </label>
            <label for="">Male</label>
            <input type="radio" name="gender" id="" value="male" checked>
            <label for="">Female</label>
            <input type="radio" name="gender" id="" value="female">

        </div>
        <div class="form-group d-flex justify-content-end">
            <input type="submit" value="Sign UP" class="btn btn-primary btn-sm" name="signup">
        </div>
    </form>


    <form action="server.php" method="GET" name="getuser">
        <input type="submit" value="Get Users" class="btn btn-secondary" name="users">
    </form>


    

    
   
</body>

</html>