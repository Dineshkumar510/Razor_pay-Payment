<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>


<div class="row"  style="padding:100px 300px;">
  <div class="col-50">
    <div class="container" >
      <form  action="payment.php" method="post" style="padding: 25px;">
      
        <div class="row" >
          <div class="col-25">
            <h3 style="text-align: center;margin:20px 10px;font-family: lato;">Checkout Form</h3>

            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="Rajesh Kumar">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Rajesh@example.com">
            <input type="hidden" value="<?php echo 'OID'.rand(100,1000);?>" name="orderid">
            <input type="hidden" value="<?php echo 999;?>" name="amount">
            <label for="city"><i class="fa fa-mobile"></i> Mobile</label>
            <input type="text" max=10 id="city" name="mobile" placeholder="Mobile Number">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
          
        </div>
       
        <input type="submit" value="Pay now" class="btn">
      </form>
    </div>
  </div>
</div>

</body>
</html>
