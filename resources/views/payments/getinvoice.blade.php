 <div class="row" id="tablearea" >
          <table  class="display table table-bordered table-striped">
             <thead>
                    <tr>
                        <th>Invoice Number</th>
                        <th>Date</th>
                        <th>Due Date</th>
                        <th>Action</th>

                    </tr>
                </thead>

                 <tbody>
                 @foreach($invoices as $i)
                        <tr>
                        <td>$i->invoice_no</td>
                        <td>$i->invoice_date</td>
                        <td>$i->due_date</td>
                        <td><button>Payment</button></td>
                        </tr>
                   
                </tbody>
         </table>

        </div>
                <div class="row" hidden>
                     <div class="col-sm-4">
                        <label>Payment Date</label>
                        <input type="date" class="form-control" v-model="form.payment_date">
                        <p v-if="errors.payment_date" class="error">@{{errors.payment_date[0]}}</p>
                    </div>
                    <div class="col-sm-4">
                          <label>Payment Amount</label>
                        <input type="text" class="form-control" v-model="form.totalpayment">
                        <p v-if="errors.totalpayment" class="error">@{{errors.totalpayment[0]}}</p>
                    </div>
          
                    <div class="col-sm-4">
                        <label>Mode</label>
                        <!-- <input type="date" class="form-control" v-model="form.invoice_date"> -->
                        <select id="modetype" class="form-control" v-model="form.payment_mode">

                                    <option value="Cash" selected>Cash</option>
                                    <option value="DD">DD</option>
                                    <option value="Card">Card</option>
                                    <option value="Netbanking">Netbanking</option>
                                    <option value="Cheque">Cheque</option>

                        </select>
                        <p v-if="errors.payment_mode" class="error">@{{errors.payment_mode[0]}}</p>
                    </div>

                      <div class="col-sm-4" id="DD" style="display:none;">
                        <label>DD Number</label>
                        <input type="text" class="form-control" v-model="form.d_d_no">
                       
                        <p v-if="errors.d_d_no" class="error">@{{errors.d_d_no[0]}}</p>
                    </div>
                    

                     <div class="col-sm-4" id="Cheque" style="display:none;">
                        <label>Cheque Number</label>
                        <input type="text" class="form-control" v-model="form.check_no">
                       
                        <p v-if="errors.check_no" class="error">@{{errors.check_no[0]}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                         <label>Remarks</label>
                        <textarea class="form-control" v-model="form.reviews"> </textarea> 
                   
                        <p v-if="errors.reviews" class="error">@{{errors.reviews[0]}}</p>
                    </div>
                </div>
            <hr>
                <div class="panel-footer">  
                    <button class="btn btn-default">CANCEL</button>
                    <button class="btn btn-success" @click="create" :disabled="isProcessing">CREATE</button>
                </div>