@extends('layouts.pos-app')
@section('content')
<style type="text/css">
  /*for total dive*/

.total {
    height: 10%;
    border-bottom: 1px solid #decaca;
    color: #000;
    text-align: left;
    font-size: 24px;
    display: flex;
    align-items: center;
    background-color: white;
    font-weight: 200;
    margin-left: 0px;
    position: absolute;
    width: 100%;
    padding-left: 21px;
}


.dollar {
    position: absolute;
    height: 5%;
    color: #000;
    font-size: 40px;
    display: flex;
    align-items: center;
    background-color: white;
    font-weight: 400;
    right: 1rem;
    top: 15px;
    text-align: right;
}

  .text {
    font-size: 20px;
    position: absolute;
    left: 40%;
    bottom: 10px;
}

  .text1 {
    font-size: 20px;
    height: 10%;
    position: fixed;
  }

 .card-checkout {
    border: solid 1px #2e61de!important;
    border-radius: 3px !important;
    margin-top: 5%;
    height: 75px !important;
    padding: 30px;

}


 .text-checkout {

  font-size: 18px;
  color: #0624f5 !important;
}
.checkout.card-body {

 padding: 1.5rem 16px 13px 14px!important;
}


.backbtn {
  font-size: 30px;
  width: 47px;
  height: 100px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  background: #ffffff;
  position: fixed;
  z-index: 111111111;
  left: 254px;
  top:45%;
  margin-top: -25px;
  background-size: 13px 21px;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -ms-behavior: url(/ie/PIE.php);
  border-radius: 3px 0 0 3px;
  -webkit-transition: all .2s ease-out 0s;
  -o-transition: all .2s ease-out 0s;
  transition: all .2s ease-out 0s;
  overflow: auto!important;
}

.paymentbox {
    position: relative;
    top: 28%;
    left: 8%;
}

.backbtn-icon {
  line-height: 50px;
  font-size:24px;
}

/*model classes */

.fade:not(.show) {
  opacity: 11;
}

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 111%;
  pointer-events: auto;
  background-color: #ffffff
  background-clip: padding-box;
  border: 1px solid rgb(255 255 255);
  border-radius: 1.3rem;
  outline: 0;
  margin-left: -41px;
  height: 178px;
  margin-top: 23px;
}

.modal{
  position: fixed;
  top: 120px;
  left: 520px;
  z-index: 1111111;
  width: 100%;
  height: 29%;
  outline: 4;
  display:block!important;
  overflow: visible !important;

}

.modal1{
  position: fixed;
  top: 142px;
  left: 520px;
  z-index: 11111;
  width: 100%;
  height: 29%;
  outline: 4;
  display:none!important;
  overflow: visible !important;

}

.modal-display{
  display:none!important;
}

.modal-header {
  padding: 0.5rem 6.875rem;
  border-bottom: none !important;
  background-color: #fcfafa8f;
}

.modal-footer{

  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  padding: 1rem !important;  
  border-top: none !important;
  margin-top: -18px!important;
}

.note_box {
  background: #ffffff !important;
  border: 0.5px solid!important;
  border-color: #12111136 !important;
  width: 112% !important;
  border-radius: 0 !important;
  height: 50px;
  margin-left: -14px;
  margin-bottom: -10px;
  margin-top: -17px;
}
.btn-outline-light {
  color: #0a2ffa;
  border-color: #0a2ffa;
  width: 90px;
  border-radius: 4px;
  height: 47px;
  font-size: 15px;
}

.btn-primary {
  color: #ffffff;
  background-color: #3a7afe;
  border-color: #3a7afe;
  width:90px;
  border-radius: 4px !important;
  height: 47px;
  font-size: 15px;
}

.modal-header .close {
  padding: 0.875rem 1.815rem;
  margin: -11px;
  position: absolute;
  right: 0;
  float: none;
  top: 0;
  font-size: 30px;
  font-weight: 100;
}

/*for note */
.notekbtn
 {
 margin: 0;
 margin-top: -180px;
 margin-left: -311px;
 border: 13px solid;
 width: 36px;
 height: 82px;
 padding: 14px;
 background: fff;
 background-color: #ffffff;
 border-top: #dddddd;
 border-left: #dddddd;
 border-bottom: #dddddd;
 border-right: #ffffff;
 z-index:2 !important;
}
.note-icon
{
 line-height: 50px;
 font-size:24px;
}
.marker {
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 12.5px 10px 12.5px;
  border-color: transparent transparent #edecec transparent;
  position: absolute;
  right: 100px;
  top: -10px;
}

.header-right > li:not(:first-child) {
  padding-left: 0rem !important;
}


    .chatboxlink
    {
      position: fixed;
      width: 17%;
      bottom: 41px;
    }

    /*checkout hidden*/
    .text-checkout1 {
      font-size: 15px;
      color: #0c0c0c !important;
      font-size: 19px;
    }

    .text-checkout2 {
      font-size: 15px;
      color: #0c0c0c !important;
      font-size: 19px;
    }

    /*addcoustomertab*/
    .addcustomertab1{
      height: 5%;
      position: fixed;
      top:83px;
    }

    /*checkout window*/

    .checkout {
      width: auto;
      height: 100%;
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 301px;
      overflow: auto!important;
      z-index: 10;
      background: #fff;
      box-shadow: 0px 0px 30px 0px rgb(82 63 105 / 15%);
      -webkit-transition: all 0.8s;
      -ms-transition: all 0.8s;
      transition: all 0.8s;
    }


    .checkout .checkout-close {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      right: 102rem;
      left: 0;
      background: rgb(0 0 0 / 23%);
      z-index: 5;
      opacity: 1.1;
      z-index: 5;
      -webkit-transition: all 0 ease-out 0s !important;
      width: auto;
      -o-transition: all 0 ease-out 0s;
      transition: all 0 ease-out 0s;
      max-width: 300px;
    }


    /*card size when click on setting*/

    .col-lg-3 {
      flex: 0 0 25%;
      max-width: 16%;
    }


    .col-lg-3-setting {
      flex: 0 0 25%;
      max-width: 15%;
    }

    .productbox {
      flex: 0 0 25%;
      max-width: 17%;
    }

/*for after click on product */
.productcalculation {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 301px;
    overflow: visible!important;
    z-index: 11!important;
    visibility: hidden;
    background: #fff;
    padding: 0;
    box-sizing: border-box;
    display: block;
    visibility: visible;
    
}

.headersection{

    width: 100%;
    height: 56px;
    float: left;
    display: table;
    padding: 0 50px;
    background: #f8f8f8;
    text-align: center;
    position: relative;
    z-index: 6;
    box-sizing: border-box;
/*    -ms-behavior: url(/ie/PIE.php);*/
}
.headersection .titles {
    display: table-cell;
    vertical-align: middle;
}
h1 {
    font-size: 20px;
    line-height: 23px;
    font-weight: 500;
    color: #040404;
}
  .backbtnproduct {
    width: 100%;
    height: 100%;
    content: "\f3d2";
    font-family: Ionicons;
    position: absolute;
    left: 10px;
    top: 0;
    font-size: 38px;
    line-height: 54px;
    text-align: left;
    color: #464a51;
}
    .removebtn{
    position: absolute;
    top: 18px;
    right: 16px;
    cursor: pointer;
    color: #c40000;

    font-weight: 700;
    text-align: right;
    }

  .modifyItemContent{
    width: 100%;
    max-width: 400px;
    float: none;
    padding: 0px;
    margin: 0 auto;
    box-sizing: border-box;
    clear: both;
    }
    
.modifyItemContentscroll {
    width: 110%;
    max-width: 405px;
    float: none;
    padding: 0px;
    margin: 27px auto;
    box-sizing: border-box;
    clear: both;
}
  
ul.tabs {
    width: auto;
    height: 36px;
    text-align: center;
    padding: 0;
    margin: 10px 0;
    }

ul.tabs li.active, ul.tabs li.ui-state-active, ul.tabs li:hover{
    background: #fff;
    color: #464a51;
    font-weight: 700;
}



ul.tabs li:first-child {
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
    border-right: none;
}

ul.tabs li {
    width: 150px;
    height: 36px;
    display: inline-block;
    float: none;
    list-style: none;
    padding: 0 15px;
    margin: 10px -5px 0 0;
    line-height: 36px;
    color: #5c626a;
    border: solid 1px #a3abb3;
    background: #f8f8f8;
    font-weight: 400;
    font-size: 14px;
    cursor: pointer;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    vertical-align: top;
    box-sizing: border-box;
}


.quantity {
    width: 100%;
    float: left;
    position: relative;
    margin: 0 0 16px 0;
    box-sizing: border-box;
    padding-top: 0px;
    top: 15px;
}

.quantity_center{
  text-align: center;
}

.quantity_lable {
    text-align: center;
    font-size: 14px;
    color: #464a51;
    font-weight: 700;
    margin-bottom: 8px;
}
.element{
  text-align: center;
}
.btnMinus {
    width: 50px;
    height: 48px;
    min-width: 0;
    background-position: -11px -810px;
    min-width: 0;
    float: left;
    font-weight: 200;
    font-size: 24px;
    line-height: 46px;
    padding: 0;
    background: #fff;
    color: #2e61de;
    font-weight: 400;
    border: solid 1px #3a7afe;
    border-radius: 0px;
}
.textfield.fieldQuantity {
    width: calc(100% - 140px);
    float: left;
    margin: 0 20px;
    text-align: center;
}
.textfield {
    width: 100%;
    height: 48px;
    max-height: 96px;
    font-family: Akkurat-Regular,Helvetica,Arial,sans-serif;
    font-size: 15px;
    line-height: 20px;
    color: #464a51!important;
    font-weight: 200;
    background: #fff;
    padding: 0 10px;
    border: solid 1px #d7dce1;
    box-shadow: none;
    outline: 0;
    resize: none;
    -webkit-appearance: none;
    -webkit-font-smoothing: subpixel-antialiased;
    border-radius: 0;
    box-sizing: border-box;
     white-space: nowrap;
    text-overflow: ellipsis;
    -webkit-font-smoothing: antialiased;
}


.numberfield {
    font-size: 25px;
    font-weight: 200;
    text-align: right;
    line-height: 48px;
    cursor: pointer;
}
.btnAdd {
    width: 50px !important;
    height: 48px;
    min-width: 0;
    float: left;
    font-weight: 200;
    font-size: 24px;
    line-height: 48px;
    padding: 0;
    background-position: 0 -810px;
    background: #fff;
    color: #2e61de;
    font-weight: 400;
    border: solid 1px #3a7afe;
    border-radius: 0;
    box-sizing: border-box;
    margin:0px !important;
}

.unitPrice_lable{
    font-size: 14px;
    color: #464a51;
    font-weight: 700;
    margin-bottom: 8px;

}

.unitprice{
    width: 100%;
    float: left;
    position: relative;
    margin: 0 0 16px 0;
    box-sizing: border-box;
    padding-top: 0px;
    top: 15px;
}

.textfield.fieldQuantity1 {
    width: calc(100% - 0px);
    float: left;
    margin: 0px 0px;
    text-align: right;
}
.AdjustAmount_lable {
    text-align: right;
    font-size: 14px;
    color: #0e61f3;
    font-weight: 700;
    margin-bottom: 8px;
}

.textfield.fieldQuantity2{
    width: calc(100% - 0px);
    float: left;
    margin: 0px 0px;
    text-align: right;
    border: none;
}
.notes {
    padding: 15px 40px 15px 15px;
    border: solid 1px #d7dce1;
    border-radius: 0px;
}

.Note_lable {
    width: 100%;
    float: left;
    position: relative;
    margin: 0 0 16px 0;
    box-sizing: border-box;
    padding-top: 0px;
    top: 14px;
    font-size: 14px;
    color: #464a51;
    font-weight: 700;
}

.textarea {
    width: 100%;
    height: 48px;
    max-height: 96px;
    font-family: Akkurat-Regular,Helvetica,Arial,sans-serif;
    font-size: 15px;
    line-height: 20px;
    color: #464a51!important;
    font-weight: 200;
    background: #fff;
    padding: 0 10px;
    border: solid 1px #d7dce1;
    box-shadow: none;
    outline: 0;
    resize: none;
    -webkit-appearance: none;
    -webkit-font-smoothing: subpixel-antialiased;
    border-radius: 0;
    box-sizing: border-box;
}
   .rightbouttons{
    position: absolute;
    bottom: 0% !important;
    height: 100% !important;
    }

.plusminus {
    width: 66%;
    background: #ffffff !important;
    border: 0.px solid!important;
    border-radius: 4 !important;
    left: 0rem;
    position: fixed;
    top: 0px;
    height: 48px;
    border: solid 1px #d7dce1 !important;
    text-align: center;
    font-size: 23px;
}

.receiptline {
    width: 100%;
    height: 60%;
    position: absolute;
    list-style: none;
    margin: 0;
    margin-top: 2px;
    /* padding: 16px 0px 0px 0px; */
    cursor: pointer;
    font-size: 12px;
    font-weight: 500;
    color: #464a51;
    border-left: solid 0px #35242400;
    box-sizing: border-box;
    transition: all .2s ease-out 0s;
}


.receiptline_modifier {
    width: 100%;
    height:75%;
    position: absolute;
    list-style: none;
    margin: 0;
    margin-top: 2px;
    /* padding: 16px 0px 0px 0px; */
    cursor: pointer;
    font-size: 12px;
    font-weight: 500;
    color: #464a51;
    border-left: solid 0px #35242400;
    box-sizing: border-box;
    transition: all .2s ease-out 0s;
}


 /*adjustamount section started*/
.calci{
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    position: fixed;
    display: flex;
    background: rgba(0, 0, 0, 0.5);
    z-index: 1001;
}

/*for calculator*/
@import 'https://fonts.googleapis.com/css?family=Share+Tech+Mono';

body {
  background:antiquewhite;
}

#header {
  text-align: center;
  font-family: 'Share Tech Mono', monospace;
}

.calc {
    text-align: center;
    width: 350px;
    display: block;
    border-radius: 0px;
    border: 1px solid #0650e8;
    border-color: #abc6c2;
    padding: 8px;
    background: #ffffff;
    position: absolute;
    left: 276px;
    height: 525px;
    top: 100px;
}
.calc1{
    text-align: center;
    width: 350px;
    display: block;
    border-radius: 0px;
    border: 1px solid #0650e8;
    border-color: #abc6c2;
    padding: 8px;
    background: #ffffff;
    position: absolute;
    left: 550px;
    /* bottom: 130px; */
    height: 525px;
    top: 100px;
}

#display {
    background: #ffffff;
    padding: 0px;
    text-align: center;
    font-family: 'Share Tech Mono', monospace;
    border-radius: 5px;
    border: solid 2px;
    border-color:#080808;
    top: 10px;
    position: relative;
    font-size: 13px;
}

#result p{
  font-size:1.8em;
}

#result,#previous {
  text-align: right; 
}

#keyboard {
    display: inline-block;
    text-align: center;
    margin-bottom: 9px;
}

.row_calc {
    margin-top: 15px;
    position: relative;
    top: 15px;
}

.last-row {
    float: left;
    margin-top: -11.5%;
    position: relative;
    top: 66px;
}
.buttoncalci {
    width: 61px;
    margin: 1px;
    height: 75px;
    color: #101010;
    background-color: #ffffff;
    background-color: #ffffff;
    border-color: #0808083d;
    border-radius: 5px;
    font-size: 30px;
    font-weight: 500;
}

.invisible {
  width:0;
}

.btn-zero {
 width:127px;
}

.btn-result {  
  float:right;
  margin-left:4px;  
  height: 75px;
   width: 66px;
  margin: 1px;
  background-color:#0808eca8;
}

.backbtncalci {
    float: right;
    top: -33px;
    position: absolute;
    right: -1px;
    font-size: 26px;
}

.adjustpriceback{
    float: right;
    top: -33px;
    position: absolute;
    right: -1px;
    font-size: 26px;
}


.dRVTQv {
    overflow: hidden;
    background: rgb(255, 255, 255);
    outline: 0px;
    height: auto;
    width: 380px;
    margin: auto;
}

/*end calculator*/

.checkout_emailrecipt {
    width: 480px;
    display: block;
    position: absolute;
    top: 50%;
    left: 60%;
    margin-top: -160px;
    margin-left: -240px;
    text-align: center;
    z-index: 111111111;
}

.iconSuccess {
    color: #464a51;
    font-size: 90px;
    margin: 0 auto 25px auto;
}

.textbox_email {
    width: calc(90% - 70px);
    float: left;
    margin: 0px 0px;
}
    .print_checkout{
    position: absolute;
    left: 80px;
    top: 200px;
    color: blue;
    background-color: white;
    }

    .nothanks_checkout{
    position: absolute;
    left: 250px;
    top: 200px;
    background: 0 0;
    color: #464a51;
    font-weight: 700;
    border: solid 1px transparent;
    }

    /*for split element*/
.split_payment {
    z-index: 11111;
    position: absolute;
    top: 85px;
    left: 690px;
    width: auto;

}

.topay {
    top: 125px;
    height: 500px;
    overflow-y: auto;
    overflow-x: hidden;
    position: absolute;
}

.button_split {
    position: absolute;
    left: 315px;
    color: #3a7afe;
    background-color: #fff;
    top: 100px;
}

