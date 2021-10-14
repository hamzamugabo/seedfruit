<?php
session_start();
ini_set('display_errors', 1);
   include("db/config.php");   
//    include 'db_dbCect.php';

Class Action {
	private $db;

	public function __construct() {
		ob_start();
        include("db/config.php");   

    
    $this->db = $dbC;
	}
	function __destruct() {
	    $this->db->close();
	    ob_end_flush();
	}

	function login(){
// session_start();
$_SESSION['start'] = time();

	 // taking now logged in time
	$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ; 

   include("db/config.php");   

		extract($_POST);
		
        $email = mysqli_real_escape_string($dbC, $_POST['email']);
     //   $contact = mysqli_real_escape_string($dbC, $_POST['contact']);
        $password = mysqli_real_escape_string($dbC, $_POST['pass']);
        $check_user="select * from registration WHERE email='$email'";   
      
        $run=mysqli_query($dbC,$check_user);   
        $chk=mysqli_num_rows($run);
        if($chk > 0){
            $row = mysqli_fetch_assoc($run);
    
            if (password_verify($password, $row['password'])) {
             
         
      $_SESSION['user'] =$row['email'];
          echo "<script>window.open('index.php','_self')</script>"; 
                
  
          }else{
$_SESSION['err']="Wrong password!";
// echo "<script>window.alert('Wrong password!')</script>"; 

          echo "<script>window.open('login.php','_self')</script>"; 

          }
        }else{
$_SESSION['err']="Email doesnt Exist!";
// echo "<script>window.alert('Email doesnt Exist!')</script>"; 
echo "<script>window.open('login.php','_self')</script>"; 

        }
      
		
	}
	function logout(){
		session_destroy();
		
		header("location:login.php");
	}
	function signup(){
   include("db/config.php");   

		extract($_POST);

        // print_r($_POST['fname']);
        $fname = mysqli_real_escape_string($dbC, $_POST['fname']);
        $lname = mysqli_real_escape_string($dbC, $_POST['lname']);
        $email = mysqli_real_escape_string($dbC, $_POST['email']);
     //   $contact = mysqli_real_escape_string($dbC, $_POST['contact']);
        $password = mysqli_real_escape_string($dbC, $_POST['pass']);
       $phone = mysqli_real_escape_string($dbC,$_POST['phone']);
	
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);


		$chk = $this->db->query("SELECT * FROM registration where email = '$email' ")->num_rows;
		if($chk > 0){
			return 2;
			exit;
		}
			$save = $this->db->query("INSERT INTO registration (first_name,last_name,phone,email,password)
            VALUES ( '$fname', '$lname','$phone','$email','$hashed_password')");
		if($save){
			$check_user="select * from registration WHERE email='$email'";   
      
       $run=mysqli_query($dbC,$check_user);   
       $row = mysqli_fetch_assoc($run);
   
      if (password_verify($password, $row['password'])) {
       
       if(mysqli_num_rows($run)>0)   
       {
$_SESSION['user'] =$row['email'];
          
       }
    }
    echo "<script>window.open('login.php','_self')</script>"; 
		}else{
    echo "<script>window.open('register.php','_self')</script>"; 
$_SESSION['err']="Something went wrong!";
        }
	}


}