<!DOCTYPE html>
<html>
  <head>
    <title>Track Order - Food Delivery</title>
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
    <li class="breadcrumb-item active" aria-current="page">My Order</li>
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
                    <h3 class="heading-1">Order Tracking List</h3>
                      <div id="accordion" class="myorder">
  <div class="card">
    <div class="" id="headingOne">
      <div class="mb-0 border mb-2 position-relative py-2">
        <button class="w-100 btn accordion-btn collapsed " data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          <div class="order-tracking-details text-left">
            <h6 class="mb-0">Order Id : <span class="order-trackig-id">OD453453451</span></h6>
            <h6 class="order-status btn-warning">Process</h6>
         </div>
          
        </button>
      </div>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body p-0 mb-2">
        <div class="order-tracking-status">
          <div class="order-tracking-box">
            <h6>Estimated Delivery Time</h6>
            <p>22 Nov 2021</p>
          </div>
          <div class="order-tracking-box">
            <h6>Shipping By</h6>
            <p>Blue Dart | +91 000 000 0000</p>
          </div>
          <div class="order-tracking-box">
            <h6>Status</h6>
            <p>On the way</p>
          </div>
          <div class="order-tracking-box">
            <h6>Tracking #:</h6>
            <p>BD045903594059</p>
          </div>
        </div>
        <div class="orderbar-sec">
     <div class="orderbar-line process-1">
       <div class="order-1 order-step">
         <div class="order-circle step-1"></div>
         <div class="order-status-name">
           <h6>Order Confirmed</h6>
         </div>
       </div>
       <div class="order-2 order-step ">
         <div class="order-circle step-2"></div>
         <div class="order-status-name">
           <h6>Picked by Courier</h6>
         </div>
       </div>
       <div class="order-3 order-step">
         <div class="order-circle step-3"></div>
         <div class="order-status-name">
           <h6>On the way</h6>
         </div>
       </div>
       <div class="order-4 order-step ">
         <div class="order-circle right step-4"></div>
         <div class="order-status-name right">
           <h6>Ready for pickup</h6>
         </div>
       </div>
     </div>
   </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="" id="headingTwo">
      <div class="mb-0 border mb-2 position-relative py-2">
        <button class="w-100 accordion-btn btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <div class="order-tracking-details text-left">
            <h6 class="mb-0">Order Id : <span class="order-trackig-id">OD453453451</span></h6>
            <h6 class="order-status btn-danger">Cancel Order</h6>
         </div>
        </button>
      </div>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body p-0 mb-2">
        <div class="order-tracking-status">
          <div class="order-tracking-box">
            <h6>Estimated Delivery Time</h6>
            <p>22 Nov 2021</p>
          </div>
          <div class="order-tracking-box">
            <h6>Shipping By</h6>
            <p>Blue Dart | +91 000 000 0000</p>
          </div>
          <div class="order-tracking-box">
            <h6>Status</h6>
            <p>Cancel Order</p>
          </div>
          <div class="order-tracking-box">
            <h6>Tracking #:</h6>
            <p>BD045903594059</p>
          </div>
        </div>

        <div class="orderbar-sec">
       <div class="orderbar-line cancel-order">
       <div class="order-1 order-step">
         <div class="order-circle step-1"></div>
         <div class="order-status-name">
           <h6>Order Confirmed</h6>
         </div>
       </div>
       <div class="order-2 order-step ">
         <div class="order-circle step-2"></div>
         <div class="order-status-name">
           <h6>Picked by Courier</h6>
         </div>
       </div>
       <div class="order-3 order-step">
         <div class="order-circle step-3"></div>
         <div class="order-status-name">
           <h6>On the way</h6>
         </div>
       </div>
       <div class="order-4 order-step ">
         <div class="order-circle right step-4"></div>
         <div class="order-status-name right">
           <h6>Cancel Order</h6>
         </div>
       </div>
     </div>
   </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="" id="headingThree">
      <div class="mb-0 border mb-2 position-relative py-2">
        <button class="w-100 accordion-btn btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <div class="order-tracking-details text-left">
            <h6 class="mb-0">Order Id : <span class="order-trackig-id">OD453453451</span></h6>
            <h6 class="order-status btn-success">Success</h6>
         </div>
        </button>
      </div>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body p-0 mb-2">
         <div class="order-tracking-status">
          <div class="order-tracking-box">
            <h6>Estimated Delivery Time</h6>
            <p>22 Nov 2021</p>
          </div>
          <div class="order-tracking-box">
            <h6>Shipping By</h6>
            <p>Blue Dart | +91 000 000 0000</p>
          </div>
          <div class="order-tracking-box">
            <h6>Status</h6>
            <p>Picked by the courier</p>
          </div>
          <div class="order-tracking-box">
            <h6>Tracking #:</h6>
            <p>BD045903594059</p>
          </div>
        </div>
        <div class="orderbar-sec">
     <div class="orderbar-line process-3">
       <div class="order-1 order-step">
         <div class="order-circle step-1"></div>
         <div class="order-status-name">
           <h6>Order Confirmed</h6>
         </div>
       </div>
       <div class="order-2 order-step ">
         <div class="order-circle step-2"></div>
         <div class="order-status-name">
           <h6>Picked by Courier</h6>
         </div>
       </div>
       <div class="order-3 order-step">
         <div class="order-circle step-3"></div>
         <div class="order-status-name">
           <h6>On the way</h6>
         </div>
       </div>
       <div class="order-4 order-step ">
         <div class="order-circle right step-4"></div>
         <div class="order-status-name right">
           <h6>Ready for pickup</h6>
         </div>
       </div>
     </div>
   </div>
      </div>
    </div>
  </div>
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