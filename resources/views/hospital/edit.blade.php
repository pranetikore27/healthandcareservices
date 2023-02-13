@extends('layouts.dashboard')
@section('content')
<style>
.center {
  margin: auto;
  width: 60%;
  
  padding: 10px;
}
</style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Hospital</h2>
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


    <form action="{{ route('hospitals.update',$VarHospital->Hospital_id) }}" method="POST">
    	@csrf
        @method('PUT')


        <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="Hospital_name" value="{{$VarHospital->Hospital_name}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Hospital email id:</strong>
                    <input type="email" name="Hospital_email_id" value="{{$VarHospital->Hospital_email_id}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Hospital address</strong>
                    <input type="text" name="Hospital_address" value="{{$VarHospital->Hospital_address}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Hospital city</strong>
                    <input type="text" name="Hospital_city" value="{{$VarHospital->Hospital_city}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Hospital pincode</strong>
                    <input type="text" name="Hospital_pin_Code" value="{{$VarHospital->Hospital_pin_Code}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Hospital feature</strong>
                    <input type="text" name="Hospital_features" value="{{$VarHospital->Hospital_features}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Hospital start time</strong>
                    <input type="time" name="Hospital_start_time" value="{{$VarHospital->Hospital_start_time}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Hospital end time</strong>
                    <input type="time" name="Hospital_end_time" value="{{$VarHospital->Hospital_end_time}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Hospital website url</strong>
                    <input type="text" name="Hospital_website_URl" value="{{$VarHospital->Hospital_website_URl}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>


<p class="text-center text-primary"><small>Health and Care Services</small></p>
@endsection