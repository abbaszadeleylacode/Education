<!DOCTYPE html>
<html>
<head>
@php
use App\valideynler;
use App\sagird;
@endphp
	<title>Əlaqə</title>
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
		img{
			height: 300px;

		}
		.bluetable{
			z-index: 1;
		}
		.axtar{
			margin-top: 30px;
			padding:5px;
			border:2px solid #0AAAE7;
			border-radius: 2px;
			margin-left: 5px;
			background: none;
		}
		.mesajYaz{
			box-shadow: 1px 1px 9px black;
			margin:0;
			display: none;
			position: fixed;
			bottom:20px;
			right: 20px;
			z-index: 2;
			background: white;

		}
			.mesajYaz .header{
				background: #0AAAE7;
				color:white;
			}
				.mesajYaz .header p{
					font-size: 17px;
					padding:5px;
					display: inline-block;
					margin:0;
				}

				.mesajYaz .header i{
					margin-top: 10px;
					margin-right:10px;
				}
			.mesajYaz .content .input{
				border:none;
				border-bottom:1px solid #CFCFCF;
				margin-top: 10px;
			}

		.profile{
			margin-top: 30px;
			height: 300px;
			width: 300px;
			border-radius: 100%;
			padding:2px;
		}

		@media(max-width: 991px){
			.col-md-8{
				text-align: center;
			}
		}
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		@php
		$valideyn=valideynler::find($_SESSION['valideynID']);
		$sagird=sagird::find($valideyn->sagird_id);
		@endphp

		<div class="logo col-md-12">
			<img src="{{url('assets/images/logo.png')}}" alt="">
			<a href="{{url('valideyn-panel/logout')}}">Çıxış et</a>
		</div>
		
		<div class="container">
			<a href="{{url('imtahanlar-valideyn')}}" class="btn sagirdButton">İmtahanlar</a>
			<a href="{{url('meeting-valideyn')}}" class="btn sagirdButton">Yığıncaqlar</a>
			<a href="{{url('sinif-valideyn')}}" class="btn sagirdButton">Sinif</a>
			<a href="{{url('elaqe-valideyn')}}" class="btn sagirdButton">Əlaqə</a>
			<div class="col-md-4 text-center">
				<div class="row">
					<img src="{{$sagird->avatar}}" class="profile">
					<h3>{{$sagird->name.' '.$sagird->surname}}</h3>
					<i>Şagird</i>
				</div>
			</div>

			<div class="col-md-8 text-right">
				<h2>Şəxsi Məlumatlar</h2>
				<p>Ad:{{$sagird->name}}</p>
				<p>Soyad:{{$sagird->surname}}</p>
				<p>Ata adı:{{$sagird->ata_adi}}</p>
				<p>Şəhər:{{$sagird->city}}</p>
				<p>Ünvan:{{$sagird->address}}</p>

				<p>E-poçt ünvanı:{{$sagird->email}}</p>
				<p>Telefon:{{$sagird->phone}}</p>
				<p>Təvəllüd:{{$sagird->age}}</p>
				<p>Sinif:{{$sagird->sinif_id}}</p>
				<p>Qayıb sayı:{{$sagird->qayib}}</p>
			</div>
		</div>	
	</div>
</body>
</html>