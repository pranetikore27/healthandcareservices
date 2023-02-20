@extends('layouts.dashboard')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Register our ambulance</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('ambulances') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('ambulances.store') }}" method="POST">
    	@csrf


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="Ambulance_name" class="form-control" placeholder="Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong> Ambulance mobile number</strong>
                    <input type="ext" name="Ambulance_mobile_number" class="form-control" placeholder="Name">
		        </div>
		    </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Ambulance address</strong>
                    <input type="text" name="Ambulance_address" class="form-control" placeholder="Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>City</strong>
                    <input type="text" name="Ambulance_city" class="form-control" placeholder="city">
		        </div>
		    </div>
			
			<div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Ambulance pin Code</strong>
                    <input type="text" name="Ambulance_pin_Code" class="form-control" placeholder="pincode">
		        </div>
		    </div>


		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>


<p class="text-center text-primary"><small>Health and Care Services</small></p>
@endsection