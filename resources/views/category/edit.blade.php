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
    <form method='POST' action="{{route('category.update',$encrypted)}}" enctype="multipart/form-date">
@method('PATCH')
{{csrf_field()}}
<div class="col-xs-12 col-sm-12 col-md-12">
      <?php 
       $Category_field_names = new SplFixedArray($VarCategory->Category_field_count); 
       $fields = $VarCategory->Category_field_count; 
       ?>
       <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
              <strong>Adding </strong>
              <input class="form-control" type="text" name='Category_field_count'
              value='{{$VarCategory->Category_field_count}}'
              required>      to {{$VarCategory->Category_name}}      
            </div>
          </div>
        </div>

       @for($i=0; $i<$fields; $i++)
       <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
              <strong>Add field name:</strong>
              <input class="form-control" type="text" name='Category_field_names[{{$i}}]'
              required>            
            </div>
          </div>
        </div>
       @endfor
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>
</div>@endsection