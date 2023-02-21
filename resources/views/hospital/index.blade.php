@extends('layouts.dashboard')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Hospitals</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('hospitals.create') }}"> Create New hospitals</a>
               
                
            </div> 
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <div class="table-responsive">
                                    
    <table id="example" id="example">
<thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
          
            <th>features</th>
            <th>start time</th>
            <th>End Time</th>
            <th>URl</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
	    @foreach ($hospitals as $hospital)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $hospital->Hospital_name }}</td>
	        <td>{{ $hospital->Hospital_email_id }}</td>
            <td>{{ $hospital->Hospital_address }}</td>
	        <td>{{ $hospital->Hospital_city }}</td>
            
	        <td>{{ $hospital->Hospital_features }}</td>
            <td>{{ $hospital->Hospital_start_time }}</td>
            <td>{{ $hospital->Hospital_end_time }}</td>
	        <td>{{ $hospital->Hospital_website_URl }}</td>
             
            <td>
    
    @if($hospital->Hospital_status == 0)
    <label class="badge badge-danger"> inactive </label>
    @elseif($hospital->Hospital_status == 1)
    <label class="badge badge-success"> active </label>
    @endif

</td>
	        <td>
                
                <form action="{{ route('hospitals.destroy',$hospital->Hospital_id) }}" method="POST">
                
                    
                   
                    <a class="btn btn-info" href="{{ route('hospitals.edit',$hospital->Hospital_id) }}">Edit</a>
                


                    @csrf
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-danger">Change status</button>
               
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


   


<p class="text-center text-primary"><small>Health and Care Services</small></p>
@endsection