@extends('layouts.dashboard')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Services you provide</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('service.create') }}"> Register new service</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table id="example" class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Service_name</th>
   <th>Service_description</th>
   <th>Service_charge</th>
   <th>Service_validity</th>
   <th>Service_isactive</th>
   <th>created_at</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($services as $key => $s)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $s->name }}</td>
    <td>{{ $s->email }}</td>
    <td>
      
    </td>
    <td>
       <a class="btn btn-info" href="{{ route('services.show',$s->id) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('services.edit',$s->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['services.destroy', $s->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>



<p class="text-center text-primary"><small>Health and Care Services</small></p>
@endsection