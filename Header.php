<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <!-- Bootstrap CSS -->
      
     
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/Design.css">

  
   
 
   <!--    <link rel="stylesheet" href="CSS/inspinia.css">-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://kit.fontawesome.com/2a54b3e5a5.js" crosslogin="anonymous"></script>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  
<style>
   
    .sidebar-menu li{
        text-decoration: none;
        outline: none;
  
        
    }
    .sidebar-submenu li a{
        text-decoration: none;
        outline: none;
       
    }
    #colorsetnav{
  background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);
}
    .d-md-none1{
        outline: none;
        text-decoration: none;
    }
    .d-md-none1:hover{
        background: #fff;
        opacity: 0.9;
    }
    .d-md-none1.active{
        background: #fff;
        opacity: 0.9;
    }
      </style>
      
      
    </head>
    
    
      <div class="side_navclass" id="side_navid">
             <div class="brand-logo">
              <a href="#">
               <img src="img/user1.png" class="logo-icon" alt="logo icon">
               <h5 class="logo-text"><b>Admin Pannel</b></h5>
             </a>
           </div>

       
          
            <div class="user-details">
                    <div class="media align-items-center user-pointer" data-toggle="collapse" data-target="#user-dropdown" aria-expanded="true">
                      <div class="avatar"><img class="mr-3 side-user-img" src="img/user1.png" alt="user avatar"></div>
                       <div class="media-body">
                       <h6 class="side-user-name">Mark Johnson</h6>
                      </div>
                       </div>
                     <div id="user-dropdown" class="collapse" >
                      <ul class="user-setting-menu">
                            <li><a href="#"><i class="icon-user"></i>  My Profile</a></li>
                            <li><a href="#"><i class="icon-settings"></i> Setting</a></li>
                      <li><a href=""><i class="icon-power"></i> Logout</a></li>
                      </ul>
                     </div>
             </div>
          
          <ul class="sidebar-menu">
      <li class="sidebar-header">MAIN NAVIGATION</li>
              
              
      <li>
        <a href="javaScript:void();" class="waves-effect" >
            <!--<i class="zmdi zmdi-view-dashboard"></i>--> <span>Supplier</span><i class="fa fa-angle-left pull-right"></i>
        </a>
		<ul class="sidebar-submenu">
		  <li><a href="sup_add.php">Add New Supplier</a></li>
		  <li><a href="sup_view.php">View Supplier</a></li>
		  <li><a href="editdelet.php">Edit and Delete</a></li>
    
		</ul>
      </li>
         <li>
        <a href="javaScript:void();" class="waves-effect" >
           <span>Purchase</span><i class="fa fa-angle-left pull-right"></i>
        </a>
		<ul class="sidebar-submenu">
		  <li><a href="Purchase_Material.php">Purchase Add</a></li>
		  <li><a href="#">Purchase View</a></li>
          <li><a href="#">Edit and Delete</a></li>

		</ul>
      </li>      
              
                   <li>
        <a href="javaScript:void();" class="waves-effect" >
          <span>Account</span><i class="fa fa-angle-left pull-right"></i>
        </a>
		<ul class="sidebar-submenu">
		  <li><a href="AccountDataAdd.php">Add Data</a></li>
		  <li><a href="#">View Data</a></li>
          <li><a href="#">Edit and Delete</a></li>

		</ul>
      </li>
              
                <li>
        <a href="javaScript:void();" class="waves-effect" >
            <!--<i class="zmdi zmdi-view-dashboard"></i>--> <span>Production</span><i class="fa fa-angle-left pull-right"></i>
        </a>
		<ul class="sidebar-submenu">
		  <li><a href="Production_Add.php">Production Add</a></li>
		  <li><a href="#">View Supplier</a></li>
		  <li><a href="#">Edit and Delete</a></li>
    
		</ul>
      </li>
              
              
              
          </ul>
      </div>
          
     <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" id="colorsetnav">
          
             <!-- Sidebar Toggle (Topbar) -->
            <a href="#" class="opensidemenubtn" onclick="openSlideMenu()">   
          <button class="btn  d-md-none1 rounded-circle ">
            <i class="fa fa-bars"></i>
          </button>
          </a>

                 <a class="navbar-brand" href="Index.php"><b>Nav</b>bar</a>
            
          
          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 " placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

            
           
            
            
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link " href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

              
                          <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>
   

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle"  src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

  </nav>
         </div>
    </div>
    
      
      

    <script src="js/jquery.min.js"></script>
      
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    
    <script src="Java/sidebar-menu.js"></script>
   <script src="js/app-script.js"></script>

  
  <script>
      jQuery(function($){

            $( '.opensidemenubtn' ).click(function(){
            $('.side_navclass').toggleClass('expand') &&  $('.navbar').toggleClass('expand1') &&
                $('.container-fluid'&&'.container').toggleClass('blurred');


            });

            $(document).on("click", function(e){
            if( 
                $(e.target).closest(".side_navclass").length == 0 &&
                $(".side_navclass").hasClass("expand") &&
                $(e.target).closest(".opensidemenubtn").length == 0
             
                

            ){
                $('.side_navclass').toggleClass('expand')&& $('.navbar').toggleClass('expand1') &&
                $('.container-fluid'&&'.container').toggleClass('blurred');
          
            }
            });
            });
      
      </script>  


</html>