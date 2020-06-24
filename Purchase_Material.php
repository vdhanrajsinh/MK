   <?php include 'header.php'; ?> 
            
      <style>
        
    </style>
      <div class="container">


        <div class="row ">
              <div class="col-lg-6">
                   <div class="card shadow">
                   <div class="card-body">
                   <div class="card-title">Suplier Details</div>
                         <hr>
                  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#choose_sup">Select</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#add_new_sup">Add New</a>
    </li>
  
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="choose_sup" class="tab-pane active"><br>
    
        <form>
            <div class="form-group row">
				  <label for="basic-select" class="col-sm-4 col-form-label">Material Type</label>
				  <div class="col-sm-8">
					<select class="form-control" data-live-search="true" id="basic-select">
                          <option>Option 1</option>
                          <option>Option 2</option>
                          <option>Option 3</option>
                          <option>Option 4</option>
                          <option>Option 5</option>
                        </select>
				  </div>
				</div>
    
            <div class="form-group row">
				  <label for="basic-select" class="col-sm-4 col-form-label">Sup Name</label>
				  <div class="col-sm-8">
					<select class="form-control" id="basic-select">
                          <option>Option 1</option>
                          <option>Option 2</option>
                          <option>Option 3</option>
                          <option>Option 4</option>
                          <option>Option 5</option>
                        </select>
				  </div>
				</div>
            
                <hr>
                <div class="form-group row">
                
                    <label for="input-130" class="col-sm-12 col-form-label font-weight-bolder">Name : <label for="input-130" class="col-form-label font-weight-normal">Name</label></label>
                          
                    <label for="input-130" class="col-sm-12 col-form-label font-weight-bolder">Address : <label for="input-130" class=" col-form-label font-weight-normal">Address</label></label>
                           
                    
                    
                    
                    
                    
                
                     <label for="input-130" class="col-sm-12 col-form-label font-weight-bolder">Mobile : <label for="input-130" class="col-form-label font-weight-normal">Name</label></label>
                     <label for="input-130" class="col-sm-12 col-form-label font-weight-bolder">Gov ID : <label for="input-130" class="col-form-label font-weight-normal">Name</label></label>
                     <label for="input-130" class="col-sm-12 col-form-label font-weight-bolder">Country : <label for="input-130" class="col-form-label font-weight-normal">Name</label></label>
                     <label for="input-130" class="col-sm-12 col-form-label font-weight-bolder">State : <label for="input-130" class="col-form-label font-weight-normal">Name</label></label>
                     <label for="input-130" class="col-sm-12 col-form-label font-weight-bolder">Bank Account : <label for="input-130" class="col-form-label font-weight-normal">Name</label></label>
                       
                    
                </div>
                
            
           
                
                          
            
            
        </form>
        
        
    </div>
    <div id="add_new_sup" class="tab-pane fade"><br>
     
                    <form>
                        
                        <div class="form-group row">
				  <label for="basic-select" class="col-sm-4 col-form-label">Material Type</label>
				  <div class="col-sm-8">
					<select class="form-control form-control-rounded" id="basic-select">
                          <option>Option 1</option>
                          <option>Option 2</option>
                          <option>Option 3</option>
                          <option>Option 4</option>
                          <option>Option 5</option>
                        </select>
				  </div>
				</div>
                        
                   <div class="form-group row">
            <label for="input-26" class="col-sm-4 col-form-label">Name</label>
            <div class="col-sm-8">
            <input type="text" class="form-control form-control-rounded" id="input-26" placeholder="Enter  Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="input-27" class="col-sm-4 col-form-label">Address</label>
            <div class="col-sm-8">
            <input type="text" class="form-control form-control-rounded" id="input-27" placeholder="Enter Address">
            </div>
          </div>
          <div class="form-group row">
            <label for="input-28" class="col-sm-4 col-form-label">Mobile</label>
            <div class="col-sm-8">
            <input type="tel" class="form-control form-control-rounded" id="input-28" placeholder="Enter Mobile Number">
            </div>
          </div>
          <div class="form-group row">
            <label for="input-29" class="col-sm-4 col-form-label">Gov_ID</label>
            <div class="col-sm-8">
            <input type="text" class="form-control form-control-rounded" id="input-29" placeholder="Enter Gov_ID_Number">
            </div>
          </div>
          <div class="form-group row">
            <label for="input-30" class="col-sm-4 col-form-label">Country</label>
            <div class="col-sm-8">
            <input type="text" class="form-control form-control-rounded" id="input-30" placeholder="Enter Country">
            </div>
          </div>
                <div class="form-group row">
            <label for="input-31" class="col-sm-4 col-form-label">State</label>
            <div class="col-sm-8">
            <input type="text" class="form-control form-control-rounded" id="input-31" placeholder="Enter State">
            </div>
          </div>
                <div class="form-group row">
            <label for="input-32" class="col-sm-4 col-form-label">Bank Account</label>
            <div class="col-sm-8">
            <input type="text" class="form-control form-control-rounded" id="input-32" placeholder="Bank Account Number">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label"></label>
            <div class="col-sm-8">
            <div class="icheck-material-primary">
            <input type="checkbox" id="user-checkbox6" checked="">
            <label for="user-checkbox6">Remember me</label>
            </div>
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary btn-round px-5"><i class="icon-lock"></i> Register</button>
            </div>
          </div>
          </form>
    </div>
    </div>
