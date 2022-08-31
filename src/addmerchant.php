<?php include('includes/header.php'); ?>
<!-- Left Sidenav -->
<?php include('includes/sidebar.php'); ?>
<!-- end left-sidenav-->
<style>
            /* Hide scrollbar for Chrome, Safari and Opera */
            .hide-srollbar {
              overflow-y: scroll !important;
              height: 25rem !important;
            }
            .hide-srollbar::-webkit-scrollbar {
            display: none !important;
           
             
            }

            /* Hide scrollbar for IE and Edge */
            .hide-srollbar {
            -ms-overflow-style: none !important;
            }
        </style>
<div class="page-wrapper">
   <!-- Top Bar Start -->
   <?php include('includes/topbar.php'); ?>
   <!-- Top Bar End -->
   <!-- Page Content-->
   <div class="page-content">
      <div class="container-fluid">
          <!-- Page-Title -->
          <!-- end page title end breadcrumb -->
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Add Merchant</h4>
                  <!-- <p class="text-muted mb-0">
                    A powerful jQuery wizard plugin that supports accessibility
                    and HTML5
                  </p> -->
                </div>
                <!--end card-header-->
                <div class="card-body">
                  <form
                    id="form-horizontal"
                    class="form-horizontal form-wizard-wrapper"
                    
                  >
                    <h3>Business Registration</h3>
                    <fieldset>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="txtFirstNameBilling"
                              class="col-lg-3 col-form-label"
                              >Business Group </label
                            >
                            <div class="col-lg-9">
                              <input
                                id="txtFirstNameBilling"
                                name="txtFirstNameBilling"
                                type="text"
                                class="form-control"
                              />
                            </div>
                          </div>
                          <!--end form-group-->
                        </div>
                        <!--end col-->
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="txtLastNameBilling"
                              class="col-lg-3 col-form-label"
                              >Business Branch </label
                            >
                            <div class="col-lg-9">
                              <input
                                id="txtLastNameBilling"
                                name="txtLastNameBilling"
                                type="text"
                                class="form-control"
                              />
                            </div>
                          </div>
                          <!--end form-group-->
                        </div>
                        <!--end col-->
                      </div>
                      <!--end row-->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="txtCompanyBilling"
                              class="col-lg-3 col-form-label"
                              >Business No. </label
                            >
                            <div class="col-lg-9">
                              <input
                                id="txtCompanyBilling"
                                name="txtCompanyBilling"
                                type="text"
                                class="form-control"
                              />
                            </div>
                          </div>
                          <!--end form-group-->
                        </div>
                        <!--end col-->
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="txtEmailAddressBilling"
                              class="col-lg-3 col-form-label"
                              >Addr</label
                            >
                            <div class="col-lg-9">
                              <input
                                id="txtEmailAddressBilling"
                                name="txtEmailAddressBilling"
                                type="text"
                                class="form-control"
                              />
                            </div>
                          </div>
                          <!--end form-group-->
                        </div>
                        <!--end col-->
                      </div>
                      <!--end row-->
                      <div class="row">
                        <!-- <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="txtAddress1Billing"
                              class="col-lg-3 col-form-label"
                              >District </label
                            >
                            <div class="col-lg-9">
                              <textarea
                                id="txtAddress1Billing"
                                name="txtAddress1Billing"
                                rows="4"
                                class="form-control"
                              ></textarea>
                            </div>
                          </div> -->
                          <!--end form-group-->
                        <!-- </div> -->
                        <!--end col-->
                        <!-- <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="txtAddress2Billing"
                              class="col-lg-3 col-form-label"
                              >Address</label
                            >
                            <div class="col-lg-9">
                              <textarea
                                id="txtAddress2Billing"
                                name="txtAddress2Billing"
                                rows="4"
                                class="form-control"
                              ></textarea>
                            </div>
                          </div> -->
                          <!--end form-group-->
                        <!-- </div> -->
                        <!--end col-->
                      </div>
                      <!--end row-->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="txtCityBilling"
                              class="col-lg-3 col-form-label"
                              >District</label
                            >
                            <div class="col-lg-9">
                              <input
                                id="txtCityBilling"
                                name="txtCityBilling"
                                type="text"
                                class="form-control"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="txtStateProvinceBilling"
                              class="col-lg-3 col-form-label"
                              >City</label
                            >
                            <div class="col-lg-9">
                              <input
                                id="txtStateProvinceBilling"
                                name="txtStateProvinceBilling"
                                type="text"
                                class="form-control"
                              />
                            </div>
                          </div>
                          <!--end form-group-->
                        </div>
                        <!--end col-->
                      </div>
                      <!--end row-->

                      <!-- <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="txtTelephoneBilling"
                              class="col-lg-3 col-form-label"
                              >Product Category</label
                            >
                            <div class="col-lg-9">
                              <input
                                id="txtTelephoneBilling"
                                name="txtTelephoneBilling"
                                type="text"
                                class="form-control"
                              />
                            </div>
                          </div> -->
                          <!--end form-group-->
                        <!-- </div> -->
                        <!--end col-->
                        <!-- <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="txtFaxBilling"
                              class="col-lg-3 col-form-label"
                              >Product Sub Category</label
                            >
                            <div class="col-lg-9">
                              <input
                                id="txtFaxBilling"
                                name="txtFaxBilling"
                                type="text"
                                class="form-control"
                              />
                            </div>
                          </div> -->
                          <!--end form-group-->
                        <!-- </div> -->
                        <!--end col-->
                      <!-- </div> -->
                      <!--end row-->
                    </fieldset>
                    <!--end fieldset-->

                    <h3>Business Details</h3>
                    <fieldset>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="txtFirstNameShipping"
                              class="col-lg-3 col-form-label"
                              >Cuisine Category </label
                            >
                            <div class="col-lg-9">
                              <select class="form-control form-control-sm">
                                <option>----- select cuisine -----</option> 
                                <option>----- select cuisine -----</option>
                              </select>
                            </div>
                          </div>
                          <!--end form-group-->
                        </div>
                        <!--end col-->
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="txtLastNameShipping"
                              class="col-lg-3 col-form-label"
                              >Average Cost </label
                            >
                            <div class="col-lg-9">
                              <input
                                id="txtLastNameShipping"
                                name="txtLastNameShipping"
                                type="text"
                                class="form-control"
                              />
                            </div>
                          </div>
                          <!--end form-group-->
                        </div>
                        <!--end col-->
                      </div>
                      <!--end row-->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="txtCompanyShipping"
                              class="col-lg-3 col-form-label"
                              >Brand Logo</label
                            >
                            <div class="col-lg-9">
                              <input
                                name="txtCompanyShipping"
                                type="file"
                                id="input-file-now" class="dropify"
                              />
                            </div>
                          </div>
                          <!--end form-group-->
                        </div>
                        <!--end col-->
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="txtEmailAddressShipping"
                              class="col-lg-3 col-form-label"
                              >Upload Menu </label
                            >
                            <div class="col-lg-9">
                              <input
                                id="input-file-now"
                                class="dropify"
                                type="file"
                                class="form-control"
                              />
                            </div>
                          </div>
                          <!--end form-group-->
                        </div>
                        <!--end col-->
                      </div>
                      <!--end row-->

                      <!--end row-->
                    </fieldset>
                    <!--end fieldset-->

                    <h3>Create </h3>
                    
                    <fieldset>
                      <div class="">
                        <div class="row">
                          <div class="col-md-6 card">
                          
                          <div class="card-header">
                                        <h4 class="card-title">Create Coupons</h4>
                                        
                                    </div><!--end card-header-->

                              <div class="form-group mb-4 mt-5 row">
                                <label class="col-md-3 my-1 control-label">Create Coupons</label>
                                <div class="col-md-9">
                                                        <div class="form-check-inline my-1">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio7" name="customRadio" class="custom-control-input"  value="custom">
                                                                <label class="custom-control-label" for="customRadio7" >Custom</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-check-inline my-1">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio8" name="customRadio" class="custom-control-input"  value="standard">
                                                                <label class="custom-control-label" for="customRadio8">Standard</label>
                                                            </div>
                                                        </div>
                                </div>
                              </div>
                              <!-- 2nd -->
                              <div class="form-group row d-none" id="dinein">
                                <label
                                  for="txtFirstNameBilling"
                                  class="col-lg-3 col-form-label"
                                  >TakeOut/Dine In </label
                                >
                                <div class="col-lg-9">
                                  <select class="form-control form-control-sm"  id="takeout">
                                    <option value="">----- select Type -----</option> 
                                    <option value="BOGO">----- select BOGO -----</option> 
                                    <option value="Invoice">----- select Invoice Discount -----</option>
                                  </select>
                                </div>
                              </div>
                              <!-- 3rd -->

                               <div class="form-group row d-none" id="maincourse" >
                                  <label
                                    for="txtFirstNameBilling"
                                    class="col-lg-3 col-form-label"
                                    >Select Coupons </label
                                  >
                                  <div class="col-lg-9">
                                  <select class="form-control form-control-sm" id="selectcoupons" > 
                                    <option value="coupons">----- Select Coupons -----</option> 
                                    <option value="Course">----- Standard – BOGO on Main Course -----</option> 
                                    <option value="description">----- Custom – BOGO on Description -----</option>
                                  </select>
                                </div>
                              </div>
                              <!-- 4th -->
                               <div class="form-group row d-none" id="desc">
                               <label
                                    for="txtFirstNameBilling"
                                    class="col-lg-3 col-form-label"
                                    >Description </label
                                  >
                                <div class="col-lg-9">
                                <input
                                  id="description" 
                                  name="txtLastNameShipping"
                                  type="text"
                                  class="form-control"
                                 
                                />
                              </div>
                          </div>
                              <!-- 4th -->
                              <!-- 5th -->
                              <!-- <div class="form-group row">
                                  <label
                                    for="txtFirstNameBilling"
                                    class="col-lg-3 col-form-label"
                                    >Business Group </label
                                  >
                                  <div class="col-lg-9">
                                  <select class="form-control form-control-sm">
                                  <option>----- select cuisine -----</option> 
                                  <option>----- select cuisine -----</option>
                                </select>
                                  </div>
                              </div> -->
                              <!-- 5th -->
                             </div>
                       
                            <div class="col-lg-6 hide-srollbar">
                                <!-- accordian -->
                          <div class="card">
                               
                                  <div class="card-body">
                                      <div class="accordion" id="accordionExample">
                                          <div class="card border mb-1 shadow-none">
                                              <div class="card-header custom-accordion  rounded-0" id="headingOne">
                                                  <a href="" class="text-dark" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Custom Coupons
                                                  </a>
                                              </div>
                                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                <div class="table-responsive">
                                              <table class="table table-bordered mb-0 table-centered">
                                                  <thead>
                                                  <tr>
                                                      <th>Create Coupons</th>
                                                      <th>TakeOut/Dine In</th>
                                                      <th>Select Coupons</th>
                                                      <th>Order Status</th>
                                                      <th class="text-right">Action</th>
                                                  </tr>
                                                  </thead>
                                                  <tbody>
                                                  <tr>
                                                      <td>Custom</td>
                                                      <td>BOGO</td>
                                                      <td>Standard – BOGO on Main Course</td>
                                                      <td><span class="badge badge-soft-success">Approved</span></td>
                                                      <td class="text-right">
                                                          <div class="dropdown d-inline-block">
                                                              <a class="dropdown-toggle arrow-none" id="dLabel11" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                  <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                              </a>
                                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel11">
                                                                  <a class="dropdown-item" href="#">Creat Project</a>
                                                                  <a class="dropdown-item" href="#">Open Project</a>
                                                                  <a class="dropdown-item" href="#">Tasks Details</a>
                                                              </div>
                                                          </div>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>Custom</td>
                                                      <td>Invoice Discount</td>
                                                      <td>Custom – BOGO on Description</td>
                                                      <td><span class="badge badge-soft-success">Approved</span></td>
                                                      <td class="text-right">
                                                          <div class="dropdown d-inline-block">
                                                              <a class="dropdown-toggle arrow-none" id="dLabel11" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                  <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                              </a>
                                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel11">
                                                                  <a class="dropdown-item" href="#">Creat Project</a>
                                                                  <a class="dropdown-item" href="#">Open Project</a>
                                                                  <a class="dropdown-item" href="#">Tasks Details</a>
                                                              </div>
                                                          </div>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>Standard</td>
                                                      <td>Standard – BOGO on Main Course</td>
                                                      <td>Standard – BOGO on Main Course </td>
                                                      <td><span class="badge badge-soft-danger">Rejected</span></td>
                                                      <td class="text-right">
                                                          <div class="dropdown d-inline-block">
                                                              <a class="dropdown-toggle arrow-none" id="dLabel11" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                  <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                              </a>
                                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel11">
                                                                  <a class="dropdown-item" href="#">Creat Project</a>
                                                                  <a class="dropdown-item" href="#">Open Project</a>
                                                                  <a class="dropdown-item" href="#">Tasks Details</a>
                                                              </div>
                                                          </div>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>Custom</td>
                                                      <td>Custom – BOGO on Description</td>
                                                      <td>Fries</td>
                                                      <td><span class="badge badge-soft-success">Approved</span></td>
                                                      <td class="text-right">
                                                          <div class="dropdown d-inline-block">
                                                              <a class="dropdown-toggle arrow-none" id="dLabel11" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                  <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                              </a>
                                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel11">
                                                                  <a class="dropdown-item" href="#">Creat Project</a>
                                                                  <a class="dropdown-item" href="#">Open Project</a>
                                                                  <a class="dropdown-item" href="#">Tasks Details</a>
                                                              </div>
                                                          </div>
                                                      </td>
                                                  </tr>
                                                  </tbody>
                                              </table><!--end /table-->
                                          </div><!--end /tableresponsive-->
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div class="card mb-0 border shadow-none">
                                              <div class="card-header  rounded-0" id="headingThree">
                                                  <a href="" class="collapsed text-dark" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  Invoice Coupons
                                                  </a>
                                              </div>
                                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                  <table class="table table-bordered mb-0 table-centered">
                                                  <thead>
                                                  <tr>
                                                      <th>Create Coupons</th>
                                                      <th>TakeOut/Dine In</th>
                                                      <th>Select Coupons</th>
                                                      <th>Order Status</th>
                                                      <th class="text-right">Action</th>
                                                  </tr>
                                                  </thead>
                                                  <tbody>
                                                  <tr>
                                                      <td>Custom</td>
                                                      <td>BOGO</td>
                                                      <td>Standard – BOGO on Main Course</td>
                                                      <td><span class="badge badge-soft-success">Approved</span></td>
                                                      <td class="text-right">
                                                          <div class="dropdown d-inline-block">
                                                              <a class="dropdown-toggle arrow-none" id="dLabel11" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                  <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                              </a>
                                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel11">
                                                                  <a class="dropdown-item" href="#">Creat Project</a>
                                                                  <a class="dropdown-item" href="#">Open Project</a>
                                                                  <a class="dropdown-item" href="#">Tasks Details</a>
                                                              </div>
                                                          </div>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>Custom</td>
                                                      <td>Invoice Discount</td>
                                                      <td>Custom – BOGO on Description</td>
                                                      <td><span class="badge badge-soft-success">Approved</span></td>
                                                      <td class="text-right">
                                                          <div class="dropdown d-inline-block">
                                                              <a class="dropdown-toggle arrow-none" id="dLabel11" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                  <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                              </a>
                                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel11">
                                                                  <a class="dropdown-item" href="#">Creat Project</a>
                                                                  <a class="dropdown-item" href="#">Open Project</a>
                                                                  <a class="dropdown-item" href="#">Tasks Details</a>
                                                              </div>
                                                          </div>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>Standard</td>
                                                      <td>Standard – BOGO on Main Course</td>
                                                      <td>Standard – BOGO on Main Course </td>
                                                      <td><span class="badge badge-soft-danger">Rejected</span></td>
                                                      <td class="text-right">
                                                          <div class="dropdown d-inline-block">
                                                              <a class="dropdown-toggle arrow-none" id="dLabel11" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                  <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                              </a>
                                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel11">
                                                                  <a class="dropdown-item" href="#">Creat Project</a>
                                                                  <a class="dropdown-item" href="#">Open Project</a>
                                                                  <a class="dropdown-item" href="#">Tasks Details</a>
                                                              </div>
                                                          </div>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>Custom</td>
                                                      <td>Custom – BOGO on Description</td>
                                                      <td>Fries</td>
                                                      <td><span class="badge badge-soft-success">Approved</span></td>
                                                      <td class="text-right">
                                                          <div class="dropdown d-inline-block">
                                                              <a class="dropdown-toggle arrow-none" id="dLabel11" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                  <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                              </a>
                                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel11">
                                                                  <a class="dropdown-item" href="#">Creat Project</a>
                                                                  <a class="dropdown-item" href="#">Open Project</a>
                                                                  <a class="dropdown-item" href="#">Tasks Details</a>
                                                              </div>
                                                          </div>
                                                      </td>
                                                  </tr>
                                                  </tbody>
                                              </table><!--end /table-->
                                                  </div>
                                              </div>
                                          </div>
                                      </div>    
                                  </div><!--end card-body-->
                            </div><!--end card-->
                          <!-- accordian  -->
                            </div> <!-- end col -->
                        </div>
                      </div>
                    </fieldset>
                    <!--end fieldset-->

                    <h3>Review</h3>
                    <fieldset>
                      <div class="p-3">
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" />
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-description"
                            >I agree with the Terms and Conditions.</span
                          >
                        </label>
                      </div>
                    </fieldset>
                    <!--end fieldset-->
                  </form>
                  <!--end form-->
                </div>
                <!--end card-body-->
              </div>
              <!--end card-->
            </div>
            <!--end col-->
          </div>
          <!--end row-->
      <!-- container -->
      <?php include('includes/footer.php'); ?>
      <!--end footer-->
   </div>
   <!-- end page content -->
</div>

<?php include('includes/scripts.php'); ?>
<script>
  $(document).on('click','input[name="customRadio"]',function() {
    if($(this).is(":checked")) {
        var radiobutton = $(this).val();
        if(radiobutton == "custom") {
          $("#dinein").removeClass('d-none');
        }else{
          $("#dinein").addClass('d-none');
          $("#maincourse").addClass('d-none');
          $('#takeout option[value=""]').attr('selected',true);
        }
    }      
});
$(document).on('click','#takeout',function() {
  let selected = $(this).val();
  if(selected=='BOGO'){
    $("#maincourse").removeClass('d-none');
  }else{
    $("#maincourse").addClass('d-none');
  }
});
$(document).on('click','#selectcoupons',function() {
  let selected = $(this).val();
  if(selected=='description'){
    $("#desc").removeClass('d-none');
    
  }else{
    $("#desc").addClass('d-none');
  }
});
</script>