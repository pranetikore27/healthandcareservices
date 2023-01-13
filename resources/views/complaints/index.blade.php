@extends('layouts.dashboard')
@section('content') 

<div class="page-container">
                    <div class="container-fluid">
                        <div class="page-content-wrapper d-flex flex-column">
                            <a href="{{url('complaints/create')}}">
                            <h1 class="font-size-h4 mb-4 font-weight-normal">Add new complaints</h1>
                            </a>
                            <div class="page-content">
                                <div class="tabs">
                                    <ul class="nav nav-pills tab-style-01 font-size-lg" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all"
                                               role="tab"
                                               aria-controls="all" aria-selected="true">All categories  </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="table-responsive">
                                    
    <table id="example" id="example">
<thead>
                <tr>
                  <th>Sr no</th>
                  <th>complaints name</th>
                  <th>Status</th>
                  
                  
                  <th>Action</th>
                </tr>
            </thead>
            @foreach($varComplaint as $row)
            <tr>
              <th>{{$loop->iteration}}</th>
              <td>{{$row->Service_name}}</td>
             
              
              
              <td>
    
              @if($row->Complaint_status == 0)
              <label class="badge badge-danger"> Unread </label>
              @elseif($row->Complaint_status == 1)
              <label class="badge badge-success"> Under Review </label>
              @else($row->Complaint_status == 2)
              <label class="badge badge-success"> Resolved </label>
              @endif
    
    </td>
             
    <td>
                        
        <?php 
            $encrypted = Crypt::encrypt($row->Complaint_id);
        ?>
             <!-- <a class="btn btn-info" href="{{ route('complaints.edit',$encrypted) }}">Edit</a>    
 -->
        
        <form action="{{ route('complaints.destroy',$encrypted) }}" method="Post">
                            @csrf
                            @method('DELETE')
                        @if($row->Complaint_status == 1)
                            <input type='submit' class="btn btn-danger " name='submit' value="{{ __('Mark as Resolved')}}">
                        @endif
                     
                        @if($row->Complaint_status == 0)
                            <input type='submit' class="btn btn-info " name='submit' value="{{ __('Send for review')}}">
                        @endif
        </form>
    </td>
            @endforeach
            </table>
    </div>

                                </div>

                            </div>
                            
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
            @endsection