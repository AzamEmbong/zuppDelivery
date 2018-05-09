@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Profile</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/addProfile') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">Full Name</label>

                            <div class="col-md-6">
                                <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dateOfBirth" class="col-md-4 col-form-label text-md-right">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dateOfBirth" class="form-control{{ $errors->has('dateOfBirth') ? ' is-invalid' : '' }}" name="dateOfBirth" required>

                                @if ($errors->has('dateOfBirth'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('dateOfBirth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="noTel" class="col-md-4 col-form-label text-md-right">No. Tel</label>

                            <div class="col-md-6">
                                <input id="noTel" class="form-control{{ $errors->has('noTel') ? ' is-invalid' : '' }}" name="noTel" required>

                                @if ($errors->has('noTel'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('noTel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <div class="form-group row">
                                <label for="profile_pic" class="col-md-4 col-form-label text-md-right">User Photo</label>
    
                                <div class="col-md-6">
                                    <input id="profile_pic" name="profile_pic" type="file" class="form-control{{ $errors->has('profile_pic') ? ' is-invalid' : '' }}" value="profile_pic"  required>
    
                                    @if ($errors->has('profile_pic'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('profile_pic') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            
                                
                              



    

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>

                    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection