<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Add Expense</h4>
                     </div>
                     <div class="modal-body">
                        <div class="row">
                           <div class="col-sm-6">
                              <label>Vendor Name</label>
                              <input type="date" class="form-control" v-model="form.vendor_name">
                              <p v-if="errors.vendor_name" class="error">@{{errors.vendor_name[0]}}</p>
                           </div>
                           <div class="col-sm-6" >
                             <label>Amount</label>
                              <input type="text" class="form-control" v-model="form.amount">
                              <p v-if="errors.amount" class="error">@{{errors.amount[0]}}</p>
                           </div>
                        </div>
                      
                        <div class="row">
                           <div class="col-sm-6">
                              <label>Mode</label>
                              <!-- <input type="date" class="form-control" v-model="form.invoice_date"> -->
                              <select id="modetype" class="form-control" v-model="form.mode">
                                 <option value="Cash" >Cash</option>
                                 <option value="DD">DD</option>
                                 <option value="Card">Card</option>
                                 <option value="Netbanking">Netbanking</option>
                                 <option value="Cheque">Cheque</option>
                              </select>
                              <p v-if="errors.mode" class="error">@{{errors.mode[0]}}</p>
                           </div>
                           <div class="col-sm-6" id="DD" style="display:none;">
                              <label>DD Number</label>
                              <input type="text" class="form-control" v-model="form.d_d_no">
                              <p v-if="errors.d_d_no" class="error">@{{errors.d_d_no[0]}}</p>
                           </div>
                           <div class="col-sm-6" id="Cheque" style="display:none;">
                              <label>Cheque Number</label>
                              <input type="text" class="form-control" v-model="form.check_no">
                              <p v-if="errors.check_no" class="error">@{{errors.check_no[0]}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12">
                                 <div class="form-group">
                                     <label>Remarks</label>
                                     <textarea class="form-control" v-model="form.remarks"></textarea>
                                     <p v-if="errors.remarks" class="error">@{{errors.remarks[0]}}</p>
                                 </div>
                             </div>

                        </div>
                        
                     </div>