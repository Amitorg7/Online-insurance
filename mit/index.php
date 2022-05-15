<!DOCTYPE html <head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ONLINE INSURANCE SYSTEM </title>

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="css/font.css" />
<link rel="stylesheet" href="css/css.css" />

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css' />
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {
    var y = document.forms["form"]["name"].value;
    var letters = /^[A-Za-z]+$/;
    if (y == null || y == "") {
        alert("Name must be filled out.");
        return false;
    }
    var z = document.forms["form"]["college"].value;
    if (z == null || z == "") {
        alert("college must be filled out.");
        return false;
    }
    var x = document.forms["form"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        alert("Not a valid e-mail address.");
        return false;
    }
    var a = document.forms["form"]["password"].value;
    if (a == null || a == "") {
        alert("Password must be filled out");
        return false;
    }
    if (a.length < 5 || a.length > 25) {
        alert("Passwords must be 5 to 25 characters long.");
        return false;
    }
    var b = document.forms["form"]["cpassword"].value;
    if (a != b) {
        alert("Passwords must match.");
        return false;
    }
}
</script>
</head>

<body>
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="mu-nav-wrapper">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mu-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" to="/">
                        Online Insurance
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="mu-menu">
                    <ul class="nav navbar-nav" style="float: right;">

                        <li>
                            <a href="plan.php" data-toggle="modal" data-target="#login">Policies $ Packages</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#developers">Developer</a>
                        </li>
                        <li>
                            <a href="client/home.php" target="_blank">Customer Login</a>
                        </li>
                        <li>
                            <a href="client/home.php" target="_blank">Agent Login</a>
                        </li>
                        <li>
                            <a href="doc/insurance.pdf" target="_blank">About us</a>
                        </li>
                        <li>
                            <button class="btn-general nav-btn-logout">
                                Login
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- <div class="header">
        <div class="row">
            <div class="col-md-6 text-left">
                <span style="font-size: 40px" class="logo"> ONLINE INSURANCE SYSTEM</span>
            </div>
            <div class="col-md-6">
                <div class="col-md-3" style="float:right">
                    <ul>
                        <li>
                            <a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span
                                    class="glyphicon glyphicon-log-in" aria-hidden="true">
                                </span>&nbsp;<span class="title1"><b>Sign In</b></span>
                            </a>
                        </li>
                        <li>
                            <a class="smooth-scroll" href="#home">
                                Home
                            </a>
                        </li>
                        <li>
                            <a class="smooth-scroll" href="#about">
                                About
                            </a>
                        </li>
                        <li>
                            <a class="smooth-scroll" href="#work">
                                Work
                            </a>
                        </li>
                        <li>
                            <a class="smooth-scroll" href="#team">
                                Team
                            </a>
                        </li>

                        <li>
                            <a class="smooth-scroll" href="#testimonials">
                                Testimonial
                            </a>
                        </li>
                        <li>
                            <a class="smooth-scroll" href="#contact">
                                Contact
                            </a>
                        </li>
                    </ul>

                </div>
            </div> -->


    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content title1">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                        <fieldset>


                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email"></label>
                                <div class="col-md-6">
                                    <input id="email" name="email" placeholder="Enter your email-id"
                                        class="form-control input-md" type="email">

                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="password"></label>
                                <div class="col-md-6">
                                    <input id="password" name="password" placeholder="Enter your Password"
                                        class="form-control input-md" type="password">

                                </div>
                            </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Log in</button>
                    </fieldset>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--sign in modal closed-->
    </div>
    <!--header row closed-->
    </div>

    <div class="bg1">
        <div class="row">

            <div class="col-md-7"></div>



            <!-- <div class="col-md-4 panel">
              
                <form class="form-horizontal" name="form" action="sign.php?q=account.php"
                    onSubmit="return validateForm()" method="POST">
                    <fieldset>


                       
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="name"></label>
                            <div class="col-md-12">
                                <input id="name" name="name" placeholder="Enter your name" class="form-control input-md"
                                    type="text">

                            </div>
                        </div>

                       
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="gender"></label>
                            <div class="col-md-12">
                                <select id="gender" name="gender" placeholder="Enter your gender"
                                    class="form-control input-md">
                                    <option value="Male">Select Gender</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                        </div>

                       
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="name"></label>
                            <div class="col-md-12">
                                <input id="college" name="college" placeholder="Enter your City"
                                    class="form-control input-md" type="text">

                            </div>
                        </div>


                   
                        <div class="form-group">
                            <label class="col-md-12 control-label title1" for="email"></label>
                            <div class="col-md-12">
                                <input id="email" name="email" placeholder="Enter your email-id"
                                    class="form-control input-md" type="email">

                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="mob"></label>
                            <div class="col-md-12">
                                <input id="mob" name="mob" placeholder="Enter your mobile number"
                                    class="form-control input-md" type="number">

                            </div>
                        </div>


                       
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="password"></label>
                            <div class="col-md-12">
                                <input id="password" name="password" placeholder="Enter your password"
                                    class="form-control input-md" type="password">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12control-label" for="cpassword"></label>
                            <div class="col-md-12">
                                <input id="cpassword" name="cpassword" placeholder="Conform Password"
                                    class="form-control input-md" type="password">

                            </div>
                        </div>
                        <?php if(@$_GET['q7'])
