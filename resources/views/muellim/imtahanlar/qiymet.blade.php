<!DOCTYPE html>
<html>
<head>
	<title>Qiymətləndirmə</title>
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
			width: 300px;
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
			<a class="btn btn-info" href="{{url('muellim-panel/logout')}}">Çıxış et</a>
		</div>
		
		<div class="container">
			<a href="{{url('imtahanlar-muellim')}}" class="sagirdButton btn">Geri</a>
			
			<h1>ŞAGİRD HAQQINDA</h1>

			<img src="../../{{$sagird->avatar}}" class="pull-right img img-responsive profile">
			<strong>Nömrə: {{$sagird->id}}</strong>
			<br>
			<strong>Ad: {{$sagird->name}}</strong>
			<br>
			<strong>Soyad: {{$sagird->surname}}</strong>
			<br>
			<strong>Ata adı: {{$sagird->ata_adi}}</strong>
			<br>
			<strong>Yaş: {{$sagird->age}}</strong>
			<br>
			<strong>Sinif: {{$sagird->sinif_id}}</strong>
			<br>
			<strong>Ünvan: {{$sagird->address}}</strong>
			<br>
			<strong>Qayıb: {{$sagird->qayib}}</strong>
			<br>
			<strong>E-poçt ünvanı: {{$sagird->email}}</strong>
			<br>
			<strong>Telefon: {{$sagird->phone}}</strong>
			<br>
			<strong>Qiymət:	
				<form action="{{url('qiymet-save')}}" enctype="multipart/form-data" method="post">
					<input class="hidden" type="text" value="" name="id">
					<input type="number" class="form-control" name="qiymet" style="width: 200px">
					<br>
					<input type="submit" class="btn btn-success">

					<input type="hidden" value="{{$id}}" name="id">
					<input type="hidden" value="{{$sd}}" name="sd">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
				</form>
			</strong>
		</div>
	</div>
</div>
</body>
</html>