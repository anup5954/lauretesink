<!DOCTYPE html>
<html>
  <head>
    <title>Track Order - Jewelary</title>
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
    <li class="breadcrumb-item active" aria-current="page">Order Reviews</li>
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
                    <h3 class="heading-1">Product Feedback</h3>
                      <div id="accordion" class="myorder">
  <div class="card">
    <div class="" id="headingOne">
      <div class="mb-2 position-relative py-2">
        <button class="w-100 btn accordion-btn collapsed " data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          <div class="order-tracking-details text-left">
            <h6>Order Id : <span class="order-trackig-id">OD453453451</span></h6>
            <h6 class="order-reviews ">15 May 2022 <span class="btn-warning"> 5 <i class="fa-solid fa-star"></i> </span></h6>
         </div>
          
        </button>
      </div>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body p-0 mb-2">
        <div class="orderbar-reviews-sec">
          <div class="orderreviews-box border-bottom pb-2">
            <div class="ordereviews-left">
              <div class="list-product-order">
            <a href="product-details.php">
        <img src="img/product/j-product-1.jpg">
        <h6>Consectetur Adipiscing</h6>
        </a>
        </div>
            </div>
            <div class="ordereviews-right ml-auto">
              <h6>Quantity : <span>01</span></h6>
              <h6>Price :  <span> ₹ 100</span></h6>
            </div>
          </div>
          <div class="order-reviews-form mt-3">
            <form>
              <div class="wdinput form-group">
                <div class="star-rating">
  <input type="radio" id="5-stars" name="rating" value="5" />
  <label for="5-stars" class="star">&#9733;</label>
  <input type="radio" id="4-stars" name="rating" value="4" />
  <label for="4-stars" class="star">&#9733;</label>
  <input type="radio" id="3-stars" name="rating" value="3" />
  <label for="3-stars" class="star">&#9733;</label>
  <input type="radio" id="2-stars" name="rating" value="2" />
  <label for="2-stars" class="star">&#9733;</label>
  <input type="radio" id="1-star" name="rating" value="1" />
  <label for="1-star" class="star">&#9733;</label>
</div>
                <textarea class="form-control" placeholder="Enter Reviews"></textarea>
              </div>

              <div class="wdinput form-group">
                <button class="btn bg-color-dark-1">Submit</button>
              </div>
            </form>
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