//{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
                      
                        <div class="form-group">
                            <label class="col-md-12 control-label" for=""></label>
                            <div class="col-md-12 text-center">
                                <input type="submit" class="sub" value="sign up" class="btn btn-primary" />
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>  -->


            <!--col-md-6 end-->
        </div>
    </div>
    </div>
    <!--container end-->

    <!--Footer start-->

    <!-- <div class="row footer">
        <div class="col-md-3 box">
            <a href="doc/insurance.pdf" target="_blank">About us</a>
        </div>
        <div class="col-md-3 box">
            <a href="plan.php" data-toggle="modal" data-target="#login">Policies $ Packages</a>
        </div>
        <div class="col-md-3 box">
            <a href="#" data-toggle="modal" data-target="#developers">Developer</a>
        </div>
        <div class="col-md-3 box">
            <a href="client/home.php" target="_blank">Customer Login</a>
        </div>
    </div> -->


    <!-- Modal For Developers-->
    <div class="modal fade title1" id="developers">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span>
                    </h4>
                </div>

                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-4">
                            <img src="image/amit.jpg" width=100 height=100 alt="Amit Talukder" class="img-rounded">
                        </div>
                        <div class="col-md-5">
                            <a href="#" style="color:#202020; font-family:'typo' ; font-size:18px"
                                title="Find on Facebook">Amit talukdar</a>
                            <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">01567880083
                            </h4>
                            <h4 style="font-family:'typo' ">amitorg7@gmail.com</h4>
                            <h4 style="font-family:'typo' ">CSE, Metropolitan University</h4>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4">
                            <img src="image/amit.jpg" width=100 height=100 alt="Amit Talukder" class="img-rounded">
                        </div>
                        <div class="col-md-5">
                            <a href="#" style="color:#202020; font-family:'typo' ; font-size:18px"
                                title="Find on Facebook">Suhel Roy</a>
                            <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">017834929929
                            </h4>
                            <h4 style="font-family:'typo' ">suhelroy@gmail.com</h4>
                            <h4 style="font-family:'typo' ">CSE, Metropolitan University</h4>
                        </div>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--Modal for admin login-->
    <div class="modal fade" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
                </div>
                <div class="modal-body title1">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form role="form" method="post" action="admin.php?q=index.php">
                                <div class="form-group">
                                    <input type="text" name="uname" maxlength="20" placeholder="Admin user id"
                                        class="form-control" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" maxlength="15" placeholder="Password"
                                        class="form-control" />
                                </div>
                                <div class="form-group" align="center">
                                    <input type="submit" name="login" value="Login" class="btn btn-primary" />
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--footer end-->
</body>

</html>