ul.tabs_split li {
    width: 203px;
    height: 45px;
    text-align: center;
    display: inline-block;
    float: none;
    list-style: none;
    padding: 1px 15px;
    margin: 0px -4px 0 0;
    line-height: 45px;
    color: #5c626a;
    border: solid 1px #a8b2b9;
    background: #f8f8f8;
    font-weight: 500;
    font-size: 16px;
    cursor: pointer;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    vertical-align: top;
    box-sizing: border-box;
    border-radius: 3px;
}
  .split_textbox_boutton{
      position: absolute;
      top: 165px;
    }
  .btn_chekcout{
    position: absolute;
    left: 316px;
    }

 .textfield_split {
    text-align: end;
    width: 300px;
    height: 48px;
    max-height: 96px;
    font-family: Akkurat-Regular,Helvetica,Arial,sans-serif;
    font-size: 30px;
    line-height: 10px;
    color: #464a51!important;
    font-weight: 500;
    background: #fff;
    padding: 0 10px;
    border: solid 1px #d7dce1;
    box-shadow: none;
    outline: 0;
    resize: none;
    -webkit-appearance: none;
    -webkit-font-smoothing: subpixel-antialiased;
    border-radius: 0;
    box-sizing: border-box;
    white-space: nowrap;
    text-overflow: ellipsis;
    -webkit-font-smoothing: antialiased;
}


.span_split {
    position: absolute;
    left: 420px;
    font-size: 40px;
    z-index: 1111111111;
}


/* for pos login screen */

.poslogin{
    width: 100%;
    height: 100%;
    min-height: 100%;
    position: relative;
    overflow: hidden;
    background: #fff;
    right: 0;
    transition: all .2s ease-out 0s;
    z-index: 11111;
}

.posloginheader {
    width: 100%;
    height: 56px;
    float: left;
    position: relative;
    background: #18191d;
    color: #fff;
    z-index: 10;
}
.sectionHeader {
    width: 100%;
    height: 56px;
    float: left;
    display: table;
    padding: 0 50px;
    background: #f8f8f8;
    text-align: center;
    position: relative;
    z-index: 6;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);
}
.sectionHeader .innerWrapper {
    display: table-cell;
    vertical-align: middle;
}

.tabs {
    width: auto;
    height: 36px;
    text-align: center;
    padding: 0;
    margin: 10px 0;
}

.singleTab {
    border-right: solid 1px #a3abb3;
    border-radius: 3px;
    background: #fff;
    color: #464a51;
    font-weight: 700;
}



ul.tabs li {
    width: 150px;
    height: 36px;
    display: inline-block;
    float: none;
    list-style: none;
    padding: 0 15px;
    margin: 0px -5px 0 0;
    line-height: 36px;
    color: #5c626a;
    border: solid 1px #a3abb3;
    background: #f8f8f8;
    font-weight: 600;
    font-size: 16px;
    cursor: pointer;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    vertical-align: top;
    box-sizing: border-box;
}

ul.tabs li:first-child {
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
    border-right: solid 1px;
  }

.user_list_scroll {
    width: 100%;
    height: 100%;
    padding: 0 0 20px 0;
    box-sizing: border-box;
    
}

.list{
    list-style: none;
    float: left;
     padding: 18px;

}

.userpos{
    width: 105px;
    height: auto;
    padding: 0;
    margin: 0 11px 10px 11px;
    text-align: center;
    color: #595959;
    font-weight: 400;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);
}

.userImagepos {
    width: 105px;
    height: 105px;
    display: block;
    position: relative;
    float: left;
    overflow: hidden;
    background-position: center center!important;
    background-size: cover!important;
    background-color: #f8f8f8;
    color: #5c626a;
    font-size: 32px;
    line-height: 105px;
    font-weight: 400;
    -webkit-font-smoothing: subpixel-antialiased;
    border-radius: 50%;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);
}
.userNamepos{
    width: 100%;
    height: 40px;
    display: block;
    float: left;
    line-height: 40px;
    font-size: 14px;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.userReceiptTotalpos {
    width: auto;
    height: 75px;
    position: absolute;
    left: 0;
    bottom: 0;
    right: 0;
    padding: 0 30px;
    z-index: 1;
    background: #fff;
    border-top: solid 1px #d7dce1;
    color: #464a51;
    line-height: 75px;
    text-align: right;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);
}

.totalAmountpos {
    float: right;
    font-size: 38px;
    margin-left: 20px;
}
.totalLabelpos {
    float: right;
    font-size: 20px;
}
.lastsale{
      position: absolute;
    right: 237px;
}
.navigationHeader {
    width: 180px;
    height: 45px;
    float: left;
    position: absolute;
    background: #18191d;
    top: 0;
}
.mainMenuIconWrapper {
    width: 40px;
    height: 56px;
    position: absolute;
    cursor: pointer;
    z-index: 3;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);
}
.mainMenuIconWrapper #logoMenu {
    width: 17px;
    height: 13px;
    z-index: 1000;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -7px;
    margin-left: -8px;
    cursor: pointer;
    transform: rotate(0);
    transition: all .5s ease-in-out 0s;
}

.mainMenuIconWrapper #logoMenu span {
    width: 17px;
    height: 2px;
    display: block;
    position: absolute;
    background: #fff;
    opacity: 1;
    left: 0;
    transform: rotate(0);
    transition: all .25s ease-in-out 0s;
}
.mainMenuIconWrapper #logoMenu span:nth-child(1) {
    top: 0px;
}
.mainMenuIconWrapper #logoMenu span:nth-child(2) {
    top: 5px;
}
.mainMenuIconWrapper #logoMenu span:nth-child(3) {
    top: 10px;
}
.mainMenuIconWrapper #logoMenu span:nth-child(4) {
    top: 15px;
}    .companylogo{
    position: absolute;
    left: 32px;
}
body.simpleHeader ul.receiptHeaderNavigation {
    background: 0 0;
    border: none;
}

#header ul.topBarMenu li a.menuOrders a.menuOrders1 .animationWrapper .animationWrapper1 {
    line-height: normal;
    position: relative;
    overflow: hidden;
    padding: 8px;
    border-radius: 4px;
}




eader ul.topBarMenu li a.menuOrders a.menuOrders1 {
    display: flex;
    align-items: center;
    justify-content: center;
}
#header ul.topBarMenu li a.menuOrders a.menuOrders1 .animationWrapper .animationWrapper1 .orderCount {
    box-sizing: border-box;
    line-height: 16px;
    border: 1px solid #d7dce1;
    border-radius: 4px;
    padding: 2px 4px 0 4px;
    margin-left: 4px;
    background-color: #fff;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    color: #18191d;
}  

.orderlogin{
    position: absolute;
    right: 36px;
    top: 19px;
    /* font-size: 15px; */
    color: blue;
}
 .orderCount {
    box-sizing: border-box;
    line-height: 16px;
    border: 1px solid #d7dce1;
    border-radius: 4px;
    padding: 2px 4px 0 4px;
    margin-left: 4px;
    background-color: #fff;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    color: #18191d;
}
.backbtnpos {
    font-size: 18px;
    width: 78px;
    display: -webkit-box;
    display: -ms-flexbox;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background: #f8f8f8;
    position: fixed;
    left: 28px;
    top: 74px;
    -ms-behavior: url(/ie/PIE.php);
    -o-transition: all .2s ease-out 0s;
}
.backbtn-icon2 {
    line-height: 50px;
    font-size: 33px;
}
  .posloginback{
    position: absolute;
    left: 6px;
    display: flex;
    overflow: auto;
}

.calci1pos{
    width: 100%;
    height: 100%;
    top: 40px;
    left: 246px;
    position: fixed;
    display: flex;
    background: none!important;
    z-index: 1001;
} 
.invalidpinpos {
    position: relative;
    z-index: 1111111;
    text-align: center;
    top: 0px;
    background: #d600bc;
    padding: 20px;
}

.defaultPin {
    font-size: 14px;
    color: #595959;
    margin-top: 30px;
}

.containertable {
    padding-top: 5px;
    padding-right: 10px;
    padding-left: 8px;
}

/*<!------ Include the above in your HEAD tag ---------->*/
/*@import url(http://fonts.googleapis.com/css?family=Lato:300);
@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);*/

body
{
    margin: 0;
    padding: 0;
    font-family: 'Lato' , sans-serif;
    color: #333;
    background-size: 100%;
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: none;
    background-color: #475264;
}
p
{
    margin: 0;
    padding: 0 0 10px 0;
    line-height: 20px;
}
.span4
{
    width: 80px;
    float: left;
    margin: 0 8px 10px 8px;
}

.phone
{
    margin-top: 15px;
    background: #fff;
}
.tel
{
    margin-bottom: 10px;
    margin-top: 10px;
    border: 1px solid #9e9e9e;
    border-radius: 0px;
}
.num-pad
{
    padding-left: 15px;
}

.num
{
    border: 1px solid #9e9e9e;
    -webkit-border-radius: 999px;
    border-radius: 999px;
    -moz-border-radius: 999px;
    height: 80px;
    background-color: #fff;
    color: #333;
    cursor: pointer;
}
.num:hover
{
    background-color: #9e9e9e;
    color: #fff;
    transition-property: background-color .2s linear 0s;
    -moz-transition: background-color .2s linear 0s;
    -webkit-transition: background-color .2s linear 0s;
    -o-transition: background-color .2s linear 0s;
}
.txt
{
    font-size: 30px;
    text-align: center;
    margin-top: 15px;
    font-family: 'Lato' , sans-serif;
    line-height: 30px;
    color: #333;
}
.small
{
    font-size: 15px;
}

.btn
{
    font-weight: bold;
    -webkit-transition: .1s ease-in background-color;
    -webkit-font-smoothing: antialiased;
    letter-spacing: 1px;
}
.btn:hover
{
    transition-property: background-color .2s linear 0s;
    -moz-transition: background-color .2s linear 0s;
    -webkit-transition: background-color .2s linear 0s;
    -o-transition: background-color .2s linear 0s;
}
.spanicons
{
    width: 72px;
    float: left;
    text-align: center;
    margin-top: 40px;
    color: #9e9e9e;
    font-size: 30px;
    cursor: pointer;
}
.spanicons:hover
{
    color: #3498db;
    transition-property: color .2s linear 0s;
    -moz-transition: color .2s linear 0s;
    -webkit-transition: color .2s linear 0s;
    -o-transition: color .2s linear 0s;
}
.active
{
    color: #3498db;
}

.containerposverify {
    max-width: 1091px !important;
    position: absolute !important;
    left: 493px !important;
    top: 180px !important;
    z-index: 111111111 !important;
}
.form-controlpos {
    width: 11%;
    background: none;
    border: -3.5px solid!important;
    border-radius: 0 !important;
    padding-left: 0rem !important;
    left: 41rem !important;
    position: fixed !important;
    top: 120px !important;
    height: 41px;
    border: none;
    text-align: left;
    font-size: 100px;
    font-weight: bold;
    color: #0e0e0e;
}
    .invalidpinback{
    position: absolute;
    right: 20px;
    top: 6px;
    font-size: 38px;
    color: black;
}

.defaultPin {
    font-size: 14px;
    color: #595959;
    margin-top: 30px;
    margin-left: 56px;
}

/*.nupadkounta{
    height: 440px!important;
    top: 50%!important;
    text-align: center;
    background: 0 0;
    margin-top: -190px!important;
    overflow: visible!important;
    z-index: 10!important;
}*/

/*for pos-table*/
.postable{
    width: 100%;
    height: 100%;
    min-height: 100%;
    position: relative;
    overflow: hidden;
    background: #fff;
    right: 0;
    transition: all .2s ease-out 0s;
    z-index: 11111;
}

.navigationHeader1{
    width: 180px;
    height: 45px;
    float: left;
    position: fixed;
    background: #18191d !important;
    top: 0;
}


.tablemain {
    position: absolute;
    left: 55px;
    top: 12px;
}



#circletable {
    width: 70px;
    height: 70px;
    background: #101010;
    border-radius: 50%;
    border-color: black;
    border: solid 3px;
}

.line1 {
    width: 50px;
    height: 0px;
    border-bottom: 8px solid black;
    position: absolute;
    top: -15px;
    left: 11px;
    border-redius: 62px;
    border-top-right-radius: 8px;
    border-top-left-radius: 8px;
}

.line2 {
    width: 50px;
    height: 0px;
    border-bottom: 8px solid black;
    position: absolute;
    top: 77px;
    left: 10px;
    border-redius: 62px;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
}

.line3 {
    border-left: 8px solid black;
    height: 50px;
    border-bottom-right-radius: 9px;
    border-top-right-radius: 8px;
    position: absolute;
    border-redius: 62px;
    left: 76px;
    top: 10px;
}

.line4 {
    border-left: 8px solid black;
    height: 50px;
    border-redius: 62px;
    border-bottom-left-radius: 8px;
    border-top-left-radius: 8px;
    position: absolute;
    left: -14px;
    top: 11px;
}

.circlemiddel {
    height: 45px;
    width: 45px;
    background-color: #0c0c0ce8;
    border-radius: 50%;
    margin-top: 9px;
    margin-left: 9px;
    border-color: black;
    border: solid 3px;
}

.cpllaps{
    width: 100%;
    height: 40px;
    display: block;
    float: left;
    line-height: 40px;
    font-size: 14px;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.tablespan {
    /* position: absolute; */
    /* top: 20px; */
    /* left: 26px; */
    /* text-align: center; */
    color: white;
    font-size: 25px;
    font-weight: 600;
    /* padding-top: 14px; */
    margin-top: 9px;
}

.tablerow {
    display: flex !important;
    flex-wrap: wrap!important;
    margin-right: 0px !important; 
      margin-left: 0px !important;
   
}

.scroll-tablepos{
    width: 100%;
    overflow-y: auto;
    overflow-x: hidden;
    height: 72%;
    padding-top: 20px!important;
}


.userReceiptTotalpostable{
    width: auto;
    height: 75px;
    position: absolute;
    left: 0;
    bottom: 0;
    right: 0;
    padding: 0 30px;
    z-index: 1;
    background: #fff;
    border-top: solid 1px #d7dce1;
    color: #464a51;
    line-height: 75px;
    text-align: right;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);
    height: 45px;
    background: #18191d;
    z-index: 111111111;
}

.tabspostable {
    width: auto;
    height: 36px;
    text-align: center;
    padding: 0;
    margin: 10px 0;
}

.tableposmerg{
     width: 100%;
    height: 100%;
    min-height: 100%;
    position: relative;
    overflow: hidden;
    background: #fff;
    right: 0;
    transition: all .2s ease-out 0s;
    z-index: 11111111;

}

.checkbox_posmerg {
    bottom: 20px;
    right: 80px;
    color: #141415;
    font-size: 15px;
    font-weight: 600;
}

.product-scroll
{
    width: 72%;
    overflow-y: auto;
    overflow-x: hidden;
    height: 80%;
    position: fixed;
}

.divsplit_topay {
    border-bottom: 1px solid rgb(220, 220, 220);
    margin: 26px 2px;
    -webkit-tap-highlight-color: transparent;
    width: 411px;
}

.dic_splitprodctwise{
    padding: 30px;
    margin: 0px;
    border-radius: 4px;
    cursor: default;
    border: 0px solid rgb(215, 220, 225);
    background-color: rgb(255, 237, 212);
    color: rgb(77, 32, 0);
    text-align: center;
}


   .product_checkout {
    font-family: Akkurat-Regular, Helvetica, Arial, sans-serif;
    font-size: 15px;
    line-height: 24px;
    font-weight: 700;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    width: auto;
    height: 48px;
    border-radius: 4px;
    border-width: 1px;
    border-style: solid;
    padding: 0px 16px;
    margin: 0px;
    -webkit-font-smoothing: inherit;
    text-decoration: none;
    color: rgb(255, 255, 255);
    background-color: rgb(46, 97, 222);
    border-color: transparent;
    width: 100%;
}

 .price_split{
    top: 167px;
    left: 1px;
    height:450px;
    overflow-y: auto;
    overflow-x: hidden;
    width: 477px;
}

.hidden1
{
    display:none;
}

.split_product_style {
    background: rgb(255, 255, 255) !important;
    border-style: solid  !important;
    border-width: 2px  !important;
    outline: none  !important;
    border-color: rgb(45 94 195)  !important;
    box-shadow: rgb(45 94 195) 0px 0px 0px 1px inset  !important;
    border-radius: 4px 0px 0px 4px  !important;
    font-weight: 600  !important;
}


.hngeFp {
    cursor: pointer;
    height: 48px;
    width: 100%;
    background: rgb(242, 245, 248);
    padding: 8px 16px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    border-style: solid;
    border-width: 1px;
    outline: none;
    border-color: rgb(215, 220, 225);
}


.calc_product_changeprice{
    text-align: center;
    width:350px;
    display: block;
    border-radius: 0px;
    border: 1px solid #0650e8;
    border-color: #abc6c2;
    padding: 8px;
    background: #ffffff;
    position: absolute;
    left: 480px;
    /* bottom: 130px; */
    height:475px;
    top: 100px;
}


/*<!-- FOR  ADD COUSTOMER IN POS ADD COUSTOMER  -->*/

.linkOrders {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 300px;
    background: #fff;
    z-index: 1000!important;
}

li.customer .linkOrders.linkOrderCustomer {
    overflow: auto!important;
    top: 0;
}

