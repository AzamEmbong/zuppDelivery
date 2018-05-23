@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#ce9201 !important"><strong>{{ __('Rider Registration') }}</strong></div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/addRider') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div> --}}
                        <div class="form-group row">
                                <label for="noTel" class="col-md-4 col-form-label text-md-right">{{ __('Telephone No.') }}</label>
    
                                <div class="col-md-6">
                                    <input id="noTel" type="text" class="form-control{{ $errors->has('noTel') ? ' is-invalid' : '' }}" name="noTel" value="{{ old('noTel') }}" required autofocus>
    
                                    @if ($errors->has('noTel'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('noTel') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        <div class="form-group row">
                            <label for="IC" class="col-md-4 col-form-label text-md-right">{{ __('Identification No.') }}</label>

                            <div class="col-md-6">
                                <input id="IC" type="text" class="form-control{{ $errors->has('IC') ? ' is-invalid' : '' }}" name="IC" value="{{ old('IC') }}" required autofocus>

                                @if ($errors->has('IC'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('IC') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="zipcode" class="col-md-4 col-form-label text-md-right">{{ __('Zipcode') }}</label>

                            <div class="col-md-6">
                                <input id="zipcode" type="text" class="form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}" name="zipcode" value="{{ old('zipcode') }}" required autofocus>

                                @if ($errors->has('zipcode'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="vehicle" class="col-md-4 col-form-label text-md-right">{{ __('Vehicle') }}</label>

                            <div class="col-md-6">
                                <input id="vehicle" type="text" class="form-control{{ $errors->has('vehicle') ? ' is-invalid' : '' }}" name="vehicle" value="{{ old('vehicle') }}" required autofocus>

                                @if ($errors->has('vehicle'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('vehicle') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="plateNo" class="col-md-4 col-form-label text-md-right">{{ __('Plate No.') }}</label>

                            <div class="col-md-6">
                                <input id="plateNo" type="text" class="form-control{{ $errors->has('plateNo') ? ' is-invalid' : '' }}" name="plateNo" value="{{ old('plateNo') }}" required autofocus>

                                @if ($errors->has('plateNo'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('plateNo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="profile_pic" class="col-md-4 col-form-label text-md-right">Profile Photo</label>

                            <div class="col-md-6">
                                <input id="profile_pic" name="profile_pic" type="file" class="form-control{{ $errors->has('profile_pic') ? ' is-invalid' : '' }}" value="profile_pic"  required>

                                @if ($errors->has('profile_pic'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('profile_pic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <label for="license" class="col-md-4 col-form-label text-md-right">Driving License</label>

                            <div class="col-md-6">
                                <input id="license" name="license" type="file" class="form-control{{ $errors->has('license') ? ' is-invalid' : '' }}" value="license"  required>

                                @if ($errors->has('license'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('license') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ICFile" class="col-md-4 col-form-label text-md-right">Identification Card</label>

                            <div class="col-md-6">
                                <input id="ICFile" name="ICFile" type="file" class="form-control{{ $errors->has('ICFile') ? ' is-invalid' : '' }}" value="ICFile"  required>

                                @if ($errors->has('ICFile'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ICFile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="profile_pic" class="col-md-4 col-form-label text-md-right">Profile Picture</label>

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
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
