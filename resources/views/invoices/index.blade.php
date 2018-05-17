@extends('layouts.client')
@push('css')

  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/sweetalert.css')}}">
 @endpush

@section('content')
<?php $now =new DateTime();  $nowdate=($now->format('Y-m-d'));?>
              <div class="row">
                <div class="col-sm-12">
              <section class="panel">
              <header class="panel-heading">
                All Invoice 
            <!--  <span class="pull-right">
                <a href="{{route('invoices.create')}}" class="btn btn-success">Create</a>
             </span> -->
              </header>
              <div class="panel-body">
              <div class="adv-table">
                @if($invoices->count())
              <table  class="display table table-bordered table-striped" id="dynamic-table">
               <thead>
                    <tr>
                        <th>Client</th>
                        <th>Invoice No.</th>
                        <th>Grand Total</th>
                        <th>Invoice Date</th>
                       
                        <th >Created At</th>
                        <th>Action</th>
                       
                    </tr>
                </thead>
              <tbody>
                    @foreach($invoices as $invoice)
                        <tr>@foreach($customers as $c)
                                @if(($c->customer_id)==($invoice->client_id))
                                     <td>{{$c->customer_name}}</td>
                                 @endif
                            @endforeach
                           <td><a href="{{route('invoices.show', $invoice->invoice_id)}}">{{$invoice->invoice_no}}</a></td>
                            <td>{{$invoice->grand_total}}</td>
                            <td>{{$invoice->invoice_date}}</td>
                            
                            <td>{{$invoice->created_at->diffForHumans()}}</td>
                           <td >
                            <div class="float-left"><a href="{{route('invoices.show', $invoice->invoice_id)}}" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a></div>
                            <div class="float-left"><a href="{{route('invoices.edit', $invoice->invoice_id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></div>
                             <div class="float-left"><a href="{{route('printToPDF', $invoice->invoice_id)}}" class="btn btn-primary btn-xs"><i class="fa fa-print"></i></a></div>
                             
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              
              </table>
                
            @else
                <div class="invoice-empty">
                    <p class="invoice-empty-title">
                        No Invoices were created.
                        <a href="{{route('invoices.create')}}">Create Now!</a>
                    </p>
                </div>
            @endif
              </div>
              </div>
              </section>
              </div>
              </div>

             
@endsection

@push('scripts')


    <!--dynamic table initialization -->

   
    
    <script type="text/javascript" language="javascript" src="{{URL::asset('assets/assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/assets/data-tables/DT_bootstrap.js')}}"></script>

   

     <script src="{{URL::asset('assets/js/dynamic_table_init.js')}}"></script>
    <script src="{{URL::asset('assets/js/dynamic-table.js')}}"></script>
         <script src="{{URL::asset('/assets/js/jquery.pulsate.min.js')}}"></script>
      <script src="{{URL::asset('/assets/js/gritter.js')}}"></script>
     <script src="{{URL::asset('/assets/js/pulstate.js')}}"></script>
<script src="{{URL::asset('js/sweetalert.min.js')}}"></script>
        <!--this page plugins-->
<!-- 
  <script type="text/javascript" src="{{URL::asset('/assets/assets/fuelux/js/spinner.min.js')}}"></script> -->
 <!--  <script type="text/javascript" src="{{URL::asset('/assets/assets/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script> -->
  <script type="text/javascript" src="{{URL::asset('/assets/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('/assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('/assets/assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('/assets/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
<!--   <script type="text/javascript" src="{{URL::asset('/assets/assets/bootstrap-daterangepicker/moment.min.js')}}"></script> -->
  <script type="text/javascript" src="{{URL::asset('/assets/assets/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('/assets/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('/assets/assets/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('/assets/assets/jquery-multi-select/js/jquery.multi-select.js')}}"></script>
<!--   <script type="text/javascript" src="{{URL::asset('/assets/assets/jquery-multi-select/js/jquery.quicksearch.js')}}"></script> -->
   <script src="{{URL::asset('/assets/js/advanced-form-components.js')}}"></script>
    
    <script type="text/javascript">

  function Deletebtn(btn){
var invoiceid=btn.getAttribute("invoiceid");

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
                  $.get('/destroyinvoice/' + invoiceid, function(data, status){
                        if(status && data.deleted){
                        window.location.href='http://paltani.com/invoease/public/invoices';
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

@endpush