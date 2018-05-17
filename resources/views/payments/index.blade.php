@extends('layouts.client')
@push('css')


@endpush

@section('content')
 <div class="row">
                <div class="col-sm-12">
              <section class="panel">
              <header class="panel-heading">
                All Payments
             <span class="pull-right">
                <a href="{{route('payments.create')}}" class="btn btn-success">Create</a>
             </span>
              </header>
              <div class="panel-body">
                    <div class="adv-table">
                      @if($payments->count())
                    <table  class="display table table-bordered" id="hidden-table-info">
                     <thead>
                          <tr>
                              <th>Client Name</th>
                              <th>Invoice No.</th>
                              <th>Grand Total</th>
                            
                              <th>Payment</th>
                             
                              <th >Amount Left</th>
                              <!-- <th>Action</th>
                              <th>Delete</th> -->
                          </tr>
                      </thead>
                    <tbody>
                          @foreach($pay as $payment)
                         
                              <tr> 

                                      @foreach($customers as $customer)
                                          @if(($customer->customer_id)==($payment->client_id))
                                               <td>{{$customer->customer_name}}</td>
                                           @endif
                                      @endforeach
                                  
                                  <td>{{$payment->invoice_no}}</td>
                                  <td>{{$payment->grand_total}}</td>
                                  
                                  <td>{{$payment->paidamount}}</td>
                                  <td>{{$payment->amountleft}}</td>
                                <!--  <td >
                                    
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>                           
                                    </td> <td> 
                                      <form class="form-inline" method="post"
                                          action=""
                                          onsubmit="return confirm('Are you sure?')">
                                          <input type="hidden" name="_method" value="delete">
                                          <input type="hidden" name="_token" value="{{csrf_token()}}">
                                          <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                      </form>
                                  </td>  -->
                                  
                              </tr>

                          @endforeach
                      </tbody>
                    
                    </table>
                     
                        @else
                            <div class="invoice-empty">
                                <p class="invoice-empty-title">
                                    No payments were created.
                                    <a href="{{route('payments.create')}}">Create Now!</a>
                                </p>
                            </div>
                        @endif
                     </div>
                     <div id="payment">
           <div class="modal fade top-modal-without-space " id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
               <div class="modal-content-wrap">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Modal Title</h4>
                     </div>
                     <div class="modal-body">
                        <div class="row">
                        <input type="text" id="payid" style="display:none;" class="form-control" v-model="form.payment_id">
                           <div class="col-sm-6">
                              <label>Payment Date</label>
                              <input type="date" id="paydate" class="form-control" v-model="form.payment_date">
                             
                           </div>
                           <div class="col-sm-6" id="paymentamount">
                              <label for="amount">Payment Amount</label>
                              <input id="payamount"  type="text" name="amount" class="form-control" v-model="form.totalpayment" required>
                             
                           </div>
                        </div>
                      
                        <div class="row">
                           <div class="col-sm-6">
                              <label>Mode</label>
                           
                              <select id="modetype" class="form-control" v-model="form.payment_method">
                                 <option value="Cash" >Cash</option>
                                 <option value="DD">DD</option>
                                 <option value="Card">Card</option>
                                 <option value="Netbanking">Netbanking</option>
                                 <option value="Cheque">Cheque</option>
                              </select>
                             
                           </div>
                           <div class="col-sm-6" id="DD" style="display:none;">
                              <label>DD Number</label>
                              <input type="text" id="ddno" class="form-control" v-model="form.d_d_no">
                             
                           </div>
                           <div class="col-sm-6" id="Cheque" style="display:none;">
                              <label>Cheque Number</label>
                              <input type="text" id="chno" class="form-control" v-model="form.cheque_no">
                             
                           </div>
                        </div>
                          <div class="row">
                           
                           <div class="col-sm-12">
                              <label>Remarks</label>
                              <textarea id="review" class="form-control" v-model="form.reviews"> </textarea>
                             
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button data-dismiss="modal" class=" btn btn-default" type="button">Close</button>
                        <button class="  btn btn-warning" type="button" @click="update" :disabled="isProcessing">Update</button>
                     </div>
                  </div>
               </div>
            </div>
           </div>
                 </div>

                 <div class="modal fade top-modal-without-space " id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
               <div class="modal-content-wrap">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Delete Payment</h4>
                     </div>
                     <div class="modal-body">

                        <div class="row">
                         <input type="text" id="paydelid" style="display:block;" class="form-control" v-model="form.deletepayment_id">
                        <h3>Are You Sure, Action can't revert back</h3>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button data-dismiss="modal" class=" btn btn-default" type="button">Close</button>
                        
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <button type="button" class="btn btn-danger btn-sm" onclick="DestroyPayment(this)">Delete</button>
                        
                        
                     </div>
                  </div>
               </div>
            </div>
           </div>
           </div>
   </section>
    </div>
 </div>


@endsection

@push('scripts')
   
   
    <script type="text/javascript" language="javascript" src="{{URL::asset('assets/assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/assets/data-tables/DT_bootstrap.js')}}"></script>

    
   
    <!--common script for all pages-->
   
     <script src="{{URL::asset('assets/js/dynamic_table_init.js')}}"></script>
    <script src="{{URL::asset('assets/js/dynamic-table.js')}}"></script>
    <script src="{{URL::asset('js/vue.min.js')}}"></script>
<script src="{{URL::asset('js/vue-resource.min.js')}}"></script>

    <script type="text/javascript">
    Vue.http.headers.common['X-CSRF-TOKEN'] = '{{csrf_token()}}';
     window._form ={};
   
   function EditPayment(btn){
     
      var paymentId=btn.getAttribute("paymentid");
      var amnt=btn.getAttribute("amnt");
      var paydate=btn.getAttribute("paydate");
      var reviews=btn.getAttribute("reviews");
      var mode=btn.getAttribute("mode");
      var ddno=btn.getAttribute("ddno");
      var chno=btn.getAttribute("chno");

      document.getElementById('modetype').value=mode;
       document.getElementById('ddno').value=ddno;
      document.getElementById('chno').value=chno;
     
      document.getElementById('payid').value=paymentId;
       document.getElementById('paydate').value=paydate;
      document.getElementById('payamount').value=amnt;
     
      document.getElementById('review').value=reviews;

      if ($('#modetype').val() == "DD") {
                        $("#DD").show();
                        $("#Cheque").val='';
                    } else {
                        $("#DD").hide();
                    }

                    if ($('#modetype').val() == "Cheque") {
                        $("#Cheque").show();
                        $("#DD").val='';
                    } else {
                        $("#Cheque").hide();
                    }
};

function DeletePayment(btn){
 var paymentid=btn.getAttribute("paymentid");

            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this data!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes, I am sure!',
                cancelButtonText: "No, cancel it!",
                closeOnConfirm: false,
                closeOnCancel: true
            },
            function(isConfirm) {
                if (isConfirm) {
                  $.get('/destroypayment/' + paymentid, function(data, status){
                        if(status && data.deleted){
                        window.location.reload();
                        }
                        else{
                          toastr.warning("Some Error Occured", " ");
                          console.log('not deleted');
                        }
                  });             
                } 
            });

};




        
    @if (notify()->ready())
      swal({
        title : "{{ notify()->message() }}", 
        type: "{{notify()->type()}}",
        timer : 2000,
        showConfirmButton: false,
        animation: "slide-from-top",


      });
      @endif


</script>
<script src="{{URL::asset('js/pay.js')}}"></script>
<script src="{{URL::asset('js/allfunctions.js')}}"></script>


@endpush