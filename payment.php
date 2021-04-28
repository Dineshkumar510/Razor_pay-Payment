<?php
     $apiKey = "rzp_test_mZNzawpicVOX3V";
?>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>    
    
<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" 
    data-amount="<?php echo $_POST['amount'] * 100;?>" 
    data-currency="INR"
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"
    data-buttontext="Pay with Razorpay" 
    data-name="Sample Payment Process"
    data-description="Random Payment!"
    data-image="https://images.unsplash.com/photo-1509603148757-f2a393f18afa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=726&q=80"
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['mobile'];?>"
    data-theme.color="#51CDAA"
>
</script>
<input type="hidden" custom="Hidden Element" name="hidden"> 

<!-- <p id="demo"></p>

<script>
function status() {
document.getElementById("demo").innerHTML = "Payment Successful";
}
</script>

<button id = "button1" onclick="status()">Payment status</button> -->


</form>



