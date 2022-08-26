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
                       <div class="row">
                            <div class="col-md-6">
                            <div class="form-group mb-0 row">
                                                <label class="col-md-3 my-1 control-label">Create Coupons</label>
                                                <div class="col-md-9">
                                                    <div class="form-check-inline my-1">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio7" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio7">Custom</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check-inline my-1">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio8" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio8">Standard</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                            </div>
                       </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="txtNameCard"
                              class="col-lg-3 col-form-label"
                              >TakeOut/Dine In</label
                            >
                            <div class="col-lg-9">
                            <select class="form-control form-control-sm">
                                <option>----- select BOGO -----</option> 
                                <option>----- select Invoice Discount -----</option>
                              </select>
                            </div>
                          </div>
                          <!--end form-group-->
                        </div>
                        <!--end col-->
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="ddlCreditCardType"
                              class="col-lg-3 col-form-label"
                              >Credit Card Type</label
                            >
                            <div class="col-lg-9">
                              <select
                                id="ddlCreditCardType"
                                name="ddlCreditCardType"
                                class="form-control"
                              >
                                <option value="">--Please Select--</option>
                                <option value="AE">American Express</option>
                                <option value="VI">Visa</option>
                                <option value="MC">MasterCard</option>
                                <option value="DI">Discover</option>
                              </select>
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
                              for="txtCreditCardNumber"
                              class="col-lg-3 col-form-label"
                              >Credit Card Number</label
                            >
                            <div class="col-lg-9">
                              <input
                                id="txtCreditCardNumber"
                                name="txtCreditCardNumber"
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
                              for="txtCardVerificationNumber"
                              class="col-lg-3 col-form-label"
                              >Card Verification Number</label
                            >
                            <div class="col-lg-9">
                              <input
                                id="txtCardVerificationNumber"
                                name="txtCardVerificationNumber"
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
                              for="txtExpirationDate"
                              class="col-lg-3 col-form-label"
                              >Predefined Packages </label
                            >
                            <div class="col-lg-9">
                            <select
                                id="ddlCreditCardType"
                                name="ddlCreditCardType"
                                class="form-control"
                              >
                                <option value="">--Please Select--</option>
                                <option value="AE">3 Coupons of BOGO On Main Course</option>
                                <option value="VI">2 Coupons of Discount 20%</option>
                              </select>
                            </div>
                          </div>
                          <!--end form-group-->
                        </div>
                        <!--end col-->
                      </div>
                      <!--end row-->
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