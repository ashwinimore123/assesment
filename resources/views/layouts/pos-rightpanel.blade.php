<!DOCTYPE html>
<html>
<style type="text/css">
  /*show product price*/

 .total-price1 {
    font-size: 15px;
    display: flex;
    /* padding: 15px; */
    /* position: relative; */
    padding: 12px 0px 18px 1px;
}


  .checkouttabheight {
    position: absolute;
    bottom: 0% !important;
    height: 5% !important;
  }

  .checkouttab{
    height: 100% !important;
  }

  .total-price2 {
    display: flex;
    align-items: center;
    vertical-align: baseline;
    height: 10% !important;
    position: fixed;
    bottom: 74px;
}

.total-price3 {
    vertical-align: baseline;
    height: 8% !important;
    position: fixed;
    bottom: 140px;
    z-index: 111111111;
}

  /*span classes*/

.span-price {
    margin-left: 0 !important;
    font-size: 15px !important;
    color: #131212fa;
    /*display: block;*/
    width: 150px;
    word-wrap: break-word;
}

.span-price1 {
    font-size: 15px !important;
    margin-top: 4px;
    position: absolute;
    right: 80px;
    color:#171819ad;
}

.span-price11 {
    font-size: 18px !important;
    position: absolute;
    right: 6px;
    color:#171819ad;
}
 .span-price2 {
    font-size: 15px !important;
    position: absolute;
    left: 0;
    top: 0px;
     color: #131212db;
     font-weight: 600;
}

.span-price22 {
    position: absolute;
    left:190px;
    top: 0px;
    color: #131212db;
     font-size: 15px ;
    font-weight: 700;

}
.span-price3 {
    font-size: 25px;
    position: relative;
    left: 90px;
    top: 115px;
    bottom: 0px;
    right: 0px;
    padding: 5px;
     color: #131212db;
}


.span-price3_modifier{
    font-size: 25px;
    position: relative;
    left: 101px;
    top: 115px;
    bottom: 0px;
    right: 0px;
    padding: 5px;
     color: #131212db;
}


.span-price33 {
    font-size: 20px;
    position: absolute;
    top: 120px;
    left: 0px;
    color: #131212db;
}


.span-price_discount {
    position: absolute;
    left: 190px;
    top: 0px;
    color: #131212db;
    font-size: 15px;
    font-weight: 700;
}

.divstyle {
    top: 100px;
    left:12px;
    height: 65%;
    overflow-y: auto;
    overflow-x: hidden;
    position: absolute;
    padding: 1px 1px 8px 1px;
}


.divstyle_modifier {
    top: 0px;
    left: 12px;
    height: 75%;
    overflow-y: auto;
    overflow-x: hidden;
    position: absolute;
    padding: 1px 1px 8px 1px;
}



 .total-price3-checkout {
  height: 10% !important;
  text-align: center;
  display: flex;
  align-items: center;
  font-weight: 100;
  margin-left: 0px;
  position: fixed;
  bottom: 41px !important;
}


.span-price3-checkout{
  margin-left: 24px;
  font-size: 40px;
  margin-top: 30px;
  float: right;
}
.total-price1-checkout{
  font-size: 18px;
  display: flex;
  padding: 5px;
  margin-left: -5px;
}

.applychanges{
    color: #ffffff!important;
    background-color: #3a7afe !important;
    height:55;
    width: 300px;
    font-size: 20px;
    width: 300px;
    line-height: 50px;
    font-size: 20px;
    /* position: fixed; */
    bottom: 0;
    right: 0;
    border-radius: 0;
    text-align: center;
}



.ExitSplit
   {
     color: #ffffff!important;
    background-color: #3a7afe !important;
    height:55;
    width: 300px;
    font-size: 20px;
    width: 300px;
    line-height: 50px;
    font-size: 20px;
    /* position: fixed; */
    bottom: 0;
    right: 0;
    border-radius: 0;
    text-align: center;
    z-index:111111111;
}


