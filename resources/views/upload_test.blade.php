<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>

@error('upload_file')
{{$message}}
@enderror

{{--@if(session()->has('message'))--}}
{{--    <div class="alert alert-success">--}}
{{--        {{ session()->get('message') }}--}}
{{--    </div>--}}
{{--@endif--}}

@if(session('success'))
    <h1>{{session('success')}}</h1>
@endif

<form action="{{url('/upload-test')}}" method="post" enctype="multipart/form-data" >
    @csrf
    <input type="file" name="upload_file" id="">
    <button class="submit">Submit</button>
</form>
</body>
</html>
