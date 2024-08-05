<div id="modifyItemContentScroll" class="modifyItemContentScroll">
                        <div class="modifyItemContentScrollInnerWrapper noScrollbars" style="overscroll-behavior: none; overflow-y: auto;">
                            <ul class="tabs">
                                <li id="tdModifyGeneral" class="active">General</li>
                                <li id="tdModifyModifiers">Modifiers</li>
                            </ul>
                            
                            <div class="row quantity">
                                
                                <div class="element center">
                                  <div class="label center">Quantity</div>
                                </div>
                                <div class="element">
                                    <div class="button btnSecondary btnMinus">–</div>
                                    <div class="textfield numberfield fieldQuantity openNumberPad" id="tdModifyChangeQty">1</div>
                                    <div class="button btnSecondary btnAdd">+</div>
                                </div>
                            </div>
                            
                            
                            <div id="rowOverrideTax" class="row modifierTax" style="display: none;">
                              <div class="label">Show taxes</div>
                              <div style="float:right;">
                                <div class="iPhoneCheckContainer" style="width: 64px;"><input class="checkboxSlider" type="checkbox" id="chkTaxTurnOn" checked="checked"><label class="iPhoneCheckLabelOff" style="width: 75px;">
  <span style="margin-right: -40px;">Off</span>
</label><label class="iPhoneCheckLabelOn" style="width: 44px;">
  <span style="margin-left: 0px;">On</span>
</label><div class="iPhoneCheckHandle" style="width: 15px; left: 40px;">
  <div class="iPhoneCheckHandleRight">
    <div class="iPhoneCheckHandleCenter"></div>
  </div>
</div></div>
                              </div>
                            </div>
        
                            <div class="row">
                                <div class="element">
                                    <div class="button btnSecondary btnAdjustLineTotal" id="btnModifyChangePrice" style="display: none;">Edit</div>
                                    <div class="label">Unit Price</div>
                                    <div class="textfield numberfield openNumberPad unitPriceField" id="tdModifyChangePrice" lineid="NKUndf" data="300.00" variation="1" ispercentage="1">$300.00</div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="element">
                                    <div class="label labelLineTotal">Line Total</div>
                                    <div class="lineTotalFieldMobileWrapper">
                                        <div class="textfield numberfield openNumberPad lineTotalField" id="tdModifyApplyDiscount">$300.00</div>
                                    </div>
                                    <div class="button btnPercentage" id="btnDiscount" style="display:none;"><span>%</span><span style="display:none;">$</span></div>
                                    <div class="btnAdjustLineTotal orange" id="btnAdjustLineTotal">Add Adjustment</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="element">
                                    <div class="label">Note</div>
                                    <textarea class="notes" id="txtComment" placeholder="Enter a note or description" rows="3" style="overflow: hidden; overflow-wrap: break-word; height: 92px;"></textarea>
                                    <div class="button btnIcon btnClearSmall" id="btnClearNotes" style="display: none;"><i class="ion ion-ios-close-empty"></i></div>
                                </div>
                            </div>
                            <div class="row" id="modifyLineCoursesContainer">
                                <div class="element">
                                    <div class="label">Courses</div>
                                    <div class="modifierCourses" id="courseListContainer"></div>
                                </div>
                            </div>
                        </div>

                    </div>






                                   <div class="element">
                                    <div class="button btnSecondary btnAdjustLineTotal" id="btnModifyChangePrice" style="display: none;">Edit</div>
                                    <div class="label">Unit Price</div>
                                    <div class="textfield numberfield openNumberPad unitPriceField" id="tdModifyChangePrice" lineid="JAv3fG" data="200.00" variation="1" ispercentage="1">$200.00</div>
                                </div>