.coustomer_section {
    width: 100%;
    float: left;
    text-align: left;
}

 li.addNewCustomer {
    color: #2e61de;
    margin: 0 9px 10px 9px;
        width: 105px;
    height: auto;
    padding: 0;
    margin: 0 12px 10px 12px;
    text-align: center;
    color: #595959;
    list-style: none;
    float: left;
    -webkit-tap-highlight-color: transparent;
        display: list-item;
        display: block;
    visibility: visible
}


 li.addNewCustomer .customerImage:before {
    content: "+";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    line-height: 105px;
    font-weight: 400;
    font-size: 42px;
    -webkit-font-smoothing: antialiased;
}


 li.addNewCustomer .customerImage {
    width: 105px;
    height: 105px;
    display: block;
    position: relative;
    float: left;
    overflow: hidden;
    background-position: center center!important;
    background-size: cover!important;
    color: #5c626a;
    font-size: 32px;
    line-height: 105px;
    font-weight: 400;
    -webkit-font-smoothing: subpixel-antialiased;
    border-radius: 50%;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);
}

 li.addNewCustomer .customerImage {
    line-height: 105px;
    font-weight: 200;
    background: 0 0;
    border: solid 1px #2e61de;
    color: #2e61de;
}


 li.addNewCustomer .customerName,li.customer .customerName {
    font-weight: 400;
    width: 100%;
    height: 40px;
    display: block;
    color: #2e61de;
    float: left;
    line-height: 20px;
    font-size: 14px;
    margin-top: 10px;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}



ul .list {
    margin: 0;
    padding: 0;
    -webkit-tap-highlight-color: transparent;
}

/*next ul*/
 ul.searchCustomersContainer li.customer {
    width: 105px;
    height: auto;
    padding: 0;
    margin: 0 12px 10px 12px;
    text-align: center;
    color: #595959;
        width: 105px;
    height: auto;
    padding: 0;
    margin: 0 12px 10px 12px;
    text-align: center;
    color: #595959;
    list-style: none;
    float: left;
    -webkit-tap-highlight-color: transparent;
     display: list-item;
        display: block;
    visibility: visible
}
 
 ul.searchCustomersContainer li.customer {
    margin: 0 9px 10px 9px;
}

ul.searchCustomersContainer li.customer {
    width: 105px;
    height: auto;
    padding: 0;
    margin: 0 12px 10px 12px;
    text-align: center;
    color: #595959;
}

ul.searchCustomersContainer li.customer .customerImage {
    background-color: #f8f8f8!important;
}

 ul.customerProfile li.customer .customerImage,ul.searchCustomersContainer li.addNewCustomer .customerImage, ul.searchCustomersContainer li.customer .customerImage {
    width: 105px;
    height: 105px;
    display: block;
    position: relative;
    float: left;
    overflow: hidden;
    background-position: center center!important;
    background-size: cover!important;
    color: #5c626a;
    font-size: 32px;
    line-height: 105px;
    font-weight: 400;
    -webkit-font-smoothing: subpixel-antialiased;
    border-radius: 50%;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);


}

ul.searchCustomersContainer, li.customer {
    width: 105px;
    height: auto;
    padding: 0;
    margin: 0 12px 10px 12px;
    text-align: center;
    color: #595959;

}


 ul.searchCustomersContainer li.customer .checkinIcon.vebsigns{
    background-position: center 0;
}
 ul.customerProfile li.customer .checkinIcon, ul.searchCustomersContainer li.addNewCustomer .checkinIcon, ul.searchCustomersContainer li.customer .checkinIcon {
    width: 40px;
    height: 40px;
    position: absolute;
    bottom: -20px;
    left: 50%;
    margin-left: -20px;
    border: solid 1px #d7dce1;
    background: url(http://localhost/vpos.com/assets/images/plainlogo.jpg) no-repeat;
    background-size: 19px;
    background-color: #fff;
    z-index: 2;
    border-radius: 50%;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);
}

ul.customerProfile li.customer, ul.searchCustomersContainer li.addNewCustomer, ul.searchCustomersContainer li.customer {
    width: 105px;
    height: auto;
    padding: 0;
    margin: 0 12px 10px 12px;
    text-align: center;
    color: #595959;
}


ul.customerProfile li.customer, ul.searchCustomersContainer li.customer .customerName {
    width: 100%;
    height: 40px;
    display: block;
    float: left;
    line-height: 20px;
    font-size: 14px;
    margin-top: 10px;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;

}

.sectionHeadertop{
    width: auto;
    height: 60px;
    position: absolute;
    left: 0;
    top: 56px;
    right: 300px;
    z-index: 11;
}

.HeaderSearch {
    top: 0;
    position: fixed;
}



.sectionHeader {
    width: 100%;
    height: 56px;
    float: left;
    display: table;
    padding: 0 50px;
    background: #f8f8f8;
    text-align: center;
    position: relative;
    z-index: 6;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);
}


.coustomer_Panel{
    position: absolute;
    top: 65px;
}

.list_Coustomer{
    list-style: none;
    float: left;
     padding:0px;

}

.sectionHeadertop .sectionHeader {
    padding: 8px 56px 8px 10px;
    background:#f8f8f8;
}

   input.searchfield {
    height: 40px;
    background: #fff;
    border: solid 1px #d7dce1;
    padding: 0 8px 0 8px;
    color: #464a51!important;
    font-size: 15px;
    font-weight: 200;
    border-radius: 4px;
    -webkit-font-smoothing: antialiased;
}

.inputSearch{
    width: 100%;
    height: 48px;
    max-height: 96px;
    font-family: Akkurat-Regular,Helvetica,Arial,sans-serif;
    font-size: 15px;
    line-height: 20px;
    color: #464a51!important;
    font-weight: 200;
    background: #fff;
    padding: 0 10px;
    border: solid 1px #d7dce1;
    box-shadow: none;
    outline: 0;
    resize: none;
    -webkit-appearance: none;
    -webkit-font-smoothing: subpixel-antialiased;
    border-radius: 0;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);
}

.backbCoustomer {
    content: "\f3d2";
    font-family: Ionicons;
    position: absolute;
    top: 0;
    right: 20px;
    font-size: 38px;
    line-height: 54px;
    text-align: right;
    color: #464a51;
}

.customerOptions {
    padding-right: 15px;
}

.customerProfileImage {
    float: left;
    margin-right: 5px;
}


 ul.customerProfile li.customer .customer{
    margin: 0 9px 10px 9px;
}


.customerEditProfile {
    overflow: hidden;
    float: none;
}

.labelCoustomer {
    font-size: 14px;
    font-weight: 700;
    display: block;
    margin: 0 0 8px 0;
}

.textboxCoustomer {
    width: 93%;
    height: 40px;
    background: #fff;
    border: solid 1px #d7dce1;
    padding: 0 8px 0 8px;
    color: #464a51!important;
    font-size: 15px;
    font-weight: 200;
    -webkit-font-smoothing: antialiased;
    margin-bottom: 10px;
}


.buttonMoredetails{
    width: auto;
    padding: 0;
    color: #2e61de;
    float: left;
    background: 0 0;
    font-weight: 700;
    width: auto;
    min-width: 100px;
    height: 48px;
    display: inline-block;
    cursor: pointer;
    border: none;
    font-family: Akkurat-Regular,Helvetica,Arial,sans-serif;
    font-size: 15px;
    text-align: center;
    line-height: 48px;
    outline: 0;
    border-radius: 3px;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);
    transition: all 0 ease-out 0s;
}


.coustomerText {
    padding: 24px;
    margin: 0px;
    border-radius: 4px;
    cursor: pointer;
    border: 2px solid rgb(215, 220, 225);
    background-color: rgb(255, 255, 255);
    width: 93%;
}


.coustomerAccepts{
    padding: 14px 14px 6px;
    margin-bottom: 14px;
    box-sizing: inherit;
    display: grid;
    grid-template-columns: minmax(72px, 1fr) auto;
    -webkit-box-pack: justify;
    justify-content: space-between;
    width: 100%;
    color: rgb(70, 74, 81);
}

.coustomerAcceptsLable {
    display: inline-flex;
    position: relative;
    padding-left: 24px;
    cursor: pointer;
    min-width: 24px;
    min-height: 24px;
   
    font-size: 14px;
    font-weight: 700;
    display: block;
    margin: 0 0 8px 0;
}

.coustomerAccepttext {
    font: 500 15px / 24px Akkurat-Regular, Helvetica, Arial, sans-serif;
    margin-left: 16px;
    display: inline-block;
}


.inputCoustomerAccept {
    width: 100%;
    height: 48px;
    max-height: 96px;
    font-family: Akkurat-Regular,Helvetica,Arial,sans-serif;
    font-size: 15px;
    line-height: 20px;
    color: #464a51!important;
    font-weight: 200;
    background: #fff;
    padding: 0 10px;
    border: solid 1px #d7dce1;
    box-shadow: none;
    outline: 0;
    resize: none;
    -webkit-appearance: none;
    -webkit-font-smoothing: subpixel-antialiased;
    border-radius: 0;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);

    position: absolute;
    opacity: 0;
    cursor: pointer;
    width: 0px;
    height: 0px;
}

.checkmark {
    position: absolute;
    top: 0px;
    left: 0px;
    height: 24px;
    width: 24px;
    border-radius: 2px;
    padding: 2px;
    border: 1px solid rgb(92, 98, 106);
    background-color: rgb(242, 245, 248);
    box-sizing: inherit;
}

.inputCoustomerAccept[type="checkbox"]:after {
    content: '';
    display: block;
    width: 1.3rem !important;
    height: 1.2rem !important;
    margin-top: 0px;
    margin-left: -1px;
    border: 1px solid transparent;
    border-radius: 3px;
    background: #d4d7da;
    line-height: 1.3;
}


.checkmark .icon {
    display: none;
    box-sizing: inherit;
        margin: 0;
    padding: 0;
    -webkit-tap-highlight-color: transparent;
    background-color: rgb(242, 245, 248);
        box-sizing: inherit;
}


/when click on checkbox add border 

.borderCheckbox {
    padding: 24px;
    margin: 0px;
    border-radius: 4px;
    cursor: pointer;
    border: 2px solid rgb(70, 74, 81);
    background-color: rgb(255, 255, 255);
}

.scrollerCoustomer {
    width: 102%;
    height: 85%;
    padding: 0px 0 20px 0;
    box-sizing: border-box;
    overflow-y: auto;
    overflow-x: hidden;
    position: absolute;
    z-index: 111;
}

.backbtn-iconCoustomer {
    line-height: 40px;
    font-size: 28px;
    color: #464a51;
}

.CoustomerBack {
    position: absolute;
    left: 16px;
    display: flex;
    overflow: auto;
}

.CustomerName{
    font-size: 20px;
    text-align: center;
    background: #f8f8f8;
    color: #000!important;
    opacity: 1;
    border: none;
}

.CustomerName .topname {
    font-size: 20px;
    text-align: center;
    background: #f8f8f8;
    color: #000!important;
    opacity: 1;
    border: none;
}
.btnUnlink_Customer{
    position: absolute;
    top: 8px;
    right: 15px;
    height: 40px;
    line-height: 40px;
    z-index: 10;
    width: auto;
    padding-left: 45px;
    color: #c40000;
    background-position: 0 -90px;
}

.productModifierIcon {
    width: 20px;
    height: 20px;
    position: absolute;
    display: block;
    right: 16px;
    top: 1px;
    text-align: center;
    line-height: 20px;
    font-size: 10px;
    font-weight: 400;
    color: #464a51;
    background: #3a7afe;
    text-transform: uppercase;
    z-index: 1;
    margin: 0;
    padding: 0;
    -webkit-tap-highlight-color: transparent;
}


.fixed_containbox_modifier
    {
        top: 76px !important;
    }

    
    .deznav_modifer_panel{
        width:170px!important;
    }


.Modifier_Container{
    position: absolute;
    left: 6%;
}

/*modifier in left cart with product*/
  .productOptions {
    width: 95%;
    float: left;
    clear: both;
}


.option {
    width: 100%;
    float: left;
    margin: 0;
    font-size: 14px;
    padding: 5px;
}


.remove {
    width: 30px;
    height:0px;
    line-height: 36px;
    font-size: 16px;
    color: grey;
    margin: 0;
}


.box {
    width: 18px;
    height: 18px;
    display: block;
    background: #d7dce1;
    text-align: center;
    line-height: 18px;
    font-size: 11px;
    margin-top: 8px;
    margin: 0;
    padding: 0;
    -webkit-tap-highlight-color: transparent;
}

 .unitPrice {
    width: 85px;
    float: right;
    text-align: right;
    color: #464a51;
    padding-top: 5px;
    font-size: 15px;
    margin-top: 0;
}

.name1 {
    width: auto;
    overflow: hidden;
    display: block;
    padding: 5px 0px 0px 0;
    text-align: center;
}


/*for modifier in cart*/


.modifier_amt {
    position: absolute;
    top: 40px;
    left: 50%;
    font-size: 13px;
    font-weight: 200;
}


.modifier_name {
    position: absolute;
    top: 35px;
    left: 5px;
    font-size: 13px;
    font-weight: 200;
}

.modifiers_cart{
    list-style: none;
    padding: 5px 0 0 0;
    clear: both;
}
    
.modifiers_cart li {
    list-style: none;
    padding: 0 0 5px 0;
}

 .modifiers_cart  li .cart_total {
    width: auto;
    font-size: 12px;
    color: #464a51;
    font-weight: 400!important;
    padding-top: 4px;
    padding-left: 111px;
}

.cart_total {
    width: auto;
    min-width: 64px;
    float: right;
    text-align: right;
    font-size: 15px;
    color: #464a51;
}

.modifiers_cart  li .cart_name {
    float: none;
    overflow: hidden;
    display: inline;
    padding: 0 0 5px;
    font-size: 13px;
    font-weight: 400;
}


.cart_name {
    float: none;
    overflow: hidden;
    display: inline;
    padding: 0 0 5px;
}



.discount_price{
    display: flex;
    align-items: center;
    vertical-align: baseline;
    height: 10% !important;
    position: fixed;
    bottom: 100px;
}

/*discount numpad */

.Discount_numpad {
    position: absolute;
    z-index: 11111111111;
}


.NUMPAD_TITEL {
    width: 100%;
    height: 55px;
    padding: 5px 5px 5px 15px;
    position: relative;
    font-size: 20px;
    line-height: 44px;
    font-weight: 200;
    box-sizing: border-box;
    background: rgb(255, 255, 255);
    color: rgb(89, 89, 89);
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    border-top: 1px solid rgb(230, 230, 230);
}

.Numpad_textbox {
    width: 100%;
    height: 70px;
    margin: 0px;
    padding: 0px 10px;
    border-right: none;
    border-left: none;
    border-image: initial;
    background: rgb(255, 255, 255);
    font-size: 50px;
    line-height: 70px;
    color: rgb(89, 89, 89);
    text-align: right;
    overflow: hidden;
    font-weight: 200;
    border-bottom: 1px solid rgb(230, 230, 230);
    border-top: 1px solid rgb(230, 230, 230);
    box-sizing: border-box;
    white-space: nowrap;
}

.jkvqAy {
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    position: fixed;
    display: flex;
    background: rgba(0, 0, 0, 0.5);
    z-index: 1001;
}

.dRVTQ {
    position: absolute;
    overflow: hidden !important;
    right: 310px;
    top: 75px;
    background: rgb(255, 255, 255);
    outline: 0px;
    height: 85%;
    width: 372px;
    margin: auto;
    margin: 0;
    padding: 0;
    -webkit-tap-highlight-color: transparent;
}

.cxeATG {
    display: flex;
    flex-direction: column;
    background: rgb(230, 230, 230);
    width: auto;
    min-height: 95px;
    height: auto;
        margin: 0;
    padding: 0;
    -webkit-tap-highlight-color: transparent;
}


.Numpad_Row {
    width: 100%;
    display: flex;
    /* flex-direction: row; */
    margin: 1px;
    padding: 1px;
    -webkit-tap-highlight-color: transparent;
}

.Numpad_Boutton {
    display: block;
    font-weight: 200;
    font-size: 32px;
    line-height: 80px;
    text-align: center;
    cursor: pointer;
    width: 50%;
    height: 83px;
    color: rgb(89, 89, 89);
    background: rgb(248, 248, 248);
    margin: 0px 1px 1px 0px;
}

.backbtDiscount {
    width: 100%;
    height: 100%;
    content: "\f3d2";
    font-family: Ionicons;
    position: absolute;
    top: 0;
    right: 14px;
    font-size: 41px;
    line-height: 54px;
    text-align: right;
    color: #464a51;
}


/*pos orders*/
.posorders{
    width: 100%;
    height: 100%;
    min-height: 100%;
    position: relative;
    overflow: hidden;
    background: #fff;
    right: 0;
    transition: all .2s ease-out 0s;
    z-index: 11111;
}

.orderback {
    position: absolute;
    left: 14px;
    display: flex;
    overflow: auto;
}

.Newordercard {
    height: 115px!important;
    left: 305px;
    position: absolute;
    top: 24px;
    width: 225px;
    max-height: 489px;
    z-index: 11111;
    border: 1px solid rgb(163, 171, 179);
    border-radius: 5px;
    background-color: rgb(255, 255, 255);
}

.New_order_card {
    height: 115px!important;
    left: 35px;
    position: absolute;
    top: 135px;
    width: 225px;
    max-height: 489px;
    z-index: 11111;
    border: 1px solid rgb(163, 171, 179);
    border-radius: 5px;
    background-color: rgb(255, 255, 255);
}


.exist_order{
    height: inherit;
    box-sizing: border-box;
    cursor: pointer;
    color: rgb(70, 74, 81);
    position: relative;
    border: 1px solid rgb(215, 220, 225);
    padding: 8px;
    border-radius: 4px;
}


.font_order {
    font: 700 18px / 24px Akkurat-Regular, Helvetica, Arial, sans-serif;
    color: rgb(70, 74, 81);
    margin: 0px;
    padding: 0px;
    text-align: left;
}

.orderTab {
    border-right: solid 1px #a3abb3;
    border-radius: 3px;
    background: #fff;
    color: #464a51;
    font-weight: 700;
}

