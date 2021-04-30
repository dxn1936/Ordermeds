<!DOCTYPE html>
<html>
<head>
     <meta charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>OrderMedicine</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script type="text/javascript" rel="stylesheet" src="./js/mainFinal.js"></script>
      <link rel="stylesheet" type="text/css" href="./includes/style.css"/> 
      <script type="text/javascript" src="demo.js"></script>
</head>
 <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4" id="logo" >
                    <a href="home.html" class="logo-text">
                        Order<span style="color:#39BAF0; font-size:40px">MEDS</span>
                    </a>		
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12" style="display:none " id="navbar_hide" >
                    <nav  role="navigation" class="navbar navbar-inverse">
                        <a href="home.html" style="float: left" class="logo-text">
                            Order<span style="color:#39BAF0; font-size:40px">MEDS</span>
                        </a>
                        <div id="nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background: #8EBE08; border: none; margin-right: 0">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav site_nav_menu1"  >
                                    <li class="first " ><a href="home.html">Home</a></li>
                                    <li><a href="#">About us</a></li>
                                 
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-4 col-md-offset-4 col-sm-offset-2  col-sm-6 col-xs-12" >
                    <div id="top_right">
                        <div id="cart">
                            <div class="text">
                                <div class="img">
                                    <a href="cart.html"> <img class="img-responsive" src="images/cart.png" alt="" title="" width="26" height="27" /></a>
                                </div><span>Your cart:</span><span class="cart_total">₹0.00</span><span class="cart_items">(0 items)</span>
                            </div> 
                        </div>
                       
                    </div>

                </div>
            </div>
        </div> 
        <div class="container-fluid bg-color">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <nav  role="navigation" class="navbar navbar-inverse" id="nav_show">
                                <div id="nav">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>
                                    <div class="collapse navbar-collapse" id="myNavbar">
                                        <ul class="nav navbar-nav site_nav_menu1"  >
                                            <li class="first "><a href="login.php">Home</a></li>
                                           
                                        </ul>

                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div> 

                </div>
            </div>
        </div>
        

        <div id="site_content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9" id="content">            <div class="breadcrumbs">
                            <a href="home.html"><i class="fa fa-home"></i></a>
                            <a href="#">Register</a>
                        </div>
                        <h1>My Account Information</h1>
                        <p> <small><strong class="define_note"></strong></small>If you already have an account with us, please login at the 
                            <a href="login.html">login page</a>.</p>
                        <form id="register_form" method="post" autocomplete="off" action="newReg.php" onsubmit="return validate()">
                            <div class="contentText">  
                                <fieldset id="account">
                                    <h1>Your Personal Details</h1>
                                    <div style="display: none;" class="form-group required">
                                        <label class="col-sm-2 control-label">Customer Group</label>
                                        <div class="col-sm-10">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" checked="checked" value="1" name="customer_group_id">
                                                    Default</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-firstname" class="col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="firstname" placeholder="First Name" value="" name="firstname" >
                                            <small id="f_error" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-lastname" class="col-sm-2 control-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lastname" placeholder="Last Name" value="" name="lastname" >
                                            <small id="l_error" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email" placeholder="E-Mail" value="" name="email" >
                                            <small id="e_error" class="form-text text-muted"></small>
                                        </div>
                                    </div>
									<div class="form-group required">
                                        <label for="input-username" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="username" placeholder="Username" value="" name="username" >
                                            <small id="u_error" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-telephone" class="col-sm-2 control-label">Telephone</label>
                                        <div class="col-sm-10">
                                            <input type="tel" class="form-control" id="telephone" placeholder="Telephone" value="" name="telephone" >
                                            <small id="t_error" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                  
                                </fieldset>
                                <fieldset id="address">
                                    <h1>Your Address</h1>
                                 
                                    <div class="form-group required">
                                        <label for="input-address-1" class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="address" placeholder="Address" value="" name="address" >
                                            <small id="a_error" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                   
                                   
                                    
                                </fieldset>
                                <fieldset>
                                    <h1>Your Password</h1>
                                    <div class="form-group required">
                                        <label for="input-password" class="col-sm-2 control-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="password" placeholder="Password" value="" name="password" >
                                            <small id="p_error" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-confirm" class="col-sm-2 control-label">Password Confirm</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="confirm" placeholder="Password Confirm" value="" name="confirm">
                                            <small id="p1_error" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                </fieldset>
                               
                                <div class="buttons">
                                    <div class="pull-right">
                                        &nbsp;
                                        <input type="submit" class="btn btn-primary reg_button"   name="user_register" value="Submit"> <!-- <a href="login.php"></a> -->

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer1">
            <div class="container-fluid footer-background">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-3 col-xs-12 txt-center">
                                <a href="home.html">
                                    <span class="logo-text">ORDERMEDS</span>
                                </a>
                            </div>
                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <div id="footer_menu">
                                    <a href="home.html">Home</a> 
                                  
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div id="social_icons" class="pull-right">
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-yahoo"></i></a>
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-envelope"></i></a>
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-linkedin"></i></a>	
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="copyright">
                                    © 2021 All right reserved
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </body>
</html>
 
