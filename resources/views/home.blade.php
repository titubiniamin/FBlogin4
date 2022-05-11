@extends('layouts.app')
@section('title', 'Registration')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">Pageant Registration Form</div>


                <div class="card-body">
                    <form method="POST" action="{{ url('UpdateRegister') }}">
                        @csrf
                        <div class="row">


                            <!----------Row Start---------->
                            <div class="form-group col-md-6">
                                <label for="name" class="col-form-label text-md-right">{{ __('First Name') }}<span class="text-danger">*</span></label>

                                <div class="">
                                    <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}"  autocomplete="name" autofocus>

                                    @error('fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email" class="col-form-label">{{ __('Last Name') }}<span class="text-danger">*</span></label>
                                    <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}"  autocomplete="lname">
                                    @error('lname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
                        <!----------Row End---------->

                    <!----------Row Start---------->
                    <div class="form-group col-md-6">
                        <label for="name" class="col-form-label text-md-right">{{ __('Date of Birth') }}<span class="text-danger">*</span></label>

                        <div class="">
                            <input id="dob" type="date" value="" min="1995-01-01" max="2004-12-31" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}"  autocomplete="dob" autofocus>

                            @error('dob')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone" class="col-form-label">{{ __('Phone Number') }}<span class="text-danger">*</span></label>
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>
                        <!----------Row Start---------->

                        <!----------Row Start---------->
                    <div class="form-group col-md-6">
                        <label for="height" class="col-form-label text-md-right">{{ __('Height') }}<span class="text-danger">*</span></label>

                        <div class="">

                            @php
                             $heights=["5.1","5.2","5.3","5.4","5.5","5.6","5.7","5.8","5.9","5.10","5.11","6.0","6.1 or Higher"]
                            @endphp
                            <select class="form-control @error('height') is-invalid @enderror"  name="height" id="height" >
                                    <option value="">Select Height</option>
                                 @foreach($heights as $height)
                                    <option value="{{$height}}" {{old('height')==$height ? "selected":""}}>{{$height}}</option>
                                @endforeach
                            </select>
                            @error('height')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="weight" class="col-form-label">{{ __('Weight') }}<span class="text-danger">*</span></label>
                            <input id="weight" type="text" class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{ old('weight') }}"  autocomplete="weight">
                            @error('weight')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>
                        <!----------Row Start---------->
                     <!----------Row Start---------->
                     <div class="form-group col-md-6">
                        <label for="nid" class="col-form-label text-md-right">{{ __('NID') }}<span class="text-danger">*</span></label>

                        <div class="">
                            <input id="nid" type="text" class="form-control @error('nid') is-invalid @enderror" name="nid" value="{{ old('nid') }}"  autocomplete="nid" autofocus>

                            @error('nid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="passport" class="col-form-label">{{ __('Passport No') }}<span class="text-danger">*</span></label>
                            <input id="passport" type="text" class="form-control @error('passport') is-invalid @enderror" name="passport" value="{{ old('passport') }}"  autocomplete="weight">
                            @error('passport')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>
                        <!----------Row Start---------->



                    </div>

                        <div class="form-group">
                            <div class="d-flex mt-4">
                                <button type="submit" class="w-100 btn btn-success px-2">
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
