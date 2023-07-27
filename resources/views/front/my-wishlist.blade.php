<!DOCTYPE html>
<html>
  <head>
    <title>My Order - Jewelary</title>
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
    <li class="breadcrumb-item active" aria-current="page">My Wishlist</li>
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
                       <h3 class="heading-1">Wishlist List</h3>
                       <table class="product-table">
    <thead>
    <tr>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"> &nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <tr class="position-relative">  

      <td>
        <div class="list-product-order">
         <a href="product-details.php">
        <img src="img/product/j-product-1.jpg">
        <h6>Consectetur Adipiscing</h6>
        </a>
    </div>
      </td>
      <td data-label="Price"><i class="rupeed-icon"> ₹</i> 60 </td>
      <td>
        <div class="qty-container">
                    <button class="btn qty-btn-minus" type="button"><i class="fa fa-minus"></i></button>
                <input type="text" name="qty" value="0" class="input-qty btn"/>
                <button class="btn qty-btn-plus" type="button"><i class="fa fa-plus"></i></button>
            </div>
      </td>
      
       <td><button class="btn removeproduct text-danger"> <i class="fa-light fa-trash-can"></i> </button></td>

    
    </tr>
    <tr class="position-relative">  

      <td>
        <div class="list-product-order">
         <a href="product-details.php">
        <img src="img/product/j-product-1.jpg">
        <h6>Consectetur Adipiscing</h6>
        </a>
    </div>
      </td>
      <td data-label="Price"><i class="rupeed-icon"> ₹</i> 100 </td>
      <td>
        <div class="qty-container">
                    <button class="btn qty-btn-minus" type="button"><i class="fa fa-minus"></i></button>
                <input type="text" name="qty" value="0" class="input-qty btn"/>
                <button class="btn qty-btn-plus" type="button"><i class="fa fa-plus"></i></button>
            </div>
      </td>
      
      <td><button class="btn removeproduct text-danger"> <i class="fa-light fa-trash-can"></i> </button></td>
    
    </tr>
    <tr class="position-relative">  

      <td>
        <div class="list-product-order">
          <a href="product-details.php">
        <img src="img/product/j-product-1.jpg">
        <h6>Consectetur Adipiscing</h6>
        </a>
    </div>
      </td>
      <td data-label="Price"><i class="rupeed-icon"> ₹</i> 250 <span>(4Kg)</span> </td>
      <td>
        <div class="qty-container">
                    <button class="btn qty-btn-minus" type="button"><i class="fa fa-minus"></i></button>
                <input type="text" name="qty" value="0" class="input-qty btn"/>
                <button class="btn qty-btn-plus" type="button"><i class="fa fa-plus"></i></button>
            </div>
      </td>
      
      <td><button class="btn removeproduct text-danger"> <i class="fa-light fa-trash-can"></i> </button></td>
    
    </tr>
    <tr class="position-relative">  

      <td>
        <div class="list-product-order">
          <a href="product-details.php">
        <img src="img/product/j-product-1.jpg">
        <h6>Consectetur Adipiscing</h6>
        </a>
    </div>
      </td>
      <td data-label="Price"><i class="rupeed-icon"> ₹</i> 300 <span>(2Kg)</span> </td>
      <td>
        <div class="qty-container">
                    <button class="btn qty-btn-minus" type="button"><i class="fa fa-minus"></i></button>
                <input type="text" name="qty" value="0" class="input-qty btn"/>
                <button class="btn qty-btn-plus" type="button"><i class="fa fa-plus"></i></button>
            </div>
      </td>
      
      <td><button class="btn removeproduct text-danger"> <i class="fa-light fa-trash-can"></i> </button></td>
    
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