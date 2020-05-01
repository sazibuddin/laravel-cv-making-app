@extends('layouts.user.layout')
@section('content')
<div class="card mt-4">
    <div class="card-header"><h4>Edit this education information</h4></div>

    <div class="card-body">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
     @if(session()->has('failed'))
            <div class="alert alert-danger">
                {{ session()->get('failed') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ url('user/update/educational/'.$item->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="education_level">Level of Education</label>
                                <select id="education_level" name="education_level" class="form-control rounded-0 @error('education_level') border-danger @enderror">
                                    <option selected disabled>Select a level</option>
                                    <option value="PSC">PSC/5 pass</option>
                                    <option value="JSC/JDC/8">JSC/JDC/8 </option>
                                    <option value="Secondary">Secondary</option>
                                    <option value="Higher Secondary">Higher Secondary</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Bachelor/Honors">Bachelor/Honors</option>
                                    <option value="Masters">Masters</option>
                                    <option value="PhD (Doctor of Philosophy)">PhD (Doctor of Philosophy)</option></select>
                                </select>
                                @error('education_level')
                                <span class="input-error">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="degree_title">Degree Title:</label>
                                <input type="text" class="form-control  @error('degree_title') border-danger @enderror" id="degree_title" name="degree_title" value="{{ $item->degree_title }}">
                                @error('degree_title')
                                <span class="input-error">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="result">Result</label>
                                <input type="text" class="form-control  @error('result') border-danger @enderror" id="result" name="result" value="{{ $item->result }}">
                                @error('result')
                                <span class="input-error">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="passing_year">Year of passing</label>
                                <input type="text" class="form-control  @error('passing_year') border-danger @enderror" id="passing_year" name="passing_year" value="{{ $item->passing_year }}">
                                @error('passing_year')
                                <span class="input-error">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="board_name">Board name</label>
                                {{-- <input type="text" > --}}
        
                                <select class="form-control  @error('board_name') border-danger @enderror" id="board_name" name="board_name">
                                    <option selected disabled>Select One</option>
                                    <option value="barisal">Barisal</option>
                                    <option value="chittagong">Chittagong</option>
                                    <option value="comilla">Comilla</option>
                                    <option value="dhaka">Dhaka</option>
                                    <option value="dinajpur">Dinajpur</option>
                                    <option value="jessore">Jessore</option>
                                    <option value="mymensingh">Mymensingh</option>
                                    <option value="rajshahi">Rajshahi</option>
                                    <option value="sylhet">Sylhet</option>
                                    <option value="madrasah">Madrasah</option>
                                    <option value="tec">Technical</option>
                                    <option value="dibs">DIBS(Dhaka)</option>
                                    </select>
        
        
                                @error('board_name')
                                <span class="input-error">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group>
                                <label for="institute_name">Institute name</label>
                                <input type="text" class="form-control  @error('institute_name') border-danger @enderror" id="institute_name" name="institute_name" value="{{ $item->institute_name }}">
                                @error('institute_name')
                                <span class="input-error">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-success rounded-0" value="Save">
                            </div>
                        </div>
                     
                    </div>
            </form>
            </div>
        </div>

    </div>
</div>

@endsection