.receiptFooter {
    width: 100%;
    height: 75px;
    display: block;
    padding: 0;
    margin: 0;
    position: absolute;
    bottom: 0;
    z-index: 2;
}


.BouttonCoustomerSave {
    background: #3a7afe;
    min-width: 0;
    height: 75px;
    line-height: 50px;
    font-size: 25px;
    float: inline-start;
    padding: 0;
    display: block;
    border-radius: 0;
    padding-right: 64px background: #2e61de;
    border: solid 1px #2e61de;
    color: #ffffff;
}



.CoustomerSavebtn {
    display: block;
    position: absolute;
    bottom: 0;
    width: 67%;
    height: 47px;
    padding-left: 70px;
}



.customer_cart_icon {
    height: 60px;
    display: table-cell;
    vertical-align: middle;
    max-width: 88px;
    color: #595959;
}


.customerTitle {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    color: #595959;
    margin-left: 35px;
    padding: 0;
    -webkit-tap-highlight-color: transparent;
}


.customerImageIcon_cart {
    width: 35px;
    height: 35px;
    position: absolute;
    left: 0px;
    top: 50px;
    overflow: hidden;
    border-radius: 50%;
}

.BouttonModifier_Save {
    background: #3a7afe;
    min-width: 0;
    height: 75px;
    line-height: 100px;
    font-size: 25px;
    float: inline-start;
    padding: 0;
    display: block;
    border-radius: 0;
    padding-right: 64px background: #2e61de;
    border: solid 1px #2e61de;
    color: #ffffff;
}

.Modifier_Savebtn {
    display: block;
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 89px;
    padding-left: 116px;
}

</style>
<div class="fixed-content-box sidebar-fix fixed_all" id="fixed-content">
  <div class="head-name" posistion="fixed">    
    <div class="animationWrapper menuOrders">Orders
    <span class="orderCount">0</span>
    </div>


  </div>
  <div class="addcustomertab">
   <ul class="navbar-nav header-right">
    <li class="nav-item right-sidebar ">

       <a class="header-raa Customer_Cart hidden " href="#">
         <img class="" height="20" width="20" src="http://localhost/vpos.com/assets/images/plainlogo.jpg" alt="">
        <strong id="currentCustomerInfo">  </strong>
                  <!--     <div class="customer_cart_icon customerTitle">
                        <div class="customer_cart_icon customerTitle">
                          <span id="currentCustomerInfo">   </span>
                        </div>
                        <div class="clear"></div>
                        <div class="checkinIcon paypal"></div>
                        <div class="customerImageIcon_cart customer_cart_icon " id="customerImageIcon customerTitle"><img src="http://localhost/vpos.com/assets/images/plainlogo.jpg" width="35" height="35"></div>
                    </div> -->
        </a>
      @if($cart_user!="")
       <a class="header-raa AddCustomer AddCustomer_cart" id="{{$cart_user->customer->id}}" href="#">
        <!-- <img class="" height="20" width="20" src="http://localhost/vpos.com/assets/images/plainlogo.jpg" alt=""> -->
        <strong  id="currentCustomerInfo"> {{$cart_user->customer->name}} </strong>
      </a>


      <a class="header-raa AddCustomer AddCustomer_default hidden" href="#">
        <!-- <img class="" height="20" width="20" src="assets\images\coustomer-icon.JPG" alt=""> -->
        <strong> AddCustomer </strong>
      </a>
      @else
      <a class="header-raa AddCustomer AddCustomer_default" href="#">
        <!-- <img class="" height="20" width="20" src="assets\images\coustomer-icon.JPG" alt=""> -->
        <strong> AddCustomer </strong>
      </a>

      @endif

      <a class="header-ra" href="#">
        <!-- <img class="" height="36" width="38"src="assets\images\note-icon.JPG" alt=""> -->
         <strong> Note </strong> 
      </a>
      <a class="header-raa sendord" href="#">
        <strong class="ord"  style="font-weight: bold;">Send</strong> 
      </a>
    </li>
  </ul>
