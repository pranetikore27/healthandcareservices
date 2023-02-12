@extends('layouts.dashboard')


@section('content')
<div class="row">
    <div class="col-lg-8 margin-tb">
        <div class="pull-left">
            <h2>Register a vendor as Admin</h2>
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
{!! Form::open(array('route' => 'hivendors.update','method'=>'POST')) !!}
<div class="row">
<div class="col-lg-8 margin-tb">
<div class="pull-left">

<div class="col-xs-8 col-sm-8 col-md-8">
        <div class="form-group">
        <select id="Vendor_category" name="Vendor_category" class="form-control">
            @foreach($categories as $c)
            <option value="{{$c->Category_id}}"> {{$c->Category_name}} </option>
            @endforeach
        </select>
        </div>
    </div>

    <div class="col-xs-8 col-sm-8 col-md-8">
        <div class="form-group">
            {!! Form::text('name', null, array('placeholder' => 'Name of the Firm','class' => 'form-control')) !!}
        </div>
    </div>

<div class="col-xs-8 col-sm-8 col-md-8">
        <div class="form-group">
            {!! Form::text('email', null, array('placeholder' => 'Email address to log in','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-8 col-sm-8 col-md-8">
        <div class="form-group">
            {!! Form::text('Vendor_mobilenumber', null, array('placeholder' => 'Contact number [This will be verified later on]','class' => 'form-control')) !!}
        </div>
    </div>
    
    <div class="col-xs-8 col-sm-8 col-md-8 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}
@endsection