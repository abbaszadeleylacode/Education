<!DOCTYPE html>
<html>
<head>
	<title>Tələblər</title>
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
			width: 300px;
		}
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">


		<div class="logo col-md-12">
			<img src="{{url('assets/images/logo.png')}}">
			<a href="{{url('admin-panel/logout')}}">Çıxış et</a>
		</div>
		
		<div class="container">
			<a href="{{url('telebsiyahisi')}}" class="sagirdButton btn">Geri</a>
			
			<h1>TƏLƏB HAQQINDA</h1>

			<img src="../{{$telebler->photo}}" class="pull-right img img-responsive profile">
			<strong>Nömrə: {{$telebler->id}}</strong>
			<br>
			<strong>Ad: {{$telebler->name}}</strong>
			<br>
			<strong>Soyad: {{$telebler->surname}}</strong>
			<br>
			<strong>Ata adı: {{$telebler->ata_adi}}</strong>
			<br>
			<strong>Yaş: {{$telebler->age}}</strong>
			<br>
			<strong>Sinif: {{$telebler->sinif_id}}</strong>
			<br>
			<strong>Şəhər: {{$telebler->city}}</strong>
			<br>
			<strong>Ünvan: {{$telebler->address}}</strong>
			<br>
			<strong>Vəsiqə №: {{$telebler->passport_no}}</strong>
			<br>
			<strong>E-poçt ünvanı: {{$telebler->email}}</strong>
		</div>
	</div>
</div>
</body>
</html>