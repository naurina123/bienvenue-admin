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
                        <h4 class="page-title">Add Advertising</h4>
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
                           <h4 class="card-title">Advertising Detail</h4>
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
                           <div class="col-md-6 mb-3">
                              <label for="validationServer01">Advertising Name</label>
                              <!-- is-valid -->
                              <input type="text" class="form-control " id="validationServer01" placeholder="Advertising Name" value="Advertising Name" required="">
                              <!-- <div class="valid-feedback">
                                 Looks good!
                                 </div> -->
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationServer01">Merchant Name </label>
                              <!-- is-valid -->
                              <input type="text" class="form-control " id="validationServer01" placeholder="Advertising Code" value="Advertising Code" required="">
                              <!-- <div class="valid-feedback">
                                 Looks good!
                                 </div> -->
                           </div>
                        </div>
                      
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationServer01">Description </label>
                              <!-- is-valid -->
                              <textarea type="text" class="form-control " id="validationServer01" placeholder="Description" value="Description" required=""></textarea>
                              <!-- <div class="valid-feedback">
                                 Looks good!
                                 </div> -->
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationServer01">Amount</label>
                              <input type="text" class="form-control " id="validationServer01" placeholder="Amount" value="Amount" required="">
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                        </div>
                       
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">Approval</label>
                                 </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <!--end card-body--> 
               </div>
               <!--end card--> 
            </div>
            <div class="col-md-3">
                <form>
                    <div class="form-row">
                            <div class="col-md-12 ">
                                <label for="validationServer01">Upload Image</label>
                                    <input type="file" id="input-file-now" class="dropify" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                </form>
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