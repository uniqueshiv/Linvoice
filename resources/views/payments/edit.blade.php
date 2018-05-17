@extends('layouts.client')

@section('content')
    <div id="payment">
        <div class="panel panel-default" >
            <div class="panel-heading">
                <div class="clearfix">
                    <span class="panel-title">Create Payment</span>

                    <a href="{{route('payments.index')}}" class="btn btn-default pull-right">Back</a>
                </div>
            </div>
          <div class="panel-body">
           @include('payments.form')
            </div>
               
                    <div class="container" id="dynamic-table"></div>

                    <div class="container" id="makepaymentsection" > </div> 
                      <div class="panel-footer">
                    <a href="{{route('payments.index')}}" class="btn btn-default">CANCEL</a>
                    <button class="btn btn-success" @click="update" :disabled="isProcessing">UPDATE</button>
                </div>  
        
           
        </div>
    </div>


@endsection

@push('scripts')
   
    <!--common script for all pages-->
   
        <script src="{{URL::asset('js/vue.min.js')}}"></script>
    <script src="{{URL::asset('js/vue-resource.min.js')}}"></script>
     <script type="text/javascript">
        Vue.http.headers.common['X-CSRF-TOKEN'] = '{{csrf_token()}}';

        window._form = {!! $payment->toJson() !!};
  
       function makePayment(btn){
           debugger;
           var invoiceId=btn.getAttribute("invoiceId");
           var invoiceNo=btn.getAttribute("invoice_no");
           var dueDate=btn.getAttribute("due_date");
           var grandTotal=btn.getAttribute("grand_total");
           var container = document.getElementById('makepaymentsection');
           document.getElementById('paymentamount').style.display="block";
            document.getElementById('payamount').focus();
          
            document.getElementById('payamount').blur();
            document.getElementById('invoiceid').focus();
           document.getElementById('invoiceid').value=invoiceId;
           document.getElementById('invoiceid').blur();
          

           // var txtinvoicenum = document.getElementById('txtInvoiceNo');
           // var txtduedate = document.getElementById('txtDueDate')
           // var txtgrandtotal = document.getElementById('txtGrandTotal')
           // container.innerHTML = "";
        
         // container.innerText= " Enter Amount for Invoice no." +invoiceNo ;
           // txtinvoicenum.innerText= invoiceNo ;
           // txtduedate.innerText= dueDate ;
           // txtgrandtotal.innerText=grandTotal ;
      };
    </script>
     <script src="{{URL::asset('js/pay.js')}}"></script>
    <script src="{{URL::asset('js/allfunctions.js')}}"></script>

@endpush