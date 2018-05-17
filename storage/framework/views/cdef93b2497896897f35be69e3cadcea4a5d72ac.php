  <div id="loader-wrapper" style="display:none;">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
  </div> 
<div class="stepy-tab">
                                  <ul id="default-titles" class="stepy-titles clearfix">
                                      <li id="default-title-0" class="current-step">
                                          <div>Step 1</div>
                                      </li>
                                      <li id="default-title-1" class="">
                                          <div>Step 2</div>
                                      </li>
                                      <li id="default-title-2" class="">
                                          <div>Step 3</div>
                                      </li>
                                  </ul>
                              </div>
                              <form class="form-horizontal" id="profileForm">
                                  <fieldset title="Step1" class="step" id="default-step-0">
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Full Name</label>
                                          <div class="col-lg-10">
                                              <input type="text" id="name" name="name" minlength="2" class="form-control lettersonly " v-model="form.customer_name" placeholder="Full Name" required>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2  control-label">Email Address</label>
                                          <div class="col-lg-10">
                                              <input type="email" name="email" class="form-control" id="customer_email"  v-model="form.customer_email" placeholder="Email">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Company</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="company" class="form-control"  v-model="form.description" placeholder="Company Name">
                                          </div>
                                      </div>

                                  </fieldset>
                                  <fieldset title="Step 2" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Phone</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="num" class="number  form-control" v-model="form.mobile_no" placeholder="Number">
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Address</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control" name="address" v-model=" form.customer_address" cols="60" rows="5"></textarea>
                                          </div>
                                      </div>
                                        <div class="form-group">
                                          <label class="col-lg-2 control-label">GST Number</label>
                                          <div class="col-lg-10">
                                              <input class=" valid required  form-control" name="gst" v-model=" form.gst" cols="60" rows="5" placeholder="Enter valid GST">
                                          </div>
                                      </div>

                                  </fieldset>
                                 
                         