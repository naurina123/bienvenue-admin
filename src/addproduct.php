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
                        <h4 class="page-title">Add Product</h4>
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
                           <h4 class="card-title">Product Detail</h4>
                        </div>
                     </div>
                     <!--end row-->                                  
                  </div>
                  <!--end card-header-->
                  <div class="card-body">
                     <form>
                    
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationServer01">Product Name</label>
                              <!-- is-valid -->
                              
                              <input type="text" class="form-control " id="validationServer01" placeholder="BurgerLab" value="BurgerLab" required="">
                              <!-- <div class="valid-feedback">
                                 Looks good!
                                 </div> -->
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationServer01">Product Code </label>
                              <!-- is-valid -->
                              <input type="text" class="form-control " id="validationServer01" placeholder="Product Code" value="P23434" required="">
                              <!-- <div class="valid-feedback">
                                 Looks good!
                                 </div> -->
                           </div>
                        </div>
                      
                  
                        <div class="form-row">
                       
                          <div class="col-md-6">
                                            <label class="mb-3">Type</label>
                                            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                                <option>------ Select your type ------</option>
                                                <option>BOGO</option>
                                                <option>% Discount</option>
                                              
                                            
                                            </select>
                                        </div><!-- end col --> 
                                        <div class="col-md-6 mb-3">
                             <label for="validationServer01">Amount</label>
                             <input type="text" class="form-control " id="validationServer01" placeholder="$4000/-" value="$4000/-" required="">
                             <div class="valid-feedback">
                                Looks good!
                             </div>
                          </div>
                        </div>
                        <div class="form-row">
                        <div class="col-md-6 mb-3">
                              <label for="validationServer01">Description </label>
                              <!-- is-valid -->
                              <textarea type="text" class="form-control " id="validationServer01" placeholder="Burger with extra Cheese slice" value="Burger with extra Cheese slc" required=""></textarea>
                              <!-- <div class="valid-feedback">
                                 Looks good!
                                 </div> -->
                           </div>
                       
                          <div class="col-md-9 mb-3">
                             <label for="validationServer01">Status</label>
                             <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1"></label>
                                 </div>
                          </div>
                       </div>
                       <div class="form-row">
                           <label for="validationServer01">Select Categories</label>
                           <div class="col-md-12 mb-3">
                                 <div class="checkbox">
                                       <input type="checkbox" id="inlineCheckbox1" value="option1">
                                       <label for="inlineCheckbox1"> Restaurants </label>
                                 </div>
                                 <div class="checkbox">
                                       <input type="checkbox" id="inlineCheckbox2" value="option2">
                                       <label for="inlineCheckbox2"> Leisure </label>
                                 </div>
                                 <div class="checkbox">
                                       <input type="checkbox" id="inlineCheckbox3" value="option3">
                                       <label for="inlineCheckbox3"> Lifestyle </label>
                                 </div>
                                 <div class="checkbox">
                                       <input type="checkbox" id="inlineCheckbox3" value="option4">
                                       <label for="inlineCheckbox4"> Attraction </label>
                                 </div>
                                 <!-- <div class="checkbox">
                                       <input type="checkbox" id="inlineCheckbox4" value="option4">
                                       <label for="inlineCheckbox4"> Inline One </label>
                                 </div> -->
                           </div>
                           </div>
                           <div class="button-items"> 
                            <button type="button" class="btn btn-soft-warning waves-effect waves-light">Submit</button> 
                            <!-- <button type="button" class="btn btn-soft-secondary waves-effect waves-light">Secondary</button> -->
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
                                <label for="validationServer01">Product Image</label>
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