<!DOCTYPE html>
<html>
  <head>
    <title>Add to Cart - Jewelary</title>
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
    <li class="breadcrumb-item active" aria-current="page">Add to Cart</li>
  </ol>
</nav>
    </section>
    <!--end here breadcumb-section-->

    <section class="add-to-cart-section my-5">
        <div class="container-fluid">
            <div class="add-to-cart-flex">
            <div class="add-to-cart-left-section">
   <table class="product-table">
    <thead>
    <tr>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Subtotal</th>
      <th scope="col"> &nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <tr>  

      <td>
        <div class="list-product-order">
          <a href="">
        <img src="img/product/j-product-1.jpg">
        <h6>Consectetur Adipiscing</h6>
      </a>
    </div>
      </td>
      <td data-label="Price"><i class="rupeed-icon"> ₹</i> 2000 </td>
      <td>
        <div class="qty-container">
                    <button class="btn qty-btn-minus" type="button"><i class="fa fa-minus"></i></button>
                <input type="text" name="qty" value="0" class="input-qty btn"/>
                <button class="btn qty-btn-plus" type="button"><i class="fa fa-plus"></i></button>
            </div>
      </td>
      <td data-label="Subtotal"><i class="rupeed-icon"> ₹</i> 2500  </td>
       <td><button class="btn removeproduct text-danger"> <i class="fa-light fa-trash-can"></i> </button></td>

    
    </tr>
    <tr>  

      <td>
        <div class="list-product-order">
          <a href="">
        <img src="img/product/j-product-1.jpg">
        <h6>Consectetur Adipiscing</h6>
      </a>
    </div>
      </td>
      <td data-label="Price"><i class="rupeed-icon"> ₹</i> 2000 </td>
      <td>
        <div class="qty-container">
                    <button class="btn qty-btn-minus" type="button"><i class="fa fa-minus"></i></button>
                <input type="text" name="qty" value="0" class="input-qty btn"/>
                <button class="btn qty-btn-plus" type="button"><i class="fa fa-plus"></i></button>
            </div>
      </td>
      <td data-label="Subtotal"><i class="rupeed-icon"> ₹</i> 2500  </td>
       <td><button class="btn removeproduct text-danger"> <i class="fa-light fa-trash-can"></i> </button></td>

    
    </tr>
    <tr>  

      <td>
        <div class="list-product-order">
          <a href="">
        <img src="img/product/j-product-1.jpg">
        <h6>Consectetur Adipiscing</h6>
      </a>
    </div>
      </td>
      <td data-label="Price"><i class="rupeed-icon"> ₹</i> 2000 </td>
      <td>
        <div class="qty-container">
                    <button class="btn qty-btn-minus" type="button"><i class="fa fa-minus"></i></button>
                <input type="text" name="qty" value="0" class="input-qty btn"/>
                <button class="btn qty-btn-plus" type="button"><i class="fa fa-plus"></i></button>
            </div>
      </td>
      <td data-label="Subtotal"><i class="rupeed-icon"> ₹</i> 2500  </td>
       <td><button class="btn removeproduct text-danger"> <i class="fa-light fa-trash-can"></i> </button></td>

    
    </tr>
    <tr>  

      <td>
        <div class="list-product-order">
          <a href="">
        <img src="img/product/j-product-1.jpg">
        <h6>Consectetur Adipiscing</h6>
      </a>
    </div>
      </td>
      <td data-label="Price"><i class="rupeed-icon"> ₹</i> 2000 </td>
      <td>
        <div class="qty-container">
                    <button class="btn qty-btn-minus" type="button"><i class="fa fa-minus"></i></button>
                <input type="text" name="qty" value="0" class="input-qty btn"/>
                <button class="btn qty-btn-plus" type="button"><i class="fa fa-plus"></i></button>
            </div>
      </td>
      <td data-label="Subtotal"><i class="rupeed-icon"> ₹</i> 2500  </td>
       <td><button class="btn removeproduct text-danger"> <i class="fa-light fa-trash-can"></i> </button></td>

    
    </tr>
    
  </tbody>

  <tfoot>
    <tr>
      <th colspan="5">
       <div class="wdinput couponcode">
           <input type="text" name="" class="form-control" placeholder="Coupon Code">
           <button class="btn bg-color-dark-1">Apply Coupon</button>
       </div> 
      </th>
     
    </tr>
  </tfoot>
</table>
            </div>
            <div class="add-to-cart-right-section p-2">
                <h5 class="heading-1">Cart Total</h5>
                <div class="cart-total-heading mt-3 d-flex border-bottom">
                    <h5>Sub Total</h5>
                    <h6 class="ml-auto"><i class="rupeed-icon"> ₹</i> 60 </h6>
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

                    <div class="proceed-to-checkout d-flex mt-3">
                    <a href="checkout.php" class="btn bg-color-dark-1 w-100">Proceed to Checkout</a>
                    </div>

            </div>
            </div>
        </div>
    </section>
    

    <!--start here footer section-->
    <?php include 'include/footer.php';?>
    <!--end here footer section-->  


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <script type="text/javascript" src="js/header.js"></script>

    <!--start here quantity section-->
<script type="text/javascript">
    var buttonPlus  = $(".qty-btn-plus");
var buttonMinus = $(".qty-btn-minus");

var incrementPlus = buttonPlus.click(function() {
  var $n = $(this)
  .parent(".qty-container")
  .find(".input-qty");
  $n.val(Number($n.val())+1 );
});

var incrementMinus = buttonMinus.click(function() {
  var $n = $(this)
  .parent(".qty-container")
  .find(".input-qty");
  var amount = Number($n.val());
  if (amount > 0) {
    $n.val(amount-1);
  }
});
</script>
<!--end here quantity section-->
  </body>
  </html>