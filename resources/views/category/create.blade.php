@extends('layouts.dashboard')
@section('content')
<style>
.center {
  margin: auto;
  width: 60%;
  
  padding: 10px;
}
</style>



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

{!! Form::open(array('route' => 'category.store','method'=>'POST')) !!}
<div class="center">
<div class="row">
    <div class="col-lg-5 margin-tb">
            <h2>Add new Category</h2>
        <div class="pull-center">
            <a class="btn btn-primary" href="{{ url('category') }}"> Back</a>
        </div>
    </div>
</div>
    <div class="row pull-center">        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group text-center">
                <h5> Category Name </h5>
                {!! Form::text('Category_name', null, array('placeholder' => 'Category Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group text-center">
                <h5> Number of fields? </h5>
                {!! Form::text('Category_field_count', null, array('placeholder' => 'Number of fields','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
{!! Form::close() !!}

@endsection