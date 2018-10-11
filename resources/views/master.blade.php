<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Customer</title>
        <link rel="stylesheet" href="{{ url('public/dist/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{ url('public/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ url('public/assets/css/custom.css')}}">
		<script src="{{ url('public/assets/js/jquery-3.2.1.js')}}"></script>
		<script src="{{ url('public/assets/js/tableHeadFixer.js')}}"></script>
		<script src="{{ url('public/dist/js/bootstrap.min.js')}}"></script>
    </head>
    <body>
    	<div class="wrapper">
            <header class="" style="max-height: 100%; max-width: 100%">
                <img src="http://localhost:8082/myNextProject/public/assets/images/bg-header.jpg" style="width: 100%; height: 100vh">
            </header>
            <div class="content-wrapper">
               @yield('content')     
            </div>
        </div>
            
        <script src="{{ url('public/assets/plugins/jquery.slimscroll.min.js')}}"></script>
		<script src="{{ url('public/assets/js/custom.js')}}"></script>
        
    </body>
</html>
