
<!DOCTYPE html>
<html>
    
<head>
    <title>Sign Up</title>
</head>

<body>

<form action="config.php" method = "post">
Name<input type="text" name="name">
Password<input type="password" name="password">
Email Id<input type="text" name="email">
    <input type="submit" name="signup" value="signup">

    
</form>
    
</body>
    
</html>

<?php 
$DB_HOST = 'localhost:3306';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'registertwo';

//create connection
$db = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
$db=mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

/*
if(isset($_POST['button']))

 {
 	
 	echo "<script type='text/javascript'>
			                alert('Welcome to BookManiac!!!');
			                window.location.href='http://localhost/WebTechProject/BookManiac/category.php'</script>";
			                 

 }
*/
/*
if(isset($_POST['signup']))

 {
 	
 	echo "<script type='text/javascript'>
			                alert('Welcome to BookManiac!!!');
			                window.location.href='http://localhost/final_prj/Bhanu/metrial.html'</script>";
			                 

 }

*/
if(isset($_POST['signup']))
{
		$myusername=$_POST['name'];
		$mypassword=$_POST['password'];
        $myemail=$_POST['email'];
    /*
        $myaddress=$_POST['address'];
		$myphonenum=$_POST['phonenum'];

		$mysubmit=$_POST['button1'];
    */

		$q = mysqli_query($db,"SELECT name FROM registertwo WHERE name='$myusername'");
		$row = mysqli_fetch_array($q); 
		$username = $row['name'];

    echo "Displayed";
		echo "<br>";


			  if ($username == $myusername)
			  {
			      echo "<script type='text/javascript'>
			      alert('User already exists...Please login to continue')
			     
			      </script>";
			      echo "Displayed1";
			 }
			else
			{
			        $query = "INSERT INTO user (name,password,email)
			        VALUES ('$myusername','$myemail','$mypassword')";
			        echo"Displayed 2";
			        
			          echo "<script type='text/javascript'>
			                alert('Registration successful...Welcome to BookManiac!!!');
                            </script>";
                    echo"Displayed 3";
                        header('Location: login.php'); 
			                 

			        
			        
			        
			        mysqli_query($db,$query);


			}


  mysqli_close($db);
}



?>
