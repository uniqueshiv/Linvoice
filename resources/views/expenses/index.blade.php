@extends('layouts.client')

@push('css')

<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/assets/gritter/css/jquery.gritter.css')}}" />

@endpush

@section('content')
 <div id="expense">
              <section class="panel">
              <header class="panel-heading">
                All Expenses 
             <!-- <span class="pull-right">
                <a href="{{route('expenses.create')}}" class="btn btn-success">Create</a>
             </span> -->
              </header>
              <div class="panel-body">
              <div>   <a data-toggle="modal"   href="#myModal10" id="addexpe" @click="add"  class="btn btn-success btn-sm">Add New Expense</a> </div>
              <div class="adv-table">
                 @if($expenses->count())
              <table  class="display table table-bordered table-striped" id="dynamic-table">
                <thead>
                    <tr>
                        <th>Vendor Name</th>
                        <th>Amount</th>
                        <th>Remarks</th>
                        <th >Created At</th>
                        <th>Mode</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($expenses as $expense)
                        <tr>
                            
                            <td>{{$expense->vendor_name}}</td>
                            <td>{{$expense->amount}}</td>
                            <td>{{$expense->remarks}}</td>
                            <td>{{$expense->created_at->diffForHumans()}}</td>
                            <td>{{$expense->mode}}</td>
                            <td class="text-right">
                                
                               <div class="float-left"> <a  data-toggle="modal"  href="#myModal10" v-on:click="edit('{{$expense->expense_id}}')" class=" editexp btn btn-primary btn-xs"><i  class="fa fa-pencil"></i></a></div>
                               <div class="float-left"> 
                                  <a class="btn btn-danger  btn-xs" id="onDelete"  expenseid="{{$expense->expense_id}}" onclick="Deletebtn(this)"><i class="fa fa-trash-o"></i></a>
                                </div>
                          </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>  
          
            @else
                <div class="invoice-empty">
                    <p class="invoice-empty-title">
                        No Expenses were made.
                        <a data-toggle="modal"   href="#myModal10" id="addexpe" @click="add" >Create Now!</a>
                    </p>
                </div>
            @endif
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
                       <div class="modal-header ">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Add Expense</h4>
                     </div>
                     <div class="modal-body">
                        <div class="row">

                           <div class="col-sm-6 form-group ">
                              <label for="vendor">Vendor Name</label>
                              <input type="text" id="vendor" name="vendor" class="form-control lettersonly" required minlength="3"   v-model="form.vendor_name">
                             <!--  <p v-if="errors.vendor_name" class="error">@{{errors.vendor_name[0]}}</p> -->
                           </div>
                           <div class="col-sm-6 form-group " >
                             <label for="amount">Amount</label>
                              <input type="text" id="amount" name="amount" class="form-control number" required  v-model="form.amount">
                             <!--  <p v-if="errors.amount" class="error">@{{errors.amount[0]}}</p> -->
                           </div>
                        </div>
                      
                        <div class="row">
                           <div class="col-sm-6 form-group ">
                              <label for="modetype">Mode</label>
                              <!-- <input type="date" class="form-control" v-model="form.invoice_date"> -->
                              <select id="modetype" name="modetype" class="form-control" required v-model="form.mode">
                                 <option value="Cash" >Cash</option>
                                 <option value="DD">DD</option>
                                 <option value="Card">Card</option>
                                 <option value="Netbanking">Netbanking</option>
                                 <option value="Cheque">Cheque</option>
                              </select>
                              <!-- <p v-if="errors.mode" class="error">@{{errors.mode[0]}}</p> -->
                           </div>
                           <div class="col-sm-6 form-group" id="DD" style="display:none;">
                              <label for="DD_no">DD Number</label>
                              <input type="text" class="form-control number" id="DD_no" name="DD_no"  minlength="5" v-model="form.d_d_no">
                             <!--  <p v-if="errors.d_d_no"  class="error">@{{errors.d_d_no[0]}}</p> -->
                           </div>
                           <div class="col-sm-6 form-group" id="Cheque"  style="display:none;">
                              <label for="chequeno">Cheque Number</label>
                              <input type="text" id="chequeno" name="chequeno" class="form-control number"  minlength="5" v-model="form.check_no">
                              <!-- <p v-if="errors.check_no" class="error">@{{errors.check_no[0]}}</p> -->
                           </div>
                        </div>
                        <div class="row"> 
                           <div class="col-sm-12 form-group">
                                 <div class="form-group">
                                     <label>Remarks</label>
                                     <textarea class="form-control" required v-model="form.remarks"></textarea>
                                    <!--  <p v-if="errors.remarks" class="error">@{{errors.remarks[0]}}</p> -->
                                 </div>
                            </div>

                        </div>
                        
                     </div>
                     
                     <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btnthis btn btn-warning" type="submit" id="save" @click="create"  > Save</button>
                        <button class=" btnthis btn btn-warning" id="update" type="submit" @click="update"  > Update</button>
                     </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
    </div>
    </section>
    </div>

@endsection

@push('scripts')

   
   
    <script type="text/javascript" language="javascript" src="{{URL::asset('assets/assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/assets/data-tables/DT_bootstrap.js')}}"></script>

        <!--common script for all pages-->
   
     <script src="{{URL::asset('assets/js/dynamic_table_init.js')}}"></script>
    <script src="{{URL::asset('assets/js/dynamic-table.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/jquery.pulsate.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/assets/gritter/js/jquery.gritter.js')}}"></script>
  
<!--script for this page only-->
<script src="{{URL::asset('assets/js/gritter.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/js/pulstate.js')}}" type="text/javascript"></script>

    <script src="{{URL::asset('js/vue.min.js')}}"></script>
    <script src="{{URL::asset('js/vue-resource.min.js')}}"></script>
    
    <script type="text/javascript">

     Vue.http.headers.common['X-CSRF-TOKEN'] = '{{csrf_token()}}';

jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[ a-z]+$/i.test(value);
}, "Letters only please"); 

  function Deletebtn(btn){
 var expenseid=btn.getAttribute("expenseid");

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
                  $.get('/destroyexpense/' + expenseid, function(data, status){
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
    <script src="{{URL::asset('js/expense.js')}}"></script>
    <script src="{{URL::asset('js/allfunctions.js')}}"></script>

    

@endpush