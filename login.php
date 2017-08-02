
<?php
session_start();
	require_once('C:\xampp\htdocs\sysintg_mysqlconnect.php');
	
$_SESSION['user']="";
$_SESSION['password']="";

if (isset($_POST['submit'])){
	
  $message=NULL;

	 if ($_POST['user']!= 'admin' || $_POST['password']!= '12345')
	 {
		 $message.='Wrong password or username!';
	 }
  else{
    $_SESSION['username']= 'admin';
    $_SESSION['password']= '12345';

    header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/index.html");
  } 
}

if (isset($message)){
      echo'
      <script type="text/javascript">
        alert("'.$message.'");
      </script>
      ';
    
		
		}	
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SYSINTG Project</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="container">
  <div class="login">
  	<h1 class="login-heading">
      <strong>Welcome.</strong> Please login.</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="user" placeholder="Username" required="required" class="input-txt" />
          <input type="password" name="password" placeholder="Password" required="required" class="input-txt" />
          <div class="login-footer">
             <a href="#" class="lnk">
              <span class="icon icon--min">ಠ╭╮ಠ</span> 
              I've forgotten something
            </a>
			<button type="submit" name="submit" id="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
			
           
          </div>
      </form>
  </div>
</div>
  
    <script src="js/index.js"></script>

</body>
</html>
