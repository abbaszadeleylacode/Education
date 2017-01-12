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
			height: 50px;
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
			<a href="{{url('sinifler-muellim',$_SESSION['muellimID'])}}" class="sagirdButton btn">Geri</a>
			
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


			<h1>ŞAGİRDLƏR</h1>

			<table class="bluetable table table-striped">
				<thead>
					<tr>
						<td>Ad</td>
						<td>Soyad</td>
						<td>Ata adı</td>
						<td>Təvəllüd</td>
						<td>Şəhər</td>
						<td>Ünvan</td>
						<td>Şəkil</td>
						<td>E-poçt ünvanı</td>
						<td>Qayıb sayı</td>
						<td>Telefon</td>
						<td>Əməllər</td>
					</tr>
				</thead>
				<tbody>
					@foreach($sagirdler as $sagird)
					<tr>
						<td>{{$sagird->name}}</td>
						<td>{{$sagird->surname}}</td>
						<td>{{$sagird->ata_adi}}</td>
						<td>{{$sagird->age}}</td>
						<td>{{$sagird->city}}</td>
						<td>{{$sagird->address}}</td>
						<td>
							<img src="../{{$sagird->avatar}}" alt="">
						</td>
						<td>{{$sagird->email}}</td>
						<td>{{$sagird->qayib}}</td>
						<td>{{$sagird->phone}}</td>

						<td>
							<a href="{{url('showsagird(muellim)',$sagird->id)}}" class="btn btn-xs btn-default">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('qayib',$sagird->id)}}" class="btn btn-xs btn-danger">
								<i>q</i>
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>