.orderReceiptTotalpos{
    width: auto;
    height: 75px;
    position: absolute;
    left: 0;
    bottom: 0;
    right: 0;
    padding: 0 30px;
    z-index: 1;
    background: #fff;
    border-top: solid 1px #d7dce1;
    color: #464a51;
    line-height: 75px;
    text-align: right;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);
}
.panelNoteBlocker {
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    position: fixed;
    background: rgba(0,0,0,.15);
    display: none;
}
</style> 
<!-- for pos exiting orders  -->
<div class="posorders hidden"> 
  <div class="posloginheader"> 
   <!--   <div class="invalidpinpos hidden" id="invalidpinposid" style="opacity: 0.5;">please enter valid pin..... <div class="invalidpinback">&times;</div></div> -->
    <div class="navigationHeader">  
        <div class="mainMenuIconWrapper">
         <div id="logoMenu" class="navigationIcon">
            <span style=" position: absolute; top: 0;"></span>
                 <span style="position: absolute; top: 5;"></span>
                    <span style=" position: absolute; top: 10;"></span>
                     <span style="position: absolute; top: 15;"></span>
                        <a class="companylogo" href="#">   
                        <label> companyname</label>
                    </a>
               </div> 
            </div>
       </div>


            <ul class="orderlogin">
              <li class="ordersMenu">
                <a class="menuOrders">
                   <div class="animationWrapper menuOrders">Orders
                      <span class="orderCount">0</span>
                    </div>
                  </a>
               </li>
            </ul>
</div>

<div class="sectionHeader" style="background: #ffffff;">
    <div class="orderbutton">
      <div class="orderback"><i class="fa backbtn-icon2"></i></div>
        </div>
          <div class="innerWrapper">
            <ul class="tabs"> 
               <li id="btnOpenOrders" class="orderTab" style="background: #ffffff;">
                <a class="btnTitle">Orders</a>
              <span class="orderCount">0</span>
           </li>
      </ul>
    </div>
</div>


<div class="user_list_scroll" style="background: #f8f8f8;">   
<div class="allorders">
    <div class="col-md-2 Ord">
     <a class="New_Order">
     <div class="widget-stat New_order_card ">
        <div class="card-body p-4">
          <div class="media ai-icon" >
            <span class="mr-3"style="background:#ffffff;border: none;font-size:40px;font-weight:lighter;">+</span>
            <div class="media-body">
              <span class="mb-1 font_order">New Order</span>
            </div>
          </div>
        </div>
      </div>
     </a>
    </div>


<div class="ExistingOrders" id="ExistingOrders">

<!-- <div class="row">
   <div class="col-md-2">
      <div class="widget-stat  Newordercard exist_order">
        <div class="card-body p-4">
            <span class="font_order">SP-1</span>
          </div>
     </div>
   </div>
</div> -->

</div>





</div>
</div> 


<div class="orderReceiptTotalpos">
       <div class="totalAmountpos orderReceiptTotalpos">
             <div class="totalLabelpos lastsale">Last Sale</div>
              <span id="totalAmountpos1">{{$currency_data->currency_symbol}}2,300.00</span>
        </div>
 </div>

</div>


<!-- numpad discount -->
<div class="Discount_numpad hidden"> 
<div tabindex="0" class=" jkvqAy">
<div role="dialog" tabindex="0" class="dRVTQ"> 
  <div class="NUMPAD_TITEL">
  <span class="ui-dialog-title">Adjust Amount</span>

  <div class="backbtDiscount">    
        <span class="back_num">×</span>     
  </div>

  </div>
  
  <div class="">
        <input  class="Numpad_textbox" id="code" value="%" autocomplete="">
  </div>

  <div class="Numpad_Row">
    
    <button type="button" class=" Numpad_Boutton" onclick="document.getElementById('code').value=document.getElementById('code').value +'%';">%</button>
        <button type="button" class="Numpad_Boutton" onclick="document.getElementById('code').value=document.getElementById('code').value + '-';">-</button>
    <button type="button" class="Numpad_Boutton" onclick="document.getElementById('code').value=document.getElementById('code').value + '+';">+</button>
    </div>
 
  <div class=" Numpad_Row ">
    
        <button type="button" class="Numpad_Boutton" onclick="document.getElementById('code').value=document.getElementById('code').value + '1';+'%'">1</button>
        <button type="button" class="Numpad_Boutton" onclick="document.getElementById('code').value=document.getElementById('code').value + '2';">2</button>
        <button type="button" class="Numpad_Boutton" onclick="document.getElementById('code').value=document.getElementById('code').value + '3';">3</button>
    </div>

    <div class=" Numpad_Row ">

        <button type="button" class="Numpad_Boutton" onclick="document.getElementById('code').value=document.getElementById('code').value + '4';">4</button>
        <button type="button" class="Numpad_Boutton" onclick="document.getElementById('code').value=document.getElementById('code').value + '5';">5</button>
        <button type="button" class="Numpad_Boutton" onclick="document.getElementById('code').value=document.getElementById('code').value + '6';">6</button>

    </div>


    <div class=" Numpad_Row ">

        <button type="button" class="Numpad_Boutton" onclick="document.getElementById('code').value=document.getElementById('code').value + '7';">7</button>
        <button type="button" class="Numpad_Boutton" onclick="document.getElementById('code').value=document.getElementById('code').value + '8';">8</button>
        <button type="button" class="Numpad_Boutton" onclick="document.getElementById('code').value=document.getElementById('code').value + '9';">9</button>
    </div>
    
    

    <div class="Numpad_Row">

        <button type="button" style="background:rgb(0, 0, 0, 0.5);color: rgb(255 255 255);" class="Numpad_Boutton" onclick="document.getElementById('code').value=document.getElementById('code').value.slice(0, -1);">&times;</button>

        <button type="button" class="Numpad_Boutton" onclick="document.getElementById('code').value=document.getElementById('code').value + '0';">0</button>
        
        <button type="button" style="background: rgb(24, 68, 204);color: rgb(255 255 255);" class="Numpad_Boutton Numpadok" onclick="Discount()">OK</button>
  </div>

</div>
</div>
</div>





<!-- FOR  ADD COUSTOMER IN POS ADD COUSTOMER  -->
<div id="linkOrderScroll" class="linkOrders  linkOrderCustomer  hidden " style="display: block; visibility: visible;">

<div class="sectionHeadertop HeaderSearch" style="display: block;">
<div class="sectionHeader ">


<!-- <div class="button btnIcon btnBack" id="btnCancelCustomerLinkOrder">
 <i class="ion ion-ios-close-empty"></i></div> -->


 <div class="CoustomerBack hidden">
    <i class="fa backbtn-iconCoustomer"></i>
</div>

<div class="bckCoustomer">
 <div class="backbCoustomer">    
        <span class="backCoustomer ">×</span>     
 </div>
</div>


<div class="searchCustomersKeyword">

                <input class=" searchfield inputSearch " id="txtCustomerKeyword" placeholder="Search and connect a customer to this order" title="Search and connect a customer to this order">


                <!-- <div class="button btnIcon btnSearching" id="btnSearching" style="display:none;"></div> -->
                

                <!-- <div class="button btnIcon btnClear btnClearCustomerSearch" id="btnClearCustomerSearch" style="display:none;">Clear</div> -->
             
             
                <div class="btnUnlink_Customer hidden">
                    <span class="mobileHide">Unlink</span>
                </div>
            </div>
        </div>
    </div>






<div class="coustomer_section coustomer_Panel scrollerCoustomer " >
<ul class="list searchCustomersContainer  "style="float: left; display: block;">

                <li class="addNewCustomer">
                    <div class="customerImage"></div>
                    <div class="customerName">New Customer</div>
                </li>

</ul>

<div class="customersearch" id="customersearch">
    



</div>
<div class="customerOptions">          
<div class="customerProfileImage">


                    <ul  class="list customerProfile hidden" style="padding:0px">
                        <li class="customer" style="height: 100% !important;width: 85%;">
                            <div class="customerImage"style="background:url(http://localhost/vpos.com/assets/images/plainlogo.jpg)">                             
                            </div>
                        </li>
                    </ul>




                  <!--   <div class="clear"></div>

                    <div id="profileBoxPoints" class="profileBoxPoints" style="display:none">
                        <div id="profileBoxPointsValue" class="profileBoxPointsValue"></div>
       
                        <span id="profileBoxPointsLabel">Points</span>
                    </div> -->



</div>        
</div>

<div class="customerEditProfile hidden">
                        <label class="labelCoustomer">Name</label>
                        <input type="text" id="txtCustomerName" class="inputSearch textboxCoustomer" title="Name" tabindex="-1" maxlength="100" placeholder="Name" autocorrect="off" customerid="">   

                        <label class="labelCoustomer">Email</label>
                        <input type="text" id="txtCustomerEmail" class="inputSearch textboxCoustomer" title="Email" placeholder="Email" tabindex="-1" maxlength="255">

                        <label class="labelCoustomer">Phone</label>
                        <input type="tel" id="txtCustomerPhone" class="inputSearch textboxCoustomer" title="Phone" placeholder="Phone" tabindex="-1" maxlength="100">


<div  class="customerExtraFields hidden">
                        <label class="labelCoustomer">Address</label>
                        <input type="text" id="txtCustomerStreetAddress" class="inputSearch textboxCoustomer" title="Street Address" placeholder="Address" tabindex="-1" maxlength="255" autocorrect="off">

                        <!-- <label class="labelCoustomer">Suburb</label>
                        <input type="text" id="txtCustomerSuburb" class="inputSearch textboxCoustomer" title="City" placeholder="Suburb" tabindex="-1" maxlength="255" autocorrect="off">
 -->
                       <div style="display:none;">
                      <input type="text" id="txtCustomerState" class="inputSearch textboxCoustomer" title="State" placeholder="State" tabindex="-1" maxlength="255" autocorrect="off">
                        <input type="hidden" id="txtCustomerHiddenDummy">
                        </div>

                        <label class="labelCoustomer">Postcode</label>
                        <input type="tel" id="txtCustomerPostcode" class="inputSearch textboxCoustomer" title="Post Code" placeholder="Postcode/Zipcode" tabindex="-1" maxlength="10" autocorrect="off">

                        <label class="labelCoustomer">Tags</label>
                        <input type="text" id="txtCustomertags" class=" inputSearch textboxCoustomer" autocomplete="off" placeholder="Add tags by typing a tag then enter, return or comma">
</div >

<div class="MoreLess">
<div class="buttonMoredetails">More Details</div>
<div class="buttonMoredetails buttonLessdetails hidden">Less Details</div>
</div>

<div class="clear" style="clear: both;"></div>
<div id="acceptsMarketingReactContainer">
    <section>
      <div class="" style="box-sizing: border-box;">
      <div class="coustomerText">
     <div class="coustomerAccepts">
     <label width="24" height="24" for="inputAcceptsMarketing" class="coustomerAcceptsLable">
     <span class="coustomerAccepttext">Customer accepts comms and marketing material</span>

     <!-- <input id="inputAcceptsMarketing" class="inputCoustomerAccept"  type="checkbox" data-chaminputid="checkboxInput" data-chaminputstate="ch"> -->
     <span class="checkmark">
    <input id="inputAcceptsMarketing" type="checkbox" data-chaminputid="checkboxInput" data-chaminputstate="checked">
     <div class="icon">
    <span color="" width="24" height="24" style="display: inline-flex;" class="IconStyle-sc-1lr1knu-0 iFJwdK">
    <svg aria-label="tick" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="none" stroke="#757575" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M3 9l3 3 7-8">
    </path>
    </svg>
    </span>

    </div>
    </span>
    </label>


    </div>
    </div>
    </div>
</section>
</div>
</div>

</div>
</div>







        <!-- for merg tables  -->
        <div class="tableposmerg hidden">
        <div class="posloginheader"> 
        <div class="navigationHeader1">  
        <div class="mainMenuIconWrapper">

        <div id="logoMenu" class="navigationIcon">
        <span style=" position: absolute; top: 0;"></span>
        <span style="position: absolute; top: 5;"></span>
        <span style=" position: absolute; top: 10;"></span>
        <span style="position: absolute; top: 15;"></span>
        <a class="companylogo" href="#">   
        <label> companyname</label>
        </a>
        </div> 
        </div>
        </div>

        <ul class="orderlogin">
        <li class="ordersMenu">
        <a class="menuOrders1">
        <div class="animationWrapper menuOrders">CANCEL MERGING
       <!--  <span class="orderCount">0</span> -->
        </div>
        </a>
        </li>
        </ul>


        </div>

        <div class="sectionHeader">
        <div class="userbutton hidden">
        <div class="backbtnpos">Users</div>
        </div>

            @if($is_restaurant==1)
            <div class="innerWrapper">
            <ul class="tabs"> 
           <!--<li class="singleTab1 hidden" style="background-color: white;"> Select Table</li> -->
            <li class="singleTab1 mergnowtable" style="background-color: white;border-radius: 4px;">Merg Now table</li>
            </ul>
            </div>
            @endif   

            @if($is_restaurant==0)
            <div class="innerWrapper">
            <ul class="tabs"> 
            <!-- <li class="singleTab1 hidden" style="background-color: white;"> Select Counter</li> -->
            <li class="singleTab1 mergnowtable" style="background-color: white;">Merg Now  Counter</li>
            </ul>
            </div>
            @endif   

<div class="tablemain ">
<div class="content-body">
<div class="container-fluid scroll-tablepos" id="tableposmerg">
   
<!--      <div class="col-xl-2">
           <div class="row">
                 
                 <div class="line1"></div>
                 <div class="line2"></div>
                 <div class="line3"></div>
                 <div class="line4"></div>

                 <div class="circletable " id="circletable">  
                 <div class="circlemiddel">
                 <span class="tablespan">1</span>
                 </div>
                 </div>
</div>
</div>
</div> -->

</div>


</div>
</div>

</div>
  <div class="userReceiptTotalpostable">
    <div style="position: absolute;left: 0;bottom: 25; font-size: 20px; margin-top: -10px;">
       <label style="color: white;">SERVERS</label>
       </div>
    </div>
    
</div>



<!-- for pos tables   -->
<div class="postable hidden">
  <div class="posloginheader"> 
    <div class="navigationHeader1" style="z-index: 11111111111;">  
      <div class="mainMenuIconWrapper">
        <div id="logoMenu" class="navigationIcon">
                        <span style=" position: absolute; top: 0;"></span>
                        <span style="position: absolute; top: 5;"></span>
                        <span style=" position: absolute; top: 10;"></span>
                        <span style="position: absolute; top: 15;"></span>
                        <a class="companylogo" href="#">   
                         <label> companyname</label>
                        </a>
        </div> 
        </div>
       </div>

    <ul class="orderlogin">
     <li class="ordersMenu">
    <a class="menuOrders">
  <div class="animationWrapper menuOrders">Orders
  <span class="orderCount">0</span>
</div>
</a>
</li>
</ul>
      

  </div>

  <div class="sectionHeader">
    <div class="userbutton hidden">
    <div class="backbtnpos">Users</div>
  </div>


            @if($is_restaurant==1)
            <div class="innerWrapper">
            <ul class="tabs"> 
            <li class="singleTab1" style="background-color: white;"> Select Table</li>
            <li class="singleTab1 singleTab11" style="background-color: white;border-radius: 4px;">Merg Table </li>
            </ul>
            </div>

            @endif   


            @if($is_restaurant==0)
            <div class="innerWrapper">
            <ul class="tabs"> 
            <li class="singleTab1" style="background-color: white;"> Select Counter</li>
            <li class="singleTab1" style="background-color: white;">Merg Counter</li>
            </ul>
            </div>
            @endif   

<div class="tablemain ">
<div class="content-body">
<div class="container-fluid scroll-tablepos"id="tablepos">
   
<!--      <div class="col-xl-2">
           <div class="row">
                 
                 <div class="line1"></div>
                 <div class="line2"></div>
                 <div class="line3"></div>
                 <div class="line4"></div>

                 <div class="circletable " id="circletable">  
                 <div class="circlemiddel">
                 <span class="tablespan">1</span>
                 </div>
                 </div>
</div>
</div>
</div> -->

</div>


</div>
</div>

</div>
  <div class="userReceiptTotalpostable">
    <div style="position: absolute;left: 0;bottom: 25; font-size: 20px; margin-top: -10px;">
       <label style="color: white;">SERVERS</label>
       </div>
    </div>
    
</div>


<!-- code for num pad in pos user verification -->
<div class="posnumpad  hidden">
<div class="container containerposverify ">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 phone">
            <div class="row1">
                <div class="">
                <input type="text"autocomplete="off"style=" -webkit-text-security: disc;" name="name" onfocus="this.value=''" id="telNumber" class= "form-controlpos  tel" maxlength="4" value="" />
                </div>
                <div class="col-md-12">
                    <div class="num-pad">
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                1
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                2 <span class="small">
                                    <p>
                                        ABC</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                3 <span class="small">
                                    <p>
                                        DEF</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                4 <span class="small">
                                    <p>
                                        GHI</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                5 <span class="small">
                                    <p>
                                        JKL</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                6 <span class="small">
                                    <p>
                                        MNO</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                7 <span class="small">
                                    <p>
                                        PQRS</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                8 <span class="small">
                                    <p>
                                        TUV</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                9 <span class="small">
                                    <p>
                                        WXYZ</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                *
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                0 <span class="small">
                                    <p>
                                        +</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                #
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="clearfix">
                    </div>
                     <!--    <a href="http://www.jquery2dotnet.com" class="btn btn-success btn-block flatbtn">CALL</a> -->
                </div>
            </div>
           

           

            <p class="defaultPin mobileHide" role="link">Default Pin:{{$user=auth::user()->pin}} 
              <a href="admin/user/update/{{$user=auth::user()->id}}"style="color: blue;"><span class="orange" style="font-weight: bold;">Update your PIN</span> </a></p>
        </div>
    </div>
  </div>
