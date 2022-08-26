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
                        <h4 class="page-title">Merchant List</h4>
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
                           <h4 class="card-title">List</h4>
                        </div>
                        <div class="col-auto">
                           <div class="dropdown">
                              <a href="#" class="btn btn-md btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Select Status<i class="las la-angle-down ml-1"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                 <a class="dropdown-item" href="#">Pending</a>
                                 <a class="dropdown-item" href="#">Approved</a>
                                 <a class="dropdown-item" href="#">Rejected</a>
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
                              <th>Brand Name</th>
                              <th>Business Name</th>
                              <th>Address</th>
                              <th>Type of Business</th>
                              <th>Sub-Type of Business</th>
                              <th>Business Number</th>
                              <th>Email</th>
                              <th>Website</th>
                              <th>Status</th>
                              <th>Action</th>
                              <th>Profile</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>Home Chef</td>
                              <td>Food</td>
                              <td>B/D-63, Gulshan-e-Iqbal</td>
                              <td>Restaurants</td>
                              <td>Desi</td>
                              <td>1235566</td>
                              <td>homechef@gmail.com</td>
                              <td><a href="https://orio.tech/">orio.tech</a></td>
                              <td><span class="badge badge-soft-success">Approved</span></td>
                              <td>
                                 <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1"></label>
                                 </div>
                              </td>
                              <td>
                                 <a class=" btn btn-sm btn-soft-warning"  href="view.php" role="button">View</a>
                              </td>
                           </tr>
                           <tr>
                              <td>Food Express</td>
                              <td>Food</td>
                              <td>B/K-70, DHA</td>
                              <td>Shop</td>
                              <td>Sea Food</td>
                              <td>1235566</td>
                              <td>foodexpress@gmail.com</td>
                              <td><a href="https://orio.tech/">orio.tech</a></td>
                              <td><span class="badge badge-soft-danger">Rejected</span></td>
                              <td>
                                 <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                    <label class="custom-control-label" for="customSwitch2"></label>
                                 </div>
                              </td>
                              <td>
                                 <a class=" btn btn-sm btn-soft-warning"  href="view.php" role="button">View</a>
                              </td>
                           </tr>
                           <tr>
                              <td>Oh My Grill</td>
                              <td>Food</td>
                              <td>B/H-01,Gulistan-e-Johar</td>
                              <td>Hotel</td>
                              <td>Fast Food</td>
                              <td>1235566</td>
                              <td>omg@gmail.com</td>
                              <td><a href="https://orio.tech/">orio.tech</a></td>
                              <td><span class="badge badge-boxed  badge-outline-warning">Pending</span></td>
                              <td>
                                 <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                    <label class="custom-control-label" for="customSwitch3"></label>
                                 </div>
                              </td>
                              <td>
                                 <a class=" btn btn-sm btn-soft-warning" href="view.php" role="button">View</a>
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