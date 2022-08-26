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
                        <h4 class="page-title">Categories</h4>
                        <!-- <ol class="breadcrumb"> -->
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">Dastyle</a></li> -->
                        <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                        <!-- </ol> -->
                     </div>
                     <!--end col-->
                     <!-- <div class="col-auto align-self-center">
                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                            <span class="ay-name" id="Day_Name">Today:</span>&nbsp;
                            <span class="" id="Select_date">Jan 11</span>
                            <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i data-feather="download" class="align-self-center icon-xs"></i>
                        </a>
                        </div> -->
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
            <div class="col-lg-9">
               <div class="card">
                  <div class="card-header">
                     <div class="row align-items-center">
                        <div class="col">
                           <h4 class="card-title">Setup</h4>
                        </div>
                        <!--end col-->
                        <!-- <div class="col-auto"> 
                           <div class="dropdown">
                               <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Setup List<i class="las la-angle-down ml-1"></i>
                               </a>
                               <div class="dropdown-menu dropdown-menu-right">
                                   <a class="dropdown-item" href="#">Categories</a>
                                   <a class="dropdown-item" href="#">Sub Categories</a>
                                   <a class="dropdown-item" href="#">Last Month</a>
                                   <a class="dropdown-item" href="#">This Year</a>
                               </div>
                           </div>               
                           </div> -->
                        <!--end col-->
                     </div>
                     <!--end row-->                                  
                  </div>
                  <!--end card-header-->
                  <div class="card-body">
                     <form>
                        <div class="form-row">
                           <div class="col-md-4 mb-3">
                              <label for="validationServer01">Category Name</label>
                              <!-- is-valid -->
                              <input type="text" class="form-control " id="validationServer01" placeholder="Food and Drinks" value="Food and Drinks" required="">
                              <!-- <div class="valid-feedback">
                                 Looks good!
                                 </div> -->
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-4 mb-3">
                              <label for="validationServer01">Parent Category</label>
                              <select class="form-control form-control-sm">
                                 <option>---Select Parent Category---</option>
                              </select>
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-4 mb-3">
                              <label for="validationServer01">Status</label>
                              <select class="form-control form-control-sm">
                                 <option>Active</option>
                                 <option>Inactive</option>
                              </select>
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                        </div>
                        <div class="button-items"> 
                           <button type="submit" class="btn btn-soft-warning waves-effect waves-light">Submit</button>
                           <button type="submit" class="btn btn-soft-danger waves-effect waves-light">Cancel</button>
                        </div>
                     </form>
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