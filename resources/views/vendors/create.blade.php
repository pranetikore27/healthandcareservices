@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-8 margin-tb">
        <div class="pull-left">
            <h2>Fill the Vendor Form</h2>
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
{!! Form::open(array('route' => 'hivendors.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8">
        <div class="form-group">
            {!! Form::text('Vendor_businessname', null, array('placeholder' => 'Your business name?','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-8 col-sm-8 col-md-8">
        <div class="form-group">
            {!! Form::text('Vendor_businessaddress', null, array('placeholder' => 'Company Address','class' => 'form-control')) !!}
        </div>
</div>
    
    <div class="col-xs-8 col-sm-8 col-md-8 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}
@endsection