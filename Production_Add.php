   <?php include 'header.php'; ?>


<link rel="stylesheet" href="css/select2.min.css">
<link rel="stylesheet" href="css/select2-bootstrap4.min.css">


    <script>
 

    $(document).ready(function() {
        $('.selectsearch1').select2();
     
        $('.selectsearch1').select2({
        theme: 'bootstrap4',
           
        });
        
        
        
    });

</script>




    

<div class="container"> 
			<div class="row" >
               <div class="col-12 col-lg-12 col-xl-12">  
                    
            
            <div class="card shadow">
                <div class="card-body">
                    <div class="card-title text-center font-weight-bolder"> <h3 class="text-center">Production Add</h3></div>
                    <hr>
                
                <div class="row">
                              
                  <div class="col-12 col-lg-6 col-xl-6 " >
                
			
					 <div class="form-group">
				  <label for="basic-select" class=" col-form-label ">Product Name</label>
				
					<select data-live-search="true" class="form-control  form-control-rounded selectsearch1 ">
                         
							<option>Mango</option>
							<option>Orange</option>
							<option>Lychee</option>
							<option>Pineapple</option>
							<option>Apple</option>
							<option>Banana</option>
							<option>Grapes</option>
							<option>Water Melon</option>
						  </select>
			
                          
				</div>
                      
                      
                    <div class="form-group">
				    <label for="basic-select" class="col-form-label">Color</label>
				
					<select class="form-control" id="basic-select ">
                          <option>Option 1</option>
                          <option>Option 2</option>
                          <option>Option 3</option>
                          <option>Option 4</option>
                          <option>Option 5</option>
                        </select>
			
                          
				    </div>
                      
                </div>
                    
                  <div class="col-12 col-lg-6 col-xl-6  ">
                        
                      
                      <div class="form-group row">
                             <label for="basic-select" class="col-form-label">Enter Product Piece or M<sup style="font-size:11px;">2</sup>     </label>
                         
                             <input type="number" class="form-control  form-control-rounded" id="input-27" placeholder="Enter QTY">
                     
                             <select class="form-control mt-2   form-control-rounded " id="basic-select">
                                          <option>Option 1</option>
                                          <option>Option 2</option>
                                          <option>Option 3</option>
                                          <option>Option 4</option>
                                          <option>Option 5</option>
                                </select>
                             
                      
                      </div>
                             
                </div>
                    
                    
                </div>
                
                <hr>
                
                <div class="row">
                        
                      <div class="col-12 col-lg-12 col-xl-12" id="product_categories12">
                         <div class="form-group row category_block12 " >
                             <label for="basic-select" class="col-sm-2 col-lg-2 col-xl-2 mt-2 form-label">Material Type</label>
                             <div class="col-sm-3 col-lg-3 col-xl-3  mt-2" >
                                 <select class="form-control  form-control-rounded "> 
                                      <option  value="">Select Attribute</option>
                                    <option  value="red">Foo0</option>
                                    <option  value="1773">Foo1</option>
                                    <option  value="1775">Foo2</option>
                                    <option  value="1765">Foo3</option>
                                    <option  value="1802">Foo4</option>
                                    <option  value="1766">Foo5</option>
                                </select>
                             </div>
                       
                             <div class="col-sm-2 col-lg-2 col-xl-2 mt-2">
                             <input type="number" class="form-control form-control-rounded" id="input-27" placeholder="Enter QTY">
                             </div>
                             <div class="col-sm-3 col-lg-3 col-xl-3 mt-2">
                             <select class="form-control  form-control-rounded  " id="basic-select12">
                                          <option>Option 1</option>
                                        <option>Option 2</option>
                                          <option>Option 3</option>
                                          <option>Option 4</option>
                                          <option>Option 5</option>
                                </select>
                             
                             </div>
                           
                             
                             
                             <div class=" col-sm-2 col-lg-2 col-xl-2 mt-2 text-center ">
                            
                                 
                                 <a href="#" onClick="return removeselect(this);" class="remove_cat btn-danger btn font-weight-bold" style="display: none"> &#45; </a>
                                 <a href="#" onClick="return addselect(this);" class="add_cat btn-success btn ml-2 font-weight-bold"> &#43; </a>
                             </div>
                            
                    
                        
                    </div>
                           <hr>
            </div>
                    <hr>
   
                  
                      <div class="col-12 col-lg-12 col-xl-12 ">  
              <div class="form-group row">
                             
                   <div class="col-sm-12 mt-2 text-center" >
                  <button type="button " class="btn btn-danger font-weight-bold">&#10005; Cancel</button>
                       <button type="button" class="btn  btn-success font-weight-bold ">&#10003; Create</button>
                  
                    
                </div>
                    </div>
                   </div>
          
     
               
            

            
            
            </div>
  
                
                </div>
                
            </div>
                    
                    
                    
        </div>
                
                
     </div>
                    
            
            
                        
    </div>

<script src="Java/select2.min.js"></script>
                



        <script>
            
     
                function addselect(s){
                            
                           
                    // Store the block in a variable
                var $block = $('#product_categories12 > .category_block12:last');

                    // Grab the selected value
                var theValue = $block.find(':selected').val();

           
                    
                    
                    // Clone the block 
                var $clone = $block.clone(); 
                    
                    

                    // Find the selected value in the clone, and remove
                $clone.find('option[value=' + theValue + ']').remove();
                $clone.find('.remove_cat').show();
                    
                $clone.find("input[type='number']").val("");
                    
                    
                    // Append the clone
                var $removeblock = $block.after($clone);
             /*       $removeblock.('.category_block12').remove();*/
                     
                    $(document).on("click", ".remove_cat", function(e) {
                        var $e = $(e.currentTarget);
                        $e.closest('.category_block12').remove();
                      });
                
                   
                    
                        
                    

                
                    set_add_delete_links();return false;
                    
                 
         

            
                    
                   
                   
                }
          
            
  </script>  
                   
                              
      