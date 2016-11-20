<!DOCTYPE html>
<html>
<head>
	<title>Şagirdlər</title>
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
		img{
			height: 150px;
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
			<a href="{{url('derscedveli')}}" class="sagirdButton btn">Bütün siniflər</a>
			<a href="{{url('sinifyarat')}}" class="sagirdButton btn">Sinif yarat</a>
			<a href="{{url('derscedveli')}}" class="sagirdButton btn">Geri</a>
			
			<h1>SİNİF HAQQINDA</h1>

			<strong>Nömrə: {{$sinif->id}}</strong>
			<br>
			<strong>Ad: {{$sinif->text}}</strong>
			<br>
			<strong>Dərs cədvəli:</strong>
			<?php
				$list=explode("/",$sinif->ders_cedveli);
			?>
			<table class="bluetable table table-striped">
				<tr>
					<td>Bazar ertəsi</td>
					<td>{{$list[1]}}</td>
				</tr>

				<tr>
					<td>Çərşənbə axşamı</td>
					<td>{{$list[2]}}</td>
				</tr>

				<tr>
					<td>Çərşənbə</td>
					<td>{{$list[3]}}</td>
				</tr>

				<tr>
					<td>Cümə axşamı</td>
					<td>{{$list[4]}}</td>
				</tr>

				<tr>
					<td>Cümə</td>
					<td>{{$list[5]}}</td>
				</tr>


				<tr>
					<td>Şənbə</td>
					<td>{{$list[6]}}</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>