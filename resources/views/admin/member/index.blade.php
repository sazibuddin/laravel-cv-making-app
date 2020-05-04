@extends('layouts.admin.layout')
@section('admin_content')
<div class="container-fluid">
   <div class="card">
       <div class="card-header">
           All member table
       </div>
       <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                  <tr>
                    <th>SI</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @php
                          $i=0;
                      @endphp
                     @foreach ($users as $item)
                     @php
                         $i++;
                     @endphp
                        <tr>
                            <td>{{ $i }}</td>    
                            <td>{{ $item->name }}</td>    
                            <td><img src="{{ asset(optional($item->personalInfo)->image) }}" alt="image" style="width:50px"></td>    
                            <td>{{ $item->email }}</td>    
                            <td>{{ optional($item->personalInfo)->con_no }}</td>    
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ url('admin/view/user/'.$item->id) }}" class="btn btn-success btn-sm rounded-0"><i class="fas fa-eye"></i></a>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary btn-sm rounded-0 ml-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{ url('admin/edit/educationalInfo/'.$item->id) }}"class="dropdown-item">Edit educational info</a>
                                            <a href="{{ url('admin/edit/experienceInfo/'.$item->id) }}"class="dropdown-item">Edit experience info</a>
                                            <a href="{{ url('admin/edit/personalInfo/'.$item->id) }}"class="dropdown-item">Edit personal info</a>
                                        
                                        </div>
                                      </div>
                                        <a href="{{ url('admin/delete/user/'.$item->id) }}"class="btn btn-danger btn-sm rounded-0 ml-1" onclick="return confirm('Are you sure want to delte this data ? ')"><i class="fas fa-trash"></i></a>
                                  </div>   
                            </td>    
                        </tr> 
                     @endforeach
                  </tbody>
                  {{ $users->links() }}
                </table>
            </div>
       </div>
   </div>
</div>
@endsection