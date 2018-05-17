@extends('layouts.client')
@push('css')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/override.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/assets/bootstrap-datepicker/css/datepicker.css')}}" />
       <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/assets/bootstrap-datetimepicker/css/datetimepicker.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/assets/bootstrap-timepicker/compiled/timepicker.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/assets/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" />

@endpush
@section('content')
<?php ?>
    <div id="invoice">
        <div class="panel panel-default" v-cloak>
            <div class="panel-heading">
                <div class="clearfix">
                    <span class="panel-title">Create Invoice</span>

                    <a href="{{route('invoices.index')}}" class="btn btn-default pull-right">Back</a>
                </div>
            </div>
                <div class="panel-body">
                    
                                    @include('invoices.form')
                 <div class="text-center invoice-btn">
                                    <a href="{{route('invoices.index')}}" class="btn btn-shadow btn-danger "><i class="fa fa-ban"></i> Cancel</a>
                                    <a class="btn btn-shadow btn-info " @click="create" :disabled="isProcessing" ><i class="fa fa-check"></i> Create</a>
                                </div>             
                </div>                            
        </div>
    </div>
@endsection

@push('scripts')
   
    <!--common script for all pages-->
   
     <script src="{{URL::asset('/assets/js/jquery.pulsate.min.js')}}"></script>
      <script src="{{URL::asset('/assets/js/gritter.js')}}"></script>
     <script src="{{URL::asset('/assets/js/pulstate.js')}}"></script>
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
   
    <script src="{{URL::asset('js/vue.min.js')}}"></script>
    <script src="{{URL::asset('js/vue-resource.min.js')}}"></script>

    <script type="text/javascript">
      var base_url = window.location.origin;
      console.log(base_url);
        Vue.http.headers.common['X-CSRF-TOKEN'] = '{{csrf_token()}}';

         window._form = {
            invoice_no: '',
            client_id: '',
            title: '',
            invoice_date: '',
            fcharges: '0',
            lpcharges: '0',
            insurcharges: '0',
            other: '0',
            numinwords:'',
taxinwords:'',
tax:0,
tax_other:0,
transmode:'',
veh_no:'',
	p_of_sup:'',
date_of_sup:'',

            products: [{
                name: '',
                price: 0,
                qty: 1,
                hsn_code:'',
                package:'',
                unit:''
            }],
 client: {
                shipaddress: '',
                shipname: '',
                shipcontact: '',
                gst:'',
               
            },
        };



function search(){

    src = "{{ route('searchajax') }}";
     $('input[name^="search_text"]').autocomplete({
         
        source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term,
},
                success: function(data) {
                    response(data);               
                }
            });
        },
        min_length: 3   
    });
};
function searchtransport(){

    src = "{{ route('searchtransport') }}";
     $('input[name^="search_text1"]').autocomplete({
         
        source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term,
},
                success: function(data) {
                    response(data);               
                }
            });
        },
        min_length: 3   
    });
};

function searchv(){

    src = "{{ route('searchv') }}";
     $('input[name^="search_text2"]').autocomplete({
         
        source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term,
},
                success: function(data) {
                    response(data);               
                }
            });
        },
        min_length: 3   
    });
};
function searchpos(){

    src = "{{ route('searchpos') }}";
     $('input[name^="search_text3"]').autocomplete({
         
        source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term,
},
                success: function(data) {
                    response(data);               
                }
            });
        },
        min_length: 3   
    });
};
    </script>
    
    

    <script src="{{URL::asset('js/app.js')}}"></script>
    <script src="{{URL::asset('js/allfunctions.js')}}"></script>
     
@endpush