@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#ce9201 !important"><strong>
                    Edit Profile</strong></div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/updateProfile',$cus->customer_id) }}" enctype="multipart/form-data">
                       {{method_field('PUT')}}
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">Full Name</label>

                            <div class="col-md-6">
                                <input id="name" value="{{$cus->name}}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="noTel" class="col-md-4 col-form-label text-md-right">No. Tel</label>

                            <div class="col-md-6">
                            <input id="noTel" value="{{$cus->noTel}}" class="form-control{{ $errors->has('noTel') ? ' is-invalid' : '' }}" name="noTel" required>

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
                                    <input id="profile_pic" value="{{$cus->profile_pic}}" name="profile_pic" type="file" class="form-control{{ $errors->has('profile_pic') ? ' is-invalid' : '' }}" value="profile_pic"  required>
    
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