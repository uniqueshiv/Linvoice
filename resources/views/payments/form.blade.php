                    <div id="loader-wrapper" style="display:none;">
                        <div id="loader"></div>
                        <div class="loader-section section-left"></div>
                    </div> 
                <div class="container-fluid">
                 <div class="row">
                      <div class="col-sm-3">
                          <div class="form-group ">

                            <label>Select Customer</label>
                            <!-- <input type="text" class="form-control" v-model="form.client"> -->
                            <select id="customer" name="customer" class="form-control" v-model="form.client_id"   @change="  fetchinvoice">

                                <?php
                                    foreach ($customers as $r) 
                                    {
                                            ?>
                                            <option value="<?= $r->customer_id ?>"><?= $r->customer_name ?></option>
                                            <?php                     
                                    }

                                  ?>
                            </select>
                            <p v-if="errors.client_id" class="error">@{{errors.client_id[0]}}</p>
                          </div>

                    </div>
                    <div class="col-sm-3">
                        <label>Payment Date</label>
                        <div data-date-viewmode="years" data-date-format="yyyy-mm-dd"  class="input-append date datetextbox dpYears form-group">
                                <input type="date" class="form-control whiteonly" readonly id="paydate" required v-model="form.payment_date" size="16">
                                <span class="input-group-btn add-on">
                                    <button class="btn btn-info btn-xs" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                             </div>
                        <p v-if="errors.payment_date" class="error">@{{errors.payment_date[0]}}</p>
                       
                    </div>
                    <div class="col-sm-3" id="paymentamount">
                          <label>Payment Amount</label>
                        <input id="payamount" type="text" class="form-control" v-model="form.totalpayment">
                        <p v-if="errors.totalpayment" class="error">@{{errors.totalpayment[0]}}</p>
                    </div>
                    <div class="col-sm-3">
                         
                        <input id="invoiceid" type="hidden" class="form-control" v-model="form.invoice_id">
                        <p v-if="errors.invoice_id" class="error">@{{errors.invoice_id[0]}}</p>
                    </div>
                </div>
                 <div class="row">
                        <div class="col-sm-3">
                             <label>Remarks</label>
                            <textarea class="form-control" v-model="form.reviews"> </textarea> 
                       
                            <p v-if="errors.reviews" class="error">@{{errors.reviews[0]}}</p>
                        </div>
                        <div class="col-sm-3">
                            <label>Mode</label>
                            <!-- <input type="date" class="form-control" v-model="form.invoice_date"> -->
                            <select id="modetype" class="form-control" v-model="form.payment_method">

                                        <option value="Cash" >Cash</option>
                                        <option value="DD">DD</option>
                                        <option value="Card">Card</option>
                                        <option value="Netbanking">Netbanking</option>
                                        <option value="Cheque">Cheque</option>

                            </select>
                            <p v-if="errors.payment_method" class="error">@{{errors.payment_method[0]}}</p>
                      </div>
                       <div class="col-sm-3" id="DD" style="display:none;">
                          <label>DD Number</label>
                          <input type="text" class="form-control" v-model="form.d_d_no">
                         
                          <p v-if="errors.d_d_no" class="error">@{{errors.d_d_no[0]}}</p>
                      </div>

                      <div class="col-sm-3" id="Cheque" style="display:none;">
                          <label>Cheque Number</label>
                          <input type="text" class="form-control" v-model="form.cheque_no">
                         
                          <p v-if="errors.cheque_no" class="error">@{{errors.cheque_no[0]}}</p>
                      </div>

                  </div>

            </div>
