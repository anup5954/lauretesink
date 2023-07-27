<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard - Jewelary</title>
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
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                       <h3 class="heading-1">Recent Order List</h3>
                       <table class="product-table my-account-product-table">
    <thead>
    <tr>
      <th scope="col">Product</th>
      <th scope="col">Date & Time</th>
      <th scope="col">Price (Qty)</th>
      <th scope="col">Order Id</th>
      <th scope="col">Invoice</th>
      <th scope="col">Payment Mode</th>
      <th scope="col">Payment Status</th>
      <th scope="col"> Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>  
        <td>
        <div class="list-product-order">
            <a href="product-details.php">
        <img src="img/product/j-product-1.jpg">
        <h6>Consectetur Adipiscing</h6>
        </a>
        </div>
      </td>
      <td data-label="Date & Time">25 May 2022 <br> <span>6:00 PM </span> </td>
      <td data-label="Price"><i class="rupeed-icon"> ₹</i> 60 <span>(01)</span> </td>
      <td data-label="Order Id">  KII002022 </td>
       <td data-label="Invoice No."> - </td>
      <td data-label="Payment Mode"> Cash  </td>
      <td data-label="Payment Status"> <span class="text-danger font-weight-bold"> Failed </span>  </td>
      <td data-label="Status"> Order Cancel  </td>

    
    </tr>
    <tr>  
        <td>
        <div class="list-product-order">
            <a href="product-details.php">
        <img src="img/product/j-product-1.jpg">
        <h6>Consectetur Adipiscing</h6>
        </a>
        </div>
      </td>
      <td data-label="Date & Time">25 May 2022 <br> <span>6:00 PM </span> </td>
      <td data-label="Price"><i class="rupeed-icon"> ₹</i> 60 <span>(02)</span> </td>
      <td data-label="Order Id">  KII002022 </td>
       <td data-label="Invoice No."> <a href="order-received.php" target="_blank"> KII002022 </a> </td>
      <td data-label="Payment Mode"> Cash  </td>
      <td data-label="Payment Status"> <span class="text-success font-weight-bold">  Success </span>  </td>
      <td data-label="Status"> Order Delivered  </td>

    
    </tr>
    <tr>  
        <td>
        <div class="list-product-order">
            <a href="product-details.php">
        <img src="img/product/j-product-1.jpg">
        <h6>Consectetur Adipiscing</h6>
        </a>
        </div>
      </td>
      <td data-label="Date & Time">25 May 2022 <br> <span>6:00 PM </span> </td>
      <td data-label="Price"><i class="rupeed-icon"> ₹</i> 60 <span>(05)</span> </td>
      <td data-label="Order Id">  KII002022 </td>
       <td data-label="Invoice No."> - </td>
      <td data-label="Payment Mode"> Cash  </td>
      <td data-label="Payment Status"> <span class="text-warning font-weight-bold">  Process </span>  </td>
      <td data-label="Status"> Order Delivered  </td>

    
    </tr>
  </tbody>

  
</table>
                   </div> 

                   <div class="my-account-box">
                       <h3 class="heading-1">Purchased Order List</h3>
                       <table class="product-table my-account-product-table">
    <thead>
    <tr>
      <th scope="col">Product</th>
      <th scope="col">Date & Time</th>
      <th scope="col">Price (Qty)</th>
      <th scope="col">Order Id</th>
      <th scope="col">Invoice</th>
      <th scope="col">Payment Mode</th>
      <th scope="col">Payment Status</th>
      <th scope="col"> Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>  
        <td>
        <div class="list-product-order">
            <a href="product-details.php">
        <img src="img/product/j-product-1.jpg">
        <h6>Consectetur Adipiscing</h6>
        </a>
        </div>
      </td>
      <td data-label="Date & Time">25 May 2022 <br> <span>6:00 PM </span> </td>
      <td data-label="Price"><i class="rupeed-icon"> ₹</i> 60 <span>(01)</span> </td>
      <td data-label="Order Id">  KII002022 </td>
       <td data-label="Invoice No."> - </td>
      <td data-label="Payment Mode"> Cash  </td>
      <td data-label="Payment Status"> <span class="text-danger font-weight-bold"> Failed </span>  </td>
      <td data-label="Status"> Order Cancel  </td>

    
    </tr>
    <tr>  
        <td>
        <div class="list-product-order">
            <a href="product-details.php">
        <img src="img/product/j-product-1.jpg">
        <h6>Consectetur Adipiscing</h6>
        </a>
        </div>
      </td>
      <td data-label="Date & Time">25 May 2022 <br> <span>6:00 PM </span> </td>
      <td data-label="Price"><i class="rupeed-icon"> ₹</i> 60 <span>(02)</span> </td>
      <td data-label="Order Id">  KII002022 </td>
       <td data-label="Invoice No."> <a href="order-received.php" target="_blank"> KII002022 </a> </td>
      <td data-label="Payment Mode"> Cash  </td>
      <td data-label="Payment Status"> <span class="text-success font-weight-bold">  Success </span>  </td>
      <td data-label="Status"> Order Delivered  </td>

    
    </tr>
  </tbody>

  
</table>
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