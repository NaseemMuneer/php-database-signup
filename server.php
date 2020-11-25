
<link rel="stylesheet" href="style.css">

<?php 
function db_connection(){
	$link = mysqli_connect("localhost","root","","web");
	if($link){
		return $link;
	}
	else{
		return FALSE;
	}
}
$records = [];
if(isset($_POST['signup'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $connection = db_connection();
    $in = "INSERT INTO user (firstname,lastname,email,password,gender) 
    values('$firstname','$lastname','$email','$password','$gender')";
    $res = mysqli_query($connection,$in);
}
if(isset($_GET['users'])){
    $in = "SELECT * from user";
    $connection = db_connection();
    $res = mysqli_query($connection,$in);
    $records = [];
	while ($row = mysqli_fetch_assoc($res)){
		$records[] = $row;
    }
}
?>



<?php if(count($records)>0){?>
    <table class="table table-striped w-75 m-auto">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>E-mail</th>
                <th>Password</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($records as $record){?>
            <tr>
                <td><?php echo $record['id'] ?></td>
                <td><?php echo $record['firstname'] ?></td>
                <td><?php echo $record['lastname'] ?></td>
                <td><?php echo $record['email'] ?></td>
                <td><?php echo $record['password'] ?></td>
                <td><?php echo $record['gender'] ?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>

    <?php }?>
