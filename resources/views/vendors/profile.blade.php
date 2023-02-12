@extends('layouts.dashboard')


@section('content')

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


{!! Form::model($user, ['method' => 'PATCH','route' => ['hivendors.update', $user->id]]) !!}
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
        @foreach($categoryfields as $c)
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{$c}}:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        @endforeach
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>
</div>
{!! Form::close() !!}


<p class="text-center text-primary"><small>Health and Care Services</small></p>
@endsection