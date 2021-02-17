<!doctype html>
<html lang="en">
<head>
{{--    @dd(asset($setting->favicon))--}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="SHORTCUT ICON" href="{{ asset($setting->favicon) }}" type="image/x-icon" />
    <link rel="ICON" href="{{ asset($setting->favicon) }}" type="image/ico" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Cairo&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap" rel="stylesheet">
    <title>{{ $setting->site_name }}</title>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">


    @include('frontend.includes.head')

</head>
<body>
<div id="app"></div>
<script type="text/javascript">var APP_URL = '{{ (url('/')) }}'</script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>