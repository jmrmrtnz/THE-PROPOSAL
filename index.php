<?php
	include 'dbcon.php';
	session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="bear.png">

    <!--Bootstrap link-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <!--Scroll-->
    <link rel="stylesheet" type="text/css" href="scroll.css">
    <!--Sweetalert--> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <!--Home Logo-->
    <div class="imahe" style="padding-top:20px;padding-left:50px;">
        <a href="index.html">
            <img src="bear.png" alt="bear" width="100" height="100">
        </a>
    </div>
<div class="content">
    <div class="main">
        <div style="background-color:white;opacity:0.9; border-radius: 25px;">
        <div class="title">Login</div>
        <form action="index.php" method="POST">
            <div class="credentials">
                <div class="firstname">
                    <input type="text" name="FirstName" placeholder="First Name" required="" maxlength="15">
                </div>
                <div class="lastname">
                    <input type="text" name="LastName" placeholder="Last Name" required="" maxlength="15">
                </div>
            </div>
            <button class="submit" name="login">Log in</button>
        </form>
        <div class = "link">
            <a href="#" >Forget Account? </a> &nbsp <a href="#" > Sign up </a>
        </div>
        </div>
    </div>
</div>
<?php
		//verify sa database
		date_default_timezone_set('Asia/Singapore');
		if(isset($_POST['login'])){
			$FirstName = $_POST['FirstName'];
			$LastName = $_POST['LastName'];
	  
			$sql="SELECT * FROM tbl_user1 WHERE FirstName=? AND LastName=?";
			$stmt=$con->prepare($sql);
			$stmt->bind_param("ss", $FirstName, $LastName);
			$stmt->execute();
			$result=$stmt->get_result(); //It determines the number of outputs
			$row=$result->fetch_assoc(); //It collects all the data from the number of outputs in a Row manner
		
            session_regenerate_id();
            $_SESSION['UserID'] = $row['UserID'];
            $_SESSION['FirstName'] = $row['FirstName'];
            $_SESSION['LastName'] = $row['LastName'];

            if($result->num_rows == 1){
                if($stmt->execute()){
                    header("location: home.php");
                }
            }else{ ?>
               <script type="text/javascript">
					swal("Error!", "This account does not exist in our system", "error");
				</script>
            <?php }
		}
?>

</body>
</html>