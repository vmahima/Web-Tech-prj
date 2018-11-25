<html>
<head>
<title>Sign Up Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Sign up Here</h1>
        <form action="signup.php" method = "post">
            <p>Name</p>
            <input type="text" name="name" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <p>Email ID</p>
            <input type="text" name="email" placeholder="Enter Password" required>
            <input type="submit" name="signup" value="Signup">
            <!--<a href="#">Lost your password?</a><br>-->
            
        </form>
        
    </div>

</body>
</head>
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
			                alert('Registration successful...Welcome to Travel_Agent!!!');
                            </script>";
                    echo"Displayed 3";
                        header('Location: main_page.html'); 
			                 

			        
			        
			        
			        mysqli_query($db,$query);


			}


  mysqli_close($db);
}



?>

