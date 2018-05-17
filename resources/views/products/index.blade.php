@extends('layouts.client')
@push('css')

  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/sweetalert.css')}}">
 @endpush

@section('content')

                          
              <header class="panel-heading">
                All Products
          
              </header>
    <input type="hidden" value="<?php echo csrf_token(); ?>" name="_token">
              <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Create Product</a>
              
      @if($products->count())
      
             <table  class="display table table-bordered table-striped" id="dynamic-table">
               <thead>
                    <tr>
                      
                        <th>Product Name</th>
                        <th>Product HSN Code</th>
                        <th >Action</th>
                    </tr>
                </thead>
              <tbody>
      
        
      
            @foreach($products as $product)
                           <tr>
                           
                            <td>{{$product->name}}</td>
                            <td>{{$product->hsn_code}}</td>
                            <td>
                            <div class="float-left">    
                              <a class="btn btn-danger  btn-xs onDelete" id="onDelete"  clientid="{{$product->id}}" ><i class="fa fa-trash-o"></i></a></div> 
                             
                            </div>
                            </td>
                        </tr>
                       
                    @endforeach
                    
                </tbody>
              
              </table>
             
          
@else
 <div class="invoice-empty">
    <p class="invoice-empty-title">
        No Products were created.
      
    </p>
</div>
@endif

@endsection

@push('scripts')
      
    <script type="text/javascript" language="javascript" src="{{URL::asset('assets/assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/assets/data-tables/DT_bootstrap.js')}}"></script>
   

 
     <script src="{{URL::asset('assets/js/dynamic_table_init.js')}}"></script>
    <script src="{{URL::asset('assets/js/dynamic-table.js')}}"></script>
    <script src="{{URL::asset('js/sweetalert.min.js')}}"></script>
    <div id="products">
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <div id="ajaxResponse"></div>
       Add New Product
      </div>
       <div class="modal-body1">
	       <form class="form-horizontal col-sm-12" style="padding: 10px 32px;">
	          <div class="form-group"><label>Product Name</label><input class="form-control required" placeholder="Product Name" id="name" required type="text" name="product_name"></div>
	          
	          <div class="form-group"><label>HSN Code</label><input class="form-control" placeholder="HSN Code" required name="product_hsn" id="hsn" ></div>
	         
	         
     
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
         <input  class="finish btn btn-success" id="submit" type="submit"/>
      </div>
      
	     </form>
    </div>
  </div>
</div></div>


    <script type="text/javascript">

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
<script type="text/javascript">
   $(document).ready(function() {
   
   
     $('#submit').on('click', function(e) {
         e.preventDefault();
         var name = $('#name').val();
         var hsn = $('#hsn').val();
         var token = $('input[name="_token"]').val();
         if (name.trim()) {
         $.ajax({
             type: "GET",
             url: '/saveproduct',
             data: {
                 name: name,
                 hsn_code: hsn,
                 _token:token
                
             },
             success: function(msg) {
                // $("#ajaxResponse").append("<div>"+msg.msg+"</div>");
                window.location.reload();
             },
              error: function(textStatus, error) {
              //alert('eeror'+error)
                            toastr.warning("Some Error Occured", "");
                           // );
                         }
         });
         }else{
         alert('Plese fill the name ');
         }
         
     });


     $('.onDelete').on('click',function(e) {
          //alert('sss');
          // e.preventDefault();
         var pid = $(this).attr('clientid');
         //  var hsn = $('#hsn').val();
         var token = $('input[name="_token"]').val();

          deleteproduct(pid,token);


     });
     
 });
 function deleteproduct(pid,token){
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
	             $.ajax({
	                 type: "GET",
	                 url: '/destroyproduct',
	                 data: {
	                     id: pid,
	                     _token: token
	                 },
	                 success: function(msg) {
	                     $("#ajaxResponse").append("<div class='alert'>"+msg.msg+"</div>");
	                     window.location.reload();
	                 },
	                 error: function(textStatus, errorThrown) {
	                     toastr.warning("Some Error Occured", "");
	                     //console.log('not deleted');
	                 }
	             });
	
	
	         }
	     });
	}
    </script>



@endpush