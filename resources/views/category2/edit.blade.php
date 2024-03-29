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



<?php 
        $encrypted = Crypt::encrypt($VarCategory->Category_id);
?>
    <form method='POST' action="{{route('categories.update',$encrypted)}}" enctype="multipart/form-date">
@method('PATCH')
{{csrf_field()}}
<div class="col-xs-12 col-sm-12 col-md-12">
      
       <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
              <strong>Category Name </strong>
              <input class="form-control" type="text" name='Category_name'
              value= "{{$VarCategory->Category_name}} "
              required>    
            </div>
          </div>
        </div>

      
      
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>
</div>@endsection