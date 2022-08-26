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
                        <h4 class="page-title">Merchant Profile</h4>
                     </div>
                     <!--end col-->
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
                           <h4 class="card-title">Business Detail</h4>
                        </div>
                        <!--end col-->
                        <!--end col-->
                     </div>
                     <!--end row-->                                  
                  </div>
                  <!--end card-header-->
                  <div class="card-body">
                     <form>
                        <div class="form-row">
                           <div class="col-md-4 mb-3">
                              <label for="validationServer01">Brand Name</label>
                              <!-- is-valid -->
                              <input type="text" class="form-control " id="validationServer01" placeholder="Food and Drinks" value="Company name" required="">
                              <!-- <div class="valid-feedback">
                                 Looks good!
                                 </div> -->
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="validationServer01">Business Name</label>
                              <!-- is-valid -->
                              <input type="text" class="form-control " id="validationServer01" placeholder="Food and Drinks" value="Company name" required="">
                              <!-- <div class="valid-feedback">
                                 Looks good!
                                 </div> -->
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-4 mb-3">
                              <label for="validationServer01">Street </label>
                              <!-- is-valid -->
                              <input type="text" class="form-control " id="validationServer01" placeholder="Street Name" value="Street Name" required="">
                              <!-- <div class="valid-feedback">
                                 Looks good!
                                 </div> -->
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="validationServer01">Unit Number </label>
                              <!-- is-valid -->
                              <input type="text" class="form-control " id="validationServer01" placeholder="Street Name" value="Street Name" required="">
                              <!-- <div class="valid-feedback">
                                 Looks good!
                                 </div> -->
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-4 mb-3">
                              <label for="validationServer01">Postal Code</label>
                              <input type="text" class="form-control " id="validationServer01" placeholder="Postal Code" value="Postal Code" required="">
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="validationServer01">City</label>
                              <select class="form-control form-control-sm">
                                 <option>----Select City ----</option>
                              </select>
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-4 mb-3">
                              <label for="validationServer01">Province</label>
                              <input type="text" class="form-control " id="validationServer01" placeholder="Postal Code" value="Postal Code" required="">
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="validationServer01">Country</label>
                              <select class="form-control form-control-sm">
                                 <option>----Select City ----</option>
                              </select>
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-4 mb-3">
                              <label for="validationServer01">Cuisine</label>
                              <select class="form-control form-control-sm">
                                 <option>----Select Reason for choosing us ----</option>
                              </select>
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="validationServer01">Business Phone Number</label>
                              <select class="form-control form-control-sm">
                                 <option>----Select City ----</option>
                              </select>
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-4 mb-3">
                              <label for="validationServer01">Email </label>
                              <!-- is-valid -->
                              <input type="text" class="form-control " id="validationServer01" placeholder="Street Name" value="Street Name" required="">
                              <!-- <div class="valid-feedback">
                                 Looks good!
                                 </div> -->
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="validationServer01">Website </label>
                              <!-- is-valid -->
                              <input type="text" class="form-control " id="validationServer01" placeholder="Street Name" value="Street Name" required="">
                              <!-- <div class="valid-feedback">
                                 Looks good!
                                 </div> -->
                           </div>
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