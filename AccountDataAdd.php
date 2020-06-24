
<!--$(document).ready(function() {
    $('.js-example-basic-single').select2();
});-->


     <?php include 'header.php'; ?> 

        <link rel="stylesheet" href="css/select2.min.css">
        <link rel="stylesheet" href="css/select2-bootstrap4.min.css">


    <script>
 

    $(document).ready(function() {
        $('.selectsearch2').select2();
     
        $('.selectsearch2').select2({
    theme: 'bootstrap4',
           
        });
        
        
        
    });

</script>

<div class="container"> 
    
    
			<div class="row" >
                
    
                
                
                <div class="col-12 col-lg-12 col-xl-12">
                <div class="card shadow">
                              
                <div class="card-body">
               <div class="card-title text-center font-weight-bolder"><h3>Account Details</h3>                 
                    
                    </div>    
            <hr>       
                    
                    
                <div class="row">    
                <div class="col-12 col-lg-6 col-xl-6" >
                
                      
			     <div class="form-group">
				  <label for="basic-select" class=" col-form-label font-weight-bold">Expense Type</label>
				
					<select class="form-control" id="basic-select ">
                          <option>Direct Expenses</option>
                          <option>In-Dirext Expenses</option>
                          <option>Option 3</option>
                          <option>Option 4</option>
                          <option>Option 5</option>
                        </select>
			
                          
				</div>
                      
                      
                      
					<div class="form-group">
                              <label for="exampleDropdown" class="col-form-label font-weight-bold">Sub Expenses </label>
                         <hr>
                         
                        
                        <ul class="nav nav-pills">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#expenseselect">Select</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#expensecreate">Create</a>
                          </li>

                        </ul>

                        <!-- Tab panes -->
                       <div class="tab-content">
                        <div class="tab-pane container active" id="expenseselect">
                             
            
                        <div class="form-group row mt-2">
               
                            <select data-live-search="true" class="form-control  mt-2 form-control-rounded selectsearch2 ">
                         
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
                        </div>
                    
                           
                          <div class="tab-pane container fade" id="expensecreate">
                                
                                 
                           <div class="form-group row mt-2">
                             <input type="text" class="form-control col-8  form-control-rounded" id="input-27" placeholder="Enter Sub-Category of Expense">
                              
                              <button type="button" class="btn col-3 ml-2  btn-success font-weight-bold ">&#10003; Create</button>
                  
                            </div>
                              
                            </div>
                         

         

                        </div>
                        
                        
                        
                        
                        
				<!--	<label for="exampleDropdown" class=" col-form-label">Sub Expenses </label>
                 
						<select data-live-search="true" class="form-control selectpicker">
                         
							<option>Mango</option>
							<option>Orange</option>
							<option>Lychee</option>
							<option>Pineapple</option>
							<option>Apple</option>
							<option>Banana</option>
							<option>Grapes</option>
							<option>Water Melon</option>
						</select>
                        -->
                  	</div> 
                 
                      
                </div>
                    
                  
                  
                        
                          
				
                      <div class="col-12 col-lg-6 col-xl-6  ">
                          
                <div class="form-group row ">
                    
                    <label for="exampleDropdown" class="col-form-label">Enter Rate : </label>
                        
                           <input type="number" style="width: 150px;" class="form-control ml-2  form-control-rounded" id="input-27" placeholder="Enter Rate ">
                              
                           <button type="button" class="btn  btn-success ml-1  font-weight-bold ">&#10003; 
                              </button>
                        
                        </div>
                          
                          
                         <div class="form-group row">
                       <label for="basic-select" class="ml-2 mt-2 col-form-label">Enter Amount</label>
                         
                             <input type="number" class="form-control mr-2 form-control-rounded" id="input-27" placeholder="Enter Amount">
                             <!--
                               <div class="field-wrapper">
                        <label for="email" class="label1 mt-2 ml-2">Email</label>
                          <input type="email" name="email" id="email" class="text-field-input form-control  form-control-rounded">
                    </div>-->

                            
                             
                             <select class="form-control mr-2 mt-2 form-control-rounded " id="basic-select ">
                          <option>$ - Dollar</option>
                          <option>FC - Francs</option>
                         
                        </select>
                             
                             <label for="comment" class="ml-2 mt-2 col-form-label">Enter Description</label>
                             
                        <textarea class="form-control px-4 mr-2  form-control-rounded" rows="2" id="comment"></textarea>
                             
                      
                          </div>
                             
                        </div>
                    
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

    
   
                

<script src="Java/select2.min.js"></script>


                <!--

        <script>
            
          /*  $(function() {
  $('.selectpicker').selectpicker();
});*/
     
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
             <!---     
              <script>
$(document).ready(function(){
  
  $('.text-field-input').on('focus', function(){
    $(this).closest('.field-wrapper').addClass('focused');
  });
  
  $('.text-field-input').on('blur', function(){
 
    if  ( $(this).val() === '') {
       $(this).closest('.field-wrapper').removeClass('focused');
    }
  });
  
})
</script>                
  -->          
