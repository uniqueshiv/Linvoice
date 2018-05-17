@extends('layouts.client')
@push('css')

  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/sweetalert.css')}}">
 @endpush

@section('content')

                          
              <header class="panel-heading">
                All Customers 
          
              </header>
      
             
                 @if($customers->count())
    
          <section class=" site-min-height">

              <div class="directory-info-row">
                  <div class="row">
                   @foreach($customers as $customer)
                      <div class="col-md-6 col-sm-6">
                          <div class="panel">
                              <div class="panel-body">
                                  <div class="media">
                                      <a class="pull-left" href="#">
                                          <img class="thumb media-object" src="./images/profile/default.jpg" alt="">
                                      </a>
                                      <div class="media-body">
                                          <h4>{{$customer->customer_name}} <span class="text-muted small">: {{$customer->description}}</span></h4>
                                          
                                        
                                          <address>
                                              <strong>{{$customer->customer_address}}</strong><br>
                                              India<br>Email: {{$customer->customer_email}}<br>
                                             
                                              <abbr title="Phone">Phone: </abbr>{{$customer->mobile_no}}
                                          </address>
                                         <div class="row no-margin">  
                                         <div class="float-left"><a href="{{route('customers.edit', $customer->customer_id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a></div>
                                         <div class="float-left">    
                                                <a class="btn btn-danger  btn-xs" id="onDelete"  clientid="{{$customer->customer_id}}" onclick="Deletebtn(this)"><i class="fa fa-trash-o"></i></a></div> 
                                         </div>
                                             
                                       
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>            
                      @endforeach
                  </div>
              </div>
              <!-- page end-->
          </section>
      
           
            @else
                <div class="invoice-empty">
                    <p class="invoice-empty-title">
                        No Customer were created.
                        <a href="{{route('customers.create')}}">Create Now!</a>
                    </p>
                </div>
            @endif

@endsection

@push('scripts')
      
    <script type="text/javascript" language="javascript" src="{{URL::asset('assets/assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/assets/data-tables/DT_bootstrap.js')}}"></script>
   

    <!--common script for all pages-->
   
     <script src="{{URL::asset('assets/js/dynamic_table_init.js')}}"></script>
    <script src="{{URL::asset('assets/js/dynamic-table.js')}}"></script>


    <script type="text/javascript">

function Deletebtn(btn){
 var clientid=btn.getAttribute("clientid");

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
                  $.get('/destroyclient/' + clientid, function(data, status){
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
         timer: 2000,
        showConfirmButton: false,
        animation: "slide-from-top"
        
      });
      @endif

    </script>



@endpush