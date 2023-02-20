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
                <h2>Edit Medical</h2>
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


    <form action="{{ route('medicals.update',$VarMedical->Medical_id) }}" method="POST">
    	@csrf
        @method('PUT')


        <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="Medical_name" value="{{$VarMedical->Medical_name}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Medical email id:</strong>
                    <input type="email" name="Medical_email_id" value="{{$VarMedical->Medical_email_id}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Medical address</strong>
                    <input type="text" name="Medical_address" value="{{$VarMedical->Medical_address}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Medical city</strong>
                    <input type="text" name="Medical_city" value="{{$VarMedical->Medical_city}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Medical pincode</strong>
                    <input type="text" name="Medical_pin_Code" value="{{$VarMedical->Medical_pin_Code}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Medical mobile number</strong>
                    <input type="text" name="Medical_mobile_number" value="{{$VarMedical->Medical_mobile_number}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Medical start time</strong>
                    <input type="time" name="Medical_start_time" value="{{$VarMedical->Medical_start_time}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Medical end time</strong>
                    <input type="time" name="Medical_end_time" value="{{$VarMedical->Medical_end_time}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Medical website url</strong>
                    <input type="text" name="Medical_website_URl" value="{{$VarMedical->Medical_website_URl}}" class="form-control"  placeholder="Name">
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>


<p class="text-center text-primary"><small>Health and Care Services</small></p>
@endsection