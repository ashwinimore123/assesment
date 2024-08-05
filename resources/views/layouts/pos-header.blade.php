<style type="text/css">
  
.CoustomerBack_modifier {
    position: fixed;
    left: 20px;
    display: flex;
    overflow: auto;
    top: 12px;
}


.backbtn-iconCoustomer_modifier {
    line-height: 40px;
    font-size: 40px;
    color: #464a51;
}

.modifierbackground{
  background: #d7dae3 !important;
}

</style>





          <div class="nav-header">
            <a href="#" class="brand-logo">
                 <img class="logo-abbr" src="assets\images\logo.jpg"alt="">
            </a>
          </div>
       
            <div class="header">
              <div class="header-content sidebar-header" id="head">
                <nav class="navbar navbar-expand">
                  <div class="collapse navbar-collapse justify-content-between">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="main">



                          <!-- Another variation with a button -->
                          <div class="input-group">
                       
                          <div class="modifierproduct hidden">
<!--                     <div class="btnBack_modifier Back_modifier" id="btnCancelOptionSets"></div>
 -->                           
                           <div class="CoustomerBack_modifier">
                            <div class="backModifier">
                                <i class="fa backbtn-iconCoustomer_modifier"></i>
                            </div>

                            </div>
                          

                          <h1><span id="optionSetName" class="name">xyz</span> Modifiers <span class="mobile mobileInline"> </span>

                            <!-- <span class="mobile mobileInline" id="mobileOptionsAmountPreview">$300.00</span></h1> -->

                          </div>

                            <div class="hederItem">
                            <div class="col-lg-1 no-padding">
                              <div class="input-group-append">
                                <button class="btn btn-secondary" type="button">
                                  <i class="fa fa-search"></i>
                                </button>
                              </div>
                            </div>

                            <div class="col-lg-11 no-padding">
                              <input type="text" id="input-searchpos" name="search"class="form-control input-search" placeholder="Search for Products">
                            </div>
                            
                            </div>

                          </div>


                        </div>
                      </div>
                    </div>                                              
                  </div>
                </nav>
              </div>
            </div>

 

<script type="text/javascript">
/*for when ew clickon setting boutton chatbox*/
$(document).ready(function(){
$("ul").on('click','li .tab-left',function(){ 
jQuery('.chatbox').addClass('active');
$(".col-lg-3").addClass("col-lg-3-setting ");
/*$(".span-price3").addClass("span-price3-setting");*/
$(".no-padding .btn").addClass("no-paddingbtnn");
$(".input-search").addClass("input-search1");
$(".col-lg-10").addClass("col-lg-8");
$(".sidebar-fix").addClass("fixed-content-box1");
$(".header").addClass("header1");
$(".form-control").addClass("form-control1");
$(".anchoer").addClass("anchoer1");
$(".navbar-nav").addClass("navbar-nav1");
$(".sidebar-header").addClass("header-content1");
$(".sidebar-header").addClass("remove-header-content1");
$(".back-button").addClass("tab-close");
$(".open-tab").removeClass("tab-left");
}); 


$("div").on('click','.tab-close',function(){

$(".col-lg-3").removeClass("col-lg-3-setting ");

/*$(".span-price3").removeClass("span-price3-setting");*/
$(".no-padding .btn").removeClass("no-paddingbtnn");  
$(".navbar-nav").removeClass("navbar-nav1");
$(".input-search").removeClass("input-search1");
$(".col-lg-10").removeClass("col-lg-8");
$(".form-control").removeClass("form-control1");
$(".anchoer").removeClass("anchoer1");
$(".header").removeClass("header1");
$(".sidebar-fix").removeClass("fixed-content-box1");
$(".sidebar-header").removeClass("header-content1");
$(".sidebar-header").removeClass("remove-header-content1");
$(".open-tab").addClass("tab-left");
$(".open-tab").removeClass("tab-close");
jQuery('.chatbox').removeClass('active');

});

$("div").on('click','.chatbox-close',function(){
$(".col-lg-3").removeClass("col-lg-3-setting "); 
/*$(".span-price3").removeClass("span-price3-setting"); */
$(".no-padding .btn").removeClass("no-paddingbtnn");  
$(".input-search").removeClass("input-search1");
$(".anchoer").removeClass("anchoer1");
$(".col-lg-10").removeClass("col-lg-8");
$(".form-control").removeClass("form-control1");
$(".header").removeClass("header1");
$(".navbar-nav").removeClass("navbar-nav1");
$(".sidebar-fix").removeClass("fixed-content-box1");
$(".sidebar-header").removeClass("header-content1");
$(".sidebar-header").removeClass("remove-header-content1");
$(".open-tab").addClass("tab-left");
$(".open-tab").removeClass("tab-close");
jQuery('.chatbox').removeClass('active');
});
});  

