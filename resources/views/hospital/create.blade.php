@extends('layouts.dashboard')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Register our hospital as Vendor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('hospitals') }}"> Back</a>
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


    <form action="{{ route('hospitals.store') }}" method="POST">
    	@csrf


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="Hospital_name" class="form-control" placeholder="Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                    <input type="email" name="Hospital_email_id" class="form-control" 
					placeholder="Email address">
		        </div>
		    </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                    <input type="text" name="Hospital_address" class="form-control" placeholder="Address">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                    <input type="text" name="Hospital_city" class="form-control" placeholder="City">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                    <input type="text" name="Hospital_pin_Code" class="form-control" placeholder="Pincode">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                    <input type="text" name="Hospital_features" class="form-control" placeholder="Features provided">
		        </div>
		    </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
		        <div class="form-group">Timings from: 
                    <input type="time" name="Hospital_start_time" class="form-control" placeholder="Start time">
		        </div>
		    </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
		        <div class="form-group">To: 
                    <input type="time" name="Hospital_end_time" class="form-control" placeholder="Closing time">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                    <input type="text" name="Hospital_website_URl" class="form-control" placeholder="Hospital website url">
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>


<p class="text-center text-primary"><small>Health and Care Services</small></p>
@endsection