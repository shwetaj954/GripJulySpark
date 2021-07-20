<?php
require_once 'header.php';
?>
<style>
    .donatebig{
    height: 100vh;
    background-repeat: no-repeat;
    background-image: url('https://www.pngall.com/wp-content/uploads/2018/03/Childhood-PNG-Images.png');
    width: 100%;
    background-attachment: inherit;
    background-size: cover;
    margin: 0;
}
.donat-cover{
    margin-left:5%;
    margin-right: 5%;
}
.payment-card{
    margin-left:1%;
    margin-right: 1%;
    margin-top: 20%;
}
.payment-big{
    background-color:rgba(red, green, blue, 0.5);
    border:solid;
    border-color:red;
    box-shadow: 2px 2px 5px 10px white;
    color:red;
    
}
.donate-check{
     background-color: red;
     border: solid;
     border-color:white;
     color: white;
}
.donate-text{
    background-color: white;
     border: solid;
     border-color:red;
     color:red;
}
.donate-check:hover{
     background-color: white;
     border: solid;
     border-color:red;
     color:red;
}
</style>
<div class="donat-cover">
<div class="donatebig" >

<div class="row" style="margin-top: 2%;height:70vh">
    <div class="col-4"></div>
    <div class="col-4 rounded text-center payment-big ">
        <br>
        <h1>Donate</h1>
        <form method="post" action="pgRedirect.php" class="payment-card form">
            <input id="ORDER_ID" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>" hidden>
            <input id="CUST_ID"  name="CUST_ID" autocomplete="off" value="CUST001" hidden>
            <input id="INDUSTRY_TYPE_ID"  name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" hidden>
            <input id="CHANNEL_ID" name="CHANNEL_ID" autocomplete="off" value="WEB" hidden>
            <label>Donate Amount</label>
            <input title="Donate Ammount" type="text" name="TXN_AMOUNT" value="1" class="form-control donate-text"><br>
            <input value="CheckOut" type="submit" class="form-control donate-check"	onclick="" >
                        
            
        </form>
    </div>
    <div class="col-4"></div>
</div>
</div>
</div>