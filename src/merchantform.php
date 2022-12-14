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
                        <h4 class="page-title">Merchant Form</h4>
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
                  <!-- <div class="card-header"> -->
                     <!-- <div class="row align-items-center"> -->
                        <!-- <div class="col"> -->
                           <!-- <h4 class="card-title">Business Name</h4> -->
                        <!-- </div> -->
                        <!--end col-->
                        <!--end col-->
                     <!-- </div> -->
                     <!--end row-->                                  
                  <!-- </div> -->
                  <!--end card-header-->
                  <div class="card-body">
                     <form>
                        <div class="form-row">
                           <div class="col-md-12 mb-3">
                              <label for="validationServer01">Business Name</label>
                              <!-- is-valid -->
                              <input type="text" class="form-control " id="validationServer01" placeholder="Business Name" value="Business Name" required="">
                              <!-- <div class="valid-feedback">
                                 Looks good!
                                 </div> -->
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationServer01">First Name </label>
                              <!-- is-valid -->
                              <input type="text" class="form-control " id="validationServer01" placeholder="Advertising Code" value="Advertising Code" required="">
                              <!-- <div class="valid-feedback">
                                 Looks good!
                                 </div> -->
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationServer01">Last Name </label>
                              <!-- is-valid -->
                              <input type="text" class="form-control " id="validationServer01" placeholder="Advertising Code" value="Advertising Code" required="">
                              <!-- <div class="valid-feedback">
                                 Looks good!
                                 </div> -->
                           </div>
                        </div>
                      
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationServer01">Email </label>
                              <!-- is-valid -->
                              <input type="email" class="form-control " id="validationServer01" placeholder="Email Address" value="Email Address" required=""/>
                              <!-- <div class="valid-feedback">
                                 Looks good!
                                 </div> -->
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationServer01">City</label>
                              <input type="text" class="form-control " id="validationServer01" placeholder="City" value="City" required="">
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationServer01">Contact Number</label>
                              <input type="text" class="form-control " id="validationServer01" placeholder="Contact Number" value="Contact Number" required="">
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                        </div>
                       
                        <!-- <div class="form-row">
                           <div class="col-md-6 mb-3">
                                <div class="custom-control custom-switch">
                                  
                                    <label class="custom-control-label" for="customSwitch1">Select Business Type</label>
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                 </div>
                           </div>
                        </div> -->
                        <div class="form-group mb-0 row">
                                                <label class="col-md-3 my-1 control-label">Select Business Type</label>
                                                <div class="col-md-9">
                                                    <div class="form-check-inline my-1">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio7" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio7">Food & Drink</label>
                                                        </div>
                                                    </div>
                                                     <div class="form-check-inline my-1">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio8" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio8">Beauty & Fitness</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check-inline my-1">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio8" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio8">Attractions & Leisure</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check-inline my-1">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio8" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio8">Fashion & Retail</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check-inline my-1">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio8" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio8">Everyday Services</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                            </div>
                     </form>
                  </div>
                  <!--end card-body--> 
               </div>
               <!--end card--> 
            </div>
            <!-- <div class="col-md-3">
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
            </div> -->
            <!--end col-->               
         <!-- </div> -->
         <!--end row-->
      </div>
      <!-- container -->
      <?php include('includes/footer.php'); ?>
      <!--end footer-->
   </div>
   <!-- end page content -->
</div>
<?php include('includes/scripts.php'); ?>