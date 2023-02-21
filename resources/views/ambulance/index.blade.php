@extends('layouts.dashboard')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ambulances</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('ambulances.create') }}"> Create New ambulance</a>
               
                
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
            <th>Number</th>
         
            <th>address</th>
            <th>city</th>

        </tr>
	    @foreach ($ambulances as $ambulance)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $ambulance->Ambulance_name }}</td>
	        <td>{{ $ambulance->Ambulance_mobile_number }}</td>
            <td>{{ $ambulance->Ambulance_address }}</td>
	        <td>{{ $ambulance->Ambulance_city }}</td>
             
            <td>
    
    @if($ambulance->Ambulance_status == 0)
    <label class="badge badge-danger"> inactive </label>
    @elseif($ambulance->Ambulance_status == 1)
    <label class="badge badge-success"> active </label>
    @endif

</td>
	        <td>
                
                <form action="{{ route('ambulances.destroy',$ambulance->Ambulance_id) }}" method="POST">
                
                    
                   
                    <a class="btn btn-info" href="{{ route('ambulances.edit',$ambulance->Ambulance_id) }}">Edit</a>
                


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