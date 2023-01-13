@extends('layouts.app')


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



<?php 
        $encrypted = Crypt::encrypt($varCategory->Category_id);
?>
    <form method='POST' action="{{route('category.update',$encrypted)}}" enctype="multipart/form-date">
@method('PATCH')
{{csrf_field()}}
<div class="col-xs-6 col-sm-6 col-md-6">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category name:</strong>
                <input class="form-control" type="text" name='Category_name' value = "{{$varCategory->Category_name}}" required>
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>
</div>



<p class="text-center text-primary"><small>Health and Care Services</small></p>
@endsection