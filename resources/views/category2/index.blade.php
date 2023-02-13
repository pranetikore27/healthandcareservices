@extends('layouts.dashboard')
@section('content') 

<div class="page-container">
                    <div class="container-fluid">
                        <div class="page-content-wrapper d-flex flex-column">
                            <a href="{{url('categories/create')}}">
                            <h1 class="font-size-h4 mb-4 font-weight-normal">Add new category</h1>
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
                  <th>Category name</th>
             
                  <th>Status</th>
                  
                  
                  <th>Action</th>
                </tr>
            </thead>
            @foreach($varCategory as $row)
            <tr>
              <th>{{$loop->iteration}}</th>
              <td>{{$row->Category_name}}</td>
              
             
              
              
              <td>
    
              @if($row->Category_status == 0)
              <label class="badge badge-danger"> inactive </label>
              @elseif($row->Category_status == 1)
              <label class="badge badge-success"> active </label>
              @endif
    
    </td>
             
    <td>
                        
        <?php 
            $encrypted = Crypt::encrypt($row->Category_id);
        ?>
             <a class="btn btn-info" href="{{ route('categories.edit',$encrypted) }}">Edit</a>    

        
        <form action="{{ route('categories.destroy',$encrypted) }}" method="Post">
                            @csrf
                            @method('DELETE')
                        @if($row->Category_status == 1)
                            <input type='submit' class="btn btn-danger " name='submit' value="{{ __('Deactivate')}}">
                        @else
                            <input type='submit' class="btn btn-primary " name='submit' value="{{ __('Activate')}}">
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