<?php include('includes/header.php'); ?>
<!-- Left Sidenav -->
<?php include('includes/sidebar.php'); ?>
<!-- end left-sidenav-->
<div class="page-wrapper">
   <!-- Top Bar Start -->
   <?php include('includes/topbar.php'); ?>
   <!-- Top Bar End -->
   <!-- Page Content-->
   <div class="page-content">
      <div class="container-fluid">
         <!-- Page-Title -->
         <div class="row">
            <div class="col-sm-12">
               <div class="page-title-box">
                  <div class="row">
                     <div class="col">
                        <h4 class="page-title">Advertising</h4>
                     </div>
                     <!--end col-->
                  </div>
                  <!--end row-->                                                              
               </div>
               <!--end page-title-box-->
            </div>
            <!--end col-->
         </div>
         <!--end row-->
         <!-- end page title end breadcrumb -->
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header">
                     <div class="row align-items-center">
                        <div class="col">
                           <!-- <h4 class="card-title">List</h4>  -->
                           <ul class="list-unstyled topbar-nav mb-0">
                              <li class="creat-btn">
                                 <div class="nav-link">
                                    <a class=" btn btn-sm btn-soft-warning" href="addadvertising.php" role="button"><i class="fas fa-plus mr-2"></i>Add Advertising</a>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="col-auto">
                           <div class="dropdown">
                              <a href="#" class="btn btn-lg btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              All<i class="las la-angle-down ml-1"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                 <a class="dropdown-item" href="#">Food And Drink</a>
                                 <a class="dropdown-item" href="#">Lifestyle</a>
                                 <a class="dropdown-item" href="#">Hotels</a>
                                 <a class="dropdown-item" href="#">Attraction</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--end row-->                                  
                  </div>
                  <!--end card-header-->
                  <div class="card-body">
                     <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                           <tr>
                              <th>Advertiser Name</th>
                              <th>Merchant Name</th>
                              <th>Description</th>
                              <th>Amount</th>
                              <th>Image</th>
                              <th>Status</th>
                              <th>Action</th>
                              <th>Approval</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>Home Chef</td>
                              <td>4322</td>
                              <td>Food,Drink,Beverages</td>
                              <td>2000</td>
                              <td class="d-flex justify-content-center align-items-center"><img src="assets/images/bienvenue-logo.svg" alt="Advertising-image" width="50px" height="50px" /></td>
                              <td><span class="badge badge-soft-success">Approved</span></td>
                              <!-- <td> -->
                                 <!-- <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1"></label>
                                 </div> -->
                                 <td class="text-left">                                                       
                                                    <a href="editadvertising.php"><i class="las la-pen text-info font-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                                </td>
                              <!-- </td> -->
                              <td>
                                 <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              
                              <td>Master of Burger</td>
                              <td>4322</td>
                              <td>Food</td>
                              <td>6000</td>
                              <td class="d-flex justify-content-center align-items-center"><img src="assets/images/bienvenue-logo.svg" alt="Advertising-image" width="50px" height="50px" /></td>
                              <td><span class="badge badge-soft-warning">Rejected</span></td>
                              <!-- <td>
                                 <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1"></label>
                                 </div>
                              </td> -->
                              <td class="text-left">                                                       
                                 <a href="editadvertising.php"><i class="las la-pen text-info font-18"></i></a>
                                 <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                              </td>
                              <td>
                                 <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                    <label class="custom-control-label" for="customSwitch2"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>King Biryani</td>
                              <td>4322</td>
                              <td>Shop</td>
                              <td>1000</td>
                              <td class="d-flex justify-content-center align-items-center"><img src="assets/images/bienvenue-logo.svg" alt="Advertising-image" width="50px" height="50px" /></td>
                              <td><span class="badge badge-soft-danger">Pending</span></td>
                              <!-- <td>
                                 <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1"></label>
                                 </div>
                              </td> -->
                              <td class="text-left">                                                       
                                 <a href="editadvertising.php"><i class="las la-pen text-info font-18"></i></a>
                                 <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                              </td>
                              <td>
                                 <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                    <label class="custom-control-label" for="customSwitch3"></label>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <!--end card-body--> 
               </div>
               <!--end card--> 
            </div>
            <!--end col-->               
         </div>
         <!--end row-->
      </div>
      <!-- container -->
      <?php include('includes/footer.php'); ?>
      <!--end footer-->
   </div>
   <!-- end page content -->
</div>
<?php include('includes/scripts.php'); ?>