/*for checkout Button*/
$(document).ready(function(){
$("ul").on('click','li a.settinganchoer',function(){
jQuery('.chatbox').addClass('active');
$(".content-body").removeClass("hidden");
$(".deznav").removeClass("hidden");
$(".header").removeClass("hidden");
$(".footer").removeClass("hidden");
$(".chatbox").removeClass("hidden");
$(".chatbox").removeClass("hidden");
$(".fixed-content-box").removeClass("fixed-content-box-checkout");
$(".nav-header").removeClass("nav-header-checkout");
}); 

$("ul").on('click','li a.checkoutanchoer',function(){ 
/*var mb = $('#productprice3').text();
$('#productprice-checkout').text(mb);*/

var checkout_sugettion= $('#productprice3').text();
$('#checkout_sugettion').text(checkout_sugettion);
var checkout_sugettion2= $('#productprice3').text();
$('#checkout_sugettion2').text(checkout_sugettion2);
var checkout_sugettion3= $('#productprice3').text();
$('#checkout_sugettion3').text(checkout_sugettion3);
var checkout_sugettion4= $('#productprice3').text();
$('#checkout_sugettion4').text(checkout_sugettion4);

jQuery('.newcheckout').addClass('active');  
$(".deznav").addClass("hidden");
$(".header").addClass("hidden");
$(".footer").addClass("hidden");
$(".chatbox").addClass("hidden"); 
$(".head-name").addClass("hidden");  

$(".addcustomertab").addClass("addcustomertab1");
/*$(".total-price1").addClass("total-price1-checkout");*/
$(".fixed-content-box").addClass("fixed-content-box-checkout");
$(".nav-header").addClass("nav-header-checkout");
$('.checkoutanchoer').addClass("hidden");
$('.backanchoer').removeClass("hidden");
$('.backbtn').removeClass("hidden");
$('.checkout').removeClass("hidden");
$(".paymentbox").removeClass("hidden"); 
}); 

$("ul").on('click','li a.backanchoer',function(){
jQuery('.checkout').removeClass('active');
$(".content-body").removeClass("hidden");
$(".deznav").removeClass("hidden");
$(".header").removeClass("hidden");
$(".footer").removeClass("hidden");
$(".chatbox").removeClass("hidden");
$(".head-name").removeClass("hidden");
$(".addcustomertab").removeClass("addcustomertab1");
/*$(".total-price1").removeClass( "total-price1-checkout");*/
$(".fixed-content-box").removeClass("fixed-content-box-checkout");
$(".nav-header").removeClass("nav-header-checkout");
$('.checkoutanchoer').removeClass("hidden");
$(".checkout").addClass("hidden");
$('.backanchoer').addClass("hidden");
$('.backbtn').addClass("hidden");
$(".open-tab").addClass("tab-left");
});                                          


$(".checkout-close").on('click',function(){
jQuery('.checkout').removeClass('active');
$(".content-body").removeClass("hidden");
$(".deznav").removeClass("hidden");
$(".header").removeClass("hidden");
$(".footer").removeClass("hidden");
$(".chatbox").removeClass("hidden");
$(".head-name").removeClass("hidden");

$(".addcustomertab").removeClass("addcustomertab1");
/*$(".total-price1").removeClass( "total-price1-checkout");*/
$(".fixed-content-box").removeClass("fixed-content-box-checkout");
$(".nav-header").removeClass("nav-header-checkout");
$('.checkoutanchoer').removeClass("hidden");

$(".checkout").addClass("hidden");
$('.backanchoer').addClass("hidden");
$('.backbtn').addClass("hidden");
$(".open-tab").addClass("tab-left");


$(".split_payment").addClass("hidden");
$('.ExitSplit').addClass("hidden");
$('.rightbouttons').removeClass("hidden");

$('.product_split').addClass("product_click"); 
$('.product_split').removeClass("product_split"); 

});

$(".backbtn").on('click',function(){
jQuery('.checkout').removeClass('active');
$(".content-body").removeClass("hidden");
$(".deznav").removeClass("hidden");
$(".header").removeClass("hidden");
$(".footer").removeClass("hidden");
$(".chatbox").removeClass("hidden");
$(".head-name").removeClass("hidden");
$(".addcustomertab").removeClass("addcustomertab1");

/*$(".total-price1").removeClass( "total-price1-checkout");*/
$(".fixed-content-box").removeClass("fixed-content-box-checkout");
$(".nav-header").removeClass("nav-header-checkout");
$('.checkoutanchoer').removeClass("hidden");
$('.backanchoer').addClass("hidden");
$('.backbtn').addClass("hidden");
$(".checkout").addClass("hidden");
$(".open-tab").addClass("tab-left");
$(".split_payment").addClass("hidden");
$('.ExitSplit').addClass("hidden");
$('.rightbouttons').removeClass("hidden");
}); 

});
</script>
