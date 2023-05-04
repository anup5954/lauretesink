<!DOCTYPE html>
<html>
  <head>
    <title>Account Setting - Jewelary</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Start here SEO Part -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- End here SEO Part -->
    <!--start here favicon-->
    <link rel="shortcut icon" href="img/favicon.png" / alt="Signo Elevators">
    <!--end here favicon-->
    <!--start here css file-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!--end here css file-->
  </head>
  <body class="menu-class-change">
    <!--start here header section-->
    <?php include 'include/header.php';?>
    <!--end here header section-->

    <!--start here breadcumb-section-->
    <section class="breadcumb-section">
       <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Account Setting</li>
  </ol>
</nav>
    </section>
    <!--end here breadcumb-section-->

    <section class="my-account-section position-relative">
        <div class="container-fluid">
            <div class="my-account-flex">
                <!--start here header section-->
                <?php include 'include/sidebar.php';?>
                <!--end here header section-->
                
                <div class="my-account-main-section">
                   <div class="my-account-box">
                    <div class="heading-section d-flex">
                       <h3 class="heading-1">Update Information</h3>
                        
                    </div>
                    <div class="update-address-form">
                      <form>
                        <div class="row">
                          <div class="col-xl-6 col-lg-6 col-12">
                            <div class="wdinput form-group">
                            <input type="text" placeholder="Full Name" name="" class="form-control">
                            </div>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-12">
                            <div class="wdinput form-group">
                            <input type="email" placeholder="Enter Email Id" name="" class="form-control">
                            </div>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-12">
                            <div class="wdinput form-group">
                            <input type="number" placeholder="Enter Phone Number" name="" class="form-control">
                            </div>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-12">
                            <div class="wdinput form-group">
                            <input type="number" placeholder="Enter Alternate Phone Number" name="" class="form-control">
                            </div>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-12">
                            <div class="wdinput form-group">
                            <input type="text" placeholder="Enter Address Line 1" name="" class="form-control">
                            </div>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-12">
                            <div class="wdinput form-group">
                            <input type="text" placeholder="Enter Address Line 2" name="" class="form-control">
                            </div>
                          </div>

                          <div class="col-xl-4 col-lg-4 col-md-4  col-12">
                            <div class="wdinput form-group">
                            <input type="text" placeholder="Enter State" name="" class="form-control">
                            </div>
                          </div>

                          <div class="col-xl-4 col-lg-4 col-md-4  col-12">
                            <div class="wdinput form-group">
                            <input type="text" placeholder="Enter City" name="" class="form-control">
                            </div>
                          </div>

                          <div class="col-xl-4 col-lg-4 col-md-4  col-12">
                            <div class="wdinput form-group">
                            <input type="text" placeholder="Enter Zipcode" name="" class="form-control">
                            </div>
                          </div>

                          <div class="col-xl-4 col-lg-4 col-md-4  col-12">
                            <div class="wdinput form-group">
                            <button class="btn bg-color-dark-1">Update Information</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    
                   </div> 
                </div>
            </div>
        </div>
        <button class="btn myaccountbtn d-lg-none d-xl-none d-inline-block" id="sidnavbar"><i class="fa-light fa-bars"></i></button>
    </section>
    

    <!--start here footer section-->
    <?php include 'include/footer.php';?>
    <!--end here footer section-->  


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <script type="text/javascript" src="js/header.js"></script>

  <script type="text/javascript">
    $("#sidnavbar").click (function(){
     $(".my-account-sidebar").addClass("show");
     $(".overlaycss").removeClass("hidden");
    });

    $("#sidenavclose").click (function(){
     $(".my-account-sidebar").removeClass("show");
     $(".overlaycss").addClass("hidden");
    });

    
</script> 



  </body>
  </html>