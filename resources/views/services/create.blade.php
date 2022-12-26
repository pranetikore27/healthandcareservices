@extends('layouts.dashboard')


@section('content')
<div class="row">
    <div class="col-lg-5 margin-tb">
        <div class="pull-left">
            <h2>Add new Service</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('services') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

{!! Form::open(array('route' => 'services.store','method'=>'POST')) !!}
<div class="row pull-center">
    <div class="col-xs-5 col-sm-5 col-md-5">
        <div class="form-group">
            <h5> Name of the service</h5>
            {!! Form::text('Service_name', null, array('placeholder' => 'Service Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5">
        <div class="form-group">
            <h5> Describe your services in detail</h5>
            {!! Form::text('Service_description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-5 col-sm-5 col-md-5">
        <div class="form-group">
            <h5>Cost</h5>
            {!! Form::text('Service_charge', null, array('placeholder' => 'Charge of service','class' => 'form-control')) !!}
        </div>
    </div>

    


    <div class="col-xs-5 col-sm-5 col-md-5">
        <div class="form-group">
            <h5>Service available upto</h5>
            {!! Form::date('Service_validity', null, array('placeholder' => 'Valid for','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-5 col-sm-5 col-md-5">
        <div class="form-group">
            <h5> Availability Status </h5>
        {!! Form::select('Service_isactive',  ["Active", "Inactive", "Private"], null, ['class' => 'form-control']) !!}
        </div>
    </div>
    
    
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}

@endsection