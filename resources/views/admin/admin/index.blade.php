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
                    <th>Email</th>
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
                            
                            <td>{{ $item->email }}</td>    
                            <td>

                                        <a href="{{ url('admin/delete/admin/'.$item->id) }}"class="btn btn-danger btn-sm rounded-0 ml-1" onclick="return confirm('Are you sure want to delte this data ? ')"><i class="fas fa-trash"></i></a>
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