</div>















<!-- start total price section -->
<ul class="navbar-nav header-right productcalulation">
<div class="divstyle receiptline"id="totalammount" style="vertical-align: baseline;">
     <!-- <div class="total-price1" > -->
      <!-- <span class="span-price" id="productname">Product</span>
      <span class="span-price1"  id="productprice">$00</span> 
      <span class="span-price11" id="productprice1">$00.00</span> --> 
    <!-- </div> -->
  </div>
<!--   <div class="total-price2" style="vertical-align: baseline;">   
   <div class="col-md-12">
    <div class="row">
      <div class="col-md-3">
        <span class="span-price2">Total</span >
      </div>
      <div class="col-md-9" >
        <span class="span-price22" id="productprice2"></span>   
      </div>
    </div>
  </div>
</div> 


<div class="total-price3">
 <div class="col-md-12">
  <div class="row">
    <div class="col-md-3">
      <span class="span-price33">Total</span >
    </div>
    <div class="col-md-9" >
      <span class="span-price3"id="productprice3"></span>   
    </div>
  </div>
</div>
</div> 
 -->
<!-- end total price section -->


<!-- for modifiers  -->

<div class="divstyle_modifier receiptline_modifier hidden " id="modifierproduct" style="vertical-align: baseline;">

<!--  <div class="total-price1" id="t_price"value="">
  <a href="javascript:void(0);" id=""class="product_click productcartleft" alt="" product_id="" value=""style="color: #89879f;">
     <div class="hidden name"id="div_price" value="">
     </div>
                
            <span class="span-price" id="productname1">
            
            </span>
         
            <span class="span-price" id="productname" >fbfygng
              
              <span style="font-size:10px">&#x2716;&nbsp;</span>
            </span>      
         
      <span class="span-price1"  id="productprice"></span> 
       <span class="span-price11" id="productprice1"></span> 

    </a>    

</div>      

<div class=""> 
<div class="total-price2">   
   <div class="col-md-12">
    <div class="row">
      <div class="col-md-3">
        <span class="span-price2">Total</span>
      </div>
      <div class="col-md-9" >
        <span class="span-price22" id="productprice2"> 10000</span>   
      </div>
    </div>
  </div>
</div> 

<div class="total-price3">
 <div class="col-md-12">
  <div class="row">
    <div class="col-md-3">
      <span class="span-price33">Total</span>
    </div>
    <div class="col-md-6">
      <span class="span-price3"id="productprice3">10000</span>   
    </div>
  </div>
</div>
</div>

</div> -->

</div>



<div class="checkouttabheight ">
<div class="rightbouttons">      
  <li class="nav-item right-sidebar checkouttab"> 
    <a class="anchoer2" href="#">
     <img class="img"src="assets\images\light.svg" alt="">
   </a>

   <a class="anchoer checkoutanchoer" href="#">
    CheckOut
  </a>

  <a class="anchoer backanchoer hidden" href="#">  
    Back
  </a>
  <a class=" tab-left open-tab anchoer settinganchoer" href="#">
   <img class=""  src="assets\images\gear.svg" height="30" width="30"alt=""> </a>
  </li> 
</div> 

 <li class="nav-item hidden "> 
    <a class="applychanges" id="apply_changes"href="#">
     Apply Changes
   </a>
</li>
<div style="position: absolute; bottom: 0px;">
<li class="nav-item "> 
    <a class="ExitSplit hidden "  style=" height: 50px;"  id="ExitSplit"href="#">
     Exit   Split
   </a>
</li>
</div>
</div>
<div class="CoustomerSaveInfo">
  <div class="BouttonCoustomerSave CoustomerSavebtn hidden" style="display: block;">Save</div>
</div>

<div class="CoustomerSaveInfo">
    <div class="BouttonModifier_Save Modifier_Savebtn hidden" style="display: block;">Save</div>
</div>

</ul>
</div>  
</html>
