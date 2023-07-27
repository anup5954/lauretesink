<!DOCTYPE html>
<html>
  <head>
    <title>Checkout - Jewelary</title>
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
    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
  </ol>
</nav>
    </section>
    <!--end here breadcumb-section-->

    <section class="checkout-section my-5">
        <div class="container-fluid">
          <form class="billing-checkout-section">
          <div class="checkout-billing-section">
            <div class="heading-section">
              <h1 class="heading-2">Billing Details</h1>
            </div>
            <div class="billing-form-section">
              <div class="billing-address border-bottom mb-3">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <div class="wdinput form-group">
                    <input type="text" class="form-control" placeholder="Fist Name" name="fname">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <div class="wdinput form-group">
                    <input type="text" class="form-control" placeholder="Last Name" name="lname">
                  </div>
                </div>
                 <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <div class="wdinput form-group">
                    <input type="number" class="form-control" placeholder="Phone Number" name="fname">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <div class="wdinput form-group">
                    <input type="email" class="form-control" placeholder="Email Id" name="lname">
                  </div>
                </div>
                <div class="col-12">
                  <div class="wdinput form-group">
                    <input type="text" class="form-control" placeholder="Company Name (Optional)" name="cname">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <div class="wdinput form-group">
                   <select class="form-control" name="selectcountry">
                     <option>India</option>
                     <option>USA</option>
                     <option>United Kingdom</option>
                   </select>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <div class="wdinput form-group">
                    <input type="text" class="form-control" placeholder="State" name="stateid">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <div class="wdinput form-group">
                    <input type="text" class="form-control" placeholder="City" name="city">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <div class="wdinput form-group">
                    <input type="text" class="form-control" placeholder="Zipcode" name="zipcode">
                  </div>
                </div>
                <div class="col-12">
                  <div class="wdinput form-group">
                    <textarea class="form-control" name="add" placeholder="Full Address"></textarea>
                  </div>
                </div>

                
              </div>
            </div>
            <div class="createpwd">
              <div class="row">
                <div class="col-12">
                  <div class="wdinput form-group border-bottom">
                   <label class="checkbox-custom" for="createpassword">Create an account?
                        <input type="checkbox" name="createpassword" id="createpassword" >
                        <span class="checkmark"></span>
                        </label>
                    <div class="wdinput form-group create-password hidden">
                    <input type="text" class="form-control" placeholder="Create account password *" name="createpassword">
                  </div>    
                  </div>
                </div>
              </div>
            </div>

            <div class="shipping-address">
              <div class="row">
                <div class="col-12">
                  <div class="wdinput form-group">
                   <label class="checkbox-custom" for="shipaddress">Ship to a different address?
                        <input type="checkbox" name="shipaddress" id="shipaddress" >
                        <span class="checkmark"></span>
                        </label>  
                  </div>
                </div>
              </div>
              <div class="shipping-address-form hidden border-top pt-2">
              <div class="heading-section">
              <h1 class="heading-2">Shipping Address</h1>
            </div>
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <div class="wdinput form-group">
                    <input type="text" class="form-control" placeholder="Fist Name" name="fname">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <div class="wdinput form-group">
                    <input type="text" class="form-control" placeholder="Last Name" name="lname">
                  </div>
                </div>
                 <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <div class="wdinput form-group">
                    <input type="number" class="form-control" placeholder="Phone Number" name="fname">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <div class="wdinput form-group">
                    <input type="email" class="form-control" placeholder="Email Id" name="lname">
                  </div>
                </div>
                <div class="col-12">
                  <div class="wdinput form-group">
                    <input type="text" class="form-control" placeholder="Company Name (Optional)" name="cname">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <div class="wdinput form-group">
                   <select class="form-control" name="selectcountry">
                     <option>India</option>
                     <option>USA</option>
                     <option>United Kingdom</option>
                   </select>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <div class="wdinput form-group">
                    <input type="text" class="form-control" placeholder="State" name="stateid">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <div class="wdinput form-group">
                    <input type="text" class="form-control" placeholder="City" name="city">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <div class="wdinput form-group">
                    <input type="text" class="form-control" placeholder="Zipcode" name="zipcode">
                  </div>
                </div>
                <div class="col-12">
                  <div class="wdinput form-group">
                    <textarea class="form-control" name="add" placeholder="Full Address"></textarea>
                  </div>
                </div>

                
              </div>
            </div>
            </div>
            </div>
          </div>
          <div class="checkout-billing-order p-2">
            <h5 class="heading-1">Your Order</h5>
                <div class="cart-total-heading mt-3 d-flex border-bottom">
                    <h5><i class="fa-light fa-basket-shopping-simple"></i> Total Orders</h5>
                    <h6 class="ml-auto">  05 </h6>
                </div>
                <div class="cart-total-heading mt-3 d-flex border-bottom">
                    <h5>Sub Total</h5>
                    <h6 class="ml-auto"><i class="rupeed-icon">₹</i> 350 </h6>
                </div>

                <div class="freeshiping mt-3 mb-3 border-bottom ">
                    <h5 class="heading-1">Free Shipping</h5>

                    <div class="cart-total-heading mt-3 d-flex mb-2">
                    <label class="radio-btn">Free Shipping
                    <input type="radio" checked="checked" name="radio">
                    <span class="checkmark"></span>
                    </label>
                    <h6 class="ml-auto"><i class="rupeed-icon"> ₹</i> 00 </h6>
                    </div>

                    <div class="cart-total-heading d-flex mb-2">
                    <label class="radio-btn">Standard
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                    </label>
                    <h6 class="ml-auto"><i class="rupeed-icon"> ₹</i> 160 </h6>
                    </div>

                    <div class="cart-total-heading d-flex mb-2">
                    <label class="radio-btn">Express
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                    </label>
                    <h6 class="ml-auto"><i class="rupeed-icon"> ₹</i> 250 </h6>
                    </div>

                </div>

                <div class="cart-total-heading d-flex">
                    <h5>Total</h5>
                    <h6 class="ml-auto"><i class="rupeed-icon"> ₹</i> 350 </h6>
                    </div>

                <div class="order-policy border-top py-2">
                  <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="">privacy policy. </a> </p>
                </div> 
                <div class="order-terms-condition border-top py-2">
                  <label class="checkbox-custom" for="tmc">I have read and agree to the website <a href="">terms and conditions</a>
                        <input type="checkbox" name="tmconditon" id="tmc" >
                        <span class="checkmark"></span>
                        </label>
                </div>   

                    <div class="proceed-to-checkout d-flex mt-3">
                    <a href="order-received.php" class="btn bg-color-dark-1 w-100">Proceed to Payment</a>
                    </div>
          </div>
          </form>
        </div>
    </section>
    

    <!--start here footer section-->
    <?php include 'include/footer.php';?>
    <!--end here footer section-->  


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <script type="text/javascript" src="js/header.js"></script>

    <!--start here create password-->
    <script type="text/javascript">
   $(function () {
        $("#createpassword").click(function () {
            if ($(this).is(":checked")) {
                $(".create-password").removeClass("hidden");
            } else {
                $(".create-password").addClass("hidden");
            }
        });
    });
    </script>
    <!--end here create password-->

    <!--start here create password-->
    <script type="text/javascript">
   $(function () {
        $("#shipaddress").click(function () {
            if ($(this).is(":checked")) {
                $(".shipping-address-form").removeClass("hidden");
            } else {
                $(".shipping-address-form").addClass("hidden");
            }
        });
    });
    </script>
    <!--end here create password-->



  </body>
  </html>