</div>


<!-- for user login into pos  -->
<div class="poslogin">
  <div class="posloginheader"> 
    <div class="invalidpinpos hidden" id="invalidpinposid" style="opacity: 0.5;">please enter valid pin..... <div class="invalidpinback">&times;</div></div>
    <div class="navigationHeader">  
      <div class="mainMenuIconWrapper">
        <div id="logoMenu" class="navigationIcon">
                        <span style=" position: absolute; top: 0;"></span>
                        <span style="position: absolute; top: 5;"></span>
                        <span style=" position: absolute; top: 10;"></span>
                        <span style="position: absolute; top: 15;"></span>
                        <a class="companylogo" href="#">   
                         <label> companyname</label>
                        </a>
        </div> 
        </div>
       </div>

    <ul class="orderlogin">
     <li class="ordersMenu">
    <a class="menuOrders">
  <div class="animationWrapper menuOrders">Orders
  <span class="orderCount">0</span>
</div>
</a>
</li>
</ul>
      

  </div>

  <div class="sectionHeader">
    <div class="userbutton hidden">
    <div class="posloginback"><i class="fa backbtn-icon2"></i></div>
    <div class="backbtnpos">Users</div>
  </div>

    <div class="innerWrapper">
      <ul class="tabs"> 
       <li class="singleTab" style="background-color: white;">Active Users</li>
       <li class="singleTab1 hidden" style="width:370px; border: none;">Enter Pin</li>
      </ul>
    </div>


  </div>
    <div class="user_list_scroll" style="padding-top: 10px">   
      <ul class="posuser_info list user">
        <li class="userpos">
      <div class="userImagepos">{{Auth::user()->name}}</div>
      <div class="userNamepos">
      <span class="userNamepos">{{Auth::user()->name}}</span>
      </div>
        </li>
      </ul>
    </div>
    <div class="userReceiptTotalpos">
       <div class="totalAmountpos userReceiptTotalpos">
        <div class="totalLabelpos lastsale">Last Sale</div>
           <span id="totalAmountpos1">{{$currency_data->currency_symbol}}2,300.00</span>
        </div>
         
    </div>
</div>



<!-- for split payment -->
<div class="splitcalci">
<div class="split_payment hidden">
 <div class="modifyItemContentscroll">
  <ul class="tabs_split">
      <li  class="active styl split_product_style">Split by Sprice</li>
      <li class="splitbyproduct hngeFp">Split by Product</li>
  </ul>
<div class="topay">
  <h1>To Pay</h1>
<div class="divsplit_topay hidden" id="checkout_product"></div>
<div class="dic_splitprodctwise hidden">
Select products from left panel
</div>
<div class="product_checkout hidden">
   Checkout
</div>
</div>


<div class="split_div"> 
     <button type="submit" class="btn-primary button_split">Split</button> 
</div>
<div class="split_textbox_boutton price_split" id="split_textbox_boutton1">
  <div class="form-group">
  <input type="text" class="textfield_split">
  <button type="submit" class="btn btn-primary btn_chekcout">Checkout</button>
 </div>
</div>
</div>
</div>
</div>

<!-- FOE WHEN WE CLICK ON MORE PAYMENT OPTION TRANSACTION REC -->
<div class="checkout_emailrecipt hidden">
<div><i class="fa fa-check-circle-o" style="font-size:90px"></i></div>
<div><h1>Transaction Successful!</h1></div>
<div>
<input type="text" class="textfield textbox_email" id="txtEmailOnPanelReceipt" placeholder="Email">
  <button type="submit" class="btn btn-primary">Send</button>
</div>
<div>
    <button type="submit" class="btn btn-primary print_checkout">print</button>
    <button type="submit" class=" btn btn-primary nothanks_checkout">No Thanks</button>
</div>
</div>



<!-- adjustamount section started-->
<div class="Calculator">
<div class="calci hidden" style="z-index: 11111111;">  <!--  -->
  <div id="calc" class="text-center calc"> 
     <span class="changeprice " style="font-weight:600">Change price</span>
       <span class="changeprice11 hidden" style="font-weight:600">enter your pin</span>  
     <span class="adjustprice hidden" style="font-weight:600">Adjust price</span>  
      <span class="checkoutcash hidden" style="font-weight:600">Cash</span> 
    <div id="display" class="bck">
      <i class="backbtncalci">&times;</i> 
      <i class="adjustpriceback hidden">&times;</i> 
    <div style="height: 50px;"  id="result" class="reslt"> <p id="pospin" class="res"> </p></div>
   <!--  <div id="previous"><p>0</p></div> -->
    </div>
      <div id="keyboard">

      <div class="row_calc">
        <button class="btn btn-info buttoncalci" value="7">7</button>
        <button class="btn btn-info buttoncalci" value="8">8</button>
        <button class="btn btn-info buttoncalci" value="9">9</button>
        <button class="btn btn-danger buttoncalci" value="ac">AC</button>
        <button class="btn btn-danger buttoncalci" value="ce">CE</button>
      </div>

      <div class="row_calc">
        <button class="btn btn-info buttoncalci" value="4">4</button>
        <button class="btn btn-info buttoncalci" value="5">5</button>
        <button class="btn btn-info buttoncalci" value="6">6</button>
        <button class="btn btn-warning buttoncalci" value="/">/</button>
        <button class="btn btn-warning buttoncalci" value="*">*</button>
      </div>

      <div class="row_calc">

        <button class="btn btn-info  buttoncalci" value="1">1</button>
        <button class="btn btn-info  buttoncalci" value="2">2</button>
        <button class="btn btn-info  buttoncalci" value="3">3</button>
        <button class="btn btn-warning  buttoncalci" value="+">+</button>
       
         <button class="btn btn-warning  buttoncalci" value="-">-</button>
      </div>

      <div class="row_calc last-row">
        <button class="btn btn-info btn-zero  buttoncalci" value="0">0</button>

        <button class="btn btn-warning   buttoncalci" value="%">%</button>

         <!-- <button class="invisible" value=""></button> -->
        <button class="btn btn-warning  buttoncalci" value=".">.</button>

         <button class="btn btn-success btn-result buttoncalci buttoncalciok" value="=">OK</button>
        <!-- <button class="invisible" value=""></button> --> 
      </div>
     </div>
</div>

</div>
</div>

<!-- product remove adjustment window -->
 <div class="productcalculation hidden">
  <div class="headersection">
  <div class="titles">
  <h1>Edit:<span class="pname" id="p_tname">aaa</span></h1>
     <div class="backbtnproduct">    
        <span class="backproduct">&times;</span>     
    </div>
   <div class="removebtn">
    <a href="javascript:void(0);" class="remove_cart" style=" color:red;">
        <span class="removeproduct" >Remove</span> 
    </a>    
    </div>
   <input type="hidden" id="custId" name="custId">  
  </div>
  </div>
<div class="modifyItemContent">
 <div class="modifyItemContentscroll">
  <ul class="tabs">
      <li  class="active">General</li>
      <li class="modifier_plain " >Modifiers</li>
      <li class="modifier hidden" >option</li>
  </ul>
</div>
<div class="quantity">
   <div class="quantity_center">
          <div class="quantity_lable">
               Quantity
          </div>
              <div class="input-group element" >
                <span class="input-group-prepend">
                    <button type="button" class="btn-number btnMinus" data-type="minus" data-field="quant[1]">
                        <span class="fa fa-minus"></span>
                    </button>
                </span>
                <input type="text" name="quant[1]" class="input-number textfield numberfield fieldQuantity" id="p_quantity"value="1" min="1" max="100">
                <span class="input-group-append">
                    <button type="button" class=" btn-number btnAdd" data-type="plus" data-field="quant[1]">
                        <span class="fa fa-plus"></span>
                    </button>
                </span>
            </div>
</div>
</div>
        <div class="unitprice">
          <div class="unitPrice_lable">
               UnitPrice
          </div>
          <a href="javascript:void(0);" class="unitprice">
              <div class="textfield numberfield fieldQuantity1 unitpriceccc" id="unitprice"></div>
            </a>
         </div>

          <div class="unitprice">
          <div class="unitPrice_lable">
               Line Total
          </div>
              <div class="textfield numberfield fieldQuantity2 qty_pricee"id="qty_price"></div>
         </div>

          <div class="AdjustAmount_lable">
            <a href="javascript:void(0);" class="Adjustment" style="color:blue">
                Add Adjustment
              </a>
          </div>
           <div class="Note_lable">
               Note    
      <textarea class="notes" id="txtComment" placeholder="Enter a note or description" rows="3" style="overflow: hidden; overflow-wrap: break-word; height: 92px; width: 401px;"></textarea>
     </div>
</div>
</div>


<!-- product part pos home  -->
<div class="producthide">
  <div class="content-body">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 productsinpos" id="product">
        

        </div>
      </div>
    </div>
  </div>
</div>


<!-- for modifiers -->


<div class="modifiersection Modifier_Container">
<div class="content-body">
<div class="container">
<div class="row">
<div class="col-lg-10 modifiersinpos" id="modifier">


<!-- <div class="product-scroll"> 
<div class="row"> 
<div class="col-lg-3">
<a href="javascript:void(0);" style="color:black;" class="modifier_click" id="" value="">
<div class="productModifierIcon">
<span class="large" style=" font-size: 14px;">0</span></div>
<div class="card overflow-hidden ">
<div class="card-body pb-0 px-4 pt-4">
<div class="row">
<div class="col">
<span class="text-success">modifier name </span>
</div>
</div>
</div>
</div>
</a>
</div>
</div>
</div> -->






</div>
</div>
</div>
</div>
</div>








  <div class="chatbox">
    <div class="chatbox-close" id="chat-close"></div>
    <div class="custom-tab-1">
      <ul class="nav nav-tabs">
       <a href="javascript:void(0);"  class="nav-link tab-close back-button">Back</a>
     </ul>
   </div>

   <div class="chatboxlink">
     <ul class="ul1">
      <li><p><a class="Surcharge" href="#">Surcharge</a> </p></li>
      <li><p><a class="Discount" href="#">Discount</a></p></li>
      <li><p><a class="CashDrawer" href="#">Cash Drawer</a></p></li>
      <li><p><a class="EmailReciept" href="#">Email Reciept</a></p></li>
      <li><p><a class="Subtotal" href="#">Subtotal</a></p></li>
      <li><p><a class="red"href="#">Delete Order</a></p></li>
    </ul>
  </div>
</div>

<!-- checkout windwo code  -->
<div class="hidden checkout newcheckout">


  <div class="checkout-close" id="chat-close1"></div> 
  <div class="total" posistion="fixed">
   Total   
 </div>

 <div class="dollar" posistion="fixed" id="productprice-checkout">
  {{$currency_data->currency_symbol}} 0.00
</div>

<div class="container paymentbox">

  <div class="row">

     <div class="col-lg-8">
   <div class="text">
    <span class="text-checkout1">Fast Cash Options </span>
     </div>
     </div>


    <div class="col-lg-7 offset-lg-3">
      <div class="row">  
        <div class="col-xl-3">
          <div class="card overflow-hidden card-checkout">
            <div class="card-body padding-chekout emailrecipet">
             <span class="text-success1 text-checkout" id="checkout_sugettion">{{$currency_data->currency_symbol}}500</span>
           </div>
         </div>
       </div>


       <div class="col-xl-3">
        <div class="card overflow-hidden card-checkout">
          <div class="card-body padding-chekout emailrecipet">
            <span class="text-success1 text-checkout"id="checkout_sugettion2">{{$currency_data->currency_symbol}}500</span>
          </div>
        </div>
      </div>


      <div class="col-xl-3">
        <div class="card overflow-hidden card-checkout">
          <div class="card-body padding-chekout emailrecipet">
           <span class="text-success1 text-checkout"id="checkout_sugettion3">{{$currency_data->currency_symbol}}500</span>
         </div>
       </div>
     </div>


     <div class="col-xl-3">
      <div class="card overflow-hidden card-checkout">
        <div class="card-body padding-chekout emailrecipet">
         <span class="text-success1 text-checkout"id="checkout_sugettion4">{{$currency_data->currency_symbol}}500</span>
       </div>
     </div>
   </div>
 </div>

 <div class="row">  
  <div class="col-lg-4">
    <div class="card overflow-hidden card-checkout">
      <div class="card-body padding-chekout">
       <a href="javascript:void(0);"class="Other_option">
       <span class="text-success1 text-checkout">More cash option</span>
       </a>
     </div>
   </div>
 </div>

 <div class="col-lg-4">
  <div class="card overflow-hidden card-checkout">
    <div class="card-body padding-chekout">
     <a href="javascript:void(0);"class="split">
     <span class="text-success1 text-checkout">Split Payment</span>
     </a> 
   </div>
 </div>    
</div>
<div class="col-lg-8">
  <div class="text1">
    <span class="text-checkout2">Other payment Options</span>
  </div>
</div>
</div>
</div>
</div>
</div>  
<div class="backbtn hidden">
 <i class="fa backbtn-icon">&#xf104;</i>
</div>
</div>


<div class="modal fade bd-example-modal-sm  modal-display" tabindex="-1" role="dialog" aria-hidden="true">

<div id="panelNoteBlocker" class="panelNoteBlocker" style="display: block;"></div>

  <div class="modal-dialog modal-sm">
    <div class="modal-content ">
      <div class="modal-header">

        <div class="marker"></div>
        <h5 class="modal-title">Add Note</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>

      </div>

      <div class="modal-body"> <input type="text" class="note_box" name="note" placeholder="Note" autocomplete="none"></div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary commentsave ">Save</button>
        <button type="button" class="btn btn-primary sendorder hidden">SendOrder</button>
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>  
</div> 


<script type="text/javascript"> 

/*for global order 0*/
$(document).ready(function(){
$.ajax({
url:"{{config('app.baseURL')}}/admin/global_order_id_session",
type:'POST',
data: {_token:'{{csrf_token()}}'},
success:function(data){

}
});
});



/*for when we click on existing order */
$(document).ready(function(){
$(".ExistingOrders").on('click','div .exist_order', function(event){ 
var global_order_id=$(this).attr('global_order_id');
 alert(global_order_id);
 $.ajax({
 url:"{{config('app.baseURL')}}/admin/Existing_Order",
 type:'POST',
 data: {'global_order_id':global_order_id,_token:'{{csrf_token()}}'},

 success:function(data){
 document.getElementById("totalammount").innerHTML=data;
 $('.posorders').addClass('hidden');
}
});

});
});


/*for when we click on new order */
$(document).ready(function(){
$(".Ord").on('click','a.New_Order', function(event){

       $('.posorders').addClass('hidden');
       $('.modal').removeClass("modal-display");
       $('.modal-content').removeClass("hidden");
       $('.commentsave').addClass("hidden");
       $('.sendorder').removeClass("hidden");

    /*for when we click on new order*/
    $(".modal").on('click',' .modal-footer button.sendorder', function(event){ 
      var comment=$('.note_box').val();
    $.ajax({
    url:"{{config('app.baseURL')}}/admin/Add_new_globalorder",
    type:'POST',
    data: {'comment':comment,_token:'{{csrf_token()}}'},

    success:function(data)
      {
       $.ajax({
       url:"{{config('app.baseURL')}}/admin/New_Order",
       type:'POST',
       data: {_token:'{{csrf_token()}}'},
       success:function(data){ 
       document.getElementById("totalammount").innerHTML=data;
       $('.posorders').addClass('hidden');
       $('.modal').addClass("modal-display");
       $('.modal-content').addClass("hidden");
       $('.commentsave').removeClass("hidden");
       $('.sendorder').addClass("hidden");
       }
       });
       }

    }); 

    });   
});
});



/*for when we click on orders*/
$(document).ready(function(){

$(".fixed_all").on('click','div .menuOrders', function(event){ 
$('.posorders').removeClass('hidden');
 
 $.ajax({
 url:"{{config('app.baseURL')}}/admin/All_Existing_Order",
 type:'POST',
 data: {_token:'{{csrf_token()}}'}, 

 success:function(data){
 document.getElementById("ExistingOrders").innerHTML=data;
}
}); 

});

$(".sectionHeader").on('click','div .orderback', function(event){ 
 $('.posorders').addClass('hidden');
});

}); 



