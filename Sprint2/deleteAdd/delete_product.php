<!--Scripts!-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="images/favicon.png"/>
        <title>OrderMeds</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/> 
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </head>
    
    <!--Header!-->
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4" id="logo">
                    <a href="home.html" class="logo-text">
                        Order<span style="color:#39BAF0; font-size:40px">MEDS</span>
                    </a>        
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12" style="display:none " id="navbar_hide" >
                    <nav  role="navigation" class="navbar navbar-inverse">
                        <a href="home.html" style="float: left" class="logo-text">
                            Order<span style="color:#39BAF0; font-size:40px">MEDS</span>
                        </a>
                        
                        <!--Navigation Bar!-->
                        <div id="nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background: #8EBE08; border: none; margin-right: 0">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </div>
                    </nav>
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
                                </div>
                            </nav>
                        </div>
                    </div> 
                </div>
            </div>
        </div>

        <!-- Delete Product Page -->
        <div id="site_content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9" id="content">            
                        <div class="breadcrumbs">
                            <a href="home.html"><i class="fa fa-home"></i></a>
                            <a href="dashboard.html"><i class="fa fa-users"></i></a>
                            <a href="add_product.php">Add Product</a>
                            <a href="#">Delete Product</a>
                        </div>
                        
                        <form class="form-horizontal" action="delete_pro.php" method="post">
                            <div class="contentText">  
                                <fieldset id="account">
                                    <h1>Delete Product</h1>
                                    <div class="form-group required">
                                        <label for="input-product_name" class="col-sm-2 control-label">Product Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-product_name" placeholder="Product Name" value="" name="product_name">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="buttons">
                                    <div class="pull-right">
                                        &nbsp;
                                        <input type="submit" class="btn btn-primary reg_button" value="DELETE" >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
