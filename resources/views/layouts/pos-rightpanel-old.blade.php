<!DOCTYPE html>
<html>
<style type="text/css">
 /*for smap price in product click*/
.samp-price {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    /* font-size: 1.5em; */
    margin-left:10px !important;
    font-size: 19px !important;
    height: 27px !important;
}
 .sampt{
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    /* font-size: 1em; */
    margin-left:5px !important;
    font-size:20px !important;
    height:14px !important;
    margin-top:25px;
}
 .sampt1{
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    /* font-size: 1em; */
    margin-left:5px !important;
    font-size:15px !important;
    height:0px !important;
    margin-top:25px;
}
.samp1 {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    /* font-size: 1em; */
    margin-left: 40px !important;
    font-size: 15px !important;
    height: 19px !important;
}
 .samp2{
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    /* font-size: 1em; */
    margin-left:50px !important;
    font-size:40px !important;
    height:30px !important;
    margin-top:0px;
}

 .samp3{
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    /* font-size: 1em; */
    margin-left:163px !important;
    font-size:15px !important;
    height:0px !important;
    margin-top:30px;
}

/*for total  price in product click*/
.total-price {
    height: 37px;
    padding: 5px;
    color: #857d7dd9;
    text-align: left;
    font-size: 14px;
    display: flex;
    align-items: center;
    background-color: white;
    font-weight: 200!important;
    margin-left: 0px;
}
/*for total  price in product click*/
.total-price2{
    height:0px;
    color: #000000ad;
  
    text-align: center;
    font-size: 15px;
    display: flex;
    align-items: center;
    background-color: white;
    font-weight: 200;
    margin-left: 0px;
    margin-top:50px !important;
}

.total-price3{
    height:0px;
    /* border-bottom: 1px solid #ebeef6; */
    color: #000;
    text-align: center;

    display: flex;
    align-items: center;
    background-color: white;
    font-weight: 100;
    margin-left: 0px;
    margin-top: 350px !important;
}
/*for header right write bouttons checkout setting*/
.header-right {
    height:56% !important;
}

/* when we click checkout boutton*/
.total-price3-checkout{
    height: 0px;
    color: #000;
    text-align: center;
    display: flex;
    align-items: center;
    background-color: white;
    font-weight: 100;
    margin-left: 0px;
    margin-top: 290px !important;
}

.header-right >li:not(:first-child) {
    padding-left:-1.25rem !important;
}

</style>
<div class="fixed-content-box sidebar-fix" id="fixed-content">
  <div class="head-name" posistion="fixed">
  orders
  </div>
<div >

	<ul class="navbar-nav header-right">
                      
                      <li class="nav-item right-sidebar ">
                        <a class="header-raa" href="#">
                        <img class="" height="20" width="20" src="assets\images\coustomer-icon.JPG" alt="">
                        	addcustomer 
                         </a>


                        <a class="header-ra" href="#">
                        <img class="" height="36" width="38"src="assets\images\note-icon.JPG" alt="">
                         note
                       </a>
                       <a class="header-raa" href="#">
                          <b>Send</b>
                       </a>
                     </li>
                 </ul>
				</div>

                <ul class="navbar-nav header-right">
                         <div class="total-price" posistion="fixed">
                          <span class="" id="productname"></span>
                           <samp class="samp1" id="productprice"> </samp> 
                            <samp class="samp-price" id="productprice1"> </samp>        
                         </div>
 
                           <div class="total-price3">
                                <samp class="sampt1">Total</samp>
                                <samp class="samp3" id="productprice2"></samp>  
                          </div> 
                          <div class="total-price2">
                                <samp class="sampt">Total</samp>
                                <samp class="samp2" id="productprice3"></samp>  
                          </div>   
                      <li class="nav-item right-sidebar"> 
                        <a class=" anchoer2" href="#">
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
                 </ul>
				</div>                       
</html>
