<!DOCTYPE html>
<html>
<head>
	<title>Müəllim</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{url('assets/vendor/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{url('assets/vendor/font-awesome/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/admin.css')}}">
	<script src="{{url('assets/vendor/jquery-3.1.1.min.js')}}"></script>
	<style>
		.sagirdButton{
			margin-top: 30px;
		}
		strong{
			font-size: 17px;
		}
		.profile{
			height: 300px;
			border-radius: 100%;
			margin-top: -50px;
		}
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">


		<div class="logo col-md-12">
			<img src="{{url('assets/images/logo.png')}}">
		</div>
		
		<div class="container">
			<a href="{{url('muellimsiyahisi-sagird')}}" class="sagirdButton btn">Geri</a>
			
			<h1>MÜƏLLİM HAQQINDA</h1>

			<img src="../{{$muellim->avatar}}" class="pull-right img img-responsive profile">
			<strong>Nömrə: {{$muellim->id}}</strong>
			<br>
			<strong>Ad: {{$muellim->name}}</strong>
			<br>
			<strong>Soyad: {{$muellim->surname}}</strong>
			<br>
			<strong>Fənn: {{$muellim->fenn}}</strong>
			<br>
			<strong>E-poçt ünvanı: {{$muellim->email}}</strong>
			<br>
			<strong>Telefon: {{$muellim->phone}}</strong>
		</div>
	</div>
</div>
</body>
</html>