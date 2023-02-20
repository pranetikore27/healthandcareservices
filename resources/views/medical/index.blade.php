@extends('layouts.dashboard')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Medicals</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('medicals.create') }}"> Create New medical</a>
               
                
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
          
            <th>Number</th>
            <th>start time</th>
            <th>End Time</th>
            <th>URl</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
	    @foreach ($medicals as $medical)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $medical->Medical_name }}</td>
	        <td>{{ $medical->Medical_email_id }}</td>
            <td>{{ $medical->Medical_address }}</td>
	        <td>{{ $medical->Medical_city }}</td>
            
	        <td>{{ $medical->Medical_mobile_number }}</td>
            <td>{{ $medical->Medical_start_time }}</td>
            <td>{{ $medical->Medical_end_time }}</td>
	        <td>{{ $medical->Medical_website_URl }}</td>
             
            <td>
    
    @if($medical->Medical_status == 0)
    <label class="badge badge-danger"> inactive </label>
    @elseif($medical->Medical_status == 1)
    <label class="badge badge-success"> active </label>
    @endif

</td>
	        <td>
                
                <form action="{{ route('medicals.destroy',$medical->Medical_id) }}" method="POST">
                
                    
                   
                    <a class="btn btn-info" href="{{ route('medicals.edit',$medical->Medical_id) }}">Edit</a>
                


                    @csrf
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-danger">change status</button>
               
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


   


<p class="text-center text-primary"><small>Health and Care Services</small></p>
@endsection