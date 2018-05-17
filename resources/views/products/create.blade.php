@extends('layouts.client')
@push('css')

  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/sweetalert.css')}}">
 @endpush

@section('content')

                 <div name="csrf-token" content="{{ csrf_token() }}" ></div>          
              <header class="panel-heading">
                Add New Product sss
          
              </header>
                <section class=" site-min-height">

              <div class="directory-info-row">
                  <div class="row">
                     <div id="products">
                      <div class="col-md-6 col-sm-6">
                          <div class="panel">
                              <div class="panel-body">
			            
			     			
			             <form class="form-horizontal col-sm-12">
				          <div class="form-group"><label>Product Name</label><input class="form-control required" placeholder="Product Name" required type="text" name="product_name"></div>
				          
				          <div class="form-group"><label>HSN Code</label><input class="form-control" placeholder="HSN Code" required name="product_hsn" ></div>
				          
				         
				          <input  class="finish btn btn-success" @click="create" :disabled="isProcessing" value="Create" type="submit"/>
				     </form>
			          
			      		</div>
                                  </div>
                              </div>
                          </div>
                      </div>            
                     
                  </div>
              </div>
              <!-- page end-->    
			          
			          
			          


@endsection

@push('scripts')



    <script type="text/javascript">
        Vue.http.headers.common['X-CSRF-TOKEN'] = '{{csrf_token()}}';

        window._form = {
            product_name: '',
            product_hsn: ''
           
        };


    </script>

 <script src="{{URL::asset('js/prod.js')}}"></script>

@endpush