@extends('dashboards.admin')
@section('content')

<div class="row">
    <div class="col-lg-5 margin-tb">
        <div class="pull-left">
            <h2>Add new Category</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('category') }}"> Back</a>
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

{!! Form::open(array('route' => 'category.store','method'=>'POST')) !!}
<div class="row pull-center">


        
    <div class="col-xs-5 col-sm-5 col-md-5">
        <div class="form-group">
            <h5> Name of the Category</h5>
            {!! Form::text('Category_name', null, array('placeholder' => 'Category Name','class' => 'form-control')) !!}
        </div>
    </div>
    

    
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}

@endsection