<!DOCTYPE html>
<html>
<head>
	<title>Yığıncaqlar</title>
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
			<a href="{{url('meeting-admin')}}" class="sagirdButton btn">Geri</a>
			
			<h1>YIĞINCAQ HAQQINDA</h1>
			<strong>Nömrə: {{$meeting->id}}</strong>
			<br>
			<strong>Ad: {{$meeting->name}}</strong>
			<br>
			<strong>Məzmun: {{$meeting->about}}</strong>
			<br>
			<strong>Sinif: {{$meeting->sinif_id}}</strong>
			<br>
			<strong>Yığıcaq tarixi: {{$meeting->time}}</strong>
			<br>
		</div>
	</div>
</div>
</body>
</html>