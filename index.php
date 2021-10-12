<html>
    <head>
        <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="seedfruit is a platform for secure agricultural nonfungibale tokens.">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
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
                <li class="nav-item">
                    <a style="font-size: larger;font-weight:bolder;" class="nav-link btn btn-link text-dark" type="button" href="#" data-toggle="modal" data-target="#myModal">Sign In</a>                  
                </li>
                <li class="nav-item">
                    <a style="font-size: larger;font-weight:bolder;" class="nav-link btn btn-primary text-white" type="button" href="#" data-toggle="modal" data-target="#myModal">Get Started</a>
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

<div class="container"">
<div class="row" style="padding-top:50px ;padding-bottom:50px; border-bottom: 6px solid #767073">
    <div class="col-md-6" >
        <div>
        <strong> <h3>   SeedFruit Idea: </h3></strong><br>

<div style="font-size: larger;font-weight:500px;padding-bottom:30px;">
      
Agricuture is a soon to be trillion dollar industry in africa alone, yet most of the
farmers are having a discnnect with people or institutions that lend money to
farmers and also a disconnect with the professionals who have the agricultural
techcal experties to have high yeilds in the respective crops that the farmers are
intrested in. and on top f that new farmers intering the industry have no or little
knowladge about what they are doing with little experience of what to exect and
what actually to invest in the process they end up ossing money or get to loss intrest
in the aricultre space all together
not only that the ones that keep up with the challenges of agruicultre find it difficult
to stay profitable since they are faring on small plots of land which makes it difficult
for them to even break even
        </div>
        </div>
       <strong> <h3> SeedFruit concept or solution detail </h3></strong><br>
<div style="font-size: larger;font-weight:500px;">
the proposed solution is a blockchain theory archtectual design process which looks
at and engages the enitre agricultrure ecosystem and simulates it on the blokchain
system that is in a controlled enviroments with self correcting crypto ledgers running
on a stable token
</div>
</div>
<div class="col-md-6">
<img src="images/blockchain.jpg" alt="Block chain" style="width:500px;height:400px;">
</div>
</div>
<div class="row">
<div class="row" style="padding-top:50px ;padding-bottom:50px;">


</div>
</div>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>
</div>

<script>
    $('#nav').affix({
      offset: {
        top: $('header').height()
      }
});	

</script>
    </body>
</html>