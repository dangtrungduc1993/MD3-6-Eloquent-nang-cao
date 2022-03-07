{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>Title</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="main-content">--}}
{{--    <h1>Form điền thông tin</h1>--}}
{{--    @if ($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    <form method="post" action="{{ route('store') }}">--}}
{{--        {{ csrf_field() }}--}}
{{--        <label for="number">chỉ được nhập số</label>--}}
{{--        <input type="text" name="number">--}}
{{--        <button type="submit">Kiểm tra</button>--}}
{{--    </form>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}


<h1>Form điền thông tin</h1>

<form method="post" action="{{ route('store') }}">
    {{ csrf_field() }}
    <label for="number">chỉ được nhập số</label>
    <input type="text" name="number" placeholder="number">
    <p style="color: red">{{$errors->has('number')? $errors->first('number'):''}}</p>
    <input type="text" name="name" placeholder="name">
    <p style="color: red">{{$errors->has('name')? $errors->first('name'):''}}</p>

    <button type="submit">Kiểm tra</button>
</form>
{{--@foreach ($errors->all() as $error)--}}
{{--    <li style="color: red">{{ $error }}</li>--}}
{{--@endforeach--}}

{{--@if ($errors->any())--}}
{{--    <div class="alert alert-danger">--}}
{{--        <ul>--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <li style="color: red">{{ $error }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endif--}}
