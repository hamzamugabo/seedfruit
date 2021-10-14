<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

    
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <?php 
                        isset($_SESSION['err'])?$err=$_SESSION:$err=null;
                        echo'<span class="text-danger">'.$err.'</span>';
                        ?>
                        <form method="POST" action="auth.php?action=signup" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <!-- <input type="text" name="name" id="name" placeholder="Your Name"/> -->
                                <input   type="text"  placeholder="Your first Name" " name="fname" required autocomplete="fname" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <!-- <input type="text" name="name" id="name" placeholder="Your Name"/> -->
                                <input   type="text"  placeholder="Your Last Name" " name="lname" required autocomplete="lname" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone-end material-icons-phone"></i></label>
                                <!-- <input type="text" name="name" id="name" placeholder="Your Name"/> -->
                                <input   type="text"  placeholder="Your Phone Number" " name="phone" required autocomplete="phone" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <!-- <input type="email" name="email" id="email" placeholder="Your Email"/> -->
                                <input  type="email" name="email" required autocomplete="email" autofocus  placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                    <strong style="color: green;"><h1>Seedfruit Coin</strong>

                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I already have account</a>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <!-- <script>
	$('#register-form').submit(function(e){
		e.preventDefault();
		start_load()
		$.ajax({
			url:'auth.php?action=signup',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				if(resp ==1){
					alert_toast("Data successfully saved",'success')
					setTimeout(function(){
						location.reload()
					},1500)
				}
			}
		})
	})
</script> -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