</div>
               
                  </div>
            </div>


                  
                  
     
              <div class="col-lg-6">
                <div class="card shadow">
                   <div class="card-body">
                   <div class="card-title">Purchase Material Details</div>
                   <hr class="font-weight-bolder">
                       
                           
                        <div class="form-group row">
				  <label for="basic-select" class="col-sm-4 col-form-label">Material Type</label>
				  <div class="col-sm-8">
					<select class="form-control form-control-rounded" data-live-search="true" id="basic-select">
                          <option>Option 1</option>
                          <option>Option 2</option>
                          <option>Option 3</option>
                          <option>Option 4</option>
                          <option>Option 5</option>
                        </select>
				  </div>
				</div>
                        <div class="form-group row">
				  <label for="basic-select" class="col-sm-4 col-form-label">Color</label>
				  <div class="col-sm-8">
					<select class="form-control form-control-rounded" id="basic-select">
                          <option>Option 1</option>
                          <option>Option 2</option>
                          <option>Option 3</option>
                          <option>Option 4</option>
                          <option>Option 5</option>
                        </select>
				  </div>
				</div>
                        
                   <div class="form-group row">
            <label for="input-26" class="col-sm-4 col-form-label">Date</label>
            <div class="col-sm-8">
            <input type="date" class="form-control form-control-rounded" id="input-26" placeholder="Enter  Name">
            </div>
          </div>
                       
          <div class="form-group row">
            <label for="input-27" class="col-sm-4 col-form-label">QTY</label>
            <div class="col-sm-8 d-flex">
            <input type="number" class="form-control form-control-rounded" id="input-27" placeholder="Enter QTY">
                <select class="form-control form-control-rounded ml-2" id="basic-select">
                          <option>Option 1</option>
                          <option>Option 2</option>
                          <option>Option 3</option>
                          <option>Option 4</option>
                          <option>Option 5</option>
                </select>
            </div>
          </div> 
                      <div class="form-group row">
            <label for="input-26" class="col-sm-4  col-form-label">Price</label>
            <div class="col-sm-8">
            <input type="number" class="form-control form-control-rounded" id="input-26" placeholder="Enter  Name">
            </div>
          </div>
                             <div class="form-group row">
            <label for="input-26" class="col-sm-4 col-form-label">Remark</label>
            <div class="col-sm-8">
            <input type="text" class="form-control form-control-rounded" id="input-26" placeholder="Enter  Name">
            </div>
          </div>
                       
                       
                            <div class="form-group row justify-content-center ">
            <label class=" col-form-label"></label>
            <div>
            <button type="submit" class="btn btn-primary btn-round px-5"><i class="icon-lock"></i> ADD</button>
            </div>
          </div>
                       
                 </div>
                 </div>
              </div>
            </div>
          </div>
  
      
      
     
