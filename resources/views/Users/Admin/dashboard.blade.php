@extends('layouts.master')

@section('content')

              <section class="panel">
                  <header class="panel-heading">
                      All Users
                  </header>
                  <div class="panel-body">
                      <div class="adv-table">
                          <div class="clearfix">
                              <div class="btn-group">
                                  <a href="{{ url('/register') }}" class="btn btn-primary"><i class="fa fa-btn fa-user"></i> Register New User</a>
                              </div>
                              <div class="btn-group pull-right">
                                  <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                  </button>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="#">Print</a></li>
                                      <li><a href="#">Save as PDF</a></li>
                                      
                                  </ul>
                              </div>
                          </div>
                          
                          <div class="table-responsive">

                          <table class="table table-striped table-hover table-bordered" >
                              <thead>
                              <tr>
                                  <th>Username</th>
                                  <th>Email Id</th>
                                  <th>Address</th>
                                  <th>Role</th>
                                  <th>Edit Role</th>
                                  <th>Update</th>
                                 <!--  <th>Save</th> -->
                              </tr>
                              </thead>
                              <tbody>
                              
                              @foreach($usrrol as $d)
                              <tr class="">
                              
                                  <td>{{ $d->name}}</td>
                                  <td>{{$d->email}}</td>
                                   <td>{{$d->address}}</td>
                                  
                                  <td>{{$d->display_name}}</td>
                                 
                                  <td ><select name="role_id" class="form-control">
                                      <?php
                                      foreach ($data as $r) {

                                        ?>
                                            <option value="<?= $r->id ?>" <?php if($d->role_id==$r->id) echo 'selected' ?> > <?= $r->name ?></option>
                                        <?php
                                         
                                      }

                                      ?>
                                  </select>
                                  </td >
                                  <td >
                                  <a href="{{ url('/Updaterole') }}" class="btn btn-success"></i>Update Role</a>
                             
                                  </td>
                                <!--   <td><a class="edit" href="javascript:;">Edit</a></td>
                                  <td><a class="delete" href="javascript:;">Delete</a></td> -->
                                 
                              </tr>
                               @endforeach


                              </tbody>
                          </table>

                          </div>
                      </div>
                  </div>
              </section>
              <!-- page end-->

@endsection
@push('scripts')
     <script src="{{URL::asset('js/sweetalert.min.js')}}"></script>
    
    <script type="text/javascript">
      
    @if (notify()->ready())
      swal({
        title : "{{notify()->message() }}", 
        type: "{{notify()->type()}}"

      });
      @endif

    </script>
@endpush
