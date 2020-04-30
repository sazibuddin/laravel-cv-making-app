@extends('layouts.admin.layout')
@section('admin_content')
<div class="card m-3">
    <div class="card-header"><h5>Edit experience information</h5></div>
    <div class="card-body">

        @if($user->experienceInfo && $user->experienceInfo->count() > 0)
            @foreach ($user->experienceInfo as $item)
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('update/experienceInfo/'.$item->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="company_name">Company name *</label>
                                        <input type="text" name="company_name" id="company_name " class="form-control @error('company_name') border-danger @enderror" value="{{ $item->company_name }}">
                                        @error('company_name')
                                        <span class="input-error">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="designation">Designation  *</label>
                                <input type="text" name="designation" id="designation" class="form-control @error('designation') border-danger @enderror" value="{{ $item->designation }}">
                                @error('designation')
                                <span class="input-error">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                          <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="department ">Department   *</label>
                                <input type="text" name="department" id="department" class="form-control @error('department') border-danger @enderror" value="{{ $item->department }}">
                                @error('department')
                                <span class="input-error">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="company_locoation ">Company locaton   *</label>
                                    <input type="text" name="company_locoation" id="company_locoation" class="form-control @error('company_locoation') border-danger @enderror" value="{{ $item->company_locoation }}">
                                    @error('company_locoation')
                                    <span class="input-error">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                </div>
                            <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Employment Period  *</label>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <input type="date" name="working_from" id="working_from" class="form-control @error('working_from') border-danger @enderror" value="{{ $item->working_from }}">
                                        @error('working_from')
                                        <span class="input-error">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <input type="date" name="working_to" id="working_to" class="form-control @error('working_to') border-danger @enderror" value="{{ $item->working_to }}">
                                        @error('working_to')
                                        <span class="input-error">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <input type="submit" class="btn btn-success rounded-0" value="Update">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            @endforeach
        @else 
            <div class="alert alert-danger">This user have not experience to edit</div>
        @endif
       
    </div>
</div>
@endsection