@extends('layouts.app')
@section('title', 'Registration')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">Pageant Registration Form</div>
                    {{--                {{dd($mwApplicant)}}--}}

                    <div class="card-body">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{session()->get('success')}}
                            </div>

                        @endif
                        <form method="POST" action="{{ route('update.register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <!----------Row Start---------->
                                <div class="form-group col-md-6">
                                    <label for="name" class="col-form-label text-md-right">{{ __('First Name') }}<span
                                            class="text-danger">*</span></label>

                                    <div class="">
                                        <input id="First_Name" type="text"
                                               class="form-control @error('first_name') is-invalid @enderror"
                                               name="first_name"
                                               value="{{ $mwApplicant ? $mwApplicant['first_name'] ?? '' :  old('first_name') }}"
                                               autocomplete="name" autofocus>

                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email" class="col-form-label">{{ __('Last Name') }}<span
                                            class="text-danger">*</span></label>
                                    <input id="last_name" type="text"
                                           class="form-control @error('last_name') is-invalid @enderror"
                                           name="last_name"
                                           value="{{ $mwApplicant ? $mwApplicant->last_name ?? '' :  old('last_name') }}"
                                           autocomplete="last_name">
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <!----------Row End---------->

                                <!----------Row Start---------->
                                <div class="form-group col-md-6">
                                    <label for="name" class="col-form-label text-md-right">{{ __('Date of Birth') }}
                                        <span class="text-danger">*</span></label>

                                    <div class="">
                                        <input id="date_of_birth" type="date" min="1995-01-01" max="2004-12-31"
                                               class="form-control @error('date_of_birth') is-invalid @enderror"
                                               name="date_of_birth"
                                               value="{{ $mwApplicant ? $mwApplicant->date_of_birth ?? '':old('date_of_birth') }}"
                                               autocomplete="date_of_birth" autofocus>

                                        @error('date_of_birth')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone" class="col-form-label">{{ __('Mobile Number') }}<span
                                            class="text-danger">*</span></label>
                                    <input id="mobile_no" type="tel" placeholder="01911515151"
                                           class="form-control @error('mobile_no') is-invalid @enderror"
                                           name="mobile_no"
                                           value="{{ $mwApplicant ? $mwApplicant->mobile_no ?? '' :  old('mobile_no') }}"
                                           autocomplete="mobile_no">
                                    <!--pattern="01[56789]{1}[0-9]{8}"-->
                                    @error('mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror

                                </div>
                                <!----------Row Start---------->

                                <!----------Row Start---------->
                                <div class="form-group col-md-6">
                                    <label for="height" class="col-form-label text-md-right">{{ __('Height') }}<span
                                            class="text-danger">*</span></label>

                                    <div class="">

                                        @php
                                            $heights=["5.1","5.2","5.3","5.4","5.5","5.6","5.7","5.8","5.9","5.10","5.11","6.0","6.1", "6.2","6.3","6.4","6.5","6.6","6.7","6.8","6.9","6.10","6.11","7.0"]
                                        @endphp
                                        <select class="form-control @error('height') is-invalid @enderror" name="height"
                                                id="height">
                                            <option value="">Select Height</option>
                                            @foreach($heights as $height)
                                                <option
                                                    value="{{$height}}" {{$mwApplicant?$mwApplicant->height??'':(old('height')==$height ? "selected":"")}}>{{$height}}</option>
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
                                    <label for="weight" class="col-form-label">{{ __('Weight') }}<span
                                            class="text-danger">*</span></label>
                                    <input id="weight" placeholder="50.5" type="text"
                                           class="form-control @error('weight') is-invalid @enderror" name="weight"
                                           value="{{ old('weight') }}" autocomplete="weight">
                                    @error('weight')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror

                                </div>
                                <!----------Row Start---------->
                                <!----------Row Start---------->
                                <div class="form-group col-md-6">
                                    <label for="nid" class="col-form-label text-md-right">{{ __('National ID') }}<span
                                            class="text-danger">*</span></label>

                                    <div class="">
                                        <input id="nid" type="number"
                                               class="form-control @error('nid') is-invalid @enderror" name="nid"
                                               value="{{$mwApplicant ? $mwApplicant->nid??'': old('nid') }}"
                                               autocomplete="nid" autofocus>

                                        @error('nid')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Passport_no" class="col-form-label">{{ __('Passport No') }}<span
                                            class="text-danger">*</span></label>
                                    <input id="passport_no" type="text"
                                           class="form-control @error('passport_no') is-invalid @enderror"
                                           name="passport_no"
                                           value="{{$mwApplicant?$mwApplicant->passport_no??'': old('passport_no') }}"
                                           autocomplete="passport_no">
                                    @error('passport_no')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror

                                </div>
                                <!----------Row Start---------->
                                <!----------Row Start---------->
                                <div class="form-group col-md-6">
                                    <label for="Upload Close Up Photo"
                                           class="col-form-label text-md-right">{{ __('Upload Close Up Photo') }}<span
                                            class="text-danger">*</span></label>

                                    <div class="">
                                        <img height="150" width="150" id="close_up_preview"
                                             src="{{asset('images/blank.png')}}">
                                        <input id="close_up_photo" type="file"
                                               class="form-control @error('close_up_photo') is-invalid @enderror"
                                               name="close_up_photo"
                                               value="{{$mwApplicant ? $mwApplicant->close_up_photo??'': old('close_up_photo') }}"
                                               autocomplete="nid" autofocus>

                                        @error('close_up_photo')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Upload Mid Shot Photo"
                                           class="col-form-label">{{ __('Upload Mid Shot Photo') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="side_view">


                                    </div>
                                    <img width="150" height="150" id="mid_shot_preview"
                                         src="{{asset('/images/blank.png')}}" ">
                                    <input accept="image/*" id="mid_shot_photo" type="file"
                                           class="form-control @error('mid_shot_photo') is-invalid @enderror"
                                           name="mid_shot_photo"
                                           value="{{$mwApplicant?$mwApplicant->mid_shot_photo??'': old('mid_shot_photo') }}"
                                           autocomplete="mid_shot_photo">

                                    @error('mid_shot_photo')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror

                                </div>
                                <!----------Row Start---------->
                                <!----------Row Start---------->
                                <div class="form-group col-md-6">
                                    <label for="Upload Full Length Photo"
                                           class="col-form-label text-md-right">{{ __('Upload Full Length Photo') }}
                                        <span class="text-danger">*</span></label>

                                    <div class="">
                                        {{--                                        {{dd($mwApplicantImageVidoes[0]->full_length_photo)}}--}}
                                        {{--                                        {{$mwApplicantImageVidoes ?$mwApplicantImageVidoes['full_length_photo']:'blankl'}}--}}

                                        <img height="150" width="150" id="full_length_photo_preview"
                                             src="{{ $mwApplicantImageVidoes && $mwApplicantImageVidoes->full_length_photo  ? asset('storage/'.$mwApplicantImageVidoes->full_length_photo)  : asset('images/blank.png')}}">
                                        <input id="full_length_photo" type="file"
                                               class="form-control @error('full_length_photo') is-invalid @enderror"
                                               name="full_length_photo"
                                               value="{{$mwApplicant ? $mwApplicant->full_length_photo??'': old('full_length_photo') }}"
                                               autocomplete="full_length_photo" autofocus>

                                        @error('full_length_photo')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Upload Video" class="col-form-label">{{ __('Upload Video') }}<span
                                            class="text-danger">*</span></label>

                                    <input id="video" type="file"
                                           class="form-control @error('video') is-invalid @enderror" name="video"
                                           value="{{$mwApplicant?$mwApplicant->video??'': old('video') }}"
                                           autocomplete="video">
                                    @error('video')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror

                                </div>
                                <!----------Row Start---------->
                                <!----------Row Start---------->
                                <div class="form-group col-md-6">
                                    <label for="Division" class="col-form-label text-md-right">{{ __('Division') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="">
                                        <select class="form-control @error('division_id') is-invalid @enderror"
                                                name="division_id" id="division_id" onchange="getDistricts(this.value)">
                                            <option value="" disabled selected>Select Division</option>
                                            @foreach($divisions as $division)
                                                <option
                                                    value="{{$division['id']}}" {{  !empty($mwApplicantAddress) && $division['id'] == $mwApplicantAddress->division_id ? 'selected': '' }}>{{$division->name}}</option>
                                            @endforeach
                                        </select>

                                        @error('full_length_photo')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Upload Video" class="col-form-label">{{ __('Upload Video') }}<span
                                            class="text-danger">*</span></label>
                                    <input id="video" type="file"
                                           class="form-control @error('video') is-invalid @enderror" name="video"
                                           value="{{$mwApplicant?$mwApplicant->video??'': old('video') }}"
                                           autocomplete="video">
                                    @error('video')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror

                                </div>
                                <!----------Row Start---------->
                                <!----------Row Start---------->
                                <div class="form-group col-md-6">
                                    <label for="Division" class="col-form-label text-md-right">{{ __('District') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="">
                                        <select class="form-control @error('division') is-invalid @enderror"
                                                name="district_id" id="district_id">
                                            <option value="" disabled selected>Select District</option>
                                        </select>

                                        @error('full_length_photo')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Division" class="col-form-label text-md-right">{{ __('Upazilla') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="">
                                        <select class="form-control @error('upazilla_id') is-invalid @enderror"
                                                name="upazilla_id" id="upazilla_id">
                                            <option value="" disabled selected>Select Upazilla</option>
                                            @foreach($divisions as $division)
                                                <option
                                                    value="{{$division['id']}}" {{  !empty($mwApplicantAddress) && $division['id'] == $mwApplicantAddress->division_id ? 'selected': '' }}>{{$division->name}}</option>
                                            @endforeach
                                        </select>

                                        @error('full_length_photo')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
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

    <script type="text/javascript">
        // let districtDiv = $('#district_id');
        // console.log(districtDiv)


        // let districtDiv = $('#district_id');
        // console.log(districtDiv)


        // let user = {
        //     name: 'shuvo',
        //     age: 20,
        //     id: 1
        // }
        //
        // let {name} = user;
        //
        // console.log(name)
        // let a=['a','b','c'];
        // let [name]=a;
        // console.log(name);


        mid_shot_photo.onchange = () => {
            const [file] = mid_shot_photo.files
            if (file) {
                mid_shot_preview.src = URL.createObjectURL(file)
            }
        }

        close_up_photo.onchange = () => {
            const [file] = close_up_photo.files
            if (file) {
                close_up_preview.src = URL.createObjectURL(file)
            }
        }

        full_length_photo.onchange = () => {
            const [file] = full_length_photo.files
            if (file) {
                full_length_photo_preview.src = URL.createObjectURL(file)
            }
        }


        function getDistricts(value) {
            // alert(value);
            // console.log('fun', value)
            let districtDiv = $('#district_id');

            $.ajax({
                url: `/get-district/${value}`, //  url: '/get-district/'+ event.value,
                type: 'GET',
                dataType: 'JSON',
                success: function (data) {
                    let selectOption = [];
                    data.forEach(function (district) {
                        // console.log(district);
                        selectOption.push(`<option value="${district.id}">${district.name}</option>`);
                    })

                    districtDiv.html('');
                    districtDiv.html(selectOption);
                }
            });
        }

        let value = "{{ $mwApplicantAddress ? $mwApplicantAddress->division_id : '' }}";

        setTimeout(() => {
            getDistricts(value);
        }, 500)


    </script>
@endsection