function Discount() {
    var total=$('#productprice2').text();
    var total=total.substring(1);
    /*alert(total);*/
    var discount=$('#code').val();
    discount = discount.replace(/[-&\/\\#,+()$~%.'":*?<>{}]/g, '');
    /*alert(discount);*/
    var sign=$('#code').val().charAt(0);
    alert(sign);
    
    if(sign == "+" ||sign<9)
      {
        alert("this is Surcharge");
        var percent=((discount*total)/100);
        alert(percent);
        $('#productprice3').text(parseFloat(total)+parseFloat(percent));
        var ordamt=(parseFloat(total)+parseFloat(percent));
        var order_amount=total;
        alert(order_amount);
        var discount=discount;
        var service_charge=0;
        var discount_amount=percent;
        var service_charge_amount=0;
        var net_amount=0;
        var unpaid_amount=0;
        var delivery_charges=0;
        var comment="xyz";
        var payment_type="dd";
        var is_paid="0";
        var source_id=0;
        var status="1";
        var name="xyz";
        var order_type="cash";
        var is_delete=0;
         
         $.ajax({
        url:"{{config('app.baseURL')}}/admin/Surcharge",
        type:'POST',
        data: {'order_amount':order_amount,'discount':discount,'service_charge':service_charge,'discount_amount':discount_amount,'service_charge_amount':service_charge_amount,'net_amount':net_amount,'unpaid_amount':unpaid_amount,'delivery_charges':delivery_charges,'comment':comment,'payment_type':payment_type,'is_paid':is_paid,'source_id':source_id,'status':status,'name':name,'order_type':order_type,'is_delete':is_delete,'percent':percent,_token:'{{csrf_token()}}'},  
            
            success:function(data){ 
            document.getElementById("totalammount").innerHTML=data;
            }

      });
           $('.Discount_numpad').addClass('hidden');

      }


    if(sign == "-" && discount < 100)
      {
        alert("discount ammount");
        var percent=((discount*total)/100);
        alert(percent);
        $('#productprice3').text(parseFloat(total)-parseFloat(percent));
        var ordamt=(parseFloat(total)-parseFloat(percent));
        var order_amount=total;
        var discount=discount;
        var service_charge=0;
        var discount_amount=percent;
        var service_charge_amount=0;
        var net_amount=0;
        var unpaid_amount=0;
        var delivery_charges=0;
        var comment="xyz";
        var payment_type="dd";
        var is_paid="0";
        var source_id=0;
        var status="1";
        var name="xyz";
        var order_type="cash";
        var is_delete=0;
         
         $.ajax({
        url:"{{config('app.baseURL')}}/admin/Discount",
        type:'POST',
        data: {'order_amount':order_amount,'discount':discount,'service_charge':service_charge,'discount_amount':discount_amount,'service_charge_amount':service_charge_amount,'net_amount':net_amount,'unpaid_amount':unpaid_amount,'delivery_charges':delivery_charges,'comment':comment,'payment_type':payment_type,'is_paid':is_paid,'source_id':source_id,'status':status,'name':name,'order_type':order_type,'is_delete':is_delete,'percent':percent,_token:'{{csrf_token()}}'},  

            success:function(data){ 
            document.getElementById("totalammount").innerHTML=data;
            }
      });
           $('.Discount_numpad').addClass('hidden');
    
    }

             
    if(sign == "-" && discount > 100)
      {
        alert("discount canot minus more than 100% pleae enter valid ammount");
        $('#code').val("");

      } 
}


$(document).ready(function(){            
$("div").on('click','.Numpad_ok', function(event){ 
  
 alert("hehreh");

});
}); 



$(document).ready(function(){            
$(".receiptline").on('click','a.amt', function(event){ 
    $('.Numpad_textbox').val("-0%");
    $('.Discount_numpad').removeClass('hidden');

});
}); 




/*$(document).ready(function(){            
$("div").on('click',' div .jkvqAy', function(event){ 
   
    $('.Discount_numpad').addClass('hidden');

});
}); */




$(document).ready(function(){            
$(".dRVTQ").on('click',' div .backbtDiscount .back_num', function(event){ 
   
    $('.Discount_numpad').addClass('hidden');

});
});  

// when we click on surcharg in pos 

$(document).ready(function(){            
$(".ul1").on('click',' a.Surcharge', function(event){ 
   
    alert("hello");

});
});  



// when we click on discount in pos 

$(document).ready(function(){            
$(".ul1").on('click',' a.Discount', function(event){ 

    $('.Numpad_textbox').val("-0%");
      
    $('.Discount_numpad').removeClass('hidden');
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


// when we click on Cash Drawer  in pos 

$(document).ready(function(){            
$(".ul1").on('click',' a.CashDrawer', function(event){ 
   
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


// when we click on Email Reciept in pos 

$(document).ready(function(){            
$(".ul1").on('click',' a.EmailReciept', function(event){ 
   
    alert("Email Reciept");

});
});



// when we click on Subtotal  in pos 
$(document).ready(function(){            
$(".ul1").on('click',' a.Subtotal', function(event){ 
    
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


// for save modifier data
$(document).ready(function(){            
$(".CoustomerSaveInfo").on('click',' div.Modifier_Savebtn', function(event){ 

var modifier_id=$('.unitPrice').attr('modifier_id');
var cart_id=$('.modifier_cart').attr('id');
var modifier_category_id=$('.modifier_click').attr('modifier_category_id');
var modifier_price=$('.unitPrice').attr('price');
var base_price=$('.modifier_cart').attr('base_price');
var tax_ammount=0;
var count=$('.unitPrice').length; 
alert(modifier_price);
alert(count);

$.ajax({
url:"{{config('app.baseURL')}}/admin/cart_modifier_data",
type:'POST',
data: {'modifier_id':modifier_id,'cart_id':cart_id,'modifier_category_id':modifier_category_id,'modifier_price':modifier_price,'tax_ammount':tax_ammount,'base_price':base_price,'count':count,_token:'{{csrf_token()}}'},

success:function(data){ 
document.getElementById("totalammount").innerHTML=data;
}
});

 //for update checkout total amount after save modifier 
    var sum=0; 
     $(".unitPrice").each(function(i, obj){ 
     var text=$(this).attr('price');
     text=parseInt(text);
     sum=sum+text;
    });


/*var total_price=$('#productprice3').text();
var total=total_price.substring(1);
var checkout_total=parseFloat(total)+parseFloat(sum);
var symbole="{{$currency_data->currency_symbol}}"; 
$('#productprice3').text(symbole+""+checkout_total);

alert(checkout_total);*/


$('.receiptline_modifier').addClass('hidden');    
$('.Modifier_Savebtn').addClass('hidden');
$('.head-name').removeClass('hidden'); 
$('.addcustomertab').removeClass('hidden');
$('.receiptline').removeClass('hidden');
$('.productcalculation').removeClass('hidden');
$('.hederItem').removeClass('hidden');
$('.fixed_all').removeClass('fixed_containbox_modifier');
$('.nav-header').removeClass('hidden'); 
$('.modifierproduct').addClass('hidden');
$('.header').removeClass('modifierbackground');
$('.categoery_product').removeClass('hidden');  
$('.modifier_left_panel').addClass('hidden'); 
$('.productsinpos').removeClass('hidden'); 
$('.deznav').removeClass('deznav_modifer_panel'); 
$('.producthide').removeClass('hidden');
$('.productcalculation').addClass("hidden");
$('.right-sidebar').removeClass("hidden");
$('.rightbouttons').removeClass("hidden");



});
});




// for when we remove modifier 
$(document).ready(function(){            
$(".receiptline_modifier").on('click',' .option .removeModifier', function(event){ 
$(this).parent('div').remove();

     var sum=0; 
     $(".unitPrice").each(function(i, obj){ 
     var text=$(this).attr('price');
     text=parseInt(text);
     sum=sum+text;
    });

     var product_price=$('#t_price').attr('value');
     var total_price=parseFloat(product_price)+parseFloat(sum);
     var symbole="{{$currency_data->currency_symbol}}"; 
     $('#productprice3_modifier').text(symbole+""+total_price);
});
});



$(document).ready(function(){            
$(".row").on('click','.col-lg-3 a.modifier_click ', function(event){ 
 var modifier_category_id=$(this).attr('modifier_category_id');
$.ajax({
url:"{{config('app.baseURL')}}/admin/getmodifier_details",
type:'POST',
data: {'modifier_category_id':modifier_category_id,_token:'{{csrf_token()}}'},
success:function(data){ 
$(".productOptions").append(data);
     var sum=0; 
     $(".unitPrice").each(function(i, obj){ 
     var text=$(this).attr('price');
     text=parseInt(text);
     sum=sum+text;
    });

     var product_price=$('#t_price').attr('value');
     var total_price=parseFloat(product_price)+parseFloat(sum);
     var symbole="{{$currency_data->currency_symbol}}"; 
     $('#productprice3_modifier').text(symbole+""+total_price);
}
});
});
});




/*for when we click on modifier_categorey link*/ 
$(document).ready(function(){            
$(".gwCktg_modifier_left").on('click',' ul.modifier_category_link ', function(event){ 

var modifier_category_id=$(this).attr('value');

$.ajax({
url:"{{config('app.baseURL')}}/admin/Getmodifier",
type:'POST',
data: {'modifier_category_id':modifier_category_id,_token:'{{csrf_token()}}'},
success:function(data){ 
document.getElementById("modifier").innerHTML=data;
}
});
});
});



/*for add modifies with product */
$(document).ready(function(){            
$(".tabs").on('click',' li.modifier', function(event){ 
  var product_id=$(this).attr('mofifier_product_id');
  var cart_id=$(this).attr('modifier_cart_id');
  alert(product_id);
  alert(cart_id);

$.ajax({
url:"{{config('app.baseURL')}}/admin/postmodifier_productcart",
type:'POST',
data:{'product_id':product_id,'cart_id':cart_id,_token:'{{csrf_token()}}'},
success:function(data){
document.getElementById("modifierproduct").innerHTML=data;
}
});   


$.ajax({
url:"{{config('app.baseURL')}}/admin/default_modifier",
type:'POST',
data: {'product_id':product_id,_token:'{{csrf_token()}}'},
success:function(data){ 
document.getElementById("modifiercategory").innerHTML=data;
$(function(){
    $('#modifier_category_link').trigger('click');
});
}
});


$('.receiptline_modifier').removeClass('hidden');

$('.Modifier_Savebtn').removeClass('hidden');

$('.head-name').addClass('hidden'); 

$('.addcustomertab').addClass('hidden');

$('.receiptline').addClass('hidden');

$('.productcalculation').addClass('hidden');

$('.hederItem').addClass('hidden');

$('.fixed_all').addClass('fixed_containbox_modifier');

$('.nav-header').addClass('hidden'); 

$('.modifierproduct').removeClass('hidden');

$('.header').addClass('modifierbackground');

$('.categoery_product').addClass('hidden');  

$('.modifier_left_panel').removeClass('hidden'); 

$('.productsinpos').addClass('hidden'); 

$('.deznav').addClass('deznav_modifer_panel'); 

$('.producthide').addClass('hidden');

});
});




$(document).ready(function(){            
$(".CoustomerBack_modifier").on('click','div.backModifier', function(event){ 

$('.receiptline_modifier').addClass('hidden');    

$('.Modifier_Savebtn').addClass('hidden');

$('.head-name').removeClass('hidden'); 

$('.addcustomertab').removeClass('hidden');

$('.receiptline').removeClass('hidden');

$('.productcalculation').removeClass('hidden');

$('.hederItem').removeClass('hidden');

$('.fixed_all').removeClass('fixed_containbox_modifier');

$('.nav-header').removeClass('hidden'); 

$('.modifierproduct').addClass('hidden');

$('.header').removeClass('modifierbackground');

$('.categoery_product').removeClass('hidden');  

$('.modifier_left_panel').addClass('hidden'); 

$('.productsinpos').removeClass('hidden'); 

$('.deznav').removeClass('deznav_modifer_panel'); 

$('.producthide').removeClass('hidden');

$('.productcalculation').addClass("hidden");
$('.right-sidebar').removeClass("hidden");
$('.rightbouttons').removeClass("hidden");



});
});




/*for searchbar in customer panel */
$(document).ready(function(){
$('#txtCustomerKeyword').on('keyup', function(){
var text = $('#txtCustomerKeyword').val();
console.log(text);
$.ajax({
url:"{{config('app.baseURL')}}/admin/CustomerSearch",
type:'POST',
data: {'text':text,_token:'{{csrf_token()}}'},

success:function(data){
document.getElementById("customersearch").innerHTML=data;
}

});
});
});


/*for when we click on curruent customer */  
$(document).ready(function(){            
$(".addcustomertab").on('click',' ul li a.Customer_Cart', function(event){ 
 var id=$(this).attr('id'); 
$.ajax({
url:"{{config('app.baseURL')}}/admin/curruent_Customer_Data",
type:'POST',
data: {'id':id,_token:'{{csrf_token()}}'},

  success:function(data){
    $('.BouttonCoustomerSave').removeClass('hidden');
    $('.linkOrderCustomer').removeClass('hidden');    
    $('.btnUnlink_Customer').removeClass('hidden');
    $('.searchCustomersKeyword').removeClass('hidden');
    $('.backbCoustomer').addClass('hidden');
    $('.searchCustomersContainer').addClass('hidden');  
    $('.customerProfile').removeClass('hidden');
    $('.CoustomerBack').removeClass('hidden');
    $('.customerEditProfile ').removeClass('hidden'); 
    $('.inputSearch').addClass('topname');
    $('.searchCustomersKeyword').addClass('CustomerName');

    $('#currentCustomerInfo').text(data.name);
    $('#txtCustomerName').val(data.name);
    $('#txtCustomerEmail').val(data.email);
    $('#txtCustomerPhone').val(data.contact_number);
    $('#txtCustomerStreetAddress').val(data.address);
    $('#txtCustomerPostcode').val(data.postcode);
    $('#txtCustomertags').val(data.tag); 
    $('#txtCustomerKeyword').val(data.name); 

  }
});

});
});


$(document).ready(function(){            
$(".addcustomertab").on('click',' ul li a.AddCustomer_cart', function(event){ 
 var id=$(this).attr('id'); 
 $('.CoustomerSavebtn').attr('customerid_update',id);
 $('.mobileHide').attr('id',id); 
 $('.customersearch').addClass("hidden"); 

$.ajax({
url:"{{config('app.baseURL')}}/admin/curruent_Customer_Data",
type:'POST',
data: {'id':id,_token:'{{csrf_token()}}'},

  success:function(data){ 
    $('#currentCustomerInfo').text(data.name);
    $('#txtCustomerName').val(data.name);
    $('#txtCustomerEmail').val(data.email);
    $('#txtCustomerPhone').val(data.contact_number);
    $('#txtCustomerStreetAddress').val(data.address);
    $('#txtCustomerPostcode').val(data.postcode);
    $('#txtCustomertags').val(data.tag); 
    $('#txtCustomerKeyword').val(data.name); 

    $('.btnUnlink_Customer').removeClass('hidden');
    $('.searchCustomersKeyword').removeClass('hidden');
    $('.backbCoustomer').addClass('hidden');
    $('.searchCustomersContainer').addClass('hidden');  
    $('.customerProfile').removeClass('hidden');
    $('.CoustomerBack').removeClass('hidden');
    $('.customerEditProfile ').removeClass('hidden'); 
    $('.inputSearch').addClass('topname');
    $('.searchCustomersKeyword').addClass('CustomerName');

  }
});
});
});


/*for when we click on unlink  in customer panel*/
$(document).ready(function(){
$(".btnUnlink_Customer").on('click',' span.mobileHide', function(event){ 
var id=$(this).attr('id'); 
 $('.customersearch').removeClass("hidden"); 
$.ajax({
url:"{{config('app.baseURL')}}/admin/customer",
type:'POST',
data: {_token:'{{csrf_token()}}'},
success:function(data) {
document.getElementById("customersearch").innerHTML=data;
}
});


$.ajax({
url:"{{config('app.baseURL')}}/admin/Customer_Id_Cart_Zero",
type:'POST',
data: {'id':id,_token:'{{csrf_token()}}'},

  success:function(data){ 
    
     $('.AddCustomer').removeClass('hidden');
     $('.AddCustomer_default').removeClass('hidden');
     $('.AddCustomer_cart').addClass('hidden');
     $('.Customer_Cart ').addClass('hidden');
  
    $('.btnUnlink_Customer').addClass('hidden');

    $('#txtCustomerKeyword').val(""); 
  
    $('.inputSearch').removeClass('topname');
    $('.searchCustomersKeyword').removeClass('CustomerName');

    $('.linkOrderCustomer').removeClass('hidden');
  
    $('.searchCustomersKeyword').removeClass('hidden');
    $('.backbCoustomer').removeClass('hidden');
    $('.searchCustomersContainer').removeClass('hidden');
    $('.BouttonCoustomerSave').removeClass('hidden');
    

    $('.customerProfile').addClass('hidden');
    $('.CoustomerBack').addClass('hidden');
    $('.customerEditProfile ').addClass('hidden');

  }
});
 
});
});



/*for when we click on customer in customer panel*/
$(document).ready(function(){
$(".linkOrderCustomer").on('click',' li.vebsignsCustomer', function(event){ 
 var id=$(this).attr('customerid');
 $('.CoustomerSavebtn').attr('customerid_update',id);
 $('.mobileHide').attr('id',id); 
 $('.Customer_Cart').attr('id',id);   

$.ajax({
url:"{{config('app.baseURL')}}/admin/Customer_Id_Cart",
type:'POST',
data: {'id':id,_token:'{{csrf_token()}}'},
});

$.ajax({
url:"{{config('app.baseURL')}}/admin/Customer_id",
type:'POST',
data: {'id':id,_token:'{{csrf_token()}}'},
  success:function(data){


     $('.AddCustomer').addClass('hidden');
     $('.Customer_Cart ').removeClass('hidden');

     $('#currentCustomerInfo').text(data.name);


    $('#txtCustomerName').val(data.name);
    $('#txtCustomerEmail').val(data.email);
    $('#txtCustomerPhone').val(data.contact_number);
    $('#txtCustomerStreetAddress').val(data.address);
    $('#txtCustomerPostcode').val(data.postcode);
    $('#txtCustomertags').val(data.tag); 
    $('#txtCustomerKeyword').val(data.name); 

    $('.btnUnlink_Customer').removeClass('hidden');
    $('.searchCustomersKeyword').removeClass('hidden');
    $('.backbCoustomer').addClass('hidden');
    $('.searchCustomersContainer').addClass('hidden');  
    $('.customerProfile').removeClass('hidden');
    $('.CoustomerBack').removeClass('hidden');
    $('.customerEditProfile ').removeClass('hidden'); 
    $('.inputSearch').addClass('topname');
    $('.searchCustomersKeyword').addClass('CustomerName');
  
  }

});
});
});



/*for when we click on save coustomer data*/
$(document).ready(function(){
$(".CoustomerSaveInfo").on('click',' div.CoustomerSavebtn', function(event){ 

var user_id=$(this).attr('customerid_update'); 
var customer_name=$('#txtCustomerName').val();
var customer_email=$('#txtCustomerEmail').val();
var customer_contact=$('#txtCustomerPhone').val();
var customer_address=$('#txtCustomerStreetAddress').val();
var customer_postcode=$('#txtCustomerPostcode').val();
var customer_tags=$('#txtCustomertags').val();

$.ajax({
url:"{{config('app.baseURL')}}/admin/Customer_Info",
type:'POST',
data: {'user_id':user_id,'customer_name':customer_name,'customer_email':customer_email,'customer_contact':customer_contact,'customer_address':customer_address,'customer_postcode':customer_postcode,'customer_tags':customer_tags,_token:'{{csrf_token()}}'},

   success:function(data){ 

   $('#currentCustomerInfo').val(customer_name);
   $('.linkOrderCustomer').addClass('hidden');
   $('.BouttonCoustomerSave').addClass('hidden');

  }
});
});
});




/*for when we click on add new coustomer in coustomer panel*/
$(document).ready(function(){
$(".addcustomertab").on('click',' ul li  a.AddCustomer', function(event){ 

$.ajax({
url:"{{config('app.baseURL')}}/admin/customer",
type:'POST',
data: {_token:'{{csrf_token()}}'},

success:function(data) {
document.getElementById("customersearch").innerHTML=data;
}

});

    $('.btnUnlink_Customer').addClass('hidden');

    $('#txtCustomerKeyword').val(""); 
  
    $('.inputSearch').removeClass('topname');
    $('.searchCustomersKeyword').removeClass('CustomerName');

    $('.linkOrderCustomer').removeClass('hidden');
  
    $('.searchCustomersKeyword').removeClass('hidden');
    $('.backbCoustomer').removeClass('hidden');
    $('.searchCustomersContainer').removeClass('hidden');
    $('.BouttonCoustomerSave').removeClass('hidden');
    $('.customerProfile').addClass('hidden');
    $('.CoustomerBack').addClass('hidden');
    $('.customerEditProfile ').addClass('hidden');  

    $(".bckCoustomer").on('click','div.backbCoustomer span.backCoustomer', function(event){ 
    $('.linkOrderCustomer').addClass('hidden');
    $('.BouttonCoustomerSave').addClass('hidden');
     
    });

});

  $(".searchCustomersContainer  ").on('click','li.addNewCustomer ', function(event){ 
    $('#txtCustomerName').val("");
    $('#txtCustomerEmail').val("");
    $('#txtCustomerPhone').val("");
    $('#txtCustomerStreetAddress').val("");
    $('#txtCustomerPostcode').val("");
    $('#txtCustomertags').val(""); 
  
  $('.searchCustomersKeyword').addClass('hidden');
  $('.backbCoustomer').addClass('hidden');
  $('.searchCustomersContainer').addClass('hidden');  
  $('.customerProfile').removeClass('hidden');
  $('.CoustomerBack').removeClass('hidden');
  $('.customerEditProfile ').removeClass('hidden');  
});

    $(".CoustomerBack").on('click','i.backbtn-iconCoustomer ', function(event){ 

     $('.btnUnlink_Customer').addClass('hidden');
     $('.inputSearch').removeClass('topname');
     $('.searchCustomersKeyword').removeClass('CustomerName');    

    $('.linkOrderCustomer').addClass('hidden');
    $('.BouttonCoustomerSave').addClass('hidden');
});
});

/*for addcoustomer more less details */
$(document).ready(function(){
$(".MoreLess").on('click','div.buttonMoredetails ', function(event){ 
    $('.buttonMoredetails').addClass('hidden');
    $('.customerExtraFields').removeClass('hidden');
    $('.buttonLessdetails').removeClass('hidden');
});

$(".MoreLess").on('click','div.buttonLessdetails ', function(event){ 
    $('.buttonMoredetails').removeClass('hidden');
    $('.customerExtraFields').addClass('hidden');
    $('.buttonLessdetails').addClass('hidden');

});
});


//*for when we click on split sprice textbox carts 
$(document).ready(function(){
$(".split_textbox_boutton ").on('click','div.form-group input.textfield_split ', function(event){ 
$('.changeprice').removeClass("hidden");
$('.calc').addClass("calc_product_changeprice");
$('.calci').removeClass("hidden");
$('.checkoutcash').addClass("hidden"); 
$(this).addClass("changedamt");
var oldval=$(this).val();
 oldval=oldval.substring(1);
 oldval = parseInt(oldval);
 $('.changedamt').attr('attr',oldval);
});

$(".bck").on('click','i.backbtncalci',function(){
$('.calci').addClass("hidden"); 
$('.checkoutcash').addClass("hidden");
$('.changeprice').addClass("hidden"); 
$('.calc').removeClass("calc_product_changeprice");
});

$(".last-row").on('click','.buttoncalciok',function(){
var symbole="{{$currency_data->currency_symbol}}"; 
var oldval= $('.changedamt').attr('attr');
var changed_price=$('.res').text(); 
var finalval=oldval-changed_price;
    var sum=0;
    $(".textfield_split ").each(function(i, obj){
     var text=$(this).val();
     var text = text.substring(1);
     text = parseInt(text);
     sum=+text; 
     });
    var total =$('.span-price3').text();
    var total = total.substring(1);
    var total = parseInt(total);
if(sum=total && finalval>=1)
{
$('.changedamt').val(symbole + "" +changed_price);
$('.calci').addClass("hidden"); 
$('.checkoutcash').addClass("hidden");
$('.changeprice').addClass("hidden"); 
$('.calc').removeClass("calc_product_changeprice");
$('.textfield_split').removeClass("changedamt");

$(".split_textbox_boutton").append('<div class="form-group"><input type="text"class="textfield_split "><button type="submit"class="btn btn-primary btn_chekcout">Checkout</button><span class="span_split">&times;</span></div>');
$('.split_textbox_boutton ').children('.form-group').children('.textfield_split').last().val(symbole + "" +finalval);
}
else
{
    alert("the split ammount cannot greter or equal  curruent ammount");
}  
});
});




/*when we click on scroll product*/
$(document).ready(function(){ 
$('.receiptline').on('click', '.total-price1 a.product_split', function(event){
$(this).parent('div').hide();
var cart_id=$(this).attr('id');
console.log(cart_id);  

$.ajax({
url:"{{config('app.baseURL')}}/admin/showproductintopay",
type:'POST',
data: {'cart_id':cart_id,_token:'{{csrf_token()}}'},


success:function(data){              
    $('.dic_splitprodctwise').addClass("hidden");
    $('#checkout_product').append(data.split_product);
    console.log(data.sum_split_product[0]);
    console.log(data.modifier_total);

    var symbole="{{$currency_data->currency_symbol}}";
$('#productprice-checkout').text(symbole+""+ (parseFloat(data.sum_split_product[0].total)+parseFloat(data.modifier_total)));

    $('.product_checkout').removeClass("hidden"); 

     document.getElementById("totalammount").innerHTML=data.ammount;
     $('.productcartleft').addClass('product_split');
     $('.productcartleft').removeClass('product_click');

}
});


$('.divsplit_topay').on('click','.total-price1 a.product_click', function(event){
var id=$(this).attr('id'); 
$("#"+id).parent('div').show();
$(this).parent('div').remove();
   $.ajax({
         url:"{{config('app.baseURL')}}/admin/is_splitzero",
         type:'POST',
         data: {'id':id,_token:'{{csrf_token()}}'},
         success:function(data){ 
          var symbole="{{$currency_data->currency_symbol}}";
$('#productprice-checkout').text(symbole+""+ (parseFloat(data.sum_split_product[0].total)+parseFloat(data.modifier_total)));
        document.getElementById("totalammount").innerHTML=data.ammount;
         $('.productcartleft').addClass('product_split');
         $('.productcartleft').removeClass('product_click');  
            var count= $('.product_click').length;
             if(count==0)
            { 
                var value=$('.span-price3').text(); 
                $('#productprice-checkout').text(value);  
                $('.dic_splitprodctwise').removeClass("hidden");
                $('.product_checkout').addClass("hidden"); 
            }                 
     }
});
          
}); 
}); 
}); 




/*when we click on exit split*/
$(document).ready(function(){
$(".nav-item ").on('click','a.ExitSplit', function(event){  
  $.ajax({
           url:"{{config('app.baseURL')}}/admin/ExitSplit",
           type:'POST',
           data:{_token:'{{csrf_token()}}'},

         success:function(data){
         document.getElementById("totalammount").innerHTML=data;
         $("#checkout_product").empty();
         }
        });
    
jQuery('.checkout').removeClass('active');
$(".content-body").removeClass("hidden");
$(".deznav").removeClass("hidden");
$(".header").removeClass("hidden");
$(".footer").removeClass("hidden");
$(".chatbox").removeClass("hidden");
$(".head-name").removeClass("hidden");
$(".addcustomertab").removeClass("addcustomertab1");
$('.rightbouttons').removeClass("hidden");
$('.checkout-close').removeClass("hidden"); 


$(".fixed-content-box").removeClass("fixed-content-box-checkout");
$(".nav-header").removeClass("nav-header-checkout");
$('.checkoutanchoer').removeClass("hidden");
$('.backanchoer').addClass("hidden");
$('.backbtn').addClass("hidden");
$(".checkout").addClass("hidden");
$(".open-tab").addClass("tab-left");
$(".split_payment").addClass("hidden");
/*$('.split_payment').addClass("hidden");*/

$('.product_split').addClass("product_click"); 
$('.product_split').removeClass("product_split"); 

/*$('.ExitSplit').removeClass("exit_split");*/
$('.ExitSplit').addClass("hidden"); 
$('.split_textbox_boutton').addClass("hidden");
$('.split_div').addClass("hidden");


}); 
}); 

/*for when we click on pricewise  split in checkout */
$(document).ready(function(){
$(".tabs_split").on('click',' li.active', function(event){   

    $('.styl').addClass("split_product_style");

    $('.splitbyproduct').removeClass("split_product_style");

     $('.checkout-close').removeClass("hidden");   
     $('.backbtn').removeClass("hidden");
     $('.split_textbox_boutton').removeClass("hidden");
     $('.split_div').removeClass("hidden");
     $('.divsplit_topay').addClass("hidden");
     $('.dic_splitprodctwise').addClass("hidden");
     $('.rightbouttons').addClass("hidden");
     $('.ExitSplit').removeClass("hidden");
     $('.product_click').addClass("product_split");
 
     $('.product_click').removeClass("product_click");
     $('.product_checkout').addClass("hidden");
     
      
});
});

/*for when we click on productwise split in checkout */
     $(document).ready(function(){
     $(".tabs_split").on('click',' li.splitbyproduct', function(event){ 
     $('.checkout-close').addClass("hidden");
     

     $('.splitbyproduct').addClass("split_product_style"); 
     $('.styl').removeClass("split_product_style");

     $('.product_click').addClass("product_split"); 
     $('.product_click').removeClass("product_click");

     $('.backbtn').addClass("hidden");
     $('.split_textbox_boutton').addClass("hidden");
     $('.split_div').addClass("hidden");
     $('.divsplit_topay').removeClass("hidden");
     $('.dic_splitprodctwise').removeClass("hidden");
     $('.rightbouttons').addClass("hidden");
     $('.ExitSplit').removeClass("hidden"); 

      
});
});


/*for mergtables after selecting checkbox */   
$(document).ready(function(){
$(".tabs").on('click','li.mergnowtable', function(event){ 
var data = new Array();
$("input[name='checkbox[]']:checked").each(function(i) {
    data.push($(this).val());
});
console.log(data);  
$('.tableposmerg').addClass("hidden");
$('.postable').addClass("hidden");
$('.poslogin').addClass("hidden");
$.ajax({
           url:"{{config('app.baseURL')}}/admin/mergnowtables",
           type:'POST',
           data:{'data':data, _token:'{{csrf_token()}}'},
        });
});
});


/*for cancelbutton  merg now*/
$(document).ready(function(){
$(".menuOrders1").on('click','div.menuOrders', function(event){  
$('.tableposmerg').addClass("hidden");
$('.postable').removeClass("hidden"); 
/*$('.poslogin').removeClass("hidden");*/
});
});

// on change on selector id class 
$(document).ready(function(){
$('.container-fluid').on('change','.checkbox_posmerg input.custom-control-input', function() {
    alert("After Seclect Tables Click On Merg Now Tables");
});
});

/*for posmergtable merg*/
$(document).ready(function(){
$(".tabs").on('click','li.singleTab11', function(event){  
$('.tableposmerg').removeClass("hidden");
});
});

/*for  show cart data  */
$(document).ready(function(){   
$(".tablemain").on('click','.row a.tablelink', function(event){ 
 var table_id=$(this).attr('value');    
$.ajax({
url:"{{config('app.baseURL')}}/admin/showcartdata",
type:'POST',
data: {'table_id':table_id,_token:'{{csrf_token()}}'},
success:function(data){
document.getElementById("totalammount").innerHTML=data;
}
});
});
});


/*for tables show in table panel 
*/$(document).ready(function(){
$.ajax({
url:"{{config('app.baseURL')}}/admin/postable",
type:'POST',
data: {_token:'{{csrf_token()}}'},
success:function(data){
document.getElementById("tablepos").innerHTML=data;
}
});
});




/*for tables show in table panel 
*/$(document).ready(function(){
$.ajax({
url:"{{config('app.baseURL')}}/admin/tableposmerg",
type:'POST',
data: {_token:'{{csrf_token()}}'},
success:function(data){
document.getElementById("tableposmerg").innerHTML=data;
}
});
});




/*for table_id session */
$(document).ready(function(){
$(".tablemain").on('click','.row a.tablelink', function(event){  
var table_id=$(this).attr('value');
/*console.log(table_id);*/
$.ajax({
url:"{{config('app.baseURL')}}/admin/session_tableid",
type:'POST',
data: {'table_id':table_id,_token:'{{csrf_token()}}'},
success:function(data){ 
    $('.postable').addClass("hidden");
}
}); 
});
});

/*for dafualt frist categeorey in pos window */
$(document).ready(function(){
$(".tablemain").on('click','.row a.tablelink', function(event){  
$.ajax({
url:"{{config('app.baseURL')}}/admin/default_categoery",
type:'POST',
data: {_token:'{{csrf_token()}}'},
success:function(data){ 
$(function(){
    $('#categoryitem').trigger('click');
});
}
}); 
});
});


/*for num pad */
$(document).ready(function () {
$('.num').click(function () {
var num = $(this);
var text = $.trim(num.find('.txt').clone().children().remove().end().text());
var telNumber = $('#telNumber');
$(telNumber).val(telNumber.val() + text);
});
});

/*for user login pos*/
$(document).ready(function(){
var count=0;
$(".num-pad").on('click','div.span4', function(event){
count ++;
if(count==5)
{
count=0;
}
var text = $('#telNumber').val();
$.ajax({
url:"{{config('app.baseURL')}}/admin/pospin",
type:'POST',

data: {'text':text,_token:'{{csrf_token()}}'},

success:function(result){
if (result=="true") {
/* location.href = "{{config('app.baseURL')}}/poshome";*/
$('.poslogin').addClass("hidden");
$('.posnumpad').addClass("hidden");
$('.userbutton').addClass("hidden");
$('.userReceiptTotalpos').addClass("hidden"); 
$('.singleTab').addClass("hidden");
$('.postable').removeClass("hidden");
$('.menuOrders').removeClass("hidden");
}else{

if(count==4)
{ 
$("#telNumber").val('');
$('.invalidpinpos').removeClass("hidden");
$('.invalidpinback').removeClass("hidden");
$('.navigationHeader').addClass("hidden");
$('.menuOrders').addClass("hidden");
$('#invalidpinposid').delay(1000).hide(1000); 
/* $('#invalidpinpos').fadeOut(5000);*/
$('#invalidpinposid').delay(1000).show(1000);
count=0;
}
}
},
error: function (xhr, textStatus, errorThrown) {
alert(textStatus + ':' + errorThrown); 
}
});
});
});

//*for when we click on pos boutton 
$(document).ready(function(){
$(".user_list_scroll").on('click','ul.list', function(event){
$('.posnumpad').removeClass("hidden"); 
$('.userbutton').removeClass("hidden");
$('.userReceiptTotalpos').addClass("hidden"); 
$('.singleTab1').removeClass("hidden");
$('.singleTab').addClass("hidden");
$('.userpos').addClass("hidden");

});

$(".sectionHeader").on('click','div.userbutton', function(event){
$('.posnumpad').addClass("hidden");
$('.userbutton').addClass("hidden"); 
$('.singleTab1').addClass("hidden");
$('.userReceiptTotalpos').removeClass("hidden");  
$('.singleTab').removeClass("hidden");
$('.userpos').removeClass("hidden");
$('.navigationHeader').removeClass("hidden");
$('.menuOrders').removeClass("hidden");
$('.invalidpinpos').addClass("hidden");
});
});
/*for when we click on invalid pin back button */
$(".invalidpinpos").on('click','div.invalidpinback', function(event){

$('.navigationHeader').removeClass("hidden");
$('.menuOrders').removeClass("hidden");
$('.invalidpinpos').addClass("hidden");
$('.invalidpinback').addClass("hidden");
});


/*for searchbar*/
$(document).ready(function(){
$('#input-searchpos').on('keyup', function(){
var text = $('#input-searchpos').val();
/*console.log(text);*/
$.ajax({
url:"{{config('app.baseURL')}}/admin/searchbarpos",
type:'POST',
data: {'text':text,_token:'{{csrf_token()}}'},
success:function(data){
document.getElementById("product").innerHTML=data;
}
});
});
});


$(document).ready(function(){
$(".split_div").on('click','button.button_split', function(event){ 
$(".split_textbox_boutton").append(' <div class="form-group"><input type="text" class="textfield_split"><button type="submit" class="btn btn-primary btn_chekcout">Checkout</button> <span class="span_split">&times;</span></div>');
     var count= $('.textfield_split').length;
     var total=$('.span-price3').text();
     var total_int = total.substring(1);
     var total_ammount = parseInt(total_int);
     var price=(total_ammount/count).toFixed(2);
      console.log(price);
      var symbole="{{$currency_data->currency_symbol}}";
      $('.textfield_split').val(symbole+ "" +price);
});

     $(".split_textbox_boutton").on('click','.span_split',function(){
     $(this).parent('div').remove();
     var count=$('.textfield_split').length;
    /* count--;*/
      if(count==0)
      {
        var total=$('.span-price3').text();
        var total_int = total.substring(1);
        var total_ammount = parseInt(total_int);
        var price=(total_ammount/count).toFixed(2);
        $('.textfield_split').val(total);
      }

      else{ 
             var total=$('.span-price3').text();
             var total_int = total.substring(1);
             var total_ammount = parseInt(total_int);
             var price=(total_ammount/count).toFixed(2);
             var symbole="{{$currency_data->currency_symbol}}";
             $('.textfield_split').val(symbole+ "" +price);
      }  
});
});


/*for when we click on checkout split boutton*/
$(document).ready(function(){
$(".padding-chekout").on('click','a.split', function(event){ 
$('.split_payment').removeClass("hidden"); 
$('.paymentbox').addClass("hidden");

 var total=$('.span-price3').text();

 $('#productprice-checkout').text(total);

 var total_int = total.substring(1);

 $('.textfield_split').val(total_int);

 var count=$('.textfield_split').length;
 if(count==1)
 {
 var total=$('.span-price3').text();
 var total_int = total.substring(1);
var symbole="{{$currency_data->currency_symbol}}";
 $('.textfield_split').val(symbole+ "" +total_int);
 }

});
});



/*for when we click on checkoutwindow dollar box*/
$(document).ready(function(){
$(".emailrecipet").on('click',' span.text-checkout', function(event){ 
var amt=$(this).text();

var order_amount = amt.substring(1);
alert(order_amount);

var discount=0;
var service_charge=0;
var discount_amount=0;
var service_charge_amount=0;
var net_amount=0;
var unpaid_amount=0;
var delivery_charges=0;
var comment="xyz";
var payment_type="dd";
var is_paid="0";
var source_id=0;
var status="1";
var name="xyz";
var order_type="cash";
var is_delete=0;

$.ajax({
url:"{{config('app.baseURL')}}/admin/global_order_data",
type:'POST',
data: {'order_amount':order_amount,'discount':discount,'service_charge':service_charge,'discount_amount':discount_amount,'service_charge_amount':service_charge_amount,'net_amount':net_amount,'unpaid_amount':unpaid_amount,'delivery_charges':delivery_charges,'comment':comment,'payment_type':payment_type,'is_paid':is_paid,'source_id':source_id,'status':status,'name':name,'order_type':order_type,'is_delete':is_delete,_token:'{{csrf_token()}}'},

success:function(data){

     document.getElementById("totalammount").innerHTML=data;
     $('.dollar').addClass("hidden");
     $('.total').addClass("hidden");
     $('.paymentbox').addClass("hidden");
     $('.checkout_emailrecipt').removeClass("hidden");      
  
}

});
});
$(".backbtn").on('click', function(event){ 
$('.product_split').addClass("product_click"); 
$('.product_split').removeClass("product_split");     
$('.dollar').removeClass("hidden");
$('.total').removeClass("hidden");
$('.paymentbox').removeClass("hidden");
$('.checkout_emailrecipt').addClass("hidden");
});
});


/*for when we click on splited product to checkout */
$(document).ready(function(){
$(".topay").on('click',' div.product_checkout', function(event){ 
var amt=$('#productprice-checkout').text();
var order_amount = amt.substring(1);
alert(order_amount);
var discount=0;
var service_charge=0;
var discount_amount=0;
var service_charge_amount=0;
var net_amount=0;
var unpaid_amount=0;
var delivery_charges=0;
var comment="xyz";
var payment_type="dd";
var is_paid="0";
var source_id=0;
var status="1";
var name="xyz";
var order_type="cash";
var is_delete=0;


$.ajax({
url:"{{config('app.baseURL')}}/admin/global_order_data_splitwise_product",
type:'POST',
data: {'order_amount':order_amount,'discount':discount,'service_charge':service_charge,'discount_amount':discount_amount,'service_charge_amount':service_charge_amount,'net_amount':net_amount,'unpaid_amount':unpaid_amount,'delivery_charges':delivery_charges,'comment':comment,'payment_type':payment_type,'is_paid':is_paid,'source_id':source_id,'status':status,'name':name,'order_type':order_type,'is_delete':is_delete,_token:'{{csrf_token()}}'},

success:function(data){
      
      alert("order place");

        var count= $('.product_click').length;
             if(count==0)
            { 
                var value=$('.span-price3').text(); 
                $('#productprice-checkout').text(value);  
                $('.dic_splitprodctwise').removeClass("hidden");
                $('.product_checkout').addClass("hidden"); 
            } 
      
      document.getElementById("totalammount").innerHTML=data;
      $("#checkout_product").empty();

jQuery('.checkout').removeClass('active');
$(".content-body").removeClass("hidden");
$(".deznav").removeClass("hidden");
$(".header").removeClass("hidden");
$(".footer").removeClass("hidden");
$(".chatbox").removeClass("hidden");
$(".head-name").removeClass("hidden");
$(".addcustomertab").removeClass("addcustomertab1");
$('.rightbouttons').removeClass("hidden");
$('.checkout-close').removeClass("hidden"); 


$(".fixed-content-box").removeClass("fixed-content-box-checkout");
$(".nav-header").removeClass("nav-header-checkout");
$('.checkoutanchoer').removeClass("hidden");
$('.backanchoer').addClass("hidden");
$('.backbtn').addClass("hidden");
$(".checkout").addClass("hidden");
$(".open-tab").addClass("tab-left");
$(".split_payment").addClass("hidden");
/*$('.split_payment').addClass("hidden");*/

$('.product_split').addClass("product_click"); 
$('.product_split').removeClass("product_split"); 

/*$('.ExitSplit').removeClass("exit_split");*/
$('.ExitSplit').addClass("hidden"); 
$('.split_textbox_boutton').addClass("hidden");
$('.split_div').addClass("hidden");
}
});

});
});




//*for when we click on checkout carts 
$(document).ready(function(){
$(".padding-chekout").on('click','a.Other_option', function(event){ 
$('.changeprice').addClass("hidden");
$('.calc').addClass("calc1");
$('.calci').removeClass("hidden");
$('.checkoutcash').removeClass("hidden"); 
});

$(".bck").on('click','i.backbtncalci',function(){
$('.calci').addClass("hidden"); 
$('.checkoutcash').addClass("hidden");
$('.changeprice').removeClass("hidden"); 
$('.calc').removeClass("calc1");
});
});



/*for calculator*/
$(document).ready(function() {
var eq = "";
var curNumber="";
var result = "";
var entry = "";
var reset = false;

$("button").click(function() {    
entry = $(this).attr("value");   

/*if (entry === "%") {
alert("percentage");

entry=0;
eq=0;
result=0;
curNumber=0;
$('#result p').html("");
$('#previous p').html("");  

}


if (entry === "+") {
alert("addition");

entry=0;
eq=0;
result=0;
curNumber=0;
$('#result p').html("");
$('#previous p').html("");  

}

if (entry === "-") {
alert("substraction");

entry=0;
eq=0;
result=0;
curNumber=0;
$('#result p').html("");
$('#previous p').html("");  

}
*/

if (entry === "ac") {
entry=0;
eq=0;
result=0;
curNumber=0;
$('#result p').html("");
$('#previous p').html("");  
}

else if (entry === "ce") {
if (eq.length > 0) {
eq = eq.slice(0, -1);        
$('#previous p').html(eq);
}
else {
eq = 0;  
$('#result p').html("");
}

$('#previous p').html(eq);

if (curNumber.length > 1) {
curNumber = curNumber.slice(0, -1);        
$('#result p').html(curNumber);  
}
else {
curNumber = 0;  
$('#result p').html(0);
}
}
/*else if (entry === "=") {
result = eval(eq);
$('#result p').html(result); 
eq += "="+result;
$('#previous p').html(eq);
eq = result;
entry = result;
curNumber = result;
reset = true;
}*/

else if (isNaN(entry)) {   //check if is not a number, and after that, prevents for multiple "." to enter the same number
if (entry !== ".") {     
reset = false;       
if (curNumber === 0 || eq === 0) { 
curNumber = 0;
eq = entry;         
}
else {
curNumber = "";
eq += entry;
}     
$('#previous p').html(eq); 
}
else if (curNumber.indexOf(".") ===-1) { 
reset = false;
if (curNumber === 0 || eq === 0) { 
curNumber = 0.;
eq = 0.;           
}
else {
curNumber += entry;
eq += entry;        
}
$('#result p').html(curNumber);
$('#previous p').html(eq);        
}      
}

else {  
if (reset) {
eq = entry;
curNumber = entry;       
reset = false;
}
else {
eq += entry; 
curNumber += entry;        
}
$('#previous p').html(eq); 
$('#result p').html(curNumber);
}   

if (curNumber.length > 10 || eq.length > 26) {
$("#result p").html("0");
$("#previous p").html("Too many digits");
curNumber ="";
eq="";
result ="";
reset=true;
}
});
});

/*endcalculator*/

/* scrpit for adjust amount in calculator*/
$(document).ready(function(){
$(".AdjustAmount_lable").on('click','a.Adjustment', function(event){ 
$('.calci').removeClass("hidden");
$('.changeprice').addClass("hidden");
$('.backbtncalci').addClass("hidden");
$('.adjustprice').removeClass("hidden");
$('.adjustpriceback').removeClass("hidden");
});

$(".bck").on('click','i.adjustpriceback',function(){
/*$('.calciunitpriceccc').addClass("hidden");*/
$('.calci').addClass("hidden");
$('.changeprice').removeClass("hidden");
$('.backbtncalci').removeClass("hidden");
$('.adjustprice').addClass("hidden");
$('.adjustpriceback').addClass("hidden");
var mb = $('#result').text();
$('#qty_price').text(mb);
});
});


/* scrpit for change product price using calculator*/
$(document).ready(function(){
$(".unitprice").on('click','div.unitpriceccc', function(event){ 
$('.calci').removeClass("hidden"); 
});
$(".bck").on('click','i.backbtncalci',function(){
$('.calci').addClass("hidden"); 
var mb = $('#result').text();
$('#unitprice').text(mb);
});
});

/*orders/note-box classes*/
$(document).ready(function(){
$('.header-right').on('click', 'li a.header-ra', function(){
$('.modal').removeClass("modal-display");
$('.modal-content').removeClass("hidden"); 
$('.sendorder').addClass("hidden");
$('.commentsave').removeClass("hidden"); 

});

$(".close").on('click',function(){
$('.modal-content').addClass("hidden");
$('.modal').addClass("modal-display");
});
$(".btn-outline-light").on('click',function(){ 
$('.modal-content').addClass("hidden");
$('.modal').addClass("modal-display"); 
});
});


/* scrpit for product click price depend on clicks */
$(document).ready(function(){
$(".row").on('click','a.product', function(event){
var product_id=$(this).attr('value');  
//ajax call 
$.ajax({
url:"{{config('app.baseURL')}}/admin/getproductprice",
type:'POST',
data:{'product_id':product_id,_token:'{{csrf_token()}}'},
});
});
});


/* scrpit for product click price depend on clicks */
$(document).ready(function(){
$(".row").on('click','div.postproduct', function(event){
var product_id=$(this).attr('value'); 
//ajax call 
$.ajax({
url:"{{config('app.baseURL')}}/admin/postproductcart",
type:'POST',
data:{'product_id':product_id,_token:'{{csrf_token()}}'},
success:function(data){
document.getElementById("totalammount").innerHTML=data;
}
});

/*var amount=$('productprice2').text();
var order_amount=amount.substring(1);
alert(order_amount);
$.ajax({
url:"{{config('app.baseURL')}}/admin/globalorder_update",
type:'POST',
data:{'order_amount':order_amount,_token:'{{csrf_token()}}'},

success:function(data){
document.getElementById("totalammount").innerHTML=data;
}
});
*/


});
});


/*for when we click on delete order */
$(document).ready(function(){
$(".ul1").on('click','a.red', function(event){
var created_user="{{Auth::user()->id}}";
var user_id=created_user; 
$.ajax({
url:"{{config('app.baseURL')}}/admin/delete_order",
type:'POST',
data: {'user_id':user_id,_token:'{{csrf_token()}}'},
success:function(data){
document.getElementById("totalammount").innerHTML=data;
}
});
});
});


/*for when we click on zap/refresh*/
$(document).ready(function(){
$(".checkouttab").on('click','a.anchoer2', function(event){
alert("hello i am removing the order now using zap button");
$("#totalammount").empty();
});
});




/*when we click on scroll product*/

$(document).ready(function(){
$('.divstyle').on('click', 'a.product_click', function(){
$('.input-number').val(1);
/*for check in modifier categoery available or not  */
var product_id=$(this).attr('product_id');
var product_name=$(this).attr('value');
var modifier_cart_id=$(this).attr('id');

alert(product_name);

$('.name').text(product_name);
$('.name').attr('mofifier_product_id',product_id);
$('.modifier').attr('mofifier_product_id',product_id);
$('.modifier').attr('modifier_cart_id',modifier_cart_id);

$.ajax({
url:"{{config('app.baseURL')}}/admin/modifier_product",
type:'POST',
data:{'product_id':product_id,'cart_id':modifier_cart_id,_token:'{{csrf_token()}}'},
success:function(data){
if (data =="true")

  {  
      

     $('.modifier').removeClass("hidden");
     $('.modifier_plain').addClass("hidden");
     
     alert("modifier available.....!");
  }

else{
     
    $('.modifier').addClass("hidden");
    $('.modifier_plain').removeClass("hidden");  
    alert("modifier unavailable. pleaze add modifier frist......!");
}

}

});

var productname=$(this).attr('value');
document.getElementById("p_tname").innerHTML=productname;
var productprice=$(this).attr('alt');
document.getElementById("unitprice").innerHTML=productprice;

var cart_id=$(this).attr('id');
$('.remove_cart').attr('id',cart_id);
$('.applychanges').attr('id',cart_id);

$('.productcalculation').removeClass("hidden"); 
$('.nav-item').removeClass("hidden");
$('.rightbouttons').addClass("hidden"); 
});

$(".backbtnproduct").on('click','span.backproduct',function(){
$('.productcalculation').addClass("hidden");
$('.right-sidebar').removeClass("hidden");
$('.rightbouttons').removeClass("hidden"); 
/*$('.ExitSplit').addClass("exit_split");
*/});

$(".removebtn ").on('click','span.removeproduct',function(){
$('.productcalculation').addClass("hidden");
$('.right-sidebar').removeClass("hidden");
$('.rightbouttons').removeClass("hidden"); 
});
})

/*for when we click on remove button  removeorder */
$(document).ready(function(){
$(".removebtn").on('click','a.remove_cart', function(event){
var cart_id=$(this).attr('id');
$('.productquantity').attr('id',cart_id);
$.ajax({
url:"{{config('app.baseURL')}}/admin/update_quantity",
type:'POST',
data:{'cart_id':cart_id,_token:'{{csrf_token()}}'},
success:function(data){
document.getElementById("totalammount").innerHTML=data;
}
});
});
});

/*for when we click on appaly changes*/
$(document).ready(function(){
$(".nav-item ").on('click','a.applychanges', function(event){  
var cart_id=$(this).attr('id');
var product_quantity=$('.input-number').val();
var base_price= $('#unitprice').text();
$.ajax({
url:"{{config('app.baseURL')}}/admin/add_update_quantity",
type:'POST',
data: {'cart_id':cart_id,'quantity':product_quantity,'base_price':base_price,_token:'{{csrf_token()}}'},


success:function(data){
document.getElementById("totalammount").innerHTML=data;
}
});
$('.productcalculation').addClass("hidden");
$('.rightbouttons').removeClass("hidden"); 
});
});


$('.btn-number').click(function(e){
// e.preventDefault();
fieldName = $(this).attr('data-field');
type = $(this).attr('data-type');
var input = $("input[name='"+fieldName+"']");
var currentVal = parseInt(input.val());

if (currentVal==0) {
alert(currentVal);
$('.input-number').val(1);
}

if (!isNaN(currentVal) && currentVal!=0) {
if(type =='minus') {

if(currentVal > input.attr('min')) {
input.val(currentVal - 1).change();
} 
var n1= $('.input-number').val();
var n2=document.getElementById("unitprice").innerHTML;
document.getElementById("qty_price").innerHTML=n1*n2;
} else if(type == 'plus') {

if(currentVal < input.attr('max')) {
input.val(currentVal + 1).change();
}

var n1= $('.input-number').val();
var n2=document.getElementById("unitprice").innerHTML;
document.getElementById("qty_price").innerHTML=n1*n2;
}

} else {
$('.input-number').val(1);

var n1= $('.input-number').val();
var n2=document.getElementById("unitprice").innerHTML;
document.getElementById("qty_price").innerHTML=n1*n2;
}
});
</script>
@endsection