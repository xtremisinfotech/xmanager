<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ env('APP_NAME') }} - Admin | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('admin::layouts.includes.css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin::layouts.includes.top-layout')

        @include('admin::layouts.includes.menubar')

        <div class="content-wrapper">
            @yield('page-header')
            
            @yield('page-content')
        </div>

        @include('admin::layouts.includes.bottom-layout')
    </div>

    @include('admin::layouts.includes.javascript')
</body>

</html>