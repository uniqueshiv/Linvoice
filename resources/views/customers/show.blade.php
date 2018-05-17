@extends('layouts.client')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="clearfix">
                <span class="panel-title">Customer</span>
                <div class="pull-right">
                    <a href="{{route('customers.index')}}" class="btn btn-default">Back</a>
                    <a href="{{route('customers.edit', $customer->customer_id)}}" class="btn btn-primary">Edit</a>
                    <form class="form-inline" method="post"
                        action="{{route('customers.destroy', $customer->customer_id)}}"
                        onsubmit="return confirm('Are you sure?')"
                    >
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>customer Name</label>
                        <p>{{$customer->customer_name}}</p>
                    </div>
                    <div class="form-group">
                        <label>customer address</label>
                        <pre class="pre">{{$customer->customer_address}}</pre>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>customerShip Add</label>
                        <pre class="pre">{{$customer->customer_ship_add}}</pre>
                    </div>
                    <div class="form-group">
                        <label>customer email</label>
                        <p>{{$customer->customer_email}}</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>description</label>
                        <p>{{$customer->description}}</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>mobile no</label>
                            <p>{{$customer->mobile_no}}</p>
                        </div>
                    
                    </div>
                </div>
            </div>
            <hr>
           
        </div>
    </div>
@endsection

