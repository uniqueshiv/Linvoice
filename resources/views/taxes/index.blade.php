@extends('layouts.client')

@section('content')
<section class="panel">
                  <header class="panel-heading">
                     Taxes
                  </header>
                  <div class="panel-body">

                 <form class="form-horizontal" role="form" method="POST" action="{{url('/taxes') }}">
                 {{ csrf_field() }}
                       <div id="loader-wrapper" style="display:none;">
                        <div id="loader"></div>
                        <div class="loader-section section-left"></div>
                    </div> 
                      <div class="row">
                           <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-3">
                                <input id="name" type="text" placeholder="Tax Name" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                             <div class="{{ $errors->has('tax') ? ' has-error' : '' }}">
                               <div class="col-md-3">
                                <input id="tax" type="text" placeholder="Tax %" class="form-control" name="tax" value="{{ old('tax') }}">

                                @if ($errors->has('tax'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tax') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                <button type="submit" class="btn btn-primary">
                      <i class="fa fa-btn fa-user"></i> Add Tax
                  </button>
                     
                        </div>
                    
                        </form>
                        <div style="margin-top:30px;"></div>
                          <table class="table table-striped table-hover table-bordered" >
                              <thead>
                              <tr>
                                  <th>Tax Name</th>
                                  <th>Tax %</th>
                                  <th>Action</th>
                                
                              </tr>
                              </thead>
                              <tbody>
                               @foreach($taxes as $t)
                              <tr>
                                    <td style="display:none" >{{$t->id}}</td>
                                    <td>{{$t->name}}</td>
                                    <td>{{$t->tax}}%</td>
                                   <!--  <td><a href="{{route('taxes.edit', $t->id)}}" class="btn btn-default ">Edit</a>
                             </td>
                                     --><td>  <form class="form-inline" method="post" id="form1" 
                                    action="{{route('taxes.destroy', $t->id)}}"
                                    >
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                </form></td> 
                              </tr> 
                              @endforeach
                              </tbody>
                          </table>
              </div>
              </section>
   
@endsection

@push('scripts')
 
    <script type="text/javascript" src="{{URL::asset('assets/assets/data-tables/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/assets/data-tables/DT_bootstrap.js')}}"></script>
   <script type="text/javascript"> 

   var el= document.querySelector('#form1');
if (el) {
 el.addEventListener('submit', function(e) {
            var form = this;
            e.preventDefault();
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
                        form.submit();                   
                } 
            });
        });
    }

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