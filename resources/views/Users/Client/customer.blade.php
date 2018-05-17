@extends('layouts.client')
@push('css')

  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/sweetalert.css')}}">
 @endpush

@section('content')

 <div class="row">
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                                
                              <h1>{{$usr->name}}</h1>
                              <p>{{$usr->email}}</p>
                         

                          <ul class="nav nav-pills nav-stacked">
    
                                <div class="text-content">
                                 <div class="span7 offset1">
                                    @if(Session::has('success'))
                                      <div class="alert-box success">
                                      <h2>{!! Session::get('success') !!}</h2>
                                      </div>
                                    @endif
                                    <div class="secure">Upload LOGO</div>
                                    {!! Form::open(array('url'=>'apply/logoload','method'=>'POST', 'files'=>true)) !!}
                                     <div class="control-group">
                                          <div class="controls">
                                          {!! Form::file('image') !!}
                                            <p class="errors">{!!$errors->first('image')!!}</p>
                                          @if(Session::has('error'))
                                          <p class="errors">{!! Session::get('error') !!}</p>
                                          @endif
                                        </div>
                                    </div>
                                    <div id="success"> </div>
                                      {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
                                      {!! Form::close() !!}
                                  </div>
                         </div>
                          </ul>
                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      <section class="panel">
                          
                      </section>
                      <section class="panel">

                      </section>
                    

                  </aside>
              </div>



@endsection

@push('scripts')
    <script src="{{URL::asset('assets/js/jquery.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{URL::asset('assets/js/jquery.dcjqaccordion.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/slidebars.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/js/respond.min.js')}}" ></script>

    <!--common script for all pages-->
    <script src="{{URL::asset('assets/js/common-scripts.js')}}"></script>


@endpush