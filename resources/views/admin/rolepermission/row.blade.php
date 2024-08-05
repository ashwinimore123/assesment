 $('#myTable tbody').on('click', 'tr td input.read', function () {

            							var txt;
					            		var r = confirm("CONFIRM YOUR ACTION");
							            if (r == false) {
								          console.log("xxxxxxx");
								          return
							          	}

                           var tr = $(this).closest('tr');
                           var file_id = $(tr).find('td').eq(1)[0].innerHTML;
                           var permission_id = $(tr).find('td').eq(0)[0].innerHTML;
                           if ($(this).is(":checked")) {
                             console.log(permission_id);
                             var read_value=1;
                             baseURL="{{config('app.baseURL')}}";
                             $.ajax({
                              type: "get",
                              method: 'Get',
                              url: baseURL+"/getCheckUncheckForRead",
                              data: {'file_id':file_id,'read_value':read_value,'permission_id':permission_id},
                              dataType: 'json',
                              cache: false,

                              success: function (result) {   

                              },
                              error: function (error) {
                              }
                            });
                           }else{

                             var read_value=0;       
                             baseURL="{{config('app.baseURL')}}";
                             $.ajax({
                              type: "get",
                              method: 'Get',
                              url: baseURL+"/getCheckUncheckForRead",
                              data: {'file_id':file_id,'read_value':read_value,'permission_id':permission_id},
                              dataType: 'json',
                              cache: false,

                              success: function (result) {   

                              },
                              error: function (error) {
                              }
                            });
                           }
                        });
// ajex call a ha
 Route::get('getCheckUncheckForRead',['middleware'=>['auth','restrictIp'],'uses'=>'FileController@getCheckUncheckForRead']);
 public function getCheckUncheckForRead(Request $request)
    {
        $file_id=$request->file_id;       
        $read_value=$request->read_value;
        $permission_id=$request->permission_id;
        if($read_value==1){
            $permission=Permission::find($permission_id);
            $permission->read = 1;        
            $permission->save();
        }
        else{
            $permission=Permission::find($permission_id);
            $permission->read=0;          
            $permission->save();      
        }
        return $permission;
        }
    ----------------------------------------------
    pos table



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

<!--  <div class="col-xl-2">
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


 <div class="col-xl-2">
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


 <div class="col-xl-2">
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

 <div class="col-xl-2">
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
</div> -->