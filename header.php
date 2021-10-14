<html>
    <head>
        <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="seedfruit is a platform for secure agricultural nonfungibale tokens.">
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>     -->
</head>
    <body>

<!-- <div class="container">
	<div class="row">
		<h2>Bootstrap 4 Right align Navbar</h2>
	</div> -->
	<div>
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid #767073;padding-bottom:20px;">
    <div class="container">    
    <a style="font-size: larger;font-weight:bolder;color:blue;" class="navbar-brand" href="#">Seedfruit Coin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item active">
                    <a style="font-size: larger;font-weight:bolder;" class="nav-link" href="#">Prices <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a style="font-size: larger;font-weight:bolder;" class="nav-link active" href="#">Learn </a>
                </li>
                <li class="nav-item">
                    <a style="font-size: larger;font-weight:bolder;" class="nav-link active" href="#">Individuals</a>
                </li>
                <li class="nav-item">
                    <a style="font-size: larger;font-weight:bolder;" class="nav-link active" href="#">Businesses</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a style="font-size: larger;font-weight:bolder;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Developers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a style="font-size: larger;font-weight:bolder;" class="dropdown-item" href="#">Carfax</a>
                        <a style="font-size: larger;font-weight:bolder;" class="dropdown-item" href="#">Carproof</a>
                        <div class="dropdown-divider"></div>
                        <a style="font-size: larger;font-weight:bolder;" class="dropdown-item" href="#">Omnivic</a>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a style="font-size: larger;font-weight:bolder;" class="nav-link active" href="#">Developers</a>
                </li>
                <li class="nav-item">
                    <a style="font-size: larger;font-weight:bolder;" class="nav-link active" href="#">Company</a>
                </li>
                <!-- <li class="nav-item">
                    <a style="font-size: larger;font-weight:bolder;" class="nav-link btn btn-link text-dark" type="button" href="login.php" data-toggle="modal" data-target="#myModal">Sign In</a>                  
                </li>
                <li class="nav-item">
                    <a style="font-size: larger;font-weight:bolder;" class="nav-link btn btn-primary text-white" type="button" href="#" data-toggle="modal" data-target="#myModal">Get Started</a>
                </li> -->
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
               
                <li class="nav-item">
                    <a style="font-size: larger;font-weight:bolder;" class="nav-link btn btn-link text-dark" type="button" href="login.php"  >Login</a>                  
                </li>
                <li class="nav-item">
                    <a style="font-size: larger;font-weight:bolder;" class="nav-link btn btn-link text-dark" type="button" href="auth.php?action=logout"  >Logout</a>                  
                </li>
                <li class="nav-item">
                    <a style="font-size: larger;font-weight:bolder;" class="nav-link btn btn-primary text-white" type="button" href="home.php"  >Get Started</a>
                </li>
            </ul>
        </div>


            <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Customer Sign In</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <label class="sr-only" for="usrname">Username</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>


                        <label class="sr-only" for="Password">Name</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i></span>
                            </div>
                            <input id="Password" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2">
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" >Sign In</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    </div>
            

    </nav>
</div>


    </body>
</html>