@extends('layouts.dashboard')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>locations</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('location.create') }}"> Create New location</a>
               
                @can('location-create')
                <a class="btn btn-success" href="{{ route('locations.create') }}"> Create New location</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($locations as $location)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $location->name }}</td>
	        <td>{{ $location->detail }}</td>
	        <td>
                <form action="{{ route('locations.destroy',$location->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('locations.show',$location->id) }}">Show</a>
                    @can('location-edit')
                    <a class="btn btn-primary" href="{{ route('locations.edit',$location->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('location-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $locations->links() !!}


<p class="text-center text-primary"><small>Health and Care Services</small></p>
@endsection