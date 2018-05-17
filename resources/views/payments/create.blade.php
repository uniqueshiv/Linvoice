@extends('layouts.client')

@push('css')
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/override.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app.css')}}">
   <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/assets/gritter/css/jquery.gritter.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/assets/bootstrap-datepicker/css/datepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/assets/bootstrap-timepicker/compiled/timepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/assets/bootstrap-colorpicker/css/colorpicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/assets/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/assets/bootstrap-datetimepicker/css/datetimepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/assets/jquery-multi-select/css/multi-select.css')}}" />


@endpush

@section('content')
<div id="payment">
   <div class="panel panel-default" v-cloak>
      <div class="panel-heading">
         <div class="clearfix">
            <span class="panel-title">Create Payment</span>
            <a href="{{route('payments.index')}}" class="btn btn-default pull-right">Back</a>
         </div>
      </div>
      <div class="panel-body">
         <div class="row">
            <div class="col-sm-3">
               <div class="form-group ">
                  <label>Select Customer</label>
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
         </div>
         <section class="panel">
                          <header class="panel-heading">
                                 Invoices
                          </header>
         <div id="pay-table"></div>
         </section>
         <!--vertical center Modal start-->

      </div>
      <div class="modal fade top-modal-without-space " id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
               <div class="modal-content-wrap">
                  <div class="modal-content">
                    <form id="frmexpense" class="cmxform">
                       <div id="loader-wrapper" style="display:none;">
                            <div id="loader"></div>
                            <div class="loader-section section-left"></div>
                       </div> 
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Modal Tittle</h4>
                     </div>
                     <div class="modal-body">
                        <div class="row">
                        <input id="invoiceid" type="hidden" class="form-control" v-model="form.invoice_id">
                           <div class="col-sm-6 form-group">
                              <label>Payment Date</label>
                              <div data-date-viewmode="years" data-date-format="yyyy-mm-dd"  class="input-append date datetextbox dpYears form-group">
                                <input type="text" class="form-control whiteonly" readonly id="paydate" required v-model="form.payment_date" size="16">
                                <span class="input-group-btn add-on">
                                    <button class="btn btn-info btn-xs" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                             </div>
                               <p v-if="errors.payment_date" class="error">@{{errors.payment_date[0]}}</p>
                           </div>
                           <div class="col-sm-6 form-group" id="paymentamount">
                              <label for="payamount">Payment Amount</label>
                              <input id="payamount" type="text" name="payamount" class="form-control number" v-model="form.totalpayment" required>
                              <p v-if="errors.totalpayment" class="error">@{{errors.totalpayment[0]}}</p>
                           </div>
                      </div>
                       <div class="row">
                           <div class="col-sm-6  form-group">
                              <label for="modetype">Mode</label>
                              <!-- <input type="date" class="form-control" v-model="form.invoice_date"> -->
                              <select id="modetype" name="modetype" class="form-control" required v-model="form.payment_method">
                                 <option value="Cash" selected="true">Cash</option>
                                 <option value="DD">DD</option>
                                 <option value="Card">Card</option>
                                 <option value="Netbanking">Netbanking</option>
                                 <option value="Cheque">Cheque</option>
                              </select>
                              <p v-if="errors.payment_method" class="error">@{{errors.payment_method[0]}}</p>
                           </div>
                           <div class="col-sm-6  form-group" id="DD" style="display:none;">
                              <label>DD Number</label>
                              <input type="text" class="form-control" v-model="form.d_d_no">
                              <p v-if="errors.d_d_no" class="error">@{{errors.d_d_no[0]}}</p>
                           </div>
                           <div class="col-sm-6  form-group" id="Cheque" style="display:none;">
                              <label>Cheque Number</label>
                              <input type="text" class="form-control" v-model="form.cheque_no">
                              <p v-if="errors.cheque_no" class="error">@{{errors.cheque_no[0]}}</p>
                           </div>
                       
                          </div> 
                         <div class="row">  
                           <div class="col-sm-12  form-group">
                              <label>Remarks</label>
                              <textarea class="form-control" v-model="form.reviews"> </textarea>
                              <p v-if="errors.reviews" class="error">@{{errors.reviews[0]}}</p>
                           </div>
                       
                     </div>
                     <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-warning" type="button" @click="create" :disabled="isProcessing"> Confirm</button>
                     </div>
                     </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      <div class="container" id="makepaymentsection" > </div>
   </div>
</div>
@endsection
@push('scripts')

 <script type="text/javascript" language="javascript" src="{{URL::asset('assets/assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>

 <!-- FOR DATE CALANDER -->
  <script type="text/javascript" src="{{URL::asset('/assets/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('/assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('/assets/assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('/assets/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('/assets/assets/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('/assets/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('/assets/assets/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('/assets/assets/jquery-multi-select/js/jquery.multi-select.js')}}"></script>
 
   <script src="{{URL::asset('/assets/js/advanced-form-components.js')}}"></script>
<!--common script for all pages-->

<script src="{{URL::asset('js/vue.min.js')}}"></script>
<script src="{{URL::asset('js/vue-resource.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/jquery.pulsate.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/assets/gritter/js/jquery.gritter.js')}}"></script>
<!--script for this page only-->
<script src="{{URL::asset('assets/js/gritter.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/js/pulstate.js')}}" type="text/javascript"></script>
<script type="text/javascript">
   Vue.http.headers.common['X-CSRF-TOKEN'] = '{{csrf_token()}}';
   
    window._form = {   
     payment_date:'',
      totalpayment: 0,
       invoice_id: '',
       reviews: '',
       d_d_no: '',
       cheque_no: ''           
   };
   
   function makePayment(btn){
     
      var invoiceId=btn.getAttribute("invoiceId");
      var invoiceNo=btn.getAttribute("invoice_no");
      var dueDate=btn.getAttribute("due_date");
      var grandTotal=btn.getAttribute("grand_total");
      var amountleft=btn.getAttribute("amountleft");
      var container = document.getElementById('makepaymentsection');
      document.getElementById('paymentamount').style.display="block";
       document.getElementById('payamount').focus();
      document.getElementById('payamount').value=amountleft;
       document.getElementById('payamount').blur();
       document.getElementById('invoiceid').focus();
      document.getElementById('invoiceid').value=invoiceId;
      document.getElementById('invoiceid').blur();
   
   };

   
</script>
<script src="{{URL::asset('js/pay.js')}}"></script>
<script src="{{URL::asset('js/allfunctions.js')}}"></script>
@endpush