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
                                    <button type="button" class="btn btn-secondary btn-sm rounded-0 ml-1"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm rounded-0 ml-1"><i class="fas fa-trash"></i></button>
                                  </div>   
                            </td>    
                        </tr> 
                     @endforeach
                     
                  </tbody>
                </table>
            </div>
       </div>
   </div>
</div>
@endsection